<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investment;
use App\Models\Income;
use App\Models\User;
use App\Models\User_trade;
use App\Models\Reward;
use App\Models\Withdraw;
use Illuminate\Support\Facades\URL;
use App\Models\Trade;
use Illuminate\Support\Facades\Http;
use DateTime;
use DateInterval;
use DatePeriod;
use Carbon\Carbon;
use Helper;
use Plisio\PlisioSdkLaravel\Payment;
use Illuminate\Support\Facades\Log;
class Cron extends Controller
{
    
public function __construct()
{
date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
}
public function tradeAmt()
{
  User::where('id','>=',0)->update(['tradeAmt' => 0]);
}


public function releasefund()
{

$allResult=Investment::where('status','Pending')->get();
$todays=Date("Y-m-d");
  User::where('id',1)->update(['name' => 'etriton']);
if ($allResult)
{
 foreach ($allResult as $key => $value)
 {

  $userID=$value->user_id;
   $joining_amt = $value->amount;

  $user_detail=User::where('id',$userID)->first();
  $today=date("Y-m-d");
   $previous_date =date('Y-m-d',(strtotime ( '-1 day' , strtotime ( $today) ) ));

  if ($user_detail)
  {
    
  
    $result=Helper::Gettxninfo($value->transaction_id);
    
    // dd($result);
    if($result['error']=="ok")
    {
    
      if($result['result']['status']>=1)
      {
        $invoice = substr(str_shuffle("0123456789"), 0, 7);

        $income = Investment::where('transaction_id',$value->transaction_id)->update(['status' => 'Active']);
          if ($user_detail->active_status=="Pending")
          {   
          $user_update=array('active_status'=>'Active','adate'=>Date("Y-m-d H:i:s"),'package'=>$value->amount);
          User::where('id',$user_detail->id)->update($user_update);
        \DB::table('general_settings')->where('id',1)->update(['people_online'=>generalDetail()->people_online+1]);
        \DB::table('general_settings')->where('id',1)->update(['our_investors'=>generalDetail()->our_investors+1]);
         }
         else
         {
           $total=$user_detail->package+$value->amount;
            $user_update=array('package'=>$total,'active_status'=>'Active');
          User::where('id',$user_detail->id)->update($user_update); 
         }
                  $amount=  $value->amount;
                  
          \DB::table('general_settings')->where('id',1)->update(['total_fund_invested'=>generalDetail()->total_fund_invested+$amount]);
                //   $plan ='BEGINNER';
                if ($amount>=50 && $amount<=200) 
                   {
                    $plan ='BEGINNER';
                   }
                   elseif($amount>=400 && $amount<=800)
                   {
                    $plan ='STANDARD';
                   }
                   elseif($amount>=1000 && $amount<=2000)
                   {
                    $plan ='EXCLUSIVE';
                   }
                   elseif($amount>=2500 && $amount<=5000)
                   {
                    $plan ='ULTIMATE';
                   }
            
                   elseif($amount>=5000 && $amount<=10000)
                   {
                    $plan ='PREMIUM';
                   }
            
                   elseif($amount>=5000)
                   {
                    $plan ='PREMIUM';
                   }
                   
                  sendEmail($user_detail->email, 'Account Activated -'.siteName(), [
                    'name' => $user_detail->name,
                    'username' => $user_detail->username,
                    'amount' => $value->amount,
                    'plan' => $plan,
                    'date' => date("D, d M Y h:i:s a", strtotime(Date("Y-m-d H:i:s"))),
                    'viewpage' => 'activation',
    
                 ]);
                     
            add_direct_income($user_detail->id,$value->amount);


      }

    }


  }

 }
}




}




public function generate_roi()
{

$allResult=Investment::where('status','Active')->where('roiCandition',0)->get();
$todays=Date("Y-m-d");
$day=Date("l");

if ($allResult)
{

 foreach ($allResult as $key => $value)
 {

  $userID=$value->user_id;
   $joining_amt = $value->amount;
   $plan = $value->plan;
   $startDate = $value->sdate;

  $userDetails=User::where('id',$userID)->where('active_status','Active')->first();
  $today=date("Y-m-d");
   $previous_date =date('Y-m-d',(strtotime ( '-1 day' , strtotime ( $today) ) ));

  if ($userDetails)
  {
     
     
        $total_get=$joining_amt*200/100;
        $total_profit_b = Income::where('user_id', $userID)->sum('comm');
        $total_profit=($total_profit_b)?$total_profit_b:0;
   
          $percent= 2.5;
        
          if ($joining_amt>=50 && $joining_amt<=800) 
           {
            $percent= 2.5;
           }
           elseif($joining_amt>=1000 && $joining_amt<=5000)
           {
            $percent= 3;
           }
         
           
       
       $roi = ($joining_amt*$percent/100);

       $max_income=$total_get;
       $n_m_t = $max_income - $total_profit;
       // dd($total_received);
         if($roi >= $n_m_t)
         {
             $roi = $n_m_t;
         }  
       
      if ($roi>0)
      {

        echo "ID:".$userDetails->username." Package:".$joining_amt." Roi:".$roi."<br>";
         $data['remarks'] = 'Trading Income';
        $data['comm'] = $roi;
        $data['amt'] = $joining_amt;
        $data['invest_id']=$value->id;
        $data['level']=0;
        $data['ttime'] = date("Y-m-d");
        $data['user_id_fk'] = $userDetails->username;
        $data['user_id']=$userDetails->id;
       $income = Income::firstOrCreate(['remarks' => 'Trading Income','ttime'=>date("Y-m-d"),'user_id'=>$userID,'invest_id'=>$value->id],$data);
       add_leadership_bonus($userDetails->id,$roi);
      }
      else
      {
      Investment::where('id',$value->id)->update(['roiCandition' => 1]);
      }
      

  }

 }
 
}




}






  public function managePayout()

    {  

date_default_timezone_set("Asia/Kolkata"); 
//   User::where('id',20)->update(['name' =>'Rameshk']);
    $allResult=User::where('active_status','Active')->orderBy('id','ASC')->cursor();

    if ($allResult) 
    {
       $counter=1;
     foreach ($allResult as $key => $value) 
     {
      
     $userID=$value->id;
     $userName=$value->username;
     $adate_date =$value->adate;
     $balance=$value->balance;


  
     $income =Income::where('user_id',$userID)->sum('comm');
     $withdraw = Withdraw::where('user_id',$userID)->sum('amount');
     
       $balance = round($income-$withdraw,2);
  
    if($balance>0)
    {
    //   echo 'ID: '. $userName." Balance : ".$balance."<br>";   
        

        
        
    // $amountTotal= 5;
    // $transaction['item'] = 'Add wallet'; // invoice number
    // $transaction['amount'] =$amountTotal;
    // $transaction['currency1'] = 'USD';
    // $transaction['currency2'] = 'BNB.BSC';
    // $transaction['buyer_email'] = $value->email;
    // $transaction['success_url'] = URL::to('/user/invest');
    // $resultAarray = Helper::CreateTransaction($transaction);
       
    //   dd($resultAarray);
                   
    }
    
   
     $counter++;   
     }
    } 
    
    
    

}





 public function reward_bonus()
    {  

    $allResult=User::where('active_status','Active')->get();
// print_r($allResult);die;
    if ($allResult) 
    {
     foreach ($allResult as $key => $value) 
     {
      
      $user_id=$value->id;
      $username=$value->username;
      $Power_leg=$value->power_leg;
      $Vicker_leg=$value->vicker_leg;
      
        // $tolteam=$this->my_level_team_count($user_id);
        
        $rightTeam_arr=$this->team_by_position($user_id,'Right');
       $leftTeam_arr=$this->team_by_position($user_id,'Left');
       
       
    //   $total_team=(!empty($tolteam)?count($tolteam):0);
       $rightBusiness=(!empty($rightTeam_arr))?Investment::whereIn('user_id',$rightTeam_arr)->where('status','Active')->sum('amount'):0;
       $leftBusiness=(!empty($leftTeam_arr))?Investment::whereIn('user_id',$leftTeam_arr)->where('status','Active')->sum('amount'):0;
       
       
    //   echo $rightBusiness."<br>";
    //   echo $leftBusiness."<br>";
       
     
     $require_power_bunsess=array('0','1000','3000','7000','20000','40000','80000','160000','320000','640000');
     $require_bonus=array('0','1','3','7','20','40','80','160','320','640');
 
     
     for($p=1;$p<10;$p++)
      {
        $my_gen_busniess=$require_power_bunsess[$p];
  
        $bonus=$require_bonus[$p];
 
        
        $toatal_business=Reward::where('status','Approved')->where('user_id',$user_id)->sum("total_business");
        $total_business=($toatal_business)?$toatal_business:0;
       
        // $power_leg=$my_gen_busniess*50/100;
        // $vicker_leg=$my_gen_busniess*50/100;
        
        // $Require_power_leg=$my_gen_busniess*60/100;
        // $Require_vicker_leg=$my_gen_busniess*40/100;
        
        $check_level=Reward::where('status','Approved')->where('user_id',$user_id)->where('level',$p)->count("id");
        // echo "<br>";
        //  echo $rightBusiness;
        //  echo "<br>";
        //  echo $leftBusiness;
        //  echo "<br>";
        //  echo $p;
        //  echo "<br>"; 
        //  echo "required p".$my_gen_busniess;
        //  echo "<br>"; 
        //  echo "required v".$my_gen_busniess;
        //  echo "<br>";
        if($check_level<=0)
        {
         $goalstatus=( $rightBusiness >= $my_gen_busniess && $leftBusiness >= $my_gen_busniess? 'Achieved':'Pending');
           if ($goalstatus=='Achieved')
               {
                   
                  echo "<br>";
          echo "ID : ".$username."<br>";
          echo "Level : ".$p;
          User::where('id', $user_id)
           ->update([
               'rank' => $p
            ]);
            
            $data['remarks'] = 'Reward Bonus';
            $data['amount'] = $bonus;
            $data['total_business'] = $my_gen_busniess;
            $data['level']=$p;
            $data['tdate'] = date("Y-m-d");
            $data['user_id_fk'] =$username;
            $data['user_id']=$user_id; 
            $data['status']='Approved'; 
          $income = Reward::firstOrCreate(['remarks' => 'Reward Bonus','level'=>$p,'user_id'=>$user_id],$data);   
    
    
               }
               
        }

          
      }
             
     
      
     
     }
    } 

}




public function dailyIncentive()
{


    $allResult=User::where('active_status','Active')->get();
    $todays=Date("Y-m-d");


    if ($allResult)
    {
        foreach ($allResult as $key => $value)
        {
        $userID=$value->id;
        $userName = $value->username;
        $userRank = $value->rank;
        
        $rewardDetail = Reward::where('user_id',$userID)->orderBy('id','DESC')->limit(1)->first();
        
        if($rewardDetail)
        {
           
            $data['remarks'] = 'Royalty Bonus';
            $data['comm'] = $rewardDetail->amount;
            $data['level'] = $rewardDetail->level;
            $data['amt'] = $rewardDetail->amount;
            $data['invest_id']=$rewardDetail->id;
            $data['ttime'] = date("Y-m-d");
            $data['user_id_fk'] = $userName;
            $data['user_id']=$userID; 
          $income = Income::firstOrCreate(['remarks' => 'Royalty Bonus','ttime'=>date("Y-m-d"),'user_id'=>$userID],$data);
           
        }
        
        
   


        }
    }
}




// public function dynamicupicallback()
// {
    
 
  
// //   echo "Hello";
// //   print_r($response);die();
//          $response = file_get_contents('php://input');
//           date_default_timezone_set('Asia/Kolkata');
//           $day=date('l');
//           $todays=date("Y-m-d");
//          $result = json_decode($response, true);
           
//          \DB::table('activities')->insert(['data' =>$response]);  
//          if(!empty($result))
//          {
             
//              if($result['status']=="completed")
//              {
                 
//               $orderId= $result['order_number'];
//               $username= $result['order_name'];
//               $amount= $result['source_amount'];
//               $updateTrue = Investment::where('orderId',$orderId)->where('status','Pending')->update(['status' => 'Active']);
           
//            if($updateTrue)  
//            {
            
//              $user_detail=User::where('username',$username)->first();
//               if ($user_detail->active_status=="Pending")
//               {   
//               $user_update=array('active_status'=>'Active','adate'=>Date("Y-m-d H:i:s"),'package'=>$amount);
//               User::where('id',$user_detail->id)->update($user_update);
//             \DB::table('general_settings')->where('id',1)->update(['people_online'=>generalDetail()->people_online+1]);
//             \DB::table('general_settings')->where('id',1)->update(['our_investors'=>generalDetail()->our_investors+1]);
//              }
//              else
//              {
//                $total=$user_detail->package+$amount;
//                 $user_update=array('package'=>$total,'active_status'=>'Active');
//               User::where('id',$user_detail->id)->update($user_update); 
//              }
                
                  
//              \DB::table('general_settings')->where('id',1)->update(['total_fund_invested'=>generalDetail()->total_fund_invested+$amount]);
//                   $plan ='BEGINNER';
//                 if ($amount>=50 && $amount<=200) 
//                    {
//                     $plan ='BEGINNER';
//                    }
//                    elseif($amount>=400 && $amount<=800)
//                    {
//                     $plan ='STANDARD';
//                    }
//                    elseif($amount>=1000 && $amount<=2000)
//                    {
//                     $plan ='EXCLUSIVE';
//                    }
//                    elseif($amount>=2500 && $amount<=5000)
//                    {
//                     $plan ='ULTIMATE';
//                    }
            
//                    elseif($amount>=5000 && $amount<=10000)
//                    {
//                     $plan ='PREMIUM';
//                    }
            
//                    elseif($amount>=5000)
//                    {
//                     $plan ='PREMIUM';
//                    }
                   
//                   sendEmail($user_detail->email, 'Account Activated -'.siteName(), [
//                     'name' => $user_detail->name,
//                     'username' => $user_detail->username,
//                     'amount' => $amount,
//                     'plan' => $plan,
//                     'date' => date("D, d M Y h:i:s a", strtotime(Date("Y-m-d H:i:s"))),
//                     'viewpage' => 'activation',
    
//                  ]);
                     
//             add_direct_income($user_detail->id,$amount);

                    
//            }
           
                 
//              }
//              else
//              {
//                 if($result['status']=="mismatch" && $result['amount'] >= $result['invoice_total_sum']) 
//                 {
                    
                         
//               $orderId= $result['order_number'];
//               $username= $result['order_name'];
//               $amount= $result['source_amount'];
//               $updateTrue = Investment::where('orderId',$orderId)->where('status','Pending')->update(['status' => 'Active']);
           
//            if($updateTrue)  
//            {
            
//              $user_detail=User::where('username',$username)->first();
//               if ($user_detail->active_status=="Pending")
//               {   
//               $user_update=array('active_status'=>'Active','adate'=>Date("Y-m-d H:i:s"),'package'=>$amount);
//               User::where('id',$user_detail->id)->update($user_update);
//             \DB::table('general_settings')->where('id',1)->update(['people_online'=>generalDetail()->people_online+1]);
//             \DB::table('general_settings')->where('id',1)->update(['our_investors'=>generalDetail()->our_investors+1]);
//              }
//              else
//              {
//                $total=$user_detail->package+$value->amount;
//                 $user_update=array('package'=>$total,'active_status'=>'Active');
//               User::where('id',$user_detail->id)->update($user_update); 
//              }
                
                  
//              \DB::table('general_settings')->where('id',1)->update(['total_fund_invested'=>generalDetail()->total_fund_invested+$amount]);
//                   $plan ='BEGINNER';
//                 if ($amount>=50 && $amount<=200) 
//                    {
//                     $plan ='BEGINNER';
//                    }
//                    elseif($amount>=400 && $amount<=800)
//                    {
//                     $plan ='STANDARD';
//                    }
//                    elseif($amount>=1000 && $amount<=2000)
//                    {
//                     $plan ='EXCLUSIVE';
//                    }
//                    elseif($amount>=2500 && $amount<=5000)
//                    {
//                     $plan ='ULTIMATE';
//                    }
            
//                    elseif($amount>=5000 && $amount<=10000)
//                    {
//                     $plan ='PREMIUM';
//                    }
            
//                    elseif($amount>=5000)
//                    {
//                     $plan ='PREMIUM';
//                    }
//                   add_direct_income($user_detail->id,$amount);
                  
                  
//                   sendEmail($user_detail->email, 'Account Activated -'.siteName(), [
//                     'name' => $user_detail->name,
//                     'username' => $user_detail->username,
//                     'amount' => $amount,
//                     'plan' => $plan,
//                     'date' => date("D, d M Y h:i:s a", strtotime(Date("Y-m-d H:i:s"))),
//                     'viewpage' => 'activation',
    
//                  ]);
                     
          

                    
//            }
           
           
                    
//                 }
//              }
             
//          }
        
            
         
        
           
// }


public function dynamicUpiCallback(Request $request)
{
    try {
        $queryData = $request->query();
        Log::info('Incoming callback data: ' . json_encode($queryData));

        // Save raw JSON
        Activitie::create(['data' => json_encode($queryData)]);

        $validAddresses = [
            "0x8219b89666A71cd53B9B52967A704572eFF19967",
            "TJPhCR5fbJH9fS7ubEQz59FQ4hLbWd9jAh"
        ];

        if (
            in_array($queryData['address_out'], $validAddresses) &&
            $queryData['result'] === "sent" &&
            in_array($queryData['coin'], ['bep20_usdt', 'trc20_usdt'])
        ) {
            $txnId = $queryData['txid_in'];
            $userName = $queryData['refid'];

            $exists = Investment::where('transaction_id', $txnId)->exists();

            if (!$exists) {
                Log::info("Processing new transaction: {$txnId} for user: {$userName}");

                $amount = number_format((float) $queryData['value_coin'], 2, '.', '');
                $blockchain = $queryData['coin'] === 'bep20_usdt' ? 'USDT_BSC' : 'USDT_TRON';

                $user = User::where('username', $userName)->first();
                if (!$user) {
                    return response()->json([
                        'message' => 'User not found',
                        'status' => false,
                    ]);
                }

                $now = Carbon::now();
                $invoice = rand(1000000, 9999999);

                $users = User::where('id',$user->id)->first();
                if ($users->active_status=="Pending")
                 {
                      
                  first_deposit_bonus($users->id,$amount);
                  $user_update=array('active_status'=>'Active','adate'=>Date("Y-m-d H:i:s"),'package'=>$amount);
                User::where('id',$user->id)->update($user_update);
                
                  \DB::table('general_settings')->where('id',1)->update(['people_online'=> generalDetail()->people_online+1]);
                   \DB::table('general_settings')->where('id',1)->update(['our_investors'=> generalDetail()->our_investors+1]);
      
                }
                 else
               {
                $total = $users->package+$amount;
                  $user_update=array('package'=>$total,'active_status'=>'Active',);
                User::where('id',$user->id)->update($user_update); 
               }
              
             

                
                // Insert investment
                Investment::insert([
                    'plan' => 1,
                    'orderId' => $invoice,
                    'transaction_id' => $txnId,
                    'user_id' => $user->id,
                    'user_id_fk' => $user->username,
                    'amount' => $amount,
                    'payment_mode' => $blockchain,
                    'status' => 'Active',
                    'sdate' => $now,
                    'active_from' => $user->username,
                    'created_at' => $now,
                ]);

              

                // Update user balance and status
                $newPackage = $user->package + $amount;

                $updateData = [
                    // 'userbalance' => $newPackage,
                    'active_status' => 'Active',
                ];

                if ($user->active_status === 'Pending') {
                    $updateData['adate'] = $now;
                    $updateData['package'] = $amount;
                } else {
                    $updateData['package'] = $newPackage;
                }

                $user->update($updateData);
                
                   add_direct_income($user->id,$amount);  
                
                    // Log::info("Processing new transaction: {$txnId} for user: {$userName}");
                
              
            }
        }

        return response()->json([
            'message' => 'Callback processed',
            'status' => true,
        ]);
    } catch (\Exception $e) {
        Log::error('UPI Callback Error: ' . $e->getMessage());
        return response()->json([
            'message' => 'Failed',
            'status' => false,
        ]);
    }
}


function expireOldBonusInvestments()
{
    $sevenDaysAgo = Carbon::now()->subDays(7)->toDateString();

    // Get all active "Deposit Bonus" investments older than 7 days
    $investments = Investment::where('active_from', 'Deposit Bonus')
        ->where('status', 'Active')
        ->whereDate('sdate', '<=', $sevenDaysAgo)
        ->get();

    foreach ($investments as $investment) {
        $investment->status = 'Expire';
        $investment->save();

        // Optional: log the change
        Log::info("Bonus expired for investment ID: {$investment->id}, User ID: {$investment->user_id}");
    }
}
        public  function my_binary($userid){
        $arrin=array($userid);
        $ret=array();
        // print_r($arrin);die();
        while(!empty($arrin)){
         $alldown= User::select('id')->whereIn('Parentid',$arrin)->get()->toArray();
         if(!empty($alldown)){
                $arrin = array_column($alldown,'id');
                $ret[]=$arrin;
              
              
            }else{
                $arrin = array();
            } 
        }
        // continue;    
        $final = array();         
        if(!empty($ret)){
            array_walk_recursive($ret, function($item, $key) use (&$final){
                $final[] = $item;
            });
        }

        return $final;
        
    }  

        public  function team_by_position($userid,$position){
        $ret=array();
        $get_position_user=User::where('Parentid',$userid)->where('position',$position)->first();
        if($get_position_user){
        
            $ret=$this->my_binary($get_position_user->id);
            $ret[]=$get_position_user->id;
        }
       
        return $ret;
    }







   public function my_level_team_count($userid,$level=10){
        $arrin=array($userid);
        $ret=array();

        $i=1;
        while(!empty($arrin)){
            $alldown=User::select('id')->whereIn('sponsor',$arrin)->get()->toArray();
            if(!empty($alldown)){
                $arrin = array_column($alldown,'id');
                $ret[$i]=$arrin;
                $i++;


            }else{
                $arrin = array();
            }
        }

        $final = array();
        if(!empty($ret)){
            array_walk_recursive($ret, function($item, $key) use (&$final){
                $final[] = $item;
            });
        }


        return $final;

    }

}

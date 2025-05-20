var mining_save_timeout;


/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_nouislider__ = '';
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_nouislider___default = '';

if ( jQuery && typeof jQuery !== 'undefined' ) {
  jQuery.fn.customSlider = function( config ) {
    var errExtraMsg = ' Please consult the documentation for more information: https://designrevision.com/docs/shards';

    if ( typeof config === 'undefined' ) {
      throw new Error('Shards\'s custom slider component requires a configuration object.' + errExtraMsg);
    }

    var requiredConfigProps = [
      {
        prop: 'start',
        example: 'start: [25, 70]'
      },
      {
        prop: 'range',
        example: 'range: { \'min\': 0, \'max\': 100 }'
      }
    ];

    requiredConfigProps.map(function(requiredProp) {
      if ( typeof config[requiredProp.prop] === 'undefined' ) {
        throw new Error('Shards\'s custom slider component requires a `' + requiredProp.prop + '` property passed in the configuration object. For example: `' + requiredProp.example + '`' + errExtraMsg);
      }
    });

    if ( this.length && this[0] !== undefined ) {
      for ( var i = 0; i < this.length; i++ ) {
        noUiSlider.create(this[i], config);

        var inputs = jQuery(this[i]).find('.custom-slider-input');

        if ( ! inputs.length || inputs.length < config.start.length ) {
          throw new Error('You need to provide a .custom-slider-input for each start value.');
          return;
        }

        var self = this;

        jQuery.each(inputs, function(index, value) {
          // Do not update the extra inputs (if any).
          if ( index === config.start.length ) {
            return;
          }

          // Hook on the update event.
          self[i].noUiSlider.on('update', function( values, handle ) {
            inputs[index].value = values[index];
          });
        });
      }
    }

    return this;
  }
}
					   
// Add slideDown animation to Bootstrap dropdown when expanding.
/*
$('.dropdown').on('show.bs.dropdown', function() {
	$(this).find('.dropdown-menu').first().stop(true, true).slideDown();
});

// Add slideUp animation to Bootstrap dropdown when collapsing.
$('.dropdown').on('hide.bs.dropdown', function() {
	$(this).find('.dropdown-menu').first().stop(true, true).slideUp();
});
*/
function rand(low, high) {
  return Math.random() * (high - low) + low;
}

					   
function check_forms(a){
	if ( a.val() == '' ) {
		a.parents('.form-group').find('label').removeClass('focus');
	} else {
		a.parents('.form-group').find('label').addClass('focus');
	}
}
					   

function clock(){
	var d = new Date();
    var date = new Date(Date.UTC(d.getUTCFullYear(), d.getUTCMonth(), d.getUTCDate(),
 d.getUTCHours(), d.getUTCMinutes(), d.getUTCSeconds())),
        hours = (date.getUTCHours() < 10) ? '0' + date.getUTCHours() : date.getUTCHours(),
        minutes = (date.getUTCMinutes() < 10) ? '0' + date.getUTCMinutes() : date.getUTCMinutes(),
        seconds = (date.getUTCSeconds() < 10) ? '0' + date.getUTCSeconds() : date.getUTCSeconds();
    $('#clock > span.time').html( hours + ':' + minutes + ':' + seconds );
}

function date_to_text(e) {
  return ('0' + e.getDate()).slice(-2)+'.'+('0' + (e.getMonth() + 1)).slice(-2)+'.'+e.getFullYear();
}

function spin2() {
  	var myElm = $(".fa-gift");
	
	function rotate(degrees) {
		myElm.css({
		  '-webkit-transform': 'rotate(' + degrees + 'deg)',
		  '-moz-transform': 'rotate(' + degrees + 'deg)',
		  '-ms-transform': 'rotate(' + degrees + 'deg)',
		  'transform': 'rotate(' + degrees + 'deg)'
		});
	}

	$({
		deg: 0
	  }).animate({
		deg: -15,
	  }, {
		duration: 250,
		easing: "easeOutBounce",
		step: function(now) {
			deg = now;
			rotate(deg);
		}
	  }).animate({
		deg: 15
	  }, {
		duration: 500,
		easing: "easeOutBounce",
		step: function(now) {
			deg = now;
			rotate(deg);
		}
	  }).animate({
		deg: 0,
	  }, {
		duration: 250,
		easing: "easeOutCubic",
		step: function(now) {
			deg = now;
			rotate(deg);
		}
	  });
}

function amount_slider_init() {
  $('.amount_slider')[0].noUiSlider.on('slide', function (value, handle) {
    $('input[name=amount]').val(value);
    calculation();
  });


  $('.amount_slider')[0].noUiSlider.on('start', function (value, handle) {
    $('input[name=amount]').val(value);
  });
  
  $('.days_slider')[0].noUiSlider.on('slide', function (value, handle) {
    $('input[name=days]').val(value);
    calculation();
  });


  $('.days_slider')[0].noUiSlider.on('start', function (value, handle) {
    $('input[name=days]').val(value);
  });

  $('.amount_slider')[0].noUiSlider.on('change', function (value, handle) {

    //alert(value);
  });
  
}

function preloader_animate( i ){
  if (  $('.lds-circle2').is(':visible') ) {
    if ( i >= 6 ) i = 0;
    var b = 6
    $('.lds-circle2').css('background-position', '0 -'+(b*i)+'rem');
    i++;
    setTimeout(preloader_animate, 40, i);
  }
}

$(function() {
	
	
	timerIdGift = setInterval(spin2, 4000);
	
	setInterval(clock, 1000);
	clock();
  
  preloader_animate(1);
  
  setTimeout(function () {
    $('.preloader').fadeOut(400);
  }, 100);
  
  $('body').on('click', 'a:not(._blank)', function() {
    var a = $(this).attr('href');
    
    if ( a != '' && a.indexOf('#') == -1 ) {
      $('.loader').fadeOut(0);
      $('.preloader').fadeIn(100);
      setTimeout(function (a) {
        window.location.href = a;
      }, 100, a);
      return false;
    }
  });
  
  /*
  $( window ).on( "scroll", function() {
    //console.log('scroll: '+$( window ).scrollTop()+'px')
    //$( ".sidebar.sidebar--dark" ).css( "top", $( window ).scrollTop()+'px' );
  } );
  */
  var scrollVal = 0;
  $(window).on('scroll', function() {
    if ( scrollVal > pageYOffset || ( scrollVal < pageYOffset && pageYOffset <= 0 ) ){
      $('nav.navbar.fixed-top').fadeIn(200);
    } else {
      $('nav.navbar.fixed-top').fadeOut(400);
    }
    scrollVal = pageYOffset;
  });
  
  
  
	
	//$('select').selectpicker();
	
  $('body').on('click', '.btn.language', function() {
    var time = 200;
		var ir = $('.index-img.position-relative');
		var ig = $('.index-img.position-absolute');
    var menu = $('.language-dd-menu');
    if ( menu.is(':visible') == false ){
      //alert(img1.css('opacity')+' '+img2.css('opacity'));
      ir.animate({'opacity':1}, time/3);
      menu.fadeIn(time);
      ig.fadeOut(time);
    } else {
      ig.fadeIn(time);
      menu.fadeOut(time);
      ir.animate({'opacity':0}, time*3);
    }
    
	});
  
	$('body').on('click', '.btn_login', function() {
		$('#forgotModal').modal('hide');
		$('#signupModal').modal('hide');
	});
	$('body').on('click', '.btn_signup', function() {
		$('#forgotModal').modal('hide');
		$('#loginModal').modal('hide');
	});
	$('body').on('click', '.btn_forgot', function() {
		$('#signupModal').modal('hide');
		$('#loginModal').modal('hide');
	});
  
  $('a.bs-wizard-dot').click(function() {
    return false;
  })
  
	/*
	$('#loginModal').on('shown.bs.modal', function (e) {
		if ( 'signup' == $(this).data('sub') ) {
			$('#container').addClass('right-panel-active');
		} else{
			$('#container').removeClass('right-panel-active');
		}
	});
	*/
	
	$("a.scrollto").click(function () {
		/*
		elementClick = $(this).attr("href")
		destination = $(elementClick).offset().top;
		$("html:not(:animated),body:not(:animated)").animate({scrollTop: destination+1}, 800);
		return false;
		*/
		let href = $(this).attr('href');

		$('html:not(:animated),body:not(:animated)').stop().animate({
			scrollTop: $(href).offset().top+1
		}, {
			duration: 500,   // по умолчанию «400» 
			easing: "swing" // по умолчанию «swing» 
		});
		return false;
	});
	
	
	$('.form-group input, .form-group textarea').each( function(i, a) {
		check_forms($(this));
	});
	
	$('.form-group').on('focus', 'input, textarea', function() {
		$(this).parents('.form-group').find('label').addClass('focus');
	});
	$('.form-group').on('blur', 'input, textarea', function() {
		check_forms($(this));
	});
	$('.form-group').on('click', 'label', function() {
		var i = $(this).parent('.form-group').find('input').focus();
	});
	
	
	$('#signupModal, #signup').on('submit', 'form', function() {
		var f = $(this);
		var btn = f.find('button[type=submit]');
    
		/*
		grecaptcha.ready(function() {
			grecaptcha.execute(grc_public_key, {action: 'signup'}).then(function(token) {
      */
				$.ajax({
					url: f.attr('action'),
					dataType: 'json',
					type: 'post',
					data: {'data':f.serialize(), 'grc_token':grecaptcha.getResponse(), 'action':'save'},
					beforeSend: function(res) {
						f.find('input').removeClass('is-valid is-invalid').tooltip('dispose');
						new Noty({
							type: 'info',
							text: get_noty_icon(res.status)+tl.Registration_in_progress,
							timeout: 3000,
							progressBar: true,
							theme: 'relax',
							layout: 'topRight',
						}).show();
						btn.prop('disabled', true);
					},
					success: function(res) {
						
						if ( res.status == 'success' ) {
							window.location.href = res.data;
						} else {
              grecaptcha.reset();
							res.text = get_noty_icon(res.status)+res.text;
							btn.prop('disabled', false);
							
							$.each( res.invalid, function( i, v ) {
								f.find('input[name='+i+']').addClass('is-invalid').tooltip({
									html: true,
									placement: 'right',
									template: tooltip_template(['text-danger']),
									title: v
								}).tooltip('enable');
							});
							$.each( res.valid, function( i, v ) {
								f.find('input[name='+v+']').addClass('is-valid');
							});
							//$('[data-toggle="tooltip"]').tooltip(); 
							
						}
						new Noty({
							type: res.status,
							text: res.text,
							timeout: 3000,
							progressBar: true,
							theme: 'relax',
							layout: 'topRight',
						}).show();
					},/*
					complete: function(res) {
						alert(print_r(res.data));
						alert(print_r(res.status));
						alert(print_r(res.text));
					}*/
				});
    /*
			});
		});
    */
		return false;
	});
  
  
	
	$('#loginModal, #login').on('submit', 'form.login', function() {
    auth_process();
		return false;
	});
  
  
  
  $('#login2fa').on('keyup', 'input[name=code2fa]', function() {
    $(this).val( $(this).val().replace(/[^0-9\.]/g, '') );
    submit_2fa_auth();
  });
  
  $('#login2fa').on('submit', 'form.login2fa', function() {
    submit_2fa_auth();
		return false;
	});
  
  
  $('.cookie-alert').on('click', 'button', function() {
    $.ajax({
			url: '/marketing/',
			dataType: 'json',
			type: 'post',
			data: {'data':{'cookie-alert':'true'},'action':'setcookie'},
			success: function(res) {}
		});
    $(this).parents('.cookie-alert').fadeOut(400);
		return false;
	});
	
	$('#forgotModal, #recovery').on('submit', 'form', function() {
	
		var f = $(this);
		var btn = f.find('button[type=submit]');
		
		/*grecaptcha.ready(function() {
			grecaptcha.execute(grc_public_key, {action: 'forgot'}).then(function(token) {
      */
				$.ajax({
					url: f.attr('action'),
					dataType: 'json',
					type: 'post',
					data: {'data':f.serialize(), 'grc_token':grecaptcha.getResponse(), 'action':'go_to_recovery'},
					beforeSend: function(res) {
						new Noty({
							type: 'info',
							text: get_noty_icon(res.status)+tl.Please_wait,
							timeout: 3000,
							progressBar: true,
							theme: 'relax',
							layout: 'topRight',
						}).show();
						btn.prop('disabled', true);
					},
					success: function(res) {
						new Noty({
							type: res.status,
							text: res.text,
							timeout: 3000,
							progressBar: true,
							theme: 'relax',
							layout: 'topRight',
						}).show();
            
            if ( 'error' == res.status ) {
              grecaptcha.reset();
              btn.prop('disabled', false);
              $('#restore_email').val('');
            }
					},
					/*complete: function(res) {
						alert(print_r(res));
					}*/
				});
    /*
			});
		});
    */
		return false;
	});
	
	
	$('body').on('click', '.forgot', function(){
		$('#loginModal').modal('hide');
		//$('body').css('padding-right',0);
	});
	
	
	$(window).resize( function() {
		
	});
	
	
	$('body').on('submit', 'form.promoform', function() {
		var f = $(this);
		var btn = f.find('button[type=submit]');
		var data = {
			'promo_code':f.find('input[name=promo_code]').val(),
		}
		
		$.ajax({
			url: '/promo/',
			dataType: 'json',
			type: 'post',
			data: {'data':data, 'action':'promo_code_activate'},
			beforeSend: function(res) {
				new Noty({
					type: 'info',
					text: '<i class="now-ui-icons loader_gear spin"></i> '+tl.Please_wait,
					timeout: 3000,
					progressBar: true,
					theme: 'relax',
					layout: 'topRight',
				}).show();
				
				btn.html('<i class="now-ui-icons loader_gear spin"></i> '+tl.Please_wait).prop('disabled', true);
			},
			success: function(res) {
				new Noty({
					type: res.status,
					text: res.text,
					timeout: 3000,
					progressBar: true,
					theme: 'relax',
					layout: 'topRight',
				}).show();
				
				btn.html(tl.Activate).prop('disabled', false);
			},
			/*complete: function(res) {
				alert(print_r(res));
			}*/
		});
		
		return false;
	});
	
	
	
  $('#calculation .amount_slider').customSlider({
		start: 1000,
		padding: [0, 0],
		animate: true,
		animationDuration: 300,
		connect: 'lower',
		keyboardSupport: true,
		//tooltips: wNumb({prefix:tl.Power+' ',decimals: 0,suffix: '%'}),
		range: {
			'min': 1,
			'max': 10000
		},
		step:1,
    format: {
        to: function (value) {
          var fixed = ( $('#calculation').find('input[name=invest_currency]').val().indexOf('usd.') == -1 ) ? 8 : 2;
            return value.toFixed(fixed);
        },
        from: function (value) {
            return Number(value.replace(',-', ''));
        }
      }
	});
  
  $('#calculation .days_slider').customSlider({
		start: 100,
		padding: [0, 0],
		animate: true,
		animationDuration: 300,
		connect: 'lower',
		keyboardSupport: true,
		//tooltips: wNumb({prefix:tl.Power+' ',decimals: 0,suffix: '%'}),
		range: {
			'min': 1,
			'max': 365
		},
		step:1,
    format: {
        to: function (value) {
          //var fixed = ( $('#calculation').find('input[name=invest_currency]').val().indexOf('usd.') == -1 ) ? 8 : 2;
            return value.toFixed(0);
        },
        from: function (value) {
            return Number(value.replace(',-', ''));
        }
      }
	});
  
  if ( $('section').is('#calculation') ) {
    amount_slider_init();
    calculation();
  }
  
  $('#calculation').on('keyup', 'input[name=amount],input[name=days]', function() {
    var val = $(this);
    
    val.val(val.val().replace(",", "."));
    val.val(val.val().replace(/[^\d.]/g, ''));
		amount_slider_update(1);
    calculation();
	});
  
  $('#calculation').on('hide.bs.dropdown', '.dropdown-currency.invest_currency', function() {
    amount_slider_update();
    calculation();
	});
  /*
	$('#calculation').on('keyup', 'input', function() {
		calculation();
	});
	*/
	$('#calculation').on('change', 'select', function() {
		calculation();
	});
	
	$('#calculation').on('change', 'input[type=checkbox]', function() {
    var wtf = $('.withdrawal_time_false');
    var wtt = $('.withdrawal_time_true')
    if( $('#installments_check').prop("checked") === true ) {
      $('.installments_div').slideDown(400);
      wtf.addClass('d-none');
      wtt.removeClass('d-none');
    } else {
      $('.installments_div').slideUp(400);
      wtt.addClass('d-none');
      wtf.removeClass('d-none');
    }
		calculation();
	});
  
  $('#calculation').on('click', '.dropdown-item', function() {
    var calc = $('#calculation');
    var dropdown = $(this).parents('.dropdown');
    var val = $(this).attr('data-value');
    var name = dropdown.attr('data-name');
    
    if ( name == 'invest_currency' ) {
      var amount = calc.find('input[name=amount]').val();
		  var old_val = calc.find('input[name='+name+']').val();
      var fixed = ( val == 'usd') ? 2 : 8;
      calc.find('input[name=amount]').val((amount*course[old_val]/course[val]).toFixed(fixed));
      //alert(old_val+' '+course[old_val]+' '+amount+' '+(amount*course[old_val]/course[val]));
    }
    
		calc.find('input[name='+name+']').val(val);
    
    
    
    dropdown.find('.dropdown-item').removeClass('active');
    $(this).addClass('active');
    dropdown.children('button').html( $(this).html() );
		calculation();
		//lvl_calc();
	});
  
  $('#calculation a[data-bs-toggle="tab"]').on('shown.bs.tab', function() {
    amount_slider_update();
    calculation();
  });
  
  
function submit_2fa_auth() {
  var modal = $('#login2fa');
  var f = modal.find('form');
  var code2fa = f.find('input[name=code2fa]')
  var btn = f.find('button[type=submit]');
  var f_serialize = f.serialize();
  
  if ( code2fa.val().length >= 6 ) {
    code2fa.blur().prop('disabled', true);
    btn.prop('disabled', true);
/*
		grecaptcha.ready(function() {
			grecaptcha.execute(grc_public_key, {action: 'check2fa'}).then(function(token) {
*/
				$.ajax({
					url: f.attr('action'),
					dataType: 'json',
					type: 'post',
					data: {'data':f_serialize, 'grc_token':'', 'action':'check2fa'},
					beforeSend: function(res) {
						f.find('input').removeClass('is-valid is-invalid');
						new Noty({
							type: 'info',
							text: get_noty_icon(res.status)+tl.Authorization_in_progress,
							timeout: 3000,
							progressBar: true,
							theme: 'relax',
							layout: 'topRight',
						}).show();
					},
					success: function(res) {
						if ( res.status == 'success' ) {
							f.find('input').addClass('is-valid');
              window.location.href = res.data;
						} else {
							//grecaptcha.reset(1);
							f.find('input').addClass('is-invalid').val('');;
							res.text = get_noty_icon(res.status)+res.text;
              setTimeout(function (code2fa, btn) {
                code2fa.prop('disabled', false).focus();
                btn.prop('disabled', false);
              }, 1000, code2fa, btn);
						}
						new Noty({
							type: res.status,
							text: res.text,
							timeout: 3000,
							progressBar: true,
							theme: 'relax',
							layout: 'topRight',
						}).show();
					},
				});
/*
			});
		});
*/
  } else {
    btn.prop('disabled', true);
  }
}
  
	
	//	SUPPORT
	$('#support').on('submit', 'form', function() {
    support_send();
    return false;
    
	});
	
	
	//	FAQ
	$('.faq').on('click', '.faq_descr', function() {
		$('.faq_descr').removeClass('card-raised bg-rose');
		$('.answer').slideUp(200);
		var p = $(this).find('.answer');
		if ( p.is(':visible') ) {
			p.slideUp(200);
		} else {
			$(this).addClass('card-raised bg-rose');
			p.stop(true, true).slideUp(1).slideDown(200);
		}
		return false;
	});
	
	
	$('.gifts').on('click', '.get_gift', function(){
		$('.get_gift').html('<i class="now-ui-icons loader_gear spin"></i> '+tl.Please_wait).prop('disabled', true);
		var lvl = $(this).attr('data-lvl');
		var data = {
			'lvl':lvl,
		}
		var n;
		
		gifts_animate_clear( lvl );
		
		$.ajax({
			url: '',
			dataType: 'json',
			type: 'post',
			data: {'data':data, 'action':'go_random'},
			beforeSend: function(res) {
				n = new Noty({
					type: 'info',
					text: tl.Please_wait,
					timeout: 3000,
					progressBar: true,
					theme: 'relax',
					layout: 'topRight',
				}).show();
			},
			success: function(res) {
				n.close();
				
				if ( res.status == 'success' ) {
					/*
					$('.gifts .str').rotate({
						duration: res.data.timer*1000,
						angle: 0,
						animateTo: res.data.angle,
						callback: function(){clearInterval(interval);gift_result()}
					});
					*/
					//gifts_animate(res.data);
					gifts_animate(lvl, res.data);
					//alert(print_r(res));
					return false;

					//interval = setInterval( function(){rotate_str(res.data.angle)}, 100);
				} else {
					new Noty({
						type: 'error',
						text: res.text,
						timeout: 3000,
						progressBar: true,
						theme: 'relax',
						layout: 'topRight',
					}).show();
					$('.get_gift').html(tl.Get_a_gift).prop('disabled', false);
				}

				//alert(print_r(res.data));
			},
			/*complete: function(res) {
				alert(print_r(res));
			}*/
		});
		return false;
	});
	
	
});


function tooltip_template( classes='') {
	if ( classes.length > 0 ) {
		classes = ' '+classes.join(' ');
	}
	
	return '<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner'+classes+'"></div></div>';
}

function amount_slider_update( inp = false){
  var calc = $('#calculation');
  var cid = calc.find('.nav .nav-link.active').attr('data-contract');
  var contract = $('#contract'+cid);
  var max_price = 10000;//parseFloat( contract.find('input[name=max_price]').val() );
  var min_price = 1;//parseFloat( contract.find('input[name=min_price]').val() );

  var cur = $('#calculation').find('input[name=invest_currency]').val();
  var price = course[cur];
  var amount = parseFloat( $('#calculation').find('input[name=amount]').val() );
  var new_amount = max_price/price;
  var new_amount2 = min_price/price;
  
  //alert(cur+' '+amount+' '+new_amount+' '+new_amount2)
  
  
  var fixed = ( cur.indexOf('usd.') == -1 ) ? 8 : 0;
  if ( inp === false ) {
    if ( new_amount < amount ) {
      amount = new_amount;
    }
    $('#calculation').find('input[name=amount]').val(parseFloat(amount).toFixed(fixed));
  } else {
    if ( new_amount < amount ) {
      amount = new_amount;
      $('#calculation').find('input[name=amount]').val(parseFloat(amount).toFixed(fixed));
    }/* else if ( new_amount2 > amount ) {
      amount = new_amount2;
      $('#calculation').find('input[name=amount]').val(parseFloat(amount).toFixed(fixed));
    }*/
  }
  $('.amount_slider')[0].noUiSlider.updateOptions({
    range: {
      'min': 10/price,
      'max': max_price/price
    },
    start: amount,
    step:1/price,
    format: {
      to: function (value) {
        //var fixed = ( cur.indexOf('usd.') == -1 ) ? 8 : 2;
          return value.toFixed(fixed);
      },
      from: function (value) {
          return Number(value.replace(',-', ''));
      }
    }
  });
  
  $('.days_slider')[0].noUiSlider.updateOptions({
    start: $('#calculation').find('input[name=days]').val()
  });
}
function lvl_calc( input ) {
	
	var calc = $('#calculation');
	
	var f = input.parents('form');
	var curency = f.attr('data-curency');

	var val = input.val();
	var ghs = Math.floor( course[curency]*val*100 );

	var lvl = get_lvl(ghs);
	
	var tbl = calc.find('.table-lvl');
	var progress = calc.find('.progress-bar');
	var pw = lvl.level*10;
	
	if ( 5 != lvl.level && 10 != lvl.level ){
		pw = pw+(5-lvl.level);
	}
	progress.css('width', pw+'%').attr('aria-valuenow', lvl.level);
	tbl.find('.lvl').each(function(index, element) {
		var l = $(this).attr('data-lvl');
		if ( l < lvl.level ){
			$(this).find('.badge').addClass('badge-warning').removeClass('badge-secondary badge-success');
		} else if ( l == lvl.level ){
			$(this).find('.badge').addClass('badge-success').removeClass('badge-secondary badge-warning');
		} else {
			$(this).find('.badge').addClass('badge-secondary').removeClass('badge-warning badge-success');
		}
	});
}
					   
function calculation() {
	var fixed = 8;
	var calc = $('#calculation');
	var amount = calc.find('input[name=amount]').val();
	//a.val(a.val().replace(",", "."));
	//a.val(a.val().replace(/[^\d.]/g, ''));
	var days = calc.find('input[name=days]').val();
	//d.val(d.val().replace(",", ""));
	//d.val(d.val().replace(".", ""));
	//d.val(d.val().replace(/[^\d.]/g, ''));

	//calc.find('input[name=amount]').val(e.val());
	
	var invest_currency = calc.find('input[name=invest_currency]').val();
	var currency = calc.find('input[name=currency]').val();
	
	var curr_info = currencies[currency];
	var algorithm = curr_info.algorithm;
	var a_info = algorithms[algorithm];
  
  
  //alert(print_r(a_info));
	/*
	if ( !$('.lvl_'+algorithm).is(':visible') ) {
		$('.lvl_a').fadeOut(0);
		$('.lvl_'+algorithm).fadeIn(0);
	}
	*/
	//var fixed = ( course[currency] < 1 ) ? 2 : 8;
	

	//var amount = a.val();
	//var curency = calc.find('.calc-tabs').find('a.active').attr('data-curency');
	var usd = amount*course[invest_currency];
	var power = usd/a_info.price;
	
	//alert( power+', '+ algorithm );
	
	var lvl = get_lvl(power, algorithm);
  //alert(print_r( lvl ) );
  /*
  var lvl = {
    'level': 0,
    'percent':1
  }
  */
	//var interval = calc.find('select[name=interval]').val();

	var profit = 0;
	for(var i=0; i<days; i++){
		var bonus = i * bonus_daily_percent;
		if ( bonus > 1 ) {
			bonus = 1;
		}
		if ( $('input[name=bonus_check]:checked').val() != 1 ) {
			bonus = 0;
		}
		profit += usd * (lvl.percent + bonus)/100;
	}
	profit = profit/course[currency];
	//alert(course[currency]+' '+profit);
	if ( profit > 100000 ) {
		fixed = 0;
	} else if ( profit > 1000 ) {
		fixed = 2;
	} else if ( profit > 100 ) {
		fixed = 4;
	} else if ( profit > 10 ) {
		fixed = 6;
	}
	
	if ( profit > 99999999 ){ profit = 99999999; } else if(isNaN(profit)){ profit = 0 }
	
	var percent = lvl.percent + i * bonus_daily_percent;
  /*
	calc.find('.profit_img').attr('src', '/img/currencies/'+currency+'.png')
	calc.find('.power').html('<i class="lni lni-bolt-alt"></i> '+power.toFixed(2)+' <small>'+a_info.unit+'</small>');
	calc.find('.profit_big').html((profit).toFixed(fixed)+'<small class="ml-2">'+currency.toUpperCase()+'</small>');
	*/
  
  calc.find('.hashrate_unit').text(algorithms[algorithm].unit);
  calc.find('.price').html('<span class="count">$'+algorithms[algorithm].price+'</span>');
  
  calc.find('.algorithm').text(algorithm);
  calc.find('.hashrate').html('<span class="count">'+power.toFixed(2)+'</span><small class="text-center">'+algorithms[algorithm].unit+'</small>');
  calc.find('.profit_hourly').html('<span class="count">'+(profit/days/24).toFixed(fixed)+'</span><small class="text-center">'+currency+'</small><div>≈ $'+(profit/days/24*course[currency]).toFixed(4)+'</div>');
  calc.find('.profit_daily').html('<span class="count">'+(profit/days).toFixed(fixed)+'</span><small class="text-center">'+currency+'</small><div>≈ $'+(profit/days*course[currency]).toFixed(4)+'</div>');
  calc.find('.profit_weekly').html('<span class="count">'+(profit/days*7).toFixed(fixed)+'</span><small class="text-center">'+currency+'</small><div>≈ $'+(profit/days*7*course[currency]).toFixed(4)+'</div>');
  calc.find('.profit_monthly').html('<span class="count">'+(profit/days*31).toFixed(fixed)+'</span><small class="text-center">'+currency+'</small><div>≈ $'+(profit/days*31*course[currency]).toFixed(4)+'</div>');
  calc.find('.profit_yearly').html('<span class="count">'+(profit/days*365).toFixed(fixed)+'</span><small class="text-center">'+currency+'</small><div>≈ $'+(profit/days*365*course[currency]).toFixed(4)+'</div>');
  
  var progress = calc.find('.lvl').find('.progress');
  var pw = lvl.level*10;
	
	progress.find('div').css('width', pw+'%').attr('aria-valuenow', lvl.level);
  
	var tbl = calc.find('.lvl-table');
  tbl.find('.item').each(function(index, element) {
		var l = $(this).attr('data-lvl');
		if ( l < lvl.level ){
			$(this).addClass('active').removeClass('check');
		} else if ( l == lvl.level ){
			$(this).addClass('active check');
		} else {
			$(this).removeClass('active check');
		}
	});
  
  //date.setDate(date.getDate() + 14);
  //alert(date_to_text(date));;
  Object.entries(contracts).forEach(([key, c]) => {
    var contract = calc.find('#contract'+key);
    
    
    profit_daily = usd/100*c.percent;
    
    if ( 'doge' == currency ) fixed = 2;
    var invest_fixed = ( 'doge' == invest_currency || invest_currency.indexOf('usd') >-1 ) ? 2 : 8;
    var small_min = '';
    var small_max = '';
    if ( invest_currency.indexOf('usd.') == -1 ) {
      small_min = '<small class="ms-2 opacity-50">'+(c.min_price/course[invest_currency]).toFixed(invest_fixed)+' '+invest_currency.toUpperCase()+'</small>';
      small_max = '<small class="ms-2 opacity-50">'+(c.max_price/course[invest_currency]).toFixed(invest_fixed)+' '+invest_currency.toUpperCase()+'</small>';
    }
    contract.find('.min_price').html('$'+c.min_price+small_min);
    contract.find('.max_price').html('$'+c.max_price+small_max);
    
    contract.find('.profit_daily span').html('≈ $'+(profit_daily).toFixed(2));
    contract.find('.profit_daily small').html((profit_daily/course[currency]).toFixed(fixed)+' '+currency.toUpperCase());
    contract.find('.profit_weekly span').html('≈ $'+(profit_daily*7).toFixed(2));
    contract.find('.profit_weekly small').html((profit_daily*7/course[currency]).toFixed(fixed)+' '+currency.toUpperCase());
    contract.find('.profit_monthly span').html('≈ $'+(profit_daily*30).toFixed(2));
    contract.find('.profit_monthly small').html((profit_daily*30/course[currency]).toFixed(fixed)+' '+currency.toUpperCase());
    contract.find('.profit_total span').html('≈ $'+(profit_daily*c.period).toFixed(2));
    contract.find('.profit_total small').html((profit_daily*c.period/course[currency]).toFixed(fixed)+' '+currency.toUpperCase());
    
    var price = a_info.price / c.percent;
    var power = Math.floor( usd/price*100 )/100;
    
    //var power = Math.floor( usd*c.percent*100 );
    contract.find('.power').html('<i class="lni lni-bolt-alt"></i> '+power.toFixed(2)+' <small>'+a_info.unit+'</small>'); 
    
    var d = new Date();
    var start_date = new Date(Date.UTC(d.getUTCFullYear(), d.getUTCMonth(), d.getUTCDate()));
    var date = new Date(Date.UTC(d.getUTCFullYear(), d.getUTCMonth(), d.getUTCDate()));
    var end_date = new Date(Date.UTC(d.getUTCFullYear(), d.getUTCMonth(), d.getUTCDate()));
    var inst = contract.find('.installments');
    
    
    inst.find('.bs-wizard-step').eq(0).find('.bs-wizard-stepnum').html(date_to_text(date))
    
    
    //if ( invest_fixed == 8 ) {invest_fixed = 3}
    var pay_period = parseInt(c.period/4, 10);
    var pay = (amount/3).toFixed(invest_fixed);
    var pay_usd = parseInt(usd/3, 10);
    var bigpay = ( ( amount - pay_usd*3/course[invest_currency] ) + pay_usd/course[invest_currency]).toFixed(invest_fixed);
    var bigpay_usd = parseInt( bigpay*course[invest_currency] );
    
    pay = ( invest_currency.indexOf('usd.') == -1 ) ? '<small class="opacity-75">'+pay+' '+invest_currency.toUpperCase()+'</small><br>' :'';
    bigpay = ( invest_currency.indexOf('usd.') == -1 ) ? '<small class="opacity-75">'+bigpay+' '+invest_currency.toUpperCase()+'</small><br>' :'';
    contract.find('.min_price').html('$'+c.min_price+small_min);
    contract.find('.max_price').html('$'+c.max_price+small_max);
    

    inst.find('.bs-wizard-step:not(:first-child):not(:last-child)').find('.bs-wizard-info').html(pay+'$'+pay_usd);
    
    date.setDate(date.getDate() + pay_period);
    inst.find('.bs-wizard-step').eq(1).find('.bs-wizard-stepnum').html(date_to_text(date));
    inst.find('.bs-wizard-step').eq(1).find('.bs-wizard-info').html(bigpay+'$'+bigpay_usd);
    date.setDate(date.getDate() + pay_period);
    inst.find('.bs-wizard-step').eq(2).find('.bs-wizard-stepnum').html(date_to_text(date));
    date.setDate(date.getDate() + pay_period);
    inst.find('.bs-wizard-step').eq(3).find('.bs-wizard-stepnum').html(date_to_text(date));
    end_date.setDate(end_date.getDate() + parseInt(c.period,10));
    inst.find('.bs-wizard-step').eq(4).find('.bs-wizard-stepnum').html(date_to_text(end_date));
  });
  
	/*
	var tbl = calc.find('.lvl_'+algorithm).find('.table-lvl');
	var progress = calc.find('.lvl_'+algorithm).find('.progress-bar');
	var pw = lvl.level*10;
	
	if ( 5 != lvl.level && 10 != lvl.level ){
		pw = pw+(5-lvl.level);
	}
	progress.css('width', pw+'%').attr('aria-valuenow', lvl.level);
	tbl.find('.lvl').each(function(index, element) {
		var l = $(this).attr('data-lvl');
		if ( l < lvl.level ){
			$(this).find('.badge').addClass('badge-warning').removeClass('badge-default badge-success');
		} else if ( l == lvl.level ){
			$(this).find('.badge').addClass('badge-success').removeClass('badge-default badge-warning');
		} else {
			$(this).find('.badge').addClass('badge-default').removeClass('badge-warning badge-success');
		}
	});
  */
}


function buy_power_calc( e ){
  var main_div = $('.buy-power-page').find('form');
	//var main_div = e.parents('form');
  var ca = $('#balance-tab').find('.nav-link.active');
  main_div.find('input[name=currency').val( ca.attr('data-currency') );
  //main_div.find('input[name=amount').val(ca.attr('data-balance'));
	
	var aname = main_div.find('input[name=algorithm').val();
	var amount = main_div.find('input[name=amount');
	var currency = main_div.find('input[name=currency').val();
	var currid = ca.attr('data-currid');
	var contract = main_div.find('input[name=contract').val();
	var a = algorithms[aname];
	var mined_coins = '';
  
  main_div.find('.currency').html(currency);
  main_div.find('.amount_cur').html('<div class="curricon '+currid+'" style="height:2.5rem;width:2.5rem"></div>');
  
	$.each(currencies, function(i, v) {
		if ( aname == v.algorithm ) {
			mined_coins += '<div class="curricon '+i+' d-inline-block me-1" style="height:2.5rem;width:2.5rem" data-toggle="tooltip" data-placement="top" title="'+v.name+' ('+i.toUpperCase()+')" data-value="'+i+'"><img src="/img/currencies/'+i+'.png" width="100%"></div>'
		}
	});
	$('.power_in_stock').html(a.balance+' <small>'+a.unit+'</small>');
	$('.mined_coins').html(mined_coins);

	//input.val(input.val().replace(",", "."));
	amount.val(amount.val().replace(",", "."));
	amount.val(amount.val().replace(/[^\d.]/g, ''));
  
  if ( currency.indexOf('usd') > -1 ) course[currency] = 1;
	
	var val = amount.val();
	if ( isNaN(val) || val == 0 ) val = 0;
	var val_format =  ( 'usd' == currency ) ? '$'+val : val+' <small>'+currency+'</small>';
	var res = Math.floor( course[currency]*val/0.01*100 )/100;
	
	//alert(print_r(contracts[contract]));
  /*
	var price = algorithms[aname].price / contracts[contract].percent;
	var res = Math.floor( course[currency]*val/price*100 )/100;
  */
  var usd = val*course[currency];
	var power = usd/a.price;
  //power = res;
  
	//if ( isNaN(res) || res == 0 ) res = '';
	
	$('.power').html(power.toFixed(2)+' '+algorithms[aname].unit);
	$('.accordion-body .algorithm').html(aname);
    

	
	var usd = course[currency]*val;
	var bonus = 0;
	
	if ( 100 <= usd && 300 > usd ) {
		bonus = 0.1;
	} else if ( 300 <= usd && 500 > usd  ) {
		bonus = 0.2;
	} else if ( 500 <= usd && 1000 > usd  ) {
		bonus = 0.3;
	} else if ( 1000 <= usd && 2000 > usd  ) {
		bonus = 0.4;
	} else if ( 2000 <= usd && 5000 > usd  ) {
		bonus = 0.5;
	} else if ( 5000 <= usd  ) {
		bonus = 1;
	}
	
	bonus=0;
	
	if ( bonus > 0 ) {
		$('.bonus').html('<span class="badge badge-success" style="font-size:110%;position:absolute;top:-20px;"><span style="position:absolute;left:-50px;top:5px;font-size:90%;" class="text-success">Bonus</span>+'+(Math.floor( res*bonus*100 )/100)+'<small>'+algorithms[aname].unit+'</small></span>')
	} else {
		$('.bonus').html('');
	}

	//f.find('.amount_power').val( res );

	if( $('b').is('.refback') ) {
		var bonus = res * $('b.refback').text() / 100;
		f.find('.bonus').remove();
		//f.find('.amount_power').before('<div class="bonus badge badge-success">+ '+bonus+'</div>')
	}
	/*
	$.each( contracts, function(i, v) {
		var contract = $('.contract_'+i);
		var ghs = Math.floor( course[curency]*val/v*100 )/100
		var lvl = get_lvl(ghs);
		var percent = lvl.percent;
		contract.find('input[name=amount]').val( val );
		contract.find('input[name=ghs]').val( ghs );
		contract.find('input[name=currency]').val( curency );

		contract.find('.contract_amount').html( val_format );
		contract.find('.contract_ghs').html( ghs );
		contract.find('.contract_level').html( lvl.level );
		contract.find('.contract_percent').html( percent );
		contract.find('.contract_ppd').html('$'+Math.floor( course[curency]*val/v*percent/100 )/100 );
		contract.find('.contract_profit').html('$'+Math.floor( course[curency]*val/v*percent*i/100 )/100 );
	});
	*/
  
  var invest_currency = currency;
  var calc = main_div;
  if ( 'doge' == currency ) fixed = 2;
  var invest_fixed = ( 'doge' == invest_currency || invest_currency.indexOf('usd') >-1 ) ? 2 : 8;
  $.each( contracts, function(key, c) {
    var ct = calc.find('#contract'+key);
    
    profit_daily = usd/100*c.percent;
    
    var small_min = '';
    var small_max = '';
    if ( invest_currency.indexOf('usd') == -1 ) {
      small_min = '<small class="ms-2 opacity-50">'+(c.min_price/course[invest_currency]).toFixed(invest_fixed)+' '+invest_currency.toUpperCase()+'</small>';
      small_max = '<small class="ms-2 opacity-50">'+(c.max_price/course[invest_currency]).toFixed(invest_fixed)+' '+invest_currency.toUpperCase()+'</small>';
    }
    ct.find('.min_price').html('$'+c.min_price+small_min);
    ct.find('.max_price').html('$'+c.max_price+small_max);
  });
  
  
  fixed = ( 'doge' == currency || currency.indexOf('usd.') > -1 || currency.indexOf('usdt.') > -1 ) ? 2 : 8;
  //profit_daily = usd/100*contracts[contract].percent;
  
  main_div.find('.profit_daily span').html('≈ $'+(profit_daily).toFixed(2));
  main_div.find('.profit_daily small').html((profit_daily/course[currency]).toFixed(fixed)+' '+currency.toUpperCase());
  main_div.find('.profit_weekly span').html('≈ $'+(profit_daily*7).toFixed(2));
  main_div.find('.profit_weekly small').html((profit_daily*7/course[currency]).toFixed(fixed)+' '+currency.toUpperCase());
  main_div.find('.profit_monthly span').html('≈ $'+(profit_daily*30).toFixed(2));
  main_div.find('.profit_monthly small').html((profit_daily*30/course[currency]).toFixed(fixed)+' '+currency.toUpperCase());
  /*
  main_div.find('.profit_total span').html('≈ $'+(profit_daily*contracts[contract].period).toFixed(2));
  main_div.find('.profit_total small').html((profit_daily*contracts[contract].period/course[currency]).toFixed(fixed)+' '+currency.toUpperCase());

  var d = new Date();
  var start_date = new Date(Date.UTC(d.getUTCFullYear(), d.getUTCMonth(), d.getUTCDate()));
  var date = new Date(Date.UTC(d.getUTCFullYear(), d.getUTCMonth(), d.getUTCDate()));
  var end_date = new Date(Date.UTC(d.getUTCFullYear(), d.getUTCMonth(), d.getUTCDate()));
  
  var inst = main_div.find('.installments');
  var inst_data = {};
  
  inst.find('.bs-wizard-step').eq(0).find('.bs-wizard-stepnum').html(date_to_text(date));
  inst_data[date_to_text(date)] = 'start';

  var pay_period = parseInt(contracts[contract].period/4, 10);
  var pay = (val/3).toFixed(invest_fixed);
  var pay_usd = parseInt(usd/3, 10);
  var paynum = pay;
  var paynum_usd = pay_usd;
  var bigpay = ( ( val - pay_usd*3/course[invest_currency] ) + pay_usd/course[invest_currency]).toFixed(invest_fixed);
  var bigpay_usd = parseInt( bigpay*course[invest_currency] );
  
  inst_data[date_to_text(date)] = 'start';
  date.setDate(date.getDate() + pay_period);
  inst_data[date_to_text(date)] = {
    'amount': bigpay,
    'amount_usd': bigpay_usd
  };

  pay = ( invest_currency.indexOf('usd.') == -1 ) ? '<small class="opacity-75">'+pay+' '+invest_currency.toUpperCase()+'</small><br>' :'';
  bigpay = ( invest_currency.indexOf('usd.') == -1 ) ? '<small class="opacity-75">'+bigpay+' '+invest_currency.toUpperCase()+'</small><br>' :'';


  inst.find('.bs-wizard-step:not(:first-child):not(:last-child)').find('.bs-wizard-info').html(pay+'$'+pay_usd);
  inst.find('.bs-wizard-step').eq(1).find('.bs-wizard-stepnum').html(date_to_text(date));
  inst.find('.bs-wizard-step').eq(1).find('.bs-wizard-info').html(bigpay+'$'+bigpay_usd);
  inst_data[date_to_text(date)] = {
    'amount': paynum,
    'amount_usd': paynum_usd
  };
  date.setDate(date.getDate() + pay_period);
  inst.find('.bs-wizard-step').eq(2).find('.bs-wizard-stepnum').html(date_to_text(date));
  inst_data[date_to_text(date)] = {
    'amount': paynum,
    'amount_usd': paynum_usd
  };
  date.setDate(date.getDate() + pay_period);
  inst.find('.bs-wizard-step').eq(3).find('.bs-wizard-stepnum').html(date_to_text(date));
  inst_data[date_to_text(date)] = {
    'amount': paynum,
    'amount_usd': paynum_usd
  };
  end_date.setDate(end_date.getDate() + parseInt(contracts[contract].period,10));
  inst.find('.bs-wizard-step').eq(4).find('.bs-wizard-stepnum').html(date_to_text(end_date));
  inst_data[date_to_text(end_date)] = 'end';

  main_div.find('input[name=installments]').val( JSON.stringify( inst_data ) );
  */
}

function auth_process( token ) {
  
    var f = $('#login').find('form');
		var btn = f.find('button[type=submit]');

		/*
    grecaptcha.ready(function() {
			grecaptcha.execute(grc_public_key, {action: 'login'}).then(function(token) {
    */
		//alert(grc_public_key);
        //return false
				$.ajax({
					url: f.attr('action'),
					dataType: 'json',
					type: 'post',
					data: {'data':f.serialize(), 'grc_token':grecaptcha.getResponse(), 'action':'login'},
					beforeSend: function(res) {
						
						f.find('input').removeClass('is-valid is-invalid');
						new Noty({
							type: 'info',
							text: get_noty_icon(res.status)+tl.Authorization_in_progress,
							timeout: 3000,
							progressBar: true,
							theme: 'relax',
							layout: 'topRight',
						}).show();
						btn.prop('disabled', true);
					},
					success: function(res) {

						
						if ( res.status == 'success' ) {
							f.find('input').addClass('is-valid');
              if ( res.data == 'process2fa' ) {
                $('#login').hide().removeClass('show active');
                $('#login2fa').show().addClass('show active');
                $('input[name=code2fa]').focus();
              } else {
						    window.location.href = res.data;
              }
						} else {
              grecaptcha.reset();
							//grecaptcha.reset(1);
							f.find('input').addClass('is-invalid');
							btn.prop('disabled', false);
							res.text = get_noty_icon(res.status)+res.text;
						}
						new Noty({
							type: res.status,
							text: res.text,
							timeout: 3000,
							progressBar: true,
							theme: 'relax',
							layout: 'topRight',
						}).show();
					},
					/*complete: function(res) {
						alert(print_r(res));
					}*/
				});
  /*
			});
		});
  */
}

function support_send( ){
  
		var f = $('#support').find('form');
		var btn = f.find('button[type=submit]');
/*
		grecaptcha.ready(function() {
			grecaptcha.execute(grc_public_key, {action: 'support'}).then(function(token) {
*/
				$.ajax({
					url: f.attr('action'),
					dataType: 'json',
					type: 'post',
					data: {'data':f.serialize(), 'grc_token':grecaptcha.getResponse(), 'action':'create_ticket'},
					beforeSend: function(res) {
						grecaptcha.reset();
						//f.find('input, textarea').removeClass('is-valid is-invalid').tooltip('dispose');
						new Noty({
							type: 'info',
							text: get_noty_icon(res.status)+tl.Sending,
							timeout: 3000,
							progressBar: true,
							theme: 'relax',
							layout: 'topRight',
						}).show();
            
						btn.html(get_noty_icon(res.status)+tl.Send).prop('disabled', true);
					},
					success: function(res) {
						btn.html(tl.Send).prop('disabled', false);
						new Noty({
							type: res.status,
							text: get_noty_icon(res.status)+res.text,
							timeout: 3000,
							progressBar: true,
							theme: 'relax',
							layout: 'topRight',
						}).show();

            /*
						$.each( res.invalid, function( i, v ) {
							f.find('input[name='+i+'], textarea[name='+i+']').addClass('is-invalid').tooltip({
								html: true,
								placement: 'top',
								template: tooltip_template(['text-danger']),
								title: v
							}).tooltip('enable');
						});
						$.each( res.valid, function( i, v ) {
							f.find('input[name='+i+'], textarea[name='+i+']').addClass('is-valid');
						});
            */
						if ( res.status == 'success' ) {
							$('#subject, #message, #email').val('');
						}
					},
				});
/*
			});
		});
*/
}
function get_noty_icon( status ) {
	var res = ' <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> ';
	switch( status ) {
		case 'success':
			res = '<i class="fal fa-check fa-lg mr-2"></i> ';
			break;
		case 'error':
			res = '<i class="fal fa-exclamation-circle fa-lg mr-2 text-danger"></i> ';
			break;
	}
	return res;
}
					   
function debounce(func, wait, immediate) {
	var timeout;
	return function() {
		var context = this, args = arguments;
		var later = function() {
			timeout = null;
			if (!immediate) func.apply(context, args);
		};
		var callNow = immediate && !timeout;
		clearTimeout(timeout);
		timeout = setTimeout(later, wait);
		if (callNow) func.apply(context, args);
	};
};

//	DEBUG
function print_r(arr, level){
    var print_red_text = "";
    if(!level) level = 0;
    var level_padding = "";
    for(var j=0; j<level+1; j++) level_padding += "    ";
    if(typeof(arr) == 'object') {
        for(var item in arr) {
            var value = arr[item];
            if(typeof(value) == 'object') {
                print_red_text += level_padding + "'" + item + "' :\n";
                print_red_text += print_r(value,level+1);
		} 
            else 
                print_red_text += level_padding + "'" + item + "' => \"" + value + "\"\n";
        }
    } 

    else  print_red_text = "===>"+arr+"<===("+typeof(arr)+")";
    return print_red_text;
}
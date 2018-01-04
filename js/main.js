$(document).ready(function(){
	$('.menu-bar .icon-menu').on('click',function(ev){
		ev.stopPropagation();
		$('nav').toggleClass('isSlide');
	});
	$(document).click(function(event) { 
	    if(!$(event.target).closest('nav').length && !$(event.target).closest('header').length) {
	        if($('nav').is(":visible")) {
	            $('nav').removeClass('isSlide');
	        }
	    }        
	});

	 
  	$('[data-toggle="datepicker"]').datepicker({
		autoHide : true
	});  

	$('ul.select li').on('click',function(ev){
		var that = $(this);
		 
		if(that.hasClass('active')){
			return false;
		}else{
			$('ul.select li').removeClass('active');
			that.addClass('active');
			$('#gender_class').val($(this).data('value'));
		}
	});


		window.rowCount = 0;
		$(".add-row").click(function(){
		//var rowCount = 0;
		
		var ref_id=$('#id_ref_no').val();
		var currn_id=parseInt(ref_id)+1;
		var jobTxt = $('#input_0').val();
		if(jobTxt==""){
			$('#input_0').addClass('error');
			$('#input_0').attr('placeholder',"Item cant be empty");
		}else{
			var AddMarkUp = '<div class="item-form">\
								<input class="form-control" type="text" id="input_'+ currn_id +'" name="input_'+ currn_id +'" value='+ jobTxt +'>\
			              		<button class="delete-row" title="Add job" type="button"><i class="icon-trash"></i></button>\
			          		</div>';
							$('#id_ref_no').val(currn_id)
			}

			if(window.rowCount >= 1){
				$($('.item-form')[0]).after(AddMarkUp);
			}else{
				$($('.item-form')[0]).after(AddMarkUp);
			}

			$(this).parents('.item-form').find('#input_0').val('');
			//$(this).parents('.add-row-wapper').find('#quantity').val('');

			window.rowCount ++;
			$('#input_0').focus();

		});

		$("body").on('click','.delete-row',function(ev){
			$(this).parents('.item-form').remove();
		});

		$('#input_0').keydown(function(ev){
			if(ev.keyCode == 13){
				$(".add-row").trigger('click');
				ev.preventDefault();
			}
			if(ev.keyCode == 9 && !ev.shiftKey){
				$("#trialDate").focus();
				ev.preventDefault();
			}			 
		});

		$('#input_0').keyup(function(ev){
			if($(this).val() !== ""){
				$(this).removeClass('error');
				$('#input_0').attr('placeholder',"Enter item");
			}
		});
$('#smsCheckbox').change(function(ev){
			var trialDate = $('#trialDate').val();
			var deliveryDate  = $('#deliveryDate').val();
			$('#smsText').val('Your job for Item name has been booked. The Trial Date & Delivery Date is '+ trialDate + ' and ' + deliveryDate + ' respectively');
		});

	 $('[data-toggle="datepicker"]').change(function(ev){
			$('#smsCheckbox').trigger('change');
		});  
		
		$('#jobForm').submit(function(ev){
			
			$('#firstName,#trialDate,#deliveryDate,#input_0').each(function(){
				if($(this).val() == ""){
					$(this).addClass('error');
				}else{
					$(this).removeClass('error');
					return;
				}

				ev.preventDefault();
			})
		});
$('#jobForm').keyup(function(ev){
			$('#firstName,#trialDate,#deliveryDate,#input_0').each(function(){
				if($(this).val() !== ""){
					$(this).removeClass('error');
				}
			})

		});
		$('#trialDate,#deliveryDate').change(function(){
				if($(this).val() !== ""){
					$(this).removeClass('error');
				}
			});
		
		$('#sizelist a').on('click', function(e) {
			alert($(this).data('value'));
			e.preventDefault();
		$('#gender_class').val($(this).data('value'));
		});
		


});


		// onload listing pageX
			function listing_info(){				 
				$.ajax({ url: "listing_info.php",						
						success: function(response){
							 
							var jobList=JSON.parse(response);
									var listWrap = "";		
									for (var i = 0; i < jobList.length; i++) {
											listWrap += '<li>\
															<div class="job-details">\
																<p class="customer-name">'+ jobList[i].firstname +' '+ jobList[i].lastName +' </p>\
																<p class="bill-no"> Job Order# '+ jobList[i].order_no +'</p>\
															</div>\
															<div class="job-status">\
																<p class="job-amount">Del Date : '+ jobList[i].deliveryDate +' </p>\
																<p class="job-badge">'+ jobList[i].order_status +'</p>\
															</div>\
														</li>';
										$(".job-list-bottom ul").html(listWrap);
									}
						  // alert("done");
						}});
					}
				 
		// onload listing page
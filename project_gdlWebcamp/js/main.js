var api= 'AIzaSyB2nqjyNwZu9hY0278wTDRbUqLLVrhGjWg';

function initMap() {
	var latLng = {
		lat: 20.6772885,
		lng: -103.3856328
	};

    var map = new google.maps.Map(document.getElementById('map'), {
        'center': latLng,
		'zoom': 14,
		'mapTypeId': 'roadmap',
		'draggable': true,
		'scrollwheel': true
	});

	var content = '<h2>GDLWEBCAMP</h2>' +
					'<p>From December 10th to 12th</p>' +
					'<p>Stop by!</p>'

	var info = new google.maps.InfoWindow({
		content: content
	});
	
	var marker = new google.maps.Marker({
		position: latLng,
		map: map,
		title: 'GDLWEBCAMP'
	});

	marker.addListener('click', function(){
		info.open(map, marker);
	});
}


(function(){
	"use strict";

	var gift = document.getElementById('gift');

	document.addEventListener('DOMContentLoaded', function(){

		// user data fields
		var firstName= document.getElementById('firstName');
		var lastName= document.getElementById('lastName');
		var email= document.getElementById('email');

		// passes fields
		var dayPass =document.getElementById('dayPass');
		var twoDayPass =document.getElementById('twoDayPass');
		var fullPass =document.getElementById('fullPass');

		//buttons and divs
		var calculate = document.getElementById('calculate');
		var errorDiv = document.getElementById('error');
		var registerButton = document.getElementById('registerBtn');
		var productList = document.getElementById('productList');
		var sum = document.getElementById('totalSum');

		//extras
		var shirts = document.getElementById('eventShirt');
		var stickers = document.getElementById('stickers');

		if(document.getElementById('calculate')){

			calculate.addEventListener('click', calculateAmount);
			dayPass.addEventListener('blur', showDays);
			twoDayPass.addEventListener('blur', showDays);
			fullPass.addEventListener('blur', showDays);
			firstName.addEventListener('blur', validateFields);
			lastName.addEventListener('blur', validateFields);
			email.addEventListener('blur', validateFields);
			email.addEventListener('blur', validateEmail);

			function validateFields(){
				if(this.value==''){
					errorDiv.style.display = 'block';
					errorDiv.innerHTML = 'this field is mandatory';
					this.style.border = '1px solid red';
					errorDiv.style.border = '1px solid red';
				} else{
					errorDiv.style.display = 'none';
					this.style.border = '1px solid #cccccc';
				}
			}

			function validateEmail(){
				if(this.value.indexOf('@') > -1){
					errorDiv.style.display = 'none';
					this.style.border = '1px solid #cccccc';
				} else{
					errorDiv.style.display = 'block';
					errorDiv.innerHTML = 'email is invalid';
					this.style.border = '1px solid red';
					errorDiv.style.border = '1px solid red';
				}
			}

			function calculateAmount(event){
				event.preventDefault();
				if(gift.value===''){
					alert('You must choose a gift!');
					gift.focus();
				}else{
					var dayTickets = parseInt(dayPass.value, 10) || 0,
						twoDayTickets = parseInt(twoDayPass.value, 10) || 0,
						fullTickets = parseInt(fullPass.value, 10) || 0,
						amountShirts = parseInt(shirts.value, 10) || 0,
						amountStickers = parseInt(stickers.value, 10) || 0;
					var totalPayment = (dayTickets*30)+(twoDayTickets*45)+(fullTickets*50)+((amountShirts*10)*.93)+(amountStickers*2);
					var productListTemp = [];

					if(dayTickets > 0){
						productListTemp.push(dayTickets + ' Day passes');
					}

					if(twoDayTickets > 0){
						productListTemp.push(twoDayTickets + ' Two-Day passes');
					}

					if(fullTickets > 0){
						productListTemp.push(fullTickets + ' Full passes');
					}

					if(amountShirts > 0){
						productListTemp.push(amountShirts + ' Shirts');
					}

					if(amountStickers > 0){
						productListTemp.push(amountStickers + ' Stickers');
					}

					productList.style.display = 'block';
					productList.innerHTML = '';

					for(var i=0;i<productListTemp.length;i++){
						productList.innerHTML += productListTemp[i] + '<br/>';
					}

					sum.innerHTML='$ '+ totalPayment.toFixed(2);
				}
			}

			function showDays(){
				var dayTickets = parseInt(dayPass.value, 10) || 0,
					twoDayTickets = parseInt(twoDayPass.value, 10) || 0,
					fullTickets = parseInt(fullPass.value, 10) || 0;
				var daysChosen =[];

				if(dayTickets > 0){
					daysChosen.push('friday');
				}
				if(twoDayTickets > 0){
					daysChosen.push('friday', 'saturday');
				}
				if(fullTickets > 0){
					daysChosen.push('friday', 'saturday', 'sunday');
				}

				for(var i=0;i<daysChosen.length; i++){
					document.getElementById(daysChosen[i]).style.display = 'block';
				}
			}

		}


	}); //DOM content loaded
})();


$(function(){
	//lettering
	$('.siteName').lettering();

	//fixed menu
	var windowHeight = $(window).height();
	var barHeight = $('.bar').innerHeight();

	$(window).scroll(function(){
		var scroll = $(window).scrollTop();
		
		if(scroll > windowHeight){
			$('.bar').addClass('fixed');
			$('body').css({'margin-top': barHeight + 'px'});
		} else{
			$('.bar').removeClass('fixed');
			$('body').css({'margin-top': '0px'});
		}
	});

	//responsive menu
	$('.mobileMenu').on('click', function(){
		$('.mainNavigation').slideToggle();
	});

	//conferences schedule
	$('.eventSchedule .courseInfo:first').show();
	$('.scheduleMenu a:first').addClass('active');

	$('.scheduleMenu a').on('click', function(){
		$('.scheduleMenu a').removeClass('active');
		$(this).addClass('active');
		$('.hide').hide();

		var link = $(this).attr('href');
		$(link).fadeIn(1000);

		return false;
	});

	//number animation
	var summaryList = jQuery('.eventSummary');

	if(summaryList.length > 0){
		$('.eventSummary').waypoint(function(){
			$('.eventSummary li:nth-child(1) p').animateNumber({number: 6}, 1500);
			$('.eventSummary li:nth-child(2) p').animateNumber({number: 15}, 1500);
			$('.eventSummary li:nth-child(3) p').animateNumber({number: 3}, 1500);
			$('.eventSummary li:nth-child(4) p').animateNumber({number: 9}, 1500);
		}, {
			offset: '60%'
		});
	}

	//countdown
	$('.countdown').countdown('2018/12/10 09:00:00', function(event){
		$('#days').html(event.strftime('%D'));
		$('#hours').html(event.strftime('%H'));
		$('#minutes').html(event.strftime('%M'));
		$('#seconds').html(event.strftime('%S'));
	});

});
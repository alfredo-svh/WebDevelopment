$(function(){
	'use strict';


	$('.ourServices div:first').show();
	$('.services nav a:first').addClass('active');

	$('.services nav a').on('click', showTabs);

	function showTabs(){
		$('.services nav a').removeClass('active');
		$(this).addClass('active');
		var link = $(this).attr('href');
		
		$('.ourServices div').fadeOut();
		$(link).fadeIn();

		return false;
	}


/*
	var nextTrips = ['London', 'Valencia', 'Madrid', 'Paris', 'Milan'];
	console.log(nextTrips);

	$.each(nextTrips, function(i,v){
		if(i==0){
			$('aside').append('<h2>Next Trips</h2>');
		}
		$('aside').append('<li>' + v + '</li>');
	});

	var tripsByDate ={
		first: 'London',
		second: 'Valencia',
		third: 'Madrid',
		fourth: 'Paris',
		fifth: 'Milan'
	};

	console.log(tripsByDate);

	$.each(tripsByDate, function(i, v){
		$('aside').append('<li>' + i + ' - ' + v + '</li>');
	});

	$('aside').load('promos.html');

	$('div.logo img').on('click', loadAjax);

	function loadAjax(){
		$.ajax('promos.txt', {
			success: addContent,
			type: 'GET',
			dataType: 'text'
		});
	}

	function addContent(data, status, jqxhr){
		$('aside').text(data);
		console.log(status);
	}

	$('.logo img').click(function(){
		$('main article:first').slideUp(1000);
	});

	$('aside').click(function(){
		$('main article:first').slideDown(1000);
	});

	$('.logo img').on('click', function(){
		$(this).animate({'width': '200px'}, 1000);
	});

	$('main article img').on('mouseenter', expandImage);
	$('main article img').on('mouseleave', shrinkImage);

	function expandImage(){
		$(this).animate({'width': '100%'});
	}

	function shrinkImage(){
		$(this).animate({'width': '350px'});
	}
	
	$('.navigation').show();

	$('.logo img').css({'width': '400px'});

	$('main article h2').css({'color': '#db008d'});

	$('aside').css({'background-color': '#e1e1e1',
					'text-transform': 'uppercase',
					'padding': '20px'
	});

	$('.navigation ul li a').on('mouseenter', changeColor);

	function changeColor(){
		$('.navigation').css('background-color', 'red');
	}

	$('.navigation').show();

	$('main article:first img').on('click', function(){
		$(this).attr('src', 'img/imagen_2.jpg')
	});

	$('main').on({
		click: function(){
			$(this).addClass('active redBackground');
		}, mouseenter: function(){
			$(this).addClass('redBackground');
		}, mouseleave: function(){
			$(this).addClass('active');
		}
	})

	$('div.logo img').addClass('active');

	$('.navigation').show();
	$('main article:first').addClass('active');

	$('.navigation ul li a').on('click', function(e){
		$('.navigation ul li a').removeClass('active');
		e.preventDefault();
		$(this).addClass('active');
	});

	$('#menu').on('click', function(){
		$('#navigation').show();
	});

	$('div.logo img').on('mouseenter', function(){
		console.log('hoveriiing');
	});
	$('div.logo img').on('mouseleave', function(){
		console.log('not hoveriiing');
	});

	$('div.logo img').on('click', function(){
		$(this).remove();
	});

	$('div.logo img').on('click', function(){
		console.log('CLICK!!!!');
	});

	$('main article:first').hide();

	var copy = $('main article:last').clone();
	$('main').prepend(copy);

	var copy = $('main article:last').clone();
	$(copy).prependTo('main');*/
});
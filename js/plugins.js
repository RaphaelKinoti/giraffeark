$(function(){

	var base_url = "http://girraffeark.mymsanii.com/";

	// Load vegas slider
	$('#landing-promo').vegas({
		slides : [
			{src : base_url + 'images/bgs/bg6.jpg'},
			{src : base_url + 'images/bgs/bg7.jpg', transition: 'swirlRight2'},
			{src : base_url + 'images/bgs/bg4.jpg', transition: 'swirlLeft2'},
			{src : base_url + 'images/bgs/bg5.jpg', transition: 'swirlRight2'}
		],

		overlay : true,
		delay: 5000,
        timer: true,
        shuffle: false,
        transition: 'swirlLeft2',
        color: '#fff',
        cover: true 

	});

	$('.flyer-header').vegas({
		slides : [
			{src : base_url + 'images/bgs/bg20-compressor.jpg'},
			{src : base_url + 'images/bgs/bg21-compressor.jpg', transition: 'swirlRight2'},
			{src : base_url + 'images/bgs/bg22-compressor.jpg', transition: 'swirlLeft2'},
			{src : base_url + 'images/bgs/bg23-compressor.jpg', transition: 'swirlRight2'},
			{src : base_url + 'images/bgs/bg24-compressor.jpg'},
			{src : base_url + 'images/bgs/bg25-compressor.jpg', transition: 'swirlRight2'},
			{src : base_url + 'images/bgs/bg26-compressor.jpg', transition: 'swirlLeft2'},
			{src : base_url + 'images/bgs/bg27-compressor.jpg', transition: 'swirlRight2'},
			{src : base_url + 'images/bgs/bg28-compressor.jpg', transition: 'swirlLeft2'},
			{src : base_url + 'images/bgs/bg29-compressor.jpg', transition: 'swirlRight2'},
			{src : base_url + 'images/bgs/bg30-compressor.jpg', transition: 'swirlRight2'},
		],

		overlay : true,
		delay: 4000,
        timer: true,
        shuffle: true,
        transition: 'swirlLeft2',
        color: '#fff',
        cover: true 

	});

	// Nicescroll Init
	$('html').niceScroll({
		cursorcolor : '#777',
		cursorwidth : '7px',
		cursorborder: "1px solid #777",
		smoothscroll : true,
		hwacceleration: true,
		background : '',
		scrollspeed : 100,
		autohidemode : false,
		horizrailenabled : false,
		sensitiverail: true,
		zindex : 9999
	});


});
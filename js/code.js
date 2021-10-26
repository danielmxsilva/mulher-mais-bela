$(document).ready(function(){
	$('.wraper-resultados').slick({
		 autoplay:true,
		 infinite: true,
		 slidesToShow: 2,
		 slidesToScroll: 2,
		 dots:true,
		 responsive:[
		 	{
		 		breakpoint: 768,
			 	settings:{
			 		slidesToShow: 1,
			 		slidesToScroll: 1,
			 	}
		 	}
		 ]
	});

	$('.wraper-video-aprova').slick({
		 infinite: false,
		 slidesToShow: 3,
		 dots:true,
		 responsive:[
		 	{
		 		breakpoint: 768,
			 	settings:{
			 		slidesToShow: 2,
			 		slidesToScroll: 2,
			 	}
		 	},
		 	{
		 		breakpoint: 680,
			 	settings:{
			 		slidesToShow: 1,
			 		slidesToScroll: 1,
			 	}
		 	}
		 ]
	});

	$('.slick-next').html('<i class="fas fa-chevron-right"></i>');

	$('.slick-prev').html('<i class="fas fa-chevron-left"></i>');

})
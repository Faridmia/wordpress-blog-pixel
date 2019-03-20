// (function($){

// 	$(document).ready(function() {
// 		$('.button').on('click', function(event) {
// 			event.preventDefault();
// 			var image_url = $(this).closest('table').find('.thumbnail').attr('src');

// 			var mbody = window.location;
// 			console.log(mbody);
// 			alert('hello pakistan indian');
// 		})
// 	});


// })(jQuery)





	// jQuery('.button').on('click', function(e) {
	// 	e.preventDefault();

	// 	var mbody = $(this).parent('table .describe');
	// 	console.log(mbody);
	// 	alert('hello bangladesh');
	// })
jQuery(document).ready(function(){


	jQuery('button.uploadimage1').on('click',function(){
		

		tb_show('','media-upload.php?post_id=91&type=image&TB_iframe=1');

		return false;
	});

	window.send_to_editor = function(html){
		var imgurl = jQuery('img',html).attr('src');
		//alert(imaurl);
		jQuery('.image1').val(imgurl);

		tb_remove();

	};

});








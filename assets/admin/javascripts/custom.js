$(document).ready(function () {

	$('.btn-icon').click(function(){
		var value = $(this).html();
		$('.deger').val(value);
	});
	$('form').on('click','.btn-next',function(){

		$('.btn-icon').click(function(){
			var value = $(this).html();
			$('.deger').val(value);
		});
	});
	$('form').on('click','.btn-previous',function(){

		$('.btn-icon').click(function(){
			var value = $(this).html();
			$('.deger').val(value);
		});
	});


});
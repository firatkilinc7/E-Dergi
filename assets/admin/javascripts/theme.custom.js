/* Add here all your JS customizations */
$(document).ready(function () {

	$(".sortable").sortable();

	$(".isTrend").change(function(){

		var $veri = $(this).prop("checked");
		var $url = $(this).data("url");

		if(typeof $veri !== "undefined" && typeof $url !== "undefined"){

			$.post($url, { data : $veri}, function (response) {

			});

		}

	})

	$(".isActive").change(function(){


		var $data = $(this).prop("checked");
		var $data_url = $(this).data("url");

		if(typeof $data !== "undefined" && typeof $data_url !== "undefined"){

			$.post($data_url, { data : $data}, function (response) {

			});

		}

	})




	$(".isMainPage").change(function(){

		var $data = $(this).prop("checked");
		var $data_url = $(this).data("url");
		
		if(typeof $data !== "undefined" && typeof $data_url !== "undefined"){
			$.post($data_url, { data : $data}, function (response) {

			});

		}

	})

	$(".isCover").change(function(){

		var $data = $(this).prop("checked");
		var $data_url = $(this).data("url");
		if(typeof $data !== "undefined" && typeof $data_url !== "undefined"){
			$.post($data_url, { data : $data}, function (response) {

			});

		}

	})

	$(".remove-btn").click(function () {

		var $data_url = $(this).data("url");

		swal({
			title: 'Emin misiniz?',
			text: "Bu işlemi geri alamayacaksınız!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Evet, Sil!',
			cancelButtonText : "Hayır"
		}).then(function (result) {
			if (result.value) {

				window.location.href = $data_url;
			}
		});

	})



	$(".sortable").on("sortupdate", function(event, ui){

		var $data = $(this).sortable("serialize");
		var $data_url = $(this).data("url");

		$.post($data_url, {data : $data}, function(response){})

	})

	$(".content-container, .image_list_container").on('click', '.remove-btn', function () {

		var $data_url = $(this).data("url");

		swal({
			title: 'Emin misiniz?',
			text: "Bu işlemi geri alamayacaksınız!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Evet, Sil!',
			cancelButtonText : "Hayır"
		}).then(function (result) {
			if (result.value) {

				window.location.href = $data_url;
			}
		});

	})

	$(".content-container, .image_list_container").on('change', '.isActive', function(){

		var $data = $(this).prop("checked");
		var $data_url = $(this).data("url");

		if(typeof $data !== "undefined" && typeof $data_url !== "undefined"){

			$.post($data_url, { data : $data}, function (response) {

			});

		}

	})

	$(".image_list_container").on('change', '.isCover', function(){

		var $data = $(this).prop("checked");
		var $data_url = $(this).data("url");

		if(typeof $data !== "undefined" && typeof $data_url !== "undefined"){

			$.post($data_url, { data : $data}, function (response) {

				$(".image_list_container").html(response);

				$('[data-plugin-ios-switch]').each(function() {
					var $this = $( this );

					$this.themePluginIOS7Switch();
				});

				$(".sortable").sortable();

			});

		}

	})

	$(".content-container, .image_list_container").on("sortupdate", '.sortable',  function(event, ui){

		var $data = $(this).sortable("serialize");
		var $data_url = $(this).data("url");

		$.post($data_url, {data : $data}, function(response){})

	})

	
	$(".button_usage_btn").change(function(){

		$(".button-information-container").slideToggle();

	})

	// var uploadSection = Dropzone.forElement("#dropzone");

	// uploadSection.on("complete", function(file){

	// 	var $data_url = $("#dropzone").data("url");

	// 	var csrf_key 	= $("#dropzone").data("csrf-key");
	// 	var csrf_value 	= $("#dropzone").data("csrf-value");

	// 	var $data = {
	// 		csrf_key : csrf_value,
	// 	}

	// 	$.post($data_url, $data, function(response){

	// 		$(".image_list_container").html(response);

	// 		$('[data-plugin-ios-switch]').each(function() {
	// 			var $this = $( this );

	// 			$this.themePluginIOS7Switch();
	// 		});

	// 		$(".sortable").sortable();

	// 	});

	// })
	
})
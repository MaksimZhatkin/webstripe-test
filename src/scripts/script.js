$(document).ready(() => {
	/*---init slickSlider---*/
	$(".slider").slick();

	/*---form and result init---*/
	const form = $(".needs-validation")
	const result = $(".result")
	const popup = $(".modal")
	const displayForm = $("#displayForm")

	/*---if we submit form, it use AJAX to post data in server---*/
	form.on("submit", (event) => {
		event.preventDefault()

		$.ajax({
			url: "../webstripe/src/php/action.php",
			type: "post",
			dataType: "html",
			data: form.serialize(),
			success: (response) => {
				/*---Reset form inputs and show pop-up---*/
				form[0].reset()
				popup.modal("show")
				console.log(response)
			},
			error: (xhr, str) => {
				alert(`Возникла ошибка: ${xhr.responseCode}`)
			}
		})
	})

	/*---if we click on display button we will get a response from the server---*/
	displayForm.on("submit", (event) =>{
		event.preventDefault()
		console.log('click')

		$.ajax({
			url: "../webstripe/src/php/display.php",
			type: "get",
			dataType: "text",
			data: "request",
			success: (response) => {
				$(".result").html(response)
				console.log(response)
			},
			error: (xhr, str) => {
				alert(`Возникла ошибка: ${xhr.responseCode}`)
			}
		})
	})
})

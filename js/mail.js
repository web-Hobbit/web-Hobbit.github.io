$(document).ready(function() {

	//E-mail Ajax Send
	$("#BackCall_form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "/php/mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Спасибо за заявку! мы с Вами свяжемся.");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

});

	$("#form").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо, что написали нам. Мы свяжемся с вами очень скоро.");
			$("#form").trigger("reset");
		});
		return false;
	});
	
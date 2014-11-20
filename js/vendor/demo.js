$(function() {
	// Get the form.
	var form = $('#quiz');

	// Get the results div.
	var formMessages = $('#result');
	
	$(form).submit(function(e) {
			e.preventDefault();
				
			var formData = $(form).serialize();
			
			$.ajax({
				type: 'POST',
				url: $(form).attr('action'),
				data: formData,
				dataType: "json"
			})
			
			.done(function(response) {
				$(formMessages).text(response);	
			})
			
			.fail(function(data) {
				$('#error').removeClass("hide");
			});
			
		});
		
});		
			
			

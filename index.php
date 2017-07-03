<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Simple Ajax Form</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script>
			$(document).ready(function() {
		    	$('form').submit(function(event) { //Trigger on form submit
		    		$('#name + .throw_error').empty(); //Clear the messages first
		    		$('#success').empty();
		    
		    		var postForm = { //Fetch form data
		    			'name' 	: $('input[name=name]').val() //Store name fields value
		    		};
		    
		    		$.ajax({ //Process the form using $.ajax()
		    			type 		: 'POST', //Method type
		    			url 		: 'form_process.php', //Your form processing file url
		    			data 		: postForm, //Forms name
		    			dataType 	: 'json',
		    			success 	: function(data) {
		    				
		    			if (!data.success) { //If fails
		    				if (data.errors.name) { //Returned if any error from process.php
		    					$('.throw_error').fadeIn(1000).html(data.errors.name); //Throw relevant error
		   					}
		   				} else {
		    					$('#success').fadeIn(1000).append('<p>' + data.posted + '</p>'); //If successful, than throw a success message
		    				}
		    			}
		    		});
		    	    event.preventDefault(); //Prevent the default submit
		    	});
		    });
		</script>

  <link rel="stylesheet" href="styles.css">
	</head>
	<body>

<h1>Youtube Downloadr</h1>
<?php echo $name; ?>
<?php echo "asdf"; ?>
 
		<form method="post" name="postForm">
			<ul>
				<li>
					<label for="name">Name</label>
					<input type="text" name="name" id="name" />
					<span class="throw_error"></span>
				</li>
			</ul>
			<input type="submit" value="Send" />
		</form>
		<div id="success"></div>
	</body>
</html>

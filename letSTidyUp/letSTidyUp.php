<!DOCTYPE html>
<html>
    <head>
        <meta charset="ISO-8859-1">
        <title>Let's Tidy Up!</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body class="container">
    	<form method="POST" action ="./script.php">
    		<label for="make">make</label>
    		<input class="form-control" name="make" type="text" />
    		<br/>
    		<label for="model">model</label>
    		<input class="form-control" name="model" type="text" />
    		<br/>
    		<label for="year">year</label>
    		<input class="form-control" name="year" type="number" />
    		<br/>
    		<label for="color">color</label>
    		<select class="form-control" name="color">
    			<option value="blue">blue</option>
    			<option value="red">red</option>
    			<option value="green">green</option>
    			<option value="grey">grey</option>
                <option value="white">white</option>
                <option value="black">black</option>
    		</select>
    		<br/>
    		<button class="btn btn-success" type="button">submit</button>
    	</form>
    	
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
<?php
echo '<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">                                                                                      
  <div class="table-responsive">          
  <table class="table">
	<tr>
		<td>Name</td>
		<td>'.$un.'</td>
	</tr>
	<tr>
		<td>Email ID</td>
		<td>'.$ea.'</td>
	</tr>
	<tr>
		<td>Mobile Number</td>
		<td>'.$tp.'</td>
	</tr>
	<tr>
		<td>For which occasion do you want to enquire with Sugavans Photography?</td>
		<td>'.$oc.'</td>
	</tr>
	<tr>
		<td>Event Dates</td>
		<td>'.$ed.'</td>
	</tr>
	<tr>
		<td>Event City</td>
		<td>'.$ec.'</td>
	</tr>
	<tr>
		<td>Message</td>
		<td>'.$cmt.'</td>
	</tr>
</table>
  </div>
</div>

</body>
</html>';
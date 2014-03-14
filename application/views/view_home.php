<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>NoteCloud</title>
	<style>
		.row
		{
			width: 400px;
		}

		.row span 
		{
			float: right;
		}

		input[type="submit"]
		{
			float: right;
			clear: both;
		}

		.new-note
		{
			width: 220px;
		}

		.new-note label
		{
			display: inline-block;
			margin-bottom: 5px;
		}

		input[type="text"]
		{
			display: block;
			width: 100%;
		}

		a.view-notes
		{
			display: inline-block;
		}


	</style>
</head>
<body>

<div id="container">
	<h1>Login to NoteCloud</h1>
	<form class="new-note">
		<label for="email"> Email </label>
		<input type="text" id="email">

		<label for="password"> Password </label>
		<input type="text" id="password">
		
		<br>
		<input type="submit" value="submit">
	</form>
	<a class="view-notes" href="<?php echo base_url(); ?>site/notes">View Notes</a>
</div>

</body>
</html>
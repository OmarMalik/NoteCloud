<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>NoteCloud</title>
	<link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/styles.css">

</head>
<body>

<div id="container">
	<h1>Enter New Note</h1>
	<div class="notes-container">
		<form class="new-note">
			<textarea>
			</textarea>
			<br>
			<input type="submit" value="submit">
		</form>
		<br>
		<br>
		<?php
			foreach ($results as $row) {
				echo "<div class=\"row\">";
				echo $row->note;
				echo " <div class=\"date\">" . $row->date . "</div>";
				echo "</div>";
			}
		?>
	</div>
</div>

</body>
</html>
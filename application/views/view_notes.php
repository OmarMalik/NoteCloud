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
		<form class="new-note" action="<?php echo base_url(); ?>site/insertNewNote" method="post">
			<textarea name="note">
			</textarea>
			<br>
			<input type="submit" value="submit">
		</form>
		<?php
		$toPrint = array();
		foreach ($results as $row) 
		{
			$html =  "<div class=\"row\">";
			$html .=  $row->note;
			$html .= " <div class=\"date\">" . $row->date . "</div>";
			$html .= "</div>";
			array_push($toPrint, $html); 
		}
		for($i = count($toPrint) - 1; $i >= 0; $i--)
		{
			echo $toPrint[$i];
		}
		?>
	</div>
</div>

</body>
</html>
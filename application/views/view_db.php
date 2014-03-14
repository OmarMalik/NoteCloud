<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>NoteCloud</title>
</head>
<body>

<div id="container">

	<?php

		foreach( $results as $row)
		{
			echo $row->id;
			echo $row->author;
		}

	?>

</div>

</body>
</html>
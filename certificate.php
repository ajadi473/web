<?php

if (isset($_POST['logout'])) {
	header("Location:home.php");
}

?>

<!DOCTYPE html >
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<meta charset="utf-8" />
	</head>
	<body>
		<div style="text-align: center;  margin-top: 100px;">
			<p><img width="200" height="200" src="examples/img/lautech.png" /></p>
			<h1>Example Certificate</h1>
			<p>{{ firstName }} Submitted a thesis  &ldquo;{{ eventName }}&rdquo; between {{ startDate }} and {{ endDate }}.</p>
			<p>Certificate generated in: {{ %now% }}</p>
		</div>

		<div class="row" align="centre">
			<button class="btn waves-effect waves-light" type="submit" name="logout">logout
				<i class="material-icons right">send</i>
			</button>
		</div>
	</body>
</html>
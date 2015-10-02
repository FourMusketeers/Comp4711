<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>League</title>
</head>

<body>

<div id="container">
	<h1>League Page</h1>
	{teams}
		name: {name} <br />
		wins: {wins}<br />
		losses: {losses}<br />
	{/teams}
	<?php //echo $first_name; ?>
</div>

</body>
</html>
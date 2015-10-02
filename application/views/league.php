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
	<table class="ui single line table">
		<thead>
			<tr>
				<th>Team Name</th>
				<th>Wins</th>
				<th>Losses</th>
				<th>Ties</th>
			</tr>
		</thead>
		<tbody>	
			{teams}
			<tr>
				<td>{name}</td>
				<td>{win}</td>
				<td>{loss}</td>
				<td>{tie}</td>
			</tr>
			{/teams}
		</tbody>
	</table>
</div>

</body>
</html>
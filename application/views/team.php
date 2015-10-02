<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en" style="height:100%; width:100%;">


<body style="height:100%; width:100%">

<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
<script src="semantic/dist/semantic.min.js"></script>

<div>
	<h1>TEAM</h1>

	<table class="ui single line table">
		<thead>
			<tr>
				<th>Name</th>
				<th>Wins</th>
				<th>Losses</th>
			</tr>
		</thead>
		<tbody>
			{teams}
			<tr>
				<td>{name}</td>
				<td>{wins}</td>
				<td>{losses}</td>
			</tr>
			{/teams}
			<?php //echo $first_name; ?>
			
		</tbody>
	</table>
</div>

</body>
</html>
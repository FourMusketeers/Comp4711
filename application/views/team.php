<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en" style="height:100%; width:100%;">


<body style="height:100%; width:100%">

<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
<script src="semantic/dist/semantic.min.js"></script>

<div>
	<h1>{teamname}</h1>

	<table class="ui single line table">
		<thead>
			<tr>
				<th>Name</th>
				<th>Grade</th>
				<th>Position</th>
			</tr>
		</thead>
		<tbody>
			{roster}
			<tr>
				<td>{first_name} {last_name}</td>
				<td>{grade}</td>
				<td>{position}</td>
			</tr>
			{/roster}
		</tbody>
	</table>
</div>

</body>
</html>
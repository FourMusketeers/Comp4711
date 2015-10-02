<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<div class="ui container">
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
</div>

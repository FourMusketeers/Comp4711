<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<div class="ui container">
<div>
	<h1>New England Patriots</h1>

	<table class="ui single line table">
		<thead>
			<tr>
				<th>Name</th>
				<th>Number</th>
				<th>Position</th>
			</tr>
		</thead>
		<tbody>
			{roster}
			<tr>
				<td>{PlayerName}</td>
				<td>{Num}</td>
				<td>{Pos}</td>
			</tr>
			{/roster}
		</tbody>
	</table>
</div>
</div>

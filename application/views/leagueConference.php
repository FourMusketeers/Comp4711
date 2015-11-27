<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<div class="ui container">
   <h1>League Conference</h1>
   <input type="button" onclick="window.location.href='/league/page'" value="Table"></input>
   <input type="button" onclick="window.location.href='/league/layout/leagueConference'" value="Conference"></input>
   <input type="button" onclick="window.location.href='/league/layout/leagueDivision'" value="Division"></input>
   
   <div>
	   American Football Conference
	   <table class="ui compact table">
		  <thead>
			 <tr>
				<th>Name</th>
				<th>Division</th>
				<th>Wins</th>
				<th>Losses</th>
				<th>Ties</th>
			 </tr>
		  </thead>
		  <tbody>
			 {AFCteam}
			 <tr>
				<td>{TeamName}</td>
				<td>{Division}</td>
				<td>{Win}</td>
				<td>{Loss}</td>
				<td>{Tie}</td>
			 </tr>
			 {/AFCteam}
		  </tbody>
	   </table>
   </div>
   
   <div>
	   National Football Conference
	   <table class="ui compact table">
		  <thead>
			 <tr>
				<th>Name</th>
				<th>Division</th>
				<th>Wins</th>
				<th>Losses</th>
				<th>Ties</th>
			 </tr>
		  </thead>
		  <tbody>
			 {NFCteam}
			 <tr>
				<td>{TeamName}</td>
				<td>{Division}</td>
				<td>{Win}</td>
				<td>{Loss}</td>
				<td>{Tie}</td>
			 </tr>
			 {/NFCteam}
		  </tbody>
	   </table>
   </div>
</div>
<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<div class="ui container">
   <h1>League Division</h1>
   <input type="button" onclick="window.location.href='/league/page'" value="Table"></input>
   <input type="button" onclick="window.location.href='/league/layout/leagueConference'" value="Conference"></input>
   <input type="button" onclick="window.location.href='/league/layout/leagueDivision'" value="Division"></input>
   
   <table class="ui compact table">
	  <thead>
		 <tr>
			<th>AFC East Team</th>
			<th>Division</th>
			<th>Wins</th>
			<th>Losses</th>
			<th>Ties</th>
		 </tr>
	  </thead>
	  <tbody>
		 {AFCEast}
		 <tr>
			<td>{TeamName}</td>
			<td>{Division}</td>
			<td>{Win}</td>
			<td>{Loss}</td>
			<td>{Tie}</td>
		 </tr>
		 {/AFCEast}
	  </tbody>
   </table>

   <table class="ui compact table">
	  <thead>
		 <tr>
			<th>AFC North Team</th>
			<th>Division</th>
			<th>Wins</th>
			<th>Losses</th>
			<th>Ties</th>
		 </tr>
	  </thead>
	  <tbody>
		 {AFCNorth}
		 <tr>
			<td>{TeamName}</td>
			<td>{Division}</td>
			<td>{Win}</td>
			<td>{Loss}</td>
			<td>{Tie}</td>
		 </tr>
		 {/AFCNorth}
	  </tbody>
   </table>
   
   <table class="ui compact table">
	  <thead>
		 <tr>
			<th>AFC South Team</th>
			<th>Division</th>
			<th>Wins</th>
			<th>Losses</th>
			<th>Ties</th>
		 </tr>
	  </thead>
	  <tbody>
		 {AFCSouth}
		 <tr>
			<td>{TeamName}</td>
			<td>{Division}</td>
			<td>{Win}</td>
			<td>{Loss}</td>
			<td>{Tie}</td>
		 </tr>
		 {/AFCSouth}
	  </tbody>
   </table>
   
   <table class="ui compact table">
	  <thead>
		 <tr>
			<th>AFC West Team</th>
			<th>Division</th>
			<th>Wins</th>
			<th>Losses</th>
			<th>Ties</th>
		 </tr>
	  </thead>
	  <tbody>
		 {AFCWest}
		 <tr>
			<td>{TeamName}</td>
			<td>{Division}</td>
			<td>{Win}</td>
			<td>{Loss}</td>
			<td>{Tie}</td>
		 </tr>
		 {/AFCWest}
	  </tbody>
   </table>
   
   <table class="ui compact table">
	  <thead>
		 <tr>
			<th>NFC East Team</th>
			<th>Division</th>
			<th>Wins</th>
			<th>Losses</th>
			<th>Ties</th>
		 </tr>
	  </thead>
	  <tbody>
		 {NFCEast}
		 <tr>
			<td>{TeamName}</td>
			<td>{Division}</td>
			<td>{Win}</td>
			<td>{Loss}</td>
			<td>{Tie}</td>
		 </tr>
		 {/NFCEast}
	  </tbody>
   </table>
   
   <table class="ui compact table">
	  <thead>
		 <tr>
			<th>NFC North Team</th>
			<th>Division</th>
			<th>Wins</th>
			<th>Losses</th>
			<th>Ties</th>
		 </tr>
	  </thead>
	  <tbody>
		 {NFCNorth}
		 <tr>
			<td>{TeamName}</td>
			<td>{Division}</td>
			<td>{Win}</td>
			<td>{Loss}</td>
			<td>{Tie}</td>
		 </tr>
		 {/NFCNorth}
	  </tbody>
   </table>
   
   <table class="ui compact table">
	  <thead>
		 <tr>
			<th>NFC South Team</th>
			<th>Division</th>
			<th>Wins</th>
			<th>Losses</th>
			<th>Ties</th>
		 </tr>
	  </thead>
	  <tbody>
		 {NFCSouth}
		 <tr>
			<td>{TeamName}</td>
			<td>{Division}</td>
			<td>{Win}</td>
			<td>{Loss}</td>
			<td>{Tie}</td>
		 </tr>
		 {/NFCSouth}
	  </tbody>
   </table>
   
   <table class="ui compact table">
	  <thead>
		 <tr>
			<th>NFC West Team</th>
			<th>Division</th>
			<th>Wins</th>
			<th>Losses</th>
			<th>Ties</th>
		 </tr>
	  </thead>
	  <tbody>
		 {NFCWest}
		 <tr>
			<td>{TeamName}</td>
			<td>{Division}</td>
			<td>{Win}</td>
			<td>{Loss}</td>
			<td>{Tie}</td>
		 </tr>
		 {/NFCWest}
	  </tbody>
   </table>
</div>
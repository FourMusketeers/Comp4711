<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<div class="ui container">
   <h1>League Conference</h1>
   <a href="/league/layout/league" class="ui small button">Table</a>
   <a href="/league/layout/leagueConference" class="ui small button">Conference</a>
   <a href="/league/layout/leagueDivision" class="ui small button">Division</a>
   
   <div>
	   <h3 class="ui block header leagueHeader">American Football Conference</h3>
	   <table class="ui compact table">
		  <thead>
			 <tr>
				<th><a href="/league/order/TeamName/{leagueorderdirafc}/AFC">Name <i class="sort icon"></i></a></th>
				<th><a href="/league/order/Division/{leagueorderdirafc}/AFC">Division <i class="sort icon"></i></a></th>
				<th><a href="/league/order/Win/{leagueorderdirafc}/AFC">Wins <i class="sort icon"></i></a></th>
				<th><a href="/league/order/Loss/{leagueorderdirafc}/AFC">Losses <i class="sort icon"></i></a></th>
				<th><a href="/league/order/Tie/{leagueorderdirafc}/AFC">Ties <i class="sort icon"></i></a></th>
				<th><a href="/league/order/PF/{leagueorderdirafc}/AFC">Points For <i class="sort icon"></i></a></th>
				<th><a href="/league/order/PA/{leagueorderdirafc}/AFC">Points Against <i class="sort icon"></i></a></th>
				<th><a href="/league/order/NetPts/{leagueorderdirafc}/AFC">Net Point <i class="sort icon"></i></a></th>
				<th><a href="/league/order/Home/{leagueorderdirafc}/AFC">Home <i class="sort icon"></i></a></th>
				<th><a href="/league/order/Road/{leagueorderdirafc}/AFC">Away <i class="sort icon"></i></a></th>
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
				<td>{PF}</td>
				<td>{PA}</td>
				<td>{NetPts}</td>
				<td>{Home}</td>
				<td>{Road}</td>
			 </tr>
			 {/AFCteam}
		  </tbody>
	   </table>
   </div>
   
   <div>
	   <h3 class="ui block header leagueHeader">National Football Conference</h3>
	   <table class="ui compact table">
		  <thead>
			 <tr>
				<th><a href="/league/order/TeamName/{leagueorderdirnfc}/NFC">Name <i class="sort icon"></i></a></th>
				<th><a href="/league/order/Division/{leagueorderdirnfc}/NFC">Division <i class="sort icon"></i></a></th>
				<th><a href="/league/order/Win/{leagueorderdirnfc}/NFC">Wins <i class="sort icon"></i></a></th>
				<th><a href="/league/order/Loss/{leagueorderdirnfc}/NFC">Losses <i class="sort icon"></i></a></th>
				<th><a href="/league/order/Tie/{leagueorderdirnfc}/NFC">Ties <i class="sort icon"></i></a></th>
				<th><a href="/league/order/PF/{leagueorderdirnfc}/NFC">Points For <i class="sort icon"></i></a></th>
				<th><a href="/league/order/PA/{leagueorderdirnfc}/NFC">Points Against <i class="sort icon"></i></a></th>
				<th><a href="/league/order/NetPts/{leagueorderdirnfc}/NFC">Net Point <i class="sort icon"></i></a></th>
				<th><a href="/league/order/Home/{leagueorderdirnfc}/NFC">Home <i class="sort icon"></i></a></th>
				<th><a href="/league/order/Road/{leagueorderdirnfc}/NFC">Away <i class="sort icon"></i></a></th>
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
				<td>{PF}</td>
				<td>{PA}</td>
				<td>{NetPts}</td>
				<td>{Home}</td>
				<td>{Road}</td>
			 </tr>
			 {/NFCteam}
		  </tbody>
	   </table>
   </div>
</div>
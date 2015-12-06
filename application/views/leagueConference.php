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
				<th><a href="/league/order/TeamName/{leagueorderdir}/AFC">Name <i class="sort icon"></i></a></th>
				<th><a href="/league/order/Division/{leagueorderdir}/AFC">Division <i class="sort icon"></i></a></th>
				<th><a href="/league/order/Win/{leagueorderdir}/AFC">Wins <i class="sort icon"></i></a></th>
				<th><a href="/league/order/Loss/{leagueorderdir}/AFC">Losses <i class="sort icon"></i></a></th>
				<th><a href="/league/order/Tie/{leagueorderdir}/AFC">Ties <i class="sort icon"></i></a></th>
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
	   <h3 class="ui block header leagueHeader">National Football Conference</h3>
	   <table class="ui compact table">
		  <thead>
			 <tr>
				<th><a href="/league/order/TeamName/{leagueorderdir}/NFC">Name <i class="sort icon"></i></a></th>
				<th><a href="/league/order/Division/{leagueorderdir}/NFC">Division <i class="sort icon"></i></a></th>
				<th><a href="/league/order/Win/{leagueorderdir}/NFC">Wins <i class="sort icon"></i></a></th>
				<th><a href="/league/order/Loss/{leagueorderdir}/NFC">Losses <i class="sort icon"></i></a></th>
				<th><a href="/league/order/Tie/{leagueorderdir}/NFC">Ties <i class="sort icon"></i></a></th>
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
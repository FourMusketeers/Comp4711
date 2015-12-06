<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<div class="ui container">
   <h1>League Division</h1>
   <a href="/league/layout/league" class="ui small button">Table</a>
   <a href="/league/layout/leagueConference" class="ui small button">Conference</a>
   <a href="/league/layout/leagueDivision" class="ui small button">Division</a>
   
   <table class="ui compact table">
	  <thead>
		 <tr>
			<th><a href="/league/order/TeamName/{leagueorderdir}/AFCE">AFC East Team <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Division/{leagueorderdir}/AFCE">Division <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Win/{leagueorderdir}/AFCE">Wins <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Loss/{leagueorderdir}/AFCE">Losses <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Tie/{leagueorderdir}/AFCE">Ties <i class="sort icon"></i></a></th>
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
			<th><a href="/league/order/TeamName/{leagueorderdir}/AFCN">AFC North Team <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Division/{leagueorderdir}/AFCN">Division <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Win/{leagueorderdir}/AFCN">Wins <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Loss/{leagueorderdir}/AFCN">Losses <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Tie/{leagueorderdir}/AFCN">Ties <i class="sort icon"></i></a></th>
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
			<th><a href="/league/order/TeamName/{leagueorderdir}/AFCS">AFC South Team <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Division/{leagueorderdir}/AFCS">Division <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Win/{leagueorderdir}/AFCS">Wins <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Loss/{leagueorderdir}/AFCS">Losses <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Tie/{leagueorderdir}/AFCS">Ties <i class="sort icon"></i></a></th>
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
			<th><a href="/league/order/TeamName/{leagueorderdir}/AFCW">AFC West Team <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Division/{leagueorderdir}/AFCW">Division <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Win/{leagueorderdir}/AFCW">Wins <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Loss/{leagueorderdir}/AFCW">Losses <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Tie/{leagueorderdir}/AFCW">Ties <i class="sort icon"></i></a></th>
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
			<th><a href="/league/order/TeamName/{leagueorderdir}/NFCE">NFC East Team <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Division/{leagueorderdir}/NFCE">Division <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Win/{leagueorderdir}/NFCE">Wins <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Loss/{leagueorderdir}/NFCE">Losses <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Tie/{leagueorderdir}/NFCE">Ties <i class="sort icon"></i></a></th>
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
			<th><a href="/league/order/TeamName/{leagueorderdir}/NFCN">NFC North Team <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Division/{leagueorderdir}/NFCN">Division <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Win/{leagueorderdir}/NFCN">Wins <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Loss/{leagueorderdir}/NFCN">Losses <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Tie/{leagueorderdir}/NFCN">Ties <i class="sort icon"></i></a></th>
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
			<th><a href="/league/order/TeamName/{leagueorderdir}/NFCS">NFC South Team <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Division/{leagueorderdir}/NFCS">Division <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Win/{leagueorderdir}/NFCS">Wins <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Loss/{leagueorderdir}/NFCS">Losses <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Tie/{leagueorderdir}/NFCS">Ties <i class="sort icon"></i></a></th>
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
			<th><a href="/league/order/TeamName/{leagueorderdir}/NFCW">NFC West Team <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Division/{leagueorderdir}/NFCW">Division <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Win/{leagueorderdir}/NFCW">Wins <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Loss/{leagueorderdir}/NFCW">Losses <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Tie/{leagueorderdir}/NFCW">Ties <i class="sort icon"></i></a></th>
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
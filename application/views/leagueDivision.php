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
			<th><a href="/league/order/TeamName/{leagueorderdirafce}/AFCE">AFC East Team <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Division/{leagueorderdirafce}/AFCE">Division <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Win/{leagueorderdirafce}/AFCE">Wins <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Loss/{leagueorderdirafce}/AFCE">Losses <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Tie/{leagueorderdirafce}/AFCE">Ties <i class="sort icon"></i></a></th>
			<th><a href="/league/order/PF/{leagueorderdirafce}/AFCE">Points For <i class="sort icon"></i></a></th>
			<th><a href="/league/order/PA/{leagueorderdirafce}/AFCE">Points Against <i class="sort icon"></i></a></th>
			<th><a href="/league/order/NetPts/{leagueorderdirafce}/AFCE">Net Point <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Home/{leagueorderdirafce}/AFCE">Home <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Road/{leagueorderdirafce}/AFCE">Away <i class="sort icon"></i></a></th>
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
			<td>{PF}</td>
			<td>{PA}</td>
			<td>{NetPts}</td>
			<td>{Home}</td>
			<td>{Road}</td>
		 </tr>
		 {/AFCEast}
	  </tbody>
   </table>

   <table class="ui compact table">
	  <thead>
		 <tr>
			<th><a href="/league/order/TeamName/{leagueorderdirafcn}/AFCN">AFC North Team <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Division/{leagueorderdirafcn}/AFCN">Division <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Win/{leagueorderdirafcn}/AFCN">Wins <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Loss/{leagueorderdirafcn}/AFCN">Losses <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Tie/{leagueorderdirafcn}/AFCN">Ties <i class="sort icon"></i></a></th>
			<th><a href="/league/order/PF/{leagueorderdirafcn}/AFCN">Points For <i class="sort icon"></i></a></th>
			<th><a href="/league/order/PA/{leagueorderdirafcn}/AFCN">Points Against <i class="sort icon"></i></a></th>
			<th><a href="/league/order/NetPts/{leagueorderdirafcn}/AFCN">Net Point <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Home/{leagueorderdirafcn}/AFCN">Home <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Road/{leagueorderdirafcn}/AFCN">Away <i class="sort icon"></i></a></th>
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
			<td>{PF}</td>
			<td>{PA}</td>
			<td>{NetPts}</td>
			<td>{Home}</td>
			<td>{Road}</td>
		 </tr>
		 {/AFCNorth}
	  </tbody>
   </table>
   
   <table class="ui compact table">
	  <thead>
		 <tr>
			<th><a href="/league/order/TeamName/{leagueorderdirafcs}/AFCS">AFC South Team <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Division/{leagueorderdirafcs}/AFCS">Division <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Win/{leagueorderdirafcs}/AFCS">Wins <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Loss/{leagueorderdirafcs}/AFCS">Losses <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Tie/{leagueorderdirafcs}/AFCS">Ties <i class="sort icon"></i></a></th>
			<th><a href="/league/order/PF/{leagueorderdirafcs}/AFCS">Points For <i class="sort icon"></i></a></th>
			<th><a href="/league/order/PA/{leagueorderdirafcs}/AFCS">Points Against <i class="sort icon"></i></a></th>
			<th><a href="/league/order/NetPts/{leagueorderdirafcs}/AFCS">Net Point <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Home/{leagueorderdirafcs}/AFCS">Home <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Road/{leagueorderdirafcs}/AFCS">Away <i class="sort icon"></i></a></th>
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
			<td>{PF}</td>
			<td>{PA}</td>
			<td>{NetPts}</td>
			<td>{Home}</td>
			<td>{Road}</td>
		 </tr>
		 {/AFCSouth}
	  </tbody>
   </table>
   
   <table class="ui compact table">
	  <thead>
		 <tr>
			<th><a href="/league/order/TeamName/{leagueorderdirafcw}/AFCW">AFC West Team <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Division/{leagueorderdirafcw}/AFCW">Division <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Win/{leagueorderdirafcw}/AFCW">Wins <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Loss/{leagueorderdirafcw}/AFCW">Losses <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Tie/{leagueorderdirafcw}/AFCW">Ties <i class="sort icon"></i></a></th>
			<th><a href="/league/order/PF/{leagueorderdirafcw}/AFCW">Points For <i class="sort icon"></i></a></th>
			<th><a href="/league/order/PA/{leagueorderdirafcw}/AFCW">Points Against <i class="sort icon"></i></a></th>
			<th><a href="/league/order/NetPts/{leagueorderdirafcw}/AFCW">Net Point <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Home/{leagueorderdirafcw}/AFCW">Home <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Road/{leagueorderdirafcw}/AFCW">Away <i class="sort icon"></i></a></th>
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
			<td>{PF}</td>
			<td>{PA}</td>
			<td>{NetPts}</td>
			<td>{Home}</td>
			<td>{Road}</td>
		 </tr>
		 {/AFCWest}
	  </tbody>
   </table>
   
   <table class="ui compact table">
	  <thead>
		 <tr>
			<th><a href="/league/order/TeamName/{leagueorderdirnfce}/NFCE">NFC East Team <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Division/{leagueorderdirnfce}/NFCE">Division <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Win/{leagueorderdirnfce}/NFCE">Wins <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Loss/{leagueorderdirnfce}/NFCE">Losses <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Tie/{leagueorderdirnfce}/NFCE">Ties <i class="sort icon"></i></a></th>
			<th><a href="/league/order/PF/{leagueorderdirnfce}/NFCE">Points For <i class="sort icon"></i></a></th>
			<th><a href="/league/order/PA/{leagueorderdirnfce}/NFCE">Points Against <i class="sort icon"></i></a></th>
			<th><a href="/league/order/NetPts/{leagueorderdirnfce}/NFCE">Net Point <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Home/{leagueorderdirnfce}/NFCE">Home <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Road/{leagueorderdirnfce}/NFCE">Away <i class="sort icon"></i></a></th>
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
			<td>{PF}</td>
			<td>{PA}</td>
			<td>{NetPts}</td>
			<td>{Home}</td>
			<td>{Road}</td>
		 </tr>
		 {/NFCEast}
	  </tbody>
   </table>
   
   <table class="ui compact table">
	  <thead>
		 <tr>
			<th><a href="/league/order/TeamName/{leagueorderdirnfcn}/NFCN">NFC North Team <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Division/{leagueorderdirnfcn}/NFCN">Division <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Win/{leagueorderdirnfcn}/NFCN">Wins <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Loss/{leagueorderdirnfcn}/NFCN">Losses <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Tie/{leagueorderdirnfcn}/NFCN">Ties <i class="sort icon"></i></a></th>
			<th><a href="/league/order/PF/{leagueorderdirnfcn}/NFCN">Points For <i class="sort icon"></i></a></th>
			<th><a href="/league/order/PA/{leagueorderdirnfcn}/NFCN">Points Against <i class="sort icon"></i></a></th>
			<th><a href="/league/order/NetPts/{leagueorderdirnfcn}/NFCN">Net Point <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Home/{leagueorderdirnfcn}/NFCN">Home <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Road/{leagueorderdirnfcn}/NFCN">Away <i class="sort icon"></i></a></th>
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
			<td>{PF}</td>
			<td>{PA}</td>
			<td>{NetPts}</td>
			<td>{Home}</td>
			<td>{Road}</td>
		 </tr>
		 {/NFCNorth}
	  </tbody>
   </table>
   
   <table class="ui compact table">
	  <thead>
		 <tr>
			<th><a href="/league/order/TeamName/{leagueorderdirnfcs}/NFCS">NFC South Team <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Division/{leagueorderdirnfcs}/NFCS">Division <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Win/{leagueorderdirnfcs}/NFCS">Wins <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Loss/{leagueorderdirnfcs}/NFCS">Losses <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Tie/{leagueorderdirnfcs}/NFCS">Ties <i class="sort icon"></i></a></th>
			<th><a href="/league/order/PF/{leagueorderdirnfcs}/NFCS">Points For <i class="sort icon"></i></a></th>
			<th><a href="/league/order/PA/{leagueorderdirnfcs}/NFCS">Points Against <i class="sort icon"></i></a></th>
			<th><a href="/league/order/NetPts/{leagueorderdirnfcs}/NFCS">Net Point <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Home/{leagueorderdirnfcs}/NFCS">Home <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Road/{leagueorderdirnfcs}/NFCS">Away <i class="sort icon"></i></a></th>
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
			<td>{PF}</td>
			<td>{PA}</td>
			<td>{NetPts}</td>
			<td>{Home}</td>
			<td>{Road}</td>
		 </tr>
		 {/NFCSouth}
	  </tbody>
   </table>
   
   <table class="ui compact table">
	  <thead>
		 <tr>
			<th><a href="/league/order/TeamName/{leagueorderdirnfcw}/NFCW">NFC West Team <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Division/{leagueorderdirnfcw}/NFCW">Division <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Win/{leagueorderdirnfcw}/NFCW">Wins <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Loss/{leagueorderdirnfcw}/NFCW">Losses <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Tie/{leagueorderdirnfcw}/NFCW">Ties <i class="sort icon"></i></a></th>
			<th><a href="/league/order/PF/{leagueorderdirnfcw}/NFCW">Points For <i class="sort icon"></i></a></th>
			<th><a href="/league/order/PA/{leagueorderdirnfcw}/NFCW">Points Against <i class="sort icon"></i></a></th>
			<th><a href="/league/order/NetPts/{leagueorderdirnfcw}/NFCW">Net Point <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Home/{leagueorderdirnfcw}/NFCW">Home <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Road/{leagueorderdirnfcw}/NFCW">Away <i class="sort icon"></i></a></th>
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
			<td>{PF}</td>
			<td>{PA}</td>
			<td>{NetPts}</td>
			<td>{Home}</td>
			<td>{Road}</td>
		 </tr>
		 {/NFCWest}
	  </tbody>
   </table>
</div>
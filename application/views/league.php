<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<div class="ui container">
   <h1>League</h1>
   <a href="/league/layout/league" class="ui small button">Table</a>
   <a href="/league/layout/leagueConference" class="ui small button">Conference</a>
   <a href="/league/layout/leagueDivision" class="ui small button">Division</a>
   
   <table class="ui single line table">
      <thead>
         <tr>
            <th><a href="/league/order/TeamName/{leagueorderdir}">Name <i class="sort icon"></i></a></th>
            <th><a href="/league/order/Win/{leagueorderdir}">Wins <i class="sort icon"></i></a></th>
            <th><a href="/league/order/Loss/{leagueorderdir}">Losses <i class="sort icon"></i></a></th>
            <th><a href="/league/order/Tie/{leagueorderdir}">Ties <i class="sort icon"></i></a></th>
            <th><a href="/league/order/Conf/{leagueorderdir}">Conf <i class="sort icon"></i></a></th>
            <th><a href="/league/order/Division/{leagueorderdir}">Division <i class="sort icon"></i></a></th>
			<th><a href="/league/order/PF/{leagueorderdir}">Points For <i class="sort icon"></i></a></th>
			<th><a href="/league/order/PA/{leagueorderdir}">Points Against <i class="sort icon"></i></a></th>
			<th><a href="/league/order/NetPts/{leagueorderdir}">Net Point <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Home/{leagueorderdir}">Home <i class="sort icon"></i></a></th>
			<th><a href="/league/order/Road/{leagueorderdir}">Away <i class="sort icon"></i></a></th>
         </tr>
      </thead>
      <tbody>
         {teams}
         <tr>
            <td class="team-section">
               <img class="team-logo" src="/img/logos/{Image}" alt="/img/logos/{Image}">
               <div class="team-name">{TeamName}</div>
            </td>
            <td>{Win}</td>
            <td>{Loss}</td>
            <td>{Tie}</td>
            <td>{Conf}</td>
            <td>{Division}</td>
			<td>{PF}</td>
			<td>{PA}</td>
			<td>{NetPts}</td>
			<td>{Home}</td>
			<td>{Road}</td>
         </tr>
         {/teams}
      </tbody>
      <tfoot>
         <tr>
            <th>
              <a href="/League/page/" class="ui small button">
                  Page 1
               </a>
            </th>
            <th colspan="5">
               <div class="ui right floated menu">
				  <a class="icon item {goFirst}" href="/league/page/{firstPage}">First</a>
                  <a class="icon item {showLeft}" href="/league/page/{previousPage}">
                  <i class="left chevron icon"></i>
                  </a>
                  {pages}
                    <a class="item" href="/league/page/{pageNum}">{pageNum}</a>
                  {/pages}
                  <a class="icon item {showRight} " href="/league/page/{nextPage}">
                  <i class="right chevron icon"></i>
                  </a>
				  <a class="icon item {goLast}" href="/league/page/{lastPage}">Last</a>
               </div>
            </th>
         </tr>
      </tfoot>
   </table>
</div>
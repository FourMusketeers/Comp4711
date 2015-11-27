<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<div class="ui container">
   <h1>League</h1>
   <input type="button" onclick="window.location.href='/league/page'" value="Table"></input>
   <input type="button" onclick="window.location.href='/league/layout/leagueConference'" value="Conference"></input>
   <input type="button" onclick="window.location.href='/league/layout/leagueDivision'" value="Division"></input>
   <table class="ui single line table">
      <thead>
         <tr>
            <th>Name</th>
            <th>Wins</th>
            <th>Losses</th>
            <th>Ties</th>
            <th>Conf</th>
            <th>Division</th>
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
				  <a class="icon item {goFirst}" href="{firstPage}">First</a>
                  <a class="icon item {showLeft}" href="{previousPage}">
                  <i class="left chevron icon"></i>
                  </a>
                  {pages}
                    <a class="item" href="/League/page/{pageNum}">{pageNum}</a>
                  {/pages}
                  <a class="icon item {showRight} " href="{nextPage}">
                  <i class="right chevron icon"></i>
                  </a>
				  <a class="icon item {goLast}" href="{lastPage}">Last</a>
               </div>
            </th>
         </tr>
      </tfoot>
   </table>
</div>
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
		<tfoot>
         <tr>
            <th>
              <div class="ui small button">
                <a href="/team/">Page 1</a>
              </div>
            </th>
            <th colspan="5">
               <div class="ui right floated menu">
                  <a class="icon item {showLeft}" href="{previousPage}">
                  <i class="left chevron icon"></i>
                  </a>
                  {pages}
                    <a class="item" href="/team/page/{pageNum}">{pageNum}</a>
                  {/pages}
                  <a class="icon item {showRight} " href="{nextPage}">
                  <i class="right chevron icon"></i>
                  </a>
               </div>
            </th>
         </tr>
      </tfoot>
	</table>
</div>
</div>

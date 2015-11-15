<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="ui container">
<div>
	<h1>New England Patriots</h1>
    <div class="ui toggle checkbox">
    <input type="checkbox" name="public" onchange="window.location.href='/team/pagelayout'">
    <label>View In Gallery Mode</label>
  </div>
	<table class="ui single line table">
		<thead>
			<tr>
				<th><a href="/team/page/{pageNum}/Name">Name <i class="sort icon"></i></a></th>
				<th><a href="">Number <i class="sort icon"></i></a></th>
				<th><a href="">Position <i class="sort icon"></i></a></th>
			</tr>
		</thead>
		<tbody>
			{roster}
			<tr class="appTableHover"onclick="window.location.href='/SinglePlayer/index/{PlayerID}'">
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
              {options}
            </th>
            <th colspan="5">
               <div class="ui right floated menu">
				  <a class="icon item {goFirst}" href="{firstPage}">First</a>
                  <a class="icon item {showLeft}" href="{previousPage}">
                  <i class="left chevron icon"></i>
                  </a>
                  {pages}
                    <a class="item" href="/team/page/{pageNum}">{pageNum}</a>
                  {/pages}
                  <a class="icon item First " href="{nextPage}">
                  <i class="right chevron icon"></i>
				  </a>
				  <a class="icon item {goLast}" href="{lastPage}">Last</a>
               </div>
            </th>
         </tr>
      </tfoot>
	</table>
</div>
</div>

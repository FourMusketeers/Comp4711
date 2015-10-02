<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="appMasthead" class="ui inverted vertical center aligned segment">
    <div class="ui text container appCenterVertical">
      <h1 class="ui inverted header">
        Roster Manager
      </h1>
      <h2>Start Managing Your Roster Now!</h2>
      <a href="/team">
      	<div class="ui huge primary button">View Team<i class="right arrow icon"></i></div>
      </a>
    </div>

</div>

<div class="ui container stripe segment">
	<div id="appRosterCards" class="ui link cards">
  {roster}
  	<div class="card">
    <div class="image">
      <img src="img/players/matthew.png">
    </div>
    <div class="content">
      <div class="header">{first_name} {last_name}</div>
      <div class="meta">
        <a>Grade {grade}</a>
        <a>Position {position}</a>
      </div>
      <div class="description">
        Placeholder description
      </div>
    </div>
    <div class="extra content">
      <span class="right floated">
        Joined in 2013
      </span>
    </div>
  </div>
  {/roster}
</div>
</div>
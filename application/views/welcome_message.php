<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="appMasthead" class="ui inverted vertical center aligned segment">
    <div class="ui text container appCenterVertical">
      <h1 class="ui inverted header">
        Roster Manager
      </h1>
      <h2>Start Managing Your Roster Now!</h2>
      <a href="/team/page">
      	<div class="ui huge primary button">View Team<i class="right arrow icon"></i></div>
      </a>
    </div>

</div>

<div class="ui container stripe segment">
	<div id="appRosterCards" class="ui link cards">
  {roster}
  	<div class="card" onclick="window.location.href='/SinglePlayer/index/{PlayerID}'">
    <div class="image">
      <img src="img/players/{Image}">
    </div>
    <div class="content">
      <div class="header">{PlayerName}</div>
      <div class="meta">
        <a>Number {Num}</a>
        <a>Position {Pos}</a>
      </div>
    </div>
    <div class="extra content">
      <span class="right floated">
        {College}
      </span>
    </div>
  </div>
  {/roster}
</div>
</div>
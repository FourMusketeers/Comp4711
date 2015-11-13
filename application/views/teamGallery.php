<div class="ui container">
<h1>New England Patriots</h1>
    <div class="ui toggle checkbox">
    <input type="checkbox" checked name="public" onchange="window.location.href='/team'">
    <label>View In Gallery Mode</label>
  </div>
<div class="ui container stripe segment">
	<div id="appRosterCards" class="ui link cards">
  {roster}
  	<div class="card">
    <div class="image">
      <img src="/img/players/{Image}">
    </div>
    <div class="content">
      <div class="header">{PlayerName}</div>
      <div class="meta">
        <a>Number: {Num}</a>
        <a>Position {Pos}</a>
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
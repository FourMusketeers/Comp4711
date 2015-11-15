<div class="ui container">
<h1>New England Patriots</h1>
    <div class="ui toggle checkbox">
    <input type="checkbox" checked name="public" onchange="window.location.href='/team/pagelayout'">
    <label>View In Gallery Mode</label>
  </div>
<div class="ui container stripe segment">
	<div id="appRosterCards" class="ui link cards">
  {roster}
  	<div class="card" onclick="window.location.href='/SinglePlayer/index/{PlayerID}'">
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
<br />
<br />
<div class="ui grid">
  <div class="eight wide column">
    <div class="ui small button">
      <a href="/team/">Page 1</a>
    </div>
    {options}
  </div>
  <div class="eight wide column">
    <div class="ui pagination right floated menu">
	  <a class="icon item {goFirst}" href="{firstPage}">First</a>
      <a class="icon item {showLeft}" href="{previousPage}">
      <i class="left chevron icon"></i>
      </a>
      {pages}
        <a class="item" href="/team/page/{pageNum}">{pageNum}</a>
      {/pages}
       <a class="icon item {showRight} " href="{nextPage}">
      <i class="right chevron icon"></i>
	  <a class="icon item {goLast}" href="{lastPage}">Last</a>
      </a>
    </div>
  </div>
</div>
</div>
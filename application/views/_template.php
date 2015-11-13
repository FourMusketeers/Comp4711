<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>{pageTitle}</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/semantic/dist/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="/css/app.css">
	<script src="semantic/dist/semantic.min.js"></script>
  <script src="js/app.js"></script>
</head>
<body class="appBody">
<div class="ui large top fixed hidden menu">
  <div class="ui container">
    {menubar}
    <!-- <div class="right menu">
      <div class="item">
        <a class="ui button">Log in</a>
      </div>
      <div class="item">
        <a class="ui primary button">Sign Up</a>
      </div>
    </div> -->
  </div>
</div>


<div id="appContent">
  <!-- Page Contents -->
  <div class="appContainer">
    {content}
  </div>

    <div id="appFooter" class="ui inverted vertical footer segment">
      <div class="ui container">
        <div class="ui stackable inverted divided equal height stackable grid">
          <div class="three wide column">
            <h4 class="ui inverted header">About</h4>
            <div class="ui inverted link list">
              <a href="#" class="item">Leon Ho</a>
              <a href="#" class="item">Duy Le</a>
              <a href="#" class="item">Andrew Morishita</a>
            </div>
          </div>
          <div class="three wide column">
            <h1>COMP 4711</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

<script>
  document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
  ':35729/livereload.js?snipver=1"></' + 'script>')
</script>
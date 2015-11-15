<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   ?>
<form class="ui fluid form" action="/save/Index/{PlayerID}" method="post" enctype="multipart/form-data">
<div class="ui container">
   <div id="validation_error">{errors}</div>
   <input type="text" name="playerName" value="{PlayerName}">
      <div class="ui pointing label">
         Player Name
      </div>
   <div class="ui two column stackable grid container">
      <div class="column">
      <img src="/img/players/{Image}" alt="Image of {PlayerName}" width="200px" height="200px"/>
      <br />
      Select File To Upload:
      <br />
      <input type="file" name="userfile"  />
      <input type="hidden" name="image" value="{Image}">
      <div class="inline field">
         <input type="text" name="pos" value="{Pos}">
         <div class="ui left pointing label">
            Player Position
         </div>
      </div>
      <div class="inline field">
         <input type="text" name="num" value="{Num}">
         <div class="ui left pointing label">
            Player Number
         </div>
      </div>
      </div>
      <div class="column">
         <div class="inline field">
            <input type="text" name="age" value="{Age}">
            <div class="ui left pointing label">
               Age
            </div>
         </div>
         <div class="inline field">
            <input type="text" name="weight" value="{Weight}">
            <div class="ui left pointing label">
               Weight
            </div>
         </div>
         <div class="inline field">
            <input type="text" name="college" value="{College}">
            <div class="ui left pointing label">
               College
            </div>
         </div>
         <button class="ui primary button" type="submit">
            Save
         </button>
         <button class="ui button" type="reset">
            Reset
         </button>
         <a href="/save/delete/{PlayerID}" class="ui red button">
            Delete
         </a>
      </div>
   </div>
</form>
</div>
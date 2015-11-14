<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   ?>

<div class="ui container">
   <h1>{PlayerName}</h1>
   <div class="ui two column stackable grid container">
      <div class="column">
      <img src="/img/players/{Image}" alt="Image of {PlayerName}" width="200px" height="200px"/>
      <p>Position: {Pos}</p>
      <p>Player Number: {Num}</p>
      </div>
      <div class="column">
         <h1>Age</h1>
         <p>{Age}</p>
         <h1>Weight:</h1>
         <p>{Weight} lbs</p>
         <h1>College</h1>
         <p>{College}</p>
      </div>
   </div>
</div>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<div class="ui container">
  <h1>League</h1>
    <table class="ui single line table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Wins</th>
          <th>Losses</th>
          <th>Ties</th>
        </tr>
      </thead>
      <tbody>
        {teams}
            <tr>
                <td>{TeamName}</td>
                <td>{Win}</td>
                <td>{Loss}</td>
                <td>{Tie}</td>
            </tr>
        {/teams}
      </tbody>
    </table>
</div>

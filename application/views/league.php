<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<div class="ui container">
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
                <td>{name}</td>
                <td>{win}</td>
                <td>{loss}</td>
                <td>{tie}</td>
            </tr>
        {/teams}
      </tbody>
    </table>
</div>

<?php
require_once "db.php";

$db = new DB("127.0.0.1",'HMS','root','');

function getApart()
{
  $aparts = DB::query("SELECT `id`,`forType`, `name` FROM `aparts` ORDER BY 'id' DESC");
  $types = DB::query("SELECT `id`, `name`,`price`,`capacity` FROM `Types`");

  foreach ($types as $type) {
    echo"<optgroup label='".$type['name']."'>";
      foreach ($aparts as $apart) {
        if($apart['forType'] == $type['id'])
        {
          echo '<option cap="'.$type['capacity'].'" price="'.$type['price'].'" value="apart'.$apart['id'].'">'.$apart['name'].'</option>';
        }else {
          continue;
        }
      }
    echo "</optgroup>";

  }

}

function getWorkWith()
{
  $comps = DB::query("SELECT `name` FROM `WorkWith` ");
    echo '<option value=""></option>';
  foreach ($comps as $comp) {
    echo '<option value="'.$comp["name"].'">'.$comp["name"].'</option>';

  }

}

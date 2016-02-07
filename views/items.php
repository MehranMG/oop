<?php
include '../model/items_model.php';

$items_model = new Items_model();
var_dump($items_model->get_all()); exit("  | <b>".'items_file ln:'.__LINE__."</b>");
var_dump(''); exit("  | <b>".'items_file ln:'.__LINE__."</b>");
 ?>
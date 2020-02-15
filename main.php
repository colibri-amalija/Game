<?php
$n = 112345678;
session_start();

require 'vendor/autoload.php';
require "connection.php";

$app = new \atk4\ui\App("Amalia");
$app->initLayout('Centered');

$columns = $app->add('Columns');
$col_1 = $columns->addColumn(3);
$col_2 = $columns->addColumn(10);
$col_3 = $columns->addColumn(3);

$val=$col_2->add(['FormField/Line','1']);


$clicker = $col_2->add(["Button","*click here*","green fluid big"]);
$clicker->js('click',new\atk4\ui\jsReload($val,['val'=>$val->jsInput()->val(new\atk4\ui\jsExpression('parseInt([])+1', [$val->jsInput()->val()]),$val->jsInput()->focus())]));

  $save = $col_2->add(["Button","save","blue big"]);

  $exit = $app->add(['Button',"Exit","red"]);
  $exit->link(["exit"]);


$x2 = $col_3->add(["Button","x2 = 10$","inverted pink"]);
$pus = $col_3->add(["Button","JA NE LOX, +100.000, а у тебя- ČURBĀNS GALVĀ!","inverted purple"]);

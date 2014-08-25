<?php
require ("includes/connect.php");
require("includes/headerForm.php");


$tryCategory=true;
$categoryName = $_POST['categoryName'];
if($categoryName=='') $tryCategory=false;
$categoryDescription = $_POST['categoryDescription'];
if($categoryDescription=='') $tryCategory=false;

$resultCategory = mysql_query("INSERT INTO categories (cat_name, cat_description,cat_date_create) VALUES ('".$categoryName. "','".$categoryDescription. "',now())");


require("includes/createCategoriesForm.php");
require("includes/footerForm.php");
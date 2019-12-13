<?php
session_start();

$table=$_POST['table'];
$_SESSION['Table']=$table;

echo $table;
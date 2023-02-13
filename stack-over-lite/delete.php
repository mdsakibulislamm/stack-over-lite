<?php
session_start();
include 'core/questions.php';

$question = new questions();

if(!isset($_GET['qid'])){
	echo "Invalid Request";
}
$question->delete($_GET['qid']);
header("location: index.php");

?>
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//include 'website/db_functions.php';
//$link = db_connect();
 
if(isset($_POST)){
extract($_POST);

print_r($_POST['team_name']);



$team_name = $_POST['team_name'];
$member1_name = $_POST['member1_name'];
$member2_name = $_POST['member2_name'];
$member3_name = $_POST['member3_name'];
$member4_name = $_POST['member4_name'];
$phone_no = $_POST['phone_no'];

echo $team_name;
echo $member1_name;
echo $member2_name;
echo $member3_name;
echo $member4_name;
echo $phone_no;

$DBHOST = "localhost";
$DBUSER = "root";
$DBPASS = "";
$DBNAME = "csi_chatbot";

$link = mysqli_connect($DBHOST, $DBUSER, $DBPASS); 

if (!$link) {
    die('Could not connect: ');
}

$db_link = mysqli_select_db($link, $DBNAME);
if (!$db_link) {
    die('Could not select database: ');
}





$sql = "INSERT INTO user (team_name,member1_name,member2_name,member3_name,member4_name,phone_no) values('$team_name','$member1_name','$member2_name','$member3_name','$member4_name','$phone_no') ";	
			

			
			$ret = mysqli_query($link,$sql) or die(mysqli_error($link));

}
?>


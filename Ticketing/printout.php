<?php 
session_start();
require_once("control.php");
$id = $_GET['id'];
$tick->databaseinsert();
$retr = $tick->databaseretrieve($id);
$tick->logout();

/*var_dump($retr);
echo $retr[0]['name'];*/
 ?>
<p></p>
NAME  <?php echo $retr[0]['title']. " ". $retr[0]['name'];?>
<p></p>
GENDER <?php echo $retr[0]['gender'];?>
<p></p>
PHONE NUMBER <?php echo $retr[0]['phone_number'];?>
<p></p>
EMAIL ADDRESS <?php echo $retr[0]['email_address'];?>
<p></p>
DATE OF BIRTH <?php echo $retr[0]['dob'];?>
<p></p>
NEXT OF KIN <?php echo $retr[0]['next_of_kin'];?>
<p></p>
NEXT OF KIN'S PHONE NUMBER <?php echo $retr[0]['kin_no'];?>
<p></p>
CONVENIENCE <?php echo $retr[0]['convenience'];?>
<p></p>
FROM  <?php echo $retr[0]['location'];?>
<p></p>
TO  <?php echo $retr[0]['destination'];?>
<p></p>
<a href="index.php?logout=yes" style="text-decoration:none; color:red;"><!-- <input type="submit" name="logout" value="LOGOUT"> --><h2>LOGOUT</h2></a>
<?php
session_start();
include('connection.php');
$sec=$_SESSION['section'];
$query="select * from candidate where section=\"$sec\"";
$result=mysqli_query($dbh,$query) or die("error connecting");
echo '<form id="myform">';
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo '<input type="radio" id="na" name="vote" value='.$row['id'].'/>'.$row['id'].'---'.$row['name'];;
echo '<br/>';
}
echo '</form>';

?>

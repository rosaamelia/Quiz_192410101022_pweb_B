<?php
require "config.php";

?>
<?php 

if(isset($_POST['SIMPAN'])){
   
	
    
    	$username = $_POST['username'];
    	$password = $_POST['password'];
    	
	
    	mysqli_query($mysqli,"INSERT into user VALUES('$username','$password',null)");
   	 	header("location:index.php");
	
    
}
?>
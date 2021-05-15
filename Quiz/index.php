<?php
require 'config.php';
if( isset($_COOKIE['username']) and isset($_COOKIE['password'])){
    $username = $_COOKIE['username']; 
    $password = $_COOKIE['password'];
  
    
    $result = mysqli_query($koneksi, "SELECT username FROM user WHERE UserName = $username");
    $row = mysqli_fetch_assoc($result);
}
if(isset($_POST["LOGIN"])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if($username == "" || $password == ""){
        
        echo "<script> alert ('Username dan Password wajib diisi!');</script>";
    }
    $sql = mysqli_query($mysqli,"SELECT * FROM  user WHERE UserName = '$username' AND Password = '$password'");

    if(mysqli_num_rows($sql) !=0){
        if(isset($_POST['remember'])){
            setcookie('username',$username,time()+360);
            setcookie('password',$password,time()+360);
        }
        echo $_COOKIE['usename']; #cek cookie
        session_start();
        $_SESSION['username'] = $username;
        header ('Location: Home.php');
        
    }
    else{
        echo "<script> alert ('Username dan Password belum terdaftar!');</script>"; 
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: linear-gradient(to right, #b92b27, #1565c0)
        }
        .box {
            margin: 250px auto;
            width: 350px;
            padding: 20px;
            border: 1px solid #ccc;
            background: #191919;
            color :white;
            text-align: center;
            
        }
        .input{
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #3498db;
            padding: 10px 10px;
            width: 250px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s
        }
        
    </style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuizLogin</title>
</head>
<body>
    <form action="" method = 'POST' class='box'>
    <h1>LOGIN</h1>
    <table>
			<tr>			
				<td><input class="input" type="text" name="username" placeholder='User Name'></td>
			</tr>
			
			
            <tr>
				<td><input class="input" type="text" name="password" placeholder='Password'></td>
			</tr>
            <tr>
				
				<td><input type="checkbox" name='remember' >Remember me</td>
			</tr>		
            <tr>
				
				<td><button class='input' type="submit" name='LOGIN' >LOGIN</td>
			</tr>
            <tr>
				<td>klik <a href="regis.php">Daftar</a> untuk menambahkan username baru!</td>
			</tr>
            	
           
	</table>

    </form>

</body>
</html>
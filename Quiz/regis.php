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
            width: 300px;
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
    <title>Document</title>
</head>
<body>

	<form class='box' method="POST" action="actionRegis.php">
	<h1>Daftar</h1>
		<table>
			<tr>			
			
				<td><input class="input" type="text" name="username" placeholder='User Name'></td>
			</tr>
            <tr>
				
				<td><input class="input" type="text" name="password" placeholder='Password'></td>
			</tr>
				
				<td><button class='input'type="submit" value="SIMPAN"name='SIMPAN' >SIMPAN</td>
			</tr>
			</tr>
				
				<td><button class='input'><a style="text-decoration:none" href="index.php">KEMBALI</a></button></td>
			</tr>				
		</table>
	</form> 
</body>
</html>
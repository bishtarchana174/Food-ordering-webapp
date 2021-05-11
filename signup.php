<?php
	if(isset($_SESSION["id"])){
		header("location: menu.php");
	}
	require "./includes/common.php";
?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
        <style>
        *{
            font-family: sans-serif;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
 
        body{
            margin: 0 auto;
	    background-image: url("https://cdn.pixabay.com/photo/2018/05/28/06/00/whitespace-3435353__340.jpg");
            background-repeat: no-repeat;
	    background-size: 100% 720px;
        }
        
        .header
        {
            background-color:purple;
            color:#fff;
            border-color: #080808;
            min-height: 50px;
            border: 1px solid transparent;
        }

        .inner-header
        {
            width:80%;
            margin:auto;
        }

        .header-link
        {
            float:right;
            font-size:14px;
            height: 50px;
            padding: 15px 15px;
            font-size:16px;
            font-weight: bold;
        }
        
        a{
            text-decoration: none;
            background-color:transparent;
            color:#ededed;
        }
 
        h1{
            color: white;
            text-align: center;
            margin-bottom: 12px;
        }
        
        .form-wrapper{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 20px;
            width: 400px;
            padding:20px;
            border: 1px solid #ffffff;         
        }

        input{
            width: 100%;
            padding: 10px;
            margin: 10px 0px 10px 0;
            background: linear-gradient(to right,#7979f4 10%,#ffc0cb);
            border: 1px solid white;
            border-radius: 5px;
            color: #ffffff;
            display: inline-block;
        }
        
        button[type="submit"]{
            font-size: 20px;
            color: white;
            background: #014d6f;
        }

    </style>

</head>
<body>
                
    <div class="header">
    <div class="inner-header">
                          
        <div class = "header-link">
        <a href="login.php">Login</a>
        </div>
                
        <div class = "header-link">
        <a href="menu.php">Menu</a>
        </div>
            
    </div>         
    </div>
    <br>
    <h1><center>     WELCOME!!</center></h1>
    <br>
    <br>
    <div class="form-wrapper">
       
    <h1><center>Sign up</center></h1>
             
    <div class="container panel-margin">
    <div class="panel panel-default">
        <div class="panel-body">
            <form method="post" action="signup_script.php">
		<div class="form-group">
	            <input type="text" class="form-control" name="name" placeholder="Name" required>
		</div>
                
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                
                <div class="form-group">
                    <input type="tel" class="form-control" name="contact" placeholder="Contact" required>
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control" name="city" placeholder="City" required>				
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control" name="address" placeholder="Address" required>
                </div>
                <br>
                
                <div>
                <center>
                <button type="submit" class="btn btn-primary">Submit</button>
                </center>
                </div>
            </form>
        </div>
      </div>
      </div>
    </div>
</body>
</html>
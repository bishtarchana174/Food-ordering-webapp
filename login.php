<?php
	require "./includes/common.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title> Login Form</title>
 
    <style>
        body{
	margin: 0 auto;
	background-image: url("https://media.istockphoto.com/photos/technology-abstract-picture-id1148091793?k=6&m=1148091793&s=612x612&w=0&h=m2vuawlHNUvykE4qVanxHaldO6ge2SxFx5EiGSe9nE0=");
	background-repeat: no-repeat;
	background-size: 100% 720px;
            }
        
        .container{
	width: 500px;
	height: 450px;
	text-align: center;
	margin: 0 auto;
	background-color: rgba(44, 62, 80,0.7);
	margin-top: 100px;
         }
         
        .container img{
	width: 150px;
	height: 150px;
	margin-top: -60px;
         }

         
        .form-group::before{
	font-family: "FontAwesome";
	padding-left: 07px;
	padding-top: 40px;
	position: absolute;
	font-size: 35px;
	color: #2980b9; 
         }

        .btn-login{
	padding: 15px 25px;
	border: none;
	background-color: #27ae60;
	color: #fff;
        }
                 
        input[type="text"],input[type="password"]{
	margin-top: 30px;
	height: 45px;
	width: 300px;
	font-size: 18px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 40px;
         }
         input[type="text"],input[type="email"]{
	margin-top: 30px;
	height: 45px;
	width: 300px;
	font-size: 18px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 40px;
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
       body
{
    width: 100%;
    height: 100%;
    margin: 0;
}

a
{
    text-decoration: none;
    background-color:transparent;
    color:#ededed;
}

.header
{
    background-color:blue;
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
body
{
    width: 100%;
    height: 100%;
    margin: 0;
}

a
{
    text-decoration: none;
    background-color: transparent;
    color:#ededed;
}
.content
{
    min-height: 600px;
}
.panel-footer{
    font-weight:bolder;
    font-size:20px;
}
        </style>
</head>
<body>
              <div class="header">
            <div class="inner-header">
                
              
                <div class = "header-link">
                    <a href="menu.php"><span class="glyphicon glyphicon-menu"></span>Menu</a>
                </div>
                
                <div class = "header-link">
                    <a href="signup.php"></span>Sign Up</a>
                </div>
                
            </div>
        </div>
        
     
        <br>
    <div class="heading"><h2><center>WELCOME AGAIN!!</center></h2></div>
    <div class="container">
	<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-_KKqeIL6GZxCM9nR6sBwjOF7gIGh0uRR0g&usqp=CAU"/>
        <br>
        <form action="login_submit.php" method="post">
            <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
	    </div>
                              
            <div class="form-group">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
	    </div>
                                   
	    <button type="submit" class="btn btn-primary btn-bock btn-login">Login</button>
                                                 
	</form>
        <br>
        
        <div class="panel-footer">Already have an account?Click <a href="signup.php">here</a> to create one.</div>		      
    </div>
</body>
</html>
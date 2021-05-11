
 <html>
<head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Fredoka+One&family=Lobster&display=swap');
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 50;
  position: fixed;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 10x;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
    </head>
<body>  
		
			<?php
				if(isset($_SESSION["email_id"])){ 
			?>
<center><span style="font: 36px bold;color: #101010; font-family: 'Fredoka One', cursive;cursor:pointer" onclick="openNav()">&#9776; FOODIZZ</span></center>
                        <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <br><br><br>
                            <a href="menu.php" style="font-size:35px; color: #00ffcc;">MENU</a>
                            <br>
                            <a href="index.php">Home</a>
                            <a href="cart.php">Cart</a>
                            <a href="logout.php">Logout</a>
                        </div>
			<?php
				}else{
			?>
<center><span style="font: 36px bold;color: #101010; font-family: 'Fredoka One', cursive; cursor:pointer" onclick="openNav()">&#9776; OPEN</span></center>
                         <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <br><br><br>
                            <a href="menu.php" style="font-size:35px;  color: #00ffcc;">FOODIZZ</a>
                            <br>
                            <a href="index.php">Home</a>
                            <a href="login.php">Login</a>
                        </div>
			<?php
				}
			?>
	
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "190px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>

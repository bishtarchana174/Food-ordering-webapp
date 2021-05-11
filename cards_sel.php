
<html>
<head>
	<link rel="stylesheet" href="css/stl.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>

<script> 
$(document).ready(function(){
  $("#flip1").click(function(){
    $("#panel1").slideToggle("slow");
  });
});
</script>

<script>
$(document).ready(function(){
  $("#flip").on("click", function(){
    $("#flip1").toggle();
  });
});
</script>

<script>
$(document).ready(function(){
  $("#flip1").on("click", function(){
    $("#flip").toggle();
  });
});
</script>
<style> 
#panel, #flip , #flip1 ,#panel1{
 
  text-align: center;
  
}

#panel , #panel1 {
  display: none;
}
</style>
</head>
<body style="background-image:url('images/image2.jpg');">
	<div class="wrapper" style="margin-top:100px;">
	<div class="payment">
		<div class="payment-logo" style="background-color:#1E90FF;">
		<p>p</p>
		</div>
			
	    <h3>Select Payment Method</h3>
		
		<div class="btn" style="background-color:#1E90FF;" onclick="fun2()">Cash On Delivery</div> 

		<br><br>
		<div class="form">
		 	
			<div id="flip" class="btn" style="background-color:#1E90FF;">Debit Card</div>
			<br><br>
			<div id="panel" style="width:300px;">			
			<div class="card space icon-relative"> 
			<br>

			<div class="card space icon-relative">
              <i class="fab fa-cc-visa" style="color:navy;margin-left:10px;"></i>
              <i class="fab fa-cc-amex" style="color:blue;margin-left:20px;"></i>
              <i class="fab fa-cc-mastercard" style="color:red;margin-left:20px;"></i>
              <i class="fab fa-cc-discover" style="color:orange;margin-left:20px;"></i>
            </div>
			
			<br>
				<label class="label">Card holder:</label>
				<input type="text" class="input" name="card_holder" placeholder="Coding Market"">
				<i class="fas fa-user"></i></div>

			<div class="card space icon-relative">
				<label class="label">Card number:</label>
				<input type="text" class="input" name="card_number" placeholder="Card Number" data-mask="0000 0000 0000 0000">
				<i class="far fa-credit-card"></i>
			</div>

			<div class="card-grp space">
			<div class="card-item icon-relative">
				<label class="label">Expiry Data:</label>
				<input type="text" class="input" name="expiry_date" placeholder="00 / 00" data-mask="00 / 00">
				<i class="far fa-calendar-alt"></i>
			</div>
			<div class="card-item icon-relative">
				<label class="label">CVC:</label>
				<input type="text" class="input" name="cvc" placeholder="000" data-mask="000">
				<i class="fas fa-lock"></i>
			</div>
			</div>
			
			<div class="btn" style="background-color:#1E90FF;" onclick="fun()">Pay</div>
			<br>
			</div>
			
			
			<div id="flip1" class="btn" style="background-color:#1E90FF;">Credit Card</div>
			<br><br>
		    <div id="panel1" style="width:300px;">
			<div class="card space icon-relative">
			<br>
			    <label class="label">Card holder:</label>
				<input type="text" class="input" name="card_holder" placeholder="Coding Market">
				<i class="fas fa-user"></i>
			</div>
			
			<div class="card space icon-relative">
	            <label class="label">Card number:</label>
				<input type="text" class="input" name="card_number" placeholder="Card Number" data-mask="0000 0000 0000 0000">
				<i class="far fa-credit-card"></i>
		    </div>
			
			<div class="card-grp space">
			    <div class="card-item icon-relative">
				<label class="label">Expiry Data:</label>
		        <input type="text" class="input" name="expiry_date" placeholder="00 / 00" data-mask="00 / 00">
		        <i class="far fa-calendar-alt"></i>
	            </div>

	            <div class="card-item icon-relative">
	        	<label class="label">CVC:</label>
		        <input type="text" class="input" name="cvc" placeholder="000" data-mask="000">
		        <i class="fas fa-lock"></i>
	            </div>
            </div>
		
            <div class="btn" style="background-color:#1E90FF;" onclick="fun()">Pay</div>
		</div>
		<div class="btn" style="background-color:#1E90FF;">
			<button style="color:white;background-color:#1E90FF;margin:0px;border:0px;cursor:pointer;"><a href="index.php" style="color: black;text-decoration:none;"><-- Go to home page</a></button>
		</div>
	</div>
	</div>
	
	<script  src="http://code.jquery.com/jquery-3.4.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
	<script>
		function fun(){
		alert("Succesfull Transaction !! Your Order is Confirmed");
		}
		function fun2(){
		alert("Your Order is Confirmed");
		}
	</script>
  </body>
  </html>
 
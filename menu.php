<?php
	require './includes/common.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&family=Lobster&display=swap');
        body
            {
                width: 100%;
                height: 100%;
                margin: 0;
                background-color: rgb(243, 178, 169);
            }
            a
            {
                text-decoration: none;
                background-color: transparent;
                color:#ededed;
            }
      
            
            .heading
            {
                font-style: normal;
                font-family: cursive;
            }
            
            footer
            {
                padding-top:20px;
                bodder-bottom:5px;
                margin: 5px;
                font-size:30px;
                padding-bottom:10px;
                background-color:#101010;
                color:#9d9d9d;
                bottom: 0;
                width: 100%;
            }
            .button
            {
                color: #fff;
                background-color: #c9302c;
                border-color: #ac2925;
                box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
                padding: 20px 10px;
                font-size: 18px;
                border-radius: 6px;
            }
            li{
                margin-top:10px;
                font-size:20px;
                border-width:0px 5px 15px 0px;
                padding-bottom:16px;
              }
            .thumbnail>img {
                display: block;
                max-width: 100%;
                height: 300px;
                
            }
            .thumbnail_default
            {
                border-color: white;
            }
            img
            {
                width: 500px;
                height: 300px;
            }

            header{
                text-align: center;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 30px 10%;
            }


            .nav_links{
                list-style: none;
            }

            .nav_links li{
                display: inline-block;
                padding: 0px 20px;
            }

            .nav_links li a{
                font-size: 26px;
                color: #101010;
                font-family: 'Fredoka One', cursive;
            }

            .nav_links li a:hover{
               color: #255784;
               background: rgb(252, 38, 0);
               box-shadow: 0 0 10px rgb(252, 38, 0), 0 0 40px rgb(252, 38, 0), 0 0 80px rgb(252, 38, 0);
            }
        </style>
</head>
<body>

    <?php
			require './includes/header.php';
			require './includes/check-if-added.php';
	?>
    <br><br><br><br><br>

    <div class="container">
        <center>
    <header>
    <nav>
    <ul class="nav_links">
        <li><a href="#FAST FOOD">FAST FOOD</a>
    </li>
        <li><a href="#INDIAN">INDIAN</a></li>
        <li><a href="#DESSERTS">DESSERTS</a></li>
        <li><a href="#CHINESE">CHINESE</a></li>
        <li><a href="#BEVEGRAGES">BEVEGRAGE</a></li>
    </ul>
    </nav>
</center>
</div>
    </header>
    <div class="container">
        <div class="row"> 
            
            <div class="container">
            <a name="FAST FOOD"></a>
            <div  class="jumbotron">
                <h1 style="font-size:45px; font-weight: bolder";>FAST FOOD  - SATISFY YOUR SNACK ATTACK</h1>
            </div>
            </div>
            
            <div class="col-md-4 col-sm-3">
            <div class="thumbnail thumbnail_default">
                <img src ="https://us.123rf.com/450wm/dolgachov/dolgachov1603/dolgachov160305233/55283534-fast-food-and-unhealthy-eating-concept-close-up-of-fast-food-snacks-and-cola-drink-on-wooden-table.jpg?ver=6">
                <center>
                <div class="caption">
                    <h3 style="font-weight:bold";>COMBO BURGER PACK</h3>
                    <p>Price: Rs. 400.00</p><?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                            <?php }else{ ?>
                            <?php if(check_if_added_to_cart(1)){ ?>
                            <a href="#" class="btn btn-success btn-block ">Added to cart</a>
                            <?php }else{ ?>
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php }
                            } ?>
                </div>
                </center>
            </div>
            </div>
              
            <div class="col-md-4 col-sm-3">
            <div class="thumbnail thumbnail_default ">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhig8FqUAiT1zxwUR1mFKQuzXrJ5NTm4smNQ&usqp=CAU">
                <center>
                <div class="caption">
                    <h3 style="font-weight:bold";>LA PINO'Z PIZZA</h3>
                    <p>Price: Rs. 250.00</p><?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                            <?php }else{ ?>
                            <?php if(check_if_added_to_cart(2)){ ?>
                            <a href="#" class="btn btn-success btn-block disabled">Added to cart</a>
                            <?php }else{ ?>
                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php }
                            } ?>
                    </div>
                </center>
            </div>
            </div>
              
            <div class="col-md-4 col-sm-3">
            <div class="thumbnail thumbnail_default">
                <img src ="https://images.hindustantimes.com/rf/image_size_630x354/HT/p2/2018/06/02/Pictures/assorted-junk-food_1b488780-6635-11e8-b4a9-2154dcd09999.jpg">
                <center>
                <div class="caption">
                    <h3 style="font-weight:bold";>COMBO FRENCH FRIES</h3>
                    <p>Price: Rs. 500.00</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                            <?php }else{ ?>
                            <?php if(check_if_added_to_cart(3)){ ?>
                            <a href="#" class="btn btn-success btn-block disabled">Added to cart</a>
                            <?php }else{ ?>
                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php }
                            } ?>
                        </div>
                </center>
            </div>
            </div>          
      
        </div>
              
        <div class="row">    
               
            <div class="col-md-4 col-sm-3">
            <div class="thumbnail thumbnail_default">
                <img src="https://hungryfinger.com/wp-content/uploads/2020/05/Veg-momos.png">
                <center>
                <div class="caption">
                    <h3 style="font-weight:bold";>MOMOS</h3>
                    <p>Price: Rs. 500.00</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                            <?php }else{ ?>
                            <?php if(check_if_added_to_cart(4)){ ?>
                            <a href="#" class="btn btn-success btn-block disabled">Added to cart</a>
                            <?php }else{ ?>
                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php }
                            } ?>
                    </div>
                </center>
            </div>
            </div>
                       
            <div class="col-md-4 col-sm-3">
            <div class="thumbnail thumbnail_default">
                <img src="https://www.foreverwallpapers.com/wp-content/uploads/2018/12/Fast-Food.jpg">
                <center>
                <div class="caption">
                    <h3 style="font-weight:bold";>VEG PANEER ROLLS</h3>
                    <p>Price: Rs. 200.00</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                            <?php }else{ ?>
                            <?php if(check_if_added_to_cart(5)){ ?>
                            <a href="#" class="btn btn-success btn-block disabled">Added to cart</a>
                            <?php }else{ ?>
                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php }
                            } ?>
                    </div>
                </center>
            </div>
            </div>
                   
            <div class="col-md-4 col-sm-3">
            <div class="thumbnail thumbnail_default">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrDYY8goQt320i_edyjy0gsG1sL-tdx51fqw&usqp=CAU"> 
                <center>
                <div class="caption">
                    <h3 style="font-weight:bold";>CHOW MEIN</h3>
                    <p>Price: Rs. 400.00</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(6)){ ?>
                        <a href="#" class="btn btn-success btn-block disabled">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
            
        </div>
              
              
        <br><br><br><br><br>
        
        <div class="row"> 
                
            <div class="container">
                <a name = "INDIAN"></a>
            <div  class="jumbotron">
                <h1 style= "font-size:50px; font-weight: bolder";>INDIAN FOOD</h1>   
            </div>
            </div>
              
            <div class="col-md-4 col-sm-3">
            <div class="thumbnail thumbnail_default">
                <img src="https://images.pexels.com/photos/2474661/pexels-photo-2474661.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
                <center>
                <div class="caption">
                    <h3 style="font-weight:bold";><center>KADAI PANEER</h3>
                    <p>Price: Rs. 400.00</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(7)){ ?>
                        <a href="#" class="btn btn-success btn-block disabled">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
                
            <div class="col-md-4 col-sm-3">
            <div class="thumbnail thumbnail_default">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUTExMVFRUXGBcXGBcVFxgXFxcXFxcXFxcXGBcYHSggGBolHRUXITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGxAQGi0mHyYtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIALcBFAMBIgACEQEDEQH/xAAcAAAABwEBAAAAAAAAAAAAAAAAAQIDBAUGBwj/xABAEAABAwIDBQUFBQYGAwEAAAABAAIRAyEEBTEGEkFRYRMiMnGBkaGxwdEHQlJi8BQjcpLh8YKissLS4jNz02P/xAAZAQADAQEBAAAAAAAAAAAAAAAAAQMCBAX/xAAkEQACAgICAgMAAwEAAAAAAAAAAQIRAxIhMQRREyJBMmGRFP/aAAwDAQACEQMRAD8Av2ipiH7ziSSVqMHs7DJcQ3zScuwopaRPuUqpWJMkypJJdm2zNY/JahcQ0AgHWRdXLaRAFlIlGlSHZH3TyQnmpCIXQAhr06HJl1LlZNGrGtigCVKJ1WLlMdqqLOM3IIYy7jpH3QdD5mbdL8bJuuR0P5znm73GXdy1Df4uZ/L8eGQxxLnTUcXO5cf+vxTmIxIad1l3fedyJ1Dfqq57iPPr1XBm8hydROqEIwW0hxlPoAOn6unNwckTH9Lp+baLgld8nXBpq4iRTHEwnG0BFiPJI3+AQcbLDbNqhBImISZB4JTlW40VakCi5rW3lwuZHAcAqQVsUmkuiRiqTQJdDR1UEVC10MJ0nojGAcXATvAC5N5KnYfAblzc8+nJW2jFd8kPtJ9B4DOHsN7cwfCVrcszoOHlqCbjr1b1+NyMfiqIi6j0azqTgZNtDy/oujD5L/SeTAvw6U3HjmnsPjA4wCFgRVNdzQyoWWuwRr0Ovs9y1eU5aKYB4j3+q6rbf9HNSSLNj6jnlpG6BxFyevQKwo0gB+rpqin2lbUaMtjoKUkAJcKhkMIQiCUEAEgEYCNMRHxuDZVYWPaHNPP4g8D1XL8wDWvq4WoS6mHEA8RHhcDwcPqt9tJnYoMhsGo7wjlzcVy3HNJl0mTeeMqcpc8G4rgtMJtficG3sHtNXdux4E7zDofigqrC529jd2dEFRZX6M6L2djJSQjCDUgDCOEcIwgBIRFOEJDkANvcoeOuJGo96equUR9RJjK3FZjusJPDUdOXrYeqy+JxZaC4mXvJM8hxPy9qstoX94N4u3Z9pJ/2rPYuqDvGJgWHloFx+RNqonRghfIoYfeu0n4ieKTXou4nTlIPv1U3B0wGSQGmJjr5i6MtkTPvlcLnT4Kf8zcrsj4cuBk8tD/RP0q0iQZ8k1ijutcRYwYnRN4SsHtBB8+F+XRYcbWx0QSj9UTHWKMpKLthMKdG7oU4dEmlSaLNho5WAS96OBSKjJQhi6cf2SnlNspwlEpPsBFak10SASDI6Hmo+IoyFKcDNkKgW02jPHRQF7qbg5ti0z7F1LLMQKlNlQfeE/ULm2NYrzZvPhRosY5wEl+6Dx3SJj2j2r1PGnceTizwpnQKQUhgVFhc5DuSsKePBXSpxOfVlkEpQRikoV090LVkuUYcoTsQBqQEj9qHCT5JbhqT3VFRZ3tHTod2Qah0YDfoXcgoeeHGPEUnCm3iWgl/oeHoPVZyllYpmXNc5x+869+ankytfhmyPiKzqji95kn9QOijVqchWApyeE8p+SD6KmnfJdNNGXr4a6CuquGugqbGdTqhCUAjhGrEwEIO96CKEAJlNPcnS1R6tM8EwImIeom+nMVTcJtbWQoLaqw2aRR7S2qg9D8P+pVM2kHXWg2gZvbrh5H3x7i5UA7p4+i4PKT2s7PGf1JNNkCErd4aDmkUnFPtcuB8HXZCx1EuYW6yIWew7quHqGxLSb8vOea1rZOqS5gvIVcebVNPolkx7crsKi8OAI0IlLawTKaNQNt6pdOsD081Jp9jjkT4FhKhJanVhlQhCbrC1k60SUxiH9QI56LUFb4Ho2RRXJcBxB8rcVLmyiYdpJk6fq6k7/sW8ndIzPFGLtdlfinXVbm+SPr08PucDXJPm6mB/pKtMUOS3OX5MG0qbSLtaJ8zc/H3L0fEum0cXk1wjn2W5DXp6Vqn8xj3rQYTBYqR++d6hv0WtpZcOSl0sGBwXQ4N9kFKinw+Cqxeo53sCsaOAJFy71J+qsW0U+xiaxoy5FfSyxo4KXSwwHBS2hGtKKQrGW0hyTdfBMd4gFLIQIWzLM1X2apb/absO0kE/CYVTisEWkg/oLdFqrsywgLdJjTosygmuAi6MQ/D3RK0fRugoUVs1yCEoLoJAlEiRtQACkOS0lyAItZVWLog6QCB6QresyyrK8gpMaM9mtbda+WkwCYAkmL93rZUlUzD2kFrgHNI0IIkEHqFssXSbUYWO8Lw5pixgiDfhquf5eDha7sFV3uzJmhUd1AJFrEEnQaHzUcuLePHZTHk0kTmunonRUGiKvRLDBt+teoRgaaHqOC8mUWnTPSTT5QslNvfZLAsbmeQFkgUw7W3ksKv0bv8GGAG2h6+afp8rJD8I2RYk9eCdpUoTnJVwRx4qlsx1qYqPM2Nkp7TFlRYzH1mG8RNu7w4QVrFjc2WlkjDllzUxB4C3NN+MidBw5lRssxTawDvvcQrQMgfNOT+N6pclo5Y63EDG2SCLWCcDuqFOjvBz3O3KTBL6h0A5D8TjwCxjhKcqRHJNLlh5Uyk14rV3BtJr2tG9YPqHwMHxPIBdHpvDrgyvO+0+fftNQAAto05bSp8gdXO5vdEk+Q0C132d7YOkUKrrgdwk+ID7vmPevchj+ONHlTybys66GJxrEzgsUHiVM3VtcmBAalgI4QhMABKRI0AHCCCNMQmETglFBAFLisD3rIK3c1EhwTC2MoyiCJZGBGERKMIGBAo+KI/NAhmo1V+LYrV7VCxNMfRDGijeIKoNtMqbVoOqwe0pNc9hbrIEx5W0WnxNKbqHvTZTTpjasxeR7RNrs3KgG8PuzHqw8PL+6n/ALOTJpnfHHg5o6t+enVYfaLLqlPF1QxjyC4vaWtJ7rr2gaAmEzQziqC1weQREEWPtGqJ4IzCOWUeDaurHRP03F0Cfoo+T5yMQ2arGlwMbw7rulxqfNWTcLTJlr908nD5j6Lgy+I1/E6cPkNcS/0j1KbhqhTBHFPV6ZHFpHOZ92qZY6TAgnkJ+C5vgyL8OpZoexYJTFSgHeIBSxhn/gd/K76JxuBqfhjzLR8TPuTjgy/iYnlx+ytw+XMYZa0AnkIUtzHGAJk+pPol1qD2AkxPmT9Fi8/z+rvOptdutFjumCfMjh0XRDw5zf3ZGXkxivqjcOp0qUOxVVrBwpgjtHf8QsvtftF+1FmFwze4CN1rA65NiY1IEySVncly+ri67aNPxuuXGSGtHie7oPiQOK7tsxsxRwdPdptlxA33u8TyJueWpsF6OPFHGqicc8ksnZyZn2YY2++abbWIJfve4QOvuUd+wmKYZBEtMtImLQZn7t59i74WJt+FadQttswkjnmze0FVjxSxIDXcHNBDDyEnQ/H3LoGFxkpitkFF+rZ9SgzIwzwPcOPeO8PK949VKpIpaZbMqgpcKna2qzxNnq0/IqVRzBuhMdDZaU/Zlx9E4hFCJtVp0IS5VDISNBCUAABESkvqgamFnc62xw1EEB4qv03KZm/5naNHv6IbS7EaEuRLkuOzytWeXmpuzYNaS0NHKJ96Cg/JXozsjqn0QBRwiKqUBCNqNEWoACNw0BQOiMuQMIhR6jeSfptnVLKBEI4EEXlMOy1n4fjKsiEmEDKV+AaJgC/w5eSz+J2PwpDwKLWh8b27LfDpAabei2z6Sjvw6QHL8w2MdSaHYVxD26hzj3xrB4A+gHxSMVi3UGjtwWugElt2zMWPDyPPiuk1cNdVObZNSrt3arN4SHRcXbp/ZLvsOujH1scwM3i4AETM+Sz2c5g0Wae90PzCutudmDusdh6YAb3dxgAkOOsaWMe0qVsd9nDKrGVsS9xmD2TRuxGrXk3NwR3Y6FNRXYnJmY2b2grsfuMY6vYnsxvOdHMRMXK6blL61Wd7D1KRsYfA1nQz008loskyGjhafZUW7rZJuS4ybm5MqwFLom0gVnNc4p42rTqNpYZwcHdnLnNbM/fZJhzRa8jXjeOY5pgcQwvdWpvaQ7dcSLb0TE6aX5L0jXaqPMqDXAhzQQRBBEyOR56otRDWzBfYjSBxNcnUUmgeTn3/ANLV2YNXP9m8sp4XGCpSAa2o3s3NAEXILXD8JBHCAZ8l0QBCkmFUN7qMBLhJTAEJYRIBABwo2KwDXggjX9WUoI0NJ9hdGMzTA4mjei4Ob+F1/YQVTN2sxbbdi2RqC8j/AGldKe0GxVHmOUNJkAKXx69G9r7Of5j9pWKpEMNBjTAPjLhf/CFVYj7RMfU8L2M/hbf/ADT8Ft822Up127rhEGQRZw8jHuXOM0yN2Hqljh1aebTMetrjmm3SIybQVfNa+ItWrPd0c47v8ug9idw+HI4JmnTHqrLCyLG/T6clzZJkmx1lMIJ1lUNHDneZ5fJBQpmkjrrm2sUqUGogF6RYVPNJYNet0pJJQMSHTwi6DblF5J5jYHmkAZSXIFArQggjhBEAgAQgWpQQaEANPphQ8VRgFWDlCxb4SY0Uhoue8MAmfcOJPJaelRDQALAKBk+Hu6p6Dy1PyVolDoGJhE9KJRQtiI1VpKq8Th5V45qjVqSzJWNMy+KwputNkWM7SmAT3m2PmOKg1qWqjUa3Yv3uBgGPiop6so1aNTCRCFCsHCQlkLoJCEoIkYQAAjBQRIAUkOalFBMRHdSWZ2yyA16YdTA7Vl28nA6tPxHULWFJc1JxTVCfJwmkAdLHi06+nNSqT+Een0UvbPLDRxT7Q1532x119d6faoOFqb1na/i+q87JGiD7J9HK31RvN0FvcD849ES0eCp7jGt0MSfM3PxQVlFJHUoKjcwiLrKNhMcyq0OY4OaeIM3HwKkB66hB7yS/RDfSCUmMIOIhS3aKIwXClPQgYgoFGSiQARCWCiQhMQZSkhKBugBLiq3FulWFXmq7FP1WZvg1EsMBTim0evtMp+6bwt6bfJONKaEJCMlEhKYhSQ9qWCgUAQMTTVbWZqFe1BKrsVR1WJxs0mV+Cx3ZO3XHu8Dy6HotHQxIcsnj6chV+Ezl1Cz95zAddXNHzHvUozcXRtx25OhIQqvLs0a9oc1wc06EKyY8ELoTTJNUKQCCILQgwiQCEoAIokZSXoA579p+5vUJ8UP9ktgn1lUOzOB7SrvHwMEnkSdAp+3mM7bE7jYPZDdtqSbu9mkdCrXJ8D2GHAPid3neZ0HoFySqU2YirkJxFXvIKBicTDkaR1UZ3AZnVw79+m6AfE03aY0JC2uTbcUKp3av7l44PPdJ6O+sLCbsqvzLCQN4Kik0yM01yjuDa7SJmUbXz6LheXZzXogtp1HNaQREyBPEA6HqFb0tucaxviY/nvsvH+Ehb2RhTOvdrBCsHlcXw/2h4nel9Ok5vIBwMdCSfgusZTmdLEsFSi7ebEHmCQHbpHMAhNM0mmTShFkEGpmgNKMom8UCgAAoEonBE5ADdd514cQoFV1/NTKpVe90zKxMaLLJ391zeRn2/wBlKNiqLBYrs3ydND68VoHCbpwdoJLkSko0Z5rYggjb8kkBGECDCYrMmyfSHBMClxtCVn8XhC6xHmtfXpyqjFYdRnCzcZGOpNqUXTTcWmbjgfMcVoMHtTu2qtLT+Jtx6jUe9IxGDuoNfBCIWI2jTaZr8BtHSqTuPa+LHdIJB6jUeqs6ePYeK83Z4x7MVU7wDp1pkiAQO6TziJT2DzrEs8NeqPNxPudKvyiGyPSIqjmEe+F58ZtXjgI7c+e6yf8ASlHOcXVHfxFS/AO3QfRsJfJQtkdyzDO6FH/yVWNPInvejRcrH53tyHtdToB7ZsKhgW4wNR56rnWGYQZ15zxVzg8GHkRb4zy9yhPO+kYcm+EWmzOV9pUL3+Bv+Zx+S02Z7x0aT5JvBltNoaLAfqVGzjOhSYTx0A5lailrRaMdTMZqA2pFSoWOid1rd6BeJIOvTyQVW+lVrOc8NLpNyOaCoqFsx+heFNp4cOEESCstleYmmdx8gAxfVp4graZY8OhTnFplYyTRls3yl1I7wEsPHl0Kr6b11huBa9hDgCCPCdCsDn+zrqJL2AlnEcW+fMdVrR0c840+Ckc2D0W0+zPO+xxHZOP7utDegePCb6TceoWOZcQg2QsWYTo9GOCSVl9jdrm4r908blRoEd6Q8CASCfvTw/qtSRdWTT6Lp2CURQIQTGAps6lLcU25ADFVQXlTKxUKqsSGiJiFdZBjd5vZu1bp1H9FTVePwUPtnMILDcH56HosJ6uzT5RtnNRSoOT5u2uINnjUfMcwp7mq/fKJiQEYbwRFJlACg210UIA2R76AGntlQ6tFWBbCS5iAKh2GVTnANOnUe1he5jC4NGriASAPYtO+mqLavHsw9Fz3OgkFrYiS4gkRNibceSVA2cSzCu6tVdVcAC46DhAiPclto8/ancJTM3vOvVWTcHaRcclCeSiDZAp4cqdQw44a8vonqVLhwUynSDdRc6Aan6DqoSmLsLDUAYm1wPXkOavMDTDLkQdAPwj/AJHifTgoVEAHedG9w5N6BR8fmwZ1J0A1JWoRdnRCGvLLXH5o2m0kn+qoMHSqYyryA1PBjfmSoWCw9XF1d1vDxOPgpj5uXWdnMiZh2NAFxcA6z+N/5uTeGp4BdWPGEpWKy3ImMptaS5n5Q0E+bp0cdY6hBXbWoLq1Rizmm2GyHaHfENq6NqaNq8m1PwVOuh+GHwWPq4aoadRpG6YLTq3y5hd6qMDgWkAgiCDcEciFlNptlGVm3BcB4XC9Wn/9WdNR11U5QsaI2RZuyq0QZVtXoB46rlGKwOIwTw4GWHw1G3Y76Hp8Vr9ntrGVYY87r+uh8ipK4m7TIee7LQS+kIOpbwPlyPRZerRPEQRwXXQ8OF1Q5/kjH95kNqDjwd0cPnqFnJFNbIm8Zz+jULSC0kEEEEWII0g8F1HZTbllUNpYk7lTQVDZjz1P3He4+5c0xFIscWvbuu93p+iiDfUFRU3EwriegCEgrkWR7WYnCw2e1pcGPOg/K7VvlcdFtMu2+wlWzy6if/0Hd/nFh6wrRyRkUUkzUykOKTQxDKjd6m5r2nQtIcD6hG5UNWMVVDrKZUVbjcVTpgve9rRFy5wAHtWWh2M1HKlzjH06LDUeYA8zroIHVVmbbdYdoLaW9VdwgQyR+Z2o6gFc+zjMqmJqF75A+6ySWsHILOvsy5kvMNpa1Ss2pTc6kGGWbviBvcnjY6acLrqGyH2isqgU8Xu0qnB+lN//AAd0NuXJccZShSmCRBTcq6J7M9KNIcJBB6onC64Dku0uKwhinUO5+B8uZ6CbehC22Xfak2wr0XD81Mhw9joI9pT2TNqSOjgJQCzWF26wNSP34YfzhzPeRCnnafBxP7VQ5/8AkZ9Vq0Oy2CBEKhq7ZYFok4imf4Tvn2NBKz+b/aO0tLcNSc48H1LNHXcBk+pCTkkJyRtsfiW0qbqjtGiTAJPsFyuS7X59+2FoYyKbTI3gN+Yg6EwNLdEzmOdYjEta2tUkNmABugkmbgWMaBQGUiDYeihky+icp2Jw9JT6FE8EgBo1BJ/CNfU8P1ZHVqW753R+EfP+q5uZvgUYtj5eJhgk8XfdHkOPnom3Vw2TMuOriqvEZwG2HuVbWxD3m8idGjxO+i6MeCuyyqJZ4vNjdrLnieA8ylZBktbFv7shhs6oQZM/dpjWVabN7GPqQ+uNxgIIpgkeW+dQel3FdOy7BNY0NaN0ARpBjkAPCOmp4nguqGMTbfYxkGSU8MwNY0AjyMHmT95/XQcOl2xqTTYnmhXSoQYCCUgmIrwUpBBZGV+Y5UyoHWALvFI3mP8A42cf4hB81znP9iC157Huvje7MulpH4qb9QOjoKCCxJIZUZZtHWoHcf32ixBPeEcjoVpKGfMqs3mkxxkEEIILmnFVZuEndEXGOZVEPE8uY8iqDF4I0zvNNueh8iiQU6HNJob7e0EW5jUJJZPkUEFNqiDIu66m7uuLTzaSPgp1PO8W0QMTWj/2OPxKCCopOjIKmaYp4via0/8AtePgVVVqZcZcS483GT7SiQQpOwCGHTvYT5oIJtsAg1DdhBBMB0M3hB9E21nBBBJd0AsU0v8AZ5uEEFmUmgHqFFTaNGEEFGUmZZOw2DL3BrRLjoBHxJAV2MgeGy5wbw3WXdc6F5Hwsggt4salG2WhFdlY47oIpU9LEyNfUrM4+o5xcJiD3omB8yfL2o0F0xSXRSbpC8myl9eezgNHiqO1Hk0afHqugbObL06JsN+oI3nO1Eif8Pk2/UIILohFEzYYbCgR+gOcDh8TxlTmMRoKoh5rUuEEEAGggggD/9k=">
                <center>
                <div class="caption">
                    <h3 style="font-weight:bold">IDLI SAMBAR</h3>
                    <p>Price: Rs. 200.00</p><?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(8)){ ?>
                        <a href="#" class="btn btn-success btn-block disabled">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
                
            <div class="col-md-4 col-sm-3">
            <div class="thumbnail thumbnail_default">
                <img src="https://images.pexels.com/photos/958547/pexels-photo-958547.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                <center>
                <div class="caption">
                    <h3 style="font-weight:bold">DRY KOFTE</h3>
                    <p>Price: Rs. 550.00</p><?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(9)){ ?>
                        <a href="#" class="btn btn-success btn-block disabled">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>       

        </div>
     
        <div class="row">    
               
            <div class="col-md-4 col-sm-3">
            <div class="thumbnail thumbnail_default">
                <img src="https://images.pexels.com/photos/2233729/pexels-photo-2233729.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                <center>
                <div class="caption">
                    <h3 style="font-weight:bold">TANDORI CHICKEN</h3>
                    <p>Price: Rs. 500.00</p><?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(10)){ ?>
                        <a href="#" class="btn btn-success btn-block disabled">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>        
                  
            <div class="col-md-4 col-sm-3">
            <div class="thumbnail thumbnail_default">
                <img src="https://images.pexels.com/photos/62097/pexels-photo-62097.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                <center>
                <div class="caption">
                    <h3 style="font-weight:bold";>FRENCH FRIES</h3>
                    <p>Price: Rs. 100.00</p><?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(11)){ ?>
                        <a href="#" class="btn btn-success btn-block disabled">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
                
            <div class="col-md-4 col-sm-3">
            <div class="thumbnail thumbnail_default">
                <img src="https://miro.medium.com/max/2400/1*InlgltnGNwj7W93dJ_oQ_g.jpeg">
                <center>
                <div class="caption">
                    <h3 style="font-weight:bold";>STUFFED DOSA</h3>
                    <p>Price: Rs. 200.00</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(12)){ ?>
                        <a href="#" class="btn btn-success btn-block disabled">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
                  
        </div>      
           
        <br><br><br><br>
              
        <div class="row">
                
            <div class="container">
                <a name = "DESSERTS"></a>
            <div  class="jumbotron">
                <h1 style="font-size:45px; font-weight: bolder"; >MOUTH-WATERING DESSERTS</h1>
            </div>
            </div>
                 
            <div class="col-md-4 col-sm-3">
            <div class="thumbnail thumbnail_default">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKjJYLlRtRbIfOUIEWJn6bPS_UKmJIIGkoBA&usqp=CAU">
                <center>
                <div class="caption">
                    <h3 style="font-weight:bold";><center>CRUMBLE BALL</h3>
                    <p>Price: Rs. 100.00</p><?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(13)){ ?>
                        <a href="#" class="btn btn-success btn-block disabled">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
                           
            <div class="col-md-4 col-sm-3">
            <div class="thumbnail thumbnail_default">
                <img src="https://i.pinimg.com/originals/2e/91/07/2e9107a35faf761aab735c1552498484.jpg">
                <center>
                <div class="caption">
                    <h3 style="font-weight:bold";><center>CHOCOLATE TRUFFLE</h3>
                    <p>Price: Rs. 300.00</p><?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(14)){ ?>
                        <a href="#" class="btn btn-success btn-block disabled">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
                  
            <div class="col-md-4 col-sm-3">
            <div class="thumbnail thumbnail_default">
                <img src="https://latestwallpapershd.com/wp-content/uploads/2019/04/Strawberry-desserts-wallpaper-HD.jpg">
                <center>
                <div class="caption">
                    <h3 style="font-weight:bold";><center>STRAWBERRY TRUFFLE</h3>
                    <p>Price: Rs. 200.00</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(15)){ ?>
                        <a href="#" class="btn btn-success btn-block disabled">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>        
        
        </div>
                  
              
          <div class="row">    
               
            <div class="col-md-4 col-sm-3">
            <div class="thumbnail thumbnail_default">
                <img src="https://images.herzindagi.info/image/2019/Oct/gulab-jamuns.jpg">
                <center>
                <div class="caption">
                    <h3 style="font-weight:bold";><center>GULAM JAMUN</h3>
                    <p>Price: Rs. 350.00</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(16)){ ?>
                        <a href="#" class="btn btn-success btn-block disabled">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>  
              
            <div class="col-md-4 col-sm-3">
            <div class="thumbnail thumbnail_default">
                <img src="https://media.gettyimages.com/photos/chocolate-glazed-cake-vanilla-ice-cream-picture-id183041544?k=6&m=183041544&s=612x612&w=0&h=8c0Zh1BWj0d65lJlCa_vJoflwQHmsjznw4UF9li6bxw=">
                <center>
                <div class="caption">
                    <h3 style="font-weight:bold";><center>CHOCOLATE PUDDING</h3>
                    <p>Price: Rs. 250.00</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(17)){ ?>
                        <a href="#" class="btn btn-success btn-block disabled">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=17" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
              
            <div class="col-md-4 col-sm-3">
            <div class="thumbnail thumbnail_default">
                <img src="https://i.pinimg.com/originals/ba/d6/85/bad685d0f45eb5652aafc91aa3c98bd5.jpg">
                <center>
                <div class="caption">
                    <h3 style="font-weight:bold";><center>VANILLA WAFFLES</h3>
                    <p>Price: Rs. 300.00</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(18)){ ?>
                        <a href="#" class="btn btn-success btn-block disabled">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=18" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
        
        </div>
              
        <br><br><br><br><br>
        
        <div class="row">    
            
            <div class="container">
            <a name = "CHINESE"></a>
            <div  class="jumbotron">
                <h1 style="font-size:50px; font-weight: bolder"; >CHINESE FOOD</h1>
            </div>
            </div>
            
            <div class="col-md-4 col-sm-3">
            <div class="thumbnail thumbnail_default">
                <img src="https://images.pexels.com/photos/2347311/pexels-photo-2347311.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260">
                <center>
                <div class="caption">
                    <h3 style="font-weight:bold";><center>CHOW MEIN</center></h3>
                    <p>Price: Rs. 150.00</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(19)){ ?>
                        <a href="#" class="btn btn-success btn-block disabled">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=19" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
                           
            <div class="col-md-4 col-sm-3">
            <div class="thumbnail thumbnail_default">
                <img src="https://images.chinahighlights.com/allpicture/2019/11/a47d9323b7ae409ba96e628d_894x596.jpg">
                <center>
                <div class="caption">
                    <h3 style="font-weight:bold"><center>CHICKEN MANCHURIAN</center></h3>
                    <p>Price: Rs. 250.00</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(20)){ ?>
                        <a href="#" class="btn btn-success btn-block disabled">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=20" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
                    
            <div class="col-md-4 col-sm-3">
            <div class="thumbnail thumbnail_default">
                <img src="https://images.chinahighlights.com/allpicture/2019/11/31acb7b302ec4b48b17443ed_893x595.jpg">
                <center>
                <div class="caption">
                    <h3 style="font-weight:bold";><center> TSO'S CHICKEN</center></h3>
                    <p>Price: Rs. 350.00</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(21)){ ?>
                        <a href="#" class="btn btn-success btn-block disabled">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=21" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
              
        </div>
              
        <div class="row">
            
            <div class="col-md-4 col-sm-3">
            <div class="thumbnail thumbnail_default">
                <img src="https://www.ocregister.com/wp-content/uploads/2020/10/OCR-L-BP-Chinese-Meizhou-1016.jpg">
                <center>
                <div class="caption">
                    <h3 style="font-weight:bold";><center>NOODLES</center></h3>
                    <p>Price: Rs. 150.00</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(22)){ ?>
                        <a href="#" class="btn btn-success btn-block disabled">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=22" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
                  
            <div class="col-md-4 col-sm-3">
            <div class="thumbnail thumbnail_default">
                <img src="https://townsquare.media/site/696/files/2020/10/Zen-Chinese-Bistro-Portland-Facebook.jpg?w=980&q=75">
                <center>
                <div class="caption">
                    <h3 style="font-weight:bold";><center>KUNG PAO CHICKEN</center></h3>
                    <p>Price: Rs. 600.00</p><?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(23)){ ?>
                        <a href="#" class="btn btn-success btn-block disabled">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=23" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
                    
            <div class="col-md-4 col-sm-3">
            <div class="thumbnail thumbnail_default">
                <img src="https://www.kinki.ca/wp-content/uploads/2018/06/Canadian-Chinese-Food-10-Greatest-Dishes-800x444.jpg">
                <center>
                <div class="caption">
                    <h3 style="font-weight:bold";><center>DUMPLINGS</center></h3>
                    <p>Price: Rs. 350.00</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(24)){ ?>
                        <a href="#" class="btn btn-success btn-block disabled">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=24" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
                    
        </div>
              
        <br><br><br><br><br>
                      
        <div class="row">    
                    
            <div class="container">
            <a name="BEVEGRAGES"></a>
            <div  class="jumbotron">
                <h1 style="font-size:50px;font-weight: bolder"; >BEVEGRAGES</h1>
            </div>
            </div>
               
            <div class="col-md-4 col-sm-3">
            <div class="thumbnail thumbnail_default">
                <img src="https://images.unsplash.com/photo-1536935338788-846bb9981813?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=686&q=80">
                <center>
                <div class="caption">
                    <h3 style="font-weight:bold";><center>POMEGRANATE JUICE</center></h3>
                    <p>Price: Rs. 400.00</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(25)){ ?>
                        <a href="#" class="btn btn-success btn-block disabled">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=25" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>        
                    
            <div class="col-md-4 col-sm-3">
            <div class="thumbnail thumbnail_default">
                <img src="https://images.pexels.com/photos/452737/pexels-photo-452737.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                <center>
                <div class="caption">
                    <h3 style="font-weight:bold";><center>MANGO SHAKE</center></h3>
                    <p>Price: Rs. 175.00</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(26)){ ?>
                        <a href="#" class="btn btn-success btn-block disabled">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=26" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
            
            <div class="col-md-4 col-sm-3">
            <div class="thumbnail thumbnail_default">
                <img src="https://media.gettyimages.com/photos/closeup-of-drink-pouring-in-drinking-glass-against-black-background-picture-id989381534?s=612x612">
                <center>
                <div class="caption">
                    <h3 style="font-weight:bold";><center>COLA<center></h3>
                    <p>Price: Rs. 270.00</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(27)){ ?>
                        <a href="#" class="btn btn-success btn-block disabled">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=27" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>
            </div>
                    
        </div>     
          
            
        <div class="row">    
               
            <div class="col-md-4 col-sm-3">
            <div class="thumbnail thumbnail_default">
                <img src="https://dynaimage.cdn.cnn.com/cnn/c_fill,g_auto,w_1200,h_675,ar_16:9/https%3A%2F%2Fcdn.cnn.com%2Fcnnnext%2Fdam%2Fassets%2F150929101049-black-coffee-stock.jpg">     
                <div class="caption">
                    <h3 style="font-weight:bold";><center>BLACK COFFEE</center></h3>
                    <p><center>Price: Rs. 380.00</center></p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(28)){ ?>
                        <a href="#" class="btn btn-success btn-block disabled">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=28" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
            </div>
            </div>
                 
            <div class="col-md-4 col-sm-3">
            <div class="thumbnail thumbnail_default">
                <img src="https://www.incimages.com/uploaded_files/image/1920x1080/getty_500740897_200013331653767347294_333325.jpg">
                <center>
                <div class="caption">
                    <h3 style="font-weight:bold"><center>CAPPUCCINO</center></h3>
                    <p><center>Price: Rs. 100.00</center></p>
                <?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(29)){ ?>
                        <a href="#" class="btn btn-success btn-block disabled">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=29" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                    
                     
                </div>
                </center>
            </div>
            </div>
                 
            <div class="col-md-4 col-sm-3">
            <div class="thumbnail thumbnail_default">
                <img src="http://www.baileys.com/media/oiylzg43/baileys-irish-coffee-hero.jpg">
                <center>
                <div class="caption">
                    <h3 style="font-weight:bold"><center>ICE TEA</center></h3>
                    <p><center>Price: Rs. 700.00</center></p><?php if(!isset($_SESSION["email_id"])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }else{ ?>
                        <?php if(check_if_added_to_cart(30)){ ?>
                        <a href="#" class="btn btn-success btn-block disabled">Added to cart</a>
                        <?php }else{ ?>
                        <a href="cart-add.php?id=30" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php }
                        } ?>
                </div>
                </center>
            </div>     
            </div>             
    </div>
    </div>

    <footer>
        <div class="container-fluid">
        <center>
            <p style="font-weight:bolder;font-size:20px";>Copyright @ Our website delivers the best customer experience. All Rights 
                            Reserved | Contact Us: +91 6399104055</p>
        </center>
        </div>
    </footer>

</body>
</html>
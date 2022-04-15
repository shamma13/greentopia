<?php
    session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width, initial-scale=1.0">

<title>GreenTopia Grocery Store</title>

<link rel="stylesheet" href="../CSS/P4.css">
<link rel="stylesheet" href="../CSS/Page1.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <script src="https://kit.fontawesome.com/22f06b9912.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="../JavaScript/P4.js"></script>
	
    </head>
      <header>
	
   
      <input type="checkbox" id="menu" />
      <label for="menu"><i class="material-icons">menu</i></label>

      <nav class="navbar">
        <ul>
          <li><a href="../index.php"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Home</a></li>
          <li>
            <a href="#"><i class="fa fa-angle-double-down" aria-hidden="true"></i>&nbsp; Aisles</a>
            <ul>
              <li><a href="../part 2/FruitsAndVeggies.html" #fruitsveggies>Fruits and Veggies</a></li>
              <li><a href="../part 2/DairyAndEggs.html" #dairyeggs>Dairy and Eggs</a></li>
              <li><a href="../part 2/BreadsAndPasta.html" #breadspasta>Breads and Pasta</a></li>
              <li><a href="../part 2/MeatsAndFish.html" #meatsfish>Meat and Fish</a></li>
            </ul>
          </li>
          <li><a href="../PHP/Summary_P4.php"><i class="fa fa-opencart" aria-hidden="true"></i>&nbsp; Shopping Cart</a></li>
          <li><a href="../PHP/UserLogIn_P5.php"><i class="fa fa-user-o" aria-hidden="true"></i>&nbsp; Login</a></li>
        </ul>
      </nav>
    </header>
	<br><br><br><br><br><br><br>
    <body onload="updateSummary();">
     
        <form name = "myForm" action = "">
        <div class="flex-container">
						
        <div class="flex-item-left">
            <p> 
                <b>Shipping address:</b> 
            </p>
<pre>
Joe Smith, 
1234 Colony Street,
Montreal, Quebec A1B 2C3 
</pre>
            <hr>
            
            <p>
                <b>Payment: </b>
                
                <br>VISA **** **** **** 1234 <br>
                <span class="blue">Billing address:</span> 
                Same as shipping address

            </p>

            <hr>
            
            <p>
                <br><b>Items:</b> 
            </p>
			
            <div class="flex-item-left">
                <h3 class="productname">Yogurt<br><small>Cost: $5.98/each</small></h3>
				<h4>Price: $<span class="price" data-price="5.98">5.98</span></h4>
                 <div class="user-input">
                   <div class="input-element">
                      <span class="quantity-text" id="element1">Quantity</span>
					 </div>
                    <input type="number" class="form-control quantity" placeholder="1" min="1" max="40" value="1"/>
					<button class="button">Delete</button>
                 </div>

				<h3 class="productname">Shrimp<br><small>Cost: $18.98/each</small></h3>
				<h4>Price: $<span class="price" data-price="18.98">18.98</span></h4>
				<div class="user-input">
                   <div class="input-element">
                      <span class="quantity-text" id="element2">Quantity</span>
				   </div>
                    <input type="number" class="form-control quantity" placeholder="1" min="1" max="40" value="1"/>
					<button class="button">Delete</button>
                
               <h3 class="productname">Cream<br><small>Cost: $6.25/each</small></h3>
			   <h4>Price: $<span class="price" data-price="6.25">6.25</span></h4>
				<div class="user-input">
                   <div class="input-element">
                      <span class="quantity-text" id="element3">Quantity</span>
					 </div>
                    <input type="number" class="form-control quantity" placeholder="1" min="1" max="40" value="1"/>
					<button class="button">Delete</button>
             
       		 	</div>  
				</div>
				<a href="../index.php"><button class="continue_shopping">Continue Shopping</button></a>
			</div>
		
			</div>
			
             <div class="flex-item-right">

                <h1>Order Summary</h1>
                <p> 
                    Items (3): 
					<span class="price-right">$<span id="subtotal">31.21</span></span>
                </p>
                <p>
                    Shipping and Handling:
                    <span class="price-right">$<span id="shipping">15.00</span></span>
                </p>
                <p>
                    Total before taxes:
					<span class="price-right">$<span id="total">46.21</span></span>
                 </p>
                <hr>
                <p>
                    QST:
					<span class="price-right">$<span id="qst">4.51</span></span>
                </p>
                <p>
                    GST:
					<span class="price-right">$<span id="gst">2.31</span></span>
                </p>
                <hr>
                    <h2>Total Price:
						<span class="price-right">$<span id="finaltotal">53.03</span></span>
                    </h2>
                 <button class="place-order">Place Order</button>
    </div>

</div>
</form>
</body>
</html>


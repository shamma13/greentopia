<?php
    session_start();
?>

<!DOCTYPE html>

<html lang = "en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Product</title>
    
    <link rel="stylesheet" href="P8.css">
<style>
    

@import url("https://fonts.googleapis.com/css2?family=Shadows+Into+Light+Two&display=swap");

body{
	margin: 0;
	color: black;
	background-color: white;
	width: 100%;
	font-family: "Shadows Into Light Two";
    background-color: rgb(217,245,233);
    
}
    


.Fruits{
	padding: 15px;
 	text-align: left;
    
}
    
    .Vegetables{
        padding: 15px;
        text-align: left;
    }
    
     .Meat{
        padding: 15px;
        text-align: left;
    }
    
     .Fish{
        padding: 15px;
        text-align: left;
    }
    
     .Egg{
        padding: 15px;
        text-align: left;
    }
    
     .Dairy{
        padding: 15px;
        text-align: left;
    }
    
     .Bread{
        padding: 15px;
        text-align: left;
    }

     .Pasta{
        padding: 15px;
        text-align: left;
    }
label{
	color: black;
}

.button{
	padding: 25px;
    
}

    @media screen (max-width: 880px){
        .Fruits{width:auto}
        .Vegetables{width:auto}
        .Meat{width:auto}
        .Fish{width:auto}
        .Bread{width:auto}
        .Pasra{width:auto}
    }
    
    @media screen and (max-width: 600px)
    {
        .Fruits{width:auto}
        .Vegetables{width:auto}
        .Meat{width:auto}
        .Fish{width:auto}
        .Bread{width:auto}
        .Pasta{width:auto}
    }  
    
</style>

    
</head>
<!--<table>  -->
   
<div class="Fruits">   
    <h2 style="font-size: 170%; padding: 10px; background-color:#8FBC8F; text-align: center; align-content: center">FRUITS</h2>
<body id="F&G_Banana" style="color: black">
    <div>
    <label for="F&G_Banana"> Name of the product: </label>
        <input type="text" id="F&G_Banana_product" name="Banana" placeholder="name of the product"> 
        <br>
    <label for="F&G_Banana">Price of Bananas: </label>
        <input type="number" min="0.00" max="10000.00" step="0.01" id="F&G_Banana_price" name="Banana" placeholder="Price">
        <br>
    <label for="F&G_Banana">Quantity of Bananas: </label>   
        <input type="number" id="F&G_Banana_quantity" name="Banana" placeholder="Quantity"> 
        <br>
    <label for="F&G_Banana">Description:</label>
        <br>
        <textarea id="F&G_Banana_description" name="Banana" rows="6" cols="50">   
        </textarea>
    </div> 
    </body>
    <br>
<body id="F&G_Apple">
    <div>
    <label for="F&G_Apple"> Name of the product: </label>
        <input type="text" id="F&G_Apples_product" name="Apple" placeholder="name of the product"> 
        <br>
    <label for="F&G_Apple">Price of Apples: </label>
        <input type="number" min="0.00" max="10000.00" step="0.01" id="F&G_Apple_price" name="Apple" placeholder="Price">
        <br>
    <label for="F&G_Apple">Quantity of Apples: </label>   
        <input type="number" id="F&G_Apple_quantity" name="Apple" placeholder="Quantity"> 
        <br>
    <label for="F&G_Apple">Description:</label>
        <br>
        <textarea id="F&G_Apple_description" name="Apple" rows="6" cols="50">   
        </textarea>
    </div> 
    </body>
    <br>
<body id="F&G_Orange">
    <div>
    <label for="F&G_Orange"> Name of the product: </label>
        <input type="text" id="F&G_Oranges_product" name="Orange" placeholder="name of the product"> 
        <br>
    <label for="F&G_Orange">Price of Oranges: </label>
        <input type="number" min="0.00" max="10000.00" step="0.01" id="F&G_Orange_price" name="Orange" placeholder="Price">
        <br>
    <label for="F&G_Orange">Quantity of Oranges: </label>   
        <input type="number" id="F&G_Orange_quantity" name="Orange" placeholder="Quantity"> 
        <br>
    <label for="F&G_Orange">Description:</label>
        <br>
        <textarea id="F&G_Orange_description" name="Orange" rows="6" cols="50">   
        </textarea>
    </div> 
    </body> 
    </div>
<!--</table>  -->
<div class="Vegetables">
    <h2 style="font-size: 170%; padding: 10px; background-color:#8FBC8F;text-align: center">VEGETABLES</h2>
<body id="F&G_Lettuce">
    <div>
    <label for="F&G_Lettuce"> Name of the product: </label>
        <input type="text" id="F&G_Lettuce_product" name="Lettuce" placeholder="name of the product"> 
        <br>
    <label for="F&G_Lettuce">Price of Lettuce: </label>
        <input type="number" min="0.00" max="10000.00" step="0.01" id="F&G_Lettuce_price" name="Lettuce" placeholder="Price">
        <br>
    <label for="F&G_Lettuce">Quantity of Lettuce: </label>   
        <input type="number" id="F&G_Lettuce_price" name="Lettuce" placeholder="Quantity"> 
        <br>
    <label for="F&G_Lettuce">Description:</label>
        <br>
        <textarea id="F&G_Lettuce_description" name="Lettuce" rows="6" cols="50">   
        </textarea>
    </div> 
    </body>
<br>
<body id="F&G_Tomatoes">
    <div>
    <label for="F&G_Tomatoes"> Name of the product: </label>
        <input type="text" id="F&G_Tomatoes_product" name="Tomatoes" placeholder="name of the product"> 
        <br>
    <label for="F&G_Tomatoes">Price of Tomatoes: </label>
        <input type="number" min="0.00" max="10000.00" step="0.01" id="F&G_Tomatoes_price" name="Tomatoes" placeholder="Price">
        <br>
    <label for="F&G_Tomatoes">Quantity of Tomatoes: </label>   
        <input type="number" id="F&G_Tomatoes_quantity" name="Tomatoes" placeholder="Quantity"> 
        <br>
    <label for="F&G_Tomatoes">Description:</label>
        <br>
        <textarea id="F&G_Tomatoes_description" name="Tomatoes" rows="6" cols="50">   
        </textarea>
    </div> 
    </body>
<br>
<body id="F&G_Cucumber">
    <div>
    <label for="F&G_Cucumber"> Name of the product: </label>
        <input type="text" id="F&G_Cucumber_product" name="Cucumber" placeholder="name of the product"> 
        <br>
    <label for="F&G_Cucumber">Price of Cucumber: </label>
        <input type="number" min="0.00" max="10000.00" step="0.01" id="F&G_Cucumber_price" name="Cucumber" placeholder="Price">
        <br>
    <label for="F&G_Cucumber">Quantity of Cucumber: </label>   
        <input type="number" id="F&G_Cucumber_quantity" name="Cucumber" placeholder="Quantity"> 
        <br>
    <label for="F&G_Cucumber">Description:</label>
        <br>
        <textarea id="F&G_Cucumber_description" name="Cucumber" rows="6" cols="50">   
        </textarea>
    </div> 
    </body> 
    
    </div>
    
<div class="Meat">  
    <h2 style="font-size: 170%; padding: 10px; background-color:#8FBC8F;text-align: center">MEATS</h2>
<body id="M&F_Beef">
    <div>
    <label for="M&F_Beef"> Name of the product: </label>
        <input type="text" id="M&F_Beef_product" name="Beef" placeholder="name of the product"> 
        <br>
    <label for="M&F_Beef">Price of Beef: </label>
        <input type="number" min="0.00" max="10000.00" step="0.01" id="M&F_Beef_price" name="Beef" placeholder="Price">
        <br>
    <label for="M&F_Beef">Quantity of Beef: </label>   
        <input type="number" id="M&F_Beef_quantity" name="Beef" placeholder="Quantity"> 
        <br>
    <label for="M&F_Beef">Description:</label>
        <br>
        <textarea id="M&F_Beef_description" name="Beef" rows="6" cols="50">   
        </textarea>
    </div> 
    </body>  
    <br>
<body id="M&F_Turkey">
    <div>
    <label for="M&F_Turkey"> Name of the product: </label>
        <input type="text" id="M&F_Turkey_product" name="Turkey" placeholder="name of the product"> 
        <br>
    <label for="M&F_Turkey">Price of Turkey: </label>
        <input type="number" min="0.00" max="10000.00" step="0.01" id="M&F_Turkey_price" name="Turkey" placeholder="Price">
        <br>
    <label for="M&F_Turkey">Quantity of Turkey: </label>   
        <input type="number" id="M&F_Turkey_quantity" name="Turkey" placeholder="Quantity"> 
        <br>
    <label for="M&F_Turkey">Description:</label>
        <br>
        <textarea id="M&F_Turkey_description" name="Turkey" rows="6" cols="50">   
        </textarea>
    </div> 
</body>
   <br>
<body id="M&F_Chicken">
    <div>
    <label for="M&F_Chicken"> Name of the product: </label>
        <input type="text" id="M&F_Chicken_product" name="Chicken" placeholder="name of the product"> 
        <br>
    <label for="M&F_Chicken">Price of Chicken: </label>
        <input type="number" min="0.00" max="10000.00" step="0.01" id="M&F_Chicken_price" name="Chicken" placeholder="Price">
        <br>
    <label for="M&F_Chicken">Quantity of Chicken: </label>   
        <input type="number" id="M&F_Chicken_quantity" name="Chicken" placeholder="Quantity"> 
        <br>
    <label for="M&F_Chicken">Description:</label>
        <br>
        <textarea id="M&F_Chicken_description" name="Chicken" rows="6" cols="50">   
        </textarea>
    </div> 
</body>  
    
</div>
    
<div class="Fish">
    <h2 style="font-size: 170%; padding: 10px; background-color:#8FBC8F;text-align: center">FISHES</h2>
<body id="M&F_FishBass">
    <div>
    <label for="M&F_FishBass"> Name of the product: </label>
        <input type="text" id="M&F_FishBass_product" name="FishBass" placeholder="name of the product"> 
        <br>
    <label for="M&F_FishBass">Price of Fish Bass: </label>
        <input type="number" min="0.00" max="10000.00" step="0.01" id="M&F_FishBass_price" name="FishBass" placeholder="Price">
        <br>
    <label for="M&F_FishBass">Quantity of Fish Bass: </label>   
        <input type="number" id="M&F_FishBass_quantity" name="FishBass" placeholder="Quantity"> 
        <br>
    <label for="FishBass">Description:</label>
        <br>
        <textarea id="M&F_FishBass_description" name="FishBass" rows="6" cols="50">   
        </textarea>
    </div> 
</body> 
    <br>
<body id="M&F_Shrimp">
    <div>
    <label for="M&F_Shrimp"> Name of the product: </label>
        <input type="text" id="M&F_Shrimp_product" name="Shrimp" placeholder="name of the product"> 
        <br>
    <label for="M&F_Shrimp">Price of Shrimp: </label>
        <input type="number" min="0.00" max="10000.00" step="0.01" id="M&F_Shrimp_price" name="Shrimp" placeholder="Price">
        <br>
    <label for="M&F_Shrimp">Quantity of Shrimp: </label>   
        <input type="number" id="M&F_Shrimp_quantity" name="Shrimp" placeholder="Quantity"> 
        <br>
    <label for="M&F_Shrimp">Description:</label>
        <br>
        <textarea id="M&F_Shrimp_description" name="Shrimp" rows="6" cols="50">   
        </textarea>
    </div> 
</body> 
<br>
<body id="D&E_Salmon">
    <div>
    <label for="M&F_Salmon"> Name of the product: </label>
        <input type="text" id="M&F_Salmon_product" name="Salmon" placeholder="name of the product"> 
        <br>
    <label for="M&F_Salmon">Price of Salmon: </label>
        <input type="number" min="0.00" max="10000.00" step="0.01" id="M&F_Salmon_price" name="Salmon" placeholder="Price">
        <br>
    <label for="M&F_Salmon">Quantity of Salmon: </label>   
        <input type="number" id="M&F_Salmon_quantity" name="Salmon" placeholder="Quantity"> 
        <br>
    <label for="M&F_Salmon">Description:</label>
        <br>
        <textarea id="M&F_Salmon_description" name="Salmon" rows="6" cols="50">   
        </textarea>
    </div> 
</body> 

    </div>
    
<div class="Egg">
 <h2 style="font-size: 170%; padding: 10px; background-color:#8FBC8F;text-align: center">EGGS</h2>
<body id="D&E_BrownEgg">
    <div>
    <label for="D&E_BrownEgg"> Name of the product: </label>
        <input type="text" id="D&E_BrownEgg_product" name="BrownEgg" placeholder="name of the product"> 
        <br>
    <label for="D&E_BrownEgg">Price of Brown Egg: </label>
        <input type="number" min="0.00" max="10000.00" step="0.01" id="D&E_BrownEgg_price" name="BrownEgg" placeholder="Price">
        <br>
    <label for="D&E_BrownEgg">Quantity of Brown Egg: </label>   
        <input type="number" id="D&E_BrownEgg_quantity" name="BrownEgg" placeholder="Quantity"> 
        <br>
    <label for="D&E_BrownEgg">Description:</label>
        <br>
        <textarea id="D&E_BrownEgg_description" name="BrownEgg" rows="6" cols="50">   
        </textarea>
    </div> 
</body>  
<br>
<body id="D&E_WhiteEgg">
    <div>
    <label for="D&E_WhiteEgg"> Name of the product: </label>
        <input type="text" id="D&E_WhiteEgg_product" name="WhiteEgg" placeholder="name of the product"> 
        <br>
    <label for="D&E_WhiteEgg">Price of White Egg: </label>
        <input type="number" min="0.00" max="10000.00" step="0.01" id="D&E_WhiteEgg_price" name="WhiteEgg" placeholder="Price">
        <br>
    <label for="D&E_WhiteEgg">Quantity of White Egg: </label>   
        <input type="number" id="D&E_WhiteEgg_quantity" name="WhiteEgg" placeholder="Quantity"> 
        <br>
    <label for="D&E_WhiteEgg">Description:</label>
        <br>
        <textarea id="D&E_WhiteEgg_description" name="WhiteEgg" rows="6" cols="50">   
        </textarea>
    </div> 
</body> 

</div>
    
<div class="Dairy">
   <h2 style="font-size: 170%; padding: 10px; background-color:#8FBC8F;text-align: center">DAIRIES</h2>
<body id="D&E_Milk">
    <div>
    <label for="D&E_Milk"> Name of the product: </label>
        <input type="text" id="D&E_Milk_product" name="Milk" placeholder="name of the product"> 
        <br>
    <label for="D&E_Milk">Price of Milk: </label>
        <input type="number" min="0.00" max="10000.00" step="0.01" id="D&E_Milk_price" name="Milk" placeholder="Price">
        <br>
    <label for="D&E_Milk">Quantity of Milk: </label>   
        <input type="number" id="D&E_Milk_quantity" name="Milk" placeholder="Quantity"> 
        <br>
    <label for="D&E_Milk">Description:</label>
        <br>
        <textarea id="D&E_Milk_description" name="Milk" rows="6" cols="50">   
        </textarea>
    </div> 
</body>  
    <br>
<body id="D&E_Butter">
    <div>
    <label for="D&E_Butter"> Name of the product: </label>
        <input type="text" id="D&E_Butter_product" name="Butter" placeholder="name of the product"> 
        <br>
    <label for="D&E_Butter">Price of Butter: </label>
        <input type="number" min="0.00" max="10000.00" step="0.01" id="D&E_Milk_price" name="Butter" placeholder="Price">
        <br>
    <label for="D&E_Butter">Quantity of Butter: </label>   
        <input type="number" id="D&E_Butter_quantity" name="Butter" placeholder="Quantity"> 
        <br>
    <label for="D&E_Butter">Description:</label>
        <br>
        <textarea id="D&E_Butter_description" name="Butter" rows="6" cols="50">   
        </textarea>
    </div> 
</body> 
    <br>
<body id="D&E_Cream">
    <div>
    <label for="D&E_Cream"> Name of the product: </label>
        <input type="text" id="D&E_Cream_product" name="Cream" placeholder="name of the product"> 
        <br>
    <label for="D&E_Cream">Price of Cream: </label>
        <input type="number" min="0.00" max="10000.00" step="0.01" id="D&E_Cream_price" name="Cream" placeholder="Price">
        <br>
    <label for="D&E_Cream">Quantity of Cream: </label>   
        <input type="number" id="D&E_Cream_quantity" name="Cream" placeholder="Quantity"> 
        <br>
    <label for="D&E_Cream">Description:</label>
        <br>
        <textarea id="D&E_Cream_description" name="Cream" rows="6" cols="50">   
        </textarea>
    </div> 
</body> 
<br>
<body id="D&E_Yogurt">
    <div>
    <label for="D&E_Yogurt"> Name of the product: </label>
        <input type="text" id="D&E_Yogurt_product" name="Yogurt" placeholder="name of the product"> 
        <br>
    <label for="D&E_Yogurt">Price of Yogurt: </label>
        <input type="number" min="0.00" max="10000.00" step="0.01" id="D&E_Yogurt_price" name="Yogurt" placeholder="Price">
        <br>
    <label for="D&E_Yogurt">Quantity of Yogurt: </label>   
        <input type="number" id="D&E_Yogurt_quantity" name="Yogurt" placeholder="Quantity"> 
        <br>
    <label for="D&E_Yogurt">Description:</label>
        <br>
        <textarea id="D&E_Yogurt_description" name="Yogurt" rows="6" cols="50">   
        </textarea>
    </div> 
</body> 
        
    </div>
    
<div class="Bread">      
    <h2 style="font-size: 170%; padding: 10px; background-color:#8FBC8F;text-align: center">BREADS</h2>
<body id="B&P_WhiteBread">
    <div>
    <label for="B&P_WhiteBread"> Name of the product: </label>
        <input type="text" id="B&P_WhiteBread_product" name="WhiteBread" placeholder="name of the product"> 
        <br>
    <label for="B&P_WhiteBread">Price of White Bread: </label>
        <input type="number" min="0.00" max="10000.00" step="0.01" id="B&P_WhiteBread_price" name="WhiteBread" placeholder="Price">
        <br>
    <label for="B&P_WhiteBread">Quantity of White Bread: </label>   
        <input type="number" id="B&P_WhiteBread_quantity" name="WhiteBread" placeholder="Quantity"> 
        <br>
    <label for="B&P_WhiteBread">Description:</label>
        <br>
        <textarea id="B&P_WhiteBread_description" name="WhiteBread" rows="6" cols="50">   
        </textarea>
    </div> 
</body> 
    <br>
<body id="B&P_BrownBread">
    <div>
    <label for="B&P_BrownBread"> Name of the product: </label>
        <input type="text" id="B&P_BrownBread_product" name="BrownBread" placeholder="name of the product"> 
        <br>
    <label for="B&P_BrownBread">Price of Brown Bread: </label>
        <input type="number" min="0.00" max="10000.00" step="0.01" id="B&P_BrownBread_price" name="BrownBread" placeholder="Price">
        <br>
    <label for="B&P_BrownBread">Quantity of Brown Bread: </label>   
        <input type="number" id="B&P_BrownBread_quantity" name="BrownBread" placeholder="Quantity"> 
        <br>
    <label for="B&P_BrownBread">Description:</label>
        <br>
        <textarea id="B&P_BrownBread_description" name="BrownBread" rows="6" cols="50">   
        </textarea>
    </div> 
</body> 
    <br>
<body id="B&P_Baguette">
    <div>
    <label for="B&P_Baguette"> Name of the product: </label>
        <input type="text" id="B&P_Baguette_product" name="Baguette" placeholder="name of the product"> 
        <br>
    <label for="B&P_Baguette">Price of Baguette: </label>
        <input type="number" min="0.00" max="10000.00" step="0.01" id="B&P_Baguette_price" name="Baguette" placeholder="Price">
        <br>
    <label for="B&P_Baguette">Quantity of Baguette: </label>   
        <input type="number" id="B&P_Baguette_quantity" name="Baguette" placeholder="Quantity"> 
        <br>
    <label for="B&P_Baguette">Description:</label>
        <br>
        <textarea id="B&P_Baguette_description" name="Baguette" rows="6" cols="50">   
        </textarea>
    </div> 
</body> 

</div>
<div class="Pasta">
    <h2 style="font-size: 170%; padding: 10px; background-color:#8FBC8F;text-align: center">PASTA</h2>
<body id="B&P_Lasagna">
    <div>
    <label for="B&P_Lasagna"> Name of the product: </label>
        <input type="text" id="B&P_Lasagna_product" name="Lasagna" placeholder="name of the product"> 
        <br>
    <label for="B&P_Lasagna">Price of Lasagna: </label>
        <input type="number" min="0.00" max="10000.00" step="0.01" id="B&P_Lasagna_price" name="Lasagna" placeholder="Price">
        <br>
    <label for="B&P_Lasagna">Quantity of Lasagna: </label>   
        <input type="number" id="B&P_Lasagna_description" name="Lasagna" placeholder="Quantity"> 
        <br>
    <label for="B&P_Lasagna">Description:</label>
        <br>
        <textarea id="B&P_Lasagna_description" name="Lasagna" rows="6" cols="50">   
        </textarea>
    </div> 
</body> 
    <br>
<body id="B&P_Macaroni">
    <div>
    <label for="B&P_Macaroni"> Name of the product: </label>
        <input type="text" id="B&P_Macaroni_product" name="Macaroni" placeholder="name of the product"> 
        <br>
    <label for="B&P_Macaroni">Price of Macaroni: </label>
        <input type="number" min="0.00" max="10000.00" step="0.01" id="B&P_Macaroni_price" name="Macaroni" placeholder="Price">
        <br>
    <label for="B&P_Macaroni">Quantity of Macaroni: </label>   
        <input type="number" id="B&P_Macaroni_quantity" name="Macaroni" placeholder="Quantity"> 
        <br>
    <label for="B&P_Macaroni">Description:</label>
        <br>
        <textarea id="B&P_Macaroni_description" name="Macaroni" rows="6" cols="50">   
        </textarea>
    </div> 
</body> 
  <br>
<body id="B&P_Spaghetti">
    <div>
    <label for="B&P_Spaghetti"> Name of the product: </label>
        <input type="text" id="B&P_Spaghetti_product" name="Spaghetti" placeholder="name of the product"> 
        <br>
    <label for="B&P_Macaroni">Price of Spaghetti: </label>
        <input type="number" min="0.00" max="10000.00" step="0.01" id="B&P_Spaghetti_price" name="Spaghetti" placeholder="Price">
        <br>
    <label for="B&P_Spaghetti">Quantity of Spaghetti: </label>   
        <input type="number" id="B&P_Spaghetti_quantity" name="Spaghetti" placeholder="Quantity"> 
        <br>
    <label for="B&P_Spaghetti">Description:</label>
        <br>
        <textarea id="B&P_Spaghetti_description" name="Spaghetti" rows="6" cols="50">   
        </textarea>
    </div> 
</body> 

</div>
     
<body class="button">
  <div style="padding-left: 15px">  
    <button type="Save" value="Save" style="color: green; font-size:15px"> Save </button>
    </div> 
</body>
	
<footer>
	<div style="text-align: center">
        <a href="../PHP/UserList_P9.php"> &larr; Go Back</a>
        </div>
<footer>
    
</html>



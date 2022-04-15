<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>Register|GreenTopia</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
	
		<link rel="stylesheet" href="../CSS/P2.css">

         <link rel="stylesheet" href="../CSS/P4.css">
	 <link rel="stylesheet" href="../CSS/Page1.css"/>
    <style>
		@import url("https://fonts.googleapis.com/css2?family=Shadows+Into+Light+Two&display=swap");
        .center {
            height: 200px;
            width: 400px;
            margin: auto;
            display: flex;
            display: grid;
            font-size: 1.55;
			font-family: "Shadows Into Light Two";
        }

        .button {
            cursor: pointer;
            width: 60px;
        }

        .space {
            padding-bottom: 5px;

        }
		
		*{
			font-family: "Shadows Into Light Two";
		}

    </style>
</head>
  <header>
   
      <input type="checkbox" id="menu" />
      <label for="menu"><i class="material-icons">menu</i></label>

      <nav class="navbar">
        <ul>
          <li><a href="../index.php">Home</a></li>
          <li>
            <a href="#">Aisles +</a>
            <ul>
              <li><a href="../part 2/FruitsAndVeggies.html" #fruitsveggies>Fruits and Veggies</a></li>
              <li><a href="../part 2/DairyAndEggs.html" #dairyeggs>Dairy and Eggs</a></li>
              <li><a href="../part 2/BreadsAndPasta.html" #breadspasta>Breads and Pasta</a></li>
              <li><a href="../part 2/MeatsAndFish.html" #meatsfish>Meat and Fish</a></li>
            </ul>
          </li>
          <li><a href="../PHP/Summary_P4.php"><i class="material-icons">shopping_cart</i>Shopping Cart</a></li>
          <li><a href="../PHP/UserLogIn_P5.php">Login</a></li>
        </ul>
      </nav>
    </header>
    <br><br><br><br><br><br>
<body>
 
	
        <div style="background-color: darkseagreen; font-family: cursive;"><br><br><br>
            <p style="font-size: 40px; color: white; text-align: center;"> Sign Up Today at GreenTopia! </p><br><br>
        </div>
    

    <div class="center">
        <br>
        <fieldset style="padding: 12px">
            <legend>SIGN UP</legend>
            <form target="_self" autocomplete="on">
                <div class="space">
                    <label for="fname"><span style="color: red"> *</span>First Name:</label><br>
                    <input type="text" id="fname" name="fname" placeholder="First Name" required>
                </div>
                <div class="space">
                    <label for="lname"><span style="color: red"> *</span>Last Name:</label><br>
                    <input type="text" id="lname" name="lname" placeholder="Last Name" required>
                </div>
                <div class="space">
                    <label for="email"><span style="color: red"> *</span>Email Address:</label><br>
                    <input type="text" id="email" name="email" placeholder="Enter your Email Address" size="25" required><br>
                </div>
                <div class="space">
                    <label for="password"><span style="color: red"> *</span>Password (8 characters minimum):</label><br>
                    <input type="password" id="password" name="password" minlength="8" required placeholder="Enter your Password" size="25"><br>
                </div>
                <div class="space">
                    <label for="cpassword"><span style="color: red"> *</span>Confirm Password:</label><br>
                    <input type="password" id="cpassword" name="cpassword" minlength="8" required placeholder="Confirm your Password" size="25"><br>
                </div>
                <div>
                    <input type="checkbox" onclick="myFunction()">Show Password<br>
                </div>
                <input type="submit" value="Submit" class="button" onclick="return confirmPassword()">
                <input type="reset" value="Reset" class="button"><br>
            </form>

            <script>
                function myFunction() {
                    var x = document.getElementById("password");
                    var y = document.getElementById("cpassword");
                    if (x.type == "password") {
                        x.type = "text";
                    } else {
                        x.type = "password";
                    }
                    if (y.type == "password") {
                        y.type = "text";
                    } else {
                        y.type = "password";
                    }

                }

                function myFunctionC() {
                    var y = document.getElementById("cpassword");
                    if (y.type == "cpassword") {
                        y.type = "text";
                    } else {
                        y.type = "cpassword";
                    }
                }

                function confirmPassword() {
                    var x = document.getElementById("password").value;
                    var y = document.getElementById("cpassword").value;
                    if (x != y) {
                        alert("Passwords do not match! Please Try Again.");
                        return false;
                    }
                    return true;
                }

            </script>
        </fieldset><br>
    </div>
    <div>

    </div>
</body>

</html>

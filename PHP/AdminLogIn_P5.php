<?php

session_start();

$username="Admin";
$password="Admin";

if(isset($_POST['Submit'])){

if(isset($_POST['username']) && $_POST['username'] == $username && $_POST['password'] == $password)
{
    header('Location: ../PHP/UserList_P9.php');
}
else
{
}}
?>

<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>Log In Admin | GreenTopia</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../CSS/P2.css">

         <link rel="stylesheet" href="../CSS/P4.css">
	 <link rel="stylesheet" href="../CSS/Page1.css"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

        /*
		*{
			font-family: "Shadows Into Light Two";
		}
*/

    </style>
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
          <li><a href="../PHP/Summary_P4.php"><i class="fa fa-opencart" aria-hidden="true"></i>&nbsp;Shopping Cart</a></li>
            <li><a href="../PHP/UserLogIn_P5.php"><i class="fa fa-user-o" aria-hidden="true"></i>&nbsp; Login</a></li>
        </ul>
      </nav>

	
	</header>
	<br><br><br><br><br><br><br>
<body style="background-color: ">
    
	
        <div style="background-color: darkseagreen; font-family: cursive;"><br><br><br>
            <h2 style="font-size: 40px; color: white; text-align: center;font-family: Shadows Into Light Two"> Administration Log In </h2><br><br>
        </div>
    

    <div class="center">
        <br>
        <fieldset>
            <legend>Log In:</legend>
            <form target="_self" autocomplete="on">
                <div class="space">
                    <label for="email"><span style="color: red">*</span>Email Address:</label><br>
                    <input type="text" id="email" name="email" placeholder="Enter your Email Address" size="25" required ><br>
                </div>
                <div class="space">
                    <label for="password"><span style="color: red">*</span>Password (8 characters minimum):</label><br>
                    <input type="password" id="password" name="password" minlength="8" required placeholder="Enter your Password" size="25"><br>
                </div>
                <div>
                    <input type="checkbox" onclick="myFunction()">Show Password<br>
                </div>

		       <form action=""  method="POST">
            <label for="name" id="app_name_label"  > SUBMIT </label>
            <input type="text" name="name" id="name_textfield">

            <input type="submit" name"Submit" value="send" >
        </form>
	    
                <a href="../PHP/UserList_P9.php"><button type="button" class="SubmitButton" name="Submit1">Submit</button></a>
				<button type="button" class="Forgot Password">Forgot Password</button>
                <br>

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

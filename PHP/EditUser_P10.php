<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>GreenTopia Grocery Store</title>

    <!-- CSS file -->
    <link rel="stylesheet" href="../CSS/P10.css">
     <link rel="stylesheet" href="../CSS/Page1.css" />
    <link rel="stylesheet" href="../CSS/Page11.css" />

</head>

<!-- Header -->
    <header>
     <input type="checkbox" id="menu" />
    <label for="menu"><i class="material-icons">menu</i></label>

     <nav class="navbar">
      <ul>
        <li><a href="../HTML/P7.html">Product List</a></li>
        <li><a href="../part 9/usrerList.html">User List</a></li>
        <li><a href="../HTML/P11.html">Order List</a></li>
        <li><a href="../index.html">Logout</a></li>
      </ul>
    </nav>
  </header>
    <br><br><br><br><br><br><br>
<h1>Edit User Profile</h1><br>

<body>
    <ul class="col">
        <section class="column-center">
            <li>
                <div class="column1">
                    <!-- Username Property -->
                    <label for="username">Username: </label><br>
                    <input type="text" id="username" name="username"> <br> <br>

                    <!-- Email Property -->
                    <label for="email">Email: </label><br>
                    <input type="text" id="email" name="email"> <br> <br>

                    <!-- Password Property -->
                    <label for="pwd">Password: </label> <br>
                    <input type="password" id="pwd" name="pwd" minlength="8" required> <br> <br>
                </div>
            </li>

            <li>
                <div class="column2">
                    <!-- Address Property -->
                    <label for="address">Address: </label> <br>
                    <input type="text" id="address" name="address"> <br> <br>

                    <!-- Postal Code Property -->
                    <label for="postalcode">Postal Code: </label> <br>
                    <input type="text" id="pcode" name="pcode"> <br> <br>

                    <!-- Save Button-->
                    <button class="button" onclick="SavedSuccessfully()">Save</button>

                </div>
            </li>
        </section>
    </ul>
    <script>
        function SavedSuccessfully() {
            var success = window.confirm("Your profile has been updated!");
        }

    </script>

</body>


</html>

<!DOCTYPE html>
<html>
<head>
    <title>BassBoom-Pay</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/icon.png">
    <style>
        form{
            text-align:center;
            line-height:40px;
            margin:auto;
        }
    </style>
</head>
<body>
<div id="navbar">
		<div id="nav-items">
            <img id="logo" src="img/logo.jpg.png" alt="logo">
            <a id="home" href="home.html">Home</a>
            <a id="headphones" href="headphones.html">Headphones</a>
            <a id="cart" href="cart.html">Cart</a>
            <a id="login" href="#">Login</a>
            <a id="signup" href="#">signup</a>
              
        </div>
	</div>
<h1>Payment Portal</h1>
<form method="post">
    <fieldset>
        <label for="name">Card-holder name:</label>
        <input type="text" name="name" id="name" required><br/>
        <label for="card">Card number:</label>
        <input type="number" name="card" id="card" required><br/>
        <label for="expiry">Expiry date:</label>
        <input type="text" name="expiry" id="expiry" required><br/>
        <label for="cvv">Enter CVV:</label>
        <input type="password" name="cvv" id="cvv" required><br/>
        <button type="submit" name="pay">Pay</button><br/>
        <button type="reset">Reset</button>
    </fieldset>
</form>
<?php
    if(isset($_POST['pay'])){
        echo "Payment successful!";
        echo "<form method='get' action='cart.html'><button type='submit'>Go Back</button></form>";
    }
?>
</body>
</html>
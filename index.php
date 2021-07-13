<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sparks | Basic Banking System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>
<body>
<?php
 include 'nav.php';
 ?>
  <header class="indexheader">
    <!--<div class="bank-img">
      <img src="img/bank1.jpg">
    </div>-->

		<div class="container">

      <h2>Welcome to</h2>
			<h1 class="header-heading">RAI BANK</h1>
			<h4>Experience Our Expertise</h4>
  </div>
</header>
<!-- Service section -->
	<div class="service">
     <div class="container service-inner flex-row">
		   	  <div class="service-item">
             <img src="img/adduser.jpg">
          <br>
          <a class="header-link" href="https://localhost/Banking_system/createuser.php">
				  <span type="submit" class="service-button">
					Create a User</span></a>
         </div>
     <div class="service-item">
        <img src="img/trans.jpg">
     <br>
       <a class="header-link" href="https://localhost/Banking_system/transfermoney.php">
     <span type="submit" class="service-button">Make a Transaction</span></a>
    </div>
    <div class="service-item">
        <img src="img/history.jpg">
        <br>
          <a class="header-link" href="https://localhost/Banking_system/transactionhistory.php">
       <span type="submit" class="service-button">Transaction History</span></a>
    </div>
  </div>
</div>
<footer class="footer">
		<div class="container">
			<p>&copy 2021. Made by <b>ANKITHA RAI K</b> <br> RAI Foundation </p>
		</div>
</footer>
</body>
</html>

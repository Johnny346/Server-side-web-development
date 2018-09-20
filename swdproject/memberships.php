<?php

	require ('../group7Connection/connection.php');

?>

<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="css/bootstrap.min.css" rel="stylesheet"/>

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



   <!-- Latest compiled and minified CSS -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



  <!-- jQuery library -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



  <!-- Latest compiled JavaScript -->

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css/bootstrap">

  <link href="css/style.css" rel="stylesheet"/>



  <title>Memberships</title>

</head>

<body>

  <?php require('header.php');?>



  <div class="page-body">

    <!--this php script displays links for manager or staff through out the site only if they are logged in-->

    <?php require('session_manager_staff.php');?>



<!-- Container (Pricing Section) -->



<div class="container-fluid">

  <div class="text-center">

    <div class="jumbotron text-center" style="background-color: #00878D; color: white;">

      <h2>Membership types</h2>

    </div>



    <h4>Choose a payment plan that works for you</h4>



   </div>



    <div class="row">

    <div class="col-sm-6 col-xs-12">

      <div class="panel panel-default text-center">

      <div class="panel-heading">

        <h1>Monthly</h1>

      </div>

      <div class="panel-body">

        <p><strong>20</strong> Lorem</p>

        <p><strong>15</strong> Ipsum</p>

        <p><strong>5</strong> Dolor</p>

        <p><strong>2</strong> Sit</p>

        <p><strong>Endless</strong> Amet</p>

      </div>

      <div class="panel-footer">

        <h3>€100</h3>

        <h4>per month</h4>

        <a href="reg_membership.php"><button class="btn btn-lg">Sign Up</button></a>

      </div>

      </div>

    </div>





    <div class="col-sm-6 col-xs-12">

      <div class="panel panel-default text-center">

      <div class="panel-heading">

        <h1>Annual</h1>

      </div>

      <div class="panel-body">

        <p><strong>100</strong> Lorem</p>

        <p><strong>50</strong> Ipsum</p>

        <p><strong>25</strong> Dolor</p>

        <p><strong>10</strong> Sit</p>

        <p><strong>Endless</strong> Amet</p>

      </div>

      <div class="panel-footer">

        <h3>€1000</h3>

        <h4>per year</h4>

        <a href="reg_membership.php"><button class="btn btn-lg">Sign Up</button></a>

      </div>

      </div>

  </div>

  </div>

  </div>

    <br/><br/>

  </div>

<!--footer section-->

<?php require('footer.php');?>

</body>



</html>
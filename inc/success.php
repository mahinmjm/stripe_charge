<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stripe Charge</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <h2 class="text-center">Stripe Charge</h2>
      <br><br>

      <h2>Payment success !</h2>

      <h4>Information:</h4>
      <p>Charge ID: <?php echo $charge['id']; ?> </p>
      <p>Transaction ID: <?php echo $charge['balance_transaction']; ?> </p>
      <br>
      <br>

      <p>Date: <?php echo date('d-m-Y', $charge['created']); ?> </p>
      <p>Order No: <?php echo $charge['order']; ?> </p>
      <p>Invoice No: <?php echo $charge['invoice']; ?> </p>
      <p>Amount: <?php echo $charge['amount']/10; echo " ".$charge['currency']; ?> </p>
      <p>Fees: <?php echo $fee/10; echo " ".$charge['currency']; ?> </p>
      <br>
      <br>
      
      <p>Customer Name: <?php echo $charge['customer']; ?> </p>
      <p>Customer Stripe Connect ID: <?php echo $_POST['connect_id']; ?> </p>
      <p>Reciept Email: <?php echo $charge['receipt_email']; ?> </p>
      <p>Reciept Number: <?php echo $charge['receipt_number']; ?> </p>
      <p>Description: <?php echo $charge['description']; ?> </p>

      <br>
      <p>Card No (Last 4 digits): <?php echo $charge['source']['last4']; ?> </p>
      <p>Card Name: <?php echo $charge['source']['customer']; ?> </p>

		<br><br><br>
		<a href="../" class="btn btn-primary">Back</a>
    </div>

    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

  </body>
</html>
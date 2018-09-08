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

      <form action="inc/functions.php" method="POST" role="form">

        <div class="form-group">
          <label for="">Amount</label>
          <input type="text" class="form-control" id="" name="amount">
        </div>

        <div class="form-group">
          <label for="">Driver Stripe Connect ID</label>
          <input type="text" class="form-control" id="" name="connect_id" placeholder="Ex: acct_1CzHhIDKSfSO1T37">
        </div>

        <div class="form-group">
          <label for="">Fees (in %)</label>
          <input type="text" class="form-control" id="" name="fee">
        </div>
   
      
        <button type="submit" class="btn btn-primary" name="submit">Transfer</button>
      </form>
    </div>

    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script>
//   var HttpClient = function() {
//     this.get = function(aUrl, aCallback) {
//         var anHttpRequest = new XMLHttpRequest();
//         anHttpRequest.onreadystatechange = function() { 
//             if (anHttpRequest.readyState == 4 && anHttpRequest.status == 200)
//                 aCallback(anHttpRequest.responseText);
//         }

//         anHttpRequest.open( "GET", aUrl, true );            
//         anHttpRequest.send( null );
//     }
// }
// var client = new HttpClient();
// client.get('https://api.ordering.co/sys/data/order/townarounddines/list?businessId=58&token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOjEsImxldmVsIjowfQ.d804niMKfe8xei2sZ-jyn5LC4yUhA0Je65MXa4NAqik', function(response) {
//     // do something with response
//     console.log(response);
// });


</script>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
axios.get('https://api.ordering.co/sys/data/order/townarounddines/list?businessId=58&token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOjEsImxldmVsIjowfQ.d804niMKfe8xei2sZ-jyn5LC4yUhA0Je65MXa4NAqik')
        .then(function (response) {
            // handle success
            if(response && response.data ){
                // return res.status(200).json({ data: response.data });
              console.log(response);
             
              axios.post('inc/process.php',  JSON.stringify(response.data))
                .then(function(res){
                  console.log(res);
                })

            }

          });


</script>
  </body>
</html>

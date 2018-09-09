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


<!-- jQuery -->
<script src="//code.jquery.com/jquery.js"></script>
<script src="./assets/js/async.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>

     // get Business Info and Save
    /*axios.get('https://api.ordering.co/sys/data/business/townarounddines/all?lang=english&token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOjEsImxldmVsIjowfQ.d804niMKfe8xei2sZ-jyn5LC4yUhA0Je65MXa4NAqik')
        .then(function (response) {
            if(response && response.data){
                var businessData = response.data.result.businesses;
                axios({
                    method: 'post',
                    url: './data_process.php',
                    data: businessData
                }).then(function (response) {
                    console.log(response);
                }).catch(function (error) {
                    console.log(error);
                });
            }
        });*/


    // Get Driver info and Save
    /*axios.get('https://api.ordering.co/sys/data/driver/townarounddines/all?lang=english')
        .then(function (response) {
            if(response && response.data){
                var driverData = response.data.result.driver;
                axios({
                    method: 'post',
                    url: './data_process.php',
                    data: driverData
                }).then(function (response) {
                    console.log(response);
                }).catch(function (error) {
                    console.log(error);
                });
            }
        });*/


     // Get Language info and Save
     // axios.get('https://api.ordering.co/sys/data/language/townarounddines/list')
     //     .then(function (response) {
     //         if(response && response.data){
     //             var langData = response.data.result.languages;
     //             axios({
     //                 method: 'post',
     //                 url: './data_process.php',
     //                 data: langData
     //             }).then(function (response) {
     //                 console.log(response);
     //             }).catch(function (error) {
     //                 console.log(error);
     //             });
     //         }
     //     });


     // Get Order Data and Save
     axios.get('https://api.ordering.co/sys/data/order/townarounddines/recent?lang=english')
         .then(function (response) {
             if(response && response.data){
                 var orderData = response.data.result.orders;
                 axios({
                     method: 'post',
                     url: './data_process.php',
                     data: orderData
                 }).then(function (response) {
                     if(response && response.data ){
                         var oIds = response.data;
                         async.each(oIds, function(oid, callback) {
                             axios.get('https://api.ordering.co/sys/data/order/townarounddines/detail/'+oid+'?lang=english')
                                 .then(function (response) {
                                     if(response && response.data){
                                         var orderData = response.data.result;
                                         axios({
                                             method: 'post',
                                             url: './order_process.php',
                                             data: orderData
                                         }).then(function (response) {
                                             if(response && response.data){
                                                 console.log(response.data);
                                             }
                                         }).catch(function (error) {
                                             console.log(error);
                                         });
                                 }
                             });
                         }, function(err) {
                             // if any of the file processing produced an error, err would equal that error
                             if( err ) {
                                 console.log('A file failed to process');
                             } else {
                                 console.log('All files have been processed successfully');
                             }
                         });
                     }
                 }).catch(function (error) {
                     console.log(error);
                 });
             }
         });


</script>
</body>
</html>

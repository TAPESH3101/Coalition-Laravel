<!DOCTYPE html>

<html class="gr__getbootstrap_com" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.png">
    <title>View JSON</title>
<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/styles.css" rel="stylesheet">
      <link href="css/signin.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/navbar-fixed-top.css" rel="stylesheet">
     <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
        </script>
     
</head>
<body data-gr-c-s-loaded="true">
     <nav class="navbar navbar-default navbar-fixed-top">
        <div class="topnav" id="myTopnav">
          <a href="index.php" class="active"><img src="img/favicon.png" width="25px"/></a>
          <a href="index.php">Create</a>
          <a href="view.php">View</a>
        
          <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
    </nav>
    <div class="container" style="min-height:auto;">
<?php

$string = file_get_contents("results.json");
$rs = json_decode ($string,true);
?>
<table width=>
<tr>
<th>Product name</th>
<th>Quantity in stock</th>
<th>Price per item</th>
<th>Datetime submitted</th>
<th>Total value number</th>
</tr>
<tr>
<?php

//foreach ($jsonRS as $rs) {
  
echo "<td>".$rs["product"]."</td>";
echo "<td>".$rs["qty"]."</td>";
echo "<td>".$rs["price"]."</td>";
echo "<td>".$rs["datetim"]."</td>";
echo "<td>".$rs["total"]."</td>";
//}
?>

</tr>
</table>

    </div> <!-- /container -->
</body>
</html>
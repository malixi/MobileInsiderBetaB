
<!DOCTYPE html>
<html>
<head>
  <title>Mobile Insider</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link href="css/test.css" rel="stylesheet"/>
<body>

<div class="container">

<?php

$con=mysqli_connect('localhost','root','','storeb');


$results=mysqli_query($con,'SELECT * FROM product LIMIT 10');

while($row=mysqli_fetch_array($results)){
   
    $width = 100;
    
    echo '<div class="test boxtest"> 

    '.$row['title'].' <br>
    '.$row['model'].' <br>
    '.$row['price'].' <br>
    '.$row['description'].' <br>
     
     <img src="'.$row['brand_image'].'" width="' . $width . 'px" height="100px"/>

    </div>';
    




}
mysqli_close($con);


?>

</div>


</body>
</html>

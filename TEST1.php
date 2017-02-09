<?php
  $hostname = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'storeb';



  try {
    $dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);

    $sql = $dbh->prepare("SELECT * FROM product");

    if($sql->execute()) {
       $sql->setFetchMode(PDO::FETCH_ASSOC);
    }
  }
  catch(Exception $error) {
      echo '<p>', $error->getMessage(), '</p>';
  }

?>

<!DOCTYPE html>
<html>
<head>
  <title>Mobile Insider</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>

<div class="container">

<div class="col-sm-6 col-md-4">
        <div class="thumbnail" >
          <h4 class="text-center"><span class="label label-info">Samsung</span></h4>
          <img src="http://placehold.it/650x450&text=Galaxy S5" class="img-responsive">
          <div class="caption">
            <div class="row">
              <div class="col-md-6 col-xs-6">
                <h3>Galaxy S5</h3>
              </div>
              <div class="col-md-6 col-xs-6 price">
                <h3>
                <label>$649.99</label></h3>
              </div>
            </div>
            <p>32GB, 2GB Ram, 1080HD, 5.1 inches, Android</p>
            <div class="row">
              <div class="col-md-6">
                <a class="btn btn-primary btn-product"><span class="glyphicon glyphicon-thumbs-up"></span> Like</a> 
              </div>
              <div class="col-md-6">
                <a href="#" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></div>
            </div>

           </div>
           </div>
           </div>
   
           </div>

</div>



  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>TITLE</th>
        <th>MODEL</th>
        <th>BRAND</th>
        <th>DESCRIPTION</th>
        <th>Country</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row = $sql->fetch()) { ?>
     <tr>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['model']; ?></td>
        <td><?php echo $row['brand']; ?></td>
        <td><?php echo $row['description']; ?></td>
      </tr>

        <?php } ?>
    </tbody>
  </table>
  </div>
</div>


</body>
</html>



<?php
  include 'config.php';
  echo"<br>";
  if (isset($_POST['submit'])) {
      echo"<br>";
    $countryName = $_POST['search'];
    $sql ="select * from country where country_name='$countryName'" ;
    $select =mysql_query($sql);
    echo"<br>" ;
    $row = mysql_fetch_array($select);
    $countryName =$row['country_name'];
    $code = $row['country_code'];
    $capital = $row['capital'];



  } else {
    header('location: .');
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="row mt-5">
      <div class="col-5 mx-auto">
        <div class="card shadow text-center">
          <div class="card-header">
            <?php  echo $countryName ;   ?>
        </h1>
          </div>
          <div class="card-body">
            <h4><b>Country Code :</b><?php 
                echo $row['country_code'] ;  ?></h4>
            <h4><b>City :</b><?php  echo $row['capital'];   ?></h4>
            <h4><b>Country ID :</b><?php echo $row['id']; ?></h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
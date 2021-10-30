<?php

include "databaseinfo/Database.php";

$db = new Database();

$query = "SELECT * FROM marriage_data";
$readalldata = $db->selectdta($query);

?>

<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Marriage Regestration System</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Place favicon.ico in the root directory -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <!-- css stylesheet here  -->
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

  <!-- navbar area start  -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="menu">
          <ul>
            <li><a href="#">home</a></li>
            <li><a href="regestration.php">Regestration</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">Privicey Policey</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- header area  -->
  <div class="container mb-100">
    <div class="row">
      <div class="col-md-12">
        <div class="heading">
          <h2 class="text-center p-3 text-capitalize font-weight-bold">Online Marriage Regestration System</h2>
        </div>
      </div>
    </div>
  </div>

  <!-- card area  -->

  <div class="container">
    <div class="row">
      <?php if($readalldata){
            while($data = $readalldata->fetch_assoc()){
            ?>
            <div class="col-md-6">
            <table border="1">
              <h4>Marriage  of <?php echo $data['fname'];?> <?php echo $data['fnameGroom'];?></h4>
            <tr>
                <td>Bridge Name:<?php echo $data['fname'];?></td>
                <td>Groom Name : <?php echo $data['fnameGroom'];?></td>
            </tr>
            <tr>
                <td>agmoneyGroom:</td>
                <td><?php echo $data['agmoneyGroom'];?></td>
            </tr>
            <tr>
                <td>Bridge NID:<?php echo $data['nidbridge'];?></td>
                <td>Groom NID : <?php echo $data['nidgroom'];?></td>
            </tr>
            <tr>
                <td>Bridge Address:<?php echo $data['addresbridge'];?></td>
                <td>Groom Address : <?php echo $data['addresGroom'];?></td>
            </tr>
            <tr>
                <td><a href="delete.php?id=<?php echo $data['id'];?>">Delete Data</a></td>
                <td><a href="update.php?id=<?php echo $data['id'];?>">Update Data</a></td>
            </tr>
            </table>
            </div>

          <?php }}?>
    </div>
  </div>

  <div class="copyright_area">
    <p>2021 &copy; copyright by farjana fariha</p>
  </div>


  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
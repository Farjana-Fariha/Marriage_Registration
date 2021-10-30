<?php
include "databaseinfo/Database.php";

$db = new Database();
$id = $_GET['id'];
$query = "SELECT * FROM marriage_data WHERE Id=$id";
$data = $db->selectdta($query)->fetch_assoc();


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
<?php


if(isset($_POST['submit'])){
$fname  = $_POST['fname'];
$lname = $_POST['lname'];
$nidbridge = $_POST['nidbridge'];
$statusbridge = $_POST['statusbridge'];
$agmoney = $_POST['agmoney'];
$agpaid =  $_POST['agpaid'];
$addresbridge =  $_POST['addresbridge'];
$agebridge =  $_POST['agebridge'];
$fnameGroom =  $_POST['fnameGroom'];
$lnameGroom =  $_POST['lnameGroom'];
$nidgroom =  $_POST['nidgroom'];
$statusgroom =  $_POST['statusgroom'];
$agmoneyGroom =  $_POST['agmoneyGroom'];
$agpaidGroom =  $_POST['agpaidGroom'];
$addresGroom =  $_POST['addresGroom'];
$ukilNameOne =  $_POST['ukilNameOne'];
$ukilIdOne =  $_POST['ukilIdOne'];
$ukilNameTwo =  $_POST['ukilNameTwo'];
$ukilidTwo =  $_POST['ukilidTwo'];
$ukilNameThree = $_POST['ukilNameThree'];
$ukilidThree = $_POST['ukilidThree'];



$query = "update marriage_data
    SET 
    fname = '$fname',
    lname = '$lname',
    nidbridge = '$nidbridge',
    statusbridge ='$statusbridge',
    agmoney = '$agmoney',
    agpaid = '$agpaid',
    addresbridge = '$addresbridge',
    agebridge = '$agebridge',
    fnameGroom = '$fnameGroom',
    lnameGroom = '$lnameGroom',
    nidgroom = '$nidgroom',
    statusgroom = '$statusgroom',
    agmoneyGroom = '$agmoneyGroom',
    agpaidGroom = '$agpaidGroom',
    addresGroom = '$addresGroom',
    ukilNameOne = '$ukilNameOne',
    ukilIdOne = '$ukilIdOne',
    ukilNameTwo = '$ukilNameTwo',
    ukilidTwo = '$ukilidTwo',
    ukilNameThree = '$ukilNameThree',
    ukilidThree = '$ukilidThree'
    WHERE id= '$id'
";
$updateData = $db->update($query);

if($updateData){
    header("Location:firstpage.php");
}else{
    echo "<script>window.alert('something is wrong')</script>";
}





}

?>
    <div class="admin_panel">
        <!-- start header section  -->
        <!-- header area  -->
        <div class="container-fluid mb-100">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2 class="text-center p-3 text-capitalize font-weight-bold">Online Marriage Regestration System
                        </h2>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="back_button">
                        <a href="firstpage.php" class="btn btn-primary back_button_style">Back</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- get input area start  -->
        <div class="data_input_area">
            <div class="container-fluid">
                <form action="#" method="post">
                    <div class="row">
                        <div class="alert alert-success text-capitalize" role="alert">
                            To be completed by the gurdian by the bride
                        </div>
                        <div class="col-xl-3">
                            <div class="mb-3">
                                <label class="form-label">First Name</label>
                                <input name="fname" type="text" class="form-control"
                                    value="<?php echo $data['fname'];?>">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="mb-3">
                                <label class="form-label">Last Name</label>
                                <input name="lname" type="text" class="form-control" value="<?php echo $data['lname'];?>">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div>
                                <label class="form-label">Nation ID Number / Birth</label>
                                <input name="nidbridge" type="number" class="form-control"
                                value="<?php echo $data['nidbridge'];?>">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="mb-3">
                                <label class="form-label">She is</label>
                                <select name="statusbridge" id="">
                                    <option value="<?php echo $data['statusbridge'];?>" class="form-control" value="Never Married">Never Married</option>
                                    <option value="<?php echo $data['statusbridge'];?>" class="form-control" value="widwoed , and the period of waiting has passed">widwoed , and the period of waiting has passed
                                    </option>
                                    <option value="<?php echo $data['statusbridge'];?>" class="form-control" value="divorced, period of waiting has passed">divorced, period of waiting has passed
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div>
                                <label class="form-label">Agrement of Money</label>
                                <input value="<?php echo $data['agmoney'];?>" name="agmoney" type="number" class="form-control" placeholder="Agrement Money">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div>
                                <label class="form-label">Agrement of Money Paid</label>
                                <input name="agpaid" type="number" class="form-control"
                                value="<?php echo $data['agpaid'];?>">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div>
                                <label class="form-label">Present Age</label>
                                <input name="agebridge" type="number" class="form-control" value="<?php echo $data['agebridge'];?>">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div>
                                <label class="form-label">Address / Permanent</label>
                                <textarea name="addresbridge" type="number" class="form-control"
                                value="<?php echo $data['addresbridge'];?>"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="alert alert-success text-capitalize" role="alert">
                            To be completed by the gurdian by the Groom
                        </div>
                        <div class="col-xl-3">
                            <div class="mb-3">
                                <label class="form-label">First Name</label>
                                <input name="fnameGroom" type="text" class="form-control"
                                value="<?php echo $data['fnameGroom'];?>">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="mb-3">
                                <label class="form-label">Last Name</label>
                                <input name="lnameGroom" type="text" class="form-control" value="<?php echo $data['lnameGroom'];?>">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div>
                                <label class="form-label">Nation ID Number / Birth</label>
                                <input name="nidgroom" type="number" class="form-control"
                                value="<?php echo $data['nidgroom'];?>">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="mb-3">
                                <label class="form-label">He is</label>
                                <select name="statusgroom" id="">
                                    <option value="<?php echo $data['statusgroom'];?>" class="form-control" value="">Never Married</option>
                                    <option value="<?php echo $data['statusgroom'];?>" class="form-control" value="">widwoed , and the period of waiting has passed
                                    </option>
                                    <option value="<?php echo $data['statusgroom'];?>" class="form-control" value="">divorced, period of waiting has passed
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div>
                                <label class="form-label">Agrement of Money</label>
                                <input name="agmoneyGroom" type="number" class="form-control" value="<?php echo $data['agmoneyGroom'];?>">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div>
                                <label class="form-label">Agrement of Money Paid</label>
                                <input name="agpaidGroom" type="number" class="form-control"
                                value="<?php echo $data['agpaidGroom'];?>">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div>
                                <label class="form-label">Present Age</label>
                                <input name="ageGroom" type="number" class="form-control" value="<?php echo $data['ageGroom'];?>">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div>
                                <label class="form-label">Address / Permanent</label>
                                <textarea name="addresGroom" type="number" class="form-control"
                                value="<?php echo $data['addresGroom'];?>"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="alert alert-primary text-capitalize" role="alert">
                            To be completed at the time of the announcement of nikah
                        </div>
                        <div class="col-xl-6">
                            <div class="mb-3">
                                <label class="form-label">Full Name (1st Person)</label>
                                <input name="ukilNameOne" type="text" class="form-control" value="<?php echo $data['ukilNameOne'];?>">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="mb-3">
                                <label class="form-label">National ID Number</label>
                                <input name="ukilIdOne" type="text" class="form-control" value="<?php echo $data['ukilIdOne'];?>">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="mb-3">
                                <label class="form-label">Full Name (2nd Person)</label>
                                <input name="ukilNameTwo" type="text" class="form-control" value="<?php echo $data['ukilNameTwo'];?>">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="mb-3">
                                <label class="form-label">National ID Number</label>
                                <input name="ukilidTwo" type="text" class="form-control" value="<?php echo $data['ukilidTwo'];?>">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="mb-3">
                                <label class="form-label">Full Name (3rd Person)</label>
                                <input name="ukilNameThree" type="text" class="form-control" value="<?php echo $data['ukilNameThree'];?>">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="mb-3">
                                <label class="form-label">National ID Number</label>
                                <input name="ukilidThree" type="text" class="form-control" value="<?php echo $data['ukilidThree'];?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="submit-button">
                                <div class="d-grid gap-2">
                                    <input name="submit" class="btn btn-success m-3 p-3" value="Update Data" type="submit"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- get input area end  -->
    </div>


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
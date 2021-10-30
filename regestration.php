<?php
include "databaseinfo/Database.php";

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

$db = new Database();

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

if($fname == ""){
    echo "<script>window.alert('some wrong');</script>";
}else{
    $query = "INSERT INTO marriage_data(fname,lname,nidbridge,statusbridge,agmoney,agpaid,addresbridge,agebridge,fnameGroom,lnameGroom,nidgroom,statusgroom,agmoneyGroom,agpaidGroom,addresGroom,ukilNameOne,ukilIdOne,ukilNameTwo,ukilidTwo,ukilNameThree,ukilidThree) 
    Values('$fname','$lname','$nidbridge','$statusbridge','$agmoney','$agpaid','$addresbridge','$agebridge','$fnameGroom','$lnameGroom','$nidgroom','$statusgroom','$agmoneyGroom','$agpaidGroom','$addresGroom','$ukilNameOne','$ukilIdOne','$ukilNameTwo','$ukilidTwo','$ukilNameThree','$ukilidThree')";
    $create = $db->insert($query);
    echo "<script>window.alert('insert Data Successfully')</script>";
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
                                    placeholder="Enter your first name">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="mb-3">
                                <label class="form-label">Last Name</label>
                                <input name="lname" type="text" class="form-control" placeholder="Enter your last name">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div>
                                <label class="form-label">Nation ID Number / Birth</label>
                                <input name="nidbridge" type="number" class="form-control"
                                    placeholder="National Id Number">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="mb-3">
                                <label class="form-label">She is</label>
                                <select name="statusbridge" id="">
                                    <option class="form-control" value="Never Married">Never Married</option>
                                    <option class="form-control" value="widwoed , and the period of waiting has passed">widwoed , and the period of waiting has passed
                                    </option>
                                    <option class="form-control" value="divorced, period of waiting has passed">divorced, period of waiting has passed
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div>
                                <label class="form-label">Agrement of Money</label>
                                <input name="agmoney" type="number" class="form-control" placeholder="Agrement Money">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div>
                                <label class="form-label">Agrement of Money Paid</label>
                                <input name="agpaid" type="number" class="form-control"
                                    placeholder="Agrement Money Paid">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div>
                                <label class="form-label">Present Age</label>
                                <input name="agebridge" type="number" class="form-control" placeholder="Age">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div>
                                <label class="form-label">Address / Permanent</label>
                                <textarea name="addresbridge" type="number" class="form-control"
                                    placeholder="Address"></textarea>
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
                                    placeholder="Enter your first name">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="mb-3">
                                <label class="form-label">Last Name</label>
                                <input name="lnameGroom" type="text" class="form-control" placeholder="Enter your last name">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div>
                                <label class="form-label">Nation ID Number / Birth</label>
                                <input name="nidgroom" type="number" class="form-control"
                                    placeholder="National Id Number">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="mb-3">
                                <label class="form-label">He is</label>
                                <select name="statusgroom" id="">
                                    <option class="form-control" value="">Never Married</option>
                                    <option class="form-control" value="">widwoed , and the period of waiting has passed
                                    </option>
                                    <option class="form-control" value="">divorced, period of waiting has passed
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div>
                                <label class="form-label">Agrement of Money</label>
                                <input name="agmoneyGroom" type="number" class="form-control" placeholder="Agrement Money">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div>
                                <label class="form-label">Agrement of Money Paid</label>
                                <input name="agpaidGroom" type="number" class="form-control"
                                    placeholder="Agrement Money Paid">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div>
                                <label class="form-label">Present Age</label>
                                <input name="ageGroom" type="number" class="form-control" placeholder="Age">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div>
                                <label class="form-label">Address / Permanent</label>
                                <textarea name="addresGroom" type="number" class="form-control"
                                    placeholder="Address"></textarea>
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
                                <input name="ukilNameOne" type="text" class="form-control" placeholder="Enter your full name">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="mb-3">
                                <label class="form-label">National ID Number</label>
                                <input name="ukilIdOne" type="text" class="form-control" placeholder="Enter your full name">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="mb-3">
                                <label class="form-label">Full Name (2nd Person)</label>
                                <input name="ukilNameTwo" type="text" class="form-control" placeholder="Enter your full name">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="mb-3">
                                <label class="form-label">National ID Number</label>
                                <input name="ukilidTwo" type="text" class="form-control" placeholder="Enter your full name">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="mb-3">
                                <label class="form-label">Full Name (3rd Person)</label>
                                <input name="ukilNameThree" type="text" class="form-control" placeholder="Enter your full name">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="mb-3">
                                <label class="form-label">National ID Number</label>
                                <input name="ukilidThree" type="text" class="form-control" placeholder="Enter your full name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="submit-button">
                                <div class="d-grid gap-2">
                                    <input name="submit" class="btn btn-success m-3 p-3" value="done" type="submit"/>
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
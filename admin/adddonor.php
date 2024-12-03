<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BDMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../icofont/icofont.min.css">
</head>

<body>

    <div id="wrapper">

    <?php include 'includes/nav.php'?>

        <div id="page-wrapper">
            <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Donor's Detail</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Please fill up the form below:
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="added.php" method="post">
                                     
                                        <div class="form-group">
                                            <label>Enter Your Name</label>
                                            <input class="form-control" name="name" type="text" placeholder="Enter Your Name" id="name">
                                            <div class="text-danger" id="err_name"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Father's Name</label>
                                            <input class="form-control" placeholder="Father's Name" name="guardiansname" id="fname" required>
                                            <div class="text-danger" id="err_fname"></div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Gender [ M/F ]</label>
                                            <input class="form-control" placeholder="M or F" name="gender" id="gender" required>
                                            <div class="text-danger" id="err_gender"></div>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter D.O.B</label>
                                            <input class="form-control" type="date" name="dob" id="dob" required>
                                            <div class="text-danger" id="err_dob"></div>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Weight</label>
                                            <input class="form-control" type="number" placeholder="Enter Weight" name="weight" id="weight" required>
                                            <div class="text-danger" id="err_weight"></div>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Blood Group</label>
                                            <input class="form-control" placeholder="Eg: B+" name="bloodgroup" id="bg" required>
                                            <div class="text-danger" id="err_bg"></div>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Email Id</label>
                                            <input class="form-control" type="email" placeholder="Enter Email Id" name="email" id="email" required>
                                            <div class="text-danger" id="err_email"></div>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Address</label>
                                            <input class="form-control" type="text" placeholder="Enter Address Here" name="address" id="address" required>
                                            <div class="text-danger" id="err_address"></div>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Contact Number</label>
                                            <input class="form-control" type="number" placeholder="Contact Number" name="contact" id="contact" required>
                                            <div class="text-danger" id="err_contact"></div>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Username</label>
                                            <input class="form-control" placeholder="Enter Here" name="username" id="username" required>
                                            <p class="help-block">Example: harry20</p>
                                            <div class="text-danger" id="err_username"></div>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Password</label>
                                            <input class="form-control" name="password" type="password" id="pass" required>
                                            <div class="text-danger" id="err_pass"></div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" onclick="myFunction()">Show Password
                                                </label>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-success" style="border-radius:0%;" onclick="return donorsubmit()">Submit Form</button>

                
                                    </form>


                                </div>                      

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            </div>
            <!-- /.containerfluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
    <script>
        function myFunction() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
        </script>

<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>
    <script>
        function IsName(name) {
        var regex = /^[A-Za-z\s]{2,}[\.]{0,1}[A-Za-z\s]{2,}$/;
        if (!regex.test(name)) {
            return false;
        } else {
            return true;
        }
    }
    function IsMobile(mobile) {
        var regex = /^[2-9]\d{9}$/;
        if (!regex.test(mobile)) {
            return false;
        } else {
            return true;
        }
    }
    function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!regex.test(email)) {
            return false;
        } else {
            return true;
        }
    }

    function donorsubmit(){
        var name = jQuery('#name').val().trim();
        var fname = jQuery('#fname').val().trim();
        var gender = jQuery('#gender').val().trim();
        var dob = jQuery('#dob').val().trim();
        var weight = jQuery('#weight').val().trim();
        var bg = jQuery('#bg').val().trim();
        var email = jQuery('#email').val().trim();
        var address = jQuery('#address').val().trim();
        var contact = jQuery('#contact').val().trim();
        var username = jQuery('#username').val().trim();
        var pass = jQuery('#pass').val().trim();

        jQuery('#err_name').html('');
        jQuery('#err_fname').html('');
        jQuery('#err_gender').html('');
        jQuery('#err_dob').html('');
        jQuery('#err_weight').html('');
        jQuery('#err_bg').html('');
        jQuery('#err_email').html('');
        jQuery('#err_address').html('');
        jQuery('#err_contact').html('');
        jQuery('#err_username').html('');
        jQuery('#err_pass').html('');

        if (IsName(name) == false) {
            jQuery('#err_name').html('*Invalid Name');
            jQuery('#name').focus();
            return false;
        }
        else if (IsName(fname) == false) {
            jQuery('#err_fname').html('*Invalid Name');
            jQuery('#fname').focus();
            return false;
        }
        else if (gender!="M"&&gender!="F") {
            jQuery('#err_gender').html('*Invalid Gender');
            jQuery('#gender').focus();
            return false;
        }
        else if (dob=="") {
            jQuery('#err_dob').html('*Invalid DOB');
            jQuery('#dob').focus();
            return false;
        }
        else if (weight<25||weight>150) {
            jQuery('#err_weight').html('*Invalid Weight');
            jQuery('#weight').focus();
            return false;
        }
        else if (bg!="A+"&&bg!="A-"&&bg!="B+"&&bg!="B-"&&bg!="AB+"&&bg!="AB-"&&bg!="O+"&&bg!="O-") {
            jQuery('#err_bg').html('*Invalid Blood Group');
            jQuery('#bg').focus();
            return false;
        }
        else if (IsEmail(email)==false) {
            jQuery('#err_email').html('*Invalid Email');
            jQuery('#email').focus();
            return false;
        }
        else if (address.length<2) {
            jQuery('#err_address').html('*Invalid Address');
            jQuery('#address').focus();
            return false;
        }
        else if (IsMobile(contact)==false) {
            jQuery('#err_contact').html('*Invalid Contact Number');
            jQuery('#contact').focus();
            return false;
        }
        else if (username.length<2) {
            jQuery('#err_username').html('*Invalid Username');
            jQuery('#username').focus();
            return false;
        }
        else if (pass.length<4) {
            jQuery('#err_pass').html('*Invalid Password');
            jQuery('#pass').focus();
            return false;
        }
    }
    </script>


    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>
	
	<style>
	footer{
   background-color: #424558;
    bottom: 0;
    left: 0;
    right: 0;
    height: 35px;
    text-align: center;
    color: #CCC;
}

footer p {
    padding: 10.5px;
    margin: 0px;
    line-height: 100%;
}
	</style>

</html>

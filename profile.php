<?php
session_start();
if(!empty($_SESSION['username'])){
$userID=$_SESSION['username'];
}
else{
header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'template/header.php';?>
    </head>
    <body>
        <div id="wrapper">
            <?php include 'template/navigation.php';?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="page-header">
                            Profile
                            </h3>
                            
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row" style="min-height: 450px;">
                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5" style="padding: 40px 10px 10px 20px;">
                            <img src="resources/images/profile.png" class="img-responsive" alt="Image">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <h3 style="padding-bottom: 20px;">Who Are You</h3>
                            <div class="row" style="padding-bottom: 10px;">
                            <label for="input-id" class="col-sm-4">first name :-</label>
                            <label for="input-id" class="col-sm-8" id="fname"></label>
                            </div>
                            <div class="row" style="padding-bottom: 10px;">
                            <label for="input-id" class="col-sm-4">Last name :-</label>
                            <label for="input-id" class="col-sm-8" id="lname"></label>
                            </div>
                            <div class="row" style="padding-bottom: 10px;">
                            <label for="input-id" class="col-sm-4">Project :-</label>
                            <label for="input-id" class="col-sm-8" id="project"></label>
                            </div>
                            <div class="row" style="padding-bottom: 10px;">

                            <label for="input-id" class="col-sm-4">Role :-</label>
                            <label for="input-id" class="col-sm-8" id="role"></label>
                            </div>
                            <div class="row" style="padding-bottom: 10px;">

                            <label for="input-id" class="col-sm-4">Email :-</label>
                            <label for="input-id" class="col-sm-8" id="email"></label>
                            </div>
                            <div class="row" style="padding-bottom: 10px;">

                            <label for="input-id" class="col-sm-4">Username :-</label>
                            <label for="input-id" class="col-sm-8" id="uname"></label>
                            </div>
                            <div class="row" style="padding-bottom: 10px;">

                            <label for="input-id" class="col-sm-4">Password :-</label>
                            <label for="input-id" class="col-sm-8" id="password"></label>
                            </div>
                            <div class="row" style="margin-right: 150px;">
                               <button type="button" class="btn btn-info pull-right">Edit</button>
                            </div>
                        </div>
                        
                    </div>
                    <!-- /.row -->
                    
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
        </div>
        
        <!-- /#wrapper -->
        <!-- jQuery -->
        <?php include 'template/footer_script.php';?>
        <script type="text/javascript">
        $(document).ready(function(){
            var userID = '<?php echo $userID; ?>';
             $.ajax({
                 type: 'post',
                 url: 'function/get-profile.php',
                 data: {
                     userID: userID
        
                    },
                success: function(response) {
                 
                var json = JSON.parse(response);
                 console.log(json);
                 $('#fname').text(json.g_fname);
                 $('#lname').text(json.g_lname);
                 $('#project').text(json.g_project);
                 $('#role').text(json.g_role);
                 $('#email').text(json.g_email);
                 $('#uname').text(json.g_username);
                 $('#password').text(json.g_password);

     
        
                     }
              });
        
            });
        </script>
        
    </body>
</html>
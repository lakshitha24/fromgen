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
   <?php include 'template/createNew_header.php';?>
<style type="text/css">
    .form-builder-save{
        display: none;
    }
    .clear-all{
        display: none;
    }
      .view-data{
        display: none;
      }
</style>
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
                            Home
                        </h3>
                        
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-8" id="notification">
                    
                    </div>

                    
                       <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bell"></i> Notification</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group" id="list">
                                  
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>

        <!-- Modal fro project view -->
<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Form View</h4>
      </div>
      <div class="modal-body">
         <textarea id="fb-template"></textarea>
         <img id="my_image"/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<!--model for  notifications -->
<div class="modal fade bs-example-modal-lg" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Form View</h4>
      </div>
      <div class="modal-body">
         <textarea id="fb-template1"></textarea>

         <label id="formID" style="visibility: hidden;"></label>
         <label id="userID" style="visibility: hidden;"><?php echo $userID; ?></label>
         <canvas width="600px" height="360px" id="c" style="border:1px solid #000000;"></canvas>
         <input class="btn btn-primary" type="file" id="imgLoader" >
          

      </div>
      <div class="modal-footer">
     
        <button type="button" class="btn btn-default"  id="update1" data-dismiss="modal">Submit</button>

       
      </div>
    </div>
  </div>
</div>

<div class="modal fade bs-example-modal-lg" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Form View</h4>
      </div>
      <div class="modal-body">
         <textarea id="fb-template2"></textarea>
         <img id="my_image2"/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


   
  
    <!-- /#wrapper -->

    <!-- jQuery -->
	 <?php include 'template/footer_script.php';?>

     <script type="text/javascript">
     $(document).ready(function() {


       var userID = '<?php echo $userID; ?>';

       $.ajax({
           type: 'post',
           url: 'function/get-detail.php',
           data: {
               userID: userID

           },
           success: function(response) {
               // console.log(response);
               var json = JSON.parse(response);
               //  console.log(json);
               // var x=0;
               for (x in json) {
                   //  console.log(json[x]);
                   $('#notification').append(' <div class="alert alert-info">' +
                       '<a href="#" id="' + json[x].g_formID + '" class="res" data-toggle="collapse" data-target="#collapseExample' + x + '" aria-expanded="false"' +
                       ' aria-controls="collapseExample"><span class="glyphicon glyphicon-arrow-down"></span></a> ' +
                       '<a href="#" class="pull-right" id="' + json[x].g_formID + '" data-toggle="modal" data-target="#myModal">' +
                       '<i class="fa fa-pencil"></i>  <strong>' + json[x].g_formTitle + '</strong> by ' + json[x].g_project +
                       'at ' + json[x].g_formDate + '</a> </div> <div class="collapse" id="collapseExample' + x + '"><div id="response" class="well"></div></div>');



               }

               $(".res").click(function(event) {
                   $('.well').empty();
                   var formID = (this).id;
                   $.ajax({
                       type: 'post',
                       url: 'function/get-res.php',
                       data: {
                           formID: formID
                       },
                       success: function(response) {
                           var json1 = JSON.parse(response);
                          // console.log(json1);
                           for (y in json1) {
                               //  console.log(this);
                               $('.well').append('<div> <a class="model" id="' + json1[y].g_formResID + '" style="padding-bottom:10px;"href="#" data-toggle="modal" data-target="#myModal2">' + json1[y].g_userID + '  response on  ' + json1[y].g_time + '</a></div>');

                           }

                 $('.model').on('click',function(event){
                var resID = event.target.id;
                $.ajax({
                    type:'post',
                    url:'function/get-response.php',
                    data:{
                        resID:resID
                    },
                    success:function(response){
                        var json = JSON.parse(response);
                        console.log(json.g_formView);
                        $('#fb-template2').html(json.g_formView);
                        $('#fb-template2').formRender();

                           ////  $('#fb-template').formBuilder();
                        $('#my_image2').attr("src", json.g_formimage);
                         //  console.log(json.g_formimage);
                    }
                });

               });



                       }

                   });

               });

               $(".collapse").on('hidden.bs.collapse', function(event) {
                   $('.well').empty();
               });




               $(".pull-right").on('click', function(event) {
                   var formID = event.target.id;
                   $.ajax({
                       type: 'post',
                       url: 'function/get-form.php',
                       data: {
                           formID: formID
                       },
                       success: function(response) {
                           var json = JSON.parse(response);
                           //  console.log(json);

                           $('#fb-template').html(json.g_formView);
                           $('#fb-template').formRender();
                           ////  $('#fb-template').formBuilder();
                           $('#my_image').attr("src", json.g_formimage);
                           console.log(json.g_formimage);


                       }
                   });


               });

           





           }
       });

       $.ajax({
           type: 'post',
           url: 'function/get-notification.php',
           data: {
               userID: userID

           },
           success: function(response) {
               var json = JSON.parse(response);
               // console.log(json);
               for (x in json) {
                   $('#list').append('<a href="#" id="' + json[x].g_formID + '" class="list-group-item new-item" data-toggle="modal" data-target="#myModal1">' +
                       '<span class="badge"></span>' +
                       '<i class="fa fa-fw fa-comment"></i> form by the ' + json[x].g_userID + ' ' + json[x].g_formDate + '</a>');


               }
               $('#list').on('click', function(event) {
                   var formID = event.target.id;
                   //  console.log(formID);
                   $.ajax({
                       type: 'post',
                       url: 'function/get-form.php',
                       data: {
                           formID: formID
                       },
                       success: function(response) {
                           var json = JSON.parse(response);
                           console.log(json);
                           $('#formID').text(json.g_formID);
                           $('#fb-template1').html(json.g_formView);
                           //  $('#fb-template').formRender();
                           //  var img = new Image;
                           //   img.src=(json.g_formimage);
                           $('#my_image1').attr("src", json.g_formimage);
                           //   $('#c').add(img);
                           $('#fb-template1').formBuilder();



                       }

                   });

               });

           }
       });

   });

   var c = new fabric.Canvas('c');
   document.getElementById('imgLoader').onchange = function handleImage(e) {
       var reader = new FileReader();
       reader.onload = function(event) {
           console.log('fdsf');
           var imgObj = new Image();
           imgObj.src = event.target.result;
           imgObj.onload = function() {
               // start fabricJS stuff

               var image = new fabric.Image(imgObj);
               image.set({
                   left: 250,
                   top: 250,
                   angle: 0,
                   padding: 10,
                   cornersize: 1
               });
               //image.scale(getRandomNum(0.1, 0.25)).setCoords();
               c.add(image);

               // end fabricJS stuff
           }

       }
       reader.readAsDataURL(e.target.files[0]);
   }
         
               


     </script>



</body>

</html>

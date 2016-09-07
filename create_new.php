
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
              Create New
              </h3>
              
            </div>
          </div>

          <div class="row createNew-form" id="fist-frame" >
            <div class="col-md-6 col-lg-6 col-lg-offset-2 col-md-offset-2">
              <form action="" method="POST" role="form">
                
                <div class="form-group">
                  <label for="">Form Title</label>
                  <input type="text" class="form-control" id="g_title" placeholder="Form Title" required="">
                  <span class="error" id="title">Form Title Required</span>
                </div>
                <div class="form-group">
                  <label for="">Project</label>
                  <input type="text" class="form-control" id="g_project" placeholder="Project" required="">
                  <span class="error" id="project">Project Required</span>
                </div>
                <div class="form-group">
                  <label for="">Date</label>
                  <input type="Date" class="form-control" id="g_date" placeholder="Date" required="">
                  <span class="error" id="date">Date Required</span>
                </div>
                <div class="form-group">
                  <label for="">Form Description</label>
                  <textarea class="form-control" rows="3" id="g_description"></textarea>
                </div>
                
                
                
                <button  type="" class="btn btn-primary pull-right" id="senddata1">Next<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
              </form>
              
            </div>
            
          </div>
          <div class="row createNew-form" id="second-frame" style="display:none " >
            <div class="col-md-10 col-lg-10 col-lg-offset-1 col-md-offset-1">
              <form action="" method="POST" role="form">
                
                <div class="demo-wrap">
                  
                  <div id="main_content_wrap" class="outer">
                    <section id="main_content" class="inner">
                    <div class="build-form">
                        <h2><strong>Build The Form</strong></h2>
                        <form action="">
                          <textarea name="form-builder-template" id="form-builder-template" cols="30" rows="10"></textarea>
                           <canvas width="600px" height="360px" id="c" style="border:1px solid #000000;"></canvas>
                           <input class="btn btn-primary" type="file" id="imgLoader" >
                        </form>
                        <br style="clear:both">
                      </div> 

                      <span id="idLabel" style="visibility: hidden;"></span>
                       
                    </section>
                     <button type="submit" class="btn btn-primary pull-right" id="senddata2">Next<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
                   
                     
                  </div>
                  
                </div>
                
                
                
                
              </form>
              
            </div>
            
          </div>
          <div class="row createNew-form" id="thired-frame" style="display:none ">
            <div class="col-md-6 col-lg-6 col-lg-offset-2 col-md-offset-2">
              <form action="" method="POST" role="form">
                <div id="add-field">
                  <div class="form-group thired-frametext reciver-0">
                    <label for="">Add Reciver</label><br/>
                    <input type="text" class="form-control" id="g_title" placeholder="Reciver" name="mytext[]">
                    <button type="button" class="btn btn-primary" id="add-reciver-0"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                  </div>
                  
                </div>
                
                <span id="idlabel2" style="visibility: hidden;"></span>
                <button type="" class="btn btn-primary pull-right" id="senddata3">Next<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>

              </form>
              
            </div>
            
          </div>

            <div class="row createNew-form" id="fourth-frame" style="display:none ">
            <div class="col-md-6 col-lg-6 col-lg-offset-2 col-md-offset-2">
              <form action="function/form-submit.php" method="POST" role="form">
                 
               <textarea id="fb-template"></textarea>

                 <input type="" value="" name ="formID" id="idlabel3" style="visibility: hidden;"></input>
                <button type="" class="btn btn-primary pull-right" id="senddata4">submit</button>
    
               

              </form>
              
            </div>
            
          </div>

        </div>
      </div>
    </div>
    <?php include 'template/footer_script.php';?>
    <script>
  jQuery(document).ready(function($) {
     'use strict';
        var template = document.getElementById('form-builder-template'),
       formContainer = document.getElementById('rendered-form'),
      renderBtn = document.getElementById('render-form-button');
      $(template).formBuilder();
      $(renderBtn).click(function(e) {
        e.preventDefault();
      $(template).formRender({
        container: $(formContainer)
      });
      });
    }); 

    </script>
    
    <script type="text/javascript">


    $('#senddata1').click(function() {
     // $('#fist-frame').show();
     var g_user = '<?php echo "$userID" ?>';
     var g_title = $('#g_title').val();
     var g_project = $('#g_project').val();
     var g_date = $('#g_date').val();
     var g_description = $('#g_description').val();
  
     $.ajax({
         type: 'post',
         url: 'function/function-create.php',
         data: {
             g_user: g_user,
             g_title: g_title,
             g_project: g_project,
             g_date: g_date,
             g_description: g_description
         },
         success: function(response) {
             //console.log(response);
             $('#idLabel').text(response);
             $('#idlabel2').text(response);
             $('#idlabel3').val(response);

             $('#fist-frame').hide();

         }
     });

     $('#second-frame').show();
     $('#fist-frame').hide();
     return false;


 });


 $('#senddata2').click(function() {
     $('#fist-frame').hide();
     $('#second-frame').hide();
      $('#fourth-frame').hide();
     $('#thired-frame').show();
     return false;
 });

 var x = 0;
 $('#add-reciver-' + x + '').click(function() {
     x++;
     console.log('#add-reciver-' + x + '');
     $('#add-field').append('<div class="form-group thired-frametext reciver-' + x + '"><label for="">Add Reciver</label><br/>' +
         '<input type="text" class="form-control" id="g_title" placeholder="Reciver" name="mytext[]" >' +
         '<button type="button" class="btn btn-primary" id="add-reciver-' + x + '"><span class="glyphicon glyphicon-plus" aria-hidden="true">' + '</span></button></div>');

     $('#add-reciver-' + x + '').hide();


 });


 $('#senddata3').click(function() {
 
 
   //   var recivers = $.map($(".thired-frametext input[type=text]"), function(el) {
    //    return el.value
    //  }).join(",\n");
     // console.log(recivers);
     var recivers =[];
     recivers =$('.thired-frametext input[name="mytext[]"]').serializeArray();
    var data =JSON.stringify(recivers);
      console.log(recivers);

      var formID =$('#idLabel').text();

          $.ajax({
         type: 'post',
         url: 'function/function-createRecever.php',
         data: {
             data:data,
             formID: formID
             
         },
         success: function(response) {
        console.log(response);
      $('#fb-template').html(response);
       $('#fb-template').formRender();
         console.log();
      
         }
     });
          
     $('#fist-frame').hide();
     $('#second-frame').hide();
     $('#thired-frame').hide();
      $('#fourth-frame').show();
return false;
    

 });

var c = new fabric.Canvas('c');
   document.getElementById('imgLoader').onchange = function handleImage(e) {
    var reader = new FileReader();
    reader.onload = function (event) { console.log('fdsf');
        var imgObj = new Image();
        imgObj.src = event.target.result;
        imgObj.onload = function () {
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
    <script type="text/javascript">
    
    
    </script>
    
  </body>
</html>
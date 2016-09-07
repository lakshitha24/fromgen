<!DOCTYPE html>
<html>

<head>
   <?php include 'template/createNew_header.php';?>
  
</head>

<body>
  <div class="demo-wrap">
  
    <div id="main_content_wrap" class="outer">
      <section id="main_content" class="inner">

        <div class="build-form">
          <h2><strong>Build The Form</strong></h2>
          <form action="">
            <textarea name="form-builder-template" id="form-builder-template" cols="30" rows="10"></textarea>
          </form>
          <br style="clear:both">
        </div>
      
      </section>
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
 
  
 
</body>

</html>

 <script src="resources/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
  <script src="resources/js/bootstrap.min.js"></script>

  <script src="resources/js/jquery-ui.min.js"></script>
  <!-- Only include on form edit page -->
  <script src="resources/js/form-builder.js"></script>
  <!-- Only include on form render page -->
  <script src="resources/js/form-render.js"></script>
     
    <!-- Morris Charts JavaScript -->
   
     <script type="text/javascript">
       $(window).load(function() {

        var g_user ='<?php echo $userID; ?>';
        $.ajax({
      type : 'post',
      url : 'function/draft.php',
      data :  {g_user:g_user},
      success : function(response)
      {
    $('#Draft-num').text(response);
      // $('#fist-frame').hide();
      // $('#second-frame').show();
      }
      });
       });
        </script>
        <script type="text/javascript">
          $(function() {
            var test =location.pathname.split("/")[2] ;

          $('nav a[href^="' + test + '"]').parent('li').addClass('active');
        
          });
        </script>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ajax (POST) jQuery</title>
  </head>
  <body>
    <h1>Ajax (POST) jQuery</h1>
    <hr>
    <?php
      //--------------------------
      $conx = new mysqli('localhost','root','','deptos');
      $conx->set_charset('utf8');
      // --------------------------
      $sql = "SELECT * FROM departments";
      $rsl = $conx->query($sql);
      // --------------------------
     ?>
     <label for="deptos">Departamentos:</label>
     <br>
     <select id="deptos" name="deptos">
       <option value="">Seleccione...</option>
       <?php while($row = $rsl->fetch_assoc()) { ?>
        <option value="<?php echo $row['id_dep']; ?>"><?php echo $row['name_dep']; ?></option>
         <?php } ?>
     </select>
     <br><br>
<img src="img/ajax-loader.gif" id="ajaxLoader" />
<br><br>
     <select id="muns" name="muns">

     </select>

     <script src="js/jquery-1.11.3.min.js"></script>
     <script>
        $(document).ready(function(){
          //----------------
          $('#muns, #ajaxLoader').hide();
          $('body').on('change', '#deptos', function(){
            $idep = $(this).val();

            if($idep.length > 0){
              $('#ajaxLoader').show();
              $('#muns').hide();
              $.post('muns.php', {idep : $idep}, function(data, textStatus, xhr) {
                if(textStatus == 'success')
                {
                  loadMuns(data);
                }
              });
            }
          })
        });

        function loadMuns(data){
          setTimeout(function(){
            $('#ajaxLoader').hide();
            $('#muns').show().html(data);
          },2000)
        }
     </script>
  </body>
</html>

<?php if ($_POST): ?>
  <?php
    //--------------------------
    $conx = new mysqli('localhost','root','','deptos');
    $conx->set_charset('utf8');
    // --------------------------
    $idep = $_POST['idep'];
    $sql = "SELECT * FROM municipalities WHERE dep_id = $idep";
    $rsl = $conx->query($sql);
    // --------------------------
   ?>
   <option>Seleccione...</option>
   <?php while($row = $rsl->fetch_assoc()){ ?>
   <option value="<?php echo $row['id_mun']; ?><"><?php echo $row['name_mun']; ?></option>
   <?php } ?>
<?php endif; ?>

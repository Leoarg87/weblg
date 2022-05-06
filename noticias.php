
  <?php
  try{
    $base=new PDO("mysql:host=localhost; dbname=proyecto", "root","liceorc4" );
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql1="SELECT * FROM noticias ORDER BY fecha DESC LIMIT 0,5";
     
    
  }catch(exception $e){
     die("error:". $e->getMessage());
     }
     $result = $base->prepare($sql1);
     $result->execute();
     $arr = $result->fetchAll(PDO::FETCH_ASSOC);
foreach($arr as $row){
$id_noticia=$row["id"];
$url=$row["link"];
    ?>








  <input type="hidden"name="id"class="table__item text-center" value="<?php echo $row["id"];?>">
  <div>
  <p class="text-uppercase font-weight-bold"><?php echo $row["titulo"];?></p>
  <p><?php echo $row["detalle"];?></p>
  <p class="font-weight-bold"><?php echo $row["autor"];?></p>
  <p><?php echo $row["fecha"];?></p>
  </div>
  <?php echo "<a class='table__item__link' href='$url'>Ir a la noticia</a>";?><br><br>
  
  
<?php } ?>



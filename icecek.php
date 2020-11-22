<?php require 'ayar.php';  

session_start();

// session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <script src="jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
      <br> <br> 
      
      <div class="container" style="width:700px;"> 
      <h3 align="center"></h3>
      <br> 
      <?php 
        
          $query = $db->query("select * from icecekler order by id desc",PDO::FETCH_OBJ);
          
             foreach($query as $row){
             
                 ?>
                 <div class="col-md-4"> 
                 <form action="islem2.php?islem2=ekle&id=<?=$row->id;?>" method="post"> 
                 <div style="border:1px solid #333;background:#f1f1f1;padding:16px;border-radius:5px;" align="center"> 
                 <img src="resim/<?=$row->resim;?>" class="img-responsive" alt=""><br>
                 <h4 class="text-info"><?=$row->isim;?></h4>
                 <h4 class="text-danger"><?=$row->fiyat;?></h4>
                 <input type="text" name="miktar" class="form-control" value="1">
                 <input type="hidden" name="isim" value="<?=$row->isim;?>">
                 <input type="hidden" name="fiyat" value="<?=$row->fiyat;?>">
                 <button type="submit" style="margin-top:5px;" name="ekle" class="btn btn-success">Urun ekle</button>
                 </div>
                 </form>
                 </div>
                 <?php
                 
             
             }
          
      ?>
      <div style="clear:both"></div><br>
      <h3>Sepetteki Urunler</h3>
      <div class="table-responsive"> 
        <table class="table table-bordered"> 
        <tr> 
        <td width="30%">urun isim</td>
        <td width="10%">miktar</td>
        <td width="20%">fiyat</td>
        <td width="20%">toplam</td>
        <td width="5%">işlem</td>
        </tr>
        <?php 
           
            
            if(!empty($_SESSION["sepet"])){
            
                  $toplam = 0;
                
                foreach($_SESSION["sepet"] as $anahtar => $deger){
                
                       
                    ?>
                    <tr> 
                    <td><?=$deger["urun_isim"];?></td>
                    <td><?=$deger["urun_miktar"];?></td>
                    <td><?=$deger["urun_fiyat"];?></td>
                    <td><?=number_format($deger["urun_fiyat"] * $deger["urun_miktar"],2);?></td>
                    <td><a href="islem2.php?islem2=sil&id=<?=$deger["urun_id"];?>"><span class="text-danger">Kaldır</span></a></td>
                    </tr>
                    <?php
                    
                    $toplam = $toplam + ($deger["urun_miktar"] * $deger["urun_fiyat"]);
                
                }
                
                ?>
                <tr> 
                <td align="right" colspan="3">Toplam</td>
                <td align="right"><?=number_format($toplam,2);?></td>
                <td></td>
                </tr>
                <?php
                
            
            }
            
         ?>
        </table>
      </div>
      </div>
      
      <li><a href="adresbilgileri.php">Sipariş bilgileri girmek için tıklayınız</a></li    
</body>
</html>































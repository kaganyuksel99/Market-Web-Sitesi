<?php
include("vt_ayar.php"); 

$sorgu=$vt->prepare('SELECT * FROM personel');
$sorgu->execute();
$personellist=$sorgu-> fetchAll(PDO::FETCH_OBJ); //OBJECK OLARAK VERİLERİ ÇEKTİK.
?>

<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Personel Listesi</title>
  </head>
  <body>
      <div class="container">
      <div class="row justify-content-center">
          <div class="col">
              <table class="table table-bordered table-striped table-dark">
                  <tr>
                    <td>id</td> 
                    <td>ad</td> 
                    <td>sifre</td> 
                    <td>Medeni Hali</td> 
                    <td>Doğum Yeri</td> 
                    <td>Çalıştıgı Bölüm</td> 
                    </tr>

                    <?php
                    foreach($personellist as $person){?>
                            
                            <tr>
                                <td><?= $person->id ?></td>
                                <td><?= $person->ad ?></td>
                                <td><?= $person->sifre ?></td> 
                                <td><?= $person->evlilik ?></td>
                                <td><?= $person->dogum_yeri ?></td> 
                                <td><?= $person->bolum ?></td> 


                            </tr>

                    <?php } ?>
                    
              </table>
          </div>
      </div>    
      </div>

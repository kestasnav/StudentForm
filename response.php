<?php 

$vardas = $_POST['vardas'];
$pavarde = $_POST['pavarde'];
$lytis = $_POST['lytis'];
$city = $_POST['cities'];
$about = $_POST['about'];
$transport = (isset($_POST['transport'])) ? $_POST['transport'] : array();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vartotojo duomenys</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,100;1,300&family=Raleway:ital,wght@1,200&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="responseStyles.css">
</head>
<body>
    <div class="container">
    <div class="form">
        <p><b>Vardas:</b> <?php echo $vardas; ?><b class="margin">Pavardė:</b> <?php echo $pavarde; ?></p>
            
            <p><b>Lytis:</b> <?php echo $lytis; ?><b class="margin">Miestas:</b> <?php echo $city; ?> </p></p>
            <p  class="transportas"><b>Transporto priemonės vykimui į paskaitas:</b> 
            <br>
             <div class="transp">
                 <?php if (count($transport) > 0) {
                         foreach ($transport as $trans) {
                             echo $trans, '<br>';
                         } 
                         } else {
                         echo "Nepasirinkote Transporto priemones";
                         }
                         ?>
             </div>
         </p>
            
            <p class="about"><b>Apie mane:</b> <?php echo $about; ?> </p>
            <br> <a class="btn" href="form.php">Grįžti į Formą</a>
    </div>
    </div>
</body>
</html>
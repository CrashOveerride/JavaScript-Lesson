<?php   

   // Начальная страница сайта
   require '../config/main.php';
   include '../engine/database.php';

   $image = getItem('select * from `images`');
   $images = getItemArray('select * from `images`');

   $image_dir = 'img/geek_gallery/';

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="css/style.css">
   <title>Gallery</title>
</head>
<body>
   <h1>Страница фотографий</h1>

   <?php 
      for($i = 0; $i < count($images); $i++)
         {
            echo '<a href='.$image_dir.$images[$i]['name'].'><img src="'.$image_dir.$images[$i]['name'].'" width="160px" heigh="240px"></a>';
         };  
   ?>
</body>
</html>
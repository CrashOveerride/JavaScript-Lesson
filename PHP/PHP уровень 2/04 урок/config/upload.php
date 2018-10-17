<?php
    echo '<form action="" method="post" enctype="multipart/form-data">';
    echo '<input type="file" name="myfile">';
    echo '<input type="hidden" name="MAX_FILE_SIZE" value="30000000">';
    echo '<input type="submit" value="Отправить файл">';
    echo '</form>';

    if(isset($_FILES['myfile']))
    {
        $uploadDir = 'img/';

        //Формирование имени файла
        $uploadFile = $uploadDir . basename($_FILES['myfile']['name']);
        $uploadFileType = $_FILES['myfile']['type'];

        echo '<pre>';
        if ($uploadFileType == "image/gif" OR $uploadFileType == "image/png" OR $uploadFileType == "image/jpeg"
            OR $uploadFileType == "image/JPEG" OR $uploadFileType == "image/PNG" OR $uploadFileType == "image/GIF")
        {
            if(move_uploaded_file($_FILES['myfile']['tmp_name'], $uploadFile))
            {
                echo '<h3>Файл был успешно загружен!</h3>';
            }
            else
            {
                echo '<h3>Невозможно загрузить файл!</h3>';
            }

        }
        else
        {
            echo "Неверный тип файла";
        }
        echo '</pre>';
    }

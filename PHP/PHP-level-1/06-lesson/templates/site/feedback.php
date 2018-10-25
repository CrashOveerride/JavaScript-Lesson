<?php foreach ( $feedback as $value ): ?>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $value['user']; ?></h6>
    <p class="card-text"><?php echo $value['text']; ?></p>
  </div>
</div>
<?php endforeach; ?>

<form method="post">
  <div class="form-group">
<?php
  $sql = "INSERT INTO `feedback` (`user`, `text`) VALUES ('".$_POST['name']."', '".$_POST['feed']."')";
   

   if( isset($_POST['name']) || isset($_POST['feed']) )
   {

   // Проверяем на ошибки
   $errors = array();

   if( $_POST['name'] == '' )
   {
      $errors = 'Введите имя!';
   }

   if( $_POST['feed'] == '' )
   {
      $errors = 'Введите комментарий!';
   }

   if ( empty($errors) )
   {
      execute($sql);
   }
   else
   {
      echo $errors ['0'];
   }   
   }

?>
   <input type="text"
          name="name" 
          class="form-control" 
          id="formGroupExampleInput" 
          placeholder="Введите имя">
  </div>
  <div class="form-group">
   <input type="text"
          name="feed" 
          class="form-control" 
          id="formGroupExampleInput2" 
         placeholder="Введите комментарий">
  </div>

  <div class="form-group">
      <input type ="submit" value="Оставить комментарий" class="form_group">
  </div>
</form>

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
   <input type="text"
          name="user_name" 
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
      <button type="submit">Отправить комментарий</button>
  </div>
</form>

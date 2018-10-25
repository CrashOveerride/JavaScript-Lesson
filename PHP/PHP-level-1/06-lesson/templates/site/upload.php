<?php



?>


<form method="post" enctype="multipart/form-data">
   <div class="form-group">
      <label for="formroupExampleInput">Login</label>
      <input type="text"
             name="user_login"
             class="form-control" 
             id="formGroupExampleInput"
             placeholder="baker">
   </div>

   <div class="form-group">
      <input type="file" name="avatar">
   </div>

   <div class="form-group">
      <button type="submit">OK</button>
   </div>
</form>
<?php

   /**
    * @var $id int номер пользователя
    */

?>

<form method="post">
   <div class="form-group">
      <label for="formroupExampleInput">Login</label>
      <input type="text"
             name="user_login"
             class="form-control" 
             id="formGroupExampleInput"
             placeholder="baker">
   </div>
   <div class="form-group">
      <label for="formroupExampleInput2">Password</label>
      <input type="password"
             name="user_pass"
             class="form-control" 
             id="formGroupExampleInput" 
             placeholder="Unead2008 ">
   </div>

   <div class="form-group">
      <button type="submit">OK</button>
   </div>
</form>
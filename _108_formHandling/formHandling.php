
<form action="" method="post">
  <input type="text" name="user" placeholder="Enter Name">
  <button type="submit">Click Me!</button>
</form>



<?php
  if(isset($_POST['user'])){
    class User{
      function getName($name){
        echo "User Name is ".$name;
      }
    }
    $user=new User();
    $user->getName($_POST['user']);
  }
?>
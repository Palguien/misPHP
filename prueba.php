<?php 
 $coins = 123423142134234;
 function foo() {
   $coins = 4321;
    echo $coins;
  }
 ?>
<button onclick="<?php foo(); ?>">yo</button>



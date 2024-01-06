<?php
  function greet($name, $petName){
    echo "<p>Hi, my name is $name and I like $petName</p>";
  }
  greet("Sofi", "cats");
  greet("Angie", "Snakes");

?>
<h1><?php blogInfo('name') ?></h1>
<p><?php blogInfo("description")?></p>
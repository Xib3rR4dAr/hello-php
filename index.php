
<?php

if( isset($_GET['phpinfo']) ){
  phpinfo();
} else {
  $name = ( isset($_GET['name']) ? $_GET['name'] : 'PHP');
  echo 'Hello ' . htmlspecialchars($name) . '<br>';
  echo 'Php is working';
}

?>

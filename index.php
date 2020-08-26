
<?php

if( isset($_GET['phpinfo']) ){
  phpinfo();
} else if( isset($_GET['name']) ){
  echo 'Hello ' . htmlspecialchars($_GET['name']) . '<br>';
  echo 'Php is working';
}

?>

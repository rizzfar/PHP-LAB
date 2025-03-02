<?php 
  session_start();

  $_SESSION['username'] = 'Rizky Al Farid';

  echo "Username: " . $_SESSION['username'];

  session_destroy();
?>
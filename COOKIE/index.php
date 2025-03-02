<?php 
  setcookie('username', 'Rizky Al Farid', time() + 3600);

  if (isset($_COOKIE['username'])) {
    echo "Username: " . $_COOKIE['username'];
  } else {
    echo "Cookie tidak ditemukan";
  }

  setcookie('username', '', time() - 3600);
?>
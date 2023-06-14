<?php 
  session_start();

  function pathTo($destination) {
    echo "<script>window.location.href = '/butterfly/$destination.php'</script>";
  }

  /* Set status to invalid */
  $_SESSION['status'] = 'invalid';

  /* Unset user data */
  unset($_SESSION['email']);

  /* Redirect to login page */
  pathTo('client-welcome-page');
?>
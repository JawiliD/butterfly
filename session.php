<?php 

  function pathTo($destination) {
    echo "<script>window.location.href = '/butterfly/$destination.php'</script>";
  }

  if ($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])) {
    /* Set status to invalid */
    $_SESSION['status'] = 'invalid';

    /* Unset user data */
    unset($_SESSION['email']);   
    unset($_SESSION['fname']); 
    unset($_SESSION['role'] );
    unset($_SESSION['id']);

    /* Redirect to login page */
    pathTo('client-welcome-page');
  }
?>
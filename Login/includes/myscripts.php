
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="js/sweetalert.min.js"></script>
<script>
    swal({
      title: 'Welcome Back!',
      text: "<?php echo $_SESSION['username'];  ?> Welcome to Your Dashboard",
      icon: 'success',
      button: 'Okay',
    }); 
      </script>



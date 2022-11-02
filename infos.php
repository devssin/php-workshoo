<?php require('./header.php')?>
    <div class="container-sm p-5">
        <h1>Hello Mr <?php echo $_REQUEST['firstName'].' '.$_REQUEST['lastName']?></h1>
        <p>Your email is <?php echo $_REQUEST['email'].' '.$_REQUEST['password']?> </p>
    </div>
  </body>
</html>
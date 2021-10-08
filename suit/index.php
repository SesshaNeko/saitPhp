<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<title>Name-Website</title>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="\img\icon.png" type="image/png">
  
    
    <link rel="stylesheet" media="all" href="\css\style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>


<body>
<?php require "blocks/header.php"?>
<div class="container mt-5">
  <h3 class="mb-5 p-3 pb-md-4 mx-auto text-center">Welcome to Name of Company</h3>
      
  <div class="d-flex flex-wrap">
    

    <?php 
      for($i = 0; $i < 2; $i++):
    ?>
      

        <div class="card mb-4 shadow-sm">

          <div class="card-header">
            <h4 class="my-0 fw-normal"> <?php if ($i == 0) echo "Trucker";  else echo "Customer";  ?> </h4>
          </div>

          <div class="card-body">

            <img src="img/<?php echo ($i + 6) ?>.jpg" class="img-thumbnail rounded d-block mx-auto">
            
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            
            
            <?php if ($i == 0) $user= "Trucker";  else $user = "Customer";  ?>
            <a  class="w-100 btn btn-lg btn-outline-primary" href="contacts.php?<?php echo "$user" ?>=<?php echo "$user" ?>">Viewing</a> 
            
          
          </div>
          
      </div>
    <?php endfor;?>


  </div>
    
</div>

<?php require "blocks/footer.php"?>
</body>
</html>
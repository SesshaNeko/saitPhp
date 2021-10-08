<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<title>Contacts</title>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="\img\icon.png" type="image/png">
    
    
    <link rel="stylesheet" media="all" href="\css\style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
   
</head>


<body>
<?php require "blocks/header.php"?>

<div class="container mt-5">
  
  <h3 class="mb-3">Contacts</h3>
  <form action="check.php" method="post">
    <?php
    $subject='';
 
    if ($_GET['Trucker'] == "Trucker") 
        $subject = "Trucker";

    else if ($_GET['Сustomer'] == "Сustomer")
        $subject = "Сustomer";

    else
        $subject = "Site questions";
    
    $_SESSION['subject'] = $subject;
    
    ?>
    <h3 class="mb-3"><?php echo $subject?></h3>
    <input type="email" name="email" placeholder="Input your Email" class="form-control"><br>
    
    <textarea name="message" placeholder="Input your Message" class="form-control" ></textarea><br>
    
    <input name="phone"  type="tel" placeholder="+7 (900) 123-45-67" class="form-control"><br>
    
    <button type="submit" name="send" class="btn btn-outline-success">Send</button><br>
  
  </form>

</div>

<?php require "blocks/footer.php"?>
</body>
</html>
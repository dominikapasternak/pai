<?php
    if(!isset($_SESSION['id']) and !isset($_SESSION['role'])) {
        die('You are not logged in!');
    }

    if(!in_array('ROLE_USER', $_SESSION['role'])) {
        die('You do not have permission to watch this page!');
    }
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="Stylesheet" type="text/css" href="../Public/css/style.css" />
    <link rel="Stylesheet" type="text/css" href="../Public/css/board.css" />
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <?php include(dirname(__DIR__).'/Common/head.php'); ?>
    <title>yesBuck$</title>
</head>
<body>
<?php ?>
<div class="container">
    <div class="logo">
        <img src="../Public/img/piggybank.svg">
        <img src="../Public/img/yesBuck$.svg">
        
</form>
    </div>
    
     <button type="submit"> SEND </button>
     <button type="button" style="position:height: 64px; width: 300px;" class="btn btn-secendary btn-sm btn-block"><a href="">Add card</a></button>
     <button type="button" style="position:height: 64px; width: 300px;" class="btn btn-secendary btn-sm btn-block"><a href="">Add expenses for cash</a></button>
     <button type="button" style="position:height: 64px; width: 300px;" class="btn btn-secendary btn-sm btn-block"><a href="">Category</a></button>
     <button type="button" style="position:height: 64px; width: 300px;" class="btn btn-secendary btn-sm btn-block"><a href="">Last payment</a></button>
     <button type="button" style="position:height: 64px; width: 300px;" class="btn btn-secendary btn-sm btn-block"><a href="">Contact with support</a></button>
     <button type="button" style="position:height: 64px; width: 300px;" class="btn btn-secendary btn-sm btn-block"><a href="">Settings</a></button>
     <button type="button" style="position:height: 64px; width: 300px;" class="btn btn-primary btn-sm btn-block"><a href="?page=logout">Logout</a></button>
    </form>
</div>
</div>
</body>
</html>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="Stylesheet" type="text/css" href="../Public/css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <?php include(dirname(__DIR__).'/Common/head.php'); ?>
    <title>yesBuck$</title>
</head>
<body>
<div class="container">
    <div class="logo">
        <img src="../Public/img/piggybank.svg">
        <img src="../Public/img/yesBuck$.svg">
    </div>
    <form action="?page=login" method="POST">
        <div class="messages">
            <?php
                if(isset($messages)){
                    foreach($messages as $message) {
                        echo $message;
                    }
                }
            ?>
        </div>
        
        <input name="email" type="text" placeholder="email@email.com">
        <input name="password" type="password" placeholder="password">
        <button type="submit"> -> </button>
        <button type="button" ><a href="?page=logout">Create an Account</a></button>
        //zmienic na przekierownaie na strone rejestracji
    </form>
</div>
</body>
</html>
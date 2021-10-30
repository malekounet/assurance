<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/styles.css">
    <script src="./public/js/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Connecter</title>
    <style>
        .form{
            width: 33%;
            margin: auto;
            background-color: #9F6262;
            height: 666px;
            position: relative;
            top:88px;
            border-radius: 5px;

        }
        table{
            width: 33%;
            margin: auto;
            position: relative;
            top: 300px;
            scale: 1.5;
        }
        td{
            padding: 9px;
        }
        input{
            border-radius: 5px;
        }
        button{
            margin-left: 79px;
        }

        
      
        
    </style>


</head>
<body>
    <div class="form">
        <form action="../public/ajax/connecterInclude.php" method="post">
            <table>
                <tr><td><label for="mail"> Email</label></td><td><input type="text" id="mail" name="mail"></td></tr>
                <tr><td><label for="pass">Password</label></td><td><input type="password" id="pass" name="pass"></td></tr>
                <tr><td></td><td><button id="con" name="btn">Connecter</button></td></tr>
            </table>
        </form>
    </div>

    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo "Welcome php Github" ?> </title>
</head>
    <style>
        *{
            text-align: center;
            color: rgb(62, 99, 121);
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        body {
            background-color: aquamarine;
        }
        div {
            background-color: antiquewhite;
            width: 250px;
            height: 300px;
            margin: auto;
            margin-top: 10rem;
            box-shadow: 0px 0px 10px grey;
            border-radius: 15px;

        }
        h3{
            padding-top: 3rem;
            font-size: 24px;
        }
        h1{
            font-size: 36px;
            font-weight: bold;
            color: blue;
        }
        p{
            padding-bottom: 2rem;
        }
        hr{
            border-top: 3px solid aquamarine;
        }
        .sign{
            font-size: 12px;
            font-weight: bold;
            padding-top: 1rem;
            text-align: right;
            padding-right: 1rem;
        }
    </style>
<body>
    <div>
        <h3>Welcome to</h3>
        <h1><?php echo "PHP" ?></h1>
        <p><?php echo "Github Project" ?></p>
        <hr>
        <p class="sign">Masudur220</p>
    </div>
</body>
</html>
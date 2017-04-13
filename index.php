<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>System Principles</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <header id="top" class="header">
        <div class="text-vertical-center">
            <?php
                $phrases_json = file_get_contents("phrases.json");
                $phrases = json_decode($phrases_json);
                $phrase = $phrases[array_rand($phrases)];
                echo "<h1 style=\"margin-left:5%;margin-right:5%;\">$phrase</h1>";
            ?> 
            <h3>Laws of General Systemantics</h3>
            <br>
            <a href="http://bravenewgeek.com">Brave New Geek</a> | <a href="https://twitter.com/tyler_treat">@tyler_treat</a>
        </div>
    </header>

</body>

</html>

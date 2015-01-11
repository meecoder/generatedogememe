<html>
    <head>
        <title>
            Generate Doge Meme!
        </title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="Web/font.css"/>
        <link rel="stylesheet" type="text/css" href="reset.css"/>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" ></script>
        <script src="Meme.js/meme.js" type="text/javascript"></script>
    </head>
    <body>
        <header>
            <img src="logo.png" id="logo"/>
            <a class="genbutton" href="gen.php">Generate Your Own!</a>
        </header>
        <canvas id="cv"></canvas>
        <input id="top">
        <input id="bottom">
        <script type="text/javascript">
            $(document).ready(function () {
                Meme('Meme.js/demo/example.jpg', 'cv', '', '');
                $('input').keyup(function () {
                    Meme('Meme.js/demo/example.jpg', 'cv', $('#top').val(), $('#bottom').val());
                });
            });
        </script>
    </body>
</html>
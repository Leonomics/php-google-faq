<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Policy</title>
</head>
<body>
    <ul class="navLinks">
        <li class="linkItem"><a href="#">Introduzione</a></li>
        <li class="linkItem"><a href="#">Norme sulla privacy</a></li>
        <li class="linkItem"><a href="#">Termini di servizio</a></li>
        <li class="linkItem"><a href="#">Tecnologie</a></li>
        <li class="linkItem"><a href="#">Domande frequenti</a></li>
    </ul>

    <?php
        $faqs = [
            [
                "domanda" => "<h2>Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?<h2>",
                "risposta" => "<p>lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem</p><p>lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem</p><p>lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem</p><p>lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem</p>"
            ],
            [
                "domanda" => "<h2>Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?<h2>",
                "risposta" => "<p>lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem</p><p>lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem</p><p>lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem</p><p>lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem</p>"
            ],
            [
                "domanda" => "<h2>Perché il mio account è associato a un paese?<h2>",
                "risposta" => "<p>lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem</p><p>lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem</p><p>lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem</p><p>lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem</p>"
            ],
            [
                "domanda" => "<h2>Stabilire il paese associato al tuo account<h2>",
                "risposta" => "<p>lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem</p><p>lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem</p><p>lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem</p><p>lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem</p>"
            ],
        ];
    ?>
    <?php
        foreach($faqs as $faq){
            ?>
            <div class="container">
                <?php echo $faq["domanda"]; ?> <br>
            </div>
            <div class="container">
                <?php echo $faq["risposta"]; ?> <br>
            </div>
            <?php
        }
        ?>

    <style>
    *{
        margin:0;
        padding:0;
        box-sizing: border-box;
    }

    ul, ol, menu{
        list-style: none;
    }

    a{
        color: currentColor;
        text-decoration: none;
    }
    p{
        font-size: 0.875rem;
        text-align: left;
        margin-bottom: 10px;
    }
    h2{
        color: #3c4043;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1.333;
        margin: 0;
        padding: 20px 0 0 0;
        text-align: left;
    }

    img{
        max-width: 100%;
    }

    .container{
        max-width: 747px;
        margin:0 auto;
    }


    button:hover{
        cursor: pointer;
    }

    .navLinks{
        display:flex;
        align-items:flex-start;
        margin-bottom:100px;
    }
    .linkItem{
        margin-right:20px;
    }

    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap');

    html, body {
        font-family: 'Roboto', sans-serif;
    }
    </style>
</body>
</html>
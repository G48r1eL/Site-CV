
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php if(isset($titre)){echo $titre;} ?></title>
    <meta name="description" content="">
    <link href="style/style.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;400;600&display=swap" rel="stylesheet">
</head>

<body>
<header id="navbar">
    <div id="logo">Gabriel AMARI</div>
    <nav id="nav-top-menu">
                <ul>
                    <li>
                        <a href="/">ACCUEIL</a>
                    </li>
                    <li>
                        <a href="parcours">MON PARCOURS</a>
                    </li>
                    <li>
                        <a href="passions">MES PASSIONS</a>
                    </li>
                </ul>
    </nav>
</header>
<script>
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("navbar").style.padding = "0px 0px";
            document.getElementById("navbar").style.boxShadow = "0px 2px 1px 0px rgba(0,0,0,0.51)";
            document.getElementById("logo").style.fontSize = "20px";
            document.getElementById("navbar").style.height = "auto";
        } else {
            document.getElementById("navbar").style.height = "10vh";
            document.getElementById("navbar").style.padding = "15px 0px 15px";
            document.getElementById("navbar").style.boxShadow = "0px 0px 0px 0px";
            document.getElementById("logo").style.fontSize = "35px";
            
        }
    }
</script>
<header id="navbar">
    <div id="logo">Gabriel AMARI</div>
    <nav id="nav-top-menu">
                <ul>
                    <li>
                        <a href="index.php">ACCUEIL</a>
                    </li>
                    <li>
                        <a href="experiences.php">EXPERIENCES</a>
                    </li>
                    <li>
                        <a href="competences.php">COMPETENCES</a>
                    </li>
                    <li>
                        <a href="formations.php">FORMATIONS</a>
                    </li>
                    <li>
                        <a href="contact.php">CONTACT</a>
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
        } else {
            document.getElementById("navbar").style.padding = "15px 0px 15px";
            document.getElementById("navbar").style.boxShadow = "0px 0px 0px 0px";
            document.getElementById("logo").style.fontSize = "35px";
        }
    }
</script>
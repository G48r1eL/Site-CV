<header id="navbar">
    <div id="logo">LoGo</div>
    <nav id="nav-top-menu">
                <ul>
                    <li>
                        <a>ACCUEIL</a>
                    </li>
                    <li>
                        <a>EXPERIENCES</a>
                    </li>
                    <li>
                        <a>COMPETENCES</a>
                    </li>
                    <li>
                        <a>FORMATION</a>
                    </li>
                    <li>
                        <a>CONTACT</a>
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
            document.getElementById("logo").style.fontSize = "25px";
        } else {
            document.getElementById("navbar").style.padding = "10px 0px 10px";
            document.getElementById("navbar").style.boxShadow = "0px 0px 0px 0px";
            document.getElementById("logo").style.fontSize = "35px";
        }
    }
</script>
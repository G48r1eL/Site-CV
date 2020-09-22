<?php 
$titre = "Passions - G.Amari";
include('includes/header.php');?>
<div id="passions">
    <div id="informatique">
        <table>
            <tr>
                <th>Nouvelles technologies</th>
                <th class="extlink"></th>
            </tr>
            <tr><td class="txtpassion" colspan="2">Ma passion pour l'innovation  me pousse à chercher ce qui se cache derrière ces technologies et à me 
tenir au courant de l'évolution de ces dernières.</td></tr>
        </table>
    </div>
    <div id="dev">
        <table>
            <tr>
                <th>Développement informatique</th>
                <th class="extlink"><a href="https://github.com/G48r1eL"><img src="images/githubround.png"/><a></th>
            </tr>
            <tr><td class="txtpassion" colspan="2">J'aime formaliser le besoin en solutions logicielles, que ce soit pour résoudre des challenges en sécurité ou me faciliter certaines tâches.</td></tr>
        </table>
    </div>
    <div id="secu">
        <table>
            <tr>
                <th>Sécurité informatique</th>
                <th class="extlink"><a href="https://www.root-me.org/G48r1eL?inc=score"><img src="images/rootme.png"/></a></th>
            </tr>
            <tr><td class="txtpassion" colspan="2">Je suis constamment à la recherche de nouveaux défis,
c'est pourquoi je participe à des CTF et des Bugbounty notamment sur root-me.org où 
j'ai résolu près de 200 challenges.</td></tr>
        </table>
    </div>
    <div id="sport">
        <table>
            <tr>
                <th>Sports</th>
                <th class="extlink"><a href="https://www.strava.com/athletes/26823238"><img src="images/strava.png"/></a></th>
            </tr>
            <tr><td class="txtpassion" colspan="2">Que ce soit dans le sport où ailleurs  je m'investis pleinement et je donne le meilleur de moi-même pour atteindre mes objectifs.</td></tr>
        </table>
    </div>
    
</div>
<script>
$( "#passions div" ).click(function() {
    size = $(this).height() * 100 / $( window ).height();
    if(size <=40){
        $(this).animate({
            height: "100vh"
        }, 1500 ).clearQueue();
    }else{
        $(this).animate({
            height: "25vh"
        }, 1500 ).clearQueue();
    }
 
});

</script>
<?php include('includes/footer.php');?>
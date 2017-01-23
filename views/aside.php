<style>
    #menu-deroulant {
        padding:0;
        margin:0;
        list-style:none;
        text-align: center;
        width: 180px;
    }
    #menu-deroulant ul {
        padding:0;
        margin-bottom:5%;
        list-style:none;
        text-align: center;
    }
    #menu-deroulant li {
        margin-bottom:7%;
        background-color:#729EBF;
        background-image:-webkit-linear-gradient(top, #729EBF 0%, #333A40 100%);
        background-image: linear-gradient(to bottom, #729EBF 0%, #333A40 100%);
        border-radius: 6px;
        box-shadow: 3px 3px 3px #999;
        border:solid 1px #333A40
    }
    #menu-deroulant li li {
        max-height:0;
        overflow: hidden;
        transition: all .5s;
        border-radius:0;
        background: #444;
        box-shadow: none;
        border:none;
        margin:0
    }
    #menu-deroulant a {
        display:block;
        text-decoration: none;
        color: #fff;
        padding: 8px 0;
        font-family: verdana;
        font-size:1.2em
    }
    #menu-deroulant ul li a, #menu-deroulant li:hover li a {
        font-size:1em
    }
    #menu-deroulant li:hover {
        background: #729EBF
    }
    #menu-deroulant li li:hover {
        background: #999;
    }
    #menu-deroulant ul li:last-child {
        border-radius: 0 0 6px 6px;
        border:none;
    }
    #menu-deroulant li:hover li {
        max-height: 15em;
    }
    aside{
        width: 30%;
    }
</style>
<aside>
    <ul id="menu-deroulant">
        <li><a href="#">Type de jeu</a>
            <ul>
                <li><a href="#">PS3</a></li>
                <li><a href="#">PS4</a></li>
                <li><a href="#">PSP</a></li>
                <li><a href="#">PS VITA / PSP</a></li>
                <li><a href="#">PC</a></li>
                <li><a href="#">Xbox 360</a></li>
                <li><a href="#">NINTENDO / DS</a></li>
            </ul>
        </li><!--
 --><li><a href="#">Categorie</a>
            <ul>
                <li><a href="#">ARCADE</a></li>
                <li><a href="#">ACTION</a></li>
                <li><a href="#">AVENTURE</a></li>
                <li><a href="#">SPORT</a></li>
                <li><a href="#">COMBAT</a></li>
                <li><a href="#">COURSE</a></li>
            </ul>
        </li><!--
 --><li><a href="#">NOUVEAUTES</a>
            <ul>
                <li><a href="#">DOUBLE DRAGON 4</a></li>
                <li><a href="#">SNIPER GHOST</a></li>
                <li><a href="#">RESIDENT EVIL 7</a></li>
                <li><a href="#">NFS </a></li>
                <li><a href="#">FIFA 17</a></li>
            </ul>
        </li><!--
 --><li><a href="#">POUR ENFANT</a>
            <ul>
                <li><a href="#">SPIDER-MAN</a></li>
                <li><a href="#">SONIC</a></li>
                <li><a href="#">ANGRY-BIRD</a></li>
                <li><a href="#">ZELDA</a></li>
            </ul>
        </li>
    </ul>
</aside>

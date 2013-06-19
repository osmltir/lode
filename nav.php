		<!-- Barre de navigation -->
        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
                <!-- Bouton apparaissant sur les résolutions mobiles afin de faire apparaître le menu de navigation -->
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="index.php">LOMME Team</a>
                <!-- Structure du menu -->
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li class="active"><a href="index.php">Accueil</a></li>
                        <li><a href="apropos.php">A propos</a></li>
                        <li><a href="contact.php">Contactez-nous</a></li>
                        <!-- Menu déroulant -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu deroulant <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action 1</a></li>
                                <li><a href="#">Action 2</a></li>
                                <li class="divider"></li>
                                <li class="nav-header">Autres liens</li>
                                <li><a href="#">Lien 1</a></li>
                                <li><a href="#">Lien 2</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Champ de recherche -->
                    <form class="navbar-search pull-right" action="#">
                        <input type="text" class="search-query span2" placeholder="Rechercher">
                    </form>
                </div>
            </div>
        </div>
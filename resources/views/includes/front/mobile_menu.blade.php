<!-- MOBILE MENU -->
<section>
    <div class="ed-mob-menu">
        <div class="ed-mob-menu-con">
            <div class="ed-mm-left">
                <div class="wed-logo">
                    <a href="main.html">
                        <img src="/assets/images/fiscom/logo.jpg" alt="" height="50px" width="100%" />
                    </a>
                </div>
            </div>
            <div class="ed-mm-right">
                <div class="ed-mm-menu">
                    <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                    <div class="ed-mm-inn">
                        <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                        
                        <h4 class="ed-dr-men-mar-top">Menu</h4>
                        
                        <ul>
                            <li><a href="{{ route('index') }}">Accueil</a></li>
                            </ul>
                        
                        <ul>
                            <li><a href="{{ route('metier') }}">Métier</a></li>
                        </ul>
                        
                        <ul>
                            <li><a href="{{ route('bibliotheque') }}">Bibliothèque</a></li>
                            </ul>
                        
                        <ul>
                            <li><a href="{{ route('publication') }}">Publication</a></li>
                            </ul>
                        
                        <ul>
                            <li><a href="{{ route('reseau') }}">Notre Réseau</a></li>
                            </ul>
                        
                        <ul>
                            <li><a href="{{ route('apropos') }}">Apropos</a></li>
                        </ul>
                        <h4 class="ed-dr-men-mar-top">login</h4>
                        <ul>
                            <li><a href="{{ route('register') }}">S'inscrire</a></li>
                            <li><a href="{{ route('login') }}">S'identifier</a></li>
                            <li>
                                <a href="http://fiscom.test/logout" onclick="event.preventDefault(); document.getElementById('logout').submit()">Logout</a>
                            </li>
                            </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

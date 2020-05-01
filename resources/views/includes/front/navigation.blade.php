<div class="main-menu">
    <ul>
        <li><a href="{{ route('index') }}">Accueil</a>
        </li>
        <li class="cour-menu">
            <a href="{{ route('metier') }}" class="mm-arr">Métier</a>
        </li>
        <li class="about-menu">
                        
            <a href="{{ route('bibliotheque') }}">Bibliothèque</a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="about-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay menu-about" href="all-package.html">
                                                            <img src="assets/images/fiscom/banner27.png" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="mm1-com mm1-s2">
                                                    <p>Notre Cabinet assiste, accompagne et conseille le dirigeant d’entreprise sur l’application et les répercussions de la réglementation fiscale et comptable en vigueur.</p>
                                                    <a href="{{ route('booking') }}" class="mm-r-m-btn">S'inscrire</a>
                                                </div>
                                                <div class="mm1-com mm1-s3">
                                                    <ul>
                                                        <li><a href="{{ route('booking') }}">Comptabilité</a></li>
                                                        <li><a href="{{ route('booking') }}">Audit</a></li>
                                                        <li><a href="{{ route('booking') }}">Management</a></li>
                                                         </ul>
                                                </div>
                                                <div class="mm1-com mm1-s3">
                                                    <ul>
                                                        <li><a href="{{ route('booking') }}">Contrôle de gestion</a></li>
                                                        <li><a href="{{ route('booking') }}">Fiscalité</a></li>
                                                        <li><a href="{{ route('booking') }}">Contrôle Interne</a></li>
                                                    </ul>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </li>
         
        <li>
            <a href="{{ route('publication') }}">Publication</a>
        </li>
        <li>
            <a href="{{ route('reseau') }}">Notre Réseau</a>
        </li>
         <li>
            <a href="{{ route('apropos') }}">Apropos</a>
        </li>
       

        @auth
            <li>
                <a href="{{ route('profile') }}">Profil</a>
            </li>
        @endauth
    </ul>
</div>

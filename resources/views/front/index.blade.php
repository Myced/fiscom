@extends('layouts.front')

@section('title')
fiscom
    
@endsection

@section('content')  
    <!--HEADER SECTION-->
	<section>
		<div>
			<div>
				<div>
			<div class="slider fullscreen">
				<ul class="slides">
				    	<li> <img src="/assets/images/fiscom/banner13.jpg" alt="">
						<!-- random image -->
						<div class="caption center-align slid-cap">
							<h3 class="light red-text text-3">Fiscom Consulting</h3>
							<h4>Votre partenaire stratégique!</h4>
                            <p></p>
							<!-- <a href="#" class="waves-effect waves-light">Subscribe</a> -->

                        </div>
					</li>
					
					<li> <img src="/assets/images/fiscom/banner14.png" alt="">
						<!-- random image -->
						<div class="caption center-align slid-cap">
							<h3 class="light res-text text-lighten-3">Déclarations </h3>
							<h4> </h4>
							<!-- <a href="#" class="waves-effect waves-light">Subscribe</a> -->

                        </div>
					</li>
					
					
                    <li> <img src="/assets/images/fiscom/mertier0.jpeg" alt="">
                        <!-- random image -->
                        <div class="caption center-align slid-cap">
                            <h3 class="light red-text text-lighten-3">Redressements</h3>
                            <h4></h4>
                            <!-- <a href="#" class="waves-effect waves-light">Subscribe</a> -->

                        </div>
                    </li>

                     <li> <img src="/assets/images/fiscom/banner22.jpg" alt="">
                        <!-- random image -->
                        <div class="caption center-align slid-cap">
                            <h3 class="light red-text text-lighten-3">Risques fiscaux</h3>
                            <h4></h4>
                            <!-- <a href="#" class="waves-effect waves-light">Subscribe</a> -->

                        </div>
                    </li>

                     <li> <img src="/assets/images/fiscom/banner27.png" alt="">
                        <!-- random image -->
                        <div class="caption center-align slid-cap">
                            <h3 class="light red-text text-lighten-3">Accompagnement</h3>
                            <h4></h4>
                            <!-- <a href="#" class="waves-effect waves-light">Subscribe</a> -->

                        </div>
                    </li>

                     <li> <img src="/assets/images/fiscom/banner23.jpg" alt="">
                        <!-- random image -->
                        <div class="caption center-align slid-cap">
                            <h3 class="light red-text text-lighten-3">Comptabilité et Audit.</h3>
                            <h4> </h4>
                            <!-- <a href="#" class="waves-effect waves-light">Subscribe</a> -->

                        </div>
                    </li>
                    
				</ul>
			</div>
				</div>
			</div>
		</div>
	</section>
	<!--END HEADER SECTION-->

    <section>
        <div class="rows pad-bot-redu tb-space">
            <div class="container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2><span>Notre Métier</span></h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>Nous somme des juristes spécialiste en matière fiscale et nous aidons les entreprises à faire les meilleurs choix dans le but de payer le moins d'impôts possible tout en restant dans le cadre de la légalité.</p>
                </div>
                <div>
                    <!-- TOUR PLACE 1 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow slideInUp" data-wow-duration="0.5s">
                        <!-- OFFER BRAND -->
                        <div class="band">  </div>
                        <!-- IMAGE -->
                        <div class="v_place_img"><img src="/assets/images/fiscom/metier4.jpg" alt="Tour Booking" title="Precious Metal Supply" /></div>
                        <!-- TOUR TITLE & ICONS -->
                        <div class="b_pack rows">
                            <!-- TOUR TITLE -->
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="{{ route('metier') }}">Expertise Fiscale <span class="v_pl_name"></span></a></h4>
                            </div>
                            <!-- TOUR ICONS -->
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="/assets/images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/info.png" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/price.png" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/map.png" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 2 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="0.7s">
                        <!-- OFFER BRAND -->
                        
                        <!-- IMAGE -->
                        <div class="v_place_img"> <img src="/assets/images/fiscom/metier7.jpg" alt="Tour Booking" title="Waste Management & Power Supply" /> </div>
                        <!-- TOUR TITLE & ICONS -->
                        <div class="b_pack rows">
                            <!-- TOUR TITLE -->
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="{{ route('metier') }}">Comptabilté<span class="v_pl_name"></span></a></h4>
                            </div>
                            <!-- TOUR ICONS -->
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="/assets/images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/info.png" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/price.png" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/map.png" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 3 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="0.9s">
                        <div class="v_place_img"><img src="/assets/images/fiscom/mertier8.png" alt="Tour Booking" title="Oil & Gas" /> </div>
                        <div class="b_pack rows">
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="{{ route('metier') }}">Coaching et Formation<span class="v_pl_name"></span></a></h4>
                            </div>
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="/assets/images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/info.png" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/price.png" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/map.png" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 4 -->
                     <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.1s">
                        <div class="v_place_img"><img src="/assets/images/fiscom/metier11.png" alt="Tour Booking" title="Trading" /> </div>
                        <div class="b_pack rows">
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="{{ route('metier') }}">Gestion de Patrimoine<span class="v_pl_name"></span></a></h4>
                            </div>
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="/assets/images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/info.png" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/price.png" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/map.png" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
          
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.3s">
                        <div class="v_place_img"><img src="/assets/images/fiscom/metier14.jpg" alt="Tour Booking" title="Minning" /> </div>
                        <div class="b_pack rows">
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="{{ route('metier') }}">Rédaction du plan d'affaires<span class="v_pl_name"></span></a></h4>
                            </div>
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="/assets/images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/info.png" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/price.png" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/map.png" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.5s">
                        <div class="v_place_img"><img src="/assets/images/fiscom/metier15.jpg" alt="Tour Booking" title="Forestry" /> </div>
                        <div class="b_pack rows">
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="{{ route('metier') }}">Droit des affaires<span class="v_pl_name"></span></a></h4>
                            </div>
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="/assets/images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/info.png" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/price.png" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/map.png" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== HOME HOTELS ==========-->
     <section>
        <div class="rows tb-space pad-top-o pad-bot-redu">
            <div class="container">
                
                <div class="spe-title">
                    <h2><span>Nos Formation </span> </h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>Nous offrons apprentissage qui permet d'acquérir le savoir, le savoir-faire et le savoir-être (capacité et aptitude) nécessaires à l'exercice d'un métier ou d'une activité professionnelle.</p>
                </div>
                

                <div class="col-md-6">
                    <a href="{{ route('publication') }}">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="/assets/images/fiscom/formation.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con">
                                <h5>Gestion des projets</h5>
                                
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ route('publication') }}">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="/assets/images/fiscom/formation3.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con tour-mig-lc-con2">
                                <h5>Comptabilité </h5>
                               
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ route('publication') }}">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="/assets/images/fiscom/formation6.png" alt=""> </div>
                            <div class="tour-mig-lc-con tour-mig-lc-con2">
                                <h5>Contrôle Qualité</h5>
                                
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ route('publication') }}">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="/assets/images/fiscom/formation8.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con tour-mig-lc-con2">
                                <h5>Audit</h5>
                                
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ route('publication') }}">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="/assets/images/fiscom/formation9.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con tour-mig-lc-con2">
                                <h5>Administration</h5>
                               
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--====== HOME HOTELS ==========-->
    
    <section>
        <div class="rows tb-space">
            <div class="container events events-1" id="inner-page-title">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2><span>Notre Bibliothèque</span> </h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>une collection organisée de livres y compris ddes bibliothèques publiques. Nous proposons d'autres documents (journaux, périodiques, enregistrements sonores, enregistrements vidéo, cartes et plans, partitions).</p>
                </div>
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Event Name.." title="Type in a name">
                <table id="myTable">
                    <tbody>
                        <tr>
                            <th></th>
                            <th>Titre</th>
                            <th class="e_h1">Date</th>
                            <th class="e_h1">Secteur</th>
                            <th class="e_h1">Place</th>
                            <th>Télécharge</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><img src="/assets/images/rich/rich.png" alt="" /><a href="hotels-list.html" class="events-title">Launching of our depistage campaign against CORONA VIRUS</a> </td>
                            <td class="e_h1">20/06/2020</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Cameroon</td>
                            <td><a href="#" class="link-btn">Télécharge</a> </td>
                        </tr>
                       <tr>
                            <td>2</td>
                            <td><img src="/assets/images/rich/rich.png" alt="" /><a href="hotels-list.html" class="events-title">Supply of handsensatiser and infrared thermometer</a> </td>
                            <td class="e_h1">19/06/2020</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Ghana</td>
                            <td><a href="#" class="link-btn">Télécharge</a> </td>
                        </tr>
                         <tr>
                            <td>3</td>
                            <td><img src="/assets/images/rich/rich.png" alt="" /><a href="hotels-list.html" class="events-title">Caravanne to sensibiliser yount against CORONA VIRUS</a> </td>
                            <td class="e_h1">18/06/2020</td>
                            <td class="e_h1">08.00 PM</td>
                            <td class="e_h1">Cameroon</td>
                            <td><a href="#" class="link-btn">Télécharge</a> </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><img src="/assets/images/rich/rich.png" alt="" /><a href="hotels-list.html" class="events-title">Caravanne to sensibiliser yount against CORONA VIRUS</a> </td>
                            <td class="e_h1">18/06/2020</td>
                            <td class="e_h1">08.00 PM</td>
                            <td class="e_h1">Cameroon</td>
                            <td><a href="#" class="link-btn">Télécharge</a> </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><img src="/assets/images/rich/rich.png" alt="" /><a href="hotels-list.html" class="events-title">Caravanne to sensibiliser yount against CORONA VIRUS</a> </td>
                            <td class="e_h1">18/06/2020</td>
                            <td class="e_h1">08.00 PM</td>
                            <td class="e_h1">Cameroon</td>
                            <td><a href="#" class="link-btn">Télécharge</a> </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><img src="/assets/images/rich/rich.png" alt="" /><a href="hotels-list.html" class="events-title">Caravanne to sensibiliser yount against CORONA VIRUS</a> </td>
                            <td class="e_h1">18/06/2020</td>
                            <td class="e_h1">08.00 PM</td>
                            <td class="e_h1">Cameroon</td>
                            <td><a href="#" class="link-btn">Télécharge</a> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!--====== POPULAR TOUR PLACES ==========-->
   < <section>
        <div class="rows pla pad-bot-redu tb-space">
            <div class="pla1 p-home container">
                
                <div class="spe-title spe-title-1">
                    <h2>Notre<span> Réseau</span></h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p></p>
                </div>
                <div class="popu-places-home">
                    
                    <div class="col-md-6 col-sm-6 col-xs-12 place">
                        <div class="col-md-6 col-sm-12 col-xs-12"> <img src="/assets/images/rich/bw.png" alt="" /> </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h3>Like-Concept</h3>
                            <p></p> <a href="www.babock.com" class="link-btn">more info</a> </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-6 col-xs-12 place">
                        <div class="col-md-6 col-sm-12 col-xs-12"> <img src="/assets/images/rich/kns.png" alt="" /> </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h3>KNS Solar</h3>
                            <p></p> <a href="www.kns-solar.com" class="link-btn">more info</a> </div>
                    </div>
                </div>
                <div class="popu-places-home">
                    
                    <div class="col-md-6 col-sm-6 col-xs-12 place">
                        <div class="col-md-6 col-sm-12 col-xs-12"> <img src="/assets/images/rich/capture.png" alt="" /> </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h3>GLOBAL ECOVILLAGE NETWORK</h3>
                            <p></p> <a href="www.ecovillage.orgl" class="link-btn">more info</a> </div>
                    </div>
                   
                    <div class="col-md-6 col-sm-6 col-xs-12 place">
                        <div class="col-md-6 col-sm-12 col-xs-12"> <img src="/assets/images/rich/gaia.png" alt="" /> </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h3>Gaia University</h3>
                            <p></p> <a href="www.gaiauniversity.org" class="link-btn">more info</a> </div>
                    </div>
                </div>
                <div class="popu-places-home">
                </div>
            </div>
        </div>
    </section>
    <!--====== REQUEST A QUOTE ==========-->
    <!--====== REQUEST A QUOTE ==========-->

    <section>
        <div class="foot-mob-sec tb-space">
            <div class="rows container">
                <!-- FAMILY IMAGE(YOU CAN USE ANY PNG IMAGE) -->
                <div class="col-md-6 col-sm-6 col-xs-12 family"> 
                    <img src="/assets/images/rich/account.png" alt="" />
                   
                    <img src="/assets/images/rich/profile.jpg" alt="">
                    
                </div>
                <!-- REQUEST A QUOTE -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <!-- THANK YOU MESSAGE -->
                    <div class="foot-mob-app">
                        <h2>Abonne-toi et gére ton profile</h2>
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Moyen facile d'accèder au contenue juridique</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Abonne-toi et consulte notre bibliothèque partout à tout heure</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Profitez de nous services 24hr/24 et 7jr/7</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Consulte l'actualité sur notre secteur d'activité</li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== REQUEST A QUOTE ==========-->
    <section>
        <div class="form tb-space">
            <div class="rows container">
                <div class="spe-title">
                    <h2>Laisez <span> vos </span> Messages</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>Dit nous comment vous aidez </p>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 form_1">
                    <div class="succ_mess">Merci pour votre message nous vous reviendrons d'ici peu.</div>
                    <form id="home_form" name="home_form" action="mail/send.php">
                        <ul>
                            <li>
                                <input type="text" name="ename" value="" id="ename" placeholder="Nom" required>
                            </li>
                            <li>
                                <input type="tel" name="emobile" value="" id="emobile" placeholder="Mobile" required>
                            </li>
                            <li>
                                <input type="email" name="eemail" value="" id="eemail" placeholder="Email id" required>
                            </li>
                            <li>
                                <input type="text" name="esubject" value="" id="esubject" placeholder="Subjet" required>
                            </li>
                            <li>
                                <input type="text" name="ecity" value="" id="ecity" placeholder="Ville" required>
                            </li>
                            <li>
                                <input type="text" name="ecount" value="" id="ecount" placeholder="Pays" required>
                            </li>
                            <li>
                                <textarea name="emess" cols="40" rows="3" id="text-comment" placeholder="Entrez votre message"></textarea>
                            </li>
                            <li>
                                <input type="submit" value="Envoyer" id="send_button">
                            </li>
                        </ul>
                    </form>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 family">
                    <img src="/assets/images/rich/message.png" alt="" />
                </div>
            </div>
        </div>
    </section>
    
@endsection


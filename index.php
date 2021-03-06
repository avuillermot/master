﻿<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="TakeDoc, back-office and app.">
<meta name="keywords" content="TakeDoc, back-office and app">
<meta name="author" content="rype pixel">
<meta name="viewport" content="width=device-width, initial-scale=1.0">	
<title>TakeDoc | back-office and app</title>
<script src="js/html5shiv.js"></script>  <!-- support for HTML5 in IE8 -->
<!-- CSS file links -->
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" id="styleChange" />
<link href="css/jquery.bxslider.css" rel="stylesheet" />
<link href="css/lightbox.css" type="text/css" rel="stylesheet" />
<link href="css/responsive.css" type="text/css" rel="stylesheet" />
</head>

<body>
<?php include("mailer/entete.php");?>
	<!-- Header Start -->
     <header class="navbar navbar-default navbar-fixed-top">
      	<div class="container">
        	<div class="navbar-header">
          		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
          		</button>
          		<a class="navbar-brand" style="padding-top:0px; margin-top:0px" href="#"></a>
        	</div>
        	<div class="navbar-collapse collapse" style="padding-bottom:0px">
          		<ul class="nav navbar-nav navbar-right">
            		<li class="current"><a href="#sliderAnchor">Accueil</a></li>
					<li><a href="#useCase">Cas d'usage</a></li>
            		<li><a href="#featuresAnchor">Fonctionnalités</a></li>
            		<li><a href="#screenshotsAnchor">Nos Valeurs</a></li>
            		<li><a href="#howItWorksAnchor">Comment ?</a></li>
					<li><a href="#pricingAnchor">Tarifs</a></li>
            		<li><a href="#faqAnchor">Faq</a></li>
					<li><a href="#contactAnchor" style="padding-right:0px;">Contactez nous</a></li>
            		<!--<li><a href="#ourTeamAnchor">L'équipe</a></li>-->
					<li><a href="#mentionsLegales">Mentions légales</a></li>
          		</ul>
        	</div><!--/.navbar-collapse -->
      </div><!-- END Container -->
    </header><!-- END Header -->

    <!-- Slider Start -->
    <a class="anchor" id="sliderAnchor"></a>
    <section class="jumbotron">
    	<div class="container">

          <ul class="slides" style="display:none;">
            <li>
            <div class="col-lg-6">
              <img id="iphoneBlack" class="img-responsive" src="images/iphoneBlack.png" alt="iphone" />
              <img id="iphoneWhite" class="img-responsive" src="images/iphoneWhite.png" alt="iphone" />
            </div>
        		<div class="col-lg-6 slideText">
          		<h1><span>Showcase</span> TakeDoc</h1>
          		<p>Suivez en temps réel votre activité terrain.<span> Optimiser </span> le lien avec votre back-office.</p><br/>
          		<!--<a href="#" class="button">&#160;Documentation&#160;&#160;</a>-->
      		  </div>
          </li><!-- END Slide 1 -->
          <li>
            <div class="col-lg-6">
              <img id="ipadWhite" src="images/ipadWhite.png" alt="ipad white" />
              <img id="ipadBlack" src="images/ipadBlack.png" alt="ipad black" />
              <img id="iphoneBlackSmall" src="images/iphoneBlackSmall.png" alt="iphone" />
            </div>
            <div class="col-lg-5 col-lg-offset-1 slideText">
              <h1><span>Collecter &amp; traiter</span> de l'information n'a jamais été aussi facile.</h1>
              <p>Chaque utilisateur disposant d'un smartphone ou d'une tablette est capable de collecter des données pour votre back-office. L'application de gestion permet ensuite de
			  traiter l'information.</p>
              <!--<form>
                <input type="text" name="email" value="Your email" id="emailInputSlider" style="margin-right:0px" /><br/>
                <input type="submit" name="submit" value="Start Your Free Trial" class="buttonSmall" id="buttonSmallSlider" />
              </form>-->
          </div>
          </li><!-- END Slide 2 -->
          <li style="text-align:center;">
            <h1><span>TakeDoc</span></h1>
            <p>Débuter et&#160;<span>explorer</span> notre solution sur Android</p>
			<!--<img id="bubbleGraphic" src="images/bubbleGraphic.png" alt="" />-->
            <!--<ul id="slideThreeList">
              <li>Collecter</li>
              <li>Valider</li>
              <li>Archiver</li>
            </ul>-->
          </li>
        </ul> 

    	</div><!-- END Container -->

      <div class="sliderControls">
          <span id="slider-prev"></span>
          <span id="slider-next"></span>
        </div>

    </section><!-- END Slider -->

    <!-- sub-slider message Start -->
    <section id="subSliderMessage">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2>TakeDoc vous permet de <span>saisir et de traiter</span> vos documents simplement <span>sur le terrain</span></h2>
            <p>Depuis un téléphone portable ou une tablette équipée du système Android. </p>
          </div>
        </div>
      </div><!-- END container -->
    </section><!-- END Sub-slider message -->
	
	 <!-- Start Testimonials -->
    <section id="useCase">
      <div class="container">
		<div class="row"><div class="col-lg-12"><h3>Cas d'usage</h3></div><div class="col-lg-12"><img class="dividerWide" src="images/divider.png" alt=""></div></div>
        <div class="row">
 			  <h4>Optimiser votre organisation commerciale</h4>
              <p>La mission de vos commerciaux consiste à s’assurer d’un bon référencement des produits en magasins, 
			  d’avoir un suivi sur le terrain, des fréquences de visites, des relevés linéaires et des prises de commandes.<br/>
			  Décidez donc de migrer vers des terminaux Android avec l’aide de TakeDoc afin de les doter d’applications et d’outils mobiles 
			  plus sophistiqués : capables de prendre des photos de bonne facture et d'assurer un reporting opérationnel. <br/>
			  Le module de gestion des plannings permet également de visualiser les plages de disponibilité.</p>

			  <h4>Améliorer votre gestion commerciale</h4>
              <p>Votre système de saisie des commandes par bordereaux papier est devenu une charge qui pénalise la gestion commerciale de l'entreprise.<br/>
				Vos commerciaux ont l’habitude d’établir leurs bons de commandes papier en fin de semaine / mois.<br/>
				Résultat, les commandes arrivent toutes en même temps pour la saisie, le traitement, … autant d’étapes qui allongent vos délais 
				entre la prise de commande et la livraison et qui multiplient les risques d’erreurs.<br/>
				Décidez donc de migrer vers une solution mobile sur laquelle ils enregistrent les données de leurs commandes (client, référence article, quantité, prix, etc..)
				qui sont transmises en temps réel au siège.</p>

  
        </div><!-- END Row -->
      </div><!-- END Container -->
    </section><!-- END Testimonials -->

    <!-- Features Start -->
    <a class="anchor" id="featuresAnchor"></a>
    <section id="features">
      <div class="container">
        <div class="row"><div class="col-lg-12"><h3>Fonctionnalités</h3></div><div class="col-lg-12"><img class="dividerWide" src="images/divider.png" alt=""></div></div>
        <div class="row">
          <div class="col-lg-4 featureItem">
			<div class="featureIcon" id="uploadIcon"></div>
            <h4>Saisir</h4>
            <p>Compléter un rapport d'intervention, un compte rendu de visite, un relevé technique ou tous autres formulaires métiers.</p>
			<p>Prendre des photos à associer à vos documents, ajouter un fichier depuis votre téléphone ou un lecteur de carte SD.</p>
            <!--<p><a class="btn btn-default" href="#">View details &raquo;</a></p>-->
          </div>
          <div class="col-lg-4 featureItem">
            <div class="featureIcon" id="cloudIcon"></div>
            <h4>Connecter</h4>
            <p>Envoyer les informations collectées à votre back-office en temps réel.</p>
			<p>Augmentez votre visibilité, votre réactivité et votre productivité.</p>
            <!--<p><a class="btn btn-default" href="#">View details &raquo;</a></p>-->
         </div>
          <div class="col-lg-4 featureItem">
            <div class="featureIcon" id="gearIcon"></div>
            <h4>Workflow</h4>
            <p>Pour chaque type de document, utiliser un workflow adpaté demandant validation à un gestionnaire et/ou un manager.</p>
            <!--<p><a class="btn btn-default" href="#">View details &raquo;</a></p>-->
          </div>
        </div><!-- END Row -->
        <div class="row">
          <div class="col-lg-4 featureItem">
            <div class="featureIcon" id="addUserIcon"></div>
            <h4>Partager</h4>
            <p>Consulter et partager l'intégralité de votre historique en fonction des droits d'accès.</p>
            <!--<p><a class="btn btn-default" href="#">View details &raquo;</a></p>-->
          </div>
          <div class="col-lg-4 featureItem">
            <div class="featureIcon" id="messageIcon"></div>
            <h4>Facile</h4>
            <p>Une interface simple et intuitive permettant de prendre rapidement l'application en main.</p>
            <!--<p><a class="btn btn-default" href="#">View details &raquo;</a></p>-->
          </div>
          <div class="col-lg-4 featureItem">
            <div class="featureIcon" id="connectIcon"></div>
            <h4>Ouvert</h4>
            <p>Exporter vos données vers vos applications métiers : CRM, ERP, GED, CMS, portail collaboratif...</p>
            <!--<p><a class="btn btn-default" href="#">View details &raquo;</a></p>-->
          </div>
        </div><!-- END Row -->
      </div><!-- END Container -->

    <!-- Start Screenshots -->
    <a class="anchor" id="screenshotsAnchor"></a>
    <section id="screenshots">
      <div class="container">
        <div class="row"><div class="col-lg-12"><h3>Nos valeurs</h3></div><div class="col-lg-12"><img class="dividerWide" src="images/divider.png" alt=""></div></div>
        <div class="row">
          <div class="col-lg-3">
              <div class="image">
              <img src="images/screenshot1.png" class="screenshotImage" alt="placeholder" />
              <a href="images/screenshot1.png" data-lightbox="screenshot1" title="La recherche et l'innovation" class="overlay"><img class="linkIcon" src="images/icons/linkIcon.png" alt="" /></a>
              </div>
            <h4>La recherche et l’innovation</h4>
            <p>La recherche et l’innovation par l’anticipation, l’ouverture d’esprit et l’écoute.</p>
          </div>
          <div class="col-lg-3">
            <div class="image">
            <img src="images/screenshot2.png" class="screenshotImage" alt="placeholder" />
            <a href="images/screenshot2.png" data-lightbox="screenshot2" title="L’esprit d’équipe" class="overlay"><img class="linkIcon" src="images/icons/linkIcon.png" alt="" /></a>
            </div>
            <h4>L’esprit d’équipe</h4>
            <p>L’esprit d’équipe par la reconnaissance du métier de chacun, le partage des compétences et du savoir faire, par une collaboration efficace et la priorité à l’intérêt général.</p>
          </div>
          <div class="col-lg-3">
            <div class="image">
              <img src="images/screenshot3.png" class="screenshotImage" alt="placeholder" />
              <a href="images/screenshot3.png" data-lightbox="screenshot3" title="L’engagement" class="overlay"><img class="linkIcon" src="images/icons/linkIcon.png" alt="" /></a>
            </div>
            <h4>L’engagement</h4>
            <p>L’engagement dans le service rendu au client, le respect des délais, la confidentialité des informations.</p>
          </div>
          <div class="col-lg-3">
            <div class="image">
              <img src="images/screenshot4.png" class="screenshotImage" alt="placeholder" />
              <a href="images/screenshot4.png" data-lightbox="screenshot4" title="Le respect" class="overlay"><img class="linkIcon" src="images/icons/linkIcon.png" alt="" /></a>
            </div>
            <h4>Le respect</h4>
            <p>Le respect des clients, des utilisateurs en leur apportant le service et la qualité attendus.</p>
          </div>
        </div><!-- END Row -->
      </div><!-- END Container -->
    </section><!-- END Screenshots -->

    <!-- Start Promo box - hidden -->
    <!--<section id="promoBox">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Try out the <span>free trial</span> today.</h4>
            <p>Lorem ipsum dolor ut, consectetur adipiscing. Aenean quis lectus sollicitudin.</p>
          </div>
          <div class="col-lg-6">
            <form name="subscribeForm" id="subscribeForm" action="#" novalidate>
                  <input type="email" name="email" id="emailInput" placeholder="your email here" value="">
                  <input type="submit" id="subscribeButton" value="Subscribe">
            </form>
          </div>
        </div><!-- END Row -->
      </div><!-- END container -->
    </section>--><!-- END Promo box -->

    <!-- Start How It Works -->
    <a class="anchor" id="howItWorksAnchor"></a>
    <section id="howItWorks">
      <div class="container">
        <div class="row"><div class="col-lg-12"><h3>Comment fonctionne TakeDoc ?</h3></div><div class="col-lg-12"><img class="dividerWide" src="images/divider.png" alt=""></div></div>
        <div class="row">
          <div class="col-lg-6 howItWorksGraphic">
            <img class="iphoneSmall" src="images/iphoneMagnify1.png" alt="iphone" />
            <img class="dividerHalf" src="images/dividerHalf.png" alt="divider" />
          </div>
          <div class="col-lg-6">
            <h4>Recueillir de l'information <span> partout.</span></h4><br/>
            <p>Lors d'une intervention en clientèle, votre collaborateur sélectionne le type de document correspondant à sa visite.</p>
			<p>En fonction du paramétrage que vous avez déifni, votre collaborateur :</p>
			<ul style="padding-left:15px">
				<li>Complète les champs nécessaires,</li>
				<li>Prend des photographies,</li>
				<li>Joint un fichier (PDF, image, ....),</li>
				<li>Utilise votre référentiel (client, produit, partenaire) pour faciliter l'exploitation de l'information.</li>
			</ul>
          </div>
        </div><!-- END Row -->
		
		
		
        <div class="transition1"></div>
        <div class="row">
          <div class="col-lg-6">
            <h4>Traiter <span> selon vos processus et besoins métiers.</span></h4><br/>
            <p>Les informations recueillies sont ensuite mises à disposition de votre back-office.</p><p>Vos gestionnaires :</p>
			<ul style="padding-left:15px">
				<li>Contrôlent les données fournies,</li>
				<li>Suivent les workflows de validation définis,</li>
			</ul>
			<p></p>
			<ul>Les contenus sont :</ul>
				<li>Aiguillés vers les gestionnaires / managers habilités,</li>
				<li>Exportés vers votre CRM, GED, ERP en temps réel.</li>
			</ul>
          </div>
          <div class="col-lg-6 howItWorksGraphic">
            <img class="iphoneSmall" src="images/iphoneMagnify2.png" alt="iphone" />
            <img class="dividerHalf" src="images/dividerHalf.png" alt="divider" />
          </div>
        </div><!-- END Row -->
		
		
        <div class="transition2"></div>
        <div class="row">
          <div class="col-lg-6 howItWorksGraphic">
            <img class="iphoneSmall" src="images/iphoneMagnify3.png" alt="iphone" />
            <img class="dividerHalf" src="images/dividerHalf.png" alt="divider" />
          </div>
          <div class="col-lg-6">
            <h4><span>Consulter</span> et archiver.</h4><br/>
            <p>Consulter vos documents depuis l'application de gestion ou depuis votre mobile.</p>
			<ul style="padding-left:15px">
				<li>Les documents sont partagés en fonction des droits d'accès prédéfinis,</li>
				<li>Gérez des contenus et non des fichiers,</li>
				<li>Utiliser un moteur de recherche rapide.</li>
			</ul>
          </div>
        </div><!-- END Row -->
		
		
		<div class="transition1"></div>
        <div class="row">
          <div class="col-lg-6 ">
            <h4><span>Planifier</span> et organiser.</h4><br/>
            <p>Organiser et optimiser vos tournées.</p>
			<ul style="padding-left:15px">
				<li>Vos gestionnaires organisent les rendez-vous,</li>
				<li>La prise de rendez-vous prépare les formulaires métiers requis,</li>
				<li>Vos collaborateurs itinérants sont informés en temps réel.</li>
			</ul>
          </div>
		  <div class="col-lg-6 howItWorksGraphic">
            <img class="iphoneSmall" src="images/planning.png" alt="iphone" />
            <img class="dividerHalf" src="images/dividerHalf.png" alt="divider" />
          </div>
        </div><!-- END Row -->
      </div><!-- END Container -->
	  
	  
    </section><!-- END How It Works -->

    <!-- Start Pricing -->
    <a class="anchor" id="pricingAnchor"></a>
    <section id="pricing">
      <div class="container">
        <div class="row"><div class="col-lg-12"><h3>Tarifs et Options</h3></div><div class="col-lg-12"><img class="dividerWide" src="images/divider.png" alt=""></div></div>
          <div class="row">

          <div class="col-lg-4">
            <!--<div class="pricingTable">
              <div class="pricingHeader"><h1>MONO</h1></div>
              <div class="triangleWhite"><img src="images/triangleWhite.png" alt="triangle" /></div>
              <div class="priceAmount"><h2>€20.00 <br/><span>par mois par utilisateur</span></h2></div>
              <ul>
                <li>1 service/société</li>
                <li>3 formulaires métiers</li>
                <li>1 utilisateur</li>
                <li>Maintenance logicielle et correctifs</li>
              </ul>
              <div class="buttonContainer"><a href="#" class="buttonSmall">Purchase</a></div>
            </div>-->
          </div>

          <div class="col-lg-4">
            <div class="pricingTable">
              <div class="pricingHeader"><h1>STANDARD</h1></div>
              <div class="triangleWhite"><img src="images/triangleWhite.png" alt="triangle" /></div>
              <div class="priceAmount"><h2>€8.00 <br/><span>par mois par utilisateur</span></h2></div>
              <ul>
                <li>Hors frais d'hébergement</li>
                <!--<li>9 formulaires métiers</li>
                <li>De 2 à 15 utilisateurs</li>
                <li>Maintenance logicielle et correctifs</li>-->
              </ul>
              <div class="buttonContainer"><a href="#" class="buttonSmall">Purchase</a></div>-->
            </div>
          </div>

          <div class="col-lg-4">
            <!--<div class="pricingTable">
              <div class="pricingHeader"><h1>STANDARD</h1></div>
              <div class="triangleWhite"><img src="images/triangleWhite.png" alt="triangle" /></div>
              <div class="priceAmount"><h2>€14.00 <br/><span>par mois par utilisateur</span></h2></div>
              <ul>
				<li>Service/société illimité</li>
                <li>Formulaire illimité</li>
                <li>A partir de 2 utilisateurs</li>
                <li>Maintenance logicielle et correctifs</li>
              </ul>
              <div class="buttonContainer"><a href="#" class="buttonSmall">Purchase</a></div>
            </div>-->
          </div>

        </div>
      </div>
    </section>

    <!-- Start faq-->
    <section id="faq">
      <a class="anchor" id="faqAnchor"></a>
      <div class="container">
        <div class="row"><div class="col-lg-12"><h3>Faq</h3></div><div class="col-lg-12"><img class="dividerWide" src="images/divider.png" alt=""></div></div>
          <div class="row">
            <div class="col-lg-4">
              <ul class="tabs">
                <li><a href="#tab1" style="height:35px; padding-top:4px">Dans quel cas utiliser TakeDoc ?</a></li>
                <li><a href="#tab2" style="height:35px; padding-top:4px">Les processus de validation disponibles ?</a></li>
                <li><a href="#tab3" style="height:35px; padding-top:4px">L'application mobile ?</a></li>
                <li><a href="#tab4" style="height:35px; padding-top:4px" >L'application de back-office ?</a></li>
				<li><a href="#tab5" style="height:35px; padding-top:4px">Paramétrer TakeDoc ?</a></li>
                <li><a href="#tab6" style="height:35px; padding-top:4px">Modifier votre souscription ?</a></li>
              </ul>
            </div>
            <div class="col-lg-8 tabContent">
              <div id="tab1">
                <p><span>Dans quels cas utiliser TakeDoc ?</span><br/><br/></p>
				<p>Pour transmettre à votre back-office :</p>
				<ul style="padding-left:15px">
					<li>des relevés techniques (températures, temps, consommations diverses);</li>
					<li>des notes de frais et leurs justificatifs (avec la référence client pour refacturation);</li>
					<li>des comptes rendus de visite</li>
					<li>des rapports d'intervention</li>
				</ul>
				<p>Pour mettre ces informations à disposition de vos clients.</p>
				<p>Pour exporter ces informations dans vos applications métiers.</p>
              </div>
              <div id="tab2">
                <p><span>Les processus de validation disponibles ?</span><br/><br/></p>
				<p>Tous documents TakeDoc peut suivre un workflow pré-défini. Les workflows disponibles sont :</p>
				<ul style="padding-left:15px">
					<li>Manager : l'accord de votre manager est requis;</li>
					<li>Back-office : l'accord d'un gestionnaire back-office esr requis;</li>
					<li>Manager / Back-office : l'accord de votre manager puis d'un gestionnaire back-office est requis</li>
					<li>Aucun : aucun accord n'est nécessaire.</li>
				</ul>
              </div>
              <div id="tab3">
                <p><span>L'application mobile ?</span><br/><br/></p>
				<p>L'appication mobile est concue pour Android.</p>
				<p>Elle permet d'initier de nouveaux documents et 
				de suivre l'avancement des documents existants. Simple et intuitive, sa prise en main est rapide.</p>
              </div>
              <div id="tab4">
                <p><span>L'application de back-office ?</span><br/><br/></p>
				<p>Le back-office est concue pour fonctionner sur les principaux navigateurs du marché.</p>
				<p>La boîte de réception permet de suivre les étapes de validation.<br/> 
				Les fonctionnalités de recherche permettent de retrouver facilement les documents.</p>
              </div>
			  <div id="tab5">
                <p><span>Paramétrer TakeDoc ?</span><br/><br/></p>
				<p>Depuis le back-office, administrez vos formulaires :</p>
				<ul style="padding-left:15px">
					<li>en création et en modification,</li>
					<li>ajouter des champs prédéfinis,</li>
					<li>créer des champs répondant à vos exigences,</li>
				</ul>
				<p>Depuis le back-office, gérez :</p>
				<ul style="padding-left:15px">
					<li>les profils des utilisateurs,</li>
					<li>les habilitations</li>
				</ul>
              </div>
              <div id="tab6">
                <p><span>Modifier votre souscription ?</span><br/><br/></p>
				<p>Vous pouvez modifier votre souscription quand vous le souhaiter avec une prise en compte le mois suivant.</p>
              </div>
            </div>
          </div><!-- END Row -->
      </div><!-- END Container -->
    </section><!-- END Faq -->

    <!-- Start Our Team -->
    <!--<section id="ourTeam">
      <a class="anchor" id="ourTeamAnchor"></a>
      <div class="container">
        <div class="row"><div class="col-lg-12"><h3>Notre équipe</h3></div><div class="col-lg-12"><img class="dividerWide" src="images/divider.png" alt=""></div></div>
        <div class="row">
          <div class="col-lg-6 teamMemberInfo">
            <img class="teamImage" src="images/teamImage1.png" alt="" />
            <div class="col-lg-7 teamText">
            <h4><span>Alexandre V.</span> / Concepteur</h4>
            <p>Lorem ipsum dolor non, consectetur adipiscing 
            elit. Aenean lectus sollicitudin convallis quis 
            libero. Aliquam laoreet tellus ut libero semper, 
            egestas velit malesuada. Sed non risus eget 
            dolor vestibulum ullamcorper. Integer feugiat 
            massa molestie.</p>
            <ul class="socialIcons">
              <li><a href="#" class="fbIcon" target="_blank"></a></li>
              <li><a href="#" class="twitterIcon" target="_blank"></a></li>
              <li><a href="#" class="googleIcon" target="_blank"></a></li>
              <li><a href="#" class="flickrIcon" target="_blank"></a></li>
            </ul>
            </div>
          </div>
          <div class="col-lg-6 teamMemberInfo">
            <img class="teamImage" src="images/teamImage2.png" alt="" />
            <div class="col-lg-7 teamText">
            <h4><span>Eléonore R.</span> / Admin.</h4>
            <p>Lorem ipsum dolor non, consectetur adipiscing 
            elit. Aenean lectus sollicitudin convallis quis 
            libero. Aliquam laoreet tellus ut libero semper, 
            egestas velit malesuada. Sed non risus eget 
            dolor vestibulum ullamcorper. Integer feugiat 
            massa molestie.</p>
            <ul class="socialIcons">
              <li><a href="#" class="fbIcon" target="_blank"></a></li>
              <li><a href="#" class="twitterIcon" target="_blank"></a></li>
              <li><a href="#" class="googleIcon" target="_blank"></a></li>
              <li><a href="#" class="flickrIcon" target="_blank"></a></li>
            </ul>
            </div>
          </div>
        </div>
      </div>
    </section>-->

    <!-- Start Contact -->
    <section id="contact">
      <a class="anchor" id="contactAnchor"></a>
      <div class="container">
        <div class="row"><div class="col-lg-12"><h3>Contactez-nous : contact@takedoc.fr</h3><div>&#160;</div><div>&#160;</div></div></div>
        <!--<div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <form id="contactForm" method="post" action="http://www.takedoc.fr/mailer/mailer.php">

              <label style="display:none;" class="screen-reader-text">Nom</label>
              <input type="text" id="lastName" name="lastName" placeholder="Nom" class="contactInput requiredField" id="contactInputName" />
			  
			  <label style="display:none;" class="screen-reader-text">Prénom</label>
              <input type="text" id="firstName" name="firstName" placeholder="Prénom" class="contactInput requiredField" id="contactInputName" />

              <label style="display:none;" class="screen-reader-text">Email</label> 
              <input type="text" id="email" name="email" placeholder="Votre email" class="contactInput requiredField" id="contactInputEmail" style="margin-right:0px" /><br/>

              <label style="display:none;" class="screen-reader-text">Message</label>
              <textarea id="message" name="message" placeholder="Votre message" class="contactMessage requiredField"></textarea>

			  <input type="submit" onclick="return sendMailContact()" name="submit" value="Envoyer" class="buttonSmall" /><br/><br/>
			  <input type="hidden" name="submitted" id="submitted" value="true" />

            </form>
          </div>-->
        </div><!-- END Row -->
      </div><!-- END Container -->
    </section><!-- END Contact -->
	
	<section>
		<a class="anchor" id="mentionsLegales"></a>
		<div class="container">
			<div class="row"><div class="col-lg-12"><h3>Mentions Légales</h3></div><div class="col-lg-12"><img class="dividerWide" src="images/divider.png" alt=""></div></div>
          <div class="row">
            <div class="col-lg-12">
<h4>Informations générales</h4>
Ce site est propriété de TakeDoc<br/>
TakeDoc – 8 allée des noisetiers – 69380 LISSIEU<br/><br/>

TAKEDOC informe les utilisateurs de ce site que de nombreux éléments de ce site :<br/>
1. sont protégés par la législation sur le droit d’auteur : ce peut être notamment le cas des photographies, des articles, des dessins, des séquences animées,… ;<br/>
2. et/ou sont protégés par la législation sur les dessins et modèles ;<br/>
3. sont protégés par la législation sur les marques.<br/>
Les éléments ainsi protégés sont la propriété de TAKEDOC.<br/><br/>

Toute reproduction, représentation, utilisation, adaptation, modification, incorporation, traduction, commercialisation, 
partielles ou intégrales par quelque procédé et sur quelque support que ce soit (papier, numérique, …) sont interdites, sans l’autorisation 
écrite préalable de TAKEDOC, hormis les exceptions visées à l’article L 122.5 du Code de la Propriété Intellectuelle, 
sous peine de constituer un délit de contrefaçon de droit d’auteur et/ou de dessins et modèles et/ou de marque, 
puni de deux ans d’emprisonnement et de 150 000€ d’amende.<br/><br/>

<h4>Droits d’auteur et/ou Droits sur les Dessins et Modèles</h4>

Le présent site constitue une œuvre dont TAKEDOC est le propriétaire.<br/>
Les photographies, textes, slogans, dessins, images, séquences animées sonores ou non ainsi que toutes les œuvres intégrées dans le site 
sont la propriété de TAKEDOC ou de tiers ayant autorisé TAKEDOC à les utiliser.<br/>
Les reproductions, sur un support papier ou informatique, dudit site sont autorisées sous réserve qu’elles soient strictement réservées 
à un usage personnel excluant tout usage à des fins publicitaires et/ou commercial et/ou d’information et/ou qu’elles soient conformes 
aux dispositions de l’article L122-5 du Code de la Propriété Intellectuelle.<br/><br/>

<h4>Informations relatives aux produits</h4>

Les informations et illustrations figurant sur les pages de ce site Internet sont basées sur les caractéristiques techniques en cours au moment de la 
mise en ligne ou de la mise à jour des différentes pages du site.<br/>
Dans le cadre d’une politique d’amélioration constante de ses produits et services, TAKEDOC peut modifier à 
tout moment les caractéristiques de son offre. Les produits et/ou services présentés sur ce site sont ceux distribués en France métropolitaine. <br/>
Ils peuvent varier d’un pays à l’autre ou ne pas être disponibles dans tous les pays du monde.<br/>
En tout état de cause, les informations contenues sur ce site sont des informations à caractère général et n’ont pas valeur contractuelle.<br/><br/>

</h4>Formulaires :</h4>

Conformément aux articles 39 et suivants de la loi n° 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, 
toute personne peut obtenir communication et, le cas échéant, rectification ou suppression des informations la concernant, en s’adressant à 
TAKEDOC – contact@takedoc.fr.<br/>
Les informations recueillies par le biais des formulaires ne seront pas divulguées à des personnes autres que celles composants notre société.<br/>
Certaines des informations de ces formulaires sont facultatives, d’autres obligatoires et clairement indiquées comme telles afin que vos réponses soient 
suffisantes pour nous permettre de traiter l’information.<br/><br/>

<h4>Droit applicable</h4>

Les présentes conditions générales sont soumises au droit français et sont rédigés en français.<br/>
Pour tout litige, il est fait attribution exclusive de juridiction aux tribunaux compétents du ressort de Lyon.<br/>
TAKEDOC se réserve le droit de modifier les présentes mentions à tout moment. L’utilisateur s’engage à la consulter régulièrement.<br/><br/>

<h4>Limitation de responsabilité</h4>

Vous utilisez le site TAKEDOC.fr sous votre seule et entière responsabilité. TAKEDOC ne pourra être tenu pour responsable des dommages directs ou indirects, 
tels que, notamment, préjudice matériel, pertes de données ou de programme, préjudice financier, résultant de l’utilisation de ce site ou de sites qui lui sont liés.<br/><br/>

<h4>Mise à jour</h4>

TAKEDOC se réserve le droit de modifier et de mettre à jour, sans préavis, les présentes mentions légales et tous les éléments, produits présentés sur le site.<br/>
L’ensemble de ces modifications s’impose aux internautes qui doivent consulter les présentes Conditions Générales lors de chaque connexion.<br/><br/>

<h4>Données statistiques de suivi/Cookies</h4>

Nous n'utilisons pas les données de connexion pour nos statistiques de consultation.<br/><br/>
			</div></div>
		</div>
	  </div>
	</section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 about">
            <a href="#" class="no-logoDark"><span style="color:white;font-weight:bold;font-size:18px">Take</span><span style="color:#DF01A5;font-weight:bold;font-size:18px">Doc</span></a><br/><br/>
            <!--<p>Lorem ipsum dolor amet, consectetur adipiscing elit. Aenean 
            leo lectus sollicitudin convallis eget libero. Aliquam laoreet 
            tellus ut libero semper, egestas velit malesuada. Sed non 
            risus eget dolor amet vestibulum ullamcorper. Integer feugiat 
            molestie.</p>
            <ul class="socialIcons">
              <li><a href="#" class="fbIcon" target="_blank"></a></li>
              <li><a href="#" class="twitterIcon" target="_blank"></a></li>
              <li><a href="#" class="googleIcon" target="_blank"></a></li>
              <li><a href="#" class="flickrIcon" target="_blank"></a></li>
            </ul>-->
          </div>
          <div class="col-lg-4 twitter">
            <!--<h4>Latest Tweets</h4>
            <ul>
              <li><a href="#">@John Doe</a> Lorem ipsum dolor amet, consectetur adipiscing 
              elit. Aenean leo lectus sollicitudin eget libero.<br/><span>2 minutes ago</span></li>
              <li><a href="#">@John Doe</a> Lorem ipsum dolor amet, consectetur adipiscing 
              elit. Aenean leo lectus sollicitudin eget libero.<br/><span>About an hour ago</span></li>
            </ul>-->
          </div>
          <div class="col-lg-4 contact">
            <!--<h4>Contact Info</h4>
            <p>Lorem ipsum dolor amet, consectetur adipiscing ipsum dolor.</p>
            <ul>-->
              <!--<li><img src="images/icons/footerPhone.png" alt="phone icon" />1-123-345-6789</li>-->
              <li><img src="images/icons/footerPin.png" alt="pin icon" /><a href="#">contact@takedoc.fr</a></li>
              <li><img src="images/icons/footerMail.png" alt="mail icon" />8, allée des noisetiers - 69380 LISSIEU</li>
            </ul>
          </div>
        </div><!-- END Row -->
      </div><!-- END Container -->
    </footer><!-- END Footer -->
    
<!-- JavaScript file links -->
<script src="js/jquery.js"></script>			<!-- Jquery -->
<script src="js/bootstrap.min.js"></script>		<!-- bootstrap -->
<script src="js/jquery.bxslider.min.js"></script>  <!-- bxslider -->
<script src="js/tabs.js"></script> <!-- custom tab script -->
<script src="js/lightbox-2.6.min.js"></script>  <!-- lightbox -->
<script src="js/jquery.scrollTo.js"></script>  <!-- scollTo -->
<script src="js/jquery.nav.js"></script>  <!-- one page nav -->
<script src="js/respond.js"></script>

<script>
  "use strict";
  // ACTIVATE BXSLIDER (for slider section)
  $(document).ready(function(){
    $('.slides').fadeIn().bxSlider({
      auto: true,
      pager: false,
      nextSelector: '#slider-next',
      prevSelector: '#slider-prev',
      nextText: '<img src="images/nextButton.png" alt="slider next" />',
      prevText: '<img src="images/prevButton.png" alt="slider prev" />',
      // triggers slider animations on slide change
      onSlideBefore: function(){
        $('.jumbotron img').addClass("fadeInReallyFast"); 
        $('.jumbotron h1').addClass("fadeInFast");  
        $('.jumbotron p').addClass("fadeInMed"); 
        $('.jumbotron .button').addClass("fadeInSlow"); 
        $('.jumbotron .buttonSmall').addClass("fadeInSlow"); 
        $('#emailInputSlider').addClass("fadeInSlow"); 

        setTimeout (function(){
        $('.jumbotron img').removeClass("fadeInReallyFast"); 
        $('.jumbotron h1').removeClass("fadeInFast");  
        $('.jumbotron p').removeClass("fadeInMed"); 
        $('.jumbotron .button').removeClass("fadeInSlow"); 
        $('.jumbotron .buttonSmall').removeClass("fadeInSlow"); 
        $('#emailInputSlider').removeClass("fadeInSlow"); 
        }, 1400);
      }
    });

    //Triggers slider animations on page load
    $(document).ready(function() {
        $('.jumbotron img').toggleClass("fadeInReallyFast"); 
        $('.jumbotron h1').toggleClass("fadeInFast"); 
        $('.jumbotron p').toggleClass("fadeInMed"); 
        $('.jumbotron .button').toggleClass("fadeInSlow"); 
        $('.jumbotron .buttonSmall').toggleClass("fadeInSlow"); 
        $('#emailInputSlider').toggleClass("fadeInSlow"); 

        setTimeout (function(){
        $('.jumbotron img').removeClass("fadeInReallyFast"); 
        $('.jumbotron h1').removeClass("fadeInFast");  
        $('.jumbotron p').removeClass("fadeInMed"); 
        $('.jumbotron .button').removeClass("fadeInSlow"); 
        $('.jumbotron .buttonSmall').removeClass("fadeInSlow"); 
        $('#emailInputSlider').removeClass("fadeInSlow"); 
        }, 1400);
    });

    //activate second bxslider (for testimonials section)
    $('.slides2').bxSlider({
      auto: true,
      controls: false
    });
    });


// ACTIVATE ONE PAGE NAV 
$(document).ready(function() {
    $('.nav.navbar-nav.navbar-right').onePageNav();
});
</script>

<script>
"use strict";
// SCREENSHOT IMAGE HOVERS
$('.image').mouseover(function()
{
    $(".overlay", this).stop(true, true).fadeIn();
}); 

$('.image').mouseout(function()
{
    $(".overlay", this).stop(true, true).fadeOut();
}); 
</script>

<script>
"use strict";
function sendMailContact() {

	var lastName = $("#lastName").val();
	var firstName = $("#firstName").val();
	var email = $("#email").val();
	var message = $("#message").val();
	
	var ok = true;
	if (email == "" || lastName == "" || firstName == "" || message == "") 
		ok = displayErrorContact();

	if (ok) {
		$("#contactForm").submit(function( event ) {
			alert("Le message à bien été envoyé. L'équipe TakeDoc vous remercie.");
			//event.preventDefault();
		});
	}
    return ok;
};

function displayErrorContact() {
	alert("Les champs prénom, nom, email et message sont obligatoire.")
	return false;
}

function confirmSendMailContact() {
	alert("Merci");
	clearSendMailContact();
}

function clearSendMailContact() {
	$("#lastName").val("");
	$("#firstName").val("");
	$("#email").val("");
	$("#message").val("");
};
</script>
</body>
</html>

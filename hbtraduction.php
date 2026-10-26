<link rel="icon" href="images/favicon.png">
<?php 
// je suis sur une version de DVLP donc je renseigne ici la version 
//$DvlpVersion = "DVLP 1.1";
$DvlpVersion = "G. CONSEILS";
$versioncolor = "White";
//$DvlpVersion = "PIH MEDIC";
//$versioncolor = "#1A56DB";
//$versioncolor = "red";


// Concernant les variables de subscription
$YOUR_DOMAIN = 'https://pariscampagne.com/PIHMEDICTEST';
?>


<?php
if (!isset($_SESSION)) {session_start(); }
if (session_status() !== PHP_SESSION_ACTIVE){session_start(); }

if (isset($_GET["lang"])){ 
	$lang=substr(trim($_GET["lang"]), 0, 2);
	$_SESSION['lang'] = $lang; 
} 


// la traduction 
function trad($texte)

{
// initialisation de ce qu'on va retourner = si on ne trouve rien, on laisse comme saisit

$textetraduit = $texte;

//Puis la traduction
$lang = $_SESSION['lang'];

switch ($lang) {
    case "en":
// en theorie, defaut = en, donc rien ici
        break;
    case "fr":
      switch ($texte) {
			  
//barredenavigationentrelieux.php
	   case ("Technology Innovation") : $textetraduit = "Innovation technologique"; break;
	   case ("Medical Expertise") : $textetraduit = "Expertise médicale"; break;
	   case ("International Experience") : $textetraduit = "Expérience internationale"; break;
	   case ("Operations Management") : $textetraduit = "Gestion des opérations"; break;
	   case ("Diverse experience") : $textetraduit = "Expérience diversifiée"; break;
	   case ("Save time and efficiency") : $textetraduit = "Gain de temps et d’efficacité"; break;
	   case ("Innovation and medical expertise at the service of your business") : $textetraduit = "Innovation et expertise médicale au service de votre entreprise"; break;
			  
      case "In an increasingly digital world, technological innovation is at the heart of business success. As founder of a SaaS healthcare platform, I have demonstrated my ability to use technology to improve healthcare services." :
          $textetraduit = "Dans un monde de plus en plus numérique, l'innovation technologique est au cœur de la réussite des entreprises. En tant que fondateur d'une plateforme de santé SaaS, j'ai démontré ma capacité à utiliser la technologie pour améliorer les services de santé.";
          break;
      case "This platform, designed specifically for small and medium-sized healthcare structures, enables more efficient and intuitive management of healthcare services." :
          $textetraduit = "Cette plateforme, conçue spécifiquement pour les structures de santé de petite et moyenne taille, permet une gestion plus efficace et intuitive des services de santé.";
          break;
      case "Using this technology, customers can concentrate on what they do best: taking care of their patients." :
          $textetraduit = "En utilisant cette technologie, les clients peuvent se concentrer sur ce qu'ils font le mieux : prendre soin de leurs patients.";
          break;
      case "With training in emergency care and experience as an emergency nurse, I have acquired solid medical expertise. I also completed my training with a university degree in life-saving emergency care and clinical research." :
          $textetraduit = "Avec une formation en soins d'urgence et une expérience en tant qu'infirmier urgentiste, j'ai acquis une solide expertise médicale. J'ai également complété ma formation avec un diplôme universitaire en soins d'urgence de sauvetage et en recherche clinique.";
          break;
      case "This medical expertise enables me to understand my customers' healthcare issues and to propose solutions tailored to their needs." :
          $textetraduit = "Cette expertise médicale m'autorise à comprendre les problématiques de santé de mes clients et à proposer des solutions adaptées à leurs besoins.";
          break;
      case "My goal is to help my clients navigate the complex healthcare landscape and provide the best possible care to their patients." :
          $textetraduit = "Mon objectif est d'aider mes clients à naviguer dans le paysage complexe des soins de santé et à fournir les meilleurs soins et solutions possibles à leurs patients.";
          break;
      case "Working on an international scale requires exceptional adaptability and cultural understanding." :
          $textetraduit = "Travailler à l'échelle internationale exige une adaptabilité exceptionnelle et une compréhension culturelle.";
          break;
      case "My experience as an emergency nurse on international missions, including the medicalization of a nuclear power plant in China during the Covid pandemic, is testament to my ability to operate effectively in diverse and demanding environments." :
          $textetraduit = "Mon expérience en tant qu'infirmier urgentiste lors de missions internationales, y compris la médicalisation d'une centrale nucléaire en Chine pendant la pandémie de Covid-19, témoigne de ma capacité à opérer efficacement dans des environnements diversifiés et exigeants.";
          break;
      case "This experience has enabled me to develop a global perspective and in-depth understanding of the unique challenges facing healthcare organizations around the world." :
          $textetraduit = "Cette expérience m'a permis de développer une perspective mondiale et une compréhension approfondie des défis uniques auxquels sont confrontées les organisations de santé dans le monde entier.";
          break;

			  
    case "As Medical Operation Manager, I demonstrated my ability to effectively manage operations in large-scale, complex contexts." :
        $textetraduit = "En tant que gestionnaire des opérations médicales pour une multinationale, j'ai démontré ma capacité à gérer efficacement les opérations dans des contextes complexes et à grande échelle.";
        break;
    case "I coordinated teams, managed resources and made strategic decisions to ensure the smooth running of operations." :
        $textetraduit = "J'ai coordonné des équipes, géré les ressources et pris des décisions stratégiques pour assurer le bon fonctionnement des opérations.";
        break;
    case "This experience has enabled me to develop leadership, strategic planning and problem-solving skills, which are essential in helping my customers optimize their operations and achieve their objectives." :
        $textetraduit = "Cette expérience m'a permis de développer des compétences en leadership, planification stratégique et résolution de problèmes, essentielles pour aider mes clients à optimiser leurs opérations et à atteindre leurs objectifs.";
        break;
	
    case "Drum roll... Here's episode 30 of the podcast, the 10th of season 2! In this exciting episode, we travel with Aymeric Gamondes from India to Finland via China, looking at the local culture, the world of care and the creation of business software! A very varied programme in store! Aymeric shares his experience with us and tells us all about his incredible adventure. A former top-level athlete, emergency nurse, self-taught and co-founder of PIH MEDIC, Aymeric and his partner Herve have succeeded in developing a business software from scratch in the highly competitive medical software sector. Here, he tells us about his exciting adventure, full of meaning and in search of impact. If you're wondering how to bring meaning to your business, this podcast is for you." :
        $textetraduit = "Roulement de tambour… Voici l’épisode 30 du podcast, 10ème de la saison 2 ! Dans cet épisode passionnant, nous voyageons avec Aymeric Gamondes, de l'Inde à la Finlande en passant par la Chine, en abordant la culture locale, le monde des soins et de la création de logiciels métiers ! Un programme très varié en perspective ! Aymeric nous partage son expérience et nous révèle les dessous de son incroyable aventure. Ancien athlète de haut niveau, infirmier urgentiste, autodidacte et cofondateur de PIH MEDIC, Aymeric a réussi à développer avec son associé Hervé, en partant de zéro, un logiciel métier dans le secteur très concurrentiel des logiciels médicaux. Il nous raconte son aventure passionnante, pleine de sens, à la recherche d’impact. Si vous vous posez la question de comment mettre du sens dans vos activités, ce podcast est fait pour vous.";
        break;
			  
    case "Experience as an asset, willpower as a driving force, how to propose impactful solutions" :
        $textetraduit = "L'expérience est un atout, la volonté est une force motrice, il faut savoir proposer des solutions percutantes.";
        break;
			  
    case "Experience as an asset, willpower as a driving force, how to propose impactful solutions" :
        $textetraduit = "L'expérience est un atout, la volonté est une force motrice, il faut savoir proposer des solutions percutantes.";
        break;

    case ("The Privadois nurse who treated at the French Open") : $textetraduit = "L'infirmier privadois qui a soigné à Roland-Garros"; break;
    case ("Aymeric Gamondes is an emergency nurse who has been working in France and abroad on a regular basis for a number of years, on a variety of assignments. -All enriching experiences- from a medical point of view.") : $textetraduit = "Aymeric Gamondes est un infirmier urgentiste qui travaille régulièrement en France et à l'étranger depuis plusieurs années, sur des missions variées. -Autant d'expériences enrichissantes- d'un point de vue médical."; break;
	case ("Latest interviews") : $textetraduit = "Dernière interviews"; break;
	case ("Founder") : $textetraduit = "Fondateur"; break;
	case ("Find out more") : $textetraduit = "En savoir plus"; break;
	   case ("Incomplete address") : $textetraduit = "Adresse incomplète"; break;
	   case ("Languages") : $textetraduit = "Langues"; break;
	   case ("My workplaces") : $textetraduit = "Mes lieux de travail"; break;
	   case ("Workplaces") : $textetraduit = "Lieux d'exercice"; break;
	   case ("MANAGER") : $textetraduit = "GESTIONNAIRE"; break;
	   case ("PRACTITIONER") : $textetraduit = "PRATICIEN"; break;
	   case ("You do not have a manager right") : $textetraduit = "Vous n'avez pas de droit gestionnaire ici"; break;
	   case ("You do not have a practitioner right") : $textetraduit = "Vous n'avez pas de droit praticien ici"; break;
	   case ("You do not have a practitioner right") : $textetraduit = "Vous n'avez pas de droit praticien ici"; break;
	   case ("Go as manager") : $textetraduit = "Interface gestionnaire"; break;
	   case ("Go as practitionner") : $textetraduit = "Interface praticien"; break;
	   case ("Manager interface") : $textetraduit = "Interface gestionnaire"; break;
	   case ("Practitionner interface") : $textetraduit = "Interface praticien"; break;
	   case ("past consultations") : $textetraduit = "consultations passées"; break;
	   case ("Management structure") : $textetraduit = "Gestion de la structure"; break;
	   case ("Practice structure") : $textetraduit = "Lieu de pratique"; break;
	   case ("Place of consultation") : $textetraduit = "Lieu de consultation"; break;
	   case ("Management structure") : $textetraduit = "Structure en gestion"; break;
	   case ("Recruitment") : $textetraduit = "Recrutement"; break;
	   case ("Recruitment consultant") : $textetraduit = "Conseil en recrutement"; break;
	
	case "I gained expertise in recruitment, successfully running campaigns for a variety of positions. My rigorous approach enabled me to select the best talent suited to the company's needs." :
        $textetraduit = "J’ai acquis une expertise en recrutement, menant avec succès des campagnes pour divers postes. Mon approche rigoureuse m’a permis de sélectionner les meilleurs talents adaptés aux besoins de l’entreprise.";
        break;
			  
    case "In addition, I have an extensive professional network in the medical sector, facilitating access to a pool of quality candidates. My aim is to use my expertise and network to help companies find the talent they need." :
        $textetraduit = "De plus, je dispose d’un réseau professionnel étendu dans le secteur médical, facilitant l’accès à un vivier de candidats de qualité. Mon objectif est d’utiliser mon expertise et mon réseau pour aider les entreprises à trouver les talents dont elles ont besoin.";
        break;		
			  
    case "I also have significant experience in managing human problems, which has enabled me to resolve various conflicts effectively and improve team dynamics." :
        $textetraduit = "J’ai également une expérience significative dans la gestion des problèmes humains, ce qui m’a permis de résoudre efficacement divers conflits et d’améliorer la dynamique d’équipe.";
        break;
			 	  
			  
			  
			  
			  
			  
//hbcalajout.php
	   case ("Patient appointment booking") : $textetraduit = "Prise de rendez-vous patient"; break;
	   case ("Dismiss") : $textetraduit = "J'ai compris"; break;
	   case ("New calendar") : $textetraduit = "Nouveau calendrier"; break;
	   case ("NEW CALENDAR") : $textetraduit = "NOUVEAU CALENDRIER"; break;
	   case ("CALENDAR MODIFICATION") : $textetraduit = "MODIFIER LE CALENDRIER"; break;
	   case ("For which structure ?") : $textetraduit = "Pour quelle structure ?"; break;
	   case ("Calendar name") : $textetraduit = "Nom du calendrier"; break;
	   case ("Brief calendar description") : $textetraduit = "Description succincte du calendrier"; break;
	   case ("Information for the patient") : $textetraduit = "Information pour le patient"; break;
	   case ("Write here a comment to the attention of the user in the event that he makes an appointment. For example: Please bring all your blood tests on the day of the appointment.") : $textetraduit = "Écrivez ici un commentaire à l'attention du patient dans le cas où il prend rendez-vous. Par exemple : Veuillez apporter toutes vos prises de sang le jour du rendez-vous."; break;
	   case ("You can write here a message for the attention of the patient which will be displayed each time an appointment is made in this care structure.") : $textetraduit = "Vous pouvez  écrire ici un message à l'attention du patient qui s'affichera à chaque prise de rendez-vous dans cette structure de soin."; break;
	   

	   case ("Add the calendar") : $textetraduit = "Créer un calendrier"; break;
	   case ("You must create one schedule per exercise location.") : $textetraduit = "Vous devez créer un calendrier par lieu d'exercice. "; break;
	   case ("Select structure") : $textetraduit = "Sélectionner une structure"; break;
	   case ("You must select a structure. You can create a maximum schedule for each structure.") : $textetraduit = "Vous devez sélectionner une structure. Vous pouvez créer un calendrier maximum pour chaque structure."; break;
	   case ("All your structures already have an associated calendar.") : $textetraduit = "Toutes vos structures ont déjà un calendrier associé."; break;
	   case ("Reservation window visible regardless of the reason for consultation") : $textetraduit = "Créneau de réservation visibles indépendamment du motif de consultation"; break;
	   case ("Filter by reason for consultation when making an appointment") : $textetraduit = "Filtre par motif de consultation lors de la prise de rendez-vous"; break;
	   case ("Accessibility of the calendar by the patient") : $textetraduit = "Accessibilité du calendrier par le patient"; break;
	  
	  
//hbcalplage.php
	   case ("Practitioner record") : $textetraduit = "Fiche du praticien"; break;
	   case ("See more about the place") : $textetraduit = "En savoir plus sur cette structure"; break;
	   case ("See more") : $textetraduit = "Voir plus"; break;
	   case ("See more availability with this practitioner") : $textetraduit = "Voir plus de disponibilité avec ce praticien"; break;
	   case ("IN PROGRESS") : $textetraduit = "EN COURS"; break;
	   
// hbcalreservationaddinformation.php
	   case ("Please read the following information carefully :") : $textetraduit = "Veuillez lire les informations suivantes avec attention :"; break;
	   case ("I read carefully") : $textetraduit = "J'ai lu attentivement"; break;
	   case ("By continuing, you acknowledge having read the above information.") : $textetraduit = "En poursuivant vous reconnaissez avoir pris connaissance des informations ci-dessus."; break;
	   case ("This healthcare professional is not accepting new patients.") : $textetraduit = "Ce professionnel de santé n'accepte pas les nouveaux patients."; break;
	   case ("I read carefully") : $textetraduit = "J'ai lu attentivement"; break;
	   case ("P.I.H - Your appointment is confirmed") : $textetraduit = "Votre rendez-vous est confirmé"; break;
	  
	  
// hbcalreservationaddidentity.php
	   case ("MY APPOINTMENT") : $textetraduit = "MON RENDEZ-VOUS"; break;
	   case ("My appointment") : $textetraduit = "Mon rendez-vous"; break;
	   case ("My appointments") : $textetraduit = "Mes rendez-vous"; break;
	   case ("no specialty indicated") : $textetraduit = "aucune spécialité renseignée"; break;
	   case ("IDENTITY") : $textetraduit = "IDENTITÉ"; break;
	   case ("Who are you making an appointment for ?") : $textetraduit = "Pour qui prenez vous rendez-vous ?"; break;
	   case ("Continue") : $textetraduit = "Continuer"; break;
	   case ("Please select your reason for consultation :") : $textetraduit = "Veuillez sélectionner votre motif de consultation :"; break;
	   case ("Please select your reason for consultation from the list below :") : $textetraduit = "Veuillez sélectionner votre motif de consultation dans la liste ci-dessous."; break;
	   case ("Reason for consultation") : $textetraduit = "Motif de consultation"; break;   
	   case ("I am not a new patient") : $textetraduit = "je ne suis pas un nouveau patient"; break;   
	   case ("In which structure would you like to make an appointment ?") : $textetraduit = "Dans quelle structure souhaitez vous prendre rendez-vous ?"; break;   
	   

//hbcalplage.php
	   case ("I am done") : $textetraduit = "J'ai terminé"; break;
	   case ("Calendar informations") : $textetraduit = "Informations du calendrier"; break;
	   case ("My currents slots") : $textetraduit = "Mes plages en cours"; break;
	   case ("Calendar Visibility") : $textetraduit = "Visibilité du calendrier"; break;
	   case ("The calendar is visible to patients.") : $textetraduit = "Le calendrier est visible pour les patients"; break;
	   case ("You have not created any slot on this calendar. Get started by clicking the link below.") : $textetraduit = "Vous n'avez créé aucune plage sur ce calendrier. Commencez en cliquant sur le lien ci-dessous."; break;
	   case ("Duration of consultations") : $textetraduit = "Durée des consultations"; break;
	   case ("End of time slot") : $textetraduit = "Fin de la plage"; break;
	   case ("Add a slot") : $textetraduit = "Ajouter une plage"; break;
	   case ("Delete the slot") : $textetraduit = "Suprimer la plage"; break;
	   case ("Delete the calendar") : $textetraduit = "Supprimer le calendrier"; break;
	   case ("Are you sure you want to delete the calendar ?") : $textetraduit = "Voulez-vous vraiment supprimer le calendrier ?"; break;
	   case ("Do you confirm the appointment of ") : $textetraduit = "Confirmez vous la prise de rendez-vous de "; break;
	   case ("Do you confirm the cancellation of the appointment of ") : $textetraduit = "Confirmez vous vouloir annuler le rendez-vous de "; break;
	   case (", on ") : $textetraduit = ", le "; break;
	   case ("The consultation is organized by a replacement.") : $textetraduit = "La consultation est organisée par un remplaçant."; break;


// hbcalsetupdayoffA.php 
	  case ("revoke manager role"):
			$textetraduit = "révoquer le rôle gestionnaire";
			break;
		case ("assign manager role"):
			$textetraduit = "attribuer un rôle gestionnaire";
			break;
		case ("accept request"):
			$textetraduit = "accepter la demande";
			break;
		case ("remove professional"):
			$textetraduit = "retirer le professionnel";
			break;
		case ("cancel request"):
			$textetraduit = "annuler la demande";
			break;
	   case ("please choose your situation") : $textetraduit = "veuillez choisir votre situation"; break;
	   case ("On which calendar do you want to select a range ?") : $textetraduit = "Sur quel calendrier souhaitez-vous sélectionner une plage ?"; break;
			  
	   case ("reason") : $textetraduit = "motif"; break;
	   case ("Reason for unavailability") : $textetraduit = "Raison de l'indisponibilité"; break;
	   case ("Choose a related color :") : $textetraduit = "Choisissez une couleur associée :"; break;
	   case ("On which calendar ?") : $textetraduit = "Sur quel calendrier ?"; break;
	   case ("all calendars combined") : $textetraduit = "tous mes calendriers"; break;
	   case ("RANGE SELECTION") : $textetraduit = "SELECTION DE PLAGE"; break;
	   
// hbcalsetupdayoffB.php 
	   case ("reservation slots are affected by your unavailability.") : $textetraduit = "créneaux de réservation sont concernés par votre indisponibilité."; break;
	   case ("reservation slots are already reserved and will be canceled automatically after your confirmation. A cancellation email will be sent to whom it may concern.") : $textetraduit = "créneaux de réservation sont déjà réservés et seront annulés automatiquement après votre confirmation. Un e-mail d'annulation sera envoyé à qui de droit."; break;
	   case ("We could not find any reservation slots that your selection applies to. Please check the dates you entered.") : $textetraduit = "Nous n'avons trouvé aucun créneau de réservation concerné par votre sélection. Veuillez vérifier les dates que vous avez renseigné."; break;
	   case ("Please note that all canceled appointments will be canceled permanently.") : $textetraduit = "Veuillez noter que tous les rendez-vous annulé le seront définitivement."; break;
	   case ("CONFIRMATION OF UNAVAILABILITY") : $textetraduit = "CONFIRMATION D'INDISPONIBILITÉ"; break;

// hbcalsetupdayoffC.php 
	   case ("CONFIRMATION OF AVAILABILITY") : $textetraduit = "CONFIRMATION DE DISPONIBILITÉ"; break;
	   case ("unavailable booking slots will again be bookable by your patients.") : $textetraduit = "créneaux de réservation indisponibles seront à nouveau réservables par vos patients."; break;
	   
// hbcalsetupplageadd.php	 
	   case ("You can continue to build your schedule by adding a new time slot. Alternatively, you can return to your schedule. Remember to put your slots online when you are ready") : $textetraduit = "Vous pouvez continuer à construire votre agenda en ajoutant une nouvelle plage horaire. Alternativement, vous pouvez revenir à votre agenda. Pensez à mettre vos plages ajoutées en ligne lorsque vous êtes prêt"; break;
	   case ("Time slot added successfully") : $textetraduit = "Plage horaire ajoutée avec succès"; break;
	   case ("Return to calendar") : $textetraduit = "Retourner à l'agenda"; break;
	   case ("Add a new time range") : $textetraduit = "Ajouter une nouvelle plage"; break;
	   case ("new time slots have been added to your professional calendar") : $textetraduit = "créneaux de réservations ont été ajoutés à votre agenda professionnel"; break;
	   case ("Please note, the time slot is not yet visible online. To make it available for reservation, you must activate the corresponding time slot. This gives you the ability to add periods of unavailability if necessary before the time slot is available for booking") : $textetraduit = "Attention, la plage horaire n'est pas encore visibles en ligne. Pour la rendre disponible à la réservation, vous devez activer la plage horaire correspondante. Cela vous donne la possibilité d'ajouter des périodes d'indisponibilité si nécessaire avant que la plages horaire ne soit accessible à la réservation"; break;
	   case ("By enabling auto-renewal, your slot will automatically be extended by one week at the end of each week. This means you won't need to create a new slot every week, as the system will do it automatically for you.") : $textetraduit = "En activant le renouvellement automatique, votre créneau sera automatiquement prolongé d'une semaine à la fin de chaque semaine. Cela signifie que vous n'aurez pas besoin de créer un nouveau créneau chaque semaine, car le système le fera automatiquement pour vous."; break;
	   case ("Once the payment is made, you can access the teleconsultation:") : $textetraduit = "Une fois le paiement effectué, vous pouvez accéder à la téléconsultation :"; break;
	   case ("Travel time (minutes)") : $textetraduit = "Temps de trajet (minutes)"; break;
	   case ("shift_01") : $textetraduit = "plage_01"; break;
	   case ("Automatic range renewal") : $textetraduit = "Reconduction automatique de la plage"; break;
	   case ("New patient accepted") : $textetraduit = "Nouveau patient accepté"; break;
	   case ("New patient not accepted") : $textetraduit = "Nouveau patient non accepté"; break;
	   case ("Yes") : $textetraduit = "Oui"; break;
	   case ("No") : $textetraduit = "Non"; break;
	   case ("You are about to create new booking slots.") : $textetraduit = "Vous êtes sur le point d'ajouter une nouvelle plage."; break;
	   case ("Name of the new time range") : $textetraduit = "Nom de la nouvelle plage"; break;
	   case ("Shift name") : $textetraduit = "Nom de la plage"; break;
	   case ("Shift description") : $textetraduit = "Description de la plage"; break;
	   case ("Patient information") : $textetraduit = "Information au patient"; break;
	   case ("From-") : $textetraduit = "Date début"; break;
	   case ("To-") : $textetraduit = "Date fin"; break;
	   case ("From.") : $textetraduit = "Heure de début"; break;
	   case ("to.") : $textetraduit = "Heure de fin"; break;
	   case ("Type of shift") : $textetraduit = "Type de plage horaire"; break;
	   case ("Consultation day") : $textetraduit = "Jour de consultation"; break;
	   case ("I am not available") : $textetraduit = "Je ne suis pas disponible"; break;
	   case ("unavailability") : $textetraduit = "indisponibilité"; break;
	   case ("This slot will no longer be bookable by your patient.") : $textetraduit = "Ce créneau ne sera plus réservable par vos patient."; break;
	   case ("I am available") : $textetraduit = "Je suis disponible"; break;
	   case ("availablity") : $textetraduit = "disponibilité"; break;
	   case ("Consulting room") : $textetraduit = "Au cabinet"; break;
	   case ("House call") : $textetraduit = "Visite à domicile"; break;
	   case ("Teleconsultation") : $textetraduit = "Télé-consultation"; break;
	   case ("To modify this reservation slot, you must first cancel the associated appointment or make it available.") : $textetraduit = "Pour modifier ce créneau de réservation, vous devez au préalable annuler le rendez-vous associé ou le rendre disponible."; break;
	   case ("cancel the appointment") : $textetraduit = "annuler le rendez-vous"; break;
	   case ("Canceling can put your patient in difficulty.") : $textetraduit = "Annuler le rendez-vous peut mettre votre patient dans la difficulté."; break;
	   case ("type of reservation slot") : $textetraduit = "Profil de ce créneau de réservation"; break;
	   case ("patient message") : $textetraduit = "message du patient"; break;
	   case ("has not left any comments for this reservation.") : $textetraduit = "n'a laissé aucun message à votre attention pour cette consultation."; break;
	   case ("go to medical records") : $textetraduit = "ouvrir le dossier médical"; break;
	   case ("Period of unavailability") : $textetraduit = "Période d'indisponibilité"; break;
	   case ("languages") : $textetraduit = "langues"; break;
	   case ("Make yourself understood by your patients by selecting the languages you speak.") : $textetraduit = "Faîtes vous comprendre de vos patients en sélectionnant les langues que vous maitrisez."; break;
	   case ("The patient can not keep appointment") : $textetraduit = "Le patient ne peut pas honorer son rendez-vous"; break;
	   case ("calendar activity") : $textetraduit = "activité du calendrier"; break;
	   case ("time slot visibility") : $textetraduit = "visibilité de la plage"; break;
	   case ("The time slot is not yet visible to your patients. Commission your range once you are ready.") : $textetraduit = "La plage horaire n'est pas encore visible pour vos patient. Mettez en service votre plage une fois que vous êtes prêt."; break;
	   case ("The time range is visible. Your patients can take reservations on the corresponding slots.") : $textetraduit = "La plage horaire est visible. Vos patient peuvent prendre des réservation sur le créneaux correspondants."; break;
	   case ("Choose when to bring the calendar into operation :") : $textetraduit = "Choisissez quand mettre le calendrier en service :"; break;
	   case ("bring the time slot into operation") : $textetraduit = "mettre la plage horaire en service"; break;
	   case ("calendar online") : $textetraduit = "en ligne"; break;
	   case ("list") : $textetraduit = "liste"; break;
	   case ("week") : $textetraduit = "semaine"; break;
	   case ("month") : $textetraduit = "mois"; break;
	   case ("available") : $textetraduit = "disponibles"; break;
	   case ("available ") : $textetraduit = "disponible"; break;
	   case ("booked") : $textetraduit = "réservés"; break;
	   case ("booked ") : $textetraduit = "réservé "; break;
	   case ("patient cancellation") : $textetraduit = "annulation du patient"; break;
	   case ("in construction") : $textetraduit = "en construction"; break;
	   case ("Online") : $textetraduit = "En service"; break;
	   case ("Offline") : $textetraduit = "Hors ligne"; break;
	   case ("online") : $textetraduit = "en service"; break;
	   case ("more options") : $textetraduit = "plus d'options"; break;
	   case ("My calendars") : $textetraduit = "Mes calendriers"; break;
	   case ("period of unavailability/availability") : $textetraduit = "période d'indisponibilité/disponibilité"; break;
	   case ("export calendars") : $textetraduit = "exporter les calendriers"; break;
	   case ("unavailabilities") : $textetraduit = "indisponibilités"; break;
	   case ("availability") : $textetraduit = "disponibilités"; break;
	   case ("not specified") : $textetraduit = "non renseigné"; break;
	   case ("Deleting the calendar cancels all associated appointments.") : $textetraduit = "Supprimer le calendrier annulera tous les rendez-vous associés."; break;
	   case ("Are you sure you want to delete the time slot ?") : $textetraduit = "Êtes-vous sûr de vouloir supprimer la plage horaire ?"; break;
	   case ("Deleting the time slot cancels all associated appointments.") : $textetraduit = "Supprimer la plage annulera tous les rendez-vous associés."; break;

	   case ("Mon") : $textetraduit = "Lun"; break;
	   case ("Tue") : $textetraduit = "Mar"; break;
	   case ("Wed") : $textetraduit = "Mer"; break;
	   case ("Thu") : $textetraduit = "Jeu"; break;
	   case ("Fri") : $textetraduit = "Ven"; break;
	   case ("Sat") : $textetraduit = "Sam"; break;
	   case ("Sun") : $textetraduit = "Dim"; break;
	  
	   case ("M") : $textetraduit = "L"; break;
	   case ("Tu") : $textetraduit = "Ma"; break;
	   case ("W") : $textetraduit = "Me"; break;
	   case ("Th") : $textetraduit = "J"; break;
	   case ("F") : $textetraduit = "V"; break;
	   case ("Sa") : $textetraduit = "S"; break;
	   case ("Su") : $textetraduit = "D"; break;
	   case ("How often ?") : $textetraduit = "Récurrence"; break;
	   case ("Interval (min)") : $textetraduit = "Intervalle (min)"; break;
	   
	   case ("Monday") : $textetraduit = "Lundi"; break;
	   case ("Tuesday") : $textetraduit = "Mardi"; break;
	   case ("Wednesday") : $textetraduit = "Mercredi"; break;
	   case ("Thursday") : $textetraduit = "Jeudi"; break;
	   case ("Friday") : $textetraduit = "Vendredi"; break;
	   case ("Saturday") : $textetraduit = "Samedi"; break;
	   case ("Sunday") : $textetraduit = "Dimanche"; break;
	  
	   case ("Jan") : $textetraduit = "Jan"; break;
	   case ("Feb") : $textetraduit = "Fev"; break;
	   case ("Mar") : $textetraduit = "Mar"; break;
	   case ("Apr") : $textetraduit = "Avr"; break;
	   case ("May") : $textetraduit = "Mai"; break;
	   case ("Jun") : $textetraduit = "Jun"; break;
	   case ("Jul") : $textetraduit = "Jul"; break;
	   case ("Aug") : $textetraduit = "Aoû"; break;
	   case ("Sep") : $textetraduit = "Sep"; break;
	   case ("Oct") : $textetraduit = "Oct"; break;
	   case ("Nov") : $textetraduit = "Nov"; break;
	   case ("Dec") : $textetraduit = "Dec"; break;
	      
	   case ("January") : $textetraduit = "Janvier"; break;
	   case ("February") : $textetraduit = "Février"; break;
	   case ("March") : $textetraduit = "Mars"; break;
	   case ("April") : $textetraduit = "Avril"; break;
	   case ("May") : $textetraduit = "Mai"; break;
	   case ("June") : $textetraduit = "Juin"; break;
	   case ("July") : $textetraduit = "Juillet"; break;
	   case ("August") : $textetraduit = "Août"; break;
	   case ("September") : $textetraduit = "Septembre"; break;
	   case ("October") : $textetraduit = "Octobre"; break;
	   case ("November") : $textetraduit = "Novembre"; break;
	   case ("December") : $textetraduit = "Decembre"; break;
	   
	   
	   case ("Mode of consultation") : $textetraduit = "Mode de consultation"; break;
	   case ("Slot main color") : $textetraduit = "Couleur principale de la plage"; break;
	   case ("Duration of the appointment (minutes)") : $textetraduit = "Durée du rendez-vous (minutes)"; break;
	   
	   case ("You are about to create a new time slot in the structure") : $textetraduit = "Vous êtes sur le point de créer une nouvelle plage horaire dans la structure"; break;
	   case ("the time range is not visible.") : $textetraduit = "La plage n'est pas visible."; break;
	   case ("the time range is visible.") : $textetraduit = "La plage est visible."; break;
	   
	   // hbcalreservationaddconfirmation.php
	   case ("CONFIRM THE RESERVATION") : $textetraduit = "CONFIRMATION DE LA RÉSERVATION"; break;
	   case ("You can write any comments here for the attention of the practitioner :") : $textetraduit = "Vous pouvez écrire ici tout commentaire au praticien :"; break;
	   case ("Write your comments here.") : $textetraduit = "Écrivez vos remarques ici."; break;
	   case ("Take the reservation") : $textetraduit = "Confirmer la réservation"; break;
	   case ("By confirming the reservation, you agree to respect the conditions.") : $textetraduit = "En confirmant la réservation, vous vous engagez à respecter les conditions."; break;
	
	   case ("We are unable to generate your new range. Please check the following: start date, end date, start time, end time. There may be Incompatibilities with existing tracks.") : $textetraduit = "Nous ne parvenons pas à générer votre nouvelle plage. Veuillez vérifier les élements suivants : date de début, date de fin, heure de début, heure de fin. Il se peut qu'il y ai des Incompatibilités avec des plages existantes."; break;
	   case ("incompatibility") : $textetraduit = "incompatibilité"; break;
	   case ("Reason for consultation associated with the slot") : $textetraduit = "Motif de consultation associé à la plage"; break;
	   
	   case ("Search a patient") : $textetraduit = "Trouver un patient"; break;
	   case ("Track the recurrence of your range every two weeks.") : $textetraduit = "Suivez la récurrence de votre plage toute les deux semaines."; break;
	   case ("Fill in here, one or more reasons for consultation associated with this range.") : $textetraduit = "Renseignez ici, un ou plusieurs motifs de consultation associés à cette plage."; break;
	   case ('For example: "digestive endoscopy, bronchial endoscopy"') : $textetraduit = 'Par exemple : "endoscopie digestive, endoscopie bronchique"'; break;
	   case ("By applying automatic renewal, your slot will be extended by one week each week.") : $textetraduit = "En appliquant la reconduction automatique, votre plage horaire sera prolongée d'une semaine chaque semaine."; break;
	   case ("You cannot change your exercise location on this page.") : $textetraduit = "Vous ne pouvez changer de lieu d'exercice sur cette page."; break;
	   case ("Please choose a color by clicking below.") : $textetraduit = "Veuillez choisir une couleur, en cliquant ci-dessous."; break;
	   case ("The following appointment is confirmed :") : $textetraduit = "Le rendez-vous suivant est confirmé :"; break;
	   case ("Confirmation of appointment") : $textetraduit = "Confirmation de rendez-vous"; break;
	   case ("You can view the details of this appointment on P.I.H Medic, on your phone, tablet or PC.") : $textetraduit = "Vous pouvez consulter les détails de ce rendez-vous sur P.I.H Medic, sur votre téléphone, tablette ou PC."; break;

// hbcalsetupplage2 
			  
	   case ("end date of the range") : $textetraduit = "date de fin de la plage"; break;
	   case ("slot settings") : $textetraduit = "paramètres de la plage horraire"; break;
	   case ("edit before posting") : $textetraduit = "modifier avant la mise en ligne"; break;
	   case ("Reasons for consultation") : $textetraduit = "Motif de consultation"; break;
	   case ("If you want to stop the time slot before the scheduled end date, you can simply adjust the end date to the desired date. This will allow you to organize yourself even if reservation slots have already been selected. Please note that if automatic time slot renewal is enabled, it will be disabled and booking slots beyond the chosen end date will be cancelled.") : $textetraduit = "Si vous souhaitez arrêter la plage horaire avant la date de fin prévue, vous pouvez simplement ajuster la date de fin à la date souhaitée. Cela vous permettra de vous organiser même si des créneaux de réservation ont déjà été sélectionnés. Veuillez noter que si le renouvellement automatique des créneaux horaires est activé, il sera désactivé et la réservation des créneaux au-delà de la date de fin choisie sera annulée."; break;
			 
// hbcrontabmailrdv48h.php
	   case ("Appointment reminder") : $textetraduit = "Rappel de rendez-vous"; break;
	   case ("We take the liberty of reminding you that your appointment is coming soon :") : $textetraduit = "Nous nous permettons de vous rappeler que votre rendez-vous arrive bientôt :"; break;
	   case ("Appointment reminder") : $textetraduit = "Rappel de rendez-vous"; break;
	   case ("Do not hesitate to log in to your patient area for more information.") : $textetraduit = "Connectez-vous à votre espace patient pour davantage de précisions."; break;
	   case ("Hello, we remind you of your medical appointment:") : $textetraduit = "Bonjour, nous vous rappelons votre rendez-vous médical :"; break;



// hbdashboardadmical.php
	   case ("ADMINISTRATOR LOCATION CALENDARS") : $textetraduit = "GESTIONNAIRE DE CALENDRIERS DU LIEU"; break;
	   
// hbdashboardadmicomm.php
	   case ("ADMINISTRATOR LOCATION CONNECTIONS") : $textetraduit = "GESTIONNAIRE DE CONNEXIONS SUR TOUS LES LIEUX"; break;
	   case ("ADMINISTRATOR STATS") : $textetraduit = "STATISTIQUES GLOBALES"; break;
	   case ("ADMINISTRATOR LOCATION STATS") : $textetraduit = "STATISTIQUES DU LIEU"; break;
	   case ("CONNECTIONS") : $textetraduit = "CONNEXIONS"; break;
	   case ("From") : $textetraduit = "De"; break;
	   case ("Function") : $textetraduit = "Fonction"; break;
	   case ("to") : $textetraduit = "à"; break;
	   case ("Visit by location") : $textetraduit = "Visites par lieu"; break;
	   case ("Visit") : $textetraduit = "Visites"; break;
	   case ("The connection register allows you to identify the professionals who have connected to your care structure, whether at manager or medical interface level.") : $textetraduit = "Le registre de connexion vous permet d'identifier les professionnels qui se sont connectés à votre structure de soins, que ce soit au niveau gestionnaire ou interface médicale."; break;
	   case ("It also allows you to identify malicious or unwanted logins from accounts that are not part of your care structure.") : $textetraduit = "Il vous permet également d'identifier les connexions malveillantes ou indésirables provenant de comptes ne faisant pas partie de votre structure de soins."; break;
	   
// hbdashboardResume.php
			  
	   case ("A little help on each person's role") : $textetraduit = "Un peu d'aide sur le rôle de chacun"; break;
	   case ("total number of professionals") : $textetraduit = "nombre total de professionnels"; break;
	   case ("status of the structure :") : $textetraduit = "statut de la structure :"; break;
	   case ("structure's page") : $textetraduit = "page de la structure"; break;
	   case ("View your structure's page") : $textetraduit = "consultez la page de votre structure"; break;
	   case ("Link to your structure's page") : $textetraduit = "lien vers la page de votre structure"; break;
	   case ("Quick overview of the manager's role. Click to learn more.") : $textetraduit = "Aperçu rapide du rôle du manager. Cliquez pour en savoir plus."; break;
	   case ("Quick overview of the active user's role. Click to learn more.") : $textetraduit = "Aperçu rapide du rôle d'utilisateur actif. Cliquez pour en savoir plus."; break;
	   case ("Quick overview of the inactive user's role. Click to learn more.") : $textetraduit = "Aperçu rapide du rôle d'utilisateur inactif. Cliquez pour en savoir plus."; break;
			  
			  
// hbdashboardadmisetup.php

		  case ("link") : $textetraduit = "lien"; break;
	   case ("ADMINISTRATOR LOCATION SETUP") : $textetraduit = "GESTIONNAIRE DE PRESENTATION DU LIEU"; break;
	   case ("Add new location") : $textetraduit = "Ajouter un nouveau lieu"; break;
	   case ("Choose 9 photos and 1 logo for your location") : $textetraduit = "Sélection jusqu'à 9 photos et un logo pour votre lieu"; break;
	   case ("Choose day of saved file to restore") : $textetraduit = "Choisir le jour du fichier sauvegardé pour la restauration"; break;
	   case ("CUSTOMIZE YOUR LOCATIONS") : $textetraduit = "PERSONNALISATION"; break;
	   case ("Customize your location") : $textetraduit = "Personnalisation"; break;
	   case ("from external device") : $textetraduit = "depuis un fichier extérieur"; break;
	   case ("from server") : $textetraduit = "depuis le serveur"; break;
	   case ("HOME PAGE PHOTOS") : $textetraduit = "PHOTOS DE LA PAGE PRINCIPALE"; break;
	   case ("Home page photos") : $textetraduit = "Photos de la page principale"; break;
	   case ("Location name, localisation, public description and more") : $textetraduit = "Identification lieu, description publique et restreinte"; break;
	   case ("PAGE DISPLAY SETUP") : $textetraduit = "APPARENCE DE LA PAGE PRINCIPALE"; break;
	   case ("edit homepage") : $textetraduit = "édition de la page d'accueil"; break;
	   case ("Reinitialize database") : $textetraduit = "Reintialiser la base de données"; break;
	   case ("Restore database") : $textetraduit = "Restaurer la base de données"; break;
	   case ("Restoration file must be rename to") : $textetraduit = "Le nom du fichier restaure doit etre"; break;
	   case ("Save database") : $textetraduit = "Sauvegarder la base de données"; break;
	   case ("then copied via ftp to the root") : $textetraduit = "puis copié sous la racine du site"; break;
	   case ("You choose the main color of your location and more") : $textetraduit = "Vous pouvez choisir une couleur de fond, de caractères, et plus encore"; break;
	   case ("Name of the stucture") : $textetraduit = "Nom de la structure"; break;
	   case ("One line description") : $textetraduit = "Description en une ligne"; break;
	   case ("Full description") : $textetraduit = "Description complète"; break;
	   case ("access map") : $textetraduit = "moyens d'accès"; break;
	   case ("clinic logo") : $textetraduit = "logo de la clinique"; break;
	   case ("main color") : $textetraduit = "couleur principale"; break;
	   case ("contact informations") : $textetraduit = "informations de contact"; break;
	   case ("Contact informations") : $textetraduit = "Informations de contact"; break;
	   case ("ADDRESS AND LOCATION") : $textetraduit = "ADRESSE ET LOCALISATION"; break;
	   case ("Address and location") : $textetraduit = "Adresse et localisation"; break;
		  case ("Select a file :") : $textetraduit = "Sélectionner un fichier :"; break;
	   case ("choose the visibility of medical information by clinic professionals (total sharing, administrative, no sharing)") : $textetraduit = "choisissez la visibilité des informations médicale par les professionnels de la clinique (partage total, administrif, pas de partage)"; break;
	   case ("medical sharing") : $textetraduit = "partage médical"; break;
	   case ("MEDICAL OPTIONS") : $textetraduit = "OPTIONS MÉDICALES"; break;
	   case ("commissioning") : $textetraduit = "mise en service"; break;
	   case ("Online publication and visibility of the structure by future patients.") : $textetraduit = "Mise en ligne et visibilité de la structure par les futurs patients."; break;
	   case ("Make sure you have correctly filled in the information associated with your clinic before putting it online.") : $textetraduit = "Assurez-vous d'avoir renseigné  correctement les informations associées à votre clinique avant de la mettre en ligne."; break;
	   case ("offline") : $textetraduit = "hors ligne"; break;
	   case ("The structure is online") : $textetraduit = "La structure est en ligne."; break;
	   case ("The structure is offline") : $textetraduit = "La structure est hors ligne."; break;
	   case ("View your clinic page") : $textetraduit = "Visualisez votre page clinique"; break;
	   case ("View your professional page") : $textetraduit = "Visualisez votre page professionnelle"; break;
	   case ("View professional page") : $textetraduit = "Visualisez la page professionnelle"; break;
	   case ("I am here") : $textetraduit = "Je suis ici"; break;
	   case ("SUMMARY") : $textetraduit = "RÉSUMÉ"; break;
	   case ("Email to the team") : $textetraduit = "Email à l'équipe"; break;
	   case ("Please advise 'how to get there', buses, trains or other means of transport.") : $textetraduit = "Veuillez indiquer 'comment s'y rendre', bus, trains ou autres moyens de transport."; break;
	   case ("You view your professional page as patients see it.") : $textetraduit = "Vous visualisez votre page professionnelle comme les patients la voient."; break;
	   case ("Your patients, when they make an appointment with you, will be able to consult your professional page. Describe your skills as explicitly as possible.") : $textetraduit = "Vos patients, lorsqu'ils prendront rendez-vous avec vous, pourront consulter votre page professionnelle. Décrivez vos compétences aussi explicitement que possible."; break;
 
 
	   
	   
// hbdashboardadmiutilajout.php
	   case ("profile") : $textetraduit = "profil"; break;
	   case ("REGISTER A NEW USER") : $textetraduit = "CREER UN NOUVEL UTILISATEUR"; break;
	   case ("user") : $textetraduit = "utilisateur"; break;
	   case ("Select at least one profile option.") : $textetraduit = "Sélectionnez au moins une option de profil."; break;
	   case ("We invite you to visit www.PIH.com as soon as possible to finalize the creation of your account. In particular, you will be asked to change your password on the first connection.") : $textetraduit = "Nous vous invitons à vous rendre dans les meilleurs délais sur www.PIH.com afin de finaliser la création de votre compte. Il vous sera notamment demandé de modifier votre mot de passe à la première connexion."; break;
	   
	   
// hbdashboardadmiutilmodif.php
	   case ("patient") : $textetraduit = "patient"; break;
	   
// hbdashboardadmiutil.php
	   case ("All users") : $textetraduit = "Tous utilisateurs confondus"; break;
	   case ("active users") : $textetraduit = "utilisateurs actifs"; break;
	   case ("approve this user") : $textetraduit = "autoriser cet utilisateur"; break;
	   case ("approved users") : $textetraduit = "utilisateurs autorisés"; break;

	   case ("Bookmarking users") : $textetraduit = "utilisateurs intéressés par le lieu"; break;
	   case ("change to manager") : $textetraduit = "devenir gestionnaire"; break;
	   case ("inactive users") : $textetraduit = "utilisateurs inactifs"; break;
	   case ("MANAGE YOUR LOCATION USERS") : $textetraduit = "GESTION DES UTILISATEURS DU LIEU"; break;
	   case ("Managers") : $textetraduit = "Gestionnaires"; break;
	   case ("Site Administrator") : $textetraduit = "Gestionnaire du lieu"; break;
	   case ("move to active") : $textetraduit = "Déplacer vers actif"; break;
	   case ("move to inactive") : $textetraduit = "Déplacer vers inactif"; break;
	   case ("Name") : $textetraduit = "Identité"; break;
	   case ("refuse this user") : $textetraduit = "refuser cet utilisateur"; break;
	   case ("remove this user") : $textetraduit = "retirer cet utilisateur"; break;
	   case ("suspend this user") : $textetraduit = "suspendre cet utilisateur"; break;
	   case ("USERS") : $textetraduit = "UTILISATEURS"; break;
	   case ("Users waiting for agreement") : $textetraduit = "Utilisateurs en attente d'autorisation"; break;
	   case ("CHANGE USER DATAS") : $textetraduit = "MODIFIER UN UTILISATEUR"; break;
	   case ("upgrade user") : $textetraduit = "promouvoir l'utilisateur"; break;
	   case ("downgrade user") : $textetraduit = "rétrograder l'utilisateur"; break;
	   case ("remove user") : $textetraduit = "suprimer l'utilisateur"; break;
	   case ("add") : $textetraduit = "ajouter"; break;
	   
// hbdashboardcal.php
	   case ("Active calendars") : $textetraduit = "Calendriers actifs"; break;
	   case ("No active calendar") : $textetraduit = "Pas de calendrier actif"; break;
	   case ("Inactive calendars") : $textetraduit = "Calendriers inactifs"; break;
	   case ("LOCATION CALENDARS") : $textetraduit = "GESTIONNAIRE DE CALENDRIERS DU LIEU"; break;

// hbdashboardutil.php
		
	 	case ("manager role") : $textetraduit = "rôle gestionnaire"; break;		
	 	case ("practitioner role") : $textetraduit = "rôle praticien"; break;		
			  
			  
		case ("Invite Professionals to Your Structure on PIH Medic"): $textetraduit = "Invitez des Professionnels à Votre Structure sur PIH Medic"; break;
		case ("As a manager on PIH Medic, you have the opportunity to invite other health professionals to join your structure. Here's how:"): 
			$textetraduit = "En tant que gestionnaire sur PIH Medic, vous avez la possibilité d'inviter d'autres professionnels de la santé à rejoindre votre structure. Voici comment :"; 
			break;
		case ("Send an invitation: In your management area, you can send an invitation to any professional with an account on PIH Medic."): 
			$textetraduit = "Envoyez une invitation : Dans votre espace de gestion, vous pouvez envoyer une invitation à tout professionnel ayant un compte sur PIH Medic."; 
			break;
		case ("They respond: The invited professional receives your invitation and has the option to accept or refuse it."): 
			$textetraduit = "Ils répondent : Le professionnel invité reçoit votre invitation et a la possibilité de l'accepter ou de la refuser."; 
			break;
		case ("Collaborate: Once the invitation is accepted, the professional joins your structure, facilitating collaboration and care coordination."): 
			$textetraduit = "Collaborez : Une fois l'invitation acceptée, le professionnel rejoint votre structure, facilitant ainsi la collaboration et la coordination des soins."; 
			break;
		case ("Click here to add a professional to your structure"): 
			$textetraduit = "Cliquez ici pour ajouter un professionnel à votre structure"; 
			break;

	 	case ("Manager options") : $textetraduit = "Options du gestionnaire"; break;
		case ("1. Invitation of a professional from the P.I.H MEDIC network to your healthcare structure.") : $textetraduit = "1. Invitation d'un professionnel du réseau P.I.H MEDIC à votre structure de soins."; break;
		case ("By choosing this option, you can invite a healthcare professional, already a member of our platform, to collaborate with your healthcare structure. This offers the professional the flexibility to work in several structures while using a single account. Moreover, it gives you peace of mind that the professional has been previously validated by the PIH platform. Once you have selected the professional from the list of approved members, an invitation is sent from the platform. The professional is then notified by email to log into their account and respond to the invitation.") : $textetraduit = "En choisissant cette option, vous pouvez inviter un professionnel de santé, déjà membre de notre plateforme, à collaborer avec votre structure de soins. Cela offre au professionnel la flexibilité de travailler dans plusieurs structures tout en utilisant un seul compte. De plus, cela vous donne la tranquillité d'esprit que le professionnel a été préalablement validé par la plateforme PIH. Une fois que vous avez sélectionné le professionnel dans la liste des membres agréés, une invitation est envoyée depuis la plateforme. Le professionnel est alors notifié par email pour se connecter à son compte et répondre à l'invitation."; break;
		case ("2. Invitation of a professional to register on the platform and join your clinic.") : $textetraduit = "2. Invitation d'un professionnel à s'inscrire sur la plateforme et à rejoindre votre clinique."; break;
		case ("This option is intended for healthcare professionals who are not yet members of our platform. Registration is a simple and quick process that only takes 5 minutes. Once registered, the professional can search for your healthcare structure among the structures available on the platform and submit a membership request in one click.") : $textetraduit = "Cette option est destinée aux professionnels de santé qui ne sont pas encore membres de notre plateforme. L'inscription est un processus simple et rapide qui ne prend que 5 minutes. Une fois inscrit, le professionnel peut rechercher votre structure de soins parmi les structures disponibles sur la plateforme et soumettre une demande d'adhésion en un seul clic."; break;
			  
	   case ("Are you sure you want to revoke this user?") : $textetraduit = "Êtes-vous sûr de vouloir révoquer cet utilisateur ?"; break;
	   case ("Are you sure you want to revoke this request?") : $textetraduit = "Êtes-vous sûr de vouloir révoquer cette demande ?"; break;

	   case ("Action completed successfully") : $textetraduit = "Action terminée avec succès"; break;
	   case ("An error has occurred") : $textetraduit = "Une erreur est survenue"; break;
			  
	   case ("Your current requests") : $textetraduit = "Vos demandes en cours"; break;
	   case ("Waiting for your acceptance") : $textetraduit = "En attendant votre acceptation"; break;
	   case ("manager") : $textetraduit = "gestionnaire"; break;
	   case ("Overlord") : $textetraduit = "Overlord"; break;
			  
	   case ("auxiliary") : $textetraduit = "auxiliaire"; break;
	   case ("Health professionals") : $textetraduit = "Professionnels de santé"; break;
	   case ("manager") : $textetraduit = "gestionnaire"; break;
	   case ("Overlord") : $textetraduit = "Overlord"; break;
	   case ("practitioner") : $textetraduit = "praticien"; break;
	   case ("paramedical") : $textetraduit = "paramedical"; break;
	   case ("New pro account") : $textetraduit = "Créer un compte pro"; break;
	   case ("Search a professional") : $textetraduit = "Trouver un professionel"; break;
	   case ("Search a professional") : $textetraduit = "Trouver un professionel"; break;
	   case ("Invite") : $textetraduit = "Inviter"; break;
	   case ("Professionals") : $textetraduit = "professionnels"; break;
	   case ("Others") : $textetraduit = "Autres"; break;
	   case ("Active professionals") : $textetraduit = "Professionnels actifs"; break;
	   case ("Inactive professionals") : $textetraduit = "Professionnels inactifs"; break;
	   case ("Former professionals") : $textetraduit = "Anciens professionnels"; break;
	   case ("Demand in progress") : $textetraduit = "Demande en cours"; break;
	   case ("At the initiative of the Structure or the Professional") : $textetraduit = "à l'initiative de la structure ou du professionnel"; break;
	   case ("active calendar") : $textetraduit = "calendrier actif"; break;
	   case ("Awaiting professional response") : $textetraduit = "En attente de réponse du professionnel"; break;
	   case ("Invite a professional to join P.I.H") : $textetraduit = "Inviter un professionnel à rejoindre P.I.H"; break;
	   case ("Enter the email address of the professional you wish to invite to join P.I.H. An email will be sent detailing the instructions for creating a P.I.H.") : $textetraduit = "Renseigner l'email du professionnel que vous souhaitez inviter à rejoindre P.I.H, un email lui sera envoyé détaillant les instructions afin de créer un compte P.I.H."; break;
	   case ("Email of the professional") : $textetraduit = "Email du professionnel"; break;
	   case ("Resend the request") : $textetraduit = "Relancer la demande"; break;
	   case ("Drop the request") : $textetraduit = "Abandonner la demande"; break;
	   case ("Invitation of a healthcare facility") : $textetraduit = "Invitation d'une structure de soins"; break;
	   case ("The care structure manager can manage access rights to the structure. He also configures the healthcare structure's patient web page. Regarding security, he has access to the connection register. He can visualize the statistics of the structure. It manages the subscription to P.I.H MEDIC.") : $textetraduit = "Le responsable de la structure de soins peut gérer les droits d'accès à la structure. Il configure également la page web patients de la structure de soins. Concernant la sécurité, il a accès au registre de connexion. Il peut visualiser les statistiques de la structure. Il gère l'abonnement à P.I.H MEDIC."; break;
	   case ("The care structure manager can manage access rights to the structure. He also configures the healthcare structure web page. Regarding security, he has access to the connection register. He can visualize the statistics of the structure.") : $textetraduit = "Le responsable de la structure de soins peut gérer le personnel de la structure. Il configure également la page web patients de la structure de soins. Concernant la sécurité, il a accès au registre de connexion. Il peut visualiser les statistiques de la structure."; break;
	   case ("To better understand the role of the manager in a structure, watch the following videos :") : $textetraduit = "Pour mieux comprendre le rôle du gestionnaire dans une structure, regardez les vidéos suivantes :"; break;
	   case ("The manager on P.I.H MEDIC") : $textetraduit = "Le gestionnaire sur P.I.H MEDIC"; break;
	   case ("The active user on P.I.H MEDIC") : $textetraduit = "Utilisateur actif sur P.I.H MEDIC"; break;
	   case ("The inactive user on P.I.H MEDIC") : $textetraduit = "Utilisateur inactif sur P.I.H MEDIC"; break;
	   case ("The active user of a care structure is a healthcare professional who can manage a calendar, a patient group and view the statistics of his activity in the associated structure.") : $textetraduit = "L'utilisateur actif d'une structure de soins est un professionnel de santé qui peut gérer un agenda, un groupe de patients et consulter les statistiques de son activité dans la structure associée."; break;
	   case ("The inactive user does not have access to the care structure, whether it is the manager or the medical interface. However, it remains present in the list of users in case access is needed again.") : $textetraduit = "L'utilisateur inactif n'a pas accès à la structure de soins, qu'il s'agisse du gestionnaire ou de l'interface médicale. Cependant, il reste présent dans la liste des utilisateurs au cas où l'accès serait à nouveau nécessaire."; break;
	   case ("To better understand the role of the active user in a structure, watch the following videos :") : $textetraduit = "Pour mieux comprendre le rôle de l'utilisateur actif dans une structure, regardez les vidéos suivantes :"; break;
	   case ("To better understand the role of the inactive user in a structure, watch the following videos :") : $textetraduit = "Pour mieux comprendre le rôle de l'utilisateur inactif dans une structure, regardez les vidéos suivantes :"; break;
	   
//hbdashboardstat.php
	   case ("Number of appointments") : $textetraduit = "Nombre de rendez-vous"; break;
	   case ("Number of medical consultations") : $textetraduit = "Nombre de consultations"; break;
	   case ("core business") : $textetraduit = "activité principale"; break;
	   case ("Practitioner") : $textetraduit = "Praticien"; break;
	   case ("Core business") : $textetraduit = "Activité principale"; break;
	   case ("turnover") : $textetraduit = "chiffre d'affaire"; break;
	   case ("- turnover") : $textetraduit = "chiffre affaire"; break;
	   case ("Practitioner statistics") : $textetraduit = "Statistiques des praticiens"; break;
	   case ("Cancellation rate") : $textetraduit = "Taux d'annulation"; break;
	   case ("Filling rate") : $textetraduit = "Taux de remplissage"; break;
	   case ("Volume of activity") : $textetraduit = "Volume d'activité"; break;
	   case ("cost of P.I.H") : $textetraduit = "coût de P.I.H"; break;
	   case ("Structured turnover") : $textetraduit = "Chiffre d'affaire structure"; break;
	   case ("Turnover by professionals") : $textetraduit = "Chiffre d'affaires par professionnels"; break;
	   case ("Men") : $textetraduit = "Hommes"; break;
	   case ("Women") : $textetraduit = "Femmes"; break;
	   	   
// hbdashboardbilling 

	   case ("Make an appointment with") : $textetraduit = "Prendre rendez-vous avec"; break;
	   case ("in the structure") : $textetraduit = "dans la structure"; break;


	   case ("package details") : $textetraduit = "détails du forfait"; break;
	   case ("subscription and billing") : $textetraduit = "abonnement et facturation"; break;
	   case ("payment information") : $textetraduit = "informations de paiement"; break;
	   case ("add a secondary payment method") : $textetraduit = "ajouter un mode de paiement secondaire"; break;
	   case ("payment information") : $textetraduit = "informations de paiement"; break;
	   case ("billing day") : $textetraduit = "jour de facturation"; break;
	   case ("SECURITY AND PRIVACY") : $textetraduit = "SÉCURITÉ ET CONFIDENTIALITÉ"; break;
	   case ("download your data") : $textetraduit = "télécharger vos données"; break;
	   case ("termination of the P.I.H subscription") : $textetraduit = "résiliation de l'abonnement P.I.H"; break;
	   case ("termination") : $textetraduit = "résiliation"; break;
	   case ("Update a payment method") : $textetraduit = "Mettre à jour un moyen de paiement"; break;
	   case ("The payment method will be the one defined by default") : $textetraduit = "Le moyen de paiement sera celui définit par défaut"; break;
	   case ("Change your subscription, payment method, billing information and billing history") : $textetraduit = "Modifier votre abonnement, moyen de paiement, vos informations de facturation et votre historique de facturation"; break;

// hbdashboardsetup
      case ("Choose a color") : $textetraduit = "Choisir une couleur"; break;
      case ("You can open the color panel by clicking on the appropriate color icon in your interface. Once the panel is open, you will see a selection of colors. You can click on the color you want to use for your structure. This color will make your structure easily identifiable to all users.") : $textetraduit = "Vous pouvez ouvrir le panneau de couleur en cliquant sur l’icône de couleur appropriée dans votre interface. Une fois le panneau ouvert, vous verrez une sélection de couleurs. Vous pouvez cliquer sur la couleur que vous souhaitez utiliser pour votre structure. Cette couleur rendra votre structure facilement identifiable pour tous les utilisateurs."; break;

      case ("Apply the color") : $textetraduit = "Appliquer la couleur"; break;
      case ("After choosing a color, click on the 'Update' button to apply this color to your structure.") : $textetraduit = "Après avoir choisi une couleur, cliquez sur le bouton 'Mettre à jour' pour appliquer cette couleur à votre structure."; break;

		case ("Before participating in the teleconsultation, it is necessary to proceed with the payment. You can make the payment by following the link below:"):
			$textetraduit = "Avant de participer à la téléconsultation, il est nécessaire de procéder au paiement. Vous pouvez effectuer le paiement en suivant le lien ci-dessous :";
			break;
		case ("Click here to make the payment"):
			$textetraduit = "Cliquez ici pour effectuer le paiement";
			break;
			  
		case ("no website") : $textetraduit = "pas de site web"; break;
		case ("Delete the calendar"):
			$textetraduit = "Supprimer le calendrier";
			break;
		// Ajoutez plus de cas au besoin
			  
		case ("Change offer") : $textetraduit = "Changement d'offre"; break;
		case ("If you wish to change your offer, please click on this card.") : $textetraduit = "Si vous souhaitez changer d'offre, veuillez cliquer sur cette carte."; break;
		case ("If you wish to change your offer, please send an email to info@pihmedic.com. Please specify the type of offer (SMS or not) and the number of professionals if it is a care structure offer. We will make the offer change within 48 hours.") : $textetraduit = "Si vous souhaitez changer d'offre, veuillez envoyer un e-mail à info@pihmedic.com. Veuillez préciser le type d'offre (SMS ou non) et le nombre de professionnels s'il s'agit d'une offre de structure de soins. Nous effectuerons le changement d'offre dans les 48 heures."; break;
		case ("Click here to send the email") : $textetraduit = "Cliquez ici pour envoyer l'e-mail"; break;

		case ("Teleconsultation account settings") : $textetraduit = "Paramètres du compte de téléconsultation"; break;
		case ("You are about to set up your account for receiving payments from your teleconsultations. By clicking \"I confirm\", you will be redirected to a secure platform to fill in your associated information.") : $textetraduit = "Vous êtes sur le point de configurer votre compte pour recevoir les paiements de vos téléconsultations. En cliquant sur \"Je confirme\", vous serez redirigé vers une plateforme sécurisée pour remplir vos informations associées."; break;
		case ("Please ensure that all information is correctly filled in before confirming.") : $textetraduit = "Veuillez vous assurer que toutes les informations sont correctement remplies avant de confirmer."; break;
			  
		case ("Teleconsultation account settings") : $textetraduit = "Paramètres du compte de téléconsultation"; break;
		case ("Here, you can set up the account where teleconsultations are billed.") : $textetraduit = "Ici, vous pouvez configurer le compte où les téléconsultations sont facturées."; break;
		case ("Transaction tracking") : $textetraduit = "Suivi des transactions"; break;
		case ("Here, you can track the transactions of your teleconsultations.") : $textetraduit = "Ici, vous pouvez suivre les transactions de vos téléconsultations."; break;
		case ("configured account") : $textetraduit = "compte configuré"; break;
		case ("account not validated yet") : $textetraduit = "compte pas encore validé"; break;
			  
		case ("Some photographs") : $textetraduit = "Quelques photographies"; break;
		case ("Commissioning of the Care Structure") : $textetraduit = "Mise en service de la structure de soins"; break;
		case ("The online publication of your care structure will enhance its visibility to future patients. This is an exciting opportunity to showcase your services.") : $textetraduit = "La publication en ligne de votre structure de soins améliorera sa visibilité auprès des futurs patients. C'est une excellente occasion de mettre en valeur vos services."; break;
		case ("Please ensure that all information associated with your care structure is correctly filled in before proceeding to put it online.") : $textetraduit = "Veuillez vous assurer que toutes les informations associées à votre structure de soins sont correctement remplies avant de procéder à sa mise en ligne."; break;
		case ("Online") : $textetraduit = "En ligne"; break;
		case ("Choosing this option will make your care structure visible to future patients. This can increase your patient base, but also requires that all information is accurate and up-to-date.") : $textetraduit = "Choisir cette option rendra votre structure de soins visible aux futurs patients. Cela peut augmenter votre base de patients, mais nécessite également que toutes les informations soient précises et à jour."; break;
		case ("Offline") : $textetraduit = "Hors ligne"; break;
		case ("Choosing this option will keep your care structure hidden from future patients. This can be useful if you need more time to prepare your information.") : $textetraduit = "Choisir cette option gardera votre structure de soins cachée aux futurs patients. Cela peut être utile si vous avez besoin de plus de temps pour préparer vos informations."; break;

		case ("The care structure is currently online") : $textetraduit = "La structure de soins est actuellement en ligne"; break;
		case ("Your care structure is currently visible to future patients. If you need to update any information, please do so promptly.") : $textetraduit = "Votre structure de soins est actuellement visible pour les futurs patients. Si vous devez mettre à jour des informations, veuillez le faire rapidement."; break;

			  
		case ("Medical Sharing Options") : $textetraduit = "Options de partage médical"; break;
		case ("Please choose the level of visibility of patient records among the professionals in your care structure.") : $textetraduit = "Veuillez choisir le niveau de visibilité des dossiers patients entre les professionnels de votre structure de soins."; break;
		case ("Full Medical Sharing") : $textetraduit = "Partage médical complet"; break;
		case ("Each healthcare professional will have the ability to consult all patient records of the care structure. This promotes better care coordination, but may raise privacy concerns if appropriate protocols are not in place.") : $textetraduit = "Chaque professionnel de santé aura la possibilité de consulter l'ensemble des dossiers patients de la structure de soins. Cela favorise une meilleure coordination des soins, mais peut soulever des questions de confidentialité si des protocoles appropriés ne sont pas en place."; break;
		case ("No Medical Sharing") : $textetraduit = "Aucun partage médical"; break;
		case ("Each healthcare professional will only be able to consult their own patient records. This ensures maximum privacy, but may limit care coordination among professionals.") : $textetraduit = "Chaque professionnel de santé ne pourra consulter que les dossiers patients qui lui sont propres. Cela garantit une confidentialité maximale, mais peut limiter la coordination des soins entre les professionnels."; break;
		case ("Update") : $textetraduit = "Mettre à jour"; break;
		case ("Go back") : $textetraduit = "Retour"; break;

		  case ("Choose the visibility of medical information by structural professionals") : $textetraduit = "Choisissez la visibilité des informations médicales par les professionnels de structure"; break;
		case ("Tariffs on P.I.H MEDIC") : $textetraduit = "Tarifs sur P.I.H MEDIC"; break;
		case ("Quick overview of our pricing. Click to learn more.") : $textetraduit = "Aperçu rapide de nos tarifs. Cliquez pour en savoir plus."; break;
		case ("New features on P.I.H MEDIC") : $textetraduit = "Nouvelles fonctionnalités sur P.I.H MEDIC"; break;
		case ("Quick overview of the new features. Click to learn more.") : $textetraduit = "Aperçu rapide des nouvelles fonctionnalités. Cliquez pour en savoir plus."; break;

	   case ("Please indicate your opening hours and the days of the week") : $textetraduit = "Indiquez vos horaires d'ouverture et les jours de la semaine"; break;
	   case ("Address and contacts") : $textetraduit = "Adresse et contacts"; break;
	   case ("About Us") : $textetraduit = "À propos de nous"; break;
	   case ("Our organization") : $textetraduit = "Notre organisation"; break;		  
	   case ("Our medical team") : $textetraduit = "Notre équipe médicale"; break;
	   case ("Our management team") : $textetraduit = "Notre équipe de direction"; break;
			  
	   case ("You can add up to 9 photos to illustrate your web page. These images can help visually represent your structure and give users an overview of your work environment. They can also be used to highlight the services you offer or to present your team. To add photos, please click below. You can then download the images of your choice.") : $textetraduit = "Vous avez la possibilité d’ajouter jusqu’à 9 photos pour illustrer votre page web. Ces images peuvent aider à représenter visuellement votre structure et à donner aux utilisateurs un aperçu de votre environnement de travail. Elles peuvent également servir à mettre en valeur les services que vous proposez ou à présenter votre équipe. Pour ajouter des photos, veuillez cliquez ci-dessous. Vous pouvez ensuite télécharger les images de votre choix."; break; 
			  
	   case ("As a manager, you can assign a specific color to your structure. This color will make your structure easily identifiable for all users.This color will be used at several times when using the platform, notably in the practitioners' diary and when drafting care procedures. This will allow rapid and efficient identification of your structure.") : $textetraduit = "En tant que manager, vous pouvez attribuer une couleur spécifique à votre structure. Cette couleur rendra votre structure facilement identifiable par tous les utilisateurs. Cette couleur sera utilisée à plusieurs reprises lors de l'utilisation de la plateforme, notamment dans l'agenda des praticiens et lors de la rédaction des procédures de soins. Cela permettra une identification rapide et efficace de votre structure."; break; 
	   case ("Please enter the logo of your healthcare structure.") : $textetraduit = "Veuillez renseigner le logo de votre structure de soins. "; break; 
	   case ("What is the Connection Registry ?") : $textetraduit = "Qu'est-ce que le registre de connexion ?"; break; 
	   case ("security") : $textetraduit = "sécurité"; break; 
	   case ("Your care structure is not yet in service. Once this is the case, you will be able to manage your subscriptions and contracts.") : $textetraduit = "Votre structure de soin n'est pas encore en service. Une fois que ce sera le cas, vous pourrez gérer vos abonnement et contrats. "; break; 
	   case ("connection register") : $textetraduit = "registre des connexions"; break; 
	   case ("Follow the connections of your professionals to your structure and ensure data security.") : $textetraduit = "Suivez les connexion de vos professionnels à votre structure et veillez à la sécurité des données."; break; 
	   case ("Choose the visibility of patient records between the professionals in your care structure.") : $textetraduit = "Choisissez la visibilité des dossiers patients entre les professionnels de votre structure de soins."; break; 
	   case ("medical sharing") : $textetraduit = "partage médical"; break; 
	   case ("no medical sharing") : $textetraduit = "pas de partage médical"; break;
	   case ("Update my position on the map") : $textetraduit = "Actualiser ma position sur la carte"; break;
	   case ("PAGE EDIT") : $textetraduit = "page d'accueil"; break;
	   case ("home") : $textetraduit = "accueil"; break;
	   case ("Fill in the information relating to your care structure as well as the composition of your staff before putting it into service.") : $textetraduit = "Renseignez les informations relative à votre structure de soin ainsi que la composition de votre personnel avant de la mettre en service. "; break;
	   case ("Search for a professional in P.I.H and invite him to join your structure.") : $textetraduit = "Recherchez un professionnel en P.I.H et invitez-le à rejoindre votre structure."; break;
	   case ("Street number and name") : $textetraduit = "Numéro et nom de la voie"; break; 
	   case ("city") : $textetraduit = "ville"; break;
	   case ("each professional will be able to consult the patient files of the care structure.") : $textetraduit = "chaque professionnel pourra consulter les dossiers patients de la structure de soins."; break;
	   case ("each professional will only consult their patient files.") : $textetraduit = "chaque professionnel consultera uniquement ses dossiers patient."; break;

// hbhelp.php

	   case ("We advise you personally and answer all your questions.") : $textetraduit = "Nous vous conseillons personnellement et répondons à toutes vos questions."; break;
	   case ("Assistance") : $textetraduit = "Assistance"; break;

// hbindexfooter.php
	   case ("Partners area") : $textetraduit = "Espace partenaires"; break;
	   case ("Legal mention") : $textetraduit = "Mentions Légales"; break;
	   case ("Take appointment") : $textetraduit = "Prendre RDV"; break;

// hbindex.php
	   case ("discover our offers") : $textetraduit = "découvrir nos offres"; break;
	   case ("Discover our national directory of health professionals !") : $textetraduit = "Découvrez notre annuaire national des professionnels de santé !"; break;
	   case ("care structure") : $textetraduit = "structure de soins"; break;
	   case ("Company name") : $textetraduit = "Nom de l'entreprise"; break;
	   case ("Consult our directory") : $textetraduit = "Consultez notre annuaire"; break;
	   case ("You can download our privacy policy here :") : $textetraduit = "Vous pouvez télécharger notre politique de confidentialité ici :"; break;
	   case ("download") : $textetraduit = "télécharger"; break;
	   case ("P.I.H MEDIC is a platform for making medical appointments for patients and above all an appointment management and consultation tool for healthcare structures.") : $textetraduit = "P.I.H MEDIC est une plateforme de prise de rendez-vous médicaux pour les patients et surtout un outils de gestion de rendez-vous et de consultation pour les structures de soins."; break;
	   case ("Who am I ?") : $textetraduit = "Qui suis-je ?"; break;
	   case ("WORKPLACES") : $textetraduit = "STRUCTURES DE TRAVAIL"; break;
	   case ("Find a professional or healthcare center") : $textetraduit = "Trouver un professionnel ou un centre de soins"; break;
	   case ("Field of activity") : $textetraduit = "Domaine d'activité"; break;
	   case ("APPOINTMENT") : $textetraduit = "RENDEZ-VOUS"; break;
	   case ("Are you a") : $textetraduit = "Etes-vous un"; break;
	   case ("BEST LOCAL RECOMMENDATIONS") : $textetraduit = "RECOMMANDATIONS LOCALES"; break;
	   case ("care center"): $textetraduit = "centre de soins";break;
	   case ("Contact us"): $textetraduit = "Contactez-nous";break;
	   case ("CONVERSATIONS"): $textetraduit = "CONVERSATIONS";break;
       case ("Discover P.I.H for you") :$textetraduit = "Decouvrez P.I.H pour vous";break;  
       case ("Do not hesitate.") :$textetraduit = "N'hésitez pas.";break;  
	   case ("Find a care center" ) :$textetraduit = "Trouver un centre de soins";break;  
	   case ("Find a practitioner or healthcare facility"): $textetraduit = "Trouver un praticien ou un centre de soins";break; 
	   case ("Find the history of your consultations and your prescriptions on your secured space."): $textetraduit = "Retrouvez l'historique de vos consultations et de vos prescriptions sur votre espace sécurisé.";break; 
	   case ("FOR THE PATIENTS"): $textetraduit = "POUR LES PATIENTS";break;  
	   case ("healthcare professional"): $textetraduit = "Professionnel de soins";break;  
	   case ("Jusk ask."): $textetraduit = "Demandez.";break;  
	   case ("LOCAL RISKS INFORMATIONS"): $textetraduit = "INFORMATIONS SUR LES RISQUES LOCAUX";break;  
	   case ("Make an appointment"): $textetraduit = "Prendre un rendez-vous";break;  
	   case ("Make an appointment with P.I.H"): $textetraduit = "Prendre un rendez-vous avec P.I.H";break;  
	   case ("Make appointments with health professionals. Choose email or sms reminders. Have a view of your past and future appointments."): $textetraduit = "Prenez des rendez-vous avec des professionnels de santé. Choisissez des rappels mail ou sms. Ayez un visu sur vos rendez-vous passés et àvenir.";break;
	   case ("manager"): $textetraduit = "gestionnaire";break;  
	   case ("Medical prevention through information on the risks near the clinic and how to manage them.") : $textetraduit = "Prévention médicale par l'information sur les risques à proximité de la clinique et comment les gérer.";break;    
	   case ("Meet our care centers now") : $textetraduit = "Voir nos centres de soins";break;    
	   case ("Meet our care centers now") : $textetraduit = "Voir nos centres de soins";break;
	   case ("Need help ?"):$textetraduit = "Besoin d'aide ?";break; 
	   case ("Need to connect to a"):$textetraduit = "Besoin de";break;    
	   case ("or a"):$textetraduit = "ou un";break; 
	   case ("OUR STORY"):$textetraduit = "NOTRE HISTOIRE";break;    
	   case ("Our story"):$textetraduit = "Notre histoire";break;    
 	   case ("Participation in patient community discussions through our blogs."): $textetraduit = "Participation aux discussions de la communauté des patients à travers nos blogs.";break; 
	   case ("For the patient"):$textetraduit = "Pour le patient";break;    
 	   case ("PERSONAL MEDICAL SPACE"):$textetraduit = "ESPACE MEDICAL PERSONNEL";break; 
	   case ("Recommendations from skilled professionals nearby. Comments and ratings of references by users."):$textetraduit = "Recommandations de professionnels compétents à proximité. Commentaires et notations des références par les patients de la communauté.";break; 
 	   case ("right place"):$textetraduit = "bon endroit";break;   
 	   case ("Start now"):$textetraduit = "Allons-y";break;   
 	   case ("Social"):$textetraduit = "Social";break;   
 	   case ("This is the"):$textetraduit = "C'est le bon";break;    
	   case ("Where"):$textetraduit = "Localisation" ;break;  
	   case ("Cookie management"):$textetraduit = "Gestion des cookies" ;break;  
	   case ("Privacy Policy"):$textetraduit = "Politique de confidentialité" ;break;  
	   case ("Why does P.I.H MEDIC not use cookies ?"):$textetraduit = "Pourquoi P.I.H MEDIC n'utilise-t-il pas de cookies ?" ;break;  
	   case ("When creating our site, we asked ourselves the question of the relevance of the use of cookies in our case. We do not present any advertising and we are committed to the most ethical practice possible in the processing of personal data."):$textetraduit = "Lors de la création de notre site, nous nous sommes posés la question de la pertinence de l'utilisation des cookies dans notre cas. Nous ne présentons aucune publicité et nous nous engageons à une pratique la plus éthique possible dans le traitement des données personnelles." ;break;  

	   case ("You are a"):$textetraduit = "Vous etes un" ;break; 
	   case ("Find a healthcare professional"):$textetraduit = "Trouver un professionnel de santé" ;break;  
	   case ("healthcare structures"):$textetraduit = "structures de soins" ;break; 
	   case ("Watch the videos"):$textetraduit = "Visionnez les vidéos" ;break; 
	   
//hbindexhelp.php
	   case ("With P.I.H-MED, you can make medical appointments in health care facilities near you. Create an account simply and quickly."):$textetraduit = "Avec P.I.H-MED, vous pouvez prendre des rendez-vous médicaux dans les structures de soins près de chez vous. Créez un compte simplement et rapidement." ;break; 
	   case ("Create a patient account on P.I.H-MED"):$textetraduit = "Creéz un compte patient avec P.I.H-MED" ;break; 
	   case ("For Patients"):$textetraduit = "Pour les patients" ;break;  
	   case ("Add relatives") : $textetraduit = "Ajoutez des proches"; break;
	   case ("You can make an appointment for your family members or people for whom you are responsible. Nothing is simpler.") : $textetraduit = "Vous pouvez prendre rendez-vous pour les membres de votre famille ou les personnes dont vous êtes responsable. Rien de plus simple."; break;
	   case ("Nothing is easier than making an appointment with P.I.H-MED. Watch the video and start your first date.") : $textetraduit = "Rien n'est plus simple que la prise de rendez-vous avec P.I.H-MED. Visionnez la vidéo et premier votre premier rendez-vous."; break;
	   case ("Select the appointments that suit you and that match your criteria using the search filters.") : $textetraduit = "Sélectionnez les rendez-vous qui vous conviennent et qui correspondent à vos critères à l'aide des filtres de recherche."; break;
	   case ("Use search filters") : $textetraduit = "Utilisez les filtres de recherche"; break;
	   case ("View your upcoming and past appointments") : $textetraduit = "Consultez vos rendez-vous à venir ou passés"; break;
	   case ("Quickly navigate between your upcoming or past appointments. See the details of these appointments.") : $textetraduit = "Naviguez rapidement entre vos rendez-vous à venir ou passés. Consultez les détails de ces rendez-vous."; break;
	   case ("Select the appointments that suit you and that match your criteria using the search filters.") : $textetraduit = "Sélectionnez les rendez-vous qui vous conviennent et qui correspondent à vos critères à l'aide des filtres de recherche."; break;
	   case ("When you have no other options, learn how to cancel a medical appointment you made with P.I.H-MED.") : $textetraduit = "Lorsque vous n'avez plus d'autres possibilités, apprenez comment annuler un rendez-vous médical que vous avez prit avec P.I.H-MED."; break;
	   case ("Watch how to check your personal information such as your address or your password.") : $textetraduit = "Visionnez comment consultez vos informations personnelles telles que votre adresse ou votre mot de passe."; break;
	   case ("Modify your personal information") : $textetraduit = "Modifiez vos informations personnelles"; break;
	   case ("Upcoming appointments and past appointments") : $textetraduit = "Rendez-vous à venir et rendez-vous passés"; break;
	   case ("watch the help videos and master P.I.H MED in the blink of an eye."):$textetraduit = "regardez les vidéos d'aide et maîtrisez P.I.H MED en un clin d'œil." ;break;  
	   case ("Watch videos"):$textetraduit = "Regarder les vidéos" ;break;  
	   
//hbhaut.php
	   case ("professional"):$textetraduit = "professionnel" ;break;  
	   case ("Manager"):$textetraduit = "Gestionnaire" ;break;  
	   case ("Caregiver"):$textetraduit = "Soignant" ;break;  
	   case ("My account"):$textetraduit = "Mon compte" ;break;  
	   
//hblieuajout.php
	   case ("Clinic, consulting room"):$textetraduit = "Clinique, cabinet de consultation" ;break;  
	   case ('How your location will appear'):$textetraduit = "Comment votre lieu apparaitra" ;break;  
//hb lieucolorchange.php
	   case ("confidential"):$textetraduit = "confidentiel" ;break;  
	   case ("Display"):$textetraduit = "Affichage" ;break;  
	   case ("MAIN PAGE"):$textetraduit = "PAGE PRINCIPALE" ;break;  
	   case ("Nothing"):$textetraduit = "Rien" ;break;  
	   case ("Display"):$textetraduit = "Affichage" ;break;  
	   case ("Display on pages of type"):$textetraduit = "Affichage sur les pages de type " ;break;  

	   case ("page setup"):$textetraduit = " des pages : configuration" ;break;  
	   case ("public"):$textetraduit = "public" ;break;  
	   case ("restricted"):$textetraduit = "restreint" ;break;  
	   case ("Slideshow"):$textetraduit = "Diaporama" ;break;
	     
//hblieulistelogin.php
	   case ("This practitioner does not make appointments on our platform. However, you can contact him by telephone."):$textetraduit = "Ce praticien ne prend pas de rendez-vous sur notre plateforme. Vous pouvez toutefois le contacter par téléphone." ;break; 
	   case ("Search"):$textetraduit = "Rechercher" ;break; 
	   case ("no availability"):$textetraduit = "pas de disponibilités" ;break; 
	   case ("previous days"):$textetraduit = "jours précedents" ;break; 
	   case ("following days"):$textetraduit = "jours suivants" ;break; 
	   case ("Log in as a patient to make an appointment or access your account."):$textetraduit = "Connectez-vous en tant que patient pour prendre rendez-vous ou accéder à votre compte." ;break;  
	   
	   case ("Find a practitioner or healthcare facility"):$textetraduit = "Trouver un praticien ou un établissement de santé" ;break;  
	   case ("Adress, country"):$textetraduit = "Adresse, pays" ;break;  
	   case ("More filters"):$textetraduit = "Plus de filtres" ;break;
	   case ("filters"):$textetraduit = "filtres" ;break; 
	   case ("not available"):$textetraduit = "non disponible" ;break; 
	   case ("Around me"):$textetraduit = "Atour de moi" ;break; 
	   case ("Apply filters"):$textetraduit = "Appliquer les filtres" ;break; 
	   case ("Modify my search"):$textetraduit = "Modifier ma recherche" ;break; 
	   case ("languages spoken by the practitioner :"):$textetraduit = "Langues parlées par le praticien :" ;break; 
	   case ("Unavailable"):$textetraduit = "Indisponible" ;break; 
	   case ("results found"):$textetraduit = "résultats trouvés" ;break; 
	   case ("Search around me"):$textetraduit = "Autour de moi" ;break; 
	   case ("results"):$textetraduit = "résultats" ;break; 
	   case ("(see the profil)"):$textetraduit = "(voir le profil)" ;break; 
	   case ("No result"):$textetraduit = "Pas de résultat" ;break; 
	   case ("Edit or remove some of your filters or adjust your search area."):$textetraduit = "Modifiez ou supprimez certains de vos filtres ou ajustez votre zone de recherche." ;break; 
	   case ("See less"):$textetraduit = "Voir moins" ;break; 
	   case ("No medical appointment available soon"):$textetraduit = "Pas de rendez-vous médical disponible prochainement" ;break; 
	   case ("Next availability on"):$textetraduit = "Prochaine disponibilité le" ;break; 
	   case ("No online appointment"):$textetraduit = "Pas de rendez-vous en ligne" ;break; 
	   case ("Search by moving the map"):$textetraduit = "Rechercher en déplaçant la carte" ;break; 
	   case ("Search this aera"):$textetraduit = "Rechercher dans cette zone" ;break;
	   case ("Time of the day"):$textetraduit = "Moment de la journée" ;break;
	   case ("Clear"):$textetraduit = "Effacer tout" ;break; 
	   case ("Early morning"):$textetraduit = "Tôt le matin" ;break; 
	   case ("Starts before 10 am"):$textetraduit = "Consultation avant 10H" ;break; 
	   case ("Morning"):$textetraduit = "Matin" ;break; 
	   case ("Starts before 12 pm"):$textetraduit = "Consultation avant 12H" ;break; 
	   case ("Afternoon"):$textetraduit = "Après-midi" ;break; 
	   case ("Starts after 12 pm"):$textetraduit = "Consultation après 12H" ;break; 
	   case ("Evening"):$textetraduit = "Soirée" ;break;
	   case ("Starts after 5 pm"):$textetraduit = "Consultation après 17H" ;break; 
	   case ("not defined"):$textetraduit = "non défini" ;break;
	   case ("Please select your reason for consultation in the list below to view the reservation slots."):$textetraduit = "Veuillez sélectionner votre motif de consultation dans la liste ci-dessous afin de visualiser les créneaux de réservation." ;break;   
	   case ("modify the reason for consultation"):$textetraduit = "modifier le motif de consultation" ;break;
	   
//hblieumodif.php
       case ("CHANGE LOCATION DATAS"):$textetraduit = "MODIFIER LES INFORMATIONS DU LIEU" ;break;   
	   case ("Confidential : to managers"):$textetraduit = "Confidentiel : gestionnaires" ;break;  
	   case ("Creation date"):$textetraduit = "Date de création" ;break;  
	   case ("Description"):$textetraduit = "Description" ;break;  
	   case ("For all"):$textetraduit = "Pour tous" ;break;  
	   case ("INFORMATIONS ON MAIN PAGES"):$textetraduit = "INFORMATIONS SUR LES PAGESPRINCIPALES" ;break;  
	   case ("Location id"):$textetraduit = "Identification du lieu" ;break;  
	   case ("MAIN INFORMATIONS"):$textetraduit = "INFORMATIONS PRINCIPALES" ;break;  
	   case ("Main informations"):$textetraduit = "Informations principales" ;break;  
	   case ("Map will be ok only if location datas are given"):$textetraduit = "La carte sera affichée si des coordonnées sont renseignées" ;break;  
	   case ("Other contact"):$textetraduit = "Autre moyen de contact" ;break;  
	   case ("Please check  datas /  map"):$textetraduit = "SVP, verifier données de la carte" ;break;  
	   case ("Specify the means of access: Road, Bus, Train, Metro, etc."):$textetraduit = "Précisez les moyens d'accès : Route, Bus, Train, Métro, etc." ;break;  
	   case ("Parking lot"):$textetraduit = "Parking" ;break; 
	   case ("If necessary, indicate the car parks nearby or the means of parking on site - Example: Parking possible nearby, on site, etc."):$textetraduit = "Si nécessaire, indiquez les parkings à proximité ou les moyens de stationnement sur place - Exemple : Stationnement possible à proximité, sur place, etc." ;break; 
	   case ("Please indicate if there is parking available for patients."):$textetraduit = "Veuillez indiquer s'il y a un stationnement disponible pour les patients." ;break;  
	   case ("Restricted : to users"):$textetraduit = "Restreint : utilisateurs" ;break;  
	   case ("You are about to change datas of your main page"):$textetraduit = "Vous êtes sur le point de modifier les données de votre page principale" ;break;  
//hblieuphoto.php
	   case ("Photos management"):$textetraduit = "Gestion des photos" ;break;  
	   case ("Photo texte"):$textetraduit = "Légende de la photo" ;break;
	   
	     
//hblogin.php
			  
	   case ("The ID is a unique name that you choose when creating your account. It can be your name, a pseudonym, or any other term that identifies you. This identifier will be used to log in to your account on our platform. It is important to remember it and not share it with others to protect access to your account.") : $textetraduit = "L’identifiant est un nom unique que vous choisissez lors de la création de votre compte. Il peut être votre nom,un pseudonyme, ou tout autre terme qui vous identifie. Cet identifiant sera utilisé pour vous connecter à votre compte sur notre plateforme. Il est important de le retenir et de ne pas le partager avec d’autres pour protéger l’accès à votre compte."; break;
	   case ("New user ?") : $textetraduit = "Nouvel utilisateur ?"; break;
	   case ("Sign in to your patient account") : $textetraduit = "Connectez-vous à votre compte patient"; break;
	   case ("Sign in to your professional account") : $textetraduit = "Connectez-vous à votre compte professionnel"; break;
	   case ("Login to your account") : $textetraduit = "Connectez-vous à votre compte"; break;
	   case ("Forget your password ?") : $textetraduit = "Mot de passe oublié ?"; break;
	   case ("Forget your password") : $textetraduit = "Mot de passe oublié"; break;
	   case ("ID recovery") : $textetraduit = "récupération d'identifiant"; break;
	   case ("Go back") : $textetraduit = "Retour"; break;
	   case ("Login") : $textetraduit = "Identifiant"; break;
	   case ("No account ? Register.") : $textetraduit = "Pas de compte ? Cliquer pour en creer un"; break;
       case ('Password') : $textetraduit = "Mot de passe"; break;
	   case ("NEW ACCOUNT") : $textetraduit = "NOUVEAU COMPTE"; break;
	   case ("Create a pro account") : $textetraduit = "Créer un compte pro"; break;
	   case ("CREATE A PRO ACCOUNT") : $textetraduit = "CRÉER UN COMPTE PRO"; break;
	   case ("Discover P.I.H pro") : $textetraduit = "Découvrez P.I.H pro"; break;
	   case ("professional connection") : $textetraduit = "connexion professionnelle"; break;
	   case ("patient login") : $textetraduit = "connexion patient"; break;
	   case ("MY PROFESSIONAL ACCOUNT") : $textetraduit = "MON COMPTE PROFESSIONNEL"; break;
	   case ("MY PATIENT ACCOUNT") : $textetraduit = "MON COMPTE PATIENT"; break;
	   case ("From 1 to 40 professionals") : $textetraduit = "De 1 à 40 professionnels"; break;
	   case ("We have redirected you to the appropriate login for your P.I.H account. You can now connect.") : $textetraduit = "Nous vous avons redirigé vers le login approprié pour votre compte P.I.H. Vous pouvez maintenant vous connecter."; break;
	   case ("You have been redirected to the correct page.") : $textetraduit = "Vous avez été redirigé vers la bonne page."; break;
	   case ("If you do not have a P.I.H professional account, create one for free by clicking on the link below.") : $textetraduit = "Si vous n'avez pas de compte professionnel P.I.H, créez-en un gratuitement en cliquant sur le lien ci-dessous."; break;
	   case ("When you have forgotten your password, simply go to the login interface and click on -forgotten password ?-. All you need to do is enter your unique identifier. A new temporary password will be emailed to your account email address.") : $textetraduit = "Lorsque vous avez oublié votre mot de passe, il vous suffit de vous diriger vers l'interface de connexion et de cliquer sur -mot de passe oublié ?-. Il vous suffira de renseigner votre identifiant unique. Un nouveau mot de passe temporaire vous sera envoyé par mail à l'adresse email de votre compte."; break;
       case ('If you forgot your login. Just contact us and let us know your problem. We will get back to you quickly.') : $textetraduit = "Si vous avez oublié votre identifiant unique. Il vous suffit de nous contacter et de nous communiquer votre problème. Nous reviendrons vers vous rapidement."; break;
	   case ("Forgot login") : $textetraduit = "Identifiant oublié"; break;
	   
//hbmedcalplage.php
	   case ("Hello, the following appointment has been canceled:") : $textetraduit = "Bonjour, le rendez-vous suivant a été annulé :"; break;
	   case ("Do not hesitate to log in to your patient area to make a new appointment.") : $textetraduit = "N'hésitez pas à vous connecter à votre espace patient pour prendre un nouveau rendez-vous."; break;
			  
			  
	   case ("The range will end on the date indicated and will not be renewed.") : $textetraduit = "La plage se terminera à la date indiqué et ne sera pas reconduite."; break;
	   case ("calendar settings") : $textetraduit = "paramètres du calendrier"; break;
	   case ("Name and surname of replacement") : $textetraduit = "Nom et prénom du remplaçant"; break;
	   case ("Notify a replacement") : $textetraduit = "Notifier un remplacement"; break;

	   case ("Please select the credit account") : $textetraduit = "Veuillez sélectionner le compte créditeur"; break;
	   case ("Please enter the amount of your teleconsultation") : $textetraduit = "Veuillez saisir le montant de votre téléconsultation"; break;
	   case ("practitioner account") : $textetraduit = "compte praticien"; break;
	   case ("structure account") : $textetraduit = "compte de la structure"; break;
	   case ("Send the teleconsultation and payment link") : $textetraduit = "Envoyer le lien de téléconsultation et de paiement"; break;
			  
	   case ("Edit booking slot profile") : $textetraduit = "Modifier le profil de créneau de réservation"; break;
	   case ("Change booking slot availability") : $textetraduit = "Modifier la disponibilité du créneau de réservation"; break;
	   case ("Notify the patient that this will be a replacement") : $textetraduit = "Informer le patient qu'il s'agira d'un remplaçant"; break;
			  
	   case ("If you wish to cancel the appointment, select the reason:") : $textetraduit = "Si vous souhaitez annuler le rendez-vous, sélectionnez le motif :"; break;
	   case ("Reservation slots") : $textetraduit = "Créneaux de Réservation"; break;
	   case ("Dear practitioner, to configure your online booking calendar, please create a time slot by filling in the necessary information such as start and end date, consultation days and time. Make sure to associate a reason with each time slot for optimal reservation management. You can also set the appointment duration, consultation mode, automatic reconstruction of the range and the main color of the range.") : $textetraduit = "Cher praticien, pour configurer votre calendrier de réservation en ligne, merci de créer une plage horaire en renseignant les informations nécessaires telles que la date de début et de fin, les jours et l'heure de la consultation. Assurez-vous d'associer un motif à chaque créneau horaire pour une gestion optimale des réservations. Vous pouvez également paramétrer la durée du rendez-vous, le mode de consultation, la reconstruction automatique de la plage et la couleur principale de la plage."; break;	
	   case ("confirm the creation of the time slot") : $textetraduit = "confirmer la création de la plage horaire"; break;
	   case ("edit / modify") : $textetraduit = "éditer / modifier"; break;
	   case ("Save") : $textetraduit = "Modifier"; break;
	   case ("Duration (minutes)") : $textetraduit = "durée (minutes)"; break;
	   case ("From.  ➡️ to.") : $textetraduit = "heure de début.  ➡️ heure de fin."; break;
	   case ("Change date and time") : $textetraduit = "Modifier la date et l'heure"; break;
	   case ("Legends") : $textetraduit = "légendes"; break;
	   case ("Correction over a period of time") : $textetraduit = "Correction sur une période de temps"; break;
	   case ("start a consultation") : $textetraduit = "commencer la consultation"; break;
	   case ("Permanently delete the reservation slot") : $textetraduit = "Supprimer définitivement le créneau de réservation"; break;
	   case ("Are you sure you want to delete the reservation slot?") : $textetraduit = "Êtes-vous sûr de vouloir supprimer le créneau de réservation ?"; break;
	   case ("The reservation slot has been removed.") : $textetraduit = "Le créneau de réservation a été supprimé."; break;
	   case ("The reservation slot has not been deleted.") : $textetraduit = "Le créneau de réservation n'a pas été supprimé."; break;
			  
	   case ("Please select a patient") : $textetraduit = "Veuillez sélectionner un patient"; break;
	   case ("Dear practitioner,"):
        $textetraduit = "Cher praticien,";break;
       case ("Before confirming your report, we invite you to verify the following information:"): $textetraduit = "Avant de confirmer votre rapport, nous vous invitons à vérifier les informations suivantes :"; break;
       case ("Ensure all patient information is correct and up to date. Make sure the diagnosis and treatment plan are clearly stated."): $textetraduit = "Assurez-vous que toutes les informations du patient sont correctes et à jour. Assurez-vous que le diagnostic et le plan de traitement sont clairement indiqués.";break;
       case ("Search for a patient by first or last name") : $textetraduit = "Rechercher un patient par son nom ou prénom"; break;
	   case ("arrange a replacement") : $textetraduit = "organiser un remplacement"; break;
	   case ("day") : $textetraduit = "journée"; break;
	   case ("You have not created a calendar yet. Get started by clicking the link below.") : $textetraduit = "Vous n'avez pas encore crée de calendrier. Commencez en cliquant sur le lien ci-dessous."; break;
	   case ("leave") : $textetraduit = "congé"; break;
	   case ("busy") : $textetraduit = "occupé"; break;
	   case ("Today") : $textetraduit = "Aujourd'hui"; break;
	   case ("replacements") : $textetraduit = "remplacements"; break;
	
       case ("confirmation") : $textetraduit = "confirmation"; break;
   
	   case ("No recurrence") : $textetraduit = "Pas de recurrence"; break;
	   case ("Every week") : $textetraduit = "Toutes les semaines"; break;
	   case ("Every two weeks") : $textetraduit = "Toutes les deux semaines"; break;
	   case ("Every three weeks") : $textetraduit = "Toultes les trois semaines"; break;
	   case ("Once a month") : $textetraduit = "Une fois par mois"; break;
	   case ("Start date") : $textetraduit = "Date de début"; break;
	   case ("End date") : $textetraduit = "Date de fin"; break;
	   case ("I will be replaced by another practitioner for this reservation slot.") : $textetraduit = "Je serai remplacé par un autre praticien pour ce créneau de réservation."; break;
	   case ("The patient will be notified.") : $textetraduit = "Le patient sera prévenu."; break;
	   case ("I will be replaced") : $textetraduit = "Je serai remplacé"; break;
	   case ("I will not be replaced") : $textetraduit = "Je ne serai pas remplacé"; break;
	   case ("Substitute") : $textetraduit = "Remplaçant"; break;
	   case ("manage my unavailability") : $textetraduit = "gérer mes indisponibilités"; break;
	   case ("manage my replacements") : $textetraduit = "gérer mes remplaçements"; break;
	   case ("reservation slots will become unavailable.") : $textetraduit = "créneaux de réservation deviendront indisponibles."; break;
	   case ("reservation slots will become available.") : $textetraduit = "créneaux de réservation deviendront disponibles."; break;
	   
	   case ("range less than a week") : $textetraduit = "plage inférieur à une semaine"; break;
	 
	   case ("manage my unavailability for a given period") : $textetraduit = "gérer mes disponibilités pour une période donnée"; break;
	   case ("manage my replacements for a given period") : $textetraduit = "gérer mes remplaçements pour une période donnée"; break;
	   case ("export my appointments for a given period") : $textetraduit = "exporter mes rendez-vous pour une période donnée"; break;
	   case ("modify appointment profiles (e.g. visit, office consultation) for a given period") : $textetraduit = "modifier des profils de rendez-vous (par exemple visite, consultation au cabinet) pour une période donnée"; break;

	   case ("start a consultation with") : $textetraduit = "débuter une consultation avec"; break;
	   case ("consult the patient file") : $textetraduit = "consulter le dossier patient"; break;
	   case ("modify the reservation slot (cancellation, type, replacement)") : $textetraduit = "modifier le créneau de réservation (annulation, type, remplacement)"; break;

	   case ("WHAT DO YOU WANT TO DO ?") : $textetraduit = "QUE VOULEZ-VOUS FAIRE ?"; break;
   
	   case ("new patient") : $textetraduit = "nouveau patient"; break;
	   case ("Assign changes to reservation slots managed by a replacement.") : $textetraduit = "Attribuez des modifications aux créneaux de réservation gérés par un remplaçant."; break;

	   case ("with replacement") : $textetraduit = "avec remplaçant"; break;
	   case ("Select an option or go back.") : $textetraduit = "Sélectionnez une option ou revenez en arrière."; break;

	   case ("export of appointments") : $textetraduit = "exportation des rendez-vous"; break;
	   case ("Reservation periods") : $textetraduit = "Périodes de réservation"; break;
	   case ("Make an appointment for a patient") : $textetraduit = "Prendre rendez-vous pour un patient"; break;
		  
	   case ("move an appointment") : $textetraduit = "déplacer un rendez-vous"; break;
	   case ("Next week") : $textetraduit = "Semaine prochaine"; break;
	   case ("Select a reservation slot for the patient.") : $textetraduit = "Sélectionnez un créneau de réservation pour le patient."; break;
	   case ("Select a reservation slot.") : $textetraduit = "Sélectionnez un créneau de réservation."; break;
	   case ("selected day") : $textetraduit = "jour selectionné"; break;
	   case ("Do you confirm the appointment ?") : $textetraduit = "Confirmez-vous le rendez-vous ?"; break;
	   case ("Please check the dates and times indicated.") : $textetraduit = "Veuillez vérifier les dates et horaires indiquées."; break;
	   case ("Once the time slot is in service, your patients will be able to reserve slots there. Do you confirm commissioning ?") : $textetraduit = "Une fois la plage en service, vos patients pourront y réserver des créneaux. Confirmez-vous la mise en service ?"; break;
	   case ("reservation slots will become assigned to a replacement.") : $textetraduit = "créneaux de réservation seront attribués à un remplaçant."; break;
	   case ("replacement") : $textetraduit = "remplaçement"; break;
	   case ("reservation slots will no longer be allocated to a replacement.") : $textetraduit = "créneaux de réservation ne seront plus attribués à un remplaçant."; break;
	   
	   
//hbmedajoutpatient.php
       case ("Address") : $textetraduit = "Adresse"; break;
       case ("ADDRESS & CONTACT") : $textetraduit = "ADRESSE ET CONTACT"; break;
       case ("City") : $textetraduit = "Commune"; break;
       case ("Country") : $textetraduit = "Pays"; break;
       case ("Date of birth") : $textetraduit = "Date de naissance"; break;
       case ("Familly name") : $textetraduit = "Nom"; break;
       case ("Given name") : $textetraduit = "Prénom"; break;
	   case ("Medical informations to provide to consultant") : $textetraduit = "Informations medicales communiquees au praticien"; break;
       case ("Phone") : $textetraduit = "Téléphone."; break;
       case ("Post code") : $textetraduit = "Code postal"; break;
       case ("Provisional login") : $textetraduit = "Identifiant provisoire"; break;
       case ("Provisional password") : $textetraduit = "Mot de passe provisoire"; break;
       case ("MAIN INFORMATIONS") : $textetraduit = "INFORMATIONS PRINCIPALES"; break;
	   case ("Other way to contact / family / trusted support people") : $textetraduit = "Autre moyen de contact / famille / personne de confiance"; break;
	   case ("REGISTER A NEW PATIENT") : $textetraduit = "ENREGISTRER UN NOUVEAU PATIENT"; break;
	   case ("The username or password is not correct. If you have forgotten your password, you can reset it at any time.") : $textetraduit = "Le nom d'utilisateur ou le mot de passe n'est pas correct. Si vous avez oublié votre mot de passe, vous pouvez le réinitialiser à tout moment."; break;
       case ("New patient accepted :") : $textetraduit = "Nouveau patient accepté :"; break;
       case ("new patient accepted") : $textetraduit = "nouveau patient accepté"; break;
       case ("vigilance") : $textetraduit = "vigilance"; break;
			  
	   //hbmedajoutpatient.php

			  
       case ("new act of care ") : $textetraduit = "nouvel acte de soin "; break;
       case ("The patient's history requires acute vigilance on the part of healthcare providers and those around them. History will be highlighted.") : $textetraduit = "L'histoire du patient nécessite une vigilance aiguë de la part des prestataires de soins et de leur entourage. Les antécédents seront mit en surbrillance."; break;
       case ("Current prescription") : $textetraduit = "Ordonnance en cours"; break;
       case ("Current care plan") : $textetraduit = "Plan de soins en cours"; break;
       case ("Add/edit prescription") : $textetraduit = "Ajouter/modifier l'ordonnance"; break;
       case ("Add/edit prescription the current prescription") : $textetraduit = "Ajouter/modifier l'ordonnance en cours"; break;
       case ("Add/edit the current care plan") : $textetraduit = "Ajouter/modifier le plan de soins"; break;
	   case ("New Calendar") : $textetraduit = "Nouveau calendrier"; break;
       case ("MY CALENDARS") : $textetraduit = "MES CALENDRIERS"; break;
       case ("y.o.") : $textetraduit = " ans"; break;
       case ("Welcome to you !") : $textetraduit = "Bienvenue à vous !"; break;
       case ("Your login is : ") : $textetraduit = "Votre identifiant est : "; break;
       case ("Your password is : ") : $textetraduit = "Votre mot de passe est : "; break;
       case ("With this account, you can book and manage your medical appointments.") : $textetraduit = "Avec ce compte, vous pouvez réserver et gérer vos rendez-vous médicaux."; break;
       case ("A P.I.H patient account has just been created by") : $textetraduit = "Un compte patient P.I.H vient d'être créé par"; break;
       case ("Add the prescription to the patient's current care plan") : $textetraduit = "Ajouter la prescription au plan de soins en cours du patient"; break;

//hbmedficheacte.php
			  
	 
	  case ("Administrative Act (Z028)") : $textetraduit = "Acte administratif (Z028)"; break;
	  case ("The password has been successfully reset.") : $textetraduit = "Le mot de passe a été réinitialisé avec succès."; break;
	  case ("An error occurred while resetting the password.") : $textetraduit = "Une erreur s\'est produite lors de la réinitialisation du mot de passe."; break;

	  case ("Edit Attachment") : $textetraduit = "Modifier la pièce jointe"; break;
	  case ("Change the name and type of the selected attachment below.") : $textetraduit = "Changez le nom et le type de la pièce jointe sélectionnée ci-dessous."; break;
	  case ("Attachment Name") : $textetraduit = "Nom de la pièce jointe"; break;
	  case ("Attachment Type") : $textetraduit = "Type de pièce jointe"; break;       case ("Administrative Act (Z028)") : $textetraduit = "Examen médical et prise de contact à des fins administratives (Z02)"; break;
       case ("Act of care") : $textetraduit = "Acte de soins"; break;
	   case ("Add / change attachment") : $textetraduit = "Ajouter ou modifier une pièce-jointe"; break;
       case ("attachment") : $textetraduit = "pièce-jointe"; break;
       case ("ADDRESS & CONTACTS") : $textetraduit = "ADRESSE ET CONTACTS"; break;
       case ("Bill") : $textetraduit = "Honoraires"; break;
	   case ("MEDICAL ACT") : $textetraduit = "ACTE MEDICAL"; break;
	   case ("Medical team") : $textetraduit = "Equipe médicale"; break;
	   case ("MODIFY") : $textetraduit = "MODIFIER"; break;
	   case ("PRESCRIPTION") : $textetraduit = "PRESCRIPTION"; break;
       case ("PAST MEDICAL HISTORY") : $textetraduit = "ANTÉCÉDENTS"; break;
       case ("past medical history") : $textetraduit = "antécédents"; break;
	   case ("Report") : $textetraduit = "Compte-rendu"; break;
       case ("TO PATIENT DATAS") : $textetraduit = "DOSSIER PATIENT"; break;
       case ("next appointment") : $textetraduit = "prochain rendez-vous"; break;
       case ("Next appointment") : $textetraduit = "Rendez-vous"; break;
	   case ("home") : $textetraduit = "domicile"; break;
	   case ("Search / filter a city") : $textetraduit = "Rechercher / filtrer une ville"; break;
	   case ("type of transportation") : $textetraduit = "type de transport"; break;
	   case ("destination") : $textetraduit = "destination"; break;
	   case ("starting point") : $textetraduit = "point de départ"; break;
	   case ("SETTLEMENT") : $textetraduit = "RÉGLEMENT"; break;
	   case ("settlement") : $textetraduit = "réglement"; break;
	   case ("Helicopter") : $textetraduit = "Hélicoptère"; break;
	   case ("Paramedical transport") : $textetraduit = "Transport paramédical"; break;
	   case ("Died no reanimation") : $textetraduit = "Décédé sans réanimation"; break;
	   case ("Died with reanimation") : $textetraduit = "Décédé malgré réanimation"; break;
	   case ("Left at home") : $textetraduit = "Laissé à la maison"; break;
	   case ("Other") : $textetraduit = "Autre"; break;
	   case ("thesaurus") : $textetraduit = "thésaurus"; break;
	   case ("Emergency") : $textetraduit = "Urgence"; break;
	   case ("Medical transportation") : $textetraduit = "Transport médical"; break;
	   
	   case ("debit card") : $textetraduit = "carte bancaire"; break;
	   case ("cheque") : $textetraduit = "chèque"; break;
	   case ("cash") : $textetraduit = "espèces"; break;
	   case ("bank transfer") : $textetraduit = "Virement bancaire"; break;
	   case ("direct debit") : $textetraduit = "prélèvement automatique"; break;
	   
	   case ("payment") : $textetraduit = "Réglement"; break;
	   case ("diagnostic") : $textetraduit = "diagnostic"; break;
	  
	   case ("start of medical examination") : $textetraduit = "début de l'examen médical"; break;
	   case ("end of medical examination") : $textetraduit = "fin de l'examen médical"; break;

	   case ("Next appointment") : $textetraduit = "Prochain rendez-vous"; break;
	   case ("You can save image or .pdf file.") : $textetraduit = "Vous pouvez enregistrer une image ou un fichier pdf."; break;
	   
//medcalform.php
			  
			  
	   case ("you must have at least one time slot defined to create a new appointment") : $textetraduit = "vous devez avoir au moins une plage horaire définie pour créer un nouveau rendez-vous"; break;
	   case ("The following appointment has been cancelled :") : $textetraduit = "Le rendez-vous suivant a été annulé :"; break;
	   case ("You can once again make an appointment on P.I.H Medic from your phone or pc.") : $textetraduit = "Vous pouvez à nouveau prendre rendez-vous sur P.I.H Medic depuis votre téléphone ou votre pc."; break;
	   
	   case ("Recurrence of this meeting") : $textetraduit = "Récurrence du rendez-vous"; break;
	   case ("This meeting is recurring") : $textetraduit = "Ce rendez-vous est récurrent"; break;
	   case ("For the next") : $textetraduit = "Pour les"; break;
	   case ("This range ends on") : $textetraduit = "Cette plage se termine le"; break;
	   case ("slots.") : $textetraduit = "prochains créneaux."; break;
	   case ("weeks)") : $textetraduit = "semaines)"; break;
	   case ("weeks.") : $textetraduit = "prochaine semaines"; break;
	   case ("What time slot would you like to extend ?") : $textetraduit = "Quelle plage horaire souhaitez-vous prolonger ?"; break;
//hbmedficheactemodif.php
		
	   case ("Add the prescription to the patient's current care plan") : $textetraduit = "Ajouter la prescription au plan de de soins du patient"; break;
       case ("CALL LOCATION") : $textetraduit = "LOCALISATION PATIENT"; break;
       case ('Code act') : $textetraduit = "Codification de l'acte de soins"; break;
       case ('City, country') : $textetraduit = "Ville, pays"; break;
       case ('Currency, means of payment') : $textetraduit = "Monnaie, moyen de paiement (cheque, CB, espèces)"; break;
       case ('MEANS OF PAYMENT') : $textetraduit = "MOYENS DE PAIEMENT"; break;
       case ('Means of payment') : $textetraduit = "Moyens de paiement"; break;
	   case ("DATE & TIME") : $textetraduit = "DATE ET HORAIRE"; break;
       case ('Doctor') : $textetraduit = "Médecin"; break;
       case ("DESTINATION") : $textetraduit = "DESTINATION"; break;
       case ("MEDICAL TEAM") : $textetraduit = "Equipe médicale"; break;
       case ('Not medicalized transport, helicopter, other') : $textetraduit = "Transport non médicalisé, helicoptère, etc."; break;
       case ("Nurse") : $textetraduit = "Infirmier(e)"; break;
       case ('Prescription / information to patient') : $textetraduit = "Prescrition / ordonnance / information patient"; break;
       case ('Search / filter a city') : $textetraduit = "Rechercher une ville"; break;
       case ('Search / filter an hospital') : $textetraduit = "Rechercher un hopital"; break;
       case ('Street name') : $textetraduit = "Adresse"; break;
       case ("Paramedic") : $textetraduit = "Paramedical"; break;
       case ('Price') : $textetraduit = "Prix des honoraires"; break;
       case ("TRANSPORT") : $textetraduit = "TRANSPORT"; break;
       case ('Write a filter...') : $textetraduit = "Ecrire un filtre..."; break;
       case ('Write a report here.') : $textetraduit = "Ecrire le compte-rendu ici."; break;
       case ("professional") : $textetraduit = "professionnel"; break;
	   
//hbmedicheactephoto.php
       case ("Add / change") : $textetraduit = "Ajouter ou modifier"; break;
       case ('delete') : $textetraduit = "supprimer"; break;
       case ("MEDICAL ACT - ADD / CHANGE ATTACHMENT") : $textetraduit = "ACTE MEDICAL - AJOUT / MODIFICATION DE LA PIECE JOINTE"; break;
       case ("to act") : $textetraduit = "retour vers acte médical"; break;
       case ("to patient") : $textetraduit = "retour vers la fiche patient"; break;
       case ("Image size too large or incorrect image file.") : $textetraduit = "Taille trop grande ou fichier incorrect."; break;
	
//hbmedicheactephoto.php
       case ("Print the care plan") : $textetraduit = "Imprimer le plan de soins"; break;
	   
//hbmedfichepatient.php
       case ("visualize") : $textetraduit = "visualiser"; break;			  
       case ("Add an appointment") : $textetraduit = "Ajouter un rendez-vous"; break;
       case ("Has your patient misplaced their login information? No worries. Simply click here to send them their credentials securely by email. This way, they will be able to access their account again and benefit from your online services.") : $textetraduit = "Votre patient a-t-il égaré ses informations de connexion ? Pas de soucis. Cliquez simplement ici pour leur envoyer leurs identifiants en toute sécurité par email. Ils pourront ainsi à nouveau accéder à leur compte et bénéficier de vos services en ligne."; break;       
       case ("Resend access codes") : $textetraduit = "Renvoyer les codes d'accès"; break;       
	   case ("start a teleconsultation") : $textetraduit = "démarrer une téléconsultation"; break;
	   case ("ADD MEDICAL ACT") : $textetraduit = "AJOUTER UN ACTE MEDICAL"; break;
       case ("Add medical act") : $textetraduit = "Ajouter un acte médical"; break;
       case ("if necessary, change this before going to add/modify an act") : $textetraduit = "si nécessaire, changer avant action sur acte"; break;
       case ("CHANGE PATIENT DATAS") : $textetraduit = "MODIFIER LES INFORMATIONS DU PATIENT"; break;
       case ("ADMINISTRATIVES INFORMATIONS") : $textetraduit = "INFORMATIONS ADMINISTRATIVES"; break;
       case ("Administratives informations") : $textetraduit = "Informations administratives"; break;
	   case ("Referring doctor") : $textetraduit = "Médecin référent"; break;
       case ("Contact person | Trusted person") : $textetraduit = "Personne de contact | Personne de confiance"; break;
       case ("Social security number") : $textetraduit = "Numéro de sécurité sociale"; break;
       case ("Insurance company") : $textetraduit = "Mutuelle"; break;
	   	   
//hbmedlisteactes.php
			  
	   case ("active calendar") : $textetraduit = "calendrier actif"; break;
	   case ("the reservation was successfully canceled.") : $textetraduit = "la réservation a été annulée avec succès"; break;
	   case ("View more documents") : $textetraduit = "Voir plus de documents"; break;
	   case ("file name") : $textetraduit = "nom du fichier"; break;
	   case ("the item was added to the patient's prescription") : $textetraduit = "l\'élément a été ajouté à la prescription du patient"; break;
	   case ("patient's home") : $textetraduit = "domicile du patient"; break;
	   case ("1 attachment") : $textetraduit = "1 pièce-jointe"; break;
	   case ("full") : $textetraduit = "rédigé"; break;
	   case ("type of care act") : $textetraduit = "type d'acte de soins"; break;
	   case ("Date and time") : $textetraduit = "Date et heure"; break;
	   case ("Patient journey") : $textetraduit = "Trajet du patient"; break;
	   case ("Attachment") : $textetraduit = "Pièce-jointe"; break;
	   case ("Delete file") : $textetraduit = "Supprimer le fichier"; break;
	   case ("letter from a colleague, blood test, examination result...") : $textetraduit = "lettre d'un collègue, prise de sang, résultat d'examen..."; break;
	   case ("attachment name") : $textetraduit = "nom de la pièce-jointe"; break;
	   case ("The file size is too large.") : $textetraduit = "La taille du fichier est trop grande."; break;
		case ("The file type is not allowed.") : $textetraduit = "Le type de fichier n\'est pas autorisé."; break;
	   case ("type of attachment") : $textetraduit = "type de pièce-jointe"; break;
	   case ("Technical act") : $textetraduit = "Acte technique"; break;
	   case ("technical act") : $textetraduit = "acte technique"; break;
	   case ("Add a second technical act") : $textetraduit = "Ajouter un second acte technique"; break;
	   case ("no pain") : $textetraduit = "absence de douleur"; break;
	   case ("pain identified") : $textetraduit = "douleur identifiée"; break;
	   case ("Please indicate on the attached diagram the precise location of the pain felt by the patient, in the event that the patient experiences any discomfort.") : $textetraduit = "Veuillez indiquer sur le schéma ci-joint la localisation précise de la douleur ressentie par le patient, dans le cas où celui-ci ressentirait une quelconque gêne."; break;

	   case ("medicinal specialty") : $textetraduit = "spécialité médicinale"; break;
	   case ("medicinal form") : $textetraduit = "forme médicinale"; break;
		
	   case ("location of patient's pain") : $textetraduit = "Localisation de la douleur"; break;
			  
			  
	   case ("Acts recorded in medical file") : $textetraduit = "Actes enregistres sur le fichier"; break;
	   case ("in the office") : $textetraduit = "au cabinet"; break;
	   case ("All") : $textetraduit = "Tous"; break;
	   case ("dob") : $textetraduit = "né(e) le"; break;
	   case ("Gender") : $textetraduit = "Genre"; break;
	   case ("MEDICAL ACTS") : $textetraduit = "ACTES MEDICAUX"; break;
	   case ("Medical acts") : $textetraduit = "Actes médicaux"; break;
	   case ("Identity") : $textetraduit = "Identité"; break;
	   case ("Consultation period") : $textetraduit = "Période de consultation"; break;
	   case ("Type of medical act") : $textetraduit = "Type d'acte médical"; break;
	   case ("REPORT") : $textetraduit = "COMPTE RENDU"; break;
	   case ("report") : $textetraduit = "compte rendu"; break;
	   case ("medical prescription") : $textetraduit = "prescription médicale"; break;	 
	   case ("Select an attachment to add to your medical act.") : $textetraduit = "Sélectionner une pièce jointe à ajouter à votre acte médical."; break;
	   case ("No attachment") : $textetraduit = "Pas de pièce jointe"; break;
	   case ("no attachment yet") : $textetraduit = "pas de pièce jointe"; break;
	   
	   case ("consultation history") : $textetraduit = "historique des consultations"; break;
	   case ("Patient file selected") : $textetraduit = "Dossier patient selectionné"; break;
	   case ("New medical act") : $textetraduit = "Nouvel acte médical"; break;
	   case ("Select one of your patients from the list and start a medical consultation.") : $textetraduit = "Selectionnez un de vos patients dans la liste et débuter une consultation médicale."; break;
	   case ("Filter consultations by date. If you are looking for a consultation in a time interval, go to -more filter-.") : $textetraduit = "Filtrez les consultation par une date. Si vous recherchez une consultation dans un intervale de temps, allez sur -plus de filtre-."; break;
	   case ("FILTER BY DATE") : $textetraduit = "FILTRE PAR DATE"; break;
	   
//hbmedlistepatients.php
	   case ("The attachment was successfully modified.") : $textetraduit = "La pièce jointe a été modifiée avec succès."; break;
	   case ("An error occurred while editing the attachment.") : $textetraduit = "Une erreur s\'est produite lors de la modification de la pièce jointe."; break;

	   case ("CREATE A NEW PATIENT") : $textetraduit = "CREER UN NOUVEAU PATIENT"; break;
	   case ("Enabled patients to be added to your medical datas") : $textetraduit = "Patients pouvant être ajoutés à votre fichier médical"; break;
	   case ("medical acts") : $textetraduit = "actes médicaux pratiqués"; break;
	   case ("Patients recorded in your medical file") : $textetraduit = "Patients enregistrés dans votre fichier médical"; break;
	   case ("PATIENTS LIST") : $textetraduit = "LISTE DES PATIENTS"; break;
	   case ("Help with prescription") : $textetraduit = "Aide à la prescription"; break;
	   case ("Search for a drug") : $textetraduit = "Rechercher un médicament"; break;
	   case ("Year of birth") : $textetraduit = "Annee de naissance"; break;
	   case ("speciality") : $textetraduit = "spécialité"; break;
	   case ("composition") : $textetraduit = "composition"; break;
	   case ("Search for a speciality") : $textetraduit = "Rechercher une spécialité"; break;
	   case ("Search for a composition") : $textetraduit = "Rechercher une composition"; break;
	   case ("my patients") : $textetraduit = "mes patients"; break;	
	   case ("shared folders") : $textetraduit = "dossier partagés"; break;	   
	   case ("identified shared patients") : $textetraduit = "patients partagés recensés"; break;	   
	   case ("Surname or first name") : $textetraduit = "Nom ou prénom"; break;	   
	   case ("category of pathology") : $textetraduit = "catégorie de la pathologie"; break;	   
	   case ("ICD-10 pathology") : $textetraduit = "pathologie CIM-10"; break;	 
	   case ("Type of medical act") : $textetraduit = "Type d'acte médical"; break;	   
	   case ("Technical act carried out") : $textetraduit = "Acte technique réalisé"; break;	   
	   case ("Resuscitation performed") : $textetraduit = "Acte de réanimation réalisé"; break;
	   case ("filtered") : $textetraduit = "filtrés"; break;	

	   case ("Export the list of your patients in csv format") : $textetraduit = "Exportez la liste de vos patients au format csv"; break;
	   case ("Export the list of your acts in csv format") : $textetraduit = "Exportez la liste de vos actes au format csv"; break;
	   case ("Data export") : $textetraduit = "Exportation de données"; break;
	   
	   case ("Consultation") : $textetraduit = "Consultation"; break;	
	   case ("Emergency : primary") : $textetraduit = "Urgence : primaire"; break;	
	   case ("Emergency : secondaire") : $textetraduit = "Emergency : secondaire"; break;	
	   case ("Hospitalization") : $textetraduit = "Hospitalisation"; break;	
	   case ("Other medical act") : $textetraduit = "Autre acte médical"; break;	
	   case ("Prescriptation") : $textetraduit = "Autre acte médical"; break;	
	   case ("departure, start and end of exam, arrival time") : $textetraduit = "départ, début et fin d'examen, heure d'arrivé"; break;	
	   case ("Exercice place") : $textetraduit = "Lieu d'exercice"; break;	
	   case ("consultation with appointment") : $textetraduit = "consultation sur rendez-vous"; break;	
	   case ("consultation without appointment") : $textetraduit = "consultation sans rendez-vous"; break;	
	   case ("More results") : $textetraduit = "Plus de résultats"; break;	
	   case ("Filter by patient name") : $textetraduit = "Filtrer par le nom de patient"; break;	
	   case ("Add medical history") : $textetraduit = "Ajouter des antécédents médicaux"; break;	
	   case ("Add medical history") : $textetraduit = "Ajouter des antécédents médicaux"; break;
	   case ("Write any medical history below to add.") : $textetraduit = "Ecrivez ci-dessous des antécedents médicaux à ajouter."; break;
	   	
//hbmedpatientmodif.php
	   case ("New login ?") : $textetraduit = "Identifiant modifié ?"; break;

//hbmedpatientmodif.php
	   case ("Schedule") : $textetraduit = "Agenda"; break;
	   case ("statistics") : $textetraduit = "Statistiques"; break;
	   case ("Editing patient data") : $textetraduit = "Modification des données patient"; break;
//hbmenuPRO.php
			  
	   case ('Dear user,') : $textetraduit = "Cher utilisateur,"; break;
	   case ('Congratulations for completing your personal and professional information on our P.I.H platform. You are now ready to take the next step.') : $textetraduit = "Félicitations pour avoir complété vos informations personnelles et professionnelles sur notre plateforme P.I.H. Vous êtes maintenant prêt à franchir la prochaine étape."; break;
	   case ("If you want to open your own healthcare structure, you can do so directly on our platform. You will need to define the main elements of your structure, such as the structure's activity, staff and location. Once you have this information, you can start practicing.") : $textetraduit = "Si vous souhaitez créer votre propre structure de soins, vous pouvez le faire directement sur notre plateforme. Vous devrez définir les éléments principaux de votre structure, tels que l'activité de la structure, le personnel et la localisation. Une fois ces informations fournies, vous pouvez commencer à pratiquer."; break;
	   case ('To open your healthcare structure on P.I.H, click here.') : $textetraduit = "Pour créer votre structure de soins dans P.I.H, cliquez ici."; break;
	   case ('Alternatively, if you prefer to join an existing care facility, you can search for suitable facilities on P.I.H. Once you have found a structure that suits you, you can apply for membership. Once your request is accepted, you can start practicing within this structure.') : $textetraduit = "Alternativement, si vous préférez rejoindre une structure de soins existante, vous pouvez rechercher des structures appropriées sur P.I.H. Après avoir trouvé une structure qui vous convient, vous pouvez effectuer une demande d'adhésion. Une fois votre demande acceptée, vous pourrez commencer à pratiquer au sein de cette structure."; break;
	   case ('To join an existing healthcare structure on P.I.H, click here.') : $textetraduit = "Pour rejoindre une structure de soins existante dans P.I.H, cliquez ici."; break;
	   case ('We are thrilled to have you with us and look forward to watching you grow professionally on P.I.H.') : $textetraduit = "Nous sommes ravis de vous compter parmi nous et avons hâte de vous voir évoluer professionnellement sur P.I.H."; break;
	   case ('Sincerely,') : $textetraduit = "Cordialement,"; break;
	   case ('The P.I.H team') : $textetraduit = "L'équipe P.I.H"; break;
			  
	   case ('Incomplete site web') : $textetraduit = "site web incomplet"; break;
	   case ('incomplete') : $textetraduit = "incomplet"; break;
	   case ('acts of care') : $textetraduit = "actes de soins"; break;
	   case ('Click to copy') : $textetraduit = "Cliquez pour copier"; break;
	   case ('Pick up where I left off') : $textetraduit = "Ma dernière connexion"; break;
	   case ('Open a clinic') : $textetraduit = "Créer une structure"; break;
	   case ('Open a care structure') : $textetraduit = "Créer une structure de soins"; break;
	   case ('OPEN A CARE STRUCTURE') : $textetraduit = "Créer une structure de soins"; break;

	   case ('Quickly and intuitively, discover how to do it !') : $textetraduit = "Rapidement et intuitivement, découvrez comment faire."; break;
	   
	   case ('Online software') : $textetraduit = "Logiciel en ligne"; break;
	   case ('with P.I.H MEDIC') : $textetraduit = "avec P.I.H MEDIC"; break;
	   case ('6 simple and intuitive steps') : $textetraduit = "6 étapes simples et intuitives "; break;
	   
	   case ('Open a clinical account on our platform and welcome patients') : $textetraduit = "Ouvrez un compte clinique sur notre plateforme et accueillez des patients"; break;
	   case ('Complete your personal and professional informations') : $textetraduit = "Complétez vos renseignements personnels et professionnels"; break;
	   case ('Join a clinic') : $textetraduit = "Rejoindre une structure"; break;
	   case ('New !') : $textetraduit = "Nouveau !"; break;
	   case ('New') : $textetraduit = "Nouveau"; break;
	   case ('P.I.H HOMEPAGE') : $textetraduit = "ACCUEIL P.I.H"; break;
	   case ('P.I.H MEDIC HOMEPAGE') : $textetraduit = "ACCUEIL P.I.H MEDIC"; break;
	   case ('Home page Pro') : $textetraduit = "Page d'accueil Pro"; break;
	   case ('Consultation') : $textetraduit = "Consultation"; break;
	   case ('Ready to practice ?') : $textetraduit = "Prêt à pratiquer ?"; break;
	   case ('Secretariat') : $textetraduit = "Secrétariat"; break;
	   case ('Select the structure you want to manage') : $textetraduit = "Sélectionnez la structure que vous voulez gérer"; break;
	   case ('You have received a request to join a clinic. Click here to process it.') : $textetraduit = "Vous avez reçu une demande pour rejoindre une clinique. Cliquez ici pour la traiter."; break;
	   case ('Consult the clinics on P.I.H and make a connection request') : $textetraduit = "Consultez les cliniques sur P.I.H et envoyez une demande de connexion"; break;
	   case ('Before continuing, please complete your professional information as a medical profession by clicking here or on your account.') : $textetraduit = "Avant de continuer, merci de compléter vos informations professionnelles en tant que profession médicale en cliquant ici ou sur votre compte. "; break;
	   case ('Before continuing, please complete your professional information as a medical profession by clicking here.') : $textetraduit = "Avant de continuer, merci de compléter vos informations professionnelles en tant que profession médicale en cliquant ici."; break;
	   case ('You are currently not in contact with any PIH care structure. Create your own or join one by clicking on the options below.') : $textetraduit = "Vous n'êtes pour l'instant en relation avec aucune structure de soin PIH. Créer la votre ou rejoignez en une en cliquant sur les options ci-dessous. "; break;
	   case ('Congratulation !') : $textetraduit = "Félicitations !"; break;
	   case ('When you decide to open a clinic on P.I.H, you must then complete essential information and personalize the page for your patients. Also, you need to welcome your first professionals. Once these elements are done, you can put the clinic into service. This will then be visible to your patients.') : $textetraduit = "Lorsque vous décidez d'ouvrir une clinique sur P.I.H, il vous faut alors compléter des informations indispensables et personnaliser la page pour vos patients. Aussi, il vous faut accueillir vos premiers professionnels. Une fois ces éléments fait, vous pouvez mettre en service la clinique. Celle-ci sera alors visible par vos patients. "; break;
	   case ('Commissioning of the clinic') : $textetraduit = "Mettre en service la structure"; break;
	   case ('Start using PIH !') : $textetraduit = "Utiliser PIH maintenant !"; break;
	   case ('Email confirmation') : $textetraduit = "Confirmation e-mail"; break;
	   case ('You are a manager') : $textetraduit = "Vous êtes un manager"; break;
	   case ('You are professional.') : $textetraduit = "Vous êtes un professionnel."; break;
	   case ('Open or join a clinic') : $textetraduit = "Ouvrir ou rejoindre une structure"; break;
	   case ('Welcoming practitioners') : $textetraduit = "Accueillir des praticiens"; break;
	   case ('Opening or joining a care structure will allow you to carry out your activities as a manager or practitioner.') : $textetraduit = "Ouvrir ou rejoindre une structure de soin vous permettra de mener vos activités de gestionnaire ou praticien."; break;
	   case ('My management structure') : $textetraduit = "Ma structure en gestion"; break;
	   case ('Professional informations') : $textetraduit = "Informations professionnelles"; break;
	   case ('in one line') : $textetraduit = "en une ligne"; break;
	   case ('Before continuing, please complete your professional information as a medical profession :') : $textetraduit = "Avant de poursuivre, veuillez compléter vos informations professionnelles en tant que profession médicale :"; break;
	   case ('Profession and precisions') : $textetraduit = "profession et précisions"; break;
	   case ('Discover our solution for healthcare structures and your healthcare professionals. Manage appointments and medical consultations.') : $textetraduit = "Découvrez notre solution pour les structures de soins et vos professionnels de santé. Gérez la prise de rendez-vous et les consultations médicales."; break;


		case("Acupuncturist"):$textetraduit="Acupuncteur";break;
		case("Allergist"):$textetraduit="Allergologue";break;
		case("Ambulance / Light medical vehicle"):$textetraduit="Ambulance / Véhicule sanitaire léger";break;
		case("Anatomo-Cyto-Pathologist"):$textetraduit="Anatomo-Cyto-Pathologiste";break;
		case("Anesthesiologist"):$textetraduit="Anesthésiste réanimateur";break;
		case("Angiologist"):$textetraduit="Angiologue";break;
		case("Cancer specialists"):$textetraduit="Cancérologues";break;
		case("Cardiologist"):$textetraduit="Cardiologue";break;
		case("General surgeon"):$textetraduit="Chirurgien général";break;
		case("Pediatric surgeon"):$textetraduit="Chirurgien infantile";break;
		case("Maxillofacial surgeon"):$textetraduit="Chirurgien maxillo-facial";break;
		case("Maxillofacial surgeon and stomatologist"):$textetraduit="Chirurgien maxillo-facial et stomatologiste";break;
		case("Oral surgeon"):$textetraduit="	Chirurgien oral	";break;
		case("Orthopedic surgeon and traumatologist"):$textetraduit="Chirurgien orthopédiste et traumatologue";break;
		case("Plastic surgeon"):$textetraduit="Chirurgien plasticien";break;
		case("Thoracic and cardiovascular surgeon"):$textetraduit="Chirurgien thoracique et cardio-vasculaire";break;
		case("Urologist surgeon"):$textetraduit="Chirurgien urologue";break;
		case("Vascular surgeon"):$textetraduit="Chirurgien vasculaire	";break;
		case("Visceral surgeon"):$textetraduit="Chirurgien viscéral	";break;
		case("Orthodontist specialist in dento-facial orthopedics"):$textetraduit="Chirurgien-dentiste spécialiste en orthopédie dento-faciale";break;
		case("Dentists"):$textetraduit="Chirurgien-dentiste";break;
		case("Dentist"):$textetraduit="Chirurgien-dentiste";break;
		case("Dermatologist and venereologist"):$textetraduit="Dermatologue et vénérologue";break;
		case("Ultrasound specialist"):$textetraduit="Echographiste";break;
		case("Endocrinologist-diabetologist"):$textetraduit="Endocrinologue-diabétologue";break;
		case("Supplier of medical and para-medical equipment"):$textetraduit="Fournisseur de matériel médical et para-médical";break;
		case("Gastroenterologist and hepatologist"):$textetraduit="Gastro-entérologue et hépatologue";break;
		case("Geriatrician"):$textetraduit="Gériatre";break;
		case("Gynecologist / Obstetrician"):$textetraduit="Gynécologue / Obstétricien";break;
		case("Hematologist"):$textetraduit="Hématologue";break;
		case("Homeopath"):$textetraduit="Homéopathe";break;
		case("Nurse"):$textetraduit="Infirmier";break;
		case("Advanced practice nurse"):$textetraduit="Infirmier en pratique avancée";break;
		case("Laboratories"):$textetraduit="Laboratoires";break;
		case("Masseur-Kinesitherapist"):$textetraduit="Masseur-kinésithérapeute";break;
		case("Medical biologist"):$textetraduit="Médecin biologiste";break;
		case("General practitioner"):$textetraduit="Médecin généraliste";break;
		case("General medicine"):$textetraduit="Médecine générale";break;
		case("Geneticist doctor"):$textetraduit="Médecin généticien";break;
		case("Specialist doctor in nuclear medicine"):$textetraduit="Médecin spécialiste en médecine nucléaire";break;
		case("Specialist doctor in public health and social medicine"):$textetraduit="Médecin spécialiste en santé publique et médecine sociale";break;
		case("Thermal doctor"):$textetraduit="Médecin thermaliste";break;
		case("Sports medicine"):$textetraduit="Médecine appliquée aux sports";break;
		case("Medicine of Infectious and Tropical Diseases"):$textetraduit="Médecine des Maladies infectieuses et tropicales";break;
		case("Emergency medicine"):$textetraduit="Médecine d'urgence";break;
		case("Forensic medicine and medical expertise"):$textetraduit="Médecine légale et expertises médicales";break;
		case("Vascular medicine"):$textetraduit="Médecine vasculaire";break;
		case("Nephrologist"):$textetraduit="Néphrologue";break;
		case("Neurosurgeon"):$textetraduit="Neurochirurgien";break;
		case("Neurologist"):$textetraduit="Neurologue";break;
		case("Neuropsychiatrist"):$textetraduit="Neuropsychiatre";break;
		case("Ophthalmologist"):$textetraduit="Ophtalmologiste";break;
		case("Speech therapist"):$textetraduit="Orthophoniste";break;
		case("Orthoptist"):$textetraduit="Orthoptiste";break;
		case("Oto-Rhino-Laryngologist (ORL) and cervico-facial surgeon"):$textetraduit="Oto-Rhino-Laryngologue (ORL) et chirurgien cervico-facial";break;
		case("Pediatrician"):$textetraduit="Pédiatre";break;
		case("Pedicure-podiatrist"):$textetraduit="Pédicure-podologue";break;
		case("Pharmacist"):$textetraduit="Pharmacien";break;
		case("Phoniatrist"):$textetraduit="Phoniatre";break;
		case("Pulmonologist"):$textetraduit="Pneumologue";break;
		case("Psychiatrists"):$textetraduit="Psychiatres";break;
		case("Psychiatrist"):$textetraduit="Psychiatre";break;
		case("Radiologist"):$textetraduit="Radiologue";break;
		case("Radiotherapist"):$textetraduit="Radiothérapeute";break;
		case("Medical resuscitator"):$textetraduit="Réanimateur médical";break;
		case("Rheumatologist"):$textetraduit="Rhumatologue";break;
		case("Midwife"):$textetraduit="Sage-femme";break;
		case("Specialist in allergology"):$textetraduit="Spécialiste en allergologie";break;
		case("Specialist in internal medicine"):$textetraduit="Spécialiste en médecine interne";break;
		case("Specialist in physical medicine and rehabilitation"):$textetraduit="Spécialiste en médecine physique et de réadaptation";break;
		case("Stomatologists"):$textetraduit="Stomatologistes";break;

		case("Your last login"):$textetraduit="Votre dernière connexion";break;
		case("Add a care structure"):$textetraduit="Ajouter une structure de soins";break;
		case("My care structures"):$textetraduit="Mes structures de soins";break;
		case("Manage care structures and current requests"):$textetraduit="Gérer les structures de soins et demandes en cours ";break;
		case("My informations"):$textetraduit="Mes informations";break;


//hbmenuhaut
			  
			  
	   case ("Our current price list") : $textetraduit = "Notre grille tarifaire actuelle"; break;
	   case ("USERS MANAGEMENT") : $textetraduit = "GESTION DES UTILISATEURS"; break;
	   case ("Users management") : $textetraduit = "Gestion des utilisateurs"; break;
			  
	   case ("SETTINGS") : $textetraduit = "paramètres"; break;
	   case ("Settings") : $textetraduit = "Paramètres"; break;
	   case ("Billing") : $textetraduit = "Facturation"; break;
	   case ("access rights") : $textetraduit = "droit d'accès"; break;
	   case ("presentation") : $textetraduit = "présentation"; break;
	   case ("Subscription") : $textetraduit = "Abonnement"; break;
			  
//hbmedmenuhaut.php
	   case ('acts of care') : $textetraduit = "actes de soins"; break;
	   case ('View your consultation history') : $textetraduit = "Consulter l'historique de vos consultations"; break;
	   case ('Manage your consultation schedule') : $textetraduit = "Gérez votre planning de consultation"; break;
	   case ('Consult the list of your patients') : $textetraduit = "Consultez la liste de vos patients"; break;
	   case ('Consult the statistics relating to your activity') : $textetraduit = "Consulter les statistiques relatives à votre activité"; break;
	   
//hbmenuhaut.php
	   case ('Log out') : $textetraduit = "Déconnexion"; break;
	   case ('Professional account') : $textetraduit = "Compte professionnel"; break;
	   case ('LANGUAGES') : $textetraduit = "LANGUES"; break;
	   case ('MY PRO ACCOUNT') : $textetraduit = "MON COMPTE PRO"; break;
	   case ('My pro account') : $textetraduit = "Mon compte pro"; break;
	   case ('Switch to Manager') : $textetraduit = "Passer à Gestionnaire"; break;
	   case ('Change workplace') : $textetraduit = "Mes lieux d'exercice"; break;
	   case ('MY WORKPLACES') : $textetraduit = "MES LIEUX D'EXERCICE"; break;
	   case ('Switch to Practitioner') : $textetraduit = "Passer à praticien"; break;
	   case ('Log out') : $textetraduit = "Déconnexion"; break;
	   case ('Welcome ! Be careful, all your new changes will be applied to this place.') : $textetraduit = "Bienvenue ! Attention, toutes vos nouvelles modifications seront appliquées à cet endroit."; break;
	   case ('Welcome ! Be careful, all your new consultations will now be recorded in this place.') : $textetraduit = "Bienvenu ! Attention, toutes vos nouvelles consultations seront désormais enregistrées à cet endroit."; break;

//hbmenuhautpatient.php
	   case ('My relatives') : $textetraduit = "Mes proches"; break;
	   case ('Log in') : $textetraduit = "Se connecter"; break;
	   case ('Help') : $textetraduit = "Aide"; break;
	   case ('Make a new appointment') : $textetraduit = "Prendre un nouveau rendez-vous"; break;
	   case ('My past and future reservations') : $textetraduit = "Mes rendez-vous passés et à venir"; break;
	   case ('My documents following my consultations') : $textetraduit = "Mes documents suite à mes consultations"; break;
	   case ('No account ?') : $textetraduit = "Pas de compte ?"; break;
	   
	   
//hbmedstat.php
	   case ("More options") : $textetraduit = "Plus d'options"; break;
	   case ("Activity") : $textetraduit = "Activité"; break;
	   case ("Acts") : $textetraduit = "Actes médicaux"; break;
	   case ("Destinations") : $textetraduit = "Destinations"; break;
	   case ("Female") : $textetraduit = "Femmes"; break;
	   case ("Financial Code Acts") : $textetraduit = "Actes codifiés sécurité sociale"; break;
	   case ("Location Origin") : $textetraduit = "Localisation géographique de l'acte médical"; break;
	   case ("Male") : $textetraduit = "Hommes"; break;
	   case ("MEDICAL ACTS STATISTICS") : $textetraduit = "STATISTIQUES ACTIVITE MEDICALE"; break;
	   case ("Pathologies") : $textetraduit = "Pathologies"; break;
	   case ("Payment mode") : $textetraduit = "Mode de règlement"; break;
	   case ("Reanimation acts") : $textetraduit = "Actes de réanimation"; break;
	   case ("Technical acts") : $textetraduit = "Actes médicaux techniques"; break;
	   case ("Transport vector") : $textetraduit = "Moyens de transport"; break;
	   case ("Type of medical acts") : $textetraduit = "Types d'actes medicaux"; break;
	   case ("Detailed statistics") : $textetraduit = "Statistiques détaillées"; break;
	   case ("Medical activity") : $textetraduit = "Activité médicale"; break;
	   case ("Reservations") : $textetraduit = "Réservations"; break;
	   case ("Statistics of the year") : $textetraduit = "Statistiques de l'année"; break;
	   case ("Type of consultation") : $textetraduit = "Type de consultation"; break;
	   case ("all my workplace") : $textetraduit = "Tous mes lieux de travail"; break;
	   case ("Consultation") : $textetraduit = "Consultation"; break;
	   case ("Emergency : primary") : $textetraduit = "Urgence : primaire"; break;
	   case ("Emergency : secondary") : $textetraduit = "Urgence : secondaire"; break;
	   case ("Hospitalization") : $textetraduit = "Hospitalisation"; break;
	   case ("Other medical act") : $textetraduit = "Autre acte médical"; break;
	   case ("Prescription") : $textetraduit = "Prescription"; break;
	   case ("Visit") : $textetraduit = "Visite"; break;
	   case ("All") : $textetraduit = "toutes"; break;
	   case (" All ") : $textetraduit = "toutes"; break;
	   case ("Activity of the structure") : $textetraduit = "Activité de la structure"; break;
	   case ("Appointment by professionals") : $textetraduit = "Rendez-vous par professionnels"; break;
	   case ("Consultations by professionals") : $textetraduit = "Consultations par professionnels"; break;
	   case ("Medical") : $textetraduit = "Médical"; break;
	   case ("Your activity") : $textetraduit = "Votre activité"; break;
	   case ("Calendar activity") : $textetraduit = "Activité de l'agenda"; break;
	   case ("Turnover") : $textetraduit = "Chiffre d'affaire"; break;
	   case ("Top-searched specialties") : $textetraduit = "Spécialités les plus recherchées"; break;
	   case ("Practitioner, care center or specialty") : $textetraduit = "Praticien, centre de soins ou spécialité"; break;

//hbmenubaspatient.php
	   case ("New appointment") : $textetraduit = "Nouveau rendez-vous"; break;
	   case ("Reservations") : $textetraduit = "Réservations"; break;
	   case ("Documents") : $textetraduit = "Documents"; break;

//hbprocreation.php 
	   case ("return to the login screen") : $textetraduit = "revenir à l'écran de connexion"; break;
	   case ("An email has just been sent to you to confirm your registration. You can then continue your registration process on P.I.H !") : $textetraduit = "Un email vient de vous être envoyé pour confirmer votre inscription. Vous pourrez alors poursuivre votre démarche d'inscription sur P.I.H !"; break;
	   case ("If you have not received an e-mail, check your junk mail. Otherwise, you may :") : $textetraduit = "Si vous n'avez pas reçu d'e-mail, vérifiez vos courrier indésirable. Autrement, vous pouvez :"; break;
	   case ("receive a new email") : $textetraduit = "recevoir un nouvel e-mail"; break;
	   case ("contact PIH support") : $textetraduit = "contacter le support PIH"; break;
	   
	   case ("We have received a request to create a professional account associated with ") : $textetraduit = "Nous avons reçu une demande de création d'un compte professionnel associée à "; break;
	   case ("If you did not initiate this business account request, please disregard this email.") : $textetraduit = "Si vous n'êtes pas à l'origine de cette demande de compte professionnel, veuillez ne pas tenir compte de ce mail."; break;
	   case ("If you did not initiate this request, please contact us immediately through our support site. No changes have been made to your account at this time.") : $textetraduit = "Si vous n'êtes pas à l'origine de cette demande, contactez-nous immédiatement via le site de notre service d'assistance. Aucune modification n'a été apportée à votre compte pour l'instant."; break;
	   case ("Are you having connection problems ? Ask for help from P.I.H Support.") : $textetraduit = "Vous rencontrez des problèmes de connexion ? Demandez de l'aide au support P.I.H."; break;
	   case ("Documents") : $textetraduit = "Documents"; break;
	   case ("Titre") : $textetraduit = "Titre"; break;
	   case ("Specialty") : $textetraduit = "Spécialité"; break;
	   case ("your role in P.I.H") : $textetraduit = "votre rôle dans PIH"; break;
	   case ("If you did not receive an email, please try again or contact us here.") : $textetraduit = "Si vous n'avez pas reçu d'émail, merci de recommencer ou de nous contacter ici. "; break;
	   case ("P.I.H - Welcome !") : $textetraduit = "P.I.H - Bienvenue !"; break;
	   case ("Your account has been successfully created.") : $textetraduit = "Votre compte a été créé avec succès."; break;
	   case ("Congratulations") : $textetraduit = "Félicitations"; break;
	   case ("quit") : $textetraduit = "quitter"; break;
	   case ("Please verify your password.") : $textetraduit = "Veuillez vérifier votre mot de passe."; break;
	   case ("You can now use P.I.H and all of its features.") : $textetraduit = "Vous pouvez désormais utiliser P.I.H et l'ensemble de ses fonctionnalité."; break;

			  
	   case ("View on map") : $textetraduit = "Visualiser sur la carte"; break;
	   case ("Professionnal ID") : $textetraduit = "Numéro professionnel"; break;
	   case ("My options") : $textetraduit = "Mes options"; break;
	   case ("main information") : $textetraduit = "informations principales"; break;
	   case ("Your personal information") : $textetraduit = "Vos informations personnnelles"; break;
	   case ("Your profession") : $textetraduit = "Votre profession"; break;
	   case ("ADDRESS AND CONTACT DETAILS") : $textetraduit = "ADRESSE ET COORDONNÉES"; break;
	   case ("Address and contact details") : $textetraduit = "Adresse et coordonnées"; break;
	   case ("ADDRESS AND CONTACTS") : $textetraduit = "ADRESSE ET CONTACTS"; break;
	   case ("I am draggable") : $textetraduit = "Je suis déplaçable"; break;
	   case ("Payment Information") : $textetraduit = "Information de paiement"; break;
	   
	   case ("about your clinic") : $textetraduit = "pour votre clinique"; break;
	   case ("creation of your clinic") : $textetraduit = "création de votre clinique"; break;
	   case ("personalization of your clinic") : $textetraduit = "personnalisation de votre clinique"; break;
	   case ("staff management") : $textetraduit = "gestion du personnel"; break;
	   case ("clinic statistics") : $textetraduit = "statistiques de la clinique"; break;
	   
	   case ("for your practitioner") : $textetraduit = "pour vos praticiens"; break;
	   case ("creation of a calendar") : $textetraduit = "création d'un agenda"; break;
	   case ("online appointment booking") : $textetraduit = "prise de rendez-vous en ligne"; break;
	   case ("email and sms reminders") : $textetraduit = "rappels mail et sms"; break;
	   case ("patient files") : $textetraduit = "fiches patients"; break;
	   case ("consultations records") : $textetraduit = "dossier de consultation"; break;
	   case ("patient files") : $textetraduit = "fiches patients"; break;
	   case ("medical statistics") : $textetraduit = "statistiques médicales"; break;

	   case ("deployment in 2 hours in complete autonomy") : $textetraduit = "déploiement en 2 heures en toute autonomie"; break;
	   case ("Starting from") : $textetraduit = "À partir de"; break;
	   case ("excl. tax /month") : $textetraduit = "HT  /mois"; break;
	   case ("40 &#8364;") : $textetraduit = "40 &#8364;"; break;
	   case ("55 &#8364;") : $textetraduit = "55 &#8364;"; break;
	   case ("Minimum monthly subscription of 40 &#8364; (VAT) - The prices of monthly subscriptions may vary depending on the number of users and appointments to which you subscribe - Indicative price excluding set-up costs") : $textetraduit = "Abonnement mensuel minimum de 40 € (TVA) - Les prix des abonnements mensuels peuvent varier en fonction du nombre d'utilisateurs et de rendez-vous auxquels vous souscrivez - Prix indicatif hors frais de mise en place"; break;
	   case ("NB. The minimum subscription period is 12 months") : $textetraduit = "NB. Quelle que soit l'offre, la durée minimale d'abonnement est de 12 mois"; break;
	   case ("choose an offer") : $textetraduit = "choisissez une offre"; break;
	   case ("free try") : $textetraduit = "essai gratuit"; break;
	   case ("offer") : $textetraduit = "offre"; break;
	   
	   case ("Thank you for your subscription") : $textetraduit = "Merci pour votre abonnement"; break;
	   case ("has been successfully created.") : $textetraduit = "a été créée avec succès."; break;
	   case ("subscription confirmation") : $textetraduit = "confirmation d'abonnement"; break;
	   case ("subscription confirmation") : $textetraduit = "confirmation d'abonnement"; break;
	   case ("add professionals") : $textetraduit = "ajoutez des professionnels"; break;
	   case ("Manage your billing information") : $textetraduit = "Gérer vos informations de facturation"; break;
	   case ("CUSTOMIZE YOUR CLINIC") : $textetraduit = "PERSONNALISEZ VOTRE CLINIQUE"; break;
	   case ("start now to") : $textetraduit = "commencez dès maintenant à"; break;
	   case ("Your subscription has been validated. Your care structure is now in service.") : $textetraduit = "Votre structure de soin est désormais en service. "; break;
	   case ("Your care structure is now in service.") : $textetraduit = "Votre structure de soin est désormais en service. "; break;
	   case ("Go back to the dashboard") : $textetraduit = "Revenir au tableau de bord"; break;

	   case ("I am a manager and a healthcare professional") : $textetraduit = "Je suis un gestionnaire et un professionnel de la santé"; break;
	   case ("Role") : $textetraduit = "Rôle"; break;

	   case ("abbreviation of your profession (example: DR for doctor)") : $textetraduit = "abréviation de votre profession (exemple : DR pour docteur)"; break;
	   case ("Patient age group") : $textetraduit = "Âge de la patientèle"; break;
	  
	   case ("7 to 30 characters") : $textetraduit = "7 à 30 caractères"; break;
	   case ("at least one lowercase letter, one uppercase letter, one numeric digit") : $textetraduit = "au moins une lettre minuscule, une lettre majuscule, un chiffre"; break;
	   case ("at least one special character (!@#$%^&*)") : $textetraduit = "au moins un caractère spécial (!@#$%^&*)"; break;

//hbprolieuajoutB 
			  
	  case ("Join") : $textetraduit = "Rejoindre"; break;
	  case ("Find a healthcare structure in P.I.H MEDIC") : $textetraduit = "Rechercher une structure de santé à P.I.H MEDIC"; break;
	  case ("Search by name or address") : $textetraduit = "Rechercher par nom ou adresse"; break;
	 
	  case ("Teleconsultation and associated billing") : $textetraduit = "Téléconsultation et facturation associée"; break;
	  case ("Configure your plan") : $textetraduit = "Configurez votre plan"; break;
      case ("Customize your plan with SMS reminders and cancellation notifications") : $textetraduit = "Personnalisez votre plan avec des rappels par SMS et des notifications d'annulation"; break;
      case ("Personalize your plan with the teleconsultation and online payment module") : $textetraduit = "Personnalisez votre forfait avec le module de téléconsultation et de paiement en ligne"; break;
	
	  case ("teleconsultation module") : $textetraduit = "module de téléconsultation"; break;
	  case ("no teleconsultation") : $textetraduit = "pas de téléconsultation"; break;

	  case ("Teleconsultation and online payment") : $textetraduit = "Téléconsultation et paiement en ligne"; break;
	  case ("SMS Reminder Service") : $textetraduit = "Service de rappel par SMS"; break;
      case ("Would you like to activate the teleconsultation and online payment module?") : $textetraduit = "Souhaitez-vous activer le module de téléconsultation et de paiement en ligne ?"; break;
      case ("Would you like to activate the SMS reminder service for your care structure?") : $textetraduit = "Souhaitez-vous activer le service de rappel par SMS pour votre structure de soins ?"; break;
      case ("Based on &#8364;25/month/user, up to 100 teleconsultations per month. Additional teleconsultations are billed at &#8364;5 per 20 additional teleconsultations.") : $textetraduit = "Sur la base de 25 &#8364;/mois/utilisateur, jusqu'à 100 téléconsultations par mois. Les téléconsultations supplémentaires sont facturées 5&#8364; par tranche de 20 téléconsultations supplémentaires."; break;
			  
      case ("SMS reminder") : $textetraduit = "Rappel par SMS"; break;
      case ("No SMS reminder") : $textetraduit = "Pas de rappel par SMS"; break;
      case ("The cost of each SMS reminder is 30 EUR per month per health professional, up to 400 appointments per month.") : $textetraduit = "Le coût de chaque rappel par SMS est de 30 EUR par mois par professionnel de santé, jusqu'à 400 rendez-vous par mois."; break;
      case ("$") : $textetraduit = "€"; break;
      case ("month") : $textetraduit = "mois"; break;
      case ("Price all taxes included") : $textetraduit = "Prix toutes taxes comprises"; break;
      case ("on the declarative value of") : $textetraduit = "sur la valeur déclarative de"; break;
      case ("FTE") : $textetraduit = "ETP"; break;
      case ("Thank you for your selection. By clicking -Proceed to payment-, you will be directed to our secure payment portal where you can complete your purchase. If you wish to review or change your selection, please click -Go back-") : $textetraduit = "Merci pour votre sélection. En cliquant sur -Procéder au paiement-, vous serez dirigé vers notre portail de paiement sécurisé où vous pourrez finaliser votre achat. Si vous souhaitez revoir ou modifier votre sélection, veuillez cliquer sur -Retour-"; break;
      case ("Proceed to payment") : $textetraduit = "Procéder au paiement"; break;

	  case ('Configure your plan') : $textetraduit = "Configurez votre plan"; break;
      case ("Customize your plan with SMS reminders and cancellation notifications") : $textetraduit = "Personnalisez votre forfait avec des rappels SMS et des notifications d'annulation"; break;
      case ('Determine your plan cost') : $textetraduit = "Déterminez le coût de votre plan"; break;
      case ("Customized pricing based on your needs") : $textetraduit = "Une tarification personnalisée en fonction de vos besoins"; break;
      case ("months free") : $textetraduit = "mois gratuits"; break;
      case ("Choose the plan that suits you") : $textetraduit = "Choisissez la formule qui vous convient"; break;
      case ("Tailored solutions for all healthcare professionals") : $textetraduit = "Des solutions sur mesure pour tous les professionnels de santé"; break;

//hbprolieujoin.php 

      case ("Price list") : $textetraduit = "Grille tarifaire"; break;
      case ("Independent") : $textetraduit = "Indépendant"; break;
      case ("The ideal option for independent practitioners looking to optimize their practice.") : $textetraduit = "L'option idéale pour les praticiens indépendants cherchant à optimiser leur pratique."; break;
      case ("month") : $textetraduit = "mois"; break;
      case ("Personal agenda") : $textetraduit = "Agenda personnel"; break;
      case ("Ability to write consultation reports") : $textetraduit = "Capacité à rédiger des rapports de consultation"; break;
      case ("Access to personal statistics") : $textetraduit = "Accès aux statistiques personnelles"; break;
      case ("Choose plan") : $textetraduit = "Choisir le plan"; break;
      case ("Healthcare Structure") : $textetraduit = "Structure de santé"; break;
      case ("The perfect solution for healthcare structures wishing to improve collaboration and management.") : $textetraduit = "La solution parfaite pour les structures de santé souhaitant améliorer la collaboration et la gestion."; break;
      case ("professional") : $textetraduit = "professionnel"; break;
      case ("Personal agenda for each professional") : $textetraduit = "Agenda personnel pour chaque professionnel"; break;
      case ("Sharing of medical records") : $textetraduit = "Partage des dossiers médicaux"; break;
      case ("Access to global structure statistics") : $textetraduit = "Accès aux statistiques globales de la structure"; break;
      case ("Management of professionals by the structure") : $textetraduit = "Gestion des professionnels par la structure"; break;
      case ("Management of structural professionals") : $textetraduit = "Gestion des professionnels de la structure"; break;
		  
	  case ("Email of the healthcare structure") : $textetraduit = "Email de la structure de soins"; break;
	   case ("Phone of the healthcare structure") : $textetraduit = "Téléphone de la structure de soins"; break;
	   case ("Join this clinic") : $textetraduit = "Rejoindre cette clinique"; break;
	   case ("Clinic name") : $textetraduit = "Nom de la clinique"; break;
	   case ("Clinic code") : $textetraduit = "Code clinique"; break;
	   case ("Managers name") : $textetraduit = "Nom d'un manager"; break;
	   case ("WHO ARE WE ?") : $textetraduit = "QUI SOMMES NOUS ?"; break;
	   case ("CLINIC MANAGERS") : $textetraduit = "LES MANAGERS DE LA CLINIQUE"; break;
	   case ("We are here !") : $textetraduit = "Nous sommes ici !"; break;
	   case ("More informations") : $textetraduit = "Plus d'informations"; break;
	   case ("How to get there ?") : $textetraduit = "Comment s'y rendre ?"; break;
	   case ("care structures hosted on P.I.H") : $textetraduit = "structures de soins hébergées sur P.I.H"; break;
	   case ("CLINIC HEALTH PROFESSIONAL") : $textetraduit = "LES SOIGNANTS DE LA CLINIQUE"; break;
	   case ("Read more") : $textetraduit = "Lire plus"; break;
	   case ("Read less") : $textetraduit = "Lire moins"; break;
	   case ("Address") : $textetraduit = "Adresse"; break;
	   case ("Request sent") : $textetraduit = "Demande envoyée"; break;
	   case ("Join this care structure") : $textetraduit = "Rejoindre cette structure de soins"; break;
	   case ("Start subscription") : $textetraduit = "Débuter l'abonnement"; break;
	   case ("Join a care facility") : $textetraduit = "Rejoindre une structure de soins"; break;

//hbuseradd.php
	   case ("Don't have an email address ?") : $textetraduit = "Vous n'avez pas d'adresse email ?"; break;
	   case ("Email address or login") : $textetraduit = "Adresse mail ou identifiant personnel"; break;
	   case ("Login") : $textetraduit = "Identifiant personnel"; break;
	   case ("If you do not have an email address, fill in a personal ID instead that you will use to log in. Note however, that an email address facilitates your use of our platform.") : $textetraduit = "Si vous n'avez pas d'adresse email, remplissez à la place un identifiant personnel que vous utiliserez pour vous connecter. Notez cependant, qu'une adresse email facilite votre utilisation de notre plateforme."; break;
	   case ("This login already exists.") : $textetraduit = "Ce login existe déjà."; break;
	   case ("specify the telephone code +") : $textetraduit = "précisez l'indicatif téléphonique +"; break;
	   case ("Creation of patient account") : $textetraduit = "Création de compte patient"; break;
	   case ("Email address") : $textetraduit = "Adresse e-mail"; break;
	   case ("Your P.I.H patient account has been successfully created.") : $textetraduit = "Votre compte patient P.I.H a été créer avec succès. "; break;
	   
	   
//hbutillieumailprogram
	   case ("Resend the teleconsultation link") : $textetraduit = "Renvoyer le lien de téléconsultation"; break;
	   case ("Click here to join the teleconsulation") : $textetraduit = "Cliquez ici pour rejoindre la téléconsulation"; break;
	   case ("teleconsultation link") : $textetraduit = "lien de téléconsultation"; break;
	   case ("Participate from your computer or room device") : $textetraduit = "Participez à partir de votre ordinateur ou de l’appareil de la salle"; break;
	   case ("You have received a connection request from") : $textetraduit = "Vous avez reçu une demande de connexion de"; break;
	   case ("Sorry !") : $textetraduit = "Désolé !"; break;
	   case ("Well done !") : $textetraduit = "Bravo !"; break;
	   case ("The action has been successfully completed.") : $textetraduit = "L'action a été effectuée avec succès."; break;
	   case ("It seems that a similar action has already been performed.") : $textetraduit = "Il semble qu'une action similaire ait déjà été effectuée."; break;
	   case ("Your action has been taken into account.") : $textetraduit = "Votre action a été prise en compte."; break;
	   case ("Request to connect to a structure :") : $textetraduit = "Demande de connexion à une structure :"; break;
	   case ("Log into your account to process the request.") : $textetraduit = "Connectez-vous à votre compte pour traiter la demande."; break;
	   case ("A care structure invites you to join it") : $textetraduit = "Une structure de soins vous invite à la rejoindre"; break;
	   case ("A professional has agreed to join the care structure :") : $textetraduit = "Un professionnel a accepté de rejoindre la structure de soins :"; break;
	   case ("Log in to your account to find out more.") : $textetraduit = "Connectez-vous à votre compte pour en savoir plus."; break;
	   case ("Answer from a professional") : $textetraduit = "Réponse d'un professionnel"; break;
	   case ("A professional has declined any relationship with the care structure :") : $textetraduit = "Un professionnel a décliné toute relation avec la structure de soin :"; break;
	   case ("The care structure concerned is as follows :") : $textetraduit = "La structure de soin concernée est la suivante :"; break;
	   case ("A care structure has refused any professional relationship with you :") : $textetraduit = "Une structure de soins a refusé toute relation professionnel avec vous :"; break;
	   case ("Response from a care structure") : $textetraduit = "Réponse d'une structure de soin"; break;
	   case ("Your status changes in the following care structure :") : $textetraduit = "Votre statut change dans la structure de soin suivante :"; break;
	   case ("Your status changes") : $textetraduit = "Votre statut change"; break;
	   
//hbutilisateurpasswordoubli.php

	   case ("Do not answer to that mail, no way ! ") : $textetraduit = "Ne pas répondre à ce mail, c'est impossible !"; break;
	   case ("Do not forget to change it as soon as possible") : $textetraduit = "N'oubliez pas de le changer dès que possible"; break;
	   case ("Enter your login or mail") : $textetraduit = "Taper votre login ou bien votre mail"; break;
	   case ("Enter your login") : $textetraduit = "Saisissez votre identifiant"; break;
	   case ("we will send your new password by mail, please login and change it as soon as possible") : $textetraduit = "Nous vous enverrons vos coordonnées de connexion par mail, par mesure de sécurité, changer ceci dès que possible"; break;
	   case ("Your new passord is : ") : $textetraduit = "Votre nouveau mot de passe est : "; break;
	   case ("I am a manager") : $textetraduit = "Je suis un gestionnaire"; break;
	   case ("I am a healthcare professional") : $textetraduit = "Je suis un professionnel de santé"; break;

//hbutilisateurpatient.php
			  
	   case ("Presentation of") : $textetraduit = "Présentation de"; break;
	   case ("Message from the practitioner") : $textetraduit = "Message du praticien"; break;
	   case ("Dear patient, we remind you of the importance of not canceling your medical appointments lightly. If you need to cancel, please do so as soon as possible. Thank you for your understanding.") : $textetraduit = "Cher patient, nous vous rappelons l'importance de ne pas annuler vos rendez-vous médicaux à la légère. Si vous devez annuler, veuillez le faire le plus tôt possible. Merci de votre compréhension."; break;
	   case ("Cancel appointment") : $textetraduit = "Annuler la réservation"; break;
	   case ("confirmed") : $textetraduit = "confirmé"; break;
	   case ("Welcome to your professional page! This page represents your online presence on our platform. Once you have completed your professional information, this page becomes visible to potential patients.") : $textetraduit = "Bienvenue sur votre page professionnelle ! Cette page représente votre présence en ligne sur notre plateforme. Une fois que vous avez complété vos informations professionnelles, cette page devient visible pour les patients potentiels."; break;
	   
	   case ("Here, patients can view your profile, learn more about your expertise and services, and even book an appointment. What you see now is exactly what patients see when they visit your page.") : $textetraduit = "Ici, les patients peuvent consulter votre profil, en savoir plus sur votre expertise et vos services, et même prendre rendez-vous. Ce que vous voyez actuellement est exactement ce que les patients voient lorsqu’ils visitent votre page."; break;
			  
	   case ("We encourage you to check your page regularly to ensure all information is up to date and accurately represents your professional practice. If you have any questions or need assistance, please do not hesitate to contact our support team.") : $textetraduit = "Nous vous encourageons à vérifier régulièrement votre page pour vous assurer que toutes les informations sont à jour et représentent précisément votre pratique professionnelle."; break;
			  
	   case ("Thank you for being part of our community of healthcare professionals dedicated to providing exceptional care to our patients.") : $textetraduit = "Merci de faire partie de notre communauté de professionnels de la santé dévoués à fournir des soins exceptionnels à nos patients."; break;

			  

	   case ("Are you sure you want to cancel the reservation ?") : $textetraduit = " Êtes-vous sûr de vouloir annuler la réservation"; break;
	   case ("Pick up where you left off") : $textetraduit = "Reprenez là où vous vous êtes arrêté"; break;
	   case ("Do you want to confirm the next appointment ?") : $textetraduit = "Voulez-vous confirmer le prochain rendez-vous ?"; break;
	   case ("Forget that appointment") : $textetraduit = "Oublier ce rendez-vous"; break;
	   case ("Do you want to continue booking this appointment ?") : $textetraduit = "Voulez-vous continuer à réserver ce rendez-vous ?"; break;
	   case ("I continue") : $textetraduit = "Je continue"; break;
	   case ("Practitioner page") : $textetraduit = "Page du praticien"; break;
	   case ("This reservation slot has already been reserved. Please select another booking slot.") : $textetraduit = "Ce créneau de réservation a déjà été reservé. Merci de sélectionner un autre créneau de réservation."; break;
	   
	   
//hbutilisateurpatientcompte.php
		
	   case ("By booking this appointment, you agree to respect it. Medical appointments are valuable and help ensure quality care for everyone. If you cannot attend your appointment, please cancel or reschedule it as soon as possible. Thank you for your understanding and cooperation.") : $textetraduit = "En réservant ce rendez-vous, vous vous engagez à le respecter. Les rendez-vous médicaux sont précieux et permettent de garantir des soins de qualité pour tous. Si vous ne pouvez pas assister à votre rendez-vous, veuillez l'annuler ou le reprogrammer dès que possible. Merci de votre compréhension et de votre coopération."; break;
	   case ("MY ACCOUNT") : $textetraduit = "MON COMPTE"; break;
	   case ("My account") : $textetraduit = "Mon compte"; break;
	   case ("Personal info") : $textetraduit = "Informations personnelles"; break;
	   case ("Provide personal data and how we can reach you") : $textetraduit = "Fournissez des renseignements personnels et comment vous joindre"; break;
	   case ("Login and security") : $textetraduit = "Connexion et sécurité"; break;
	   case ("Update you password and secure your account") : $textetraduit = "Mettez à jour votre nouveau mot de passe et sécurisez votre compte"; break;
	   case ("Relatives") : $textetraduit = "Mes proches"; break;
	   case ("RELATIVES") : $textetraduit = "MES PROCHES"; break;
	   case ("Add and manage the appointments of your relatives") : $textetraduit = "Ajoutez et gérez les rendez-vous de vos proches"; break;
	   case ("My medical history") : $textetraduit = "Mon historique médical"; break;
	   case ("Need to deactivate your account ?") : $textetraduit = "Besoin de désactiver votre compte ?"; break;
	   case ("Take care of that now") : $textetraduit = "M'en occuper maintenant"; break;
	   case ("Update") : $textetraduit = "Modifier"; break;
	   case ("View our factsheets and get help when you need it most") : $textetraduit = "Consultez nos fiches d'information et obtenez de l'aide"; break;
	   case ("What is a relative ?") : $textetraduit = "Qu'est-ce qu'un proche ?"; break;
	   case ("A relative is a person in your family or a person for whom you are responsible. It is using your account that you will make his medical appointments.") : $textetraduit = "Un proche est une personne de votre famille ou une personne dont vous êtes responsable. C'est à l'aide de votre compte que vous effectuerez ses rendez-vous médicaux."; break;
	   case ("Delete") : $textetraduit = "Supprimer"; break;
	   case ("List of my relatives") : $textetraduit = "Liste de mes proches"; break;
	   case ("ADD A RELATIVE") : $textetraduit = "AJOUTER UN PROCHE"; break;
	   case ("Add a relative") : $textetraduit = "Ajouter un proche"; break;
	   case ("Prices") : $textetraduit = "Tarifs"; break;
	   case ("Prices") : $textetraduit = "Tarifs"; break;
	   

//hbutilisateurpatientcomptedelete.php
	   case ("Deactivate account ?") : $textetraduit = "Désactiver le compte ?"; break;
	   case ("You will no longer be able to access account information or past reservations.") : $textetraduit = "Vous ne pourrez plus accéder aux informations du compte ni aux réservations passées."; break;
	   case ("Disable Account") : $textetraduit = "Désactiver le compte"; break;
	   
//hbutilisateurpatientcomptelogin.php
	   case ("LOGIN AND SECURITY") : $textetraduit = "CONNEXION ET SÉCURITÉ"; break;
	   case ("Personal info") : $textetraduit = "Informations personnelles"; break;
	   case ("CHANGE MY PASSWORD") : $textetraduit = "MODIFIER MON MOT DE PASSE"; break;
	   case ("change my password") : $textetraduit = "modifier mon mot de passe"; break;	   
	   case ("New password") : $textetraduit = "Nouveau mot de passe"; break;
	   case ("Confirm password") : $textetraduit = "Confirmer le mot de passe"; break;
	   case ("7 to 15 characters which contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character.") : $textetraduit = "7 à 15 caractères contenant au moins une lettre minuscule, une lettre majuscule, un chiffre et un caractère spécial."; break;
	   case ("Password strength: Strong") : $textetraduit = "Protection du mot de passe: Forte"; break;
	   case ("Password strength: Weak") : $textetraduit = "Protection du mot de passe: Faible"; break;

//hbutilisateurpatientcompterelative.php
	   case ("You don't have any relatives at the moment. Click here to add a new relative :") : $textetraduit = "Vous n'avez pas de proches pour le moment. Cliquez ici pour ajouter un nouveau proche :"; break;
	   case ("New relative") : $textetraduit = "Nouveau proche"; break;
	   
//hbutilisateurpatientcompterelative.php
	   case ("Are you sure you want to delete this relative ?") : $textetraduit = "Êtes-vous sûr de vouloir supprimer ce proche ?"; break;

//hbutilisateurpatient.php
	   case ("NEXT APPOINTMENTS") : $textetraduit = "PROCHAINS RENDEZ-VOUS"; break;
	   case ("All reservations") : $textetraduit = "Toutes les réservations"; break;
	   case ("Modify") : $textetraduit = "Modifier"; break;
	   case ("See more") : $textetraduit = "Voir plus"; break;
	   case ("No consultation booked at this time. Find a professional now !") : $textetraduit = "Aucune consultation réservée pour le moment. Trouvez un professionnel dès maintenant !"; break;
	   case ("LAST APPOINTMENTS") : $textetraduit = "CONSULTATIONS PRECÉDÉNTES"; break;
	   case ("FAVORITE PRACTITIONERS") : $textetraduit = "PRATICIENS FAVORIS"; break;
	   case ("Search a professional on P.I.H") : $textetraduit = "Trouvez un professionnel sur P.I.H"; break;
	   case ("Appointment attended") : $textetraduit = "Rendez-vous honorés"; break;
	   case ("Appointment canceled") : $textetraduit = "Rendez-vous annulés"; break;
	   case ("- Appointment canceled -") : $textetraduit = "Rendez-vous annulé"; break;
	   case (" canceled ") : $textetraduit = "annulé"; break;
	   case ("Cancellation rate") : $textetraduit = "Taux d'annulation"; break;
	   case ("Appointments not booked") : $textetraduit = "Rendez-vous non reservés"; break;
	   case ("Appointments booked") : $textetraduit = "Rendez-vous reservés"; break;
	   case ("myself") : $textetraduit = "Moi-même"; break;
	   case ("No previous appointment") : $textetraduit = "Aucune consultation précédente"; break;
	   case ("You do not have any favorite practitioner yet") : $textetraduit = "Vous n'avez pas encore de praticien favoris"; break;
	   case ("Please select the reservation slots to which the changes apply.") : $textetraduit = "Veuillez sélectionner les créneaux de reservations auxquels s'appliquent les modifications."; break;
	   case ("Surname or first name of the practitioner") : $textetraduit = "nom ou prénom du praticien"; break;
	   case ("Filter medical appointments by date.") : $textetraduit = "Filtrer les rendez-vous médicaux par date."; break;
	   case ("Appointments") : $textetraduit = "Rendez-vous"; break;
	   case ("You canceled the appointment") : $textetraduit = "Vous avez annulé le rendez-vous"; break;
	   case ("Upcoming appointments") : $textetraduit = "Prochains rendez-vous"; break;
	   case ("Appointment history") : $textetraduit = "Historique"; break;
	   case ("Back to your home page") : $textetraduit = "Retour à votre page d'accueil"; break;

//hbutilisateurprocompte.php
	   case ("Your expertise") : $textetraduit = "Votre expertise"; break;
	   case ("Please indicate your areas of specialization here to help patients better understand.") : $textetraduit = "Veuillez indiquer vos domaines de spécialisation pour aider les patients à mieux comprendre."; break;
	   case ("Please select the payment methods you accept.") : $textetraduit = "Veuillez sélectionner les moyens de paiement que vous acceptez."; break;
	   case ("Dear professional") : $textetraduit = "Cher professionnel"; break;
	   case ("submit") : $textetraduit = "soumettre"; break;
	   case ("Use selected background image") : $textetraduit = "Utiliser l'image d'arrière-plan sélectionné"; break;
	   case ("Upload my own image") : $textetraduit = "Télécharger ma propre image"; break;
	   
	   case ("Cover image") : $textetraduit = "Image de couverture"; break;
	   case ("Choose a theme or cover image that reflects your identity and practice.") : $textetraduit = "Choisissez un thème ou une image de couverture qui reflète votre identité et votre pratique"; break;
	   case ("Dear practitioner, you have the possibility to personalize your professional page by choosing a theme or a cover image. You can choose from the images we offer below, or you can choose an image that is yours. This is a great opportunity to make your page unique and attractive to your patients. Take the opportunity to express your individuality and professionalism.") : $textetraduit = "Cher praticien, vous avez la possibilité de personnaliser votre page professionnelle en choisissant un thème ou une image de couverture. Vous pouvez choisir parmi les images que nous proposons ci-dessous, ou bien vous pouvez choisir une image qui vous appartient. C’est une excellente occasion de rendre votre page unique et attrayante pour vos patients. Profitez-en pour exprimer votre individualité et votre professionnalisme."; break;

	   case ("We encourage you to check your page regularly to ensure all information is up to date and accurately represents your professional practice.") : $textetraduit = "Nous vous encourageons à consulter régulièrement votre page pour vous assurer que toutes les informations sont à jour et représentent fidèlement votre pratique professionnelle."; break;	
	   case ("Add a message for your patients on your page.") : $textetraduit = "Ajoutez un message pour vos patients sur votre page."; break;
	   case ("Important message") : $textetraduit = "Message important"; break;
	   case ("no message") : $textetraduit = "pas de message"; break;
	   case ("Dear healthcare professional, don't forget that you can personalize your professional page by adding a message for the attention of your patients. This can be a great way to share important information or give a personal touch to your profile.") : $textetraduit = "Cher professionnel de santé, n’oubliez pas que vous pouvez personnaliser votre page professionnelle en ajoutant un message à l’attention de vos patients. Cela peut être un excellent moyen de partager des informations importantes ou de donner une touche personnelle à votre profil."; break;
	   case ("message written") : $textetraduit = "message rédigé"; break;
			  
	   case ("Link to your professional page") : $textetraduit = "Lien vers votre page professionnelle"; break;
	   case ("modify") : $textetraduit = "modifier"; break;
	   case ("This is a professional account") : $textetraduit = "Ceci est un compte professionnel"; break;
	   case ("You are a certified healthcare professional") : $textetraduit = "Vous êtes un professionnel de santé certifié"; break;
	   case ("Pro & Personal info") : $textetraduit = "Informations personnelles et pro"; break;
	   case ("Services to which you have subscribed with PIH") : $textetraduit = "Prestations auxquelles vous avez souscrit auprès de PIH"; break;
	   case ("Review payments and paysouts") : $textetraduit = "Consultez les paiements et les versements"; break;
	   case ("Consult your places of practice and your rights") : $textetraduit = "Consultez vos lieux d'exercices et vos droits"; break;
	   case ("Payments and payouts") : $textetraduit = "Paiements et versements"; break;
	   case ("Contracts and subscriptions") : $textetraduit = "Contrats et abonnements"; break;
	   case ("MY INFORMATIONS") : $textetraduit = "MES INFORMATIONS"; break;
	   case ("Professional info") : $textetraduit = "Informations professionnelles"; break;
	   case ("sort by") : $textetraduit = "trier par"; break;
	   case ("distance") : $textetraduit = "distance"; break;
	   case ("relevance") : $textetraduit = "pertinence"; break;
	   case ("Profession") : $textetraduit = "Profession"; break;
	   case ("View your pro page") : $textetraduit = "Visualiser votre page pro"; break;
	   case ("Professional presentation") : $textetraduit = "Présentation professionnelle"; break;
	   case ("Describe here who you are and your professional skills.") : $textetraduit = "Décrivez ici qui vous êtes ainsi que vos compétences professionnelles. "; break;
	   case ("Enter your accepted means of payment and your rates here.") : $textetraduit = "Saisissez ici vos moyens de paiement acceptés et vos tarifs."; break;
	   case ("Professional page") : $textetraduit = "Page professionnelle"; break;

	   case ("english") : $textetraduit = "anglais"; break;
	   case ("hindi") : $textetraduit = "hindi"; break;
	   case ("mandarin") : $textetraduit = "mandarin"; break;
	   case ("spanish") : $textetraduit = "espagnol"; break;
	   case ("french") : $textetraduit = "français"; break;
	   case ("arabic") : $textetraduit = "arabe"; break;
	   case ("bengali") : $textetraduit = "bengali"; break;
	   case ("russian") : $textetraduit = "russe"; break;
	   case ("portuguese") : $textetraduit = "portugais"; break;
	   case ("indonesian") : $textetraduit = "indonésien"; break;
	   case ("urdu") : $textetraduit = "ourdou"; break;
	   case ("japanese") : $textetraduit = "japonais"; break;
	   case ("german") : $textetraduit = "allemand"; break;
	   case ("punjabi") : $textetraduit = "punjabi"; break;
	   case ("german") : $textetraduit = "allemand"; break;
	   case ("javanese") : $textetraduit = "Javanais"; break;
	   case ("german") : $textetraduit = "allemand"; break;
	   case ("wu chinese") : $textetraduit = "chinois wu"; break;
	   case ("telugu") : $textetraduit = "télougou"; break;
	   case ("wu chinese") : $textetraduit = "chinois wu"; break;
	   case ("turkish") : $textetraduit = "turkish"; break;
	   case ("korean") : $textetraduit = "chinois wu"; break;
	   case ("turkish") : $textetraduit = "coréen"; break;
	   case ("marathi") : $textetraduit = "marathi"; break;
   
//hbutilisateurpatientallrvt.php
	   case ("RESERVATIONS") : $textetraduit = "RÉSERVATIONS"; break;
	   case ("Status") : $textetraduit = "Statut"; break;
	   case ("Professional") : $textetraduit = "Professionnel"; break;
	   case ("Place") : $textetraduit = "Structure"; break;
	   case ("Appointment") : $textetraduit = "Rendez-vous"; break;
	   case ("Reserved") : $textetraduit = "Réservée"; break;
	   case ("past") : $textetraduit = "passées"; break;
	   case ("forthcoming") : $textetraduit = "à venir"; break;
	   case ("Past") : $textetraduit = "Passées"; break;
	   case ("Forthcoming") : $textetraduit = "À venir"; break;
	   case ("Details") : $textetraduit = "Détails"; break;
	   case ("All ") : $textetraduit = "Tout"; break;
	   case ("Canceled") : $textetraduit = "Annulées"; break;
	   case ("canceled") : $textetraduit = "annulée"; break;

//hbutilisateurprocompteworkplace.php
			  
	   case ("your request to join the structure has been successfully completed.") : $textetraduit = "votre demande d'adhésion à la structure a été finalisée avec succès."; break;
	   case ("Leave") : $textetraduit = "Quitter"; break;
	   case ("Hello") : $textetraduit = "Bonjour"; break;
	   case ("Join a structure") : $textetraduit = "Rejoindre une structure"; break;
	   case ("Open a care structure account on P.I.H") : $textetraduit = "Créer une structure de soins dans P.I.H"; break;
	   case ("Select the workplace you want to go") : $textetraduit = "Sélectionnez le lieu de travail où vous souhaitez aller"; break;
	   case ("Other possibilities") : $textetraduit = "Autres possibilités"; break;
	   case ("leave the clinic") : $textetraduit = "quitter la clinique"; break;
	   case ("confirm clinic membership") : $textetraduit = "confirmer l'adhésion à la clinique"; break;
	   case ("waiting for confirmation") : $textetraduit = "en attente de confirmation"; break;
	   case ("Are you sure ?") : $textetraduit = "Êtes-vous sûr ?"; break;
	   case ("Already registered") : $textetraduit = "Déjà enregistré"; break;
	   case ("Home page of the care structure") : $textetraduit = "Page d'accueil de la structure de soin"; break;
	   case ("Consult a care structure on P.I.H and send a request to join it") : $textetraduit = "Consulter une structure de soins sur P.I.H et envoyer une demande pour la rejoindre"; break;
	   case ("Open a care structure account on P.I.H and welcome patients") : $textetraduit = "Ouvrir un compte structure de soins sur P.I.H et accueillir des patients"; break;
	   
//hbutilisateurprocomptelogin.php
	   case ("Old password") : $textetraduit = "Ancien mot de passe"; break;
	   case ("The old password entered is not correct.") : $textetraduit = "L'ancien mot de passe saisi n'est pas correct."; break;

//hbutilisateurpatientmodifrvt.php
	   case ("CANCEL APPOINTMENT") : $textetraduit = "ANNULER LE RENDEZ-VOUS"; break;
	   case ("Confirm you want to cancel this appointment :") : $textetraduit = "Confirmez vous vouloir annuler ce rendez-vous :"; break;
	   case ("I confirm") : $textetraduit = "Valider"; break;
	   case ("I do not confirm") : $textetraduit = "Je ne confirme pas"; break;
	   case ("Cancel") : $textetraduit = "Annuler"; break;

//pihmailprogram

	   case ("You have received a connection request from") : $textetraduit = "Vous avez reçu une demande de connexion de"; break;
	   case ("on P.I.H") : $textetraduit = "sur P.I.H"; break;
	   case ("I decline") : $textetraduit = "JE DECLINE"; break;
	   case ("Acceptance of connection to the structure :") : $textetraduit = "Acceptation de connexion à la structure :"; break;
	   case ("The professional") : $textetraduit = "Le professionnel"; break;
	   case ("asked to join the care structure :") : $textetraduit = "a demandé à rejoindre la structure de soins :"; break;
	   case ("of which you are the manager in P.I.H.") : $textetraduit = "dont vous êtes le gestionnaire dans P.I.H."; break;
	   case ("We invite you to search for new host structures or to create your own structure via your PIH account.") : $textetraduit = "Nous vous invitons à rechercher de nouvelles structures d'accueil ou à créer votre propre structure via votre compte PIH."; break;
	   case ("We regret to inform you that the care structure") : $textetraduit = "Nous avons le regret de vous informer que la structure de soins"; break;
	   case ("declined your offer to join.") : $textetraduit = "a décliné votre proposition de la rejoindre."; break;
	   
	   
//pihmedicalproB.php
			  
		case ("You can now create a professional account and start opening your structure on P.I.H MEDIC. If you need any assistance, please do not hesitate to contact us.") : $textetraduit = "Vous pouvez désormais créer un compte professionnel et commencer à ouvrir votre structure sur P.I.H MEDIC. Si vous avez besoin d'aide, n'hésitez pas à nous contacter."; break;
		case ("developer") : $textetraduit = "développeur"; break;
		case ("Practitioner ? Log in") : $textetraduit = "Praticien ? Se connecter"; break;
		case ("Patient ? Make an appointment") : $textetraduit = "Patient ? Prendre un rendez-vous"; break;
		case ("Healthcare Home") : $textetraduit = "Maison de Santé"; break;
		case ("Medical Practice") : $textetraduit = "Cabinet Médical"; break;
		case ("Multi-Professional Medical Practice") : $textetraduit = "Cabinet Médical Pluriprofessionnel"; break;
		case ("CMP") : $textetraduit = "Centre Médico-Psychologique"; break;
		// Ajoutez ici d'autres cas si nécessaire

			  
		case ("Doctor") : $textetraduit = "Médecin"; break;
		case ("Nurse") : $textetraduit = "Infirmier"; break;
		case ("Physiotherapist") : $textetraduit = "Kinésithérapeute"; break;
		case ("Psychologist") : $textetraduit = "Psychologue"; break;
		case ("Dietician") : $textetraduit = "Diététicien"; break;
		case ("Speech Therapist") : $textetraduit = "Orthophoniste"; break;
		case ("Podiatrist") : $textetraduit = "Podologue"; break;
		case ("Occupational Therapist") : $textetraduit = "Ergothérapeute"; break;
		case ("Osteopath") : $textetraduit = "Ostéopathe"; break;
		case ("Chiropractor") : $textetraduit = "Chiropracteur"; break;
		case ("Optometrist") : $textetraduit = "Optométriste"; break;
		case ("Automatic range renewal") : $textetraduit = "Reconduction automatique de la plage"; break;
			  
        case ("Multi-Structure Optimization: Our platform allows you to centralize all your activities, even if you work in multiple care structures. This facilitates the management of your daily tasks and improves your efficiency."): $textetraduit = "Optimisation Multistructure : Notre plateforme vous permet de centraliser toutes vos activités, même si vous travaillez dans plusieurs structures de soins. Cela facilite la gestion de vos tâches quotidiennes et améliore votre efficacité."; break;

		case ("Time Saving: Thanks to our multi-structure optimization, you can quickly access all your information, no matter where you work. This saves you time and allows you to focus on what really matters: your patients."): $textetraduit = "Gain de Temps : Grâce à notre optimisation multistructure, vous pouvez accéder rapidement à toutes vos informations, quel que soit l'endroit où vous travaillez. Cela vous fait gagner du temps et vous permet de vous concentrer sur ce qui compte vraiment : vos patients."; break;

		case ("Improved Communication: Our platform facilitates the sharing of information between different care structures. This improves communication between healthcare professionals and ensures better care coordination."): $textetraduit = "Amélioration de la Communication : Notre plateforme facilite le partage d'informations entre différentes structures de soins. Cela améliore la communication entre les professionnels de santé et assure une meilleure coordination des soins."; break;

		case ("Multi-Structure Optimization: Centralize Your Activities"): $textetraduit = "Optimisation Multistructure : Centralisez Vos Activités"; break;
		case ("Our platform allows you to centralize all your activities, even if you work in multiple care structures. This facilitates the management of your daily tasks and improves your efficiency."): $textetraduit = "Notre plateforme vous permet de centraliser toutes vos activités, même si vous travaillez dans plusieurs structures de soins. Cela facilite la gestion de vos tâches quotidiennes et améliore votre efficacité."; break;
		case ("Time Saving: Quickly Access Your Information"): $textetraduit = "Gain de Temps : Accédez Rapidement à Vos Informations"; break;
		case ("Thanks to our multi-structure optimization, you can quickly access all your information, no matter where you work. This saves you time and allows you to focus on what really matters: your patients."): $textetraduit = "Grâce à notre optimisation multistructure, vous pouvez accéder rapidement à toutes vos informations, quel que soit l'endroit où vous travaillez. Cela vous fait gagner du temps et vous permet de vous concentrer sur ce qui compte vraiment : vos patients."; break;
		case ("Improved Communication: Easily Share Information"): $textetraduit = "Amélioration de la Communication : Partagez Facilement les Informations"; break;
		case ("Our platform facilitates the sharing of information between different care structures. This improves communication between healthcare professionals and ensures better care coordination."): $textetraduit = "Notre plateforme facilite le partage d'informations entre différentes structures de soins. Cela améliore la communication entre les professionnels de santé et assure une meilleure coordination des soins."; break;
	
		case ("Multi Structure Optimization : Unparalleled Efficiency"): $textetraduit = "Optimisation Multi Structure : Une Efficacité Inégalée"; break;
		case ("Multi Structure Optimization :"): $textetraduit = "Optimisation Multi Structure"; break;
		case ("Staff Management: Enhance your team efficiency"): $textetraduit = "Gestion du personnel : Améliorez l'efficacité de votre équipe"; break;
		case ("Work in multidisciplinary teams"): $textetraduit = "Travaillez en équipe pluridisciplinaire"; break;
		case ("Our platform facilitates teamwork by enabling effective collaboration among different healthcare professionals. This can lead to better patient care and improved quality of services."): $textetraduit = "Notre plateforme facilite le travail en équipe en permettant une collaboration efficace entre différents professionnels de la santé. Cela peut conduire à une meilleure prise en charge des patients et à une amélioration de la qualité des soins."; break;
		case ("Share or not your patient files"): $textetraduit = "Partagez ou non vos dossiers patients"; break;
		case ("With our platform, you have total control over access to patient files. You can choose to share specific information with certain team members or keep certain information private."): $textetraduit = "Avec notre plateforme, vous avez le contrôle total sur l'accès aux dossiers des patients. Vous pouvez choisir de partager des informations spécifiques avec certains membres de l'équipe ou de garder certaines informations privées."; break;
		case ("Easily distribute or withdraw accreditations"): $textetraduit = "Distribuez ou retirez facilement des accréditations"; break;
		case ("Our user-friendly manager interface allows you to easily assign or revoke access rights. This means you can quickly give or take away permissions to your staff, giving you full control over who has access to what in your practice."): $textetraduit = "Notre interface gestionnaire conviviale vous permet d'attribuer ou de révoquer facilement des droits d'accès. Cela signifie que vous pouvez rapidement donner ou retirer des permissions à votre personnel, vous offrant ainsi un contrôle total sur qui a accès à quoi dans votre pratique."; break;
			  
      case ("Medical statistics"): $textetraduit = "Statistiques médicales"; break;
      case ("Medical statistics: Improve your efficiency"): $textetraduit = "Statistiques médicales : Améliorez votre efficacité"; break;
      case ("Discover your patients"): $textetraduit = "Découvrez vos patients"; break;
      case ("Our platform provides you with detailed medical statistics, including the average age of your patients and the most frequent pathologies. Use this information to better understand your patients and adapt your care accordingly."): $textetraduit = "Notre plateforme vous fournit des statistiques médicales détaillées, y compris l'âge moyen de vos patients et les pathologies les plus fréquentes. Utilisez ces informations pour mieux comprendre vos patients et adapter vos soins en conséquence."; break;
      case ("Manage your time effectively"): $textetraduit = "Gérez efficacement votre temps"; break;
      case ("Track the volume of your activity with our comprehensive range of statistics, including the total number of appointments, the number of cancelled appointments, and much more. These data will help you manage your schedule and optimize your practice."): $textetraduit = "Suivez le volume de votre activité avec notre gamme complète de statistiques, y compris le nombre total de rendez-vous, le nombre de rendez-vous annulés, et bien plus encore. Ces données vous aideront à gérer votre emploi du temps et à optimiser votre pratique."; break;
      case ("Understand your financial performance"): $textetraduit = "Comprenez votre performance financière"; break;
      case ("Our platform provides you with accurate financial statistics to help you understand your financial performance, identify trends, and make informed decisions for your practice."): $textetraduit = "Notre plateforme vous fournit des statistiques financières précises pour vous aider à comprendre votre performance financière, à identifier les tendances et à prendre des décisions éclairées pour votre pratique."; break;
			  
	case ("Draft consultation reports in a simple way") : $textetraduit = "Rédiger des comptes rendu de consultation de façon simple"; break;
    case ("Our platform offers a user-friendly interface that simplifies the drafting of your consultation reports. You can easily enter all relevant information, allowing you to devote more time to your patients and less time to paperwork.") : $textetraduit = "Notre plateforme offre une interface conviviale qui simplifie la rédaction de vos comptes rendus de consultation. Vous pouvez facilement saisir toutes les informations pertinentes, ce qui vous permet de consacrer plus de temps à vos patients et moins de temps à la paperasse."; break;
    case ("Add attachments to each consultation") : $textetraduit = "Ajouter des pièces jointes à chaque consultation"; break;
    case ("Each consultation is unique and may require specific documents or images. Our platform allows you to easily add attachments to each consultation, ensuring you always have all the information you need at your fingertips.") : $textetraduit = "Chaque consultation est unique et peut nécessiter des documents ou des images spécifiques. Notre plateforme vous permet d'ajouter facilement des pièces jointes à chaque consultation, vous assurant que vous avez toujours toutes les informations dont vous avez besoin à portée de main."; break;
    case ("Help yourself with ICD 10") : $textetraduit = "Aidez-vous du CIM 10"; break;
    case ("ICD 10 is a valuable tool for any health professional. Our platform integrates ICD 10, allowing you to accurately code your diagnoses and ensure accurate billing and tracking.") : $textetraduit = "Le CIM 10 est un outil précieux pour tout professionnel de santé. Notre plateforme intègre le CIM 10, vous permettant de coder précisément vos diagnostics et de garantir une facturation et un suivi précis."; break;
    case ("Help yourself with the list of authorized medicines on the market (AMM)") : $textetraduit = "Aidez-vous de la liste des médicaments autorisés sur le marché (AMM)"; break;
    case ("Prescribing medication is a major responsibility. Our platform includes a list of authorized medicines on the market, allowing you to prescribe with confidence, knowing that you have the most recent and accurate information.") : $textetraduit = "La prescription de médicaments est une responsabilité majeure. Notre plateforme comprend une liste des médicaments autorisés sur le marché, vous permettant de prescrire en toute confiance, en sachant que vous disposez des informations les plus récentes et les plus précises."; break;
    case ("Export all your consultations") : $textetraduit = "Exportez toutes vos consultations"; break;
    case ("Whether you need to share information with other health professionals or simply want to keep track of your work, our platform allows you to easily export all your consultations. You can thus access your data when you need it, wherever you are.") : $textetraduit = "Que vous ayez besoin de partager des informations avec d'autres professionnels de santé ou que vous souhaitiez simplement conserver une trace de votre travail, notre plateforme vous permet d'exporter facilement toutes vos consultations. Vous pouvez ainsi accéder à vos données quand vous en avez besoin, où que vous soyez."; break;
    case ("Highlight important medical history") : $textetraduit = "Mettez en évidence les antécédents médicaux importants"; break;
    case ("A patient's medical history can have a significant impact on their treatment. Our platform allows you to highlight important medical history, ensuring you always have all the key information at hand when making care decisions.") : $textetraduit = "Les antécédents médicaux d'un patient peuvent avoir un impact significatif sur son traitement. Notre plateforme vous permet de mettre en évidence les antécédents médicaux importants, vous assurant que vous avez toujours toutes les informations clés à portée de main lorsque vous prenez des décisions de soins."; break;
    case ("Create an ongoing care plan for the patient") : $textetraduit = "Réalisez un plan de soins en cours pour le patient"; break;
    case ("A well-designed care plan can make a big difference in a patient's health. Our platform allows you to create an ongoing care plan for each patient, helping you track progress and adjust treatment as needed.") : $textetraduit = "Un plan de soins bien conçu peut faire une grande différence dans la santé d'un patient. Notre plateforme vous permet de réaliser un plan de soins en cours pour chaque patient, vous aidant à suivre les progrès et à ajuster le traitement au besoin."; break;
    case ("Print your prescriptions and fees") : $textetraduit = "Imprimez vos prescriptions et honoraires"; break;
    case ("Managing prescriptions and fees can be a complex task. Our platform simplifies this process by allowing you to directly print your prescriptions and fees. You can thus focus on what really matters: providing quality care to your patients.") : $textetraduit = "La gestion des prescriptions et des honoraires peut être une tâche complexe. Notre plateforme simplifie ce processus en vous permettant d'imprimer directement vos prescriptions et honoraires. Vous pouvez ainsi vous concentrer sur ce qui compte vraiment : fournir des soins de qualité à vos patients."; break;			  
		
        case ("Teleconsultation : Maximum Effectiveness"): $textetraduit = "Téléconsultation : Efficacité maximale"; break;
        case ("Start a teleconsultation from a scheduled appointment or spontaneously. This offers maximum flexibility to meet patient needs at any time."): 
        $textetraduit = "Démarrez une téléconsultation à partir d'un rendez-vous programmé ou de manière spontanée. Cela offre une flexibilité maximale pour répondre aux besoins des patients à tout moment."; 
        break;
		case ("With our parallel drafting of the care act feature, you can capture important details during the teleconsultation. This allows for efficient use of your time."): 
        $textetraduit = "Avec notre fonctionnalité de rédaction parallèle de l'acte de soins, vous pouvez capturer les détails importants pendant la téléconsultation. Cela permet une utilisation efficace de votre temps."; 
        break;
		case ("With our advance billing option, you can ensure financial compensation for the services rendered. This facilitates payment management and ensures financial transparency."): 
        $textetraduit = "Avec notre option de facturation anticipée, vous pouvez assurer une compensation financière pour les services rendus. Cela facilite la gestion des paiements et assure la transparence financière."; 
        break;
			  
		case ("Teleconsultation"): $textetraduit = "Téléconsultation"; break;
		case ("Flexible Teleconsultation: Adapt to Patient Needs"): $textetraduit = "Téléconsultation flexible : adaptez-vous aux besoins des patients"; break;
		case ("Start a Teleconsultation: Scheduled or Spontaneous"): $textetraduit = "Démarrez une téléconsultation : programmée ou spontanée"; break;
		case ("Drafting"): $textetraduit = "Rédaction"; break;
		case ("Parallel Drafting of Care Act: Optimize Your Time"): $textetraduit = "Rédaction parallèle de l'acte de soins : optimisez votre temps"; break;
		case ("Billing"): $textetraduit = "Facturation"; break;
		case ("Advance Billing: Facilitate Payment Management"): $textetraduit = "Facturation anticipée : facilitez la gestion des paiements"; break;
		 
		case ("Acts of care : facilitate and improve") : $textetraduit = "Actes de soins : Facilitez et améliorez"; break;
		case ("Acts of care :") : $textetraduit = "Actes de soins :"; break;

		case ("Filter") : $textetraduit = "filtre"; break;
		case ("Agenda : optimize your time") : $textetraduit = "Agenda : optimisez votre temps"; break;
		case ("Cancellation") : $textetraduit = "annulation"; break;
		case ("multi-site") : $textetraduit = "multi-site"; break;
		case ("appointment") : $textetraduit = "rendez-vous"; break;
		case ("email") : $textetraduit = "email"; break;
		case ("teleconsultations") : $textetraduit = "téléconsultations"; break;
		case ("clear") : $textetraduit = "claire"; break;
		case ("intuitive") : $textetraduit = "intuitive"; break;
		case ("variable") : $textetraduit = "variables"; break;

		case ("Reservation slots of variable duration") : $textetraduit = "Créneaux de réservation de durée variables"; break;
		case ("Our calendar allows you to personalize the duration of your reservation slots. Whether you need a short window for a quick consultation or a longer window for a complex procedure, our system adapts to your needs.") : $textetraduit = "Notre agenda vous permet de personnaliser la durée de vos créneaux de réservation. Que vous ayez besoin d'un créneau court pour une consultation rapide ou d'un créneau plus long pour une intervention complexe, notre système s'adapte à vos besoins."; break;
		case ("Filter by consultation reason") : $textetraduit = "Filtre par motif de consultation"; break;
		case ("With our filter by consultation reason, you can easily sort and view your appointments. Whether you are looking for all patients who came for an annual check-up or those who need a particular follow-up, our filter helps you organize your day.") : $textetraduit = "Avec notre filtre par motif de consultation, vous pouvez facilement trier et visualiser vos rendez-vous. Que vous cherchiez tous les patients venus pour un contrôle annuel ou ceux qui ont besoin d'un suivi particulier, notre filtre vous aide à organiser votre journée."; break;
		case ("Cancellation in cascade") : $textetraduit = "Annulation en cascade"; break;
		case ("We know that unforeseen events are part of your daily life. That's why we have integrated a cascade cancellation function that allows you to cancel several appointments in one action, saving you valuable time.") : $textetraduit = "Nous savons que les imprévus font partie de votre quotidien. C'est pourquoi nous avons intégré une fonction d'annulation en cascade qui vous permet d'annuler plusieurs rendez-vous en une seule action, vous faisant gagner un temps précieux."; break;
		case ("Multi-site agenda") : $textetraduit = "Agenda multi-site"; break;
		case ("If you work on several sites, our multi-site agenda is for you. It allows you to manage all your appointments, regardless of their location, in a single agenda. No more stress of having to juggle multiple agendas!") : $textetraduit = "Si vous travaillez sur plusieurs sites, notre agenda multi-site est fait pour vous. Il vous permet de gérer tous vos rendez-vous, quel que soit leur lieu, dans un seul et même agenda. Fini le stress de devoir jongler entre plusieurs agendas !"; break;
		case ("Appointment booking in cascade") : $textetraduit = "Prise de rendez-vous en cascade"; break;
		case ("To make things easier for you, we have also integrated an appointment booking function in cascade. You can thus schedule several appointments at once, allowing you to effectively manage your schedule.") : $textetraduit = "Pour vous faciliter la tâche, nous avons également intégré une fonction de prise de rendez-vous en cascade. Vous pouvez ainsi programmer plusieurs rendez-vous en une seule fois, ce qui vous permet de gérer efficacement votre emploi du temps."; break;
		case ("Cancellation by email") : $textetraduit = "Annulation par email"; break;
		case ("To make the cancellation process as simple as possible, we have included an email cancellation option. Your patients can thus cancel their appointment with ease, leaving you more time to focus on what really matters: patient care.") : $textetraduit = "Pour rendre le processus d'annulation aussi simple que possible, nous avons inclus une option d'annulation par email. Vos patients peuvent ainsi annuler leur rendez-vous en toute simplicité, vous laissant plus de temps pour vous concentrer sur ce qui compte vraiment : les soins aux patients."; break;
		case ("Support for teleconsultations") : $textetraduit = "Prise en charge des téléconsultations"; break;
		case ("In an increasingly connected world, we have ensured that our agenda supports teleconsultations. You can thus extend your reach and provide care to your patients, wherever they are.") : $textetraduit = "Dans un monde de plus en plus connecté, nous avons fait en sorte que notre agenda prenne en charge les téléconsultations. Vous pouvez ainsi étendre votre portée et fournir des soins à vos patients, où qu'ils soient."; break;
		case ("Clear and intuitive interface") : $textetraduit = "Interface claire et intuitive"; break;
		case ("Finally, we designed our interface to be as clear and intuitive as possible. You can easily navigate your calendar and quickly access the information you need.") : $textetraduit = "Enfin, nous avons conçu notre interface pour qu'elle soit aussi claire et intuitive que possible. Vous pouvez ainsi naviguer facilement dans votre agenda et accéder rapidement aux informations dont vous avez besoin."; break;
	   
	   case ("Limitless") : $textetraduit = "sans limites"; break;
	   case ("Limitless features") : $textetraduit = "Fonctionnalités sans limites"; break;
	   case ("log in to my account") : $textetraduit = "je me connecte"; break;
	   case ("solution for healthcare professionals.") : $textetraduit = "solution destinée aux professionnels de santé."; break;
	   case ("An unusual story") : $textetraduit = "Une histoire hors du commun"; break;
	   case ("innovative nature") : $textetraduit = "caractère innovant"; break;
	   case ("30 years of experience") : $textetraduit = "30 ans d'expérience "; break;
			  
	   case ("1 months free") : $textetraduit = "1 mois gratuits"; break;
	   case ("3 months free") : $textetraduit = "4 mois gratuits"; break;
	   case ("no long-term commitment") : $textetraduit = "sans engagement"; break;
		  
	   case ("Our story is that of a unique and inspiring encounter. Aymeric, a young emergency nurse from Ard&egrave;che, crossed paths with an experienced emergency doctor during a mission to China, Herv&eacute;. Sharing a common passion for IT, they joined forces to create a solution for healthcare professionals.") : $textetraduit = "Notre histoire est celle d’une rencontre unique et inspirante. Aymeric, jeune infirmier urgentiste ardéchois, a croisé la route d'un médecin urgentiste expérimenté lors d'une mission en Chine, Herv&eacute;. Partageant une passion commune pour l’informatique, ils ont uni leurs forces pour créer une solution destinée aux professionnels de santé."; break;
	   case ("It was at this crucial moment that Fran&ccedil;ois, a computer engineer with 30 years of experience, joined the team. His contribution was decisive in professionalizing our platform down to the smallest detail.") : $textetraduit = "C'est à ce moment crucial que Fran&ccedil;ois, ingénieur informaticien avec 30 ans d'expérience, rejoint l'équipe. Sa contribution a été déterminante pour professionnaliser notre plateforme jusque dans les moindres détails."; break;
	   case ("Our journey is unique, as is our determination to improve access to healthcare through technology. Our solution stands out for its innovative nature and its ability to respond to current challenges in the healthcare sector. Join us on this exciting adventure.") : $textetraduit = "Notre parcours est unique, tout comme notre détermination à améliorer l’accès aux soins de santé grâce à la technologie. Notre solution se démarque par son caractère innovant et sa capacité à répondre aux enjeux actuels du secteur de la santé. Rejoignez-nous dans cette aventure passionnante."; break;

			  
			  
	   case ("unusual") : $textetraduit = "hors du commun"; break;
	   case ("An unusual story") : $textetraduit = "Une histoire hors du commun"; break;
	   case ("ProSante: Need help? We are just one click away !") : $textetraduit = "ProSanté : Besoin d’aide ? Nous sommes à un clic !"; break;
	   case ("Teletransmission") : $textetraduit = "Télétransmission "; break;
	   case ("Manage your appointments, consultations and invoice with us !") : $textetraduit = "Gérez vos rendez-vous, vos consultations et facturez avec nous !"; break;
	   case ("We support you in") : $textetraduit = "Nous vous accompagnons"; break;
	   case ("Our mission") : $textetraduit = "Notre mission"; break;
	   case ("from") : $textetraduit = "à partir de"; break;
	   case (" 50 &euro; / month including tax") : $textetraduit = " 50 &euro; / mois TTC"; break;
	   case (" 55 &euro; / user / month including tax") : $textetraduit = " 55 &euro; / utilisateur / mois TTC"; break;
	   case (" 30 &euro; / month including tax") : $textetraduit = " 30 &euro; / mois TTC"; break;
	   case (" 35 &euro; / user / month including tax") : $textetraduit = " 35 &euro; / utilisateur / mois TTC"; break;
	   case ("Know more") : $textetraduit = "En savoir plus"; break;
	   case ("Independant practionner") : $textetraduit = "Praticien indépendant"; break;
	   case ("Healthcare structure") : $textetraduit = "Structure de soins"; break;
	   case ("Independent or healthcare structure, our digital solution adapts to you. Choose the innovation designed for you.") : $textetraduit = "Indépendant ou structure de soins, notre solution digitale s'adapte à vous. Choisissez l’innovation pensée pour vous."; break;
	   case ("You are ?") : $textetraduit = "Vous êtes ?"; break;
	   case ("Take advantage now of 3 months free with no long-term commitment.") : $textetraduit = "Profitez dès maintenant de 3 mois gratuits sans engagement à long terme."; break;
	   case ("Take advantage now of 1 months free with no long-term commitment.") : $textetraduit = "Profitez dès maintenant de 1 mois gratuits sans engagement à long terme."; break;
	   case ("Contact us") : $textetraduit = "Contactez-nous"; break;
	   case ("Do you like P.I.H MEDIC ?") : $textetraduit = "Vous aimez P.I.H MEDIC ?"; break;
	   case ("Your support makes all the difference.") : $textetraduit = "Votre soutien fait toute la différence."; break;
	   case ("Help us") : $textetraduit = "Nous aider"; break;
	   case ("Manage your medical activity simply, completely and affordably") : $textetraduit = "Gérez votre activité médicale de façon simple, complète et abordable"; break;
	   case ("Manage your medical activity") : $textetraduit = "Gérez votre activité médicale"; break;
	   case ("simply, completely and affordably") : $textetraduit = "de façon simple, complète et abordable"; break;
	   case ("Manage your appointments simply, completely and affordably") : $textetraduit = "Gérez vos rendez-vous de façon simple, complète et abordable"; break;
	   case ("100% created in Auvergne Rh&ocirc;ne-Alpes") : $textetraduit = "100% créée en Auvergne Rh&ocirc;ne-Alpes"; break;
	   case ("Contact our sales team") : $textetraduit = "Contacter notre équipe commerciale"; break;
	   case ("Phone ") : $textetraduit = "Téléphone"; break;
	   case ("make the healthcare structure publicly visible and start the subscription") : $textetraduit = "rendez visible la structure publiquement et démarrez l’abonnement"; break;
	   case ("Search the PIH MED database for professionals who will join the care structure. Add them to your healthcare structure. Once they have accepted the invitation you can decide on their role in the healthcare structure.") : $textetraduit = "Recherchez dans la base de PIH MED les professionnels qui vont intégrer la structure de soins. Ajoutez-les à votre structure de soins. Une fois qu’ils auront accepté l’invitation vous pouvez décider de leur fonction dans la structure de soins."; break;
	   case ("Create a pro account for free") : $textetraduit = "Créer un compte pro gratuitement"; break;
	   case ("Open your healthcare structure on P.I.H MEDIC") : $textetraduit = "Ouvrez votre structure de soins sur P.I.H MEDIC"; break;
	   case ("Need help opening your healthcare structure ?") : $textetraduit = "Besoin d'aide pour ouvrir votre structure"; break;
	   case ("We contact you and support you every step of the way, right through to use.") : $textetraduit = "Nous vous contactons et vous accompagnons à chaque étape, jusqu'à l'utilisation."; break;
	   case ("Create a FREE professional account on P.T.H MEDIC, in just a few clicks. Indicate whether you are a healthcare professional or possibly a facility manager only.") : $textetraduit = "Créer un compte professionnel GRATUITEMENT sur P.I.H MEDIC, en quelques clics. Renseignez si vous êtes un professionnel de santé ou éventuellement un gestionnaire de structure uniquement."; break;
	   case ("Once your account is created, complete your professional information such as: your specialty, your payment methods and more.") : $textetraduit = "Une fois votre compte créé, complétez vos informations professionnelles telles que : votre spécialité, vos moyens de paiement et plus encore. "; break; 
	   case ("Create a FREE professional account on PIH MEDIC in a few clicks and provide your status as a healthcare professional and/or manager of the healthcare structure.") : $textetraduit = "Créez un compte professionnel GRATUITEMENT sur PIH MEDIC en quelques clics et renseignez votre statut de professionnel de santé et/ou de gestionnaire de la structure de soins."; break;
	   
	    //pihmedicalpro.php
        case ("Healthcare Profiles"):
            $textetraduit = "Profils de santé";
            break;
	   case ("Healthcare Profiles: Comprehensive and Customizable"):
            $textetraduit = "Profils de santé : complets et personnalisables";
            break;
        case ("Complete Profiles: Detailed Information for Each Professional"):
            $textetraduit = "Profils complets : informations détaillées pour chaque professionnel";
            break;
        case ("Each healthcare professional can provide detailed information in their profile. This allows patients to better understand their healthcare provider."):
            $textetraduit = "Chaque professionnel de la santé peut fournir des informations détaillées dans son profil. Cela permet aux patients de mieux comprendre leur prestataire de soins de santé.";
            break;
        case ("Customizable Profiles: Each Professional is Unique"):
            $textetraduit = "Profils personnalisables : chaque professionnel est unique";
            break;
        case ("Our profiles are fully customizable, allowing each healthcare professional to stand out. Highlight your specialties, qualifications, experience..."):
            $textetraduit = "Nos profils sont entièrement personnalisables, permettant à chaque professionnel de la santé de se démarquer. Mettez en valeur vos spécialités, qualifications, expérience...";
            break;
        case ("Google Visibility: Attract More Patients"):
            $textetraduit = "Visibilité sur Google : attirez plus de patients";
            break;
        case ("With our indexed pages, each healthcare professional's profile is visible on Google. This attracts more patients and increases online visibility."):
            $textetraduit = "Avec nos pages indexées, le profil de chaque professionnel de la santé est visible sur Google. Cela attire plus de patients et augmente la visibilité en ligne.";
            break;

	   case ("No appointment available on P.I.H MEDIC ? Search our medical directory.") : $textetraduit = "Pas de rendez-vous disponible sur P.I.H MEDIC ? Recherchez dans notre annuaire médical."; break;
	   case ("Exit the directory and find an appointment") : $textetraduit = "Quittez l'annuaire et trouvez un rendez-vous avec P.I.H MEDIC"; break;
	   case ("practitioner are on P.I.H MEDIC in this area") : $textetraduit = "praticiens sont sous P.I.H MEDIC dans cette zone"; break;
	   case ("Soon available") : $textetraduit = "Bientôt disponible"; break;
	   case ("You can easily create and track electronic health records") : $textetraduit = "Vous pouvez facilement constituer et suivre des dossiers de santé électroniques"; break;
	   case ("Easily schedule and manage your appointments") : $textetraduit = "Planifiez et gérez facilement vos rendez-vous"; break;
	   case ("Price upon request") : $textetraduit = "Prix sur demande"; break;
	   case ("Our service is affordable") : $textetraduit = "Notre service est abordable"; break;
	   case ("Quality medical assistance") : $textetraduit = "Assistance médicale de qualité"; break;
	   case ("Patients can benefit from improved access to care") : $textetraduit = "Les patients peuvent bénéficier d’un meilleur accès aux soins"; break;
	   case ("You can easily manage replacements") : $textetraduit = "Gérez facilement les remplacements"; break;
	   case ("We help set up a teleconsultation room") : $textetraduit = "Nous aidons à mettre en place une salle de téléconsultation"; break;			  
	   case ("Setting up a health center") : $textetraduit = "Mettant en place un centre de soins"; break;
			  
	   case ("Setting up a teleconsultation room") : $textetraduit = "Mettant en place une salle de téléconsultation"; break;			  	case ("You can write consultations in patients homes") : $textetraduit = "Rédigez les consultations au domicile des patients si besoin"; break;
	   case ("Easily coordinate your patients care") : $textetraduit = "Coordonnez facilement les soins de vos patients"; break;
	   case ("You only pay for what you use") : $textetraduit = "Vous ne payez que pour ce que vous utilisez"; break;
	   case ("Use statistical features") : $textetraduit = "Utilisez les fonctionnalités statistiques"; break;
	   case ("Personalize your healthcare center web page") : $textetraduit = "Personnalisez la page web de votre centre de santé"; break;
	   case ("Share your patients medical records") : $textetraduit = "Partagez les dossiers médicaux"; break;
	   case ("The fruit of experience and youth: discover our medical software designed by a stellar duo !") : $textetraduit = "Le fruit de l’expérience et de la jeunesse : découvrez notre logiciel médical conçu par un duo de choc !"; break;
	   case ("You can export data") : $textetraduit = "Exportez les données quand vous le souhaitez"; break;
			  
	   case ("Consult us") : $textetraduit = "Consultez-nous"; break;
	   case ("Price upon request") : $textetraduit = "Prix sur demande"; break;
	   case ("Our service is affordable, which can municipalities save on costs while still receiving quality care") : $textetraduit = "Notre service est abordable, ce qui permet aux municipalités d'économiser sur les coûts tout en recevant des soins de qualité"; break;
	   case ("Patients can be assured of receiving quality medical assistance") : $textetraduit = "Les patients peuvent être assurés de recevoir une assistance médicale de qualité"; break;
	   case ("Patients can benefit from improved access to care through open booking slots for community patients") : $textetraduit = "Les patients peuvent bénéficier d’un meilleur accès aux soins grâce à des créneaux de réservation ouverts"; break;
	   case ("Patients can benefit from improved access to care through open booking slots for community patients") : $textetraduit = "Les patients peuvent bénéficier d’un meilleur accès aux soins grâce à des créneaux de réservation ouverts"; break;
	   case ("78&euro/month/practice") : $textetraduit = "78&euro;/mois/cabinet"; break;
	   case ("You can easily manage replacements for your medical practice, allowing you to maintain continuity of care for your patients") : $textetraduit = "Gérez les remplacements pour votre cabinet médical, ce qui vous permet de maintenir une continuité des soins pour vos patients"; break;
	   case ("We can help patients access quality care by helping municipalities set up a teleconsultation room") : $textetraduit = "Nous pouvons aider les patients à accéder à des soins de qualité en aidant les municipalités à mettre en place une salle de téléconsultation"; break;			  
	   case ("You can write consultations in patients homes and view their medical records, improving efficiency and flexibility.") : $textetraduit = "Vous pouvez rédiger les consultations au domicile des patients et consulter leur dossier médical, ce qui améliore l’efficacité et la flexibilité."; break;
	   case ("Easily coordinate your patients care with Care Scheduling, improving the quality of care") : $textetraduit = "Coordonnez facilement les soins de vos patients grâce au planning de soins, améliorant ainsi la qualité des soins."; break;
	   case ("72&euro;/month/practitioner with a structural cost of 25&euro;/month") : $textetraduit = "72&euro;/mois/praticien avec un coût structure de 25&euro;/mois"; break;
	   case ("You only pay for what you use, helping you keep costs down and maximize your budget") : $textetraduit = "Vous ne payez que pour ce que vous utilisez, ce qui vous permet de réduire les coûts et d’optimiser votre budget"; break;
	   case ("Use statistical features to better understand health trends and optimize costs") : $textetraduit = "Utilisez les fonctionnalités statistiques pour mieux comprendre les tendances en matière de santé et optimiser les coûts"; break;
	   case ("Personalize your healthcare center web page so that it reflects your brand image and values") : $textetraduit = "Personnalisez la page web de votre centre de santé pour qu’elle reflète votre image de marque et vos valeurs"; break;
	   case ("Share your patients medical records with other healthcare professionals") : $textetraduit = "Partagez les dossiers médicaux de vos patients avec d’autres professionnels de la santé"; break;
	   case ("Easily schedule and manage your patients appointments") : $textetraduit = "Planifiez et gérez facilement vos rendez-vous avec vos patients"; break;
	   case ("The fruit of experience and youth: discover our medical software designed by a stellar duo !") : $textetraduit = "Le fruit de l’expérience et de la jeunesse : découvrez notre logiciel médical conçu par un duo de choc !"; break;
	   case ("two generations, one vision") : $textetraduit = "deux générations, une vision"; break;
	   case ("Want to try? We are moving !") : $textetraduit = "Envie d'essayer ? Nous nous déplaçons !"; break;
	   case ("Health home, care center, medical office, multi-professional or not, benefit from our innovative digital solution that is easy to use and available on all media. It was created and designed by healthcare professionals to meet the needs of patients.") : $textetraduit = "Maison de santé, centre de soins, cabinet médical, pluri-professionnel ou non, bénéficiez de notre solution digitale innovante facile à utiliser et disponible sur tous les supports. Elle a été créée et pensée par des professionnels de santé pour répondre aux besoins des patients. "; break;
	   case ("Health home, care center, medical office, multi-professional or not, benefit from our innovative digital solution that is easy to use and available on all media.") : $textetraduit = "Maison de santé, centre de soins, cabinet médical, pluri-professionnel ou non, bénéficiez de notre solution digitale innovante facile à utiliser et disponible sur tous les supports."; break;
	   case ("As founders from a semi-urban area, we are proud to present our innovative digital solution which will allow your municipality to benefit from easy and rapid access to healthcare at unbeatable prices.") : $textetraduit = "En tant que fondateurs issus d'une zone semi-urbaine, nous sommes fiers de vous présenter notre solution numérique innovante qui permettra à votre commune de bénéficier d'un accès facile et rapide aux soins à des prix imbattables."; break;
			  
			  
	   case ("You can export data relating to your medical practice, allowing you to have a local backup and greater flexibility in using the data") : $textetraduit = "Vous pouvez exporter les données relatives à votre cabinet médical, ce qui vous permet d’avoir une sauvegarde locale et une plus grande flexibilité dans l’utilisation des données"; break;
	   case ("You can easily create and track electronic health records for your patients, allowing you to have an overview of their health status and medical history") : $textetraduit = "Vous pouvez facilement constituer et suivre des dossiers de santé électroniques pour vos patients, ce qui vous permet d’avoir une vue d’ensemble sur leur état de santé et leur historique médical"; break;
	   case ("Our guarantees") : $textetraduit = "Nos garanties"; break;
	   case ("A solution for healthcare professionals created by healthcare professionals.") : $textetraduit = "Une solution pour les professionnels de santé créée par des professionnels de santé."; break;
	   case ("Discover our offers now") : $textetraduit = "Découvrez nos offres maintentant"; break;
	   case ("The solution that boosts the regions !") : $textetraduit = "La solution qui booste les régions !"; break;
	   case ("YOU ARE A HEALTHCARE STRUCTURE") : $textetraduit = "STRUCTURE DE SOINS"; break;
	   case ("1 diary per practitioner") : $textetraduit = "1 agenda par praticien"; break;
	   case ("Shared medical file or not") : $textetraduit = "partage des dossiers médicaux ou non"; break;
	   case ("Free manager profile") : $textetraduit = "profil gestionnaire gratuit"; break;
	   case ("Creating a personalized web page") : $textetraduit = "page web structure personnalisée"; break;
	   case ("From $72/month/practitioner") : $textetraduit = "à partir 72€/mois/praticien"; break;
	   case ("72&euro;/month/practitioner") : $textetraduit = "72&euro;/mois/praticien"; break;
	   case ("Learn more") : $textetraduit = "en savoir plus"; break;
	   case ("YOU ARE A PRIVATE NURSING PRACTICE") : $textetraduit = "CABINET INFIRMIERS LIbéraux"; break;
	   case ("PRIVATE NURSING PRACTICE") : $textetraduit = "INFIRMIERS LIbéraux"; break;
	   case ("Shared booking calendar") : $textetraduit = "calendrier de réservation partagé"; break;
	   case ("Optimized home visit") : $textetraduit = "agenda de visite intelligent"; break;
	   case ("from $99/practice/month") : $textetraduit = "à partir de 99€/praticien/mois"; break;
	   case ("YOU ARE AN INDEPENDENT PRACTITIONER") : $textetraduit = "praticien indépendant"; break;
	   case ("Smart booking calendar") : $textetraduit = "calendrier de réservation intelligent"; break;
	   case ("From $49/month") : $textetraduit = "à partir de 49€/mois"; break;
	   case ("YOU ARE A MUNICIPALITY") : $textetraduit = "municipalité"; break;
	   case ("Medical appointments guaranteed") : $textetraduit = "consultation médicales garanties"; break;
	   case ("from $299/month") : $textetraduit = "à partir de 299€/mois"; break;
	   case ("Help with teleconsultation") : $textetraduit = "aide à la téléconsultation"; break;
	   
	   case ("EVENT") : $textetraduit = "évenement"; break;

	   case ("Shared medical record") : $textetraduit = "dossier médical partagé"; break;
	   case ("Teleconsultation") : $textetraduit = "téléconsultation"; break;
	   case ("Export data quickly") : $textetraduit = "exportation rapide des données"; break;
	   case ("Installation in 1 hour") : $textetraduit = "instalation en 1 heure"; break;
	   case ("From $300/month") : $textetraduit = "à partir de 300€/mois"; break;

	   case ("Are you a reseller ?") : $textetraduit = "Vous êtes revendeur 6?"; break;
	   case ("Let's work together with P.I.H MEDIC.") : $textetraduit = "Travaillons ensemble avec P.I.H MEDIC"; break;
	   case ("Designed for multi-structure care exercise") : $textetraduit = "Conçu pour l'exercice multi-structures de soins"; break;
	   case ("Speed of execution and instalation") : $textetraduit = "Rapidité d'installation et d'exécution"; break;
	   case ("Suitable for high turnover") : $textetraduit = "Adapté pour un turn-over important"; break;
	   case ("In addition to our experience in an isolated environment, one of our founders, from a rural environment, provided the software elements adapted to this context.") : $textetraduit = "En plus de notre expérience en milieu isolé, l'un de nos fondateur, issu du milieu rural, a apporté les éléments logiciel adapté à ce contexte."; break;
	   case ("P.I.H MEDIC translated into 4 languages") : $textetraduit = "P.I.H MEDIC traduit en 4 langues "; break;
	   case ("geographical precision of healthcare structures") : $textetraduit = "précision géographique des structures de soins"; break;
	   case ("Designed for remote sites and rurality") : $textetraduit = "Conçu pour les sites isolés et la ruralité"; break;
	   case ("With our professional experience, doctor and international emergency nurse, we have designed a tool for small structures, in isolated environments, whether international or rural.") : $textetraduit = "Forts de notre expérience professionnelle, médecin et infirmier urgentiste à l'international, nous avons conçu un outil pour les petites structures, en milieu isolé, qu'il soit international ou rural."; break;
	   case ("They trust us") : $textetraduit = "Ils nous font confiance"; break;
	   case ("Who does P.I.H apply to ?") : $textetraduit = "A qui s'adresse le P.I.H ?"; break;
	   case ("Who does P.I.H MEDIC apply to ?") : $textetraduit = "A qui s'adresse P.I.H MEDIC ?"; break;
	   case ("For the professionals") : $textetraduit = "Pour les professionnels"; break;
	   case ("Support") : $textetraduit = "Support"; break;
	   case ("Our story") : $textetraduit = "Notre histoire"; break;
	   case ("Have a demo") : $textetraduit = "Démonstration"; break;
	   case ("See videos") : $textetraduit = "Regarder les vidéos"; break;
	   case ("Need information ? We contact you !") : $textetraduit = "Besoin de renseignements ? Nous vous contactons !"; break;
	   case ("Need information ? Ask to be called !") : $textetraduit = "Besoin de renseignements ? Nous vous appelons !"; break;
		  
	   case ("unbeatable value for money") : $textetraduit = "rapport qualité-prix imbattable"; break;
	   case ("affordable price") : $textetraduit = "prix abordable"; break;
	   case ("freedom to choose") : $textetraduit = "liberté de choisir"; break;
	   case ("transparency") : $textetraduit = "transparence"; break;
	   case ("respect") : $textetraduit = "respect"; break;
	   case ("cutting-edge technology") : $textetraduit = "technologie de pointe"; break;
	   case ("preferred choice") : $textetraduit = "choix préféré"; break;
			  

	   case ("At P.I.H Medic, we pride ourselves on our commitment to excellence. Our solution offers unbeatable value for money, giving you the best of technology at an affordable price.") : $textetraduit = "Chez P.I.H Medic, nous sommes fiers de notre engagement envers l’excellence. Notre solution offre un rapport qualité-prix imbattable, vous offrant le meilleur de la technologie à un prix abordable."; break;
	   case ("Without commitment, our solution offers you the freedom to choose. If you decide not to proceed, we export your data in an easily readable format, ensuring transparency and respect for your information.") : $textetraduit = "Sans engagement, notre solution vous offre la liberté de choisir. Si vous décidez de ne pas poursuivre, nous exportons vos données dans un format facilement lisible, garantissant la transparence et le respect de vos informations."; break;
	   case ("Join us and benefit from cutting-edge technology at an affordable price. Take advantage of the PIH Medic difference and discover why we are the preferred choice of healthcare professionals.") : $textetraduit = "Rejoignez-nous et bénéficiez d'une technologie de pointe à un prix abordable. Profitez de la différence PIH Medic et découvrez pourquoi nous sommes le choix préféré des professionnels de la santé."; break;
			  
	   case ("An unbeatable value for money") : $textetraduit = "Un rapport qualité-prix imbattable"; break;
	   case ("For the professionals") : $textetraduit = "Pour les professionnels"; break;
	   case ("Our professional solution") : $textetraduit = "Notre solution pour les professionnels"; break;
	   case ("Support") : $textetraduit = "Support"; break;
	   case ("Our story") : $textetraduit = "Notre histoire"; break;
	   case ("Have a demo") : $textetraduit = "Démonstration"; break;
	   case ("Discover P.I.H Pro for you") : $textetraduit = "Découvrez P.I.H pro pour vous"; break;
	   case ("Our story") : $textetraduit = "Notre histoire"; break;
	   case ("Have a demo") : $textetraduit = "Démonstration"; break;
	   case ("We are in support of care centers") : $textetraduit = "En support des structures médicales"; break;
	   case ("Take a medical appointment") : $textetraduit = "Prendre un rendez-vous médical"; break;
	   case ("Your given name") : $textetraduit = "Votre prénom"; break;
	   case ("Your familly name") : $textetraduit = "Votre nom"; break;
	   case ("Your phone number") : $textetraduit = "Votre numéro de téléphone"; break;
	   case ("Your email adress") : $textetraduit = "Votre adresse email"; break;
	   case ("Hello") : $textetraduit = "Bonjour"; break;
	   case ("Your request has been taken into account. The P.I.H team undertakes to provide you with an answer within a maximum of 24 hours (working days).") : $textetraduit = "Votre demande a été prise en compte. L'équipe P.I.H s'engage à vous apporter une réponse dans un délai maximum de 24h (jours ouvrés)."; break;
	   case ("Sincerely") : $textetraduit = "Cordialement"; break;
	   case ("The P.I.H team") : $textetraduit = "L'équipe P.I.H"; break;
	   case ("View online") : $textetraduit = "Voir en ligne"; break;
	   case ("P.I.H - Acknowledgment of receipt") : $textetraduit = "P.I.H - Accusé de réception"; break;
	   case ("The request has been sent. We promise to get back to you within 24 hours.") : $textetraduit = "La demande a été envoyée. Nous nous engageons à vous répondre dans les 24 heures."; break;
	   case ("Your health data is encrypted and protected. We are also protected against cyberattacks and have powerful monitoring tools.") : $textetraduit = "Vos données de santé sont cryptées et protégées. Nous sommes également protégés contre les cyberattaques et disposons d'outils de surveillance performants."; break;
	   case ("Health has no borders. So we made it easily usable. Add healthcare professionals and patients to your clinic and work together with P.I.H !") : $textetraduit = "La santé n'a pas de frontières. Nous l'avons donc rendu facilement utilisable. Ajoutez des professionnels de la santé et des patients à votre clinique et travaillez avec P.I.H !"; break;
	   case ("It is not just about caring. We thought about prevention, processes, risk management and training. Health is a condition.") : $textetraduit = "Il ne s'agit pas seulement de prendre soin. Nous avons pensé à la prévention, aux processus, à la gestion des risques et à la formation. La santé est une condition."; break;
	   case ("Doctor, nurse, physiotherapist, psychologist or dietician and more, our platform is made for you. Manage your patient files, print your reports and more.") : $textetraduit = "Médecin, infirmier, kinésithérapeute, psychologue ou diététicienne et plus encore, notre plateforme est faite pour vous. Gérez vos dossiers patients, imprimez vos rapports et bien plus encore."; break;
	   case ("Whether you are a healthcare home, a care center, or a medical practice, with or without professional diversity, benefit from our innovative and easy-to-use digital solution.") : $textetraduit = "Que vous soyez une maison de santé, un centre de soins, ou un cabinet médical, avec ou sans diversité professionnelle, bénéficiez de notre solution digitale innovante et facile à utiliser."; break;
	   case ("Find the care center near you, make an appointment and find out about nearby health professionals. You then join a community of patients !") : $textetraduit = "Trouvez le centre de soins près de chez vous, prenez rendez-vous et renseignez-vous sur les professionnels de santé à proximité. Vous rejoignez alors une communauté de patients !"; break;
	   case ("As a manager, follow easily the activity of your care center remotely or not, thanks to the multiple statistics generated by our platform.") : $textetraduit = "En tant que gestionnaire, suivez facilement les activités de votre centre de soins à distance ou non, grâce aux multiples statistiques générées par notre plateforme."; break;
	   case ("WHE SUPPORT YOU IN") : $textetraduit = "NOUS VOUS ACCOMPAGNONS"; break;
	   case ("IMPORTING") : $textetraduit = "IMPORTER"; break;
	   case ("Import your existing data into our system with our help.") : $textetraduit = "Importez vos données existantes dans notre système avec notre aide"; break;
	   case ("CONNECTING") : $textetraduit = "CONNECTER"; break;
	   case ("Integrate P.I.H and its data into your ecosystem.") : $textetraduit = "Intégrez P.I.H et ses données dans votre écosystème"; break;
	   case ("EXPORTING") : $textetraduit = "EXPORTER"; break;
	   case ("Save and export data from our platform easily.") : $textetraduit = "Enregistrez et exportez facilement les données de notre plateforme"; break;
	   case ("Do not hesitate. Jusk ask.") : $textetraduit = "N'hésitez pas. Demandez."; break;
	   case ("Ready ? Let's go !") : $textetraduit = "Prêt ? Allons-y"; break;
	   case ("Contact our commercial team") : $textetraduit = "Contactez notre équipe commerciale"; break;

	   case ("MEDICAL APPLICATION") : $textetraduit = "APPLICATION MEDICALE"; break;
	   case ("Manage your daily appointments. Record your consultations and associated medical documents. CIM 10 integrated (International Classification of Diseases).") : $textetraduit = "Gérez vos rendez-vous quotidiens. Enregistrez vos consultations et les documents médicaux associés. CIM 10 intégrée (Classification internationale des maladies)."; break;
	   case ("MANAGE ACCES RIGHTS") : $textetraduit = "GEREZ LES DROITS D'ACCES"; break;
	   case ("Update, suspend or delete a professional easily. Several managers possible for the same account.") : $textetraduit = "Mettez à jour, suspendez ou supprimez un professionnel facilement. Plusieurs gérants possibles pour un même compte."; break;
	   case ("TEAM CALENDAR") : $textetraduit = "AGENDA"; break;
	   case ("Easily create and manage your appointment slots. Share your calendars between clinic health professionals.") : $textetraduit = "Créez et gérez facilement vos créneaux de rendez-vous. Partagez vos agendas entre les professionnels de santé de la clinique."; break;
	   case ("PERSONALIZE") : $textetraduit = "PERSONNALISEZ"; break;
	   case ("Describe what you do. Fill in your details, access map and contact. Customize your page with a logo, photos and colorimetry.") : $textetraduit = "Décrivez ce que vous faites. Renseignez vos coordonnées, plan d'accès et contact. Personnalisez votre page avec un logo, des photos et une colorimétrie."; break;
	   case ("Are you a patient ? Make an appointment with P.I.H patient.") : $textetraduit = "Êtes-vous un patient ? Prenez rendez-vous sur P.I.H Patient."; break;
	   case ("Make an appointment with P.I.H patient") : $textetraduit = "Prenez rendez-vous sur P.I.H Patient"; break;
	   case ("Visit our professional page.") : $textetraduit = "Visiter notre page professionnel."; break;
	   case ("Prices as close as possible to your consumption") : $textetraduit = "Des prix au plus près de votre consommation"; break;
	   case ("How many health professionals make up your care structure ?") : $textetraduit = "Combien de professionnels de santé composent votre structure de soins ?"; break;
	   case ("full-time equivalent") : $textetraduit = "équivalent temps plein"; break;
	   case ("Based on a maximum of 400 appointments and consultations per month per practitioner.") : $textetraduit = "Sur la base d'un maximum de 600 rendez-vous et consultations par mois et par praticien."; break;
	   case ("care structure/month") : $textetraduit = "structure de soins/mois"; break;
	   case ("on the declarative value of") : $textetraduit = "sur la valeur déclarative de"; break;
	   case ("$") : $textetraduit = "€"; break;
	   case ("FTE") : $textetraduit = "ETP"; break;
	   case ("Price all taxes included") : $textetraduit = "Tarif toutes taxes comprises"; break;
	   case ("OUR TEAM") : $textetraduit = "NOTRE ÉQUIPE"; break;
	   case ("Our team") : $textetraduit = "Notre équipe"; break;
	   case ("Administrative and commercial manager") : $textetraduit = "Responsable administrative et commerciale"; break;
	   case ("Co-founder") : $textetraduit = "Co-fondateur"; break;
	   case ("Emergency doctor") : $textetraduit = "Médecin urgentiste"; break;
	   case ("Emergency nurse") : $textetraduit = "Infirmier urgentiste"; break;
	   case ("Technical director") : $textetraduit = "Directeur technique"; break;
	   case ("PRICES") : $textetraduit = "TARIFS"; break;
	   case ("Frequently Asked Questions") : $textetraduit = "questions fréquemment posées"; break;
	   case ("for professionals") : $textetraduit = "pour les professionnels"; break;
	   
	   case ("Medical appointments") : $textetraduit = "Rendez-vous médicaux"; break;
	   case ("An intuitive interface") : $textetraduit = "Une interface intuitive"; break;
	   
	   case ("SANDRA USES P.I.H MEDIC") : $textetraduit = "SANDRA UTILISE P.I.H MEDIC"; break;
	   case ("Why use ") : $textetraduit = "Pourquoi utiliser "; break;
	   
	   case ("Created by healthcare professionals") : $textetraduit = "Créé par des professionnels de santé"; break;
	   case ("Integrated International Classification of Diseases (ICD)") : $textetraduit = "Classification internationale des maladies (CIM) intégrée"; break;
	   case ("International Classification of Diseases") : $textetraduit = "Classification internationale des maladies (CIM)"; break;
	   case ("Integrated CIM 10") : $textetraduit = "CIM 10 intégré"; break;
	   
	   case ("Multi-device") : $textetraduit = "Fonctionne sur PC, tablette et portable"; break;
	   case ("Rurality and isolated structures") : $textetraduit = "Ruralité et structures isolées"; break;
	   case ("Multi-device") : $textetraduit = "Fonctionne sur PC, tablette et portable"; break;
	   case ("GDPR health compliant") : $textetraduit = "Conforme RGPD santé"; break;

// etc etc

//pihmedicalprohelp.php
	   case ("Open a care structure with P.I.H-MED") : $textetraduit = "Ouvrez une structure de soins avec P.I.H-MED"; break;
	   case ("Watch the video") : $textetraduit = "Regardez la vidéo"; break;
	   case ("With P.I.H-MED, create your care structure quickly and for free. It's quick and easy. Simply fill in a structure name, a quick description, the postal address and an email address.") : $textetraduit = "Avec P.I.H-MED, créez rapidement et gratuitement votre structure de soins. C'est simple et rapide. Renseignez simplement un nom de structure, une description rapide, l'adresse postale et une adresse email."; break;
	   case ("It's quick and easy. Simply fill in a structure name, a quick description, the postal address and an email address.") : $textetraduit = "C'est simple et rapide. Renseignez simplement un nom de structure, une description rapide, l'adresse postale et une adresse email."; break;
	   case ("describe and personalize a care structure") : $textetraduit = "décrivez et personnalisez une structure de soins"; break;
	   case ("Fill in the main information of the care structure with ease. Notify future patients of the skills and values of your structure and how to get there. Notify the presence of a parking lot if it exists. Finally, add a logo, photos and view the page of your structure as future patients will see it.") : $textetraduit = "Renseignez les principales informations de la structure de soins en toute simplicité. Informez les futurs patients des compétences et des valeurs de votre structure et comment y arriver. Signalez la présence d'un parking s'il existe. Enfin, ajoutez un logo, des photos et visualisez la page de votre structure telle que les futurs patients la verront."; break;
	   case ("Fill in the main information of the care structure with ease. Notify future patients of the skills and values of your structure. Notify the presence of a parking lot if it exists. Finally, add a logo, photos and view the page of your structure as future patients will see it.") : $textetraduit = "Renseignez les principales informations de la structure de soins en toute simplicité. Informez les futurs patients des compétences et des valeurs de votre structure. Signalez la présence d'un parking s'il existe. Enfin, ajoutez un logo, des photos et visualisez la page de votre structure telle que les futurs patients la verront."; break;
	   case ("Search among the P.I.H-MED professionals for those who will integrate the care structure. Once they have approved, decide on their function in the structure.") : $textetraduit = "Recherchez parmis les professionnels de P.I.H-MED ceux qui vont intégrer la structure de soins. Une fois qu'ils auront approuvé, décidez de leur fonction dans la structure."; break;
	   case ("Add professionals in the structure") : $textetraduit = "Ajoutez des professionnels dans la structure"; break;
	   case ("Decide on the medical data sharing policy in the structure. A total medical sharing allows visibility on the patient files having consulted in the structure.") : $textetraduit = "Décidez de la politique de partage des données médicales dans la structure. Un partage médical total permet une visibilité sur les dossiers patients ayant consulté dans la structure."; break;
	   case ("Sharing medical data") : $textetraduit = "Partagez les données médicales"; break;
	   case ("View the statistics of the structure from the start of its activity. Note the variations in activity over the months. Note the characteristics of the patient, for example the age groups as well as the most encountered pathologies. Also, follow the evolution of the turnover.") : $textetraduit = "Visualisez les statistiques de la structure depuis le début de son activité. Notez les variations d'activité au fil des mois. Notez les caractéristiques du patient, par exemple les tranches d'âge ainsi que les pathologies les plus rencontrées. Suivez également l'évolution du chiffre d'affaires."; break;
	   case ("STRUCTURE STATISTICS") : $textetraduit = "Visualisez les statistiques de la structure"; break;
	   case ("Put the structure online and start the subscription") : $textetraduit = "Mettez la structure en ligne et démarrez l&#8217;abonnement"; break;
	   case ("Once the clinic information has been filled in and the professionals have been added. It's time to bring the care structure online. Thus, patients can make appointments and professionals can start consulting.") : $textetraduit = "Une fois les informations de la clinique renseignées et les professionnels ajoutés, il est temps de mettre la structure de soins en ligne. Ainsi, les patients peuvent prendre rendez-vous et les professionnels peuvent commencer à consulter."; break;
	   case ("Once the clinic information has been filled in and the professionals have been added. It's time to bring the care structure online and to make payment. Thus, patients can make appointments and professionals can start consulting.") : $textetraduit = "Une fois les informations de la clinique renseignées et les professionnels ajoutés, il est temps de mettre la structure de soins en ligne et de procéder au paiement. Ainsi, les patients peuvent prendre rendez-vous et les professionnels peuvent commencer à consulter."; break;
	   case ("Once you practice in a P.I.H-MED care structure, you can create a reservation calendar in this structure. This is the first step before creating reservation time slots.") : $textetraduit = "Une fois que vous exercez dans une structure de soins P.I.H-MED, vous pouvez créer un calendrier de réservation dans cette structure. C'est la première étape avant de créer des plages horaires de réservation."; break;
	   case ("Create a booking calendar") : $textetraduit = "Créez un calendrier de réservation"; break;
	   case ("The calendar") : $textetraduit = "Le calendrier"; break;
	   case ("As a practitioner") : $textetraduit = "En tant que praticien"; break;
	   case ("Add a combination of time slots to the calendar. Configure the range profile (at the doctor's office, visit or video consultation). Notify the acceptance of new patients or not and several other parameters.") : $textetraduit = "Ajoutez une combinaison de créneaux horaires au calendrier. Configurez le profil de la plage (au cabinet du médecin, en visite ou en visio-consultation). Notifiez l'acceptation ou non de nouveaux patients et plusieurs autres paramètres."; break;
	   case ("Add a combination of time slots to the calendar. Configure the range profile (at office, visit or video consultation). Notify the acceptance of new patients or not and several other parameters.") : $textetraduit = "Ajoutez une combinaison de créneaux horaires au calendrier. Configurez le profil de la plage (au cabinet du médecin, en visite ou en visio-consultation). Notifiez si les nouveaux patients sont acceptés ou non et plusieurs autres paramètres."; break;
	   case ("Add time slots to the calendar") : $textetraduit = "Ajoutez des plages horaires au calendrier"; break;
	   case ("Once the time slot has been set, it must be put online so that patients can reserve reservation slots. Make sure the range is set up correctly before putting it online.") : $textetraduit = "Une fois la plage horaire paramétrée, il est nécessaire de la mettre en ligne afin que les patients puissent réserver des créneaux de réservations. Assurez-vous que la plage est correctement paramétrée avant de la mettre en ligne."; break;
	   case ("Upload a time slot") : $textetraduit = "Mettez en ligne une plage horaire"; break;
	   case ("Navigate the calendar") : $textetraduit = "Naviguez dans le calendrier"; break;
	   case ("Learn about calendar actions for easy navigation. For example, search for a specific patient within the week.") : $textetraduit = "Sachez en plus sur les actions de calendrier pour une navigation facile. Par exemple, recherchez un patient spécifique dans la semaine."; break;
	   case ("describe and personalize a care structure") : $textetraduit = "décrivez et personnalisez une structure de soins"; break;
	   case ("Cancel an appointment by notifying whether it is at your initiative or that of the patient.") : $textetraduit = "Annulez un rendez-vous en notifiant si c'est votre initiative ou celle du patient."; break;
	   case ("Cancel an appointment") : $textetraduit = "Annulez un rendez-vous"; break;
	   case ("Request an unavailability") : $textetraduit = "Posez une indisponibilité"; break;
	   case ("Block several appointment slots for a specific period, for one or more calendars.") : $textetraduit = "Bloquez plusieurs créneaux de rendez-vous pour une durée déterminée, pour un ou plusieurs calendriers."; break;
	   case ("medical consultations") : $textetraduit = "consultations médicales"; break;
	   case ("Register a new patient to your medical record. Optionally, add a loved one.") : $textetraduit = "Enregistrez un nouveau patient à votre dossier médical. Ajoutez éventuellement un être cher."; break;	   
	   case ("How to enter a consultation ? How to choose among the types of consultation.") : $textetraduit = "Comment saisir une consultation ? Comment choisir parmi les types de consultation ?"; break;
	   case ("New medical procedure") : $textetraduit = "Nouvel acte médical"; break;
	   case ("How to navigate through the different consultations? From your patient list? What are the different options? View your personal medical records as well as your shared records.") : $textetraduit = "Naviguez parmi les différentes consultations ? Sachez quelles sont les différentes options. Consultez vos dossiers médicaux personnels ainsi que vos dossiers partagés."; break;
	   case ("How to navigate through the different consultations ? From your patient list ? What are the different options ? View your personal medical records as well as your shared records.") : $textetraduit = "Naviguez parmi les différentes consultations. Sachez quelles sont les différentes options. Consultez vos dossiers médicaux personnels ainsi que vos dossiers partagés."; break;
	   case ("Navigate the medical file") : $textetraduit = "Naviguez dans le dossier médical"; break;
	   case ("About the care structure") : $textetraduit = "Concernant la structure de soins"; break;
	   case ("Create a patient account") : $textetraduit = "Créez un compte patient"; break;
	   case ("After a consultation, you can schedule a medical appointment with the patient. Learn how to perform this operation in a few clicks.") : $textetraduit = "Après une consultation, vous pouvez planifier un rendez-vous médical avec le patient. Découvrez comment réaliser cette opération en quelques clics."; break;
	   case ("Help Videos") : $textetraduit = "Vidéos d'aide"; break;
	   case ("For your patients") : $textetraduit = "Pour vos patients"; break;
	   case ("Your patients are looking for a practitioner or a care structure and make an appointment.") : $textetraduit = "Vos patients recherchent un praticien ou une structure de soins et prennent rendez-vous."; break;
	   case ("Find a practitioner and make an appointment") : $textetraduit = "Trouvez un praticien et prenez un rendez-vous"; break;
	   case ("Go back to videos") : $textetraduit = "Retour aux videos"; break;
	   case ("Develop a healthcare offer in your municipality in :") : $textetraduit = "développer une offre de soins dans votre commune en :"; break;
			  
		 
	} // fin du francais
        break;
    case "cn":
      switch ($texte) {
// hbdashboardadmical.php
	   case ("ADMINISTRATOR LOCATION CALENDARS") : $textetraduit = "管理员位置日历"; break;
// hbdashboardadmicomm.php
	   case ("ADMINISTRATOR LOCATION CONNECTIONS") : $textetraduit = "管理员位置连接"; break;
	   case ("CONNECTIONS") : $textetraduit = "连接"; break;
	   case ("From") : $textetraduit = "来自"; break;
	   case ("Function") : $textetraduit = "函数"; break;
	   case ("to") : $textetraduit = "到"; break;
// hbdashboardadmisetup.php
	   case ("ADMINISTRATOR LOCATION SETUP") : $textetraduit = "管理员位置设置"; break;
	   case ("Add new location") : $textetraduit = "添加新位置"; break;
	   case ("Choose 9 photos and 1 logo for your location") : $textetraduit = "为的的位置选择9张照片和一个徽标"; break;
	   case ("CUSTOMIZE YOUR LOCATIONS") : $textetraduit = "自定义你的位置"; break;
	   case ("HOME PAGE PHOTOS") : $textetraduit = "主页照片"; break;
	   case ("Location name, localisation, public description and more") : $textetraduit = "位置名称、本地化、公开描述等等"; break;
	   case ("PAGE DISPLAY SETUP") : $textetraduit = "页面显示设置"; break;
	   case ("PAGE EDIT") : $textetraduit = "主页编辑"; break;
	   case ("You choose the main color of your location and more") : $textetraduit = "您可以选择你所在位置的主要颜色等等"; break;
// hbdashboardadmiutilajout.php
	   case ("profile") : $textetraduit = "配置文件"; break;
	   case ("REGISTER A NEW USER") : $textetraduit = "创建新用户"; break;
	   case ("user") : $textetraduit = "用户"; break;
// hbdashboardadmiutilmodif.php
	   case ("patient") : $textetraduit = "患者"; break;
// hbdashboardadmiutil.php
	   case ("All users") : $textetraduit = "所有用户"; break;
	   case ("active users") : $textetraduit = "活动用户"; break;
	   case ("approve this user") : $textetraduit = "批准此用户"; break;
	   case ("approved users") : $textetraduit = "授权用户"; break;

	   case ("Bookmarking users") : $textetraduit = "为用户添加书签"; break;
	   case ("change to manager") : $textetraduit = "更改为管理员"; break;
	   case ("inactive users") : $textetraduit = "非活动用户"; break;
	   case ("MANAGE YOUR LOCATION USERS") : $textetraduit = "管理你的位置用户"; break;
	   case ("Managers") : $textetraduit = "管理员"; break;
	   case ("Site Administrator") : $textetraduit = "站点管理员"; break;
	   case ("move to active") : $textetraduit = "移至活动状态"; break;
	   case ("move to inactive") : $textetraduit = "移至非活动状态"; break;
	   case ("Name") : $textetraduit = "名称"; break;
	   case ("refuse this user") : $textetraduit = "拒绝此用户"; break;
	   case ("remove this user") : $textetraduit = "删除此用户"; break;
	   case ("suspend this user") : $textetraduit = "暂停此用户"; break;
	   case ("USERS") : $textetraduit = "用户"; break;
	   case ("Users waiting for agreement") : $textetraduit = "等待通过协议的用户"; break;
// hbdashboardutil.php
	   case ("auxiliary") : $textetraduit = "辅助"; break;
	   case ("Health professionals") : $textetraduit = "卫生专业人员"; break;
	   case ("manager") : $textetraduit = "管理员"; break;
	   case ("Overlord") : $textetraduit = "超载"; break;
	   case ("practitioner") : $textetraduit = "医疗执业者"; break;
	   case ("paramedical") : $textetraduit = "辅助医疗的"; break;

// hbindex.php
	   case ("APPOINTMENT") : $textetraduit = "预约"; break;
	   case ("Are you a") : $textetraduit = "你是"; break;
	   case ("BEST LOCAL RECOMMENDATIONS") : $textetraduit = "最佳本地推荐"; break;
	   case ("care center"): $textetraduit = "护理中心";break;
	   case ("Contact us"): $textetraduit = "联系我们";break;
	   case ("CONVERSATIONS"): $textetraduit = "对话";break;
       case ("Discover P.I.H for you") :$textetraduit = "为你发现P.I.H";break;  
       case ("Do not hesitate.") :$textetraduit = "不要犹豫.";break;  
	   case ("Find a care center" ) :$textetraduit = "查找护理中心";break;  
	   case ("Find a practitioner or healthcare facility"): $textetraduit = "查找医疗执业者或者医疗机构";break; 
	   case ("Find the history of your consultations and your prescriptions on your secured space."): $textetraduit = "在您的安全空间上查找您的咨询和处方的历史记录.";break; 
	   case ("FOR THE PATIENTS"): $textetraduit = "为了患者";break;  
	   case ("healthcare professional"): $textetraduit = "医疗保健专业人员";break;  
	   case ("Jusk ask."): $textetraduit = "尽管问.";break;  
	   case ("LOCAL RISKS INFORMATIONS"): $textetraduit = "本地风险信息";break;  
	   case ("Make an appointment"): $textetraduit = "进行预约";break;  
	   case ("Make appointments with health professionals. Choose email or sms reminders. Have a view of your past and future appointments."): $textetraduit = "与卫生专业人员预约，选择电子邮件或短信提醒，查看您的预约记录.";break;
	   case ("manager"): $textetraduit = "管理员";break;  
	   case ("Medical prevention through information on the risks near the clinic and how to manage them.") : $textetraduit = "通过管理附近诊所的风险信息来预防医疗风险.";break;    
	   case ("Meet our care centers now") : $textetraduit = "立即前往我们的护理中心";break;    
	   case ("Meet our care centers now") : $textetraduit = "立即前往我们的护理中心";break;
	   case ("Need help ?"):$textetraduit = "需要帮助吗 ?";break; 
	   case ("Need to connect to a"):$textetraduit = "需要帮忙联系";break;    
	   case ("or a"):$textetraduit = "或者";break; 
	   case ("OUR STORY"):$textetraduit = "我们的故事E";break;    
	   case ("Our story"):$textetraduit = "我们的故事";break;    
 	   case ("Participation in patient community discussions through our blogs."): $textetraduit = "通过我们的博客参与患者交流讨论.";break; 
	   case ("For the patient"):$textetraduit = "为了患者";break;    
 	   case ("PERSONAL MEDICAL SPACE"):$textetraduit = "个人医疗空间";break; 
	   case ("Recommendations from skilled professionals nearby. Comments and ratings of references by users."):$textetraduit = "  附近专业人士的推荐。用户反馈的评论和评级.";break; 
 	   case ("right place"):$textetraduit = "正确的地点";break;   
 	   case ("Start now"):$textetraduit = "现在进行";break;   
 	   case ("Social"):$textetraduit = "社交的";break;   
 	   case ("This is the"):$textetraduit = "这是";break;    
	   case ("Where"):$textetraduit = "哪里" ;break;  
	   case ("You are a"):$textetraduit = "您是个" ;break; 

//hbhaut.php
	   case ("professional"):$textetraduit = "专业的" ;break;  
	   case ("Manager"):$textetraduit = "管理员" ;break;  
	   case ("Caregiver"):$textetraduit = "照顾者" ;break;  
	   case ("My account"):$textetraduit = "我的账户" ;break;  
	   
//hblieuajout.php
	   case ("Clinic, consulting room"):$textetraduit = "诊所，咨询室" ;break;  
	   case ('How your location will appear'):$textetraduit = "您的位置如何显示" ;break;  
//hb lieucolorchange.php
	   case ("confidential"):$textetraduit = "机密" ;break;  
	   case ("Display"):$textetraduit = "显示" ;break;  
	   case ("MAIN PAGE"):$textetraduit = "主页" ;break;  
	   case ("Nothing"):$textetraduit = "空白" ;break;  
	   case ("Display"):$textetraduit = "显示" ;break;  
	   case ("Display on pages of type"):$textetraduit = "在文字页面上显示 " ;break;  

	   case ("page setup"):$textetraduit = " 页面设置" ;break;  
	   case ("public"):$textetraduit = "公共" ;break;  
	   case ("restricted"):$textetraduit = "受限" ;break;  
	   case ("Slideshow"):$textetraduit = "幻灯片" ;break;  

//hblieumodif.php
       case ("CHANGE LOCATION DATAS"):$textetraduit = "更改位置数据" ;break;   
	   case ("Confidential : to managers"):$textetraduit = "机密 : 管理员用" ;break;  
	   case ("Creation date"):$textetraduit = "创建日期" ;break;  
	   case ("Description"):$textetraduit = "描述" ;break;  
	   case ("For all"):$textetraduit = "全部" ;break;  
	   case ("INFORMATIONS ON MAIN PAGES"):$textetraduit = "主页信息" ;break;  
	   case ("Location id"):$textetraduit = "位置账号" ;break;  
	   case ("MAIN INFORMATIONS"):$textetraduit = "主要信息" ;break;  
	   case ("Map will be ok only if location datas are given"):$textetraduit = "只有在输入位置数据之后地图才可用" ;break;  
	   case ("Other contact"):$textetraduit = "其他联系" ;break;  
	   case ("Please check  datas /  map"):$textetraduit = "请检查数据/地图" ;break;  
	   case ("Please, inform 'how to go', buses, trains, etc"):$textetraduit = "请选择交通工具“公共汽车，火车等等”" ;break;  
	   case ("Restricted : to users"):$textetraduit = "Restreint : utilisateurs" ;break;  
	   case ("You are about to change datas of your main page"):$textetraduit = "您即将改变您的主页数据" ;break;  
//hblieuphoto.php
	   case ("Photos management"):$textetraduit = "编辑图片" ;break;  
	   case ("Photo texte"):$textetraduit = "发送图片" ;break;  
//hblogin.php
	   case ("Forget your password ?") : $textetraduit = "忘记密码？"; break;
	   case ("Go back") : $textetraduit = "返回"; break;
	   case ("Login") : $textetraduit = "登录"; break;
	   case ("No account ? Register.") : $textetraduit = "没有账户 ?注册 "; break;
       case ('Password') : $textetraduit = "密码"; break;
//hbmedajoutpatient.php
       case ("Address") : $textetraduit = "地址"; break;
       case ("ADDRESS & CONTACT") : $textetraduit = "地址跟联系方式"; break;
       case ("City") : $textetraduit = "城市"; break;
       case ("Country") : $textetraduit = "乡村"; break;
       case ("Date of birth") : $textetraduit = "出生日期"; break;
       case ("Familly name") : $textetraduit = "姓"; break;
       case ("Given name") : $textetraduit = "名字"; break;
	   case ("MEDICAL INFORMATIONS TO PROVIDE TO CONSULTANT") : $textetraduit = "为质询提供医疗记录"; break;
       case ("Phone") : $textetraduit = "电话."; break;
       case ("Post code") : $textetraduit = "邮政编码l"; break;
       case ("Provisional login") : $textetraduit = "临时登录"; break;
       case ("Provisional password") : $textetraduit = "临时密码"; break;
       case ("MAIN INFORMATIONS") : $textetraduit = "主要信息"; break;
	   case ("Other way to contact / family / trusted support people") : $textetraduit = "其他联系方式/家属/支持信任的人"; break;
	   case ("REGISTER A NEW PATIENT") : $textetraduit = "注册成为一名新患者"; break;


//hbmedficheacte.php
       case ("Add / change attachment") : $textetraduit = "添加/更改连接"; break;
       case ("ADDRESS & CONTACTS") : $textetraduit = "地址跟联系人"; break;
       case ("Bill") : $textetraduit = "法案"; break;
	   case ("MEDICAL ACT") : $textetraduit = "医疗法案"; break;
	   case ("Medical team") : $textetraduit = "医疗团队"; break;
	   case ("MODIFY") : $textetraduit = "修改"; break;
	   case ("PRESCRIPTION") : $textetraduit = "处方"; break;
       case ("PAST MEDICAL HISTORY") : $textetraduit = "既往史"; break;
       case ("Report") : $textetraduit = "报告"; break;
       case ("TO PATIENT DATAS") : $textetraduit = "患者数据"; break;
//hbmedficheactemodif.php
       case ("CALL LOCATION") : $textetraduit = "呼叫位置"; break;
       case ('Code act') : $textetraduit = "法案编码"; break;
       case ('City, country') : $textetraduit = "城市，乡村"; break;
       case ('Currency, means of payment') : $textetraduit = "货币，支付方式"; break;
       case ("DATE & TIME") : $textetraduit = "日期和时间"; break;
       case ('Doctor') : $textetraduit = "医生"; break;
       case ("DESTINATION") : $textetraduit = "目的地"; break;
       case ("MEDICAL (Dr, nurse, paramedic)") : $textetraduit = "医疗（医生，护士，辅助医疗人员）"; break;
       case ('Not medicalized transport, helicopter, other') : $textetraduit = "非医疗转运，直升飞机，其他"; break;
       case ("Nurse") : $textetraduit = "护士"; break;
       case ('Prescription / information to patient') : $textetraduit = "处方 /给患者的信息"; break;
       case ('Search / filter a city') : $textetraduit = "查询/筛选城市"; break;
       case ('Search / filter an hospital') : $textetraduit = "查询/筛选医院l"; break;
       case ('Street name') : $textetraduit = "街道名称"; break;
       case ("Paramedic") : $textetraduit = "辅助医疗"; break;
       case ('Price') : $textetraduit = "价格"; break;
       case ("TRANSPORT") : $textetraduit = "转运"; break;
       case ('Write a filter...') : $textetraduit = "输入筛选内容"; break;
       case ('Write a report here.') : $textetraduit = "在这里输入一份报告"; break;
//hbmedicheactephoto.php
       case ("Add / change") : $textetraduit = "添加/更改"; break;
       case ('delete') : $textetraduit = "删除"; break;
       case ("MEDICAL ACT - ADD / CHANGE ATTACHMENT") : $textetraduit = "医疗法案 - 添加 /更改连接"; break;
       case ("to act") : $textetraduit = "选择法案"; break;
       case ("to patient") : $textetraduit = "选择患者"; break;

//hbmedfichepatient.php
       case ("ADD MEDICAL ACT") : $textetraduit = "添加医疗法案"; break;
       case ("if necessary, change this before going to add/modify an act") : $textetraduit = "如果需要, 在添加/修改法案之前更改此内容"; break;
       case ("CHANGE PATIENT DATAS") : $textetraduit = "更改患者数据"; break;
//hbmedlisteactes.php
	   case ("Acts recorded in medical file") : $textetraduit = "在医疗档案中记录的法案"; break;
	   case ("All") : $textetraduit = "全部"; break;
	   case ("dob") : $textetraduit = "出生日期"; break;
	   case ("Gender") : $textetraduit = "性别"; break;
	   case ("MEDICAL ACTS") : $textetraduit = "医疗法案"; break;
	   case ("Identity") : $textetraduit = "身份"; break;
//hbmedlistepatients.php
	   case ("CREATE A NEW PATIENT") : $textetraduit = "创建新的患者"; break;
	   case ("Enabled patients to be added to your medical datas") : $textetraduit = "允许添加患者至您的医疗数据"; break;
	   case ("medical acts") : $textetraduit = "医疗法案"; break;
	   case ("Patients recorded in your medical file") : $textetraduit = "在你文档中的患者记录"; break;
	   case ("PATIENTS LIST") : $textetraduit = "患者清单"; break;
	   case ("Year of birth") : $textetraduit = "出生年份"; break;
//hbmedpatientmodif.php
	   case ("New login ?") : $textetraduit = "新登录 ?"; break;
//hbmenuhaut.php
	   case ('Log out') : $textetraduit = "退出登录"; break;
	   case ('MY PRO ACCOUNT') : $textetraduit = "MON COMPTE PRO"; break;
	   case ('Change workplace') : $textetraduit = "Mes lieux d'exercice"; break;
	   case ('MY WORKPLACES') : $textetraduit = "MES LIEUX D'EXERCICE"; break;
	   case ('Switch to Manager') : $textetraduit = "切换到管理员"; break;
	   case ('Switch to Practitioner') : $textetraduit = "切换到医疗执业者"; break;
	   case ('Log out') : $textetraduit = "退出登录"; break;
	   case ('Welcome ! Be careful, all your new changes will be applied to this place.') : $textetraduit = "欢迎 ! 注意, 您所有新更改的信息在这里都可用."; break;
	   case ('Welcome ! Be careful, all your new consultations will now be recorded in this place.') : $textetraduit = "欢迎 ! 注意,  您所有的新咨询内容在这里都会被记录下来."; break;

//hbmenuhautpatient.php
	   case ('My relatives') : $textetraduit = "我的亲属"; break;
	   case ('Log in') : $textetraduit = "登录"; break;
	   case ('Help') : $textetraduit = "求助"; break;
	   case ('Make a new appointment') : $textetraduit = "进行新的预约"; break;
	   case ('My past and future reservations') : $textetraduit = "我过去和未来的保存"; break;
	   case ('My documents following my consultations') : $textetraduit = "我咨询之后的文件"; break;

//hbmedstat.php
	   case ("Acts") : $textetraduit = "医疗行为"; break;
	   case ("Destinations") : $textetraduit = "目的地"; break;
	   case ("Female") : $textetraduit = "女性"; break;
	   case ("Financial Code Acts") : $textetraduit = "金融法典法案"; break;
	   case ("Location Origin") : $textetraduit = "地点起源"; break;
	   case ("Male") : $textetraduit = "男性"; break;
	   case ("MEDICAL ACTS STATISTICS") : $textetraduit = "医疗行为统计学"; break;
	   case ("Pathologies") : $textetraduit = "病理学"; break;
	   case ("Payment mode") : $textetraduit = "支付方式"; break;
	   case ("Reanimation acts") : $textetraduit = "激励行为"; break;
	   case ("Technical acts") : $textetraduit = "技术行为"; break;
	   case ("Transport vector") : $textetraduit = "运输工具"; break;
	   case ("Type of medical acts") : $textetraduit = "医疗行为的类型"; break;

//hbmenubaspatient.php
	   case ("New appointment") : $textetraduit = "新预约"; break;
	   case ("Reservations") : $textetraduit = "保留"; break;
	   case ("Documents") : $textetraduit = "文件"; break;


//hbutilisateurpasswordoubli.php

	   case ("Do not answer to that mail, no way ! ") : $textetraduit = "不要回答那封邮件，千万别 !"; break;
	   case ("Do not forget to change it as soon as possible") : $textetraduit = "不要忘记尽快更改它"; break;
	   case ("Enter your login or mail") : $textetraduit = "登录您的系统或者邮件"; break;
	   case ("we will send your new password by mail, please login and change it as soon as possible") : $textetraduit = " 我们会通过您的邮件向您发送新的密码，请尽快登录并修改"; break;
	   case ("Your new passord is : ") : $textetraduit = "您的新密码是 : "; break;

//hbutilisateurcompte.php
	   case ("MY ACCOUNT") : $textetraduit = "我的账户"; break;
	   case ("Personal info") : $textetraduit = "个人信息"; break;
	   case ("Provide personal data and how we can reach you") : $textetraduit = "请提供个人数据跟我们联系您的方式"; break;
	   case ("Login and security") : $textetraduit = "登录和安全"; break;
	   case ("Update you password and secure your account") : $textetraduit = "更新您的密码并确保您的账户安全"; break;
	   case ("Relatives") : $textetraduit = "亲属"; break;
	   case ("Make an appointment for your relatives") : $textetraduit = "为您的亲属进行预约"; break;
	   case ("My medical history") : $textetraduit = "我的既往史"; break;
	   case ("Need to deactivate your account?") : $textetraduit = "需要停用您的账户 ?"; break;
	   case ("Take care of that now") : $textetraduit = "现在就处理它"; break;

//hbutilisateurcompte.php
	   case ("MY ACCOUNT") : $textetraduit = "我的账户"; break;
	   case ("Personal info") : $textetraduit = "个人信息"; break;
	   case ("Provide personal data and how we can reach you") : $textetraduit = "请提供个人数据跟我们联系您的方式"; break;

//hbutilisateurpatient.php
	   case ("NEXT APPOINTMENTS") : $textetraduit = "下一个预约"; break;
	   case ("All reservations") : $textetraduit = "所有预约"; break;
	   case ("Modify") : $textetraduit = "修改"; break;
	   case ("No consultation booked at this time. Find a professional now !") : $textetraduit = "目前没有预约会诊，现在去找专业人员吧 !"; break;
	   case ("LAST APPOINTMENTS") : $textetraduit = "上一次的预约记录"; break;
	   case ("FAVORITE PRACTITIONERS") : $textetraduit = "热门的医生"; break;
	   
//hbutilisateurpatientallrvt.php
	   case ("RESERVATIONS") : $textetraduit = "保留"; break;
	   case ("Status") : $textetraduit = "状态"; break;
	   case ("Professional") : $textetraduit = "专业"; break;
	   case ("Place") : $textetraduit = "地点"; break;
	   case ("Appointment") : $textetraduit = "预约"; break;
	   case ("Reserved") : $textetraduit = "保留"; break;
	   case ("past") : $textetraduit = "过去"; break;
	   case ("forthcoming") : $textetraduit = "即将来临"; break;
	   case ("Past") : $textetraduit = "过去"; break;
	   case ("Forthcoming") : $textetraduit = "即将来临"; break;
	   case ("Details") : $textetraduit = "详情"; break;
	   case ("All ") : $textetraduit = "所有"; break;
// etc etc

	} // fin chinois
	break;
} // fin de la selection des langues

return $textetraduit;

} // fin de la fonction
?>


<style type="text/css">
/*  #PC
================================================== */
@media all and (min-width: 950px) {
.modal-content{margin: 100px auto; width:40%; /* 15% from the top and centered */}
}

/*  #PC
================================================== */
@media all and (max-width: 950px) {
.modal-content{margin: 100px auto; width:80%;  /* 15% from the top and centered */}
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.6); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: white;
  padding: 20px;
  border: 1px solid #888;
  border-radius:15px;
  color:#1F3C60;
  max-height:65%;
  overflow:hidden;
  animation: 0.2s ease-out 0s 1 slideInFromLeft;
  font-size: 15px;
}

/* Modal Content/Box */
.modal-content h1{
margin-top:0px;
margin-bottom:10px;
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}



#mydivsession {
  position: absolute;
  z-index: 9;
  background-color: #f1f1f1;
  border: 1px solid #d3d3d3;
  text-align: center;
}

#mydivheader {
  padding: 10px;
  cursor: move;
  z-index: 10;
  background-color: #2196F3;
  color: #fff;
}
</style>


<script>

dragElement(document.getElementById("mydivsession"));

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id + "header")) {
    // if present, the header is where you move the DIV from:
    document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
  } else {
    // otherwise, move the DIV from anywhere inside the DIV:
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    // stop moving when mouse button is released:
    document.onmouseup = null;
    document.onmousemove = null;
  }
}
</script>

<script>
// fonction qui permet de fermer les modals avec la touche echap
// Obtenez tous les modals
var modals = document.getElementsByClassName('modal');
	
// Lorsque l'utilisateur appuie sur la touche Échap, fermez tous les modals
document.onkeydown = function(evt) {
    evt = evt || window.event;
    var isEscape = false;
    if ("key" in evt) {
        isEscape = (evt.key === "Escape" || evt.key === "Esc");
    } else {
        isEscape = (evt.keyCode === 27);
    }
    if (isEscape) {
        for (var i = 0; i < modals.length; i++) {
            if (modals[i].style.display === "block") {
                modals[i].style.display = "none";
            }
        }
    }
};
	



</script>

<div id="languemodal" class="modal">
<!-- Modal content -->
<div class="modal-content" align="left">
<h2 style="font-size:125%; font-family: 'Titillium Web', sans-serif; margin-top:0px;">
<span style="font-weight:bold; margin-right:10px; cursor:pointer" onClick="document.getElementById('languemodal').style.display = 'none'"> < </span>
<br><?php echo trad('Languages'); ?>
</h2>
<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>

<a href="<?php echo $actual_link ?>&lang=en" ?>
<button class="button"><img src="images/197374.png" width="20" align="absmiddle" style="margin:5px 5px 0 5px;"> English </button></a>

<a href="<?php echo $actual_link ?>&lang=fr" ?>
<button class="button"><img src="images/197560.png" width="20" align="absmiddle" style="margin:5px 5px 0 5px;"> Français </button></a>

<a href="<?php echo $actual_link ?>&lang=cn" ?>
<button class="button" style="display: none;"><img src="images/197375.png" width="20" align="absmiddle" style="margin:5px 5px 0px 5px;"> 中国人 </button></a>

</div>
</div>
<script>
function modalbox(div){
// recupère l'id de la modalbox et l'ouvre modal et l'ouvre
var modal = document.getElementById(div);
modal.style.display = "block";
}
</script>



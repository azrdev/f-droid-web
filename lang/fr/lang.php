<?php
include_once(LANG.DIRECTORY_SEPARATOR.'languages.php');
include_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'categories.php');
include_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'permissions.php');
$lang = array(
	'iface' => array( //{{{
		'language' => 'Langage',
		'version' => 'Version',
		'added' => 'Ajouté le',
		'size' => 'Taille',
		'desc' => 'Description',
		'license' => 'Licences',
		'license_list' => 'Liste des Licences',
		'categories' => 'Catégories',
		'categories_list' => 'Liste des catégories',
		'updated' => 'Modifié le',
		'summary' => 'Abstract',
		'permissions' => 'Permissions',
		'download' => 'Télécharger',
		'antifeatures' => 'Caractéristiques négatives',
		'donate' => 'Donnez',
		'bitcoin' => 'Bitcoin',
		'flattr' => 'Flattr',
		'requirements' => 'Exigences',
		'alt_cat_link' => 'Choisissez une application de la catégorie',
		'all_categories' => 'Toutes les catégories',
		'alt_lic_link' => 'Choisissez une application avec la licence',
		'all_licenses' => 'Toutes les licences',
		'word_search' => 'Nom / abstract / description',
		'form_val' => 'Chercher',
		'form_field' => 'Valeur à chercher',
		'menu' => 'Menu',
		'sdkver' => 'SDK',
		'share' => 'Partager le contenu avec',
		'page' => 'Pages',
		'tracker' => 'Suivit',
		'web' => 'Site web',
		'sources' => 'Code source',
		'go_to_page' => 'Aller à la page',
		'back' => 'Retour à la liste',
		'applist' => 'Applications',
		'lastapplist' => 'Dernières applications',
		'ret_menu' => 'Retour au menu',
		'access_applist' => "Accès à la liste des applications",
		'access_appsheet' => "Accès à la fiche de l'application",
		'access_lastapplist' => "Accès à la liste des dernières applications",
		'access_form_val' => "Accès au formulaire de recherche",
		'browse_lic' => "Accès au filtre par licence",
		'browse_cat' => "Accès au filtre par catégories",
		'sheet' => 'Visualiser',
		'nbr_result' => 'Nombre de résultats',
		'no_result' => "Aucune application n'a été trouvée avec les critères que vous avez choisis.",
		'error_label' => 'Erreur',
		'error_message' => "Ooops, ce dépot d'applications est temporairement indisponible. Nous en sommes désolé, veuillez ré-essayer plus tard...",
		'error_message_sheet' => "Ooops, la fiche de l'application demandée n'existe pas..."), //}}}
	'lang' => $languages_list,
	'perms' => $permissions_list,
	'cat' => $categories_list,
	'afeat' => array( //{{{
		'Ads' => "Contient de la publicité.",
		'Tracking' => "Traque et rapporte ses activités quelque part sans votre consentement.",
		'NonFreeNet' => "Dépend de services informatiques que l'on ne peut changer (ou alors sans changements majeurs dans l'application).",
		'NonFreeAdd' => "Promeut des ajouts non libres (C'est en fait une publicité pour d'autres applications non libres).",
		'NonFreeDep' => "Dépend d'applications non libres."), //}}}
	'lic' => array( //{{{
		'Unknown' => "Non spécifiée",
		'GPLv2' => "GNU GPL v2",
		'GPLv2+' => "GNU GPL v2 ou sup.",
		'GPLv3' => "GNU GPL v3",
		'GPLv3+' => "GNU GPL v3 ou sup",
		'GPL' => "GPL non spécifiée",
		'AGPL' => "Afferro GPL v3",
		'Apache2' => "Apache 2",
		'MIT' => "License MIT X11",
		'BSD' => "License BSD orig.",
		'NewBSD' => "License BSD mod.") //}}}
);
?>

<?php
// Heading
$_['heading_title'] = 'Importation d\'objet';
$_['text_openbay'] = 'OpenBay Pro';
$_['text_ebay'] = 'eBay';

// Text
$_['text_sync_import_line1'] = '<strong>Attention !</strong>Ceci importera tous vos produits eBay et construira une structure de catégories dans votre boutique. Il est conseillé de supprimer toutes vos catégories et produits avant d\'exécuter cette option.<br />La structure des catégories importée sera celle d\'eBay (dans le cas où vous avez une boutique eBay). Vous pouvez renommer, supprimer et modifier les catégories importées sans affecter vos produits eBay.';
$_['text_sync_import_line3'] = 'Vous devez vous assurer de votre serveur peut accepter et traiter un grand nombre de données POST. 1000 objets eBay requièrent environ 40 Mo, vous devrez donc calculer vos besoins. Si l\'importation de données échoue, le problème pourra provenir probablement d\'un réglage concernant la limite de données POST. La limite de mémoire PHP doit être d\'environ 128 Mo.';
$_['text_sync_server_size'] = 'Actuellement, votre serveur peut accepter : ';
$_['text_sync_memory_size'] = 'Votre limite de mémoire PHP : ';
$_['text_import_confirm'] = 'Ceci importera tous vos objets eBay en tant que nouveaux produits, êtes-vous sûr ? Cette fonction est irréversible ! Assurez-vous d\'abord de disposer d\'une sauvegarde !';
$_['text_import_notify'] = 'Votre demande d\'importation a été envoyé pour traitement. Une importation prend environ 1 heure pour 1000 éléments.';
$_['text_import_images_msg1'] = 'Des images sont en attente d\'importation/copie depuis eBay. Veuillez actualisez cette page, Si le nombre d\'éléments ne diminue pas alors';
$_['text_import_images_msg2'] = 'cliquez ici';
$_['text_import_images_msg3'] = 'et patientez. Vous trouverez plus d\'informations concernant ce processus <a href="http://shop.openbaypro.com/index.php?route=information/faq&topic=8_45" target="_blank">ici</a>';

// Entry
$_['entry_import_item_advanced'] = 'Obtenir des données avancées';
$_['entry_import_categories'] = 'Importer des catégories';
$_['entry_import_description'] = 'Importer les descriptions d\'objet';
$_['entry_import'] = 'Importer des objets eBay';

// Buttons
$_['button_import'] = 'Importer';

// Help
$_['help_import_item_advanced'] = 'Il faut compter jusqu\'à 10 fois plus de temps pour importer des éléments. Importer les poids, tailles, ISBN, etc. si disponible';
$_['help_import_categories'] = 'Crée une structure de catégories dans votre boutique à partir des catégories eBay';
$_['help_import_description'] = 'Ceci importera tout, y compris la partie HTML, les compteurs de visites, etc.';

// Error
$_['error_import'] = 'Échec du chargement';
$_['error_maintenance'] = 'Votre boutique est en mode maintenance. L\'importation échouera !';
$_['error_ajax_load'] = 'Impossible de se connecter au serveur';
$_['error_validation'] = 'Vous devez vous inscrire afin d\'obtenir le jeton de votre API et activer le module.';

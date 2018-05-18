<?php
/*
*  Copyright (C) 2015-2018 P. Mergey
*  This program is free software: you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation, either version 3 of the License, or
*  (at your option) any later version.
*  This program is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*  You should have received a copy of the GNU General Public License
*  along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

// Heading
$_['heading_title'] = 'Paramètres';
$_['text_openbay'] = 'OpenBay Pro';
$_['text_fba'] = 'Expédié par Amazon';
// Text
$_['text_success'] = 'Vos paramètres ont été sauvegardés';
$_['text_status'] = 'Statut';
$_['text_account_ok'] = 'Connexion aux expéditions par Amazon approuvée';
$_['text_api_ok'] = 'Connexion à l’API approuvée';
$_['text_api_status'] = 'Connexion à l’API';
$_['text_edit'] = 'Modifier les paramètres des expéditions par Amazon';
$_['text_standard'] = 'Standard';
$_['text_expedited'] = 'Expédiée';
$_['text_priority'] = 'Priorité';
$_['text_fillorkill'] = 'Tout ou rien';
$_['text_fillall'] = 'Tout';
$_['text_fillallavailable'] = 'Tout disponible';
$_['text_prefix_warning'] = 'Ne modifiez pas ce paramètreaprès que des commandes ont été envoyées à Amazon, réglez ceci uniquement lors de la première installation.';
$_['text_disabled_cancel'] = 'Désactivé : ne pas automatiquement annuler les expéditions';
$_['text_validate_success'] = 'Les détails de votre APi fonctionnement correctement ! Vous devez appuyer sur le bouton de sauvegarde pour vous assurer que ces paramètres sont enregistrés.';
$_['text_register_banner'] = 'Cliquez ici si vous avez besoin de créer un compte';
// Entry
$_['entry_api_key'] = 'Clef de l’API';
$_['entry_account_id'] = 'Identifiant du compte';
$_['entry_send_orders'] = 'Envoyer les commandes automatiquement';
$_['entry_fulfill_policy'] = 'Modalités d’expédition';
$_['entry_shipping_speed'] = 'Vitesse de livraison par défaut';
$_['entry_debug_log'] = 'Activer l’enregistrement de débogage';
$_['entry_new_order_status'] = 'Nouveau mécanisme d’expédition';
$_['entry_order_id_prefix'] = 'Préfixe d’identifiant de commande';
$_['entry_only_fill_complete'] = 'Tous les articles doivent être expédiés par Amazon';
// Help
$_['help_api_key'] = 'Ceci est votre clef de l’API, l’obtenir depuis votre compte OpenBay Pro';
$_['help_account_id'] = 'Ceci est l’identifiant de compte qui correspond au compte Amazon enregistré pour OpenBay Pro, l’obtenir depuis votre compte OpenBay Pro';
$_['help_send_orders'] = 'Les commandes contenant une correspondance avec des produits expédiés par Amazon seront envoyées par Amazon automatiquement';
$_['help_fulfill_policy'] = 'Les modalités d’expédition par défaut (Tout : tous les articles expédiables dans la commande à expédier sont expédiés. La commande d’expédition reste dans un état En attente jusqu’à ce que tous les articles soient expédiés par Amazon ou annulés par le vendeur. Tout disponible : tous les articles expédiables dans la commande à expédier sont expédiés. Tous les articles non expédiables de la commande sont annulés par Amazon. Tout ou rien : si un article dans une commande à expédier est jugé comme étant non expédiable avant qu’une livraison de la commande ne passe au statut En attente (le processus de sélection des unités à partir de l’inventaire a commencé), la commande entière est considérée comme irréalisable. Toutefois, si un article d’une commande à expédier est jugé comme étant non expédiable après une livraison dans la commande En attente, Amazon annule autant que possible la commande à expédier.)';
$_['help_shipping_speed'] = 'Ceci est la catégorie de vitesse de livraison par défaut à appliquer aux nouvelles commandes, différents niveaux de service peuvent entraîner des coûts différents';
$_['help_debug_log'] = 'L’enregistrement de débogage permettra l’enregistrement des actions exécutées par le module dans un fichier journal. Ce paramètre devrait resté activé pour aider à trouver la cause de tous les problèmes.';
$_['help_new_order_status'] = 'Ceci est le statut de commande qui déclenchera la création de l’expédition de commande. Assurez-vous que vous utilisez un statut uniquement après avoir reçu un paiement.';
$_['help_order_id_prefix'] = 'Avoir un préfixe de commande aidera à identifier les commandes qui proviennent de votre magasin et non d’autres intégrations. Ceci est très utile lorsque des commerçants vendent sur plusieurs marchés et utilisent Expédié par Amazon';
$_['help_only_fill_complete'] = 'Ceci permettra uniquement aux commandes d’être envoyées pour expédition si TOUS les articles dans la commande correspondent à un article Expédié par Amazon. Si un article ne correspond pas, alors la commande entière restera non remplie.';
// Error
$_['error_api_connect'] = 'Impossible de se connecter à l’API';
$_['error_account_info'] = 'Impossible de vérifier la connexion à l’API Expédié par Amazon ';
$_['error_api_key'] = 'La clef de l’API n’est pas valide';
$_['error_api_account_id'] = 'L’identifiant de compte n’est pas valide';
$_['error_validation'] = 'Une erreur s’est produite lors de la validation de vos informations';
// Tabs
$_['tab_api_info'] = 'Détails de l’API';
// Buttons
$_['button_verify'] = 'Vérifier les détails';

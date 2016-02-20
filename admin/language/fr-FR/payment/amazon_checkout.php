#-------------------------------------------------------------------------------
# Copyright (C) 2015-2016 P. Mergey
# This program is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 3 of the License, or
# (at your option) any later version.
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
# You should have received a copy of the GNU General Public License
# along with this program.  If not, see <http://www.gnu.org/licenses/>.
#-------------------------------------------------------------------------------
<?php
// Heading
$_['heading_title'] = 'Paiements Amazon';

// Text
$_['text_payment'] = 'Paiement';
$_['text_success'] = 'Le module Paiements Amazon a été mis à jour.';
$_['text_edit'] = 'Modifier le moyen de paiement Amazon';
$_['text_germany'] = 'Allemagne';
$_['text_uk'] = 'Royaume-Uni';
$_['text_live'] = 'Direct';
$_['text_sandbox'] = 'Bac à sable';
$_['text_upload_success'] = 'Le fichier a correctement été transféré.';
$_['text_button_settings'] = 'Paramètres du bouton Payer';
$_['text_orange'] = 'Orange';
$_['text_tan'] = 'Brun';
$_['text_white'] = 'Blanc';
$_['text_light'] = 'Clair';
$_['text_dark'] = 'Foncé';
$_['text_medium'] = 'Moyen';
$_['text_large'] = 'Grand';
$_['text_x_large'] = 'Très grand';
$_['text_download'] = '<a href="%s" target="_blank"><u>Télécharger</u></a> le fichier modèle depuis Amazon Seller Central.';
$_['text_amazon_details'] = 'Identifiants Amazon';
$_['text_amazon_order_id'] = 'Numéro de commande Amazon';
$_['text_upload'] = 'Télécharger';
$_['text_upload_template'] = 'Télécharger ce formulaire vers un modèle en cliquant sur le bouton ci-dessous. Assurez-vous qu’il soit enregistré dans un fichier délimité par des tabulations.';
$_['text_amazon_checkout'] = '<a onclick="window.open(’http://go.amazonservices.com/UKCBASPOpenCart.html’);"> <img src="view/image/payment/amazon.png" alt="Paiements Amazon" title="Paiements Amazon" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_amazon_join'] = 'Pour créer votre compte Paiements Amazon<a href="http://go.amazonservices.com/UKCBASPOpenCart.html" target="_blank" title="Cliquez ici pour vous inscrire aux Paiements Amazon" class="alert-link"> cliquez ici.</a>';

// Column
$_['column_submission_id'] = 'Identifiant de l’envoi';
$_['column_status'] = 'Statut';
$_['column_text'] = 'Réponse';
$_['column_amazon_order_item_code'] = 'Code de commande Amazon';

// Entry
$_['entry_merchant_id'] = 'Identifiant du commerçant';
$_['entry_access_key'] = 'Clef d’accès';
$_['entry_access_secret'] = 'Clef secrète';
$_['entry_checkout_mode'] = 'Mode d’encaissement';
$_['entry_marketplace'] = 'Place de marché';
$_['entry_pending_status'] = 'En attente';
$_['entry_ready_status'] = 'Statut « Prêt pour l’envoi »';
$_['entry_shipped_status'] = 'Statut « Commande envoyée »';
$_['entry_canceled_status'] = 'Statut « Commande annulée »';
$_['entry_cron_job_url'] = 'URL du planificateur CRON';
$_['entry_cron_job_token'] = 'Jeton secret';
$_['entry_cron_job_last_run'] = 'Dernière exécution CRON';
$_['entry_ip'] = 'Adresse IP';
$_['entry_ip_allowed'] = 'Adresses IP autorisées';
$_['entry_total'] = 'Total';
$_['entry_geo_zone'] = 'Zone géographique';
$_['entry_status'] = 'Statut';
$_['entry_sort_order'] = 'Classement';
$_['entry_colour'] = 'Couleur';
$_['entry_background'] = 'Arrière-plan';
$_['entry_size'] = 'Taille';

// Help
$_['help_cron_job_url'] = 'Définissez une tâche CRON pour appeler cette URL';
$_['help_adjustment'] = 'Les champs en gras et au moins un champ « -adj » est requis.';
$_['help_allowed_ips'] = 'Laissez vide si vous souhaitez que tout le monde puisse voir le bouton Paiement';
$_['help_ip'] = 'Exemple : 203.0.113.0<br />Laissez le champ vide pour autoriser toutes les adresses IP.';
$_['help_cron_job_token'] = 'Utilisez une valeur longue et difficile à deviner';

// Tab
$_['tab_order_adjustment'] = 'Configuration de la commande';

// Error
$_['error_permissions'] = 'Vous n’avez pas les autorisations pour modifier ce module.';
$_['error_access_secret'] = 'La clef secrète est requise.';
$_['error_access_key'] = 'La clef d’accès rapide est requise.';
$_['error_merchant_id'] = 'L’identifiant marchand est requis.';
$_['error_curreny'] = 'Votre boutique doit avoir la devise %s installée et activée.';
$_['error_upload'] = 'Le téléchargement a échoué';

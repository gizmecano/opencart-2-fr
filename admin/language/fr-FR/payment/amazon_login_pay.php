<?php
/*
*  Copyright (C) 2015-2016 P. Mergey
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
$_['heading_title'] = 'Se connecter et payer avec Amazon';

//Text
$_['text_success'] = 'Vous venez de modifier avec succès le module « Se connecter et payer avec Amazon » !';
$_['text_ipn_url'] = 'URL du planificateur CRON';
$_['text_ipn_token'] = 'Jeton secret';
$_['text_us'] = 'États-Unis';
$_['text_germany'] = 'Allemagne';
$_['text_uk'] = 'Royaume-Uni';
$_['text_live'] = 'Direct';
$_['text_sandbox'] = 'Bac à sable';
$_['text_auth'] = 'Autorisation';
$_['text_payment'] = 'Paiement';
$_['text_no_capture'] = '--- Pas de capture automatique ---';
$_['text_all_geo_zones'] = 'Toutes les zones géographiques';
$_['text_button_settings'] = 'Paramètres du bouton Payer';
$_['text_colour'] = 'Couleur';
$_['text_orange'] = 'Orange';
$_['text_tan'] = 'Ocre';
$_['text_white'] = 'Blanc';
$_['text_light'] = 'Clair';
$_['text_dark'] = 'Sombre';
$_['text_size'] = 'Dimension';
$_['text_medium'] = 'Moyen';
$_['text_large'] = 'Large';
$_['text_x_large'] = 'Extra large';
$_['text_background'] = 'Arrière-plan';
$_['text_amazon_login_pay'] = '<a href="http://go.amazonservices.com/opencart.html" target="_blank" title="Se connecter et payer avec Amazon"><img src="view/image/payment/amazon.png" alt="Se connecter et payer avec Amazon" title="Se connecter et payer avec Amazon" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_amazon_join'] = '<a href="http://go.amazonservices.com/opencart.html" target="_blank" title="Se connecter et payer avec Amazon"><u>Se connecter et payer avec Amazon</u></a>';
$_['entry_login_pay_test'] = 'Mode de test';
$_['entry_login_pay_mode'] = 'Mode de paiement';
$_['text_payment_info'] = 'Information de paiement';
$_['text_capture_ok'] = 'La capture a été réalisée avec succès';
$_['text_capture_ok_order'] = 'La capture a été réalisée avec succès : l’autorisation a été entièrement capturée';
$_['text_refund_ok'] = 'Le remboursement a été requis avec succès';
$_['text_refund_ok_order'] = 'Le remboursement a été requis avec succès : le montant a été entièrement remboursé';
$_['text_cancel_ok'] = 'L’annulation a réussie : le statut de la commande a été mis à jour';
$_['text_capture_status'] = 'Paiement capturé';
$_['text_cancel_status'] = 'Paiement annulé';
$_['text_refund_status'] = 'Paiement remboursé';
$_['text_order_ref'] = 'Référence de commande';
$_['text_order_total'] = 'Total autorisé';
$_['text_total_captured'] = 'Total capturé';
$_['text_transactions'] = 'Transactions';
$_['text_column_authorization_id'] = 'Identifiant d’autorisation Amazon';
$_['text_column_capture_id'] = 'Identifiant de capture Amazon';
$_['text_column_refund_id'] = 'Identifiant de remboursement Amazon';
$_['text_column_amount'] = 'Montant';
$_['text_column_type'] = 'Type';
$_['text_column_status'] = 'Statut';
$_['text_column_date_added'] = 'Créé le';
$_['text_confirm_cancel'] = 'Êtes-vous sûr de vouloir annuler le paiement ?';
$_['text_confirm_capture'] = 'Êtes-vous sûr de vouloir capturer le paiement ?';
$_['text_confirm_refund'] = 'Êtes-vous sûr de vouloir effectuer un remboursement du paiement ?';
$_['text_minimum_total'] = 'Total minimum de la commande';
$_['text_geo_zone'] = 'Zones géographiques';
$_['text_status'] = 'Statut';
$_['text_declined_codes'] = 'Code de refus de test';
$_['text_sort_order'] = 'Classement';
$_['text_amazon_invalid'] = 'Méthode de paiement invalide';
$_['text_amazon_rejected'] = 'Méthode de paiement rejetée';
$_['text_amazon_timeout'] = 'Durée de la transaction';
$_['text_amazon_no_declined'] = '--- Pas de refus automatique d’autorisation ---';

// Columns
$_['column_status'] = 'Statut';

//entry
$_['entry_merchant_id'] = 'Numéro de boutique';
$_['entry_access_key'] = 'Clef d’accès';
$_['entry_access_secret'] = 'Clef secrète';
$_['entry_client_id'] = 'Identifiant du client';
$_['entry_client_secret'] = 'Client secret';
$_['entry_marketplace'] = 'Boutique';
$_['entry_capture_status'] = 'Statut de capture automatique';
$_['entry_pending_status'] = 'Statut « en attente »';
$_['entry_ipn_url'] = 'Adresse URL IPN';
$_['entry_ipn_token'] = 'Jeton secret';
$_['entry_debug'] = 'Enregistrements de débogage';


// Help
$_['help_pay_mode'] = 'Paiement uniquement disponible pour les boutiques localisée aux États-Unis';
$_['help_capture_status'] = 'Choisissez le statut de la commande qui déclenchera la capture automatique d’un paiement autorisé';
$_['help_ipn_url'] = 'Définissez ceci comme votre URL sur Amazon Seller Central';
$_['help_ipn_token'] = 'Définissez-le assez long et difficle à deviner';
$_['help_debug'] = 'En activant le débogage, vous autorisez l’écriture de données sensibles dans un fichier journal. Vous devriez toujours désactiver cette fonction sauf avis contraire';
$_['help_declined_codes'] = 'Ceci à des fins de test uniquement';

// Order Info
$_['tab_order_adjustment'] = 'Ajustement de la commande';

// Errors
$_['error_permission'] = 'Attention : vous n’êtes pas autorisé à modifier ce module';
$_['error_merchant_id'] = 'Un numéro de boutique est requis';
$_['error_access_key'] = 'Une clef d’accès est requise';
$_['error_access_secret'] = 'Une clef secrète est requise';
$_['error_client_id'] = 'Un identifiant du client est requis';
$_['error_client_secret'] = 'une clef de client est requise';
$_['error_pay_mode'] = 'Paiement uniquement disponible pour les boutiques localisée aux Etats-Unis';
$_['error_curreny'] = 'Votre boutique doit avoir la devise %s installée et activée';
$_['error_upload'] = 'Le téléchargement a échoué';
$_['error_data_missing'] = 'Données requises manquantes';

// Buttons
$_['button_capture'] = 'Réceptionner';
$_['button_refund'] = 'Rembourser';
$_['button_cancel'] = 'Annuler';

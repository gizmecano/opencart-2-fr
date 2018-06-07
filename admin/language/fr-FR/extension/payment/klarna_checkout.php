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
$_['heading_title'] = 'Klarna Checkout';
// Text
$_['text_extension'] = 'Extensions';
$_['text_success'] = 'Vous venez de modifier les détails du compte Klarna Checkout!';
$_['text_edit'] = 'Modifier Klarna Checkout';
$_['text_live'] = 'Environnement de production';
$_['text_test'] = 'Environnement de test';
$_['text_payment_info'] = 'Informations de paiement';
$_['text_na'] = 'N/A';
$_['text_confirm_cancel'] = 'Êtes-vous certain de vouloir annuler cette transaction ?';
$_['text_confirm_capture'] = 'Êtes-vous certain de vouloir réceptionner ?';
$_['text_confirm_refund'] = 'Êtes-vous certain de vouloir rembourser ?';
$_['text_confirm_extend_authorization'] = 'Êtes-vous certain de vouloir étendre l’autorisation?';
$_['text_confirm_release_authorization'] = 'Êtes-vous certain de vouloir autoriser la publication de l’autorisation restante?';
$_['text_confirm_merchant_reference'] = 'Êtes-vous certain de vouloir mettre à jour la référence du marchand?';
$_['text_confirm_shipping_info'] = 'Êtes-vous certain de vouloir sauvegarder les information de livraison?';
$_['text_confirm_billing_address'] = 'Êtes-vous certain de vouloir mettre à jour l’adresse de facturation ?';
$_['text_confirm_shipping_address'] = 'Êtes-vous certain de vouloir étendre l’adresse de livraison ?';
$_['text_confirm_trigger_send_out'] = 'Êtes-vous certain de vouloir déclencher un nouvel envoi ?';
$_['text_confirm_settlement'] = 'Êtes-vous certain de vouloir traiter les fichiers de règlement?';
$_['text_no_capture'] = 'Aucune réception';
$_['text_no_refund'] = 'Aucun remboursement';
$_['text_success_action'] = 'Succès';
$_['text_error_generic'] = 'Erreur : il y a eu une erreur avec votre requête.';
$_['text_capture_shipping_info_title'] = 'Réception %d - Adresse de livraison';
$_['text_capture_billing_address_title'] = 'Réception %d - Adresse de facturation';
$_['text_new_capture_title'] = 'Nouvelle réception';
$_['text_new_refund_title'] = 'Nouveau remboursement';
$_['text_downloading_settlement'] = 'Téléchargement des fichiers de règlement...';
$_['text_processing_orders'] = 'Traitement de commandes...';
$_['text_processing_order'] = 'Traitement de commande';
$_['text_no_files'] = 'Aucun fichier à télécharger.';
// Column
$_['column_order_id'] = 'Commande n°';
$_['column_capture_id'] = 'Identifiant de réception';
$_['column_reference'] = 'Référence Klarna';
$_['column_status'] = 'Statut';
$_['column_merchant_reference_1'] = 'Référence du marchand';
$_['column_customer_details'] = 'Détails du client';
$_['column_billing_address'] = 'Détails de facturation';
$_['column_shipping_address'] = 'Détails de livraison';
$_['column_order_lines'] = 'Détails des articles';
$_['column_amount'] = 'Montant';
$_['column_authorization_remaining'] = 'Autorisation restante';
$_['column_authorization_expiry'] = 'Date d’expiration de l’autorisation';
$_['column_item_reference'] = 'Référence';
$_['column_type'] = 'Type';
$_['column_quantity'] = 'Quantité';
$_['column_quantity_unit'] = 'Unité de quantité';
$_['column_name'] = 'Nom';
$_['column_total_amount'] = 'Montant total';
$_['column_unit_price'] = 'Prix unitaire';
$_['column_total_discount_amount'] = 'Montant total de la réduction';
$_['column_tax_rate'] = 'Taux de taxe';
$_['column_total_tax_amount'] = 'Montant total des taxes';
$_['column_action'] = 'Action';
$_['column_cancel'] = 'Annuler';
$_['column_capture'] = 'Réceptions';
$_['column_refund'] = 'Remboursements';
$_['column_date'] = 'Date';
$_['column_title'] = 'Titre';
$_['column_given_name'] = 'Prénom';
$_['column_family_name'] = 'Nom de famille';
$_['column_street_address'] = 'Adresse de la rue';
$_['column_street_address2'] = 'Adresse de la rue complémentaire';
$_['column_city'] = 'Localité';
$_['column_postal_code'] = 'Code postal';
$_['column_region'] = 'Région';
$_['column_country'] = 'Pays';
$_['column_email'] = 'Adresse électronique';
$_['column_phone'] = 'Téléphone';
$_['column_action'] = 'Action';
$_['column_shipping_info'] = 'Adresse de livraison';
$_['column_shipping_company'] = 'Transporteur';
$_['column_shipping_method'] = 'Mode de livraison';
$_['column_tracking_number'] = 'Numéro de suivi';
$_['column_tracking_uri'] = 'URI de suivi';
$_['column_return_shipping_company'] = 'Transporteur de retour';
$_['column_return_tracking_number'] = 'Numéro de suivi de retour';
$_['column_return_tracking_uri'] = 'URI de suivi de retour';
// Entry
$_['entry_debug'] = 'Enregistrement de débogage';
$_['entry_total'] = 'Total';
$_['entry_order_status'] = 'Statut de commande';
$_['entry_status'] = 'Statut';
$_['entry_terms'] = 'Termes et conditions';
$_['entry_locale'] = 'Paramètres régionaux';
$_['entry_currency'] = 'Devise';
$_['entry_merchant_id'] = 'Identifiant du marchand (MID)';
$_['entry_secret'] = 'Secret partagé';
$_['entry_environment'] = 'Environnement (Direct/Test)';
$_['entry_country'] = 'Pays';
$_['entry_api'] = 'Emplacement de l’API';
$_['entry_shipping_company'] = 'Transporteur';
$_['entry_shipping_method'] = 'Mode de livraison';
$_['entry_tracking_number'] = 'Numéro de suivi';
$_['entry_tracking_uri'] = 'URI de suivi';
$_['entry_return_shipping_company'] = 'Transporteur de retour';
$_['entry_return_tracking_number'] = 'Numéro de suivi de retour';
$_['entry_return_tracking_uri'] = 'URI de suivi de retour';
$_['entry_sftp_username'] = 'Nom d’utilisateur SFTP';
$_['entry_sftp_password'] = 'Mot de passe SFTP';
$_['entry_process_settlement'] = 'Fichiers de règlement de processus';
$_['entry_settlement_order_status'] = 'Statut de commande';
// Help
$_['help_debug'] = 'En activant le débogage, vous autorisez l’écriture de données sensibles dans un fichier journal. Vous devriez toujours désactiver cette fonction sauf avis contraire.';
$_['help_total'] = 'Le montant total que la commande doit atteindre avant que ce module de paiement devienne actif.';
$_['help_locale'] = 'Le code de localisation pour chaque compte. Code de langue à deux lettres combiné avec le code de pays à deux lettres selon RFC 1766. (par exemple : en-gb pour Anglais et Royaume-Uni)';
$_['help_api'] = 'Pour les utilisateurs européens, Klarna Checkout ne fournit pas la région du client. Ceci signifie que les options pour les expédition spécifiques à la région ne fonctionneront pas (une expédition spécifique au pays est acceptable)';
$_['help_sftp_username'] = 'Nom d’utilisateur SFTP fourni par votre gestionnaire de compte';
$_['help_sftp_password'] = 'Mot de passe SFTP fourni par votre gestionnaire de compte';
$_['help_settlement_order_status'] = 'Le statut de la commande qui a traité les ordres de règlement changera pour.';
// Button
$_['button_account_remove'] = 'Supprimer le compte';
$_['button_account_add'] = 'Ajouter un compte';
$_['button_capture'] = 'Réceptionner';
$_['button_refund'] = 'Rembourser';
$_['button_extend_authorization'] = 'Étendre';
$_['button_release_authorization'] = 'Publier';
$_['button_update'] = 'Mettre à jour';
$_['button_add_shipping_info'] = 'Ajouter une adresse de livraison';
$_['button_trigger_send_out'] = 'Déclencher un nouvel envoi';
$_['button_edit_shipping_info'] = 'Modifier l’adresse de livraison';
$_['button_edit_billing_address'] = 'Modifier l’adresse de facturation';
$_['button_new_capture'] = 'Nouvelle réception';
$_['button_new_refund'] = 'Nouveau remboursement';
$_['button_process_settlement'] = 'Fichiers de règlement de processus';
// Error
$_['error_warning'] = 'Attention : veuillez vérifier attentivement les erreurs dans le formulaire !';
$_['error_php_version'] = 'Une version de PHP 5.4.0 minimum est requise !';
$_['error_ssl'] = 'Vous devez activer "Utiliser SSL" dans les paramètres de la boutique et avoir un certificat SSL installé !';
$_['error_account_minimum'] = 'Veuillez ajouter au moins un compte.';
$_['error_locale'] = 'Veuillez saisir des paramètres régionaux valides.';
$_['error_account_countries'] = 'La liste des comptes contient un ou plusieurs pays en double.';
$_['error_merchant_id'] = 'Identifiant du marchand est requis !';
$_['error_secret'] = 'Un secret partagé est requis !';
// Tab
$_['tab_setting'] = 'Paramètres';
$_['tab_account'] = 'Comptes';
$_['tab_settlement'] = 'Réglement';

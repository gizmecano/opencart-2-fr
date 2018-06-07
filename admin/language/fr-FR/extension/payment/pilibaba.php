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
$_['heading_title'] = 'Pilibaba (pour validation de commande en Chine)';
// Tab
$_['tab_register'] = 'S’inscrire';
$_['tab_settings'] = 'Paramètres';
// Text
$_['text_extension'] = 'Extensions';
$_['text_success'] = 'Vous venez de modifier le module de paiement Pilibaba !';
$_['text_edit'] = 'Modifier le module de paiement Pilibaba';
$_['text_pilibaba'] = '<a href="http://www.pilibaba.com" target="_blank"><img src="view/image/payment/pilibaba.png" alt="Pilibaba" title="Pilibaba"></a>';
$_['text_live'] = 'Environnement de production';
$_['text_test'] = 'Environnement de test';
$_['text_payment_info'] = 'Information de paiement';
$_['text_order_id'] = 'Commande n°';
$_['text_amount'] = 'Montant';
$_['text_fee'] = 'Frais';
$_['text_date_added'] = 'Date d’ajout';
$_['text_tracking'] = 'Suivi';
$_['text_barcode'] = 'Code barre';
$_['text_barcode_info'] = '(imprimez ce code barre unique et collez-le sur la surface du colis)';
$_['text_confirm'] = 'Confirmez-vous vouloir mettre à jour le numéro de suivi ?';
$_['text_register_success'] = 'Vous avez enregistré avec succès. Vous devriez recevoir un courrier électronique sous peu.';
$_['text_tracking_success'] = 'Le numéro de suivi a été mis à jour avec succès.';
$_['text_other'] = 'Autre';
$_['text_email'] = 'L’adresse électronique enregistrée pour votre compte Pilibaba est %s';
// Entry
$_['entry_email_address']= 'Adresse électronique';
$_['entry_password'] = 'Mot de passe';
$_['entry_currency'] = 'Devise';
$_['entry_warehouse'] = 'Magasin';
$_['entry_country'] = 'Pays';
$_['entry_merchant_number'] = 'Numéro de marchand';
$_['entry_secret_key'] = 'Clef secrète';
$_['entry_environment'] = 'Environnement';
$_['entry_shipping_fee'] = 'Frais de livraison';
$_['entry_order_status'] = 'Statut de commande';
$_['entry_status'] = 'Statut';
$_['entry_logging'] = 'Enregistrement de débogage';
$_['entry_sort_order'] = 'Classement';
// Help
$_['help_email_address'] = 'Veuillez saisir l’adresse électronique du propriétaire de cette affaire.';
$_['help_password'] = 'Veuillez saisir un mot de passe contenant entre 8 et 30 caractères.';
$_['help_currency'] = 'Sélectionnez la devise utilisée sur votre site et à retirer sur votre compte bancaire.';
$_['help_warehouse'] = 'Sélectionnez l’entrepôt le plus proche auquel vous allez expédier. Lorsque vous recevez des commandes de clients chinois (par le biais de la passerelle Pilibaba) vous pouvez livrer des colis à cet entrepôt.';
$_['help_country'] = 'Indiquez votre pays et nous vous informerons une fois qu’un entrepôt ouvrira dans votre pays.';
$_['help_merchant_number'] = 'Votre numéro de compte marchand personnel Pilibaba.';
$_['help_secret_key'] = 'Votre clef secrète pour accéder à l’API Pilibaba.';
$_['help_shipping_fee'] = 'Le coût de livraison depuis votre magasin jusqu’à l’entrepôt Pilibaba. Utilisez deux décimales.';
$_['help_order_status'] = 'Le statut de la commande après que le client a passé la commande.';
$_['help_total'] = 'Le montant total que la commande doit atteindre avant que ce module de paiement devienne actif. Doit être une valeur sans aucun signe de devise.';
$_['help_logging'] = 'En activant le débogage, vous autorisez l’écriture de données sensibles dans un fichier journal. Vous devriez toujours désactiver cette fonction sauf avis contraire.';
// Error
$_['error_warning'] = 'Attention : veuillez vérifier attentivement les erreurs dans le formulaire !';
$_['error_permission'] = 'Attention : vous n’avez pas l’autorisation de modifier le module de paiement Pilibaba !';
$_['error_merchant_number'] = 'Numéro de marchand est requis !';
$_['error_secret_key'] = 'La clef secrète est requise !';
$_['error_shipping_fee'] = 'Les frais de livraison doivent être un nombre décimal!';
$_['error_not_enabled'] = 'Le module n’est pas activé!';
$_['error_data_missing'] = 'Données manquantes !';
$_['error_tracking_length'] = 'Le numéro de suivi doit contenir entre 1 et 50 caractères !';
$_['error_email_address'] = 'Veuillez saisir votre adresse électronique !';
$_['error_email_invalid'] = 'Adresse électronique invalide !';
$_['error_password'] = 'Mot de passe doit contenir au moins 8 caractères!';
$_['error_currency'] = 'Veuillez sélectionner une devise !';
$_['error_warehouse'] = 'Veuillez sélectionner un magasin !';
$_['error_country'] = 'Veuillez sélectionner un pays !';
$_['error_weight'] = 'Veuillez changer <a href="%s">la classe de poids</a> pour la paramétrer en grammes (Système -> Paramètres -> Paramètres régionaux)';
$_['error_bad_response'] = 'Une réponse invalide a été reçue. Veuillez essayer à nouveau plus tard.';
// Button
$_['button_register'] = 'S’inscrire';
$_['button_tracking'] = 'Mettre à jour le numéro de suivi';
$_['button_barcode'] = 'Générer un code barre';

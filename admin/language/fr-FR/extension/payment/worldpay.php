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
$_['heading_title'] = 'Paiement en ligne Worldpay';
// Text
$_['text_extension'] = 'Extensions';
$_['text_success'] = 'Succès : vous avez modifié les détails du compte Worldpay !';
$_['text_worldpay'] = '<a href="https://online.worldpay.com/signup/ee48b6e6-d3e3-42aa-a80e-cbee3f4f8b09" target="_blank"><img src="view/image/payment/worldpay.png" alt="Worldpay" title="Worldpay" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_test'] = 'Environnement de test';
$_['text_live'] = 'Environnement de production';
$_['text_authenticate'] = 'Authentifier';
$_['text_release_ok'] = 'Envoi effectué';
$_['text_release_ok_order'] = 'Envoi effectué, le statut de la commande a été mis à jour avec succès : réglé';
$_['text_refund_ok'] = 'Le remboursement a réussi';
$_['text_refund_ok_order'] = 'Le remboursement a réussi : le statut de la commande a été mis à jour';
$_['text_void_ok'] = 'L’annulation a réussie : le statut de la commande a été mis à jour';
// Entry
$_['entry_service_key'] = 'Clef de service';
$_['entry_client_key'] = 'Clef de client';
$_['entry_total'] = 'Total';
$_['entry_order_status'] = 'Statut de la commande';
$_['entry_geo_zone'] = 'Zone géographique';
$_['entry_status'] = 'Statut';
$_['entry_sort_order'] = 'Classement';
$_['entry_debug'] = 'Enregistrement de débogage';
$_['entry_card'] = 'Cartes de magasin';
$_['entry_secret_token'] = 'Jeton secret';
$_['entry_webhook_url'] = 'URL du webhook';
$_['entry_cron_job_url'] = "URL du planificateur CRON :";
$_['entry_last_cron_job_run'] = "Dernière exécution CRON :";
$_['entry_success_status'] = 'Statut « Réussi »';
$_['entry_failed_status'] = 'Statut « Échoué »';
$_['entry_settled_status'] = 'Statut « Réglé »';
$_['entry_refunded_status'] = 'Statut « Remboursé »';
$_['entry_partially_refunded_status'] = 'Statut « Partiellement remboursé »';
$_['entry_charged_back_status'] = 'Statut « Rechargé »';
$_['entry_information_requested_status'] = 'Informations requises';
$_['entry_information_supplied_status'] = 'Informations fournies';
$_['entry_chargeback_reversed_status'] = 'Contrepartie du statut « Paiement retourné »';
$_['entry_reversed_status'] = 'Statut « Paiement retourné »';
$_['entry_voided_status'] = 'Statut « Annulé »';
// Help
$_['help_total'] = 'Le montant total que la commande doit atteindre avant que ce module de paiement devienne actif.';
$_['help_debug'] = 'En activant le débogage, vous autorisez l’écriture de données sensibles dans un fichier journal. Vous devriez toujours désactiver cette fonction sauf avis contraire';
$_['help_secret_token'] = 'Définissez-le assez long et difficle à deviner';
$_['help_webhook_url'] = 'Définissez les webhooks Worldpay pour appeler cette URL';
$_['help_cron_job_url'] = 'Définissez une tâche CRON pour appeler cette URL';
// Tab
$_['tab_settings'] = 'Paramètres';
$_['tab_order_status'] = 'Statut de la commande';
// Error
$_['error_permission'] = 'Attention : vous n’avez pas la permission de modifier le paiement Worldpay !';
$_['error_service_key'] = 'Clef de service requise !';
$_['error_client_key'] = 'Clef de client requise !';
$_['error_merchant'] = 'Identifiant du marchand requis !';
// Order page - payment tab
$_['text_payment_info'] = 'Information de paiement';
$_['text_refund_status'] = 'Paiement remboursé';
$_['text_order_ref'] = 'Référence de commande';
$_['text_order_total'] = 'Total autorisé';
$_['text_total_released'] = 'Montant envoyé';
$_['text_transactions'] = 'Transactions';
$_['text_column_amount'] = 'Montant';
$_['text_column_type'] = 'Type';
$_['text_column_date_added'] = 'Date d’ajout';
$_['text_confirm_refund'] = 'Êtes-vous certain de vouloir effectuer un remboursement du paiement ?';
$_['button_refund'] = 'Rembourser';

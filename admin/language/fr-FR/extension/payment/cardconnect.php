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
$_['heading_title'] = 'Module de paiement CardConnect';
// Tab
$_['tab_settings'] = 'Paramètres';
$_['tab_order_status'] = 'Statut de commande';
// Text
$_['text_extension'] = 'Extensions';
$_['text_success'] = 'Vous venez de modifier le module de paiement CardConnect !';
$_['text_edit'] = 'Modifier CardConnect';
$_['text_cardconnect'] = '<a href="http://www.cardconnect.com" target="_blank"><img src="view/image/payment/cardconnect.png" alt="CardConnect" title="CardConnect"></a>';
$_['text_payment'] = 'Paiement';
$_['text_authorize'] = 'Autoriser';
$_['text_live'] = 'Direct';
$_['text_test'] = 'Test';
$_['text_no_cron_time'] = 'La tâche CRON n’a pas encore été exécutée';
$_['text_payment_info'] = 'Informations de paiement';
$_['text_payment_method'] = 'Moyen de paiement';
$_['text_card'] = 'Carte';
$_['text_echeck'] = 'eChèque (eCheck)';
$_['text_reference'] = 'Référence';
$_['text_update'] = 'Mettre à jour';
$_['text_order_total'] = 'Total de la commande';
$_['text_total_captured'] = 'Total capturé';
$_['text_capture_payment'] = 'Paiement capturé';
$_['text_refund_payment'] = 'Paiement remboursé';
$_['text_void'] = 'Annuler';
$_['text_transactions'] = 'Transactions';
$_['text_column_type'] = 'Type';
$_['text_column_reference']= 'Référence';
$_['text_column_amount'] = 'Montant';
$_['text_column_status'] = 'Statut';
$_['text_column_date_modified'] = 'Date de modification';
$_['text_column_date_added'] = 'Date d’ajout';
$_['text_column_update'] = 'Mettre à jour';
$_['text_column_void'] = 'Annuler';
$_['text_confirm_capture'] = 'Êtes-vous certain de vouloir capturer le paiement ?';
$_['text_confirm_refund'] = 'Êtes-vous certain de vouloir rembourser le paiement ?';
$_['text_inquire_success'] = 'La demande de renseignement a réussi';
$_['text_capture_success'] = 'La requête de capture a réussi';
$_['text_refund_success'] = 'La requête de remboursement a réussi';
$_['text_void_success'] = 'La requête d’annulation a réussi';
// Entry
$_['entry_merchant_id'] = 'Identifiant du marchand';
$_['entry_api_username'] = 'Nom d’utilisateur de l’API';
$_['entry_api_password'] = 'Mot de passe de l’API';
$_['entry_token'] = 'Jeton secret';
$_['entry_transaction'] = 'Transaction';
$_['entry_environment'] = 'Environnement';
$_['entry_site'] = 'Site';
$_['entry_store_cards'] = 'Cartes de magasin';
$_['entry_echeck'] = 'eChèque (eCheck)';
$_['entry_total'] = 'Total';
$_['entry_geo_zone'] = 'Zones géographiques';
$_['entry_status'] = 'Statut';
$_['entry_logging'] = 'Enregistrement de débogage';
$_['entry_sort_order'] = 'Classement';
$_['entry_cron_url'] = 'URL de tâche CRON';
$_['entry_cron_time'] = 'Dernier lancement d’une tâche CRON';
$_['entry_order_status_pending'] = 'En attente';
$_['entry_order_status_processing'] = 'En cours';
// Help
$_['help_merchant_id'] = 'Votre identifant de compte marchand personnel CardConnect.';
$_['help_api_username'] = 'Votre nom d’utilisateur pour accéder à l’API CardConnect.';
$_['help_api_password'] = 'Votre mot de passe pour accéder à l’API CardConnect.';
$_['help_token'] = 'Veuillez saisir un jeton aléatoire par sécurité ou utiliser celui qui a été généré.';
$_['help_transaction'] = 'Choisissez Paiement pour capturer le paiement immédiatement ou Autoriser pour avoir à l’approuver.';
$_['help_site'] = 'Ceci détermine la première partie de l’URL de l’API. Ne changer que si demandé.';
$_['help_store_cards'] = 'Quand vous souhaitez que les cartes de magasin utilisent une découpe de textes en unités lexicales élémentaires (tokénisation).';
$_['help_echeck'] = 'Quand vous souhaitez donner la possibilité de payer en uitilisant un eChèque (eCheck).';
$_['help_total'] = 'Le montant total que la commande doit atteindre avant que ce module de paiement devienne actif. Doit être une valeur sans aucun signe de devise.';
$_['help_logging'] = 'En activant le débogage, vous autorisez l’écriture de données sensibles dans un fichier journal. Vous devriez toujours désactiver cette fonction sauf avis contraire.';
$_['help_cron_url'] = 'Paramétrer une tâche CRON pour appeler cette URL afin que les commandes soient mises à jour automatiquement. Cette fonctionnalité est conçue pour être exécutée quelques heures après la dernière capture d’un jour ouvrable.';
$_['help_cron_time'] = 'Ceci est la dernière fois que la tâche CRON a été exécutée.';
$_['help_order_status_pending'] = 'Le statut de la commande après que la commande a été autorisée par le marchand.';
$_['help_order_status_processing'] = 'Le statut de la commande après que la commande a été automatiquement capturée.';
// Button
$_['button_inquire_all'] = 'Demander tout';
$_['button_capture'] = 'Capturer';
$_['button_refund'] = 'Rembourser';
$_['button_void_all'] = 'Annuler tout';
$_['button_inquire'] = 'Demander';
$_['button_void']= 'Annuler';
// Error
$_['error_permission'] = 'Attention : vous n’êtes pas autorisé à modifier le module de paiement CardConnect !';
$_['error_merchant_id'] = 'Identifiant du marchand est requis !';
$_['error_api_username'] = 'Le nom d’utilisateur de l’API est requis !';
$_['error_api_password'] = 'Le mot de passe de l’API est requis !';
$_['error_token'] = 'Le jeton secret est requis !';
$_['error_site'] = 'Le site est requis !';
$_['error_amount_zero'] = 'Le montant doit être supérieur à zéro !';
$_['error_no_order'] = 'Aucune information de commande correspondante !';
$_['error_invalid_response'] = 'Réception d’une réponse invalide!';
$_['error_data_missing'] = 'Données manquantes !';
$_['error_not_enabled'] = 'Le module n’est pas activé!';

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
$_['heading_title'] = 'First Data EMEA Connect (3DSecure activé)';

// Text
$_['text_payment'] = 'Paiement';
$_['text_success'] = 'Succès : vous avez modifié les détails du compte First Data !';
$_['text_edit'] = 'Modifier First Data EMEA Connect (3DSecure activé)';
$_['text_notification_url'] = 'URL de notification';
$_['text_live'] = 'En direct';
$_['text_demo'] = 'Démonstration';
$_['text_enabled'] = 'Activé';
$_['text_merchant_id'] = 'Identifiant marchand';
$_['text_secret'] = 'Secret partagé';
$_['text_capture_ok'] = 'La réception du paiement a réussi';
$_['text_capture_ok_order'] = 'La réception du paiement a réussi : le statut de la commande a été mis à jour';
$_['text_void_ok'] = 'Succès : le statut de la commande a été mis à jour à (annulé)';
$_['text_settle_auto'] = 'Vente';
$_['text_settle_delayed'] = 'Autorisation seulement';
$_['text_success_void'] = 'La transaction a été annulée';
$_['text_success_capture'] = 'La transaction a été effectuée';
$_['text_firstdata'] = '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_payment_info'] = 'Informations de paiement';
$_['text_capture_status'] = 'Paiement reçu';
$_['text_void_status'] = 'Paiement annulé';
$_['text_order_ref'] = 'Référence de commande';
$_['text_order_total'] = 'Total autorisé';
$_['text_total_captured'] = 'Total capturé';
$_['text_transactions'] = 'Transactions';
$_['text_column_amount'] = 'Montant';
$_['text_column_type'] = 'Type';
$_['text_column_date_added'] = 'Créé';
$_['text_confirm_void'] = 'Êtes-vous certain de que vouloir annuler le paiement ?';
$_['text_confirm_capture'] = 'Êtes-vous certain de vouloir réceptionner le paiement ?';

// Entry
$_['entry_merchant_id'] = 'Numéro de boutique';
$_['entry_secret'] = 'Secret partagé';
$_['entry_total'] = 'Total';
$_['entry_sort_order'] = 'Classement';
$_['entry_geo_zone'] = 'Zone géographique';
$_['entry_status'] = 'Statut';
$_['entry_debug'] = 'Enregistrement de débogage';
$_['entry_live_demo'] = 'Démonstration en direct';
$_['entry_auto_settle'] = 'Mode de règlement';
$_['entry_card_select'] = 'Sélectionnez une carte';
$_['entry_tss_check'] = 'Contrôles de TSS';
$_['entry_live_url'] = 'URL de connexion de production';
$_['entry_demo_url'] = 'URL de connexion de démonstration';
$_['entry_status_success_settled'] = 'Succès - réglé';
$_['entry_status_success_unsettled'] = 'Succès - non réglé';
$_['entry_status_decline'] = 'Refuser';
$_['entry_status_void'] = 'Annulée';
$_['entry_enable_card_store'] = 'Activer les jetons de stockage de carte';

// Help
$_['help_total'] = 'Le total que la commande doit atteindre avant que cette méthode de paiement devient active';
$_['help_notification'] = 'Vous devez fournir cette URL à First Data pour recevoir des notifications de paiement';
$_['help_debug'] = 'En autorisant le débogage, vous autorisez l’écriture des données sensibles dans un fichier journal. Vous devriez toujours désactiver sauf avis contraire';
$_['help_settle'] = 'Si vous utilisez la pré-autorisation, vous devez effectuer une action post-auth dans 3-5 jours sinon votre transaction sera abandonnée';

// Tab
$_['tab_account'] = 'Informations de l’API';
$_['tab_order_status'] = 'Statut de la commande';
$_['tab_payment'] = 'Paramètres de paiement';
$_['tab_advanced'] = 'Options avancées';

// Button
$_['button_capture'] = 'Réceptionner';
$_['button_void'] = 'Annuler';

// Error
$_['error_merchant_id'] = 'ID de la boutique est requise';
$_['error_secret'] = 'Le mot secret partagé est requis';
$_['error_live_url'] = 'l’URL de production est nécessaire';
$_['error_demo_url'] = 'L’URL de démonstration est requise';
$_['error_data_missing'] = 'Données manquantes';
$_['error_void_error'] = 'Annulation de la transaction impossible';
$_['error_capture_error'] = 'Impossible de réceptionner la transaction';

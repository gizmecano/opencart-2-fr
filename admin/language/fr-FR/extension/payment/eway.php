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
$_['heading_title'] = 'Paiement eWAY';
// Text
$_['text_payment'] = 'Paiement';
$_['text_success'] = 'Vous venez de modifier les détails du module de paiement eWAY !';
$_['text_edit'] = 'Modifier eWAY';
$_['text_eway'] = '<a target="_BLANK" href="http://www.eway.com.au/"><img src="view/image/payment/eway.png" alt="eWAY" title="eWAY" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorisation'] = 'Autorisation';
$_['text_sale'] = 'Vente';
$_['text_transparent'] = 'Redirection transparente (formulaire de paiement sur le site)';
$_['text_iframe'] = 'Iframe (formulaire de paiement dans une fenêtre)';
// Entry
$_['entry_paymode'] = 'Mode de paiement';
$_['entry_test'] = 'Mode de test';
$_['entry_order_status'] = 'Statut de la commande';
$_['entry_order_status_refund'] = 'Statut de commande remboursée';
$_['entry_order_status_auth'] = 'Statut de commande autorisée';
$_['entry_order_status_fraud'] = 'Statut de commande suspectée de fraude';
$_['entry_status'] = 'Statut';
$_['entry_username'] = 'Clef de l’API eWAY';
$_['entry_password'] = 'Mot de passe eWAY';
$_['entry_payment_type'] = 'Type de paiement';
$_['entry_geo_zone'] = 'Zone géographique';
$_['entry_sort_order'] = 'Classement';
$_['entry_transaction_method'] = 'Méthode de transaction';
// Error
$_['error_permission'] = 'Attention : vous n’êtes pas autorisé à modifier le module de paiement eWAY';
$_['error_username'] = 'La clef de l’API eWAY est requise !';
$_['error_password'] = 'Le mot de passe eWAY est requis !';
$_['error_payment_type'] = 'Au moins un type de paiement est requis !';
// Help hints
$_['help_testmode'] = 'Paramétrez sur Oui pour utiliser le mode bac à sable eWAY.';
$_['help_username'] = 'La clef de l’API eWAY de votre compte MYeWAY.';
$_['help_password'] = 'Le mot de passe eWAY de votre compte MYeWAY.';
$_['help_transaction_method'] = 'L’autorisation est uniquement disponible pour les banques australiennes';
// Order page - payment tab
$_['text_payment_info'] = 'Information de paiement';
$_['text_order_total'] = 'Total autorisé';
$_['text_transactions'] = 'Transactions';
$_['text_column_transactionid'] = 'Identifiant de transaction eWAY';
$_['text_column_amount'] = 'Montant';
$_['text_column_type'] = 'Type';
$_['text_column_created'] = 'Date de création';
$_['text_total_captured'] = 'Total capturé';
$_['text_capture_status'] = 'Paiement capturé';
$_['text_void_status'] = 'Paiement annulé';
$_['text_refund_status'] = 'Paiement remboursé';
$_['text_total_refunded'] = 'Total remboursé';
$_['text_refund_success'] = 'Remboursement réussi !';
$_['text_capture_success'] = 'Capture réussie !';
$_['text_refund_failed'] = 'Remboursement échoué : ';
$_['text_capture_failed'] = 'Capture échouée : ';
$_['text_unknown_failure'] = 'Commande ou montant invalide';
$_['text_confirm_capture'] = 'Êtes-vous certain de vouloir capturer le paiement ?';
$_['text_confirm_release'] = 'Êtes-vous certain de vouloir envoyer le paiement ?';
$_['text_confirm_refund'] = 'Êtes-vous certain de vouloir rembourser le paiement ?';
$_['text_empty_refund'] = 'Veuillez saisir le montant à rembourser';
$_['text_empty_capture'] = 'Veuillez saisir le montant à capturer';
$_['btn_refund'] = 'Remboursement';
$_['btn_capture'] = 'Capture';
// Validation Error codes
$_['text_card_message_V6000'] = 'Erreur de validation indéfinie';
$_['text_card_message_V6001'] = 'IP du client invalide';
$_['text_card_message_V6002'] = 'Identifiant d’appareil (DeviceID) invalide';
$_['text_card_message_V6011'] = 'Montant invalide';
$_['text_card_message_V6012'] = 'Description de facture invalide';
$_['text_card_message_V6013'] = 'Numéro de facture invalide';
$_['text_card_message_V6014'] = 'Référence de facture invalide';
$_['text_card_message_V6015'] = 'Code de devise invalide';
$_['text_card_message_V6016'] = 'Paiement requis';
$_['text_card_message_V6017'] = 'Code de devise de paiement requis';
$_['text_card_message_V6018'] = 'Code de devise de paiement inconnu';
$_['text_card_message_V6021'] = 'Nom du titulaire de la carte requis';
$_['text_card_message_V6022'] = 'Numéro de la carte requis';
$_['text_card_message_V6023'] = 'CVN requis';
$_['text_card_message_V6031'] = 'Numéro de la carte invalide';
$_['text_card_message_V6032'] = 'CVN invalide';
$_['text_card_message_V6033'] = 'Date d’expiration invalide';
$_['text_card_message_V6034'] = 'Numéro de série invalide';
$_['text_card_message_V6035'] = 'Date de début invalide';
$_['text_card_message_V6036'] = 'Mois invalide';
$_['text_card_message_V6037'] = 'Année invalide';
$_['text_card_message_V6040'] = 'Identifiant de jeton client invalide';
$_['text_card_message_V6041'] = 'Client requis';
$_['text_card_message_V6042'] = 'Prénom du client requis';
$_['text_card_message_V6043'] = 'Nom du client requis';
$_['text_card_message_V6044'] = 'Code du pays du client requis';
$_['text_card_message_V6045'] = 'Titre du client requis';
$_['text_card_message_V6046'] = 'Identifiant de jeton client requis';
$_['text_card_message_V6047'] = 'URL de redirection requise';
$_['text_card_message_V6051'] = 'Prénom invalide';
$_['text_card_message_V6052'] = 'Nom invalide';
$_['text_card_message_V6053'] = 'Code du pays invalide';
$_['text_card_message_V6054'] = 'Adresse électronique invalide';
$_['text_card_message_V6055'] = 'Numéro de téléphone invalide';
$_['text_card_message_V6056'] = 'Numéro de téléphone portable invalide';
$_['text_card_message_V6057'] = 'Numéro de fax invalide';
$_['text_card_message_V6058'] = 'Titre invalide';
$_['text_card_message_V6059'] = 'URL de redirection invalide';
$_['text_card_message_V6060'] = 'URL de redirection invalide';
$_['text_card_message_V6061'] = 'Référence invalide';
$_['text_card_message_V6062'] = 'Nom de compagnie invalide';
$_['text_card_message_V6063'] = 'Description d’occupation invalide';
$_['text_card_message_V6064'] = 'Rue invalide';
$_['text_card_message_V6065'] = 'Complément d’adresse invalide';
$_['text_card_message_V6066'] = 'Ville invalide';
$_['text_card_message_V6067'] = 'Pays invalide';
$_['text_card_message_V6068'] = 'Code postal invalide';
$_['text_card_message_V6069'] = 'Adresse électronique invalide';
$_['text_card_message_V6070'] = 'Numéro de téléphone invalide';
$_['text_card_message_V6071'] = 'Numéro de téléphone portable invalide';
$_['text_card_message_V6072'] = 'Commentaires invalides';
$_['text_card_message_V6073'] = 'Numéro de fax invalide';
$_['text_card_message_V6074'] = 'URL invalide';
$_['text_card_message_V6075'] = 'Prénom de l’adresse de livraison invalide';
$_['text_card_message_V6076'] = 'Nom de l’adresse de livraison invalide';
$_['text_card_message_V6077'] = 'Rue de l’adresse de livraison invalide';
$_['text_card_message_V6078'] = 'Complément de l’adresse de livraison invalide';
$_['text_card_message_V6079'] = 'Localité de l’adresse de livraison invalide';
$_['text_card_message_V6080'] = 'État de l’adresse de livraison invalide';
$_['text_card_message_V6081'] = 'Code postal de l’adresse de livraison invalide';
$_['text_card_message_V6082'] = 'Adresse électronique de l’adresse de livraison invalide';
$_['text_card_message_V6083'] = 'Numéro de téléphone de l’adresse de livraison invalide';
$_['text_card_message_V6084'] = 'Pays de l’adresse de livraison invalide';
$_['text_card_message_V6091'] = 'Code de pays inconnu';
$_['text_card_message_V6100'] = 'Nom de carte invalide';
$_['text_card_message_V6101'] = 'Mois d’expiration de la carte invalide';
$_['text_card_message_V6102'] = 'Année d’expiration de la carte invalide';
$_['text_card_message_V6103'] = 'Mois de début de la carte invalide';
$_['text_card_message_V6104'] = 'Année de début de la carte invalide';
$_['text_card_message_V6105'] = 'Numéro de série de la carte invalide';
$_['text_card_message_V6106'] = 'CVN de la carte invalide';
$_['text_card_message_V6107'] = 'Code d’accès de la carte invalide';
$_['text_card_message_V6108'] = 'Adresse de l’hôte du client invalide';
$_['text_card_message_V6109'] = 'Agent utilisateur invalide';
$_['text_card_message_V6110'] = 'Numéro de la carte invalide';
$_['text_card_message_V6111'] = 'Accès à l’API non autorisé, le compte n’est pas certifié PCI';
$_['text_card_message_V6112'] = 'Détails de la carte, autres que l’année et le mois d’expiration, redondants';
$_['text_card_message_V6113'] = 'Transaction invalide pour un remboursement';
$_['text_card_message_V6114'] = 'Erreur de validation de la passerelle';
$_['text_card_message_V6115'] = 'Demande de remboursement direct invalide, identifiant de transaction';
$_['text_card_message_V6116'] = 'Données de la carte invalides sur l’identifiant de transaction original';
$_['text_card_message_V6124'] = 'Articles de la ligne invalides. Les éléments de la ligne ont été fournis, mais les totaux ne correspondent pas au champ du montant total';
$_['text_card_message_V6125'] = 'Type de paiement sélectionné inactivé';
$_['text_card_message_V6126'] = 'Numéro de carte cryptée invalide, le décryptage a échoué';
$_['text_card_message_V6127'] = 'CVN crypté invalide, le décryptage a échoué';
$_['text_card_message_V6128'] = 'Méthode invalide pour ce type de paiement';
$_['text_card_message_V6129'] = 'La transaction n’a pas été autorisée pour une capture ou une annulation';
$_['text_card_message_V6130'] = 'Erreur d’informations client générique';
$_['text_card_message_V6131'] = 'Erreur d’informations de livraison générique';
$_['text_card_message_V6132'] = 'La transaction a déjà été complétée ou annulée, l’opération n’est pas permise';
$_['text_card_message_V6133'] = 'Validation indisponible pour ce type de paiement';
$_['text_card_message_V6134'] = 'Authentification invalide de l’identifiant de transaction pour une capture ou une annulation';
$_['text_card_message_V6135'] = 'Erreur de PayPal lors du processus de remboursement';
$_['text_card_message_V6140'] = 'Compte du marchand suspendu';
$_['text_card_message_V6141'] = 'Détails du compte PayPal ou de la signature de l’API invalides';
$_['text_card_message_V6142'] = 'Autorisation non disponible pour la banque ou la succursale';
$_['text_card_message_V6150'] = 'Montant de remboursement invalide';
$_['text_card_message_V6151'] = 'Montant du remboursement supérieur à la transaction initiale';
$_['text_card_message_D4406'] = 'Erreur inconnue';
$_['text_card_message_S5010'] = 'Erreur inconnue';

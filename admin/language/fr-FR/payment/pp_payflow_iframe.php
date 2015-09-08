<?php
// Heading
$_['heading_title']					= 'PayPal Payflow Pro iFrame';
$_['heading_refund']				= 'Rembourser';

// Text
$_['text_payment']					= 'Paiement';
$_['text_success']					= 'Vous venez de modifier les paramètres du module de paiement PayPal Payflow Pro iFrame !';
$_['text_edit']                     = 'Modifier les paramètres PayPal Payflow Pro iFrame';
$_['text_pp_payflow_iframe']		= '<a target="_BLANK" href="https://www.paypal.com/uk/mrb/pal=V4T754QB63XXL"><img src="view/image/payment/paypal.png" alt="PayPal Website Payment Pro" title="PayPal Website Payment Pro iFrame" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorization']			= 'Autorisation';
$_['text_sale']						= 'Vente';
$_['text_authorise']				= 'Autoriser';
$_['text_capture']					= 'Réception différée';
$_['text_void']						= 'Annulation';
$_['text_payment_info']				= 'Information de paiement';
$_['text_complete']					= 'Terminé';
$_['text_incomplete']				= 'Incomplet';
$_['text_transaction']				= 'Transaction';
$_['text_confirm_void']				= 'Si vous annulez, vous ne pourrez plus réceptionner d\'autres fonds';
$_['text_refund']					= 'Rembourser';
$_['text_refund_issued']			= 'Le remboursement a correctement été effectué';
$_['text_redirect']					= 'Redirection';
$_['text_iframe']					= 'Iframe';
$_['help_checkout_method']			= "Veuillez utiliser la méthode Redirection si n'avez pas de certificat SSL installé ou si vous n\'avez pas désactivé l'option payer avec PayPal dans votre page de paiement hébergée.";

// Column
$_['column_transaction_id']			= 'Numéro de transaction';
$_['column_transaction_type']		= 'Type de transaction';
$_['column_amount']					= 'Montant';
$_['column_time']					= 'Heure';
$_['column_actions']				= 'Actions';

// Tab
$_['tab_settings']					= 'Paramètres';
$_['tab_order_status']				= 'Statut de la commande';
$_['tab_checkout_customisation']	= 'Personnalisation';

// Entry
$_['entry_vendor']					= 'Fournisseur';
$_['entry_user']					= 'Utilisateur';
$_['entry_password']				= 'Mot de passe';
$_['entry_partner']					= 'Partenaire';
$_['entry_test']					= 'Mode de test';
$_['entry_transaction']				= 'Méthode de transaction';
$_['entry_total']					= 'Total';
$_['entry_order_status']			= 'Statut de la commande';
$_['entry_geo_zone']				= 'Zone géographique';
$_['entry_status']					= 'Statut';
$_['entry_sort_order']				= 'Classement';
$_['entry_transaction_id']			= 'Numéro de transaction';
$_['entry_full_refund']				= 'Remboursement intégral';
$_['entry_amount']					= 'Montant';
$_['entry_message']					= 'Message';
$_['entry_ipn_url']					= 'Adresse URL IPN';
$_['entry_checkout_method']			= 'Méthode de paiement';
$_['entry_debug']					= 'Mode de débogage';
$_['entry_transaction_reference']	= 'Référence de la transaction';
$_['entry_transaction_amount']		= 'Montant de la transaction';
$_['entry_refund_amount']			= 'Montant du remboursement';
$_['entry_capture_status']			= 'État de réception';
$_['entry_void']					= 'Annulation';
$_['entry_capture']					= 'Réceptionner';
$_['entry_transactions']			= 'Transactions';
$_['entry_complete_capture']		= 'Réception complète';
$_['entry_canceled_reversal_status'] = 'Statut « Annulation de retour de paiement »';
$_['entry_completed_status']		= 'Statut « Terminé »';
$_['entry_denied_status']			= 'Statut « Refusé »';
$_['entry_expired_status']			= 'Statut « Expiré »';
$_['entry_failed_status']			= 'Statut « Échoué »';
$_['entry_pending_status']			= 'Statut « En attente »';
$_['entry_processed_status']		= 'Statut « Traité »';
$_['entry_refunded_status']			= 'Statut « Remboursé »';
$_['entry_reversed_status']			= 'Statut « Paiement retourné »';
$_['entry_voided_status']			= 'Statut « Annulé »';
$_['entry_cancel_url']				= 'Adresse URL d\'annulation :';
$_['entry_error_url']				= 'Adresse URL d\'erreurs :';
$_['entry_return_url']				= 'Adresse URL de retour :';
$_['entry_post_url']				= 'Adresse URL Silent POST :';

// Help
$_['help_vendor']					= 'L\'identifiant de connexion que vous avez créé lors de votre inscription à Website Payments Pro';
$_['help_user']						= 'Si vous configurez un ou plusieurs utilisateurs supplémentaires sur le compte, cette valeur correspond à l\'identifiant utilisateur autorisé à traiter les transactions. Si, toutefois, vous n\'avez pas défini des utilisateurs supplémentaires sur le compte, UTILISATEUR a la même valeur que FOURNISSEUR';
$_['help_password']					= 'Le mot de passe de 6 à 32 caractères que vous avez défini lors de l\'inscription au compte PayPal';
$_['help_partner']					= 'L\'identifiant fourni par le revendeur agréé de PayPal qui vous a inscrit au SDK Payflow. Si vous avez acheté votre compte directement chez PayPal, utilisez l\'identifiant PayPal Pro à la place';
$_['help_test']						= 'Utiliser le mode direct ou bien le mode de test (bac à sable) pour traiter les transactions ?';
$_['help_total']					= 'Le montant total que la commande doit atteindre avant que ce module de paiement devienne actif';
$_['help_debug']					= 'Enregistre des informations supplémentaires dans le journal';

// Button
$_['button_refund']					= 'Rembourser';
$_['button_void']					= 'Annulation';
$_['button_capture']				= 'Réceptionner';

// Error
$_['error_permission']				= 'Attention ! Vous n\'êtes pas autorisé à modifier les paramètres du module de paiement PayPal Website Payment Pro iFrame (UK) !';
$_['error_vendor']					= 'Le nom du fournisseur est requis !';
$_['error_user']					= 'Le nom d\'utilisateur est requis !';
$_['error_password']				= 'Le mot de passe est requis !';
$_['error_partner']					= 'Le nom du partenaire est requis !';
$_['error_missing_data']			= 'Données manquantes';
$_['error_missing_order']			= 'Impossible de trouver la commande';
$_['error_general']					= 'Une erreur s\'est produite';
$_['error_capture_amt']				= 'Saisissez le montant à réceptionner';
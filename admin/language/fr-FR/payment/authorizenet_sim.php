<?php
// Heading
$_['heading_title'] = 'Authorize.Net (SIM)';

// Text
$_['text_payment'] = 'Paiement';
$_['text_success'] = 'Vous venez de modifier les paramètres du compte Authorize.Net (SIM) !';
$_['text_edit'] = 'Modifier le module Authorize.Net (SIM)';
$_['text_authorizenet_sim'] = '<a onclick="window.open(’http://reseller.authorize.net/application/?id=5561103’);"><img src="view/image/payment/authorizenet.png" alt="Authorize.Net" title="Authorize.Net" style="border: 1px solid #EEEEEE;" /></a>';

// Entry
$_['entry_merchant'] = 'Identifiant';
$_['entry_key'] = 'Clef de transaction';
$_['entry_callback'] = 'URL de réponse retour';
$_['entry_md5'] = 'Valeur de hachage MD5';
$_['entry_test'] = 'Mode de test';
$_['entry_total'] = 'Total';
$_['entry_order_status'] = 'Statut de la commande';
$_['entry_geo_zone'] = 'Zone géographique';
$_['entry_status'] = 'Statut';
$_['entry_sort_order'] = 'Classement';

// Help
$_['help_callback'] = 'Veuillez ouvrir une session et configurer ceci sur <a href="https://secure.authorize.net" target="_blank" class="txtLink">https://secure.authorize.net</a>.';
$_['help_md5'] = 'La fonction de hachage MD5 permet d’authentifier et de sécuriser la réponse retour de la transaction reçue par Authorize.Net. Veuillez vous connecter et configurer cela sur <a href="https://secure.authorize.net" target="_blank" class="txtLink">https://secure.authorize.net</a>. (Facultatif)';
$_['help_total'] = 'Le montant total que la commande doit atteindre avant que ce module de paiement devienne actif.';

// Error
$_['error_permission'] = 'Attention : vous n’êtes pas autorisé à modifier le module de paiement Authorize.Net (SIM) !';
$_['error_merchant'] = 'L’identifiant marchand est requis !';
$_['error_key'] = 'La clef de transaction est requise !';

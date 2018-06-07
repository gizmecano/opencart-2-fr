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
$_['heading_title'] = 'FraudLabs Pro';
// Text
$_['text_extension'] = 'Extensions';
$_['text_success'] = 'Succès : vous avez modifié les paramètres FraudLabs Pro!';
$_['text_edit'] = 'Paramètres';
$_['text_signup'] = 'FraudLabs Pro est un service de détection de fraude. Vous pouvez <a href="http://www.fraudlabspro.com/plan?ref=1730" target="_blank"><u>vous enregistrez ici</u></a> pour obtenir une clef d’API gratuite.';
$_['text_id'] = 'Identifiant FraudLabs Pro';
$_['text_ip_address'] = 'Adresse IP';
$_['text_ip_net_speed'] = 'Vitesse du réseau de l’adresse IP';
$_['text_ip_isp_name'] = 'Nom de l’ISP de l’adresse IP';
$_['text_ip_usage_type'] = 'Type d’utilisation de l’adresse IP';
$_['text_ip_domain'] = 'Domaine de l’adresse IP';
$_['text_ip_time_zone'] = 'Fuseau horaire de l’adresse IP';
$_['text_ip_location'] = 'Emplacement de l’adresse IP';
$_['text_ip_distance'] = 'Distance de l’adresse IP';
$_['text_ip_latitude'] = 'Latitude de l’adresse IP';
$_['text_ip_longitude'] = 'Longitude de l’adresse IP';
$_['text_risk_country'] = 'Pays à haut risque';
$_['text_free_email'] = 'Courrier électronique gratuit';
$_['text_ship_forward'] = 'Faire suivre';
$_['text_using_proxy'] = 'Utilisation d’un proxy';
$_['text_bin_found'] = 'BIN trouvé';
$_['text_email_blacklist'] = 'Liste noire de courrier électronique';
$_['text_credit_card_blacklist'] = 'Liste noire de carte de crédit';
$_['text_score'] = 'Score FraudLabs Pro';
$_['text_status'] = 'Statut FraudLabs Pro';
$_['text_message'] = 'Message';
$_['text_transaction_id'] = 'Numéro de transaction';
$_['text_credits'] = 'Balance';
$_['text_error'] = 'Erreur:';
$_['text_flp_upgrade'] = '<a href="http://www.fraudlabspro.com/plan" target="_blank">[Mettre à niveau]</a>';
$_['text_flp_merchant_area'] = 'Veuillez vous connecter à <a href="http://www.fraudlabspro.com/merchant/login" target="_blank">FraudLabs Pro Merchant Area</a> pour plus d’information sur cette commande.';
// Entry
$_['entry_status'] = 'Statut';
$_['entry_key'] = 'Clef de l’API';
$_['entry_score'] = 'Score de risque';
$_['entry_order_status'] = 'Statut de commande';
$_['entry_review_status'] = 'Passer en revue le statut';
$_['entry_approve_status'] = 'Approuver le statut';
$_['entry_reject_status'] = 'Rejeter le statut';
$_['entry_Simuler_ip'] = 'Simuler une adresse IP';
// Help
$_['help_order_status'] = 'Les commandes qui ont un score au-delà de votre score de risque défini se verront attribué ce statut de commande.';
$_['help_review_status'] = 'Une commande qui est marquée comme passée en revue par FraudLabs Pro se verra attribué ce statut de commande.';
$_['help_approve_status'] = 'Une commande qui est marquée comme approuvée par FraudLabs Pro se verra attribué ce statut de commande.';
$_['help_reject_status'] = 'Une commande qui est marquée comme rejetée par FraudLabs Pro se verra attribué ce statut de commande.';
$_['help_simulate_ip'] = 'Simuler l’adresse IP du visiteur pour tester. Laisser en blanc pour désactiver.';
$_['help_fraudlabspro_id'] = 'Identifiant unique pour une transaction détectée par FraudLabs Pro';
$_['help_ip_address'] = 'Adresse IP';
$_['help_ip_net_speed'] = 'Vitesse de connexion';
$_['help_ip_isp_name'] = 'ISP de l’adresse IP.';
$_['help_ip_usage_type'] = 'Type d’usage de l’adresse IP (ISP, commercial, residentiel)';
$_['help_ip_domain'] = 'Nom de domaine de l’adresse IP.';
$_['help_ip_time_zone'] = 'Fuseau horaire de l’adresse IP.';
$_['help_ip_location'] = 'Emplacement de l’adresse IP.';
$_['help_ip_distance'] = 'Distance entre l’adresse IP et l’adresse de facturation.';
$_['help_ip_latitude'] = 'Latitude de l’adresse IP.';
$_['help_ip_longitude'] = 'Longitude de l’adresse IP.';
$_['help_risk_country'] = 'Dans le cas où l’adresse IP du pays se trouve dans la dernière liste de pays à risque élevé.';
$_['help_free_email'] = 'Dans le cas où l’adresse électronique provient d’un fournisseur de courrier électronique gratuit.';
$_['help_ship_forward'] = 'Dans le cas où l’adresse de livraison s’avère une adresse de transitaire.';
$_['help_using_proxy'] = 'Dans le cas où l’adresse IP provient d’un serveur proxy anonyme.';
$_['help_bin_found'] = 'Dans le cas où les informations du BIN concordent avec votre liste de BIN.';
$_['help_email_blacklist'] = 'Dans le cas où l’adresse électronique est dans la base de données de votre liste noire.';
$_['help_credit_card_blacklist'] = 'Dans le cas où la carte de crédit est dans la base de données de votre liste noire.';
$_['help_score'] = 'Score de risque : 0 (risque faible) - 100 (risque élevé).';
$_['help_status'] = 'Statut FraudLabs Pro';
$_['help_message'] = 'Description du message d’erreur FraudLabs Pro.';
$_['help_transaction_id'] = 'Identifiant unique pour une transaction analysée par le système FraudLabs Pro.';
$_['help_credits'] = 'Balance des crédits disponibles après cette transaction.';
// Error
$_['error_permission'] = 'Attention : vous n’avez pas l’autorisation de modifier les paramètres FraudLabs !';
$_['error_key'] = 'Une clef d’API est requise !';

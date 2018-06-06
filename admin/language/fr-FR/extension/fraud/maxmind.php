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
$_['heading_title'] = 'MaxMind Antifraude';
// Text
$_['text_extension'] = 'Extensions';
$_['text_success'] = 'Succès : vous avez modifié MaxMind Antifraude !';
$_['text_edit'] = 'Modifier MaxMind Antifraude';
$_['text_signup'] = 'MaxMind est un service de détection de fraude. Si vous n’avez pas de clef de lience, vous pouvez <a href="http://www.maxmind.com/?rId=opencart" target="_blank"><u>vous enregistrez ici</u></a>.';
$_['text_country_match'] = 'Concordance du pays:';
$_['text_country_code'] = 'Code du pays:';
$_['text_high_risk_country'] = 'Pays à haut risque:';
$_['text_distance'] = 'Distance:';
$_['text_ip_region'] = 'Région de l’adresse IP:';
$_['text_ip_city'] = 'Localité de l’adresse IP:';
$_['text_ip_latitude'] = 'Latitude de l’adresse IP:';
$_['text_ip_longitude'] = 'Longitude de l’adresse IP:';
$_['text_ip_isp'] = 'ISP:';
$_['text_ip_org'] = 'Organisation de l’adresse IP:';
$_['text_ip_asnum'] = 'ASNUM:';
$_['text_ip_user_type'] = 'Type d’utilisateur de l’adresse IP:';
$_['text_ip_country_confidence'] = 'Confiance dans le pays de l’adresse IP:';
$_['text_ip_region_confidence'] = 'Confiance dans la région de l’adresse IP:';
$_['text_ip_city_confidence'] = 'Confiance dans la localité de l’adresse IP:';
$_['text_ip_postal_confidence'] = 'Confiance dans le code postal de l’adresse IP:';
$_['text_ip_postal_code'] = 'Code postal de l’adresse IP:';
$_['text_ip_accuracy_radius'] = 'Rayon de précision de l’adresse IP:';
$_['text_ip_net_speed_cell'] = 'Vitesse du réseau de l’adresse IP';
$_['text_ip_metro_code'] = 'Code de métropole de l’adresse IP:';
$_['text_ip_area_code'] = 'Code de la zone de l’adresse IP:';
$_['text_ip_time_zone'] = 'Fuseau horaire de l’adresse IP:';
$_['text_ip_region_name'] = 'Nom de la région de l’adresse IP:';
$_['text_ip_domain'] = 'Domaine de l’adresse IP:';
$_['text_ip_country_name'] = 'Nom du pays de l’adresse IP:';
$_['text_ip_continent_code'] = 'Code du continent de l’adresse IP:';
$_['text_ip_corporate_proxy'] = 'IP de proxy d’entreprise:';
$_['text_anonymous_proxy'] = 'Proxy anonyme:';
$_['text_proxy_score'] = 'Score du proxy:';
$_['text_is_trans_proxy'] = 'Proxy transparent:';
$_['text_free_mail'] = 'Courrier électronique gratuit:';
$_['text_carder_email'] = 'Courrier électronique du titulaire:';
$_['text_high_risk_username'] = 'Nom d’utilisateur à haut risque:';
$_['text_high_risk_password'] = 'Mot de passe à haut risque:';
$_['text_bin_match'] = 'Concordance du BIN:';
$_['text_bin_country'] = 'Pays du BIN:';
$_['text_bin_name_match'] = 'Concordance du nom du BIN:';
$_['text_bin_name'] = 'Nom du BIN:';
$_['text_bin_phone_match'] = 'Concordance du téléphone du BIN:';
$_['text_bin_phone'] = 'Téléphone du BIN:';
$_['text_customer_phone_in_billing_location'] = 'Numéro de téléphone du client à l’emplacement de facturation:';
$_['text_ship_forward'] = 'Faire suivre:';
$_['text_city_postal_match'] = 'Concordance du code postal:';
$_['text_ship_city_postal_match'] = 'Concordance du code postal de livraison:';
$_['text_score'] = 'Score:';
$_['text_explanation'] = 'Explication:';
$_['text_risk_score'] = 'Score de risque:';
$_['text_queries_remaining'] = 'Requêtes restantes:';
$_['text_maxmind_id'] = 'Identifiant Maxmind:';
$_['text_error'] = 'Erreur:';
// Entry
$_['entry_key'] = 'Clef de licence MaxMind';
$_['entry_score'] = 'Score de risque';
$_['entry_order_status'] = 'Statut de commande';
$_['entry_status'] = 'Statut';
// Help
$_['help_order_status'] = 'Les commandes qui ont un score au-delà de votre score de risque défini se verront attribué ce statut de commande et ne seront pas autorisées à atteindre le statut complété automatiquement.';
$_['help_country_match'] = 'Dans le cas où le pays de l’adresse IP concorde avec l’adresse de facturation (non concordance = risque plus élevé).';
$_['help_country_code'] = 'Code du pays de l’adresse IP.';
$_['help_high_risk_country'] = 'Dans le cas où l’adresse IP ou le pays de l’adresse de facturation est au Ghana, au Nigeria ou au Viêt Nam.';
$_['help_distance'] = 'Distance entre l’adresse IP et l’adresse de facturation en kilomètres (distance importante = risque plus élevé).';
$_['help_ip_region'] = 'Région ou état estimé de l’adresse IP.';
$_['help_ip_city'] = 'Localité estimée de l’adresse IP.';
$_['help_ip_latitude'] = 'Latitude estimée de l’adresse IP.';
$_['help_ip_longitude'] = 'Longitude estimée de l’adresse IP.';
$_['help_ip_isp'] = 'ISP de l’adresse IP.';
$_['help_ip_org'] = 'Organisation de l’adresse IP.';
$_['help_ip_asnum'] = 'ASNUM (numéro de système automatique) estimé de l’adresse IP.';
$_['help_ip_user_type'] = 'Type d’usage estimé de l’adresse IP.';
$_['help_ip_country_confidence'] = 'Représente votre confiance que l’emplacement du pays est correct.';
$_['help_ip_region_confidence'] = 'Représente votre confiance que l’emplacement de la région est correct.';
$_['help_ip_city_confidence'] = 'Représente votre confiance que l’emplacement de la localité est correct.';
$_['help_ip_postal_confidence'] = 'Représente votre confiance que l’emplacement du code postal est correct.';
$_['help_ip_postal_code'] = 'Code postal estimé de l’adresse IP.';
$_['help_ip_accuracy_radius'] = 'La distance moyenne entre l’emplacement réel de l’utilisateur final utilisant l’adresse IP et celui retourné par la base de données GeoIP City, en miles.';
$_['help_ip_net_speed_cell'] = 'Type de réseau estimé de l’adresse IP.';
$_['help_ip_metro_code'] = 'Code de métropole estimé de l’adresse IP.';
$_['help_ip_area_code'] = 'Code de zone estimé de l’adresse IP.';
$_['help_ip_time_zone'] = 'Fuseau horaire estimé de l’adresse IP.';
$_['help_ip_region_name'] = 'Nom de la région estimée de l’adresse IP.';
$_['help_ip_domain'] = 'Domaine estimé de l’adresse IP.';
$_['help_ip_country_name'] = 'Nom du pays estimé de l’adresse IP.';
$_['help_ip_continent_code'] = 'Nom du continent estimé de l’adresse IP.';
$_['help_ip_corporate_proxy'] = 'Dans le cas où l’adresse IP est un proxy d’entreprise dans la base de données ou pas.';
$_['help_anonymous_proxy']= 'Dans le cas où l’adresse IP est un proxy anonyme (proxy anonyme = risque beaucoup plus élevé).';
$_['help_proxy_score'] = 'Probabilité que l’adresse IP soit un proxy ouvert.';
$_['help_is_trans_proxy'] = 'Dans le cas où l’adresse IP est dans notre base de données des serveurs proxy transparents, retourné si l’adresse IP transférée est transmise comme entrée.';
$_['help_free_mail'] = 'Dans le cas où l’adresse électronique provient d’un fournisseur de courrier électronique gratuit (service de courrier gratuit = risque plus élevé).';
$_['help_carder_email'] = 'Dans le cas où l’adresse de courrier électronique est dans la base de données des adresses à haut risque.';
$_['help_high_risk_username']= 'Dans le cas où l’entrée MD5 de nom d’utilisateur est dans la base de données des utilisateurs à haut risque. Uniquement retourné si le nom d’utilisateur MD5 est inclus dans les entrées.';
$_['help_high_risk_password'] = 'Dans le cas où l’entrée MD5 du mot de passe est dans la base de données des mots de passe à haut risque. Uniquement retourné si le mot de passe MD5 est inclus dans les entrées.';
$_['help_bin_match'] = 'Dans le cas où pays de la banque émettrice basé sur le BIN concorde avec le pays de l’adresse de facturation.';
$_['help_bin_country']= 'Code du pays de la banque dont est issue la carte de crédit selon le BIN.';
$_['help_bin_name_match'] = 'Dans le cas où le nom de la banque émettrice concorde avec le BIN saisi. Une valeur de retour affirmative donne une indication positive que le titulaire est bien en possession de la carte de crédit .';
$_['help_bin_name'] = 'Nom de la banque dont est issue la carte de crédit selon le BIN. Disponible pour approximativement 96% des BIN.';
$_['help_bin_phone_match'] = 'Dans le cas où le numéro de téléphone du service client concorde avec le numéro du BIN saisi. Une valeur de retour affirmative donne une indication positive que le titulaire est bien en possession de la carte de crédit .';
$_['help_bin_phone'] = 'Numéro de téléphone du service client listé au dois de la carte de crédit. Disponible pour approximativement 75% des BIN. Dans certains cas, les numéros de téléphone présents peuvent être obsolètes.';
$_['help_customer_phone_in_billing_location'] = 'Dans le cas où le numéro de téléphone du service client est dans le code postal de facturation. Une valeur de retour affirmative donne une indication positive que le numéro de téléphone appartient au titulaire de la carte. Une valeur de retour négative indique que le numéro de téléphone peut se trouver dans une zone différente ou ne pas être listé dans notre base de données. Non trouvé (NotFound) est retourné quand le préfixe du numéro de téléphone ne pas pas être trouvé du tout dans notre base de données. Actuellement, ne sont supportés que les numéros de téléphone des Etats-Unis.';
$_['help_ship_forward'] = 'Dans le cas où l’adresse de livraison est dans la base de données des "mail drops" connus.';
$_['help_city_postal_match'] = 'Dans le cas où l’emplacement de facturation concorde avec le code postal de l’état. Actuellement uniquement disponible pour les adresse situées aux Etats-Unis. Retourne une chaîne vide pour une adresse en dehors des Etats-Unis.';
$_['help_ship_city_postal_match'] = 'Dans le cas où l’emplacement de livraison concorde avec le code postal de l’état. Actuellement uniquement disponible pour les adresse situées aux Etats-Unis. Retourne une chaîne vide pour une adresse en dehors des Etats-Unis.';
$_['help_score'] = 'Score de fraude global basé sur les données listés ci-dessus. Ceci est le score de fraude original et il est basé sur une simple formule. Il a été remplacé par le score de risque (voir ci-dessous), mais est conservé par soucis de compatibilité.';
$_['help_explanation'] = 'Une brève explication du score, détaillant quels facteurs y contribuent selon notre formule. Veuillez noter que ceci correspond au score et non au score de risque.';
$_['help_risk_score'] = 'Nouveau score de fraude représentant la probabilité estimée que la commande sont une fraude, basé sur une analyse des transactions passées. Nécessite une mise à niveau pour les clients ayant souscrits avant février 2007.';
$_['help_queries_remaining'] = 'Nombre de requêtes restantes dans votre compte, peut être utilisé pour vous alerter quand vous pourriez avoir besoin de plus de requêtes pour votre compte.';
$_['help_maxmind_id'] = 'Identifiant unique, utilisé pour référencer les transactions lorsque sont reportées des activités fraululeuses à MaxMind. Ce rapport aidera MaxMind à améliorer son service et à rendre disponible une fonctionnalité plannifiée pour personnaliser la formule du score de fraude en fonction de votre historique de rejet.';
$_['help_error'] = 'Retourne une chaine d’erreur avec un message d’avertissement ou la raison pour laquelle la requête a échoué.';
// Error
$_['error_permission'] = 'Attention : vous n’êtes pas autorisé à modifier MaxMind Antifraude!';
$_['error_key'] = 'Une clef de licence est requise !';

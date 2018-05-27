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
$_['heading_title'] = 'OpenBay Pro';
// Buttons
$_['button_retry'] = 'Recommencer';
$_['button_update'] = 'Modifier';
$_['button_patch'] = 'Correctif';
$_['button_faq'] = 'Voir la FAQ';
// Tab
$_['tab_setting'] = 'Paramètres';
$_['tab_update'] = 'Mises à jour logicielles';
$_['tab_update_v1'] = 'Mise à jour facile';
$_['tab_patch'] = 'Correctif';
$_['tab_developer'] = 'Développeur';
// Text
$_['text_dashboard'] = 'Tableau de bord';
$_['text_success'] = 'Félicitation : les paramètres ont été enregistrés.';
$_['text_products'] = 'Éléments';
$_['text_orders'] = 'Commandes';
$_['text_manage'] = 'Administrer';
$_['text_help'] = 'Aide';
$_['text_tutorials'] = 'Tutoriels';
$_['text_suggestions'] = 'Idées';
$_['text_version_latest'] = 'Vous exécutez la dernière version';
$_['text_version_check'] = 'Vérifier la version du logiciel';
$_['text_version_installed'] = 'La version installée de OpenBay Pro: v';
$_['text_version_current'] = 'Votre version est';
$_['text_version_available'] = 'la plus récente version est';
$_['text_language'] = 'Langue de réponse de l’API';
$_['text_getting_messages'] = 'Recevoir des messages d’OpenBay Pro';
$_['text_complete'] = 'Terminé';
$_['text_patch_complete'] = 'Le correctif a été appliqué';
$_['text_connection_ok'] = 'Connexion au serveur approuvée. Les dossiers OpenCart ont été trouvés';
$_['text_updated'] = 'Le module a été mis à jour (v.%s)';
$_['text_update_description'] = 'L’outil de mise à jour apportera des modifications à votre système de fichier. Assurez-vous d’avoir un dossier complet et une sauvegarde de la base de données avant de mettre à jour.';
$_['text_patch_description'] = 'Si vous transférez la mise à jour manuellement, vous devez lancer le correctif pour terminer la mise à jour';
$_['text_clear_faq'] = 'Effacer les popups cachés de la FAQ';
$_['text_clear_faq_complete'] = 'Les notifications apparaîtront maintenant à nouveau';
$_['text_install_success'] = 'La place de marché a été installée';
$_['text_uninstall_success'] = 'La place de marché a été supprimée';
$_['text_title_messages'] = 'Messages et notifications';
$_['text_marketplace_shipped'] = 'Le statut de la commande sera actualisée en tant que expédiée sur la place de marché';
$_['text_action_warning'] = 'Cette opération est dangereuse, elle est donc protégée par mot de passe.';
$_['text_check_new'] = 'Vérification de nouvelle version';
$_['text_downloading'] = 'Téléchargement des fichiers de mise à jour';
$_['text_extracting'] = 'Extraction des fichiers';
$_['text_running_patch'] = 'Lancement des fichiers du correctif';
$_['text_fail_patch'] = 'Impossible d’extraire les fichiers de mise à jour';
$_['text_updated_ok'] = 'Mise à jour terminée : la version installée est ';
$_['text_check_server'] = 'Vérification des exigences du serveur';
$_['text_version_ok'] = 'Le logiciel est déjà à jour: la version installée est ';
$_['text_remove_files'] = 'Suppression des fichiers désormais obsolètes';
$_['text_confirm_backup'] = 'Veuillez vérifier que vous avez une sauvegarde complète avant de continuer';
// Column
$_['column_name'] = 'Nom du plugin';
$_['column_status'] = 'Statut';
$_['column_action'] = 'Action';
// Entry
$_['entry_patch'] = 'Patch de mise à jour manuelle';
$_['entry_courier'] = 'Service de messagerie';
$_['entry_courier_other'] = 'Autre service de messageries';
$_['entry_tracking'] = 'Suivi de #';
$_['entry_empty_data'] = 'Données de magasin vides ?';
$_['entry_password_prompt'] = 'Veuillez saisir le mot de passe d’effacement des données';
$_['entry_update'] = 'Mise à jour facile en un clic';
$_['entry_beta'] = 'Utiliser la version bêta';
// Error
$_['error_admin'] = 'Le répertoire admin doit exister';
$_['error_no_admin'] = 'La connexion est approuvée, mais votre répertoire admin de OpenCart est introuvable';
$_['error_no_files'] = 'La connexion est approuvée, mais les dossiers OpenCart sont introuvables ! Votre chemin d’accès racine est-il correct ?';
$_['error_failed'] = 'Impossible de charger, réessayer ?';
$_['error_tracking_id_format'] = 'Votre identifiant de suivi ne peut pas contenir les caractères > ou <';
$_['error_tracking_courier'] = 'Vous devez sélectionner un service de messagerie si vous souhaitez ajouter un identifiant de suivi';
$_['error_tracking_custom'] = 'Veuillez laissez le champ service de messagerie vide si vous souhaitez utiliser un service de messagerie personnalisée';
$_['error_permission'] = 'Vous n’êtes pas autorisé à modifier l’extension OpenBay Pro';
$_['error_mkdir'] = 'La fonction PHP mkdir est désactivée, contactez votre hébergeur';
$_['error_file_delete'] = 'Impossible de supprimer ces fichiers, vous devrez les effacer manuellement';
$_['error_mcrypt'] = 'La fonction PHP mcrypt_encrypt est désactivée, contactez votre hébergeur';
$_['error_mbstring'] = 'Le module PHP mbstrings est désactivé, contactez votre hébergeur';
$_['error_oc_version'] = 'L’utilisation de ce module n’a pas été testé avec votre version d’OpenCart. Vous pourriez rencontrer des problèmes.';
$_['error_fopen'] = 'La fonction PHP fopen est désactivée par votre hébergeur : vous serez dans l’incapacité d’importer des images lors de l\importation de produits';
$_['lang_error_vqmod'] = 'Votre dossier vQmod contient des fichiers OpenBay Pro plus anciens : ceux-ci doivent être supprimés !';
// Help
$_['help_clear_faq'] = 'Afficher toutes les notifications de l’aide à nouveau';
$_['help_empty_data'] = 'Ceci peut causer de sérieux dommages, ne l’utiliser pas si vous ne savez pas quels sont les effets !';
$_['help_easy_update'] = 'Cliquer sur mettre à jour pour installer la dernière version d’OpenBay Pro automatiquement';
$_['help_patch'] = 'Cliquer pour lancer les scripts du correctif';
$_['help_beta'] = 'Attention ! La version bêta est la dernière version de développement. Elle pourrait ne pas être stable et contenir des bugs.';

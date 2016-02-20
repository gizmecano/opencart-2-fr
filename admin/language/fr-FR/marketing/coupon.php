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
$_['heading_title'] = 'Bons de réduction';

// Text
$_['text_success'] = 'Vous venez de modifier les bons de réduction !';
$_['text_list'] = 'Liste des bons';
$_['text_add'] = 'Ajouter un bon';
$_['text_edit'] = 'Modifier un bon';
$_['text_percent'] = 'Pourcentage';
$_['text_amount'] = 'Montant fixe';

// Column
$_['column_name'] = 'Nom';
$_['column_code'] = 'Code';
$_['column_discount'] = 'Réduction';
$_['column_date_start'] = 'Date de début';
$_['column_date_end'] = 'Date de fin';
$_['column_status'] = 'Statut';
$_['column_order_id'] = 'Commande n°';
$_['column_customer'] = 'Client';
$_['column_amount'] = 'Montant';
$_['column_date_added'] = 'Date d’ajout';
$_['column_action'] = 'Action';

// Entry
$_['entry_name'] = 'Nom du bon';
$_['entry_code'] = 'Code';
$_['entry_type'] = 'Type';
$_['entry_discount'] = 'Réduction';
$_['entry_logged'] = 'Client connecté';
$_['entry_shipping'] = 'Livraison gratuite';
$_['entry_total'] = 'Montant total';
$_['entry_category'] = 'Catégorie';
$_['entry_product'] = 'Produits';
$_['entry_date_start'] = 'Date de début';
$_['entry_date_end'] = 'Date de fin';
$_['entry_uses_total'] = 'Nombre d’utilisations par bon';
$_['entry_uses_customer'] = 'Nombre d’utilisations par client';
$_['entry_status'] = 'Statut';

// Help
$_['help_code'] = 'Le code que le client devra entrer pour bénéficier de la réduction.';
$_['help_type'] = 'Pourcentage ou montant fixe.';
$_['help_logged'] = 'Le client devra être connecté pour pouvoir utiliser le bon de réduction.';
$_['help_total'] = 'Le montant total à atteindre pour que le bon de réduction soit valide.';
$_['help_category'] = 'Choisissez tous les produits de la catégorie sélectionnée.';
$_['help_product'] = 'Choisissez les produits spécifiques auxquels s’appliquera le bon de réduction. Si vous n’en sélectionnez aucun, le bon de réduction s’appliquera à tout le panier.';
$_['help_uses_total'] = 'Le nombre maximal de fois que le bon de réduction pourra être utilisé par n’importe quel client. Laissez le champ vide pour une utilisation illimitée.';
$_['help_uses_customer'] = 'Le nombre maximal de fois que le bon de réduction pourra être utilisé par un client unique. Laissez le champ vide pour une utilisation illimitée';

// Error
$_['error_permission'] = 'Attention : vous n’êtes pas autorisé à modifier les bons de réduction !';
$_['error_exists'] = 'Attention : ce bon de réduction est déjà utilisé !';
$_['error_name'] = 'Le nom du bon doit contenir entre 3 et 128 caractères !';
$_['error_code'] = 'Le code doit contenir entre 3 et 10 caractères !';

# OpenCart-2-fr

[English](README.md) | Français

## Introduction

OpenCart-2-fr est un pack de langue française pour la plateforme de commerce en ligne [OpenCart](http://www.opencart.com/) (version 2.x). Initié dans le cadre du projet (non-officiel) libre et gratuit [OpenCart Translation v.2](https://crowdin.com/project/opencart-translation-v2) (cf. [ce fichier](readme.txt) pour plus d'information), il rassemble des propositions de traduction pour une localisation française complète de l'interface d'administration (*backend*) ainsi que de la boutique en ligne (*frontend*).

## Installation

Pour installer ce pack de langue, il suffit d'extraire le fichier ZIP localement puis de transférer les fichiers sur le serveur (en conservant la même structure) sur la base d'une boutique OpenCart précédemment installée.

Ensuite, il convient d'afficher le panneau de configuration d'OpenCart et de suivre les étapes suivantes (à partir de l'installation par défaut en anglais):

1. Aller dans la rubrique `System -> Localisation -> Languages`
2. Cliquer sur le bouton `Edit`
3. Renseigner les valeurs suivantes :
   1. *Language Name* : `French`
   2. *Code* : `fr`
   3. *Locale* : `fr,fr-FR,fr_FR.UTF-8,french`
   4. *Image* : `fr.png`
   5. *Directory* : `fr-FR`
   6. *Status* : `Enabled`
   7. *Sort Order*: `1`
4. Enregistrer les changements
5. Allez à la rubrique `Système -> Paramètres`
6. Cliquer sur l'onglet `Paramètres régionaux` et définissez vos langues standards pour la boutique et le panneau d'administration (la langue du panneau d'administration ne changera pas **avant** cette étape)
7. Enregistrer les changements
8. Installation terminée

## Compatibilité

La [dernière version](https://github.com/GizMecano/opencart-2-fr/releases/latest) de ce pack a été testé avec succès avec la [version 2.0.1.1](https://github.com/opencart/opencart/releases/tag/2.0.1.1) de OpenCart.

## Contribution

La réalisation de ce pack doit bien entendu beaucoup aux [travaux des différents contributeurs](https://crowdin.com/project/opencart-translation-v2/fr/activity) du projet OpenCart Translation v.2.

Toutes suggestions ou propositions (traduction, optimisation, etc.) peuvent être considérées en ouvrant [un ticket](https://github.com/GizMecano/opencart-2-fr/issues) dans ce dépôt.

## Licence

OpenCart-2-fr : pack de langue française pour la plateforme de commerce en ligne OpenCart (version 2.x)

---

Copyright © 2015-2016 P. Mergey [*et al.*](#contribution)

Ce programme est un logiciel libre : vous pouvez le redistribuer et/ou le modifier au titre des clauses de la [Licence publique générale GNU](LICENSE), telle que publiée par la Free Software Foundation, soit la version 3 de la licence ou, à votre discrétion, une version ultérieure quelconque.

Ce programme est distribué dans l'espoir qu'il sera utile, mais SANS AUCUNE GARANTIE, sans même une garantie implicite de COMMERCIABILITE ou DE CONFORMITE A UNE UTILISATION PARTICULIERE. Voir la [Licence publique générale GNU](LICENSE) pour plus de détails.

Vous devriez avoir reçu un exemplaire de la [Licence publique générale GNU](LICENSE) avec ce programme. Si ce n'est pas le cas, vous pouvez consulter [cette page](http://www.gnu.org/licenses/gpl-3.0.txt).

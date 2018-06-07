# OpenCart-2-fr

[English](README.md) | Français

## Introduction

OpenCart-2-fr est un pack de langue française pour la plateforme de commerce en ligne [OpenCart](http://www.opencart.com/) (version 2.x). Initié dans le cadre du projet (non-officiel) libre et gratuit [OpenCart Translation v.2](https://crowdin.com/project/opencart-translation-v2) (cf. [ce fichier](readme.txt) pour plus d'information), il rassemble des propositions de traduction pour une localisation française complète de l'interface d'administration (_backend_) ainsi que de la boutique en ligne (_frontend_).

## Installation

Pour installer ce pack de langue, il suffit d'extraire le fichier ZIP localement puis de transférer les fichiers sur le serveur (en conservant la même structure) sur la base d'une boutique OpenCart précédemment installée.

Ensuite, il convient d'afficher le panneau de configuration d'OpenCart et de suivre les étapes suivantes (à partir de l'installation par défaut en anglais):

1. Aller dans la rubrique `System -> Localisation -> Languages`
2. Cliquer sur le bouton `Add New`
3. Renseigner les valeurs suivantes :
  - _Language Name_ : `French`
  - _Code_ : `fr`
  - _Locale_ : `fr,fr-FR,fr_FR.UTF-8,french`
  - _Image_ : `fr.png`
  - _Directory_ : `fr-FR`
  - _Status_ : `Enabled`
  - _Sort Order_: `1`
4. Enregistrer les changements
5. Allez à la rubrique `System -> Settings`
6. Cliquer sur l'onglet `Local` et définissez vos langues standards pour la boutique (_Language_) et le panneau d'administration (_Administration language_) : la langue de l'administration ne changera pas **avant** cette étape)
7. Enregistrer les changements
8. Installation terminée

## Compatibilité

OpenCart version | Language pack version
---------------- | ----------------------------
2.3.0.0          | [1.6.0-beta](https://github.com/gizmecano/opencart-2-fr/releases/tag/1.6.0-beta)
2.2.0.0          | [1.5.0](https://github.com/gizmecano/opencart-2-fr/releases/tag/1.5.0)
2.1.0.1 / 2.1.0.2| [1.4.1](https://github.com/gizmecano/opencart-2-fr/releases/tag/1.4.1)
2.1.0.0          | [1.4.0](https://github.com/gizmecano/opencart-2-fr/releases/tag/1.4.0)
2.0.3.1          | [1.3.0](https://github.com/gizmecano/opencart-2-fr/releases/tag/1.3.0)
2.0.3.0          | [1.2.0](https://github.com/gizmecano/opencart-2-fr/releases/tag/1.2.0)
2.0.2.0          | [1.1.1](https://github.com/gizmecano/opencart-2-fr/releases/tag/1.1.1)
2.0.1.1          | [1.0.1](https://github.com/gizmecano/opencart-2-fr/releases/tag/1.0.1)

## Contribution

La réalisation de ce pack doit bien entendu beaucoup aux [travaux des différents contributeurs](https://crowdin.com/project/opencart-translation-v2/fr/activity) du projet OpenCart Translation v.2.

Toutes suggestions ou propositions (traduction, optimisation, etc.) peuvent être considérées en ouvrant [un ticket](https://github.com/gizmecano/opencart-2-fr/issues) dans ce dépôt.

## Licence

OpenCart-2-fr : un pack de localisation française libre et ouvert pour la plateforme de commerce en ligne OpenCart (version 2.x)

--------------------------------------------------------------------------------

Copyright © 2015-2018 P. Mergey [_et al._](#contribution)

Ce programme est un logiciel libre : vous pouvez le redistribuer et/ou le modifier au titre des clauses de la [Licence publique générale GNU](LICENSE), telle que publiée par la Free Software Foundation, soit la version 3 de la licence ou, à votre discrétion, une version ultérieure quelconque.

Ce programme est distribué dans l'espoir qu'il sera utile, mais SANS AUCUNE GARANTIE, sans même une garantie implicite de COMMERCIABILITE ou DE CONFORMITE A UNE UTILISATION PARTICULIERE. Voir la [Licence publique générale GNU](LICENSE) pour plus de détails.

Vous devriez avoir reçu un exemplaire de la [Licence publique générale GNU](LICENSE) avec ce programme. Si ce n'est pas le cas, vous pouvez consulter [cette page](http://www.gnu.org/licenses/gpl-3.0.txt).

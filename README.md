# OpenCart-2-fr

English | [Français](README-fr.md)

## Introduction

OpenCart-2-fr is a French language pack for the ecommerce platform [OpenCart](http://www.opencart.com/) (version 2.x). Started within the context of the (unofficial) open and free project [OpenCart Translation v.2](https://crowdin.com/project/opencart-translation-v2) (cf. [this file](readme.txt) for further details), it brings together translation proposals for a complete French localization of the administration interface (_backend_) as well as the online store (_frontend_).

## Installation

To install this language package, extract the zipped package locally and transfer the files to your server (keeping the same structure) on the roots of a previously installed OpenCart.

After that, open your OpenCart backend and follow these steps:

1. Navigate to `System -> Localisation -> Languages`
2. Click the `Add New` button
3. Fill in the following values :
  - _Language Name_ : `French`
  - _Code_ : `fr`
  - _Locale_ : `fr,fr-FR,fr_FR.UTF-8,french`
  - _Image_ : `fr.png`
  - _Directory_ : `fr-FR`
  - _Status_ : `Enabled`
  - _Sort Order_: `1`
4. Save these changes
5. Navigate to `System -> Settings`
6. Click on the tab `Local` and define your standard languages for frontend (_Language_) and backend (_Administration language_): backend language will not change **before** this step
7. Save these changes
8. Installation is complete

## Compatibility

OpenCart version | Language pack version
---------------- | ----------------------------
2.3.0.0 / 2.3.0.1| [1.6.0-beta](https://github.com/gizmecano/opencart-2-fr/releases/tag/1.6.0-beta)
2.2.0.0          | [1.5.0](https://github.com/gizmecano/opencart-2-fr/releases/tag/1.5.0)
2.1.0.1 / 2.1.0.2| [1.4.1](https://github.com/gizmecano/opencart-2-fr/releases/tag/1.4.1)
2.1.0.0          | [1.4.0](https://github.com/gizmecano/opencart-2-fr/releases/tag/1.4.0)
2.0.3.1          | [1.3.0](https://github.com/gizmecano/opencart-2-fr/releases/tag/1.3.0)
2.0.3.0          | [1.2.0](https://github.com/gizmecano/opencart-2-fr/releases/tag/1.2.0)
2.0.2.0          | [1.1.1](https://github.com/gizmecano/opencart-2-fr/releases/tag/1.1.1)
2.0.1.1          | [1.0.1](https://github.com/gizmecano/opencart-2-fr/releases/tag/1.0.1)

## Contribution

The achievement of this pack owes much, of course, to [works made by various contributors](https://crowdin.com/project/opencart-translation-v2/fr/activity) from the OpenCart Translation v.2 project.

Any suggestions or submissions (translation, optimisation, etc.) might be considered by opening [an issue](https://github.com/gizmecano/opencart-2-fr/issues) into this repository.

## Licence

OpenCart-2-fr: a French opensource localization pack for ecommerce platform OpenCart (version 2.x)

--------------------------------------------------------------------------------

Copyright © 2015-2018 P. Mergey [_et al._](#contribution)

This program is free software: you can redistribute it and/or modify it under the terms of the [GNU General Public License](LICENSE) as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the [GNU General Public License](LICENSE) for more details.

You should have received a copy of the [GNU General Public License](LICENSE) along with this program. If not, see [this page](http://www.gnu.org/licenses/gpl-3.0.txt).

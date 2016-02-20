# OpenCart-2-fr

English | [Français](README-fr.md)

## Introduction

OpenCart-2-fr is a French language pack for the ecommerce platform [OpenCart](http://www.opencart.com/) (version 2.x). Started within the context of the (unofficial) open and free project [OpenCart Translation v.2](https://crowdin.com/project/opencart-translation-v2) (cf. [this file](readme.txt) for further details), it brings together translation proposals for a complete French localization of the administration interface (*backend*) as well as the online store (*frontend*).

## Installation

To install this language package, extract the zipped package locally and transfer the files on your server (keeping the same structure) to your server on the roots of a previously installed OpenCart.

After that, open your OpenCart backend and follow these steps:

1. Navigate to `System -> Localisation -> Languages`
2. Click the `Edit` button
3. Fill in the following values :
   1. *Language Name* : `French`
   2. *Code* : `fr`
   3. *Locale* : `fr,fr-FR,fr_FR.UTF-8,french`
   4. *Image* : `fr.png`
   5. *Directory* : `fr-FR`
   6. *Status* : `Enabled`
   7. *Sort Order*: `1`
4. Save these changes
5. Navigate to `System -> Settings`
6. Click on the tab `Locale` and define your standard languages for frontend and backend (backend language will not change **before** this step)
7. Save these changes
8. Installation is complete

## Compatibility

The [latest release](https://github.com/GizMecano/opencart-2-fr/releases/latest) of this pack has been successfully tested with [OpenCart 2.0.1.1](https://github.com/opencart/opencart/releases/tag/2.0.1.1).

## Contribution

The achievement of this pack owes much, of course, to [works made by various contributors](https://crowdin.com/project/opencart-translation-v2/fr/activity) from the OpenCart Translation v.2 project.

Any suggestions or submissions (translation, optimisation, etc.) might be considered by opening [an issue](https://github.com/GizMecano/opencart-2-fr/issues) into this repository.

## Licence

OpenCart-2-fr: a French language pack for the ecommerce platform OpenCart (version 2.x)

---

Copyright © 2015-2016 P. Mergey [*et al.*](#contribution)

This program is free software: you can redistribute it and/or modify it under the terms of the [GNU General Public License](LICENSE) as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the [GNU General Public License](LICENSE) for more details.

You should have received a copy of the [GNU General Public License](LICENSE) along with this program. If not, see [this page](http://www.gnu.org/licenses/gpl-3.0.txt).

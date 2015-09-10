$Id: readme.txt 3758 2014-10-08 10:29:50Z mic $

Readme für OpenCart Lokalisierungsprojekt bei crowdin
===================================================

Package/Paket	Languages (admin/user) - Sprachen (Admin/Benutzer)
Requirement		OpenCart 2.x
Copyright		OpenCart http://www.opencart.com
License			GNU/GPL http://www.gnu.org/copyleft/gpl.html
-----------------------------------------------------------------

**********************************************************************************
* General																		 *
* *******																		 *
* This files here are for usage for OpenCart Version 2 only.					 *
* Each directory (admin & catalog) has a so called 'master' file.				 *
* In the project it is displayed always as english.php.							 *
* These 2 files will be exported in localized format. For example if			 *
* you select fr-FR (French) they will be renamed automatically into fr-FR.php	 *
*																				 *
* Installation language															 *
* *********************															 *
* If you want to install OpenCart in your own language, please read notes below. *
*																				 *
* Translators																	 *
* ***********																	 *
* To provide the most accurate translations, please recheck your translations	 *
* before submit.																 *
* And - if you want to offer an installation process in your language, translate *
* also the file in the install folder.											 *
*																				 *
* And to not forget to add your installation settings for your language below 	 *
* (create your own localized section below)										 *
*																				 *
**********************************************************************************

NOTE: settings like code and locale (see below) are depending on the language
you are using.
If you are not sure which variables you can/should use, please search the internet
for proper values.

English
=======

Description
***********
Complete Translation Package for admin (Backend) and user (Frontend / shop)
and installation language.

Installation
************

To install this language package, extract the zipped package locally
and transfer the files (same structure as you can see) with FTP
to your server (current shop installation).
After that, open your OpenCart backend and follow these steps:

1. navigate to System -> Localisation -> Languages
2. Click the Edit button
3. Fill in the following values:

	3.1 Language	English
	3.2 Code		en-GB
	3.3 Locale		en-gb,en_gb,en-GB,english
	3.4 Image		gb.png
	3.5 Directory	en-GB
	3.6 Status		Enabled
	3.7 Sort Order	1

    Save

4. Navigate to System -> Settings
5. Click on the tab Locale and define your standard languages for
    front- and backend (backend language will not change BEFORE this step!)
6. Save
7. Ready

Deutsch
=======

Beschreibung
************
Komplette deutsche Übersetzung für Admin (Backend) und Benutzer (Frontend / Shop)
inklusive Installationssprache

Installation
************

Um dieses Sprachenpaket zu installieren, das gezippte Paket Lokal entpacken.
Anschließend die Dateien (gleiche Verzeichnisstruktur wie sichtbar
im Ordner upload) per FTP auf den Server (Shopinstallation) kopieren.

Hinweis: das System zeigt noch die englische Sprache an, daher sind im Folgenden
etliche Begriffe in Englisch (wie im Shop angezeigt) angegeben:

1.	Backend aufrufen -> System -> Localisation -> Languages
2.	Button "Insert" anklicken
3.	Folgende Werte eingeben:

	3.1 Language	Deutsch (German)
	3.2 Code		de-DE
	3.3 Locale		de_DE.UTF-8,de_DE,de-de,german
	3.4 Image		de.png
	3.5 Directory	de-DE
	3.6 Status		Enabled
	3.7 Sort Order	1

    Sichern (Button Save rechts oben anklicken)

4.	System -> Settings aufrufen
5.	Reiter "Locale" anklicken und die Standardsprache für Admin und Benutzer
	festlegen > erst dann schaltet das Backend auf die hier eingestellte Sprache
    um!
6.	Speichern (Button Sichern rechts oben anklicken)
7.	Fertig

!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! WICHTIG !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
! Um den verschiedenen Gesetzen zu entprechen (speziell EU-Raum, AT, DE),         !
! kann es erforderlich sein, dass verschiedene Variablen (z.B. $_['text_price'] ) !
! angepasst werden müssen!                                                        !
! Näheres dazu auf http://osworx.net wo wir ein spezielles Paket zur Verfügung    !
! stellen, mit welchem die rechtlichen Anforderungen abgedeckt werden.            !
!                                                                                 !
! Siehe dazu Module LEGAL sowie EUCookie auf http://osworx.net                    !
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! WICHTIG !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

Installationssprache
********************
In diesem Paket ist auch die dt. Sprache für eine Installation in Deutsch enthalten.
Wird das Sprachenpaket VOR der Installation auf den Server kopiert, kann
der Installationsvorgang in Deutsch durchgeführt werden.

Support
*******
http://osworx.net and http://forum.opencart.com/viewforum.php?f=189

Guarantee & Warranty
********************
This extension is created under best effort.
Unlikely we cannot guarantee for any lost of data or malfunction.

License
*******
Notes:
    > this package can be used for own works / derivates to following conditions:
    - headers:
		- must stay intact
        - you are allowed to add your own lines
        - you are NOT allowed to delete any line of the headers
    - this readme has always to be included in further packages
    - building own commercial packages with this as base is strictly forbidden!

Hinweise:
    > dieses Paket kann für eigene Werke zu folgenden Konditionen verwendet werden:
    - Kopfzeilen:
		- müssen intakt bleiben
        - es können eigene Zeilen hinzu gefügt werden
        - es dürfen KEINE Kopfzeilenzeilen gelöscht werden
    - diese Datei (readme.txt) muss in allen zukünftigen Paketen inkludiert sein
    - eigene kommerzielle Pakete damit zu erstellen ist strikt verboten!

Versionen/Changelog (rev)
*************************
legend
* -> Security Fix
# -> Bug Fix
+ -> Addition
^ -> Change
- -> Removed
! -> Note
-------------------------
1.0.7 2015.03.04
1.0.6	2014.10.08	initial release
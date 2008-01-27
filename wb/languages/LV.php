<?php

// $Id$

/*

 Website Baker Project <http://www.websitebaker.org/>
 Copyright (C) 2004-2008, Ryan Djurovich

 Website Baker is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 Website Baker is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with Website Baker; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

*/

// Define that this file is loaded
if(!defined('LANGUAGE_LOADED')) {
	define('LANGUAGE_LOADED', true);
}

// Set the language information
$language_code = 'LV';
$language_name = 'Latvie�u';
$language_version = '2.7';
$language_platform = '2.7.x';
$language_author = 'Kri�janis Rijnieks';
$language_license = 'GNU General Public License';

// Menu titles
$MENU['START'] = 'Sakums';
$MENU['PAGES'] = 'Lapas';
$MENU['MEDIA'] = 'Mediji';
$MENU['ADDONS'] = 'Papildinajumi';
$MENU['MODULES'] = 'Moduli';
$MENU['TEMPLATES'] = '�abloni';
$MENU['LANGUAGES'] = 'Valodas';
$MENU['PREFERENCES'] = 'Preferences'; //needs to be translated
$MENU['SETTINGS'] = 'Iestatijumi';
$MENU['ADMINTOOLS'] = 'Admin-Tools'; //needs to be translated
$MENU['ACCESS'] = 'Piekluve';
$MENU['USERS'] = 'Lietotaji';
$MENU['GROUPS'] = 'Grupas';
$MENU['HELP'] = 'Palidziba';
$MENU['VIEW'] = 'Apskatit';
$MENU['LOGOUT'] = 'Izlogoties';
$MENU['LOGIN'] = 'Ielogoties';
$MENU['FORGOT'] = 'Informacija par kontu';

// Section overviews
$OVERVIEW['START'] = 'Administracijas parskats';
$OVERVIEW['PAGES'] = 'Mened�et lapas...';
$OVERVIEW['MEDIA'] = 'Mened�et failus iek� media mapes...';
$OVERVIEW['MODULES'] = 'Mened�et Website Baker modulus...';
$OVERVIEW['TEMPLATES'] = 'Mened�et �ablonus...';
$OVERVIEW['LANGUAGES'] = 'Mened�et Website Baker valodas...';
$OVERVIEW['PREFERENCES'] = 'Mainit preferences - e-pasta adresi, paroli, utt...';
$OVERVIEW['SETTINGS'] = 'Mainit Website Baker iestatijumus...';
$OVERVIEW['USERS'] = 'Mened�et lietotajus, kas var ielogties Website Baker sistema...';
$OVERVIEW['GROUPS'] = 'Mened�et lietotaju grupas un noteikt to atlaujas...';
$OVERVIEW['HELP'] = 'Jautajumi? Atrodi atbildi...';
$OVERVIEW['VIEW'] = 'Apskatit majas lapu jauna loga...';

// Headings
$HEADING['MODIFY_DELETE_PAGE'] = 'Mainit/Izdzest lapu';
$HEADING['DELETED_PAGES'] = 'Izdzestas lapas';
$HEADING['ADD_PAGE'] = 'Pievienot lapu';
$HEADING['ADD_HEADING'] = 'Pievienot virsrakstu';
$HEADING['MODIFY_PAGE'] = 'Mainit lapu';
$HEADING['MODIFY_PAGE_SETTINGS'] = 'Mainit lapas iestatijumus';
$HEADING['MODIFY_ADVANCED_PAGE_SETTINGS'] = 'Mainit papla�inatos lapas iestatijumus';
$HEADING['MANAGE_SECTIONS'] = 'Mened�et sadalas';
$HEADING['MODIFY_INTRO_PAGE'] = 'Mainit pirmo lapu';

$HEADING['BROWSE_MEDIA'] = 'Parlukot medijus';
$HEADING['CREATE_FOLDER'] = 'Izveidot mapi';
$HEADING['UPLOAD_FILES'] = 'Aug�upieladet datni(-es)';

$HEADING['INSTALL_MODULE'] = 'Instalet moduli';
$HEADING['UNINSTALL_MODULE'] = 'Atinstalet moduli';
$HEADING['MODULE_DETAILS'] = 'Informacija par moduli';

$HEADING['INSTALL_TEMPLATE'] = 'Instalet �ablonu';
$HEADING['UNINSTALL_TEMPLATE'] = 'Atinstalet �ablonu';
$HEADING['TEMPLATE_DETAILS'] = 'Informacija par �ablonu';

$HEADING['INSTALL_LANGUAGE'] = 'Instalet valodu';
$HEADING['UNINSTALL_LANGUAGE'] = 'Atinstalet valodu';
$HEADING['LANGUAGE_DETAILS'] = 'Informacija par valodu';

$HEADING['MY_SETTINGS'] = 'Mani iestatijumi';
$HEADING['MY_EMAIL'] = 'Mana e-pasta adrese';
$HEADING['MY_PASSWORD'] = 'Mana parole';

$HEADING['GENERAL_SETTINGS'] = 'Visparigie iestatijumi';
$HEADING['DEFAULT_SETTINGS'] = 'Noklusetie iestatijumi';
$HEADING['SEARCH_SETTINGS'] = 'Mekle�anas iestatijumi';
$HEADING['FILESYSTEM_SETTINGS'] = 'Datnu sistemas iestatijumi';
$HEADING['SERVER_SETTINGS'] = 'Servera iestatijumi';
$HEADING['WBMAILER_SETTINGS'] = 'Mailer Settings'; //needs to be translated
$HEADING['ADMINISTRATION_TOOLS'] = 'Administre�anas riki';

$HEADING['MODIFY_DELETE_USER'] = 'Mainit/dzest lietotaju';
$HEADING['ADD_USER'] = 'Pievienot lietotaju';
$HEADING['MODIFY_USER'] = 'Mainit lietotaju';

$HEADING['MODIFY_DELETE_GROUP'] = 'Mainit/dzest grupu';
$HEADING['ADD_GROUP'] = 'Pievienot grupu';
$HEADING['MODIFY_GROUP'] = 'Mainit grupu';

// Other text
$TEXT['ADD'] = 'Pievienot';
$TEXT['MODIFY'] = 'Mainit';
$TEXT['SETTINGS'] = 'Iestatijumi';
$TEXT['DELETE'] = 'Dzest';
$TEXT['SAVE'] = 'Saglabat';
$TEXT['RESET'] = 'Parladet';
$TEXT['LOGIN'] = 'Ielogo�anas';
$TEXT['RELOAD'] = 'Parladet';
$TEXT['CANCEL'] = 'Atcelt';
$TEXT['NAME'] = 'Nosaukums';
$TEXT['PLEASE_SELECT'] = 'Izvelies, ludzu';
$TEXT['TITLE'] = 'Nosaukums';
$TEXT['PARENT'] = 'Vecaks';
$TEXT['TYPE'] = 'Tips';
$TEXT['VISIBILITY'] = 'Redzamiba';
$TEXT['PRIVATE'] = 'Privats';
$TEXT['PUBLIC'] = 'Publisks';
$TEXT['NONE'] = 'Tuk�s';
$TEXT['NONE_FOUND'] = 'Nekas netika atrasts';
$TEXT['CURRENT'] = 'Eso�ais';
$TEXT['CHANGE'] = 'Mainit';
$TEXT['WINDOW'] = 'Logs';
$TEXT['DESCRIPTION'] = 'Apraksts';
$TEXT['KEYWORDS'] = 'Atslegvardi';
$TEXT['ADMINISTRATORS'] = 'Administratori';
$TEXT['PRIVATE_VIEWERS'] = 'Iek�ejie verotaji';
$TEXT['EXPAND'] = 'Atvert';
$TEXT['COLLAPSE'] = 'Aizvert';
$TEXT['MOVE_UP'] = 'Bidit aug�up';
$TEXT['MOVE_DOWN'] = 'Bidit lejup';
$TEXT['RENAME'] = 'Parsaukt';
$TEXT['MODIFY_SETTINGS'] = 'Mainir iestatijumus';
$TEXT['MODIFY_CONTENT'] = 'Mainit saturu';
$TEXT['VIEW'] = 'Radit';
$TEXT['UP'] = 'Uz aug�u';
$TEXT['FORGOTTEN_DETAILS'] = 'Kaut ko nevari atcereties?';
$TEXT['NEED_TO_LOGIN'] = 'Gribi ielogoties?';
$TEXT['SEND_DETAILS'] = 'Sutit konta datus';
$TEXT['USERNAME'] = 'Lietotajvards';
$TEXT['PASSWORD'] = 'Parole';
$TEXT['HOME'] = 'Galvena lapa';
$TEXT['TARGET_FOLDER'] = 'Merkmape';
$TEXT['OVERWRITE_EXISTING'] = 'Parrakstit eso�as';
$TEXT['FILE'] = 'Datne';
$TEXT['FILES'] = 'Datnes';
$TEXT['FOLDER'] = 'Mape';
$TEXT['FOLDERS'] = 'Mapes';
$TEXT['CREATE_FOLDER'] = 'Izveidot mapi';
$TEXT['UPLOAD_FILES'] = 'Aug�upieladet failus';
$TEXT['CURRENT_FOLDER'] = 'Pa�reizeja mape';
$TEXT['TO'] = 'Uz';
$TEXT['FROM'] = 'No';
$TEXT['INSTALL'] = 'Instalet';
$TEXT['UNINSTALL'] = 'Atinstalet';
$TEXT['VIEW_DETAILS'] = 'Radit detalas';
$TEXT['DISPLAY_NAME'] = 'Vards';
$TEXT['AUTHOR'] = 'Autors';
$TEXT['VERSION'] = 'Versija';
$TEXT['DESIGNED_FOR'] = 'Dizainets priek�';
$TEXT['DESCRIPTION'] = 'Apraksts';
$TEXT['EMAIL'] = 'E-pasta adrese';
$TEXT['LANGUAGE'] = 'Valoda';
$TEXT['TIMEZONE'] = 'Laika zona';
$TEXT['CURRENT_PASSWORD'] = 'Eso�a parole';
$TEXT['NEW_PASSWORD'] = 'Jauna parole';
$TEXT['RETYPE_NEW_PASSWORD'] = 'Parole velreiz';
$TEXT['ACTIVE'] = 'Aktivs';
$TEXT['DISABLED'] = 'Izslegts';
$TEXT['ENABLED'] = 'Ieslegts';
$TEXT['RETYPE_PASSWORD'] = 'Parole velreiz';
$TEXT['GROUP'] = 'Grupa';
$TEXT['SYSTEM_PERMISSIONS'] = 'Atlaujas attieciba uz sistemu';
$TEXT['MODULE_PERMISSIONS'] = 'Atlaujas attieciba uz moduliem';
$TEXT['SHOW_ADVANCED'] = 'Radit papla�inatas opcijas';
$TEXT['HIDE_ADVANCED'] = 'Slept papla�inatas opcijas';
$TEXT['BASIC'] = 'Pamata';
$TEXT['ADVANCED'] = 'Papla�inats';
$TEXT['WEBSITE'] = 'Timekla vietne';
$TEXT['DEFAULT'] = 'Noklusetais';
$TEXT['KEYWORDS'] = 'Atslegvardi';
$TEXT['TEXT'] = 'Teksts';
$TEXT['HEADER'] = 'Galvene';
$TEXT['FOOTER'] = 'Kajene';
$TEXT['TEMPLATE'] = '�ablons';
$TEXT['INSTALLATION'] = 'Instalacija';
$TEXT['DATABASE'] = 'Datu baze';
$TEXT['HOST'] = 'Hosts';
$TEXT['INTRO'] = 'Ievads';
$TEXT['PAGE'] = 'Lapa';
$TEXT['SIGNUP'] = 'Registracija';
$TEXT['PHP_ERROR_LEVEL'] = 'PHP Kludu zino�anas limenis';
$TEXT['ADMIN'] = 'Admins';
$TEXT['PATH'] = 'Cel�';
$TEXT['URL'] = 'URL'; //needs to be translated
$TEXT['FRONTEND'] = 'Front-end'; //needs to be translated
$TEXT['EXTENSION'] = 'Ekstensija';
$TEXT['TABLE_PREFIX'] = 'Tabulas prefikss';
$TEXT['CHANGES'] = 'Izmainas';
$TEXT['ADMINISTRATION'] = 'Administracija';
$TEXT['FORGOT_DETAILS'] = 'Aizmirsi detalas?';
$TEXT['LOGGED_IN'] = 'Ielogojies';
$TEXT['WELCOME_BACK'] = 'Ar atgrie�anos';
$TEXT['FULL_NAME'] = 'Vards';
$TEXT['ACCOUNT_SIGNUP'] = 'Registreties';
$TEXT['LINK'] = 'Links';
$TEXT['ANCHOR'] = 'Anchor'; //needs to be translated
$TEXT['TARGET'] = 'Merkis';
$TEXT['NEW_WINDOW'] = 'Jauns logs';
$TEXT['SAME_WINDOW'] = 'Tas pats logs';
$TEXT['TOP_FRAME'] = 'Freims vienu limeni augstak';
$TEXT['PAGE_LEVEL_LIMIT'] = 'Lapu apak�limenu limits';
$TEXT['SUCCESS'] = 'Kartibnieks';
$TEXT['ERROR'] = 'Keza';
$TEXT['ARE_YOU_SURE'] = 'Esi parliecinats?';
$TEXT['YES'] = 'Ja';
$TEXT['NO'] = 'Ne';
$TEXT['SYSTEM_DEFAULT'] = 'Sistemas noklusetais';
$TEXT['PAGE_TITLE'] = 'Lapas nosaukums';
$TEXT['MENU_TITLE'] = 'Izvelnes nosaukums';
$TEXT['ACTIONS'] = 'Darbibas';
$TEXT['UNKNOWN'] = 'Nezinams';
$TEXT['BLOCK'] = 'Bloks';
$TEXT['SEARCH'] = 'Meklet';
$TEXT['SEARCHING'] = 'Tiek meklets';
$TEXT['POST'] = 'Pievienot';
$TEXT['COMMENT'] = 'Komentars';
$TEXT['COMMENTS'] = 'Komentari';
$TEXT['COMMENTING'] = 'Tiek komentets';
$TEXT['SHORT'] = 'Iss';
$TEXT['LONG'] = 'Gar�s';
$TEXT['LOOP'] = 'Cikls';
$TEXT['FIELD'] = 'Lauks';
$TEXT['REQUIRED'] = 'Obligats';
$TEXT['LENGTH'] = 'Garums';
$TEXT['MESSAGE'] = 'Zina';
$TEXT['SUBJECT'] = 'Nosaukums';
$TEXT['MATCH'] = 'Sakritiba';
$TEXT['ALL_WORDS'] = 'Visi vardi';
$TEXT['ANY_WORDS'] = 'Jebkuri vardi';
$TEXT['EXACT_MATCH'] = 'Viens pret vienu';
$TEXT['SHOW'] = 'Radit';
$TEXT['HIDE'] = 'Slept';
$TEXT['START_PUBLISHING'] = 'Sakt publicet';
$TEXT['FINISH_PUBLISHING'] = 'Beigt publicet';
$TEXT['DATE'] = 'Datums';
$TEXT['START'] = 'Sakums';
$TEXT['END'] = 'Beigas';
$TEXT['IMAGE'] = 'Attels';
$TEXT['ICON'] = 'Ikona';
$TEXT['SECTION'] = 'Sadala';
$TEXT['DATE_FORMAT'] = 'Datuma formats';
$TEXT['TIME_FORMAT'] = 'Laika formats';
$TEXT['RESULTS'] = 'Rezultati';
$TEXT['RESIZE'] = 'Mainit izmeru';
$TEXT['MANAGE'] = 'Mened�et';
$TEXT['CODE'] = 'Kods';
$TEXT['WIDTH'] = 'Platums';
$TEXT['HEIGHT'] = 'Augstums';
$TEXT['MORE'] = 'Vel';
$TEXT['READ_MORE'] = 'Lasit vel';
$TEXT['CHANGE_SETTINGS'] = 'Mainit iestatijumus';
$TEXT['CURRENT_PAGE'] = 'Pa�reizeja lapa';
$TEXT['CLOSE'] = 'Aizvert';
$TEXT['INTRO_PAGE'] = 'Ievada lapa';
$TEXT['INSTALLATION_URL'] = 'Instalacijas URL';
$TEXT['INSTALLATION_PATH'] = 'Cel� uz instalaciju';
$TEXT['PAGE_EXTENSION'] = 'Lapas papla�inajums';
$TEXT['NO_RESULTS'] = 'Rezultatu nav';
$TEXT['WEBSITE_TITLE'] = 'Tikla vietnes nosaukums';
$TEXT['WEBSITE_DESCRIPTION'] = 'Tikla vietnes apraksts';
$TEXT['WEBSITE_KEYWORDS'] = 'Tikla vietnes atslegvardi';
$TEXT['WEBSITE_HEADER'] = 'Tikla vietnes galvene';
$TEXT['WEBSITE_FOOTER'] = 'Tikla vietnes kajene';
$TEXT['RESULTS_HEADER'] = 'Rezultatu galvene';
$TEXT['RESULTS_LOOP'] = 'Rezultatu cikls';
$TEXT['RESULTS_FOOTER'] = 'Rezultatu kajene';
$TEXT['LEVEL'] = 'Limenis';
$TEXT['NOT_FOUND'] = 'Netika atrasts';
$TEXT['PAGE_SPACER'] = 'Lapas starplika';
$TEXT['MATCHING'] = 'Saskan';
$TEXT['TEMPLATE_PERMISSIONS'] = 'Atlaujas attieciba uz �abloniem';
$TEXT['PAGES_DIRECTORY'] = 'Lapu mape';
$TEXT['MEDIA_DIRECTORY'] = 'Mediju mape';
$TEXT['FILE_MODE'] = 'Datnu re�ims';
$TEXT['USER'] = 'Lietotajs';
$TEXT['OTHERS'] = 'Citi';
$TEXT['READ'] = 'Lasit';
$TEXT['WRITE'] = 'Rakstit';
$TEXT['EXECUTE'] = 'Izpildit';
$TEXT['SMART_LOGIN'] = 'Atjautiga ielogo�anas';
$TEXT['REMEMBER_ME'] = 'Atmineties mani';
$TEXT['FILESYSTEM_PERMISSIONS'] = 'Datnu sistemas atlaujas';
$TEXT['DIRECTORIES'] = 'Mapes';
$TEXT['DIRECTORY_MODE'] = 'Mapju re�ims';
$TEXT['LIST_OPTIONS'] = 'Listes opcijas';
$TEXT['OPTION'] = 'Opcija';
$TEXT['ALLOW_MULTIPLE_SELECTIONS'] = 'Atlaut multiiezime�anu';
$TEXT['TEXTFIELD'] = 'Teksta laucin� (Textfield)';
$TEXT['TEXTAREA'] = 'Teksta lauks (Textarea)';
$TEXT['SELECT_BOX'] = 'Select kaste (Select Box)';
$TEXT['CHECKBOX_GROUP'] = 'Checkbox grupa';
$TEXT['RADIO_BUTTON_GROUP'] = 'Radio pogu grupa';
$TEXT['SIZE'] = 'Izmers';
$TEXT['DEFAULT_TEXT'] = 'Noklusetais teksts';
$TEXT['SEPERATOR'] = 'Atdalitajs';
$TEXT['BACK'] = 'Atpakal';
$TEXT['UNDER_CONSTRUCTION'] = 'Lapa vel nav gatava';
$TEXT['MULTISELECT'] = 'Multiiezime�ana';
$TEXT['SHORT_TEXT'] = 'Iss teksts';
$TEXT['LONG_TEXT'] = 'Gar� teksts';
$TEXT['HOMEPAGE_REDIRECTION'] = 'Redirekcija';
$TEXT['HEADING'] = 'Virsraksts';
$TEXT['MULTIPLE_MENUS'] = 'Vairakas izvelnes';
$TEXT['REGISTERED'] = 'Registrets';
$TEXT['START'] = 'Sakums';
$TEXT['SECTION_BLOCKS'] = 'Sadalu bloki';
$TEXT['REGISTERED_VIEWERS'] = 'Registreti lukotaji';
$TEXT['ALLOWED_VIEWERS'] = 'Atlauti lukotaji';
$TEXT['SUBMISSION_ID'] = 'Pieteikuma ID';
$TEXT['SUBMISSIONS'] = 'Pieteikumi';
$TEXT['SUBMITTED'] = 'Pieteikts';
$TEXT['MAX_SUBMISSIONS_PER_HOUR'] = 'Max. Pieteikumi stunda';
$TEXT['SUBMISSIONS_STORED_IN_DATABASE'] = 'Pieteikumi tiek glabati datu baze';
$TEXT['EMAIL_ADDRESS'] = 'E-pasta adrese';
$TEXT['CUSTOM'] = 'Savs';
$TEXT['ANONYMOUS'] = 'Anonims';
$TEXT['SERVER_OPERATING_SYSTEM'] = 'Servera Operetajsistema';
$TEXT['WORLD_WRITEABLE_FILE_PERMISSIONS'] = 'Datnu permicijas iespejams mainit visiem, kam tas ienak prata';
$TEXT['LINUX_UNIX_BASED'] = 'Linux/Unix';
$TEXT['WINDOWS'] = 'Windows'; //needs to be translated
$TEXT['HOME_FOLDER'] = 'Galvenas lapas mape';
$TEXT['HOME_FOLDERS'] = 'Galvenas lapas mapes';
$TEXT['PAGE_TRASH'] = 'Atkritumu tvertne lapam';
$TEXT['INLINE'] = 'Ieslegts';
$TEXT['SEPARATE'] = 'Atsevi�ki';
$TEXT['DELETED'] = 'Dzests';
$TEXT['VIEW_DELETED_PAGES'] = 'Radit izdzestas lapas';
$TEXT['EMPTY_TRASH'] = 'Iztuk�ot musaru';
$TEXT['TRASH_EMPTIED'] = 'Miskaste tira';
$TEXT['ADD_SECTION'] = 'Pievienot sadalu';
$TEXT['POST_HEADER'] = 'Puksta galvene';
$TEXT['POST_FOOTER'] = 'Puksta kajene';
$TEXT['POSTS_PER_PAGE'] = 'Puksti lapa';
$TEXT['RESIZE_IMAGE_TO'] = 'Mainit attela izmeru uz';
$TEXT['UNLIMITED'] = 'Neierobe�ots';
$TEXT['OF'] = 'No';
$TEXT['OUT_OF'] = 'Ara no';
$TEXT['NEXT'] = 'Nakamais';
$TEXT['PREVIOUS'] = 'Iepriek�ejais';
$TEXT['NEXT_PAGE'] = 'Nakama lapa';
$TEXT['PREVIOUS_PAGE'] = 'Iepriek�eja lapa';
$TEXT['ON'] = 'ieslegts';
$TEXT['LAST_UPDATED_BY'] = 'Pedejo reizi mainits';
$TEXT['RESULTS_FOR'] = 'Rezultati';
$TEXT['TIME'] = 'Laiks';
$TEXT['WYSIWYG_STYLE'] = 'WYSIWYG stils';
$TEXT['WYSIWYG_EDITOR'] = "WYSIWYG redaktors";
$TEXT['SERVER_EMAIL'] = 'Servera e-pasta adrese';
$TEXT['MENU'] = 'Izvelne';
$TEXT['MANAGE_GROUPS'] = 'Mened�et grupas';
$TEXT['MANAGE_USERS'] = 'Mened�et lietotajus';
$TEXT['PAGE_LANGUAGES'] = 'Lapas valodas';
$TEXT['HIDDEN'] = 'Slepts';
$TEXT['MAIN'] = 'Galvenais';
$TEXT['RENAME_FILES_ON_UPLOAD'] = 'Datnes, kuram aug�upieladejot jamaina nosaukumi';
$TEXT['APP_NAME'] = 'Programmas nosaukums';
$TEXT['SESSION_IDENTIFIER'] = 'Sesijas identifikators';
$TEXT['BACKUP'] = 'Duble�ana';
$TEXT['RESTORE'] = 'Atjaunot';
$TEXT['BACKUP_DATABASE'] = 'Dublet datu bazi';
$TEXT['RESTORE_DATABASE'] = 'Atjaunot datu bazi';
$TEXT['BACKUP_ALL_TABLES'] = 'Atjaunot visas tabulas datu baze';
$TEXT['BACKUP_WB_SPECIFIC'] = 'Atjaunot tikai WB raksturigas tabulas';
$TEXT['BACKUP_MEDIA'] = 'Dublet medijus';
$TEXT['RESTORE_MEDIA'] = 'Atjaunot medijus';
$TEXT['ADMINISTRATION_TOOL'] = 'Administracijas riks';
$TEXT['CAPTCHA_VERIFICATION'] = 'Parbaudes kods';
$TEXT['VERIFICATION'] = 'Parbaude';
$TEXT['DEFAULT_CHARSET'] = 'Nokluseta simbolu kopa';
$TEXT['CHARSET'] = 'Simbolu kopa';
$TEXT['MODULE_ORDER'] = 'Module-order for searching'; //needs to be translated
$TEXT['MAX_EXCERPT'] = 'Max lines of excerpt'; //needs to be translated
$TEXT['PUBL_START_DATE'] = 'Start date'; //needs to be translated
$TEXT['PUBL_END_DATE'] = 'End date'; //needs to be translated
$TEXT['WBMAILER_DEFAULT_SETTINGS_NOTICE'] = 'Please specify a default "FROM" address and "SENDER" name below. It is recommended to use a FROM address like: <strong>admin@yourdomain.com</strong>. Some mail provider (e.g. <em>mail.com</em>) may reject mails with a FROM: address like <em>name@mail.com</em> sent via a foreign relay to avoid spam.<br /><br />The default values are only used if no other values are specified by Website Baker. If your server supports <acronym title="Simple mail transfer protocol">SMTP</acronym>, you may want use this option for outgoing mails.'; //needs to be translated
$TEXT['WBMAILER_DEFAULT_SENDER_MAIL'] = 'Default From Mail'; //needs to be translated
$TEXT['WBMAILER_DEFAULT_SENDER_NAME'] = 'Default Sender Name'; //needs to be translated
$TEXT['WBMAILER_NOTICE'] = '<strong>SMTP Mailer Settings:</strong><br />The settings below are only required if you want to send mails via <acronym title="Simple mail transfer protocol">SMTP</acronym>. If you do not know your SMTP host or you are not sure about the required settings, simply stay with the default mail routine: PHP MAIL.'; //needs to be translated
$TEXT['WBMAILER_FUNCTION'] = 'Mail Routine'; //needs to be translated
$TEXT['WBMAILER_SMTP_HOST'] = 'SMTP Host'; //needs to be translated
$TEXT['WBMAILER_PHP'] = 'PHP MAIL'; //needs to be translated
$TEXT['WBMAILER_SMTP'] = 'SMTP'; //needs to be translated
$TEXT['WBMAILER_SMTP_AUTH'] = 'SMTP Authentification'; //needs to be translated
$TEXT['WBMAILER_SMTP_AUTH_NOTICE'] = 'only activate if your SMTP host requires authentification'; //needs to be translated
$TEXT['WBMAILER_SMTP_USERNAME'] = 'SMTP Username'; //needs to be translated
$TEXT['WBMAILER_SMTP_PASSWORD'] = 'SMTP Password'; //needs to be translated
$TEXT['PLEASE_LOGIN'] = 'Please login'; //needs to be translated

// Success/error messages
$MESSAGE['FRONTEND']['SORRY_NO_VIEWING_PERMISSIONS'] = 'Piedod, bet Tev nav tiesibu aplukot �o lapu';
$MESSAGE['FRONTEND']['SORRY_NO_ACTIVE_SECTIONS'] = 'Sorry, no active content to display'; //needs to be translated

$MESSAGE['ADMIN']['INSUFFICIENT_PRIVELLIGES'] = 'Nepietiekams atlauju limenis';

$MESSAGE['LOGIN']['BOTH_BLANK'] = 'Ludzu ievadi lietotajvardu un paroli zemak redzamajos laukos';
$MESSAGE['LOGIN']['USERNAME_BLANK'] = 'Ludzu ievadi lietotajvardu';
$MESSAGE['LOGIN']['PASSWORD_BLANK'] = 'Ludzu ievadi paroli';
$MESSAGE['LOGIN']['USERNAME_TOO_SHORT'] = 'Ievaditais lietotajvards par isu';
$MESSAGE['LOGIN']['PASSWORD_TOO_SHORT'] = 'Ievadita parole par isu';
$MESSAGE['LOGIN']['USERNAME_TOO_LONG'] = 'Ievaditais lietotajvards par garu';
$MESSAGE['LOGIN']['PASSWORD_TOO_LONG'] = 'Ievadita parole par garu';
$MESSAGE['LOGIN']['AUTHENTICATION_FAILED'] = 'Nepareizs lietotajvards vai parole';

$MESSAGE['SIGNUP']['NO_EMAIL'] = 'Jaievada e-pasta adrese';

$MESSAGE['FORGOT_PASS']['NO_DATA'] = 'Ludzu ievadi savu e-pasta adresi zemak redzamaja lauka';
$MESSAGE['FORGOT_PASS']['EMAIL_NOT_FOUND'] = 'Ievadito e-pasta adresi nebija iespejams atrast datu baze';
$MESSAGE['FORGOT_PASS']['CANNOT_EMAIL'] = 'Lietotajvardu un paroli pa e-pastu nebija iespejams nosutit, ludzu sakontakte sistemas administratoru';
$MESSAGE['FORGOT_PASS']['PASSWORD_RESET'] = 'Lietotajvards un parole tika nosutiti uz Tavu e-pasta adresi';
$MESSAGE['FORGOT_PASS']['ALREADY_RESET'] = 'Paroli nav iespejams atkalatjaunot bie�ak ka reizi stunda';

$MESSAGE['START']['WELCOME_MESSAGE'] = 'Esi sveicinats Website Baker administracija';
$MESSAGE['START']['INSTALL_DIR_EXISTS'] = 'Bridinajums, instalacijas mape vel arvien eksiste!';
$MESSAGE['START']['CURRENT_USER'] = 'Tu �obrid esi ielogojies ka:';

$MESSAGE['SETTINGS']['UNABLE_OPEN_CONFIG'] = 'Nebija iespejams atvert konfiguracijas datni';
$MESSAGE['SETTINGS']['UNABLE_WRITE_CONFIG'] = 'Nebija iespejams ierakstit konfiguracijas datne';
$MESSAGE['SETTINGS']['SAVED'] = 'Iestatijumi tika veiksmigi noglabati';
$MESSAGE['SETTINGS']['MODE_SWITCH_WARNING'] = 'Ludzu iegaume: spie�ot �o pogu, visas nesaglabatas izmainas tiks neatgriezeniski dzestas';
$MESSAGE['SETTINGS']['WORLD_WRITEABLE_WARNING'] = 'Ludzu iegaume: �is te ir ieteicams vienigi teste�anas re�ima';

$MESSAGE['USERS']['ADDED'] = 'Lietotajs veiksmigi pievienots';
$MESSAGE['USERS']['SAVED'] = 'Lietotajs veiksmigi saglabats';
$MESSAGE['USERS']['DELETED'] = 'Lietotajs veiksmigi izdzests';
$MESSAGE['USERS']['NO_GROUP'] = 'Netika iezimeta neviena grupa';
$MESSAGE['USERS']['USERNAME_TOO_SHORT'] = 'Ievaditais lietotajvards bija par isu';
$MESSAGE['USERS']['PASSWORD_TOO_SHORT'] = 'Ievadita parole bija par isu';
$MESSAGE['USERS']['PASSWORD_MISMATCH'] = 'Ievaditas paroles nesakrit';
$MESSAGE['USERS']['INVALID_EMAIL'] = 'Ievadita e-pasta adrese nav pareiza';
$MESSAGE['USERS']['EMAIL_TAKEN'] = 'ievadita e-pasta adrese jau tiek �eit lietota';
$MESSAGE['USERS']['USERNAME_TAKEN'] = 'Izveletais lietotajvards ir jau aiznemts';
$MESSAGE['USERS']['CHANGING_PASSWORD'] = 'Ludzu iegaume: Vertibas jaievada augstak redzamajos laukos, ja gribas nomainit �i lietotaja paroli';
$MESSAGE['USERS']['CONFIRM_DELETE'] = 'Vai patie�am gribi izdzest iezimeto lietotaju?';

$MESSAGE['GROUPS']['ADDED'] = 'Grupa veiksmigi pievienota';
$MESSAGE['GROUPS']['SAVED'] = 'Grupa veiksmigi saglabata';
$MESSAGE['GROUPS']['DELETED'] = 'Grupa veiksmigi izdzesta';
$MESSAGE['GROUPS']['GROUP_NAME_BLANK'] = 'Grupas nosaukums ir tuk�s';
$MESSAGE['GROUPS']['CONFIRM_DELETE'] = 'Vai patie�am gribi izdzest iezimeto grupu (un visus lietotajus taja)?';
$MESSAGE['GROUPS']['NO_GROUPS_FOUND'] = 'Netika atrasta neviena grupa';
$MESSAGE['GROUPS']['GROUP_NAME_EXISTS'] = '�ads grupas nosaukums jau ir';

$MESSAGE['PREFERENCES']['DETAILS_SAVED'] = 'Detalas tika veiksmigi noglabatas';
$MESSAGE['PREFERENCES']['EMAIL_UPDATED'] = 'E-pasta adrese tika veiksmigi atjauninata';
$MESSAGE['PREFERENCES']['CURRENT_PASSWORD_INCORRECT'] = 'Ievadita (eso�a) parole nav pareiza';
$MESSAGE['PREFERENCES']['PASSWORD_CHANGED'] = 'Parole veiksmigi nomainita';

$MESSAGE['TEMPLATES']['CHANGE_TEMPLATE_NOTICE'] = 'Ludzu iegaume: lai mainitu �ablonu, jadotas uz iestatijumu sadalu';

$MESSAGE['MEDIA']['DIR_DOT_DOT_SLASH'] = 'Nevar ieklaut ../ mapes nosaukuma';
$MESSAGE['MEDIA']['DIR_DOES_NOT_EXIST'] = 'Mape neeksiste';
$MESSAGE['MEDIA']['TARGET_DOT_DOT_SLASH'] = 'Nav iespejams ieklaut ../ mapes merki (target)';
$MESSAGE['MEDIA']['NAME_DOT_DOT_SLASH'] = 'Nav iespejams ieklaut ../ nosaukuma';
$MESSAGE['MEDIA']['NAME_INDEX_PHP'] = 'Nedrikst lietot index.php ka nosaukumu';
$MESSAGE['MEDIA']['NONE_FOUND'] = 'Mape netika atrasts neviena mediju datne';
$MESSAGE['MEDIA']['FILE_NOT_FOUND'] = 'Datne netika atrasta';
$MESSAGE['MEDIA']['DELETED_FILE'] = 'Datne veiksmigi izdzesta';
$MESSAGE['MEDIA']['DELETED_DIR'] = 'Mape izdzesta veikmigi';
$MESSAGE['MEDIA']['CONFIRM_DELETE'] = 'Vai esi parliecinats, ka gribi izdzest �o datni vai mapi?';
$MESSAGE['MEDIA']['CANNOT_DELETE_FILE'] = 'Nav iespejams izdzest iezimeto datni';
$MESSAGE['MEDIA']['CANNOT_DELETE_DIR'] = 'Nav iespejams izdzest iezimeto mapi';
$MESSAGE['MEDIA']['BLANK_NAME'] = 'Netika ievadits jauns nosaukums';
$MESSAGE['MEDIA']['BLANK_EXTENSION'] = 'Netika ievadits datnes papla�inajums';
$MESSAGE['MEDIA']['RENAMED'] = 'Parsauk�ana veiksmiga';
$MESSAGE['MEDIA']['CANNOT_RENAME'] = 'Parsauk�ana neveiksmiga';
$MESSAGE['MEDIA']['FILE_EXISTS'] = 'Datne ar �adu nosaukumu jau eksiste';
$MESSAGE['MEDIA']['DIR_EXISTS'] = 'Mape ar �adu naosaukumu jau eksiste';
$MESSAGE['MEDIA']['DIR_MADE'] = 'Mape veiksmigi izveidota';
$MESSAGE['MEDIA']['DIR_NOT_MADE'] = 'Nav iespejams izveidot mapi';
$MESSAGE['MEDIA']['SINGLE_UPLOADED'] = ' datne veiksmigi aug�upieladeta';
$MESSAGE['MEDIA']['UPLOADED'] = ' datnes tika veiksmigi aug�upieladetas';

$MESSAGE['PAGES']['ADDED'] = 'Lapa veiksmigi pievienota';
$MESSAGE['PAGES']['ADDED_HEADING'] = 'Lapas virsraksts pievienots veiksmigi';
$MESSAGE['PAGES']['PAGE_EXISTS'] = 'Lapa ar tadu pa�u vai lidzigu virsrakstu jau eksiste';
$MESSAGE['PAGES']['CANNOT_CREATE_ACCESS_FILE'] = 'Keza radot piekluves datni /pages mape (nepietiekamas privilegijas)';
$MESSAGE['PAGES']['CANNOT_DELETE_ACCESS_FILE'] = 'Keza dze�ot piekluves datni /pages mape';
$MESSAGE['PAGES']['NOT_FOUND'] = 'Lapa netika atrasta';
$MESSAGE['PAGES']['SAVED'] = 'Lapa saglabata veiksmigi';
$MESSAGE['PAGES']['SAVED_SETTINGS'] = 'Lapas iestatijumi saglabati veiksmigi';
$MESSAGE['PAGES']['NOT_SAVED'] = 'Keza saglabajot lapue';
$MESSAGE['PAGES']['DELETE_CONFIRM'] = 'Vai esi parliecinats, ka velies izdzest iezimeto lapu (un visas tas apak�lapas)?';
$MESSAGE['PAGES']['DELETED'] = 'Lapa veiksmigi izdzesta';
$MESSAGE['PAGES']['RESTORED'] = 'Lapa atjaunota veiksmigi';
$MESSAGE['PAGES']['BLANK_PAGE_TITLE'] = 'Ludzu ievadiet lapas nosaukumu';
$MESSAGE['PAGES']['BLANK_MENU_TITLE'] = 'Ludzu ievadiet izvelnes nosaukumu';
$MESSAGE['PAGES']['REORDERED'] = 'Lapa veiksmigi parkartota';
$MESSAGE['PAGES']['CANNOT_REORDER'] = 'Keza parkartojot lapu';
$MESSAGE['PAGES']['INSUFFICIENT_PERMISSIONS'] = 'Tev nav atlaujas �o lapu mainit';
$MESSAGE['PAGES']['INTRO_NOT_WRITABLE'] = 'Nav iespejams ierakstit datne /pages/intro.php (nepietiekamas privilegijas)';
$MESSAGE['PAGES']['INTRO_SAVED'] = 'Ievada lapa saglabata veiksmigi';
$MESSAGE['PAGES']['LAST_MODIFIED'] = 'Pedejas izmainas veicis';
$MESSAGE['PAGES']['INTRO_LINK'] = 'Klik�kini �eit, lai veiktu izmainas ievada lapa';
$MESSAGE['PAGES']['SECTIONS_PROPERTIES_SAVED'] = 'Sadalas parametri veiksmigi saglabati';
$MESSAGE['PAGES']['RETURN_TO_PAGES'] = 'Atgriezties pie lapam';

$MESSAGE['GENERIC']['FILL_IN_ALL'] = 'Ludzu atgriezies un aizpildi visus laukus';
$MESSAGE['GENERIC']['FILE_TYPE'] = 'Ludzu iegaume, ka datnei, ko gribi aug�upieladet jabut �aja formata:';
$MESSAGE['GENERIC']['FILE_TYPES'] = 'Ludzu iegaume, ka failam, ko gribi aug�upieladet jabu viena no �iem formatiem:';
$MESSAGE['GENERIC']['CANNOT_UPLOAD'] = 'Nebija iespejams aug�upieladet datni';
$MESSAGE['GENERIC']['ALREADY_INSTALLED'] = 'Jau uzinstalets';
$MESSAGE['GENERIC']['NOT_INSTALLED'] = 'Nav instalets';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL'] = 'Nav iespejams atinstalet';
$MESSAGE['GENERIC']['CANNOT_UNZIP'] = 'Datni nav iespejams atzipot';
$MESSAGE['GENERIC']['INSTALLED'] = 'Uzinstalets veiksmigi';
$MESSAGE['GENERIC']['UPGRADED'] = 'Apgreidots veiksmigi';
$MESSAGE['GENERIC']['UNINSTALLED'] = 'Atinstalets veiksmigi';
$MESSAGE['GENERIC']['BAD_PERMISSIONS'] = 'Nav iespejams ierakstit noraditaja mape';
$MESSAGE['GENERIC']['INVALID'] = 'Datne, ko nupat aug�upieladeji, ir invalids';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE'] = 'Nav iespejams atinstalet: iezimetais fails tiek lietots';
$MESSAGE['GENERIC']['WEBSITE_UNDER_CONSTRUCTION'] = 'Lapa tiek veidota';
$MESSAGE['GENERIC']['PLEASE_CHECK_BACK_SOON'] = 'Nac driz atkal!';
$MESSAGE['GENERIC']['PLEASE_BE_PATIENT'] = 'Esi paceitigs, tas var kadu bridi ievilkties.';
$MESSAGE['GENERIC']['ERROR_OPENING_FILE'] = 'Keza atverot datni';

$MESSAGE['MOD_FORM']['REQUIRED_FIELDS'] = 'Ievadi detalas sekojo�ajos laukos';
$MESSAGE['MOD_FORM']['EXCESS_SUBMISSIONS'] = 'Atvaino, �i forma ir tikusi aizpildita parak daudz rei�u �is stundas laika. Ludzu pamegini velreiz pec stundas.';
$MESSAGE['MOD_FORM']['INCORRECT_CAPTCHA'] = 'Ievaditais parbaudes numurs ir nepareizs. Ja radu�as problemas ar parbaudes koda nolasi�anu, suti zinu uz: '.SERVER_EMAIL;

$MESSAGE['MOD_RELOAD']['PLEASE_SELECT'] = 'Ludzu atzime, kurus papildinajumus velies parladet';
$MESSAGE['MOD_RELOAD']['MODULES_RELOADED'] = 'Moduli veiksmigi parladeti';
$MESSAGE['MOD_RELOAD']['TEMPLATES_RELOADED'] = '�abloni veiksmigi parladeti';
$MESSAGE['MOD_RELOAD']['LANGUAGES_RELOADED'] = 'Valodas veiksmigi parladetas';
?>
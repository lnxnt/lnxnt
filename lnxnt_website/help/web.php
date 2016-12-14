<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html><head>


   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
   <meta name="GENERATOR" content="vim">
   <meta name="Description" content="linxnet: freies hosting für libertäre projekte">
   <link rel="stylesheet" href="/lnxnt.css" type="text/css"><title>--=linXnet=--</title></head><body alink="#ff0000" bgcolor="#ffffff" link="#0000ef" text="#000000" vlink="#55188a">


<?php include("/var/www/menu.html"); ?>


<div id="Content">


<br>
<h1>Webserver Hilfe</h1>
<hr><br>
Weil &ouml;fters gefragt wurde - wir verwenden im Moment folgende Software:<br>
<ul>
<li>Apache 2.2</li>
<li>PHP 5.2</li>
<li>MySQL 5.0</li>
</ul>
Zus&auml;tzlich sind folgende Apache Module installiert:<br>
mod_python, mod_php5, mod_ssl, mod_perl, mod_auth, mod_access, mod_rewrite<br>
<br>
Auch Grafikbibliotheken sind da:<br>
<ul>
<li>gd 2.0</li>
<li>netpbm</li>
<li>imagemagick</li>
</ul>
Die absoluten Pfade zu euren Dateien schauen f&uuml;r den Webserver so aus: /www-vhosts/<i>FTP-username</i>/www/<br><br>
Damit der Apache eure Skripte ausf&uuml;hren kann reicht es der Gruppe Lese- und Schreibrechte zu geben. Die Dateien werden &uuml;ber FTP automatisch als Benutzer und Gruppe www-data hochgeladen. Zum versenden von Mails &uuml;ber PHP m&uuml;sst ihr eine SMTP Session auf 127.0.0.1 aufmachen, Authentifizierung ist keine erforderlich. "Sendmail" ist am Webserver nicht verf&uuml;gbar. Ihr k&ouml;nnt begrenzt &auml;nderungen an der Konfiguration &uuml;ber .htaccess vornehmen, konkret ist AllowOverride auf "AuthConfig Limit FileInfo Options" gesetzt. Logfiles von FTP und Webserver werden jeweils drei Tage gespeichert.<br>
<br>
Falls ihr wollte k&ouml;nnt ihr auch Statistiken f&uuml;r euren Webspace haben. Speicherplatz und Traffic sind im Moment nicht limitiert. Achtet einfach darauf, dass sich das ganze in Grenzen h&auml;lt. 1 GB Speicherplatz und 5 GB Traffic sind sicher drinnen, nach Absprache mehr.<br>
<br>
<h3>MySQL Datenbanken</h3>
Wir stellen auch gerne MySQL Datenbanken zur Verf&uuml;gung, das Login ist unabh&auml;ngig vom FTP Login. &Uuml;ber das <a href="https://www.lnxnt.org/phpmyadmin/">Webinterface</a> k&ouml;nnt ihr Backups ziehen und Tabellen erstellen. Der Datenbankname ist immer gleichlautend mit dem SQL Login, also z.B. "testdb", der Datenbankserver ist www.lnxnt.org. Die Verbindungen bitte immer von und auf www.lnxnt.org aufmachen, alle anderen Rechner sind gesperrt. 
<br>
<br>
<h3>Passwortschutz</h3>
Ihr k&ouml;nnt euren Webspace auch mit einem Passwort sch&uuml;tzen. Daf&uuml;r ladet ihr am einfachsten in das zu sperrende Verzeichniss eine Datei mit dem Namen ".htaccess", diese sollte den folgenden Inhalt haben:<br>
<br>
<code>
AuthType Basic<br>
AuthName "Bitte Passwort eingeben"<br>
AuthUserFile /www-vhosts/<i>FTP-username</i>/.htpasswd<br>
Require valid-user<br>
</code>
<br>
Als n&auml;chstes m&uuml;sst ihr in eurer FTP Basisverzeichniss die besagte .htpasswd Datei laden, in der stehen die BenutzerInnen und ihre Passw&ouml;rter, allerdings in verschl&uuml;sselter Form. Zum erstellen verwendet ihr am besten ein Tool wie <a href="http://www.phpbb.de/diverses/htpasswd.php">dieses</a>, einfach das Ergebniss in die .htpasswd kopieren und hochladen - fertig.


</div>

</body></html>

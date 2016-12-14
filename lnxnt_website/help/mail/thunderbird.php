<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN">
<HTML>
<HEAD>
   <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
   <META NAME="GENERATOR" CONTENT="vim">
   <META NAME="Description" CONTENT="linxnet: freies hosting f&uuml;r kritische projekte">
   <link rel="stylesheet" href="/lnxnt.css" type="text/css">
   <TITLE>--=linXnet=--</TITLE>
</HEAD>
<BODY TEXT="#000000" BGCOLOR="#FFFFFF" LINK="#0000EF" VLINK="#55188A" ALINK="#FF0000">


<?php include("/var/www/menu.html"); ?>


<div id="Content">

<br>
<h1>Thunderbird Howto</h1>

<hr>

Mozilla Thunderbird, ein weit verbreiteter freier Emailclient, ist f&uuml;r Windows, Linux und Mac OS X erh&auml;ltlich. Er kann unter <a href="http://www.thunderbird-mail.de/thunderbird/">http://www.thunderbird-mail.de/thunderbird/</a> heruntergeladen werden.<br><br>

Falls ihr IMAP verwendet k&ouml;nnt ihr euch den F&uuml;llstand eurer Mailbox &uuml;brigens mit der <a href="https://addons.mozilla.org/thunderbird/881/">Display Quota</a> Erweiterung anzeigen lassen. <br><br>

Ein Email Konto fasst eure Einstellungen zusammen. Wenn Thunderbird nach der Installation das erste mal startet wird automatisch der Konten Assisten gestartet. Falls Thunderbird bereits installiert war kann der Assisten unter Extras -> Konten -> neues Konto gestartet werden. Beim Assistenten "Email Konto" ausw&auml;hlen und auf weiter klicken.<br>

<img alt="Konten Assistens" src="email-konto.png"><br>

Jetzt Name und Adresse eintragen.<br>

<img alt="Name Adresse" src="email-name.png"><br>

Als Servertyp wird IMAP ausgewählt. Am Ende dieses Howtos wird auch noch kurz erkl&auml;rt wie es mit POP3 geht. Der Server ist mail.lnxnt.org.<br>

<img alt="Konten Server" src="email-server.png"><br>

Jetzt den Benutzernamen (deine eigene Email Adresse) für den IMAP Server angeben.<br>

<img alt="Konten Benutzer" src="email-benutzer.png"><br>

Der Kontoname kann frei gewählt werden, in diesem Fall wurde linxnet konto genommen.<br>

<img alt="Kontoname" src="email-kontoname.png"><br>

Die Daten werden zur &Uuml;berpr&uuml;fung noch einmal zusammengefasst. Fall alles passt auf "Fertig stellen" klicken. Noch sind wir aber nicht ganz fertig, es m&uuml;ssen noch einige Einstellungen vorgenommen werden. Daf&uuml;r klicken wir auf Extras -> Konten und w&auml;hlen unser Konto aus. Unter "Server Einstellungen" k&ouml;nnen wir die verschlüsselung aktivieren.<br>

<img alt="TLS" src="imap-tls.png"><br>

Der sicher Empfang von Mails ist nun m&ouml;glich, jetzt soll auch noch der SMTP Server zum versenden von Mails konfiguriert werden. Daf&uuml;r bearbeiten wir den Postausgangsserver.<br>

<img alt="SMTP Server" src="smtp.png"><br>

Hier bitte alles wie folgt einrichten.<br>

<img alt="SMTP TLS" src="smtp-tls.png"><br>

Bei IMAP bleiben die Mails ja am Server, dein Email Programm zeigt sie nur an. Damit du deine alten Mails auch lesen kannst wenn du keinen Internet Zugang hast kann eine lokale Kopie abgespeichert werden. Das muss nicht sein, ist aber ganz praktisch. Daf&uuml;r machst du folgendes.<br>

<img alt="Offline lesen" src="offline-speicher.png"><br>

<img alt="Offline Ordner" src="offline-ordner.png"><br>


Fast haben wir es geschafft! Wenn du jetzt zum Hauptfenster zur&uuml;rckgehst und versuchst deine Mails abzurufen wirst du aber noch mit einigen Fragen konfrontiert. Die sichere &Uuml;bertragung deiner Mails funktioniert mit Zertifikaten. Aus Kostengr&uuml;nden haben wir unser Zertifikat selbst ausgestellt, deshalb musst du es extra akzeptieren. Um auf Nummer sicher zu gehen kannst du vorher auf "Zertifikat untersuchen" klicken und den Fingerabdruck mit dem Screenshot vergleichen.<br>

<img alt="Cert annehmen" src="cert-annehmen.png"><br>

Der Fingerabdruck sollte gleich sein!<br>

<img alt="Cert courier" src="cert-courier.png"><br>

Damit ist die sichere Verbindung zum IMAP Server aufgebaut. Jetzt m&uuml;sst du nur noch dein Passwort eingeben und du kannst deine Mails empfangen. Auf deinem privatem Rechner willst du vielleicht auch das Passwort speichern. So musst du es nicht jedes mal wieder eingeben.<br>

<img alt="PW" src="PW.png"><br>

Das Empfangen von Mails sollte jetzt klappen. Falls du aber ein Mail versenden willst musst du wieder ein Zertifikat akzeptieren. Der Fingerabdruck f&uuml;r das Versenden ist aber ein anderer als f&uuml;r das Empfangen.<br>

<img alt="Cert exim" src="cert-exim.png"><br><br>

So, jetzt kannst du eingentlich alles machen was dein Herz begehrt. Am Ende aber noch ein kleiner Tipp: Dein Speicherplatz am Server ist beschränkt. Sobald 75% voll sind bekommst du eine Mail (Betreff: Mailbox quota warning) mit einem Hinweis. Entweder du l&ouml;scht deine Mails Manuell oder du machst das automatisch. Falls du deine Mails archivieren willst kannst du sie auch einfach in den Bereich "Lokale Ordner" verschieben, dort hast du soviel Platz wie deine Festplatte hergibt. Vergiss aber nicht auch die Mails unter "Gesendet" oder "Papierkorb" zu verschieben - die brauchen n&auml;mlich auch Speicherplatz. Falls du die Mails lieber automatisch l&ouml;schen willst kannst du das unter Extras -> Konten einstellen.<br>

<img alt="Automatisch l&ouml;schen" src="speicher.png"><br>


</div>

</BODY>
</HTML>

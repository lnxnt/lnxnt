<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN">
<HTML>
<HEAD>
   <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
   <META NAME="GENERATOR" CONTENT="vim">
   <META NAME="Description" CONTENT="linxnet: freies hosting f&uuml;r libert&auml;re projekte">
   <link rel="stylesheet" href="/lnxnt.css" type="text/css">
   <TITLE>--=linXnet=--</TITLE>
</HEAD>
<BODY TEXT="#000000" BGCOLOR="#FFFFFF" LINK="#0000EF" VLINK="#55188A" ALINK="#FF0000">

<?php include("/var/www/menu.html"); ?>


<div id="Content">


<BR>
<H1>Email</H1>
<hr>

Prinzipiell k&ouml;nnt ihr die Mails auf drei Arten abrufen:<br><br>

<ul>
<li>&Uuml;ber das <a href="https://mail.lnxnt.org/squirrelmail">Webmail</a></li>
<li>Mit einem POP3 f&auml;higen Mailprogramm</li>
<li>Mit einem IMAP f&auml;higen Mailprogramm</li>
</ul>
<br>
IMAP bietet den gro&szlig;en Vorteil, dass die Mails auf dem Mailserver bearbeitet werden. Wenn ihr ein Mail l&ouml;scht, verschiebt, versendet sehen das auch andere Benutzer mit ihrem IMAP Client oder im Webmail. IMAP ist also ideal wenn mehrere Menschen auf eine Mailbox zugreifen. POP3 ist simpler und weiter verbreitet, hier werden die Mails vom Server auf euren Rechner heruntergeladen und dort bearbeitet.<br>
Ihr könnt eure Mails verschl&uuml;sselt (mittels TLS) oder unverschlüsselt senden und empfangen. Auf jeden fall braucht ihr sowohl zum senden als auch zum empfangen euren Benutzernamen und Passwort. Der Benutzername ist eure Email Adresse. Um eure Privatsph&auml;re zu sch&uuml;tzen wird beim Webmail und authentifiziertem SMTP eure IP Adresse aus dem Email Header entfernt. Au&szlig;erdem werden Mails mit typischen Viren Attachments (.vbs, .pif, .bat, ...) abgelehnt. <br><br>

Es gibt ein <a href="https://mail.lnxnt.org/vexim/">Mail Administrationstool</a> bei dem ihr euer Passwort &auml;ndern, Spamfilter aktivieren und Mailweiterleitungen setzen k&ouml;nnt, eine kurze Beschreibung daf&uuml;r findet ihr <a href="vexim.php">hier</a>.<br><br>
F&uuml;r das Einrichten eures Mailprogramms (Thunderbird) gibt es auch eine <a href="thunderbird.php">tolle Anleitung</a><br><br>

Die meisten Mailboxen haben eine begrenzte Gr&ouml;&szlig;e, in diesem Fall k&ouml;nnt ihr euch den F&uuml;llstand euer Mailbox im Webmail kontrollieren - &uuml;ber der Ordnerliste sollte ein entsprechender Balken sein. Bei 80% F&uuml;llstand wird au&szlig;erdem (für alle die nicht das Webmail verwenden) noch ein Warnmail verschickt.
Falls die Mailbox einmal fast voll ist (z.B. noch 5MB frei) und es kommt dann ein 10MB gro&szlig;es Mail rein wird dieses schon an die Absenderin zur&uuml;ckgesandt!

<br><br>
Euer Trash Ordner (Papierkorb) z&auml;hlt nicht zu euerer Mailboxgr&ouml;&szlig;e dazu. Der Sent (Gesendete Objekte) und Drafts (Entw&uuml;rfe) Ordner hingegen schon.
<br><br>
<b>ACHTUNG:</b> Objekte die länger als 14 tage im Papierkorb sind werden
automatisch gel&ouml;scht! Wollt ihr Mails l&auml;ngerfristig archivieren
solltet ihr sie nicht l&ouml;schen sondern in einen anderen Ordner verschieben.


<br><br><br>
Nochmal zusammengefasst die Daten:<br>
<ul>
<LI>IMAP Server: mail.lnxnt.org, Port 143</LI>
<LI>POP Server: mail.lnxnt.org, Port 110</LI>
<LI>SMTP Server: mail.lnxnt.org, Port 25</LI>
<LI>Benutzername: deine-adresse@lnxnt.org</LI>
<LI>Verschl&uuml;sselung mittels TLS auf den Standardports</LI>
</ul>

<p>
<hr>
<p/>

</div>

</BODY>
</HTML>

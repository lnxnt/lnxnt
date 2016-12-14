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
<H1>vexim</H1>
<hr>
<br>
Mittels <a href="https://mail.lnxnt.org/vexim">vexim</a> k&ouml;nnt ihr eure Mailbox verwalten. Einfach mit eurer Email Adresse und Passwort einloggen, dann k&ouml;nnt ihr folgendes tun:<br>
<ul>
<li>Passwort &auml;ndern</li>
<li>Spamfilter &auml;ndern</li>
<li>Eine automatische Antwort (Urlaubs / Vacation Meldung) setzen</li>
<li>Die Mails an eine andere Adresse weiterleiten</li>
<li>Die maximale Gr&ouml;&szlig;e von Mails festlegen</li>
</ul>
<br>
Am besten l&auml;sst sich das ganze an einem Screenshot erkl&auml;ren.<br><br>

<img alt="vexim" src="vexim-spam.png" border="3"><br><br>

<b>1:</b> Hier k&ouml;nnt ihr euren Namen eintragen. Der wird allerdings nur zur internen Verwaltung verwendet und taucht in euren mails nicht auf.<br><br>
<b>2:</b> Hier k&ouml;nnt ihr euer Passwort &auml;ndern. Einfach zweimal das neue Passwort eintragen und auf "Submit Passwort" klicken.<br><br>
<b>3:</b> Das ist die Gr&ouml;&szlig;e eurer Mailbox, in diesem Fall 500 Megabyte.<br><br>
<b>4:</b> Das sind die Einstellungen f&uuml;r den Spamfiler. Falls ihr den Spamfilter aktivieren wollt macht einen Haken neben "Spamassassin". Der Spamfilter weist den Mails anhand der der Spamwahrscheinlichkeit einen Wert (Score) zu. Alles mit einem Score &uuml;ber 6 ist ziemlich sicher Spam und kann markiert werden, blocken k&ouml;nnt ihr ab etwa 15. Probiert es am besten mit den Einstellungen im Bild.<br> <br>
Ist das mail &uuml;ber dem Tag Score wir dem Betreff ***SPAM(<i>score</i>)*** vorangestellt, falls der Haken bei "Rewrite Subject" gesetzt ist. Diese Option ist allen zu empfehlen da nur das Betreff ge&auml;ndert wird und sonst nichts passiert.<br><br> 
Ist das Mail &uuml;ber dem "Action Score" k&ouml;nnen drei verschiedene Aktion ausgew&auml;hlt werden. 
<ul>
<li>No Action: Nichts passiert, das Mail wird (mit markiertem Betreff) normal zugestellt. </li>
<li>Move to Junk Folder: Das Spammail kommt nicht in die Inbox sondern in einen eigenen Ordner namens "Junk". Der Junk Ordner wird automatisch erstellt wenn die erste Spammail einsortiert wird (kann aber auch manuell angelegt werden) und ist nur &uuml;bers Webmail oder IMAP einsehbar. Im Webmail muss er unter dem Men&uuml;punkt "Ordner" noch extra abonniert werden damit er auch in der Ordnerliste links angezeigt wird. Mails im Junk Ordner werden &uuml;brigens nach 14 Tagen automatisch gel&ouml;scht.</li>
<li>Delete without warning: Die Mail wird gel&ouml;scht. Wenn ihr viel Spam und viel Vertrauen in den Filter habt ist das eine sinnvolle Option.</li>
</ul>

Bei "Maximum Message Size" k&ouml;nnt ihr festlegen wie gro&szlig; Mails an euch seien d&uuml;rfen, bei 0 gibt es keine Beschr&auml;nkung. Am besten so lassen, au&szlig;er ihr habt eine extrem langsame Verbindung und wollt keine 10MB gro&szlig;en Mails bekommen.<br><br>
<b>5:</b> Ihr seind auf Urlaub und wollt alle Welt wissen lassen ab wann ihr wieder Mails beantworten k&ouml;nnt? Dann einen Haken bei "Vacation on" machen und die Botschaft darunter schreiben. Jeder der jetzt eine Mail an euch schickt bekommt automatisch diese Nachricht.<br><br>
<b>6:</b> Weiterleiten an eine andere Adresse. Einfach Aktivieren und die Mailadresse eingeben. "Submit Profile" dr&uuml;cken nat&uuml;rlich auch hier nicht vergessen.<br><br>
<b>7:</b> Hier k&ouml;nnen Filter eingestellt werden. Unwichtig, am besten nicht anfassen ;)<br><br>
<b>8:</b> Nach getaner Arbeit ausloggen nicht vergessen.
<br><br><br><br>
<hr>
<br>
F&uuml;r die Leute, die eine eigene Domain administrieren schaut das ganze ein wenig anders aus. Die k&ouml;nnen n&auml;mlich auch Mailboxen oder Alias Adressen anlegen. Ganz kurz zu den Menupunkten:<br>
<ul>
<li>Add, delete and manage POP/IMAP accounts<br>
Hier k&ouml;nnen Mailboxen angelegt und gel&ouml;scht werden.</li>
<li>Add, delete and manage aliases, forwards and a Catchall<br>
Mit einem Alias k&ouml;nnen Mails an eine oder mehrere Adressen weitergeleitet werden. Ein Catchall f&auml;ngt alle Mails an die Domain f&uuml;r die es keine eigene Adresse gibt und leitete sie an eine Mailbox weiter. N&uuml;tzlich um Tippfehler abzufangen, schlecht weil viel Spam reinkommt.</li>
<li>Add, delete and manage groups<br>
Hier k&ouml;nnen kleine Verteiler angelegt werden. redaktion@tollezeitung.com verweist dann z.B. an user1@tollezeitung.com und user2@tollezeitung.com. Zus&auml;tzlich kann die Gruppe privat gemacht werden, dann kann sie nur von Mitgliedern verwendet werden.</li>
<li>Add, delete and manage :fail:'s<br>
Legt Adressen fest die immer eine Fehlermeldung produzieren. Ob das sinnvoll ist wei&szlig; ich nicht :) </li>
<li>Manage mailing lists<br>
Falls ihr Mailinglisten wollt wendet euch an info AT lnxnt.org, das ist nur ein Link zur Verwaltung</li>
</ul>
<p>
<hr>
<p>

</div>

</BODY>
</HTML>

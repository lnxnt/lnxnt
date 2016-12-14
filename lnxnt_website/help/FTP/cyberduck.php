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
<H1>Cyberduck FTP Client</H1>
<hr><br>


Nochmal zusammengefasst:<br>
<ul>
<LI>FTP Server ist lnxnt.org, Port 21</LI>
<LI>Benutzername ist ein einzelnes Wort, nicht die Email Adresse</LI>
<LI>Explizite Verschl&uuml;sselung &uuml;ber SSL muss verwendet werden</LI>
</ul>
<br>

Nach der Installation auf &quot;Lesezeichen&quot; (Bookmarks) -> &quot;Neues Lesezeichen&quot; (New Bookmark) gehen und wie auf dem Bild zu sehen ausf&uuml;llen.<br>

<img src="01createbookmark.png" alt="servermanager" width="420" height="205"><br>
<br>

Danach kann lnxnt.org entweder &uuml;ber die Lesezeichenleiste rechts oder &uuml;ber den Men&uuml;punkt &quot;Lesezeichen&quot; ausgew&auml;hlt werden.<br>

<img src="02selectbookmark.png" alt="filezilla" width="760" height="422"><br>
<br>

Falls du einmal keine Verzeichnisse l&ouml;schen kannst solltest du unter "Darstellung" die Option "Versteckte Dateien anzeigen" aktivieren. Wenn sich noch versteckte Dateien (erkennbar am Punkt vor dem Dateinamen) in einem Ordner befinden kann dieser n&auml;mlich nicht gel&ouml;scht werden. 

<img src="03showhiddenfiles.png" alt="filezilla" width="550" height="445"><br>
<br>

Beim ersten Verbinden kommt eine Meldung wegen dem Verschl&uuml;sselungs Zertifikat. "Diesem Zertifikat immer vertrauen" anhaken und den Fingerabdruck mit dem Screenshot vergleichen. Falls sie nicht &uuml;bereinstimmen kann es sein, dass deine Verbindung abgeh&ouml;rt wird.<br>

<img src="04cert.png" alt="FTP-cert" width="602" height="477"><br>
<br>

Das wars auch schon :)

<p>
<hr>
<p/>

</div>

</BODY>
</HTML>

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/netzwerke.css">
    <link rel="stylesheet" href="../../css/nav2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/everything.css">
    <script src="../../js/menu.js" defer></script>
    <title>Informatik-Hefter | Klasse 10 | Netzwerke</title>
</head>

<body>
    <br>
    <h1>Informatik-Hefter am GDP</h1>

    <?php if (isset($_SESSION['user_id'])): ?>
    <header class="header">
        <div class="container">
            <div class="menu">
                <div class="head">
                    <button type="button" class="close-menu-btn"></button>
                </div>
                <ul>
                    <li><a href="../../startseite.php">Home</a></li>
                    <li><a href="#">Klasse 7</a></li>
                    <li><a href="#">Klasse 8</a></li>
                    <li><a href="#">Klasse 9</a></li>
                    <li class="dropdown"><a href="../klasse_10/klasse_10.php">Klasse 10</a>
                        <i class="fa-solid fa-chevron-down"></i>
                        <ul class="sub-menu">
                            <li class="dropdown"><a href="../klasse_10/sprachen.php"><span>Sprachen</span></a>
                                <i class="fa-solid fa-chevron-down"></i>
                                <ul class="sub-menu sub-menu-right">
                                    <li><a href="../klasse_10/sprachen.php#unterschied_natuerliche_und_formale_sprache"><span>Unterschied natürliche und formale Sprache</span></a></li>
                                    <li><a href="../klasse_10/sprachen.php#alphabet_und_sprache"><span>Alphabet und Sprache</span></a></li>
                                    <li><a href="../klasse_10/sprachen.php#formale_sprache"><span>Formale Sprachen</span></a></li>
                                    <li><a href="../klasse_10/sprachen.php#regulaere_ausdruecke"><span>Reguläre Ausdrücke</span></a></li>
                                    <li><a href="../klasse_10/sprachen.php#endliche_automaten"><span>Endliche Automaten</span></a></li>
                                    <li><a href="../klasse_10/sprachen.php#auszeichnungssprachen"><span>Auszeichnungssprachen</span></a></li>
                                    <li><a href="../klasse_10/sprachen.php#HTML"><span>HTML</span></a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="../klasse_10/netzwerke.php"><span>Netzwerke</span></a>
                                <i class="fa-solid fa-chevron-down"></i>
                                <ul class="sub-menu sub-menu-right">
                                    <li><a href="../klasse_10/netzwerke.php#netzwerkgeraete"><span>Netzwerkgeräte</span></a></li>
                                    <li><a href="../klasse_10/netzwerke.php#netzwerkverbindung"><span>Netzwerkverbindung</span></a></li>
                                    <li><a href="../klasse_10/netzwerke.php#andere_loesungen_fuer_das_netzwerkproblem"><span>Andere Lösungen für das Netzverkproblem</span></a></li>
                                    <li><a href="../klasse_10/netzwerke.php#netzwerkarchitekturen"><span>Netzwerkarchitekturen</span></a></li>
                                    <li><a href="../klasse_10/netzwerke.php#protokolle-dienste"><span>Protokolle und Dienste</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="klasse_11.php">Klasse 11</a>
                        <i class="fa-solid fa-chevron-down"></i>
                        <ul class="sub-menu">
                            <li class="dropdown"><a href="../klasse_11/technische_informatik.php"><span>Technische Informatik</span></a>
                                <i class="fa-solid fa-chevron-down"></i>
                                <ul class="sub-menu sub-menu-left">
                                    <li class="dropdown"><a href="../klasse_11/grundlagen_it.html"><span>Grundlagen</span></a>
                                        <i class="fa-solid fa-chevron-down"></i>
                                        <ul class="sub-menu sub-menu-left">
                                            <li><a href="../klasse_11/grundlagen_ti.html#zahlensysteme"><span>Zahlensysteme</span></a></li>
                                            <li><a href="../klasse_11/grundlagen_ti.html#kodierung"><span>Kodierung von Zeichen</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="../klasse_11/algorithmen_programmierung.php"><span>Algorithmen und Programmierung</span></a>
                                <i class="fa-solid fa-chevron-down"></i>
                                <ul class="sub-menu sub-menu-left">
                                    <li class="dropdown"><a href="../klasse_11/grundlagen_ap.php"><span>Grundlagen</span></a>
                                        <i class="fa-solid fa-chevron-down"></i>
                                        <ul class="sub-menu sub-menu-left">
                                            <li><a href="../klasse_11/grundlagen_ap.php#klassifizierung"><span>Klassifizierung von Programmiersprachen</span></a></li>
                                            <li><a href="../klasse_11/grundlagen_ap.php#kontrollstrukturen"><span>Kontrollstrukuren</span></a></li>
                                            <li><a href="../klasse_11/grundlagen_ap.php#algorithmen"><span>Algorithmen</span></a></li>
                                            <li><a href="../klasse_11/grundlagen_ap.php#unterprogramme"><span>Unterprogramme</span></a></li>
                                            <li><a href="../klasse_11/grundlagen_ap.php#w_und_r"><span>Werte- und Referenzparamter</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="komplexitaet.html"><span>Komplexität</span></a>
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li id="logout"><a href="../../register_form/logout.php">Abmelden</a>
                </ul>
            </div>
            <div class="header-right">
                <button type="button" class="open-menu-btn">
                    <span class="line line-1"></span>
                    <span class="line line-2"></span>
                    <span class="line line-3"></span>
                </button>
            </div>
        </div>
    </header>

    <br>
    <br>

    <div class="inhalt">
        <h2>2. Netzwerke</h2>

        <br>

        <div class="definitionen">
            <details>
                <summary>
                    Wie funktioniert die Übertragung?
                </summary>
                <ul id="vg">
                    <li>Informationen müssen codiert werden</li>
                    <li>diese werden als Aus (0) bzw An (1) übertragen</li>
                    <li>jedes Gerät benötigt eine Sende- und eine Empfangseinheit</li>
                    <li>Teilnehmer müssen die Sprache kennen</li>
                    <li>feste Regeln &rarr; Kollisionen werden vermieden</li>
                </ul>
            </details>
        </div>

        <br>
        <hr>

        <h3 id="netzwerkgeraete">2.1 Netzwerkgeräte</h3>
        <br>
       
        <table>
            <tr>
                <td>Router</td>
                <td>
                    <ul id="netzwerkgeraete">
                        <li>verbindet Netzwerke mit verschiedenen Übertragungsformen / Standarts</li>
                        <li>verteilt Datenpakete mit Hilfe von Routingtabellen</li>
                    </ul>
                    <br>
                </td>
            </tr>
            
            <tr>
                <td>Switch</td>
                <td>
                    <ul id="netzwerkgeraete">
                        <li>kabelgebundene Netzwerkverbindungen (in einem Netzwerk)</li>
                    </ul>
                    <br>
                </td>
            </tr>
            <tr>
                <td>Accespoint</td>
                <td>
                    <ul id="netzwerkgeraete">
                        <li>wandelt Signale in Funksignale um</li>
                        <li>stellt den Einwahlpunkt für Funkverbindungen zur Verfügung</li>
                    </ul>
                    <br>
                </td>
            </tr>
            <tr>
                <td>Router</td>
                <td>
                    <ul id="netzwerkgeraete">
                        <li>Modulator + Demodulator</li>
                        <li>Umwandlung von Signalen (digital &harr; analog)</li>
                        <li>Verbindung zu Provider</li>
                    </ul>
                    <br>
                </td>
            </tr>
        </table>

        <br>
        <hr>

        <h3 id="netzwerkverbindung">2.2 Netzwerkverbindung</h3>

        <br>

        <p>Jedes Gerät hat eine MAC-Adresse. Sobald es einem Netzwerk beitritt, bekommt es auch eine IP-Adresse.</p>
        <p>Eine IP-Adressse ist eine eindeutige, numerische Adresse für Geräte in Netzwerken.</p>
        <p>Aktuelle IP-Version: IPv4</p>

        <br>
        
        <h3 id="ipv4">2.2.1 IPv4</h3>

        <br>

        <p id="ipv4_aufbau">Aufbau</p>
        <br>

        <ul id="ipv4">
            <li>besteht aus 4 Zahlenblöcken (4 Oktette) mit je 8 Bit</li>
            <li>pro Block können Dezimalzahlen von 0 - 255 vergeben werden (1 Byte pro Block &rarr; 8 Bit &rarr; 2&#8312; &rarr; 256 &rarr; 0...256)</li>
            <li>zwei Darstellungen: Dezimal und Binär &#10230; 10.107.10.1 bzw. 0001010.01101011.0001010.0000001</li>
        </ul>
        <br>
        <p><b>Problem:</b> Es gibt nicht genug Adressen</p>
        <p>2<sup>32</sup>=4,3 Mrd.</p>

        <br>
        <p>neuer Standart: IPv6</p>

        <br>
        
        <h3 id="ipv6">2.2.2 IPv6</h3>
        <br>

        <ul id="ipv6">
            <li>128 Bit lang (8 Blöcke aus 4 Hexadezimalzahlen)</li>
            <li>Trennung durch Doppelpunkten</li>
            <li>Anzahl an Adressen: 2<sup>128</sup> = 3,4&#8226;10<sup>38</sup></li>
        </ul>

        <br>
        
        <h3 id="andere_loesungen_fuer_das_netzwerkproblem">2.2.3 Andere Lösungen für das Netzverkproblem</h3>
        <br>

        <p><b>NAT</b>(Network Adress Translation):</p>
        <p>- alle privaten IP-Adressen werden zu einer öffentlichen IP-Adresse zusammengefasst</p>
        <br>
        <p><b>PAT</b>(Port ans Adress Translation):</p>
        <p>- alle privaten IP-Adressen werden zu einer öffentlichen IP-Adresse zusammengefasst</p>
        <p>- zusätzlich: jedes Gerät hat einen eigenen Port, mit dem das Gerät erreicht werden kann</p>

        <br>
        <hr>

        <h3 id="netzwerkarchitekturen">2.3 Netzwerkarchitekturen</h3>
        <br>
        

        <h3 id="peer-to-peer">2.3.1 Peer-To-Peer (P2P)</h3>
        <br>

        <p>Peer-To-Peer ist eine Netzwerkarchitektur, bei welchem Computer oder Geräte direkt miteinander verbunden sind. 
            Die Geräte können Daten gemeinsam und ohne Hilfe eines zentralen Servers austauschen.</p>
        
        <p><b>Vorteile:</b></p>
        <p>- dezentrale Struktur -> wenn ein Computer aufällt, kann das Netzwerk weiterhin problemlos arbeiten</p>
        <p>- nahtlose Integration eines neues Coumputers, keine Überarbeitung des Netzwekes</p>
        <br>
        <p><b>Nachteile:</b></p>
        <p>- Sicherheitsprobleme -> Benutzeridentitäten schwer zu überprüfen</p>
        <p>- anfälliger für die Verbreitung von Malware</p>

        <br>
        
        <h3 id="server-client">2.3.1 Server-Client-Prinzip (SCP)</h3>
        <br>

        <p>Das Server-Client-Prinzip ist ein Netztwerkmodell, bei dem ein zentraler Sevrer als Vermittler dient und auf Anforderungen von Clients reagiert,
            indem er Ressourcen wie Anwendungen, Daten oder Dienste bereitstellt
        </p>
        
        <p><b>Vorteile:</b></p>
        <p>- hohe Sicherheit</p>
        <p>- zentrale Kontrolle über alle Geräte</p>
        <p>- leistungsstark</p>
        <br>
        <p><b>Nachteile:</b></p>
        <p>- wenn der Sever ausfällt, dann funktioniert nichts mehr</p>
        <p>- hohe Komplexität</p>
        <p>- hohe Kosten</p>
        <p>- keine direkte Übertragung</p>

        <br>
        <hr>

        <h3 id="protokolle-dienste">2.4 Protokolle und Dienste</h3>
        <br>

        <div class="definitionen">
            <details>
                <summary>
                    Protokolle
                </summary>
                <p>Ein Protokoll ist eine Menge von Regeln und Verfahren, die definiert sind, um die Kommunikation zwischen Computern oder anderen Geräten 
                    in einem Netzwerk zu regeln. Protokolle legen die Struktur un den Inhalt von Datenpaketen, die Übertragungsraten, das Fhlerhandling und
                    die Authentifizierung fest.</p>
            </details>
        </div>
        <br>

        <div class="definitionen">
            <details>
                <summary>
                    Dienste
                </summary>
                <p>Dienste fassen bestimmte Aufgaben aus einem Themengebiet zusammen und bieten ihre Funktionalität über eine kalr deifinierte Schnittstelle 
                    zur Verfügung. </p>
            </details>
        </div>


    


    </div>
    
    <?php else: ?>
        <p id="login">Bitte melden Sie sich an, um den Inhalt sehen zu können!</p>
        <a id="login" href="../../register_form/login.php">Anmelden</a>
    <?php endif; ?>
</body>
<footer>
    <p id="footerheadline1">Impressum:</p>
    <p id="footerheadline2">Name</p>
    <p id="footerinhalt">Constantin Liepelt</p>
    <p id="footerheadline2">Anschrift</p>
    <p id="footerinhalt">Johann-Meyer-Straße 5</p>
    <p id="footerinhalt">01097, Dresden</p>
    <p id="footerheadline2">E-Mail</p>
    <p id="footerinhalt"><a id="myemail"  href="mailto:constantin@liepelts.de">constantin@liepelts.de</a></p>
    <p id="footerheadline2">Telefonnummer</p>
    <p id="footerinhalt">+49 1577 538 4556</p>

</footer>
</html>
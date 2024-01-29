<?php
session_start();
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/nav2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/everything.css">
    <link rel="stylesheet" href="../../css/algorithmen_programmierung.css">
    <script src="../../js/menu.js" defer></script>
    <title>Informatik-Hefter | Klasse 11 | Technische Informatik</title>
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
                            <li class="dropdown"><a href="technische_informatik.php"><span>Technische Informatik</span></a>
                                <i class="fa-solid fa-chevron-down"></i>
                                <ul class="sub-menu sub-menu-left">
                                    <li class="dropdown"><a href="grundlagen_it.html"><span>Grundlagen</span></a>
                                        <i class="fa-solid fa-chevron-down"></i>
                                        <ul class="sub-menu sub-menu-left">
                                            <li><a href="grundlagen_ti.html#zahlensysteme"><span>Zahlensysteme</span></a></li>
                                            <li><a href="grundlagen_ti.html#kodierung"><span>Kodierung von Zeichen</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="algorithmen_programmierung.php"><span>Algorithmen und Programmierung</span></a>
                                <i class="fa-solid fa-chevron-down"></i>
                                <ul class="sub-menu sub-menu-left">
                                    <li class="dropdown"><a href="grundlagen_ap.php"><span>Grundlagen</span></a>
                                        <i class="fa-solid fa-chevron-down"></i>
                                        <ul class="sub-menu sub-menu-left">
                                            <li><a href="grundlagen_ap.php#klassifizierung"><span>Klassifizierung von Programmiersprachen</span></a></li>
                                            <li><a href="grundlagen_ap.php#kontrollstrukturen"><span>Kontrollstrukuren</span></a></li>
                                            <li><a href="grundlagen_ap.php#algorithmen"><span>Algorithmen</span></a></li>
                                            <li><a href="grundlagen_ap.php#unterprogramme"><span>Unterprogramme</span></a></li>
                                            <li><a href="grundlagen_ap.php#w_und_r"><span>Werte- und Referenzparamter</span></a></li>
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
        <h2>2.1. Grundlagen</h2>
        <br>
        <hr>
        <h3 id="klassifizierung">2.1.1 Klassifizierung von Programmiersprachen</h3>
        <br>
        <h3>Klassifizierung nach Abstraktionsebene</h3>
        <br>
        <ol id="klassifizierung">
            <li>Maschinensprache
                <br>
                <ul id="inhalt">
                    <li>Befehle aus Binärzahlen</li>
                    <li>auf Hardwareebene ausgeführt</li>
                    <li>schwer lesbar</li>
                </ul>
            </li>
            <li>Maschinennahe Sprache
                <br>
                <ul id="inhalt">
                    <li>"Assembler Sprachen"</li>
                    <li>Textsymbole werden anstelle von Binärzahlen verwendet</li>
                </ul>
            </li>
            <li>höhere Programmiersprachen
                <br>
                <ul id="inhalt">
                    <li>benutzerfreundlich</li>
                    <li>unabhängig bon Hardware</li>
                    <li>Fokus auf Problemlösung anstatt auf Hardwareoptimierung</li>
                </ul>
            </li>
        </ol>

        <br>
        <h3>Klassifizierung nach Programmiersprachen</h3>
        <br>
        
        <p>Imperative Sprachen:</p>
        <ul id="inhalt">
            <li>Python</li>
            <li>Java</li>
            <li>JavaScript</li>
            <li>C</li>
            <li>C++</li>
            <li>C#</li>
        </ul>
        <br>
        <p>Deklarative Sprachen:</p>
        <ul id="inhalt">
            <li>SQL</li>
        </ul>
        <br>
        <p>Logische Sprachen:</p>
        <ul id="inhalt">
            <li>Prolog</li>
        </ul>
        <br>
        <p>Funktionale Sprachen:</p>
        <ul id="inhalt">
            <li>Haskell</li>
            <li>Lisp</li>
            <li>Python</li>
        </ul>
        <br>
        <p>Opjektorientierte Sprachen:</p>
        <ul id="inhalt">
            <li>Java</li>
            <li>Python</li>
            <li>C++</li>
        </ul>

        <br>
        <hr>
        <h3 id="kontrollstrukturen">2.1.2. Kontrollstrukuren</h3>
        <br>
        <ul id="inhalt">
            <li>Sequenz</li>
            <li>Verzweifgung</li>
            <li>Schleifen</li>
            <li>Unterprogramme</li>
        </ul>

        <br>
        <hr>

        <h3 id="algorithmen">2.1.3. Algorithmen</h3>
        <div class="definitionen">
            <details>
                <summary>
                    Algorithmus
                </summary>
                <p>Ein Algorithmus ist eine präzise Abfolge von Befehlen zur Lösung eines Problems.                </p>
            </details>
        </div>
        <br>
        <p id="e_a">Eigenschaften von Algorithmen</p>
        <ul id="inhalt">
            <li><b>Finitheit </b>= endliche Länge</li>
            <li><b>dynamische Finitheit </b>= endlich vieler Speicherverbrauch</li>
            <li><b>Ausführbarkeit </b>= jeder Schritt ist umsetzbar</li>
            <li><b>Terminierung </b>= Berechnung nach endlicher Zeit abgeschlossen</li>
            <li><b>Determiniertheit </b>= bei jeder Ausführung für gleiche Werte, immer das selbe Ergebnisse</li>
            <li><b>Determinismus </b>= jeder Schritt ist klar definiert und eindeutig</li>
        </ul>
        <br>
        <hr>

        <h3 id="unterprogramme">2.1.4. Unterprogramme</h3>
        <br>
        <p id="f">Funktion:</p>
        <p>Eine Funktiongibt ein Wert zurück. Beispiel:</p>
        <br>
        <p>def summe():</p>
        <p id="funktion">a = 5 + 20</p>
        <p id="funktion">return a</p>
        <br>
        <p>print(summe())</p>
        <p>-> 25</p>
        <br>

        <p id="p">Prozedur</p>
        <p>Eine Prozedur führt Befehle aus, ohne etwas zurückzugeben. Beispiel:</p>
        <br>
        <p>def hello_world():</p>
        <p id="prozedur">print("hello world")</p>
        <br>
        <p>hello_world()</p>
        <p>-> hello world</p>

        <br>
        <hr>

        <h3 id="w_und_r">2.1.5. Werteparameter und Referenzparamter</h3>
        <br>
        <h3>Werteparamter</h3>
        <p>-> Call by Value</p>
        <br>
        <p>Ein Werteparameter übergibt eine Kopie der Variable an die Funktion.</p>
        <br>
        <h3>Referenzparamter</h3>
        <p>-> Call by reference</p>
        <br>
        <p>Referenzparamter übergeben die tatsächliche Referenz, also Speicheradresse, zu dem Wert.</p>
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
    <p id="footerinhalt"><a id="myemail" href="mailto:constantin@liepelts.de">constantin@liepelts.de</a></p>
    <p id="footerheadline2">Telefonnummer</p>
    <p id="footerinhalt">+49 1577 538 4556</p>

</footer>
</html>
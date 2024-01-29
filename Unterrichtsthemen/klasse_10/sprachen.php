<?php
session_start();
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/sprachen.css">
    <link rel="stylesheet" href="../../css/nav2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/everything.css">
    <script src="../../js/menu.js" defer></script>
    <title>Informatik-Hefter | Klasse 10 | Sprachen</title>
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
        <h2 id="sprachen">1. Sprachen</h2>

        <div class="definitionen">
            <details>
                <summary>
                    Sprachen
                </summary>
                <p>
                    Sprachen in der Informatik werden durch eine Grammatik beschrieben. Es wird dabei genau festgelegt, welche Wörter und Sätze zu einer Sprache 
                    gehören. Sprachen in der Informatik werden auch als "formale Sprache" bezeichnet.
                </p>
            </details>
        </div>

        <br>
        <hr>

        <h3 id="unterschied_natuerliche_und_formale_sprache">1.1. Unterschied natürliche und foramle Sprache</h3>

        <br>

        <table>
            <tr>
                <th id="unufs">natürliche Sprachen</th>
                <th id="unufs">formale Sprachen</th> 
            </tr>

            <tr>
                <td id="unufs">
                    <div class="unterschiede">
                        - Kommunikation im Vordergrund
                        <br>
                        - kann gehört / gesprochen werden
                        <br>
                        - Sprache geographisch / kulturell abhängig
                        <br>
                        - viel Raum für Interpretation
                    </div>
                </td>
        
                <td id="unufs">
                    <div class="unterschiede">
                        - nicht für die Kommunikation geeignet
                        <br>
                        - Sprache ist funktionsabhängig
                        <br>
                        - gibt keine "Muttersprache"
                    </div>
                </td>
            </tr>

            <tr>
                <td id="unufs" colspan="2">
                    <div class="gemeinsamkeiten">
                        - besteht aus Symbolen / Zeichen
                        <br>
                        - verschiedene Varianten
                        <br>
                        - besitzen ein Alphabet
                        <br>
                        - brauchen Syntax und Semantik
                        <br>
                        - man muss beides erlernen
                    </div>

                </td>
            </tr>
        </table>
        
        <br>
        <hr>

        <h3 id="alphabet_und_sprache">1.2. Alphabet und Sprache</h3>

        <br>

        <p>
            Sprachen nutzen Zeichen bzw. Symbole als Bausteine, um hieraus Spracheinheiten zu bilden. 
            Die Menge dieser Symbole bildet dann das sogenannte Alphabet (Zeichenvorrat) der Sprache.
        </p>

        <div class="definitionen">
            <details>
                <summary>
                    Alphabet
                </summary>
                <p>
                    Ein Alphabet ist eine endliche, nicht leere Menge von Zeichen. Alle Symbole einer Sprache werden in dem Summenzeichen (∑) zusammengefasst.
                </p>
            </details>
        </div>

        <br>
        
        <div class="beispiele">
            <details>
                <summary>
                    Beispiel
                </summary>
                <p>
                    römische Zahlen:
                </p>
                <p>
                    ∑ = {I, V, X, L, C, D, M}
                </p>
                <p>
                    Das Alphabet der römischen Zahlen bestehet nur aus diesen Symbolen. Mit diesen lässt sich im römischen jede Zahl darstellen.
                </p>
            </details>
        </div>

        <br>

        <p>
            Einheiten, die durch Hintereinanderreihung von Symbolen aus dem Alphabet Σ entstehen, nennt man auch Wörter (über dem Alphabet Σ). 
            Für ein Alphabet gibt es unendlich viele Möglichkeiten, Wörter zu bilden.
        </p>
        
        <div class="definitionen">
            <details>
                <summary>
                    Wort "w"
                </summary>
                <p>
                    Ein Wort "w" über ein Alphabet isz eine Zeichenkette, welche ausschließlich aus Zahlen des Alphabets besteht. 
                    Das leere Wort "∈" ist ein Wort über jedem Alphabet.
                </p>
            </details>
        </div>

        <br>

        <p>
            Die Sprache L ist  eine ganz bestimmte Teilmenge der Menge aller möglichen Wörter über Σ.
        </p>
        
        <div class="definitionen">
            <details>
                <summary>
                    Sprache
                </summary>
                <p>
                    Eine Sprache "L" ist eine beliebige Teilmenge von Wörtern über ∑.
                </p>
            </details>
        </div>
        
        <br>
        <hr>

        <h3 id="formale_sprache">1.3. Formale Sprachen</h3>

        <br>

        <div class="definitionen">
            <details>
                <summary>
                    Formale Sprache
                </summary>
                <p>
                    Formale Sprachen L sind eine festgelegte, aber beliebige Menge an Wörtern über dem Alphabet A. 
                    Es ist damit eine Teilmenge der Menge aller Wörter A*. Als Kurzfassung könnte man schreiben L⊆A*. 
                </p>
            </details>
        </div>
        
        <br>

        <p> Eine Sprache L über dem Alphabet A={1,2} ist zum Beispiel die Sprache L={1,2,11,22,1122,2211,1221,2112,...}. </p>

        <br>
        <hr>
        
        <h3 id="regulaere_ausdruecke">1.4. Reguläre Ausdrücke</h3>

        <br>

        <div class="definitionen">
            <details>
                <summary>
                    Reguläre Ausdrücke
                </summary>
                <p>
                    Es gibt drei Möglichkeiten zur Beschreibung einer formalen Sprache mit unendlich vielen Wörtern:
                    <ul id="RA">
                        <li id="RA">
                            mit einem regulären Ausdruck
                        </li>

                        <li id="RA">
                            mit einem Automaten
                        </li>

                        <li id="RA">
                            mit einer Grammatik
                        </li>
                    </ul>
                </p>
            </details>
        </div>

        <br>

        <p>
            In der folgenden Tabelle, sind die Regulären Ausdrücke zu finden. Die Werte "a", "b" und "c" sind nur Platzhalter, sie können beliebig ersetzt werden.
        </p>

        <br>

        <table>
            <tr>
                <th id="RA">Synatx-Diagramm</th>
                <th id="RA">Regulärer Ausdruck</th>
                <th id="RA">Defintion</th> 
            </tr>

            <tr>
                <td id="SD">
                    <div class="syntax_diagramm">
                        <img src="../../Bilder/RA_normal.jpg">
                    </div>
                </td>

                <td id="RA">
                    <div class="regulaerer_ausdruck">

                    </div>
                </td>

                <td id="RA">
                    <div class="RA_definitionen">
                        normaler Regulärer Ausdruck
                    </div>
                </td>
            </tr>

            <tr>
                <td id="SD">
                    <div class="syntax_diagramm">
                        <img src="../../Bilder/RA_alternativen.jpg">
                    </div>
                </td>

                <td id="RA">
                    <div class="regulaerer_ausdruck">
                        |
                    </div>
                </td>
        
                <td id="RA">
                    <div class="RA_definitionen">
                        Alternativen
                    </div>
                </td>
            </tr>

            <tr>
                <td id="SD">
                    <div class="syntax_diagramm">
                        <img src="../../Bilder/RA_optional.jpg">
                    </div>
                </td>

                <td id="RA">
                    <div class="regulaerer_ausdruck">
                        (b)?
                    </div>
                </td>
        
                <td id="RA">
                    <div class="RA_definitionen">
                        Optional 
                    </div>
                </td>
            </tr>

            <tr>
                <td id="SD">
                    <div class="syntax_diagramm">
                        <img src="../../Bilder/RA_wiederholungen.jpg">
                    </div>
                </td>

                <td id="RA">
                    <div class="regulaerer_ausdruck">
                        aa oder a+
                    </div>
                </td>
        
                <td id="RA">
                    <div class="RA_definitionen">
                        Wiederholungen
                    </div>
                </td>
            </tr>

            <tr>
                <td id="SD">
                    <div class="syntax_diagramm">
                        <img src="../../Bilder/RA_eins-von.jpg">
                    </div>
                </td>

                <td id="RA">
                    <div class="regulaerer_ausdruck">
                        [abc]
                    </div>
                </td>
        
                <td id="RA">
                    <div class="RA_definitionen">
                        Auswahl von mehreren
                    </div>
                </td>
            </tr>

            <tr>
                <td id="SD">
                    <div class="syntax_diagramm">
                        <img src="../../Bilder/RA_zeichenklasse.jpg">
                    </div>
                </td>
                
                <td id="RA">
                    <div class="regulaerer_ausdruck">
                        [a-z]
                    </div>
                </td>
        
                <td id="RA">
                    <div class="RA_definitionen">
                        Zeichenklassen
                    </div>
                </td>
            </tr>
        </table>

        <br>
        
        <p>Dies sind die wichtigsten Regulären Ausdrücke, es gibt noch viele weitere.</p>

        <br>

        <div class="beispiele">
            <details>
                <summary>Beispiel</summary>
                <p>Regulärer Ausdruck für alle ein-/ zwei- und dreistelligen Ziffern:</p>
                <br>
                <p>[0-9][0-9]?[0-9]?</p>
                
            </details>
        </div>

        <br>
        <hr>

        <h3 id="endliche_automaten">1.5. Endliche Automaten</h3>

        <div class="definitionen" id="EA">
            <details>
                <summary>Endliche Automaten</summary>
                <p>
                    Ein endlicher Automat wird auch Zustandsautomat genannt. Er hat einen definierten Zustand, in dem er sich befindet, bis eine Eingabe folgt. 
                    Dieser Zustand wird Startzustand genannt. <br>
                    Er besitzt ebenso mindestens einen Endzustand. Wenn ein endlicher Automat diesen Endzustand erreicht, akzeptiert er die Eingabe.<br>
                    Nach jeder Eingabe folgt ein Folgezustand. Diese Eingabe wird Zeichenweise abgearbeitet. Die Eingabe wird solange abgearbeitet bis alle 
                    Zeichen verwendet wurden, dann gelangt er in den Endzustand und akzeptiert die Eingabe.<br>
                    Ist die Eingabe beendet, der endliche Automat jedoch nicht in seinem Endzustand, wird die Eingabe nicht akzeptiert.<br>
                    Führt eine Eingabe zu keinem Folgezustand, dann gelangt er in einen Fehlerzustand. Bei diesem wird die Eingabe auch nicht akzeptiert.<br>
                    Die einzelnen Zustände werden durchnummeriert.
                </p>
                <br>
                <table id="EA">
                    <tr>
                        <td id="EA">
                            <div class="zustand">
                                <img src="../../Bilder/EA_start.jpg">
                            </div>
                        </td>

                        <td id="EA">
                            Startzustand
                        </td>
                    </tr>

                    <tr>
                        <td id="EA">
                            <div class="zustand">
                                <img src="../../Bilder/EA_zustandsuebertragung.jpg">
                            </div>
                        </td>

                        <td id="EA">
                            Zustandsübertragung
                        </td>
                    </tr>

                    <tr>
                        <td id="EA">
                            <div class="zustand">
                                <img src="../../Bilder/EA_ziel.jpg">
                            </div>
                        </td>

                        <td id="EA">
                            Zielzustand
                        </td>
                    </tr>
                </table>
            </details>
        </div>

        <br>
        <hr>

        <h3 id="auszeichnungssprachen">1.6. Auszeichnungssprachen</h3>

        <div class="definitionen">
            <details>
                <summary>
                    Auszeichnungssprachen
                </summary>
                <p>
                    Eine Auszeichnungssprache ist eine maschienen lesbare Sprache für die Strukturierung und Formatierung von Texten und anderen Daten.
                    <br>
                    <br>
                    Auszeichnungssprache = Markup Languange (ML)
                </p>
            </details>
        </div>

        <p>Auszeichnungssprachen:</p>
        <ul id="AS">
            <li>XML</li>
            <li>HTML</li>
            <li>LaTeX</li>
            <li>Markdown</li>
            <li>BibTeX</li>
            <li>...</li>
        </ul>

        <br>

        <p>Sie unterscheiden sich alle durch ihre Syntax.</p>

        <br>
        <hr id="AS">

        <h3 id="HTML">1.6.1 HTML</h3>

        <div class="definitionen">
            <details>
                <summary>
                    HTML
                </summary>
                <p>
                    = Auszeichnungssprache
                    <br>
                    = hyper text markup language
                </p>
            </details>
        </div>

        <p>
            Um per HTML Text zu strukturieren braucht man sogenannte Tags. Jeder Tag jat einen öffnenden und einzelnen
            schließenden Tag. Diese umklammern den Inahlt.
        </p>

        <br>

        <p id="aufbau_html">Aufbau</p>

        <ol>
            <li>Dokuemententyp wird deklariert</li>
            <li>dem Broswer wird gesagt, dass es eine HTML Seite ist</li>
            <li>Sprache wird angegben</li>
            <li>"head" mit Metadaten, Titel, Design (erscheint nicht auf der Seite)</li>
            <li>"body" mit dem gesamten Inhalt der Seite</li>
        </ol>

        <br>

        <img id="html" src="../../Bilder/HTML_aufbau.jpeg">

        <br>

        <table>
            <tr>
                <th id="html">HTML-Tag</th>
                <th id="html">Bedeutung</th>
            </tr>

            <tr>
                <td id="html">&lsaquo;h1&rsaquo;</td>
                <td id="html">Überschriften, je größer die Zahl, desto niedriger die Überschrift </td>
            </tr>

            <tr>
                <td id="html">&lsaquo;img src="Link/Pfad"&rsaquo;</td>
                <td id="html">Fügt ein Bild ein</td>
            </tr>

            <tr>
                <td id="html">&lsaquo;a href="Link/Pfad"&rsaquo;...&lsaquo;/a&rsaquo;</td>
                <td id="html">Fügt ein Link ein</td>
            </tr>

            <tr>
                <td id="html">&lsaquo;br&rsaquo;</td>
                <td id="html">Fügt ein Absatz ein</td>
            </tr>
        </table>

        <br>

        <p id="aufbau_html">Design</p>
        
        <br>

        <p>
            Bei der Webseitengestaltung wird der Inhalt vom Design getrennt. Das Design ist in einer extra Datei. Diese Datei ist eine CSS 
            (Cascading Style Sheets) Datei.
        </p>
        <p>Die Einbindung erfolgt über den Tag "link". Dabei muss man die Beziehung (Stylesheet) angegeben und den Pfad dieser Datei.</p>
        
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
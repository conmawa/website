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
                                    <li class="dropdown"><a href="komplexitaet.php"><span>Komplexität</span></a>
                                        <i class="fa-solid fa-chevron-down"></i>
                                        <ul class="sub-menu sub-menu-left">
                                            <li><a href="komplexitaet.php#einfuehrung"><span>Einführung</span></a></li>
                                            <li><a href="komplexitaet.php#komplexitaetsklassen"><span>Komplexitätsklassen</span></a></li>
                                            <li><a href="komplexitaet.php#sortieralgorithmen"><span>Sortieralgorithmen</span></a></li>
                                            <li><a href="komplexitaet.php#divide_conquer"><span>Divide and Conquer</span></a></li>
                                            <li><a href="komplexitaet.php#iteration_rekursion"><span>Iteration und Rekursion</span></a></li>
                                            <li><a href="komplexitaet.php#e_sortieralgorithmen"><span>effizientere Sortieralgorithmen</span></a></li>
                                        </ul>
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
        <h2>2.2. Komplexität</h2>
        <br>
        <hr>

        <h3 id="einfuehrung">2.2.1. Einführung in die Komplexität</h3>
        <br>
        <p>Die Komplexität untersucht die Effizienz von Algorithmen. Die O-Notation, auch als "Big O" bezeichnet, 
            ist eine mathematische Darstellung, um das Wachstum der Laufzeit eines Algorithmus in Bezuf auf die Größe seiner Eingabe zu beschreiben.</p>
        <br>
        <br>

        <p>Beispiel: Bubble-Sort-Algorithmus</p>
        <br>
        <p>x-Werte = Anzahl n (Länge der Liste)</p>
        <p>y-Werte = Zeit zum sortiern</p>
        <img src="../../Bilder/komplexitet_bubble_sort.png" alt="Komplexität des Bubble Sortes" width="60%">
        <br>
        <p>--> Quadratischer Anstieg</p>
        <br>
        <hr>

        <h3 id="komplexitaetsklassen">2.2.2. Komplexitätsklassen</h3>
        <br>
        <img src="../../Bilder/komplexiteaet_uebersicht.png" alt="Übersicht der Komplexitätsklassen" width="50%">
        <figure>Quelle: <a href="https://studyflix.de/informatik/o-notation-6800">https://studyflix.de/informatik/o-notation-6800</a></figure>
        <br>
        <hr>

        <h3 id="sortieralgorithmen">2.2.3. Sortieralgorithmen</h3>
        <br>
        <p><details>
                <summary>Bubble-Sort</summary>
                from random import randint

def bubble_sort(array):
    # Wiederhole Anzahl der Elemente in der Liste
    for i in range(len(lst)):
        # Wiederhole Anzahl der Elemente in der Liste - 1
        for i in range(len(lst) - 1):
            # Überprüfe ob Liste ab Stelle i ist größer als Liste an Stelle i+1
            if array[i] > array[i+1]:
                # setze eine temporäre Variable auf Listenelement an der Stelle i
                temp = array[i]
                # setze Listenelemnt an der Stelle i auf Element der Stelle i+1
                array[i] = array[i+1]
                # steze Listenelement an der Stelle i+1 auf die temporäre Varibale
                array[i+1] = temp
    return array
lst = []
for i in range(10):
    lst.append(randint(0,100))

print(lst)
print(bubble_sort(lst))
            </details>-> O(n<sup>2</sup>)</p>
        <p>Insertion-Sort: <a id="skript" href="python_skripte/insertion_sort.py" download="insertion_sort.py">Datei herunterladen</a> -> O(n<sup>2</sup>)</p>
        <p>Selection-Sort: <a id="skript" href="python_skripte/selection_sort.py" download="selection_sort.py">Datei herunterladen</a> -> O(n<sup>2</sup>)</p>
        <br>
        <hr>

        <h3 id="divide_conqouer">2.2.4. Divide and Conquer - Verfahren</h3>
        <br>
        <p>= Teilen und Herrschen</p>
        <p>= Verfahren zur Lösung von konmplexen Problemen</p>
        <br>
        <p id="d_c">Schritte:</p>
        <ol>
            <li>Teilen (divide): Ausgangsproblem in kleinere Teilprobleme die, dieselbe Struktur haben aufteilen.</li>
            <li>Herrschen (conquer): Teilprobleme separat lösen, falls diese noch zu groß sind, erneut teilen.</li>
            <li>Kombinieren (combine): Lösungen der Teilprobleme zusammentragen.</li>
        </ol>
        <p>=> Gesamtlösung eines Problemes</p>
        <br>
        <hr>

        <h3 id="iteration_rekursion">2.2.5. Iteration und Rekursion</h3>
        <br>
        <h3>Iteration</h3>
        <ul>
            <li>Programmierung mit Verwendung von Schleifen (while, if, for)</li>
        </ul>
        <br>

        <h3>Rekursion</h3>
        <ul>
            <li>eine Funktion ruft sich selber auf --> verkleinert das Problem</li>
            <li>bis Abbruchbedingung erreicht</li>
        </ul>
        <br>

        <p id="i_r">Beispiel:</p>
        <p id="line1">def summe(a):</p>
        <p id="line2">if a == 0:</p>
        <p id="line3">return a</p>
        <p id="line4">else:</p>
        <p id="line5">return a + summe(a-1)</p>
        
        <br>
        <p id="red">Abbruchbedingung</p>
        <p id="blue">Rekurssionsschritt</p>

        <br>
        <hr>
        <h3 id="e_sortieralgorithmen">2.2.6. effizientere Sortieralgorithmen</h3>
        <br>
        <p>Merge-Sort: <a id="skript" href="python_skripte/merge_sort.py" download="merge_sort.py">Datei herunterladen</a></p>
        <ul>
            <li>basiert auf Rekursion</li>
        </ul>
        <br>
        <p id="e_s">Vorgehen:</p>
        <ol>
            <li>unsortierte Liste teilen bis jedes Element in eigener Liste</li>
            <li>Teillisten sortiern</li>
            <li>Teillisten nacheinander zusammensetzen</li>
        </ol>
        <br>
        <p>Komplexität: O(n log n)</p>

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
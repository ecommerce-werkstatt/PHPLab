# PHPLab
PHP Lernen für Schüler

## Was ist PHP? [ [Quelle](https://www.php.net/manual/de/intro-whatis.php) ]

PHP (rekursives Akronym für PHP: Hypertext Preprocessor) ist eine weit verbreitete und für den allgemeinen Gebrauch bestimmte Open Source-Skriptsprache, welche speziell für die Webprogrammierung geeignet ist und in HTML eingebettet werden kann.

Nett, aber was heißt das genau? Ein Beispiel:

Beispiel #1 Ein einführendes Beispiel
```<!DOCTYPE html>
<html>
<head>
<title>Beispiel</title>
</head>
<body>

<?php
            echo "Hallo, ich bin ein PHP-Skript!";
        ?>

</body>
</html>
```

Anstatt ein Programm mit vielen Anweisungen zur Ausgabe von HTML zu schreiben, schreibt man etwas HTML und bettet einige Anweisungen ein, die irgendetwas tun (wie hier "Hallo, ich bin ein PHP-Skript!" auszugeben). Der PHP-Code steht zwischen speziellen Anweisungen <?php und ?> zum Starten und Beenden der Verarbeitung, mit denen man in den "PHP-Modus" und zurück wechseln kann.

PHP unterscheidet sich von clientseitigen Sprachen wie Javascript dadurch, dass der Code auf dem Server ausgeführt wird und dort HTML-Ausgaben generiert, die an den Client gesendet werden. Der Client erhält also nur das Ergebnis der Skriptausführung, ohne dass es möglich ist herauszufinden, wie der eigentliche Code aussieht. Sie können Ihren Webserver auch anweisen, alle Ihre HTML-Dateien mit PHP zu parsen, denn dann gibt es wirklich nichts, das dem Benutzer sagt, was Sie in petto haben.

Das Beste an der Verwendung von PHP ist, dass es für Neueinsteiger extrem einfach ist, aber auch einen riesigen Funktionsumfang für den professionellen Programmierer bietet. Scheuen Sie sich nicht, die lange Liste der PHP-Funktionen zu lesen. Sie können einsteigen, und binnen weniger Stunden bereits mit dem Schreiben von einfachen Skripten beginnen.




## Lektion 1 
Lese folgende wichtige Kapitel der PHP Dokumentation [ [Quelle](https://www.php.net/manual/de/langref.php) ] und teste
funktionsweise der PHP in der Datei index.php die über http://localhost/phplab/index.php aufrufen kannst.
Wichtig: Lösche nichts was du in index.php ausprobiert hast und erstelle einen PHP Kommentar nach jedem Kapitel.

- ### Grundlagen der Syntax
  - [PHP Tags](https://www.php.net/manual/de/language.basic-syntax.phptags.php)
  - [Den HTML-Bereich verlassen](https://www.php.net/manual/de/language.basic-syntax.phpmode.php)
  - [Die Trennung von Anweisungen](https://www.php.net/manual/de/language.basic-syntax.instruction-separation.php)
  - [Kommentare](https://www.php.net/manual/de/language.basic-syntax.comments.php)
- ### Variablen
  - [Grundlegendes](https://www.php.net/manual/de/language.variables.basics.php)
- ### Operatoren
  - [Arithmetische Operatoren](https://www.php.net/manual/de/language.operators.arithmetic.php)
  - [Vergleichs-Operatoren](https://www.php.net/manual/de/language.operators.comparison.php)
  - [Logische Operatoren](https://www.php.net/manual/de/language.operators.logical.php)
  - [Zeichenketten-Operatoren](https://www.php.net/manual/de/language.operators.string.php)
- ### Kontrollstrukturen
  - [if](https://www.php.net/manual/de/control-structures.if.php)
  - [else](https://www.php.net/manual/de/control-structures.else.php)
  - [for](https://www.php.net/manual/de/control-structures.for.php)
  - [foreach](https://www.php.net/manual/de/control-structures.foreach.php)
  - [break](https://www.php.net/manual/de/control-structures.break.php)
  - [continue](https://www.php.net/manual/de/control-structures.continue.php)

> #### Erledige die Aufgaben 1-4



## Lektion 2
Lese folgende wichtige Kapitel der PHP Dokumentation und teste
funktionsweise der PHP in der Datei index.php

- ### Funktionen
  - [Benutzerdefinierte Funktionen](https://www.php.net/manual/de/functions.user-defined.php)
  - [Funktionsparameter](https://www.php.net/manual/de/functions.arguments.php)
  - [Rückgabewerte](https://www.php.net/manual/de/functions.returning-values.php)
- ### Funktionsreferenz - Textverarbeitung - String Funktionen [ [Quelle](https://www.php.net/manual/de/refs.basic.text.php) ]
  - [echo](https://www.php.net/manual/de/function.echo.php) Gibt einen oder mehrere Strings aus
  - [strlen](https://www.php.net/manual/de/function.strlen.php) Ermitteln der String-Länge
  - [explode](https://www.php.net/manual/de/function.explode.php) Teilt eine Zeichenkette anhand einer Zeichenkette
  - [implode](https://www.php.net/manual/de/function.implode.php) Verbindet Array-Elemente zu einem String
  - [substr](https://www.php.net/manual/de/function.substr.php) Liefert einen Teil eines Strings
  - [trim](https://www.php.net/manual/de/function.trim.php) Entfernt Whitespaces (oder andere Zeichen) am Anfang und Ende eines Strings
  - [ucfirst](https://www.php.net/manual/de/function.ucfirst.php) Verwandelt das erste Zeichen eines Strings in einen Großbuchstaben
  - [ucwords](https://www.php.net/manual/de/function.ucwords.php) Wandelt jeden ersten Buchstaben eines Wortes innerhalb eines Strings in einen Großbuchstaben um
  - [str_replace](https://www.php.net/manual/de/function.str-replace.php) Ersetzt alle Vorkommen des Suchstrings durch einen anderen String
  - [str_repeat](https://www.php.net/manual/de/function.str-repeat.php) Wiederholt einen String
  - [str_pad](https://www.php.net/manual/de/function.str-pad.php) Erweitert einen String unter Verwendung eines anderen Strings auf eine bestimmte Länge
  - [str_shuffle](https://www.php.net/manual/de/function.str-shuffle.php) Mischt einen String nach dem Zufallsprinzip
  - [str_split](https://www.php.net/manual/de/function.str-split.php) Konvertiert einen String in ein Array
  - [stripos](https://www.php.net/manual/de/function.stripos.php) Findet das erste Vorkommen eines Teilstrings in einem String, unabhängig von Groß- und Kleinschreibung
  - [strpos](https://www.php.net/manual/de/function.strpos.php) Findet das erste Vorkommen eines Teilststrings in einem String
  - [strstr](https://www.php.net/manual/de/function.strstr.php) Findet das erste Vorkommen eines Strings
  - [substr_count](https://www.php.net/manual/de/function.substr-count.php) Ermittelt, wie oft eine Zeichenkette in einem String vorkommt
  - [substr_replace](https://www.php.net/manual/de/function.substr-replace.php) Ersetzt Text innerhalb einer Zeichenkette
  - [levenshtein](https://www.php.net/manual/de/function.levenshtein.php) Berechnet die Levenshtein-Distanz zwischen zwei Strings
- ### Funktionsreferenz - Dateisystem [ [Quelle](https://www.php.net/manual/de/ref.filesystem.php) ]
  - [file_get_contents](https://www.php.net/manual/de/function.file-get-contents.php) Liest die gesamte Datei in einen String
  - [file_put_contents](https://www.php.net/manual/de/function.file-put-contents.php) Schreibt Daten in eine Datei



> #### Erledige die Aufgabe 5




## PHP Kurs
https://www.php-kurs.com/erstes-php-programm.htm







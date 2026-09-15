<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Ćwiczenia PHP</title>
</head>

<body>

<h1>Ćwiczenia PHP</h1>

<?php

// Zadanie 1
echo "<h2>Zadanie 1</h2>";

$a = 10;
$b = 2;

if ($b != 0) {
    $x = $a / $b;
    echo "x = $x";
} else {
    echo "Nie można dzielić przez 0.";
}


// Zadanie 2
echo "<h2>Zadanie 2</h2>";

$a = 10;
$b = 2;
$c = 6;
$d = 3;

if ($b != 0 && $d != 0) {
    $x = $a / $b + $c / $d;
    echo "x = $x";
} else {
    echo "Nie można dzielić przez 0.";
}


// Zadanie 3
echo "<h2>Zadanie 3</h2>";

$a = 10;
$b = 6;

if ($b - 4 != 0) {
    $x = ($a + 6) / ($b - 4);
    echo "x = $x";
} else {
    echo "Nie można dzielić przez 0.";
}


// Zadanie 4
echo "<h2>Zadanie 4</h2>";

$liczba = 8;

if ($liczba % 2 == 0) {
    echo "Liczba jest parzysta.";
} else {
    echo "Liczba jest nieparzysta.";
}


// Zadanie 5
echo "<h2>Zadanie 5</h2>";

$a = 12;
$b = 3;

if ($b != 0) {
    if ($a % $b == 0) {
        echo "Pierwsza liczba jest podzielna przez drugą.";
    } else {
        echo "Pierwsza liczba nie jest podzielna przez drugą.";
    }
} else {
    echo "Nie można dzielić przez 0.";
}


// Zadanie 6
echo "<h2>Zadanie 6</h2>";

$liczba = -5;

if ($liczba > 0) {
    echo "Liczba jest dodatnia.";
} elseif ($liczba < 0) {
    echo "Liczba jest ujemna.";
} else {
    echo "Liczba jest równa 0.";
}


// Zadanie 7
echo "<h2>Zadanie 7</h2>";

$a = 5;
$b = 12;
$c = 8;

if ($a >= $b && $a >= $c) {
    echo "Największa liczba to $a.";
} elseif ($b >= $a && $b >= $c) {
    echo "Największa liczba to $b.";
} else {
    echo "Największa liczba to $c.";
}


// Zadanie 8
echo "<h2>Zadanie 8</h2>";

$a = 7;
$b = 2;
$c = 5;

if ($a > $b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

if ($a > $c) {
    $temp = $a;
    $a = $c;
    $c = $temp;
}

if ($b > $c) {
    $temp = $b;
    $b = $c;
    $c = $temp;
}

echo "$a, $b, $c";


// Zadanie 9
echo "<h2>Zadanie 9</h2>";

$rokUrodzenia = 2008;
$rok = date("Y");

$wiek = $rok - $rokUrodzenia;

if ($wiek >= 18) {
    echo "Osoba jest pełnoletnia.";
} else {
    echo "Osoba nie jest pełnoletnia.";
}


// Zadanie 10
echo "<h2>Zadanie 10</h2>";

$znak = "A";

if ($znak >= "A" && $znak <= "Z") {
    echo "To jest duża litera.";
} elseif ($znak >= "a" && $znak <= "z") {
    echo "To jest mała litera.";
} elseif ($znak >= "0" && $znak <= "9") {
    echo "To jest cyfra.";
} else {
    echo "To jest inny znak.";
}


// Zadanie 11
echo "<h2>Zadanie 11</h2>";

$liczba = 121;

if ($liczba >= 100 && $liczba <= 999) {

    $pierwsza = intdiv($liczba, 100);
    $ostatnia = $liczba % 10;

    if ($pierwsza == $ostatnia) {
        echo "Liczba jest palindromem.";
    } else {
        echo "Liczba nie jest palindromem.";
    }

} else {
    echo "Podaj liczbę trzycyfrową.";
}


// Zadanie 12
echo "<h2>Zadanie 12</h2>";

$liczba = 24;

$liczba = abs($liczba);

$dziesiatki = intdiv($liczba, 10);
$jednosci = $liczba % 10;

if (
    ($dziesiatki % 2 == 0 && $jednosci % 2 == 0)
    ||
    ($dziesiatki + $jednosci == 4)
) {
    echo "Warunek jest spełniony.";
} else {
    echo "Warunek nie jest spełniony.";
}


// Zadanie 13
echo "<h2>Zadanie 13</h2>";

$punkty = 85;

if ($punkty <= 29) {
    echo "Ocena: niedostateczna";
} elseif ($punkty <= 59) {
    echo "Ocena: dopuszczająca";
} elseif ($punkty <= 74) {
    echo "Ocena: dostateczna";
} elseif ($punkty <= 89) {
    echo "Ocena: dobra";
} elseif ($punkty <= 99) {
    echo "Ocena: bardzo dobra";
} else {
    echo "Ocena: celująca";
}

?>

</body>
</html>
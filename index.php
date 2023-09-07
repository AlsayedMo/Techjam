<!DOCTYPE html>
<html>
<head>
    <!-- Stijlregel om het 'strong'-element op te maken -->
    <style>
        strong {
            font-weight: 800;    /* Vetgedrukte tekst */
            font-size: 1.4rem;   /* Lettergrootte */
        }
    </style>
</head>
<body>
<?php
for ($i = 33; $i <= 543; $i++) {
    echo '<p>'; // Start een nieuw alinea-element
    if ($i % 5 == 0 && $i % 9 == 0) {
        echo ' <strong> Web </strong>'; // Als deelbaar door 5 EN 9, toon 'Web' vetgedrukt
    } elseif ($i % 5 == 0) {
        echo '<strong> Software </strong>'; // Als deelbaar door 5, toon 'Software' vetgedrukt
    } elseif ($i % 9 == 0) {
        echo '<strong> Developer </strong> '; // Als deelbaar door 9, toon 'Developer' vetgedrukt
    } else {
        echo $i; // Anders toon het getal zelf
    }
    echo '</p>'; // Sluit het alinea-element
}
?>
</body>
</html>

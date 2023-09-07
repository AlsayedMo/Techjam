<!DOCTYPE html>
<html>
<head>
    <style>
        strong {
            font-weight: 800;
            font-size: 1.4rem;
        }
    </style>
</head>
<body>
<?php
for ($i = 33; $i <= 543; $i++) {
    echo '<p>';
    if ($i % 5 == 0 && $i % 9 == 0) {
        echo ' <strong> Web </strong>';
    } elseif ($i % 5 == 0) {
        echo '<strong> Software </strong>';
    } elseif ($i % 9 == 0) {
        echo '<strong> Developer </strong> ' ;
    } else {
        echo $i;
    }
    echo '</p>';
}
?>
</body>
</html>

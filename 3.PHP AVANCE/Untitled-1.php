<php?
session_start();
if (!isset($_SESSION['titres'])){
    $_SESSION['titres'] = [];
}
else {
    $titres = $_SESSION['titres'];
}
$titres[] = $titres;
foreach ($titres as $titre) {
    echo '<p>' .$titre. '</p>';
}
<?php

// Stap 1: Importeren van CSV-bestand in de database

// Databaseverbinding instellen (vervang de placeholders met de daadwerkelijke gegevens)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bigfoot";

// Verbinding maken met de database
$conn = new mysqli($servername, $username, $password, $dbname);

// Controleren op fouten in de verbinding
if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}

// Pad naar het CSV-bestand
$csv_file = "bigfoot/bigfoot.csv";

// CSV-bestand openen
$file_handle = fopen($csv_file, "r");

// Door elke rij in het CSV-bestand loopen
while (!feof($file_handle)) {
    // Huidige rij ophalen en in een array plaatsen
    $row = fgetcsv($file_handle);

    // Controleren of de rij niet leeg is
    if ($row !== false && $row[0] !== null) {
        // Invoegen van gegevens in de database
        // Aangenomen wordt dat de tabel 'producten' al bestaat
        $sql = "INSERT INTO producten (kolom1, kolom2, kolom3) VALUES (?, ?, ?)";
        
        // SQL-statement voorbereiden
        $stmt = $conn->prepare($sql);

        // Parameters binden aan de placeholders
        $stmt->bind_param("sss", $row[0], $row[1], $row[2]);

        // SQL-statement uitvoeren
        $stmt->execute();
    }
}

// CSV-bestand sluiten
fclose($file_handle);

// Stap 2: Lees alle merken uit en zet ze in een dropdownlijst

// Query om alle merken op te halen
$sql = "SELECT id, naam FROM merken";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merk selecteren</title>
</head>
<body>
    <h2>Selecteer een merk:</h2>
    <form action="" method="get">
        <select name="merk">
            <?php
            // Lus door elk merk en creëer een optie in de dropdownlijst
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['id'] . "'>" . $row['naam'] . "</option>";
            }
            ?>
        </select>
        <input type="submit" value="Selecteren">
    </form>
</body>
</html>

<?php
// Stap 3: Lees alle modellen uit op basis van het geselecteerde merk en zet ze in een dropdownlijst

if(isset($_GET['merk'])) {
    $merk_id = $_GET['merk'];
    
    // Query om alle modellen van het geselecteerde merk op te halen
    $sql = "SELECT id, naam FROM modellen WHERE merk_id = $merk_id";

    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Model selecteren</title>
</head>
<body>
    <h2>Selecteer een model:</h2>
    <form action="" method="get">
        <input type="hidden" name="merk" value="<?php echo $merk_id; ?>">
        <select name="model">
            <?php
            // Lus door elk model en creëer een optie in de dropdownlijst
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['id'] . "'>" . $row['naam'] . "</option>";
            }
            ?>
        </select>
        <input type="submit" value="Selecteren">
    </form>
</body>
</html>

<?php
}

// Stap 4: Toon maten op basis van de geselecteerde merk en model

if(isset($_GET['model'])) {
    $model_id = $_GET['model'];

    // Query om alle maten van het geselecteerde model op te halen
    $sql = "SELECT maat FROM maten WHERE model_id = $model_id";

    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maten</title>
</head>
<body>
    <h2>Geselecteerde maten:</h2>
    <?php
    // Lus door alle maten en toon ze
    while ($row = $result->fetch_assoc()) {
        echo "<p>" . $row['maat'] . "</p>";
    }
    ?>
</body>
</html>

<?php
}

// Databaseverbinding sluiten
$conn->close();

?>

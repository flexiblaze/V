<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>
        Lab 1.08
    </title>
    <style>
        table, tr, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<h1><strong>Inschrijfformulier</strong></h1>

<form action="labo8.verwerken.php" method="post">

    <table style="width:20%">
        <tr>
            <td>Achternaam</td>
            <td><input type="text" name="fachtername"></td>
        </tr>
        <tr>
            <td>Voornaam</td>
            <td><input type="text" name="fvoorname"></td>
        </tr>
        <tr>
            <td> Straat</td>
            <td><input type="text" name="fstraat"></td>
        </tr>
        <tr>
            <td>Postcode</td>
            <td><input type="text" name="fpostcode"></td>
        </tr>
        <tr>
            <td>Plaats</td>
            <td><select name="plaats" id="plaats">
                    <option value="Gouda" selected="selected">Gouda</option>
                    <option value="Yalova" selected="selected">Yalova</option>
                </select></td>
        </tr>
        <tr>
            <td>E-mailadres</td>
            <td><input type="text" name="femailadres"></td>
        </tr>

    </table>

    <br>
    <p> Kies een opleiding:</p>
    ICT<input type="radio" name="opleiding" value="I"> <br>
    Engels<input type="radio" name="opleiding" value="E"> <br>
    Techniek <input type="radio" name="opleiding" value="T"> <br>
    Nederlands <input type="radio" name="opleiding" value="N"> <br>
    <br>
    <input type="submit" name="submit" value="Versturen">
    <input type="reset" name="sub" value="Reset">

</form>
</body>

</html>

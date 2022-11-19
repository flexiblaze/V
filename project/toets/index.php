<!DOCTYPE HTML>

<head>
    <title>
        Toets
    </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</head>
<style>
    button {
        width: auto;
        height: auto;

    }</style>
<?php


$name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name" value="<?php echo $name; ?>">
    <input type="Submit" name="" value="Submit">


    <body style="text-align:center;">

    <p id="GFG_UP" style=
    "font-size: 16px; font-weight: bold;">
    </p>


    <input type="checkbox" onclick="lightblue()" value="1" name="fooby[1][]">
    <input type="checkbox" onclick="light()" value="1" name="fooby[1][]">
    <input type="checkbox" onclick="lightyellow()" value="1" name="fooby[1][]">
    <input type="checkbox" onclick="lightgrey()" value="1" name="fooby[1][]">

</form>

<script>
    function lightblue() {
        document.body.style.backgroundColor = "lightblue";
    }

    function light() {
        document.body.style.backgroundColor = "lightcoral";
    }

    function lightyellow() {
        document.body.style.backgroundColor = "lightyellow";
    }

    function lightgrey() {
        document.body.style.backgroundColor = "lightgrey";
    }


    // the selector will match all input controls of type :checkbox
    // and attach a click event handler
    $("input:checkbox").on('click', function () {
        // in the handler, 'this' refers to the box clicked on
        var $box = $(this);
        if ($box.is(":checked")) {
            // the name of the box is retrieved using the .attr() method
            // as it is assumed and expected to be immutable
            var group = "input:checkbox[name='" + $box.attr("name") + "']";
            // the checked state of the group/box on the other hand will change
            // and the current value is retrieved using .prop() method
            $(group).prop("checked", false);
            $box.prop("checked", true);
        } else {
            $box.prop("checked", false);
        }
    });

</script>


</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mboair";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$active_tab = "home";

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_plane'])) {
        $type = $_POST['type'];
        $capacity = $_POST['capacity'];
        $usage = $_POST['usage'];

        $sql = "INSERT INTO Plane (Type, Capacity, `Usage`) VALUES ('$type', '$capacity', '$usage')";
        if ($conn->query($sql) === TRUE) {
            $message = "New plane added successfully";
        } else {
            $message = "Error: " . $sql . "<br>" . $conn->error;
        }
        $active_tab = "planes";
    } elseif (isset($_POST['add_personnel'])) {
        $name = $_POST['name'];
        $role = $_POST['role'];
        $department = $_POST['department'];

        $sql = "INSERT INTO Personnel (Name, Role, Department) VALUES ('$name', '$role', '$department')";
        if ($conn->query($sql) === TRUE) {
            $message = "New personnel added successfully";
        } else {
            $message = "Error: " . $sql . "<br>" . $conn->error;
        }
        $active_tab = "personnel";
    } elseif (isset($_POST['add_flight'])) {
        $plane_id = $_POST['plane_id'];
        $departure_time = $_POST['departure_time'];
        $arrival_time = $_POST['arrival_time'];
        $departure_airport = $_POST['departure_airport'];
        $arrival_airport = $_POST['arrival_airport'];

        $sql = "INSERT INTO Flight (PlaneID, DepartureTime, ArrivalTime, DepartureAirport, ArrivalAirport) VALUES ('$plane_id', '$departure_time', '$arrival_time', '$departure_airport', '$arrival_airport')";
        if ($conn->query($sql) === TRUE) {
            $message = "New flight added successfully";
        } else {
            $message = "Error: " . $sql . "<br>" . $conn->error;
        }
        $active_tab = "flights";
    }
}

// Fetch data
$planes = $conn->query("SELECT * FROM Plane")->fetch_all(MYSQLI_ASSOC);
$personnel = $conn->query("SELECT * FROM Personnel")->fetch_all(MYSQLI_ASSOC);
$flights = $conn->query("SELECT * FROM Flight")->fetch_all(MYSQLI_ASSOC);

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MboAir Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <a class="navbar-brand" href="#">MboAir</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?= $active_tab === 'home' ? 'active' : '' ?>" id="home-tab" data-toggle="tab" href="#home" role="tab">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $active_tab === 'planes' ? 'active' : '' ?>" id="planes-tab" data-toggle="tab" href="#planes" role="tab">Manage Planes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $active_tab === 'personnel' ? 'active' : '' ?>" id="personnel-tab" data-toggle="tab" href="#personnel" role="tab">Manage Personnel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $active_tab === 'flights' ? 'active' : '' ?>" id="flights-tab" data-toggle="tab" href="#flights" role="tab">Plan Flights</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $active_tab === 'flightplans' ? 'active' : '' ?>" id="flightplans-tab" data-toggle="tab" href="#flightplans" role="tab">View Flight Plans</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <?php if (isset($message)): ?>
        <div class="alert alert-info"><?= $message ?></div>
    <?php endif; ?>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade <?= $active_tab === 'home' ? 'show active' : '' ?>" id="home" role="tabpanel">
            <h3>Welcome to MboAir Management System</h3>
            <p>Use the tabs to manage planes, personnel, and flight plans.</p>
        </div>
        <div class="tab-pane fade <?= $active_tab === 'planes' ? 'show active' : '' ?>" id="planes" role="tabpanel">
            <h3>Manage Planes</h3>
            <form method="post">
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" id="type" name="type" required>
                </div>
                <div class="form-group">
                    <label for="capacity">Capacity</label>
                    <input type="number" class="form-control" id="capacity" name="capacity" required>
                </div>
                <div class="form-group">
                    <label for="usage">Usage</label>
                    <select class="form-control" id="usage" name="usage" required>
                        <option value="Pax">Passenger</option>
                        <option value="Cargo">Cargo</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" name="add_plane">Add Plane</button>
            </form>
            <h3 class="mt-4">Existing Planes</h3>
            <ul class="list-group">
                <?php foreach ($planes as $plane): ?>
                    <li class="list-group-item"><?= $plane['Type'] ?> - <?= $plane['Capacity'] ?> - <?= $plane['Usage'] ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="tab-pane fade <?= $active_tab === 'personnel' ? 'show active' : '' ?>" id="personnel" role="tabpanel">
            <h3>Manage Personnel</h3>
            <form method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <input type="text" class="form-control" id="role" name="role" required>
                </div>
                <div class="form-group">
                    <label for="department">Department</label>
                    <input type="text" class="form-control" id="department" name="department" required>
                </div>
                <button type="submit" class="btn btn-primary" name="add_personnel">Add Personnel</button>
            </form>
            <h3 class="mt-4">Existing Personnel</h3>
            <ul class="list-group">
                <?php foreach ($personnel as $person): ?>
                    <li class="list-group-item"><?= $person['Name'] ?> - <?= $person['Role'] ?> - <?= $person['Department'] ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="tab-pane fade <?= $active_tab === 'flights' ? 'show active' : '' ?>" id="flights" role="tabpanel">
            <h3>Plan Flights</h3>
            <form method="post">
                <div class="form-group">
                    <label for="plane_id">Plane</label>
                    <select class="form-control" id="plane_id" name="plane_id" required>
                        <?php foreach ($planes as $plane): ?>
                            <option value="<?= $plane['PlaneID'] ?>"><?= $plane['Type'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="departure_time">Departure Time</label>
                    <input type="datetime-local" class="form-control" id="departure_time" name="departure_time" required>
                </div>
                <div class="form-group">
                    <label for="arrival_time">Arrival Time</label>
                    <input type="datetime-local" class="form-control" id="arrival_time" name="arrival_time" required>
                </div>
                <div class="form-group">
                    <label for="departure_airport">Departure Airport</label>
                    <input type="text" class="form-control" id="departure_airport" name="departure_airport" required>
                </div>
                <div class="form-group">
                    <label for="arrival_airport">Arrival Airport</label>
                    <input type="text" class="form-control" id="arrival_airport" name="arrival_airport" required>
                </div>
                <button type="submit" class="btn btn-primary" name="add_flight">Plan Flight</button>
            </form>
        </div>
        <div class="tab-pane fade <?= $active_tab === 'flightplans' ? 'show active' : '' ?>" id="flightplans" role="tabpanel">
            <h3>View Flight Plans</h3>
            <ul class="list-group">
                <?php foreach ($flights as $flight): ?>
                    <li class="list-group-item"><?= $flight['PlaneID'] ?> - <?= $flight['DepartureTime'] ?> - <?= $flight['ArrivalTime'] ?> - <?= $flight['DepartureAirport'] ?> - <?= $flight['ArrivalAirport'] ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

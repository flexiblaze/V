$(document).ready(function() {
    // Fetch and display planes
    function fetchPlanes() {
        $.get('planes.php', function(data) {
            $('#planeList').html('');
            data.forEach(function(plane) {
                $('#planeList').append(`<li class="list-group-item">${plane.Type} - ${plane.Capacity} - ${plane.Usage}</li>`);
            });
        });
    }

    // Fetch and display personnel
    function fetchPersonnel() {
        $.get('personnel.php', function(data) {
            $('#personnelList').html('');
            data.forEach(function(person) {
                $('#personnelList').append(`<li class="list-group-item">${person.Name} - ${person.Role} - ${person.Department}</li>`);
            });
        });
    }

    // Fetch planes for flight planning
    function fetchPlanesForFlights() {
        $.get('planes.php', function(data) {
            $('#flightPlane').html('');
            data.forEach(function(plane) {
                $('#flightPlane').append(`<option value="${plane.PlaneID}">${plane.Type}</option>`);
            });
        });
    }

    // Handle plane form submission
    $('#addPlaneForm').submit(function(e) {
        e.preventDefault();
        const planeData = {
            Type: $('#planeType').val(),
            Capacity: $('#planeCapacity').val(),
            Usage: $('#planeUsage').val()
        };
        $.post('add_plane.php', planeData, function(response) {
            alert(response);  // Add this line to see the response from the server
            fetchPlanes();
            fetchPlanesForFlights();
            $('#addPlaneForm')[0].reset();
        });
    });

    // Handle personnel form submission
    $('#addPersonnelForm').submit(function(e) {
        e.preventDefault();
        const personnelData = {
            Name: $('#personnelName').val(),
            Role: $('#personnelRole').val(),
            Department: $('#personnelDepartment').val()
        };
        $.post('add_personnel.php', personnelData, function(response) {
            alert(response);  // Add this line to see the response from the server
            fetchPersonnel();
            $('#addPersonnelForm')[0].reset();
        });
    });

    // Handle flight form submission
    $('#addFlightForm').submit(function(e) {
        e.preventDefault();
        const flightData = {
            PlaneID: $('#flightPlane').val(),
            DepartureTime: $('#departureTime').val(),
            ArrivalTime: $('#arrivalTime').val(),
            DepartureAirport: $('#departureAirport').val(),
            ArrivalAirport: $('#arrivalAirport').val()
        };
        $.post('add_flight.php', flightData, function(response) {
            alert(response);  // Add this line to see the response from the server
            fetchFlightPlans();
            $('#addFlightForm')[0].reset();
        });
    });

    // Fetch and display flight plans
    function fetchFlightPlans() {
        $.get('flightplans.php', function(data) {
            $('#flightPlanList').html('');
            data.forEach(function(flight) {
                $('#flightPlanList').append(`<li class="list-group-item">${flight.PlaneID} - ${flight.DepartureTime} - ${flight.ArrivalTime} - ${flight.DepartureAirport} - ${flight.ArrivalAirport}</li>`);
            });
        });
    }

    // Initial fetch calls
    fetchPlanes();
    fetchPersonnel();
    fetchPlanesForFlights();
    fetchFlightPlans();
});

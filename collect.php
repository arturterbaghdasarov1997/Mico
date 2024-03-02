<h2>Booking completed</h2>

<?php
    if(isset($_POST["submit"]))
{
    $patientName = $_POST["patientName"];
    echo "Patient name: " . $patientName ."<br />";
    $doctorName = $_POST["doctorName"];
    echo "Doctor's name: " . $doctorName . "<br />";
    $depName = $_POST["depName"];
    echo "Department's name: " . $depName . "<br />";
    $number = $_POST ["number"];
    echo "Phone number: " . $number ."<br />";
    $symptoms = $_POST ["symptoms"];
    echo "Symptoms: " . $symptoms ."<br />";
    $date = $_POST ["date"];
    echo "Date: " . $date ."<br />";
}

?>
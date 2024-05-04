<?php
session_start();
include_once 'connect.php';
if(isset($_SESSION['NID']) && ($_SESSION['Role'])){
    $ID = $_SESSION['NID']; 
    $role = $_SESSION['Role'];
}
if(isset($_GET['ID'])){
    $reservationID = trim(htmlspecialchars($_GET['ID']));
    $getReservationInfo = " SELECT * FROM reservationtable WHERE ID = '$reservationID' ";
    $result = mysqli_query($conn, $getReservationInfo); 
    if($result -> num_rows > 0){
        $row = mysqli_fetch_array($result);
        $reservationPrice = $row['price'];
        $time = new DateTime();
        $reservationTime = $row['reservedDateFrom'];
        $reservedTime = new DateTime($reservationTime);
        $diff = $time ->diff($reservedTime);
        $diffHours = $diff ->format('%h');
        if ($diffHours <= 12 ){
            echo " <script>alert(' عفواً, لا يمكنك الغاء الموعد قبل 12 ساعة ');</script> ";
            header('Refresh:1 ; URL = ../reservations.php');
            die();
        } else {
            $updatePatientProfile = $conn->prepare( " UPDATE patients SET toPay = toPay - ?, reservations = reservations - 1 WHERE nationalID = ? ");
            $updateReservationStatus = $conn->prepare(" UPDATE reservationtable SET patientNID = NULL, patientName = NULL, price = NULL, isBusy = '0' WHERE ID = ?");
            $updatePatientProfile->bind_param("ds", $reservationPrice, $ID);
            $updateReservationStatus->bind_param("i", $reservationID);
            $conn->autocommit(FALSE);
            $updatePatientProfile->execute();
            $updateReservationStatus->execute();
            $conn->commit();
            echo " <script>alert(' تم الغاء الحجز بنجاح ');</script> ";
            header('Refresh:1 ; URL = ../reservations.php');
                die();
        }
    } else {
        echo " <script>alert(' لا توجد بيانات للعرض ');</script> ";
        header('Refresh:1 ; URL = ../reservations.php');
        die();
    }
}
$updatePatientProfile->close();
$updateReservationStatus->close();
$conn->close();
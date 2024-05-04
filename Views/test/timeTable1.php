<!DOCTYPE html>
<html lang='ar' dir='rtl'>
<head>
    <?php 
    include_once 'connect.php';
    include_once 'navbar.php';
    ?>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>جدول المواعيد</title>
    <!-- Render All Elements Normally -->
    <link rel='stylesheet' href='../CSS/normalize.css' />
    <!-- Font Awesome Library -->
    <link rel='stylesheet' href='../CSS/all.min.css' />
    <!-- Main Template CSS File -->
    <link rel='stylesheet' href='../CSS/timeTable.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>
    <!-- Google Fonts -->
    <link rel='preconnect' href='https://fonts.gstatic.com' />
    <link href='https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap' rel='stylesheet' />
</head>
<body>
<!-- start timetable -->
    <div class='timetable'>
        <h1 class='main-title'>
            جدول التخصصات
        </h1>
        <div class='table'>
            <div class='limiter'>
                <div class='container-table100'>
                    <div class='wrap-table100'>
                        <div class='table100 ver3 m-b-110'>
                            <table data-vertable='ver3'>
                                <thead>
                                    <tr class='row100 head'>
                                        <th class='column100'>اليوم / التخصص</th>
                                        <th class='column100'>عيون</th>
                                        <th class='column100'>أنف واذن وحنجرة</th>
                                        <th class='column100'>أسنان</th>
                                        <th class='column100'>عظام</th>
                                        <th class='column100'>أشعة</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class='row100'>
                                        <td class='column100'>السبت</td>
<!-- 
Ophthalmologist //opt
Otolaryngologist  //oto
Dentist //den
Orthopedic Physician //ort
Radiologist //rad
-->
<?php 
$currentWeek = strtotime('last saturday');
$firstOFweek = date('Y-m-d', strtotime("saturday", $currentWeek));
$lastOFweek = date('Y-m-d', strtotime("saturday +5 days", $currentWeek));
$countofoptSat = "SELECT COUNT(*) FROM timetable WHERE day = 'Sat' AND specialization = 'عيون'  AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
    $resultCount = mysqli_query($conn,$countofoptSat);
    $countoptSat = mysqli_fetch_array($resultCount)[0];
    if ($countoptSat == '0'){
            echo "<td class='column100'>--</td>";
        } else if ($countoptSat == '1'){
            $optSat1 = "SELECT doctorName FROM timetable WHERE day = 'Sat' AND specialization = 'عيون' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
            $getoptSat1= mysqli_query($conn, $optSat1);
            $optSat1 = mysqli_fetch_assoc($getoptSat1);
            echo "<td class='column100'>د/ " . $optSat1['doctorName'] . "</td>";
        } else if ($countoptSat == '2'){
            $optSat1 = "SELECT doctorName FROM timetable WHERE day = 'Sat' AND specialization = 'عيون' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
            $getoptSat1= mysqli_query($conn, $optSat1);
            $optSat1 = mysqli_fetch_assoc($getoptSat1);
            $optSat2 = "SELECT doctorName FROM timetable WHERE day = 'Sat' AND specialization = 'عيون' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1 OFFSET 1";
            $getoptSat2= mysqli_query($conn, $optSat2);
            $optSat2 = mysqli_fetch_assoc($getoptSat2);
            echo "<td class='column100'>د/ " . $optSat1['doctorName'] . "<br/> د/ " . $optSat2['doctorName'] . "</td>";
        } else {
            echo "Something went wrong";
        }
$countofotoSat = "SELECT COUNT(*) FROM timetable WHERE day = 'Sat' AND specialization = 'أنف وأذن وحنجرة'  AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
    $resultCount = mysqli_query($conn,$countofotoSat);
    $countotoSat = mysqli_fetch_array($resultCount)[0];
        if ($countotoSat == '0'){
                echo "<td class='column100'>--</td>";
            } else if ($countotoSat == '1'){
                $otoSat1 = "SELECT doctorName FROM timetable WHERE day = 'Sat' AND specialization = 'أنف وأذن وحنجرة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
                $getotoSat1= mysqli_query($conn, $otoSat1);
                $otoSat1 = mysqli_fetch_assoc($getotoSat1);
                echo "<td class='column100'>د/ " . $otoSat1['doctorName'] . "</td>";
            } else if ($countotoSat == '2'){
                $otoSat1 = "SELECT doctorName FROM timetable WHERE day = 'Sat' AND specialization = 'أنف وأذن وحنجرة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
                $getotoSat1= mysqli_query($conn, $otoSat1);
                $otoSat1 = mysqli_fetch_assoc($getotoSat1);
                $otoSat2 = "SELECT doctorName FROM timetable WHERE day = 'Sat' AND specialization = 'أنف وأذن وحنجرة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1 OFFSET 1";
                $getotoSat2= mysqli_query($conn, $otoSat2);
                $otoSat2 = mysqli_fetch_assoc($getotoSat2);
                echo "<td class='column100'>د/ " . $otoSat1['doctorName'] . "<br/> د/ " . $otoSat2['doctorName'] . "</td>";
            } else {
                echo "Something went wrong";
            }
$countofdenSat = "SELECT COUNT(*) FROM timetable WHERE day = 'Sat' AND specialization = 'أسنان'  AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
    $resultCount = mysqli_query($conn,$countofdenSat);
    $countdenSat = mysqli_fetch_array($resultCount)[0];
        if ($countdenSat == '0'){
                echo "<td class='column100'>--</td>";
            } else if ($countdenSat == '1'){
                $denSat1 = "SELECT doctorName FROM timetable WHERE day = 'Sat' AND specialization = 'أسنان' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
                $getdenSat1= mysqli_query($conn, $denSat1);
                $denSat1 = mysqli_fetch_assoc($getdenSat1);
                echo "<td class='column100'>د/ " . $denSat1['doctorName'] . "</td>";
            } else if ($countdenSat == '2'){
                $denSat1 = "SELECT doctorName FROM timetable WHERE day = 'Sat' AND specialization = 'أسنان' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
                $getdenSat1= mysqli_query($conn, $denSat1);
                $denSat1 = mysqli_fetch_assoc($getdenSat1);
                $denSat2 = "SELECT doctorName FROM timetable WHERE day = 'Sat' AND specialization = 'أسنان' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1 OFFSET 1";
                $getdenSat2= mysqli_query($conn, $denSat2);
                $denSat2 = mysqli_fetch_assoc($getdenSat2);
                echo "<td class='column100'>د/ " . $denSat1['doctorName'] . "<br/> د/ " . $denSat2['doctorName'] . "</td>";
            } else {
                echo "Something went wrong";
            }
$countofortSat = "SELECT COUNT(*) FROM timetable WHERE day = 'Sat' AND specialization = 'عظام' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
    $resultCount = mysqli_query($conn,$countofortSat);
    $countortSat = mysqli_fetch_array($resultCount)[0];
        if ($countortSat == '0'){
                echo "<td class='column100'>--</td>";
            } else if ($countortSat == '1'){
                $ortSat1 = "SELECT doctorName FROM timetable WHERE day = 'Sat' AND specialization = 'عظام' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
                $getortSat1= mysqli_query($conn, $ortSat1);
                $ortSat1 = mysqli_fetch_assoc($getortSat1);
                echo "<td class='column100'>د/ " . $ortSat1['doctorName'] . "</td>";
            } else if ($countortSat == '2'){
                $ortSat1 = "SELECT doctorName FROM timetable WHERE day = 'Sat' AND specialization = 'عظام' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
                $getortSat1= mysqli_query($conn, $ortSat1);
                $ortSat1 = mysqli_fetch_assoc($getortSat1);
                $ortSat2 = "SELECT doctorName FROM timetable WHERE day = 'Sat' AND specialization = 'عظام' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1 OFFSET 1";
                $getortSat2= mysqli_query($conn, $ortSat2);
                $ortSat2 = mysqli_fetch_assoc($getortSat2);
                echo "<td class='column100'>د/ " . $ortSat1['doctorName'] . "<br/> د/ " . $ortSat2['doctorName'] . "</td>";
            } else {
                echo "Something went wrong";
            }
$countofradSat = "SELECT COUNT(*) FROM timetable WHERE day = 'Sat' AND specialization = 'أشعة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
    $resultCount = mysqli_query($conn,$countofradSat);
    $countradSat = mysqli_fetch_array($resultCount)[0];
        if ($countradSat == '0'){
                echo "<td class='column100'>--</td>";
            } else if ($countradSat == '1'){
                $radSat1 = "SELECT doctorName FROM timetable WHERE day = 'Sat' AND specialization = 'أشعة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
                $getradSat1= mysqli_query($conn, $radSat1);
                $radSat1 = mysqli_fetch_assoc($getradSat1);
                echo "<td class='column100'>د/ " . $radSat1['doctorName'] . "</td>";
            } else if ($countradSat == '2'){
                $radSat1 = "SELECT doctorName FROM timetable WHERE day = 'Sat' AND specialization = 'أشعة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
                $getradSat1= mysqli_query($conn, $radSat1);
                $radSat1 = mysqli_fetch_assoc($getradSat1);
                $radSat2 = "SELECT doctorName FROM timetable WHERE day = 'Sat' AND specialization = 'أشعة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1 OFFSET 1";
                $getradSat2= mysqli_query($conn, $radSat2);
                $radSat2 = mysqli_fetch_assoc($getradSat2);
                echo "<td class='column100'>د/ " . $radSat1['doctorName'] . "<br/> د/ " . $radSat2['doctorName'] . "</td>";
            } else {
                echo "Something went wrong";
            }
?>
                                    </tr>
                                    <tr class='row100'>
                                        <td class='column100'>الأحد</td>
<?php
$countofoptSun = "SELECT COUNT(*) FROM timetable WHERE day = 'Sun' AND specialization = 'عيون'  AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
    $resultCount = mysqli_query($conn,$countofoptSun);
    $countoptSun = mysqli_fetch_array($resultCount)[0];
    if ($countoptSun == '0'){
            echo "<td class='column100'>--</td>";
        } else if ($countoptSun == '1'){
            $optSun1 = "SELECT doctorName FROM timetable WHERE day = 'Sun' AND specialization = 'عيون' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
            $getoptSun1= mysqli_query($conn, $optSun1);
            $optSun1 = mysqli_fetch_assoc($getoptSun1);
            echo "<td class='column100'>د/ " . $optSun1['doctorName'] . "</td>";
        } else if ($countoptSun == '2'){
            $optSun1 = "SELECT doctorName FROM timetable WHERE day = 'Sun' AND specialization = 'عيون' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
            $getoptSun1= mysqli_query($conn, $optSun1);
            $optSun1 = mysqli_fetch_assoc($getoptSun1);
            $optSun2 = "SELECT doctorName FROM timetable WHERE day = 'Sun' AND specialization = 'عيون' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1 OFFSET 1";
            $getoptSun2= mysqli_query($conn, $optSun2);
            $optSun2 = mysqli_fetch_assoc($getoptSun2);
            echo "<td class='column100'>د/ " . $optSun1['doctorName'] . "<br/> د/ " . $optSun2['doctorName'] . "</td>";
        } else {
            echo "Something went wrong";
        }
$countofotoSun = "SELECT COUNT(*) FROM timetable WHERE day = 'Sun' AND specialization = 'أنف وأذن وحنجرة'  AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
    $resultCount = mysqli_query($conn,$countofotoSun);
    $countotoSun = mysqli_fetch_array($resultCount)[0];
        if ($countotoSun == '0'){
                echo "<td class='column100'>--</td>";
            } else if ($countotoSun == '1'){
                $otoSun1 = "SELECT doctorName FROM timetable WHERE day = 'Sun' AND specialization = 'أنف وأذن وحنجرة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
                $getotoSun1= mysqli_query($conn, $otoSun1);
                $otoSun1 = mysqli_fetch_assoc($getotoSun1);
                echo "<td class='column100'>د/ " . $otoSun1['doctorName'] . "</td>";
            } else if ($countotoSun == '2'){
                $otoSun1 = "SELECT doctorName FROM timetable WHERE day = 'Sun' AND specialization = 'أنف وأذن وحنجرة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
                $getotoSun1= mysqli_query($conn, $otoSun1);
                $otoSun1 = mysqli_fetch_assoc($getotoSun1);
                $otoSun2 = "SELECT doctorName FROM timetable WHERE day = 'Sun' AND specialization = 'أنف وأذن وحنجرة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1 OFFSET 1";
                $getotoSun2= mysqli_query($conn, $otoSun2);
                $otoSun2 = mysqli_fetch_assoc($getotoSun2);
                echo "<td class='column100'>د/ " . $otoSun1['doctorName'] . "<br/> د/ " . $otoSun2['doctorName'] . "</td>";
            } else {
                echo "Something went wrong";
            }
$countofdenSun = "SELECT COUNT(*) FROM timetable WHERE day = 'Sun' AND specialization = 'أسنان'  AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
    $resultCount = mysqli_query($conn,$countofdenSun);
    $countdenSun = mysqli_fetch_array($resultCount)[0];
        if ($countdenSun == '0'){
                echo "<td class='column100'>--</td>";
            } else if ($countdenSun == '1'){
                $denSun1 = "SELECT doctorName FROM timetable WHERE day = 'Sun' AND specialization = 'أسنان' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
                $getdenSun1= mysqli_query($conn, $denSun1);
                $denSun1 = mysqli_fetch_assoc($getdenSun1);
                echo "<td class='column100'>د/ " . $denSun1['doctorName'] . "</td>";
            } else if ($countdenSun == '2'){
                $denSun1 = "SELECT doctorName FROM timetable WHERE day = 'Sun' AND specialization = 'أسنان' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
                $getdenSun1= mysqli_query($conn, $denSun1);
                $denSun1 = mysqli_fetch_assoc($getdenSun1);
                $denSun2 = "SELECT doctorName FROM timetable WHERE day = 'Sun' AND specialization = 'أسنان' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1 OFFSET 1";
                $getdenSun2= mysqli_query($conn, $denSun2);
                $denSun2 = mysqli_fetch_assoc($getdenSun2);
                echo "<td class='column100'>د/ " . $denSun1['doctorName'] . "<br/> د/ " . $denSun2['doctorName'] . "</td>";
            } else {
                echo "Something went wrong";
            }
$countofortSun = "SELECT COUNT(*) FROM timetable WHERE day = 'Sun' AND specialization = 'عظام' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
    $resultCount = mysqli_query($conn,$countofortSun);
    $countortSun = mysqli_fetch_array($resultCount)[0];
        if ($countortSun == '0'){
                echo "<td class='column100'>--</td>";
            } else if ($countortSun == '1'){
                $ortSun1 = "SELECT doctorName FROM timetable WHERE day = 'Sun' AND specialization = 'عظام' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
                $getortSun1= mysqli_query($conn, $ortSun1);
                $ortSun1 = mysqli_fetch_assoc($getortSun1);
                echo "<td class='column100'>د/ " . $ortSun1['doctorName'] . "</td>";
            } else if ($countortSun == '2'){
                $ortSun1 = "SELECT doctorName FROM timetable WHERE day = 'Sun' AND specialization = 'عظام' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
                $getortSun1= mysqli_query($conn, $ortSun1);
                $ortSun1 = mysqli_fetch_assoc($getortSun1);
                $ortSun2 = "SELECT doctorName FROM timetable WHERE day = 'Sun' AND specialization = 'عظام' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1 OFFSET 1";
                $getortSun2= mysqli_query($conn, $ortSun2);
                $ortSun2 = mysqli_fetch_assoc($getortSun2);
                echo "<td class='column100'>د/ " . $ortSun1['doctorName'] . "<br/> د/ " . $ortSun2['doctorName'] . "</td>";
            } else {
                echo "Something went wrong";
            }
$countofradSun = "SELECT COUNT(*) FROM timetable WHERE day = 'Sun' AND specialization = 'أشعة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
    $resultCount = mysqli_query($conn,$countofradSun);
    $countradSun = mysqli_fetch_array($resultCount)[0];
        if ($countradSun == '0'){
                echo "<td class='column100'>--</td>";
            } else if ($countradSun == '1'){
                $radSun1 = "SELECT doctorName FROM timetable WHERE day = 'Sun' AND specialization = 'أشعة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
                $getradSun1= mysqli_query($conn, $radSun1);
                $radSun1 = mysqli_fetch_assoc($getradSun1);
                echo "<td class='column100'>د/ " . $radSun1['doctorName'] . "</td>";
            } else if ($countradSun == '2'){
                $radSun1 = "SELECT doctorName FROM timetable WHERE day = 'Sun' AND specialization = 'أشعة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
                $getradSun1= mysqli_query($conn, $radSun1);
                $radSun1 = mysqli_fetch_assoc($getradSun1);
                $radSun2 = "SELECT doctorName FROM timetable WHERE day = 'Sun' AND specialization = 'أشعة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1 OFFSET 1";
                $getradSun2= mysqli_query($conn, $radSun2);
                $radSun2 = mysqli_fetch_assoc($getradSun2);
                echo "<td class='column100'>د/ " . $radSun1['doctorName'] . "<br/> د/ " . $radSun2['doctorName'] . "</td>";
            } else {
                echo "Something went wrong";
            }
?>
                                    </tr>
                                    <tr class='row100'>
                                        <td class='column100'>الإثنين</td>

<?php
$countofoptMon = "SELECT COUNT(*) FROM timetable WHERE day = 'Mon' AND specialization = 'عيون'  AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
    $resultCount = mysqli_query($conn,$countofoptMon);
    $countoptMon = mysqli_fetch_array($resultCount)[0];
    if ($countoptMon == '0'){
            echo "<td class='column100'>--</td>";
        } else if ($countoptMon == '1'){
            $optMon1 = "SELECT doctorName FROM timetable WHERE day = 'Mon' AND specialization = 'عيون' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
            $getoptMon1= mysqli_query($conn, $optMon1);
            $optMon1 = mysqli_fetch_assoc($getoptMon1);
            echo "<td class='column100'>د/ " . $optMon1['doctorName'] . "</td>";
        } else if ($countoptMon == '2'){
            $optMon1 = "SELECT doctorName FROM timetable WHERE day = 'Mon' AND specialization = 'عيون' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
            $getoptMon1= mysqli_query($conn, $optMon1);
            $optMon1 = mysqli_fetch_assoc($getoptMon1);
            $optMon2 = "SELECT doctorName FROM timetable WHERE day = 'Mon' AND specialization = 'عيون' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1 OFFSET 1";
            $getoptMon2= mysqli_query($conn, $optMon2);
            $optMon2 = mysqli_fetch_assoc($getoptMon2);
            echo "<td class='column100'>د/ " . $optMon1['doctorName'] . "<br/> د/ " . $optMon2['doctorName'] . "</td>";
        } else {
            echo "Something went wrong";
        }
$countofotoMon = "SELECT COUNT(*) FROM timetable WHERE day = 'Mon' AND specialization = 'أنف وأذن وحنجرة'  AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
    $resultCount = mysqli_query($conn,$countofotoMon);
    $countotoMon = mysqli_fetch_array($resultCount)[0];
        if ($countotoMon == '0'){
                echo "<td class='column100'>--</td>";
            } else if ($countotoMon == '1'){
                $otoMon1 = "SELECT doctorName FROM timetable WHERE day = 'Mon' AND specialization = 'أنف وأذن وحنجرة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
                $getotoMon1= mysqli_query($conn, $otoMon1);
                $otoMon1 = mysqli_fetch_assoc($getotoMon1);
                echo "<td class='column100'>د/ " . $otoMon1['doctorName'] . "</td>";
            } else if ($countotoMon == '2'){
                $otoMon1 = "SELECT doctorName FROM timetable WHERE day = 'Mon' AND specialization = 'أنف وأذن وحنجرة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
                $getotoMon1= mysqli_query($conn, $otoMon1);
                $otoMon1 = mysqli_fetch_assoc($getotoMon1);
                $otoMon2 = "SELECT doctorName FROM timetable WHERE day = 'Mon' AND specialization = 'أنف وأذن وحنجرة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1 OFFSET 1";
                $getotoMon2= mysqli_query($conn, $otoMon2);
                $otoMon2 = mysqli_fetch_assoc($getotoMon2);
                echo "<td class='column100'>د/ " . $otoMon1['doctorName'] . "<br/> د/ " . $otoMon2['doctorName'] . "</td>";
            } else {
                echo "Something went wrong";
            }
$countofdenMon = "SELECT COUNT(*) FROM timetable WHERE day = 'Mon' AND specialization = 'أسنان'  AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
    $resultCount = mysqli_query($conn,$countofdenMon);
    $countdenMon = mysqli_fetch_array($resultCount)[0];
        if ($countdenMon == '0'){
                echo "<td class='column100'>--</td>";
            } else if ($countdenMon == '1'){
                $denMon1 = "SELECT doctorName FROM timetable WHERE day = 'Mon' AND specialization = 'أسنان' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
                $getdenMon1= mysqli_query($conn, $denMon1);
                $denMon1 = mysqli_fetch_assoc($getdenMon1);
                echo "<td class='column100'>د/ " . $denMon1['doctorName'] . "</td>";
            } else if ($countdenMon == '2'){
                $denMon1 = "SELECT doctorName FROM timetable WHERE day = 'Mon' AND specialization = 'أسنان' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
                $getdenMon1= mysqli_query($conn, $denMon1);
                $denMon1 = mysqli_fetch_assoc($getdenMon1);
                $denMon2 = "SELECT doctorName FROM timetable WHERE day = 'Mon' AND specialization = 'أسنان' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1 OFFSET 1";
                $getdenMon2= mysqli_query($conn, $denMon2);
                $denMon2 = mysqli_fetch_assoc($getdenMon2);
                echo "<td class='column100'>د/ " . $denMon1['doctorName'] . "<br/> د/ " . $denMon2['doctorName'] . "</td>";
            } else {
                echo "Something went wrong";
            }
$countofortMon = "SELECT COUNT(*) FROM timetable WHERE day = 'Mon' AND specialization = 'عظام' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
    $resultCount = mysqli_query($conn,$countofortMon);
    $countortMon = mysqli_fetch_array($resultCount)[0];
        if ($countortMon == '0'){
                echo "<td class='column100'>--</td>";
            } else if ($countortMon == '1'){
                $ortMon1 = "SELECT doctorName FROM timetable WHERE day = 'Mon' AND specialization = 'عظام' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
                $getortMon1= mysqli_query($conn, $ortMon1);
                $ortMon1 = mysqli_fetch_assoc($getortMon1);
                echo "<td class='column100'>د/ " . $ortMon1['doctorName'] . "</td>";
            } else if ($countortMon == '2'){
                $ortMon1 = "SELECT doctorName FROM timetable WHERE day = 'Mon' AND specialization = 'عظام' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
                $getortMon1= mysqli_query($conn, $ortMon1);
                $ortMon1 = mysqli_fetch_assoc($getortMon1);
                $ortMon2 = "SELECT doctorName FROM timetable WHERE day = 'Mon' AND specialization = 'عظام' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1 OFFSET 1";
                $getortMon2= mysqli_query($conn, $ortMon2);
                $ortMon2 = mysqli_fetch_assoc($getortMon2);
                echo "<td class='column100'>د/ " . $ortMon1['doctorName'] . "<br/> د/ " . $ortMon2['doctorName'] . "</td>";
            } else {
                echo "Something went wrong";
            }
$countofradMon = "SELECT COUNT(*) FROM timetable WHERE day = 'Mon' AND specialization = 'أشعة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
    $resultCount = mysqli_query($conn,$countofradMon);
    $countradMon = mysqli_fetch_array($resultCount)[0];
        if ($countradMon == '0'){
                echo "<td class='column100'>--</td>";
            } else if ($countradMon == '1'){
                $radMon1 = "SELECT doctorName FROM timetable WHERE day = 'Mon' AND specialization = 'أشعة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
                $getradMon1= mysqli_query($conn, $radMon1);
                $radMon1 = mysqli_fetch_assoc($getradMon1);
                echo "<td class='column100'>د/ " . $radMon1['doctorName'] . "</td>";
            } else if ($countradMon == '2'){
                $radMon1 = "SELECT doctorName FROM timetable WHERE day = 'Mon' AND specialization = 'أشعة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
                $getradMon1= mysqli_query($conn, $radMon1);
                $radMon1 = mysqli_fetch_assoc($getradMon1);
                $radMon2 = "SELECT doctorName FROM timetable WHERE day = 'Mon' AND specialization = 'أشعة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1 OFFSET 1";
                $getradMon2= mysqli_query($conn, $radMon2);
                $radMon2 = mysqli_fetch_assoc($getradMon2);
                echo "<td class='column100'>د/ " . $radMon1['doctorName'] . "<br/> د/ " . $radMon2['doctorName'] . "</td>";
            } else {
                echo "Something went wrong";
            }

?>
                                    </tr>
                                    <tr class='row100'>
                                        <td class='column100'>الثلاثاء</td>
<?php
$countofoptTue = "SELECT COUNT(*) FROM timetable WHERE day = 'Tue' AND specialization = 'عيون'  AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
    $resultCount = mysqli_query($conn,$countofoptTue);
    $countoptTue = mysqli_fetch_array($resultCount)[0];
    if ($countoptTue == '0'){
            echo "<td class='column100'>--</td>";
        } else if ($countoptTue == '1'){
            $optTue1 = "SELECT doctorName FROM timetable WHERE day = 'Tue' AND specialization = 'عيون' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
            $getoptTue1= mysqli_query($conn, $optTue1);
            $optTue1 = mysqli_fetch_assoc($getoptTue1);
            echo "<td class='column100'>د/ " . $optTue1['doctorName'] . "</td>";
        } else if ($countoptTue == '2'){
            $optTue1 = "SELECT doctorName FROM timetable WHERE day = 'Tue' AND specialization = 'عيون' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
            $getoptTue1= mysqli_query($conn, $optTue1);
            $optTue1 = mysqli_fetch_assoc($getoptTue1);
            $optTue2 = "SELECT doctorName FROM timetable WHERE day = 'Tue' AND specialization = 'عيون' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1 OFFSET 1";
            $getoptTue2= mysqli_query($conn, $optTue2);
            $optTue2 = mysqli_fetch_assoc($getoptTue2);
            echo "<td class='column100'>د/ " . $optTue1['doctorName'] . "<br/> د/ " . $optTue2['doctorName'] . "</td>";
        } else {
            echo "Something went wrong";
        }
$countofotoTue = "SELECT COUNT(*) FROM timetable WHERE day = 'Tue' AND specialization = 'أنف وأذن وحنجرة'  AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
    $resultCount = mysqli_query($conn,$countofotoTue);
    $countotoTue = mysqli_fetch_array($resultCount)[0];
        if ($countotoTue == '0'){
                echo "<td class='column100'>--</td>";
            } else if ($countotoTue == '1'){
                $otoTue1 = "SELECT doctorName FROM timetable WHERE day = 'Tue' AND specialization = 'أنف وأذن وحنجرة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
                $getotoTue1= mysqli_query($conn, $otoTue1);
                $otoTue1 = mysqli_fetch_assoc($getotoTue1);
                echo "<td class='column100'>د/ " . $otoTue1['doctorName'] . "</td>";
            } else if ($countotoTue == '2'){
                $otoTue1 = "SELECT doctorName FROM timetable WHERE day = 'Tue' AND specialization = 'أنف وأذن وحنجرة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
                $getotoTue1= mysqli_query($conn, $otoTue1);
                $otoTue1 = mysqli_fetch_assoc($getotoTue1);
                $otoTue2 = "SELECT doctorName FROM timetable WHERE day = 'Tue' AND specialization = 'أنف وأذن وحنجرة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1 OFFSET 1";
                $getotoTue2= mysqli_query($conn, $otoTue2);
                $otoTue2 = mysqli_fetch_assoc($getotoTue2);
                echo "<td class='column100'>د/ " . $otoTue1['doctorName'] . "<br/> د/ " . $otoTue2['doctorName'] . "</td>";
            } else {
                echo "Something went wrong";
            }

$countofdenTue = "SELECT COUNT(*) FROM timetable WHERE day = 'Tue' AND specialization = 'أسنان'  AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
    $resultCount = mysqli_query($conn,$countofdenTue);
    $countdenTue = mysqli_fetch_array($resultCount)[0];
        if ($countdenTue == '0'){
                echo "<td class='column100'>--</td>";
            } else if ($countdenTue == '1'){
                $denTue1 = "SELECT doctorName FROM timetable WHERE day = 'Tue' AND specialization = 'أسنان' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
                $getdenTue1= mysqli_query($conn, $denTue1);
                $denTue1 = mysqli_fetch_assoc($getdenTue1);
                echo "<td class='column100'>د/ " . $denTue1['doctorName'] . "</td>";
            } else if ($countdenTue == '2'){
                $denTue1 = "SELECT doctorName FROM timetable WHERE day = 'Tue' AND specialization = 'أسنان' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
                $getdenTue1= mysqli_query($conn, $denTue1);
                $denTue1 = mysqli_fetch_assoc($getdenTue1);
                $denTue2 = "SELECT doctorName FROM timetable WHERE day = 'Tue' AND specialization = 'أسنان' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1 OFFSET 1";
                $getdenTue2= mysqli_query($conn, $denTue2);
                $denTue2 = mysqli_fetch_assoc($getdenTue2);
                echo "<td class='column100'>د/ " . $denTue1['doctorName'] . "<br/> د/ " . $denTue2['doctorName'] . "</td>";
            } else {
                echo "Something went wrong";
            }
$countofortTue = "SELECT COUNT(*) FROM timetable WHERE day = 'Tue' AND specialization = 'عظام' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
    $resultCount = mysqli_query($conn,$countofortTue);
    $countortTue = mysqli_fetch_array($resultCount)[0];
        if ($countortTue == '0'){
                echo "<td class='column100'>--</td>";
            } else if ($countortTue == '1'){
                $ortTue1 = "SELECT doctorName FROM timetable WHERE day = 'Tue' AND specialization = 'عظام' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
                $getortTue1= mysqli_query($conn, $ortTue1);
                $ortTue1 = mysqli_fetch_assoc($getortTue1);
                echo "<td class='column100'>د/ " . $ortTue1['doctorName'] . "</td>";
            } else if ($countortTue == '2'){
                $ortTue1 = "SELECT doctorName FROM timetable WHERE day = 'Tue' AND specialization = 'عظام' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
                $getortTue1= mysqli_query($conn, $ortTue1);
                $ortTue1 = mysqli_fetch_assoc($getortTue1);
                $ortTue2 = "SELECT doctorName FROM timetable WHERE day = 'Tue' AND specialization = 'عظام' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1 OFFSET 1";
                $getortTue2= mysqli_query($conn, $ortTue2);
                $ortTue2 = mysqli_fetch_assoc($getortTue2);
                echo "<td class='column100'>د/ " . $ortTue1['doctorName'] . "<br/> د/ " . $ortTue2['doctorName'] . "</td>";
            } else {
                echo "Something went wrong";
            }
$countofradTue = "SELECT COUNT(*) FROM timetable WHERE day = 'Tue' AND specialization = 'أشعة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
    $resultCount = mysqli_query($conn,$countofradTue);
    $countradTue = mysqli_fetch_array($resultCount)[0];
        if ($countradTue == '0'){
                echo "<td class='column100'>--</td>";
            } else if ($countradTue == '1'){
                $radTue1 = "SELECT doctorName FROM timetable WHERE day = 'Tue' AND specialization = 'أشعة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
                $getradTue1= mysqli_query($conn, $radTue1);
                $radTue1 = mysqli_fetch_assoc($getradTue1);
                echo "<td class='column100'>د/ " . $radTue1['doctorName'] . "</td>";
            } else if ($countradTue == '2'){
                $radTue1 = "SELECT doctorName FROM timetable WHERE day = 'Tue' AND specialization = 'أشعة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
                $getradTue1= mysqli_query($conn, $radTue1);
                $radTue1 = mysqli_fetch_assoc($getradTue1);
                $radTue2 = "SELECT doctorName FROM timetable WHERE day = 'Tue' AND specialization = 'أشعة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1 OFFSET 1";
                $getradTue2= mysqli_query($conn, $radTue2);
                $radTue2 = mysqli_fetch_assoc($getradTue2);
                echo "<td class='column100'>د/ " . $radTue1['doctorName'] . "<br/> د/ " . $radTue2['doctorName'] . "</td>";
            } else {
                echo "Something went wrong";
            }


?>
                                    </tr>
                                    <tr class='row100'>
                                        <td class='column100'>الأربعاء</td>
<?php
$countofoptWed = "SELECT COUNT(*) FROM timetable WHERE day = 'Wed' AND specialization = 'عيون'  AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
    $resultCount = mysqli_query($conn,$countofoptWed);
    $countoptWed = mysqli_fetch_array($resultCount)[0];
    if ($countoptWed == '0'){
            echo "<td class='column100'>--</td>";
        } else if ($countoptWed == '1'){
            $optWed1 = "SELECT doctorName FROM timetable WHERE day = 'Wed' AND specialization = 'عيون' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
            $getoptWed1= mysqli_query($conn, $optWed1);
            $optWed1 = mysqli_fetch_assoc($getoptWed1);
            echo "<td class='column100'>د/ " . $optWed1['doctorName'] . "</td>";
        } else if ($countoptWed == '2'){
            $optWed1 = "SELECT doctorName FROM timetable WHERE day = 'Wed' AND specialization = 'عيون' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
            $getoptWed1= mysqli_query($conn, $optWed1);
            $optWed1 = mysqli_fetch_assoc($getoptWed1);
            $optWed2 = "SELECT doctorName FROM timetable WHERE day = 'Wed' AND specialization = 'عيون' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1 OFFSET 1";
            $getoptWed2= mysqli_query($conn, $optWed2);
            $optWed2 = mysqli_fetch_assoc($getoptWed2);
            echo "<td class='column100'>د/ " . $optWed1['doctorName'] . "<br/> د/ " . $optWed2['doctorName'] . "</td>";
        } else {
            echo "Something went wrong";
        }
$countofotoWed = "SELECT COUNT(*) FROM timetable WHERE day = 'Wed' AND specialization = 'أنف وأذن وحنجرة'  AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
    $resultCount = mysqli_query($conn,$countofotoWed);
    $countotoWed = mysqli_fetch_array($resultCount)[0];
        if ($countotoWed == '0'){
                echo "<td class='column100'>--</td>";
            } else if ($countotoWed == '1'){
                $otoWed1 = "SELECT doctorName FROM timetable WHERE day = 'Wed' AND specialization = 'أنف وأذن وحنجرة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
                $getotoWed1= mysqli_query($conn, $otoWed1);
                $otoWed1 = mysqli_fetch_assoc($getotoWed1);
                echo "<td class='column100'>د/ " . $otoWed1['doctorName'] . "</td>";
            } else if ($countotoWed == '2'){
                $otoWed1 = "SELECT doctorName FROM timetable WHERE day = 'Wed' AND specialization = 'أنف وأذن وحنجرة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
                $getotoWed1= mysqli_query($conn, $otoWed1);
                $otoWed1 = mysqli_fetch_assoc($getotoWed1);
                $otoWed2 = "SELECT doctorName FROM timetable WHERE day = 'Wed' AND specialization = 'أنف وأذن وحنجرة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1 OFFSET 1";
                $getotoWed2= mysqli_query($conn, $otoWed2);
                $otoWed2 = mysqli_fetch_assoc($getotoWed2);
                echo "<td class='column100'>د/ " . $otoWed1['doctorName'] . "<br/> د/ " . $otoWed2['doctorName'] . "</td>";
            } else {
                echo "Something went wrong";
            }
$countofdenWed = "SELECT COUNT(*) FROM timetable WHERE day = 'Wed' AND specialization = 'أسنان'  AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
    $resultCount = mysqli_query($conn,$countofdenWed);
    $countdenWed = mysqli_fetch_array($resultCount)[0];
        if ($countdenWed == '0'){
                echo "<td class='column100'>--</td>";
            } else if ($countdenWed == '1'){
                $denWed1 = "SELECT doctorName FROM timetable WHERE day = 'Wed' AND specialization = 'أسنان' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
                $getdenWed1= mysqli_query($conn, $denWed1);
                $denWed1 = mysqli_fetch_assoc($getdenWed1);
                echo "<td class='column100'>د/ " . $denWed1['doctorName'] . "</td>";
            } else if ($countdenWed == '2'){
                $denWed1 = "SELECT doctorName FROM timetable WHERE day = 'Wed' AND specialization = 'أسنان' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
                $getdenWed1= mysqli_query($conn, $denWed1);
                $denWed1 = mysqli_fetch_assoc($getdenWed1);
                $denWed2 = "SELECT doctorName FROM timetable WHERE day = 'Wed' AND specialization = 'أسنان' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1 OFFSET 1";
                $getdenWed2= mysqli_query($conn, $denWed2);
                $denWed2 = mysqli_fetch_assoc($getdenWed2);
                echo "<td class='column100'>د/ " . $denWed1['doctorName'] . "<br/> د/ " . $denWed2['doctorName'] . "</td>";
            } else {
                echo "Something went wrong";
            }
$countofortWed = "SELECT COUNT(*) FROM timetable WHERE day = 'Wed' AND specialization = 'عظام' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
    $resultCount = mysqli_query($conn,$countofortWed);
    $countortWed = mysqli_fetch_array($resultCount)[0];
        if ($countortWed == '0'){
                echo "<td class='column100'>--</td>";
            } else if ($countortWed == '1'){
                $ortWed1 = "SELECT doctorName FROM timetable WHERE day = 'Wed' AND specialization = 'عظام' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
                $getortWed1= mysqli_query($conn, $ortWed1);
                $ortWed1 = mysqli_fetch_assoc($getortWed1);
                echo "<td class='column100'>د/ " . $ortWed1['doctorName'] . "</td>";
            } else if ($countortWed == '2'){
                $ortWed1 = "SELECT doctorName FROM timetable WHERE day = 'Wed' AND specialization = 'عظام' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
                $getortWed1= mysqli_query($conn, $ortWed1);
                $ortWed1 = mysqli_fetch_assoc($getortWed1);
                $ortWed2 = "SELECT doctorName FROM timetable WHERE day = 'Wed' AND specialization = 'عظام' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1 OFFSET 1";
                $getortWed2= mysqli_query($conn, $ortWed2);
                $ortWed2 = mysqli_fetch_assoc($getortWed2);
                echo "<td class='column100'>د/ " . $ortWed1['doctorName'] . "<br/> د/ " . $ortWed2['doctorName'] . "</td>";
            } else {
                echo "Something went wrong";
            }
$countofradWed = "SELECT COUNT(*) FROM timetable WHERE day = 'Wed' AND specialization = 'أشعة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
    $resultCount = mysqli_query($conn,$countofradWed);
    $countradWed = mysqli_fetch_array($resultCount)[0];
        if ($countradWed == '0'){
                echo "<td class='column100'>--</td>";
            } else if ($countradWed == '1'){
                $radWed1 = "SELECT doctorName FROM timetable WHERE day = 'Wed' AND specialization = 'أشعة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
                $getradWed1= mysqli_query($conn, $radWed1);
                $radWed1 = mysqli_fetch_assoc($getradWed1);
                echo "<td class='column100'>د/ " . $radWed1['doctorName'] . "</td>";
            } else if ($countradWed == '2'){
                $radWed1 = "SELECT doctorName FROM timetable WHERE day = 'Wed' AND specialization = 'أشعة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
                $getradWed1= mysqli_query($conn, $radWed1);
                $radWed1 = mysqli_fetch_assoc($getradWed1);
                $radWed2 = "SELECT doctorName FROM timetable WHERE day = 'Wed' AND specialization = 'أشعة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1 OFFSET 1";
                $getradWed2= mysqli_query($conn, $radWed2);
                $radWed2 = mysqli_fetch_assoc($getradWed2);
                echo "<td class='column100'>د/ " . $radWed1['doctorName'] . "<br/> د/ " . $radWed2['doctorName'] . "</td>";
            } else {
                echo "Something went wrong";
            }


?>
                                    </tr>
                                    <tr class='row100'>
                                        <td class='column100'>الخميس</td>
<?php
$countofoptThu = "SELECT COUNT(*) FROM timetable WHERE day = 'Thu' AND specialization = 'عيون'  AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
    $resultCount = mysqli_query($conn,$countofoptThu);
    $countoptThu = mysqli_fetch_array($resultCount)[0];
    if ($countoptThu == '0'){
            echo "<td class='column100'>--</td>";
        } else if ($countoptThu == '1'){
            $optThu1 = "SELECT doctorName FROM timetable WHERE day = 'Thu' AND specialization = 'عيون' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
            $getoptThu1= mysqli_query($conn, $optThu1);
            $optThu1 = mysqli_fetch_assoc($getoptThu1);
            echo "<td class='column100'>د/ " . $optThu1['doctorName'] . "</td>";
        } else if ($countoptThu == '2'){
            $optThu1 = "SELECT doctorName FROM timetable WHERE day = 'Thu' AND specialization = 'عيون' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
            $getoptThu1= mysqli_query($conn, $optThu1);
            $optThu1 = mysqli_fetch_assoc($getoptThu1);
            $optThu2 = "SELECT doctorName FROM timetable WHERE day = 'Thu' AND specialization = 'عيون' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1 OFFSET 1";
            $getoptThu2= mysqli_query($conn, $optThu2);
            $optThu2 = mysqli_fetch_assoc($getoptThu2);
            echo "<td class='column100'>د/ " . $optThu1['doctorName'] . "<br/> د/ " . $optThu2['doctorName'] . "</td>";
        } else {
            echo "Something went wrong";
        }
$countofotoThu = "SELECT COUNT(*) FROM timetable WHERE day = 'Thu' AND specialization = 'أنف وأذن وحنجرة'  AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
    $resultCount = mysqli_query($conn,$countofotoThu);
    $countotoThu = mysqli_fetch_array($resultCount)[0];
        if ($countotoThu == '0'){
                echo "<td class='column100'>--</td>";
            } else if ($countotoThu == '1'){
                $otoThu1 = "SELECT doctorName FROM timetable WHERE day = 'Thu' AND specialization = 'أنف وأذن وحنجرة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
                $getotoThu1= mysqli_query($conn, $otoThu1);
                $otoThu1 = mysqli_fetch_assoc($getotoThu1);
                echo "<td class='column100'>د/ " . $otoThu1['doctorName'] . "</td>";
            } else if ($countotoThu == '2'){
                $otoThu1 = "SELECT doctorName FROM timetable WHERE day = 'Thu' AND specialization = 'أنف وأذن وحنجرة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
                $getotoThu1= mysqli_query($conn, $otoThu1);
                $otoThu1 = mysqli_fetch_assoc($getotoThu1);
                $otoThu2 = "SELECT doctorName FROM timetable WHERE day = 'Thu' AND specialization = 'أنف وأذن وحنجرة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1 OFFSET 1";
                $getotoThu2= mysqli_query($conn, $otoThu2);
                $otoThu2 = mysqli_fetch_assoc($getotoThu2);
                echo "<td class='column100'>د/ " . $otoThu1['doctorName'] . "<br/> د/ " . $otoThu2['doctorName'] . "</td>";
            } else {
                echo "Something went wrong";
            }
$countofdenThu = "SELECT COUNT(*) FROM timetable WHERE day = 'Thu' AND specialization = 'أسنان'  AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
    $resultCount = mysqli_query($conn,$countofdenThu);
    $countdenThu = mysqli_fetch_array($resultCount)[0];
        if ($countdenThu == '0'){
                echo "<td class='column100'>--</td>";
            } else if ($countdenThu == '1'){
                $denThu1 = "SELECT doctorName FROM timetable WHERE day = 'Thu' AND specialization = 'أسنان' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
                $getdenThu1= mysqli_query($conn, $denThu1);
                $denThu1 = mysqli_fetch_assoc($getdenThu1);
                echo "<td class='column100'>د/ " . $denThu1['doctorName'] . "</td>";
            } else if ($countdenThu == '2'){
                $denThu1 = "SELECT doctorName FROM timetable WHERE day = 'Thu' AND specialization = 'أسنان' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
                $getdenThu1= mysqli_query($conn, $denThu1);
                $denThu1 = mysqli_fetch_assoc($getdenThu1);
                $denThu2 = "SELECT doctorName FROM timetable WHERE day = 'Thu' AND specialization = 'أسنان' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1 OFFSET 1";
                $getdenThu2= mysqli_query($conn, $denThu2);
                $denThu2 = mysqli_fetch_assoc($getdenThu2);
                echo "<td class='column100'>د/ " . $denThu1['doctorName'] . "<br/> د/ " . $denThu2['doctorName'] . "</td>";
            } else {
                echo "Something went wrong";
            }
$countofortThu = "SELECT COUNT(*) FROM timetable WHERE day = 'Thu' AND specialization = 'عظام' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
    $resultCount = mysqli_query($conn,$countofortThu);
    $countortThu = mysqli_fetch_array($resultCount)[0];
        if ($countortThu == '0'){
                echo "<td class='column100'>--</td>";
            } else if ($countortThu == '1'){
                $ortThu1 = "SELECT doctorName FROM timetable WHERE day = 'Thu' AND specialization = 'عظام' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
                $getortThu1= mysqli_query($conn, $ortThu1);
                $ortThu1 = mysqli_fetch_assoc($getortThu1);
                echo "<td class='column100'>د/ " . $ortThu1['doctorName'] . "</td>";
            } else if ($countortThu == '2'){
                $ortThu1 = "SELECT doctorName FROM timetable WHERE day = 'Thu' AND specialization = 'عظام' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
                $getortThu1= mysqli_query($conn, $ortThu1);
                $ortThu1 = mysqli_fetch_assoc($getortThu1);
                $ortThu2 = "SELECT doctorName FROM timetable WHERE day = 'Thu' AND specialization = 'عظام' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1 OFFSET 1";
                $getortThu2= mysqli_query($conn, $ortThu2);
                $ortThu2 = mysqli_fetch_assoc($getortThu2);
                echo "<td class='column100'>د/ " . $ortThu1['doctorName'] . "<br/> د/ " . $ortThu2['doctorName'] . "</td>";
            } else {
                echo "Something went wrong";
            }
$countofradThu = "SELECT COUNT(*) FROM timetable WHERE day = 'Thu' AND specialization = 'أشعة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
    $resultCount = mysqli_query($conn,$countofradThu);
    $countradThu = mysqli_fetch_array($resultCount)[0];
        if ($countradThu == '0'){
                echo "<td class='column100'>--</td>";
            } else if ($countradThu == '1'){
                $radThu1 = "SELECT doctorName FROM timetable WHERE day = 'Thu' AND specialization = 'أشعة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek'";
                $getradThu1= mysqli_query($conn, $radThu1);
                $radThu1 = mysqli_fetch_assoc($getradThu1);
                echo "<td class='column100'>د/ " . $radThu1['doctorName'] . "</td>";
            } else if ($countradThu == '2'){
                $radThu1 = "SELECT doctorName FROM timetable WHERE day = 'Thu' AND specialization = 'أشعة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
                $getradThu1= mysqli_query($conn, $radThu1);
                $radThu1 = mysqli_fetch_assoc($getradThu1);
                $radThu2 = "SELECT doctorName FROM timetable WHERE day = 'Thu' AND specialization = 'أشعة' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1 OFFSET 1";
                $getradThu2= mysqli_query($conn, $radThu2);
                $radThu2 = mysqli_fetch_assoc($getradThu2);
                echo "<td class='column100'>د/ " . $radThu1['doctorName'] . "<br/> د/ " . $radThu2['doctorName'] . "</td>";
            } else {
                echo "Something went wrong";
            }
?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end timetable -->
</body>
</html>
<?php 
include_once 'footer.php';
?>
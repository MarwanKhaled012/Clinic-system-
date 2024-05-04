<?php
session_start();
include_once 'connect.php';
if(isset($_SESSION['NID']) && ($_SESSION['Role'])){
    $ID = $_SESSION['NID']; 
    $role = $_SESSION['Role'];
}  
$today = date('Y-m-d');
$currentWeek = strtotime('last saturday');
$lastOFweek = date('Y-m-d', strtotime("saturday +5 days", $currentWeek));
?>
<?php
    $getDays = "SELECT currentWeek from timetable WHERE ";
?>
<html lang='ar' dir='rtl'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='../CSS/all.min.css'>
    <link rel='stylesheet' href='../CSS/normalize.css'>
    <link rel='stylesheet' href='../CSS/reservation.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>
    <link rel='preconnect' href='https://fonts.gstatic.com' />
    <link href='https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap' rel='stylesheet' />
    <title>Clinic</title>
</head>

<body>
    <div class='container'>
        <div class='reservation'>
            <div class='book'>
                <div class='reserve'>
                    <form action='' method=''>
                        <label> اليوم: </label> 
                        <?php echo"
                        <input type = 'date' id = 'fdate' min = '$today' max = '$lastOFweek' name = 'reserveDate' onchange = 'myDate()' required>
                        <input  id = 'fday' name = 'dayAR' disabled>
                        "; ?>
                        <label>التخصص: <select onchange='location= this.value;' name='specialization'>
                            <option></option>
                            <?php
                                $getSpecialization = "SELECT DISTINCT specialization from timetable WHERE currentWeek BETWEEN '$today' AND '$lastOFweek'";
                                $resultgetSpecialization = mysqli_query($conn, $getSpecialization);
                                if (!$resultgetSpecialization) {
                                    die("Error getting data from database" . $connection->error);
                                }
                                while ($row = $resultgetSpecialization->fetch_assoc()) {
                                    echo "<option value= 'reservation.php?spec=" . $row['specialization'] . "'>" . $row['specialization'] . "</option>"; 
                                }
                            ?>
                    </select></label>
                    </form>
                </div>
            </div>
    <script src='../JS/reserve.js'></script>
</body>
</html>
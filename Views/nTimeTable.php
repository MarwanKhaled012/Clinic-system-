<?php
session_start();
include_once 'handlers/connect.php';
if(isset($_SESSION['NID']) && ($_SESSION['Role'])){
    $ID = $_SESSION['NID']; 
    $role = $_SESSION['Role'];
}
$validRoles = array(100);
if (!in_array($role,$validRoles)){
    echo " <script>alert(' غير مسموح لك بالدخول ');</script> ";
    header('Refresh:1 ; URL = home.php');
    die($conn->error);
  }
$nextWeek = strtotime('monday next week');
$firstOFweek = date('Y-m-d', strtotime("monday", $nextWeek));
$lastOFweek = date('Y-m-d', strtotime("monday +6 days", $nextWeek));
?>
<!DOCTYPE html>
<html lang='ar' dir='rtl'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='../CSS/nTimeTable.css'>
    <title>جدول الاسبوع التالي</title>
</head>
<!-- // Ophthalmologist //opt
// Otolaryngologist  //oto
// Dentist //den
// Dermatologist //der
// Diabetes //dia -->
<?php
  echo "
<body>";
include_once 'navbar.php';
echo"
<div class='timeTable'>
<div class='table100 ver'>
<table class=''>
      <thead>
      <tr class='head'>
      <th>التخصص/اليوم</th>
          <th>السبت</th>
          <th>الاحد</th>
          <th>الاثنين</th>
          <th>الثلاثاء</th>
          <th>الاربعاء</th>
          <th>الخميس</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>عيون</th>
          <td>
          <div id='SATOpt''></div>
          </td>
          <td>
            <div id='SUNOpt'></div>
          </td>
          <td>
            <div id='MONOpt'></div>
          </td>
          <td>
            <div id='TUEOpt'></div>
          </td>
          <td>
            <div id='WEDOpt'></div>
          </td>
          <td>
            <div id='THUOpt'></div>
          </td>
        </tr>
        <tr>
          <th>أنف وأذن وحنجرة</th>
          <td>
            <div id='SATOto'></div>
          </td>
          <td>
            <div id='SUNOto'></div>
          </td>
          <td>
            <div id='MONOto'></div>
          </td>
          <td>
            <div id='TUEOto'></div>
          </td>
          <td>
            <div id='WEDOto'></div>
          </td>
          <td>
            <div id='THUOto'></div>
          </td>
        </tr>
        <tr>
          <th>أسنان</th>
          <td>
            <div id='SATDen'></div>
          </td>
          <td>
            <div id='SUNDen'></div>
          </td>
          <td>
            <div id='MONDen'></div>
          </td>
          <td>
            <div id='TUEDen'></div>
          </td>
          <td>
            <div id='WEDDen'></div>
          </td>
          <td>
            <div id='THUDen'></div>
          </td>
        </tr>
        <tr>
          <th>جلدية</th>
          <td>
            <div id='SATDer'></div>
          </td>
          <td>
            <div id='SUNDer'></div>
          </td>
          <td>
            <div id='MONDer'></div>
          </td>
          <td>
            <div id='TUEDer'></div>
          </td>
          <td>
            <div id='WEDDer'></div>
          </td>
          <td>
            <div id='THUDer'></div>
          </td>
        </tr>
        <tr>
          <th>أمراض باطنة</th>
          <td>
            <div id='SATDia'></div>
          </td>
          <td>
            <div id='SUNDia'></div>
          </td>
          <td>
            <div id='MONDia'></div>
          </td>
          <td>
            <div id='TUEDia'></div>
          </td>
          <td>
            <div id='WEDDia'></div>
          </td>
          <td>
            <div id='THUDia'></div>
          </td>
        </tr>
      </tbody>
    </table>
    <div class = 'links'>
      <a href='addNTimeTable.php?edit=add'>اضافة</a>
      <a href='deleteNTimeTable.php?edit=delete'>حذف</a>
      <a id='monday' href='handlers/handleUpdateTimeTable.php'>تحديث</a>
    </div>
  </div>
  </div>
";
  $queryArray = array(
    array('day' => 'SATOpt', 'reserveDay' => 'Sat', 'specialization' => 'عيون'), array('day' => 'SATOto', 'reserveDay' => 'Sat', 'specialization' => 'أنف وأذن وحنجرة'), array('day' => 'SATDen', 'reserveDay' => 'Sat', 'specialization' => 'أسنان'), array('day' => 'SATDer', 'reserveDay' => 'Sat', 'specialization' => 'جلدية'), array('day' => 'SATDia', 'reserveDay' => 'Sat', 'specialization' => 'أمراض باطنة'),
    array('day' => 'SUNOpt', 'reserveDay' => 'Sun', 'specialization' => 'عيون'), array('day' => 'SUNOto', 'reserveDay' => 'Sun', 'specialization' => 'أنف وأذن وحنجرة'), array('day' => 'SUNDen', 'reserveDay' => 'Sun', 'specialization' => 'أسنان'), array('day' => 'SUNDer', 'reserveDay' => 'Sun', 'specialization' => 'جلدية'), array('day' => 'SUNDia', 'reserveDay' => 'Sun', 'specialization' => 'أمراض باطنة'),
    array('day' => 'MONOpt', 'reserveDay' => 'Mon', 'specialization' => 'عيون'), array('day' => 'MONOto', 'reserveDay' => 'Mon', 'specialization' => 'أنف وأذن وحنجرة'), array('day' => 'MONDen', 'reserveDay' => 'Mon', 'specialization' => 'أسنان'), array('day' => 'MONDer', 'reserveDay' => 'Mon', 'specialization' => 'جلدية'), array('day' => 'MONDia', 'reserveDay' => 'Mon', 'specialization' => 'أمراض باطنة'),
    array('day' => 'TUEOpt', 'reserveDay' => 'Tue', 'specialization' => 'عيون'), array('day' => 'TUEOto', 'reserveDay' => 'Tue', 'specialization' => 'أنف وأذن وحنجرة'), array('day' => 'TUEDen', 'reserveDay' => 'Tue', 'specialization' => 'أسنان'), array('day' => 'TUEDer', 'reserveDay' => 'Tue', 'specialization' => 'جلدية'), array('day' => 'TUEDia', 'reserveDay' => 'Tue', 'specialization' => 'أمراض باطنة'),
    array('day' => 'WEDOpt', 'reserveDay' => 'Wed', 'specialization' => 'عيون'), array('day' => 'WEDOto', 'reserveDay' => 'Wed', 'specialization' => 'أنف وأذن وحنجرة'), array('day' => 'WEDDen', 'reserveDay' => 'Wed', 'specialization' => 'أسنان'), array('day' => 'WEDDer', 'reserveDay' => 'Wed', 'specialization' => 'جلدية'), array('day' => 'WEDDia', 'reserveDay' => 'Wed', 'specialization' => 'أمراض باطنة'),
    array('day' => 'THUOpt', 'reserveDay' => 'Thu', 'specialization' => 'عيون'), array('day' => 'THUOto', 'reserveDay' => 'Thu', 'specialization' => 'أنف وأذن وحنجرة'), array('day' => 'THUDen', 'reserveDay' => 'Thu', 'specialization' => 'أسنان'), array('day' => 'THUDer', 'reserveDay' => 'Thu', 'specialization' => 'جلدية'), array('day' => 'THUDia', 'reserveDay' => 'Thu', 'specialization' => 'أمراض باطنة')
  );
  foreach ($queryArray as $d => $day) {
    $query = "SELECT specialization, doctorName, doctorID FROM timetable
    WHERE day ='" . $day['reserveDay'] . "' AND specialization ='" . $day['specialization'] . "' AND nextWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "
            <script>
                document.getElementById('$day[day]').innerHTML = '$row[doctorName]';
            </script>
        ";
    }
  }

include_once 'footer.php';
  $conn->close();
  ?>
</body>
<script>
var today = new Date();
if (today.getDay() !== 1) {
  document.getElementById("monday").style.display = "none";
}
</script>
</html>
<!DOCTYPE html>
<html lang='ar' dir='rtl'>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel=stylesheet href="../CSS/timeTable.css">
    <title> جدول العيادة </title>
</head>

<body>
    <?php
  session_start();
      if(isset($_SESSION['NID']) && ($_SESSION['Role'])){
          $ID = $_SESSION['NID']; 
          $role = $_SESSION['Role'];
          $validRoles = array(100,4,3,2,1);
          if (in_array($role,$validRoles)){
              include_once 'navbar.php'; 
          }
      } else {
          $role = 5;
          include_once 'navbarNONUSER.php'; 
      }
  include_once 'handlers/connect.php';
  $currentWeek = strtotime('monday this week');
  $firstOFweek = date('Y-m-d', strtotime("monday", $currentWeek));
  $lastOFweek = date('Y-m-d', strtotime("monday +6 days", $currentWeek));
// Ophthalmologist //opt
// Otolaryngologist  //oto
// Dentist //den
// Dermatologist //der
// Diabetes //dia
  echo "
  <div class='timeTable'>
  <div class='asterisk'>
  <p>اضغط على اسم الدكتور المراد حجز موعد معه</p>
  </div>
  <div class='table100 ver'>
<table>
      <thead>
      <tr class='head'>
          <th>التخصص/اليوم</th>
          <th>السبت</th>
          <th>الأحد</th>
          <th>الاثنين</th>
          <th>الثلاثاء</th>
          <th>الأربعاء</th>
          <th>الخميس</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>عيون</th>
          <td>
            <a id='SATOpt1' class = 'reserve' href=''> 
            <div id='SATOpt'></div> </a>
          </td>
          <td>
            <a id='SUNOpt1' class = 'reserve' href=''> 
            <div id='SUNOpt'></div> </a>
          </td>
          <td>
            <a id='MONOpt1' class = 'reserve' href=''> 
            <div id='MONOpt'></div> </a>
          </td>
          <td>
            <a id='TUEOpt1' class = 'reserve' href=''> 
            <div id='TUEOpt'></div> </a>
          </td>
          <td>
            <a id='WEDOpt1' class = 'reserve' href=''> 
            <div id='WEDOpt'></div> </a>
          </td>
          <td>
            <a id='THUOpt1' class = 'reserve' href=''> 
            <div id='THUOpt'></div> </a>
          </td>
        </tr>
        <tr>
          <th>أنف وأذن وحنجرة</th>
          <td>
            <a id='SATOto1' class = 'reserve' href=''> 
            <div id='SATOto'></div> </a>
          </td>
          <td>
            <a id='SUNOto1' class = 'reserve' href=''> 
            <div id='SUNOto'></div> </a>
          </td>
          <td>
            <a id='MONOto1' class = 'reserve' href=''> 
            <div id='MONOto'></div> </a>
          </td>
          <td>
            <a id='TUEOto1' class = 'reserve' href=''> 
            <div id='TUEOto'></div> </a>
          </td>
          <td>
            <a id='WEDOto1' class = 'reserve' href=''> 
            <div id='WEDOto'></div> </a>
          </td>
          <td>
            <a id='THUOto1' class = 'reserve' href=''> 
            <div id='THUOto'></div> </a>
          </td>
        </tr>
        <tr>
          <th>أسنان</th>
          <td>
            <a id='SATDen1' class = 'reserve' href=''> 
            <div id='SATDen'></div> </a>
          </td>
          <td>
            <a id='SUNDen1' class = 'reserve' href=''> 
            <div id='SUNDen'></div> </a>
          </td>
          <td>
            <a id='MONDen1' class = 'reserve' href=''> 
            <div id='MONDen'></div> </a>
          </td>
          <td>
            <a id='TUEDen1' class = 'reserve' href=''> 
            <div id='TUEDen'></div> </a>
          </td>
          <td>
            <a id='WEDDen1' class = 'reserve' href=''> 
            <div id='WEDDen'></div> </a>
          </td>
          <td>
            <a id='THUDen1' class = 'reserve' href=''> 
            <div id='THUDen'></div> </a>
          </td>
        </tr>
        <tr>
          <th>جلدية</th>
          <td>
            <a id='SATDer1' class = 'reserve' href=''> 
            <div id='SATDer'></div> </a>
          </td>
          <td>
            <a id='SUNDer1' class = 'reserve' href=''> 
            <div id='SUNDer'></div> </a>
          </td>
          <td>
            <a id='MONDer1' class = 'reserve' href=''> 
            <div id='MONDer'></div> </a>
          </td>
          <td>
            <a id='TUEDer1' class = 'reserve' href=''> 
            <div id='TUEDer'></div> </a>
          </td>
          <td>
            <a id='WEDDer1' class = 'reserve' href=''> 
            <div id='WEDDer'></div> </a>
          </td>
          <td>
            <a id='THUDer1' class = 'reserve' href=''> 
            <div id='THUDer'></div> </a>
          </td>
        </tr>
        <tr>
          <th>أمراض الباطنه</th>
          <td>
            <a id='SATDia1' class = 'reserve' href=''> 
            <div id='SATDia'></div> </a>
          </td>
          <td>
            <a id='SUNDia1' class = 'reserve' href=''> 
            <div id='SUNDia'></div> </a>
          </td>
          <td>
            <a id='MONDia1' class = 'reserve' href=''> 
            <div id='MONDia'></div> </a>
          </td>
          <td>
            <a id='TUEDia1' class = 'reserve' href=''> 
            <div id='TUEDia'></div> </a>
          </td>
          <td>
            <a id='WEDDia1' class = 'reserve' href=''> 
            <div id='WEDDia'></div> </a>
          </td>
          <td>
            <a id='THUDia1' class = 'reserve' href=''> 
            <div id='THUDia'></div> </a>
          </td>
        </tr>
      </tbody>
    </table>
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
    WHERE day ='" . $day['reserveDay'] . "' AND specialization ='" . $day['specialization'] . "' AND currentWeek BETWEEN '$firstOFweek' AND '$lastOFweek' LIMIT 1";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "
            <script>
              document.getElementById('$day[day]').innerHTML = '$row[doctorName]';
              var redirect = document.getElementById('$day[day]1');
              redirect.href = 'reservation.php?dID=$row[doctorID]&reservedDay=$day[reserveDay]';
            </script>
        ";
    }
  }
  $conn->close();
  ?>
</body>
<?php 
include_once 'footer.php';
?>

</html>
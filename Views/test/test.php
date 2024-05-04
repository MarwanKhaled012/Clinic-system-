<?php
// $users = ['kareem', 'tariq', 'ragheb'];
// $usersLen = count($users);
// for ($i = $usersLen-1; $i >= 0; $i--) {
//     echo "$users[$i] <br>";
// }
// $nums = [1, 10, 7, 9];
// $numLen = count($nums);
// for ($i = 0; $i < $numLen; $i++) {
//     $nums[$i] = $nums[$i]*2;
//     echo "$nums[$i] ";
// }
// echo"<br/>";
// $now = date('Y-m-d H:i:s', strtotime("now"));
// echo $now;
// $cal = IntlCalendar::createInstance();
// $cal->setFirstDayOfWeek(IntlCalendar::);
// echo setlocale(LC_TIME, 'ar_EG.utf8')  . '<br/>';
// $currentWeek = strtotime('monday this week');
// $firstOFcweek = date('Y-m-d', strtotime("monday", $currentWeek));
// $lastOFcweek = date('Y-m-d', strtotime("monday +6 days", $currentWeek));
// $currentFriday = strtotime('friday this week');
// $first = date('Y-m-d', strtotime("friday", $currentFriday));
// $last = date('Y-m-d', strtotime("friday +6 days", $currentFriday));
// $nextWeek = strtotime('monday next week');
// $firstOFnweek = date('Y-m-d', strtotime("monday", $nextWeek));
// $lastOFnweek = date('Y-m-d', strtotime("monday +6 days", $nextWeek));
// echo $currentWeek . '<br/>' . $firstOFcweek . '<br/>' . $lastOFcweek . '<hr/>';
// echo $nextWeek . '<br/>' . $firstOFnweek . '<br/>' . $lastOFnweek . '<hr/>';
// echo $currentFriday . '<br/>' . $first . '<br/>' . $last . '<hr/>';
// phpinfo();

// // National ID
// function NIDdividor($NID){
// $bDecade = substr($NID,0,1);
// $bYear = substr($NID,1,2);
// $bMonth = substr($NID,3,2);
// $bDay = substr($NID,5,2);
// $bGovernate = substr($NID,7,2);
// $bCount = substr($NID,-5,3);
// $gender = substr($NID,-2,1);
// if($bDecade == 2){
//     $year = '19' . $bYear;
// } elseif ($bDecade == 3){
//     $year = '20'. $bYear;
// }
// $fullDate = $year . '-' . $bMonth . '-' . $bDay;
// $bDate = new DateTime($fullDate);
// $today = new DateTime('today');
// $age = $bDate->diff($today)->y . '<br/>';
// if($gender % 2 == 0){
//     $gender = 'انثى';
// } else {
//     $gender = 'ذكر';
// }
// }
// NIDdividor(30109280201258);
// function getAge($NID){
//     $bDecade = substr($NID,0,1);
//     $bYear = substr($NID,1,2);
//     $bMonth = substr($NID,3,2);
//     $bDay = substr($NID,5,2);
//     if($bDecade == 2){
//         $year = '19' . $bYear;
//     } elseif ($bDecade == 3){
//         $year = '20'. $bYear;
//     }
//     $fullDate = $year . '-' . $bMonth . '-' . $bDay;
//     $bDate = new DateTime($fullDate);
//     $today = new DateTime('today');
//     $age = $bDate->diff($today)->y . '<br/>';
//     echo $age;
// }
// function getGender($NID){
//     $gender = substr($NID,-2,1);
//     if($gender % 2 == 0){
//         $gender = 'انثى';
//     } else {
//         $gender = 'ذكر';
//     }
//     echo $gender;
// }
// getAge(30001010200144);
// getGender(30001010200144);
// // Edit Schedule
// $nextWeek = strtotime('next week');
// $firstOFweek = date('Y-m-d', strtotime("saturday", $nextWeek));
// $lastOFweek = date('Y-m-d', strtotime("saturday +5 days", $nextWeek));
// // File data:
// $file = $_FILES['file'];
// $file_name = $file['name'];
// $file_type = $file['type'];
// $file_tmp_name = $file['tmp_name'];
// $file_error = $file['error'];
// $file_size = $file['size']; // $file_size /(1024*1024) turns into MB
// $file_size_MB = $file_size / (1024*1024);
// $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
// $file_new_name = uniqid() . "." . $file_extension;
// // Validate&Move file:
// if ($file_error != 0){
//     echo "Wrong";
// } else if (! in_array($file_extension, ['pdf'])){
//     echo "Wrong Type";
// } else if ($file_size <= 1 or $file_size_MB > 3){
//     echo "Wrong Size";
// } else {
//     move_uploaded_file($file_tmp_name, "Uploads/Images/$file_new_name");
// }
// // Pics data:
// $img = $FILES['img'];
// $img_name = $img['name'];
// $img_type = $img['type'];
// $img_tmp_name = $img['tmp_name'];
// $img_error = $img['error'];
// $img_size = $img['size']; // $img_size /(1024*1024) turns into MB
// $img_extension = pathinfo($img_name, PATHINFO_EXTENSION);
// $img_new_name = uniqid() . "." . $img_extension;

// move_uploaded_file($img_tmp_name, "Uploads/Images/$img_new_name");


// $today = date('Y-m-d H:i:s',strtotime('today'));
// $tomorrow = date('Y-m-d H:i:s',strtotime('tomorrow'));
// echo $today . ' ' . $tomorrow;
// gettype();
// empty();
// trim();
// strlen();
// filter_var(,FILTER_VALIDATE_EMAIL)
// (preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $myString)
// (preg_match('/[A-Za-z]/', $myString) && preg_match('/[0-9]/', $myString)
// password_verify
// $password = "test";
// $def = (password_hash("$password", PASSWORD_DEFAULT));
// echo"<br>";
// $bycrypt = (password_hash("$password", PASSWORD_BCRYPT));
// echo"<br>";
// $argon = (password_hash("$password", PASSWORD_ARGON2I));
// if (password_verify($password, $shaE)){
//     echo 'PW valid';
// }else{
//     echo 'PW invalid';
// };
// echo"<br>";
// $md = (md5("$password"));
// $mdE = "098f6bcd4621d373cade4e832627b4f6";
// echo"<br>";
// $sha = (sha1("$password"));
// $shaE = "a94a8fe5ccb19ba61c4c0873d391e987982fbbd3";
// echo"<br>";
// if ($md === $mdE){
//     echo 'PW valid';
// }else{
//     echo 'PW invalid';
// };
// // NextWeek table
// $nextWeek = strtotime('next week');
// $firstOFweek = date('Y-m-d', strtotime("saturday", $nextWeek));
// $lastOFweek = date('Y-m-d', strtotime("saturday +5 days", $nextWeek));
// $timetableData = "SELECT * FROM timetable WHERE nextWeek BETWEEN '$firstOFweek' AND '$lastOFweek' ";
?>
<html>
<body>
</body>
</html>
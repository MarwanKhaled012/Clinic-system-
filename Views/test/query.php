<?php

include '../handlers/connect.php';
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
//     $age = $bDate->diff($today)->y;
//     return $age;
// }
// function getGender($NID){
//     $gender = substr($NID,-2,1);
//     if($gender % 2 == 0){
//         $gender = 'انثى';
//     } else {
//         $gender = 'ذكر';
//     }
//     return $gender;
// }
// $aUserID = '30109280201258';
// $hashedPW = password_hash($aUserID, PASSWORD_DEFAULT);
// $aName = 'مصطفى السيد محمد';
// $aAge = getAge($aUserID);
// $aGender = getGender($aUserID);
// $query = "INSERT INTO admin (userID,userPW,name,age,nationalID,gender) VALUES ('$aUserID','$hashedPW','$aName','$aAge','$aUserID','$aGender')";
// $resultQuery = mysqli_query($conn , $query);
// $userID = '30001010200144';
$hashedPW = password_hash(28907250200179, PASSWORD_DEFAULT);
echo $hashedPW;
// $updatePW = "UPDATE users SET userPW = $hashedPW WHERE userID = '$userID'";
// $resultUPW = mysqli_query($conn, $updatePW);

?>


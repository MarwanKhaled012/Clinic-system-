<!DOCTYPE html>
<html lang='ar' dir='rtl'>

<head>
    <link rel='stylesheet' href='../CSS/navbar.css'>
</head>

<body>
    <header>
        <!-- Start Navbar -->
        <div class='nav-container'>
            
            <a href='home.php'> <img src='../img/Logo-01.png' alt='Logo' width='50px' /></a>
            <nav>
            <i class='fas fa-bars toggle-menu'></i>
                <ul>
                    <li><a class='active' href='home.php'>الصفحة الرئيسية</a></li>
                    <li><a href='profile.php'>الملف الشخصي</a></li>
                    <li><a href='timeTable.php'>جدول العيادة</a></li>
                    <li><a href='handlers/handleLogout.php'>تسجيل الخروج</a></li>
                </ul>
                    <form action='search.php' method='POST'>
                        <input type='text' name='target'>
                        <input type = 'submit' value= 'ابحث' name = 'search'>
                    </form>
            </nav>
        </div>
    </header>
    <!-- End Navbar -->

</body>

</html>
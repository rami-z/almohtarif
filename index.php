<?php
$con = mysqli_connect("localhost", "root", "", "employees");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap - Prebuilt Layout</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
</head>
<body class="">

<div>
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <nav class="navbar navbar-expand-lg navbar-light navbar-costomize">
        <div class="my-auto ">
            <a class="navbar-brand " href="#"><h1 class="text-center logo">المحترف</h1>
                <p class="logo">منصة التعليم المفتوح</p></a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">الرئيسية <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">الدورات</a>
                </li>
                <li class="nav-item dropdown">
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="بحث" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">بحث</button>
            </form>
        </div>
    </nav>
</div>
<div class="container">
    <div class="jumbotron bg-photo">
        <div class="text-monospace text-right ">
            <h1 class="">تعلم بسهولة</h1>
            <p class="">موقع يهدف لتعليم الاساسيات المطلوبة للانطلاق في عالم البرمجة...</p>
        </div>
    </div>
    <h1 class="text-center ">دورات ويب</h1>

    <?php
    $sql = "SELECT * FROM employees";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
// output data of eaxch row
        echo '<div class="row">';
        while ($row = $result->fetch_assoc()) {
    echo '<div class="row">
        <div class="col-lg-3 col-sm-6">

            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    <img alt="" src="http://lorempixel.com/100/100/people/9/">
                </div>
                <div class="info">
                    <div class="title">
                        <a target="_blank" href="https://scripteden.com/">'.$row["name"].'</a>
                    </div>
                    <div class="desc">Passionate designer</div>
                    <div class="desc">Curious developer</div>
                    <div class="desc">Tech geek</div>
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" rel="publisher"
                       href="https://plus.google.com/+ahmshahnuralam">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="btn btn-primary btn-sm" rel="publisher"
                       href="https://plus.google.com/shahnuralam">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-warning btn-sm" rel="publisher" href="https://plus.google.com/shahnuralam">
                        <i class="fa fa-behance"></i>
                    </a>
                </div>
            </div>

        </div>

    </div>';
    }
    echo '</div>';
    };
    ?>
</div>
<footer class="footer row">
    <p class="col-10 text-right mr-2">الحقوق محفوظة لصالح شركة المحترف </p>

    <a href="#" class="col-1 text-left">للاتصال بنا </a>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

</body>
</html>

<nav class="navbar navbar-expand-lg navbar-light bg-light ">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center" id="navbarNav">
        <ul class="nav navbar-nav navbar-right">

            <li class="nav-item">
                <a class="nav-link" id="signin" href="#">تسجيل الدخول </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="aboutBtn" href="#">عن الموقع </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href=<?php echo $base."pages/cafees.php" ;?>>الكافيهات <span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href=<?php echo $base."pages/malahy.php" ;?>>الانشطة الترفيهية <span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=<?php echo $base."pages/resturants.php" ;?>>المطاعم </a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href=<?php echo $base."index.php"?>>الرئيسية</a>
            </li>

        </ul>
    </div>

    <a class="navbar-brand col-md-3" href="#">
        <img src=<?php echo $base."Public/images/logo.png" ?> />
    </a>
</nav>
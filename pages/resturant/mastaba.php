<?php 
    $page_title = "مطعم المصطبة" ;
    include("../../header.php");
    include('../../extraItems.php') ; 
?>

<section class="container">
    <div class="cat">
        <br /> <br />
        <br /> <br />
        <h2 class="text-center">المصطبة </h2>
        <hr />
        <br />

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../../Public/images/restaurate/mastaba/1.jpg" height="300" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../Public/images/restaurate/mastaba/4.jpg" height="300" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../Public/images/restaurate/mastaba/9.jpg" height="300" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <hr />
        <!-- Cafe Description -->
        <p class="h7 text-center card desc">
            " يستحق الكافيه ده إنك تجرّبه مش بس علشان مفتوح ٢٤ ساعة، لكن علشان جودة قهوته العالية كمان. الكافيه ده مشهور
            بالكابتشينو بتاعهم، وشعار المكان: “قهوة هتلاقيها دايمًا زي ما بتحبّها!” وبيقدّموا كمان قهوة “إيلي” الإيطالية
            اللي كلنا عارفينها مع ساندويتشات وحلويات لذيذة."
        </p>
        <hr />

        <!-- Cafe Info -->

        <table class="table">
            <tbody>
                <tr>
                    <td>مول العرب - ميدان جهينة - 6اكتوبر</td>
                    <th scope="row"> العنوان</th>

                </tr>
                <tr>
                    <td>  01142073333 </td>
                    <th scope="row"> موبايل</th>

                </tr>
                <tr>
                    <td>  12:00 ص | 12:00 ص مفتوح</td>
                    <th scope="row"> المواعيد</th>

                </tr>
                <tr>
                    <td>شرقى </td>
                    <th scope="row">نوع الاكل</th>

                </tr>

            </tbody>
        </table>

        <hr />
        <iframe
            src="http://khoroga.com/include/map.php?lat=30.006092786155165&long=30.974180461376932"
            width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <?php 
include('../../footer.php') ; 
?>
</section>
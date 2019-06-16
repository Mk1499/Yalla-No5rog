<?php 
    $page_title = "PizzaRella" ;
    include("../../header.php");
    include('../../extraItems.php') ; 
?>

<section class="container">
    <div class="cat">
        <br /> <br />
        <br /> <br />
        <h2 class="text-center"> PizzaRella </h2>
        <hr />
        <br />

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../Public/images/restaurate/PizzaRella/2.jpg" height="300" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../Public/images/restaurate/PizzaRella/3.jpg" height="300" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../Public/images/restaurate/PizzaRella/8.jpg" height="300" class="d-block w-100" alt="...">
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
هتاكل احلى بيتزا طعم يسفرك ايطاليا        </p>
        <hr />

        <!-- Cafe Info -->

        <table class="table">
            <tbody>
                <tr>
                    <td>مول بلاتنيوم خلف مول عنابه الحى الثالث _ التجمع الخامس</td>
                    <th scope="row"> العنوان</th>

                </tr>
                <tr>
                    <td> 010 234 669 18</td>
                    <th scope="row"> موبايل</th>

                </tr>
                <tr>
                    <td> ايطالي</td>
                    <th scope="row"> نوع الاكل</th>

                </tr><tr>
                    <td>  10:00 ص | 10:00 م مفتوح</td>
                    <th scope="row"> المواعيد</th>

                </tr>
            </tbody>
        </table>

        <hr />
        <iframe src="http://khoroga.com/include/map.php?lat=30.0771&long=31.28589999999997" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <?php 
include('../../footer.php') ; 
?>
</section>

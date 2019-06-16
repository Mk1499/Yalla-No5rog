<?php 
    $page_title = "كافي كورنر" ;
    include("../../header.php");
    include('../../extraItems.php') ; 
?>

<section class="container">
    <div class="cat">
        <br /> <br />
        <br /> <br />
        <h2 class="text-center"> كوفي كورنر </h2>
        <hr />
        <br />

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../Public/images/cafes/Coffee Corner/2.jpg" height="300" class="d-block w-100"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../Public/images/cafes/Coffee Corner/3.jpg" height="300" class="d-block w-100"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../Public/images/cafes/Coffee Corner/3.jpg" height="300" class="d-block w-100"
                        alt="...">
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
                    <td>21 شارع المعادي</td>
                    <th scope="row">العنوان</th>

                </tr>
                <tr>
                    <td>01069669666</td>
                    <th scope="row">رقم التليفون</th>

                </tr>

            </tbody>
        </table>

        <hr />
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.6239599236405!2d31.280577685682964!3d29.96149322944307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458386c92c5242f%3A0x3535f034dce4e63!2sCoffee+Corner!5e0!3m2!1sar!2seg!4v1560645836739!5m2!1sar!2seg"
            width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <?php 
    include('../../footer.php') ; 
?>
</section>
<?php 
    $page_title = "جيان كافيه" ;    
    include("../../header.php");
    include('../../extraItems.php') ; 
?>

<section class="container">
    <div class="cat">
        <br /> <br />
        <br /> <br />
        <h2 class="text-center">جيان كافيه</h2>
        <hr />
        <br />

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../Public/images/cafes/jian/1.jpg" height="300" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../Public/images/cafes/jian/3.jpg" height="300" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../Public/images/cafes/jian/2.jpg" height="300" class="d-block w-100" alt="...">
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
جربت " الترويقه اللبنانى " قبل كده!
تتروق يعنى تفطر باللبنانى :D
دلوقتى فى جيان كافيه بسيتي سكوير الرحاب تقدر تتروق ترويقه لبنانى وتعيش تجربه جديده فى فطارك أو فطار مصرى أصيل على زوقك أو فطير مشلتت مع أومليت وجبنة قديمة وعسل        </p>
        <hr />

        <!-- Cafe Info -->

        <table class="table">
            <tbody>
                <tr>
                    <td>القاهرة , الرحاب</td>
                    <th scope="row">1 العنوان</th>

                </tr>
                <tr>
                    <td> (011) 191-960-60 </td>
                    <th scope="row"> العنوان 2</th>

                </tr>
                <tr>
                    <td>  09:00 ص | 11:59 م مفتوح </td>
                    <th scope="row"> المواعيد</th>

                </tr>
                <tr>
                    <td>شرقى لبنانى</td>
                    <th scope="row">نوع الاكل</th>

                </tr>

            </tbody>
        </table>

        <hr />
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.7123949226157!2d30.936642285682996!3d29.958950229562827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145856645d230017%3A0x58019c71c11564c0!2z2KzZitin2YYg2YPYp9mB2YrZhw!5e0!3m2!1sar!2seg!4v1560648482426!5m2!1sar!2seg"
            width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <?php 
include('../../footer.php') ; 
?>
</section>

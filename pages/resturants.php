<?php
 include("../header.php") ;
//  include("../navbar.php") ;
 include('../extraItems.php') ; 

    
?>


<section class = "container">
 <div class = "cat">
    <br /> <br />
    <br /> <br />
<h2 class = "text-center"> المطاعم </h2>
    <hr />
    <div class="row">
        <div class="col-sm-4">
          <a href="./resturant/mastaba.php/">   
            <div class="card">
                <img src="../Public/images/restaurate/mastaba/2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="text-center card-title">المصطبة </h5>
                </div>
            </div>
        </a>
        </div>

        <div class="col-sm-4">
          <a href="./resturant/drb.php">   
            <div class="card">
                <img src="../Public/images/restaurate/drb/1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="text-center card-title">درب شكمبه</h5>
                </div>
            </div>
        </a>
        </div>

        <div class="col-sm-4">
          <a href="./resturant/pizza.php">   
            <div class="card">
                <img src="../Public/images/restaurate/PizzaRella/1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="text-center card-title">PizzaReall</h5>
                </div>
            </div>
        </a>
        </div>
        
    </div>
</div>

<?php include('../footer.php') ; ?> 
</section>


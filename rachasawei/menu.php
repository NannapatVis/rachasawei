<?php
include('connect.php');

$id = $_GET['id'];
$query = mysqli_query($con,"SELECT * FROM menu WHERE id = $id");
$result = mysqli_fetch_array($query);

?>
<html>
    <head>
        <title><?=$result['name_food']?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!--แบรนด์เนอร์-->
        <!--   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>   -->
    
    <body>
<!--MENU NAV-->
<nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="rachasawei.php"><img class="d-block w-100" src="img/Logo.png" while="80" height="80"alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="rachasawei.php"><font size = "4.5">HOME</font></a>
        </li>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
 
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">
    
  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false"><font size = "4.5">DESSERTS</font></a>
        <ul class="dropdown-menu" style="">
        <li><a href="http://localhost/rachasawei/menu.php?id=1" class="dropdown-item" type="button">Mille Feuille</a></li>
        <li><a href="http://localhost/rachasawei/menu.php?id=2" class="dropdown-item" type="button">Supreme Pancakes</a></li>
        <li><a href="http://localhost/rachasawei/menu.php?id=3" class="dropdown-item" type="button">Chocolate Cake</a></li>
        <li><a href="http://localhost/rachasawei/menu.php?id=4" class="dropdown-item" type="button" >Cookie</a></li>
        <li><a href="http://localhost/rachasawei/menu.php?id=5" class="dropdown-item" type="button">Sausages Bread Roll</button></li>
        <li><a href="http://localhost/rachasawei/menu.php?id=6" class="dropdown-item" type="button">Brownies</button></li>
        <li><a href="http://localhost/rachasawei/menu.php?id=7" class="dropdown-item" type="button">Churros</button></li>
        <li><a href="http://localhost/rachasawei/menu.php?id=8" class="dropdown-item" type="button">Macarons</button></li>
        <li><a href="http://localhost/rachasawei/menu.php?id=9" class="dropdown-item" type="button">Orange Pie</button></li>
        <li><a href="http://localhost/rachasawei/menu.php?id=10" class="dropdown-item" type="button">Chocolate Donuts</button></li>
        <li><a href="http://localhost/rachasawei/menu.php?id=11" class="dropdown-item" type="button">Strawberry Shortcake</button></li>
        <li><a href="http://localhost/rachasawei/menu.php?id=12" class="dropdown-item" type="button">French Toast</button></li>
        <li><a href="http://localhost/rachasawei/menu.php?id=13" class="dropdown-item" type="button">Matcha Macarons</button></li>
        <li><a href="http://localhost/rachasawei/menu.php?id=14" class="dropdown-item" type="button">Raspberry Cream Maca</button></li>
        <li><a href="http://localhost/rachasawei/menu.php?id=15" class="dropdown-item" type="button">Toast Bread</button></li>
      </ul>
      
        <li class="nav-item">
          <a class="nav-link" href="about us.php"><font size = "4.5">ABOUT US</font></a>
        </li>
        </ul>
      </div>
      </div>

      <ul class="nav justify-content-end">
        <li class="container-fluid">
        <a class="navbar-brand" href="register\login.php">
        <font size = "4.5">  LOGIN </font>

        <a class="navbar-brand" href="register\register.php">
        <font size = "4.5">  SIGN UP </font>
  
        <a class="navbar-brand" href="add_to_cart.php">
        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg><font size = "4.5">  CART</font>
        </a>
        </li>
        </ul>
    </nav>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  </ol>
  
  <!--Link แบรนด์เนอร์-->
  <!--    <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/Banner1.png" alt="First Banner">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Banner2.png" alt="Second Banner">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>   -->

  <BR>
  <BR>
  <br>

  <center><div class="col-md-7">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
             
              <b><font size = "6"><?=$result['name_food']?></font></b>
              
              <br>
  <b><font size = "5" align = left>PRICE <?=$result['price']?> ฿</font></b>
  <BR>
 
  <font size = "4" align = left><?=$result['details']?></font>
  <br>
  <div class = "container">
  <a href="rachasawei.php" button type="button" class="btn btn-sm btn-outline-secondary">Back</button></a>
  <!--<a href="./cart.php?id=<?=$result['id'];?>" button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button></a>-->
  <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
            </div>
            </div>
           
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" style="width: 400px; height: 400px;" src="<?=$result['img']?>" whidth="500" height="500" align="center" data-holder-rendered="true">
          </div>
        </div></center>
        
          
            <br><br><br><br><br><br><br><br>
            <footer class="py-4 bg-dark">
      <center>
        <svg xmlns="http://www.w3.org/2000/svg" height="1.75em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg>      
      
        <svg xmlns="http://www.w3.org/2000/svg" height="1.75em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224,202.66A53.34,53.34,0,1,0,277.36,256,53.38,53.38,0,0,0,224,202.66Zm124.71-41a54,54,0,0,0-30.41-30.41c-21-8.29-71-6.43-94.3-6.43s-73.25-1.93-94.31,6.43a54,54,0,0,0-30.41,30.41c-8.28,21-6.43,71.05-6.43,94.33S91,329.26,99.32,350.33a54,54,0,0,0,30.41,30.41c21,8.29,71,6.43,94.31,6.43s73.24,1.93,94.3-6.43a54,54,0,0,0,30.41-30.41c8.35-21,6.43-71.05,6.43-94.33S357.1,182.74,348.75,161.67ZM224,338a82,82,0,1,1,82-82A81.9,81.9,0,0,1,224,338Zm85.38-148.3a19.14,19.14,0,1,1,19.13-19.14A19.1,19.1,0,0,1,309.42,189.74ZM400,32H48A48,48,0,0,0,0,80V432a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V80A48,48,0,0,0,400,32ZM382.88,322c-1.29,25.63-7.14,48.34-25.85,67s-41.4,24.63-67,25.85c-26.41,1.49-105.59,1.49-132,0-25.63-1.29-48.26-7.15-67-25.85s-24.63-41.42-25.85-67c-1.49-26.42-1.49-105.61,0-132,1.29-25.63,7.07-48.34,25.85-67s41.47-24.56,67-25.78c26.41-1.49,105.59-1.49,132,0,25.63,1.29,48.33,7.15,67,25.85s24.63,41.42,25.85,67.05C384.37,216.44,384.37,295.56,382.88,322Z"/></svg>
        
        <svg xmlns="http://www.w3.org/2000/svg" height="1.75em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
        
        <svg xmlns="http://www.w3.org/2000/svg" height="1.75em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
        <br><br>
        <div class="container">
      <p class="m-0 text-center text-white">Good Dessrets is The Foundation of Happiness</p></div>
    </center>
      </footer>
    </body>
</html>


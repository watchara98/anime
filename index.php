<?php
include('connect.php');
?>
<html>
<head>
<title>ANIME HPD</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
<!--Menu-->
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #bec7cf!important;">
  <a class="navbar-brand" href="#">ANIME HPD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="./">หน้าเเรก <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ยอดฮิต</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ติดต่อเรา</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          หมวดหมู่
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">พากษ์อังกฤษ</a>
          <a class="dropdown-item" href="#">พากษ์ไทย</a>
          <a class="dropdown-item" href="#">การ์ตูน</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!--End Menu-->

<div class="album py-5 bg-light "style="background-image: url(https://th.bing.com/th/id/R.c8a3d98748dad492c74d576a9c77b2c4?rik=WsXNqz9mwl7Oew&pid=ImgRaw&r=0);">
<div class="container">

         <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="#">หน้าเเรก</a></li>
           <li class="breadcrumb-item"><a href="#">ยอดฮิต</a></li>
           </ol>
        </nav>
        <div class="row">

        <?php

          $query = mysqli_query($con,"SELECT * FROM data_anime ");
          while($result = mysqli_fetch_array($query)){

        ?>
            <div class="col-md-2">
             <div class="card mb-4 box-shadow">
             <a href="<?php if($result['status_list'] == 'YES'){?>list<?php }else{?>play<?php }?>.php?id=<?=$result['id']?>">  
                <img src="<?=$result['img']?>" while="100%" height="400"class="card-img-top"/>
                  <div class="card-body">
                    <p class="card-text trxt-center"><?=$result['name']?></p>
                  </div>
                </a>
              </div>
            </div>
            
          <?php } ?>    
                  </div>
                </div>
            </div>
          </div>
          </div>
     <> 
  <footer class="my-12 pt-1 text-muted text-center text-small">
    <p>ดูอนิเมะฟรี การ์ตูนฟรี ที่นี่เลย <a href="./">ANIME HPD</a</p>
    </ul> 
  </footer>

</body>
</html>
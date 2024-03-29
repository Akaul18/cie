<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
</head>
<body>

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <?php 
      require_once("includes/connection.php");
      $query = "SELECT logo FROM newideas";
      $res = mysqli_query($con,$query);
      $count = 1;
           echo '<div class="carousel-inner" role="listbox">';
      while($row=mysqli_fetch_assoc($res))
      {
          if($count == 1)
          {
          echo '         
            <div class="item active">
              <img src="students/logos/'.$row["logo"].'" alt="loading.." width="460" height="345"/>
            </div>';
        }else{
          echo '
            <div class="item">
              <img src="students/logos/'.$row["logo"].'" alt="loading.." width="460" height="345"/>
            </div>';
        }$count++;
      }
        echo "</div>";
     ?>
    
    <!--   <div class="item active">
        <img src="1.jpg" alt="Chania" width="460" height="345">
      </div> -->

      
    <!-- 
      <div class="item">
        <img src="3.jpg" alt="Flower" width="460" height="345">
      </div>

      <div class="item">
        <img src="4.jpg" alt="Flower" width="460" height="345">
      </div> -->

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>
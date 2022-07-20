<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./../css/home.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home</title>
    <style>
     
      
      .vwrap, .vitem {
  height: 30px;
  line-height: 30px;
}
 
      .vwrap {
  overflow: hidden; /* HIDE SCROLL BAR */
  background: #eee;
}
      .vitem { text-align: center; }
 
      .vmove { position: relative; }
      @keyframes tickerv {
  0% { bottom: 0; } /* FIRST ITEM */
  30% { bottom: 30px; } /* SECOND ITEM */
  60% { bottom: 60px; } /* THIRD ITEM */
  90% { bottom: 90px; } /* FORTH ITEM */
  100% { bottom: 0; } /* BACK TO FIRST */
}
      .vmove {
  animation-name: tickerv;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  animation-timing-function: cubic-bezier(1, 0, .5, 0);
}
    .vmove:hover { animation-play-state: paused; }
    .scrooll-news >div{
      float: left;
    }
    .scrooll-news > .vwrap{
      width: 93%;
    }
    .scrooll-news> .scrooll-news-head{
      width: 7%;
      padding: 4px;
    }
    </style>
  </head>
  <body>
    
    <?php require "model.php" ?>
    <div class="scrooll-news">
      <div class="scrooll-news-head" style="background-color: rgb(255, 0, 0);color: white;">Notice</div>
      <div class="vwrap"><div class="vmove">
        <div class="vitem"><a href="../images/Notice/Assignment.jpg" style="color: red;">XI-XII Assignment submission</a></div>
        <div class="vitem"><a href="../images/Notice/Durga puja.jpg" style="color: red;">Durgapuja vacation notice</a></div>
        <div class="vitem"><a href="../images/Notice/payment.jpg" style="color: red;">Tap & bKash payment procedure notice.</a></div>
      </div></div><br><br>
    </div>
    <section class="img-slider messege">
      <div class="im-m1">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../images/three.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../images/two.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../images/one.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <section class="notice">
        <h2>NOTICE BOARD</h2>
        <p><a href="../images/Notice/Assignment.jpg" style="color: red;">XI-XII Assignment submission</a></p>
        <p><a href="../images/Notice/Durga puja.jpg" style="color: red;">Durgapuja vacation notice</a></p>
        <p><a href="../images/Notice/payment.jpg" style="color: red;">Tap & bKash payment procedure notice.</a></p>
        <a href="viewAll.php"><button type="button" class="btn btn-danger">View all</button></a>

      </section><br><br>
      <h2 style="background-color: blueviolet;color:white;padding:7px;text-align: center;">Messages</h2>
      <br><br>
      <div class="im-m2">
        <div class="msg msg-1">
          <div class="card" style="width: 18rem;">
            <img src="../images/major.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Major General Md Saiful Abedin, BSP, SGP, ndc, psc</h5>
              <p class="card-text"><b>Chief Patron</b><br>
                Chattogram Cantonment Public College</p>
              <a href="chief.php" class="btn btn-primary">Message from Chief</a>
            </div>
          </div>
        </div>
        <div class="msg msg-2">
          <div class="card" style="width: 18rem;">
            <img src="../images/brig.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Brig Gen Kazi Iftekharul Alam, ndc, psc</h5>
              <p class="card-text"><b>Chairman</b><br>
                Chattogram Cantonment Public College</p>
              <a href="../html/brig.php" class="btn btn-primary">Message from Chairman</a>
            </div>
          </div>
        </div>
        <div class="msg msg-3">
          <div class="card" style="width: 18rem;">
            <img src="../images/col.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Col Mujibul Haque Sikder, PBGM</h5>
              <p class="card-text"><b>Principal</b><br>
                Chattogram Cantonment Public College</p>
              <a href="col.php" class="btn btn-primary">Message from Principal</a>
            </div>
          </div>
        </div>
      </div>
    </section> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   <!-- <div class="visitor">
   <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-4d3f72f6-7d04-4236-be55-851d39c48c2f"></div>
   </div> -->
    <footer>
        <div class="ftr">
          <div class="map">
            <h3 style="color: white; margin-left: 15px;">Location</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d118042.80988452164!2d91.814352!3d22.397471!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb94c0bcd71bf2239!2sChattogram%20Cantonment%20Public%20College!5e0!3m2!1sen!2sbd!4v1638305844170!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <div class="contact">
            <h3>Contact</h3>
            <p><b>Chattogram Cantonment, Chattogram , Bangladesh.</b></p>
            <p>Baizid Bostami-4210, Chattogram Cantonment, Chattogram , Bangladesh.,</p>
            <p>Phone: 02339243170,</p>
            <p>Email: ccpc1961@yahoo.com</p>
          </div>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

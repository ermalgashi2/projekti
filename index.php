<?php
  session_start();
  $count = 0;
  // connecto database
  
  $title = "Home";
  require_once "./template/header.php";
  require_once "./functions/database_functions.php";
  $conn = db_connect();
  $row = select4LatestBook($conn);
?>
<head>
  <style>
  
    .intro {
  height: calc(105vh - 112px);
  overflow: hidden;
  position: relative;
  z-index: 0;
  background-color: lightgray;
  background-image: url('images/prizreni.jpg');
  background-repeat: no-repeat;
  background-attachment: scroll; 
  background-size: 100% 100%;
/*background-blend-mode: overlay;*/
}

.intro-content {
  height: 100%;
}

.section {
  padding: 160px 0 0 0;
}
.ab {
  display: grid;
  grid-template-columns: repeat(6, 1fr);
  grid-template-rows: repeat(8, 4vw);
  gap: 2rem;
}

.ab .item {
  overflow: hidden;
}

.ab img {
  object-fit: cover;
  height: 100%;
  width: 100%;
  transition: all 500ms ease-out;
}

.ab .item-1 img {
  object-fit: fill;
}

.ab img:hover {
  transform: scale(1.2);
}

.item-1 {
  grid-column-start: 1;
  grid-column-end: 3;
  grid-row-start: 1;
  grid-row-end: 9;
}

.item-2 {
  grid-column-start: 5;
  grid-column-end: 7;
  grid-row-start: 1;
  grid-row-end: 9;
}
.item-3 {
  grid-column-start: 3;
  grid-column-end: 5;
  grid-row-start: 1;
  grid-row-end: 5;
}

.item-4 {
  grid-column-start: 3;
  grid-column-end: 5;
  grid-row-start: 5;
  grid-row-end: 9;
}

@media only screen and (max-width: 600px) {
  .gallary {
    grid-template-columns: repeat(6, 1fr);
    grid-template-rows: repeat(20, 4vw);
  }

  .item-1 {
    grid-column-start: 1;
    grid-column-end: 7;
    grid-row-start: 1;
    grid-row-end: 7;
  }

  .item-2 {
    grid-column-start: 1;
    grid-column-end: 7;
    grid-row-start: 7;
    grid-row-end: 11;
  }
  .item-3 {
    grid-column-start: 1;
    grid-column-end: 7;
    grid-row-start: 11;
    grid-row-end: 15;
  }
  .item-4 {
    grid-column-start: 1;
    grid-column-end: 7;
    grid-row-start: 15;
    grid-row-end: 19;
  }
}

  </style>
</head>

    <div class="intro">

     <br><br><br><br><br><br><br><h1 style="color: white;">Mire se vini ne faqen e Prizrenit</h1>
          <h2 style="color: white;">
            Ketu ju do te gjeni produket e qytetit tone</br></h2>
          <a href="#" class="btn">Porositni</a>
        </div>
      <!-- Example row of columns -->
      <div class="lead text-center text-dark fw-bolder h4">Librat e fundit</div>
      <center>
        <hr class="bg-warning" style="width:5em;height:3px;opacity:1">
      </center>
      <div class="row">
        <?php foreach($row as $book) { ?>
      	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 py-2 mb-2">
      		<a href="book.php?bookisbn=<?php echo $book['book_isbn']; ?>" class="card rounded-0 shadow book-item text-reset text-decoration-none">
            <div class="img-holder overflow-hidden">
              <img class="img-top" src="./bootstrap/img/<?php echo $book['book_image']; ?>">
            </div>
            <div class="card-body">
              <div class="card-title fw-bolder h5 text-center"><?= $book['book_title'] ?></div>
            </div>
          </a>
      	</div>
        <?php } ?>
      </div>
      <section class="section">
    <div class="h">
      <h1>Vendet per tu vizituar ne<span> Prizren</span> </h1>
    </div>
    <div class="ab box">
      <div class="item item-1">
        <img src="images/xhamia.jpg" alt="" />
      </div>
      <div class="item item-2">
        <img src="images/lidhjaeprizrenit.jpg" alt="" />
      </div>
      <div class="item item-3">
        <img src="images/kalajaeprizrenit.jpg" alt="" />
      </div>
      <div class="item item-4">
        <img src="images/Hamami_i_Prizrenit..JPG" alt="" />
      </div>
    </div>
  </section>
<?php
  if(isset($conn)) {mysqli_close($conn);}
  require_once "./template/footer.php";
?>
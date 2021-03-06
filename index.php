<?php 
  session_start();
  $vname = null;
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "hack";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if($conn -> connect_error){ 
    die("connection failed");
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SiteName</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="modal fade" id="registration" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content">
                <div class="modal-header d-flex flex-column">
                    <i class="fas fa-times ml-auto" data-dismiss="modal"></i>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs d-flex align-items-center" role="tablist">
 
                        <li class="nav-item ">
                            <h5 class="nav-link active show" href="#signin" role="tab" data-toggle="tab">
                            ВОЙТИ
                    </h5>
                        </li>
                        <li><span>/</span></li>
                        <li class="nav-item">
                            <h5 class="nav-link" href="#signup" role="tab" data-toggle="tab">
                              <a href="signup.php">РЕГИСТРАЦИЯ</a>                  
                            </h5>
                        </li>
                    </ul>
                </div>
                <div class="modal-body">
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <!---------Login------>
                        <form role="tabpanel" class="tab-pane fade in active show" id="signin">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="email form-control" id="email" placeholder="пишите свои почту" name = "email">
                                <span class="valid"></span>
                                <span></span>
                            </div>
                            <div class="form-group">
                                <label for="password">Пароль</label>
                                <input type="password" class="password form-control" id="password" placeholder="пишите пароль" name = "password">
                                <span class="valid"></span>
                                <span></span>
                            </div>
                            <button type="submit" class="btn btn-red btn-valid"><a href="check.php">ВОЙТИ </a></button>
                        </form>
                        <!-----register --->
                        <form role="tabpanel" class="tab-pane fade" id="signup" method="POST">
                            <div class="form-group">
                                <label for="data">ФИО</label>
                                <input type="text" class="namesurname form-control" id="data" placeholder="ФИО" name = "name">
                                <span class="valid"></span>
                                <span></span>
                            </div>
                            <div class="form-group">
                                <label for="phone">Телефон</label>
                                <input type="text" class="phoneNumber form-control" id="phone" placeholder="пиишите свои номер телефона" name = "phonenumber">
                                <span class="valid"></span>
                                <span></span>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="email form-control" id="email" placeholder="пишите свои почту" name="email">
                                <span class="valid"></span>
                                <span></span>
                            </div>
                            <div class="form-group">
                                <label for="password">Пароль</label>
                                <input type="password" class="form-control password" placeholder="пишите пароль" name = "password">
                                <span class="valid"></span>
                                <span></span>
                            </div>
                            <button type="submit" class="btn btn-red btn-valid">ЗАРЕГИСТРИРОВАТЬСЯ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="callback" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <i class="fas fa-times" data-dismiss="modal"></i>
            <h5>Отпрваить нам сообщение</h5>
          </div>
          <div class="modal-body">
            <form class="" id="signup">
                <p class="mb-3">Оставьте свои данные в этой форме, и мы получим его на e-mail и обязательно ответим!</p>
              <div class="form-group">
                    <label for="">Ваше имя</label>
                    <input type="text" class="name form-control" id="name" placeholder="Ваше имя">
                    <span class="valid"></span>
                    <span></span>
              </div>
              <div class="form-group">
                    <label for="">Ваше телефон</label>
                    <input type="text" class="phoneNumber form-control" id="phone"placeholder="Ваше телефон">
                    <span class="valid"></span>
                    <span></span>
              </div>
              <div class="form-group">
                <label for="">Ваше почта</label>
                <input type="email" class="email form-control" id="email" placeholder="пишите свои почту">
                <span class="valid"></span>
                <span></span>
              </div>
              <div class="form-group">
                <label for="exampleSelect1">число людей</label>
                <select class="form-control" id="exampleSelect1">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <div class="form-group">
                    <label for="">Дата заезда</label>
                    <input type="text" class="form-control" id="phone"placeholder="дата2">
              </div>
              <div class="form-group">
                    <label for="">Дата отъезда</label>
                    <input type="text" class="form-control" id="phone"placeholder="дата2">
              </div>
              <button type="submit" class="btn btn-red btn-valid">ОТПРАВИТЬ</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img src="img/logo.png" class="logo" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <?php if(!isset($_SESSION['login'])):?>
                <li class="nav-item">
                    <a class="nav-link" href="signin.php" data-toggle="modal" data-target="#registration">войти</a>
                </li>
                <?php else:?>
                <li>
                    <a class="nav-link" href="#"> <?php echo ($_SESSION['login']) ?></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">выйти</a>
                </li>
              <?php endif; ?>
            </ul>
        </div>
    </nav>
    <section class="welcome">
        <div class="container">
            <div class="row flex-column">
                <div class="border-red-wrapper mt-5">
                    <h2 class="border-red">Visit almaty</h2>
                </div>
                <h1>Проникнись степной культурой</h1>
                <span class="down mx-auto"><i class="fa fa-chevron-down"></i></span>
            </div>
        </div>
    </section>
    <section class="product" id="product-1">
        <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="img-wrapper">
                            <img class= "group" src="img/besh.jpg">
                        </div>
                    </div>
                    <div class="col-md-6 description d-flex flex-column align-items-center justify-content-center">
                            
                            <h1 class="description-head red">JEfood</h1>
                            <p>Казахская национальная кухня в полной мере отражает суть народа, его историю, культуру и традиции. Так как гостеприимство с давних времен было отличительной чертой казахского народа, гостям в доме всегда оказывается должный прием и отводится почетное место.</p>
                            <a href="Jefood.php"  class="btn btn-red">ВОЙТИ</a>
                    </div>
                </div>
        </div>
    </section>
     <section class="product" id="product-2">
        <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 description d-flex flex-column align-items-center justify-content-center">
                           
                            <h1 class="description-head red">YurtaHostel</h1>
                            <p>Казахская юрта - традиционное жилище, существующее с древности, используется до настоящего времени. Юрта казахов своеобразный тип переносного жилища, характерный для насельников Великой степи. Юрта с оригинальным архитектурным решением, со сложным семантическим смыслом отражает уровень культурного развития тюрко-монгольских племен, их сложную идеологию. Неповторимость этого типа жилища, архитектуры, созданной из войлока и гибкого ивового прута, стала сегодня для каждого казаха емким символом Родины, древней культуры народа.</p>
                            <a href="YurtaHostel.php"  class="btn btn-red btn-even">ВОЙТИ</a>
                    </div>
                    <div class="col-md-6">
                        <div class="img-wrapper">
                            <img class= "group" src="img/yurt2.png">
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <section class="product" id="product-3">
        <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="img-wrapper">
                            <img class= "group" src="img/weding.jpg">
                        </div>
                    </div>
                    <div class="col-md-6 description d-flex flex-column align-items-center justify-content-center">
                            
                            <h1 class="description-head red">VisitToi</h1>
                            <p>Казахские свадебные обряды (каз. үйлену салт-дәстүрлері) являются одними из важнейших обрядов в жизни казахской общины и рода и, за исключением мусульманского акта бракосочетания «неке кию», сохранили множество древних домусульманских черт. Казахские свадебные обряды состоят из нескольких циклов: кудалык (сватовство), подготовка к свадьбе, свадебный той и ритуалы после свадьбы.</p>
                            <a href="Visittoi-more.php" class="btn btn-red">ВОЙТИ</a>
                    </div>
                </div>
        </div>
    </section>
     <section class="product" id="product-4">
        <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 description d-flex flex-column align-items-center justify-content-center">
                            
                            <h1 class="description-head red">Dastur Quest</h1>
                            <p>Казахские традиции — множество представлений, обрядов, привычек и навыков практической и общественной деятельности казахов.
                              Современный Казахстан переживает период национального возрождения и возрождение национальной государственности.
                              Ранее имело место сознательное изживание и уничтожение традиций на протяжении всего двадцатого века. За семидесятилетний советский период в Казахстане боролись с пережитками прошлого.</p>
                            <a href="Dastur.php"  class="btn btn-red btn-even">ВОЙТИ</a>
                    </div>
                    <div class="col-md-6">
                        <div class="img-wrapper">
                            <img class= "group" src="img/4.png">
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <footer class="page-footer font-small special-color-dark pt-4 color_method">
      <div class="container">
        <ul class="list-unstyled list-inline text-center">
          <li class="list-inline-item">
            <a class="btn-floating btn-fb mx-1">
              <i class="fab fa-facebook"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-tw mx-1">
              <i class="fab fa-twitter-square"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-gplus mx-1">
              <i class="fab fa-google-plus-square"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-dribbble mx-1">
              <i class="fab fa-youtube"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="https://www.visitalmaty.kz/" id="color_visit">Visit Almaty</a>
      </div>
    </footer>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

  <script src="js/jquery.maskedinput.min.js"></script>
  
  <script src="js/main.js"></script>
</body>
</html>

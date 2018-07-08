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
                        ВХОД 
                    </h5>
                        </li>
                        <li><span>/</span></li>
                        <li class="nav-item">
                            <h5 class="nav-link" href="#signup" role="tab" data-toggle="tab">
                        РЕГИСТРАЦИЯ
                     </h5>
                        </li>
                    </ul>
                </div>
                <div class="modal-body">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <form role="tabpanel" class="tab-pane fade in active show" id="signin">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="email form-control" id="email" placeholder="пишите свои почту">
                                <span class="valid"></span>
                                <span></span>
                            </div>
                            <div class="form-group">
                                <label for="password">Пароль</label>
                                <input type="password" class="password form-control" id="password" placeholder="пишите пароль">
                                <span class="valid"></span>
                                <span></span>
                            </div>
                            <button type="submit" class="btn btn-red btn-valid">ВОЙТИ</button>
                        </form>
                        <form role="tabpanel" class="tab-pane fade" id="signup">
                            <div class="form-group">
                                <label for="data">ФИО</label>
                                <input type="text" class="namesurname form-control" id="data" placeholder="ФИО">
                                <span class="valid"></span>
                                <span></span>
                            </div>
                            <div class="form-group">
                                <label for="phone">Телефон</label>
                                <input type="text" class="phoneNumber form-control" id="phone" placeholder="пиишите свои номер телефона">
                                <span class="valid"></span>
                                <span></span>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="email form-control" id="email" placeholder="пишите свои почту">
                                <span class="valid"></span>
                                <span></span>
                            </div>
                            <div class="form-group">
                                <label for="password">Пароль</label>
                                <input type="password" class="form-control password" placeholder="пишите пароль">
                                <span class="valid"></span>
                                <span></span>
                            </div>
                            <div class="form-group">
                                <label for="repeatPassword">Повторите пароль</label>
                                <input type="password" class="passwordRepeat form-control" id="repeatPassword" placeholder="повторите свои пароль">
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
    <section class="items">
        <div class="container">
            <h2 class="caption mb-4">Все элементы</h2>
            <div class="row">                
                <div class="col-md-6">
                        <div class="item-box d-flex">
                            <img src="img/jefood1.jpg" alt="" height="172" width="172">
                            <div class="items-right d-flex flex-column justify-content-between">
                                <div class="info">
                                    <span>Контакты: +7 727 273 25 87</span> 
                                    <span class="name">Средний счёт: 7000–15000 тенге</span> 
                                    <span class="mw-100">Адрес: пр. Абылай хана 58 А</span>
                                </div>
                                <div class="item-bottom d-flex justify-content-between align-items-center flex-wrap"> 
                                    <a href="Jefood-more.php" class="btn btn-red">
                                        подробнее
                                    </a>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-md-6">
                        <div class="item-box d-flex">
                            <img src="img/jefood2.jpg" alt="" height="172" width="172">
                            <div class="items-right d-flex flex-column justify-content-between">
                                <div class="info">
                                    <span>Контакты: +7 727 315 09 66, +7 777 273 04 57</span> 
                                    <span class="name">Средний счёт: 5000–8000 тенге</span> 
                                    <span class="mw-100">Адрес: мкр. Керемет, 7 к28</span>
                                </div>
                                <div class="item-bottom d-flex justify-content-between align-items-center flex-wrap"> 
                                    <a href="Jefood-more.php" class="btn btn-red">
                                        подробнее
                                    </a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <a class="btn btn-red" href="index.php">Главная страница</a>
        </div>
    </section>
    <footer>
      <div class="container">
        <div class="row"></div>
      </div>
    </footer>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
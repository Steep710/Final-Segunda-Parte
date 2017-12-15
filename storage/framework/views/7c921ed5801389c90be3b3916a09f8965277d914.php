<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Proyecto Final</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="./css/app.css">
        <link rel="stylesheet" type="text/css" href="./css/main.css">

        <!-- Styles -->

    </head>
    <body>
      <div class="main_container">
          <div class="main-banner">
              <div class="nav">
                <div class="logo-text">
                <div class="img">
                 <img class="logo" src="images/logo.png" alt="logo"/>
               </div>
                  <div class="text-logo">COMPANY LOGO</div>
                </div>

                  <div class="nav-bar">
                  <ul>
                  <a>About</a>
                  <a>Benefits</a>
                  <a>Download</a>
                  <button type="button" class="btn-nav" data-target="#myModal" data-toggle="modal" >Sign Up</button>
                  <!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                    Launch demo modal
                  </button> -->

                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                        </div>
                         <?php echo Form::open(['route'=>'user.store', 'method'=>'POST', 'files' => true]); ?>

                        <div class="modal-body">

                                  <label for="imagen" class="text-success">Slecciona una imagen</label><br>
                                  <input type="file" name="imagen" class="text-success"><br>
                                  <label for="descripcion" class="text-success">Descripcion</label><br>
                                  <textarea name="descripcion" class="text-success"></textarea>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                        <?php echo Form::close(); ?>

                      </div>
                    </div>
                  </div>


                </ul>
                </div>
              </div>

          </div>
  <div class="main-banner">
    <div class="banner">
          <div class="text-header col-4">GREAT SMARTPHONE APP<br>
             JUST FOR YOU!
           </div>
          <div class=" mini-header col-4">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua alcjsncsdcsd jsncakjsn sjcnsdkcskjncsd.
              </div>

          <button type="btn" class="btn-header">DOWNLOAD NOW</button>



  </div>


                  <div class="row">
                        <div class="images col-4 ">
                            <div class="images-image">
                              <div class="text">


                                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                   Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                   parturient montes.

                              </div>
                            </div>
                        </div>

                        <div class="images col-4 ">
                            <div class="images-image">

                                    <img src="img/1-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="text">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                Aenean commodo ligula eget dolor. Aenean massa.
                                Cum sociis natoque penatibus et magnis dis parturient montes.

                            </div>

                        </div>

                        <div class="images col-4 ">
                            <div class="images-image">
                              <img src="" alt="">
                                </a>
                            </div>
                            <div class="text">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                Aenean commodo ligula eget dolor. Aenean massa.
                                Cum sociis natoque penatibus et magnis dis parturient montes.
                            </div>
                        </div>
                    </div>


  </div>
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <img src="<?php echo e($user->imagen); ?>" alt=""><br>
  <p><?php echo e($user->descripcion); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <footer>
    <div class="row foot">
      <div class="images col-12">
        <div class="foot social">
          <img src="images/facebook.png" alt="">
          <img src="images/youtube.png" alt="">
          <img src="images/linkedin.png" alt="">
          <img src="images/instagram.png" alt="">
          <img src="images/twitter.png" alt="">
        </div>
      </div>


    </div>

    <div class="foot">
      <div class="container col-12">
        Copyright &copy; 2013 Company Name. All Rights Reserved</br>
        from Nethusiastic.com
      </div>
    </div>

  </footer>
</div>
  <script src="./js/app.js" charset="utf-8"></script>
  </body>
</html>

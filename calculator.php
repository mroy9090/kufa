<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Simple Calculator</title>
  </head>
  <body>
    
    <!-- javascript codes from here -->

   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- time format begin here -->


    <div class="container">
                          <div style="text-align:center;padding:1em 0;"> 
                            <h3>
                              <a style="text-decoration:none;">
                                <span style="color:gray;">Current local time in</span>
                                  <br />
                                <?php
                                  date_default_timezone_set('Asia/Dhaka');
                                  echo date_default_timezone_get();

                                  ?>

                              </a>
                            </h3> 
                            <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=medium&timezone=Asia%2FDhaka" width="100%" height="115" frameborder="0" seamless>
                              <?php
                                echo date("h:i:s a");
                                  ?>
                            </iframe>
                          </div>

    </div>

  <div class="container">
      <div class="row">
          <div class="col-12 mt-3">
            <div class="card mb-3">
                <div class="card-header bg-secondary font-italic text-white">Header</div>
                    <div class="card-body text-black">
                    <form action="index.php" method="POST">

                    <?php session_start();
                     if(isset($_SESSION['final'])){ ?>
                          <div class="alert alert-success mt-3" role="alert">
                            <?php
                               echo $_SESSION['final'];
                               unset($_SESSION['final']);
                            ?>
                          </div>
                        <?php  }?>

                        <div class="form-group">
                            <label >Enter Number One</label>
                                <input type="number" class="form-control" name="number_one">
                        </div>
                        <div class="form-group">
                            <label >Enter Number Two</label>
                                <input type="number" class="form-control" name="number_two">
                        </div>
                        <button type="submit" class="btn btn-primary alert-success" name="add">ADD</button>
                        <button type="submit" class="btn btn-dark" name="sub">SUBSTRACTION</button>
                        <button type="submit" class="btn btn-warning" name="multi">MULTIPLICAITON</button>
                        <button type="submit" class="btn btn-danger" name="div">DIVISION</button>
                        <br>
                        <?php 
                        if(isset($_SESSION['result'])){ ?>
                        <div class="alert alert-primary mt-3 " role="alert">

                          <?php
                          foreach($_SESSION['result'] as $val){
                            echo "<li>".$val."</li>";
                            unset($_SESSION['result']);
                          }
                          ?>
                        </div>
                        <?php }?>

                        

                       
                    </form>

                </div>
            </div>
        </div>
    </div>
  </div>
  </body>
</html>
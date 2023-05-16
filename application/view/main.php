<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Drinks Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./application/css/custom.css">
    <link rel="stylesheet" href="./application/css/custom.css" crossorigin="anonymous">
    <link rel="stylesheet" href="./application/css/x3dom.css">
    <link rel="stylesheet" href="./application/css/gallery.css">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/faa8c22dcb.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <script type='text/javascript' src='./application/x3dom/x3dom.js'></script>
    <script type='text/javascript' src='./application/js/swap.js'></script>
    <script type='text/javascript' src='./application/js/interaction.js'></script>
    <script type="text/javascript" src="./application/js/gallery_generator.js"></script>
    <script type="text/javascript" src="./application/js/getJsonData.js"></script>
  </head>
  
  <body>
    <nav class="navbar navbar-expand-sm navbar_coca_cola">
      <!-- Brand -->
      <div class="container-fluid">
        <div class="logo">
          <a class="navbar-brand" href="#">
          <h2>Mr</h2>
          <h3>Thirsty</h3>
          <p>Quenching all thirsts</p>
          </a>
          </div>
          
      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Links -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a id="navAbout" class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a id="navModels" id="navCoke" class="nav-link" href="#">Models</a>
            </li>
            <li class="nav-item">
              <a id="navContact" class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
    </nav>

    <div class="container main_contents">
      
      <div id="home">
        <div id="main_3d_image">
          <div id="main_text" class="col-xs-12 col-md-4">
            <h2><?php echo $data[0]['title'] ?></h2>
            <h3><?php echo $data[0]['subTitle'] ?></h2>
            <p><?php echo $data[0]['imageDescription'] ?></p>
          </div> 
        </div>

    
        <div class="container main_contents">
          <div class="row">
            <?php for ($i=1; $i <count ($data); $i++){ ?>
            <div class="col-sm-4">
              <div class="card">
                <a href="#">
                  <img src=' <?php echo $data[$i]['img'] ?> ' class="w-100"></img>
                </a>
                <div class="card-body">
                  <h2><?php echo $data[$i]['title'] ?></h2>
                  <h3><?php echo $data[$i]['subTitle'] ?></h3>
                  <p><?php echo $data[$i]['imageDescription'] ?></p>
                  <a href="#" id="navModels" class="btn btn-primary">Find out more...</a>
                </div>
              </div>
            </div>

            <br>
            <?php } ?>
          </div>
        </div>
      </div>

      <div id="about">
        <!-- Addtional Info -->
        <div class="card">
          <div class="card-body">
            <div class="infoTitle"></div>
            <div class="infoText"></div>
          </div>      
        </div>
      </div>
    
      <div id="models">

        <!-- Menu for different content -->  
        <div class="row card-body">
          <div id="title_coke" class="card-title pr-3"></div>
          <div>
            <a id="navCoke" class="btn btn-outline-dark btn-responsive" href="#">Coke</a>
            <a id="navSprite" class="btn btn-outline-dark btn-responsive" href="#">Sprite</a>
            <a id="navPepper" class="btn btn-outline-dark btn-responsive" href="#">Pepper</a>
          </div>
        </div>

        <div id="topContent" class="row">
          <!-- Description -->
          <div id="cokeDescription">
            <div class="card">
                <div class="card-body">
                  <div id="subTitle_coke" class="card-subtitle"></div>
                  <div id="description_coke" class="card-text"></div>   
                  <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Visit Coke</a>                 
                </div>
            </div>
          </div> 

          <!-- Description -->
          <div id="spriteDescription">
            <div class="card">
                <div class="card-body">
                  <div id="subTitle_sprite" class="card-subtitle"></div>
                  <div id="description_sprite" class="card-text"></div>   
                  <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Visit Sprite</a>                 
                </div>
            </div>
          </div>  

          <!-- Description -->
          <div id="pepperDescription">
            <div class="card">
                <div class="card-body">
                  <div id="subTitle_pepper" class="card-subtitle"></div>
                  <div id="description_pepper" class="card-text"></div>   
                  <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responsive">Visit Dr Pepper</a>                 
                </div>
            </div>
          </div>   

          <!-- Gallery -->
          <div class="card card-body col-sm">
            <div class="galleryTitle"></div>
            <div class="gallery row" id="gallery_coke"></div>
            <div class="pt-2 galleryText"></div>
          </div>
        </div>

        <div id="coke">

          <!-- 3d Model -->
          <div class="card row card-body">
            <h2>3D Model</h2>            
            <div class="model3D">
              <x3d id="cokeModel">
                <scene>
                  <inline nameSpaceName="modelOfCoke" mapDEFToID="true" url="assets/x3d/cokeRotateX.x3d"> </inline> 
                </scene> 
              </x3d>
            </div> 
          </div>

          <!-- 3D Model Controls -->
          <div id="interaction" class="row card">
            <h2 class="card-body">3D Model Controls</h2>
            <div class="row justify-content-between">
              <div class="col-md-3">
                <div class="card-body">
                  <h4 class="card-title">Camera Views</h4>
                  <a href="#" class="btn btn-outline-dark btn-responsive col-sm mb-1" onclick="front('modelOfCoke');">Front</a>
                  <a href="#" class="btn btn-outline-dark btn-responsive col-sm mb-1" onclick="topCam('modelOfCoke');">Top</a>
                  <a href="#" class="btn btn-outline-dark btn-responsive col-sm mb-1" onclick="bottom('modelOfCoke');">Bottom</a>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card-body">
                  <h4 class="card-title">Animations</h4>
                  <a href="#" class="btn btn-outline-dark btn-responsive col-sm mb-1" onclick="rotateX('modelOfCoke__CokeCan-TIMER');">Rotate Object</a>
                  <a href="#" class="btn btn-outline-dark btn-responsive col-sm mb-1" onclick="stopRotation('modelOfCoke__CokeCan-TIMER');">Stop Rotation</a>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card-body">
                  <h4 class="card-title">Render and Lighting</h4>
                  <a href="#" class="btn btn-outline-dark btn-responsive col-sm mb-1" onclick="wire('cokeModel');">Cycle Render</a>
                  <a href="#" class="btn btn-outline-dark btn-responsive col-sm mb-1" onclick="headlight('modelOfCoke');">Toggle Headlight</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div id="sprite">
         
          <!-- 3d Model -->
          <div class="card row card-body">
            <h2>3D Model</h2>            
            <div class="model3D">
              <x3d id="spriteModel">
                <scene>
                  <inline nameSpaceName="modelOfSprite" mapDEFToID="true" url="assets/x3d/sprite.x3d"> </inline> 
                </scene> 
              </x3d>
            </div> 
          </div>

          <!-- 3D Model Controls -->
          <div id="interaction" class="row card">
            <h2 class="card-body">3D Model Controls</h2>
            <div class="row justify-content-between">
              <div class="col-sm-3">
                <div class="card-body">
                  <h4 class="card-title">Camera Views</h4>
                  <a href="#" class="btn btn-outline-dark btn-responsive col-sm mb-1" onclick="front('modelOfSprite');">Front</a>
                  <a href="#" class="btn btn-outline-dark btn-responsive col-sm mb-1" onclick="topCam('modelOfSprite');">Top</a>
                  <a href="#" class="btn btn-outline-dark btn-responsive col-sm mb-1" onclick="bottom('modelOfSprite');">Bottom</a>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card-body">
                  <h4 class="card-title">Animations</h4>
                  <a href="#" class="btn btn-outline-dark btn-responsive col-sm mb-1" onclick="rotateX('modelOfSprite__Sprite-TIMER');">Rotate Object</a>
                  <a href="#" class="btn btn-outline-dark btn-responsive col-sm mb-1" onclick="stopRotation('modelOfSprite__Sprite-TIMER');">Stop Rotation</a>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card-body">
                  <h4 class="card-title">Render and Lighting</h4>
                  <a href="#" class="btn btn-outline-dark btn-responsive col-sm mb-1" onclick="wire('spriteModel');">Cycle Render</a>
                  <a href="#" class="btn btn-outline-dark btn-responsive col-sm mb-1" onclick="headlight('modelOfSprite');">Toggle Headlight</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div id="pepper">

          <!-- 3d Model -->
          <div class="card row card-body">
            <h2>3D Model</h2>            
            <div class="model3D">
              <x3d id="pepperModel">
                <scene>
                  <inline nameSpaceName="modelOfPepper" mapDEFToID="true" url="assets/x3d/pepper.x3d"> </inline> 
                </scene> 
              </x3d>
            </div> 
          </div>

          <!-- 3D Model Controls -->
          <div id="interaction" class="row card">
            <h2 class="card-body">3D Model Controls</h2>
            <div class="row justify-content-between">
              <div class="col-sm-3">
                <div class="card-body">
                  <h4 class="card-title">Camera Views</h4>
                  <a href="#" class="btn btn-outline-dark btn-responsive col-sm mb-1" onclick="front('modelOfPepper');">Front</a>
                  <a href="#" class="btn btn-outline-dark btn-responsive col-sm mb-1" onclick="topCam('modelOfPepper');">Top</a>
                  <a href="#" class="btn btn-outline-dark btn-responsive col-sm mb-1" onclick="bottom('modelOfPepper');">Bottom</a>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card-body">
                  <h4 class="card-title">Animations</h4>
                  <a href="#" class="btn btn-outline-dark btn-responsive col-sm mb-1" onclick="rotateX('modelOfPepper__Pepper-TIMER');">Rotate Object</a>
                  <a href="#" class="btn btn-outline-dark btn-responsive col-sm mb-1" onclick="stopRotation('modelOfPepper__Pepper-TIMER');">Stop Rotation</a>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card-body">
                  <h4 class="card-title">Render and Lighting</h4>
                  <a href="#" class="btn btn-outline-dark btn-responsive col-sm mb-1" onclick="wire('pepperModel');">Cycle Render</a>
                  <a href="#" class="btn btn-outline-dark btn-responsive col-sm mb-1" onclick="headlight('modelOfPepper');">Toggle Headlight</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div id="contact">
        <p>I would give you my email address, but I don't use it very much!</P>
      </div>
    </div>
    


    <nav class="navbar navbar-expand-sm footer">
      <div class="container-fluid">
          <div class="navbar-text float-left copyright">
              <p><span class="align-baseline"></span>&copy 2019 Mobile Web 3D Applications</p>
          </div>
          <div class="navbar-text float-right social">
              <a href="#"><i class="fab fa-facebook-square fa-2x" style="font-size:20px;color:red;"></i></a>
              <a href="#"><i class="fab fa-twitter fa-2x" style="font-size:20px;color:green;"></i></a>
              <a href="#"><i class="fab fa-google-plus fa-2x" style="font-size:20px;color:blue;"></i></a>
              <a href="#"><i class="fab fa-github-square fa-2x" style="font-size:20px;color:yellow;"></i></a>
          </div>
      </div>
    </nav>

  </body>
</html>
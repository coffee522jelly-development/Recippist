<!doctype html>
<html lang="ja">
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- CSS&JS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<script  type="text/javascript" src="js/speak.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script  type="text/javascript" src="js/jquery.validate.min.js"></script>
</head>
  <body>

    <!--上部ナビゲーションバー-->
    <nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-warning">
       <a class="navbar-brand" href="main.php">Recippist</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarCollapse">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item">
             <a class="nav-link active" href="main.php">
               <span data-feather="home"></span>
               <i class="fas fa-home"></i>&nbsp;HOME <span class="sr-only">(current)</span>
             </a>
           </li>

          <li>
           <div class="dropdown">
              <button class="btn  dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-pen"></i>&nbsp;Submit
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <button id="submit" class="dropdown-item" type="button" href="#">
                  <span data-feather="shopping-cart"></span>
                  Submit
                </button>
                <button id="submitBM" class="dropdown-item" type="button" href="#">
                  <span data-feather="shopping-cart"></span>
                  Submit Bookmark
                </button>
              </div>
            </div>
          </li>

          <li>
           <div class="dropdown">
              <button class="btn  dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-list-ul">&nbsp;</i>All view
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <button id="allview" class="dropdown-item" type="button" href="#">
                  <span data-feather="shopping-cart"></span>
                  Allview
                </button>
                <button id="allviewBM" class="dropdown-item" type="button" href="#">
                  <span data-feather="shopping-cart"></span>
                  Allview Bookmark
                </button>
              </div>
            </div>
          </li>
          <li class="nav-item">
             <a id="Recipe" class="nav-link" href="Recipe.php">
               <span data-feather="layers"></span>
               <i class="fas fa-sticky-note">&nbsp;</i>みんなのレシピ
             </a>
           </li>
           <li class="nav-item">
             <a id="myRecipe" class="nav-link" href="myRecipe.php">
               <span data-feather="layers"></span>
               <i class="fas fa-sticky-note">&nbsp;</i>マイレシピ
             </a>
           </li>
           <li class="nav-item">
              <a id="Search" class="nav-link" href="#">
                <span data-feather="layers"></span>
                <i class="fas fa-search">&nbsp;</i>Search
              </a>
            </li>
           <li class="nav-item">
              <a id="readid" class="nav-link" href="#">
                <span data-feather="layers"></span>
                <i class="fas fa-volume-up">&nbsp;</i>Speak
              </a>
            </li>
            <li class="nav-item">
               <a id="upload" class="nav-link" href="#">
                 <span data-feather="layers"></span>
                 <i class="fas fa-upload">&nbsp;</i>Upload
               </a>
             </li>
           <li class="nav-item">
              <a id="delete" class="nav-link" href="#">
                <span data-feather="layers"></span>
                <i class="fas fa-trash-alt">&nbsp;</i>Delete
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="layers"></span>
                <i class="fas fa-cog"></i>&nbsp;</i>Settings
              </a>
            </li>
           <li class="nav-item">
             <a class="nav-link" href="Login/logout.php">
               <span data-feather="layers"></span>
               <i class="fas fa-sign-out-alt">&nbsp;</i>Sign out
             </a>
           </li>
         </ul>
       </div>
     </nav>

        <main id="main" role="main" class="col-md-12">
        <!--音声認識ボタン-->
        <div id="Speechrecog" class="input-group col-md-12">
          <input id="Hello" type="text" class="form-control text" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2" value="こんにちは、何をしますか？">
          <div class="input-group-append">
            <button id="btn" class="btn btn-outline-secondary" type="button" onclick="recog()"><i class="fa fa-microphone"></i>&nbsp;音声認識</button>
          </div>
          <script>speak();</script>
        </div>

          <div id="content">
          </div>

          <!--結果表示ウィンドウ-->
          <div class="result">
            <h2>このアプリについて</h2>
            <p>こんにちは。Recippistへようこそ。</p>
            <p>このアプリは、音声操作ができる、レシピ登録サイトです。</p>
            <p>登録したレシピを閲覧することができます。</p><br>
            <p>お気に入りのレシピを「登録」してみましょう！</p><br>


            <h2>操作のヘルプ</h2>
            <p>カーソルを音声認識バーに当ててEnterキーを押すと音声認識が始まります。</p><br>

            <p>認識する語句の一覧</p>
            <ul>
              <li>「レシピ登録」</li>
              <li>「一覧」</li>
              <li>「読み上げ」</li>
              <li>「削除」</li>
              <li>「サインアウト」</li>
              <li>「アップロード」</li>
              <li>「ブックマーク」</li>
            </ul>
          </div>
          <div class="result2">
          </div>

        </main>

        <!--読み込みスクリプト-->
        <script  type="text/javascript" src="js/controller.js"></script>
        <script  type="text/javascript" src="js/buttons.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      </body>
</html>

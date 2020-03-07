<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<script data-ad-client="ca-pub-0191448244267256" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Create New Website</title>
</head>
<body>
<div class="se1">
    <div class="title">
        <h1>DIRECTORY CONTENT</h1>
        <h1>عرض محتوي مجلد</h1>
        <h3>BY Directory Path</h3>
        <h3>عن طريق مسار المجلد</h3>
    </div>
    <div class="contr">
        <form method="POST" action="backend.php">
            <div class="cont">
                    <label for="type">SAVE AS</label>
                    <select name="typeFile" id="type" autofocus>
                        <option value=".pdf" >Pdf File</option>
                        <option value=".txt" selected>Text File</option>
                        <option value=".doc">Word File</option>
                        <option value=".csv">Csv File</option>
                    </select>
            </div>
            <input type="text" name="path" id="" placeholder="paste of directory path">
            <input type="submit" value="Start">
        </form>
        <?php
        if(isset($_SESSION['docu']))
        {
            ?>
        <textarea name="view" id="view" rows="10"><?= $_SESSION['docu']?></textarea>
        <div class="text-center">
        <a href="<?='dir'. $_SESSION['type']?>" download class="btn btn-primary btn-lg active my-3" role="button" aria-pressed="true">Download</a>
        </div>    
        <?php
        }
        ?>
    </div>
</div>
<?php
require'ads.php';
?>
<section id="adv" class="row justify-content-center">
    <div class="col-5 text-center">
          <a href="https://mena.yougov.com/ar/refer/VAAAZyy1phNS0-ndVbQ41A/">
              <img src="https://kareem-osman.github.io/img/yougov.jpg" alt="" width="300px" />
          </a>
    </div>
    <div class="col-5 text-center">
        <a href='https://waffarx.com/en-EG/r/X7MLI370' target='_blank' style='text-align:center;'>
          <img src='https://waffarx.com/img/waffar-button.png' style='display:inline-block;margin:10px auto;'/> 
        </a>
        <br />
        <span style="color: red; text-shadow: black 1px 1px 2px; font-size: 22px;">كاش باك لمشترواتك من اشهر المتاجر الالكترونيا في مصر</span>
        <br />
        <span style="color: rgb(104, 2, 65); text-shadow: black 1px 1px 2px;font-size: 20px;">سوق وجوميا وغيرهم كتير</span>
        <br />
    </div>
</section>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
<?php
session_unset();
?>
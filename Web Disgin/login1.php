<?php
if(isset($_POST['sub'],$_POST['g-recaptcha-response'])){
    $secret="6Le94nUpAAAAAJezs_QUQlDE2Y7nL5weC-c3RSdy";
    $response=$_POST['g-recaptcha-response'];
    $url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$response;
    $recaptcha=json_decode( file_get_contents($url));
    if($recaptcha->success){
        header('Location:http://localhost:88/Web%20Disgin/final.php?');
    }else{
        header('Location:http://localhost:88/Web%20Disgin/login1.php?');
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Document</title>
    <!-- <link rel="stylesheet" href="login1.css"> -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    
    <center>
    <div class="box">
        <br><br>
        <span class="borderline"></span>
        
        <form action="fun/test.php" method="post">
            <h2> تسجيل الدخول</h2>
            <div class="inputBox">
                <input type="" name="n1" required="required">
                <span>اسم المستخدم</span>
            </div>
                <div class="inputBox">
                    <input type="" name="n2" required="required">
                    <span>كلمة المرور</span>                  
            </div>
            <div class="inputBox">
            <label><input type="checkbox" name="remember">Remember me </label>
            </div>
           <div class="links">
            <a href="acount.php" >ليس لدي حساب</a>           
            </div> 
            <br>
            <div class="g-recaptcha" data-sitekey="6Le94nUpAAAAAI-_N79iRC1CKxkjIjqCoaHqsHJD"></div>
      <br/>
           <a href="final.php"id="a"><input type="submit" name="sub" value="دخول" id="a"></a><br>

        </form>
        
    </div>
</center>
</body>
</html>
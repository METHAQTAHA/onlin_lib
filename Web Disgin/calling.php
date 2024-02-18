<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مكتبة الألكترونية</title>
    <link rel="stylesheet" href="final.css">
</head>

<body ><?php 
    include 'list.php';
    ?>


  <div style=" width: 100%;
  position: fixed;top: 0;">
  <ul>
  <li><a href="calling.php">اتصل بنا</a></li>
  <li><a href="books.php">الكتب</a></li>
  <li><a href="about.php">حول المكتبة</a></li>
  <li><a href="final.php">الرئيسية</a></li>
  <li style="float: right;"><a href="login1.php">تسجيل الدخول</a></li>
 
   </ul>
   </div>
   
   <center>
    <br><br>
   <h1 style="color:black;">مكتبة الصباحي </h1>
   <div id="m1" style="background: skyblue;
   width: 1075px;
   height: 400px;border-radius: 18px;">
   
   <br><br>
<br><br>
<h2>اتصل بنا رأيك يهمنا</h2>
<form style="width: 500px; height: 100px;">
         <div>          
           <label class="f25">الأسم</label>
           <input class="f75" type=""  name="">
         </div>
         <div>          
           <label class="f25">العنوان</label>
           <input class="f75" type="" name="">
         </div>
         <div>         
           <label class="f25">الايميل</label>
            <input class="f75" type="" name="">
         </div>
         <div>         
           <label class="f25">الرسالة</label>
            <input class="f75" type="" name="">
         </div>
         <div>
          <input  type="submit" name="" value="ارسال">
         </div>
</form>
 
  </div>
  
  </center>
</body>
</html>
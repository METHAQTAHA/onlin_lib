    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Document</title>
    
</head>
<body>
<?php
    include 'list.php';
   // $re=$_GET['re'];

    ?> 
    <div class="box">
    <br><br><br><br>
        <span class="borderline"></span>
        
        <form method="get"action="fun/add_user.php">
            <h2> تسجيل حساب جديد</h2>
            <div class="inputBox">
                <input type="text" name="User_Name" required="required"  placeholder="الاسم">
                <span>الاسم  </span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" name="Full_Name" required="required"placeholder="الاسم كامل">
                <span>الاسم كامل </span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" name="Phone_Nu" required="required"placeholder="رقم التلفون">
                <span>رقم التلفون </span>
                <i></i>
            </div>
                <div class="inputBox">
                    <input type="password" name="Password" required="required"placeholder=" كلمة المرور">
                    <span>كلمة المرور</span>
                    <i></i>
                    
            </div>
            <div class="inputBox">
                <input type="password" name="Reset_Password" placeholder=" اعادة كلمةالمرور">
                <span>اعادة كلمة المرور</span>
                <i></i>      
        </div>
        <div class="inputBox">
            <input type="text" name="Stage" placeholder="المرحلة">
            <select>
                <option value="الاولى"></option>
                <option value="الثانية"></option>
                <option value="الثالثة"></option>
            </select>
                

            <span>المرحلة </span>
    </div> 

        <!-- <?php 
        
        if($re=='1'){
            echo "كلمة السر غير متطابقة";
        }
        ?>-->
           <a href="final.php"id="a"><input type="submit" value="تسجيل" id="a"></a><br>

        </form>
        
    </div>
   
</body>
</html>
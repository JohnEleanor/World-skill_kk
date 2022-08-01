<?php 
    require_once 'System/config.php';
    session_start();
    if ($_SESSION["Status"] == "" && $_SESSION["Name"] == "" && $_SESSION["Status"] == ""){
        echo "<script type = text/javascript>alert('กรุณา Login ก่อน')</script>";
        header('Refresh:0 index.php');
    }

    $_SESSION["IDMember"];
    $_SESSION["Name"];
    $_SESSION["Status"];


    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
  

    <link rel="stylesheet" href="asset/style.css">
    <link rel="stylesheet" href="asset/genius.css">
</head>
<body>
    <!-- header -->
    <header class="w-full px-6">
        <div class="container mx-auto max-w-xl md:flex justify-between items-center bg-color: black;">
            <a href="index.php" class="block py-6 w-full text-center md:text-left md:w-auto text-grey-dark no-underline flex justify-center items-center">
                Your Logo
            </a>
            <div class="w-full md:w-auto mb-6 md:mb-0">
            <?php if($_SESSION["Status"] == "ผู้ซื้อสินค้า"){ ?>
                <a href="dashboard.php" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg">หน้าแรก</a>
                <a href="orders.php" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg">รายการสินค้าที่ได้สั่งซื้อ</a>
                <?php }elseif($_SESSION["Status"] == "ผู้ขายสินค้า"){  ?>
                    <a href="dashboard.php" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg">หน้าแรก</a>
                    <a href="products.php" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg">รายการสินค้าที่ลงขาย</a>
                    <a href="sales.php" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg">รายการสินค้าที่ถูกสั่งซื้อ</a>
             <?php }elseif($_SESSION["Status"] == "ผู้ซื้อและขายสินค้า"){  ?>
                    <a href="dashboard.php" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg">หน้าแรก</a>
                <a href="products.php" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg">รายการสินค้าที่ลงขาย</a>
                <a href="sales.php" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg">รายการสินค้าที่ถูกสั่งซื้อ</a>
                <a href="orders.php" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg">รายการสินค้าที่ได้สั่งซื้อ</a>
                <?php }?>
            </div>
            <div class="w-full md:w-auto mb-6 md:mb-0 text-center md:text-right">
            <?php if($_SESSION["IDMember"] == "") {?>
                    <a href="login.php" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg">เข้าสู่ระบบ</a>
                    <a href="register.php" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg">สมัครสมาชิก</a>
                <?php }else{  ?>
                    <a href="logout.php" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg">ออกจากระบบ</a>
                    <button class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg"><?php echo("ผู้ใช้: {$_SESSION["Name"]} ") ?> </button>
                <?php }?>
            </div>
        </div>

    </header>
    <!-- /header -->

    <!-- hero -->
    <div class="w-full">
        <img src="img/1800x800.png">
    </div>
    <!-- /hero -->
    <?php 
		$strSQL = "SELECT * FROM tb_member AS M LEFT JOIN tb_group AS G ON  (M.FarmersGroup = G.IdGroup)  GROUP BY IdGroup";
        $objQuery = mysqli_query($conn,$strSQL) or die ("Error Query [".$strSQL."]");
        $Num_Rows = mysqli_num_rows($objQuery);
        if($Num_Rows <= 0 ){
	            echo "<span class=\"txt2\"><b>ยังไม่มีสินค้าลงทะเบียนจากกลุ่มสมาชิกเกษตรกร</b></span><br>";
        }
        ?>
    <!-- home content -->
    <div class="w-full px-6 py-12">
        <div class="container max-w-xl mx-auto text-center">
            <h3 class="text-3xl md:text-4xl text-center max-w-md mx-auto text-grey-darkest mb-6">
                กลุ่มเกษตรกร
            </h3>
        </div>
        <?php 
        
        $querry = mysqli_query($conn,'SELECT * FROM tb_products ORDER BY idProducts DESC');
        while($result = mysqli_fetch_array($querry)){
        ?>

        <div class="container max-w-xl mx-auto text-center flex flex-wrap items-start md:flex-no-wrap">
            <div class="my-4 w-full md:w-1/3 flex flex-col items-center justify-center px-4">
                <img src="img/im.png" class="mb-6" />
                <h2 class="text-2xl mb-2"><?=$result['idProducts']?></h2>
                <p class="mt-3 mx-auto text-sm leading-normal"><?=$result['Summary Info']?></p>
                <a href="group.html" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded">ราคา <?=$result['Price']?> </a>
            </div>

            <div class="my-4 w-full md:w-1/3 flex flex-col items-center justify-center px-4">
                <img src="img/im.png" class="mb-6" />

                <h2 class="text-2xl mb-2"><?=$result['idProducts']?></h2>
                <p class="mt-3 mx-auto text-sm leading-normal"><?=$result['Summary Info']?></p>
                <a href="group.html" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded">ราคา <?=$result['Price']?> </a>
            </div>

            <div class="my-4 w-full md:w-1/3 flex flex-col items-center justify-center px-4">
                <img src="img/im.png" class="mb-6" />

                <h2 class="text-2xl mb-2"><?=$result['idProducts']?></h2>
                <p class="mt-3 mx-auto text-sm leading-normal"><?=$result['Summary Info']?></p>
                <a href="group.html" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded">ราคา <?=$result['Price']?> </a>
            </div>
        </div>
    </div>
    <?php } ?>
    <!-- /home content -->
    <!-- footer -->
    <footer class="w-full px-6 border-t">
        <div class="container mx-auto max-w-xl py-6 flex flex-wrap md:flex-no-wrap justify-between items-center text-sm">
            &copy;2019 Your Company. All rights reserved.
            <div class="pt-4 md:p-0 text-center md:text-right text-xs">
                Web Design & Development
            </div>
        </div>
    </footer>
    <!-- /footer -->
</body>
</html>

<?php 
require_once('System/config.php');
session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your title</title>
    <link rel="stylesheet" href="asset/style.css">
    
</head>
<script language = "javascript"> 


</script>
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
<body>

    <!-- register form -->

    <div class = "container justify-center">
    <form class="bg-white px-8 pt-6 pb-8 mb-4" action= "System/update.php" method = "post">

    


        <?php 
        
        $sql = "SELECT * FROM tb_products WHERE idProducts = {$_GET['Update']}";
        // echo $sql;

        $query = mysqli_query($conn, $sql);
        $result = mysqli_fetch_array($query);
        ?>
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="email">
            Id สินค้า
            </label>
            <input class="appearance-none border w-full py-2 px-3 text-grey-darker leading-tight" id="email" name = "idProducts" type="text" placeholder="คำแนะนำ เปลี่ยนด้วย" required value = "<?php echo $result['idProducts'] ?>">
        </div>
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="phone">
            ชื่อสินค้า
            </label>
            <input class="appearance-none border w-full py-2 px-3 text-grey-darker leading-tight" id="phone" name = "Name" type="text" placeholder="คำแนะนำ เปลี่ยนด้วย" required value = "<?php echo $result['Name'] ?>">
        </div>
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="address">
            ราคาสินค้า
            </label>
            <input class="appearance-none border w-full py-2 px-3 text-grey-darker leading-tight" id="address" name = "Price" type="text" placeholder="คำแนะนำ เปลี่ยนด้วย" required value = "<?php echo $result['Price'] ?>">
        </div>
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="province">
            เกี่ยวกับสินค้า
            </label>
            <input class="appearance-none border w-full py-2 px-3 text-grey-darker leading-tight" id="province" name = "Info" type="text" placeholder="คำแนะนำ เปลี่ยนด้วย" required value = "<?php echo $result['Summary Info'] ?>">
        </div>
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="district">
            โพสเมื่อ
            </label>
            <input class="appearance-none border w-full py-2 px-3 text-grey-darker leading-tight" id="district" name = "PostOn" type="text" placeholder="คำแนะนำ เปลี่ยนด้วย" required value = "<?php echo $result['PostOn'] ?>">
        </div>
        <div class="flex items-center justify-between">
            <!-- <a href="index.html" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg">Register</a> -->
            <input type = "submit" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg" name = "btnUpdate" id = "btnUpdate" value = "update">
        </div>
    </form>
</div>

<footer class="w-full px-6 border-t">
        <div class="container mx-auto max-w-xl py-6 flex flex-wrap md:flex-no-wrap justify-between items-center text-sm">
            &copy;2019 Your Company. All rights reserved.
            <div class="pt-4 md:p-0 text-center md:text-right text-xs">
                Web Design & Development
            </div>
        </div>
    </footer>

</body>
</html>
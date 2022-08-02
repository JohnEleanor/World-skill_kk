<?php 
require_once('System/config.php');



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
<body>

    <!-- register form -->

    <!-- <div class = "flex item-center justify-center"> -->
    <form class="bg-white px-8 pt-6 pb-8 mb-4" action= "System/update.php" method = "post">

        
        


        <!-- <div class="flex flex-wrap -mx-3 mb-4">
            <div class="w-full md:w-1/2 px-3">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="firstname">
                ชื่อ
                </label>
                <input class="appearance-none border w-full py-2 px-3 text-grey-darker leading-tight"
                 id="firstname" name = "firstname" type="text" placeholder="คำแนะนำ เปลี่ยนด้วย" required>
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="lastname">
                นามสกุล
                </label>
                <input class="appearance-none border w-full py-2 px-3 text-grey-darker leading-tight" id="lastname" name = "lastname" type="text" placeholder="คำแนะนำ เปลี่ยนด้วย" required>
            </div>
        </div> -->


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
        <!-- <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="subdistrict">
            ตำบล/แขวง
            </label>
            <input class="appearance-none border w-full py-2 px-3 text-grey-darker leading-tight" id="subdistrict" name = "subdistrict" type="text" placeholder="คำแนะนำ เปลี่ยนด้วย" required>
        </div>
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="zipcode">
            รหัสไปรษณีย์
            </label>
            <input class="appearance-none border w-full py-2 px-3 text-grey-darker leading-tight" id="zipcode"  name = "zipcode" type="text" placeholder="คำแนะนำ เปลี่ยนด้วย" required>
        </div>
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
            รหัสผ่าน
            </label>
            <input class="appearance-none border w-full py-2 px-3 text-grey-darker mb-3 leading-tight" id="password" name = "password" type="password" placeholder="******************" required>
        </div>
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="confirm-password">
            ยืนยันรหัสผ่าน
            </label>
            <input class="appearance-none border w-full py-2 px-3 text-grey-darker mb-3 leading-tight" id="confirm-password" name = "confirm-password" type="password" placeholder="******************" required>
        </div> -->
        <div class="flex items-center justify-between">
            <!-- <a href="index.html" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg">Register</a> -->
            <input type = "submit" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg" name = "btnUpdate" id = "btnUpdate" value = "update">
        </div>
    </form>
<!-- </div> -->

    
    <!-- /register form -->

    <!-- footer -->
    <p class="text-center text-grey text-xs">
        &copy;2019 Your Company. All rights reserved.
    </p>
    <!-- /footer -->
</body>
</html>


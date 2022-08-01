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
<body>
    <!-- header -->
    <header class="w-full px-6">
        <div class="container mx-auto max-w-xl md:flex justify-between items-center">
            <a href="dashboard.php" class="block py-6 w-full text-center md:text-left md:w-auto text-grey-dark no-underline flex justify-center items-center">
                Your Logo
            </a>
            <div class="w-full md:w-auto mb-6 md:mb-0">
                <a href="dashboard.php" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg">หน้าแรก</a>
                <a href="products.php" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg">รายการสินค้าที่ลงขาย</a>
                <a href="sales.php" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg">รายการสินค้าที่ถูกสั่งซื้อ</a>
                <a href="orders.php" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg">รายการสินค้าที่ได้สั่งซื้อ</a>
            </div>
            <div class="w-full md:w-auto mb-6 md:mb-0 text-center md:text-right">
                <a href="login.php" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg">Sign in</a>
                <a href="register.php" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg">Register</a>
            </div>
        </div>

    </header>
    <!-- /header -->

    <!-- product list -->
    <div class="container max-w-xl mx-auto text-left flex items-center flex-wrap">
        <h1>รายการสินค้าที่ลงขาย</h1>
        <a href="#" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg">ลงขายสินค้า</a>
        <table class="table-collapse w-full">
            <thead>
                <tr>
                    <th class="font-semibold text-grey-darker p-2 bg-grey-lightest">No</th>
                    <th class="font-semibold text-grey-darker p-2 bg-grey-lightest">Name</th>
                    <th class="font-semibold text-grey-darker p-2 bg-grey-lightest">Price</th>
                    <th class="font-semibold text-grey-darker p-2 bg-grey-lightest">Summary Info</th>
                    <th class="font-semibold text-grey-darker p-2 bg-grey-lightest">Post on</th>
                    <th class="font-semibold text-grey-darker p-2 bg-grey-lightest">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $sql = "SELECT * FROM `tb_products`";
                $query = mysqli_query($conn, $sql);
                while($result=mysqli_fetch_array($query)){ ?>
                <tr>
                    <td class="p-2 border-t border-grey-light"><?=$result['idProducts']?></td>
                    <td class="p-2 border-t border-grey-light"><?=$result['Name']?></td>
                    <td class="p-2 border-t border-grey-light"><?=$result['Price']?></td>
                    <td class="p-2 border-t border-grey-light"><?=$result['Summary Info']?></td>
                    <td class="p-2 border-t border-grey-light"><?=$result['PostOn']?></td>
                    <td>
                        <a href="System/Edit.php?Edit=<?php echo $result['idProducts']?>" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg">Edit</a>
                        <a href="System/delete.php?Del=<?php echo $result['idProducts']?>" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- /product list -->

    <!-- footer -->
    <footer class="w-full px-6 border-t mt-12">
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
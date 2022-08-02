<?php 

require('System/config.php');
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
                <a href="dashboard.php" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded ">หน้าแรก</a>
                <a href="products.php" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded ">รายการสินค้าที่ลงขาย</a>
                <a href="sales.php" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded ">รายการสินค้าที่ถูกสั่งซื้อ</a>
                <a href="orders.php" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded ">รายการสินค้าที่ได้สั่งซื้อ</a>
            </div>
            <div class="w-full md:w-auto mb-6 md:mb-0 text-center md:text-right">
                <a href="login.php" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded">Sign in</a>
                <a href="register.php" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded">Register</a>
            </div>
        </div>

    </header>
    <!-- /header -->

    <!-- sale list -->
    <div class="container max-w-xl mx-auto text-left flex items-center flex-wrap">
        <h1>รายการสินค้าที่ถูกสั่งซื้อ</h1>
        <table class="table-collapse w-full">
            <thead>
                <tr>
                    <th class="text-grey-darker p-2 bg-grey-lightest">No</th>
                    <th class="text-grey-darker p-2 bg-grey-lightest">Name</th>
                    <th class="text-grey-darker p-2 bg-grey-lightest">Amount</th>
                    <th class="text-grey-darker p-2 bg-grey-lightest">Price</th>
                    <th class="text-grey-darker p-2 bg-grey-lightest">Total Price</th>
                    <th class="text-grey-darker p-2 bg-grey-lightest">Buyer</th>
                    <th class="text-grey-darker p-2 bg-grey-lightest">Order at</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $sql = 'SELECT * FROM tb_sales';
                $query = mysqli_query($conn,$sql);
                while($result = mysqli_fetch_array($query)){ ?>
                <tr>
                    <td class="p-2 border-t border-grey-light"><?=$result['IdSales']?></td>
                    <td class="p-2 border-t border-grey-light"><?=$result['Name']?></td>
                    <td class="p-2 border-t border-grey-light"><?=$result['Amount']?></td>
                    <td class="p-2 border-t border-grey-light"><?=$result['Price']?></td>
                    <td class="p-2 border-t border-grey-light"><?=$result['TotalPrice']?></td>
                    <td class="p-2 border-t border-grey-light"><?=$result['Buyer']?></td>
                    <td class="p-2 border-t border-grey-light"><?=$result['OrderAt']?></td>
                </tr>
                <!-- // <tr>
                //     <td class="p-2 border-t border-grey-light">2</td>
                //     <td class="p-2 border-t border-grey-light">Product B</td>
                //     <td class="p-2 border-t border-grey-light">1</td>
                //     <td class="p-2 border-t border-grey-light">150฿</td>
                //     <td class="p-2 border-t border-grey-light">150฿</td>
                //     <td class="p-2 border-t border-grey-light">User ABC</td>
                //     <td class="p-2 border-t border-grey-light">22/10/2019</td>
                // </tr> -->
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- /sale list -->

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
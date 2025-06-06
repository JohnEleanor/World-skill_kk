<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your title</title>
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
                <!-- <a href="index.php" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg">หน้าแรก</a> -->
                
                <!-- <a href="products.html" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 ">รายการสินค้าที่ลงขาย</a>
                <a href="sales.html" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 ">รายการสินค้าที่ถูกสั่งซื้อ</a>
                <a href="orders.html" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 ">รายการสินค้าที่ได้สั่งซื้อ</a> -->
            </div>
            <div class="w-full md:w-auto mb-6 md:mb-0 text-center md:text-right">
            <a href="login.php" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg">เข้าสู่ระบบ</a>
                <a href="register.php" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg">สมัครสมาชิก</a>
        </div>
        </div>

    </header>
    <!-- /header -->
    <div class="h-screen">  
        <div class="container mx-auto h-full flex justify-center items-center">
            <div class="w-1/3">
                <div class="w-full max-w-xs">

                    <!-- login form -->
                    <form class="bg-white px-8 pt-6 pb-8 mb-4 gg" method="post" action="System/checklogin.php" autocompleate = "off">
                        <div class="mb-4">
                            <label class="block text-grey-darker text-sm font-bold mb-2" for="username">
                            username
                            </label>
                            <input class="appearance-none border w-full py-2 px-3 text-grey-darker leading-tight" name = "username" id="username" type="text" placeholder="email">
                        </div>
                        <div class="mb-4">
                            <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
                            password
                            </label>
                            <input class="appearance-none border w-full py-2 px-3 text-grey-darker mb-3 leading-tight" name = "password" id="password" type="password" placeholder="******************">
                        </div>
                        <div class="flex items-center justify-between">
                            <!-- <a href="index.html" class="inline-block no-underline bg-black text-white text-sm py-2 px-3">Login</a> Old --> 
                            <input type= "submit"  class="button11 inline-block no-underline bg-white text-white text-sm py-2 px-3 rounded" value = "เข้าสู่ระบบ">
                        </div>
                    </form>
                    <!-- /login form -->

                    <!-- footer -->
                    <p class="text-center text-grey text-xs">
                        &copy;2019 Your Company. All rights reserved.
                    </p>
                    <!-- /footer -->
                </div>
            </div>
        </div>
    </div>

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
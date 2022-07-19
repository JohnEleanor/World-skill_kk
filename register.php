<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your title</title>
    <link rel="stylesheet" href="asset/style.css">
</head>
<script language = "javascript"> 

function(){

}

</script>
<body>

    <!-- register form -->

    <!-- <div class = "flex item-center justify-center"> -->
    <form class="bg-white px-8 pt-6 pb-8 mb-4" action= "System/register.php" method = "post">
        <!-- <div class="flex flex-wrap -mx-3 mb-4">
            <div class="w-full md:w-1/2 px-3">
                <input type="checkbox" id="seller" name = "seller" checked>
                <label for="seller">สมัครเป็นผู้ซื้อ</label>
            </div>
            <div class="w-full md:w-1/2 px-3">
                <input type="checkbox" id="buyer" name = "buyer" checked>
                <label for="buyer">สมัครเป็นผู้ขาย</label>
            </div> //old
        </div> -->
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" >
            สิทธิ์ของผู้ใช้งาน 
            </label> 
            <select  class="appearance-none border w-full py-2 px-3 text-grey-darker leading-tight" name="type" id="type" required>
                    <option value="">โปรดระบุสิทธิ์ของผู้ใช้งาน</option>
                     <option value="ผู้ซื้อสินค้า">ผู้ซื้อสินค้า</option>
                    <option value="ผู้ขายสินค้า">ผู้ขายสินค้า</option>
                    <option value="ผู้ซื้อและขายสินค้า">ผู้ซื้อและขายสินค้า</option>
            </select>
        </div>
        <label class="block text-grey-darker text-sm font-bold mb-2">
        กลุ่มสมาชิกเกษตรกร
            </label> 
            <select  class="appearance-none border w-full py-2 px-3 text-grey-darker leading-tight" name="group" id="Group" required>
                    <option value="">โปรดระบุกลุ่มสมาชิกเกษตรกร</option>
                    <option value="1">Group 1</option>
                    <option value="2">Group 2</option>
                    <option value="3">Group 3</option>
                    <option value="4">Group 4</option>
                    <option value="5">Group 5</option>
                    <option value="6">Group 6</option>
                    <option value="7">Group 7</option>
                    <option value="8">Group 8</option>
                    <option value="9">Group 9</option>
                    <option value="10">Group 10</option>
            </select>
        </div>
        <div class="flex flex-wrap -mx-3 mb-4">
            <div class="w-full md:w-1/2 px-3">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="firstname">
                ชื่อ
                </label>
                <input class="appearance-none border w-full py-2 px-3 text-grey-darker leading-tight"
                 id="firstname" name = "firstname" type="text" placeholder="คำแนะนำ เปลี่ยนด้วย">
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="lastname">
                นามสกุล
                </label>
                <input class="appearance-none border w-full py-2 px-3 text-grey-darker leading-tight" id="lastname" name = "lastname" type="text" placeholder="คำแนะนำ เปลี่ยนด้วย">
            </div>
        </div>
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="email">
            อีเมล์
            </label>
            <input class="appearance-none border w-full py-2 px-3 text-grey-darker leading-tight" id="email" name = "email" type="text" placeholder="คำแนะนำ เปลี่ยนด้วย">
        </div>
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="phone">
            เบอร์มือถือ
            </label>
            <input class="appearance-none border w-full py-2 px-3 text-grey-darker leading-tight" id="phone" name = "phone" type="text" placeholder="คำแนะนำ เปลี่ยนด้วย">
        </div>
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="address">
            ที่อยู่
            </label>
            <input class="appearance-none border w-full py-2 px-3 text-grey-darker leading-tight" id="address" name = "address" type="text" placeholder="คำแนะนำ เปลี่ยนด้วย">
        </div>
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="province">
            จังหวัด
            </label>
            <input class="appearance-none border w-full py-2 px-3 text-grey-darker leading-tight" id="province" name = "province" type="text" placeholder="คำแนะนำ เปลี่ยนด้วย">
        </div>
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="district">
            อำเภอ/เขต
            </label>
            <input class="appearance-none border w-full py-2 px-3 text-grey-darker leading-tight" id="district" name = "district" type="text" placeholder="คำแนะนำ เปลี่ยนด้วย">
        </div>
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="subdistrict">
            ตำบล/แขวง
            </label>
            <input class="appearance-none border w-full py-2 px-3 text-grey-darker leading-tight" id="subdistrict" name = "subdistrict" type="text" placeholder="คำแนะนำ เปลี่ยนด้วย">
        </div>
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="zipcode">
            รหัสไปรษณีย์
            </label>
            <input class="appearance-none border w-full py-2 px-3 text-grey-darker leading-tight" id="zipcode"  name = "zipcode" type="text" placeholder="คำแนะนำ เปลี่ยนด้วย">
        </div>
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
            รหัสผ่าน
            </label>
            <input class="appearance-none border w-full py-2 px-3 text-grey-darker mb-3 leading-tight" id="password" name = "password" type="password" placeholder="******************">
        </div>
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="confirm-password">
            ยืนยันรหัสผ่าน
            </label>
            <input class="appearance-none border w-full py-2 px-3 text-grey-darker mb-3 leading-tight" id="confirm-password" name = "confirm-password" type="password" placeholder="******************">
        </div>
        <div class="flex items-center justify-between">
            <!-- <a href="index.html" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg">Register</a> -->
            <input type = "submit" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg" name = "btnInsert" id = "btnInsert" value = "Register">
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
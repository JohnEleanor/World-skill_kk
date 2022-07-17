<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your title</title>
    <link rel="stylesheet" href="asset/style.css">
</head>
<body>

    <!-- register form -->

    <div class = "flex item-center">
    <form class="bg-white px-8 pt-6 pb-8 mb-4" >
        <div class="flex flex-wrap -mx-3 mb-4">
            <div class="w-full md:w-1/2 px-3">
                <input type="checkbox" id="seller" checked>
                <label for="seller">สมัครเป็นผู้ซื้อ</label>
            </div>
            <div class="w-full md:w-1/2 px-3">
                <input type="checkbox" id="buyer" checked>
                <label for="buyer">สมัครเป็นผู้ขาย</label>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-4">
            <div class="w-full md:w-1/2 px-3">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="firstname">
                ชื่อ
                </label>
                <input class="appearance-none border w-full py-2 px-3 text-grey-darker leading-tight" id="firstname" type="text" placeholder="คำแนะนำ เปลี่ยนด้วย">
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="lastname">
                นามสกุล
                </label>
                <input class="appearance-none border w-full py-2 px-3 text-grey-darker leading-tight" id="lastname" type="text" placeholder="คำแนะนำ เปลี่ยนด้วย">
            </div>
        </div>
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="email">
            อีเมล์
            </label>
            <input class="appearance-none border w-full py-2 px-3 text-grey-darker leading-tight" id="email" type="text" placeholder="คำแนะนำ เปลี่ยนด้วย">
        </div>
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="phone">
            เบอร์มือถือ
            </label>
            <input class="appearance-none border w-full py-2 px-3 text-grey-darker leading-tight" id="phone" type="text" placeholder="คำแนะนำ เปลี่ยนด้วย">
        </div>
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="address">
            ที่อยู่
            </label>
            <input class="appearance-none border w-full py-2 px-3 text-grey-darker leading-tight" id="address" type="text" placeholder="คำแนะนำ เปลี่ยนด้วย">
        </div>
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="province">
            จังหวัด
            </label>
            <input class="appearance-none border w-full py-2 px-3 text-grey-darker leading-tight" id="province" type="text" placeholder="คำแนะนำ เปลี่ยนด้วย">
        </div>
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="district">
            อำเภอ/เขต
            </label>
            <input class="appearance-none border w-full py-2 px-3 text-grey-darker leading-tight" id="district" type="text" placeholder="คำแนะนำ เปลี่ยนด้วย">
        </div>
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="subdistrict">
            ตำบล/แขวง
            </label>
            <input class="appearance-none border w-full py-2 px-3 text-grey-darker leading-tight" id="subdistrict" type="text" placeholder="คำแนะนำ เปลี่ยนด้วย">
        </div>
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="zipcode">
            รหัสไปรษณีย์
            </label>
            <input class="appearance-none border w-full py-2 px-3 text-grey-darker leading-tight" id="zipcode" type="text" placeholder="คำแนะนำ เปลี่ยนด้วย">
        </div>
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
            รหัสผ่าน
            </label>
            <input class="appearance-none border w-full py-2 px-3 text-grey-darker mb-3 leading-tight" id="password" type="password" placeholder="******************">
        </div>
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="confirm-password">
            ยืนยันรหัสผ่าน
            </label>
            <input class="appearance-none border w-full py-2 px-3 text-grey-darker mb-3 leading-tight" id="confirm-password" type="password" placeholder="******************">
        </div>
        <div class="flex items-center justify-between">
            <a href="index.html" class="inline-block no-underline bg-black text-white text-sm py-2 px-3 rounded-lg">Register</a>
        </div>
    </form>
</div>

    
    <!-- /register form -->

    <!-- footer -->
    <p class="text-center text-grey text-xs">
        &copy;2019 Your Company. All rights reserved.
    </p>
    <!-- /footer -->
</body>
</html>
# itf-laravel
อธิบายขั้นตอน คำสั่งที่สอนไปในคลาสนะครับ (ตกหล่นตรงไหนถามพี่ได้ที่ [Facebook](https://www.facebook.com/memory.se) พี่เลย)

### เตรียม enviroment ของเครื่อง
1. ติดตั้ง xampp (PHP 7.1.10)
2. ติดตั้ง [Composer](https://getcomposer.org/download/) - สำหรับ Windows เลือก Windows Installer นะครับ

วิธีใช้งานข้างล่างนี้สามารถหาข้อมูลเพิ่มเติมได้จาก Doc หลักของ [Laravel](https://laravel.com/docs/5.5)

#### Download Laravel Install via Composer
```
composer global require "laravel/installer"
```

#### สร้าง Laravel Project
```
laravel new itf
```
* itf คือชื่อ folder หรือ project ที่เราจะตั้งนะ ไม่จำเป็นต้องใช้คำว่า itf
```
cd itf
```
* cd blog คือการเข้าไปใน folder ที่เพิ่งถูกสร้างขึ้นมา
เมื่อเสร็จแล้วก็ไปต่อที่ ....

### Run Development Server
> วิธีนี้คือการเปิดเซิฟเวอร์สำหรับพัฒนาเท่านั้น เวลาเอาเว็บขึ้นบนเซิฟเวอร์จริงๆใช้ไม่ได้นะครับ มันไม่ได้ถูกออกแบบมาเพื่องานนั้น

เราสามารเปิดเซิฟเวอร์ได้ด้วยคำสั่ง
```
php artisan serv
```
ถ้าทุกอย่างเป็นไปตามปกติ จะขึ้นคำว่า 
```
Laravel development server started: <http://127.0.0.1:8000>
```
ให้ลองเปิด web broswer แล้วเข้า http://127.0.0.1:8000 จะพบหน้า welcome ของ Laravel ครับ

### อธิบายคำสั่งในคลาส
```
php artisan migrate
```
* อ่าน migration file ที่มี เอาไปสร้าง database ครับ
```
php artisan make:magration create_customers_database
```
* สร้าง migration file (Blueprint ของตาราง บนฐานข้อมูล ที่เราอยากได้)
```
php artisan make:controller StudentController
```
สร้าง controller ขึ้นมา ชื่อ StudentController (จะชื่ออะไรก็ได้ครับ หลักการตั้งคือ _ชื่อที่อยากได้ ตัวแรกหัวใหญ่_Controller) 

### Docker Way
> สำหรับน้องที่ใช้ xampp แล้ว ข้ามส่วนนี้ไปครับบบบ

สำหรับน้องที่ใช้ Docker ได้ วิธีนี้จะทำให้น้องไม่ต้องลง xampp นะครับ เพราะเราจะใช้ Docker เปิดให้เรา ครอบคลุมแค่ส่วน phpmyadmin กับ mysql database เท่านั้นนะครับ สำหรับ laravel น้องๆยังต้องลงด้วยวิธีปกติ
```
docker-compose up -d
```
ถ้าจะปิด ให้ใช้คำสั่ง
```
docker-compose down
```

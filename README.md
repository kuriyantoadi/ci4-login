# ci4-login

## Install CodeIgniter4
- Copy file mentah CodeIgniter 4
- Masukan perintah untuk mengaktifkan CodeIgniter4
<br> `composer install -vvv`

- Masukan perintah untuk mengatasi error install 
<br>`composer install --ignore-platform-reqs`

- Masukan perintah untuk mengijinkan akses edit
<br> `sudo chmod 777 -R /opt/lampp/htdocs/ci4-login/`

## Pindahkan halaman index dihalaman utama bukan di Public.

- Copy `/public/.htaccess` dan `/public/index.php` 
<br>ke `/.htaccess` dan `/index.php`

- Ubah baris di index.php 
<br>`require FCPATH . '../app/Config/Paths.php';`
<br>menjadi 
<br>`require FCPATH . '/app/Config/Paths.php';`

- Ubah baris di file **app/config/app.php**
<br>`localhost:8080`
<br>menjadi
<br>`localhost/ci4-login`

- Copy file `env` ke `.env` dan ubah baris file `.env`
<br>`CI_ENVIRONMENT = production`
<br>menjadi
<br>`CI_ENVIRONMENT = development`


## Setting Dabatase dan halaman Login

- import database `ci4_login.sql`
- Setting koneksi database `app/Config/Database.php`
<code>
        <br>'username'     => 'root',
        <br>'password'     => '',
        <br>'database'     => 'ci4_login',
</code>

- Edit file app/Config/Routes.php seperti berikut
<br> untuk routes otomatis maka tambahkan beris berikut
`$routes->setAutoRoute(true);`

- Tambahkan controller `app/Controller/Login.php` dan `app/Controller/User.php`

- Tambahkan Models `app/Models/M_user.php`

- Tambahkan Views `app/Views/user_form.php` dan `app/Views/user_view.php`
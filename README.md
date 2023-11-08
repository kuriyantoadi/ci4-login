# ci4-login


- composer install --ignore-platform-reqs

- composer install -vvv


copy /public/.htaccess dan /public/index.php ke /

app/config/app.php 

localhost:8080
localhost/ci4-login


require FCPATH . '../app/Config/Paths.php';
menjadi 
require FCPATH . '/app/Config/Paths.php';


env menjadi .env
CI_ENVIRONMENT = production

CI_ENVIRONMENT = development

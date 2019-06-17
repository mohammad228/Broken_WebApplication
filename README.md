# Vulnerable-WebApp
This Web Application to create for testing basic vulnerablility of WebApps and Usefull for Amateur people in Pentest of Web Applications.

# Setup
requirement : php 7, Apache2, Composer, Mysql

# Setup-Step1: Download Composer & Xammp for Windows and Unix/Linux

1.1 	Download Composer in following link: https://getcomposer.org/download/

1.2 	Download Xammp or install Lammp packages in Linux. You Could download xammp for windows or unix/linux in following link: https://www.apachefriends.org/download.html

# Setup_Step2: Final Installation

2.1 Clone the project to the htdocs directory of Xammp Application with following command or download zip file and copy to that directory: 
https://github.com/mohammad228/Broken_WebApplication.git 

2.2 Run following command in htdocs folder to install dependencies : composer install

2.3  Edit .env.example file name to .env

2.4 Run Following command for generate App_Key: php artisan key:generate

2.5 Run apache and mysql on xammp control panel

2.6 Create a database in mysql with your favorite name

2.7 Edit .env file for database config and write your database name in DB_DATABASE field

2.8 Run following command for create table of application(Migrate): php artisan migrate

2.9 Then you could go to http://localhost and signUp and enjoy the App

Contact me : mohammadhooshmand73@gmail.com 

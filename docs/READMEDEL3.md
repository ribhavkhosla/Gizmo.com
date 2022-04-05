**#CSI3140: Deliverable 3**

Aditya Nair 300076404

Ribhav Khosla 300087647

The deliverable 3 includes all the technologies we used for our project. There are a number of changes from our previous deliverable.


**Table of Contents:**

1. Server Technology
2. Database Technology
3. Automated Test Framework
4. Refined HTML/CSS + UI design systems
5. Front-end interactivity using JavaScript

**Server Technology**



We are using Xampp web server solution software for running our php on the Apache web server.

Xampp download link: https://www.apachefriends.org/index.html

The Xampp setup is very straight forward. Once downloaded just follow the steps which are prompted on the xampp installation wizard.

Once Xampp is downloaded and the Xampp control panel is opened we will run the apache server on our localhost. For now we will be running our project on the localhost only instead of any other web server.

![](/Img/screenshots/xampp.png)

*Screenshot of Xampp control panel*

To run the project please clone the repository to C:Xampp/htdocs. Run the webpages from https://localhost/project-gizmo. (PLEASE RUN IN INCOGNITO BROWSER TO AVOID COOKIES AS THEY CAN DESTROY CSS FILES.)

After going to https://localhost/project-gizmo, go to public/html_php/welcome.php to run the website.

![](/Img/screenshots/localhostpage.png)

*Screenshots of localhost/project-gizmo page*



**Database Technology**

We are using Postgresql as our database technology. For this deliverable we are successfully connecting our webpages to our database server and are monitoring it using PGADMIN4. 

![](/Img/screenshots/pgadmin.png)

*Screenshots of database management tool PGadmin4*

In our database we have one table called user_info which stores the data of all users. This data is updated when a user uses our signup form on the welcome page. Once they enter all their information and press the signup button all the data is saved in the user_info table. Later on this table is used to verify the login credentials when the user sign in to his account.

One important step before we can use postgresql and Xampp together is that we have to enable pgsql in the Apache server configurations on Xampp control panel's config button for the Apache module. To configre just remove the semicolon in from of the highlighted statements shown in the image below.

![](/Img/screenshots/configApache.png)

*Screenshots of pgsql apache configuration changes*


**Automated Testing Frameworks**

We are using PHPUNIT for automatic testing. First we need to setup PHPUNIT.
This can be easily done by running the following command in your project directory on the terminal/command prompt.

composer require --dev phpunit/phpunit ^9

Prerequsite: "Composer" should be already installed on your computer. If not follow steps on : https://getcomposer.org/download/.

Our automated testing code runs the Hello World test which was based on samplephp provided by Professor Forward.




**Refined HTML/CSS + UI Design Systems**

Our UI design was already up to date so there were no major changes required for this deliverable. We had already implemeted alot of javascript functionality in our UI for deliverable 2. One of the update in our UI is that all the navigation buttons now functional. The buttons are:

● Login on welcome.php
● Sign Up on welcome.php
● Post an Ad on choose.php
● Buy Stuff on choose.php
● Previous on postad.php
● Post Ad on postad.php
● View Ad on buyer.php
● Clear on contact.php
● Submit on contact.php


**Front-end Interactivty Using Javascript**

We have successfully configured the signup and the signin page with a fully functional database system. A user can go to the home page and signup for an account. After successful signup the user is then taken back to the home page and they can sign in successfully. After signing in the user is taken to the choose.php page.

![](/Img/screenshots/signup.png)

*Screenshots of signup popup*

![](/Img/screenshots/signin.png)

*Screenshots of signin section on the home page*

If a user enters wrong credentials they are prompted to go back and try again.

![](/Img/screenshots/signinerror.png)

*Screenshots of signin error alert*




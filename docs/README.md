**#CSI3140: Deliverable 4**

Aditya Nair 300076404

Ribhav Khosla 300087647


**Table of Contents:**

1. Implementations of Features
2. Software Documentation
3. Adherence to UI Design System
4. Seeding application with sample data
5. Application features

1. About 
2. Technologies Used
3. UI and UX Design & Features
4. Database Population
5. Additional explanation for some Features.


**About**
The web application "Gizmo" is an online marketplace for sale and purchase of Electronics. 

**Technologies Used**

*1.Server Technology*

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



*2.Database Technology*

We are using Postgresql as our database technology. For this deliverable we are successfully connecting our webpages to our database server and are monitoring it using PGADMIN4. 

![](/Img/screenshots/pgadmin.png)

*Screenshots of database management tool PGadmin4*

In our database we have one table called user_info which stores the data of all users. This data is updated when a user uses our signup form on the welcome page. Once they enter all their information and press the signup button all the data is saved in the user_info table. Later on this table is used to verify the login credentials when the user sign in to his account.

One important step before we can use postgresql and Xampp together is that we have to enable pgsql in the Apache server configurations on Xampp control panel's config button for the Apache module. To configre just remove the semicolon in from of the highlighted statements shown in the image below.

![](/Img/screenshots/configApache.png)

*Screenshots of pgsql apache configuration changes*


*3.Automated Testing Frameworks*

We are using PHPUNIT for automatic testing. First we need to setup PHPUNIT.
This can be easily done by running the following command in your project directory on the terminal/command prompt.

composer require --dev phpunit/phpunit ^9

Prerequsite: "Composer" should be already installed on your computer. If not follow steps on : https://getcomposer.org/download/.

Our automated testing code runs the Hello World test which was based on samplephp provided by Professor Forward.




**UI & UX Design Systems and Features on each page**

Below you can see all the webpages and their features that a user can access and use.

![](/Img/screenshots/welcome.gif)

*Screenshots of our landing page welcome.php*

The welcome page is the homepage of the website. It has a header which has hoverable buttons which can take a user to other linked pages.

![](/Img/screenshots/hover.gif)

*Screenshots of hoverable buttons*

There is a Signin area on the right side of the page and below that there is a Signup button which pops up a sign up form for a user to sign up and create an account. When the user tries to sign up, their information is collected in the database table "user_info" and the user verification process is also done with the help of the database. 

![](/Img/screenshots/signuppop.gif)

*Screenshots of sign up pop*

When a user tries to sign in and fills out the email and password, this information is verified by accessing the database whether there exist a user whth the exact same information that has been provided. After a user has succussfully signed into their account, a session is started. and the whole website is set according to that particular user only.

![](/Img/screenshots/signin.gif)

*Screenshots of sign in and landing on Choose page*

One special feature of the sign up form is that the address feild of the form automatically suggests the full address to the user using the google maps api. Source: https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=(special_key_provided_by_google)".

![](/Img/screenshots/googleapi.gif)

*Screenshots of google maps api usage*


![](/Img/screenshots/choose.png)

*Screenshots of choose.php where the users can choose whether they want to post an Ad or buy something.*

The choose page also has a header but it is different. This header has the logo on the left side and has two additional butons: "Post Ad" and "Browse". The Browse button takes the user to the buyer.php page.
![]

This page prompts welcome message to the user with their name which is retrieved from the database and shows two buttons below it for navigation to postad.php or buyer.php.
![]


![](/Img/screenshots/postad.png)

*Screenshots of postad.php where the users get a form to post an Ad.*

"postad.php" is simply a form which collects all the information about the Ad that the user wants to post. All the information collected for this ad is stored in the database table "advertisements". 

The address feild of the post ad form also uses the google maps api for autofilling the addresses.

A user can also upload an image with their ad through the same form itself. The image is automatically renamed to a unique name and stored in /project-gizmo/public/html_php/img/ ans the path of the image is also stored int the database table "advertisement".



![](/Img/screenshots/buyer.png)

*Screenshots of buyer.php where the users can look for something they want to buy.*

"buyer.php" page shows a user all the ads availabe on the website. there is a button on top right corner of the page called "Choose ypur category" which is a dropdown menu with a lot of different categories. A user can filter through the categories by clicking on the one he is interested in. 
![]

The page has multiple ad cards which shows the image, the title, and the asking price for each ad. There is also a button "View Ad" on each card which pulls out a pop up with all the information about that ad. All the information is retrieved from the database.

![](/Img/screenshots/item.png)

*Screenshots of item.php which comes up when the user clicks the "View Ad" button for a particuar Ad on the Buyer page.*

![](/Img/screenshots/profile.png)

*Screenshots of profile.php where the user can see their profile information and all the ads that they have posted.*

The profile page show all the information of the user that it retrieves from the database on the right side of the page. 

On the left side there are all the ads that a user has posted on the website again readong all the information form the database.

![](/Img/screenshots/about.png)

*Screenshots of about.php where a user can see information about our company.*

![](/Img/screenshots/contactus.png)

*Screenshots of contactus.php where a user can fill out a form in order to contact us.*

The contact us page takes all the information entered on the page and saves it to the database table "contactus".

**Database Population**

To populate the database you have to run the scripts written in the dbpopulate.txt file.


**Additional explanation for some Features**




**Front-end Interactivty Using Javascript**

We have successfully configured the signup and the signin page with a fully functional database system. A user can go to the home page and signup for an account. After successful signup the user is then taken back to the home page and they can sign in successfully. After signing in the user is taken to the choose.php page.

![](/Img/screenshots/signup.png)

*Screenshots of signup popup*

![](/Img/screenshots/signin.png)

*Screenshots of signin section on the home page*

If a user enters wrong credentials they are prompted to go back and try again.

![](/Img/screenshots/signinerror.png)

*Screenshots of signin error alert*




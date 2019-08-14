# Fundamentals of Web Technology Project - A simple blogging website 

A simple blog using HTML, CSS, JavaScript, PHP and a MySQL DB.

### Video Demo and Features

[![fwt-blog-project-overview](http://img.youtube.com/vi/IbXTN8fK4Og/0.jpg)](https://www.youtube.com/watch?v=IbXTN8fK4Og&feature=youtu.be "Fundamentals of Web Technology Blog Project Video")
>Clcik the image to see YouTube video of demo/walkthrough. 

1. index.php: redirects to viewBlog.php for displaying blog entries.
2. viewBlog.php: displays blog entries stored in entry files, and redirect the user to login.html if there is not entry.
3. login.html if there is not entry.
4. login.php: checks the username and password and redirects to addentry.html if correct.
5. addentry.html: asks the blogger to add an entry.
6. addentry.php: saves the new entry to entry files and redirects to viewBlog.php.
7. XHTML and CSS used to create a 2 column layout. 
8. JavaSript used to ask for confirmation on the clear button when adding a blog entry. 
9. PHP used for form and database processing. 
10. MYSQL database used to store blog entries. 

## Installation

```
git clone https://github.com/Yaseen121/FWTBlogProject.git
cd FWTBlogProject
Install MAMP and copy the blog folder into C:\MAMP\htdocs directory.
Run the MAMP servers.
Open localhost/blog/destroyAndCreateTable.php to create the database tables.
Open localhost/blog to start using the app.
NOTE: The username is "Yaseen", and password is "123456" (Both hard coded values). Also, details will need to be changed if other database services or php servers are used. 
LAST TESTED ON: PHP version 7.2.10
```

    

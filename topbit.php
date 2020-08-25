<!DOCTYPE HTML>

<html lang="en">

<?php
    
session_start(); // to allow variable transfer between pages
include ("config.php");
    
// connect to database
$dbconnect=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

if(mysqli_connect_errno()) {
    echo "Connection failed:".mysqli_connect_error();
    exit;
}
?>
    
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Book Review Database">
    <meta name="keywords" content="books, reading, fiction, non-fiction, genre, reviews">
    <meta name="author" content="L Wright">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Book Review Database</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="css/bookstyle.css"> 
    
</head>
    
<body>
    
    <div class="wrapper">
    

        
        <div class="box banner">
            
        <!-- logo image linking to home page goes here -->
        <a href="index.php">
            <div class="box logo"  title="Click here to go to the Home Page">
            <img class="img-circle" src="images/bookslogo2.png" width="150" height="150" alt="books logo" />
            
            </div>    <!-- / logo -->
        </a>
            
            <h1>Orchid Reading</h1>
        </div>    <!-- / banner -->


        
        <div class = "box side">
            <h2>Search | <a class="side" href="show_all.php">Show All</a></h2>
            <i>Type part of the title / author name if desired</i>
            
            <hr />
            
            <!-- Start of title search -->

            <form method="post" action="title_search.php" enctype="multipart/form-data"> 
            
            <input class="search" type="text" size="40"  value="" required placeholder="Title..."/>
            <input class="submit" type="submit" name="find_title" value="Search"/>
            </form>
            
            <!-- End of title search -->
            <hr />
            
            Author search<br />
            Genre search<br />
            Rating search
        </div> <!-- / side bar -->
        
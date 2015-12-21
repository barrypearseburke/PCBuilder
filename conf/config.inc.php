<?php
/**
 * @author Luca
 * this file contains the constants used across 
 * all the script in the web-application
 */

/* database constants */
define ( "DB_HOST", "localhost" ); // set database host
define ( "DB_USER", "root" ); // set database user
define ( "DB_PASS", "" ); // set database password
define ( "DB_PORT", 3306 ); // set database port
define("DB_NAME", "pcbuilder"); // set database name
define ( "DB_CHARSET", "utf8" ); // set database charset
define ( "DB_DEBUGMODE", true ); // set database charset
define("USERSTABLE","users"); //users login table
define("PARTS","parts"); //parts table.

define ( "TITLE_WEB_APP", "Web dev. & dep." );
define ( "QUOTE", "Two things are infinite: the universe and human stupidity; and I'm not sure about the universe. (Enstein)" );
define ( "FOOTER", "Name, surname, Student number - copyright" );
define("BADEMAIL", "Incorrect email or password, please try again");
define ( "SUCCESS_UPDATE_USER", " The user has been succesfully updated");
define("LOGOUT", " The user has been succesfully Logged out");

?>
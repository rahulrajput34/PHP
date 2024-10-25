<?php
// What is PHP?
//Programming language used to create the complex web applications and websites
//PHP stands for Hypertext PreProcessor
// PHP is faster than other scripting language like ASP and JSP

// PHP is a server side(code execute on server) and client side(on the web) scripting language 
// A programming language that is interpreted at runtime ratherthan compiled

// Featues 
// Open source, Platform Independent, Faster, PHP automatically converts the data types
echo '<h1> Hello </h1>';

// Echo in PHP?
// what is echo?
// It is a language construct(keyword) which will display out the thing on browser
// it is case insensetive, we can write multiple echo in one line
echo 20 + 30; echo 'Rahul <br>'; echo 'Rajput';

// Can we use function in echo?
echo strtoupper('Eacho as Function');
echo ("Using echo as funnction")

// Comments in PHP
// Single line comment
// This is single line comment
# This is also single line comment

/* Multiline comment
This is multiline comment
*/
echo "This is multiline comment";

// How PHP works internally?
// When we execute the php code then there will be requestion going on the server
// In our case, Apache creates the local server for us
// The server will process the request and give the response in HTML because browser only understand the JS, HTML and CSS
// The response will be displayed on the browser

// Can we see the request how its go to server?
// We can go on the inspect and then on the network we can see the request how its goes to server

// Why we can not the php code in the browser?
// Beauce our interpreter of the phop is send the  response in HTML so that we can only see the html code


// In the php there is also difference between double quotes and single quesotes
// When we use single qoutes then we can not able inject the varibale inside the string
?>
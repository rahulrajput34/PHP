<?php
// When a user visit our website that time we want some information of the user should store into browser, it can be user name, contry, when he login last time.
// Almost all the programming language has the concept of the cookie

// What is the benefit of it?
// We get to know when did last time user login
// We also store some info like email and password so that we do not bring all info from the database again and again.. Just like what we did by using the localstorage inside our react JS.
// From these all, its make website little bit fast

//*****************   Syntax of Cookie
// These below  datas we can store inside the cookies
// setcookie(name, value, expire, path, domain, secure, httponly)
/*

name -> name of cookie.
value -> value of cookie (the actual data).
expire -> how long it lasts.
path -> Where the cookie can be used (specific pages).
domain -> Which website the cookie belongs to.
secure -> If the cookie should only work on secure (HTTPS) sites.
httponly -> If the cookie can only be accessed by the server, not by frontend k.
*/
?>
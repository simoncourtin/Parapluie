<?php
include_once("./Extention/Blog.extention.php");
$blog = new Blog("./Data/Articles/");
$blog->printBlog();
?>
#!/bin/sh

php academic.php > academic.html
php courses.php > courses.html
php index.php > index.html 
php students.php > students.html
php bio.php > bio.html
php hiring.php > hiring.html
php resources.php > resources.html
php talks.php > talks.html

git commit -a -m "php > html"
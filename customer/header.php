<!DOCTYPE html>
<head>
<style>
/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/

body {
    font-family: "Open Sans", sans-serif;
    color: #444444;
}

a {
    color: #007bff !important;
}

a:hover {
    color: #86db9f;
    text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: "Raleway", sans-serif;
}


/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/

.back-to-top {
    position: fixed;
    display: none;
    right: 15px;
    bottom: 15px;
    z-index: 99999;
}

.back-to-top i {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    width: 40px;
    height: 40px;
    border-radius: 50px;
    background: #007bff !important;
    color: #fff;
    transition: all 0.4s;
}

.back-to-top i:hover {
    background: #095bb1 !important;
    color: #fff;
}


/*--------------------------------------------------------------
# Preloader
--------------------------------------------------------------*/

#preloader {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 9999;
    overflow: hidden;
    background: #fff;
}

#preloader:before {
    content: "";
    position: fixed;
    top: calc(50% - 30px);
    left: calc(50% - 30px);
    border: 6px solid #007bff !important;
    border-top-color: #fff;
    border-bottom-color: #fff;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    -webkit-animation: animate-preloader 1s linear infinite;
    animation: animate-preloader 1s linear infinite;
}

@-webkit-keyframes animate-preloader {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

@keyframes animate-preloader {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}


/*--------------------------------------------------------------
# Disable aos animation delay on mobile devices
--------------------------------------------------------------*/

@media screen and (max-width: 768px) {
    [data-aos-delay] {
        transition-delay: 0 !important;
    }
}


/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/

#header {
    background: #fff;
    transition: all 0.5s;
    z-index: 997;
    padding: 15px 0;
    box-shadow: 0px 0 18px rgba(55, 66, 59, 0.08);
}

#header .logo {
    font-size: 32px;
    margin: 0;
    padding: 0;
    line-height: 1;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    font-family: "Poppins", sans-serif;
}

#header .logo a {
    color: #007bff !important;
}

#header .logo img {
    max-height: 40px;
}

@media (max-width: 992px) {
    #header .logo {
        font-size: 28px;
    }
}


/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/


/* Desktop Navigation */

.nav-menu ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

.nav-menu>ul {
    display: flex;
}

.nav-menu>ul>li {
    position: relative;
    white-space: nowrap;
    padding: 10px 0 10px 24px;
}

.nav-menu a {
    display: block;
    position: relative;
    color: #37423b;
    transition: 0.3s;
    font-size: 15px;
    font-family: "Poppins", sans-serif;
    font-weight: 500;
}

.nav-menu a:hover,
.nav-menu .active>a,
.nav-menu li:hover>a {
    color: #007bff !important;
}

.nav-menu .drop-down ul {
    display: block;
    position: absolute;
    left: 24px;
    top: calc(100% + 30px);
    z-index: 99;
    opacity: 0;
    visibility: hidden;
    padding: 10px 0;
    background: #fff;
    box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
    transition: 0.3s;
    border-radius: 4px;
}

.nav-menu .drop-down:hover>ul {
    opacity: 1;
    top: 100%;
    visibility: visible;
}

.nav-menu .drop-down li {
    min-width: 180px;
    position: relative;
}

.nav-menu .drop-down ul a {
    padding: 10px 20px;
    font-size: 14px;
    font-weight: 500;
    text-transform: none;
    color: #37423b;
}

.nav-menu .drop-down ul a:hover,
.nav-menu .drop-down ul .active>a,
.nav-menu .drop-down ul li:hover>a {
    color: #007bff !important;
}

.nav-menu .drop-down>a:after {
    /* content: "\ea99";
  font-family: IcoFont; */
    /* padding-left: 5px; */
}

.nav-menu .drop-down .drop-down ul {
    top: 0;
    left: calc(100% - 30px);
}

.nav-menu .drop-down .drop-down:hover>ul {
    opacity: 1;
    top: 0;
    left: 100%;
}

.nav-menu .drop-down .drop-down>a {
    padding-right: 35px;
}

.nav-menu .drop-down .drop-down>a:after {
    /* content: "\eaa0";
  font-family: IcoFont; */
    position: absolute;
    right: 15px;
}

@media (max-width: 1366px) {
    .nav-menu .drop-down .drop-down ul {
        left: -90%;
    }
    .nav-menu .drop-down .drop-down:hover>ul {
        left: -100%;
    }
    .nav-menu .drop-down .drop-down>a:after {
        content: "\ea9d";
    }
}


/* Get Startet Button */

.get-started-btn {
    margin-left: 22px;
    background: #c358cb;
    color: #fff;
    border-radius: 50px;
    padding: 8px 25px;
    white-space: nowrap;
    transition: 0.3s;
    font-size: 14px;
    display: inline-block;
}

.get-started-btn:hover {
    background: #8b3f91;
    color: #fff;
}

@media (max-width: 768px) {
    .get-started-btn {
        margin: 0 48px 0 0;
        padding: 6px 18px;
    }
}


/* Mobile Navigation */

.mobile-nav-toggle {
    position: fixed;
    top: 17px;
    right: 15px;
    z-index: 9998;
    border: 0;
    background: none;
    font-size: 24px;
    transition: all 0.4s;
    outline: none !important;
    line-height: 1;
    cursor: pointer;
    text-align: right;
}

.mobile-nav-toggle i {
    color: #37423b;
}

.mobile-nav {
    position: fixed;
    top: 55px;
    right: 15px;
    bottom: 15px;
    left: 15px;
    z-index: 9999;
    overflow-y: auto;
    background: #fff;
    transition: ease-in-out 0.2s;
    opacity: 0;
    visibility: hidden;
    border-radius: 10px;
    padding: 10px 0;
}

.mobile-nav * {
    margin: 0;
    padding: 0;
    list-style: none;
}

.mobile-nav a {
    display: block;
    position: relative;
    color: #37423b;
    padding: 10px 20px;
    font-weight: 500;
    outline: none;
}

.mobile-nav a:hover,
.mobile-nav .active>a,
.mobile-nav li:hover>a {
    color: #007bff !important;
    text-decoration: none;
}

.mobile-nav .drop-down>a:after {
    /* content: "\ea99";
  font-family: IcoFont; */
    padding-left: 10px;
    position: absolute;
    right: 15px;
}

.mobile-nav .active.drop-down>a:after {
    content: "\eaa1";
}

.mobile-nav .drop-down>a {
    padding-right: 35px;
}

.mobile-nav .drop-down ul {
    display: none;
    overflow: hidden;
}

.mobile-nav .drop-down li {
    padding-left: 20px;
}

.mobile-nav-overly {
    width: 100%;
    height: 100%;
    z-index: 9997;
    top: 0;
    left: 0;
    position: fixed;
    background: rgba(32, 38, 34, 0.6);
    overflow: hidden;
    display: none;
    transition: ease-in-out 0.2s;
}

.mobile-nav-active {
    overflow: hidden;
}

.mobile-nav-active .mobile-nav {
    opacity: 1;
    visibility: visible;
}

.mobile-nav-active .mobile-nav-toggle i {
    color: #fff;
}


/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/

#hero {
    width: 100%;
    height: 50vh;
    background: ;
    background-size: cover;
    position: static;
}

#hero:before {
    content: "";
    background: rgba(0, 0, 0, 0.4);
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
}

#hero .container {
    padding-top: 50px;
}

@media (max-width: 992px) {
    #hero .container {
        padding-top: 62px;
    }
}

#hero h1 {
    margin: 0;
    font-size: 48px;
    font-weight: 700;
    line-height: 56px;
    color: #fff;
    font-family: "Poppins", sans-serif;
}

#hero h2 {
    color: #eee;
    margin: 10px 0 0 0;
    font-size: 24px;
}

#hero .btn-get-started {
    font-family: "Raleway", sans-serif;
    font-weight: 500;
    font-size: 15px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 10px 35px;
    border-radius: 50px;
    transition: 0.5s;
    margin-top: 30px;
    border: 2px solid #fff;
    color: #fff;
}

#hero .btn-get-started:hover {
    background: #007bff !important;
    border: 2px solid #c358cb;
}

@media (min-width: 1024px) {
    #hero {
        background-attachment: fixed;
    }
}

@media (max-width: 768px) {
    #hero {
        height: 100vh;
    }
    #hero h1 {
        font-size: 28px;
        line-height: 36px;
    }
    #hero h2 {
        font-size: 18px;
        line-height: 24px;
    }
}


/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/

section {
    padding: 60px 0;
    overflow: hidden;
}

.section-bg {
    background-color: #f6f7f6;
}

.section-title {
    padding-bottom: 40px;
}

.section-title h2 {
    font-size: 14px;
    font-weight: 500;
    padding: 0;
    line-height: 1px;
    margin: 0 0 5px 0;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #aaaaaa;
    font-family: "Poppins", sans-serif;
}

.section-title h2::after {
    content: "";
    width: 120px;
    height: 1px;
    display: inline-block;
    background: #9ae1af;
    margin: 4px 10px;
}

.section-title p {
    margin: 0;
    margin: 0;
    font-size: 36px;
    font-weight: 700;
    text-transform: uppercase;
    font-family: "Poppins", sans-serif;
    color: #37423b;
}

.breadcrumbs {
    margin-top: 73px;
    text-align: center;
    background: blue;
    padding: 30px 0;
    color: #fff;
}

@media (max-width: 992px) {
    .breadcrumbs {
        margin-top: 63px;
    }
}

.breadcrumbs h2 {
    font-size: 32px;
    font-weight: 500;
}

.breadcrumbs p {
    font-size: 14px;
    margin-bottom: 0;
}


/*--------------------------------------------------------------
# About
--------------------------------------------------------------*/

.about .content h3 {
    font-weight: 600;
    font-size: 26px;
}

.about .content ul {
    list-style: none;
    padding: 0;
}

.about .content ul li {
    padding-bottom: 10px;
}

.about .content ul i {
    font-size: 20px;
    padding-right: 4px;
    color: blue;
}

.about .content .learn-more-btn {
    background: blue;
    color: #fff;
    border-radius: 50px;
    padding: 8px 25px 9px 25px;
    white-space: nowrap;
    transition: 0.3s;
    font-size: 14px;
    display: inline-block;
}

.about .content .learn-more-btn:hover {
    background: blue;
    color: #fff;
}

@media (max-width: 768px) {
    .about .content .learn-more-btn {
        margin: 0 48px 0 0;
        padding: 6px 18px;
    }
}


/*--------------------------------------------------------------
# Counts
--------------------------------------------------------------*/

.counts {
    padding: 30px 0;
}

.counts .counters span {
    font-size: 48px;
    display: block;
    color: #007bff !important;
    font-weight: 700;
}

.counts .counters p {
    padding: 0;
    margin: 0 0 20px 0;
    font-family: "Raleway", sans-serif;
    font-size: 15px;
    font-weight: 600;
    color: #37423b;
}


/*--------------------------------------------------------------
# Why Us
--------------------------------------------------------------*/


/*--------------------------------------------------------------
# Features
--------------------------------------------------------------*/

.features {
    padding-top: 0px;
}

.features .icon-box {
    display: flex;
    align-items: center;
    padding: 20px;
    transition: 0.3s;
    border: 1px solid #eef0ef;
}

.features .icon-box i {
    font-size: 32px;
    padding-right: 10px;
    line-height: 1;
}

.features .icon-box h3 {
    font-weight: 700;
    margin: 0;
    padding: 0;
    line-height: 1;
    font-size: 16px;
}

.features .icon-box h3 a {
    color: #37423b;
    transition: 0.3s;
}

.features .icon-box:hover {
    border-color: #c358cb;
}

.features .icon-box:hover h3 a {
    color: #c358cb;
}


/*--------------------------------------------------------------
# Courses
--------------------------------------------------------------*/

.courses .course-item {
    border-radius: 5px;
    border: 1px solid #eef0ef;
}

.courses .course-content {
    padding: 15px;
}

.courses .course-content h3 {
    font-weight: 700;
    font-size: 20px;
}

.courses .course-content h3 a {
    color: #37423b;
    transition: 0.3s;
}

.courses .course-content h3 a:hover {
    color: #c358cb;
}

.courses .course-content p {
    font-size: 14px;
    color: #777777;
}

.courses .course-content h4 {
    font-size: 14px;
    background: #c358cb;
    padding: 7px 14px;
    color: #fff;
    margin: 0;
}

.courses .course-content .price {
    margin: 0;
    font-weight: 700;
    font-size: 18px;
    color: #37423b;
}

.courses .trainer {
    padding-top: 15px;
    border-top: 1px solid #eef0ef;
}

.courses .trainer .trainer-profile img {
    max-width: 50px;
    border-radius: 50px;
}

.courses .trainer .trainer-profile span {
    padding-left: 10px;
    font-weight: 600;
    font-size: 16px;
    color: #5a6c60;
}

.courses .trainer .trainer-rank {
    font-size: 18px;
    color: #657a6d;
}


/*--------------------------------------------------------------
# Trainers
--------------------------------------------------------------*/

.trainers .member {
    text-align: center;
    margin-bottom: 20px;
    background: #fff;
    border: 1px solid #eef0ef;
}

.trainers .member img {
    margin: -1px -1px 30px -1px;
}

.trainers .member .member-content {
    padding: 0 20px 30px 20px;
}

.trainers .member h4 {
    font-weight: 700;
    margin-bottom: 2px;
    font-size: 18px;
}

.trainers .member span {
    font-style: italic;
    display: block;
    font-size: 13px;
}

.trainers .member p {
    padding-top: 10px;
    font-size: 14px;
    font-style: italic;
    color: #aaaaaa;
}

.trainers .member .social {
    margin-top: 15px;
}

.trainers .member .social a {
    color: #007bff !important;
    transition: 0.3s;
}

.trainers .member .social a:hover {
    color: #007bff !important;
}

.trainers .member .social i {
    font-size: 18px;
    margin: 0 2px;
}


/*--------------------------------------------------------------
# Cource Details
--------------------------------------------------------------*/

.course-details h3 {
    font-size: 24px;
    margin: 30px 0 15px 0;
    font-weight: 700;
    position: relative;
    padding-bottom: 10px;
}

.course-details h3:before {
    content: "";
    position: absolute;
    display: block;
    width: 100%;
    height: 1px;
    background: #eef0ef;
    bottom: 0;
    left: 0;
}

.course-details h3:after {
    content: "";
    position: absolute;
    display: block;
    width: 60px;
    height: 1px;
    background: #c358cb;
    bottom: 0;
    left: 0;
}

.course-details .course-info {
    background: #f6f7f6;
    padding: 10px 15px;
    margin-bottom: 15px;
}

.course-details .course-info h5 {
    font-weight: 400;
    font-size: 16px;
    margin: 0;
    font-family: "Poppins", sans-serif;
}

.course-details .course-info p {
    margin: 0;
    font-weight: 600;
}

.course-details .course-info a {
    color: #657a6d;
}


/*--------------------------------------------------------------
# Cource Details Tabs
--------------------------------------------------------------*/

.cource-details-tabs {
    overflow: hidden;
    padding-top: 0;
}

.cource-details-tabs .nav-tabs {
    border: 0;
}

.cource-details-tabs .nav-link {
    border: 0;
    padding: 12px 15px 12px 0;
    transition: 0.3s;
    color: #37423b;
    border-radius: 0;
    border-right: 2px solid #e2e7e4;
    font-weight: 600;
    font-size: 15px;
}

.cource-details-tabs .nav-link:hover {
    color: #c358cb;
}

.cource-details-tabs .nav-link.active {
    color: #c358cb;
    border-color: #c358cb;
}

.cource-details-tabs .tab-pane.active {
    -webkit-animation: fadeIn 0.5s ease-out;
    animation: fadeIn 0.5s ease-out;
}

.cource-details-tabs .details h3 {
    font-size: 26px;
    font-weight: 600;
    margin-bottom: 20px;
    color: #37423b;
}

.cource-details-tabs .details p {
    color: #777777;
}

.cource-details-tabs .details p:last-child {
    margin-bottom: 0;
}

@media (max-width: 992px) {
    .cource-details-tabs .nav-link {
        border: 0;
        padding: 15px;
    }
    .cource-details-tabs .nav-link.active {
        color: #fff;
        background: #c358cb;
    }
}


/*--------------------------------------------------------------
# Events
--------------------------------------------------------------*/

.events .card {
    border: 0;
    padding: 0 30px;
    margin-bottom: 60px;
    position: relative;
}

.events .card-img {
    width: calc(100% + 60px);
    margin-left: -30px;
    overflow: hidden;
    z-index: 9;
    border-radius: 0;
}

.events .card-img img {
    max-width: 100%;
    transition: all 0.3s ease-in-out;
}

.events .card-body {
    z-index: 10;
    background: #fff;
    border-top: 4px solid #fff;
    padding: 30px;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
    margin-top: -60px;
    transition: 0.3s;
}

.events .card-title {
    font-weight: 700;
    text-align: center;
    margin-bottom: 20px;
}

.events .card-title a {
    color: #37423b;
    transition: 0.3s;
}

.events .card-text {
    color: #5e5e5e;
}

.events .read-more a {
    color: #777777;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 12px;
    transition: 0.3s;
}

.events .read-more a:hover {
    color: #c358cb;
}

.events .card:hover img {
    transform: scale(1.1);
}

.events .card:hover .card-body {
    border-color: #c358cb;
}

.events .card:hover .card-body .card-title a {
    color: #c358cb;
}


/*--------------------------------------------------------------
# Pricing
--------------------------------------------------------------*/

.pricing .box {
    padding: 20px;
    background: #fff;
    text-align: center;
    border: 1px solid #eef0ef;
    border-radius: 0;
    position: relative;
    overflow: hidden;
}

.pricing h3 {
    font-weight: 400;
    margin: -20px -20px 20px -20px;
    padding: 20px 15px;
    font-size: 16px;
    font-weight: 600;
    color: #777777;
    background: #f8f8f8;
}

.pricing h4 {
    font-size: 36px;
    color: #c358cb;
    font-weight: 600;
    font-family: "Poppins", sans-serif;
    margin-bottom: 20px;
}

.pricing h4 sup {
    font-size: 20px;
    top: -15px;
    left: -3px;
}

.pricing h4 span {
    color: #bababa;
    font-size: 16px;
    font-weight: 300;
}

.pricing ul {
    padding: 0;
    list-style: none;
    color: #444444;
    text-align: center;
    line-height: 20px;
    font-size: 14px;
}

.pricing ul li {
    padding-bottom: 16px;
}

.pricing ul i {
    color: #c358cb;
    font-size: 18px;
    padding-right: 4px;
}

.pricing ul .na {
    color: #ccc;
    text-decoration: line-through;
}

.pricing .btn-wrap {
    margin: 20px -20px -20px -20px;
    padding: 20px 15px;
    background: #f8f8f8;
    text-align: center;
}

.pricing .btn-buy {
    background: #c358cb;
    display: inline-block;
    padding: 8px 35px;
    border-radius: 50px;
    color: #fff;
    transition: none;
    font-size: 14px;
    font-weight: 400;
    font-family: "Raleway", sans-serif;
    font-weight: 600;
    transition: 0.3s;
}

.pricing .btn-buy:hover {
    background: #8b3f91;
}

.pricing .featured h3 {
    color: #fff;
    background: #c358cb;
}

.pricing .advanced {
    width: 200px;
    position: absolute;
    top: 18px;
    right: -68px;
    transform: rotate(45deg);
    z-index: 1;
    font-size: 14px;
    padding: 1px 0 3px 0;
    background: #c358cb;
    color: #fff;
}


/*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/

.contact {
    padding-top: 5px;
}

.contact .info {
    width: 100%;
    background: #fff;
}

.contact .info i {
    font-size: 20px;
    color: #007bff !important;
    float: left;
    width: 44px;
    height: 44px;
    background: #ecf9f0;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50px;
    transition: all 0.3s ease-in-out;
}

.contact .info h4 {
    padding: 0 0 0 60px;
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 5px;
    color: #37423b;
}

.contact .info p {
    padding: 0 0 0 60px;
    margin-bottom: 0;
    font-size: 14px;
    color: #657a6d;
}

.contact .info .email,
.contact .info .phone {
    margin-top: 40px;
}

.contact .info .email:hover i,
.contact .info .address:hover i,
.contact .info .phone:hover i {
    background: #007bff !important;
    color: #fff;
}

.contact .php-email-form {
    width: 100%;
    background: #fff;
}

.contact .php-email-form .form-group {
    padding-bottom: 8px;
}

.contact .php-email-form .validate {
    display: none;
    color: red;
    margin: 0 0 15px 0;
    font-weight: 400;
    font-size: 13px;
}

.contact .php-email-form .error-message {
    display: none;
    color: #fff;
    background: #ed3c0d;
    text-align: center;
    padding: 15px;
    font-weight: 600;
}

.contact .php-email-form .sent-message {
    display: none;
    color: #fff;
    background: #18d26e;
    text-align: center;
    padding: 15px;
    font-weight: 600;
}

.contact .php-email-form .loading {
    display: none;
    background: #fff;
    text-align: center;
    padding: 15px;
}

.contact .php-email-form .loading:before {
    content: "";
    display: inline-block;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    margin: 0 10px -6px 0;
    border: 3px solid #18d26e;
    border-top-color: #eee;
    -webkit-animation: animate-loading 1s linear infinite;
    animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input,
.contact .php-email-form textarea {
    border-radius: 4px;
    box-shadow: none;
    font-size: 14px;
}

.contact .php-email-form input:focus,
.contact .php-email-form textarea:focus {
    border-color: #c358cb;
}

.contact .php-email-form input {
    height: 44px;
}

.contact .php-email-form textarea {
    padding: 10px 12px;
}

.contact .php-email-form button[type="submit"] {
    background: #c358cb;
    border: 0;
    padding: 10px 35px;
    color: #fff;
    transition: 0.4s;
    border-radius: 50px;
}

.contact .php-email-form button[type="submit"]:hover {
    background: #8b3f91;
}

@-webkit-keyframes animate-loading {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

@keyframes animate-loading {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}


/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/

#footer {
    color: #37423b;
    font-size: 14px;
    background: #eef0ef;
}

#footer .footer-top {
    padding: 60px 0 30px 0;
    background: #f9faf9;
}

#footer .footer-top .footer-contact {
    margin-bottom: 30px;
}

#footer .footer-top .footer-contact h4 {
    font-size: 22px;
    margin: 0 0 30px 0;
    padding: 2px 0 2px 0;
    line-height: 1;
    font-weight: 700;
}

#footer .footer-top .footer-contact p {
    font-size: 14px;
    line-height: 24px;
    margin-bottom: 0;
    font-family: "Raleway", sans-serif;
    color: #777777;
}

#footer .footer-top h4 {
    font-size: 16px;
    font-weight: bold;
    color: #444444;
    position: relative;
    padding-bottom: 12px;
}

#footer .footer-top .footer-links {
    margin-bottom: 30px;
}

#footer .footer-top .footer-links ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

#footer .footer-top .footer-links ul i {
    padding-right: 2px;
    color: black !important;
    font-size: 18px;
    line-height: 1;
}

#footer .footer-top .footer-links ul li {
    padding: 10px 0;
    display: flex;
    align-items: center;
}

#footer .footer-top .footer-links ul li:first-child {
    padding-top: 0;
}

#footer .footer-top .footer-links ul a {
    color: #777777;
    transition: 0.3s;
    display: inline-block;
    line-height: 1;
}

#footer .footer-top .footer-links ul a:hover {
    text-decoration: none;
    color: #c358cb;
}

#footer .footer-newsletter {
    font-size: 15px;
}

#footer .footer-newsletter h4 {
    font-size: 16px;
    font-weight: bold;
    color: #444444;
    position: relative;
    padding-bottom: 12px;
}

#footer .footer-newsletter form {
    margin-top: 30px;
    background: #fff;
    padding: 6px 10px;
    position: relative;
    border-radius: 50px;
    text-align: left;
    border: 1px solid #e0e5e2;
}

#footer .footer-newsletter form input[type="email"] {
    border: 0;
    padding: 4px 8px;
    width: calc(100% - 100px);
}

#footer .footer-newsletter form input[type="submit"] {
    position: absolute;
    top: -1px;
    right: -1px;
    bottom: -1px;
    border: 0;
    background: none;
    font-size: 16px;
    padding: 0 20px 2px 20px;
    background: #c358cb;
    color: #fff;
    transition: 0.3s;
    border-radius: 50px;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

#footer .footer-newsletter form input[type="submit"]:hover {
    background: #8b3f91;
}

#footer .credits {
    padding-top: 5px;
    font-size: 13px;
}

#footer .credits a {
    color: #8b3f91;
    transition: 0.3s;
}

#footer .credits a:hover {
    color: #c358cb;
}

#footer .social-links a {
    font-size: 18px;
    display: inline-block;
    background: #007bff !important;
    color: #fff;
    line-height: 1;
    padding: 8px 0;
    margin-right: 4px;
    border-radius: 50%;
    text-align: center;
    width: 36px;
    height: 36px;
    transition: 0.3s;
}

#footer .social-links a:hover {
    background: #095bb1 !important;
    color: #fff;
    text-decoration: none;
}

</style>
</head>
   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <a class="navbar-brand" href="index.php"></a>
   
      <img alt="logo" src="assets/img/LOGO.png" style="width: 800px;height: 50px;">
      

      <nav class="nav-menu d-none d-lg-block"style="margin-left: 500px;">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="About us.php">About-us</a></li>         
          <li><a href="contact us.php">Contact</a></li>
          <li><a href="index.php">Hiring Form</a></li>
          <li><a href="search-request.php">Request Status</a>
                     </li>
          
          </li>

        </ul>
      </nav>
    </div>
  </header>
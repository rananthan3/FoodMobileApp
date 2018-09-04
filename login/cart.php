<?php
    session_start();
    ob_start();
    echo($_SESSION['login']);
?>

<!DOCTYPE html>
<html>
<head>
<title>Online Grocery</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"> 

<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<style>

/* A bit custom styling */
.my-page .ui-listview li .ui-btn p {
    color: #c0c0c0;
}
.my-page .ui-listview li .ui-btn .ui-li-aside {
    color: #eee;
}
/* First breakpoint is 48em (768px). 3 column layout. Tiles 250x250 pixels incl. margin at the breakpoint. */
@media ( min-width: 48em ) {
    .my-page .ui-content {
        padding: .5625em; /* 9px */
    }
    .my-page .ui-listview li {
        float: left;
        width: 30.9333%; /* 33.3333% incl. 2 x 1.2% margin */
        height: 14.5em; /* 232p */
        margin: .5625em 1.2%;
    }
    .my-page .ui-listview li > .ui-btn {
        -webkit-box-sizing: border-box; /* include padding and border in height so we can set it to 100% */
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        height: 100%;
    }
    .my-page .ui-listview li.ui-li-has-thumb .ui-li-thumb {
        height: auto; /* To keep aspect ratio. */
        max-width: 100%;
        max-height: none;
    }
    /* Make all list items and anchors inherit the border-radius from the UL. */
    .my-page .ui-listview li,
    .my-page .ui-listview li .ui-btn,
    .my-page .ui-listview .ui-li-thumb {
        -webkit-border-radius: inherit;
        border-radius: inherit;
    }
    /* Hide the icon */
    .my-page .ui-listview .ui-btn-icon-right:after {
        display: none;
    }
    /* Make text wrap. */
    .my-page .ui-listview h2,
    .my-page .ui-listview p {
        white-space: normal;
        overflow: visible;
        position: absolute;
        left: 0;
        right: 0;
    }
    /* Text position */
    .my-page .ui-listview h2 {
        font-size: 1.25em;
        margin: 0;
        padding: .125em 1em;
        bottom: 50%;
    }
    .my-page .ui-listview p {
        font-size: 1em;
        margin: 0;
        padding: 0 1.25em;
        min-height: 50%;
        bottom: 0;
    }
    /* Semi transparent background and different position if there is a thumb. The button has overflow hidden so we don't need to set border-radius. */
    .ui-listview .ui-li-has-thumb h2,
    .ui-listview .ui-li-has-thumb p {
        background: #111;
        background: rgba(0,0,0,.8);
    }
    .ui-listview .ui-li-has-thumb h2 {
        bottom: 35%;
    }
    .ui-listview .ui-li-has-thumb p {
        min-height: 35%;
    }
    /* ui-li-aside has class .ui-li-desc as well so we have to override some things. */
    .my-page .ui-listview .ui-li-aside {
        padding: .125em .625em;
        width: auto;
        min-height: 0;
        top: 0;
        left: auto;
        bottom: auto;
        /* Custom styling. */
        background: #990099;
        background: rgba(153,0,153,.85);
        -webkit-border-top-right-radius: inherit;
        border-top-right-radius: inherit;
        -webkit-border-bottom-left-radius: inherit;
        border-bottom-left-radius: inherit;
        -webkit-border-bottom-right-radius: 0;
        border-bottom-right-radius: 0;
    }
    /* If you want to add shadow, don't kill the focus style. */
    .my-page .ui-listview li {
        -moz-box-shadow: 0px 0px 9px #111;
        -webkit-box-shadow: 0px 0px 9px #111;
        box-shadow: 0px 0px 9px #111;
    }
    /* Images mask the hover bg color so we give desktop users feedback by applying the focus style on hover as well. */
    .my-page .ui-listview li > .ui-btn:hover {
        -moz-box-shadow: 0px 0px 12px #33ccff;
        -webkit-box-shadow: 0px 0px 12px #33ccff;
        box-shadow: 0px 0px 12px #33ccff;
    }
    /* Animate focus and hover style, and resizing. */
    .my-page .ui-listview li,
    .my-page .ui-listview .ui-btn {
        -webkit-transition: all 500ms ease;
        -moz-transition: all 500ms ease;
        -o-transition: all 500ms ease;
        -ms-transition: all 500ms ease;
        transition: all 500ms ease;
    }
}
/* Second breakpoint is 63.75em (1020px). 4 column layout. Tiles will be 250x250 pixels incl. margin again at the breakpoint. */
@media ( min-width: 63.75em ) {
    .my-page .ui-content {
        padding: .625em; /* 10px */
    }
    /* Set a max-width for the last breakpoint to prevent too much stretching on large screens.
    By setting the max-width equal to the breakpoint width minus padding we keep square tiles. */
    .my-page .ui-listview {
        max-width: 62.5em; /* 1000px */
        margin: 0 auto;
    }
    /* Because of the 1000px max-width the width will always be 230px (and margin left/right 10px),
    but we stick to percentage values for demo purposes. */
    .my-page .ui-listview li {
        width: 23%;
        height: 230px;
        margin: .625em 1%;
    }
}



</style>


</head>
<body>




<div data-role="page" data-theme="b" id="demo-page" class="my-page" data-url="demo-page">
    <div data-role="header">
        <center>
        <img src="logo.png" alt="Welcome to Suvidha Online" style="width:109px;height:55.5px;">
        </center>
        <a href="./" data-shadow="false" data-iconshadow="false" data-icon="carat-l" data-iconpos="notext" data-rel="back" data-ajax="false">Back</a>
    </div><!-- /header -->
    <div role="main" class="ui-content">
        <ul data-role="listview" data-inset="true">

           <li><a href="items/bread.php">
                <img src="bread.jpeg" class="ui-li-thumb">
                <h2>Bread</h2>                
            </a></li>
            <li><a href="items/rice.php">
                <img src="rice.jpeg" class="ui-li-thumb">
                <h2>Rice</h2>                
            </a></li>
            <li><a href="items/sweets.php">
                <img src="sweets.jpeg" class="ui-li-thumb">
                <h2>Sweets</h2>                
            </a></li>
            <li><a href="#">
                <img src="produce.jpeg" class="ui-li-thumb">
                <h2>Produce</h2>
            </a></li>
            <li><a href="#">
                <img src="dairy.jpeg" class="ui-li-thumb">
                <h2>Dairy</h2>                
            </a></li>
            <li><a href="#">
                <img src="lentils.jpeg" class="ui-li-thumb">
                <h2>Lentils</h2>                
            </a></li>
            <li><a href="#">
                <img src="tea.jpeg" class="ui-li-thumb">
                <h2>Tea &amp; Coffee</h2>                
            </a></li>
            <li><a href="#">                
                <img src="spices.jpeg" class="ui-li-thumb">
                <h2>Spices</h2>                
            </a></li>


            <li><a href="#">
                <img src="apple.jpeg" class="ui-li-thumb">
                <h2>$1.99/lb</h2>                
            </a></li>
            <li><a href="#">
                <img src="peach.jpeg" class="ui-li-thumb">
                <h2>$2.99/lb</h2>                
            </a></li>
            <li><a href="#">
                <img src="grape.jpeg" class="ui-li-thumb">
                <h2>$3.99/lb</h2>                
            </a></li>
            <li><a href="#">
                <img src="orange.jpeg" class="ui-li-thumb">
                <h2>$1.99/lb</h2>

            </a></li>
            <li><a href="#">
                <img src="mango.jpeg" class="ui-li-thumb">
                <h2>$2.99/lb</h2>
                
            </a></li>
            <li><a href="#">
                <img src="banana.jpeg" class="ui-li-thumb">
                <h2>$0.69/lb</h2>
                
            </a></li>
            <li><a href="#">
                <img src="pineapple.jpeg" class="ui-li-thumb">
                <h2>$4.99/lb</h2>                
            </a></li>
            <li><a href="#">                
                <img src="cherry.jpeg" class="ui-li-thumb">
                <h2>$2.49/lb</h2>                
            </a></li>
        </ul>        
    </div><!-- /content -->
    <div data-role="footer" style="text-align: center;">
        <a href="logout.php" data-role="button" id="button_logout" data-icon="false" data-iconpos="false" rel="external" style="font-size: 30px; padding: 50px 100px;">Logout</a>
    </div><
</div>

</body>
<?php
/**
 * Created by PhpStorm.
 * User: issymac
 * Date: 3/30/15
 * Time: 9:43 AM
 */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8">
     <title>PAWBUDDYLIST - Pets of your choice</title>

      <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
 <link href="{{ asset('css/style.css') }}" rel="stylesheet" media="screen">
 <link href="{{ asset('css/style-orange.css') }}" rel="stylesheet" media="screen">
 <link href="{{ asset('css/style-im.css') }}" rel="stylesheet" media="screen">

 <link href="{{ asset('css/rateit.css') }}" rel="stylesheet" media="screen">
 <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
 <link href="{{ asset('favicon.png') }}" rel="shortcut icon" type="image/x-icon" />
 <link href='//fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
 <link href='//fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
 <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

 </head>
 <body class="product-board">

 	<header class="navbar navbar-fixed-top clearfix">
        @include('master.header')
 	</header>

 	<div id="product-board" class="clearfix">
 	    @yield('contents')
 	</div> <!-- //end product-board -->

 	<footer>
 	    @include('master.footer')
 	</footer>


 <script src="//code.jquery.com/jquery-1.9.1.min.js"></script>
 <script src="{{ asset('js/modernizr.min.js') }}"></script>
 <script src="{{ asset('js/imagesloaded.min.js') }}"></script>
 <script src="{{ asset('js/jquery.masonry.min.js') }}"></script>
 <script src="{{ asset('js/jquery.rateit.min.js') }}"></script>
 <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
 <script src="{{ asset('js/bootstrap.js') }}"></script>
 <script src="{{ asset('js/PawBuddyList.js') }}"></script>

 </body>
 </html>

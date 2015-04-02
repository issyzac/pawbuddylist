<?php
/**
 * Created by PhpStorm.
 * User: issymac
 * Date: 4/1/15
 * Time: 8:41 PM
 */?>

 @if (count($errors->all()) > 0)
 <div class="alert alert-error alert-block" style="background-color: indianred !important;">
 	<button type="button" class="close" data-dismiss="alert">&times;</button>
 	<h4 style="color: white">Error</h4>
 	<p style="color: white">Please check the corresponding form below for errors</p>
 </div>
 @endif

 @if ($message = Session::get('success'))
 <div class="alert alert-success alert-block">
 	<button type="button" class="close" data-dismiss="alert">&times;</button>
 	<h4>Success</h4>
 	{{ $message }}
 </div>
 @endif

 @if ($message = Session::get('error'))
 <div class="alert alert-error alert-block" style="background-color: indianred">
 	<button type="button" class="close" data-dismiss="alert">&times;</button>
 	<h4 style="color: white">Error</h4>
 	<p style="color: white">{{ $message }}</p>
 </div>
 @endif

 @if ($message = Session::get('warning'))
 <div class="alert alert-warning alert-block">
 	<button type="button" class="close" data-dismiss="alert">&times;</button>
 	<h4>Warning</h4>
 	{{ $message }}
 </div>
 @endif

 @if ($message = Session::get('info'))
 <div class="alert alert-info alert-block">
 	<button type="button" class="close" data-dismiss="alert">&times;</button>
 	<h4>Info</h4>
 	{{ $message }}
 </div>
 @endif
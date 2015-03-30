<?php
/**
 * Created by PhpStorm.
 * User: issymac
 * Date: 3/30/15
 * Time: 10:27 AM
 */ ?>

 	<header class="navbar navbar-fixed-top clearfix">

 	<a class="current brand" href="{{ url('home') }}"><img src="{{ asset('favicon.png') }}"></a>

 	<div id="nav-basket" class="basket">

 		<a href="shopping-cart.html" class="basket-link">
 			<div class="basket-count">3</div>
 		</a>

 		<div class="submenu-container">
 			<ul class="submenu-preview">
 				<li>
 					<a href="product.html" class="basket-item">
 						<img src="{{ asset('img/product-1-small.jpg') }}" alt="" />
 						<p>Little cute monster</p>
 						<p class="price">1 x <span class="cur">$</span><span class="total">28.00</span></p>
 					</a>
 					<a href="" class="remove-basket-item">remove</a>
 				</li>
 				<li>
 					<a href="product.html" class="basket-item">
 						<img src="{{ asset('img/product-2-small.jpg') }}" alt="" />
 						<p>Cute cat</p>
 						<p class="price">1 x <span class="cur">$</span><span class="total">22.00</span></p>
 					</a>
 					<a href="" class="remove-basket-item">remove</a>
 				</li>
 				<li>
 					<a href="product.html" class="basket-item">
 						<img src="{{ asset('img/product-1-small.jpg') }}" alt="" />
 						<p>Little cute monster</p>
 						<p class="price">1 x <span class="cur">$</span><span class="total">20.00</span></p>
 					</a>
 					<a href="" class="remove-basket-item">remove</a>
 				</li>
 				<li class="drop-link-li">
 					<a href="shopping-cart.html" class="drop-link">View full<br>basket</a>
 				</li>
 			</ul>
 		</div>
 	</div>

 	<button type="button" class="btn navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
 		<span class="icon-bar"></span>
 		<span class="icon-bar"></span>
 		<span class="icon-bar"></span>
 	</button>

 	<nav class="navbar-collapse collapse" id="main-nav">
 		<ul class="nav">

 			<li class="current active">
 				<a href="{{ url('home') }}" class="current top-level flat">Home</a>
 			</li>

 			<li>
 				<a href="{{ url('pets/index') }}" class="">Pets</a>
 			</li>

 			<li>
 				<a href="{{ url('tips/index') }}" class="">Tips</a>
 			</li>

 		</ul>
 	</nav><!--/.nav-collapse -->

 </header>
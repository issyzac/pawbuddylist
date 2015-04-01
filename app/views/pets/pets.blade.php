 @extends('master.layout')
<?php
 /**
 * Created by PhpStorm.
 * User: issymac
 * Date: 3/30/15
 * Time: 10:21 AM
 */?>

 @section('contents')

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<a href="index.html">Home</a> > Pets
			</div> <!-- //end span12 -->
		</div> <!-- //end row -->
	</div> <!-- //end container -->

	<div id="product-board">

		<div class="product large static">
			<div class="text">
				<h1>Pets collection</h1>
				<p class="lead">Look at our lovely collection of pets, with a number of breeds to perfectly fit your needs. We have <a class='current' href="collection.html">dogs</a> and <a class='current' href="collection.html">cats</a>.</p>

				<p class="filter">Breeds:</p>
				<ul class="board-links clearfix">
					<li class='current'><a class='current' href="collection.html">German sherpherd</a></li>
					<li class='current'><a class='current' href="collection.html">Cheetoh</a></li>
					<li class='current'><a class='current' href="collection.html">Dalmatian</a></li>
					<li class='current'><a class='current' href="collection.html">Aeegan</a></li>
				</ul>

				<p class="filter">Filter:</p>
				<ul class="board-filters clearfix">
					<li><a href="" class="filter-hidden" data-filter="all">all</a></li>
					<li><a href="" data-filter="cat-1">black</a></li>
					<li><a href="" data-filter="cat-2">white</a></li>
					<li><a href="" data-filter="cat-3">plain</a></li>
					<li><a href="" data-filter="cat-4">patterned</a></li>
					<li><a href="" data-filter="cat-5">new in</a></li>
				</ul>
			</div>
		</div>
		<div class="product large cat-1">
			<div class="media">
				<a href="product.html" title="product title">
					<img src="{{ asset('img/product-1.jpg') }}" alt="product title" data-img="product-1" class="img-responsive" />
				</a>
				<span class="plabel">just in</span>
			</div>
			<div class="details">
				<p class="name"><a href="product.html">Cute cat</a></p>
				<p class="price"><span class="cur">$</span><span class="total">25.00</span></p>
				<a href="" class="details-expand" data-target="details-0001">+</a>
			</div>
			<div class="details-extra" id="details-0001">
				<form class="form-inline" action="#">
					<div>
						<label>Quantity</label>
						<input type="text" class="input-sm form-control quantity" value="1">
					</div>
					<div>
						<label>Size</label>
						<select class="input-sm form-control size">
							<option>S</option>
							<option>M</option>
							<option>L</option>
						</select>
					</div>
				</form>
				<button class="btn btn-bottom btn-atc qadd">Add to cart</button>
			</div>
		</div>

		<div class="product medium cat-2">
			<div class="media">
				<a href="product.html" title="product title">
					<img src="{{ asset('img/product-1.jpg') }}" alt="product title" data-img="product-1" class="img-responsive" />
				</a>
				<span class="plabel">just in</span>
			</div>
			<div class="details">
				<p class="name"><a href="product.html">Pumpkin</a></p>
				<p class="price"><span class="cur">$</span><span class="total">20.00</span></p>
				<a href="" class="details-expand" data-target="details-0002">+</a>
			</div>
			<div class="details-extra" id="details-0002">
				<form class="form-inline" action="#">
					<div>
						<label>Quantity</label>
						<input type="text" class="input-sm form-control quantity" value="1">
					</div>
					<div>
						<label>Size</label>
						<select class="input-sm form-control size">
							<option>S</option>
							<option>M</option>
							<option>L</option>
						</select>
					</div>
				</form>
				<button class="btn btn-bottom btn-atc qadd">Add to cart</button>
			</div>
		</div>

		<div class="product medium cat-3">
			<div class="media">
				<a href="product.html" title="product title">
					<img src="{{ asset('img/product-2.jpg') }}" alt="product title" data-img="product-2" class="img-responsive" />
				</a>
			</div>
			<div class="details">
				<p class="name"><a href="product.html">delilah</a></p>
				<p class="price"><span class="cur">$</span><span class="total">20.00</span></p>
				<a href="" class="details-expand" data-target="details-0003">+</a>
			</div>
			<div class="details-extra" id="details-0003">
				<form class="form-inline" action="#">
					<div>
						<label>Quantity</label>
						<input type="text" class="input-sm form-control quantity" value="1">
					</div>
					<div>
						<label>Size</label>
						<select class="input-sm form-control size">
							<option>S</option>
							<option>M</option>
							<option>L</option>
						</select>
					</div>
				</form>
				<button class="btn btn-bottom btn-atc qadd">Add to cart</button>
			</div>
		</div>

		<div class="product large cat-4">
			<div class="media">
				<a href="product.html" title="product title">
					<img src="{{ asset('img/product-2.jpg') }}" alt="product title" data-img="product-2" class="img-responsive" />
				</a>
				<span class="plabel">Only 3 left</span>
			</div>
			<div class="details">
				<p class="name"><a href="product.html">Pumpkin</a></p>
				<p class="price"><span class="cur">$</span><span class="total">20.00</span></p>
				<a href="" class="details-expand" data-target="details-0004">+</a>
			</div>
			<div class="details-extra" id="details-0004">
				<form class="form-inline" action="#">
					<div>
						<label>Quantity</label>
						<input type="text" class="input-sm form-control quantity" value="1">
					</div>
					<div>
						<label>Size</label>
						<select class="input-sm form-control size">
							<option>S</option>
							<option>M</option>
							<option>L</option>
						</select>
					</div>
				</form>
				<button class="btn btn-bottom btn-atc qadd">Add to cart</button>
			</div>
		</div>

		<div class="product medium cat-5">
			<div class="media">
				<a href="product.html" title="product title">
					<img src="{{ asset('img/product-1.jpg') }}" alt="product title" data-img="product-1" class="img-responsive" />
				</a>
			</div>
			<div class="details">
				<p class="name"><a href="product.html">delilah</a></p>
				<p class="price"><span class="cur">$</span><span class="total">20.00</span></p>
				<a href="" class="details-expand" data-target="details-0005">+</a>
			</div>
			<div class="details-extra" id="details-0005">
				<form class="form-inline" action="#">
					<div>
						<label>Quantity</label>
						<input type="text" class="input-sm form-control quantity" value="1">
					</div>
					<div>
						<label>Size</label>
						<select class="input-sm form-control size">
							<option>S</option>
							<option>M</option>
							<option>L</option>
						</select>
					</div>
				</form>
				<button class="btn btn-bottom btn-atc qadd">Add to cart</button>
			</div>
		</div>

		<div class="product medium cat-4">
			<div class="media">
				<a href="product.html" title="product title">
					<img src="{{ asset('img/product-2.jpg') }}" alt="product title" data-img="product-2" class="img-responsive" />
				</a>
			</div>
			<div class="details">
				<p class="name"><a href="product.html">delilah</a></p>
				<p class="price"><span class="cur">$</span><span class="total">20.00</span></p>
				<a href="" class="details-expand" data-target="details-0006">+</a>
			</div>
			<div class="details-extra" id="details-0006">
				<form class="form-inline" action="#">
					<div>
						<label>Quantity</label>
						<input type="text" class="input-sm form-control quantity" value="1">
					</div>
					<div>
						<label>Size</label>
						<select class="input-sm form-control size">
							<option>S</option>
							<option>M</option>
							<option>L</option>
						</select>
					</div>
				</form>
				<button class="btn btn-bottom btn-atc qadd">Add to cart</button>
			</div>
		</div>

		<div class="product large cat-1">
			<div class="media">
				<a href="product.html" title="product title">
					<img src="{{ asset('img/product-1.jpg') }}" alt="product title" data-img="product-1" class="img-responsive" />
				</a>
			</div>
			<div class="details">
				<p class="name"><a href="product.html">Delilah</a></p>
				<p class="price"><span class="cur">$</span><span class="total">28.00</span></p>
				<a href="" class="details-expand" data-target="details-0007">+</a>
			</div>
			<div class="details-extra" id="details-0007">
				<form class="form-inline" action="#">
					<div>
						<label>Quantity</label>
						<input type="text" class="input-sm form-control quantity" value="1">
					</div>
					<div>
						<label>Size</label>
						<select class="input-sm form-control size">
							<option>S</option>
							<option>M</option>
							<option>L</option>
						</select>
					</div>
				</form>
				<button class="btn btn-bottom btn-atc qadd">Add to cart</button>
			</div>
		</div>

		<div class="product medium cat-2">
			<div class="media">
				<a href="product.html" title="product title">
					<img src="{{ asset('img/product-2.jpg') }}" alt="product title" data-img="product-2"class="img-responsive" />
				</a>
			</div>
			<div class="details">
				<p class="name"><a href="product.html">delilah</a></p>
				<p class="price"><span class="cur">$</span><span class="total">20.00</span></p>
				<a href="" class="details-expand" data-target="details-0008">+</a>
			</div>
			<div class="details-extra" id="details-0008">
				<form class="form-inline" action="#">
					<div>
						<label>Quantity</label>
						<input type="text" class="input-sm form-control quantity" value="1">
					</div>
					<div>
						<label>Size</label>
						<select class="input-sm form-control size">
							<option>S</option>
							<option>M</option>
							<option>L</option>
						</select>
					</div>
				</form>
				<button class="btn btn-bottom btn-atc qadd">Add to cart</button>
			</div>
		</div>

		<div class="product medium cta alt static">
			<a class='current' href="collection.html">
				<div class="content">
					<p class="poff">20% <br /> off!</p>
					<p>All accessories &rarr;</p>
				</div>
			</a>
		</div>

		<div class="product medium cat-3">
			<div class="media">
				<a href="product.html" title="product title">
					<img src="{{ asset('img/product-1.jpg') }}" alt="product title" data-img="product-1" class="img-responsive" />
				</a>
			</div>
			<div class="details">
				<p class="name"><a href="product.html">Pumpkin</a></p>
				<p class="price"><span class="cur">$</span><span class="total">20.00</span></p>
				<a href="" class="details-expand" data-target="details-0009">+</a>
			</div>
			<div class="details-extra" id="details-0009">
				<form class="form-inline" action="#">
					<div>
						<label>Quantity</label>
						<input type="text" class="input-sm form-control quantity" value="1">
					</div>
					<div>
						<label>Size</label>
						<select class="input-sm form-control size">
							<option>S</option>
							<option>M</option>
							<option>L</option>
						</select>
					</div>
				</form>
				<button class="btn btn-bottom btn-atc qadd">Add to cart</button>
			</div>
		</div>

		<div class="product large cat-1">
			<div class="media">
				<a href="product.html" title="product title">
					<img src="{{ asset('img/product-2.jpg') }}" alt="product title" data-img="product-2" class="img-responsive" />
				</a>
			</div>
			<div class="details">
				<p class="name"><a href="product.html">Pumpkin</a></p>
				<p class="price"><span class="cur">$</span><span class="total">20.00</span></p>
				<a href="" class="details-expand" data-target="details-00011">+</a>
			</div>
			<div class="details-extra" id="details-00011">
				<form class="form-inline" action="#">
					<div>
						<label>Quantity</label>
						<input type="text" class="input-sm form-control quantity" value="1">
					</div>
					<div>
						<label>Size</label>
						<select class="input-sm form-control size">
							<option>S</option>
							<option>M</option>
							<option>L</option>
						</select>
					</div>
				</form>
				<button class="btn btn-bottom btn-atc qadd">Add to cart</button>
			</div>
		</div>

		<div class="product medium cat-5">
			<div class="media">
				<a href="product.html" title="product title">
					<img src="{{ asset('img/product-1.jpg') }}" alt="product title" data-img="product-1" class="img-responsive" />
				</a>
			</div>
			<div class="details">
				<p class="name"><a href="product.html">Pumpkin</a></p>
				<p class="price"><span class="cur">$</span><span class="total">20.00</span></p>
				<a href="" class="details-expand" data-target="details-00010">+</a>
			</div>
			<div class="details-extra" id="details-00010">
				<form class="form-inline" action="#">
					<div>
						<label>Quantity</label>
						<input type="text" class="input-sm form-control quantity" value="1">
					</div>
					<div>
						<label>Size</label>
						<select class="input-sm form-control size">
							<option>S</option>
							<option>M</option>
							<option>L</option>
						</select>
					</div>
				</form>
				<button class="btn btn-bottom btn-atc qadd">Add to cart</button>
			</div>
		</div>

		<div class="product medium cta static">
			<a href="">
				<div class="content">
					<p class="poff">Like <br /> us!</p>
					<p>on facebook &rarr;</p>
				</div>
			</a>
		</div>

		<div class="product medium cat-2">
			<div class="media">
				<a href="product.html" title="product title">
					<img src="{{ asset('img/product-1.jpg') }}" alt="product title" data-img="product-1" class="img-responsive" />
				</a>
			</div>
			<div class="details">
				<p class="name"><a href="product.html">Pumpkin</a></p>
				<p class="price"><span class="cur">$</span><span class="total">20.00</span></p>
				<a href="" class="details-expand" data-target="details-00012">+</a>
			</div>
			<div class="details-extra" id="details-00012">
				<form class="form-inline" action="#">
					<div>
						<label>Quantity</label>
						<input type="text" class="input-sm form-control quantity" value="1">
					</div>
					<div>
						<label>Size</label>
						<select class="input-sm form-control size">
							<option>S</option>
							<option>M</option>
							<option>L</option>
						</select>
					</div>
				</form>
				<button class="btn btn-bottom btn-atc qadd">Add to cart</button>
			</div>
		</div>

		<div class="product medium cat-4">
			<div class="media">
				<a href="product.html" title="product title">
					<img src="{{ asset('img/product-2.jpg') }}" alt="product title" data-img="product-2" class="img-responsive" />
				</a>
			</div>
			<div class="details">
				<p class="name"><a href="product.html">Delilah</a></p>
				<p class="price"><span class="cur">$</span><span class="total">28.00</span></p>
				<a href="" class="details-expand" data-target="details-0013">+</a>
			</div>
			<div class="details-extra" id="details-0013">
				<form class="form-inline" action="#">
					<div>
						<label>Quantity</label>
						<input type="text" class="input-sm form-control quantity" value="1">
					</div>
					<div>
						<label>Size</label>
						<select class="input-sm form-control size">
							<option>S</option>
							<option>M</option>
							<option>L</option>
						</select>
					</div>
				</form>
				<button class="btn btn-bottom btn-atc qadd">Add to cart</button>
			</div>
		</div>

		<div class="product medium cat-3">
			<div class="media">
				<a href="product.html" title="product title">
					<img src="{{ asset('img/product-2.jpg') }}" alt="product title" data-img="product-2" class="img-responsive" />
				</a>
			</div>
			<div class="details">
				<p class="name"><a href="product.html">Cute cat</a></p>
				<p class="price"><span class="cur">$</span><span class="total">20.00</span></p>
				<a href="" class="details-expand" data-target="details-0014">+</a>
			</div>
			<div class="details-extra" id="details-0014">
				<form class="form-inline" action="#">
					<div>
						<label>Quantity</label>
						<input type="text" class="input-sm form-control quantity" value="1">
					</div>
					<div>
						<label>Size</label>
						<select class="input-sm form-control size">
							<option>S</option>
							<option>M</option>
							<option>L</option>
						</select>
					</div>
				</form>
				<button class="btn btn-bottom btn-atc qadd">Add to cart</button>
			</div>
		</div>

	</div> <!-- //end product-board -->

@stop


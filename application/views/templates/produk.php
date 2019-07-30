<!-- Slide1 -->
<section class="slide1">
	<div class="wrap-slick1">
		<div class="slick1">
			<?php foreach ($produk->result() as $p) { ?>
				<div class="item-slick1 item1-slick1" style="background-image: url(<?php echo base_url('assets/upload/image/' . $p->image); ?>);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							Produk
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							Kunyit
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
							<!-- Button -->
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>

<!-- Banner -->
<section class="banner bgwhite p-t-40 p-b-40">
	<div class="container">
		<div class="row">
			<?php foreach ($produk->result() as $p) { ?>
				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="<?php echo base_url('assets/upload/image/' . $p->image); ?>" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="<?php echo base_url('Produk/item/'. $p->id_product); ?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								<?php echo $p->name; ?>
							</a>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<!-- New Product -->
<!-- New Product -->
<section class="newproduct bgwhite p-t-45 p-b-90">
	<div class="container">

		<div class="sec-title p-b-60">
			<h3 class="m-text5 t-center">
				Produk lainnya
			</h3>
		</div>
		<section class="slide1">
			<div class="wrap-slick2">
				<div class="slick2">

					<!-- Slide2 -->
					<?php foreach ($produk->result() as $p) { ?>
						<div class="item-slick2 p-l-15 p-r-15">
							<!-- Block2 -->

							<div class="block2">

								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
									<img src="<?php echo base_url('assets/upload/image/' . $p->image); ?>" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Add to Cart
											</button>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
										<?php echo $p->name; ?>
									</a>

									<span class="block2-price m-text6 p-r-5">
										Rp. <?php echo $p->price; ?>
									</span>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</section>
	</div>
</section>

<!-- Banner2 -->
<!-- Blog -->
<!-- Instagram -->
<!-- Shipping -->
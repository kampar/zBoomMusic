<ion:partial view="header" />
<ion:partial view="page_header" />
	


<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides" id="slider">
					<!-- show slider for all of our pictures linked to this page-->
                    <ion:page:medias type="picture">
                        <li><img src="<ion:media:src size='940,415' method='adaptive' />" /></li>
                    </ion:page:medias>
				</ul>
			</div>
		</div>
	</div>
</div>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">

		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
					<article>
									

						<!-- Articles : No type -->
						<ion:page:articles type="">
							<ion:article>
								<div class="row article">
									<div class="seven columns">

										<div class="article">

											<!-- Article title -->
											<ion:title tag="h3" />

											<!-- Article content -->
											<ion:content />

											<div class="article-pictures">

												<!-- Articles linked files -->
												<ion:medias type="file">
													<a href="<ion:media:src />"><ion:media:title /></a>
												</ion:medias>

											</div>
										</div>
									</div>

									<div class="five columns">

										<ion:medias type="picture">
											<img src="<ion:media:src size='567,343' method='adaptive' />" />
										</ion:medias>

									</div>
								</div>
							</ion:article>
						</ion:page:articles>									
									
									
					</article>
				</div>
			</div><!-- .col-2-3 -->
			<div class="col-1-3">
				<div class="wrap-col">

					<ion:articles type="bloc">
						<ion:article>
							<div class="box">
									<ion:title tag="h2"  class="heading" />
								<div class="content">
									<ion:content tag="div" />
									<ion:article:content tag="div" />
									<ion:article:medias type="picture" limit="1">
										<img src="<ion:media:src size='263,263' method='adaptive' />" />
									</ion:article:medias>
								</div>		
							</div>
						</ion:article>
					</ion:articles>					

					
				</div>
			</div>
		</div><!-- class="row block02" -->
	</div>
</section><!-- content -->	
	
	
	
	
	
	
	
	
	
	
	
	










<ion:partial view="footer" />

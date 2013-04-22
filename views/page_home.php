<ion:partial view="header" />
<ion:partial view="page_header" />
	
<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides" id="slider">
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
		<div class="row block01">
			<!-- Articles : No type -->
			<ion:page:articles type="" limit="3">
				<ion:article>		
					<div class="col-1-3">
						<div class="wrap-col box">
							<!-- Article title -->
							<ion:title tag="h2" />					
							<!-- Article content -->
							<ion:content tag="p" words="20" />
							<!-- <div class="more"><a href="#">[...]</a></div> -->
						</div>
					</div>
					<!-- Articles linked files -->
					<ion:medias type="file">
						<a href="<ion:media:src />"><ion:media:title /></a>
					</ion:medias>
					<ion:medias type="picture" limit="1">
						<img src="<ion:media:src />" />
					</ion:medias>

				</ion:article>
			</ion:page:articles>		
		
		</div>
		
		
		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
					<div class="heading"><h2>Latest Blog</h2></div>
						<ion:page id="blog">
							<ion:articles limit="5">
								<article class="row">
									<div class="col-1-3">
										<div class="wrap-col">
											<a href="<ion:article:url />">
												<ion:article:medias type="picture" limit="1">
													<img src="<ion:media:src size='182,110' method='adaptive' />" />
												</ion:article:medias>
											</a>
										</div>
									</div>
									<div class="col-2-3">
										<div class="wrap-col">
											<a href="<ion:article:url />"><ion:article:title tag="h2" /></a>
											<ion:article:content words="20" />
										</div>
									</div>
								</article>
							</ion:articles>
						</ion:page>
					


				</div>
			</div><!-- .col-2-3 -->
			
			
			<div class="col-1-3">
				<div class="wrap-col">
			
					<div class="box">
						<ion:articles type="bloc">
							<div class="heading"><ion:article:title tag="h2" /></div>
							<div class="content">
								<ion:article:content tag="div" />
								<ion:article:medias type="picture" limit="1">
									<img src="<ion:media:src size='263,263' method='adaptive' />" />
								</ion:article:medias>
							</div>								
						</ion:articles>
					</div><!-- .box -->					
					
					
					
				</div>
			</div>
		</div><!-- class="row block02" -->
	</div>
</section><!-- content -->	
	
	
	
	
	
	
	
	
	
	
	
	







<ion:partial view="footer" />

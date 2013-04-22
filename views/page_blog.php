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
		<div class="row block03">
			<div class="col-2-3">
				<!-- Current category -->
				<ion:page:category:current:title expression="!=''">
					<ion:lang key="you_are_browsing_category" /> : <ion:page:category:current:title/>
				</ion:page:category:current:title>
				<!--
					We get the articles which don't have any type set.
				-->
				<div class="wrap-col">
					<ion:page:articles>
						<ion:article>
							<article>
								<ion:medias type="picture" limit="1">
									<img src="<ion:media:src size='567,343' method='adaptive' />" />
								</ion:medias>

								<h2><a href="<ion:url />"><ion:title class="pagetitle" /></a></h2>

								<div class="info">
									<ion:date format="complete" />

									<!-- This article categories -->
									<p class="categories">
										<ion:lang key="categories" /> : <ion:categories:list link="true" separator=", " />
									</p>
								</div>

								<!-- We limit the display to to first paragraph (first <p></p>) -->
								<ion:content paragraph="1" tag="p" />
							</article>
						</ion:article>
					
					</ion:page:articles>
					<!-- Pagination -->
					<ion:page:articles:pagination tag="ul" class="pagi" />

		
				</div>

				
			</div>

				<div class="col-1-3">
					<div class="wrap-col">
						<div class="box">
							<div class="heading"><h2><ion:lang key="title_categories" /></h2></div>
							<div class="content">
								<ul class="side-nav">
									<ion:page:categories>
										<li>
											<a <ion:category:is_active> class="<ion:category:active_class />" </ion:category:is_active> href="<ion:category:url />"><ion:category:title /></a>
										</li>
									</ion:page:categories>
								</ul>
							</div>
						</div>
						<div class="box">
							<div class="heading"><h2><ion:lang key="title_archives" /></h2></div>
							<div class="content">
								<div class="list">
									<ul class="side-nav">
										<ion:archives with_month="true">
											<li><a class="<ion:active_class />" href="<ion:archive:url />"><ion:archive:period /></a></li>
										</ion:archives>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			
		</div>
		

	</div>
</section><!-- content -->	
		
		
		
		
		
		
<ion:partial view="footer" />

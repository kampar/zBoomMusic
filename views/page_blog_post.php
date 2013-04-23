<ion:partial view="header" />
<ion:partial view="page_header" />


<!-- sorry to put slider on top of the pages ... --> 
<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides" id="slider">
					<!-- show slider for all of our pictures linked to this page-->
					<ion:page:article>
                    <ion:medias type="picture">
                        <li><img src="<ion:media:src size='940,415' method='adaptive' />" /></li>
                    </ion:medias>
					</ion:page:article>
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
				<div class="wrap-col">
					<?php if ('<ion:article:category field="title" />' != '') :?>
						<p id="category_highlight"><em>//</em> <ion:lang key="you_are_browsing_category" /> : <span><ion:article:category field="title" /></span></p>
					<?php endif; ?>
				
					<article>
						<ion:page:article>

							<h2><ion:title /></h2>
							<div class="info">
								[ <ion:date format="complete" class="date"/>

								<!-- This article categories -->
								
									<ion:lang key="categories" /> : <ion:categories:list link="true" separator=", " />
								]
							</div>

							<!-- Pictures slider -->
							<!--div id="slider">
								<ion:medias type="picture">
									<img src="<ion:media:src size='567,343' method='adaptive' />" />
								</ion:medias>
							</div-->

							<!-- content -->
							<p></p>
							<ion:content />

						</ion:page:article>
					</article>
		
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

<script type="text/javascript">
    //$(window).load(function() {
    //    $("#slider").orbit();
    //});
</script>



<!-- Partial : Footer -->
<ion:partial view="footer" />
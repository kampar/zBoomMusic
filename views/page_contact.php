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
						<!--
							Success message
							Displayed if the form was successfuly validated
						-->
						<ion:form:contact:validation:success is="true">
							<div class="alert-box success">
								<ion:lang key="form_alert_success_title" tag="h4" />
								<ion:lang key="form_alert_success_message" tag="p" />
								<a href="" class="close">&times;</a>
							</div>
						</ion:form:contact:validation:success>
						<!--
							Error message
							Displayed if the form doesn't pass the validation
							the 'form_message_error' key is located in : themes/zBoomMusic/language/xx/tags_lang.php
						-->
						<ion:form:contact:validation:error is="true" >
							<div class="alert-box alert">
								<ion:lang key="form_alert_error_title" tag="h4" />
								<ion:lang key="form_alert_error_message" tag="p" />
								<a href="" class="close">&times;</a>
							</div>
						</ion:form:contact:validation:error>
						<!--
							Form has no action because the same page will process the data.
							POST data are catched by the global Tagmanager and processed by the Tagmanager's library method 'prcoess_data'
							defined in : /themes/zBoomMusic/libraries/Tagmanager/Contact.php
							as declared in the form config file : /themes/zBoomMusic/config/forms.php
						-->
						<div class="comment">
							<form method="post" action="">
								<!-- The form name must be set so the tags identify it -->
								<input type="hidden" name="form" value="contact" />
								<!-- Input : Name -->
								<div>
									<input name="firstname" type="text" id="firstname" value="<ion:form:contact:field:firstname />"<ion:form:contact:error:firstname is="true"> class="error" </ion:form:contact:error:firstname>/>
									<label for="firstname"><ion:lang key="form_label_form_firstname" /></label>
									<ion:form:contact:error:firstname tag="small" class="error" />
								</div>
								<!-- Input : Surname -->
								<div>
									<input name="lastname" type="text" id="lastname" value="<ion:form:contact:field:lastname />"<ion:form:contact:error:lastname is="true"> class="error" </ion:form:contact:error:lastname> />
									<label for="lastname"><ion:lang key="form_label_form_lastname" /></label>
									<ion:form:contact:error:lastname tag="small" class="error" />
								</div>
								<!-- Input : Email -->
								<div>
									<input name="email" type="text" id="email" value="<ion:form:contact:field:email />"<ion:form:contact:error:email is="true"> class="error" </ion:form:contact:error:email> />
									<label for="email"><ion:lang key="form_label_email" /></label>
									<ion:form:contact:error:email tag="small" class="error" />
								</div>
								<!-- Input : Subject -->
								<div>
									<input name="subject" type="text" id="subject" value="<ion:form:contact:field:subject />"<ion:form:contact:error:subject is="true"> class="error" </ion:form:contact:error:subject> />
									<label for="subject"><ion:lang key="form_label_form_subject" /></label>
									<ion:form:contact:error:subject tag="small" class="error" />
								</div>
								<!-- Input : Message -->
								<div>
									<textarea name="message" id="message" rows="7" placeholder="<ion:lang key="form_label_form_message" />"<ion:form:contact:error:message is="true"> class="error" </ion:form:contact:error:message>><ion:form:contact:field:message /></textarea>
									<!--label for="message"><ion:lang key="form_label_form_message" /></label-->
									<ion:form:contact:error:message tag="small" class="error" />
								</div>
								<button type="submit" class="button success right"><ion:lang key="button_send" /></button>
							</form>
						</div>
						<!--
							Honny pot javascript feeding of the fake "city" field
						-->
						<script type="text/javascript">
							window.addEvent('load', function() //using load instead of domready for IE8
							{
								$('city').value = '<ion:config item="form_antispam_key" />';
							});
						</script>

						
									
					</article>
					
					
					
				</div>
			</div><!-- .col-2-3 -->
			<div class="col-1-3">
				<div class="wrap-col"> <!-- sidebar -->DODOL
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

					
				</div><!-- .col-1-3 -->
			</div>
		</div><!-- class="row block02" -->
	</div>
</section><!-- content -->	
	
	
	
	
	
	
	
	
	
	
	
	










<ion:partial view="footer" />

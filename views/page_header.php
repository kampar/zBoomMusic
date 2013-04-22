<!--------------Header--------------->
<header>
	<div class="wrap-header zerogrid">
		<div id="logo"><a href="<ion:home_url />"><img src="<ion:theme_url/>assets/images/logo.png"/></a>
            <ion:page:title tag="h1"/>

            <!-- Page's subtitle -->
            <ion:page:subtitle tag="h2"/>
		</div>	
		
		<div id="search">
			<div class="button-search"></div>
			<input type="text" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
		</div>
	</div>
</header>

<nav>
	<div class="wrap-nav zerogrid">
		<div class="menu">
			<ul>
				<ion:navigation level="0"  active_class="current"  >
					<li>
						<a href="<ion:url />"><ion:title /></a>
					</li>
				</ion:navigation>			
			</ul>
		</div>
		
		<!-- mobile devices-->
		<div class="minimenu"><div>MENU</div>
			<select onchange="location=this.value">
				<option></option>
				<ion:navigation level="0">
					<li>
						<option value="<ion:url />"><ion:title /></option>
					</li>
				</ion:navigation>					
			</select>
		</div>		
	</div>
</nav>
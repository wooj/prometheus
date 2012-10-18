<?php if(the_option('pricing_table_option') == 'on') : ?>

<style>

ul.table {float:left; font-size:1.5em;background:#fafafa;}
ul.table li:nth-child(odd) { background:#ebebeb;}
ul.table { border-radius:4px;position:relative;z-index:100;overflow:hidden;}
ul.table li { line-height:50px; height:50px;width:233px; font-size:14px;border-bottom: 1px solid #EBEBEB;    border-top: 1px solid #FFFFFF;border-right:1px solid #fff;}
ul.featured { box-shadow: 0 0 12px rgba(0, 0, 0, 0.2), 0 0 0 transparent;    margin-top: -21px;    position: relative;    z-index: 101 !important; }
ul.featured li.table_footer { padding-bottom:100px;height:40px;}
ul li.table_footer { padding-bottom:50px;height:20px;}
ul.featured li.table_footer { padding-bottom:100px;}

ul.table_1 .table_header {   background-image: url("http://pandabear.co/imgs/sprites/pricing_table_sprite.png");

	    background-position: 0 -823px;
    background-repeat: no-repeat;
    font-family: league;
    height: 260px;
    width: 234px;}
	
	ul.table_2 .table_header {   background-image: url("http://pandabear.co/imgs/sprites/pricing_table_sprite.png");
    background-position: -1px -2px;
    background-repeat: no-repeat;
    font-family: league;
    height: 260px;
    width: 234px;}
	
	ul.table_3 .table_header {   background-image: url("http://pandabear.co/imgs/sprites/pricing_table_sprite.png");
    background-position: 0px -267px;
    background-repeat: no-repeat;
    font-family: league;
    height: 260px;
    width: 234px;}
	
	ul.table_4 .table_header {   background-image: url("http://pandabear.co/imgs/sprites/pricing_table_sprite.png");

	    background-position: 0 -556px;
    background-repeat: no-repeat;
    font-family: league;
    height: 260px;
    width: 234px;}
	
	.table_header .plan_name { color:#fff;font-size:1.25em;padding-top:5px;}
	.table_header .plan_price{ font-size:2.5em; margin-top:20px;}
	.table_header a.button { margin-top:80px;}

</style>


<div class="container" style="margin-top:140px;text-align:center;">
<div id="pricing_tables" style="display:inline-block;">


<ul class="table table_1">
<div class="table_header">
	<div class="plan_name">1 Domain</div>
	<div class="plan_price">$29/month</div>
	<a class="button" href="#">Start Today!</a>
</div>

<li>SaaS Hosting</li>
<li>100% SEO Optimized</li>
<li>Unlimited Storage</li>
<li>Unlimited Traffic</li>
<li>Mobile Ready!</li>
<li>100% Social Media Ready!</li>
<li>Newsletter Support Built</li>
<li>Create Unlimited Pages</li>
<li>Add Youtube, Vimeo, &amp; More!</li>
<li>Built in Video Gallery</li>
<li>Built in Image Gallery</li>
<li>Built in Blog</li>
<li>Built in Events Pages</li>
<li>and more!</li>
<li class="table_footer">What are you waiting for?</li>

</ul>



<ul class="table featured table_2">
<div class="table_header">
	<div class="plan_name">3 Domains</div>
	<div class="plan_price">$69/month</div>
	<a class="button" href="#">Start Your Trial!</a>
</div>
<li>SaaS Hosting</li>
<li>100% SEO Optimized</li>
<li>Unlimited Storage</li>
<li>Unlimited Traffic</li>
<li>Mobile Ready!</li>
<li>100% Social Media Ready!</li>
<li>Newsletter Support Built</li>
<li>Create Unlimited Pages</li>
<li>Add Youtube, Vimeo, &amp; More!</li>
<li>Built in Video Gallery</li>
<li>Built in Image Gallery</li>
<li>Built in Blog</li>
<li>Built in Events Pages</li>
<li>and more!</li>
<li class="table_footer">What are you waiting for?</li>

</ul>




<ul class="table table_3">
<div class="table_header">
	<div class="plan_name">5 Domains</div>
	<div class="plan_price">$99/month</div>
	<a class="button" href="#">Start Your Trial!</a>
</div>

<li>SaaS Hosting</li>
<li>100% SEO Optimized</li>
<li>Unlimited Storage</li>
<li>Unlimited Traffic</li>
<li>Mobile Ready!</li>
<li>100% Social Media Ready!</li>
<li>Newsletter Support Built</li>
<li>Create Unlimited Pages</li>
<li>Add Youtube, Vimeo, &amp; More!</li>
<li>Built in Video Gallery</li>
<li>Built in Image Gallery</li>
<li>Built in Blog</li>
<li>Built in Events Pages</li>
<li>and more!</li>
<li class="table_footer">What are you waiting for?</li>

</ul>



<ul class="table table_4">
<div class="table_header">
	<div class="plan_name">10 Domains</div>
	<div class="plan_price">$149/month</div>
	<a class="button" href="#">Start Your Trial!</a>
</div>

<li>SaaS Hosting</li>
<li>100% SEO Optimized</li>
<li>Unlimited Storage</li>
<li>Unlimited Traffic</li>
<li>Mobile Ready!</li>
<li>100% Social Media Ready!</li>
<li>Newsletter Support Built</li>
<li>Create Unlimited Pages</li>
<li>Add Youtube, Vimeo, &amp; More!</li>
<li>Built in Video Gallery</li>
<li>Built in Image Gallery</li>
<li>Built in Blog</li>
<li>Built in Events Pages</li>
<li>and more!</li>
<li class="table_footer">What are you waiting for?</li>

</ul>

</div><!-- #pricing_tables -->
</div><!-- #container -->

<?php endif; ?>




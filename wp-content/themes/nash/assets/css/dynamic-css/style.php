/*---------------------- Body --------------------------*/

.header-background-image {
	background: url(<?php echo $data['upload_header_background']; ?>) top center no-repeat;
}

.bg1 {
	background: url(<?php echo $data['upload_quotes_top_background']; ?>) top center no-repeat;
}

.bg2 {
	background: url(<?php echo $data['upload_logos_background']; ?>) top center no-repeat;
}

.bg3 {
	background: url(<?php echo $data['upload_latest_tweet_background']; ?>) top center no-repeat;
}

.bg4 {
	background: url(<?php echo $data['upload_quotes_bottom_background']; ?>) top center no-repeat;
}

body p,
.pag_box,
#testoEvento,
#dataEvento,
.accordion-content,
ul.tabs-content,
.toggle_container,
#sidebar .widget,
.meta-author,
.meta-category,
.tags {
	color: <?php echo $data['body_font']['color']; ?>;
	font-family: <?php echo $data['body_font']['face']; ?>;
	font-size: <?php echo $data['body_font']['size']; ?>;
	font-style: <?php echo $data['body_font']['style']; ?>;
	font-weight: <?php echo $data['body_font']['style']; ?>;
}

#latest-quotes blockquote,
#single-project .client-details,
#single-project .project-checklist,
.meta-category a:visited:hover,
.meta-category a:hover {
	color: <?php echo $data['body_font']['color']; ?>;
	font-family: <?php echo $data['body_font']['face']; ?>;
}

blockquote cite,
#footer-global[role="contentinfo"] .widget,
.plan-price,
.pricing-content ul li,
.dropcap,
input[type="text"],
input[type="password"],
input[type="email"],
textarea,
select,
.tweet,
.pager a {
	font-family: <?php echo $data['body_font']['face']; ?>;
}

.pagination .page-numbers {	
	font-family: <?php echo $data['body_font']['face']; ?>;
	font-size: <?php echo $data['body_font']['size']; ?>;
	font-style: <?php echo $data['body_font']['style']; ?>;
	font-weight: <?php echo $data['body_font']['style']; ?>;
}

#content p a:hover,
#meet-the-team .team-member p a:hover,
#comments .author a:hover,
#comments .author a.comment-reply-link:hover,
#comments .comment-edit-link:hover,
#sidebar .widget a:hover {
	color: <?php echo $data['body_font']['color']; ?>;
}

#main h1,
#main h2,
#main h3,
#main h4,
#main h5,
#main h6,
.title a,
#footer-global h1,
#single-project h1, 
#single-project h2, 
#single-project h3, 
#single-project h4, 
#single-project h5, 
#single-project h6,
#sidebar h1,
#sidebar h2,
#sidebar h3,
#sidebar h4,
#sidebar h5,
#sidebar h6,
.project-item .project-details h2,
#comments h4,
.comment .author,
#respond h3,
.project-item .overlay h2,
#services h2,
#meet-the-team h2,
h2.post-title a,
#content p.trigger a,
ul.tabs li a,
#latest-news article h2 a,
.must-log-in,
.logged-in-as {
	color: <?php echo $data['headings_font']['color']; ?>;
	font-family: <?php echo $data['headings_font']['face']; ?>;
	font-style: <?php echo $data['headings_font']['style']; ?>;
	font-weight: <?php echo $data['headings_font']['style']; ?>;
}

.alert-red, .alert-blue, .alert-green, .alert-brown, .alert-teal, .alert-tan,
.plan-title,
.button,
button,
input[type="submit"],
input[type="reset"],
input[type="button"],
a.button.white,
a.button.grey,
a.button.black,
a.button.red,
a.button.blue,
a.button.green,
a.button.brown,
a.button.teal,
a.button.tan,
a.launch-project-btn,
a.view-article-btn,
a.return-home-btn,
a.sign-up-btn,
#latest-quotes cite,
#filter li a {
	font-family: <?php echo $data['headings_font']['face']; ?>;
	font-style: <?php echo $data['headings_font']['style']; ?>;
	font-weight: <?php echo $data['headings_font']['style']; ?>;
}

#header-global[role="banner"],
#contact-details p,
.time {
	font-family: <?php echo $data['headings_font']['face']; ?>;
}

#header-navigation[role="navigation"] #navigation li a:hover,
#header-navigation[role="navigation"] li a:focus,
#header-navigation[role="navigation"] li.nav-item a:hover,
#header-navigation[role="navigation"] li.nav-item a:focus,
#header-navigation.is-sticky[role="navigation"] li.nav-item a:hover,
#filter li a:hover,
#filter li .current,
.project-image .overlay [class^="icon-"],
.twtr-hyperlink,
#latest-news article a,
dl dt:hover,
#latest-news article h2 a:hover {
	color: <?php echo $data['accent_color']; ?>;
}

.expand,
.plan-price,
ul.tabs li a.active,
ul.tabs li a:hover,
.pagination .prev:hover,
.pagination .next:hover,
.project-nav li:hover,
.project-nav .back:hover,
.social-icons li a.phone-link:hover,
.social-icons li a.mail-link:hover,
.social-icons li a.twitter-link:hover,
.social-icons li a.facebook-link:hover,
.social-icons li a.dribbble-link:hover,
.social-icons li a.forrst-link:hover,
.social-icons li a.vimeo-link:hover,
.social-icons li a.youtube-link:hover,
.social-icons li a.flickr-link:hover,
.social-icons li a.linkedin-link:hover,
.social-icons li a.pinterest-link:hover,
.social-icons li a.googleplus-link:hover,
.social-icons li a.tumblr-link:hover,
.social-icons li a.soundcloud-link:hover,
.social-icons li a.lastfm-link:hover,
.social-icons.footer li a,
.pager a:hover,
#uber-statement {
	background-color: <?php echo $data['accent_color']; ?>!important;
}

blockquote {
	border-left: 3px solid <?php echo $data['accent_color']; ?>!important;
}

a.launch-project-btn,
a.view-article-btn,
a.return-home-btn,
a.sign-up-btn,
.button,
button,
input[type="submit"],
input[type="reset"],
input[type="button"] {
	background-color: <?php echo $data['accent_color_button']; ?>;
}

.pag_box a,
.title a:hover,
#content p a,
.service p a,
.team-member p a,
#comments .author a,
#comments .author a.comment-reply-link,
#comments .comment-edit-link,
.tags a,
#sidebar .widget a,
.project-item .overlay h2 a:hover,
.overview a,
.toggle_container a,
#comments a,
.meta-author a,
.meta-category a,
.post-title a:hover,
.pagination a:hover {
	color: <?php echo $data['body_link_color']; ?>;
}

.pagination .current,
.active-header,
.inactive-header:hover,
p.trigger a:hover,p.trigger.active a:hover,
p.trigger.active a {
	color: <?php echo $data['body_link_color']; ?>!important;
}

#footer-global[role="contentinfo"] a {
	color: <?php echo $data['footer_link_color']; ?>;
}
	
#services .service [class^="icon-"] {
	color: <?php echo $data['accent_color_service_icons']; ?>;
}

#meet-the-team .social-icons-small a [class^="icon-"] {
	color: <?php echo $data['accent_color_team_icons']; ?>;
}

/*---------------------- Custom CSS (Added from the Theme Options panel) --------------------------*/

<?php echo $data['custom_css']; ?>
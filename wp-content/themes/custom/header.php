<?php
/*
Theme Name: Mixby Wordpress
Author: Heidi Yee
Description: Learning Wordpress using Mixby site by customizing new theme based on twentyfifteen theme
Version: 1.0.0
*/
$post_slug = $post->post_name;

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Mixby <?php wp_title('|'); ?></title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();
	?>/_ui/css/main.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <h1 class="offscreen">Mixby Website</h1>
	<header>
		<nav class="nav-bar <?php echo $post_slug ?>">
	        <div class="container">
				<a href="<?php echo get_home_url(); ?>">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 132.4 40.9" style="enable-background:new 0 0 132.4 40.9;" xml:space="preserve">
					<style type="text/css">
						.st0{fill:#17ADC3;}
					</style>
					<g id="XMLID_15_">
						<g id="XMLID_23_">
							<g id="XMLID_12_">
								<path id="XMLID_13_" class="st0" d="M47.3,0c-1.7,0-3.2,1.4-3.2,3.2s1.4,3.2,3.2,3.2c1.7,0,3.2-1.4,3.2-3.2S49,0,47.3,0L47.3,0z"
									/>
							</g>
							<g id="XMLID_9_">
								<path id="XMLID_10_" class="st0" d="M49.9,31.2h-5.3V9.6h5.3V31.2z"/>
							</g>
							<g id="XMLID_6_">
								<path id="XMLID_7_" class="st0" d="M75.4,31.2h-5.3v-0.8c0-4.5-3-6.7-5.7-8c-2.7,1.3-5.7,3.5-5.7,8v0.8h-5.3v-0.8
									c0-4.4,1.9-8,5.4-10.6c-3.2-2.2-4.8-5.2-4.8-9.4V9.6h5.3v0.8c0,4.2,2.3,5.6,5.1,6.8l0,0l0,0c2.8-1.2,5.1-2.6,5.1-6.8V9.6h5.3v0.8
									c0,4.1-1.6,7.2-4.8,9.4c3.5,2.6,5.4,6.2,5.4,10.6V31.2z"/>
							</g>
							<g id="XMLID_2_">
								<path id="XMLID_3_" class="st0" d="M101.9,20.4c0,6.3-4.9,11.5-11.3,11.5c-4.2,0-6.4-2.7-6.4-2.7v2.1H79V1h5.3v10.6
									c0,0,2.3-2.7,6.4-2.7C96.9,8.9,101.9,14.1,101.9,20.4z M90.3,14c-3.5,0-6.4,2.9-6.4,6.4c0,3.5,2.9,6.4,6.4,6.4
									c3.5,0,6.4-2.9,6.4-6.4C96.6,16.9,93.8,14,90.3,14z"/>
							</g>
							<g id="XMLID_24_">
								<path id="XMLID_25_" class="st0" d="M115.8,40.9h-0.4v-5.3h0.4c3,0,5.5-2.5,5.5-5.5v-0.3c-0.9,0.8-2.6,2-5.5,2
									c-5.9,0-10.8-4.8-10.8-10.8V9.6h5.3v11.5c0,3,2.5,5.5,5.5,5.5c3,0,5.5-2.5,5.5-5.5V9.6h5.3v20.5C126.6,36,121.7,40.9,115.8,40.9z
									"/>
							</g>
						</g>
						<g id="XMLID_17_">
							<path id="XMLID_18_" class="st0" d="M130.8,27.9c0.9,0,1.6,0.7,1.6,1.6c0,0.9-0.7,1.6-1.6,1.6c-0.9,0-1.6-0.7-1.6-1.6
								C129.2,28.6,129.9,27.9,130.8,27.9z M130.8,30.8c0.7,0,1.2-0.6,1.2-1.3c0-0.7-0.5-1.3-1.2-1.3c-0.7,0-1.2,0.6-1.2,1.3
								C129.6,30.2,130.1,30.8,130.8,30.8z M130.8,29.7h-0.1v0.6h-0.4v-1.8h0.7c0.3,0,0.6,0.3,0.6,0.6c0,0.2-0.1,0.4-0.4,0.5l0.4,0.7
								h-0.4L130.8,29.7z M130.8,29.4c0.2,0,0.3-0.1,0.3-0.2c0-0.2-0.1-0.2-0.3-0.2h-0.2v0.5H130.8z"/>
						</g>
						<path id="XMLID_16_" class="st0" d="M30.4,9c-3.2,0-6.2,1.5-8.1,3.9C20.4,10.5,17.4,9,14.2,9c-2.9,0-5.5,1.3-7.5,3.6
							c-1.6-1.7-4-2.8-6.3-2.8H0V15h0.4c1.9,0,3.4,1.5,3.4,3.4v12.8h5.3V19.6c0-2.9,2.4-5.3,5.3-5.3s5.3,2.4,5.3,5.3v11.6h5.2V19.6
							c0-2.9,2.4-5.3,5.3-5.3s5.3,2.4,5.3,5.3v11.6h5.2V19.6C40.8,13.7,36.2,9,30.4,9z"/>
					</g>
					</svg>
				</a>
				<div id="nav-icon">
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
				</div>

				<div id="nav-links">
					<?php echo wp_nav_menu(); ?>
				</div>
			</div>
		</nav>
		<div class="header-content">
		</div>
	</header>

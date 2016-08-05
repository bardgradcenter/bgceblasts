<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php wp_head(); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="initial-scal=1.0, width=device-width">
		<?php
		$hidden_preview_text = get_field('hidden_preview_text');
		if($hidden_preview_text){ ?>
			<title><?php the_field('hidden_preview_text'); ?></title>
		<?php } ?>
		<style type="text/css">
			body {
				margin: 0;
				padding: 0;
				min-width: 100%!important;
				color:#000;
			}
			img {
				display: block;
			}
			a img {
				border:none;
			}
			<?php
            $link_color = get_field('link_color');
            if($link_color) { ?>
				a, .colorText {
					color:<?php the_field('link_color'); ?>;
				}
			<?php } else { ?>
				a, .colorText {
					color:#ff0000;
				}
			<?php }; ?>
			.hidden_preview, .masthead span {
				color:#ffffff;
				font-size: 0px;
				line-height: 0px;
			}
			.content {
				width: 740px;
				padding: 20px;
				font-family: Arial, sans-serif;
				font-size: 12px;
				line-height: 18px;
			}
			.content td {
				font-family: Arial, sans-serif;
				font-size: 12px;
				line-height: 18px;
			}
			.masthead {
				border-bottom:10px solid #000000;
				padding: 0 0 14px 0;
			}
			.masthead a {
				text-decoration: none;
				<?php
                $fontSize = get_field('header_font-size');
                if($fontSize) { ?>
					font-size: <?php the_field('header_font-size'); ?>px;
				<?php } else { ?>
					font-size: 24px;
				<?php } ?>
			}
			.banner {
				border-bottom: 3px solid #000000;
			}
			.banner .alt {
				font-size: 0px;
				line-height: 0px;
				color:#000000;
				width:100%;
				background-color:#000000;
				padding:0;
				margin:0;
			}
			.content_alt {
				font-size: 0;
				line-height: 0;
				color:#ffffff;
				width: 100%;
				background-color: #ffffff;
				padding:0;
				margin:0;
			}
			.border_separator {
				border-bottom: 10px solid #000000;
				font-size: 1px;
				line-height: 0px;
			}
			.left_bar {
				border-left:10px solid #000;
				padding-left: 5px;
			}
			.footer {
				border-top:10px solid #000;
				padding-top: 15px;
			}
			.footer td {
				font-size:11px;
				line-height: 15px;
			}
			.footer a {
				text-decoration: none;
			}
			@media only screen and (max-width:480px){
		        .left_column, .right_column {
		            width: 100%;
		            padding-right:0;
		            padding-left: 0;
		            float: left;
		        }
		        .left_column_td, .right_column_td {
		        	width: 100%;
		        	float: left;
		        }
		        .with_times {
		        	width: 100%;
		        }
		        .with_times .times {
		        	width: 30%;
		        	border-right-width: 2%;
		        }
		        .with_times .details {
		        	width: 68%;
		        }
		    }
		</style>
	</head>
	<body bgcolor="#ffffff">
		<?php 
		if($hidden_preview_text){ ?>
			<span class="hidden_preview"><?php the_field('hidden_preview_text'); ?></span>
		<?php } ?>
		<table width="100%" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td>
					<table class="content" align="center" cellpadding="0" cellspacing="0" border="0">
						<tr>
							<td>
								<!--TOP MASTHEADER-->
                                <table width="700" class="masthead" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td valign="bottom" width="109">
                                        	<span>Bard Graduate Center</span>
                                            <a href="http://bgc.bard.edu/"><img src="http://eblasts.commons.bgc.bard.edu/wp-content/uploads/sites/50/2016/05/bgc_eblast_logo.jpg" width="109" height="56" alt="Bard Graduate Center"></a>
                                        </td>
                                        <td valign="bottom" width="591" style="text-align:right;">
                                        	<?php
                                        	$header = get_field('top_right_header');
                                        	if($header){
                                        		$header_url = get_field('top_right_header_url');
                                        		if($header_url){ ?>
                                        			<a href="<?php the_field('top_right_header_url'); ?>"><?php the_field('top_right_header'); ?></a>
                                        		<?php } else { ?>
                                        			<?php the_field('top_right_header'); ?>
                                        		<?php } ?>
                                        	<?php } ?>
                                        </td>
                                    </tr>
                                </table>
                                <!--/TOP MASTHEADER-->

                                <!--BANNER IMAGE-->
                                <table width="700" class="banner" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td valign="top" width="700">
                                            <?php 
                                            $image = get_field('banner_image');
                                            $banner_url = get_field('banner_image_url');
                                            $banner_image_alt_text = get_field('banner_image_alt_text');
                                            if($banner_image_alt_text){ ?>
                                            	<div class="alt"><?php echo $banner_image_alt_text; ?></div>
                                            <?php } ?>
                                            <?php if( !empty($image) ): ?>
                                            	<?php if($banner_url) { ?>
                                                	<a href="<?php the_field('banner_image_url'); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php the_field('banner_image_alt_text'); ?>"></a>
                                                <?php } else { ?>
                                                	<img src="<?php echo $image['url']; ?>" alt="<?php the_field('banner_image_alt_text'); ?>">
                                                <?php } ?>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <!--/BANNER IMAGE-->

								<!--CONTENT SECTIONS-->
								<?php 
								if(have_rows('content_sections')){
									while(have_rows('content_sections')){
										the_row();

										if(get_row_layout() == 'full_width_text') { ?>
											<!--FULL WIDTH SECTION-->
			                                <table width="700" class="full_width" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
			                                	<tr>
			                                		<td valign="top" width="700">
			                                			<?php
			                                			$text = get_sub_field('text');
			                                			if($text){ ?>
			                                				<?php 
			                                				$no_open_h1 = str_replace('<h1>','<div style="font-size:18px; line-height:22px; font-weight:bold;">', $text);
			                                				$no_h1 = str_replace('</h1>','</div><br>',$no_open_h1);
			                                				$no_open_p = str_replace('<p>','',$no_h1);
			                                				$final_text = str_replace('</p>','<br><br>',$no_open_p);
			                                				echo $final_text; ?>
			                                			<?php } ?>
			                                		</td>
			                                	</tr>
			                                </table>
			                                <!--/FULL WIDTH SECTION-->
										<?php } elseif(get_row_layout() == 'separator') { ?>
											<!--SEPARATOR-->
			                                <table width="100%" class="border_separator" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
			                                	<tr>
			                                		<td valign="top" width="100%">
			                                			&nbsp;
			                                		</td>
			                                	</tr>
			                                </table>
			                                <br>
			                                <!--/SEPARATOR-->
			                            <?php } elseif(get_row_layout() == 'two_column_layout') { ?>
			                            	<!--TWO COLUMNS-->
			                                <br>
			                                <table width="700" class="two_columns" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
			                                	<tr>
			                                		<?php 
			                                		if(have_rows('left_column')){ ?>
			                                			<!--LEFT COLUMN-->
				                                		<td valign="top" width="350" class="left_column_td">
				                                			<table width="350" class="left_column" style="padding-right:10px;" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
				                                				<tr>
				                                					<td width="340" class="left_column_td" valign="top">
							                                			<?php while(have_rows('left_column')){
							                                				the_row(); ?>


							                                					<?php 
				                                								if(get_row_layout() == 'text_block') { ?>
							                                						<!--TEXT-->
							                                						<?php
										                                			$text = get_sub_field('text');
										                                			if($text){ ?>
										                                				<?php 
										                                				$no_open_h1 = str_replace('<h1>','<div style="font-size:18px; line-height:22px; font-weight:bold;">', $text);
										                                				$no_h1 = str_replace('</h1>','</div><br>',$no_open_h1);
										                                				$no_open_p = str_replace('<p>','',$no_h1);
										                                				$final_text = str_replace('</p>','<br><br>',$no_open_p);
										                                				echo $final_text; ?>
										                                			<?php } ?>
																					<!--/TEXT-->
																				<?php } elseif(get_row_layout() == 'separator') { ?>
																					<!--SEPARATOR-->
													                                <table width="100%" class="border_separator" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
													                                	<tr>
													                                		<td valign="top" width="100%">
													                                			&nbsp;
													                                		</td>
													                                	</tr>
													                                </table>
													                                <br>
													                                <!--/SEPARATOR-->
													                            <?php } elseif(get_row_layout() == 'image'){ ?>
													                            	<!--IMAGE-->

													                            	<?php
										                                            $image = get_sub_field('image');
										                                            $image_link = get_sub_field('image_link');
										                                            $image_alt_text = get_sub_field('image_alt_text');
										                                            if($image_alt_text){ ?>
										                                            	<div class="content_alt"><?php echo $image_alt_text; ?></div>
										                                            <?php } ?>
										                                            <?php if( !empty($image) ): ?>
										                                            	<?php 
										                                            	$size = 'new_ap_image';
										                                            	$medium = $image['sizes'][$size];
										                                            	$width = $image['sizes'][ $size . '-width' ];
                                                                            			$height = $image['sizes'][ $size . '-height' ];
                                                                            			?>
										                                            	<?php if($image_link) { ?>
										                                                	<a href="<?php the_sub_field('image_link'); ?>"><img src="<?php echo $medium; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php the_sub_field('image_alt_text'); ?>"></a><br>
										                                                <?php } else { ?>
										                                                	<img src="<?php echo $medium; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php the_sub_field('image_alt_text'); ?>"><br>
										                                                <?php } ?>
										                                            <?php endif; ?>
																					<!--/IMAGE-->
																				<?php } elseif(get_row_layout() == 'datetime'){ ?>
																					<!--DATE/TIME-->
							                                						<div class="left_bar">
							                                							<strong><a href="http://www.bgc.bard.edu/news/events/toys-and-childhood.html">Friday, September 18, 2015<br>
							                                                    		9:30am&ndash;5pm</a></strong>
							                                                    	</div>
							                                                    	<br>
							                                                    	<!--/DATE/TIME-->
							                                                    <?php } elseif(get_row_layout() == 'rsvp_block'){ ?>
							                                                    	<!--RSVP-->
							                                						<div class="left_bar">
							                                							<strong>RSVP is required.</strong><br>
							                                                    		To reserve your place, please visit our <a href="http://www.bgc.bard.edu/news/events/toys-and-childhood.html">web site</a>, email <a href="mailto:academicevents@bgc.bard.edu">academicevents@bgc.bard.edu</a>, or call 212.501.3019.
							                                                    	</div>
							                                                    	<br>
							                                                    	<!--/RSVP-->
							                                                    <?php } elseif(get_row_layout() == 'speakersschedule'){ ?>
							                                                    	<!--SPEAKERS/SCHEDULE-->
						                                                    			<?php
						                                                    			$show_times = get_sub_field('show_times');
						                                                    			if($show_times){ ?>
						                                                    				<!--WITH TIMES-->
						                                                    				<?php
						                                                    				if(have_rows('speakers__event')){ ?>
						                                                    					<table width="340" class="with_times" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
						                                                    					<?php while(have_rows('speakers__event')){
						                                                    						the_row(); ?>
						                                                    							<?php
						                                                    							$time = get_sub_field('time');
						                                                    							$speaker_name = get_sub_field('speaker_name');
						                                                    							$affiliation = get_sub_field('affiliation');
						                                                    							$title = get_sub_field('title_of_presentation'); ?>
						                                                    							<tr>
										                                                    				<td width="105" class="times" valign="top" style="text-align:right; border-right:10px solid #fff;">
										                                                    					<?php if($time){
										                                                    						echo $time;
										                                                    					}; ?>
										                                                    				</td>
										                                                    				<td width="225" class="details" valign="top">
													                                                            <?php
								                                                    							if($speaker_name){ ?>
								                                                    								<strong><?php the_sub_field('speaker_name'); ?></strong><br>
								                                                    							<?php }; ?>
								                                                    							<?php
								                                                    							if($affiliation) { ?>
								                                                    								<?php the_sub_field('affiliation'); ?><br>
								                                                    							<?php }; ?>
								                                                    							<?php
								                                                    							if($title){ ?>
								                                                    								<?php 
																	                                				$no_open_p = str_replace('<p>','',$title);
																	                                				$final_text = str_replace('</p>','',$no_open_p); ?>
								                                                    								<span class="colorText"><?php echo $final_text; ?></span><br>
								                                                    							<?php }; ?>
								                                                    							<br>
													                                                        </td>
										                                                    			</tr>
						                                                    					<?php }; ?>
						                                                    					</table>
						                                                    				<?php }; ?>
								                                                    		<!--/WITH TIMES-->
								                                                    	<?php
						                                                    			} else { ?>
						                                                    				<!--NO TIMES-->
						                                                    				<?php
						                                                    				if(have_rows('speakers__event')){
						                                                    					while(have_rows('speakers__event')){
						                                                    						the_row(); ?>
						                                                    							<?php
						                                                    							$speaker_name = get_sub_field('speaker_name');
						                                                    							$affiliation = get_sub_field('affiliation');
						                                                    							$title = get_sub_field('title_of_presentation'); ?>
						                                                    							<?php
						                                                    							if($speaker_name){ ?>
						                                                    								<strong><?php the_sub_field('speaker_name'); ?></strong><br>
						                                                    							<?php }; ?>
						                                                    							<?php
						                                                    							if($affiliation) { ?>
						                                                    								<?php the_sub_field('affiliation'); ?><br>
						                                                    							<?php }; ?>
						                                                    							<?php
						                                                    							if($title){ ?>
						                                                    								<?php 
															                                				$no_open_p = str_replace('<p>','',$title);
															                                				$final_text = str_replace('</p>','',$no_open_p); ?>
						                                                    								<span class="colorText"><?php echo $final_text; ?></span><br>
						                                                    							<?php }; ?>
						                                                    							<br>
						                                                    					<?php }; ?>
						                                                    				<?php }; ?>
								                                                    		<!--/NO TIMES-->
						                                                    			<?php } ?>
							                                                    	<!--/SPEAKERS/SCHEDULE-->

													                            <?php }; ?>

			                                							<?php }; ?>
	                                								</td>
				                                				</tr>
				                                			</table>
				                                		</td>
				                                		<!--/LEFT COLUMN-->
			                                		<?php }; ?>
			                                		<?php 
			                                		if(have_rows('right_column')){ ?>
			                                			<!--RIGHT COLUMN-->
				                                		<td valign="top" width="350" class="right_column_td">
				                                			<table width="350" class="right_column" style="padding-left:10px;" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
				                                				<tr>
				                                					<td width="340" class="right_column_td" valign="top">
							                                			<?php while(have_rows('right_column')){
							                                				the_row(); ?>
				                                		
				                                								<?php 
				                                								if(get_row_layout() == 'text_block') { ?>
							                                						<!--TEXT-->
							                                						<?php
										                                			$text = get_sub_field('text');
										                                			if($text){ ?>
										                                				<?php 
										                                				$no_open_h1 = str_replace('<h1>','<div style="font-size:18px; line-height:22px; font-weight:bold;">', $text);
										                                				$no_h1 = str_replace('</h1>','</div><br>',$no_open_h1);
										                                				$no_open_p = str_replace('<p>','',$no_h1);
										                                				$final_text = str_replace('</p>','<br><br>',$no_open_p);
										                                				echo $final_text; ?>
										                                			<?php } ?>
																					<!--/TEXT-->
																				<?php } elseif(get_row_layout() == 'separator') { ?>
																					<!--SEPARATOR-->
													                                <table width="100%" class="border_separator" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
													                                	<tr>
													                                		<td valign="top" width="100%">
													                                			&nbsp;
													                                		</td>
													                                	</tr>
													                                </table>
													                                <br>
													                                <!--/SEPARATOR-->
													                            <?php } elseif(get_row_layout() == 'image'){ ?>
													                            	<!--IMAGE-->

													                            	<?php
										                                            $image = get_sub_field('image');
										                                            $image_link = get_sub_field('image_link');
										                                            $image_alt_text = get_sub_field('image_alt_text');
										                                            if($image_alt_text){ ?>
										                                            	<div class="content_alt"><?php echo $image_alt_text; ?></div>
										                                            <?php } ?>
										                                            <?php if( !empty($image) ): ?>
										                                            	<?php 
										                                            	$size = 'new_ap_image';
										                                            	$medium = $image['sizes'][$size];
										                                            	$width = $image['sizes'][ $size . '-width' ];
                                                                            			$height = $image['sizes'][ $size . '-height' ];
                                                                            			?>
										                                            	<?php if($image_link) { ?>
										                                                	<a href="<?php the_sub_field('image_link'); ?>"><img src="<?php echo $medium; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php the_sub_field('image_alt_text'); ?>"></a><br>
										                                                <?php } else { ?>
										                                                	<img src="<?php echo $medium; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php the_sub_field('image_alt_text'); ?>"><br>
										                                                <?php } ?>
										                                            <?php endif; ?>
																					<!--/IMAGE-->
													                            <?php }; ?>

					                                					<?php }; ?>
					                                				</td>
				                                				</tr>
				                                			</table>
				                                		</td>
				                                		<!--/RIGHT COLUMN-->
					                                <?php }; ?>
			                                	</tr>
			                                </table>
			                                <!--/TWO COLUMNS-->
										<?php } ?>

									<?php }; ?>
								<?php }; ?>
								<!--/CONTENT SECTIONS-->
                                
                                

                                

                                <!--FOOTER-->
                                <table width="700" class="footer" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
                                	<tr>
                                        <td class="credit" width="700" colspan="2">
                                            <?php
                                                $image_credit = get_field('image_credits');
                                                $no_opening_p = str_replace('<p>', '', $image_credit);
                                                $no_p = str_replace('</p>', '<br /><br />', $no_opening_p);
                                                if($image_credit){ ?>
                                                    <?php echo $no_p; ?>
                                                <?php }; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top" width="220">
                                            <a href="https://www.facebook.com/BardGradCenter"><img src="http://eblasts.commons.bgc.bard.edu/wp-content/uploads/sites/50/2016/02/facebook-square-icon.png" width="14" height="14" style="display:inline; vertical-align:bottom; padding-bottom:0px;">&nbsp;&nbsp;Like us on Facebook</a><br>
                                            <a href="https://twitter.com/BardGradCenter"><img src="http://eblasts.commons.bgc.bard.edu/wp-content/uploads/sites/50/2016/02/twitter-icon.png" width="14" height="14" style="display:inline; vertical-align:bottom; padding-bottom:0px;">&nbsp;&nbsp;Follow us on Twitter</a><br><br>

                                            <a href="*|FORWARD|*">Forward this email to a friend.</a><br>
                                            <a href="*|UNSUB|*">Unsubscribe from this email list.</a>
                                        </td>
                                        <td valign="bottom" width="480" style="text-align:right;">
                                            Bard Graduate Center<br>
                                            <a href="http://bgc.bard.edu">bgc.bard.edu</a><br>
                                            Bard Graduate Center Gallery: 18 West 86th Street, New York, NY 10024<br>
                                            Academic Programs and Library: 38 West 86th Street, New York, NY 10024
                                        </td>
                                    </tr>
                                </table>
                                <!--/FOOTER-->


							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<?php if (get_post_status( $ID ) == 'publish') { ?>
        <!--BEGIN CODE SECTION -->
	        <textarea style="border:1px solid #000; overflow:scroll; width:80%; height:740px; margin:80px 10%; padding:5px;">

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="initial-scal=1.0, width=device-width">
		<?php
		$hidden_preview_text = get_field('hidden_preview_text');
		if($hidden_preview_text){ ?>
			<title><?php the_field('hidden_preview_text'); ?></title>
		<?php } ?>
		<style type="text/css">
			body {
				margin: 0;
				padding: 0;
				min-width: 100%!important;
				color:#000;
			}
			img {
				display: block;
			}
			a img {
				border:none;
			}
			<?php
            $link_color = get_field('link_color');
            if($link_color) { ?>
				a, .colorText {
					color:<?php the_field('link_color'); ?>;
				}
			<?php } else { ?>
				a, .colorText {
					color:#ff0000;
				}
			<?php }; ?>
			.hidden_preview, .masthead span {
				color:#ffffff;
				font-size: 0px;
				line-height: 0px;
			}
			.content {
				width: 740px;
				padding: 20px;
				font-family: Arial, sans-serif;
				font-size: 12px;
				line-height: 18px;
			}
			.content td {
				font-family: Arial, sans-serif;
				font-size: 12px;
				line-height: 18px;
			}
			.masthead {
				border-bottom:10px solid #000000;
				padding: 0 0 14px 0;
			}
			.masthead a {
				text-decoration: none;
				<?php
                $fontSize = get_field('header_font-size');
                if($fontSize) { ?>
					font-size: <?php the_field('header_font-size'); ?>px;
				<?php } else { ?>
					font-size: 24px;
				<?php } ?>
			}
			.banner {
				border-bottom: 3px solid #000000;
			}
			.banner .alt {
				font-size: 0px;
				line-height: 0px;
				color:#000000;
				width:100%;
				background-color:#000;
				padding:0;
				margin:0;
			}
			.content_alt {
				font-size: 0;
				line-height: 0;
				color:#ffffff;
				width: 100%;
				background-color: #ffffff;
				padding:0;
				margin:0;
			}
			.border_separator {
				border-bottom: 10px solid #000000;
				font-size: 1px;
				line-height: 0px;
			}
			.left_bar {
				border-left:10px solid #000;
				padding-left: 5px;
			}
			.footer {
				border-top:10px solid #000;
				padding-top: 15px;
			}
			.footer td {
				font-size:11px;
				line-height: 15px;
			}
			.footer a {
				text-decoration: none;
			}
			@media only screen and (max-width:480px){
		        .left_column, .right_column {
		            width: 100%;
		            padding-right:0;
		            padding-left: 0;
		            float: left;
		        }
		        .left_column_td, .right_column_td {
		        	width: 100%;
		        	float: left;
		        }
		        .with_times {
		        	width: 100%;
		        }
		        .with_times .times {
		        	width: 30%;
		        	border-right-width: 2%;
		        }
		        .with_times .details {
		        	width: 68%;
		        }
		    }
		</style>
	</head>
	<body bgcolor="#ffffff">
		<?php 
		if($hidden_preview_text){ ?>
			<span class="hidden_preview"><?php the_field('hidden_preview_text'); ?></span>
		<?php } ?>
		<table width="100%" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td>
					<table class="content" align="center" cellpadding="0" cellspacing="0" border="0">
						<tr>
							<td>
								<!--TOP MASTHEADER-->
                                <table width="700" class="masthead" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td valign="bottom" width="109">
                                        	<span>Bard Graduate Center</span>
                                            <a href="http://bgc.bard.edu/"><img src="http://eblasts.commons.bgc.bard.edu/wp-content/uploads/sites/50/2016/05/bgc_eblast_logo.jpg" width="109" height="56" alt="Bard Graduate Center"></a>
                                        </td>
                                        <td valign="bottom" width="591" style="text-align:right;">
                                        	<?php
                                        	$header = get_field('top_right_header');
                                        	if($header){
                                        		$header_url = get_field('top_right_header_url');
                                        		if($header_url){ ?>
                                        			<a href="<?php the_field('top_right_header_url'); ?>"><?php the_field('top_right_header'); ?></a>
                                        		<?php } else { ?>
                                        			<?php the_field('top_right_header'); ?>
                                        		<?php } ?>
                                        	<?php } ?>
                                        </td>
                                    </tr>
                                </table>
                                <!--/TOP MASTHEADER-->

                                <!--BANNER IMAGE-->
                                <table width="700" class="banner" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td valign="top" width="700">
                                            <?php 
                                            $image = get_field('banner_image');
                                            $banner_url = get_field('banner_image_url');
                                            $banner_image_alt_text = get_field('banner_image_alt_text');
                                            if($banner_image_alt_text){ ?>
                                            	<div class="alt"><?php echo $banner_image_alt_text; ?></div>
                                            <?php } ?>
                                            <?php if( !empty($image) ): ?>
                                            	<?php if($banner_url) { ?>
                                                	<a href="<?php the_field('banner_image_url'); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php the_field('banner_image_alt_text'); ?>"></a>
                                                <?php } else { ?>
                                                	<img src="<?php echo $image['url']; ?>" alt="<?php the_field('banner_image_alt_text'); ?>">
                                                <?php } ?>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <!--/BANNER IMAGE-->

								<!--CONTENT SECTIONS-->
								<?php 
								if(have_rows('content_sections')){
									while(have_rows('content_sections')){
										the_row();

										if(get_row_layout() == 'full_width_text') { ?>
											<!--FULL WIDTH SECTION-->
			                                <table width="700" class="full_width" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
			                                	<tr>
			                                		<td valign="top" width="700">
			                                			<?php
			                                			$text = get_sub_field('text');
			                                			if($text){ ?>
			                                				<?php 
			                                				$no_open_h1 = str_replace('<h1>','<div style="font-size:18px; line-height:22px; font-weight:bold;">', $text);
			                                				$no_h1 = str_replace('</h1>','</div><br>',$no_open_h1);
			                                				$no_open_p = str_replace('<p>','',$no_h1);
			                                				$final_text = str_replace('</p>','<br><br>',$no_open_p);
			                                				echo $final_text; ?>
			                                			<?php } ?>
			                                		</td>
			                                	</tr>
			                                </table>
			                                <!--/FULL WIDTH SECTION-->
										<?php } elseif(get_row_layout() == 'separator') { ?>
											<!--SEPARATOR-->
			                                <table width="100%" class="border_separator" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
			                                	<tr>
			                                		<td valign="top" width="100%">
			                                			&nbsp;
			                                		</td>
			                                	</tr>
			                                </table>
			                                <br>
			                                <!--/SEPARATOR-->
			                            <?php } elseif(get_row_layout() == 'two_column_layout') { ?>
			                            	<!--TWO COLUMNS-->
			                                <br>
			                                <table width="700" class="two_columns" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
			                                	<tr>
			                                		<?php 
			                                		if(have_rows('left_column')){ ?>
			                                			<!--LEFT COLUMN-->
				                                		<td valign="top" width="350" class="left_column_td">
				                                			<table width="350" class="left_column" style="padding-right:10px;" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
				                                				<tr>
				                                					<td width="340" class="left_column_td" valign="top">
							                                			<?php while(have_rows('left_column')){
							                                				the_row(); ?>


							                                					<?php 
				                                								if(get_row_layout() == 'text_block') { ?>
							                                						<!--TEXT-->
							                                						<?php
										                                			$text = get_sub_field('text');
										                                			if($text){ ?>
										                                				<?php 
										                                				$no_open_h1 = str_replace('<h1>','<div style="font-size:18px; line-height:22px; font-weight:bold;">', $text);
										                                				$no_h1 = str_replace('</h1>','</div><br>',$no_open_h1);
										                                				$no_open_p = str_replace('<p>','',$no_h1);
										                                				$final_text = str_replace('</p>','<br><br>',$no_open_p);
										                                				echo $final_text; ?>
										                                			<?php } ?>
																					<!--/TEXT-->
																				<?php } elseif(get_row_layout() == 'separator') { ?>
																					<!--SEPARATOR-->
													                                <table width="100%" class="border_separator" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
													                                	<tr>
													                                		<td valign="top" width="100%">
													                                			&nbsp;
													                                		</td>
													                                	</tr>
													                                </table>
													                                <br>
													                                <!--/SEPARATOR-->
													                            <?php } elseif(get_row_layout() == 'image'){ ?>
													                            	<!--IMAGE-->

													                            	<?php
										                                            $image = get_sub_field('image');
										                                            $image_link = get_sub_field('image_link');
										                                            $image_alt_text = get_sub_field('image_alt_text');
										                                            if($image_alt_text){ ?>
										                                            	<div class="content_alt"><?php echo $image_alt_text; ?></div>
										                                            <?php } ?>
										                                            <?php if( !empty($image) ): ?>
										                                            	<?php 
										                                            	$size = 'new_ap_image';
										                                            	$medium = $image['sizes'][$size];
										                                            	$width = $image['sizes'][ $size . '-width' ];
                                                                            			$height = $image['sizes'][ $size . '-height' ];
                                                                            			?>
										                                            	<?php if($image_link) { ?>
										                                                	<a href="<?php the_sub_field('image_link'); ?>"><img src="<?php echo $medium; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php the_sub_field('image_alt_text'); ?>"></a><br>
										                                                <?php } else { ?>
										                                                	<img src="<?php echo $medium; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php the_sub_field('image_alt_text'); ?>"><br>
										                                                <?php } ?>
										                                            <?php endif; ?>
																					<!--/IMAGE-->
																				<?php } elseif(get_row_layout() == 'datetime'){ ?>
																					<!--DATE/TIME-->
							                                						<div class="left_bar">
							                                							<strong><a href="http://www.bgc.bard.edu/news/events/toys-and-childhood.html">Friday, September 18, 2015<br>
							                                                    		9:30am&ndash;5pm</a></strong>
							                                                    	</div>
							                                                    	<br>
							                                                    	<!--/DATE/TIME-->
							                                                    <?php } elseif(get_row_layout() == 'rsvp_block'){ ?>
							                                                    	<!--RSVP-->
							                                						<div class="left_bar">
							                                							<strong>RSVP is required.</strong><br>
							                                                    		To reserve your place, please visit our <a href="http://www.bgc.bard.edu/news/events/toys-and-childhood.html">web site</a>, email <a href="mailto:academicevents@bgc.bard.edu">academicevents@bgc.bard.edu</a>, or call 212.501.3019.
							                                                    	</div>
							                                                    	<br>
							                                                    	<!--/RSVP-->
							                                                    <?php } elseif(get_row_layout() == 'speakersschedule'){ ?>
							                                                    	<!--SPEAKERS/SCHEDULE-->
						                                                    			<?php
						                                                    			$show_times = get_sub_field('show_times');
						                                                    			if($show_times){ ?>
						                                                    				<!--WITH TIMES-->
						                                                    				<?php
						                                                    				if(have_rows('speakers__event')){ ?>
						                                                    					<table width="340" class="with_times" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
						                                                    					<?php while(have_rows('speakers__event')){
						                                                    						the_row(); ?>
						                                                    							<?php
						                                                    							$time = get_sub_field('time');
						                                                    							$speaker_name = get_sub_field('speaker_name');
						                                                    							$affiliation = get_sub_field('affiliation');
						                                                    							$title = get_sub_field('title_of_presentation'); ?>
						                                                    							<tr>
										                                                    				<td width="105" class="times" valign="top" style="text-align:right; border-right:10px solid #fff;">
										                                                    					<?php if($time){
										                                                    						echo $time;
										                                                    					}; ?>
										                                                    				</td>
										                                                    				<td width="225" class="details" valign="top">
													                                                            <?php
								                                                    							if($speaker_name){ ?>
								                                                    								<strong><?php the_sub_field('speaker_name'); ?></strong><br>
								                                                    							<?php }; ?>
								                                                    							<?php
								                                                    							if($affiliation) { ?>
								                                                    								<?php the_sub_field('affiliation'); ?><br>
								                                                    							<?php }; ?>
								                                                    							<?php
								                                                    							if($title){ ?>
								                                                    								<?php 
																	                                				$no_open_p = str_replace('<p>','',$title);
																	                                				$final_text = str_replace('</p>','',$no_open_p); ?>
								                                                    								<span class="colorText"><?php echo $final_text; ?></span><br>
								                                                    							<?php }; ?>
								                                                    							<br>
													                                                        </td>
										                                                    			</tr>
						                                                    					<?php }; ?>
						                                                    					</table>
						                                                    				<?php }; ?>
								                                                    		<!--/WITH TIMES-->
								                                                    	<?php
						                                                    			} else { ?>
						                                                    				<!--NO TIMES-->
						                                                    				<?php
						                                                    				if(have_rows('speakers__event')){
						                                                    					while(have_rows('speakers__event')){
						                                                    						the_row(); ?>
						                                                    							<?php
						                                                    							$speaker_name = get_sub_field('speaker_name');
						                                                    							$affiliation = get_sub_field('affiliation');
						                                                    							$title = get_sub_field('title_of_presentation'); ?>
						                                                    							<?php
						                                                    							if($speaker_name){ ?>
						                                                    								<strong><?php the_sub_field('speaker_name'); ?></strong><br>
						                                                    							<?php }; ?>
						                                                    							<?php
						                                                    							if($affiliation) { ?>
						                                                    								<?php the_sub_field('affiliation'); ?><br>
						                                                    							<?php }; ?>
						                                                    							<?php
						                                                    							if($title){ ?>
						                                                    								<?php 
															                                				$no_open_p = str_replace('<p>','',$title);
															                                				$final_text = str_replace('</p>','',$no_open_p); ?>
						                                                    								<span class="colorText"><?php echo $final_text; ?></span><br>
						                                                    							<?php }; ?>
						                                                    							<br>
						                                                    					<?php }; ?>
						                                                    				<?php }; ?>
								                                                    		<!--/NO TIMES-->
						                                                    			<?php } ?>
							                                                    	<!--/SPEAKERS/SCHEDULE-->

													                            <?php }; ?>

			                                							<?php }; ?>
	                                								</td>
				                                				</tr>
				                                			</table>
				                                		</td>
				                                		<!--/LEFT COLUMN-->
			                                		<?php }; ?>
			                                		<?php 
			                                		if(have_rows('right_column')){ ?>
			                                			<!--RIGHT COLUMN-->
				                                		<td valign="top" width="350" class="right_column_td">
				                                			<table width="350" class="right_column" style="padding-left:10px;" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
				                                				<tr>
				                                					<td width="340" class="right_column_td" valign="top">
							                                			<?php while(have_rows('right_column')){
							                                				the_row(); ?>
				                                		
				                                								<?php 
				                                								if(get_row_layout() == 'text_block') { ?>
							                                						<!--TEXT-->
							                                						<?php
										                                			$text = get_sub_field('text');
										                                			if($text){ ?>
										                                				<?php 
										                                				$no_open_h1 = str_replace('<h1>','<div style="font-size:18px; line-height:22px; font-weight:bold;">', $text);
										                                				$no_h1 = str_replace('</h1>','</div><br>',$no_open_h1);
										                                				$no_open_p = str_replace('<p>','',$no_h1);
										                                				$final_text = str_replace('</p>','<br><br>',$no_open_p);
										                                				echo $final_text; ?>
										                                			<?php } ?>
																					<!--/TEXT-->
																				<?php } elseif(get_row_layout() == 'separator') { ?>
																					<!--SEPARATOR-->
													                                <table width="100%" class="border_separator" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
													                                	<tr>
													                                		<td valign="top" width="100%">
													                                			&nbsp;
													                                		</td>
													                                	</tr>
													                                </table>
													                                <br>
													                                <!--/SEPARATOR-->
													                            <?php } elseif(get_row_layout() == 'image'){ ?>
													                            	<!--IMAGE-->

													                            	<?php
										                                            $image = get_sub_field('image');
										                                            $image_link = get_sub_field('image_link');
										                                            $image_alt_text = get_sub_field('image_alt_text');
										                                            if($image_alt_text){ ?>
										                                            	<div class="content_alt"><?php echo $image_alt_text; ?></div>
										                                            <?php } ?>
										                                            <?php if( !empty($image) ): ?>
										                                            	<?php 
										                                            	$size = 'new_ap_image';
										                                            	$medium = $image['sizes'][$size];
										                                            	$width = $image['sizes'][ $size . '-width' ];
                                                                            			$height = $image['sizes'][ $size . '-height' ];
                                                                            			?>
										                                            	<?php if($image_link) { ?>
										                                                	<a href="<?php the_sub_field('image_link'); ?>"><img src="<?php echo $medium; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php the_sub_field('image_alt_text'); ?>"></a><br>
										                                                <?php } else { ?>
										                                                	<img src="<?php echo $medium; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php the_sub_field('image_alt_text'); ?>"><br>
										                                                <?php } ?>
										                                            <?php endif; ?>
																					<!--/IMAGE-->
													                            <?php }; ?>

					                                					<?php }; ?>
					                                				</td>
				                                				</tr>
				                                			</table>
				                                		</td>
				                                		<!--/RIGHT COLUMN-->
					                                <?php }; ?>
			                                	</tr>
			                                </table>
			                                <!--/TWO COLUMNS-->
										<?php } ?>

									<?php }; ?>
								<?php }; ?>
								<!--/CONTENT SECTIONS-->
                                
                                

                                

                                <!--FOOTER-->
                                <table width="700" class="footer" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
                                	<tr>
                                        <td class="credit" width="700" colspan="2">
                                            <?php
                                                $image_credit = get_field('image_credits');
                                                $no_opening_p = str_replace('<p>', '', $image_credit);
                                                $no_p = str_replace('</p>', '<br /><br />', $no_opening_p);
                                                if($image_credit){ ?>
                                                    <?php echo $no_p; ?>
                                                <?php }; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top" width="220">
                                            <a href="https://www.facebook.com/BardGradCenter"><img src="http://eblasts.commons.bgc.bard.edu/wp-content/uploads/sites/50/2016/02/facebook-square-icon.png" width="14" height="14" style="display:inline; vertical-align:bottom; padding-bottom:0px;">&nbsp;&nbsp;Like us on Facebook</a><br>
                                            <a href="https://twitter.com/BardGradCenter"><img src="http://eblasts.commons.bgc.bard.edu/wp-content/uploads/sites/50/2016/02/twitter-icon.png" width="14" height="14" style="display:inline; vertical-align:bottom; padding-bottom:0px;">&nbsp;&nbsp;Follow us on Twitter</a><br><br>

                                            <a href="*|FORWARD|*">Forward this email to a friend.</a><br>
                                            <a href="*|UNSUB|*">Unsubscribe from this email list.</a>
                                        </td>
                                        <td valign="bottom" width="480" style="text-align:right;">
                                            Bard Graduate Center<br>
                                            <a href="http://bgc.bard.edu">bgc.bard.edu</a><br>
                                            Bard Graduate Center Gallery: 18 West 86th Street, New York, NY 10024<br>
                                            Academic Programs and Library: 38 West 86th Street, New York, NY 10024
                                        </td>
                                    </tr>
                                </table>
                                <!--/FOOTER-->


							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
</html>
	        </textarea>
        <!--END CODE SECTION -->
        <?php }; ?>
	</body>
	<?php endwhile; else : ?>
        </head>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</html>
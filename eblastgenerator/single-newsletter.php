<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php wp_head(); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="initial-scal=1.0, width=device-width">
		<?php

		$ma_phd_color = get_field('ma_phd_color', 'option');
		$gallery_color = get_field('gallery_color', 'option');
		$events_color = get_field('events_color', 'option');
		$publications_color = get_field('publications_color', 'option');
		$research_forum_color = get_field('research_forum_color', 'option');
		$library_color = get_field('library_color', 'option');
		$about_color = get_field('about_color', 'option');

		$hidden_preview_text = get_field('hidden_preview_text');
		if($hidden_preview_text){ ?>
			<title><?php the_field('hidden_preview_text'); ?></title>
		<?php } ?>
		<style type="text/css">
			body {
				margin: 0;
				padding: 0;
				min-width: 100%!important;
				color:#000000;
			}
			img {
				display: block;
			}
			a img {
				border:none;
			}
			a {
				color:<?php echo $about_color; ?>;
			}
			.hidden_preview, .masthead span {
				color:#ffffff;
				font-size: 0px;
				line-height: 0px;
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
			.content {
				width: 800px;
				padding: 20px 50px 0;
				font-family: Arial, sans-serif;
				font-size: 14px;
				line-height: 19px;
			}
			.content td {
				font-family: Arial, sans-serif;
				font-size: 14px;
				line-height: 19px;
				color:#000000;
			}
			td.view_in_browser {
				font-size: 12px;
				text-align: center;
				padding-bottom: 30px;
			}
			.masthead {
				font-size: 24px;
				padding: 0;
			}
			.masthead a {
				text-decoration: none;
				color:<?php echo $about_color; ?>;
			}
			td.section_title {
				font-size: 24px;
				line-height: 20px;
				padding-bottom: 30px;
				padding-left: 4px;
				color:#000000;
			}
			.editorial_td {
				padding-left: 36px;
			}
			.programs_td {
				padding-left: 36px;
			}
			td.feature_header {
				text-transform: uppercase;
				font-weight: bold;
				padding-bottom: 10px;
				color:<?php echo $about_color; ?>;
			}
			td.feature_header a {
				text-decoration: none;
			}
			.feature_text {
				padding-top: 10px;
			}
			.ma_phd_color a {
				color:<?php echo $ma_phd_color; ?>;
			}
			.ma_phd_color .feature_header {
				color:<?php echo $ma_phd_color; ?>;
			}
			.gallery_color a {
				color:<?php echo $gallery_color; ?>;
			}
			.gallery_color .feature_header {
				color:<?php echo $gallery_color; ?>;
			}
			.events_color a {
				color:<?php echo $events_color; ?>;
			}
			.events_color .feature_header {
				color:<?php echo $events_color; ?>;
			}
			.publications_color a {
				color:<?php echo $publications_color; ?>;
			}
			.publications_color .feature_header {
				color:<?php echo $publications_color; ?>;
			}
			.research_forum_color a {
				color:<?php echo $research_forum_color; ?>;
			}
			.research_forum_color .feature_header {
				color:<?php echo $research_forum_color; ?>;
			}
			.library_color a {
				color:<?php echo $library_color; ?>;
			}
			.library_color .feature_header {
				color:<?php echo $library_color; ?>;
			}
			.about_color a {
				color:<?php echo $about_color; ?>;
			}
			.about_color .feature_header {
				color:<?php echo $about_color; ?>;
			}
			.event td {
				font-size: 12px;
				line-height: 18px;
			}
			.four_events .event {
				width: 125px;
			}
			.three_events .event {
				width: 183px;
			}
			.two_events .event {
				width: 300px;
			}
			.event_image {
				padding-bottom: 15px;
			}
			.event_date_time {
				padding-bottom: 15px;
			}
			.event_speaker {
				padding-bottom: 15px;
			}
			.event_type {
				text-transform: uppercase;
			}
			.events .button {
				text-transform: uppercase;
				color:#ffffff;
			}
			.events_color .events .button .button_wrapper {
				width: 100px;
				height: 42px;
				background-color: <?php echo $events_color; ?>;
				text-align: center;
			}
			.ma_phd_color .events .button .button_wrapper {
				width: 100px;
				height: 42px;
				background-color: <?php echo $ma_phd_color; ?>;
				text-align: center;
			}
			.gallery_color .events .button .button_wrapper {
				width: 100px;
				height: 42px;
				background-color: <?php echo $gallery_color; ?>;
				text-align: center;
			}
			.publications_color .events .button .button_wrapper {
				width: 100px;
				height: 42px;
				background-color: <?php echo $publications_color; ?>;
				text-align: center;
			}
			.research_forum_color .events .button .button_wrapper {
				width: 100px;
				height: 42px;
				background-color: <?php echo $research_forum_color; ?>;
				text-align: center;
			}
			.library_color .events .button .button_wrapper {
				width: 100px;
				height: 42px;
				background-color: <?php echo $library_color; ?>;
				text-align: center;
			}
			.about_color .events .button .button_wrapper {
				width: 100px;
				height: 42px;
				background-color: <?php echo $about_color; ?>;
				text-align: center;
			}
			.events .button .button_wrapper td {
				height: 42px;
			}
			.events .button a {
				color:#ffffff;
				text-decoration: none;
			}
			.footer {
				font-size:12px;
				line-height: 19px;
				font-family: Arial, sans-serif;
				padding-top: 30px;
				padding-bottom: 60px;
				color:<?php echo $about_color; ?>;
			}
			.footer td {
				font-size:12px;
				line-height: 19px;
				font-family: Arial, sans-serif;
				color:<?php echo $about_color; ?>;
			}
			.footer a {
				text-decoration: none;
				color:<?php echo $about_color; ?>;
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
	                                		<td colspan="2" class="view_in_browser">
	                                			<a href="*|ARCHIVE|*">View this email in your web browser.</a>
	                                		</td>
	                                	</tr>
	                                    <tr>
	                                        <td valign="bottom" width="109">
	                                        	<span>Bard Graduate Center</span>
	                                            <a href="http://bgc.bard.edu/"><img src="http://eblasts.commons.bgc.bard.edu/wp-content/uploads/sites/50/2016/08/Logo_Black.jpg" width="109" height="56" alt="Bard Graduate Center"></a>
	                                        </td>
	                                        <td valign="bottom" width="591" style="text-align:right; font-size: 24px;">
	                                            <div style="font-size:12px; line-height:25px;"><a href="http://www.bgc.bard.edu/programs/admissions/apply.html">Apply</a>&nbsp;|&nbsp;<a href="http://www.bgc.bard.edu/gallery/visiting-gallery.html">Visit</a>&nbsp;|&nbsp;<a href="http://www.bgc.bard.edu/support.html">Support</a></div><br>
	                                            <?php
	                                        	$header = get_field('top_right_header');
	                                        	if($header){
	                                        		$header_url = get_field('top_right_header_url');
	                                        		if($header_url){ ?>
	                                        			<a href="<?php the_field('top_right_header_url'); ?>" style="color:#000000;"><?php the_field('top_right_header'); ?></a>
	                                        		<?php } else { ?>
	                                        			<?php the_field('top_right_header'); ?>
	                                        		<?php } ?>
	                                        	<?php } ?>
	                                        </td>
	                                    </tr>
	                                    <tr>
	                                    	<td colspan="2" height="30">
	                                    		<table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" height="30">
	                                    			<tr>
	                                    				<td width="14" bgcolor="#000000" height="30">
			                                				&nbsp;
			                                			</td>
			                                			<td>
			                                				&nbsp;
			                                			</td>
			                                		</tr>
	                                    		</table>
	                                    	</td>
	                                    </tr>
	                                </table>
                                <!--/TOP MASTHEADER-->

                                <?php
                                if(have_rows('content_sections')){

                                	$s = 1;

                                	while(have_rows('content_sections')){
                                		the_row(); ?>

                                		<?php
                                		// Get section title
                                		$section_title = get_sub_field('section_title');

                                		// Get color scheme
                                		$color_scheme = get_sub_field('color_scheme');

                                		?>

                                		<?php
                                		//Add section spacer if $s does not equal 1 (it isn't the first section)-->
                                		if($s == 1){

                                		} else { ?>
                                			<!--SPACER-->
			                    			<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
			                    				<tr>
			                                		<td height="60">
			                                			&nbsp;
			                                		</td>
			                                	</tr>
			                                </table>
			                                <!--/SPACER-->
                                		<?php } ?>

                                		<?php
                                		if(have_rows('section_type')){
                                			while(have_rows('section_type')){
                                				the_row();

                                				if(get_row_layout() == 'editorial_content') { ?>

                                					<!--EDITORIAL CONTENT-->
                                						<table width="700" class="editorial <?php echo $color_scheme; ?>" bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
				                            				<?php
						                                	if($section_title){ ?>
						                                		<!--SECTION TITLE-->
							                                		<tr>
							                                			<td width="14" bgcolor="#000000">
							                                				&nbsp;
							                                			</td>
							                                			<td class="section_title" style="font-size: 24px;">
							                                				<?php echo $section_title; ?>
							                                			</td>
							                                		</tr>
						                                		<!--/SECTION TITLE-->
						                                	<?php } ?>
						                                	<tr>
						                                		<td width="14" bgcolor="#000000">
						                                			&nbsp;
						                                		</td>
						                                		<td class="editorial_td">
						                                			<?php 
						                                			if(have_rows('editorial_layouts')){

						                                				//editorial block counter
						                                				$r = 1;

						                                				while(have_rows('editorial_layouts')){
						                                					the_row();

						                                					if(get_row_layout() == 'full_width_image'){ ?>
						                                						<!--FULL WIDTH IMAGE-->
						                                						
						                                							<?php
						                                							$image = get_sub_field('image');
										                                            $image_link = get_sub_field('image_link');
										                                            $image_alt_text = get_sub_field('image_alt_text');
										                                            if($image_alt_text){ ?>
										                                            	<div class="content_alt"><?php echo $image_alt_text; ?></div>
										                                            <?php } ?>

										                                            <?php if( !empty($image) ): ?>
										                                            	<?php 
										                                            	$size = 'newsletter_banner';
										                                            	$full_width_image = $image['sizes'][$size];
										                                            	$width = $image['sizes'][ $size . '-width' ];
                                                                            			$height = $image['sizes'][ $size . '-height' ];
                                                                            			?>
                                                                            			<table class="banner" bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
											                                				<tr>
											                                					<td>
													                                            	<?php if($image_link) { ?>
													                                                	<a href="<?php the_sub_field('image_link'); ?>"><img src="<?php echo $full_width_image; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php the_sub_field('image_alt_text'); ?>"></a>
													                                                <?php } else { ?>
													                                                	<img src="<?php echo $full_width_image; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php the_sub_field('image_alt_text'); ?>">
													                                                <?php } ?>
													                                            </td>
													                                        </tr>
													                                    </table>
										                                            <?php endif; ?>

										                                            <?php $r++; ?>
						                                						<!--/FULL WIDTH IMAGE-->
						                                					<?php } elseif(get_row_layout() == 'full_width_text'){ ?>
						                                						<!--FULL WIDTH TEXT-->

							                                						<?php
										                                			$text = get_sub_field('text');
										                                			if($text){ ?>
										                                				<table class="full_width_text" bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
												                                			<tr>
												                                				<td>
												                                					<?php if($r != 1) {
												                                						echo '<br>';
												                                					} ?>
														                                			<?php 
														                                			$no_open_h1 = str_replace('<h1>','<div style="font-size:24px; line-height:28px;">', $text);
														                                			$no_h1 = str_replace('</h1>','</div><br>',$no_open_h1);
														                                			$no_open_p = str_replace('<p>','',$no_h1);
														                                			$no_close_p = str_replace('</p>','<br><br>',$no_open_p);
														                                			$final_text = preg_replace('/<br\\s*?\\/?>\\s*$/', '', $no_close_p);
														                                			echo $final_text;?>
														                                		</td>
														                                	</tr>
														                                </table>	
										                                			<?php } ?>

										                                			<?php $r++; ?>
																				<!--/FULL WIDTH TEXT-->
						                                					<?php } elseif(get_row_layout() == 'featured_blocks'){ ?>
						                                						<!--FEATURED BLOCKS-->

						                                							<?php
						                                								//count number of featured items
						                                								$number_of_features = count( get_sub_field('featured_item'));
					                                								?>

						                                							<?php if(have_rows('featured_item')){ ?>

						                                								<?php
						                                								//start the counter
						                                								$f = 1; ?>

						                                								<?php if($r != 1) { //add a spacer if this isn't the first content block in this editorial section// ?>
									                                						<!--SPACER-->
												                                			<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
												                                				<tr>
														                                    		<td height="52">
														                                    			&nbsp;
														                                    		</td>
														                                    	</tr>
														                                    </table>
														                                    <!--/SPACER-->
														                                <?php } ?>
														                                
							                                								<?php
							                                								while(have_rows('featured_item')){
							                                									the_row(); ?>

							                                									<?php
							                                									$url = get_sub_field('url');
							                                									?>

							                                									<?php
							                                									//check if it's the last item
							                                									if($f == $number_of_features){ ?>
							                                										<?php if(($f % 2)==0){ //if there are an even number of items and it's the last item do this// ?>
																												<td width="300" valign="top">
																	                                    			<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
																	                                    				<tr>
																	                                    					<td class="feature_header" height="38" valign="bottom">
																	                                    						<a href="<?php echo $url; ?>"><?php the_sub_field('featured_header'); ?></a>
																	                                    					</td>
																	                                    				</tr>
																	                                    				<tr>
																	                                    					<td>
																	                                    						<?php
																	                                							$image = get_sub_field('featured_image');
																					                                            $image_link = $url;
																					                                            $image_alt_text = get_sub_field('image_alt_text');
																					                                            if($image_alt_text){ ?>
																					                                            	<div class="content_alt"><?php echo $image_alt_text; ?></div>
																					                                            <?php } ?>

																					                                            <?php if( !empty($image) ): ?>
																					                                            	<?php 
																					                                            	$size = 'featured_blocks';
																					                                            	$featured_blocks = $image['sizes'][$size];
																					                                            	$width = $image['sizes'][ $size . '-width' ];
											                                                                            			$height = $image['sizes'][ $size . '-height' ];
											                                                                            			?>
											                                                                            			<a href="<?php the_sub_field('url'); ?>"><img src="<?php echo $featured_blocks; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php the_sub_field('image_alt_text'); ?>"></a>
											                                                                            		<?php endif; ?>
																	                                    					</td>
																	                                    				</tr>
																	                                    				<tr>
																	                                    					<td class="feature_text">
																	                                    						<?php 
																					                                			$text = get_sub_field('featured_text');
																					                                			if($text){
																						                                			$no_open_h1 = str_replace('<h1>','<div style="font-size:24px; line-height:28px;">', $text);
																						                                			$no_h1 = str_replace('</h1>','</div><br>',$no_open_h1);
																						                                			$no_open_p = str_replace('<p>','',$no_h1);
																						                                			$no_close_p = str_replace('</p>','<br><br>',$no_open_p);
																						                                			$final_text = preg_replace('/<br\\s*?\\/?>\\s*$/', '', $no_close_p);
																						                                			echo $final_text;
																						                                		}; ?>
																	                                    					</td>
																	                                    				</tr>
																	                                    			</table>
																                                    			</td>
															                                    			</tr>
														                                    			</table>
							                                										<?php } else { //if there are an odd number of items and this is the last item do this// ?>
							                                											<!--SPACER-->
																                                			<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
																                                				<tr>
																		                                    		<td height="60">
																		                                    			&nbsp;
																		                                    		</td>
																		                                    	</tr>
																		                                    </table>
																		                                <!--/SPACER-->
									                                									<table class="features" bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
																	                                    	<tr>

																	                                    		<td width="300" valign="top">
																	                                    			<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
																	                                    				<tr>
																	                                    					<td>
																	                                    						<?php
																	                                							$image = get_sub_field('featured_image');
																					                                            $image_link = $url;
																					                                            $image_alt_text = get_sub_field('image_alt_text');
																					                                            if($image_alt_text){ ?>
																					                                            	<div class="content_alt"><?php echo $image_alt_text; ?></div>
																					                                            <?php } ?>

																					                                            <?php if( !empty($image) ): ?>
																					                                            	<?php 
																					                                            	$size = 'featured_blocks';
																					                                            	$featured_blocks = $image['sizes'][$size];
																					                                            	$width = $image['sizes'][ $size . '-width' ];
											                                                                            			$height = $image['sizes'][ $size . '-height' ];
											                                                                            			?>
											                                                                            			<a href="<?php the_sub_field('url'); ?>"><img src="<?php echo $featured_blocks; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php the_sub_field('image_alt_text'); ?>"></a>
											                                                                            		<?php endif; ?>
																	                                    					</td>
																	                                    				</tr>
																	                                    			</table>
																	                                    		</td>

																	                                    		<td width="50">
																	                                    			&nbsp;
																	                                    		</td>

																	                                    		<td width="300" valign="top">
																	                                    			<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
																	                                    				<tr>
																	                                    					<td class="feature_header" valign="bottom">
																	                                    						<a href="<?php echo $url; ?>"><?php the_sub_field('featured_header'); ?></a>
																	                                    					</td>
																	                                    				</tr>
																	                                    				<tr>
																	                                    					<td class="feature_text">
																	                                    						<?php 
																					                                			$text = get_sub_field('featured_text');
																					                                			if($text){
																						                                			$no_open_h1 = str_replace('<h1>','<div style="font-size:24px; line-height:28px;">', $text);
																						                                			$no_h1 = str_replace('</h1>','</div><br>',$no_open_h1);
																						                                			$no_open_p = str_replace('<p>','',$no_h1);
																						                                			$no_close_p = str_replace('</p>','<br><br>',$no_open_p);
																						                                			$final_text = preg_replace('/<br\\s*?\\/?>\\s*$/', '', $no_close_p);
																						                                			echo $final_text;
																						                                		}; ?>
																	                                    					</td>
																	                                    				</tr>
																	                                    			</table>
																	                                    		</td>

																	                                    	</tr>
																	                                    </table>
							                                										<?php } ?>
							                                									<?php 
							                                									//if it isn't the last item do this
							                                									} else { ?>

								                                									<?php if(($f % 2)==0){ ?>

								                                									<?php } else { ?>
								                                										<?php if($f > 2){ ?>
								                                											<!--SPACER-->
																	                                			<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
																	                                				<tr>
																			                                    		<td height="60">
																			                                    			&nbsp;
																			                                    		</td>
																			                                    	</tr>
																			                                    </table>
																			                                <!--/SPACER-->
								                                										<?php } ?>
								                                										<table class="features" bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
								                                											<tr>
								                                									<?php } ?>
										                                										<td width="300" valign="top">
																	                                    			<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
																	                                    				<tr>
																	                                    					<td class="feature_header" height="38" valign="bottom">
																	                                    						<a href="<?php echo $url; ?>"><?php the_sub_field('featured_header'); ?></a>
																	                                    					</td>
																	                                    				</tr>
																	                                    				<tr>
																	                                    					<td>
																	                                    						<?php
																	                                							$image = get_sub_field('featured_image');
																					                                            $image_link = $url;
																					                                            $image_alt_text = get_sub_field('image_alt_text');
																					                                            if($image_alt_text){ ?>
																					                                            	<div class="content_alt"><?php echo $image_alt_text; ?></div>
																					                                            <?php } ?>

																					                                            <?php if( !empty($image) ): ?>
																					                                            	<?php 
																					                                            	$size = 'featured_blocks';
																					                                            	$featured_blocks = $image['sizes'][$size];
																					                                            	$width = $image['sizes'][ $size . '-width' ];
											                                                                            			$height = $image['sizes'][ $size . '-height' ];
											                                                                            			?>
											                                                                            			<a href="<?php the_sub_field('url'); ?>"><img src="<?php echo $featured_blocks; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php the_sub_field('image_alt_text'); ?>"></a>
											                                                                            		<?php endif; ?>
																	                                    					</td>
																	                                    				</tr>
																	                                    				<tr>
																	                                    					<td class="feature_text">
																	                                    						<?php 
																					                                			$text = get_sub_field('featured_text');
																					                                			if($text){
																						                                			$no_open_h1 = str_replace('<h1>','<div style="font-size:24px; line-height:28px;">', $text);
																						                                			$no_h1 = str_replace('</h1>','</div><br>',$no_open_h1);
																						                                			$no_open_p = str_replace('<p>','',$no_h1);
																						                                			$no_close_p = str_replace('</p>','<br><br>',$no_open_p);
																						                                			$final_text = preg_replace('/<br\\s*?\\/?>\\s*$/', '', $no_close_p);
																						                                			echo $final_text;
																						                                		}; ?>
																	                                    					</td>
																	                                    				</tr>
																	                                    			</table>
																	                                    		</td>
														                                    		<?php if(($f % 2)==0){ ?>
														                                    				</tr>
														                                    			</table>
								                                									<?php } else { ?>
								                                										<td width="50">
								                                										</td>
								                                									<?php } ?>

								                                								<?php }; ?>


													                                    		<?php
													                                    		//up the counter
													                                    		$f++; ?>
							                                								<?php }?>
						                                							<?php } ?>
						                                						
						                                						<?php $r++; ?>
						                                						<!--/FEATURED BLOCKS-->
						                                					<?php } ?>
						                                				<?php } ?>
						                                			<?php } ?>
						                                		</td>
						                                	</tr>
						                                </table>				
                                					<!--/EDITORIAL CONTENT-->

                                				<?php } elseif(get_row_layout() == 'featured_events') { ?>

                                					<!--FEATURED EVENTS-->
                                						<table width="700" class="<?php echo $color_scheme; ?>" bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
						                                	<?php
						                                	if($section_title){ ?>
						                                		<!--SECTION TITLE-->
							                                		<tr>
							                                			<td width="14" bgcolor="#000000">
							                                				&nbsp;
							                                			</td>
							                                			<td class="section_title" style="font-size: 24px;">
							                                				<?php echo $section_title; ?>
							                                			</td>
							                                		</tr>
						                                		<!--/SECTION TITLE-->
						                                	<?php } ?>

						                                	<?php if(have_rows('event_rows')){ ?>
						                                		<tr>
						                                			<td width="14" bgcolor="#000000">
						                                				&nbsp;
						                                			</td>
						                                			<td class="programs_td">

                                								<?php
                                								//start the counter
                                								$e = 1; ?>
								                                
	                                								<?php
	                                								while(have_rows('event_rows')){ ?>

	                                									<?php if($e != 1) { //add a spacer if this isn't the first row of events// ?>
					                                						<!--SPACER-->
								                                			<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
								                                				<tr>
										                                    		<td height="60">
										                                    			&nbsp;
										                                    		</td>
										                                    	</tr>
										                                    </table>
										                                    <!--/SPACER-->
										                                <?php } ?>

	                                									<?php the_row(); ?>

	                                									<?php
	                                										$no_of_events = get_sub_field('number_of_events');
	                                										if($no_of_events == 1){
	                                											$class = 'one_event';
	                                											$image_size = 'two_events';
	                                										} elseif($no_of_events == 2){
	                                											$class = 'two_events';
	                                											$image_size = 'two_events';
	                                										} elseif($no_of_events == 3){
	                                											$class = 'three_events';
	                                											$image_size = 'three_events';
	                                										} elseif($no_of_events == 4){
	                                											$class = 'four_events';
	                                											$image_size = 'four_events';
	                                										};
	                                									?>
	                                									<!--<?php echo $no_of_events; ?> Events-->
							                                				<table class="events <?php echo $class; ?>" bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
							                                					<tr>
							                                						<?php if($no_of_events != 1){ ?>
							                                							<?php if(have_rows('event_1')){
							                                								while(have_rows('event_1')){
							                                									the_row(); ?>

							                                									<?php
							                                									$url = get_sub_field('link_url');
							                                									$image = get_sub_field('event_image');
							                                									$event_date = get_sub_field('event_date');
							                                									$event_time = get_sub_field('event_time');
							                                									$event_category = get_sub_field('event_category');
							                                									$event_title = get_sub_field('event_title');
							                                									$speakers = get_sub_field('speakers');
							                                									$button_text = get_sub_field('button_text');
							                                									?>

							                                									<td class="event" valign="top">
										                                							<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
										                                								<tr>
										                                									<td class="event_image">
										                                										<?php if( !empty($image) ): ?>
																	                                            	<?php
																	                                            	$sized_image = $image['sizes'][$image_size];
																	                                            	$width = $image['sizes'][ $image_size . '-width' ];
							                                                                            			$height = $image['sizes'][ $image_size . '-height' ];
							                                                                            			?>
							                                                                            			<a href="<?php echo $url; ?>"><img src="<?php echo $sized_image; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php the_sub_field('image_alt_text'); ?>"></a>
							                                                                            		<?php endif; ?>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_date_time">
										                                										<strong><?php echo $event_date; ?></strong><br>
										                                										<?php echo $event_time; ?>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_type">
										                                										<?php echo $event_category; ?>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_title">
										                                										<?php
											                                										$no_open_p = str_replace('<p>','',$event_title);
																		                                			$no_close_p = str_replace('</p>','<br><br>',$no_open_p);
																		                                			$final_text = preg_replace('/<br\\s*?\\/?>\\s*$/', '', $no_close_p);
																	                                			?>

										                                										<a href="<?php echo $url; ?>"><?php echo $final_text; ?></a>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_speaker">
										                                										<strong>
										                                											<?php
												                                										$no_open_p = str_replace('<p>','',$speakers);
																			                                			$no_close_p = str_replace('</p>','<br><br>',$no_open_p);
																			                                			$final_text = preg_replace('/<br\\s*?\\/?>\\s*$/', '', $no_close_p);
																		                                			?>

											                                										<?php echo $final_text; ?>
											                                									</strong>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="button" valign="middle">
										                                										<table class="button_wrapper" bgcolor="#c83e37" border="0" cellspacing="0" cellpadding="0">
										                                											<tr>
										                                												<td>
										                                													<a href="<?php echo $url; ?>"><?php echo $button_text; ?></a>
										                                												</td>
										                                											</tr>
										                                										</table>
										                                									</td>
										                                								</tr>
										                                							</table>
										                                						</td>


							                                								<?php }
							                                							} ?>
							                                							
							                                						<?php } ?>

							                                						<?php if($no_of_events == 2 || $no_of_events == 3 || $no_of_events == 4){ ?>
							                                							<?php if(have_rows('event_2')){ ?>

							                                								<td width="50">
										                                						&nbsp;
												                                    		</td>

							                                								<?php while(have_rows('event_2')){
							                                									the_row(); ?>

							                                									<?php
							                                									$url = get_sub_field('link_url');
							                                									$image = get_sub_field('event_image');
							                                									$event_date = get_sub_field('event_date');
							                                									$event_time = get_sub_field('event_time');
							                                									$event_category = get_sub_field('event_category');
							                                									$event_title = get_sub_field('event_title');
							                                									$speakers = get_sub_field('speakers');
							                                									$button_text = get_sub_field('button_text');
							                                									?>

							                                									<td class="event" valign="top">
										                                							<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
										                                								<tr>
										                                									<td class="event_image">
										                                										<?php if( !empty($image) ): ?>
																	                                            	<?php
																	                                            	$sized_image = $image['sizes'][$image_size];
																	                                            	$width = $image['sizes'][ $image_size . '-width' ];
							                                                                            			$height = $image['sizes'][ $image_size . '-height' ];
							                                                                            			?>
							                                                                            			<a href="<?php echo $url; ?>"><img src="<?php echo $sized_image; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php the_sub_field('image_alt_text'); ?>"></a>
							                                                                            		<?php endif; ?>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_date_time">
										                                										<strong><?php echo $event_date; ?></strong><br>
										                                										<?php echo $event_time; ?>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_type">
										                                										<?php echo $event_category; ?>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_title">
										                                										<?php
											                                										$no_open_p = str_replace('<p>','',$event_title);
																		                                			$no_close_p = str_replace('</p>','<br><br>',$no_open_p);
																		                                			$final_text = preg_replace('/<br\\s*?\\/?>\\s*$/', '', $no_close_p);
																	                                			?>

										                                										<a href="<?php echo $url; ?>"><?php echo $final_text; ?></a>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_speaker">
										                                										<strong>
										                                											<?php
												                                										$no_open_p = str_replace('<p>','',$speakers);
																			                                			$no_close_p = str_replace('</p>','<br><br>',$no_open_p);
																			                                			$final_text = preg_replace('/<br\\s*?\\/?>\\s*$/', '', $no_close_p);
																		                                			?>

											                                										<?php echo $final_text; ?>
											                                									</strong>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="button" valign="middle">
										                                										<table class="button_wrapper" bgcolor="#c83e37" border="0" cellspacing="0" cellpadding="0">
										                                											<tr>
										                                												<td>
										                                													<a href="<?php echo $url; ?>"><?php echo $button_text; ?></a>
										                                												</td>
										                                											</tr>
										                                										</table>
										                                									</td>
										                                								</tr>
										                                							</table>
										                                						</td>


							                                								<?php }
							                                							} ?>
							                                							
							                                						<?php } ?>

							                                						<?php if($no_of_events == 3 || $no_of_events == 4){ ?>
							                                							<?php if(have_rows('event_3')){ ?>

							                                								<td width="50">
										                                						&nbsp;
												                                    		</td>

							                                								<?php while(have_rows('event_3')){
							                                									the_row(); ?>

							                                									<?php
							                                									$url = get_sub_field('link_url');
							                                									$image = get_sub_field('event_image');
							                                									$event_date = get_sub_field('event_date');
							                                									$event_time = get_sub_field('event_time');
							                                									$event_category = get_sub_field('event_category');
							                                									$event_title = get_sub_field('event_title');
							                                									$speakers = get_sub_field('speakers');
							                                									$button_text = get_sub_field('button_text');
							                                									?>

							                                									<td class="event" valign="top">
										                                							<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
										                                								<tr>
										                                									<td class="event_image">
										                                										<?php if( !empty($image) ): ?>
																	                                            	<?php
																	                                            	$sized_image = $image['sizes'][$image_size];
																	                                            	$width = $image['sizes'][ $image_size . '-width' ];
							                                                                            			$height = $image['sizes'][ $image_size . '-height' ];
							                                                                            			?>
							                                                                            			<a href="<?php echo $url; ?>"><img src="<?php echo $sized_image; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php the_sub_field('image_alt_text'); ?>"></a>
							                                                                            		<?php endif; ?>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_date_time">
										                                										<strong><?php echo $event_date; ?></strong><br>
										                                										<?php echo $event_time; ?>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_type">
										                                										<?php echo $event_category; ?>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_title">
										                                										<?php
											                                										$no_open_p = str_replace('<p>','',$event_title);
																		                                			$no_close_p = str_replace('</p>','<br><br>',$no_open_p);
																		                                			$final_text = preg_replace('/<br\\s*?\\/?>\\s*$/', '', $no_close_p);
																	                                			?>

										                                										<a href="<?php echo $url; ?>"><?php echo $final_text; ?></a>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_speaker">
										                                										<strong>
										                                											<?php
												                                										$no_open_p = str_replace('<p>','',$speakers);
																			                                			$no_close_p = str_replace('</p>','<br><br>',$no_open_p);
																			                                			$final_text = preg_replace('/<br\\s*?\\/?>\\s*$/', '', $no_close_p);
																		                                			?>

											                                										<?php echo $final_text; ?>
											                                									</strong>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="button" valign="middle">
										                                										<table class="button_wrapper" bgcolor="#c83e37" border="0" cellspacing="0" cellpadding="0">
										                                											<tr>
										                                												<td>
										                                													<a href="<?php echo $url; ?>"><?php echo $button_text; ?></a>
										                                												</td>
										                                											</tr>
										                                										</table>
										                                									</td>
										                                								</tr>
										                                							</table>
										                                						</td>


							                                								<?php }
							                                							} ?>
							                                							
							                                						<?php } ?>

							                                						<?php if($no_of_events == 4){ ?>
							                                							<?php if(have_rows('event_4')){ ?>

							                                								<td width="50">
										                                						&nbsp;
												                                    		</td>

							                                								<?php while(have_rows('event_4')){
							                                									the_row(); ?>

							                                									<?php
							                                									$url = get_sub_field('link_url');
							                                									$image = get_sub_field('event_image');
							                                									$event_date = get_sub_field('event_date');
							                                									$event_time = get_sub_field('event_time');
							                                									$event_category = get_sub_field('event_category');
							                                									$event_title = get_sub_field('event_title');
							                                									$speakers = get_sub_field('speakers');
							                                									$button_text = get_sub_field('button_text');
							                                									?>

							                                									<td class="event" valign="top">
										                                							<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
										                                								<tr>
										                                									<td class="event_image">
										                                										<?php if( !empty($image) ): ?>
																	                                            	<?php
																	                                            	$sized_image = $image['sizes'][$image_size];
																	                                            	$width = $image['sizes'][ $image_size . '-width' ];
							                                                                            			$height = $image['sizes'][ $image_size . '-height' ];
							                                                                            			?>
							                                                                            			<a href="<?php echo $url; ?>"><img src="<?php echo $sized_image; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php the_sub_field('image_alt_text'); ?>"></a>
							                                                                            		<?php endif; ?>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_date_time">
										                                										<strong><?php echo $event_date; ?></strong><br>
										                                										<?php echo $event_time; ?>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_type">
										                                										<?php echo $event_category; ?>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_title">
										                                										<?php
											                                										$no_open_p = str_replace('<p>','',$event_title);
																		                                			$no_close_p = str_replace('</p>','<br><br>',$no_open_p);
																		                                			$final_text = preg_replace('/<br\\s*?\\/?>\\s*$/', '', $no_close_p);
																	                                			?>

										                                										<a href="<?php echo $url; ?>"><?php echo $final_text; ?></a>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_speaker">
										                                										<strong>
										                                											<?php
												                                										$no_open_p = str_replace('<p>','',$speakers);
																			                                			$no_close_p = str_replace('</p>','<br><br>',$no_open_p);
																			                                			$final_text = preg_replace('/<br\\s*?\\/?>\\s*$/', '', $no_close_p);
																		                                			?>

											                                										<?php echo $final_text; ?>
											                                									</strong>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="button" valign="middle">
										                                										<table class="button_wrapper" bgcolor="#c83e37" border="0" cellspacing="0" cellpadding="0">
										                                											<tr>
										                                												<td>
										                                													<a href="<?php echo $url; ?>"><?php echo $button_text; ?></a>
										                                												</td>
										                                											</tr>
										                                										</table>
										                                									</td>
										                                								</tr>
										                                							</table>
										                                						</td>


							                                								<?php }
							                                							} ?>
							                                							
							                                						<?php } ?>

							                                						<?php if($no_of_events == 1){ ?>
							                                							<?php if(have_rows('event_1')){ ?>

							                                								<?php while(have_rows('event_1')){
							                                									the_row(); ?>

							                                									<?php
							                                									$url = get_sub_field('link_url');
							                                									$image = get_sub_field('event_image');
							                                									$event_date = get_sub_field('event_date');
							                                									$event_time = get_sub_field('event_time');
							                                									$event_category = get_sub_field('event_category');
							                                									$event_title = get_sub_field('event_title');
							                                									$speakers = get_sub_field('speakers');
							                                									$button_text = get_sub_field('button_text');
							                                									?>

							                                									<td class="event" valign="top">
										                                							<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
										                                								<tr>
										                                									<td class="event_image" valign="top" style="padding-bottom:0;">
										                                										<?php if( !empty($image) ): ?>
																	                                            	<?php
																	                                            	$sized_image = $image['sizes'][$image_size];
																	                                            	$width = $image['sizes'][ $image_size . '-width' ];
							                                                                            			$height = $image['sizes'][ $image_size . '-height' ];
							                                                                            			?>
							                                                                            			<a href="<?php echo $url; ?>"><img src="<?php echo $sized_image; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php the_sub_field('image_alt_text'); ?>"></a>
							                                                                            		<?php endif; ?>
										                                									</td>
										                                									<td width="50">
														                                						&nbsp;
																                                    		</td>
																                                    		<td valign="top">
																                                    			<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
																                                    				<tr>
													                                									<td class="event_date_time">
													                                										<strong><?php echo $event_date; ?></strong><br>
													                                										<?php echo $event_time; ?>
													                                									</td>
													                                								</tr>
													                                								<tr>
													                                									<td class="event_type">
													                                										<?php echo $event_category; ?>
													                                									</td>
													                                								</tr>
													                                								<tr>
													                                									<td class="event_title">
													                                										<?php
														                                										$no_open_p = str_replace('<p>','',$event_title);
																					                                			$no_close_p = str_replace('</p>','<br><br>',$no_open_p);
																					                                			$final_text = preg_replace('/<br\\s*?\\/?>\\s*$/', '', $no_close_p);
																				                                			?>

													                                										<a href="<?php echo $url; ?>"><?php echo $final_text; ?></a>
													                                									</td>
													                                								</tr>
													                                								<tr>
													                                									<td class="event_speaker">
													                                										<strong>
													                                											<?php
															                                										$no_open_p = str_replace('<p>','',$speakers);
																						                                			$no_close_p = str_replace('</p>','<br><br>',$no_open_p);
																						                                			$final_text = preg_replace('/<br\\s*?\\/?>\\s*$/', '', $no_close_p);
																					                                			?>

														                                										<?php echo $final_text; ?>
														                                									</strong>
													                                									</td>
													                                								</tr>
													                                								<tr>
													                                									<td class="button" valign="middle">
													                                										<table class="button_wrapper" bgcolor="#c83e37" border="0" cellspacing="0" cellpadding="0">
													                                											<tr>
													                                												<td>
													                                													<a href="<?php echo $url; ?>"><?php echo $button_text; ?></a>
													                                												</td>
													                                											</tr>
													                                										</table>
													                                									</td>
													                                								</tr>
																                                    			</table>
																                                    		</td>
										                                								</tr>
										                                							</table>
										                                						</td>


							                                								<?php }
							                                							} ?>
							                                							
							                                						<?php } ?>

							                                					</tr>
							                                				</table>
							                                			<!--/<?php echo $no_of_events; ?> Events-->
	                                								
							                                			<?php $e++; ?>

	                                								<?php }; ?>
	                                								</td> <!--/programs_td-->
	                                							</tr>
	                                						<?php }; ?>

						                                </table>		
                                					<!--/FEATURED EVENTS-->

                                				<?php } ?>

                                			<?php } ?>
                                		<?php } ?>

                                		<?php $s++; ?>
                            			
                                	<?php } ?>

                                	<!--SPACER-->
	                    			<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
	                    				<tr>
	                                		<td height="60">
	                                			&nbsp;
	                                		</td>
	                                	</tr>
	                                </table>
	                                <!--/SPACER-->

                                <?php } ?>

                            </td>
						</tr>
					</table>

					<!--FOOTER-->
                        <table width="100%" class="footer" align="center" bgcolor="#f1f1f1" border="0" cellpadding="0" cellspacing="0">
                        	<tr>
                        		<td width="100%" bgcolor="#f1f1f1" style="background-color:#f1f1f1;" align="center">
                        			<table width="700" border="0" cellpadding="0" cellspacing="0" align="center" style="margin:0 auto;">
	                        			<tr>
			                        		<td colspan="5" class="image_credits">
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
			                                <td valign="top" width="200">
			                                    <strong>Degree Programs and Admissions</strong><br>
												38 West 86th Street<br>
												New York, NY 10024<br>
												212.501.3019<br>
												<a href="mailto:admissions@bgc.bard.edu">admissions@bgc.bard.edu</a>
			                                </td>

			                                <td width="50">
			                                	&nbsp;
				                            </td>

			                                <td valign="top" width="200">
			                                    <strong>Bard Graduate Center Gallery</strong><br>
												18 West 86th Street<br>
												New York, NY 10025<br>
												212.501.3023<br>
												<a href="mailto:gallery@bgc.bard.edu">gallery@bgc.bard.edu</a><br><br>

												Tuesday, Friday–Sunday: 11am&ndash;5pm<br>
												Wednesday–Thursday: 11am&ndash;8pm
			                                </td>

			                                <td width="50">
			                                	&nbsp;
				                            </td>

				                            <td valign="top" width="200">
			                                    <a href="https://www.instagram.com/bardgradcenter/"><img src="http://eblasts.commons.bgc.bard.edu/wp-content/uploads/sites/50/2016/03/instagram.png" width="14" height="14" style="display:inline; vertical-align:middle; padding-bottom:0px;">&nbsp;&nbsp;Instagram</a><br>
			                                    <a href="https://www.facebook.com/BardGradCenter"><img src="http://eblasts.commons.bgc.bard.edu/wp-content/uploads/sites/50/2016/02/facebook-square-icon.png" width="14" height="14" style="display:inline; vertical-align:middle; padding-bottom:0px;">&nbsp;&nbsp;Facebook</a><br>
			                                    <a href="https://www.youtube.com/user/bardgradcenter"><img src="http://eblasts.commons.bgc.bard.edu/wp-content/uploads/sites/50/2016/08/youtube.png" width="14" height="14" style="display:inline; vertical-align:middle; padding-bottom:0px;">&nbsp;&nbsp;YouTube</a><br>
			                                    <a href="https://twitter.com/BardGradCenter"><img src="http://eblasts.commons.bgc.bard.edu/wp-content/uploads/sites/50/2016/02/twitter-icon.png" width="14" height="14" style="display:inline; vertical-align:middle; padding-bottom:0px;">&nbsp;&nbsp;Twitter</a><br><br>

			                                    <a href="*|FORWARD|*">Forward this email to a friend.</a><br>
			                                    <a href="*|UNSUB|*">Unsubscribe from this email list.</a>
			                                </td>
			                            </tr>
                        			</table>
                        		</td>
                        	</tr>
                        </table>
                    <!--/FOOTER-->

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

		$ma_phd_color = get_field('ma_phd_color', 'option');
		$gallery_color = get_field('gallery_color', 'option');
		$events_color = get_field('events_color', 'option');
		$publications_color = get_field('publications_color', 'option');
		$research_forum_color = get_field('research_forum_color', 'option');
		$library_color = get_field('library_color', 'option');
		$about_color = get_field('about_color', 'option');

		$hidden_preview_text = get_field('hidden_preview_text');
		if($hidden_preview_text){ ?>
			<title><?php the_field('hidden_preview_text'); ?></title>
		<?php } ?>
		<style type="text/css">
			body {
				margin: 0;
				padding: 0;
				min-width: 100%!important;
				color:#000000;
			}
			img {
				display: block;
			}
			a img {
				border:none;
			}
			a {
				color:<?php echo $about_color; ?>;
			}
			.hidden_preview, .masthead span {
				color:#ffffff;
				font-size: 0px;
				line-height: 0px;
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
			.content {
				width: 800px;
				padding: 20px 50px 0;
				font-family: Arial, sans-serif;
				font-size: 14px;
				line-height: 19px;
			}
			.content td {
				font-family: Arial, sans-serif;
				font-size: 14px;
				line-height: 19px;
				color:#000000;
			}
			td.view_in_browser {
				font-size: 12px;
				text-align: center;
				padding-bottom: 30px;
			}
			.masthead {
				font-size: 24px;
				padding: 0;
			}
			.masthead a {
				text-decoration: none;
				color:<?php echo $about_color; ?>;
			}
			td.section_title {
				font-size: 24px;
				line-height: 20px;
				padding-bottom: 30px;
				padding-left: 4px;
				color:#000000;
			}
			.editorial_td {
				padding-left: 36px;
			}
			.programs_td {
				padding-left: 36px;
			}
			td.feature_header {
				text-transform: uppercase;
				font-weight: bold;
				padding-bottom: 10px;
				color:<?php echo $about_color; ?>;
			}
			td.feature_header a {
				text-decoration: none;
			}
			.feature_text {
				padding-top: 10px;
			}
			.ma_phd_color a {
				color:<?php echo $ma_phd_color; ?>;
			}
			.ma_phd_color .feature_header {
				color:<?php echo $ma_phd_color; ?>;
			}
			.gallery_color a {
				color:<?php echo $gallery_color; ?>;
			}
			.gallery_color .feature_header {
				color:<?php echo $gallery_color; ?>;
			}
			.events_color a {
				color:<?php echo $events_color; ?>;
			}
			.events_color .feature_header {
				color:<?php echo $events_color; ?>;
			}
			.publications_color a {
				color:<?php echo $publications_color; ?>;
			}
			.publications_color .feature_header {
				color:<?php echo $publications_color; ?>;
			}
			.research_forum_color a {
				color:<?php echo $research_forum_color; ?>;
			}
			.research_forum_color .feature_header {
				color:<?php echo $research_forum_color; ?>;
			}
			.library_color a {
				color:<?php echo $library_color; ?>;
			}
			.library_color .feature_header {
				color:<?php echo $library_color; ?>;
			}
			.about_color a {
				color:<?php echo $about_color; ?>;
			}
			.about_color .feature_header {
				color:<?php echo $about_color; ?>;
			}
			.event td {
				font-size: 12px;
				line-height: 18px;
			}
			.four_events .event {
				width: 125px;
			}
			.three_events .event {
				width: 183px;
			}
			.two_events .event {
				width: 300px;
			}
			.event_image {
				padding-bottom: 15px;
			}
			.event_date_time {
				padding-bottom: 15px;
			}
			.event_speaker {
				padding-bottom: 15px;
			}
			.event_type {
				text-transform: uppercase;
			}
			.events .button {
				text-transform: uppercase;
				color:#ffffff;
			}
			.events_color .events .button .button_wrapper {
				width: 100px;
				height: 42px;
				background-color: <?php echo $events_color; ?>;
				text-align: center;
			}
			.ma_phd_color .events .button .button_wrapper {
				width: 100px;
				height: 42px;
				background-color: <?php echo $ma_phd_color; ?>;
				text-align: center;
			}
			.gallery_color .events .button .button_wrapper {
				width: 100px;
				height: 42px;
				background-color: <?php echo $gallery_color; ?>;
				text-align: center;
			}
			.publications_color .events .button .button_wrapper {
				width: 100px;
				height: 42px;
				background-color: <?php echo $publications_color; ?>;
				text-align: center;
			}
			.research_forum_color .events .button .button_wrapper {
				width: 100px;
				height: 42px;
				background-color: <?php echo $research_forum_color; ?>;
				text-align: center;
			}
			.library_color .events .button .button_wrapper {
				width: 100px;
				height: 42px;
				background-color: <?php echo $library_color; ?>;
				text-align: center;
			}
			.about_color .events .button .button_wrapper {
				width: 100px;
				height: 42px;
				background-color: <?php echo $about_color; ?>;
				text-align: center;
			}
			.events .button .button_wrapper td {
				height: 42px;
			}
			.events .button a {
				color:#ffffff;
				text-decoration: none;
			}
			.footer {
				font-size:12px;
				line-height: 19px;
				font-family: Arial, sans-serif;
				padding-top: 30px;
				padding-bottom: 60px;
				color:<?php echo $about_color; ?>;
			}
			.footer td {
				font-size:12px;
				line-height: 19px;
				font-family: Arial, sans-serif;
				color:<?php echo $about_color; ?>;
			}
			.footer a {
				text-decoration: none;
				color:<?php echo $about_color; ?>;
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
	                                		<td colspan="2" class="view_in_browser">
	                                			<a href="*|ARCHIVE|*">View this email in your web browser.</a>
	                                		</td>
	                                	</tr>
	                                    <tr>
	                                        <td valign="bottom" width="109">
	                                        	<span>Bard Graduate Center</span>
	                                            <a href="http://bgc.bard.edu/"><img src="http://eblasts.commons.bgc.bard.edu/wp-content/uploads/sites/50/2016/08/Logo_Black.jpg" width="109" height="56" alt="Bard Graduate Center"></a>
	                                        </td>
	                                        <td valign="bottom" width="591" style="text-align:right; font-size: 24px;">
	                                            <div style="font-size:12px; line-height:25px;"><a href="http://www.bgc.bard.edu/programs/admissions/apply.html">Apply</a>&nbsp;|&nbsp;<a href="http://www.bgc.bard.edu/gallery/visiting-gallery.html">Visit</a>&nbsp;|&nbsp;<a href="http://www.bgc.bard.edu/support.html">Support</a></div><br>
	                                            <?php
	                                        	$header = get_field('top_right_header');
	                                        	if($header){
	                                        		$header_url = get_field('top_right_header_url');
	                                        		if($header_url){ ?>
	                                        			<a href="<?php the_field('top_right_header_url'); ?>" style="color:#000000;"><?php the_field('top_right_header'); ?></a>
	                                        		<?php } else { ?>
	                                        			<?php the_field('top_right_header'); ?>
	                                        		<?php } ?>
	                                        	<?php } ?>
	                                        </td>
	                                    </tr>
	                                    <tr>
	                                    	<td colspan="2" height="30">
	                                    		<table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" height="30">
	                                    			<tr>
	                                    				<td width="14" bgcolor="#000000" height="30">
			                                				&nbsp;
			                                			</td>
			                                			<td>
			                                				&nbsp;
			                                			</td>
			                                		</tr>
	                                    		</table>
	                                    	</td>
	                                    </tr>
	                                </table>
                                <!--/TOP MASTHEADER-->

                                <?php
                                if(have_rows('content_sections')){

                                	$s = 1;

                                	while(have_rows('content_sections')){
                                		the_row(); ?>

                                		<?php
                                		// Get section title
                                		$section_title = get_sub_field('section_title');

                                		// Get color scheme
                                		$color_scheme = get_sub_field('color_scheme');

                                		?>

                                		<?php
                                		//Add section spacer if $s does not equal 1 (it isn't the first section)-->
                                		if($s == 1){

                                		} else { ?>
                                			<!--SPACER-->
			                    			<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
			                    				<tr>
			                                		<td height="60">
			                                			&nbsp;
			                                		</td>
			                                	</tr>
			                                </table>
			                                <!--/SPACER-->
                                		<?php } ?>

                                		<?php
                                		if(have_rows('section_type')){
                                			while(have_rows('section_type')){
                                				the_row();

                                				if(get_row_layout() == 'editorial_content') { ?>

                                					<!--EDITORIAL CONTENT-->
                                						<table width="700" class="editorial <?php echo $color_scheme; ?>" bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
				                            				<?php
						                                	if($section_title){ ?>
						                                		<!--SECTION TITLE-->
							                                		<tr>
							                                			<td width="14" bgcolor="#000000">
							                                				&nbsp;
							                                			</td>
							                                			<td class="section_title" style="font-size: 24px;">
							                                				<?php echo $section_title; ?>
							                                			</td>
							                                		</tr>
						                                		<!--/SECTION TITLE-->
						                                	<?php } ?>
						                                	<tr>
						                                		<td width="14" bgcolor="#000000">
						                                			&nbsp;
						                                		</td>
						                                		<td class="editorial_td">
						                                			<?php 
						                                			if(have_rows('editorial_layouts')){

						                                				//editorial block counter
						                                				$r = 1;

						                                				while(have_rows('editorial_layouts')){
						                                					the_row();

						                                					if(get_row_layout() == 'full_width_image'){ ?>
						                                						<!--FULL WIDTH IMAGE-->
						                                						
						                                							<?php
						                                							$image = get_sub_field('image');
										                                            $image_link = get_sub_field('image_link');
										                                            $image_alt_text = get_sub_field('image_alt_text');
										                                            if($image_alt_text){ ?>
										                                            	<div class="content_alt"><?php echo $image_alt_text; ?></div>
										                                            <?php } ?>

										                                            <?php if( !empty($image) ): ?>
										                                            	<?php 
										                                            	$size = 'newsletter_banner';
										                                            	$full_width_image = $image['sizes'][$size];
										                                            	$width = $image['sizes'][ $size . '-width' ];
                                                                            			$height = $image['sizes'][ $size . '-height' ];
                                                                            			?>
                                                                            			<table class="banner" bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
											                                				<tr>
											                                					<td>
													                                            	<?php if($image_link) { ?>
													                                                	<a href="<?php the_sub_field('image_link'); ?>"><img src="<?php echo $full_width_image; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php the_sub_field('image_alt_text'); ?>"></a>
													                                                <?php } else { ?>
													                                                	<img src="<?php echo $full_width_image; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php the_sub_field('image_alt_text'); ?>">
													                                                <?php } ?>
													                                            </td>
													                                        </tr>
													                                    </table>
										                                            <?php endif; ?>

										                                            <?php $r++; ?>
						                                						<!--/FULL WIDTH IMAGE-->
						                                					<?php } elseif(get_row_layout() == 'full_width_text'){ ?>
						                                						<!--FULL WIDTH TEXT-->

							                                						<?php
										                                			$text = get_sub_field('text');
										                                			if($text){ ?>
										                                				<table class="full_width_text" bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
												                                			<tr>
												                                				<td>
												                                					<?php if($r != 1) {
												                                						echo '<br>';
												                                					} ?>
														                                			<?php 
														                                			$no_open_h1 = str_replace('<h1>','<div style="font-size:24px; line-height:28px;">', $text);
														                                			$no_h1 = str_replace('</h1>','</div><br>',$no_open_h1);
														                                			$no_open_p = str_replace('<p>','',$no_h1);
														                                			$no_close_p = str_replace('</p>','<br><br>',$no_open_p);
														                                			$final_text = preg_replace('/<br\\s*?\\/?>\\s*$/', '', $no_close_p);
														                                			echo $final_text;?>
														                                		</td>
														                                	</tr>
														                                </table>	
										                                			<?php } ?>

										                                			<?php $r++; ?>
																				<!--/FULL WIDTH TEXT-->
						                                					<?php } elseif(get_row_layout() == 'featured_blocks'){ ?>
						                                						<!--FEATURED BLOCKS-->

						                                							<?php
						                                								//count number of featured items
						                                								$number_of_features = count( get_sub_field('featured_item'));
					                                								?>

						                                							<?php if(have_rows('featured_item')){ ?>

						                                								<?php
						                                								//start the counter
						                                								$f = 1; ?>

						                                								<?php if($r != 1) { //add a spacer if this isn't the first content block in this editorial section// ?>
									                                						<!--SPACER-->
												                                			<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
												                                				<tr>
														                                    		<td height="52">
														                                    			&nbsp;
														                                    		</td>
														                                    	</tr>
														                                    </table>
														                                    <!--/SPACER-->
														                                <?php } ?>
														                                
							                                								<?php
							                                								while(have_rows('featured_item')){
							                                									the_row(); ?>

							                                									<?php
							                                									$url = get_sub_field('url');
							                                									?>

							                                									<?php
							                                									//check if it's the last item
							                                									if($f == $number_of_features){ ?>
							                                										<?php if(($f % 2)==0){ //if there are an even number of items and it's the last item do this// ?>
																												<td width="300" valign="top">
																	                                    			<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
																	                                    				<tr>
																	                                    					<td class="feature_header" height="38" valign="bottom">
																	                                    						<a href="<?php echo $url; ?>"><?php the_sub_field('featured_header'); ?></a>
																	                                    					</td>
																	                                    				</tr>
																	                                    				<tr>
																	                                    					<td>
																	                                    						<?php
																	                                							$image = get_sub_field('featured_image');
																					                                            $image_link = $url;
																					                                            $image_alt_text = get_sub_field('image_alt_text');
																					                                            if($image_alt_text){ ?>
																					                                            	<div class="content_alt"><?php echo $image_alt_text; ?></div>
																					                                            <?php } ?>

																					                                            <?php if( !empty($image) ): ?>
																					                                            	<?php 
																					                                            	$size = 'featured_blocks';
																					                                            	$featured_blocks = $image['sizes'][$size];
																					                                            	$width = $image['sizes'][ $size . '-width' ];
											                                                                            			$height = $image['sizes'][ $size . '-height' ];
											                                                                            			?>
											                                                                            			<a href="<?php the_sub_field('url'); ?>"><img src="<?php echo $featured_blocks; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php the_sub_field('image_alt_text'); ?>"></a>
											                                                                            		<?php endif; ?>
																	                                    					</td>
																	                                    				</tr>
																	                                    				<tr>
																	                                    					<td class="feature_text">
																	                                    						<?php 
																					                                			$text = get_sub_field('featured_text');
																					                                			if($text){
																						                                			$no_open_h1 = str_replace('<h1>','<div style="font-size:24px; line-height:28px;">', $text);
																						                                			$no_h1 = str_replace('</h1>','</div><br>',$no_open_h1);
																						                                			$no_open_p = str_replace('<p>','',$no_h1);
																						                                			$no_close_p = str_replace('</p>','<br><br>',$no_open_p);
																						                                			$final_text = preg_replace('/<br\\s*?\\/?>\\s*$/', '', $no_close_p);
																						                                			echo $final_text;
																						                                		}; ?>
																	                                    					</td>
																	                                    				</tr>
																	                                    			</table>
																                                    			</td>
															                                    			</tr>
														                                    			</table>
							                                										<?php } else { //if there are an odd number of items and this is the last item do this// ?>
							                                											<!--SPACER-->
																                                			<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
																                                				<tr>
																		                                    		<td height="60">
																		                                    			&nbsp;
																		                                    		</td>
																		                                    	</tr>
																		                                    </table>
																		                                <!--/SPACER-->
									                                									<table class="features" bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
																	                                    	<tr>

																	                                    		<td width="300" valign="top">
																	                                    			<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
																	                                    				<tr>
																	                                    					<td>
																	                                    						<?php
																	                                							$image = get_sub_field('featured_image');
																					                                            $image_link = $url;
																					                                            $image_alt_text = get_sub_field('image_alt_text');
																					                                            if($image_alt_text){ ?>
																					                                            	<div class="content_alt"><?php echo $image_alt_text; ?></div>
																					                                            <?php } ?>

																					                                            <?php if( !empty($image) ): ?>
																					                                            	<?php 
																					                                            	$size = 'featured_blocks';
																					                                            	$featured_blocks = $image['sizes'][$size];
																					                                            	$width = $image['sizes'][ $size . '-width' ];
											                                                                            			$height = $image['sizes'][ $size . '-height' ];
											                                                                            			?>
											                                                                            			<a href="<?php the_sub_field('url'); ?>"><img src="<?php echo $featured_blocks; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php the_sub_field('image_alt_text'); ?>"></a>
											                                                                            		<?php endif; ?>
																	                                    					</td>
																	                                    				</tr>
																	                                    			</table>
																	                                    		</td>

																	                                    		<td width="50">
																	                                    			&nbsp;
																	                                    		</td>

																	                                    		<td width="300" valign="top">
																	                                    			<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
																	                                    				<tr>
																	                                    					<td class="feature_header" valign="bottom">
																	                                    						<a href="<?php echo $url; ?>"><?php the_sub_field('featured_header'); ?></a>
																	                                    					</td>
																	                                    				</tr>
																	                                    				<tr>
																	                                    					<td class="feature_text">
																	                                    						<?php 
																					                                			$text = get_sub_field('featured_text');
																					                                			if($text){
																						                                			$no_open_h1 = str_replace('<h1>','<div style="font-size:24px; line-height:28px;">', $text);
																						                                			$no_h1 = str_replace('</h1>','</div><br>',$no_open_h1);
																						                                			$no_open_p = str_replace('<p>','',$no_h1);
																						                                			$no_close_p = str_replace('</p>','<br><br>',$no_open_p);
																						                                			$final_text = preg_replace('/<br\\s*?\\/?>\\s*$/', '', $no_close_p);
																						                                			echo $final_text;
																						                                		}; ?>
																	                                    					</td>
																	                                    				</tr>
																	                                    			</table>
																	                                    		</td>

																	                                    	</tr>
																	                                    </table>
							                                										<?php } ?>
							                                									<?php 
							                                									//if it isn't the last item do this
							                                									} else { ?>

								                                									<?php if(($f % 2)==0){ ?>

								                                									<?php } else { ?>
								                                										<?php if($f > 2){ ?>
								                                											<!--SPACER-->
																	                                			<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
																	                                				<tr>
																			                                    		<td height="60">
																			                                    			&nbsp;
																			                                    		</td>
																			                                    	</tr>
																			                                    </table>
																			                                <!--/SPACER-->
								                                										<?php } ?>
								                                										<table class="features" bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
								                                											<tr>
								                                									<?php } ?>
										                                										<td width="300" valign="top">
																	                                    			<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
																	                                    				<tr>
																	                                    					<td class="feature_header" height="38" valign="bottom">
																	                                    						<a href="<?php echo $url; ?>"><?php the_sub_field('featured_header'); ?></a>
																	                                    					</td>
																	                                    				</tr>
																	                                    				<tr>
																	                                    					<td>
																	                                    						<?php
																	                                							$image = get_sub_field('featured_image');
																					                                            $image_link = $url;
																					                                            $image_alt_text = get_sub_field('image_alt_text');
																					                                            if($image_alt_text){ ?>
																					                                            	<div class="content_alt"><?php echo $image_alt_text; ?></div>
																					                                            <?php } ?>

																					                                            <?php if( !empty($image) ): ?>
																					                                            	<?php 
																					                                            	$size = 'featured_blocks';
																					                                            	$featured_blocks = $image['sizes'][$size];
																					                                            	$width = $image['sizes'][ $size . '-width' ];
											                                                                            			$height = $image['sizes'][ $size . '-height' ];
											                                                                            			?>
											                                                                            			<a href="<?php the_sub_field('url'); ?>"><img src="<?php echo $featured_blocks; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php the_sub_field('image_alt_text'); ?>"></a>
											                                                                            		<?php endif; ?>
																	                                    					</td>
																	                                    				</tr>
																	                                    				<tr>
																	                                    					<td class="feature_text">
																	                                    						<?php 
																					                                			$text = get_sub_field('featured_text');
																					                                			if($text){
																						                                			$no_open_h1 = str_replace('<h1>','<div style="font-size:24px; line-height:28px;">', $text);
																						                                			$no_h1 = str_replace('</h1>','</div><br>',$no_open_h1);
																						                                			$no_open_p = str_replace('<p>','',$no_h1);
																						                                			$no_close_p = str_replace('</p>','<br><br>',$no_open_p);
																						                                			$final_text = preg_replace('/<br\\s*?\\/?>\\s*$/', '', $no_close_p);
																						                                			echo $final_text;
																						                                		}; ?>
																	                                    					</td>
																	                                    				</tr>
																	                                    			</table>
																	                                    		</td>
														                                    		<?php if(($f % 2)==0){ ?>
														                                    				</tr>
														                                    			</table>
								                                									<?php } else { ?>
								                                										<td width="50">
								                                										</td>
								                                									<?php } ?>

								                                								<?php }; ?>


													                                    		<?php
													                                    		//up the counter
													                                    		$f++; ?>
							                                								<?php }?>
						                                							<?php } ?>
						                                						
						                                						<?php $r++; ?>
						                                						<!--/FEATURED BLOCKS-->
						                                					<?php } ?>
						                                				<?php } ?>
						                                			<?php } ?>
						                                		</td>
						                                	</tr>
						                                </table>				
                                					<!--/EDITORIAL CONTENT-->

                                				<?php } elseif(get_row_layout() == 'featured_events') { ?>

                                					<!--FEATURED EVENTS-->
                                						<table width="700" class="<?php echo $color_scheme; ?>" bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
						                                	<?php
						                                	if($section_title){ ?>
						                                		<!--SECTION TITLE-->
							                                		<tr>
							                                			<td width="14" bgcolor="#000000">
							                                				&nbsp;
							                                			</td>
							                                			<td class="section_title" style="font-size: 24px;">
							                                				<?php echo $section_title; ?>
							                                			</td>
							                                		</tr>
						                                		<!--/SECTION TITLE-->
						                                	<?php } ?>

						                                	<?php if(have_rows('event_rows')){ ?>
						                                		<tr>
						                                			<td width="14" bgcolor="#000000">
						                                				&nbsp;
						                                			</td>
						                                			<td class="programs_td">

                                								<?php
                                								//start the counter
                                								$e = 1; ?>
								                                
	                                								<?php
	                                								while(have_rows('event_rows')){ ?>

	                                									<?php if($e != 1) { //add a spacer if this isn't the first row of events// ?>
					                                						<!--SPACER-->
								                                			<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
								                                				<tr>
										                                    		<td height="60">
										                                    			&nbsp;
										                                    		</td>
										                                    	</tr>
										                                    </table>
										                                    <!--/SPACER-->
										                                <?php } ?>

	                                									<?php the_row(); ?>

	                                									<?php
	                                										$no_of_events = get_sub_field('number_of_events');
	                                										if($no_of_events == 1){
	                                											$class = 'one_event';
	                                											$image_size = 'two_events';
	                                										} elseif($no_of_events == 2){
	                                											$class = 'two_events';
	                                											$image_size = 'two_events';
	                                										} elseif($no_of_events == 3){
	                                											$class = 'three_events';
	                                											$image_size = 'three_events';
	                                										} elseif($no_of_events == 4){
	                                											$class = 'four_events';
	                                											$image_size = 'four_events';
	                                										};
	                                									?>
	                                									<!--<?php echo $no_of_events; ?> Events-->
							                                				<table class="events <?php echo $class; ?>" bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
							                                					<tr>
							                                						<?php if($no_of_events != 1){ ?>
							                                							<?php if(have_rows('event_1')){
							                                								while(have_rows('event_1')){
							                                									the_row(); ?>

							                                									<?php
							                                									$url = get_sub_field('link_url');
							                                									$image = get_sub_field('event_image');
							                                									$event_date = get_sub_field('event_date');
							                                									$event_time = get_sub_field('event_time');
							                                									$event_category = get_sub_field('event_category');
							                                									$event_title = get_sub_field('event_title');
							                                									$speakers = get_sub_field('speakers');
							                                									$button_text = get_sub_field('button_text');
							                                									?>

							                                									<td class="event" valign="top">
										                                							<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
										                                								<tr>
										                                									<td class="event_image">
										                                										<?php if( !empty($image) ): ?>
																	                                            	<?php
																	                                            	$sized_image = $image['sizes'][$image_size];
																	                                            	$width = $image['sizes'][ $image_size . '-width' ];
							                                                                            			$height = $image['sizes'][ $image_size . '-height' ];
							                                                                            			?>
							                                                                            			<a href="<?php echo $url; ?>"><img src="<?php echo $sized_image; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php the_sub_field('image_alt_text'); ?>"></a>
							                                                                            		<?php endif; ?>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_date_time">
										                                										<strong><?php echo $event_date; ?></strong><br>
										                                										<?php echo $event_time; ?>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_type">
										                                										<?php echo $event_category; ?>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_title">
										                                										<?php
											                                										$no_open_p = str_replace('<p>','',$event_title);
																		                                			$no_close_p = str_replace('</p>','<br><br>',$no_open_p);
																		                                			$final_text = preg_replace('/<br\\s*?\\/?>\\s*$/', '', $no_close_p);
																	                                			?>

										                                										<a href="<?php echo $url; ?>"><?php echo $final_text; ?></a>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_speaker">
										                                										<strong>
										                                											<?php
												                                										$no_open_p = str_replace('<p>','',$speakers);
																			                                			$no_close_p = str_replace('</p>','<br><br>',$no_open_p);
																			                                			$final_text = preg_replace('/<br\\s*?\\/?>\\s*$/', '', $no_close_p);
																		                                			?>

											                                										<?php echo $final_text; ?>
											                                									</strong>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="button" valign="middle">
										                                										<table class="button_wrapper" bgcolor="#c83e37" border="0" cellspacing="0" cellpadding="0">
										                                											<tr>
										                                												<td>
										                                													<a href="<?php echo $url; ?>"><?php echo $button_text; ?></a>
										                                												</td>
										                                											</tr>
										                                										</table>
										                                									</td>
										                                								</tr>
										                                							</table>
										                                						</td>


							                                								<?php }
							                                							} ?>
							                                							
							                                						<?php } ?>

							                                						<?php if($no_of_events == 2 || $no_of_events == 3 || $no_of_events == 4){ ?>
							                                							<?php if(have_rows('event_2')){ ?>

							                                								<td width="50">
										                                						&nbsp;
												                                    		</td>

							                                								<?php while(have_rows('event_2')){
							                                									the_row(); ?>

							                                									<?php
							                                									$url = get_sub_field('link_url');
							                                									$image = get_sub_field('event_image');
							                                									$event_date = get_sub_field('event_date');
							                                									$event_time = get_sub_field('event_time');
							                                									$event_category = get_sub_field('event_category');
							                                									$event_title = get_sub_field('event_title');
							                                									$speakers = get_sub_field('speakers');
							                                									$button_text = get_sub_field('button_text');
							                                									?>

							                                									<td class="event" valign="top">
										                                							<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
										                                								<tr>
										                                									<td class="event_image">
										                                										<?php if( !empty($image) ): ?>
																	                                            	<?php
																	                                            	$sized_image = $image['sizes'][$image_size];
																	                                            	$width = $image['sizes'][ $image_size . '-width' ];
							                                                                            			$height = $image['sizes'][ $image_size . '-height' ];
							                                                                            			?>
							                                                                            			<a href="<?php echo $url; ?>"><img src="<?php echo $sized_image; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php the_sub_field('image_alt_text'); ?>"></a>
							                                                                            		<?php endif; ?>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_date_time">
										                                										<strong><?php echo $event_date; ?></strong><br>
										                                										<?php echo $event_time; ?>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_type">
										                                										<?php echo $event_category; ?>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_title">
										                                										<?php
											                                										$no_open_p = str_replace('<p>','',$event_title);
																		                                			$no_close_p = str_replace('</p>','<br><br>',$no_open_p);
																		                                			$final_text = preg_replace('/<br\\s*?\\/?>\\s*$/', '', $no_close_p);
																	                                			?>

										                                										<a href="<?php echo $url; ?>"><?php echo $final_text; ?></a>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_speaker">
										                                										<strong>
										                                											<?php
												                                										$no_open_p = str_replace('<p>','',$speakers);
																			                                			$no_close_p = str_replace('</p>','<br><br>',$no_open_p);
																			                                			$final_text = preg_replace('/<br\\s*?\\/?>\\s*$/', '', $no_close_p);
																		                                			?>

											                                										<?php echo $final_text; ?>
											                                									</strong>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="button" valign="middle">
										                                										<table class="button_wrapper" bgcolor="#c83e37" border="0" cellspacing="0" cellpadding="0">
										                                											<tr>
										                                												<td>
										                                													<a href="<?php echo $url; ?>"><?php echo $button_text; ?></a>
										                                												</td>
										                                											</tr>
										                                										</table>
										                                									</td>
										                                								</tr>
										                                							</table>
										                                						</td>


							                                								<?php }
							                                							} ?>
							                                							
							                                						<?php } ?>

							                                						<?php if($no_of_events == 3 || $no_of_events == 4){ ?>
							                                							<?php if(have_rows('event_3')){ ?>

							                                								<td width="50">
										                                						&nbsp;
												                                    		</td>

							                                								<?php while(have_rows('event_3')){
							                                									the_row(); ?>

							                                									<?php
							                                									$url = get_sub_field('link_url');
							                                									$image = get_sub_field('event_image');
							                                									$event_date = get_sub_field('event_date');
							                                									$event_time = get_sub_field('event_time');
							                                									$event_category = get_sub_field('event_category');
							                                									$event_title = get_sub_field('event_title');
							                                									$speakers = get_sub_field('speakers');
							                                									$button_text = get_sub_field('button_text');
							                                									?>

							                                									<td class="event" valign="top">
										                                							<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
										                                								<tr>
										                                									<td class="event_image">
										                                										<?php if( !empty($image) ): ?>
																	                                            	<?php
																	                                            	$sized_image = $image['sizes'][$image_size];
																	                                            	$width = $image['sizes'][ $image_size . '-width' ];
							                                                                            			$height = $image['sizes'][ $image_size . '-height' ];
							                                                                            			?>
							                                                                            			<a href="<?php echo $url; ?>"><img src="<?php echo $sized_image; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php the_sub_field('image_alt_text'); ?>"></a>
							                                                                            		<?php endif; ?>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_date_time">
										                                										<strong><?php echo $event_date; ?></strong><br>
										                                										<?php echo $event_time; ?>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_type">
										                                										<?php echo $event_category; ?>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_title">
										                                										<?php
											                                										$no_open_p = str_replace('<p>','',$event_title);
																		                                			$no_close_p = str_replace('</p>','<br><br>',$no_open_p);
																		                                			$final_text = preg_replace('/<br\\s*?\\/?>\\s*$/', '', $no_close_p);
																	                                			?>

										                                										<a href="<?php echo $url; ?>"><?php echo $final_text; ?></a>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_speaker">
										                                										<strong>
										                                											<?php
												                                										$no_open_p = str_replace('<p>','',$speakers);
																			                                			$no_close_p = str_replace('</p>','<br><br>',$no_open_p);
																			                                			$final_text = preg_replace('/<br\\s*?\\/?>\\s*$/', '', $no_close_p);
																		                                			?>

											                                										<?php echo $final_text; ?>
											                                									</strong>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="button" valign="middle">
										                                										<table class="button_wrapper" bgcolor="#c83e37" border="0" cellspacing="0" cellpadding="0">
										                                											<tr>
										                                												<td>
										                                													<a href="<?php echo $url; ?>"><?php echo $button_text; ?></a>
										                                												</td>
										                                											</tr>
										                                										</table>
										                                									</td>
										                                								</tr>
										                                							</table>
										                                						</td>


							                                								<?php }
							                                							} ?>
							                                							
							                                						<?php } ?>

							                                						<?php if($no_of_events == 4){ ?>
							                                							<?php if(have_rows('event_4')){ ?>

							                                								<td width="50">
										                                						&nbsp;
												                                    		</td>

							                                								<?php while(have_rows('event_4')){
							                                									the_row(); ?>

							                                									<?php
							                                									$url = get_sub_field('link_url');
							                                									$image = get_sub_field('event_image');
							                                									$event_date = get_sub_field('event_date');
							                                									$event_time = get_sub_field('event_time');
							                                									$event_category = get_sub_field('event_category');
							                                									$event_title = get_sub_field('event_title');
							                                									$speakers = get_sub_field('speakers');
							                                									$button_text = get_sub_field('button_text');
							                                									?>

							                                									<td class="event" valign="top">
										                                							<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
										                                								<tr>
										                                									<td class="event_image">
										                                										<?php if( !empty($image) ): ?>
																	                                            	<?php
																	                                            	$sized_image = $image['sizes'][$image_size];
																	                                            	$width = $image['sizes'][ $image_size . '-width' ];
							                                                                            			$height = $image['sizes'][ $image_size . '-height' ];
							                                                                            			?>
							                                                                            			<a href="<?php echo $url; ?>"><img src="<?php echo $sized_image; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php the_sub_field('image_alt_text'); ?>"></a>
							                                                                            		<?php endif; ?>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_date_time">
										                                										<strong><?php echo $event_date; ?></strong><br>
										                                										<?php echo $event_time; ?>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_type">
										                                										<?php echo $event_category; ?>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_title">
										                                										<?php
											                                										$no_open_p = str_replace('<p>','',$event_title);
																		                                			$no_close_p = str_replace('</p>','<br><br>',$no_open_p);
																		                                			$final_text = preg_replace('/<br\\s*?\\/?>\\s*$/', '', $no_close_p);
																	                                			?>

										                                										<a href="<?php echo $url; ?>"><?php echo $final_text; ?></a>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="event_speaker">
										                                										<strong>
										                                											<?php
												                                										$no_open_p = str_replace('<p>','',$speakers);
																			                                			$no_close_p = str_replace('</p>','<br><br>',$no_open_p);
																			                                			$final_text = preg_replace('/<br\\s*?\\/?>\\s*$/', '', $no_close_p);
																		                                			?>

											                                										<?php echo $final_text; ?>
											                                									</strong>
										                                									</td>
										                                								</tr>
										                                								<tr>
										                                									<td class="button" valign="middle">
										                                										<table class="button_wrapper" bgcolor="#c83e37" border="0" cellspacing="0" cellpadding="0">
										                                											<tr>
										                                												<td>
										                                													<a href="<?php echo $url; ?>"><?php echo $button_text; ?></a>
										                                												</td>
										                                											</tr>
										                                										</table>
										                                									</td>
										                                								</tr>
										                                							</table>
										                                						</td>


							                                								<?php }
							                                							} ?>
							                                							
							                                						<?php } ?>

							                                						<?php if($no_of_events == 1){ ?>
							                                							<?php if(have_rows('event_1')){ ?>

							                                								<?php while(have_rows('event_1')){
							                                									the_row(); ?>

							                                									<?php
							                                									$url = get_sub_field('link_url');
							                                									$image = get_sub_field('event_image');
							                                									$event_date = get_sub_field('event_date');
							                                									$event_time = get_sub_field('event_time');
							                                									$event_category = get_sub_field('event_category');
							                                									$event_title = get_sub_field('event_title');
							                                									$speakers = get_sub_field('speakers');
							                                									$button_text = get_sub_field('button_text');
							                                									?>

							                                									<td class="event" valign="top">
										                                							<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
										                                								<tr>
										                                									<td class="event_image" valign="top" style="padding-bottom:0;">
										                                										<?php if( !empty($image) ): ?>
																	                                            	<?php
																	                                            	$sized_image = $image['sizes'][$image_size];
																	                                            	$width = $image['sizes'][ $image_size . '-width' ];
							                                                                            			$height = $image['sizes'][ $image_size . '-height' ];
							                                                                            			?>
							                                                                            			<a href="<?php echo $url; ?>"><img src="<?php echo $sized_image; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php the_sub_field('image_alt_text'); ?>"></a>
							                                                                            		<?php endif; ?>
										                                									</td>
										                                									<td width="50">
														                                						&nbsp;
																                                    		</td>
																                                    		<td valign="top">
																                                    			<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
																                                    				<tr>
													                                									<td class="event_date_time">
													                                										<strong><?php echo $event_date; ?></strong><br>
													                                										<?php echo $event_time; ?>
													                                									</td>
													                                								</tr>
													                                								<tr>
													                                									<td class="event_type">
													                                										<?php echo $event_category; ?>
													                                									</td>
													                                								</tr>
													                                								<tr>
													                                									<td class="event_title">
													                                										<?php
														                                										$no_open_p = str_replace('<p>','',$event_title);
																					                                			$no_close_p = str_replace('</p>','<br><br>',$no_open_p);
																					                                			$final_text = preg_replace('/<br\\s*?\\/?>\\s*$/', '', $no_close_p);
																				                                			?>

													                                										<a href="<?php echo $url; ?>"><?php echo $final_text; ?></a>
													                                									</td>
													                                								</tr>
													                                								<tr>
													                                									<td class="event_speaker">
													                                										<strong>
													                                											<?php
															                                										$no_open_p = str_replace('<p>','',$speakers);
																						                                			$no_close_p = str_replace('</p>','<br><br>',$no_open_p);
																						                                			$final_text = preg_replace('/<br\\s*?\\/?>\\s*$/', '', $no_close_p);
																					                                			?>

														                                										<?php echo $final_text; ?>
														                                									</strong>
													                                									</td>
													                                								</tr>
													                                								<tr>
													                                									<td class="button" valign="middle">
													                                										<table class="button_wrapper" bgcolor="#c83e37" border="0" cellspacing="0" cellpadding="0">
													                                											<tr>
													                                												<td>
													                                													<a href="<?php echo $url; ?>"><?php echo $button_text; ?></a>
													                                												</td>
													                                											</tr>
													                                										</table>
													                                									</td>
													                                								</tr>
																                                    			</table>
																                                    		</td>
										                                								</tr>
										                                							</table>
										                                						</td>


							                                								<?php }
							                                							} ?>
							                                							
							                                						<?php } ?>

							                                					</tr>
							                                				</table>
							                                			<!--/<?php echo $no_of_events; ?> Events-->
	                                								
							                                			<?php $e++; ?>

	                                								<?php }; ?>
	                                								</td> <!--/programs_td-->
	                                							</tr>
	                                						<?php }; ?>

						                                </table>		
                                					<!--/FEATURED EVENTS-->

                                				<?php } ?>

                                			<?php } ?>
                                		<?php } ?>

                                		<?php $s++; ?>
                            			
                                	<?php } ?>

                                	<!--SPACER-->
	                    			<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
	                    				<tr>
	                                		<td height="60">
	                                			&nbsp;
	                                		</td>
	                                	</tr>
	                                </table>
	                                <!--/SPACER-->

                                <?php } ?>

                            </td>
						</tr>
					</table>

					<!--FOOTER-->
                        <table width="100%" class="footer" align="center" bgcolor="#f1f1f1" border="0" cellpadding="0" cellspacing="0">
                        	<tr>
                        		<td width="100%" bgcolor="#f1f1f1" style="background-color:#f1f1f1;" align="center">
                        			<table width="700" border="0" cellpadding="0" cellspacing="0" align="center" style="margin:0 auto;">
	                        			<tr>
			                        		<td colspan="5" class="image_credits">
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
			                                <td valign="top" width="200">
			                                    <strong>Degree Programs and Admissions</strong><br>
												38 West 86th Street<br>
												New York, NY 10024<br>
												212.501.3019<br>
												<a href="mailto:admissions@bgc.bard.edu">admissions@bgc.bard.edu</a>
			                                </td>

			                                <td width="50">
			                                	&nbsp;
				                            </td>

			                                <td valign="top" width="200">
			                                    <strong>Bard Graduate Center Gallery</strong><br>
												18 West 86th Street<br>
												New York, NY 10025<br>
												212.501.3023<br>
												<a href="mailto:gallery@bgc.bard.edu">gallery@bgc.bard.edu</a><br><br>

												Tuesday, Friday–Sunday: 11am&ndash;5pm<br>
												Wednesday–Thursday: 11am&ndash;8pm
			                                </td>

			                                <td width="50">
			                                	&nbsp;
				                            </td>

				                            <td valign="top" width="200">
			                                    <a href="https://www.instagram.com/bardgradcenter/"><img src="http://eblasts.commons.bgc.bard.edu/wp-content/uploads/sites/50/2016/03/instagram.png" width="14" height="14" style="display:inline; vertical-align:middle; padding-bottom:0px;">&nbsp;&nbsp;Instagram</a><br>
			                                    <a href="https://www.facebook.com/BardGradCenter"><img src="http://eblasts.commons.bgc.bard.edu/wp-content/uploads/sites/50/2016/02/facebook-square-icon.png" width="14" height="14" style="display:inline; vertical-align:middle; padding-bottom:0px;">&nbsp;&nbsp;Facebook</a><br>
			                                    <a href="https://www.youtube.com/user/bardgradcenter"><img src="http://eblasts.commons.bgc.bard.edu/wp-content/uploads/sites/50/2016/08/youtube.png" width="14" height="14" style="display:inline; vertical-align:middle; padding-bottom:0px;">&nbsp;&nbsp;YouTube</a><br>
			                                    <a href="https://twitter.com/BardGradCenter"><img src="http://eblasts.commons.bgc.bard.edu/wp-content/uploads/sites/50/2016/02/twitter-icon.png" width="14" height="14" style="display:inline; vertical-align:middle; padding-bottom:0px;">&nbsp;&nbsp;Twitter</a><br><br>

			                                    <a href="*|FORWARD|*">Forward this email to a friend.</a><br>
			                                    <a href="*|UNSUB|*">Unsubscribe from this email list.</a>
			                                </td>
			                            </tr>
                        			</table>
                        		</td>
                        	</tr>
                        </table>
                    <!--/FOOTER-->

				</td>
			</tr>
		</table>
	</body>
</html></textarea>
	        <!--END CODE SECTION -->
	    <?php } else {
        }; ?>



	</body>
	<?php endwhile; else : ?>
        </head>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</html>
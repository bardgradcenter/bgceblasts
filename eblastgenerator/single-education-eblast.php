<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php wp_head(); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php $email_template = get_field('email_template'); ?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php the_field('event_title'); ?></title>
        <style type="text/css">
            body {margin: 0; padding: 0; min-width: 100%!important; color:#333;}
            <?php
            $link_color = get_field('link_color_picker');
            if($link_color) { ?>
                a {color:<?php the_field('link_color_picker'); ?>;}
                .colorText{color:<?php the_field('link_color_picker'); ?>;}
                .masthead a {text-decoration: none; color:<?php the_field('link_color_picker'); ?>;}
            <?php } else { ?>
                a {color:#ff0000;}
                .colorText{color:#ff0000;}
                .masthead a {text-decoration: none; color:#ff0000;}
            <?php }; ?>
            img {display:block;}
            a img {border:none;}
            p {padding: 0; margin:0;}
            .content {width: 740px; padding:20px; font-family: Arial, sans-serif; font-size:14px;}
            .content td {font-family: Arial, sans-serif; font-size:14px; line-height:19px;}
            .masthead {padding: 0 0 14px 0; border-bottom: 7px solid #000000;}
            .secondRow div.leftColumn {padding-right: 50px;}
            .secondRow div.rightColumn {padding-left: 0px; }
            .secondRow {padding-top:30px; padding-bottom: 0px; border-bottom: 7px solid #000;}
            .content .footer td {font-family: Arial, sans-serif !important; font-size:11px !important; line-height: 15px !important;}
            .content .footer td.credit {padding-top: 15px;}
            .content .footer td a {text-decoration: none !important;}
        </style>
    </head>
    <body bgcolor="#ffffff">
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
                                            <a href="http://bgc.bard.edu/"><img src="http://eblasts.commons.bgc.bard.edu/wp-content/uploads/sites/50/2016/05/bgc_eblast_logo.jpg" width="109" height="56" alt="Bard Graduate Center"></a>
                                        </td>
                                        <td valign="bottom" width="591" style="font-family: arial, sans-serif; text-align:right; font-size:24px;">
                                            <a href="<?php the_field('event_url'); ?>"><?php the_field('email_header'); ?></a>
                                        </td>
                                    </tr>
                                </table>
                                <!--/TOP MASTHEADER-->

                                <!--BANNER IMAGE-->
                                <table width="700" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td width="700" style="border-bottom:1px solid #000;">
                                            <?php 
                                            $image = get_field('banner_image');
                                            if( !empty($image) ): ?>
                                                <a href="<?php the_field('event_url'); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                </table>
                                <!--/BANNER IMAGE-->
                                <?php
                                $fullwidth = get_field('full_width_intro_text');
                                if($fullwidth){ ?>
                                <!--ONE COLUMN SECTION-->
                                <table width="700" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" style="padding-top:30px;">
                                    <tr>
                                        <td valign="top" width="700">
                                            <div>
                                                <?php
                                                $no_opening_p = str_replace('<p>', '', $fullwidth);
                                                $no_p = str_replace('</p>', '<br /><br />', $no_opening_p);
                                                echo $no_p;
                                                ?>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <!--/ONE COLUMN SECTION-->
                                <?php }; ?>


                                <?php
                                $multiple_events = get_field('multiple_event_listings');
                                if($multiple_events){ ?>
	                                <?php if( have_rows('multiple_event_listings') ){ ?>
	                                	<?php $index = 1; ?>
		                                <!--ONE COLUMN SECTION-->
		                                <table width="700" bgcolor="#ffffff" border="0" cellpadding="0" class="multiple_event_table" cellspacing="0" style="padding-top:30px;">
		                                	<?php while ( have_rows('multiple_event_listings') ){
		                                		the_row(); ?>
			                                    <tr>
			                                    	<?php if ($index % 2 == 0) { ?>
				                                        <td class="multiple_event_row" valign="top" width="700" style="background-color:#ddd;">
				                                             <div class="leftColumn" style="border:25px solid #ddd;">
			                                        <?php } else { ?>
			                                        	<td class="multiple_event_row" valign="top" width="700" style="background-color:#eee;">
				                                             <div class="leftColumn" style="border:25px solid #eee;">
			                                        <?php }; ?>
			                                                <table cellpadding="0" cellspacing="0">
			                                                    <?php
                                                                $event_url = get_sub_field('event_link'); 
                                                                $image = get_sub_field('event_image');
                                                                if( !empty($image) ): ?>
                                                                    <tr>
    			                                                        <td width="200" valign="top">
                                                                            
                                                                            <?php $size = 'thumbnail';
                                                                            $thumb = $image['sizes'][ $size ];
                                                                            $width = $image['sizes'][ $size . '-width' ];
                                                                            $height = $image['sizes'][ $size . '-height' ];
                                                                            ?>
                                                                            <?php if(!empty($event_url)): ?><a href="<?php echo $event_url; ?>"><?php endif; ?><img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>"><?php if(!empty($event_url)): ?></a><?php endif; ?>
                                                                        </td>
    			                                                        <td width="450" valign="middle">
    			                                                            <strong>                                             
    			                                                                <span style="font-size:18px;"><?php if(!empty($event_url)): ?><a href="<?php echo $event_url; ?>"><?php endif; ?><?php the_sub_field('event_title'); ?><?php if(!empty($event_url)): ?></a><?php endif; ?></span>
    			                                                            </strong><br><br>
    			                                                            <?php
    			                                                            	$event_description = get_sub_field('event_description');
    							                                                $no_opening_p = str_replace('<p>', '', $event_description);
    							                                                $no_p = str_replace('</p>', '<br /><br />', $no_opening_p);
    							                                                echo $no_p;
    						                                                ?>
    			                                                        </td>
    			                                                    </tr>
                                                                <?php else: ?>
                                                                    <tr>
                                                                        <td width="650" valign="middle">
                                                                            <strong>                                             
                                                                                <span style="font-size:18px;"><?php if(!empty($event_url)): ?><a href="<?php echo $event_url; ?>"><?php endif; ?><?php the_sub_field('event_title'); ?><?php if(!empty($event_url)): ?></a><?php endif; ?></span>
                                                                            </strong><br><br>
                                                                            <?php
                                                                                $event_description = get_sub_field('event_description');
                                                                                $no_opening_p = str_replace('<p>', '', $event_description);
                                                                                $no_p = str_replace('</p>', '<br /><br />', $no_opening_p);
                                                                                echo $no_p;
                                                                            ?>
                                                                        </td>
                                                                    </tr>
                                                                <?php endif; ?>
			                                                </table>
			                                            </div>
			                                        </td>
			                                    </tr>
			                                    <?php $index++; ?>
			                                <?php }; ?>
		                                </table>
		                                <!--/ONE COLUMN SECTION-->
		                            <?php }; ?>
                                <?php }; ?>

                                <?php
                                $only_full_width = get_field('only_full_width_intro_text');
                                if($only_full_width == 'true'){ ?>
                                    <!--TWO COLUMN SECTION-->
                                    <table width="700" class="secondRow" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td valign="top" width="700">
                                            </td>
                                        </tr>
                                    </table>
                                    <!--/TWO COLUMN SECTION-->
                                <?php } else { ?>
                                    <!--TWO COLUMN SECTION-->
                                    <table width="700" class="secondRow" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td valign="top" width="375">
                                                <div class="leftColumn">
                                                    <?php if($email_template == 'Standard Template'){ ?>
                                                        <?php
                                                        $event_type = get_field('event_type');
                                                        if($event_type){ ?>
                                                            <?php the_field('event_type'); ?><br />
                                                        <?php }; ?>
                                                        <strong>
                                                            <a href="<?php the_field('event_url'); ?>"><?php the_field('event_title'); ?></a>
                                                             <br />
                                                        </strong>
                                                        <?php
                                                        $speakers = get_field('speakers');
                                                        if($speakers){ ?>
                                                            <?php the_field('speakers'); ?><br /><br />
                                                        <?php } else { ?>
                                                            <br />
                                                        <?php }; ?>

                                                        <?php
                                                        $date = get_field('date');
                                                        if($date){ ?>
                                                            <?php the_field('date'); ?><br />
                                                        <?php }; ?>
                                                        
                                                        <?php
                                                        $time = get_field('time');
                                                        if($time){ ?>
                                                            <?php the_field('time'); ?><br /><br />
                                                        <?php } else { ?>
                                                            <br />
                                                        <?php }; ?>

                                                        <?php
                                                        $location = get_field('location');
                                                        $no_opening_p = str_replace('<p>', '', $location);
                                                        $no_p = str_replace('</p>', '<br /><br />', $no_opening_p);
                                                        if($location){ ?>
                                                            <?php echo $no_p; ?>
                                                        <?php }; ?>


                                                        <?php
                                                        $prices = get_field('prices');
                                                        if($prices){ ?>
                                                            <?php the_field('prices'); ?><br /><br />
                                                        <?php }; ?>

                                                        <?php

                                                        $field = get_field_object('field_55c8df63b919a');
                                                        $value = get_field('register_rsvp');
                                                        $register_rsvp = $field['choices'][ $value ];
                                                        if($register_rsvp){ ?>
                                                            <strong><?php echo $register_rsvp; ?>:</strong><br />
                                                        <?php }; ?>
                                                        <div style="font-size:11px;">
                                                        <?php
                                                        $event_url = get_field('event_url');
                                                        if($event_url){ ?>
                                                            <a href="<?php the_field('event_url'); ?>">Online</a>
                                                        <?php }; ?>
                                                        <?php
                                                        $reg_email = get_field('registration_email_address');
                                                        if($reg_email){ ?>
                                                            &nbsp;│&nbsp;<a href="mailto:<?php the_field('registration_email_address'); ?>"><?php the_field('registration_email_address'); ?></a>
                                                        <?php }; ?>
                                                        <?php
                                                        $reg_phone = get_field('registration_phone_number');
                                                        if($reg_email){ ?>
                                                            &nbsp;│&nbsp;<a href="tel:+1-<?php the_field('registration_phone_number'); ?>"><?php the_field('registration_phone_number'); ?></a><br /><br />
                                                        <?php } else { ?>
                                                            <br /><br />
                                                        <?php }; ?>
                                                        </div>
                                                    <?php }; ?>

                                                    
                                                    <?php
                                                    $exhibitions = get_field('related_exhibitions');
                                                    $no_opening_p = str_replace('<p>', '', $exhibitions);
                                                    $no_p = str_replace('</p>', '<br /><br />', $no_opening_p);
                                                    if($exhibitions){ ?>
                                                        <?php echo $no_p; ?>
                                                    <?php }; ?>

                                                    <?php
                                                    $add_left = get_field('additional_left_column_content');
                                                    $no_opening_p = str_replace('<p>', '', $add_left);
                                                    $no_p = str_replace('</p>', '<br /><br />', $no_opening_p);
                                                    if($add_left){ ?>
                                                        <?php echo $no_p; ?>
                                                    <?php }; ?>
                                                </div>
                                            </td>
                                            <td valign="top" width="325">
                                                <div class="rightColumn">
                                                    <?php
                                                    $right_column = get_field('right_column');
                                                    $no_opening_p = str_replace('<p>', '', $right_column);
                                                    $no_p = str_replace('</p>', '<br /><br />', $no_opening_p);
                                                    if($right_column){ ?>
                                                        <?php echo $no_p; ?>
                                                    <?php }; ?>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    <!--/TWO COLUMN SECTION-->
                                <?php }; ?> 


                                <!--ADDITIONAL CONTENT SECTIONS-->

                                <?php
                                $add_sec = get_field('additional_content_sections');
                                if($add_sec){ ?>
                                    <table width="700" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" style="border-bottom:10px solid #000; padding-bottom:30px;">
                                        <tr>
                                            <td width="700">
                                                <?php if( in_array('Additional Full Width Section', $add_sec) ){ ?>
                                                    
                                                    <!--FULL WIDTH IMAGE-->
                                                    <?php 
                                                    $image = get_field('additional_full_width_image');
                                                    if( !empty($image) ): ?>    
                                                        <table width="700" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
                                                            <tr>
                                                                <td width="700">
                                                                    <a href="<?php echo $image['caption']; ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    <?php endif; ?>
                                                    <!--/FULL WIDTH IMAGE-->

                                                    <?php
                                                    $text = get_field('additional_full_width_text');
                                                    if($text){ ?>
                                                    <!--FULL WIDTH TEXT-->
                                                    <table width="700" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" style="padding-top:20px;">
                                                        <tr>
                                                            <td valign="top" width="700">
                                                                <div>
                                                                    <?php
                                                                    $no_opening_p = str_replace('<p>', '', $text);
                                                                    $no_p = str_replace('</p>', '<br /><br />', $no_opening_p);
                                                                    echo $no_p;
                                                                    ?>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <!--/FULL WIDTH TEXT-->
                                                    <?php }; ?>

                                                <?php }; ?>

                                                <?php if( in_array('Additional Two Column Section', $add_sec) ){ ?>
                                                    <table width="700" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" style="padding-top:20px;">
                                                        <tr>
                                                            <?php if( have_rows('additional_left_column') ){
                                                                while ( have_rows('additional_left_column') ) { the_row(); ?>
                                                                    <td valign="top" width="325">
                                                                        <?php 
                                                                        $image = get_sub_field('additional_left_column_image');
                                                                        if( !empty($image) ): ?> 
                                                                            <div>
                                                                                <a href="<?php echo $image['caption']; ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></a>
                                                                            </div><br />
                                                                        <?php endif; ?>
                                                                        <?php
                                                                        $text = get_sub_field('additional_left_column_text');
                                                                        if($text){ ?>
                                                                            <div>
                                                                                <?php
                                                                                $no_opening_p = str_replace('<p>', '', $text);
                                                                                $no_p = str_replace('</p>', '<br /><br />', $no_opening_p);
                                                                                echo $no_p;
                                                                                ?>
                                                                            </div>
                                                                        <?php }; ?>
                                                                    </td>
                                                                <?php };  ?>
                                                            <?php }; ?>
                                                            <td width="50">
                                                                &nbsp;
                                                            </td>
                                                            <?php if( have_rows('additional_right_column') ){
                                                                while ( have_rows('additional_right_column') ) { the_row(); ?>
                                                                    <td valign="top" width="325">
                                                                        <?php 
                                                                        $image = get_sub_field('additional_right_column_image');
                                                                        if( !empty($image) ): ?> 
                                                                            <div>
                                                                                <a href="<?php echo $image['caption']; ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></a>
                                                                            </div><br />
                                                                        <?php endif; ?>
                                                                        <?php
                                                                        $text = get_sub_field('additional_right_column_text');
                                                                        if($text){ ?>
                                                                            <div>
                                                                                <?php
                                                                                $no_opening_p = str_replace('<p>', '', $text);
                                                                                $no_p = str_replace('</p>', '<br /><br />', $no_opening_p);
                                                                                echo $no_p;
                                                                                ?>
                                                                            </div>
                                                                        <?php }; ?>
                                                                    </td>
                                                                <?php };  ?>
                                                            <?php }; ?>
                                                        </tr>
                                                    </table>
                                                <?php }; ?>
                                            </td>
                                        </tr>
                                    </table>
                                <?php }; ?>
                                

                                <!--/ADDITIONAL CONTENT SECTIONS-->

                                <!--FOOTER-->
                                <table width="700" class="footer" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="credit" width="700" colspan="2">
                                            <?php
                                                $image_credit = get_field('image_credit');
                                                $no_opening_p = str_replace('<p>', '', $image_credit);
                                                $no_p = str_replace('</p>', '<br /><br />', $no_opening_p);
                                                if($image_credit){ ?>
                                                    <?php echo $no_p; ?>
                                                <?php }; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top" width="220">
                                            <a href="https://www.facebook.com/BardGradCenter"><img src="http://eblasts.commons.bgc.bard.edu/wp-content/uploads/sites/50/2015/08/facebook-square-icon.png" width="14" height="14" style="display:inline; vertical-align:bottom; padding-bottom:0px;">&nbsp;&nbsp;Like us on Facebook</a><br />
                                            <a href="https://twitter.com/BardGradCenter"><img src="http://eblasts.commons.bgc.bard.edu/wp-content/uploads/sites/50/2015/08/twitter-icon.png" width="14" height="14" style="display:inline; vertical-align:bottom; padding-bottom:0px;">&nbsp;&nbsp;Follow us on Twitter</a><br /><br />

                                            <a href="*|FORWARD|*">Forward this email to a friend.</a><br />
                                            <a href="*|UNSUB|*">Unsubscribe from this email list.</a>
                                        </td>
                                        <td valign="bottom" width="480" style="text-align:right;">
                                            Bard Graduate Center<br />
                                            <a href="http://bgc.bard.edu">bgc.bard.edu</a><br />
                                            Bard Graduate Center Gallery: 18 West 86th Street, New York, NY 10024<br />
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
        <title><?php the_field('event_title'); ?></title>
        <style type="text/css">
            body {margin: 0; padding: 0; min-width: 100%!important; color:#333;}
            <?php
            $link_color = get_field('link_color_picker');
            if($link_color) { ?>
                a {color:<?php the_field('link_color_picker'); ?>;}
                .colorText{color:<?php the_field('link_color_picker'); ?>;}
                .masthead a {text-decoration: none; color:<?php the_field('link_color_picker'); ?>;}
            <?php } else { ?>
                a {color:#ff0000;}
                .colorText{color:#ff0000;}
                .masthead a {text-decoration: none; color:#ff0000;}
            <?php }; ?>
            img {display:block;}
            a img {border:none;}
            p {padding: 0; margin:0;}
            .content {width: 740px; padding:20px; font-family: Arial, sans-serif; font-size:14px;}
            .content td {font-family: Arial, sans-serif; font-size:14px; line-height:19px;}
            .masthead {padding: 0 0 14px 0; border-bottom: 7px solid #000000;}
            .secondRow div.leftColumn {padding-right: 50px;}
            .secondRow div.rightColumn {padding-left: 0px; }
            .secondRow {padding-top:30px; padding-bottom: 0px; border-bottom: 7px solid #000;}
            .content .footer td {font-family: Arial, sans-serif !important; font-size:11px !important; line-height: 15px !important;}
            .content .footer td.credit {padding-top: 15px;}
            .content .footer td a {text-decoration: none !important;}
        </style>
    </head>
    <body bgcolor="#ffffff">
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
                                            <a href="http://bgc.bard.edu/"><img src="http://eblasts.commons.bgc.bard.edu/wp-content/uploads/sites/50/2016/05/bgc_eblast_logo.jpg" width="109" height="56" alt="Bard Graduate Center"></a>
                                        </td>
                                        <td valign="bottom" width="591" style="font-family: arial, sans-serif; text-align:right; font-size:24px;">
                                            <a href="<?php the_field('event_url'); ?>"><?php the_field('email_header'); ?></a>
                                        </td>
                                    </tr>
                                </table>
                                <!--/TOP MASTHEADER-->

                                <!--BANNER IMAGE-->
                                <table width="700" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td width="700" style="border-bottom:1px solid #000;">
                                            <?php 
                                            $image = get_field('banner_image');
                                            if( !empty($image) ): ?>
<a href="<?php the_field('event_url'); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></a>
                                        <?php endif; ?>
</td>
                                    </tr>
                                </table>
                                <!--/BANNER IMAGE-->
                                <?php
                                $fullwidth = get_field('full_width_intro_text');
                                if($fullwidth){ ?>
<!--ONE COLUMN SECTION-->
                                <table width="700" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" style="padding-top:30px;">
                                    <tr>
                                        <td valign="top" width="700">
                                            <div>
                                                <?php
                                                $no_opening_p = str_replace('<p>', '', $fullwidth);
                                                $no_p = str_replace('</p>', '<br /><br />', $no_opening_p);
                                                echo $no_p;
                                                ?>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <!--/ONE COLUMN SECTION-->
                                <?php }; ?>

                                <?php
                                $multiple_events = get_field('multiple_event_listings');
                                if($multiple_events){ ?>
	                                <?php if( have_rows('multiple_event_listings') ){ ?>
	                                	<?php $index = 1; ?>
		                                <!--ONE COLUMN SECTION-->
		                                <table width="700" bgcolor="#ffffff" border="0" cellpadding="0" class="multiple_event_table" cellspacing="0" style="padding-top:30px;">
		                                	<?php while ( have_rows('multiple_event_listings') ){
		                                		the_row(); ?>
			                                    <tr>
			                                    	<?php if ($index % 2 == 0) { ?>
				                                        <td class="multiple_event_row" valign="top" width="700" style="background-color:#ddd;">
				                                             <div class="leftColumn" style="border:25px solid #ddd;">
			                                        <?php } else { ?>
			                                        	<td class="multiple_event_row" valign="top" width="700" style="background-color:#eee;">
				                                             <div class="leftColumn" style="border:25px solid #eee;">
			                                        <?php }; ?>
			                                                <table cellpadding="0" cellspacing="0">
                                                                <?php
                                                                $event_url = get_sub_field('event_link'); 
                                                                $image = get_sub_field('event_image');
                                                                if( !empty($image) ): ?>
                                                                    <tr>
                                                                        <td width="200" valign="top">
                                                                            
                                                                            <?php $size = 'thumbnail';
                                                                            $thumb = $image['sizes'][ $size ];
                                                                            $width = $image['sizes'][ $size . '-width' ];
                                                                            $height = $image['sizes'][ $size . '-height' ];
                                                                            ?>
                                                                            <?php if(!empty($event_url)): ?><a href="<?php echo $event_url; ?>"><?php endif; ?><img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>"><?php if(!empty($event_url)): ?></a><?php endif; ?>
                                                                        </td>
                                                                        <td width="450" valign="middle">
                                                                            <strong>                                             
                                                                                <span style="font-size:18px;"><?php if(!empty($event_url)): ?><a href="<?php echo $event_url; ?>"><?php endif; ?><?php the_sub_field('event_title'); ?><?php if(!empty($event_url)): ?></a><?php endif; ?></span>
                                                                            </strong><br><br>
                                                                            <?php
                                                                                $event_description = get_sub_field('event_description');
                                                                                $no_opening_p = str_replace('<p>', '', $event_description);
                                                                                $no_p = str_replace('</p>', '<br /><br />', $no_opening_p);
                                                                                echo $no_p;
                                                                            ?>
                                                                        </td>
                                                                    </tr>
                                                                <?php else: ?>
                                                                    <tr>
                                                                        <td width="650" valign="middle">
                                                                            <strong>                                             
                                                                                <span style="font-size:18px;"><?php if(!empty($event_url)): ?><a href="<?php echo $event_url; ?>"><?php endif; ?><?php the_sub_field('event_title'); ?><?php if(!empty($event_url)): ?></a><?php endif; ?></span>
                                                                            </strong><br><br>
                                                                            <?php
                                                                                $event_description = get_sub_field('event_description');
                                                                                $no_opening_p = str_replace('<p>', '', $event_description);
                                                                                $no_p = str_replace('</p>', '<br /><br />', $no_opening_p);
                                                                                echo $no_p;
                                                                            ?>
                                                                        </td>
                                                                    </tr>
                                                                <?php endif; ?>
                                                            </table>
			                                            </div>
			                                        </td>
			                                    </tr>
			                                    <?php $index++; ?>
			                                <?php }; ?>
		                                </table>
		                                <!--/ONE COLUMN SECTION-->
		                            <?php }; ?>
                                <?php }; ?>


<?php
                                $only_full_width = get_field('only_full_width_intro_text');
                                if($only_full_width == 'true'){ ?>
                                    <!--TWO COLUMN SECTION-->
                                    <table width="700" class="secondRow" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td valign="top" width="700">
                                            </td>
                                        </tr>
                                    </table>
                                    <!--/TWO COLUMN SECTION-->
                                <?php } else { ?>
                                    <!--TWO COLUMN SECTION-->
                                    <table width="700" class="secondRow" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td valign="top" width="375">
                                                <div class="leftColumn">
                                                    <?php if($email_template == 'Standard Template'){ ?>
                                                        <?php
                                                        $event_type = get_field('event_type');
                                                        if($event_type){ ?>
                                                            <?php the_field('event_type'); ?><br />
                                                        <?php }; ?>
                                                        <strong>
                                                            <a href="<?php the_field('event_url'); ?>"><?php the_field('event_title'); ?></a>
                                                             <br />
                                                        </strong>
                                                        <?php
                                                        $speakers = get_field('speakers');
                                                        if($speakers){ ?>
                                                            <?php the_field('speakers'); ?><br /><br />
                                                        <?php } else { ?>
                                                            <br />
                                                        <?php }; ?>

                                                        <?php
                                                        $date = get_field('date');
                                                        if($date){ ?>
                                                            <?php the_field('date'); ?><br />
                                                        <?php }; ?>
                                                        
                                                        <?php
                                                        $time = get_field('time');
                                                        if($time){ ?>
                                                            <?php the_field('time'); ?><br /><br />
                                                        <?php } else { ?>
                                                            <br />
                                                        <?php }; ?>

                                                        <?php
                                                        $location = get_field('location');
                                                        $no_opening_p = str_replace('<p>', '', $location);
                                                        $no_p = str_replace('</p>', '<br /><br />', $no_opening_p);
                                                        if($location){ ?>
                                                            <?php echo $no_p; ?>
                                                        <?php }; ?>


                                                        <?php
                                                        $prices = get_field('prices');
                                                        if($prices){ ?>
                                                            <?php the_field('prices'); ?><br /><br />
                                                        <?php }; ?>

                                                        <?php

                                                        $field = get_field_object('field_55c8df63b919a');
                                                        $value = get_field('register_rsvp');
                                                        $register_rsvp = $field['choices'][ $value ];
                                                        if($register_rsvp){ ?>
                                                            <strong><?php echo $register_rsvp; ?>:</strong><br />
                                                        <?php }; ?>
                                                        <div style="font-size:11px;">
                                                        <?php
                                                        $event_url = get_field('event_url');
                                                        if($event_url){ ?>
                                                            <a href="<?php the_field('event_url'); ?>">Online</a>
                                                        <?php }; ?>
                                                        <?php
                                                        $reg_email = get_field('registration_email_address');
                                                        if($reg_email){ ?>
                                                            &nbsp;│&nbsp;<a href="mailto:<?php the_field('registration_email_address'); ?>"><?php the_field('registration_email_address'); ?></a>
                                                        <?php }; ?>
                                                        <?php
                                                        $reg_phone = get_field('registration_phone_number');
                                                        if($reg_email){ ?>
                                                            &nbsp;│&nbsp;<a href="tel:+1-<?php the_field('registration_phone_number'); ?>"><?php the_field('registration_phone_number'); ?></a><br /><br />
                                                        <?php } else { ?>
                                                            <br /><br />
                                                        <?php }; ?>
                                                        </div>
                                                    <?php }; ?>

                                                    
                                                    <?php
                                                    $exhibitions = get_field('related_exhibitions');
                                                    $no_opening_p = str_replace('<p>', '', $exhibitions);
                                                    $no_p = str_replace('</p>', '<br /><br />', $no_opening_p);
                                                    if($exhibitions){ ?>
                                                        <?php echo $no_p; ?>
                                                    <?php }; ?>

                                                    <?php
                                                    $add_left = get_field('additional_left_column_content');
                                                    $no_opening_p = str_replace('<p>', '', $add_left);
                                                    $no_p = str_replace('</p>', '<br /><br />', $no_opening_p);
                                                    if($add_left){ ?>
                                                        <?php echo $no_p; ?>
                                                    <?php }; ?>
                                                </div>
                                            </td>
                                            <td valign="top" width="325">
                                                <div class="rightColumn">
                                                    <?php
                                                    $right_column = get_field('right_column');
                                                    $no_opening_p = str_replace('<p>', '', $right_column);
                                                    $no_p = str_replace('</p>', '<br /><br />', $no_opening_p);
                                                    if($right_column){ ?>
                                                        <?php echo $no_p; ?>
                                                    <?php }; ?>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    <!--/TWO COLUMN SECTION-->
                                <?php }; ?> 

                                <!--ADDITIONAL CONTENT SECTIONS-->

<?php
$add_sec = get_field('additional_content_sections');
if($add_sec){ ?>
                                    <table width="700" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" style="border-bottom:10px solid #000; padding-bottom:30px;">
                                        <tr>
                                            <td width="700">
                                                <?php if( in_array('Additional Full Width Section', $add_sec) ){ ?>
                                                    
                                                    <!--FULL WIDTH IMAGE-->
                                                    <?php 
                                                    $image = get_field('additional_full_width_image');
                                                    if( !empty($image) ): ?>    
                                                        <table width="700" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
                                                            <tr>
                                                                <td width="700">
                                                                    <a href="<?php echo $image['caption']; ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    <?php endif; ?>
<!--/FULL WIDTH IMAGE-->

                                                    <?php
                                                    $text = get_field('additional_full_width_text');
                                                    if($text){ ?>
<!--FULL WIDTH TEXT-->
                                                    <table width="700" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" style="padding-top:20px;">
                                                        <tr>
                                                            <td valign="top" width="700">
                                                                <div>
                                                                    <?php
                                                                    $no_opening_p = str_replace('<p>', '', $text);
                                                                    $no_p = str_replace('</p>', '<br /><br />', $no_opening_p);
                                                                    echo $no_p;
                                                                    ?>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <!--/FULL WIDTH TEXT-->
                                                    <?php }; ?>

                                                <?php }; ?>

<?php if( in_array('Additional Two Column Section', $add_sec) ){ ?>
                                                    <table width="700" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" style="padding-top:20px;">
                                                        <tr>
                                                            <?php if( have_rows('additional_left_column') ){
                                                                while ( have_rows('additional_left_column') ) { the_row(); ?>
<td valign="top" width="325">
                                                            <?php 
                                                            $image = get_sub_field('additional_left_column_image');
                                                            if( !empty($image) ): ?> 
                                                                <div>
                                                                    <a href="<?php echo $image['caption']; ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></a>
                                                                </div><br />
<?php endif; ?>
<?php
$text = get_sub_field('additional_left_column_text');
if($text){ ?>
                                                                <div>
                                                                    <?php
                                                                    $no_opening_p = str_replace('<p>', '', $text);
                                                                    $no_p = str_replace('</p>', '<br /><br />', $no_opening_p);
                                                                    echo $no_p;
                                                                    ?>
                                                                </div>
<?php }; ?>
                                                            </td>
<?php };  ?>
<?php }; ?>
                                                            <td width="50">
                                                                &nbsp;
                                                            </td>
                                                            <?php if( have_rows('additional_right_column') ){
                                                                while ( have_rows('additional_right_column') ) { the_row(); ?>
<td valign="top" width="325">
                                                            <?php 
                                                            $image = get_sub_field('additional_right_column_image');
                                                            if( !empty($image) ): ?> 
                                                                <div>
                                                                    <a href="<?php echo $image['caption']; ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></a>
                                                                </div><br />
<?php endif; ?>
<?php
$text = get_sub_field('additional_right_column_text');
if($text){ ?>
                                                                <div>
                                                                    <?php
                                                                    $no_opening_p = str_replace('<p>', '', $text);
                                                                    $no_p = str_replace('</p>', '<br /><br />', $no_opening_p);
                                                                    echo $no_p;
                                                                    ?>
                                                                </div>
<?php }; ?>
                                                            </td>
<?php };  ?>
<?php }; ?>
                                                        </tr>
                                                    </table>
<?php }; ?>
                                            </td>
                                        </tr>
                                    </table>
                                <?php }; ?>
                                

                                <!--/ADDITIONAL CONTENT SECTIONS-->

                                <!--FOOTER-->
                                <table width="700" class="footer" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="credit" width="700" colspan="2">
                                            <?php
                                                $image_credit = get_field('image_credit');
                                                $no_opening_p = str_replace('<p>', '', $image_credit);
                                                $no_p = str_replace('</p>', '<br /><br />', $no_opening_p);
                                                if($image_credit){ ?>
<?php echo $no_p; ?>
                                                <?php }; ?>
</td>
                                    </tr>
                                    <tr>
                                        <td valign="top" width="220">
                                            <a href="https://www.facebook.com/BardGradCenter"><img src="http://eblasts.commons.bgc.bard.edu/wp-content/uploads/sites/50/2015/08/facebook-square-icon.png" width="14" height="14" style="display:inline; vertical-align:bottom; padding-bottom:0px;">&nbsp;&nbsp;Like us on Facebook</a><br />
                                            <a href="https://twitter.com/BardGradCenter"><img src="http://eblasts.commons.bgc.bard.edu/wp-content/uploads/sites/50/2015/08/twitter-icon.png" width="14" height="14" style="display:inline; vertical-align:bottom; padding-bottom:0px;">&nbsp;&nbsp;Follow us on Twitter</a><br /><br />

                                            <a href="*|FORWARD|*">Forward this email to a friend.</a><br />
                                            <a href="*|UNSUB|*">Unsubscribe from this email list.</a>
                                        </td>
                                        <td valign="bottom" width="480" style="text-align:right;">
                                            Bard Graduate Center<br />
                                            <a href="http://bgc.bard.edu">bgc.bard.edu</a><br />
                                            Bard Graduate Center Gallery: 18 West 86th Street, New York, NY 10024<br />
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
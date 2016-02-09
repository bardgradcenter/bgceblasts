<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php wp_head(); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
            .content {width: 740px; padding:20px; font-family: Georgia, serif; font-size:14px;}
            .content td {font-family: Georgia, serif; font-size:14px; line-height:20px;}
            .masthead {padding: 0 0 11px 0; border-bottom: 10px solid #000000;}
            .secondRow div.leftColumn {padding-right: 50px;}
            .secondRow div.rightColumn {padding-left: 0px; }
            .secondRow {padding-top:30px; padding-bottom: 0px; border-bottom: 10px solid #000;}
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
                                        <td valign="bottom" width="75">
                                            <a href="http://bgc.bard.edu/"><img src="http://bgcresources.dreamhosters.com/WP/eblasts/wp-content/uploads/sites/2/2015/10/ap_bgc_logo.jpg" width="125" height="74" alt="Bard Graduate Center"></a>
                                        </td>
                                        <?php
                                        $fontSize = get_field('header_font-size');
                                        if($fontSize) { ?>
                                        	<td valign="bottom" width="625" style="font-family: arial, sans-serif; text-align:right; font-size:<?php the_field('header_font-size'); ?>px;">
                                        <?php } else { ?>
                                        	<td valign="bottom" width="625" style="font-family: arial, sans-serif; text-align:right; font-size:24px;">
                                        <?php } ?> 
                                            <a href="<?php the_field('header_url'); ?>"><?php the_field('email_header'); ?></a>
                                        </td>
                                    </tr>
                                </table>
                                <!--/TOP MASTHEADER-->

                                <!--BANNER IMAGE-->
                                <table width="700" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td width="700" style="border-bottom:2px solid #000;">
                                            <?php 
                                            $image = get_field('banner_image');
                                            if( !empty($image) ): ?>
                                                <a href="<?php the_field('banner_url'); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                </table>
                                <!--/BANNER IMAGE-->
                                <?php
                                $fullwidth = get_field('full_width_intro_text');
                                if($fullwidth){ ?>
                                <!--ONE COLUMN SECTION-->
                                <table width="700" bgcolor="#ffffff" border="0" cellpadding="0" class="secondRow" cellspacing="0">
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
                                        <td valign="bottom" width="220">
                                            <a href="https://www.facebook.com/BardGradCenter"><img src="http://bgcresources.dreamhosters.com/WP/eblasts/wp-content/uploads/sites/2/2015/08/facebook-square-icon.png" width="14" height="14" style="display:inline; vertical-align:bottom; padding-bottom:0px;">&nbsp;&nbsp;Like us on Facebook</a><br />
                                            <a href="https://twitter.com/BardGradCenter"><img src="http://bgcresources.dreamhosters.com/WP/eblasts/wp-content/uploads/sites/2/2015/08/twitter-icon.png" width="14" height="14" style="display:inline; vertical-align:bottom; padding-bottom:0px;">&nbsp;&nbsp;Follow us on Twitter</a><br /><br />

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
            .content {width: 740px; padding:20px; font-family: Georgia, serif; font-size:14px;}
            .content td {font-family: Georgia, serif; font-size:14px; line-height:18px;}
            .masthead {padding: 0 0 11px 0; border-bottom: 10px solid #000000;}
            .secondRow div.leftColumn {padding-right: 50px;}
            .secondRow div.rightColumn {padding-left: 0px; }
            .secondRow {padding-top:30px; padding-bottom: 0px; border-bottom: 10px solid #000;}
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
                                        <td valign="bottom" width="75">
                                            <a href="http://bgc.bard.edu/"><img src="http://bgcresources.dreamhosters.com/WP/eblasts/wp-content/uploads/sites/2/2015/10/ap_bgc_logo.jpg" width="125" height="74" alt="Bard Graduate Center Gallery"></a>
                                        </td>
                                        <?php
                                        $fontSize = get_field('header_font-size');
                                        if($fontSize) { ?>
<td valign="bottom" width="625" style="font-family: arial, sans-serif; text-align:right; font-size:<?php the_field('header_font-size'); ?>px;">
                                        <?php } else { ?>
<td valign="bottom" width="625" style="font-family: arial, sans-serif; text-align:right; font-size:24px;">
                                        <?php } ?>
	<a href="<?php the_field('header_url'); ?>"><?php the_field('email_header'); ?></a>
                                        </td>
                                    </tr>
                                </table>
                                <!--/TOP MASTHEADER-->

                                <!--BANNER IMAGE-->
                                <table width="700" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td width="700" style="border-bottom:2px solid #000;">
                                            <?php 
                                            $image = get_field('banner_image');
                                            if( !empty($image) ): ?>
<a href="<?php the_field('banner_url'); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></a>
                                        <?php endif; ?>
</td>
                                    </tr>
                                </table>
                                <!--/BANNER IMAGE-->
                                <?php
                                $fullwidth = get_field('full_width_intro_text');
                                if($fullwidth){ ?>
<!--ONE COLUMN SECTION-->
                                <table width="700" bgcolor="#ffffff" border="0" cellpadding="0" class="secondRow" cellspacing="0">
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
                                        <td valign="bottom" width="220">
                                            <a href="https://www.facebook.com/BardGradCenter"><img src="http://bgcresources.dreamhosters.com/WP/eblasts/wp-content/uploads/sites/2/2015/08/facebook-square-icon.png" width="14" height="14" style="display:inline; vertical-align:bottom; padding-bottom:0px;">&nbsp;&nbsp;Like us on Facebook</a><br />
                                            <a href="https://twitter.com/BardGradCenter"><img src="http://bgcresources.dreamhosters.com/WP/eblasts/wp-content/uploads/sites/2/2015/08/twitter-icon.png" width="14" height="14" style="display:inline; vertical-align:bottom; padding-bottom:0px;">&nbsp;&nbsp;Follow us on Twitter</a><br /><br />
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
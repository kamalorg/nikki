<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>
<div id="page">
  <header id="masthead" role="banner">
    <div class="container_12">
      <div class="site-branding grid_4">
        <h1 class="site-title">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
        </h1>
      </div>
      
    </div>
  </header>


  <?php if ($is_front && theme_get_setting('slideshow_display','corporate_agency')): ?>
  <?php 
    $slide1_head = check_plain(theme_get_setting('slide1_head','corporate_agency'));   $slide1_desc = check_plain(theme_get_setting('slide1_desc','corporate_agency')); $slide1_url = check_plain(theme_get_setting('slide1_url','corporate_agency'));
    $slide2_head = check_plain(theme_get_setting('slide2_head','corporate_agency'));   $slide2_desc = check_plain(theme_get_setting('slide2_desc','corporate_agency')); $slide2_url = check_plain(theme_get_setting('slide2_url','corporate_agency'));
    $slide3_head = check_plain(theme_get_setting('slide3_head','corporate_agency'));   $slide3_desc = check_plain(theme_get_setting('slide3_desc','corporate_agency')); $slide3_url = check_plain(theme_get_setting('slide3_url','corporate_agency'));
  ?>
  <div class="home-slider">
    <div class="cycle-slideshow"
      data-cycle-caption-plugin='caption2' 
      data-cycle-slides="li" 
      data-cycle-fx='scrollHorz' 
      data-cycle-speed='700' 
      data-cycle-timeout='8000' 
      data-cycle-center-horz=true
      data-cycle-center-vert=true
      data-cycle-prev=".prev" 
      data-cycle-next=".next"   
      data-cycle-caption-template="<span class=stitle>{{ptitle}}</span><br><span class=stext>{{ptext}}</span> "      
      data-cycle-pause-on-hover="true" >
      <div class="cycle-caption custom"></div>
      <ul>

        <li <?php if($slide1_head): ?> data-cycle-ptitle="<?php print $slide1_head; ?>" <?php endif; ?>
            <?php if($slide1_desc): ?> data-cycle-ptext="<?php print $slide1_desc; ?>" <?php endif; ?>
            data-cycle-pmore="Read More" data-cycle-plink="<?php print url($slide1_url); ?>">
          <a class="frmore" href="<?php print url($slide1_url); ?>"> <img src="<?php print base_path() . drupal_get_path('theme', 'corporate_agency') . '/images/slide-image-1.jpg'; ?>"/> </a>
        </li>

        <li <?php if($slide2_head): ?> data-cycle-ptitle="<?php print $slide2_head; ?>" <?php endif; ?>
            <?php if($slide2_desc): ?> data-cycle-ptext="<?php print $slide2_desc; ?>" <?php endif; ?>
            data-cycle-pmore="Read More" data-cycle-plink="<?php print url($slide2_url); ?>">
          <a class="frmore" href="<?php print url($slide2_url); ?>"> <img src="<?php print base_path() . drupal_get_path('theme', 'corporate_agency') . '/images/slide-image-2.jpg'; ?>"/> </a>
        </li>

        <li <?php if($slide3_head): ?> data-cycle-ptitle="<?php print $slide3_head; ?>" <?php endif; ?>
            <?php if($slide3_desc): ?> data-cycle-ptext="<?php print $slide3_desc; ?>" <?php endif; ?>
            data-cycle-pmore="Read More" data-cycle-plink="<?php print url($slide3_url); ?>">
          <a class="frmore" href="<?php print url($slide3_url); ?>"> <img src="<?php print base_path() . drupal_get_path('theme', 'corporate_agency') . '/images/slide-image-3.jpg'; ?>"/> </a>
        </li>

      </ul>

      <div class="prev"></div>
      <div class="next"></div>

    </div>
  </div>
  <?php else: ?>
    <div class="headboz"></div>
  <?php endif; ?>
    <div class="main-menu">
        <nav id="navigation" class="main-navigation" role="navigation">
          <div id="main-menu">
            <?php 
              if (module_exists('i18n_menu')) {
                $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
              } else {
                $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
              }
              print drupal_render($main_menu_tree);
            ?>
          </div>
        </nav>
      </div>
    
        <?php if ($page['content_top']): ?>
        <div id="content_top">
        <?php print render($page['content_top']); ?>
        </div>
    <?php endif; ?>
        <?php if (!$is_front && $page['content']): ?>
        <div id ="content">
        <?php print render($page['content']); ?>
        </div>
        <?php endif; ?>
    <div id="middle_content">
            <?php if ($page['middle_left']): ?>
            <div id ="middle_left">
            <?php print render($page['middle_left']); ?>
            </div>
        <?php endif; ?>
            <?php if ($page['middle_right']): ?>
            <div id ="middle_right">
            <?php print render($page['middle_right']); ?>
            </div>
    <?php endif; ?>
    </div>
        <?php if ($page['pre_footer']): ?>
        <div id ="pre_footer">
        <?php print render($page['pre_footer']); ?>
        </div>
    <?php endif; ?>
        <?php if ($page['footer']): ?>
        <div id ="footer">
        <?php print render($page['footer']); ?>
        </div>
<?php endif; ?>

 
</div>
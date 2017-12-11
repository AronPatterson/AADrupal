<div id="top">
<header id="hdrContainer">
  <div class="row relative">
    <section class="small-12 large-9 columns logoArea">
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><h1><img src="<?=ASSET_PATH; ?>/img/logo.svg" alt="August Ash - Minneapolis, Minnesota" alt="<?php print t('Home'); ?>" /></h1></a>
    </section>
    <section class="small-6 large-9 columns text-right">
      <input type="submit" class="button" value="Login" onclick="location.href='<?=BASE_PATH; ?>user';" />
    </section>
    <a class="sr-only" href="#mainContent" tabindex="-1">Skip to main content</a>
    <?php if ($main_menu): ?>
      <a href="#mainNav" class="sr-only" tabindex="-1"><?php print t('Skip to navigation'); ?></a>
    <?php endif; ?>
  </div>
</header>
<?php print render($page['header']); ?>
<!-- START: Nav -->
<div class="row collapse preNavRow">
  <nav id="navContainer" class="small-18 large-9 columns">
    <div class="title-bar text-center" data-responsive-toggle="mainNav" data-hide-for="large">
      <button class="fa fa-bars fa-lg" type="button" data-toggle></button><div class="title-bar-title" data-toggle>Navigation</div>
    </div>
    <ul id="mainNav" class="menu expanded large-horizontal medium-vertical" data-responsive-menu="accordion large-dropdown medium-accordion">
      <li data-toggle="giantMenu" class="menuButton"><a href="<?=BASE_PATH; ?>who-we-are"><span>Who We Are</span></a>
      <!-- START: Giant Menu -->
        <div id="giantMenu" data-dropdown data-options="closeOnClick: true; hover: true; hoverPane: true;" class="dropdown-pane">
          <div class="row">
            <!-- <button class="close-button float-right" aria-label="Close alert" type="button">
              <span aria-hidden="true">&times;</span>
            </button> -->
            <div class="small-18 medium-6 large-4 columns text-left">
              <ul class="menu vertical">
                <li><label><strong>Lorem ipsum dolor</strong></label></li>
                <li><a href="#">Item 1</a></li>
                <li><a href="#">Item 2</a></li>
                <li><a href="#">Item 3</a></li>
                <li><a href="#">Item 4</a></li>
                <li><a href="#">Item 5</a></li>
                <li><a href="#">Item 6</a></li>
                <li><a href="#">Item 7</a></li>
                <li><a href="#">Item 8</a></li>
                <li><a href="#">Item 9</a></li>
                <li><a href="#">Item 10</a></li>
                <li><a href="#">Item 11</a></li>
                <li><a href="#">Item 12</a></li>
              </ul>
            </div>
            <div class="small-18 medium-6 large-4 columns text-left">
              <ul class="menu vertical"
                <li><label><strong>Section Name</strong></label></li>
                <li><a href="#">Item 1</a></li>
                <li><a href="#">Item 2</a></li>
                <li><a href="#">Item 3</a></li>
                <li><a href="#">Item 4</a></li>
                <li><a href="#">Item 5</a></li>
                <li><a href="#">Item 6</a></li>
                <li><a href="#">Item 7</a></li>
              </ul>
            </div>
            <div class="small-18 medium-6 large-4 columns text-left">
              <ul class="menu vertical"
                <li><label><strong>Section Name</strong></label></li>
                <li><a href="#">Item 1</a></li>
                <li><a href="#">Item 2</a></li>
                <li><a href="#">Item 3</a></li>
                <li><a href="#">Item 4</a></li>
                <li><a href="#">Item 5</a></li>
                <li><a href="#">Item 6</a></li>
                <li><a href="#">Item 7</a></li>
                <li><a href="#">Item 8</a></li>
                <li><a href="#">Item 9</a></li>
                <li><a href="#">Item 10</a></li>
              </ul>
            </div>
            <div class="show-for-large large-6 columns copyBlue">
              <p>DIY offal vice cliche celiac try-hard, chambray fingerstache 90's microdosing kitsch austin actually ennui. Mumblecore lumbersexual thundercats stumptown, listicle celiac trust fund flexitarian migas. Chambray cronut drinking vinegar +1 mustache godard, gluten-free you probably haven't heard of them shabby chic. Lo-fi photo booth man bun. Chambray cronut drinking vinegar +1 mustache godard, gluten-free you probably haven't heard of them shabby chic. Lo-fi photo booth man bun. Chambray cronut drinking vinegar +1 mustache godard, gluten-free you probably haven't heard of them shabby chic. Lo-fi photo booth man bun.</p>
              <p>Wayfarers four loko franzen dreamcatcher, shoreditch flannel cold-pressed blog man bun kogi truffaut selvage. Lo-fi plaid small batch, williamsburg organic portland ramps yr vegan cred +1 fixie 3 wolf moon. Forage tacos iPhone, mlkshk affogato yr kale chips pickled. Lumbersexual small batch austin intelligentsia waistcoat single-origin coffee. Gluten-free banjo waistcoat, shabby chic meggings kogi roof party irony lumbersexual butcher quinoa 8-bit messenger bag keytar. Gluten-free banjo waistcoat, shabby chic meggings kogi roof party irony lumbersexual butcher quinoa 8-bit messenger bag keytar.</p>
            </div>
          </div>
        </div>
      <!-- END: /Giant Menu -->
      </li>
      <li><a href="<?=BASE_PATH; ?>what-we-do"><span>What We Do</span></a></li>
      <li><a href="<?=BASE_PATH; ?>our-work"><span>Our Work</span></a></li>
      <li><a href="#"><span>Our Blog</span></a></li>
      <li><a href="<?=BASE_PATH; ?>careers"><span>Careers</span></a></li>
    </ul>
  </nav>
  <div id="searchBar" class="small-18 large-9 columns">
    <div id="inputSearch">
      <form action="<?php print url("search") ?>" method="post" id="search-form" accept-charset="UTF-8">
        <select><option>All</option></select><input type="text" name="keys" placeholder="Search for information..." maxlength="60" pattern="^[A-Za-z0-9 _]*[A-Za-z0-9][A-Za-z0-9 _]*$" /><button name="op" type="submit"><i class="fa fa-search fa-lg"></i></button>
        <input name="form_token" value="EZwW8OJs58AMsl3mvymEww0STOzMmXd4MHoPkdhilhs" type="hidden">
        <input name="form_id" value="search_form" type="hidden">
      </form>
    </div>
  </div>
</div> <!-- .row -->
<!-- END: /Nav -->
<?php if(drupal_is_front_page()): ?>
<!-- START: Slideshow -->
<div id="theSlideshow" class="relative">
  <div class="orbit" role="region" aria-label="Slideshow" data-orbit>
    <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
    <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
    <ul class="orbit-container">
      <li class="is-active orbit-slide">
        <img class="orbit-image" src="<?=ASSET_PATH; ?>/img/hdr_slide-1-md.jpg" alt="Placeholder 1" data-interchange="[<?=ASSET_PATH; ?>/img/hdr_slide-1-md.jpg, medium], [<?=ASSET_PATH; ?>/img/hdr_slide-1.jpg, large]" />
      </li>
      <li class="orbit-slide">
        <img class="orbit-image" src="<?=ASSET_PATH; ?>/img/hdr_slide-2-md.jpg" alt="Placeholder 2" data-interchange="[<?=ASSET_PATH; ?>/img/hdr_slide-2-md.jpg, medium], [<?=ASSET_PATH; ?>/img/hdr_slide-2.jpg, large]">
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="slideshowTitle medium-18 large-6 column">
      <span class="welcomeText">Welcome to our website.</span>
      <div class="slideshowShopBtn">
        <span class="button">Shop Now</span>
      </div>
    </div>
  </div>
</div>
<!-- END: /Slideshow -->
<?php else: ?>
  <img src="<?=ASSET_PATH; ?>/img/content_1.jpg" alt="Divider element" style="width: auto; max-height: 48px; overflow: hidden;" />
<?php endif; ?>
<!-- START: Main Content -->
<div id="mainContent">
  <div id="contentBox" class="row" role="main">
    <?php if ($breadcrumb): ?>
    <div class="small-18 columns">
      <?php print $breadcrumb; ?>
    </div>
    <?php endif; ?>
    <?php if ($messages): ?>
    <div class="small-18 columns">
      <?php print $messages; ?>
    </div>
    <?php endif; ?>
    <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
    <?php if (!empty($tabs['#primary'])): ?>
    <div class="small-18 columns tabs-wrapper clearfix"><?php print render($tabs); ?></div>
    <?php endif; ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

    <div class="small-18 columns">
      <?php if(drupal_is_front_page()): ?>
      <div id="ctaLarge" class="row ctaBox"></div>
      <div id="ctaSmall" class="row small-centered ctaBox"></div>
      <script id="ctaLargeTemplate" type="text/x-handlebars-template">
        {{#callouts}}
          {{#if buttonLabel}}
          <div class="small-18 medium-9 column">
            <a href="#">
              <img src="<?=ASSET_PATH; ?>/{{imagePath}}" alt="{{title}}" />
              <h2 class="ctaTitle {{#if color}}{{color}}{{else}}green{{/if}}CTA">{{title}}</h2>
              <div class="ctaLabel {{#if color}}{{color}}{{else}}green{{/if}}CTA">{{buttonLabel}}</div>
            </a>
            {{!-- the above pulls in a color as the class 'colorCTA'; if there's no color, it defaults to greenCTA --}}
          </div>
          {{/if}}
        {{/callouts}}
      </script>
      <script id="ctaSmallTemplate" type="text/x-handlebars-template">
        {{!-- this pulls all that don't have a buttonLabel, which neatly works out to our last 3... this is totally a cheat, alas, project reqs!!! --}}
        {{#callouts}}
          {{#unless buttonLabel}}
          <div class="small-18 medium-6 column">
              <a href="#">
                <img src="<?=ASSET_PATH; ?>/{{imagePath}}" alt="{{title}}" />
                <h3 class="ctaTitle {{#if color}}{{color}}{{else}}green{{/if}}CTA">{{title}}</h3>
                <div class="whiteBorders"></div>
              </a>
          </div>
          {{/unless}}
        {{/callouts}}
      </script>
      <?php else: ?>
        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php print render($page['content']); ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<!-- END: /Main Content -->
<!-- START: Site Footer -->
<footer id="siteFooter">
  <div class="row" role="navigation">
    <div class="small-18 large-9 columns">
      <section id="socialMedia" class="text-center large-text-left noPrint">
        <h3>Join Our Newsletter</h3>
        <p>Sign Up for our monthly newsletter that has helpful tips.</p>
        <div class="newsWrapper">
          <div class="emailBox">
            <input type="email" placeholder="Enter Email Address" /><button class="button">Sign Up</button>
          </div>
        </div>
        <ul class="large-text-left">
          <li class="fbLogo"><a href="#"><span class="fa fa-facebook"></span></a></li>
          <li class="twLogo"><a href="#"><span class="fa fa-twitter"></span></a></li>
          <li class="igLogo"><a href="#"><span class="fa fa-instagram"></span></a></li>
          <li class="pintLogo"><a href="#"><span class="fa fa-pinterest"></span></a></li>
        </ul>
      </section>
    </div>
    <div class="small-18 large-9 columns footNav noPrint text-center" role="navigation">
      <div class="row">
        <div class="small-9 medium-6 columns large-text-left">
          <ul class="menu vertical">
            <li><a href="#">Who We Are</a></li>
            <li><a href="#">What We Do</a></li>
            <li><a href="#">Our Work</a></li>
            <li><a href="#">Our Blog</a></li>
            <li><a href="#">Careers</a></li>
          </ul>
        </div>
        <div class="small-9 medium-6 columns large-text-left">
          <ul class="menu vertical">
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Off-hour Support</a></li>
            <li><a href="#">Submit Project</a></li>
          </ul>
        </div>
        <div class="small-9 medium-6 columns large-text-left">
          <ul class="menu vertical">
            <li><a href="#">Helpful Links</a></li>
            <li><a href="#">Sitemap</a></li>
          </ul>
        </div>
      </div> <!-- .row -->
    </div>
  </div> <!-- .row -->
  <div class="row">
  <hr />
    <div class="small-18 text-center">
      <p class="text-center">
        <a class="phoneNum" href="tel:9528519400">952-951-9400</a><br />
        2626 East 82nd Street, Suit 320 Bloomington, MN 55425<br />
        <small>&copy; 2016 August Ash</small>
      </p>
    </div>
  </div> <!-- .row -->
</footer>
<!-- END: /Site Footer -->
</div>
<a href="#top" class="backToTopBtn" title="Back to Top"><i class="fa fa-arrow-up"></i></a>
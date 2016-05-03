<div id="auth_box" class="login">
  <div id="top_part">
    <h1 id="the_logo">
      <a href="<?php print url('<front>'); ?>">
        <img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>">
      </a>
    </h1>
  </div>

  <div id="middle_part">
    <h2 class="title"><?php print $title; ?></h2>

    <?php print $messages; ?>
    
    <?php print render($page['content']); ?>


        <div id="bottom_part ">
        <div class="clearfix"></div>
    <div class="password_link pull-right">
      <?php print l(t('Forgot your password?'), 'user/password'); ?>
    </div>

    <?php if (variable_get('user_register')): ?>
    <div class="register_link">
    <div class="btn-outline btn reg-btn">
      <?php print l(t('Create an Account '), 'user/register'); ?>
      </div>
    </div>
    <?php endif; ?>

  
  </div>
  </div>

    <div class="back_link">
      <a href="<?php print url('<front>'); ?>">&larr; <?php print t('Back'); ?> <?php print $site_name; ?></a>
    </div>


</div>

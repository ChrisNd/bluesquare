<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?= link_to('Bluesquare.com', '@homepage', array('class'=>'navbar-brand')); ?>
    </div>

    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active">
          <?= link_to('Home', '@homepage'); ?>
        </li>
        <li class="">
          <?= link_to('Issues', '@report'); ?>
        </li>
      </ul>
      <? if(false === $sf_user->isAuthenticated()): ?>
        <div class="navbar-form navbar-right" role="form">
          <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#signupModal">Sign up</button>
        </div>
        <? include_partial('user/quickLogin'); ?>
      <? else: ?>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="glyphicon glyphicon-user"></span> <?= $sf_user->getEmail(); ?> <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><?= link_to('<span class="glyphicon glyphicon-th-large"></span> Dashboard', '@homepage'); ?></li>
              <li><?= link_to('<span class="glyphicon glyphicon-list"></span> Issues', '@homepage'); ?></li>
              <li><?= link_to('<span class="glyphicon glyphicon-user"></span> Profile', '@homepage'); ?></li>
              <li><?= link_to('<span class="glyphicon glyphicon-lock"></span> Password', '@homepage'); ?></li>
              <li class="divider"></li>
              <li><?= link_to('<span class="glyphicon glyphicon-off"></span> Logout', '@homepage'); ?></li>
            </ul>
          </li>
        </ul>
      <? endif; ?>
    </div><!--/.navbar-collapse -->

  </div>
</nav>

<? include_partial('user/quickSignup'); ?>

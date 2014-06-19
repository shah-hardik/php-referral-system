
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php l('home') ?>" style="color:#F0AD4E">Administrator Panel</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="<?php l('registration') ?>">Sign Up User</a></li>
            <li><a href="<?php l('client_registration') ?>">Registered Client</a></li>

<!--            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php l('infusionsoft_keys') ?>">Infusionsoft API Keys</a></li>
                    <li><a href="<?php l('fastway_keys') ?>">Fastway Courier API Keys</a></li>
                </ul>
            </li>-->
        </ul>
        <?php $admin = ($_SESSION['user']['user_name']); ?>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if ($admin != ''): ?>Master Admin<?php endif; ?>&nbsp;<i class="fa fa-user" >&nbsp;</i><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php print _U ?>?logout=1"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>

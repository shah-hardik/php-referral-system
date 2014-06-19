<div style="" class="moduleActionBar">
    <div>
        <nav class="navbar navbar-default " role="navigation">

            <div class="collapse navbar-collapse navbar-ex1-collapse ">
                <ul class="nav navbar-nav">
                    <li class="<?php print $activeMenuList ?>"><a href="<?php print _U ?>client_registration/list"><i class="glyphicon glyphicon-th-list"></i>&nbsp;List Client Registration</a></li>
                    <li class="<?php print $activeMenuAdd ?>"><a href="<?php print _U ?>client_registration/add"><i class="glyphicon glyphicon-<?php print $addIcon ?>"></i>&nbsp;<?php print $addLabel ?></a></li>
		      <li class="disabled"><a href="#"><i class="glyphicon glyphicon-trash"></i>&nbsp;Delete Client Registration(s)</a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

    </div>
</div>
<?php include_once('message.php') ?>

<?php include $subTpl; ?>
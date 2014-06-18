<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title> BePure Admin | <?php print _cg("page_title"); ?></title>
        <link rel="shortcut icon" href="<?php print _MEDIA_URL ?>img/favicon.ico" />
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

        <link href="<?php print _MEDIA_URL ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="<?php print _MEDIA_URL ?>js/html5shiv.js"></script>
        <![endif]-->

        
        <link href="<?php print _MEDIA_URL ?>css/style.css" rel="stylesheet" type="text/css" />

        <style type="text/css">
            h1,h2,h4{color:#86B414}
            .hover:hover{
                background-color: #EFEFEF;
            }
            .btn-success:hover{
                background-color: #93C616;
                border-color: #93C616;
            }
            .btn-success{
                background-color: #86B414;
                border-color: #86B414;
            }
            .smallHelpText{
                font-size:12px;
                color:red;
                cursor:pointer;

            }
            .smallHelpText1{
                font-size:14px;
                color:grey;
                cursor:pointer;

            }
        </style>


    </head>
    <body>
        <div class="">
            <?php if ($no_visible_elements) : ?>
                <?php include $modulePage; ?>
            <?php else: ?>
                <?php include_once('left.php'); ?>
                <div class=" col-md-12" >
                    <?php include "breadcrumb.php"; ?>
                    <div class="mainContent">
                        <?php if (!(@include $modulePage)) : ?>
                            <?php include "404.php"; ?>
                        <?php endif; ?>
                    </div>
                </div>	
            <?php endif; ?>
        </div>

        <script src="//code.jquery.com/jquery.js"></script>

        <?php include "scripts.php"; ?>
        <?php include $jsInclude; ?>

        <script src="<?php print _MEDIA_URL ?>bootstrap/js/bootstrap.min.js"></script>

        <?php if ($error): ?>
            <script type="text/javascript">
                $(document).ready(function(){
                    setTimeout(function() {
                        $('#error_msg_div').fadeOut(1200);
                    }, 3500);	
                });   
            </script>
        <?php endif; ?>

        <?php if ($greetings): ?>
            <script type="text/javascript">
                $(document).ready(function(){
                    setTimeout(function() {
                        $('#success_msg_div').fadeOut(1200);
                    }, 3500);
                });
            </script>
        <?php endif; ?>

        <div id="waitBar"></div>
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="alert alert-error" style="">
                            Are you sure you want to take this action ?
                        </div>
                        </br>
                        <div style="text-align:right;">
                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            <button type="button" class="btn btn-primary" onclick="genericFun()">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>











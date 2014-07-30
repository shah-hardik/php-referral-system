<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <script src="//code.jquery.com/jquery.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Referral </title>
        <meta name="generator" content="WYSIWYG Web Builder 8 - http://www.wysiwygwebbuilder.com">
        <style type="text/css">
            div#container
            {
                width: 994px;
                position: relative;
                margin-top: 0px;
                margin-left: auto;
                margin-right: auto;
                text-align: left;
            }
            body
            {
                text-align: center;
                margin: 0;
                background-color: #FFFFFF;
                background-image: url(<?php print _MEDIA_URL ?>img/my%20account.jpg);
                background-repeat: no-repeat;
                background-position: center top;
                color: #000000;
            }
        </style>
        <link rel="stylesheet" href="<?php print _MEDIA_URL ?>css/HP_referral.css" type="text/css">
        <style type="text/css">
            #wb_Text1 
            {
                background-color: transparent;
                border: 0px #000000 solid;
                padding: 0;
            }
            #wb_Text1 div
            {
                text-align: justify;
                white-space: nowrap;
            }
            #Line1
            {
                color: #A0A0A0;
                background-color: #A0A0A0;
                border-width: 0px;
            }
            #Line2
            {
                color: #A0A0A0;
                background-color: #A0A0A0;
                border-width: 0px;
            }
            #wb_Text5 
            {
                background-color: transparent;
                border: 0px #000000 solid;
                padding: 0;
            }
            #wb_Text5 div
            {
                text-align: left;
            }
        </style>
    </head>
    <body>
        <form name="Form1" method="post" action="" id="Form1">

            <div id="container">
                <div id="wb_Text1" style="position:absolute;left:20px;top:220px;width:577px;height:328px;text-align:justify;z-index:0;">
                    <div style="line-height:24px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><strong>Welcome <?php if($reg_id['salutation'] == 'Select One'):echo ""; else:  print ($reg_id['salutation']);; endif; ?>  <?php print ($reg_id['lname']);; ?>,</strong></span></div>
                    <div style="line-height:24px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><em><br></em></span></div>
                    <div style="line-height:24px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><em>This is your account and you can keep track of your referrals here.</em><strong></strong></span></div>
                    <div style="line-height:24px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><strong><br></strong></span></div>
                    <div style="line-height:24px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><strong><br></strong></span></div>
                    <div style="line-height:24px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><strong>Registering Clients via the web:</strong></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><br></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;">We created our Referral Program to compensate you for your participation in </span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;">external sales efforts with referral fees.</span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;">To make it easier for you to pre-register your clients and earn referral fees, we've </span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;">created a Quick Pre-Register form. Register your Client today with our Program </span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;">and receive referral fees.	</span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><br></span></div>
                </div>
                <hr id="Line1" style="margin:0;padding:0;position:absolute;left:623px;top:219px;width:2px;height:687px;z-index:1;">
                <hr id="Line2" style="margin:0;padding:0;position:absolute;left:653px;top:760px;width:305px;height:1px;z-index:2;">
                <div id="wb_Shape3" style="position:absolute;left:653px;top:217px;width:47px;height:47px;z-index:3;">
                    <img src="<?php print _MEDIA_URL ?>img/img0007.gif" id="Shape3" alt="" style="border-width:0;width:47px;height:47px;"></div>
                <div id="wb_Text5" style="position:absolute;left:712px;top:227px;width:208px;height:19px;z-index:4;text-align:left;">
                    <span style="color:#696969;font-family:Tahoma;font-size:16px;"><em>Quick Links</em></span></div>
                <div id="wb_Shape4" style="position:absolute;left:691px;top:309px;width:223px;height:54px;z-index:5;">
                    <a href="./client_registration"><img src="<?php print _MEDIA_URL ?>img/img0008.gif" id="Shape4" alt="" style="border-width:0;width:223px;height:54px;"></a></div>
               
                <div id="wb_Shape1" style="position:absolute;left:692px;top:396px;width:223px;height:54px;z-index:6;">
                    <a href="<?php _U ?>view_clients"><img src="<?php print _MEDIA_URL ?>img/img0009.gif" id="Shape1" alt="" style="border-width:0;width:223px;height:54px;"></a></div>
               
                <div id="wb_Shape2" style="position:absolute;left:692px;top:483px;width:223px;height:54px;z-index:7;">
                        <a href="<?php _U?>update_info/<?php print $reg_id['id'];?>"><img src="<?php print _MEDIA_URL ?>img/img0010.gif" id="Shape2" alt="" style="border-width:0;width:223px;height:54px;"></a></div>
            
                <div id="wb_Shape5" style="position:absolute;left:694px;top:564px;width:223px;height:54px;z-index:8;">

                    <input  type="submit" id="logout" name="logout" value="logout"  class="btn btn-primary" style='display:none'> 

                    <img onclick='$("#logout").click();' src="<?php print _MEDIA_URL ?>img/img0011.gif" id="Shape5" alt="" style="border-width:0;width:223px;height:54px;"></div>
            </div>
        
        </form>
    </body>
</html>



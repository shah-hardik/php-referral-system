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
                background-image: url(<?php print _MEDIA_URL ?>img/admin.jpg);
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
            #wb_Text2 
            {
                background-color: transparent;
                border: 0px #000000 solid;
                padding: 0;
            }
            #wb_Text2 div
            {
                text-align: left;
            }
            #Combobox1
            {
                border: 1px #C0C0C0 solid;
                background-color: #FFFFFF;
                color: #000000;
                font-family: Arial;
                font-size: 13px;
            }
            #TextArea1
            {
                border: 1px #C0C0C0 solid;
                background-color: #FFFFFF;
                color :#000000;
                font-family: Arial;
                font-size: 13px;
                text-align: left;
            }
        </style>
    </head>
    <body>
        <form action="" method="post">
            <div id="container">
                <div id="wb_Text1" style="position:absolute;left:20px;top:220px;width:577px;height:761px;text-align:justify;z-index:0;overflow:auto;">
                    <div  class="top-message alert-success" id="success_msg_jquery">
                        <span id="success_msg_content" style="color:#007700;font-size: 20px;"> <?php print $greetings; ?> <?php print $sentmail_msg; ?>&nbsp;&nbsp;</span>
</div>

                    <div style="line-height:35px;"><span style="color:#696969;font-family:Arial;font-size:24px;">Registered agents</span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><br></span></div>
                  <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><br></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><br></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><b>Salutation:&nbsp; <?php print $agentdata['salutation']; ?></b></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><b>First Name: <?php print $agentdata['fname']; ?>		</b></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><b>Last Name:	<?php print $agentdata['lname']; ?>	</b></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><b>Street Address:* <?php print $agentdata['address']; ?>			</b></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><b>City:* 	<?php print $agentdata['city']; ?>		</b></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><b>Province:* <?php print $agentdata['province']; ?>			</b></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><b>Postal Code:* <?php print $agentdata['postal_code']; ?>			</b></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><b>Primary Phone:* 	<?php print $agentdata['phone']; ?>		&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</b> </span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><b>Email Address:*&nbsp; <?php print $agentdata['email']; ?>			</b></span></div>
                   <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><br></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><b>About Program :<?php print $agentdata['about_program']; ?></b></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><br></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><b>Like Update: <?php print $agentdata['like_update']; ?></b></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><br></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><br></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><br></span></div>

                   <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><b>Comments:</b></span></div>
                   
                    <?php foreach ($comment as $each_comment): ?>
                        <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><b><?php print $each_comment['comment']; ?></b></span></div>

                    <?php endforeach; ?>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><br></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><br></span></div>
                    
                </div>
                <hr id="Line1" style="margin:0;padding:0;position:absolute;left:623px;top:219px;width:2px;height:687px;z-index:1;">
                <hr id="Line2" style="margin:0;padding:0;position:absolute;left:653px;top:760px;width:305px;height:1px;z-index:2;">
                <div id="wb_Shape3" style="position:absolute;left:653px;top:217px;width:47px;height:47px;z-index:3;">
                    <img src="<?php print _MEDIA_URL ?>img/img0024.gif" id="Shape3" alt="" style="border-width:0;width:47px;height:47px;"></div>
                <div id="wb_Text5" style="position:absolute;left:712px;top:227px;width:208px;height:19px;z-index:4;text-align:left;">
                    <span style="color:#696969;font-family:Tahoma;font-size:16px;"><em>Quick Links</em></span></div>
                <div id="wb_Shape4" style="position:absolute;left:691px;top:309px;width:223px;height:54px;z-index:5;">
                    <a href="../adminpanel_agent"><img src="<?php print _MEDIA_URL ?>img/img0025.gif" id="Shape4" alt="" style="border-width:0;width:223px;height:54px;"></a></div>
                <div id="wb_Shape1" style="position:absolute;left:692px;top:396px;width:223px;height:54px;z-index:6;">
                    <a href="../adminpanel"><img src="<?php print _MEDIA_URL ?>img/img0026.gif" id="Shape1" alt="" style="border-width:0;width:223px;height:54px;"></a></div>

                <div id="wb_Shape2" style="position:absolute;left:692px;top:483px;width:223px;height:54px;z-index:7;">
                    <img src="<?php print _MEDIA_URL ?>img/img0027.gif" id="Shape2" alt="" style="border-width:0;width:223px;height:54px;"></div>
                <div id="wb_Text2" style="position:absolute;left:19px;top:287px;width:535px;height:16px;z-index:8;text-align:left;">
                    &nbsp;</div>
                <div id="wb_Shape5" style="position:absolute;left:694px;top:564px;width:223px;height:54px;z-index:9;">
                    <input  type="submit" id="logout" name="logout"  value="logout"  class="btn btn-primary" style="display:none">
                    <img onclick="$('#logout').click();" src="<?php print _MEDIA_URL ?>img/img0028.gif" id="Shape5" alt="" style="border-width:0;width:223px;height:54px;"></div>


                
                <div id="wb_Shape6" style="position:absolute;left:308px;top:1126px;width:266px;height:54px;z-index:12;">
                    <input  type="submit" name="sbt_btn" id="sbt_btn" value=""  class="btn btn-primary" style='display:none'></button>
                    
                </div>

<!-- <input type="image" src="submit.gif" alt="Submit" name="test" style="position:absolute;left:308px;top:1128px;width:173px;height:56px;z-index:11;">-->
            </div>

        </form>
    </body>
</html>
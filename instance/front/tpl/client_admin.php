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
                    
                    <div  class="top-message alert-success" id="success_msg_jquery"><span style="color: #007700"><?php print $greetings; ?></span>
     &nbsp;&nbsp;<span id="success_msg_content"></span>
</div>     
                    
                    <div style="line-height:35px;"><span style="color:#696969;font-family:Arial;font-size:24px;">Registered Clients</span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><br></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;">Update Status:<?php print $clientdata['status']; ?></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><br></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><br></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;">Salutation:&nbsp; <?php print $clientdata['salutation']; ?></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;">First Name: <?php print $clientdata['fname']; ?>		</span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;">Last Name:	<?php print $clientdata['lname']; ?>	</span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;">Street Address:* <?php print $clientdata['address']; ?>			</span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;">City:* 	<?php print $clientdata['city']; ?>		</span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;">Province:* <?php print $clientdata['province']; ?>			</span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;">Postal Code:* <?php print $clientdata['postal_code']; ?>			</span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;">Primary Phone:* 	<?php print $clientdata['phone']; ?>		&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; </span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;">Email Address:*&nbsp; <?php print $clientdata['email']; ?>			</span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;">What type of project is the client interested in?</span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><?php print $clientdata['client_interes']; ?></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;">Please provide any additional information you may have:</span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><br></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><?php print $clientdata['additional_information']; ?></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><br></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;">In the case of a new home what area/community are they interested in?</span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><?php print $clientdata['area_community']; ?></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><br></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;">Please provide any additional information you may have:</span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><br></span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;">None</span></div>
                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><br></span></div>

                    <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;">Add Comments:</span></div>
                    <?php foreach ($comment as $each_comment): ?>
                        <div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><?php print $each_comment['comment']; ?></span></div>

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
                    <a href="../client_registration"><img src="<?php print _MEDIA_URL ?>img/img0008.gif" id="Shape4" alt="" style="border-width:0;width:223px;height:54px;"></a></div>
               
                
                
                <div id="wb_Shape1" style="position:absolute;left:692px;top:396px;width:223px;height:54px;z-index:6;">
                    <a href="<?php _U ?>../view_clients"><img src="<?php print _MEDIA_URL ?>img/img0009.gif" id="Shape1" alt="" style="border-width:0;width:223px;height:54px;"></a></div>
               
                <div id="wb_Shape2" style="position:absolute;left:692px;top:483px;width:223px;height:54px;z-index:7;">
                        <a href="<?php _U?>../update_info/<?php print $reg_id['id'];?>"><img src="<?php print _MEDIA_URL ?>img/img0010.gif" id="Shape2" alt="" style="border-width:0;width:223px;height:54px;"></a></div>
            
                <div id="wb_Text2" style="position:absolute;left:19px;top:287px;width:535px;height:16px;z-index:8;text-align:left;">
                    &nbsp;</div>
                <div id="wb_Shape5" style="position:absolute;left:694px;top:564px;width:223px;height:54px;z-index:9;">
                    <input  type="submit" id="logout" name="logout"  value="logout"  class="btn btn-primary" style="display:none">
                    <img onclick="$('#logout').click();" src="<?php print _MEDIA_URL ?>img/img0028.gif" id="Shape5" alt="" style="border-width:0;width:223px;height:54px;"></div>


                <textarea name="comment" id="TextArea1" style="position:absolute;left:21px;top:1006px;width:566px;height:102px;z-index:11;" rows="5" cols="88"></textarea>
                <div id="wb_Shape6" style="position:absolute;left:308px;top:1126px;width:266px;height:54px;z-index:12;">
                     <input  type="submit" name="sbt_btn" id="sbt_btn" value=""  class="btn btn-primary" style='display:none'></button>
                    <img onclick='$("#sbt_btn").click();' src="<?php print _MEDIA_URL ?>img/img0029.gif" id="Shape6" alt="" style="border-width:0;width:266px;height:54px;"></div>
                <!--<div id="wb_Shape7" style="position:absolute;left:22px;top:1127px;width:266px;height:54px;z-index:13;">
                  <input  type="button" alt="Submit" id="updateinfo" name="update_info" style="display:none;">
                <a href="../client_admin/<?php print $clientdata['id']; ?>"><img onclick="$('#updateinfo').click();" src="<?php print _MEDIA_URL ?>img/img0030.gif" id="Shape7" alt="" style="border-width:0;width:266px;height:54px;"></a></div>-->

                <input  value="1" type="image"  src="<?php print _MEDIA_URL ?>img/img0030.gif" alt="Submit" name="update_info" style="position:absolute;left:65px;top:1125px;width:230px;height:56px;z-index:11;">


<!-- <input type="image" src="submit.gif" alt="Submit" name="test" style="position:absolute;left:308px;top:1128px;width:173px;height:56px;z-index:11;">-->
            </div>

        </form>
    </body>
</html>
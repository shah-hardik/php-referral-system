<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
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
   background-image: url(<?php print _MEDIA_URL?>img/admin.jpg);
   background-repeat: no-repeat;
   background-position: center top;
   color: #000000;
}
</style>
<link rel="stylesheet" href="<?php print _MEDIA_URL?>css/HP_referral.css" type="text/css">
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
</style>
</head>
<body>
<div id="container">
<div id="wb_Text1" style="position:absolute;left:20px;top:220px;width:577px;height:81px;text-align:justify;z-index:0;">
<div style="line-height:35px;"><span style="color:#696969;font-family:Arial;font-size:24px;">Registered Clients</span></div>
<div style="line-height:23px;"><span style="color:#696969;font-family:Arial;font-size:16px;"><br></span></div>
</div>
<hr id="Line1" style="margin:0;padding:0;position:absolute;left:623px;top:219px;width:2px;height:687px;z-index:1;">
<hr id="Line2" style="margin:0;padding:0;position:absolute;left:653px;top:760px;width:305px;height:1px;z-index:2;">
<div id="wb_Shape3" style="position:absolute;left:653px;top:217px;width:47px;height:47px;z-index:3;">
<img src="<?php print _MEDIA_URL?>img/img0017.gif" id="Shape3" alt="" style="border-width:0;width:47px;height:47px;"></div>
<div id="wb_Text5" style="position:absolute;left:712px;top:227px;width:208px;height:19px;z-index:4;text-align:left;">
<span style="color:#696969;font-family:Tahoma;font-size:16px;"><em>Quick Links</em></span></div>
<div id="wb_Shape4" style="position:absolute;left:691px;top:309px;width:223px;height:54px;z-index:5;">
<img src="<?php print _MEDIA_URL?>img/img0018.gif" id="Shape4" alt="" style="border-width:0;width:223px;height:54px;"></div>
<div id="wb_Shape1" style="position:absolute;left:692px;top:396px;width:223px;height:54px;z-index:6;">
<a href="<?php _U?>adminpanel"><img src="<?php print _MEDIA_URL?>img/img0019.gif" id="Shape1" alt="" style="border-width:0;width:223px;height:54px;"></a></div>
<div id="wb_Shape2" style="position:absolute;left:692px;top:483px;width:223px;height:54px;z-index:7;">
<img src="<?php print _MEDIA_URL?>img/img0020.gif" id="Shape2" alt="" style="border-width:0;width:223px;height:54px;"></div>
<?php $cr = 1;?>
<div style="position:absolute;left:19px;top:287px;width:535px;height:192px;z-index:8;text-align:left;">
<?php foreach ($clientdata as $each_client):?>
<div  style="">
<span style="color:#696969;font-family:Arial;font-size:13px;"><?php print $cr; ?>. <strong><?php print $each_client['fname'];?>  <?php print $each_client['lname'];?>
    </strong> - Registered on:<?php $date = date('m-d-Y',strtotime($each_client['created_at']));print $date; ?> <br><br>
    <strong>Registered by:</strong><?php $regname = qs("SELECT * FROM `registration` where id = '{$each_client['reg_id']}'");?> 
                                &nbsp; <?php  print $regname['fname'];?>   <?php print $regname['lname'];?><br><br>
    <strong>Status: </strong><?php print $each_client['status'];?><br><br>
</span>
</div>
<!--<div id="wb_Shape6" style="position:absolute;left:308px;top:278px;width:117px;height:30px;z-index:10;">
<a href="./client_admin.php/<?php print $each_client['id'];?>"><img src="<?php print _MEDIA_URL?>img/img0022.gif" id="Shape6" alt="" style="border-width:0;width:117px;height:30px;"></a></div>-->



<div id="wb_Shape5" style="position:absolute;left:694px;top:564px;width:223px;height:54px;z-index:9;">
<img src="<?php print _MEDIA_URL?>img/img0021.gif" id="Shape5" alt="" style="border-width:0;width:223px;height:54px;"></div>
<div id="wb_Shape6" style="padding-left:355px;">
<a href="./client_admin/<?php print $each_client['id'];?>"><img src="<?php print _MEDIA_URL?>img/img0022.gif" id="Shape6" alt="" style="border-width:0;width:117px;height:30px;"></a></div>
<?php $cr++; ?>
<?php endforeach; ?>
</div>
<!--<div id="wb_Shape7" style="position:absolute;left:308px;top:391px;width:117px;height:30px;z-index:11;">
<a href="./client_admin"><img  src="<?php print _MEDIA_URL?>img/img0023.gif" id="Shape7" alt="" style="border-width:0;width:117px;height:30px;"></a></div>
</div>-->


</body>
</html>
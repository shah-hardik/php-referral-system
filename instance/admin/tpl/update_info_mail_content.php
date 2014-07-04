<table style="font-size:12px;border-collapse:collapse" bgcolor="#FFF" cellpadding="5" cellspacing="0" width="100%" >
    
    <tr>
        <td  width="20%" style="border:1px solid #AAAAAA;" align="right">Updated Status:</td>
        <td style="border:1px solid #AAAAAA;"><strong><?php print $clientdata['status'] ?></strong></td>
    </tr>
    <tr>
    <tr>
        <td  width="20%" style="border:1px solid #AAAAAA;" align="right">Salution:</td>
        <td style="border:1px solid #AAAAAA;"><strong><?php print $clientdata['salutation'] ?></strong></td>
    </tr>
    <tr>
        <td  width="20%" style="border:1px solid #AAAAAA;" align="right">First Name:</td>
        <td style="border:1px solid #AAAAAA;"><strong><?php print $clientdata['fname'] ?></strong></td>
    </tr>
    <tr>
        <td  width="20%" style="border:1px solid #AAAAAA;" align="right">Last Name:</td>
        <td style="border:1px solid #AAAAAA;"><strong><?php print $clientdata['lname'] ?></strong></td>
    </tr>
    <tr>
        <td  width="20%" style="border:1px solid #AAAAAA;" align="right">Company:</td>
        <td style="border:1px solid #AAAAAA;"><strong><?php print $clientdata['company'] ?></strong></td>
    </tr>
    <tr>
        <td  width="20%" style="border:1px solid #AAAAAA;" align="right">Street Address:</td>
        <td style="border:1px solid #AAAAAA;"><strong><?php print $clientdata['address'] ?></strong></td>
    </tr>
    <tr>
        <td  width="20%" style="border:1px solid #AAAAAA;" align="right">City:</td>
        <td style="border:1px solid #AAAAAA;"><strong><?php print $clientdata['city'] ?></strong></td>
    </tr>
    <tr>
        <td  width="20%" style="border:1px solid #AAAAAA;" align="right">Province:</td>
        <td style="border:1px solid #AAAAAA;"><strong><?php print $clientdata['province'] ?></strong></td>
    </tr>
    <tr>
        <td  width="20%" style="border:1px solid #AAAAAA;" align="right">Postal Code:</td>
        <td style="border:1px solid #AAAAAA;"><strong><?php print $clientdata['postal_code'] ?></strong></td>
    </tr>
    <tr>
        <td  width="20%" style="border:1px solid #AAAAAA;" align="right">Primary Phone:</td>
        <td style="border:1px solid #AAAAAA;"><strong><?php print $clientdata['phone'] ?></strong></td>
    </tr>
    <tr>
        <td  width="20%" style="border:1px solid #AAAAAA;" align="right">Email:</td>
        <td style="border:1px solid #AAAAAA;"><strong><?php print $clientdata['email'] ?></strong></td>
    </tr>
    <tr>
        <td  width="20%" style="border:1px solid #AAAAAA;" align="right">Client interest: </td>
        <td style="border:1px solid #AAAAAA;"><strong><?php print $clientdata['additional_information'] ?></strong></td>
    </tr>
    <tr>
        <td  width="20%" style="border:1px solid #AAAAAA;" align="right">Area/Community:</td>
        <td style="border:1px solid #AAAAAA;"><strong><?php print $clientdata['area_community'] ?></strong></td>
    </tr>
    <tr>
        <td  width="20%" style="border:1px solid #AAAAAA;" align="right">Comments:</td>
        <td style="border:1px solid #AAAAAA;"><strong> <?php foreach ($comment as $each_data): ?><span>
                        <?php print $each_data['comment'] ?><?php print ','?>
                    </span> <?php endforeach; ?></strong></td>
    </tr>




</table>

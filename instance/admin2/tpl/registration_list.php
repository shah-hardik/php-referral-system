<div class="listAffiliates actionItem">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div style="float:left;padding-top:8px"><b>List of Registration</b></div> 
            <div style="float:right">
            </div> 
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
	    <?php
	    $cr = 1;
	    if (!empty($reg)):
		?>
    	    <table class="table table-hover" id="table" >
    		<thead>
    		    <tr>
    			<th></th>
    			<th>#</th>
    			<th>Salutation</th>
    			<th>Usernamme</th>
    			<th>Name</th>
			<th>Company</th>
			<th>City</th>
    			<th>Street Address</th>
    			<th>Primary Phone</th>
    			<th>Postal Code</th>
    			<th>Email</th>
    			<th>Province</th>
    			
    			<th>Action</th>

    		    </tr>
    		</thead>
    		<tbody>
			<?php foreach ($reg as $each_reg): ?>
			    <tr id="<?php print $each_reg['id']; ?>">
				<td></td>
				<td><?php print $cr; ?></td>
				
				<td><?php print $each_reg['salutation']; ?> </td>
				<td><?php print $each_reg['username']; ?> </td>
				<td><?php print $each_reg['fname']; ?> </td>
				<td><?php print $each_reg['company']; ?> </td>
				<td><?php print $each_reg['city']; ?> </td>
				<td><?php print $each_reg['address']; ?> </td>
				<td><?php print $each_reg['phone']; ?> </td>
				<td><?php print $each_reg['postal_code']; ?> </td>
				<td><?php print $each_reg['email']; ?> </td>
				<td><?php print $each_reg['province']; ?> </td>
				
				
				
				<td>
				    <a href="<?php print _U ?>registration/edit/<?php print $each_reg['id']; ?>"><i class="glyphicon glyphicon-edit" title="Edit"></i></a>
				    <a href="javascript:void(0);" onclick="return Deleteregistration('registration/delete/<?php print $each_reg['id']; ?>')"><i class="glyphicon glyphicon-trash" title="Delete"></i></a>
				    

				</td>
			    </tr>
			    <?php $cr++; ?>    
			<?php endforeach; ?>
    		</tbody>
    	    </table>
	    <?php else: ?>
    	    <div>No Registrations available</div>
	    <?php endif; ?>
        </div>
    </div>
</div>


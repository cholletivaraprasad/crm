<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Customer Request Registration Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('customer_request_registration/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Name</th>
						<th>Mobile</th>
						<th>Email</th>
						<th>Location</th>
						<th>Plans</th>
						<th>Commets</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($customer_request_registration as $c){ ?>
                    <tr>
						<td><?php echo $c['id']; ?></td>
						<td><?php echo $c['name']; ?></td>
						<td><?php echo $c['mobile']; ?></td>
						<td><?php echo $c['email']; ?></td>
						<td><?php echo $c['location']; ?></td>
						<td><?php echo $c['plans']; ?></td>
						<td><?php echo $c['commets']; ?></td>
						<td>
                            <a href="<?php echo site_url('customer_request_registration/edit/'.$c['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('customer_request_registration/remove/'.$c['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

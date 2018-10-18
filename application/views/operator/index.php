<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Operators Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('operator/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
                        <th>Lco State</th>
						<th>Lco City</th>
						<th>Lco Sublocation</th>
						<th>Lco Name</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($operators as $o){ ?>
                    <tr>
						<td><?php echo $o['id']; ?></td>
                        <td><?php echo $o['lco_state']; ?></td>
						<td><?php echo $o['lco_location']; ?></td>
						<td><?php echo $o['lco_sublocation']; ?></td>
						<td><?php echo $o['lco_name']; ?></td>
						<td>
                            <a href="<?php echo site_url('operator/edit/'.$o['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('operator/remove/'.$o['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

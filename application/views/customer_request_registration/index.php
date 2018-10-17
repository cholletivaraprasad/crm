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
						<th>Assign</th>
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
                        <td>
                            <?php 
                            if($c['operator_id'] =="")
                            {
                            ?>
                                <div class="form-group">
                                    <select name="lco_location" class="form-control assignOperator" id="">
                                        <option value="">select</option>
                                        <?php 
                                        if(@sizeOf($operators) > 0)
                                        {
                                            for ($o=0; $o < sizeOf($operators); $o++) { 
                                                if($operators[$o]['id'] == $c['operator_id'])
                                                {
                                                    $opSel = "selected";
                                                }
                                                else
                                                {
                                                    $opSel = "";
                                                }
                                            ?>
                                                 <option <?php echo @$opSel ?> value="<?php echo $operators[$o]['id']."_".$c['id']; ?>"><?php echo $operators[$o]['lco_name']; ?></option>
                                            <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                    <span class="text-danger"><?php echo form_error('lco_location');?></span>
                                </div>
                            <?php 
                            }
                            else
                            {
                                echo "Assigned";
                            }
                            ?>
                        </td>

                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

<?php 
$jsonObj = @json_decode($jsonObj);
$statesList=@$jsonObj->statesList;
?>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">States</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('states/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>S.No</th>
                        <th>State Name</th>
						<th>Cities</th>
                        <th>Actions</th>
                    </tr>
                    <?php 
                    if(@sizeOf($statesList) > 0)
                    {
                        for ($c=0; $c < sizeOf($statesList); $c++) 
                        {
                    ?>
                        <tr>
                            <td><?php echo @$c+1; ?></td>
                            <td><?php echo @$statesList[$c]->state_name; ?></td>
                            <td>
                                <a href="<?php echo site_url('states/view/'.@$statesList[$c]->id); ?>" class="btn btn-info btn-xs"><span class="fa fa-eye"></span> View</a> 
                            </td>
                            <td>
                                <a href="<?php echo site_url('states/edit/'.@$statesList[$c]->id); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                                <a href="<?php echo site_url('states/remove/'.@$statesList[$c]->id); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                            
    					   </tr>
                            
                    <?php 
                        } 
                    }
                    ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

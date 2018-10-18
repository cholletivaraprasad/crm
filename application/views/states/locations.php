<?php 
$jsonObj = @json_decode($jsonObj);
$locationsList=@$jsonObj->locationsList;
?>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Cities</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('states/locationadd/'.@$jsonObj->id); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>S.No</th>
                        <th>City Name</th>
                        <th>Actions</th>
                    </tr>
                    <?php 
                    if(@sizeOf($locationsList) > 0)
                    {
                        for ($c=0; $c < sizeOf($locationsList); $c++) 
                        {
                    ?>
                        <tr>
                            <td><?php echo @$c+1; ?></td>
                            <td><?php echo @$locationsList[$c]->location_name; ?></td>
                           
                            <td>
                                <a href="<?php echo site_url('states/editLocation/'.@$locationsList[$c]->id."/".@$jsonObj->id); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                                <a href="<?php echo site_url('states/removeLocation/'.@$locationsList[$c]->id."/".@$jsonObj->id); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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

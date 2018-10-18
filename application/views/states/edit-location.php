<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">City Edit</h3>
            </div>
            <?php echo form_open('states/editLocation/'.$rowId."/".$id); ?>
          	<div class="box-body">
          		<div class="row clearfix">
      					<div class="col-md-6">
      						<label for="location_name" class="control-label"><span class="text-danger">*</span>City Name</label>
      						<div class="form-group">
      							<input type="text" name="location_name" value="<?php echo ($this->input->post('location_name') ? $this->input->post('location_name') : @$locations[0]->location_name); ?>" class="form-control" id="location_name" />
      							<span class="text-danger"><?php echo form_error('location_name');?></span>
      						</div>
      					</div>
      				</div>
      			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>
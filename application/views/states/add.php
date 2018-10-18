<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">States Add</h3>
            </div>
            <?php echo form_open('states/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="state_name" class="control-label"><span class="text-danger">*</span>State Name</label>
						<div class="form-group">
							<input type="text" name="state_name" value="<?php echo $this->input->post('state_name'); ?>" class="form-control" id="state_name" />
							<span class="text-danger"><?php echo form_error('state_name');?></span>
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
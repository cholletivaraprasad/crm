<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Customer Request Registration Add</h3>
            </div>
            <?php echo form_open('customer_request/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="name" class="control-label"><span class="text-danger">*</span>Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
							<span class="text-danger"><?php echo form_error('name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="mobile" class="control-label"><span class="text-danger">*</span>Mobile</label>
						<div class="form-group">
							<input type="text" name="mobile" value="<?php echo $this->input->post('mobile'); ?>" class="form-control" id="mobile" />
							<span class="text-danger"><?php echo form_error('mobile');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label"><span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="location" class="control-label"><span class="text-danger">*</span>Location</label>
						<div class="form-group">
							<input type="text" name="location" value="<?php echo $this->input->post('location'); ?>" class="form-control" id="location" />
							<span class="text-danger"><?php echo form_error('location');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="plans" class="control-label"><span class="text-danger">*</span>Plans</label>
						<div class="form-group">
							<input type="text" name="plans" value="<?php echo $this->input->post('plans'); ?>" class="form-control" id="plans" />
							<span class="text-danger"><?php echo form_error('plans');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="commets" class="control-label"><span class="text-danger">*</span>Commets</label>
						<div class="form-group">
							<textarea name="commets" class="form-control" id="commets"><?php echo $this->input->post('commets'); ?></textarea>
							<span class="text-danger"><?php echo form_error('commets');?></span>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Request
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>
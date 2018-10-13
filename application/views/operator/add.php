<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Operator Add</h3>
            </div>
            <?php echo form_open('operator/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="lco_location" class="control-label"><span class="text-danger">*</span>Lco Location</label>
						<div class="form-group">
							<select name="lco_location" class="form-control">
								<option value="">select</option>
								<?php 
								$lco_location_values = array(
									'Hyderabad' => 'Hyderabad',
									'Secundrabad' => 'Secundrabad',
									'Vijayawada' => 'Vijayawada	'
								);

								foreach($lco_location_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('lco_location')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('lco_location');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="lco_sublocation" class="control-label"><span class="text-danger">*</span>Lco Sublocation</label>
						<div class="form-group">
							<select name="lco_sublocation" class="form-control">
								<option value="">select</option>
								<?php 
								$lco_sublocation_values = array(
									'Begumpet' => 'Begumpet',
									'Shameerpet' => 'Shameerpet',
									'Nacharam' => 'Nacharam'
								);

								foreach($lco_sublocation_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('lco_sublocation')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('lco_sublocation');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="lco_name" class="control-label"><span class="text-danger">*</span>Lco Name</label>
						<div class="form-group">
							<input type="text" name="lco_name" value="<?php echo $this->input->post('lco_name'); ?>" class="form-control" id="lco_name" />
							<span class="text-danger"><?php echo form_error('lco_name');?></span>
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
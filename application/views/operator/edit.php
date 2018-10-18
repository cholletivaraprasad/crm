<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Operator Edit</h3>
            </div>
			<?php  echo form_open('operator/edit/'.$operator['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="lco_state" class="control-label"><span class="text-danger">*</span>Lco City</label>
						<div class="form-group">
							<select name="lco_state" class="form-control" id="lco_state">
								<option value="">Select State</option>
								<?php 
								if(@sizeOf($statesList) > 0)
								{
									for ($s=0; $s < sizeOf($statesList); $s++) 
									{ 
										if(@$statesList[$s]->state_name == $operator['lco_state'])
										{
											$stateSel = 'selected';
										}
										else
										{
											$stateSel = '';
										}
									?>
										<option <?php echo @$stateSel; ?> value="<?php echo @$statesList[$s]->state_name; ?>"><?php echo @$statesList[$s]->state_name; ?></option>
									<?php
									}
								}
								?>
							</select>
							<span class="text-danger"><?php echo form_error('lco_state');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="lco_city" class="control-label"><span class="text-danger">*</span>Lco Sublocation</label>
						<div class="form-group">
							<select name="lco_city" class="form-control"  id="lco_city">
								<option value="">Select City</option>
									<?php 
									if(@sizeOf($locationList) > 0)
									{
										for ($l=0; $l < sizeOf($locationList); $l++) 
										{ 
											if(@$locationList[$l]->location_name == $operator['lco_location'])
											{
												$citySel = 'selected';
											}
											else
											{
												$citySel = '';
											}
										?>
											<option <?php echo @$citySel; ?> value="<?php echo @$locationList[$l]->location_name; ?>"><?php echo @$locationList[$l]->location_name; ?></option>
										<?php
										}
									}
									?>
							</select>
							<span class="text-danger"><?php echo form_error('lco_city');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="lco_location" class="control-label"><span class="text-danger">*</span>Lco Location</label>
						<div class="form-group">
							<input type="text" name="lco_location" value="<?php echo ($this->input->post('lco_location') ? $this->input->post('lco_location') : $operator['lco_location']); ?>" class="form-control" id="lco_sublocation" />
							<span class="text-danger"><?php echo form_error('lco_location');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="lco_name" class="control-label"><span class="text-danger">*</span>Lco Name</label>
						<div class="form-group">
							<input type="text" name="lco_name" value="<?php echo ($this->input->post('lco_name') ? $this->input->post('lco_name') : $operator['lco_name']); ?>" class="form-control" id="lco_name" />
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
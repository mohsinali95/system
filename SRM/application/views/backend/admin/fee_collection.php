<div class="row">
	<div class="col-md-8">
    <div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					Fee Collection
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'index.php?admin/fee_collection/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">Slip No.</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" name="slip_no" id="slip_no" value="" >
						</div>
						<div class="col-sm-3" style="color: red; display: none" id="gr_res">Slip No. number already present</div> 
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Class');?></label>
                        
						<div class="col-sm-5">
							<select name="class_id" class="form-control" data-validate="required" id="class_id" 
								data-message-required="<?php echo get_phrase('value_required');?>"
									onchange="return get_students(this.value)">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <?php 
								$classes = $this->db->get('class')->result_array();
								foreach($classes as $row):
									?>
                            		<option value="<?php echo $row['class_id'];?>">
											<?php echo $row['name'];?>
                                            </option>
                                <?php
								endforeach;
							  ?>
                          </select>
						</div> 
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">Student Name</label>
                        
						<div class="col-sm-5">
							<select name="student_id" class="form-control" id="section_selector_holder">
                              <option value="">Select Class First</option>
                              <?php 
								$parents = $this->db->get('student')->result_array();
								foreach($parents as $row):
									?>
                            		<option value="<?php echo $row['student_id'];?>">
										<?php echo $row['name'];?>
                                    </option>
                                <?php
								endforeach;
							  ?>
                          </select>
						</div> 
					</div>
					
					<!-- <div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('section');?></label>
		                    <div class="col-sm-5">
		                        <select name="section_id" class="form-control" id="section_selector_holder">
		                            <option value=""><?php echo get_phrase('select_course_first');?></option>
		                                                          <?php 
								$classes = $this->db->get('section')->result_array();
								foreach($classes as $row):
									?>
                            		<option value="<?php echo $row['section_id'];?>">
											<?php echo $row['nick_name'];?>&nbsp;<?php echo $row['name'];?>
                                            </option>
                                <?php
								endforeach;
							  ?>
			                        
			                    </select>
			                </div>
					</div> -->

					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">Date</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control datepicker" name="date" value="" data-start-view="2">
						</div> 
					</div>
                    
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info">Collect Fee</button>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
    
	<div class="col-md-4">
		<div class="row">
            <div class="col-md-12">
            
                <div class="tile-stats tile-blue">
                    <div class="icon"><i class="fa fa-group"></i></div>
                    <div class="num" data-start="0" data-end="<?= $total ?>" 
                    		data-postfix="" data-duration="1500" data-delay="0">0</div>
                    
                    <h3><?php echo get_phrase('student');?></h3>
                   <p>Total students</p>
                </div>
                
            </div>
            <div class="col-md-12">
            
                <div class="tile-stats tile-green">
                    <div class="icon"><i class="entypo-users"></i></div>
                    <div class="num" data-start="0" data-end="<?= $paid ?>" 
                    		data-postfix="" data-duration="800" data-delay="0">0</div>
                    <h3>Total Paid this month</h3>
                </div>
                
            </div>
            <div class="col-md-12">
            
                <div class="tile-stats tile-red">
                    <div class="icon"><i class="entypo-user"></i></div>
                    <div class="num" data-start="0" data-end="<?= $total-$paid ?>" 
                    		data-postfix="" data-duration="500" data-delay="0">0</div>
                    
                    <h3>Total unpaid this month</h3>
                </div>
                
            </div>
    	</div>
    </div>
	
</div>



<script>
$(document).ready(function(){

	$("#slip_no").blur(function(){
		var slip = $(this).val();
		$.ajax({
			url : '<?php echo base_url();?>index.php?admin/check_slipno/' + slip ,
			method : "POST",
		}).done(function(response){
			if(response == 0){
				$("#gr_res").show();
			}else{
				$("#gr_res").hide();
			}
		})
	})

});
function get_students(class_id) {

$.ajax({
    url: '<?php echo base_url();?>index.php?admin/get_students/' + class_id ,
    success: function(response)
    {
        jQuery('#section_selector_holder').html(response);
    }
});

}

</script>
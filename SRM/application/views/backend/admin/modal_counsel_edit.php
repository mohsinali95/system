<?php 
$edit_data		=	$this->db->get_where('counsel' , array('counsel_id' => $param2) )->result_array();
foreach ( $edit_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('edit_counsel');?>
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'index.php?admin/counsel/'.$row['class_id'].'/do_update/'.$row['counsel_id'] , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
                
                	
	
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('student id');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="roll" value="<?php echo $row['roll'];?>" >
						</div> 
					</div>
	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('name');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['name'];?>">
						</div>
					</div>
				
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('course');?></label>
                        
						<div class="col-sm-5">
							<select name="class_id" class="form-control" data-validate="required" id="class_id" 
								data-message-required="<?php echo get_phrase('value_required');?>"
									onchange="return get_class_sections(this.value)">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <?php 
									$classes = $this->db->get('class')->result_array();
									foreach($classes as $row2):
										?>
                                		<option value="<?php echo $row2['class_id'];?>"
                                        	<?php if($row['class_id'] == $row2['class_id'])echo 'selected';?>>
													<?php echo $row2['name'];?>
                                                </option>
	                                <?php
									endforeach;
								  ?>
                          </select>
						</div> 
					</div>
					
						<div class="form-group">
							<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('year & section');?></label>
			                    <div class="col-sm-5">
			                        <select name="section_id" class="form-control" id="section_id" >
			                            <option value=""><?php echo get_phrase('select_class_first');?></option>
			                                                          <?php 
									$classes = $this->db->get('section')->result_array();
									foreach($classes as $row2):
										?>
                                		<option value="<?php echo $row2['section_id'];?>"
                                        	<?php if($row['section_id'] == $row2['section_id'])echo 'selected';?>>
													<?php echo $row2['nick_name'];?>&nbsp;<?php echo $row2['name'];?>
                                                </option>
	                                <?php
									endforeach;
								  ?>
				                        
				                    </select>
				                </div>
						</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('problem');?></label>
                        
						<div class="col-sm-5">
							<select name="problem" class="form-control">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value="male" <?php if($row['problem'] == 'family')echo 'selected';?>><?php echo get_phrase('family');?></option>
                              <option value="female"<?php if($row['problem'] == 'academic')echo 'selected';?>><?php echo get_phrase('academic');?></option>
                          </select>
						</div> 
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('goal');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="goal" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['goal'];?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('action');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="action" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['action'];?>">
						</div>
					</div>							

                    
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info"><?php echo get_phrase('edit_counsel');?></button>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>

<?php
endforeach;
?>

<script type="text/javascript">

	function get_class_sections(class_id) {

    	$.ajax({
            url: '<?php echo base_url();?>index.php?admin/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_selector_holder').html(response);
            }
        });

    }

    var class_id = $("#class_id").val();
    
    	$.ajax({
            url: '<?php echo base_url();?>index.php?admin/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_selector_holder').html(response);
            }
        });


</script>
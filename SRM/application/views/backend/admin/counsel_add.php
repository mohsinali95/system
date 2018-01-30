<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('counsel_form');?>
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'index.php?admin/counsel/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Student Name');?></label>
                        
						<div class="col-sm-5">

							<select name="student_id" class="select2" data-allow-clear="true" data-placeholder="Select student...">
                              
							  <optgroup label="">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <?php 
								$counsel = $this->db->get('student')->result_array();
								foreach($counsel as $row):
									?>
                            		<option value="<?php echo $row['student_id'];?>">
										<?php echo $row['name'];?>
                                    </option>
                               </optgroup>     
                                <?php
								endforeach;
							  ?>
                          </select>
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
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('section');?></label>
		                    <div class="col-sm-5">
		                        <select name="section_id" class="form-control" id="section_id">
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
					</div>	



					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('problem');?></label>
                        
					<div class="col-sm-5">
							<select name="problem" class="form-control">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value="family"><?php echo get_phrase('family');?></option>
                              <option value="academic"><?php echo get_phrase('academic');?></option>
                          </select>
						</div> 
					</div>								

					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('goal');?></label>
                        
						<div class="col-sm-5">
							<textarea type="text" class="form-control" name="goal" value="" data-start-view="2"></textarea> 
						</div> 
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('action');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="action" value="" data-start-view="2">
						</div> 
					</div>					
					
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info"><?php echo get_phrase('add_counsel');?></button>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>

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

</script>
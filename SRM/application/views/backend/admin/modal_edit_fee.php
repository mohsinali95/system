<?php 
$edit_data		=	$this->db->get_where('fee_structure' , array('fee_id' => $param2) )->result_array();
foreach ( $edit_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					Edit Fee
            	</div>
            </div>
			<div class="panel-body">
                <?php echo form_open(base_url() . 'index.php?admin/fee_structure/do_update/'.$row['fee_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Monthly Fee</label>
                    <div class="col-sm-5 controls">
                        <input type="text" class="form-control" name="amount" value="<?php echo $row['amount'];?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Admission Fee</label>
                    <div class="col-sm-5 controls">
                        <input type="text" class="form-control" name="admission" value="<?php echo $row['admission'];?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Annual Charges</label>
                    <div class="col-sm-5 controls">
                        <input type="text" class="form-control" name="annual" value="<?php echo $row['annual'];?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Lab Charges</label>
                    <div class="col-sm-5 controls">
                        <input type="text" class="form-control" name="lab" value="<?php echo $row['lab'];?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-5">
                        <button type="submit" class="btn btn-info">Edit fee</button>
                    </div>
                 </div>
        		</form>
            </div>
        </div>
    </div>
</div>

<?php
endforeach;
?>




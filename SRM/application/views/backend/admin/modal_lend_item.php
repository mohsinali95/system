<?php 
$edit_data		=	$this->db->get_where('items' , array('item_id' => $param2) )->result_array();
foreach ( $edit_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					Lend Item : <?= $row['name']; ?>
            	</div>
            </div>
			<div class="panel-body">
                <?php echo form_open(base_url() . 'index.php?admin/item_inventory/lend/'.$row['item_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Quantity</label>
                    <div class="col-sm-4 controls">
                        <input type="text" class="form-control" name="quantity" />
                    </div>
                    <div class="col-sm-2 control-label">
                        Out of <?= $row['quantity'] ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Lended to</label>
                    <div class="col-sm-5">
                        <select name="lended_to" class="form-control" style="width:100%;">
                                <option value="-">Select a type</option>
                                <option value="teacher">Teacher</option>
                                <option value="student">Student</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Date</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control datepicker" name="date_of_purchase" value="" data-start-view="2">
                    </div> 
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Amount Recieved: </label>
                    <div class="col-sm-5 controls">
                        <input type="text" class="form-control" name="price"/>
                    </div>
                </div>
                <input type="hidden" name="old_qunatity" value="<?= $row['quantity'];  ?>">
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-5">
                        <button type="submit" class="btn btn-info">Edit Item Information</button>
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




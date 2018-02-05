<div class="row">
	<div class="col-md-12">
    
    	<!------CONTROL TABS START------>
		<ul class="nav nav-tabs bordered">
			<li class="active">
            	<a href="#list" data-toggle="tab"><i class="entypo-menu"></i> 
					Items List
                    </a>
            </li>
			<li>
            	<a href="#add" data-toggle="tab"><i class="entypo-plus-circled"></i>
					Add Item
                </a>
            </li>
		</ul>
    	<!------CONTROL TABS END------>
		<div class="tab-content">            
            <!----TABLE LISTING STARTS-->
            <div class="tab-pane box active" id="list">
				
                <table class="table table-bordered datatable" id="table_export">
                	<thead>
                		<tr>
                    		<th><div>#</div></th>
                            <th><div>Item Name</div></th>
                    		<th><div>Quantity</div></th>
                            <th><div>Item Type</div></th>
                            <th><div>Lab Charges</div></th>
                    		<th><div>Options</div></th>
						</tr>
					</thead>
                    <tbody>
                    	<?php $count = 0; foreach($items as $row):?>
                        <tr>
                            <td><?= ++$count; ?></td>
							<td><?= $row['name']; ?></td>
                            <td><?= $row['quantity']; ?></td>
							<td><?= $row['item_type']; ?></td>
                            <td><?= $row['name']; ?></td>
							<td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                    Action <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                                    
                                    <!-- EDITING LINK -->
                                    <li>
                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_edit_item/<?= $row['item_id'] ?>');">
                                            <i class="entypo-pencil"></i>
                                                <?php echo 'Add More'; ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_lend_item/<?= $row['item_id'] ?>');">
                                            <i class="entypo-up-bold"></i>
                                                Lend Item
                                        </a>
                                    </li>

                                    <li class="divider"></li>
                                    
                                    <!-- DELETION LINK -->
                                    <!-- <li>
                                        <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/fee_structure/delete/<?php $row['item_id'] ?>');">
                                            <i class="entypo-trash"></i>
                                                Lend Item
                                            </a>
                                    </li> -->
                                </ul>
                            </div>
        					</td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
			</div>
            <!----TABLE LISTING ENDS--->
            
            
			<!----CREATION FORM STARTS---->
			<div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                	<?php echo form_open(base_url() . 'index.php?admin/item_inventory/create' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                        <div class="padded">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Item Name</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Quantity</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="quantity" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Item Type</label>
                                <div class="col-sm-5">
                                    <select name="item_type" class="form-control" style="width:100%;">
                                    		<option value="-">Select a type</option>
                                            <option value="Stationary">Stationary</option>
                                            <option value="Text">Text Book</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Date of Purchase</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control datepicker" name="date_of_purchase" value="" data-start-view="2">
                                </div> 
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Total Price of Item</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="price" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"/>
                                </div>
                            </div>

                        <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-5">
                                  <button type="submit" class="btn btn-info">Add Item</button>
                              </div>
						   </div>
                    </form>                
                </div>                
			</div>
			<!----CREATION FORM ENDS-->

            
            
		</div>
	</div>
</div>


<!-----  DATA TABLE EXPORT CONFIGURATIONS ---->                      
<script type="text/javascript">

	jQuery(document).ready(function($)
	{
		

		var datatable = $("#table_export").dataTable();
		
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});
		
</script>
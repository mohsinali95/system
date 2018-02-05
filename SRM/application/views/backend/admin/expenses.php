<div class="row">
	<div class="col-md-12">
    
    	<!------CONTROL TABS START------>
		<ul class="nav nav-tabs bordered">
			<li class="active">
            	<a href="#list" data-toggle="tab"><i class="entypo-menu"></i> 
					View Expenses
                    </a>
            </li>

			<li>
            	<a href="#add" data-toggle="tab"><i class="entypo-plus-circled"></i>
					Record Expenses
                </a>
            </li>
		</ul>
    	<!------CONTROL TABS END------>
		<div class="tab-content">            
            <!----TABLE LISTING STARTS-->
            <div class="tab-pane box active" id="list">

            <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered">
                <thead>
                    <tr>
                        <th><?php echo get_phrase('select_date');?></th>
                        <th><?php echo get_phrase('select_month');?></th>
                        <th><?php echo get_phrase('select_year');?></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <form method="post" action="<?php echo base_url();?>index.php?admin/expsense_selector" class="form">
                        <tr class="gradeA">
                            <td>
                                <select name="date" class="form-control">
                                    <?php  for($i=1;$i<=31;$i++):?>
                                        <option value="<?php $s= ''; if($i<10){ $s='0'.$i; }else{ $s=$i; } echo $s; ?>" 
                                            <?php if(isset($date) && $date==$i)echo 'selected="selected"';?>>
                                                <?php echo $s;?>
                                                    </option>
                                    <?php endfor;?>
                                </select>
                            </td>
                            <td>
                                <select name="month" class="form-control">
                                    <?php 
                                    for($i=1;$i<=12;$i++):
                                        if($i==1)$m='january';
                                        else if($i==2)$m='february';
                                        else if($i==3)$m='march';
                                        else if($i==4)$m='april';
                                        else if($i==5)$m='may';
                                        else if($i==6)$m='june';
                                        else if($i==7)$m='july';
                                        else if($i==8)$m='august';
                                        else if($i==9)$m='september';
                                        else if($i==10)$m='october';
                                        else if($i==11)$m='november';
                                        else if($i==12)$m='december';
                                    ?>
                                        <option value="<?php $s= ''; if($i<10){ $s='0'.$i; }else{ $s=$i; } echo $s;?>"
                                            <?php if($month==$s)echo 'selected="selected"';?>>
                                                <?php echo $m;?>
                                                    </option>
                                    <?php 
                                    endfor;
                                    ?>
                                </select>
                            </td>
                            <td>
                                <select name="year" class="form-control">
                                    <?php for($i=2030;$i>=2010;$i--):?>
                                        <option value="<?php echo $i;?>"
                                            <?php if(isset($year) && $year==$i)echo 'selected="selected"';?>>
                                                <?php echo $i;?>
                                                    </option>
                                    <?php endfor;?>
                                </select>
                            </td>
                            <td align="center"><input type="submit" value="View Expenses" class="btn btn-info"/></td>
                        </tr>
                    </form>
                </tbody>
            </table>
    <?php if($date != '' && $month != '' && $year != ''){ ?>
                <h3>OutFlows</h3>
                <table class="table table-bordered datatable" id="table_export">
                	<thead>
                		<tr>
                            <th><div>Item</div></th>
                            <th><div>Price</div></th>
                            <th><div>Quantity</div></th>
                    		<th><div>Options</div></th>
						</tr>
					</thead>
                    <tbody>
                    	<?php foreach($expenses as $row):?>
                        <tr>
                            <td><?= $this->db->get_where('items',['item_id' => $row['item_id']])->row()->name; ?></td>
                            <td><?= $row['price']; ?></td>
                            <td><?= $row['quantity']; ?></td>
							<td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                    Action <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                                    
                                    <!-- EDITING LINK -->
                                    <li>
                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_edit_fee/>');">
                                            <i class="entypo-pencil"></i>
                                                <?php echo get_phrase('edit');?>
                                            </a>
                                                    </li>
                                    <li class="divider"></li>
                                    
                                    <!-- DELETION LINK -->
                                    <!-- <li>
                                        <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/fee_structure/delete/<?php $row['fee_id'] ?>');">
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
                Today's Total: <?php
                    $query = $this->db->select_sum('price')->get_where('expenses', ['date_of_purchase' => $full_date ])->row()->price; 
                    if($query != ''){
                        echo $query;
                    }else{
                        echo '0';
                    }
                    ?>
                <h3>InFlows</h3>
                <table class="table table-bordered datatable" id="table_export1">
                	<thead>
                		<tr>
                            <th><div>Item</div></th>
                            <th><div>Price</div></th>
                            <th><div>Quantity</div></th>
                    		<th><div>Options</div></th>
						</tr>
					</thead>
                    <tbody>
                    	<?php foreach($expenses as $row):?>
                        <tr>
                            <td><?= $this->db->get_where('items',['item_id' => $row['item_id']])->row()->name; ?></td>
                            <td><?= $row['price']; ?></td>
                            <td><?= $row['quantity']; ?></td>
							<td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                    Action <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                                    
                                    <!-- EDITING LINK -->
                                    <li>
                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_edit_fee/>');">
                                            <i class="entypo-pencil"></i>
                                                <?php echo get_phrase('edit');?>
                                            </a>
                                                    </li>
                                    <li class="divider"></li>
                                    
                                    <!-- DELETION LINK -->
                                    <!-- <li>
                                        <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/fee_structure/delete/<?php $row['fee_id'] ?>');">
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
    <?php }?>
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
        var datatable = $("#table_export1").dataTable();
		
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});
		
</script>
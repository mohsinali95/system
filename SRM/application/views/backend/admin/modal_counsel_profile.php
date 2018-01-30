<?php
$counsel_info	=	$this->crud_model->get_counsel_info($param2);
foreach($counsel_info as $row):?>

<div class="profile-env">
	
	<header class="row">
		
	
		<div class="col-sm-9">
			
			<ul class="profile-info-sections">
				<li style="padding:0px; margin:0px;">
					<div class="profile-name">
							<h3><?php echo $row['name'];?></h3>
					</div>
				</li>
			</ul>
			
		</div>
		
		
	</header>
	
	<section class="profile-info-tabs">
		
		<div class="row">
			
			<div class="">
            		<br>
                <table class="table table-bordered">

                    <?php if($row['student_id'] != ''):?>
                    <tr>
                        <td>Id</td>
                        <td><b><?php echo $row['student_id'];?></b></td>
                    </tr>
                    <?php endif;?>      

                
                    <?php if($row['problem'] != ''):?>
                    <tr>
                        <td>Problem</td>
                        <td><b><?php echo $row['problem'];?></b></td>
                    </tr>
                    <?php endif;?>
                
                    <?php if($row['goal'] != ''):?>
                    <tr>
                        <td>Goal</td>
                        <td><b><?php echo $row['goal'];?></b></td>
                    </tr>
                    <?php endif;?>
                
                
                    <?php if($row['action'] != ''):?>
                    <tr>
                        <td>Action</td>
                        <td><b><?php echo $row['action'];?></b></td>
                    </tr>
                    <?php endif;?>
                
                                        
                </table>
			</div>
		</div>		
	</section>
	
	
	
</div>


<?php endforeach;?>
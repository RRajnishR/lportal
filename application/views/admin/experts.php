<section class="content">
<!-- Main row -->
<div class="row">
   <div class="col-md-12">
		<section class="panel">
					<?php echo $this->session->flashdata('verify_msg'); ?>	
		  <header class="panel-heading">Employers</header>							
		<div class="panel-body table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
					  <th>#</th>
					  <th>Name</th>					  
					  <th>Gender</th>					  
					  <th>Email</th>				  
					  <th>Mobile</th>
					  <th>Social</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$count = 1;
					foreach($experts as $expert)
					{
						$isSocial = ($expert->social_login == 1) ? 'yes' : '';
					?>
					<tr>
					  <td><?php echo $count;?></td>
					  <td><?php echo $expert->first_name .' '. $expert->last_name;?></td>
					  <td><?php echo $expert->gender;?></td>
					  <td><?php echo $expert->email;?></td>						  
					  <td><?php echo $expert->mobile;?></td>
					  <td><?php echo $isSocial;?></td>
					  <td>	
						  <a href="#" data-toggle="modal" data-target="#expview" onclick="expertDetails(<?php echo $expert->id;?>);">
								<span class="glyphicon glyphicon-eye-open" title="view details"></span>
						  </a>
						   &nbsp;&nbsp; &nbsp;&nbsp;
							<?php 
							if($expert->status == 1)
							{
							?>
								<a href="<?php echo base_url();?>ado/Admin/changeStatus/<?php echo $expert->id;?>/0/lang_expert/experts" >
									<span class="label label-success" title="change status (delete this)">&nbsp;</span>
								</a>
							<?php
							}
							else
							{
							?>
								<a href="<?php echo base_url();?>ado/Admin/changeStatus/<?php echo $expert->id;?>/1/lang_expert/experts" >
									<span class="label label-danger" title="change status (undelete this)">&nbsp;</span>
								</a>
							<?php
							}
						?>								
					  </td>
					</tr>
					<?php
					}
					?>
				</tbody>
			  </table>
		  </div>
	    </section>
	</div><!--end col-6 -->
</div>	
</section><!-- /.content -->

<div class="modal fade" id="expview" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Expert Details</h4>
        </div>
        <div class="modal-body">
			<table id="exp_dt" class="table table-hover"></table>			
        </div>
      </div>
    </div>
</div>
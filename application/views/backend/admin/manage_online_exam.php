<div class="col-sm-12">
	<div class="panel panel-info">                     
		<div class="panel-body table-responsive">
			<i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('manage_online_exam');?>
			<hr>					
       <table id="example23" class="display nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th><div><?php echo get_phrase('Title');?></div></th>
                    <th><div><?php echo get_phrase('Materi');?></div></th>
                    <th><div><?php echo get_phrase('Start Date');?></div></th>
                    <th><div><?php echo get_phrase('End Date');?></div></th>
                    <th><div><?php echo get_phrase('Duration');?></div></th>
					<th><div><?php echo get_phrase('Minimum Score');?></div></th>
                    <th><div><?php echo get_phrase('options');?></div></th>
                </tr>
       </thead>
				<tbody>
					<?php foreach($online_exams as $key => $row):?>
					<tr>
						<td><?php echo $row['title'];?></td>
						<td>
							<?php
								echo $this->db->get_where('program', array('program_id' => $row['program_id']))->row()->name;
							 ?>
						</td>
						<td><?php echo $row['start_date'];?></td>
						<td><?php echo $row['end_date'];?></td>
						<td><?php echo $row['duration'];?></td>
						<td><?php echo $row['minimum_percentage'];?></td>
						<td style="text-align: center;">
				 
					 <a href="<?php echo site_url('admin/manage_online_exam_question/'.$row['online_exam_id']); ?>" 
					 class="btn btn-sm btn-rounded btn-info" style="color:white">add questions</a>
						   
					<a href="<?php echo site_url('admin/update_online_exam/'.$row['online_exam_id']); ?>" class="btn btn-xs btn-circle btn-success" style="color:white">
						<i class="fa fa-pencil"></i>                
					</a>
						 
					<!-- DELETION LINK -->
					<a href="#" onclick="confirm_modal('<?php echo site_url('admin/manage_online_exam/delete/'.$row['online_exam_id']);?>');" 
					class="btn btn-xs btn-circle btn-danger" style="color:white">
						  <i class="fa fa-times"></i>
					</a>
						</td>
					</tr>
					<?php endforeach;?>
				</tbody>
        	</table>
    	</div>
	</div>
</div>


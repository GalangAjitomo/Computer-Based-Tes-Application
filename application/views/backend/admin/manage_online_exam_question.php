    <?php $online_exam_details = $this->db->get_where('online_exam', array('online_exam_id' => $online_exam_id))->row_array();
          $added_question_info = $this->db->get_where('question_bank', array('online_exam_id' => $online_exam_id))->result_array();
    ?>
<div class="row">
	<div class="col-sm-12">		
		<div class="panel panel-info">
		<div class="panel-body table-responsive">
            <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('question_list');?>&nbsp;&nbsp;
			<a href="<?php echo base_url();?>admin/manage_online_exam"><button type="button"  class="btn btn-defualt btn-xs pull-right"><i class="fa fa-mail-reply-all"></i>
			&nbsp;back</button></a>
                                
<div class="row">		
			  <div class="col-sm-6">
				  	<div class="panel panel-info">
					 <div class="panel-body table-responsive">
                           <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('question_list');?>
                        <hr>
								
              <table class="table">
                    <thead>
                        <tr>
                            <th style="text-align: center;" width="5%"><div>#</div></th>
                            <th style="text-align: center;"><div><?php echo get_phrase('type');?></div></th>
                            <th style="text-align: center;" width="60%"><div><?php echo get_phrase('question');?></div></th>
                            <th style="text-align: center;" width="10%"><div><?php echo get_phrase('mark');?></div></th>
                            <th style="text-align: center;"><div><?php echo get_phrase('options');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php if(sizeof($added_question_info) == 0) : ?>
                            <tr>
                                <td colspan="4"><?php echo get_phrase('no_question_has_been_added_yet'); ?></td>
                            </tr>

                            <?php 
                            elseif(sizeof($added_question_info) > 0 ) : 
                                $i = 1;
                                foreach($added_question_info as $key => $added_question) : ?>

                
                                <tr>
                                    <td style="text-align: center;"><?php echo $i++;?></td>
                                    <td><?php echo get_phrase($added_question['type']);?></td>
                                    <?php if($added_question['type'] == 'fill_in_the_blanks') : ?>
                                        <td><?php echo str_replace('^', '___', $added_question['question_title']);?></td>
                                    <?php else:?>
                                        <td><?php echo $added_question['question_title'];?></td>
                                    <?php endif;?>

                                       
                                    
                                    <td style="text-align: center;"><?php echo $added_question['mark'];?></td>

                                    <td style="text-align: center;">
                                        <!-- <a href="<?php echo site_url('admin/update_online_exam_question/'.$added_question['question_bank_id']); ?>" class = "btn btn-primary btn-xs" data-toggle="tooltip" title="<?php echo get_phrase('edit'); ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a> -->
                                        <a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/update_online_exam_question/'.$added_question['question_bank_id']);?>')" class="btn btn-circle btn-info btn-xs" data-toggle="tooltip" title="<?php echo get_phrase('edit'); ?>"><i class="fa fa-pencil" aria-hidden="true" style="color:white"></i></a>
                                        <a href = "#" onclick="confirm_modal('<?php echo site_url('admin/delete_question_from_online_exam/'.$added_question['question_bank_id']);?>');" class = "btn btn-circle btn-danger btn-xs"  data-toggle="tooltip" title="<?php echo get_phrase('delete'); ?>" style="color:white"><i class="fa fa-times" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                                <?php endif;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

                    <div class="col-sm-6">
				  	<div class="panel panel-info">
					<div class="panel-body table-responsive">
                            <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('exam_details');?>
                                <hr>
								
               <table class="table">
                    <tbody>
                        <tr>
                            <td><b><?php echo get_phrase('exam_title');?></b></td>
                            <td><?php echo $online_exam_details['title'];?></td>
                            <td><b><?php echo get_phrase('passing_%');?></b></td>
                            <td><?php echo $online_exam_details['minimum_percentage'].'%';?></td>
                        </tr>
                        <tr>
                            <td><b><?php echo get_phrase('Start Date');?></b></td>
                            <td><?php echo date('Y-m-d',strtotime($online_exam_details['start_date']));?></td>
                            <td><b><?php echo get_phrase('End Date');?></b></td>
                            <td><?php echo date('Y-m-d',strtotime($online_exam_details['end_date']));?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
		
		
		<div class="panel panel-info">
		<div class="panel-body table-responsive">
                             <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('add_question');?>
                                <hr>
								
                <div id="multiple_choice" ><?php include 'online_exam_add_multiple_choice.php'; ?></div>

            </div>
        </div>
			  
    </div>
</div>

	
	    </div>
    </div>
</div>
</div>

<script type="text/javascript">

    $(document).ready(function() 
	{
        $('#print_options').hide();
        $('#questions_print').on('click', function() 
		{
            $('#print_options').fadeIn();
        });
		});
        
</script>
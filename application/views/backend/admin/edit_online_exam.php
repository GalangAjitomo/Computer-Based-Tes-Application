<?php $online_exam = $this->db->get_where('online_exam', array('online_exam_id' => $online_exam_id))->row_array();
?>
<div class="col-sm-12">
    <div class="panel panel-info">
        <div class="panel-body table-responsive">
          <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('exam_settings'); ?>
          <hr>
        <?php echo form_open(site_url('admin/manage_online_exam/edit') , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
            <input value="<?php echo $online_exam['online_exam_id'];?>" type="hidden" name="online_exam_id">
                <div class="form-group">
                    <label class="col-md-12" for="example-text"><?php echo get_phrase('exam_title');?></label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" value="<?php echo $online_exam['title'];?>" name="title"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12" for="example-text"><?php echo get_phrase('Program');?></label>
                    <div class="col-sm-12">
                        <select name="program_id" id = "program_id" class="form-control selectboxit" required>
                            <option value=""><?php echo get_phrase('Select Program');?></option>
                            <?php $programs = $this->db->get('program')->result_array();
                                foreach($programs as $row): ?>
                                <option value="<?php echo $row['program_id'];?>"<?php if($row['program_id'] == $online_exam['program_id']) echo 'selected="selected"' ;?>><?php echo $row['name'];?></option>
                            <?php
                            endforeach;
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12" for="example-text"><?php echo get_phrase('Start Date');?></label>
                    <div class="col-sm-12">
                        <input class="form-control m-r-10" name="start_date" type="date" value="<?php echo  date('Y-m-d', strtotime($online_exam['start_date'])); ?>" id="example-date-input" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12" for="example-text"><?php echo get_phrase('End Date');?></label>
                    <div class="col-sm-12">
                        <input class="form-control m-r-10" name="end_date" type="date" value="<?php echo date('Y-m-d', strtotime($online_exam['end_date'])); ?>" id="example-date-input" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12" for="example-text"><?php echo get_phrase('Duration in Minutes');?></label>
                        <div class="col-sm-12">
                            <input type="number" name="duration" value="<?php echo $online_exam['duration'];?>" class="form-control" placeholder="Write duration exam here"  required>
                        </div>
                    <div class="col-sm-3" style="text-align: left; line-height: 30px;"> </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12" for="example-text"><?php echo get_phrase('exam_percentage');?></label>
                        <div class="col-sm-12">
                            <input type="number" value="<?php echo $online_exam['minimum_percentage'];?>" name="minimum_percentage" class="form-control" placeholder="Write minimum percentage score here"  required>
                        </div>
                    <div class="col-sm-3" style="text-align: left; line-height: 30px;"> <span style="color:#FF0000">Write minimum percentage</span></div>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-info btn-rounded btn-block btn-sm"><i class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('add_exam'); ?></button>
                </div>
            </form>                
        </div> 
    </div>
</div>

<script type="text/javascript">
    var class_id = '';
    var starting_hour = '';
    var starting_minute = '';
    var ending_hour = '';
    var ending_minute = '';

    jQuery(document).ready(function($) {
        $('#add_class_routine').attr('disabled','disabled')
        });
    
        function get_class_section_subject(class_id) {
            $.ajax({
            url: '<?php echo base_url();?>admin/get_class_section_subject/' + class_id ,
            success: function(response){
            jQuery('#section_subject_selection_holder').html(response);
            }
            });
        }
        function check_validation(){
            console.log('class_id: '+class_id+' starting_hour:'+starting_hour+' starting_minute: '+starting_minute+' ending_hour: '+ending_hour+' ending_minute: '+ending_minute);
            if(class_id !== '' && starting_hour !== '' && starting_minute  !== '' && ending_hour  !== '' && ending_minute !== ''){
            $('#add_class_routine').removeAttr('disabled');
            }    
            }
            $('#class_id').change(function() {
            class_id = $('#class_id').val();
            check_validation();
            });
            $('#starting_hour').change(function() {
            starting_hour = $('#starting_hour').val();
            check_validation();
            });
            $('#starting_minute').change(function() {
            starting_minute = $('#starting_minute').val();
            check_validation();
            });
            $('#ending_hour').change(function() {
            ending_hour = $('#ending_hour').val();
            check_validation();
            });
            $('#ending_minute').change(function() {
            ending_minute = $('#ending_minute').val();
            check_validation();
            });
    </script>
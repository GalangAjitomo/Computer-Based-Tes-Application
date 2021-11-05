
<div class="col-sm-12">
    <div class="panel panel-info">
        <div class="panel-body table-responsive">
          <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('exam_settings'); ?>
          <hr>
        <?php echo form_open(site_url('admin/manage_online_exam/create') , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>

                <div class="form-group">
                    <label class="col-md-12" for="example-text"><?php echo get_phrase('Title');?></label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="title" required/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12" for="example-text"><?php echo get_phrase('Program');?></label>
                    <div class="col-sm-12">
                        <select name="program_id" id = "program_id" class="form-control selectboxit" required>
                            <option value=""><?php echo get_phrase('Select Program');?></option>
                            <?php $program = $this->db->get('program')->result_array();
                                foreach($program as $row): ?>
                                <option value="<?php echo $row['program_id'];?>"><?php echo $row['name'];?></option>
                            <?php
                            endforeach;
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12" for="example-text"><?php echo get_phrase('Start Date');?></label>
                    <div class="col-sm-12">
                        <input class="form-control m-r-10" name="start_date" type="date" value="<?php echo date('Y-m-d') ?>" id="example-date-input" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12" for="example-text"><?php echo get_phrase('End Date');?></label>
                    <div class="col-sm-12">
                        <input class="form-control m-r-10" name="end_date" type="date" value="<?php echo date('Y-m-d') ?>" id="example-date-input" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12" for="example-text"><?php echo get_phrase('Duration in Minutes');?></label>
                        <div class="col-sm-12">
                            <input type="number" name="duration" class="form-control" placeholder="Write duration exam here"  required>
                        </div>
                    <div class="col-sm-3" style="text-align: left; line-height: 30px;"> </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12" for="example-text"><?php echo get_phrase('exam_percentage');?></label>
                        <div class="col-sm-12">
                            <input type="number" name="minimum_percentage" class="form-control" placeholder="Write minimum percentage score here"  required>
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

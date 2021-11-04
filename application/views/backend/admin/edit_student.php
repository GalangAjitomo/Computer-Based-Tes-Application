<div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                <?php $select = $this->db->get_where('student', array('student_id'=> $param2))->result_array();
                                        foreach ($select as $key => $student) : ?>
                                    <?php echo form_open(base_url(). 'admin/student/update/'. $param2, array('class' => 'form-horizontal form-groups-bordered', 'enctype'=> 'multipart/form-data'));?>  
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('student Name');?></label>
                                            <input type="text" class="form-control" name="name" value="<?php echo $student['name'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('student Email');?></label>
                                            <input type="email" class="form-control" name="email" value="<?php echo $student['email'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('student Phone');?></label>
                                            <input type="text" class="form-control" name="phone" value="<?php echo $student['phone'];?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('student Gender');?></label>
                                            <input type="text" class="form-control" name="sex" value="<?php echo $student['sex'];?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('student Address');?></label>
                                            <input type="text" class="form-control" name="address" value="<?php echo $student['address'];?>">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-success btn-rounded btn-sm btn-block"><?php echo get_phrase('Save');?></button>
                                   <?php echo form_close();?>
                                <?php endforeach;?>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script type="text/javascript">

function get_class_sections (class_id){

    $.ajax({
        url: '<?php echo base_url();?>admin/get_class_sections/' + class_id ,
        success: function(response){
            jQuery('#section_holder').html(response);
            }
        });

}

</script>
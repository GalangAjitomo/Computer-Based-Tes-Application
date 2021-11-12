<div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                <?php $select = $this->db->get_where('question_type', array('question_type_id'=> $param2))->result_array();
                                        foreach ($select as $key => $question_type) : ?>
                                    <?php echo form_open(base_url(). 'admin/question_type/update/'. $param2, array('class' => 'form-horizontal form-groups-bordered', 'enctype'=> 'multipart/form-data'));?>  
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('Name');?></label>
                                            <input type="text" class="form-control" name="name" value="<?php echo $question_type['name'];?>">
                                        </div>
                                        <button type="submit" class="btn btn-success btn-rounded btn-sm btn-block"><?php echo get_phrase('Save');?></button>
                                   <?php echo form_close();?>
                                <?php endforeach;?>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
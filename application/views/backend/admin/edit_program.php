<div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                <?php $select = $this->db->get_where('program', array('program_id'=> $param2))->result_array();
                                        foreach ($select as $key => $program) : ?>
                                    <?php echo form_open(base_url(). 'admin/program/update/'. $param2, array('class' => 'form-horizontal form-groups-bordered', 'enctype'=> 'multipart/form-data'));?>  
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('Program Name');?></label>
                                            <input type="text" class="form-control" name="name" value="<?php echo $program['name'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('Category');?></label>
                                            <input type="text" class="form-control" name="category" value="<?php echo $program['category'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('Price');?></label>
                                            <input type="text" class="form-control" name="price" value="<?php echo $program['price'];?>">
                                        </div>
                                        <button type="submit" class="btn btn-success btn-rounded btn-sm btn-block"><?php echo get_phrase('Save');?></button>
                                   <?php echo form_close();?>
                                <?php endforeach;?>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
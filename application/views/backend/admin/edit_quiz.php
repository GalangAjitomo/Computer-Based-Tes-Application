<div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                <?php $select = $this->db->get_where('quiz', array('quiz_id'=> $param2))->result_array();
                                        foreach ($select as $key => $quiz) : ?>
                                    <?php echo form_open(base_url(). 'admin/quiz/update/'. $param2, array('class' => 'form-horizontal form-groups-bordered', 'enctype'=> 'multipart/form-data'));?>  
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('quiz Name');?></label>
                                            <input type="text" class="form-control" name="name" value="<?php echo $quiz['name'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('Submateri');?></label>
                                            <select name="submateri_id" class="form-control">
                                                <option value="">Select Submateri</option>
                                                
                                                <?php $select_submateris = $this->db->get('submateri')->result_array();
                                                        foreach($select_submateris as $key => $submateri) : ?>
                                                <option value="<?php echo $submateri['submateri_id'];?>"
                                                <?php if($quiz['submateri_id'] == $submateri['submateri_id']) echo 'selected="selected"' ;?>><?php echo $submateri['name'];?></option>
                                                <?php endforeach;?>

                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-rounded btn-sm btn-block"><?php echo get_phrase('Save');?></button>
                                   <?php echo form_close();?>
                                <?php endforeach;?>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
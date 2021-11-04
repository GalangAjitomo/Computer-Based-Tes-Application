<div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                <?php $select = $this->db->get_where('submateri', array('submateri_id'=> $param2))->result_array();
                                        foreach ($select as $key => $submateri) : ?>
                                    <?php echo form_open(base_url(). 'admin/submateri/update/'. $param2, array('class' => 'form-horizontal form-groups-bordered', 'enctype'=> 'multipart/form-data'));?>  
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('submateri Name');?></label>
                                            <input type="text" class="form-control" name="name" value="<?php echo $submateri['name'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('Materi');?></label>
                                            <select name="materi_id" class="form-control">
                                                <option value="">Select Materi</option>
                                                
                                                <?php $select_materis = $this->db->get('materi')->result_array();
                                                        foreach($select_materis as $key => $materi) : ?>
                                                <option value="<?php echo $materi['materi_id'];?>"
                                                <?php if($submateri['materi_id'] == $materi['materi_id']) echo 'selected="selected"' ;?>><?php echo $materi['name'];?></option>
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
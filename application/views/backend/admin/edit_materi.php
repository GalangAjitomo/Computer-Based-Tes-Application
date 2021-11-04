<div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                <?php $select = $this->db->get_where('materi', array('materi_id'=> $param2))->result_array();
                                        foreach ($select as $key => $materi) : ?>
                                    <?php echo form_open(base_url(). 'admin/materi/update/'. $param2, array('class' => 'form-horizontal form-groups-bordered', 'enctype'=> 'multipart/form-data'));?>  
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('materi Name');?></label>
                                            <input type="text" class="form-control" name="name" value="<?php echo $materi['name'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('Program');?></label>
                                            <select name="program_id" class="form-control">
                                                <option value="">Select Program</option>
                                                
                                                <?php $select_programs = $this->db->get('program')->result_array();
                                                        foreach($select_programs as $key => $program) : ?>
                                                <option value="<?php echo $program['program_id'];?>"
                                                <?php if($materi['program_id'] == $program['program_id']) echo 'selected="selected"' ;?>><?php echo $program['name'];?></option>
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
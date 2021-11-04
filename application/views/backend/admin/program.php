<div class="row">
                    <div class="col-md-5">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <?php echo form_open(base_url(). 'admin/program/create/', array('class' => 'form-horizontal form-groups-bordered', 'enctype'=> 'multipart/form-data'));?>  
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('Program Name');?></label>
                                            <input type="text" class="form-control" name="name" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('Category');?></label>
                                            <select name="category" id="category" class="form-control">
                                                <option value="">Choose Category</option>
                                                <option value="Try Out">Try Out</option>
                                                <option value="Kelas Online">Kelas Online</option>
                                                <option value="Free Trial">Free Trial</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('Price');?></label>
                                            <input type="text" class="form-control" name="price" value="">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-success btn-rounded btn-sm btn-block"><?php echo get_phrase('Save');?></button>
                                   <?php echo form_close();?>
                                   
                                </div>
                            </div>
                        </div>
                    </div>



    <div class="col-sm-7">
		<div class="panel panel-info">
            <div class="panel-body table-responsive">
                <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('List Programs');?>
                <hr>
 				<table id="example23" class="display nowrap" cellspacing="0" width="100%">
                	<thead>
                		<tr>
                    		<th><div><?php echo get_phrase('Name');?></div></th>
                    		<th><div><?php echo get_phrase('Category');?></div></th>
                    		<th><div><?php echo get_phrase('Price');?></div></th>
						</tr>
					</thead>
                    <tbody>
    
                 <?php $select_all_programs = $this->program_model->selectprogram();
                        foreach($select_all_programs as $key => $program) : ?> 
                        <tr>
							<td><?php echo $program['name'];?></td>
							<td><?php echo $program['category'];?></td>
							<td><?php echo $program['price'];?></td>
							<td>
                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/edit_program/<?php echo $program['program_id'];?>')"><button class="btn btn-info btn-rounded btn-sm"><?php echo get_phrase('Edit');?></button></a>
                            
                            <a href="#" onclick="confirm_modal('<?php echo base_url();?>admin/program/delete/<?php echo $program['program_id'];?>')"><button class="btn btn-danger btn-rounded btn-sm"><?php echo get_phrase('Delete');?></button></a>                            </td>
                        </tr>
                        <?php endforeach;?>
                  
                    </tbody>
                </table>
			</div>
		</div>
	</div>

</div>
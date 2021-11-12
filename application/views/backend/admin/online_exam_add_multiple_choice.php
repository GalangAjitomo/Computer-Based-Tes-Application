<?php echo form_open(site_url('admin/manage_online_exam_question/'.$online_exam_id.'/add/multiple_choice') , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>

<input type="hidden" name="type" value="<?php echo $question_type;?>">

<div class="form-group">
	<label class="col-md-12" for="example-text"><?php echo get_phrase('Question Category');?></label>
    <div class="col-sm-12">
        <select class="form-control" name="category" id="category">
            <option value="">Select Category</option>
                                                
            <?php $select_questions = $this->question_type_model->selectquestion_type();
            foreach($select_questions as $key => $question) : ?>
                <option value="<?php echo $question['name'];?>"><?php echo $question['name'];?></option>
            <?php endforeach;?>
        </select>
    </div>
</div>

<div class="form-group">
    <label class="col-md-12" for="example-text"><?php echo get_phrase('question_title');?></label>
    <div class="col-sm-12">
        <textarea onkeyup="changeTheBlankColor()" name="question_title" class="form-control" id="question_title" rows="8" cols="80" required></textarea>
    </div>
</div>

<div class="form-group">
    <label class="col-md-12" for="example-text">Option A</label>

    <div class="col-sm-12">
        <div class="input-group">
        <input type="text" class="form-control" name = "options[]" id="option_<?php echo $i; ?>" placeholder="" required>
        <div class="input-group-addon"><input type = 'checkbox' name = "correct_answers" value = "1"></div>
        </div>
    </div>
</div>

<div class="form-group">
    <label class="col-md-12" for="example-text">Option B</label>

    <div class="col-sm-12">
        <div class="input-group">
        <input type="text" class="form-control" name = "options[]" id="option_<?php echo $i; ?>" placeholder="" required>
        <div class="input-group-addon"><input type = 'checkbox' name = "correct_answers" value = "2"></div>
        </div>
    </div>
</div>
<div class="form-group">
    <label class="col-md-12" for="example-text">Option C</label>

    <div class="col-sm-12">
        <div class="input-group">
        <input type="text" class="form-control" name = "options[]" id="option_<?php echo $i; ?>" placeholder="" required>
        <div class="input-group-addon"><input type = 'checkbox' name = "correct_answers" value = "3"></div>
        </div>
    </div>
</div>
<div class="form-group">
    <label class="col-md-12" for="example-text">Option D</label>

    <div class="col-sm-12">
        <div class="input-group">
        <input type="text" class="form-control" name = "options[]" id="option_<?php echo $i; ?>" placeholder="" required>
        <div class="input-group-addon"><input type = 'checkbox' name = "correct_answers" value = "4"></div>
        </div>
    </div>
</div>
<div class="form-group">
    <label class="col-md-12" for="example-text">Option E</label>

    <div class="col-sm-12">
        <div class="input-group">
        <input type="text" class="form-control" name = "options[]" id="option_<?php echo $i; ?>" placeholder="" required>
        <div class="input-group-addon"><input type = 'checkbox' name = "correct_answers" value = "5"></div>
        </div>
    </div>
</div>

<div class="form-group">
    <label class="col-md-12" for="example-text"><?php echo get_phrase('Explanation');?></label>
   <div class="col-sm-12">
        <textarea onkeyup="changeTheBlankColor()" name="explanation" class="form-control" id="explanation" rows="8" cols="80" required></textarea>
    </div>
</div>

<div class="form-group">
    <label class="col-md-12" for="example-text"><?php echo get_phrase('Reference');?></label>
   <div class="col-sm-12">
        <textarea onkeyup="changeTheBlankColor()" name="reference" class="form-control" id="reference" rows="2" cols="80" required></textarea>
    </div>
</div>

<div class="form-group">
    <label class="col-md-12" for="example-text"><?php echo get_phrase('Keywords');?></label>
   <div class="col-sm-12">
        <textarea onkeyup="changeTheBlankColor()" name="keywords" class="form-control" id="keywords" required></textarea>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-12">
        <button type="submit" class="btn btn-rounded btn-info btn-block"><?php echo get_phrase('add_question');?></button>
    </div>
</div>
<?php echo form_close();?>

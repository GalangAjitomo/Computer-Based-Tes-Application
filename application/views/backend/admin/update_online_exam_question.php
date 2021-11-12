<?php
    $question_details = $this->db->get_where('question_bank', array('question_bank_id' => $param2))->row_array();
    if ($question_details['options'] != "" || $question_details['options'] != null) {
        $options = json_decode($question_details['options']);
    } else {
        $options = array();
    }

    $online_exam_details = $this->db->get_where('online_exam', array('online_exam_id' => $question_details['online_exam_id']))->row_array();

    $added_question_info = $this->db->get_where('question_bank', array('online_exam_id' => $online_exam_details['online_exam_id']))->result_array();
?>
<hr>
<div class="row">
    <div class="col-md-12">
        <?php echo form_open(site_url('admin/update_online_exam_question/'.$param2.'/update'.'/'.$question_details['online_exam_id']) , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
        <div class="form-group">
            <label class="col-md-12" for="example-text"><?php echo get_phrase('Question Category');?></label>
            <div class="col-sm-12">
                <select class="form-control" name="category" id="category">
                    <option value=""><?php echo get_phrase('Select Category');?></option>
                    <?php $select_questions = $this->db->get('question_type')->result_array();
                    foreach($select_questions as $key => $question) : ?>
                        <option value="<?php echo $question['name'];?>" 
                        <?php if($question['name'] == $question_details['category']) echo 'selected="selected"' ;?>><?php echo $question['name'];?></option>
                    <?php endforeach;?>
                </select>
            </div>
        </div>

        <div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('question_title');?></label>
                    <div class="col-sm-12">
                    <textarea name="question_title" class = "form-control" id = "question_title" rows="8" cols="80" <?php if($question_details['type'] == 'fill_in_the_blanks') echo "onkeyup='changeTheBlankColor()'"; ?>><?php echo $question_details['question_title']; ?></textarea>
                </div>
        </div>

        <div class="form-group">
            <label class="col-md-12" for="example-text">Option A</label>

            <div class="col-sm-12">
                <div class="input-group">
                <input type="text" class="form-control" name = "options[]" id="option_<?php echo $i; ?>" placeholder="" value="<?php echo $options[0]; ?>" required>
                <div class="input-group-addon"><input type = 'checkbox' name = "correct_answers" value = "1" <?php if($question_details['correct_answers'] == "1") echo "checked"?>></div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-12" for="example-text">Option B</label>

            <div class="col-sm-12">
                <div class="input-group">
                <input type="text" class="form-control" name = "options[]" id="option_<?php echo $i; ?>" placeholder="" value="<?php echo $options[1]; ?>" required>
                <div class="input-group-addon"><input type = 'checkbox' name = "correct_answers" value = "2" <?php if($question_details['correct_answers'] == "2") echo "checked"?>></div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-12" for="example-text">Option C</label>

            <div class="col-sm-12">
                <div class="input-group">
                <input type="text" class="form-control" name = "options[]" id="option_<?php echo $i; ?>" placeholder="" value="<?php echo $options[2]; ?>" required>
                <div class="input-group-addon"><input type = 'checkbox' name = "correct_answers" value = "3" <?php if($question_details['correct_answers'] == "3") echo "checked"?>></div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-12" for="example-text">Option D</label>

            <div class="col-sm-12">
                <div class="input-group">
                <input type="text" class="form-control" name = "options[]" id="option_<?php echo $i; ?>" placeholder="" value="<?php echo $options[3]; ?>" required>
                <div class="input-group-addon"><input type = 'checkbox' name = "correct_answers" value = "4" <?php if($question_details['correct_answers'] == "4") echo "checked"?>></div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-12" for="example-text">Option E</label>

            <div class="col-sm-12">
                <div class="input-group">
                <input type="text" class="form-control" name = "options[]" id="option_<?php echo $i; ?>" placeholder="" value="<?php echo $options[4]; ?>" required>
                <div class="input-group-addon"><input type = 'checkbox' name = "correct_answers" value = "5" <?php if($question_details['correct_answers'] == "5") echo "checked"?>></div>
                </div>
            </div>
        </div>

        <div class="form-group">
    <label class="col-md-12" for="example-text"><?php echo get_phrase('Explanation');?></label>
   <div class="col-sm-12">
        <textarea onkeyup="changeTheBlankColor()" name="explanation" class="form-control" id="explanation" rows="8" cols="80" required><?php echo $question_details['explanation']; ?></textarea>
    </div>
</div>

<div class="form-group">
    <label class="col-md-12" for="example-text"><?php echo get_phrase('Reference');?></label>
   <div class="col-sm-12">
        <textarea onkeyup="changeTheBlankColor()" name="reference" class="form-control" id="reference" rows="2" cols="80" required><?php echo $question_details['reference']; ?></textarea>
    </div>
</div>

<div class="form-group">
    <label class="col-md-12" for="example-text"><?php echo get_phrase('Keywords');?></label>
   <div class="col-sm-12">
        <textarea onkeyup="changeTheBlankColor()" name="keywords" class="form-control" id="keywords" required><?php echo $question_details['keywords']; ?></textarea>
    </div>
</div>

        <div class="form-group">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-rounded btn-info btn-block btn-sm"><?php echo get_phrase('update_question');?></button>
            </div>
        </div>

        <?php echo form_close();?>
    </div>
</div>

<style media="screen">
    [type="radio"]:checked,
    [type="radio"]:not(:checked) {
        position: absolute;
        left: -9999px;
    }
    [type="radio"]:checked + label,
    [type="radio"]:not(:checked) + label
    {
        position: relative;
        padding-left: 28px;
        cursor: pointer;
        line-height: 20px;
        display: inline-block;
        color: #666;
    }
    [type="radio"]:checked + label:before,
    [type="radio"]:not(:checked) + label:before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 18px;
        height: 18px;
        border: 1px solid #ddd;
        border-radius: 100%;
        background: #fff;
    }
    [type="radio"]:checked + label:after,
    [type="radio"]:not(:checked) + label:after {
        content: '';
        width: 12px;
        height: 12px;
        background: #2aa1c0;
        position: absolute;
        top: 3px;
        left: 3px;
        border-radius: 100%;
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
    }
    [type="radio"]:not(:checked) + label:after {
        opacity: 0;
        -webkit-transform: scale(0);
        transform: scale(0);
    }
    [type="radio"]:checked + label:after {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1);
    }
    .red {
        color: #f44336;
    }
</style>
<script type="text/javascript">

    jQuery(document).ready(function($) {
        changeTheBlankColor();
    });

    function showOptions(number_of_options){
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('admin/manage_multiple_choices_options'); ?>",
            data: {number_of_options : number_of_options},
            success: function(response){
                console.log(response);
                jQuery('.options').remove();
                jQuery('#multiple_choice_question').after(response);
            }
        });
    }

    function changeTheBlankColor(){
        var alpha = ["^"];
        var res = "", cls = "";
        var t = jQuery("#question_title").val();

        for (i=0; i<t.length; i++) {
            for (j=0; j<alpha.length; j++) {
                if (t[i] == alpha[j])
                {
                    cls = "red";
                }
            }
            if (t[i] === "^") {
                res += "<span class='"+cls+"'>"+'__'+"</span>";
            }
            else{
                res += "<span class='"+cls+"'>"+t[i]+"</span>";
            }
            cls="";
        }
        jQuery("#preview").html(res);
    }
</script>
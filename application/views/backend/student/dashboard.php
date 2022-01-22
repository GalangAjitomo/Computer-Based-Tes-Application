<div class="row">
    <div class="col-md-12">
        <h2 style="font-weight: bold; text-align: left;">Daftar Ujian</h2>
    </div>
</div>
<?php $ujian = $this->db->get('online_exam')->result_array();
    $i = 1;
    
    foreach($ujian as $row): ?>

        <?php 
            echo  $warna = $ketujian = ''; 
            $duration = $active_exam = 0;

            $cekUjian = $this->db->get_where('online_exam_result', array('online_exam_id' => $row['online_exam_id'],'counter'=>0,'student_id'=> trim($this->session->userdata('login_user_id'))));
            if ($cekUjian->num_rows() == 0) {
                $warna ='btn-success';
                $ketujian = 'Mulai Ujian';
                $active_exam = 0;
                $duration = $row['duration'];
            }else{
                $warna ='btn-primary';
                $ketujian = 'Lanjutkan';
                $active_exam = 1;
                $results = $cekUjian->row_array();
                $duration = $row['duration'];
            }
        ?>
        <div class="col-lg-10">
            <div class="well well-sm">
            <h3><?php echo $row['title']; ?></h3>
                <div class="row ml-2">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-3">
                                Ujian Dibuka :
                            </div>
                            <div class="col-3">
                                Ujian Ditutup :
                            </div>
                            <div class="col-3">
                                Durasi :
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <i class="fa fa-calendar"> </i> <?php echo  date('Y-m-d H:i', strtotime($row['start_date'])); ?>
                            </div>
                            <div class="col-3">
                                <i class="fa fa-calendar"> </i> <?php echo  date('Y-m-d H:i', strtotime($row['end_date'])); ?>
                            </div>
                            <div class="col-3">
                                <i class="fa fa-clock-o"> </i> <?php echo $row['duration']; ?> menit
                            </div>
                        </div>
                    </div>
                    <div class="col">

                        <button class="btn btn-block <?php echo $warna ?> btn-rounded btnUjian" onclick="startUjian('<?php echo $row['code'];?>|<?php echo $duration ?>|<?php echo $active_exam ?>')" style="padding-top: 15px; padding-bottom: 15px;"><?php echo $ketujian ?></button>
                    </div>
                </div>
            </div>
        </div>
        <?php $i++; ?>
    <?php
    endforeach;
?>

<div class="modal fade" id="modalConfirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel1">Perhatian !</h4>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id_ujian" id="id_ujian">
                <input type="hidden" name="timer" id="timer">
                <input type="hidden" name="active_exam" id="active_exam">
                <h4 class="modal-body text_isi">Waktu akan dimulai dan tidak akan berhenti meski halaman ditutup, apa anda yakin mulai sekarang?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btnconfirm">Confirm</button>
            </div>
        </div>
    </div>
</div>
                    
<script type="text/javascript">

$( document ).ready(function() {

    $(".btnconfirm").click(function(){
        var nowtimezone = new Date();
        var nowtime = new Date().getTime();
        var $id_ujian = $('#id_ujian').val();
        var $duration = $('#timer').val();
        var $active_exam = $('#active_exam').val();
        // localStorage.setItem("timestamp",0);

        localStorage.removeItem("timestamp");
        window.location.href = '<?php echo base_url();?>student/ujian/' + $id_ujian+'/'+ $duration+'/'+nowtime;

       


    });

});


function startUjian(code){
    // alert(code);

    var str = code.split('|');
    var idujian = str[0];
    var timer = str[1];
    var active_exam = str[2];
    
    $('#id_ujian').val(idujian);
    $('#timer').val(timer);
    $('#active_exam').val(active_exam);
    if(active_exam == 1)
    {
        $(".text_isi").text('Waktu sudah dimulai dan tidak akan berhenti meski halaman ditutup, apa anda yakin melanjutkan sekarang?')
    }
    $("#modalConfirmation").modal('show');
}



</script>

<div class="row">
    <div class="col-md-12">
        <h2 style="font-weight: bold; text-align: left;">Daftar Ujian</h2>
    </div>
</div>
<?php $ujian = $this->db->get('online_exam')->result_array();
    $i = 1;
    foreach($ujian as $row): ?>
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
                        <button class="btn btn-block btn-success btn-rounded btnUjian" onclick="startUjian('<?php echo $row['code'];?>|<?php echo $row['duration'];?>')" style="padding-top: 15px; padding-bottom: 15px;">Mulai Ujian</button>
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
                <h4 class="modal-body">Waktu akan dimulai dan tidak akan berhenti meski halaman ditutup, apa anda yakin mulai sekarang?</h4>
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

        var $id_ujian = $('#id_ujian').val();
        var $duration = $('#timer').val();
        // localStorage.setItem("timestamp",0);
        localStorage.removeItem("timestamp");
        window.location.href = '<?php echo base_url();?>student/ujian/' + $id_ujian+'/'+ $duration;


    });

});



function startUjian(code){
    // alert(code);
    var str = code.split('|');
    var idujian = str[0];
    var timer = str[1];
    $('#id_ujian').val(idujian);
    $('#timer').val(timer);
    $("#modalConfirmation").modal('show');
}



</script>

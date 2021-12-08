<div class="row">
    <div class="col-md-12">
        <h2 style="font-weight: bold; text-align: left;">Daftar Ujian</h2>
    </div>
</div>
<?php $ujian = $this->db->get('online_exam')->result_array();
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
                        <a class="btn btn-block btn-success btn-rounded"  href="<?php echo base_url();?>student/ujian/<?php echo $row['code'];?>" style="padding-top: 15px; padding-bottom: 15px;">Mulai Ujian</a>
                    </div>
                </div>
            </div>
        </div>
    <?php
    endforeach;
?>


<h2><b>Program Kamu</b></h2>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="panel panel-info">
            <div class="panel-body"> 
            </div>	
        </div>	
    </div>
</div>
<br>
<br>
<h2><b>Program Lainnya</b></h2>
    <div class="row ">
                                <div class="col-lg-12">

                                    <div class="card card-inverse card-danger text-center text-white">
                                        <div class="card-block">
                                        <br>
                                        <?php foreach($program as $row) : ?>
                                            <div class="col-md-3">
                                                <div class="white-box">
                                                    <h6 class="box-title"><?php echo $row['name']?></h6>
                                                    <ul class="list-inline two-part">
                                                        <?php if($row['category'] == 'Free Trial') : ?>
                                                            <li><i class="icon-present text-info"></i></li>
                                                        <?php elseif($row['category'] == 'Try Out')  : ?>
                                                            <li><i class="icon-book-open text-danger"></i></li>
                                                        <?php else : ?>
                                                            <li><i class="icon-people text-warning"></i></li>
                                                        <?php endif;?>
                                                        <li class="text-right"><h6 class="box-title">Rp. <?php echo  number_format($row['price'], 2, ",", "."); ?></h6></li>
                                                    </ul>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <a href="#">Pelajari lebih lanjut</a>
                                                        </div>
                                                        <div class="col">
                                                            <button class="btn btn-block btn-success btn-rounded">Daftar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach;?>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    <br>
                    <!-- row -->
    
    <script scr="<?php echo base_url();?>js/optimumajax.js"></script>
    <script src="<?php echo base_url(); ?>js/optimumajax.js"></script>



                
<style>
.answer-button-holder{border:1px solid #e7e7e7;background-color:#f4f4f4;border-radius:10px;overflow:hidden}
.answer-indicator-holder{position:absolute;top:0;bottom:0;left:10px;height:100%;display:flex;justify-content:center;align-items:center}
.answer-indicator{width:30px;height:30px;border:2px solid #394d55;border-radius:30px;text-align:center;line-height:26px}
.answer-button{width:100%;text-align:left;padding-left:50px;padding-top:15px;padding-bottom:15px;position:relative;cursor:pointer;border-bottom:1px solid #e7e7e7}
.answer-button:last-child{border-bottom:none}
.answer-button.active{background-color:#fff;color:#00c358}.answer-button.active .answer-indicator{border-color:#00c358;color:#00c358}
.answer-button:active{background-color:#fff;color:#00c358}.answer-button:active .answer-indicator{border-color:#00c358;color:#00c358}

</style>
<div class="row">
    <input type="hidden" id="code" name="code" value="<?php echo $code; ?>">
    <input type="hidden" id="hdnNo" name="hdnNo" value="">
    <input type="hidden" id="hdnTotal" name="total" value="">
    <input type="hidden" id="timeout" name="timeout" value="<?php echo $countdowntimer; ?>">
    <input type="hidden" id="active_exam" name="active_exam" value="<?php echo $this->session->userdata('active_exam')?>">

    <div class="col-md-2">
        <div class="d-none d-md-block well well-sm">
            <h5 style="color:#00a8bb;"> <strong>Data Peserta</strong></h5>
            <h5 style="color:grey;">Nama</h5> 
            <h5> <label id="name"></label></h5> 
            <h5 style="color:grey;">ID</h5>
            <h5> <label id="studentId"></label></h5> 
        </div>
        <div class="d-none d-md-block well well-sm">
            <h5 style="color:#00a8bb;"> <strong>Sisa Waktu</strong> </h5>
            
            <h3 class="text-center countdowntimer">
                <strong>...</strong></h3>
        </div>
        <div class="d-inline-block d-md-none text-center" style="margin-bottom: 10px; position: fixed; right: 50%; top: 5px; z-index: 9999; transform: translateX(50%);">
            <div class="d-inline-block">
                <div class="text-tale"> <strong>Sisa Waktu</strong></div>
                <h3 class="text-tale">
                <strong>...</strong></h3>
            </div>
        </div>
        <div class="well well-sm" style="text-align: left;display:none">
            <div >
                <h5 style="color:#00a8bb;"> <strong>Keterangan Warna</strong></h5>
                <div>
                    <div style="border-radius: 12px; border: 2px solid transparent; width: 12px; height: 12px; background-color: red; display: inline-block;">
                    </div> : jawaban salah
                </div>
                <div>
                    <div style="border-radius: 12px; border: 2px solid transparent; width: 12px; height: 12px; background-color: rgb(46, 204, 113); display: inline-block;">
                    </div> : jawaban benar tanpa ragu
                </div>
                <div>
                    <div style="border-radius: 12px; border: 2px solid transparent; width: 12px; height: 12px; background-color: rgb(116, 185, 255); display: inline-block;">
                    </div> : jawaban benar tapi masih ragu
                </div>
                <div>
                    <div style="border-radius: 12px; border: 2px solid rgb(51, 51, 51); width: 12px; height: 12px; background-color: transparent; display: inline-block;">
                    </div> : posisi saat ini
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="well well-sm" style="display:none">
            <div class="row">
                <div class="col">
                    <h5 style="color:#00a8bb;"> <strong>Hasil</strong> </h5>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <h5 style="color:grey;">Jawaban Benar:</h5>
                </div>
                <div class="col-4">
                    <h5 style="color:grey;">Jawaban Salah:</h5>
                </div>
                <div class="col-4">
                    <h5 style="color:grey;">Skor:</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div style="font-size: 22px;">
                        <i class="fa fa-check" style="color: rgb(186, 220, 88);"></i> 32
                    </div>
                </div>
                <div class="col-4"><div style="font-size: 22px;"><i class="fa fa-times" style="color: rgb(235, 77, 75);"></i> 18</div></div>
                <div class="col-4"><div style="font-size: 22px;"><i class="fa fa-trophy" style="color: rgb(249, 202, 36);"></i> 64</div></div>
            </div>
        </div>
        <div class="well well-sm p-2 d-flex d-md-none" style="margin-bottom: 10px; flex-direction: row; justify-content: space-between;">
            <div>
                <button class="btn btn-sm btn-outline btn-rounded btn-info my-2">
                    <i class="fa fa-angle-left"></i> Nomor 

                </button></div>
            <div><button class="btn btn-sm btn-info btn-rounded my-2">Berikutnya <i class="fa fa-angle-right"></i></button></div>
        </div>
        <div class="well well-sm">
            <div class="row">
                <div class="col">
                    <div style="text-align: left;">            
                        <h5 style="color:#00a8bb;">  <strong>No:</strong> <label id="no"></label> </h5>
                        <h5 class="mb-2">
                            <label id="pertanyaan"></label>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <div class="answer-button-holder mt-3">
                        <input type="hidden" name="jawab" id="jawab">
                        <input type="hidden" name="id_question" id="id_question">
                        <div class="answer-button arranswer" id="select_1" >
                            <div class="answer-indicator-holder">
                                <div class="answer-indicator">A</div>
                            </div>
                            <span id="A"></span> 
                        </div>
                        <div class="answer-button arranswer" id="select_2">
                            <div class="answer-indicator-holder">
                                <div class="answer-indicator">B</div>
                            </div>
                            <span id="B"></span> 
                        </div>
                        <div class="answer-button arranswer" id="select_3">
                            <div class="answer-indicator-holder">
                                <div class="answer-indicator">C</div>
                            </div>
                            <span id="C"></span> 
                        </div>
                        <div class="answer-button arranswer" id="select_4">
                            <div class="answer-indicator-holder">
                                <div class="answer-indicator">D</div>
                            </div>
                            <span id="D"></span> 
                        </div>
                        <div class="answer-button arranswer" id="select_5">
                            <div class="answer-indicator-holder">
                                <div class="answer-indicator">E</div>
                            </div>
                            <span id="E"></span> 
                        </div>
                    </div>
                </div>
            </div>
            <div id="afterExam" style="text-align:left;display:none">
                <div class="row">
                    <div class="col">
                        <h5 class="mb-3"><strong  style="color:#00a8bb;">Kunci: </strong> <label id="kunci"></label></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5 style="color:#00a8bb;">  <strong>Penjelasan:</strong> </h5>
                        <h5 class="mb-3"><label id="explanation"></label></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5>Refrensi:</h5>
                        <h5 class="mb-3"><label id="reference"></label></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5>Kata Kunci:</h5>
                        <h5 class="mb-3"><label id="keywords"></label></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="checkbox-container" for="isDoubt" style="font-weight: normal;">
                            <input class="checkbox" id="isDoubt" name="isDoubt" type="checkbox">ragu-ragu<span class="checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="well well-sm d-md-block d-none">
            <h5 style="color:#00a8bb;"> <strong>Navigasi</strong> </h5>
            <button id="btnNext" class="btn btn-block btn-info btn-rounded">Berikutnya <i class="fa fa-angle-right"></i></button>
            <a id="btnPrev" href="#" class="btn btn-block btn-outline btn-rounded btn-info"><i class="fa fa-angle-left"></i> Sebelumnya </a>
        </div>
        <div class="well well-sm text-center" style="display:none">
            <h5 class="mb-5" style="color:#00a8bb;"> <strong>Penyelesaian Soal</strong></h5>
            <h5 class="mb-5">Jumlah Soal : <label id="jmlSoal"></label></h5>
            <h5 class="mb-5">Sudah Dijawab : 50</h5>
            <h5 class="mb-5">- Tanpa Ragu : 50</h5>
            <h5 class="mb-5">- Masih Ragu : 0</h5>
            <h5 class="mb-5"> Belum Dijawab : 0</h5>
        </div>
    </div>
</div>

<script type="text/javascript">

// localStorage.removeItem("timestamp");
var timeout = parseInt($('#timeout').val());
    
var countDownDate = new Date();
countDownDate.setMinutes(countDownDate.getMinutes()+timeout);
var timestamp = countDownDate.getTime();

if(localStorage.getItem("timestamp")==null)
{
    //store current time into local storage
    localStorage.setItem("timestamp",timestamp);
}

  var x = setInterval(function() {

  var now = new Date().getTime();
  // Find the distance between current time and store time
  var distance = localStorage.getItem("timestamp") - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // document.getElementById("demo").innerHTML = "<span class='btn btn-primary'>&nbsp;"+days + " Day </span>&nbsp;<span class='btn btn-success'>" + hours + " Hour </span>&nbsp;<span class='btn btn-info'>"
  // + minutes + " Minute </span>&nbsp;<span class='btn btn-danger'>" + seconds + " Second </span>";

  var html = hours + ': '+ minutes + ': ' + seconds;
    $(".countdowntimer").html(html);

   //check conditon of distance 
  if (distance < 0) {
    clearInterval(x);
    var html ='EXPIRED';
   $(".countdowntimer").html(html);
  }
}, 1000);

// var timeout = 15;
// var seconds = new Date();
//     seconds.setDate(new Date().getSeconds()+timeout);
// var countDownDate = new Date(seconds).getTime();

// var x = setInterval(function() {

//     var html ='';
//     // Get today's date and time
//     var now = new Date().getTime();

//     // Find the distance between now and the count down date
//     var distance = countDownDate - now;

//     var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//     var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
//     var seconds = Math.floor((distance % (1000 * 60)) / 1000);


//     html = hours + ': '+ minutes + ': ' + seconds;
//     $(".countdownntimer").html(html);

    
//     if (distance < 0) {
//         clearInterval(x);
//        html ='EXPIRED';
//         $(".countdownntimer").html(html);
//     }

// }, 1000);


$( document ).ready(function() {
    var $code = $("#code").val();
    $.ajax({
            url: '<?php echo base_url();?>student/ujianAjax/' + $code+'/'+ 1,
            success: function(response){
                var result = JSON.parse(response);
                LoadQuestions(result);
                $("#jawab").val('');
            }
        });
});

$("#btnNext").click(function(){
    var $code = $("#code").val();
    var $no = $("#hdnNo").val();
    var $total = $("#hdnTotal").val();
    var $jawab = $("#jawab").val();

    var $id_question = $("#id_question").val();
    if($jawab =="")
    {
        alert("Silahkan pilih jawaban terlebih dahulu");
        return
    }

    $no =  parseInt($no) + 1;
    if($no > $total){
        $no = 1;
    }
        // $.ajax({
        //     url: '<?php echo base_url();?>student/ujianAjax/' + $code+'/'+ $no,
        //     success: function(response){
        //         var result = JSON.parse(response);
        //         LoadQuestions(result);
        //     }
        // });

    var postvar = {'id_question':$id_question,'jawab':$jawab};
    $.post("<?php echo base_url();?>student/update_exam",postvar, function( data ) { 
        if(data.status){
            $.ajax({
                url: '<?php echo base_url();?>student/ujianAjax/' + $code+'/'+ $no,
                success: function(response){
                    var result = JSON.parse(response);
                    LoadQuestions(result);
                    var jawab_exam = result["jawaban"]["answer_script"];
                    $("#jawab").val(jawab_exam);
                    $("#select_"+jawab_exam).addClass('active');
                }
            });
        }
    }, "json");

});

$(".arranswer").click(function(){
    $(".arranswer").removeClass('active');
    var idjwb = $(this).attr("id").split("_");
    var str = idjwb[1];
    $('#jawab').val(str);

    $('#select_'+str).addClass('active');
});

$("#btnPrev").click(function(){
    var $code = $("#code").val();
    var $no = $("#hdnNo").val();
    var $total = $("#hdnTotal").val();
    var $id_question = $("#id_question").val();
    var $jawab = $("#jawab").val();

    if($jawab =="")
    {
        alert("Silahkan pilih jawaban terlebih dahulu");
        return
    }

    if($no == 1){
        $no = $total;
    }else{
        $no = parseInt($no) - 1;
    }
        // $.ajax({
        //     url: '<?php echo base_url();?>student/ujianAjax/' + $code+'/'+ $no,
        //     success: function(response){
        //         var result = JSON.parse(response);
        //         LoadQuestions(result);
        //     }
        // });

        // var postvar = {'id_question':$id_question};
        // $.post("<?php echo base_url();?>student/get_answer_exam",postvar, function( data ) { 
        //     if(data.status){  
        //         $.ajax({
        //             url: '<?php echo base_url();?>student/ujianAjax/' + $code+'/'+ $no,
        //             success: function(response){
        //                 var result = JSON.parse(response);
        //                 LoadQuestions(result);

        //                 $('#jawab').val(str);
        //                 $('#select_'+str).addClass('active');
        //             }
        //         });
        //     }
        // }, "json");
        var postvar = {'id_question':$id_question,'jawab':$jawab};
        $.post("<?php echo base_url();?>student/update_exam",postvar, function( data ) { 
            if(data.status){

                $.ajax({
                    url: '<?php echo base_url();?>student/ujianAjax/' + $code+'/'+ $no,
                    success: function(response){
                        var result = JSON.parse(response);
                        LoadQuestions(result);
                        var jawab_exam = result["jawaban"]["answer_script"];
                        $("#jawab").val(jawab_exam);
                        $("#select_"+jawab_exam).addClass('active');
                    }
                });
            }
        }, "json");
});

function LoadQuestions(result){

    $(".arranswer").removeClass('active');

    let jawaban = ["A","B","C","D","E"]
    console.log(result);
    console.log(result["student"]);

    //student
    $("#name").html(result["student"]["name"]);
    $("#studentId").html(result["student"]["student_id"]);

    //total soal
    $("#jmlSoal").html(result["total_soal"]);
    $("#hdnTotal").val(result["total_soal"]);

    //soal
    console.log(result["soal"]);
    $("#no").html(result["soal"]["no"]);
    $("#hdnNo").val(result["soal"]["no"]);
    $("#pertanyaan").html(result["soal"]["question_title"]);

    //Kunci jawaban
    var kunci = result["soal"]["correct_answers"]
    var kunciJwb = parseInt(kunci) - 1;

    $("#kunci").html(jawaban[kunciJwb]);
    $("#explanation").html(result["soal"]["explanation"]);
    $("#reference").html(result["soal"]["reference"]);
    $("#keywords").html(result["soal"]["keywords"]);
    
    let options = [];
    options = JSON.parse(result["soal"]["options"])
    $("#A").html(options[0]);
    $("#B").html(options[1]);
    $("#C").html(options[2]);
    $("#D").html(options[3]);
    $("#E").html(options[4]);

    $("#id_question").val(result["soal"]["question_bank_id"]);

    // var jawab_exam = result["jawaban"]["answer_script"];

    // if(empty(jawab_exam) || jawab_exam == "")
    // {
    //     //nothing
    // }else{
    //     $("#jawab").val(jawab_exam);
    //     $("#select_"+jawab_exam).addClass('active');
    // }
}
</script>

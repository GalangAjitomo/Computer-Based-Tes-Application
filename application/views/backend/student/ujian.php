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
    <input type="hidden" id="timezone" name="timezone" value="<?php echo $timezone; ?>">
    <input type="hidden" id="active_exam" name="active_exam" value="<?php echo $active_exam ?>">

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
        <div id="ketWarna" class="well well-sm" style="text-align: left;display:none">
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
                        <label class="checkbox-container" for="cek_isDoubt" style="font-weight: normal;">
                            <input class="checkbox" id="cek_isDoubt" name="cek_isDoubt" type="checkbox">ragu-ragu
                        </label>
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
            <button id="btnKumpulkan" class="btn btn-block btn-rounded btn-danger" style="display:none;">Kumpulkan Jawaban</button>
            <a id="btnPrev" href="#" class="btn btn-block btn-outline btn-rounded btn-info"><i class="fa fa-angle-left"></i> Sebelumnya </a>
        </div>
        <div class="well well-sm d-md-block d-none">
            <h5 style="color:#00a8bb;"> <strong>Normal Lab</strong> </h5>
            <button id="btnModalNormalLab" class="btn btn-block btn-outline btn-rounded btn-info">Buka Normal Lab</button>
        </div>
        <div id="total_jawab" class="well well-sm text-center" style="display:none;">
            <h5 class="mb-5" style="color:#00a8bb;"> <strong>Penyelesaian Soal</strong></h5>
            <h5 class="mb-5">Jumlah Soal : <label id="jmlSoal"></label></h5>
            <h5 class="mb-5">Sudah Dijawab : 50</h5>
            <h5 class="mb-5">- Tanpa Ragu : 50</h5>
            <h5 class="mb-5">- Masih Ragu : 0</h5>
            <h5 class="mb-5"> Belum Dijawab : 0</h5>
        </div>
    </div>
</div>


<div class="modal fade" id="modal-normal-lab" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               
            </div>
            <div class="modal-body">

                <div style="overflow-x:scroll; text-align: left"><table class="table table-bordered"><thead><tr class="text-center"><th colspan="2" class="text-center">Tests</th><th class="text-center">SI Units</th><th class="text-center">Traditional Units</th></tr></thead><tbody><tr><td colspan="2">Albumin (serum)</td><td>&nbsp;35-50 g/L</td><td>3.5-5.0 g/dL</td></tr><tr><td colspan="2">Amylase (serum)</td><td>25-125 IU/L</td><td>25-125 U/L</td></tr><tr><td colspan="2">Bicarbonate (HCO3) (serum)</td><td>23-29 mmol/L</td><td>23-29 mEq/L</td></tr><tr><td style="vertical-align: middle" rowspan="4">Bilirubin (serum)</td><td>Neonates (conjugated)</td><td>0-10 μmol/L&nbsp;</td><td>0-0.6 mg/dL</td></tr><tr><td>Neonates (total)&nbsp;</td><td>&nbsp;1.7-180 μmol/L&nbsp;</td><td>1.0-10.5 mg/dL</td></tr><tr><td>Adults (conjugated)</td><td>0-5 μmol/L</td><td>0-0.3 mg/dL</td></tr><tr><td>Adults (total)</td><td>&nbsp;3-22 μmol/L</td><td>0.2-1.3 mg/dL</td></tr><tr><td colspan="2">Bleeding time</td><td>&lt; 5 min</td><td>&lt; 5 min</td></tr><tr><td style="vertical-align: middle" rowspan="2">Calcium&nbsp;(serum)**</td><td>Total</td><td>2.10-2.50 mmol/L</td><td>8.4-10.6 mg/dL</td></tr><tr><td>Ionized</td><td>1.15-1.35 mmol/L</td><td>4.6-5.1 mg/dL</td></tr><tr><td colspan="2">Calcium (urine)&nbsp;</td><td>&lt; 6.2 mmol/d&nbsp;</td><td>&lt; 250 mg/24h</td></tr><tr><td colspan="2">Carcinoembryonic antigen (CEA) (serum)</td><td>&lt; 3.0 μg/L</td><td>&lt; 3.0 ng/mL</td></tr><tr><td colspan="2">CO2&nbsp; (total)**</td><td>&nbsp;22-29 mmol/L</td><td>22-29 mEq/L</td></tr><tr><td colspan="2">Chloride (serum)</td><td>96-106 mmol/L</td><td>96-106 mmol/L</td></tr><tr><td style="vertical-align: middle" rowspan="3">Chloride (urine) </td><td>Infant&nbsp;</td><td>2-10 mmol/d</td><td>2-10 mEq/24h</td></tr><tr><td>Child</td><td>&nbsp;14-50 mmol/d</td><td>&nbsp;14-50 mmol/d</td></tr><tr><td>Adults&nbsp;</td><td>110-250 mmol/d</td><td>110-250 mEq/24h</td></tr><tr><td colspan="2">Cholesterol (serum)**</td><td>&lt; 5.2 mmol/L&nbsp;</td><td>&nbsp;&lt; 200 mg/dL</td></tr><tr><td style="vertical-align: middle" rowspan="2">Cortisol (plasma)</td><td>8.00 PM</td><td>170-635 nmol/L&nbsp;</td><td>6-23 μg/dL</td></tr><tr><td>4.00 PM</td><td>82-413 nmol/L</td><td>&nbsp;3-15 μg/dL</td></tr><tr><td colspan="2">Creatinine (serum)</td><td>50-110 μmol/L</td><td>0.6-1.2 mg/dL</td></tr><tr><td style="vertical-align: middle" rowspan="2">Creatinine (urine)&nbsp;</td><td>Males</td><td>8.8-17.6 mmol/d</td><td>1.0-2.0 g/24h</td></tr><tr><td>Females</td><td>7.0-15.8 mmol/d&nbsp;</td><td>0.8-1.8 g/24h</td></tr><tr><td style="vertical-align: middle" rowspan="2">Creatine kinase (CK, CPK)</td><td>Males</td><td>20-215 IU/L </td><td>20-215 U/L</td></tr><tr><td>Females</td><td>20-160 IU/L</td><td>20-160 U/L</td></tr><tr><td style="vertical-align: middle" rowspan="3">Erythrocytes (RBCs)</td><td>Children**</td><td>&nbsp;4.5-5.1 x 10¹²/L </td><td>4.5-5.1 million/mm³</td></tr><tr><td>Males</td><td>4.6-6.2 x 10¹²/L</td><td>4.6-6.2 million/mm³</td></tr><tr><td>Females</td><td>4.2-5.4 x 10¹²/L</td><td>4.2-5.4 million/mm³</td></tr><tr><td colspan="2">Ferritin (serum)&nbsp;</td><td>20-200 μg/L</td><td>20-200 ng/mL</td></tr><tr><td style="vertical-align: middle" rowspan="3">Follicle-stimulating hormone (FSH) (plasma)</td><td>Males</td><td>1-10 IU/L</td><td>1-10 mU/mL</td></tr><tr><td>Females, premenopausal </td><td>20-50 IU/L</td><td>20-50 mU/mL</td></tr><tr><td>Females, postmenopausal</td><td>40-250 IU/L&nbsp;</td><td>&nbsp;40-250 mU/mL</td></tr><tr><td colspan="2">Glucose (fasting) (plasma or serum)</td><td>3.9-6.1 mmol/L</td><td>70-110 mg/dL</td></tr><tr><td colspan="2">Growth hormone (hGH) (serum, adult)  fasting</td><td>0-10 μg/L&nbsp;</td><td>0-10 ng/mL</td></tr><tr><td style="vertical-align: middle" rowspan="4">Hematocrit</td><td>&nbsp;Newborn</td><td>0.49-0.54</td><td>49-54%</td></tr><tr><td>Children</td><td>0.35-0.49</td><td>35-49%</td></tr><tr><td>Males</td><td>&nbsp;0.40-0.54&nbsp;</td><td>&nbsp;40-54%</td></tr><tr><td>Females</td><td>&nbsp;0.37-0.47</td><td>37-47%</td></tr><tr><td style="vertical-align: middle" rowspan="4">Hemoglobin (Hb)&nbsp;</td><td>&nbsp;Newborn</td><td>165-195 g/L</td><td>16.5-19.5 g/dL</td></tr><tr><td>Children</td><td>112-165 g/L</td><td>11.2-16.5 g/dL</td></tr><tr><td>Males</td><td>140-180 g/L&nbsp;</td><td>14.0-18.0 g/dL</td></tr><tr><td>Females</td><td>120-160 g/L</td><td>12.0-16.0 g/dL</td></tr><tr><td colspan="2">High density lipoproteins (HDL) (recommended range)</td><td>&gt; 0.91 mmol/L</td><td>&gt; 35 mg/dL</td></tr><tr><td colspan="2">INR</td><td>0.9-1.1</td><td>0.9-1.1</td></tr><tr><td style="vertical-align: middle" rowspan="2">Iron (serum)</td><td>Males</td><td>13-31 μmol/L</td><td>75-175 μg/dL</td></tr><tr><td>Females</td><td>5-29 μmol/L</td><td>28-162 μg/dL</td></tr><tr><td colspan="2">Iron binding capacity (serum) (TIBC)&nbsp;</td><td>45-73 μmol/L&nbsp;</td><td>250-410 μg/dL</td></tr><tr><td style="vertical-align: middle" rowspan="3">Lactate dehydrogenase (LDH) (serum)&nbsp;</td><td>Adult&nbsp;</td><td>45-90 IU/L</td><td>5-90 U/L</td></tr><tr><td>Child</td><td>60-170 IU/L</td><td>60-170 U/L</td></tr><tr><td>&gt; 60 years old&nbsp;</td><td>55-100 IU/L&nbsp;</td><td>&nbsp;55-100 U/L</td></tr><tr><td style="vertical-align: middle" rowspan="6">Leukocytes&nbsp;</td><td>Total&nbsp;</td><td>3.5-12.0 x 10⁹/L</td><td>3500-12,000/mm³</td></tr><tr><td>Neutrophils&nbsp;</td><td>3000-5800 x 10⁶/L</td><td>&nbsp;3000-5800/mm³</td></tr><tr><td>Lymphocytes&nbsp;</td><td>1500-3000 x 10⁶/L</td><td>1500-3000/mm³</td></tr><tr><td>Monocytes</td><td>&nbsp;300-500 x 10⁶/L</td><td>300-500/mm³</td></tr><tr><td>Eosinophils</td><td>50-250 x 10⁶/L</td><td>50-250/mm³</td></tr><tr><td>Basophils&nbsp;</td><td>15-50 x 10⁶/L</td><td>15-50/mm³</td></tr><tr><td colspan="2">Low density lipoproteins (LDL) (recommended range)&nbsp;</td><td>&lt; 3.4 mmol/L</td><td>&lt; 130 mg/dL</td></tr><tr><td colspan="2">Magnesium (serum)&nbsp;</td><td>0.65-1.05 mmol/L</td><td>1.3-2.1 mg/dL</td></tr><tr><td colspan="2">Magnesium (urine)&nbsp;</td><td>3.0-4.3 mmol/d</td><td>6.0-8.5 mEq/24h</td></tr><tr><td colspan="2">Oxygen (arterial saturation)&nbsp;</td><td>94-99%&nbsp;</td><td>94-99%</td></tr><tr><td colspan="2">Parathyroid hormone (PTH)</td><td>10-65 ng/L&nbsp;</td><td>10-65 pg/mL</td></tr><tr><td colspan="2">Partial thromboplastin time (PTT)&nbsp;</td><td>&nbsp;22-37 sec&nbsp;</td><td>22-37 sec</td></tr><tr><td colspan="2">pCO2 (arterial)&nbsp;</td><td>&nbsp;35-45 mm Hg</td><td>35-45 mm Hg</td></tr><tr><td colspan="2">pH (arterial)&nbsp;</td><td>7.35-7.45&nbsp;</td><td>7.35-7.45</td></tr><tr><td colspan="2">Phosphatase, alkaline (serum)&nbsp;</td><td>40-160 IU/L</td><td>40-160 U/L</td></tr><tr><td style="vertical-align: middle" rowspan="2">Phosphate</td><td>Adults&nbsp;</td><td>1.0-1.5 mmol/L</td><td>3.0-4.5 mg/dL</td></tr><tr><td>Children</td><td>1.3-2.3 mmol/L&nbsp;</td><td>&nbsp;4.0-7.0 mg/dL</td></tr><tr><td colspan="2">Platelet count&nbsp;</td><td>150-400 x 10⁹/L</td><td>150,000-400,000/mm³</td></tr><tr><td colspan="2">pO2 (arterial)</td><td>80-100 mm Hg</td><td>80-100 mm Hg</td></tr><tr><td style="vertical-align: middle" rowspan="4">Potassium (serum)</td><td>&nbsp;Newborn</td><td>3.7-5.9 mmol/L&nbsp;</td><td>3.7-5.9 mEq/L</td></tr><tr><td>Infant </td><td>4.1-5.3 mmol/L</td><td>&nbsp;4.1-5.3 mEq/L</td></tr><tr><td>Children</td><td>3.4-4.7 mmol/L&nbsp;</td><td>&nbsp;3.4-4.7 mEq/L</td></tr><tr><td>Adult</td><td>&nbsp;3.5-5.1 mmol/L</td><td>&nbsp;3.5-5.1 mEq/L</td></tr><tr><td colspan="2">Potassium (urine)***</td><td>25-125 mmol/d&nbsp;</td><td>&nbsp;25-125 mEq/24h</td></tr><tr><td style="vertical-align: middle" rowspan="2">Protein (serum)</td><td>Total</td><td>60-80 g/L&nbsp;</td><td>6.0-8.0 g/dL</td></tr><tr><td>Albumin</td><td>35-55 g/L&nbsp;</td><td>3.5-5.5 g/dL</td></tr><tr><td colspan="2">Protein (urine)&nbsp;</td><td>10-150 mg/d&nbsp;</td><td>&nbsp;10-150 mg/24h</td></tr><tr><td colspan="2">Prothrombin time (PT)</td><td>9-12 sec.</td><td>9-12 sec.</td></tr><tr><td colspan="2">Thrombin time (plasma)</td><td>&lt; 17 sec</td><td>&lt; 17 sec</td></tr><tr><td>Thyroid-stimulating hormone (TSH) (serum)</td><td>Adults</td><td>&nbsp;0.4-4.8 mIU/L</td><td>&nbsp;0.4-4.8 mIU/L</td></tr><tr><td colspan="2">Thyroxine (T4) (serum)</td><td>66-155 nmol/L&nbsp;</td><td>5-12 μg/dL</td></tr><tr><td colspan="2">Thyroxine, free (FT4) (serum)</td><td>13-27 pmol/L</td><td>1.0-2.1 ng/dL</td></tr><tr><td style="vertical-align: middle" rowspan="2">Transaminase (serum)</td><td>&nbsp;AST (SGOT)</td><td>7-40 IU/L&nbsp;</td><td>7-40 mU/mL</td></tr><tr><td>ALT (SGPT)</td><td>5-35 IU/L</td><td>5-35 mU/mL</td></tr><tr><td colspan="2">Triiodothyronine (T3) (serum)&nbsp;</td><td>1.1-2.9 mmol/L&nbsp;</td><td>70-190 ng/dL</td></tr><tr><td colspan="2">Triglycerides&nbsp;</td><td>0.45-1.71 mmol/L</td><td>40-150 mg/dL</td></tr><tr><td colspan="2">Urea (plasma or serum)</td><td>4.0-8.2 mmol/L</td><td>24-49 ng/dL</td></tr><tr><td colspan="2">Urea nitrogen (BUN) (plasma or serum)</td><td>&nbsp;8.0-16.4 mmol/L&nbsp;</td><td>22-46 mg/dL</td></tr><tr><td colspan="2">Uric acid (serum) (enzymatic)&nbsp;</td><td>120-420 μmol/L&nbsp;</td><td>2.0-7.0 mg/dL</td></tr><tr><td colspan="2">Mean corpuscular volume (MCV)</td><td>Adults</td><td>80-96 fL/red cell</td></tr><tr><td style="vertical-align: middle" rowspan="2">Glucose (serum)</td><td>Fasting (pre prandial)</td><td>4.0 to 5.9 mmol/L</td><td>70 mg/dL-110mg/dL</td></tr><tr><td>non fasting (post prandial)</td><td>under 7.8 mmol/L</td><td>under 140 mg/dL</td></tr><tr><td style="vertical-align: middle" rowspan="3">HbA1C</td><td>normal</td><td>42 mmol/mol</td><td>6.0%</td></tr><tr><td>prediabetes</td><td>42 to 47 mmol/mol</td><td>6.0 to 6.4%</td></tr><tr><td>diabetes</td><td>48 mmol/mol&nbsp;</td><td>6.5% or over</td></tr></tbody></table></div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

// localStorage.removeItem("timestamp");
if($('#active_exam').val() == 1)
{
//waktu sekarang - waktu start
//hasilnya waktu yang udah lewat
//durasi == waktu lewat
//konversi durasi ke detik
// durasi - waktulewat
// WaktuSekrang(ms) - WaktuMulai(ms) = WaktuLewat (ms)
// Durasi(ms) - WaktuLewat(ms) = DurasiSekarang (ms)

// var time = new Date().getTime(); // get your number
// var date = new Date(time); // cre
    var waktumulai = $('#timezone').val();
    var now = new Date().getTime();

    var waktulewat = now-waktumulai;



    var countDownDate = new Date();
    countDownDate.setMinutes(countDownDate.getMinutes());
    var timestamp = countDownDate.getTime();

    var countDownDate = timeout-parseInt($('#timeout').val());
    console.log(timeout);
    var timestamp = countDownDate;

}else{

    var timeout = parseInt($('#timeout').val());
        
    var countDownDate = new Date();
    countDownDate.setMinutes(countDownDate.getMinutes()+timeout);
    var timestamp = countDownDate.getTime();

}

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
                var jawab_exam = result["jawaban"]["answer_script"];
                var isDoubt = result["jawaban"]["isDoubt"];
                    $("#jawab").val(jawab_exam);
                    $("#select_"+jawab_exam).addClass('active');
                
                if(parseInt(isDoubt) == 1)
                {
                    $('[name="cek_isDoubt"]').attr('checked','checked');
                }else{
                    $('[name="cek_isDoubt"]').removeAttr('checked');  
                }
                
            }
        });

});

$("#btnNext").click(function(){
    var $code = $("#code").val();
    var $no = $("#hdnNo").val();
    var $total = $("#hdnTotal").val();
    var $jawab = $("#jawab").val();
    var $cek_isDoubt = document.getElementById("cek_isDoubt");
    if($cek_isDoubt.checked == true)
    {
        $isDoubt = 1;
    }else{
        $isDoubt = 0;
    }

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

    var postvar = {'id_question':$id_question,'jawab':$jawab,'isDoubt':$isDoubt};
    $.post("<?php echo base_url();?>student/update_exam",postvar, function( data ) { 
        if(data.status){
            $.ajax({
                url: '<?php echo base_url();?>student/ujianAjax/' + $code+'/'+ $no,
                success: function(response){
                    var result = JSON.parse(response);
                    LoadQuestions(result);
                    var jawab_exam = result["jawaban"]["answer_script"];
                    var isDoubt = result["jawaban"]["isDoubt"];
                        $("#jawab").val(jawab_exam);
                        $("#select_"+jawab_exam).addClass('active');
                    
                    if(parseInt(isDoubt) == 1)
                    {
                        $('[name="cek_isDoubt"]').attr('checked','checked');
                    }else{
                        $('[name="cek_isDoubt"]').removeAttr('checked');  
                    }

                    if($no == $total)
                    {
                        $('#btnNext').attr('style','display:none;');
                        $('#btnKumpulkan').attr('style','display:block;');
                    }else{
                        $('#btnNext').attr('style','display:block;');
                        $('#btnKumpulkan').attr('style','display:none;');
                    }


                }
            });
        }
    }, "json");

});

$("#btnKumpulkan").click(function(){

    $('#ketWarna').attr('style','display:block;');
    $('#afterExam').attr('style','display:block;');
    $('#total_jawab').attr('style','display:block;');

});

$(".arranswer").click(function(){
    $(".arranswer").removeClass('active');
    var idjwb = $(this).attr("id").split("_");
    var str = idjwb[1];
    $('#jawab').val(str);

    $('#select_'+str).addClass('active');
});

$("#btnModalNormalLab").click(function(){
     $("#modal-normal-lab").modal('show');
})

$("#btnPrev").click(function(){
    var $code = $("#code").val();
    var $no = $("#hdnNo").val();
    var $total = $("#hdnTotal").val();
    var $id_question = $("#id_question").val();
    var $jawab = $("#jawab").val();
    var $cek_isDoubt = document.getElementById("cek_isDoubt");
    if($cek_isDoubt.checked == true)
    {
        $isDoubt = 1;
    }else{
        $isDoubt = 0;
    }

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
        var postvar = {'id_question':$id_question,'jawab':$jawab,'isDoubt':$isDoubt};
        $.post("<?php echo base_url();?>student/update_exam",postvar, function( data ) { 
            if(data.status){

                $.ajax({
                    url: '<?php echo base_url();?>student/ujianAjax/' + $code+'/'+ $no,
                    success: function(response){
                        var result = JSON.parse(response);
                        LoadQuestions(result);
                        var jawab_exam = result["jawaban"]["answer_script"];
                        var isDoubt = result["jawaban"]["isDoubt"];
                            $("#jawab").val(jawab_exam);
                            $("#select_"+jawab_exam).addClass('active');
                            alert(isDoubt);
                        if(parseInt(isDoubt) == 1)
                        {
                            $('[name="cek_isDoubt"]').attr('checked','checked');
                        }else{
                            $('[name="cek_isDoubt"]').removeAttr('checked');  
                        }

                        if($no == $total)
                        {
                            $('#btnNext').attr('style','display:none;');
                            $('#btnKumpulkan').attr('style','display:block;');
                        }else{
                            $('#btnNext').attr('style','display:block;');
                            $('#btnKumpulkan').attr('style','display:none;');
                        }
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

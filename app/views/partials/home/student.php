<?php 
$page_id = null;
$comp_model = new SharedController;
$current_page = $this->set_current_page_link();
?>
<div>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <h4 >The Student Dashboard</h4>
                </div>
                <div class="col-md-6 comp-grid">
                </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <h6 >Coursework Progress</h6>
                </div>
                <div class="col-md-6 comp-grid">
                    <div id="Comp-1-Accordion-Group" role="tablist" class="accordion-group">
                        <div class="card mb-3">
                            <div class="card-header accordion-header" data-toggle="collapse" data-target="#Accordion-1-Page1" role="tab">
                                <i class='fa fa-arrow-circle-down '></i>  BIP - Basic Instruction Program <span class="expand text-muted">+</span>
                            </div>
                            <div id="Accordion-1-Page1" class="collapse " data-parent="#Comp-1-Accordion-Group">
                                <div  class="">
                                    <div class="container">
                                        <div class="row ">
                                            <div class="col-md-6 comp-grid">
                                                <?php $rec_count = $comp_model->getcount_g1e3();  ?>
                                                <a class="animated zoomIn record-count card bg-light text-dark ml-3 mr-3"  href="<?php print_link("cwmarks/") ?>">
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <i class="fa fa-globe"></i>
                                                        </div>
                                                        <div class="col-10">
                                                            <div class="flex-column justify-content align-center">
                                                                <div class="title">G1E3</div>
                                                                <div class="progress mt-2">
                                                                    <?php 
                                                                    $perc = ($rec_count / 5) * 100 ;
                                                                    ?>
                                                                    <div class="progress-bar bg-primary text-light" role="progressbar" aria-valuenow="<?php echo $rec_count; ?>" aria-valuemin="0" aria-valuemax="5" style="width:<?php echo $perc ?>%">
                                                                        <span class="progress-label"><?php echo round($perc,2); ?>%</span>
                                                                    </div>
                                                                </div>
                                                                <small class="small desc">Telecommunication 1A</small>
                                                            </div>
                                                        </div>
                                                        <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header accordion-header" data-toggle="collapse" data-target="#Accordion-1-Page2" role="tab">
                                <i class='fa fa-arrow-circle-down '></i>  GIP - Genaral Instruction Program <span class="expand text-muted">+</span>
                            </div>
                            <div id="Accordion-1-Page2" class="collapse " data-parent="#Comp-1-Accordion-Group">
                                <div  class="">
                                    <div class="container">
                                        <div class="row ">
                                            <div class="col-md-6 comp-grid">
                                                <?php $rec_count = $comp_model->getcount_g1e3();  ?>
                                                <a class="animated zoomIn record-count card bg-light text-dark ml-3 mr-3"  href="<?php print_link("cwmarks/") ?>">
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <i class="fa fa-globe"></i>
                                                        </div>
                                                        <div class="col-10">
                                                            <div class="flex-column justify-content align-center">
                                                                <div class="title">G1E3</div>
                                                                <div class="progress mt-2">
                                                                    <?php 
                                                                    $perc = ($rec_count / 5) * 100 ;
                                                                    ?>
                                                                    <div class="progress-bar bg-primary text-light" role="progressbar" aria-valuenow="<?php echo $rec_count; ?>" aria-valuemin="0" aria-valuemax="5" style="width:<?php echo $perc ?>%">
                                                                        <span class="progress-label"><?php echo round($perc,2); ?>%</span>
                                                                    </div>
                                                                </div>
                                                                <small class="small desc">Telecommunication 1A</small>
                                                            </div>
                                                        </div>
                                                        <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-6 comp-grid">
                                                <?php $rec_count = $comp_model->getcount_g2e5();  ?>
                                                <a class="animated zoomIn record-count card bg-light text-dark ml-3 mr-3"  href="<?php print_link("cwmarks/") ?>">
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <i class="fa fa-globe"></i>
                                                        </div>
                                                        <div class="col-10">
                                                            <div class="flex-column justify-content align-center">
                                                                <div class="title">G2E5</div>
                                                                <div class="progress mt-2">
                                                                    <?php 
                                                                    $perc = ($rec_count / 2) * 100 ;
                                                                    ?>
                                                                    <div class="progress-bar bg-primary text-light" role="progressbar" aria-valuenow="<?php echo $rec_count; ?>" aria-valuemin="0" aria-valuemax="2" style="width:<?php echo $perc ?>%">
                                                                        <span class="progress-label"><?php echo round($perc,2); ?>%</span>
                                                                    </div>
                                                                </div>
                                                                <small class="small desc"> Power Gen. Trans and Dis. 1 B  </small>
                                                            </div>
                                                        </div>
                                                        <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-6 comp-grid">
                                                <?php $rec_count = $comp_model->getcount_g1e4();  ?>
                                                <a class="animated zoomIn record-count card bg-light text-dark ml-3 mr-3"  href="<?php print_link("cwmarks/") ?>">
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <i class="fa fa-globe"></i>
                                                        </div>
                                                        <div class="col-10">
                                                            <div class="flex-column justify-content align-center">
                                                                <div class="title">G1E4</div>
                                                                <div class="progress mt-2">
                                                                    <?php 
                                                                    $perc = ($rec_count / 3) * 100 ;
                                                                    ?>
                                                                    <div class="progress-bar bg-primary text-light" role="progressbar" aria-valuenow="<?php echo $rec_count; ?>" aria-valuemin="0" aria-valuemax="3" style="width:<?php echo $perc ?>%">
                                                                        <span class="progress-label"><?php echo round($perc,2); ?>%</span>
                                                                    </div>
                                                                </div>
                                                                <small class="small desc">Power Gen, Trans and Dis.</small>
                                                            </div>
                                                        </div>
                                                        <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header accordion-header" data-toggle="collapse" data-target="#Accordion-1-Page3" role="tab">
                                <i class='fa fa-arrow-circle-down '></i>  SIP - Specialised Instruction Program <span class="expand text-muted">+</span>
                            </div>
                            <div id="Accordion-1-Page3" class="collapse " data-parent="#Comp-1-Accordion-Group">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_practicles_2();  ?>
                    <a class="animated zoomIn record-count card bg-success text-white"  href="<?php print_link("pracschedules/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-clock-o "></i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Practicles</div>
                                    <small class="">This week</small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                    <?php $rec_count = $comp_model->getcount_correctionsubmissions();  ?>
                    <a class="animated zoomIn record-count card bg-success text-white mt-4"  href="<?php print_link("cwcorrection/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-clock-o "></i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Correction Submissions</div>
                                    <small class="">This week</small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_lectures();  ?>
                    <a class="animated zoomIn record-count card bg-success text-white"  href="<?php print_link("lecschedules/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-clock-o "></i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Lectures</div>
                                    <small class="">This Week</small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                </div>
                <div class="col-md-12 comp-grid">
                    <div class=" ">
                        <?php  
                        $this->render_page("users_logs/list?limit_count=20"); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

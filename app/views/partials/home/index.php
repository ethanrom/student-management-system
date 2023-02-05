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
                    <h4 >Admin Dashboard</h4>
                </div>
                <div class="col-md-12 comp-grid">
                </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="container">
            <div class="page-header"><h4> </h4></div>
            <div class="row ">
                <div class="col-md-3 col-sm-4 comp-grid">
                    <div class=""><style>
                        .topcard {
                        overflow:hidden;
                        box-shadow:0 0 10px rgba(0,0,0,0.3);
                        }
                        .topcard .value {
                        font-size: 4rem;
                        }
                        .topcard i {
                        position: relative;right: -50%;
                        top: 20px;
                        font-size: 8rem;
                        line-height: 0;
                        opacity: 0.2;
                        color: white;
                        z-index: 0;
                        }
                    </style>
                </div>
                <?php $rec_count = $comp_model->getcount_totalstaff();  ?>
                <a class="animated zoomIn record-count alert alert-primary topcard"  href="<?php print_link("staffdb/") ?>">
                    <div class="row">
                        <div class="col-2">
                            <i class="fa fa-users "></i>
                        </div>
                        <div class="col-10">
                            <div class="flex-column justify-content align-center">
                                <div class="title">Total Staff</div>
                                <small class=""></small>
                            </div>
                        </div>
                        <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-4 comp-grid">
                <?php $rec_count = $comp_model->getcount_totalstudents();  ?>
                <a class="animated zoomIn record-count alert alert-primary topcard"  href="<?php print_link("studentdb/") ?>">
                    <div class="row">
                        <div class="col-2">
                            <i class="fa fa-users "></i>
                        </div>
                        <div class="col-10">
                            <div class="flex-column justify-content align-center">
                                <div class="title">Total Students</div>
                                <small class=""></small>
                            </div>
                        </div>
                        <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-4 comp-grid">
                <?php $rec_count = $comp_model->getcount_subjects();  ?>
                <a class="animated zoomIn record-count alert alert-primary topcard"  href="<?php print_link("subjectsdb/") ?>">
                    <div class="row">
                        <div class="col-2">
                            <i class="fa fa-book "></i>
                        </div>
                        <div class="col-10">
                            <div class="flex-column justify-content align-center">
                                <div class="title">Subjects</div>
                                <small class=""></small>
                            </div>
                        </div>
                        <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-4 comp-grid">
                <?php $rec_count = $comp_model->getcount_practicles();  ?>
                <a class="animated zoomIn record-count alert alert-primary topcard"  href="<?php print_link("practiclesdb/") ?>">
                    <div class="row">
                        <div class="col-2">
                            <i class="fa fa-th-large "></i>
                        </div>
                        <div class="col-10">
                            <div class="flex-column justify-content align-center">
                                <div class="title">Practicles</div>
                                <small class=""></small>
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
                <div class=""><div></div>
                </div>
            </div>
            <div class="col-md-6 col-sm-4 comp-grid">
                <div class="card card-body">
                    <?php 
                    $chartdata = $comp_model->linechart_attendanceoverview();
                    ?>
                    <div>
                        <h4>Attendance Overview</h4>
                        <small class="text-muted">Displays Total Attendance for Last 3 Days</small>
                    </div>
                    <hr />
                    <canvas id="linechart_attendanceoverview"></canvas>
                    <script>
                        $(function (){
                        var chartData = {
                        labels : <?php echo json_encode($chartdata['labels']); ?>,
                        datasets : [
                        {
                        label: 'Attendance',
                        fill:false,
                        borderColor:'rgba(0 , 128 , 255, 0.7)',
                        borderWidth:3,
                        pointStyle:'circle',
                        pointRadius:5,
                        lineTension:0.1,
                        type:'',
                        steppedLine:false,
                        data : <?php echo json_encode($chartdata['datasets'][0]); ?>,
                        }
                        ]
                        }
                        var ctx = document.getElementById('linechart_attendanceoverview');
                        var chart = new Chart(ctx, {
                        type:'line',
                        data: chartData,
                        options: {
                        scaleStartValue: 0,
                        responsive: true,
                        scales: {
                        xAxes: [{
                        ticks:{display: true},
                        gridLines:{display: true},
                        scaleLabel: {
                        display: true,
                        labelString: ""
                        }
                        }],
                        yAxes: [{
                        ticks: {
                        beginAtZero: true,
                        display: true
                        },
                        scaleLabel: {
                        display: true,
                        labelString: ""
                        }
                        }]
                        },
                        }
                        ,
                        })});
                    </script>
                </div>
                <div class=""></div>
            </div>
            <div class="col-md-6 col-sm-4 comp-grid">
                <div class=""><div></div>
                </div>
                <div class="card card-body">
                    <?php 
                    $chartdata = $comp_model->linechart_todaysattendance();
                    ?>
                    <div>
                        <h4>Todays Attendance</h4>
                        <small class="text-muted">Displays Day's Attendance Subjectwise</small>
                    </div>
                    <hr />
                    <canvas id="linechart_todaysattendance"></canvas>
                    <script>
                        $(function (){
                        var chartData = {
                        labels : <?php echo json_encode($chartdata['labels']); ?>,
                        datasets : [
                        {
                        label: 'Dataset 1',
                        fill:false,
                        borderColor:'rgba(132 , 186 , 69, 1)',
                        borderWidth:3,
                        pointStyle:'circle',
                        pointRadius:5,
                        lineTension:0.1,
                        type:'',
                        steppedLine:false,
                        data : <?php echo json_encode($chartdata['datasets'][0]); ?>,
                        }
                        ]
                        }
                        var ctx = document.getElementById('linechart_todaysattendance');
                        var chart = new Chart(ctx, {
                        type:'line',
                        data: chartData,
                        options: {
                        scaleStartValue: 0,
                        responsive: true,
                        scales: {
                        xAxes: [{
                        ticks:{display: true},
                        gridLines:{display: true},
                        scaleLabel: {
                        display: true,
                        labelString: ""
                        }
                        }],
                        yAxes: [{
                        ticks: {
                        beginAtZero: true,
                        display: true
                        },
                        scaleLabel: {
                        display: true,
                        labelString: ""
                        }
                        }]
                        },
                        }
                        ,
                        })});
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

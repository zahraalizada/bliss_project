<?php include "admin_header.php";
$page = "index";
include "../settings/setting.php";
?>
<?php


?>


<!--main content start-->
<input type="hidden" name="index">
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row mt">
            <div class="col-sm-12">
                <section class="panel">
                    <div class="panel-body">
                        <h1>Hello Bliss Project!</h1>
                        <div class="row">
                            <form action="../settings/crud.php" method="post">
                                <input type="hidden" name="index">
                                <?php
                                    $getcontact = count($getcontact);
                                    $getservice = count($getservice);
                                    $getabout = count($getabout);
                                    $getslider = count($getslider);
                                ?>

                                <script type="text/javascript">
                                    google.charts.load('current', {'packages': ['corechart']});
                                    google.charts.setOnLoadCallback(drawVisualization);

                                    function drawVisualization() {
                                        var data = google.visualization.arrayToDataTable
                                        ([
                                            ['Month', 'Slider', 'Service', 'Contact', 'About', 'Rwanda', 'Average'],

                                            ['data', <?php echo $getslider ?>, <?php echo $getservice ?>, <?php echo $getcontact ?>, <?php echo $getabout ?>, <?php echo $getcontact ?>, <?php echo $getcontact ?>],
                                        ]);

                                        var options = {
                                            title: '',
                                            seriesType: 'bars',
                                        };
                                        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
                                        chart.draw(data, options);
                                    }
                                </script>
                            </form>
                            <div id="chart_div" style="width: auto; height: 500px;"></div>
                        </div>



                        <div class="row">
                            <div class="col-sm-12">
                                <!--CUSTOM CHART START -->
                                <div class="border-head">
                                    <h3>USER VISITS</h3>
                                </div>
                                <div class="custom-bar-chart">
                                    <ul class="y-axis">
                                        <li><span>10.000</span></li>
                                        <li><span>8.000</span></li>
                                        <li><span>6.000</span></li>
                                        <li><span>4.000</span></li>
                                        <li><span>2.000</span></li>
                                        <li><span>0</span></li>
                                    </ul>
                                    <div class="bar">
                                        <div class="title">JAN</div>
                                        <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
                                    </div>
                                    <div class="bar ">
                                        <div class="title">FEB</div>
                                        <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
                                    </div>
                                    <div class="bar ">
                                        <div class="title">MAR</div>
                                        <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
                                    </div>
                                    <div class="bar ">
                                        <div class="title">APR</div>
                                        <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
                                    </div>
                                    <div class="bar">
                                        <div class="title">MAY</div>
                                        <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
                                    </div>
                                    <div class="bar ">
                                        <div class="title">JUN</div>
                                        <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
                                    </div>
                                    <div class="bar">
                                        <div class="title">JUL</div>
                                        <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
                                    </div>
                                </div>
                                <!--custom chart end-->
                            </div>

                        </div>




                    </div>
                </section>
            </div>

        </div>
    </section>
    <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->
<!--main content end-->


<?php include "admin_footer.php"; ?>

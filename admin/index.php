<?php include "admin_header.php";
$page = "index";
include "../settings/setting.php";
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
                                            ['Month', 'Slider', 'Service', 'Contact', 'About','q'],

                                            ['data', <?php echo $getslider ?>, <?php echo $getservice ?>, <?php echo $getcontact ?>, <?php echo $getabout ?>, <?php echo $getabout ?>],
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

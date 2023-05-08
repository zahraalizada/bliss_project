<?php include "admin_header.php";
$page = "contact";
$page = "service";
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

<form  action="../settings/crud.php" method="post">
    <input type="hidden" name="index">
<?php foreach ($getData as $key);
var_dump($key);
?>

    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawVisualization);

        function drawVisualization() {
            // Some raw data (not necessarily accurate)
            var data = google.visualization.arrayToDataTable([
                ['Month', 'Slider', 'Service', 'Contact', 'About', 'Rwanda', 'Average'],


                ['2004/05',  165,      938,         522,             998,           450,      614.6],


            ]);

            var options = {
                title : '',
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

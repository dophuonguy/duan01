<div class="layout-specing row">
<script src="https://www.gstatic.com/charts/loader.js"></script>
<div class="container mt-3 ">
        <div id="myChart" style="width:100%; max-width:600px; height:500px;">
    </div>
</div>


<script>
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        // Set Data
        const data = google.visualization.arrayToDataTable([
            ['Danh mục', 'Số lượng sản phẩm'],
            <?php 
                $tongdm = count($listdanhmuc);
                $i= 1;
                foreach ($listdanhmuc as $dm) {
                    extract($dm);
                    if($i==$tongdm) {
                        $dauphay='';
                    }else{
                        $dauphay=',';
                    }
                    echo " ['".$dm['name']."', ".$dm['sl']."]".$dauphay;
                    $i+=1;
                }
            ?>
            
        ]);

        // Set Options
        const options = {
            title: 'Thống kê sản phảm theo danh mục'
        };

        // Draw
        const chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);

    }
</script>
</div>

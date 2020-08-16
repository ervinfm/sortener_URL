<div class="col-lg-12 pt-5">
    <div class="card">
        <div class="card-body row">
            <div class="col-lg-12">
                <h4 class="title text-center">
                    Statistik Sortener URL mu !
                </h4>
            </div>
            <div class="col-lg-12">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
</div>

<?php
$tanggal = array();
foreach ($row->result() as $key => $data) {
    array_Push($tanggal, date('d-m-y', strtotime($data->akses_sortener)));
}
print_r($tanggal);
?>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: [<?php for ($i = 0; $i < count($tanggal); $i++) {
                            echo $tanggal[$i] . ',';
                        } ?>],
            datasets: [{
                label: 'Data Statistik Akses Url',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: [0, 10, 5, 2, 20, 30, 45]
            }]
        },

        // Configuration options go here
        options: {}
    });
</script>
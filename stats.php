<?php
    session_start();
    if($_SESSION['authenticated'] != true){
        /*header("Location: index.php");
        exit();*/
    }
?>

<!DOCTYPE html>
<html>
<body>

<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<p id="demo"></p>

<script>
    const ctx = document.getElementById('myChart');

    const jsonResults = <?php 
    
    $json = file_get_contents('json/color_data.json');
    $obj = json_decode($json, true);
    $obj2 = json_encode($obj);
    echo $obj2;
    
    ?>;
    
    const keys = Object.keys(jsonResults);

    var values = new Array(16);

    for(var i = 0; i < keys.length; i = i+1){
        values[i] = jsonResults[keys[i]];
    }

    document.getElementById("demo").innerHTML = values;

    new Chart(ctx, {
        type: 'bar',
        data: {
        labels: keys,
        datasets: [{
            label: '# of Votes',
            data: values,
            borderWidth: 1
        }]
        },
        options: {
        scales: {
            y: {
            beginAtZero: true
            }
        }
        }
    });
</script>

</body>
</html>
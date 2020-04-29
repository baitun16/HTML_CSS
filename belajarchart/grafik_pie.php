<?php
include('koneksi.php');
$Negara = mysqli_query($koneksi,"select * from datacovid");
while($row = mysqli_fetch_array($Negara)){
	$nama_Negara[] = $row['id negara'];
	
	$jumlah_kasus[] = $row['Total Cases'];
}
?>
<!doctype html>
<html>
 
<head>
	<title>Pie Chart</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>
 
<body>
	<div id="canvas-holder" style="width:50%">
		<canvas id="chart-area"></canvas>
	</div>
	<script>
		var config = {
			type: 'pie',
			data: {
				datasets: [{
					data:<?php echo json_encode($jumlah_kasus); ?>,
					backgroundColor: [
					'rgba(0, 255, 0, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(176, 196, 222, 0.2)',
					'rgba(188, 143, 143, 0.2)',
					'rgba(128, 0, 128, 0.2)',
					'rgba(255, 0, 0, 0.2)',
					'rgba(47, 79, 79, 0.2)',
					'rgba(255,215, 0, 0.2)'
					
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(119, 136, 153, 1)',
					'rgba(199, 21, 133, 1)',
					'rgba(210, 105, 30, 1)',
					'rgba(128, 0, 0, 1)',
					'rgba(0, 0, 0, 1)',
					'rgba(85, 107, 47, 1)'
					],
					label: 'Presentase Kasus COVID-19'
				}],
				labels: <?php echo json_encode($nama_Negara); ?>},
			options: {
				responsive: true
			}
		};
 
		window.onload = function() {
			var ctx = document.getElementById('chart-area').getContext('2d');
			window.myPie = new Chart(ctx, config);
		};
 
		document.getElementById('randomizeData').addEventListener('click', function() {
			config.data.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return randomScalingFactor();
				});
			});
 
			window.myPie.update();
		});
 
		var colorNames = Object.keys(window.chartColors);
		document.getElementById('addDataset').addEventListener('click', function() {
			var newDataset = {
				backgroundColor: [],
				data: [],
				label: 'New dataset ' + config.data.datasets.length,
			};
 
			for (var index = 0; index < config.data.labels.length; ++index) {
				newDataset.data.push(randomScalingFactor());
 
				var colorName = colorNames[index % colorNames.length];
				var newColor = window.chartColors[colorName];
				newDataset.backgroundColor.push(newColor);
			}
 
			config.data.datasets.push(newDataset);
			window.myPie.update();
		});
 
		document.getElementById('removeDataset').addEventListener('click', function() {
			config.data.datasets.splice(0, 1);
			window.myPie.update();
		});
	</script>
</body>
 
</html>
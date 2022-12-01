<?php 
$user_permission = get_user_permission();
$text4anon = "Yazılarım";
$text4editor = "Yazılar";
?>

<section class="panel">
    <header class="panel-heading">
        <h2 class="panel-title">Dashboard</h2>
    </header>
    <div class="panel-body">
		<div id="pie_yazilar" style="float:left"></div>
		<?php if($user_permission > 2){ ?>
			<div id="pie_uyeler" style="float:left"></div>
		<?php } ?>
	</div>
</section>





<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Onaylandı', <?php echo $num_blogs_active; ?>],
  ['Onay Bekliyor', <?php echo $num_blogs_deactive; ?>]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title': <?php echo get_user_permission() == 1 ? "\"Yazılarım\"" : "\"Yazılar\"" ?>, 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('pie_yazilar'));
  chart.draw(data, options);
}
</script>
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart2);

// Draw the chart and set the chart values
function drawChart2() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Admin', <?php echo $num_admin; ?>],
  ['Editör', <?php echo $num_editor; ?>],
  ['Anon', <?php echo $num_anon; ?>]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Üye Durumu', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('pie_uyeler'));
  chart.draw(data, options);
}
</script>
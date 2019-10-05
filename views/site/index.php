<?php

/* @var $this yii\web\View */

$this->title = 'Dashboard';
?>
<div class="site-index">
<?php
   include "koneksi.php";
?>

      <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Users</span>

              <?php 
                  $query = "SELECT id FROM user";
                  $query2 = mysqli_query($config,$query);
                  while($query3 = mysqli_fetch_assoc($query2)){
		       ?>
            <span class="info-box-number"><?php echo $query3['id']; ?></span>
       <?php } ?>
             
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Users</span>

              <?php 
                  $query = "SELECT id FROM user";
                  $query2 = mysqli_query($config,$query);
                  while($query3 = mysqli_fetch_assoc($query2)){
		       ?>
            <span class="info-box-number"><?php echo $query3['id']; ?></span>
       <?php } ?>
             
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Users</span>

              <?php 
                  $query = "SELECT id FROM user";
                  $query2 = mysqli_query($config,$query);
                  while($query3 = mysqli_fetch_assoc($query2)){
		       ?>
            <span class="info-box-number"><?php echo $query3['id']; ?></span>
       <?php } ?>
             
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Users</span>

              <?php 
                  $query = "SELECT id FROM user";
                  $query2 = mysqli_query($config,$query);
                  while($query3 = mysqli_fetch_assoc($query2)){
		       ?>
            <span class="info-box-number"><?php echo $query3['id']; ?></span>
       <?php } ?>
             
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

   <div class="col-xs-12">
      <div class="box box-info">
      <div class="box-header with-border">
      </div>
    <div class="jumbotron">
    <?=
\dosamigos\highcharts\HighCharts::widget([
   'clientOptions' => [
      'chart' => [
         'type' => 'bar'
      ],
      'title' => [
         'text' => 'Data DBD'
      ],
      'xAxis' => [
         'categories' => [
            'Fday',
            'Sex',
            'Prevd'
         ]
      ],
      'yAxis' => [
         'title' => [
             'text' => 'Banyaknya yang terkena DBD'
         ]
      ],
      'series' => [
         ['name' => 'Latitude', 'data' => [1, 6, 4]],
         ['name' => 'Longtitude', 'data' => [5, 7, 3]]
      ]
   ]
]);
?>
      </div>
   </div>
</div>
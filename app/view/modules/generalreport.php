<?php
$servername = "localhost";
$username = "root";
$password = "macaco";
$dbname = "check";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT DISTINCT vehiclePlate, piSerial, measurementDate FROM Measurement";
$result = $conn->query($sql);


?>

<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Relatório Geral</h3>
        <div class="box-tools">
          <div class="input-group">
            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
            <div class="input-group-btn">
              <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tr>
            <th>Placa</th>
            <th>Serial - Pi</th>
            <th>Ultima Medição</th>
            <th>Status</th>
            <th>Organização</th>
          </tr>
          <tr>

            <?php if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<td> " . $row["vehiclePlate"]. "</td>";
                    echo "<td> " . $row["piSerial"]. "</td>";
                    echo "<td> " . $row["measurementDate"]. "</td>";
                    ?>
                    <td><span class="label label-success">Ativo</span></td>
                    <td>CheckMyFleet</td>
                    <?php
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
</div>

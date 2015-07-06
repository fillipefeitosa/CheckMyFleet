<?php
  $KoolControlsFolder = "../koolSuite/KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder

  require $KoolControlsFolder."/KoolChart/koolchart.php";

    $chart = new KoolChart("chart");
  $chart->scriptFolder=$KoolControlsFolder."/KoolChart";
  $chart->Width = 770;
  $chart->Height = 480;
    $chart->Title->Text = "Consumo vs Pressão";
    $chart->PlotArea->XAxis->Title = "Período";
    $chart->PlotArea->XAxis->Set(array("29/06","30/06","01/07","02/07","03/07"));
    $chart->PlotArea->YAxis->Title = "";
    $chart->PlotArea->YAxis->LabelsAppearance->DataFormatString = " {0}";

  $series = new AreaSeries();
    $series->Name = "Pressão";
    $series->Appearance->BackgroundColor = "green";
    $series->LabelsAppearance->DataFormatString = " {0}";
    $series->TooltipsAppearance->DataFormatString = "$ {0} millions";
    $series->ArrayData(array(20,30,40,70,50));
    $chart->PlotArea->AddSeries($series);

  $series = new AreaSeries();
    $series->Name = "Consumo";
    $series->Appearance->BackgroundColor = "red";
    $series->LabelsAppearance->DataFormatString = " {0}";
    $series->TooltipsAppearance->DataFormatString = "$ {0} millions";
    $series->ArrayData(array(30,20,65,40,30));
    $chart->PlotArea->AddSeries($series);
?>

<form id="form1" method="post">

  <?php echo $chart->Render();?>

</form>

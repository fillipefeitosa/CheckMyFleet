<?php
    /* Open connection to "zing_db" MySQL database. */
    $mysqli = new mysqli("localhost", "check", "macaco", "checkmyfleeet");

    /* Check the connection. */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    $data=mysqli_query($mysqli,"SELECT * FROM Measurement");

?>

<script>
    var myData1=[<?php
    while($info=mysqli_fetch_array($data))
        echo $info['pressure'].','; /* We use the concatenation operator '.' to add comma delimiters after each data value. */
    ?>];

    <?php
    $data=mysqli_query($mysqli,"SELECT * FROM Measurement");
    ?>
    var myData2=[<?php
    while($info=mysqli_fetch_array($data))
        echo $info['consumption'].','; /* We use the concatenation operator '.' to add comma delimiters after each data value. */
    ?>];

    <?php
    $data=mysqli_query($mysqli,"SELECT * FROM Measurement");
    ?>
    var myLabels=[<?php
    while($info=mysqli_fetch_array($data))
        echo '"'.$info['measurementDate']." ".$info['measurementTime'].'",'; /* The concatenation operator '.' is used here to create string values from our database names. */
    ?>];
</script>

<?php
    /* Close the connection */
    $mysqli->close();
?>
<script>
window.onload=function(){
    zingchart.render({
        id:"myChart",
        width:"100%",
        height:400,
        data:{
        "type":"area",
        "title":{
            "text":"Relação entre o Consumo e a Pressão dos Pneus"
        },
        "scale-x":{
            "labels":myLabels
        },
        "scale-y":{
          "line-color":"green",
          "values":"70:76:2"
        },
        "scale-y-2":{
          "values":"0:8:2",
          "line-color":"blue"
        },
        "series":[
            {
                "values":myData1,
                "scales":"scale-x,scale-y"
            },
            {
                "values":myData2,
                "scales":"scale-x,scale-y-2"
            }
        ]
    }
    });
    };
    </script>

<div id='myChart'></div>

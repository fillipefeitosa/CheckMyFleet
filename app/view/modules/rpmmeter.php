<?php
    /* Open connection to "zing_db" MySQL database. */
    $mysqli = new mysqli("localhost", "check", "macaco", "checkmyfleet");

    /* Check the connection. */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    $data=mysqli_query($mysqli,"SELECT * FROM Measurement");

?>

<script>
    var myData=[<?php
    while($info=mysqli_fetch_array($data))
        echo $info['rpm'].','; /* We use the concatenation operator '.' to add comma delimiters after each data value. */
    ?>];
    <?php
    $data=mysqli_query($mysqli,"SELECT * FROM Measurement");
    ?>
    var myLabels=[<?php
    while($info=mysqli_fetch_array($data))
        echo '"'.$info['measurementTime'].'",'; /* The concatenation operator '.' is used here to create string values from our database names. */
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
            "text":"Medidor de Rotações por Minuto(RPM)"
        },
        "scale-x":{
            "labels":myLabels
        },
        "series":[
            {
                "values":myData
            }
    ]
    }
    });
    };
    </script>

<div id='myChart'></div>

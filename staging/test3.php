<?php require("./phpdb/phpgeneralfun.php"); ?>


<!DOCTYPE HTML>
<html>
<head>
    <style>
data-pfi-button {
    cursor: pointer;
    margin-left: 20%;
    color: black;
    font-size: 25px;
    background: red;
    margin-right: 20%;
    text-align: center;
    border-radius: 8px;
}
</style>

    <meta name="viewport" content="width=device-width">
    <meta charset="UTF-8">

</head>

<body>

<!-- 2nd block  -->
<div class="block_666" data-pfi-area="true" id="showmeee">
    </div>
    <br>
<br>

    <!-- 2nd block /Purchase button -->
    <div class="merchant-button btn2" id="hideme2" data-pfi-button="true" data-pfi-button-id="hidebutton2" data-pfi-service-id="330" data-pfi-reference="<?php echo $out1;?>" data-pfi-content-url="/staging/landing.php" data-pfi-content-id="<?php echo $out2;?>">
        Buy
    </div>
    <br>
    <br>


</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
<br>
<h3>Notifications (last 50 received)</h3>
<table style="
    margin-left: 1%;
    margin-right: 1%;
    width: 98%;
">
    <thead align="left" style="display: table-header-group">
    <tr>
        <th>id</th>
        <th>db_insert_time</th>
        <th>dr_recive_time</th>
        <th>correlationid</th>
        <th>transid</th>
        <th>callbackData</th>
        <th>destination</th>
        <th>deliveryStatus</th>
        <th>deliveryChannel</th>
        <th>code</th>
        <th>description</th>
        <th>raw</th>

    </tr>
    </thead>
    <tbody>
    <?php

    //Establish a connection
    $con = mysqli_connect("localhost", "remote", "foobar", "imiconnect");
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    };

    if (empty($callbackData))
    {
        $callbackData = 'empty';
    };

    // Perform queries

    $query = mysqli_query($con,"SELECT id,db_insert_time,dr_recive_time,correlationid,transid,callbackData,destination,deliveryStatus,deliveryChannel,code,description,raw FROM sms_dr order by id desc LIMIT 0, 50;");


    //sendmessage();
    // call_user_func('open');

        // Print a nice list of users in the format of:
        // * name (username)



        while ($row = mysqli_fetch_assoc($query)) {
            //echo '<li>' . $row['name'] . ' (' . $row['PGWMerchantId'] . ')</li>';
            echo '<tr class="item_row"><td>'.$row['name'].'</td>';
            echo '<td>'.$row['id'].'</td>';
            echo '<td>'.$row['db_insert_time'].'</td>';
            echo '<td>'.$row['dr_recive_time'].'</td>';
            echo '<td>'.$row['transid'].'</td>';
            echo '<td>'.$row['callbackData'].'</td>';
            echo '<td>'.$row['destination'].'</td>';
            echo '<td>'.$row['deliveryStatus'].'</td>';
            echo '<td>'.$row['deliveryChannel'].'</td>';
            echo '<td>'.$row['code'].'</td>';
            echo '<td>'.$row['description'].'</td>';
            echo '<td>'.$row['raw'].'</td>';
            echo '</tr>';

        }


     ?>

    </tbody>
</table>
<br>

<?php

function getGUID(){
    if (function_exists('com_create_guid')){
        return com_create_guid();
    }else{
        mt_srand((double)microtime()*10000);
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);
        $uuid =
            substr($charid, 0, 8).$hyphen
            .substr($charid, 8, 4).$hyphen
            .substr($charid,12, 4).$hyphen
            .substr($charid,16, 4).$hyphen
            .substr($charid,20,12);
        return $uuid;
    }
};

$GUID = getGUID();
?>

<?php

if(isset($_POST['url']))
{

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $_POST['url'].$_POST['key_header']."/".$_POST['transid'],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);
    $info = curl_getinfo($curl);

    curl_close($curl);


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

   // mysqli_query($con,"INSERT INTO sms_sent (header_key,notifyurl,senderid,msg,j_type,deliverychannel,correlationid,customerid,response_code,total_time_taken,namelookup_time,connect_time,response_json) VALUES ('".$_POST['key_header']."','".$_POST['notifyurl']."','".$_POST['senderid']."','".$_POST['text']."','".$_POST['type']."','".$_POST['deliverychannel']."','".$_POST['correlationid']."','".$_POST['customerid']."','".$info['http_code']."','".$info['total_time']."','".$info['namelookup_time']."','".$info['connect_time']."','".$runy."')");
    mysqli_close($con);
}

//sendmessage();
// call_user_func('open');
?>

<div id="chartContainer_header" align="center" class="chart1">
    <li><h1>IMIConnect GET Trans Status API</h1></li>
    <br>
    <form name="htmlform" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <table width="550px">
            </tr>

            <tr>
                <td valign="top">
                    <label for="server">URL</label>
                </td>
                <td valign="top">
                    <input  type="text" name="url" maxlength="80" size="50" value="<?php if(isset($_POST['url'])) {echo $_POST['url'];}else{echo "https://api.imiconnect.com/resources/v1/messaging/status/";};?>">
                </td>
            </tr>
            <tr>
                <td valign="top">
                    <label for="server">Service Key</label>
                </td>
                <td valign="top">
                    <input  type="text" name="key_header" maxlength="80" size="50" value="<?php if(isset($_POST['key_header'])) {echo $_POST['key_header'];}else{echo "ba8ca2eb-3ea9-11e6-b778-005056ad794f";};?>">
                </td>
            </tr>


            <tr>
                <td valign="top"">
                <label for="login">Trans ID</label>
                </td>
                <td valign="top">
                    <input  type="text" name="transid" maxlength="80" size="50"value="<?php if(isset($_POST['transid'])) {echo $_POST['transid'];}else{echo "404568be-230a-4918-944a-f2d5a474757e";};?>">
                </td>
            </tr>

            </tr>


            <tr>
                <td colspan="2" style="text-align:center">
                    <input type="submit" value="Send">
                </td>
            </tr>
        </table>
    </form>
    <br><br>

    <p><li><h1>Output</h1></li>
    <br>
    <table width="550px">

        <tr>
            <td valign="top">
                <label for="details">Sent</label>
            </td>
            <td valign="top">
                <textarea  name="details" maxlength="500" cols="99" rows="20"><?php echo $_POST['url'].$_POST['key_header']."/".$_POST['transid'] ?></textarea>
                </textarea>
            </td>
        </tr>


        <tr>
            <td valign="top">
                <label for="details">RESPONSE</label>
            </td>
            <td valign="top">
                <textarea  name="details" maxlength="500" cols="99" rows="20">
                    <?php

                    print_r($response);
                   echo "";
                    echo "";
                    echo "";
                    print_r($err);
                    echo "";
                    echo "";
                    echo "";

                    print_r($info);

                    ?>
                </textarea>
                </textarea>
            </td>
        </tr>

    </table>
    <br>
    <br>
    <br>
    <br>
    <br>



</div>
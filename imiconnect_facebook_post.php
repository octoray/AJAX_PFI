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

    $request_headers = array();
    $request_headers[] = 'key: '.$_POST['key_header'];
    $request_headers[] = 'Accept: application/json';
    $request_headers[] = 'Accept-Charset: UTF-8';
    $request_headers[] = 'Encoding: UTF-8';
    $request_headers[] = 'Content-Type: application/json';

    $ch = curl_init($_POST['url']);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_URL, $_POST['url']);
    curl_setopt($ch, CURLOPT_POST, 1);


    $post_json = '
    {
  "deliverychannel": "'.$_POST['deliverychannel'].'",
  "channels": {
        "OTT-Messaging": {
            "fb": {
                "text": "'.$_POST['text'].'"
            }
        }
    },
    "destination": [{
        "psid": [
            "'.$_POST['psid'].'"
        ]
    }]
}
    ';

    $data = json_decode($post_json, TRUE);


    //$query = http_build_query($data);

    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_json);

    $runy = curl_exec($ch);
    $info = curl_getinfo($ch);



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

    //mysqli_query($con,"INSERT INTO fb_sent (header_key,deliverychannel,msg,psid,response_code,total_time_taken,namelookup_time,connect_time,response_json) VALUES ('".$_POST['key_header']."','".$_POST['notifyurl']."','".$_POST['senderid']."','".$_POST['text']."','".$_POST['type']."','".$_POST['deliverychannel']."','".$_POST['correlationid']."','".$_POST['customerid']."','".$info['http_code']."','".$info['total_time']."','".$info['namelookup_time']."','".$info['connect_time']."','".$runy."')");
    mysqli_query($con,"INSERT INTO fb_sent(header_key,msg,deliverychannel,psid,response_code,total_time_taken,namelookup_time,connect_time,response_json)VALUES('".$_POST['key_header']."','".$_POST['text']."','".$_POST['deliverychannel']."','".$_POST['psid']."','".$info['http_code']."','".$info['total_time']."','".$info['namelookup_time']."','".$info['connect_time']."','".$runy."')");
    mysqli_close($con);
}

//sendmessage();
// call_user_func('open');
?>

<div id="chartContainer_header" align="center" class="chart1">
<li><h1>IMIConnect Facebook POST</h1></li>
<br>
<form name="htmlform" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <table width="550px">
        </tr>

        <tr>
            <td valign="top">
                <label for="server">URL</label>
            </td>
            <td valign="top">
                <input  type="text" name="url" maxlength="80" size="50" value="<?php if(isset($_POST['url'])) {echo $_POST['url'];}else{echo "https://api.imiconnect.com/resources/v1/messaging";};?>">
            </td>
        </tr>
        <tr>
            <td valign="top">
                <label for="server">Header (key)</label>
            </td>
            <td valign="top">
                <input  type="text" name="key_header" maxlength="80" size="50" value="<?php if(isset($_POST['key_header'])) {echo $_POST['key_header'];}else{echo "ba8ca2eb-3ea9-11e6-b778-005056ad794f";};?>">
            </td>
        </tr>

        <tr>
            <td valign="top">
                <label for="ip">BODY (deliverychannel)</label>
            </td>
            <td valign="top">
                <input  type="text" name="deliverychannel" maxlength="80" size="50" value="<?php if(isset($_POST['deliverychannel'])) {echo $_POST['deliverychannel'];}else{echo "fb";};?>"><br><br><br>
            </td>
        </tr>


        </tr>
        <tr>
            <td valign="top">
                <label for="server">BODY (text)</label>
            </td>
            <td valign="top">
                <input  type="text" name="text" maxlength="80" size="50" value="<?php if(isset($_POST['text'])) {echo $_POST['text'];}else{echo "IMIconnect FB Test 000001";};?>">
            </td>
        </tr>



        <tr>
            <td valign="top">
                <label for="ip">BODY (psid)</label>
            </td>
            <td valign="top">
                <input  type="text" name="psid" maxlength="80" size="20" value="<?php if(isset($_POST['psid'])) {echo $_POST['psid'];}else{echo "xxxxxxxxxxxx";};?>">
            </td>
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
            <label for="details">JSON Sent</label>
        </td>
        <td valign="top">
            <textarea  name="details" maxlength="500" cols="99" rows="20"><?php echo $post_json ?></textarea>
            </textarea>
        </td>
    </tr>

    <tr>
        <td valign="top">
            <label for="details">Values Set</label>
        </td>
        <td valign="top">
            <textarea  name="details" maxlength="500" cols="99" rows="20"><?php print_r($_POST);?></textarea>
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

                print_r($info);


                print_r($runy);

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
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
    $request_headers[] = 'Accept-Charset: utf-8';
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
	"notifyurl": "'.$_POST['notifyurl'].'",
	"channels": {
		"sms": {
			"senderid": "'.$_POST['senderid'].'",
			"text": "'.$_POST['text'].'",
			"type": "'.$_POST['type'].'"
		}
	},
	"deliverychannel": "'.$_POST['deliverychannel'].'",
	"correlationid": "'.$_POST['correlationid'].'",
	"destination": [
		{
			"customerid": [
				"'.$_POST['customerid'].'"
			]
		}
	]
}
    ';

    $data = json_decode($post_json, TRUE);


    $query = http_build_query($data);

    curl_setopt($ch, CURLOPT_POSTFIELDS, $query);

    $runy = curl_exec($ch);
    $info = curl_getinfo($ch);

    //echo '<br>';
    //echo "URL POSTED TO IS: ".print_r($post_json);
//echo $info['url'];
    //echo '<br>';
//echo '<br>';
   // echo "POSTED JSON IS:"; print '<BR>';
    //print_r($post_json);
    //print '<BR>';
    //echo "RESPONSE CODE: ".$info['http_code'];
    //print '<BR>';
    //echo "RESPONSE  IS:  "  .$runy;
    //print '<BR>';
    //echo "Remote IP:  ".$info['primary_ip'];
    //print '<BR>';
    //echo "Time TAken:  ".$info['total_time'];
    //return $info['http_code'];
}



//sendmessage();
// call_user_func('open');
?>

<div id="chartContainer_header" align="center" class="chart1">
<li><h1>IMIConnect SMS POST</h1></li>
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
                <label for="server">Key (Header)</label>
            </td>
            <td valign="top">
                <input  type="text" name="key_header" maxlength="80" size="50" value="<?php if(isset($_POST['key_header'])) {echo $_POST['key_header'];}else{echo "ba8ca2eb-3ea9-11e6-b778-005056ad794f";};?>">
            </td>
        </tr>

        <tr>
            <td valign="top">
                <label for="ip">BODY (notifyurl)</label>
            </td>
            <td valign="top">
                <input  type="text" name="notifyurl" maxlength="80" size="50" value="<?php if(isset($_POST['notifyurl'])) {echo $_POST['notifyurl'];}else{echo "";};?>"><br><br><br>
            </td>
        </tr>

        <tr>
            <td valign="top"">
            <label for="login">BODY (senderid)</label>
            </td>
            <td valign="top">
                <input  type="text" name="senderid" maxlength="80" size="50"value="<?php if(isset($_POST['senderid'])) {echo $_POST['senderid'];}else{echo "CONNCT";};?>">
            </td>
        </tr>

        </tr>
        <tr>
            <td valign="top">
                <label for="server">BODY (text)</label>
            </td>
            <td valign="top">
                <input  type="text" name="text" maxlength="80" size="50" value="<?php if(isset($_POST['text'])) {echo $_POST['text'];}else{echo "IMIconnect Test 000001";};?>">
            </td>
        </tr>

        <tr>
            <td valign="top">
                <label for="ip">BODY (type)</label>
            </td>
            <td valign="top">
                <input  type="text" name="type" maxlength="80" size="50" value="<?php if(isset($_POST['type'])) {echo $_POST['type'];}else{echo "1";};?>"><br><br><br>
            </td>
        </tr>

        <tr>
            <td valign="top">
                <label for="ip">BODY (deliverychannel)</label>
            </td>
            <td valign="top">
                <input  type="text" name="deliverychannel" maxlength="80" size="50" value="<?php if(isset($_POST['deliverychannel'])) {echo $_POST['deliverychannel'];}else{echo "sms";};?>">
            </td>
        </tr>

        <tr>
            <td valign="top">
                <label for="ip">BODY (correlationid)</label>
            </td>
            <td valign="top">
                <input  type="text" name="correlationid" maxlength="80" size="50" value="<?php if(isset($_POST['correlationid'])) {echo $_POST['correlationid'];}else{echo(mt_rand());};?>"><br><br><br>
            </td>
        </tr>

        <tr>
            <td valign="top">
                <label for="ip">BODY (customerid)</label>
            </td>
            <td valign="top">
                <input  type="text" name="customerid" maxlength="80" size="20" value="<?php if(isset($_POST['customerid'])) {echo $_POST['customerid'];}else{echo "0000001";};?>">
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
            <label for="details">BODY</label>
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


    <tr>
        <td valign="top">
            <label for="ip">Total Bind/Send Time</label>
        </td>
        <td valign="top">
            <input  type="text" name="t" maxlength="80" size="20" value="<?php echo $time;?>">
        </td>
    </tr>
</table>
<br>
<br>
<br>
<br>
<br>



</div>
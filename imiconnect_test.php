<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width">
    <meta charset="UTF-8">
    <!-- activate Menu -->

<?php
?>
<h1> Options </h1><br>
<p>
<a href="http://octoraypfi.co.uk/imiconnect_sms_post.php">SMS Send API</a>
Try it »
</p>

<p>
    <a href="http://octoraypfi.co.uk/imiconnect_facebook_post.php">Facebook Send API</a>
    Try it »
</p>

<p>
    <a href="http://octoraypfi.co.uk/imiconnect_twitter_post.php">Twitter Send API</a>
    Try it »
</p>

<p>
    <a href="http://octoraypfi.co.uk/trans_status_imiconnect.php">Get Transaction Status API</a>
    Try it »
</p>

<p>
    <a href="#">Notifications Received</a>
    See Data (coming soon) »
</p>

<br><br>
<h3> Tool for testing IMIconnect SMS API. loges all in db detail below. can match up DR's etc
    will add more APIs to it later.</h3>




<p>Mysql DB:<br>
    IP: 212.71.238.228<br>
    user: remote<br>
    pw: foobar<br>
    schema: imiconnect<br></p>


<p>   -- sent messages
    SELECT
    *
    FROM
    `imiconnect`.`sms_sent`
    ORDER BY id DESC
    LIMIT 0, 999999 ;</p>


<p>   -- drs recived
    SELECT
    *
    FROM
    `imiconnect`.`sms_dr`
    ORDER BY id DESC
    LIMIT 0, 999999 ;</p>


<p>  match up via correlation id</p>

    </h3>
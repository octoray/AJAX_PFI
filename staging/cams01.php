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
}

$GUID = getGUID();
if (isset($_SERVER['HTTP_X_PFI_SESSIONTOKEN'])) {
    header("X-PFI-SessionToken: ".$_SERVER['HTTP_X_PFI_SESSIONTOKEN']);
    $set = 'set';
}else{
    header("X-PFI-SessionToken: ".$GUID);
    $notset = 'not set';
};
?>




<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" ng-app="prelandingModule">


<head>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content='width=device-width, initial-scale=1.0, maximum-scale=1.0, maximum-scale=1.0, user-scalable=0, minimal-ui'/>

    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="contentLevel" content="soft"/>
    <title>69CamsBoxtest</title>

    <link href="http://octoraypfi.co.uk/staging/css/fonts.css" rel="stylesheet"/>

    <link href="http://octoraypfi.co.uk/staging/css/bootstrap.min.css" rel="stylesheet"/>


    <link href="http://octoraypfi.co.uk/staging/css/custom.css" rel="stylesheet"/>

    <!--
    <script>
        var modelId = 808271;
        //var userId = "ce92458c-5ced-4c46-9056-e561e509d754";
        var prelanderTime = 60;
        var camplaceCallbackUrl = "http://enzo.69camsbox.com";

        var paths = {
            root: '/cams/'
        };
    </script>
    -->

    <!--
    <script src="/cams/bower_components/jquery/dist/jquery.min.js"></script>

    <script src="/cams/bower_components/angular/angular.min.js"></script>
    <script src="/cams/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/cams/bower_components/angular-resource/angular-resource.min.js"></script>
    <script src="/cams/bower_components/angular-route/angular-route.min.js"></script>
    <script src="/cams/bower_components/angular-bootstrap/ui-bootstrap-tpls.min.js"></script>
    <script src="/cams/bower_components/underscore/underscore-min.js"></script>
    <script src="/cams/bower_components/angular-touch/angular-touch.min.js"></script>

    <script src="/cams/services/userService.js"></script>
    <script src="/cams/modules/models/FilterModelsService.js"></script>
    <script src="/cams/modules/models/directives/AddedToFavouriteDirective.js"></script>
    <script src="/cams/modules/models/models.js"></script>

    <script src="/cams/modules/chat/directives/cursorBlinkDirective.js"></script>
    <script src="/cams/modules/chat/chat.js"></script>
    <script src="/cams/modules/chat/ChatService.js"></script>
    <script src="/cams/modules/chat/EventMessageReceiver.js"></script>
    <script src="/cams/modules/chat/ChatTime.js"></script>
    <script src="/cams/modules/users/users.js"></script>
    <script src="/cams/services/rtclient.js"></script>


    <script src="/cams/modules/prelanding/prelanding.js"></script>
    -->


</head>
<body ng-controller="prelandingController" ng-cloak="">
<div id="navigationRow" class="header">
    <!--MODEL NAME-->
    <img class="prelander-logo" ng-src="http://enzo.69camsbox.com/cams/images/cams-logo1.png"/>
    <span class="preander-modelname pull-right">{{profile.displayname}}</span>
</div>


<div class="container-fluid">

    <!-- Main page -->
    <div id="main" class="row">
        <div class="col-xs-12 chat-page-padding">

            <div ng-show="!stopped">

                <div ng-swipe-left="swipeLeft()" ng-swipe-right="swipeRight()" id="video" class="camera">
                    <!-- Video placeholder - Camplace will inject the video here -->
                    <div id="videoPlaceholder"></div>
                    <div class="prelander-swipe-holder">
                        <img class="prelander-swipe-icon" src="http://enzo.69camsbox.com/cams/images/swipe_icon.png" alt="swipeIcon"/>
                        <p class="prelander-swipe-text">Swipe for more models</p>
                    </div>
                </div>

            </div>

            <div ng-swipe-left="swipeLeft()" ng-swipe-right="swipeRight()" ng-show="stopped">
                <img class="tag-offline no-tokens" ng-src="{{profile.avatarImageUrl}}" title="{{profile.chatname}}"/>

                <div class="prelander-swipe-holder">
                    <img class="prelander-swipe-icon" src="http://enzo.69camsbox.com/cams/images/swipe_icon.png" alt="swipeIcon"/>
                    <p class="prelander-swipe-text">Swipe for more models</p>
                </div>
            </div>


        </div>


        <div class="col-xs-12 chat-box">
            <!--<div class="col-xs-6 chat-tabs chat-tabs-txt" style="color: #ffff00"><img class="chat-tabs-icon" ng-src="/cams/images/message_yellow.png">Secret message</div>-->

            <div class="col-xs-12 chat-input" style="padding-left: 6px; padding-right: 6px; padding-top: 6px; z-index:0;">
                <div class="input-group chat-holder">

                    <form ng-submit="sendMessage()">
                        <input cursor-blink ng-model="message" id="commandLine" type="text" class="form-control" style="background-color: #edecea; height: 36px;"/>
                        <input type="submit" ng-show="false"/>
                    </form>
                    <div class="chat-input-underline"></div>
                            <span class="input-group-btn">
                                <a class="btn btn-default send-button" ng-click="sendMessage()" scroll-to style="border-top-right-radius: 0;">
                                    <img class="send-icon" ng-src="http://enzo.69camsbox.com/cams/images/sendicon_small.png"/>
                                </a>
                            </span>
                </div>
            </div>

            <div class="col-xs-12" style="color: #000000; overflow: hidden;">
                <!--Public chat-->
                <p ng-repeat="message in messages"><span style="color: #0092db;">{{message.Event}}: </span>
                    <span ng-bind-html="message.Data"></span></p>
            </div>
        </div>

    </div>

</div>





</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head><title>TEMPLATE!!!!</title>
    <!--BEGIN head_style_links-->
    <?php  include("parts/head_style_links.php");?>
    <!--END head_style_links-->
</head>
<body class=" ">

<!--BEGIN BACK TO TOP-->
<a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
<!--END BACK TO TOP-->

<!--BEGIN TOPBAR MENU-->
<?php  include("parts/top_bar.php");?>
<!--END TOPBAR MENU -->

<div id="wrapper">
    <!--BEGIN SIDEBAR MENU-->
    <?php  include("parts/side_bar.php");?>
    <!--END SIDEBAR  MENU-->

    <!--BEGIN PAGE WRAPPER-->
    <div id="page-wrapper">
        <!--BEGIN TITLE & BREADCRUMB PAGE-->
        <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
            <div class="page-header pull-left">
                <div class="page-title">TEMPLATE !!</div>
            </div>

            <div class="btn btn-blue reportrange hide"><i class="fa fa-calendar"></i>&nbsp;<span></span>&nbsp;report&nbsp;<i
                    class="fa fa-angle-down"></i><input type="hidden" name="datestart"/><input type="hidden"
                                                                                               name="endstart"/>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--END TITLE & BREADCRUMB PAGE-->



        <!--BEGIN CONTENT-->
        <div class="page-content">
        <!--INSERT IN HERE-->
        </div>
        <!--END CONTENT-->
    </div>

    <!--BEGIN FOOTER-->
    <?php  include("parts/footer.php");?>
    <!--END FOOTER-->

    <!--END PAGE WRAPPER-->
</div>


<!--BEGIN LOADING SCRIPTS FOR PAGE-->
<?php  include("parts/scripts.php");?>
<!--END LOADING SCRIPTS FOR PAGE-->

</body>
</html>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> 
<?= $this->element('head'); ?>

<body id="top-section" data-spy="scroll" data-target="#topnav"  data-offset="70" >
    <?= $this->Flash->render() ?>
    <div class="container">            
        <?= $this->element('header'); ?>
        <!-- MAIN -->
        <div id="main" role="main">
            <?= $this->fetch('content') ?>
        </div>
        <!-- ENDS MAIN -->
    </div>

    <!-- JavaScript at the bottom for fast page loading -->
    <script src="js/jquery-1.7.1.min.js"></script>
    <!-- scripts concatenated and minified via build script -->
    <script src="js/plugins.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <script src="js/custom.js"></script>
</div>
</body>
</html>

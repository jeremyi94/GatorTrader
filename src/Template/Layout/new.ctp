<?php ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> 
<!--<![endif]-->
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
        <?= $this->element('footer'); ?>
    </div>

    <!-- JavaScript at the bottom for fast page loading -->
    <script src="<?= $this->Url->build('/webroot/js/jquery-1.7.1.min.js', true); ?>"></script>
    <script src="<?= $this->Url->build('/webroot/js/modernizr-2.5.3.min.js', true); ?>"></script>

    <!-- scripts concatenated and minified via build script -->
    <script src="<?= $this->Url->build('/webroot/js/plugins.js', true); ?>"></script>
    <script src="<?= $this->Url->build('/webroot/js/bootstrap-dropdown.js', true); ?>"></script>
    <script src="<?= $this->Url->build('/webroot/js/bootstrap-scrollspy.js', true); ?>"></script>
    <script src="<?= $this->Url->build('/webroot/js/bootstrap-tab.js', true); ?>"></script>
    <script src="<?= $this->Url->build('/webroot/js/bootstrap-collapse.js', true); ?>"></script>
    <script src="<?= $this->Url->build('/webroot/js/fancybox/jquery.fancybox-1.3.4.pack.js', true); ?>"></script>
    <script src="<?= $this->Url->build('/webroot/js/custom.js', true); ?>"></script>
</body>

</html>

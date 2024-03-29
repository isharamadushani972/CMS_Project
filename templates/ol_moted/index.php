<?php
/*---------------------------------------------------------------
# Package - Joomla Template based on Sboost Framework   
# ---------------------------------------------------------------
# Author - olwebdesign http://www.olwebdesign.com
# Copyright (C) 2008 - 2019 olwebdesign.com. All Rights Reserved.
# Websites: http://www.olwebdesign.com
-----------------------------------------------------------------*/
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');
require_once(dirname(__FILE__).'/lib/sboost.php');
?>
<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language;?>" >
<head>
<?php
$sboost->loadHead();
$sboost->addCSS('template.css,joomla.css,menu.css,override.css,modules.css,social.css,header.css');
if ($sboost->isRTL()) $sboost->addCSS('template_rtl.css');
?>
<?php if($this->params->get('social_api_type', '1') == '1') : ?>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/social.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
<?php if($this->params->get('show_awesome')=='1') : ?>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/font-awesome.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/js/custom.js"></script>
</head>
<?php $sboost->addFeatures('ie6warn'); ?>
<body class="bg <?php echo $sboost->direction ?> clearfix">
<div class="mx-base">
<div id="setTop"> 
<header class="header desk mxt stuck-boxed-false top-true fixed-true">
<div class="header-top">
<div class="mx-base">
<div class="container">
<div class="slogan">
<?php 
$sboost->addModules('extra'); // module extra
?>
</div>
<div class="header-top-menu">
<?php 
$sboost->addModules('top-menu'); // module top-menu
?>
</div>
</div>
</div>
</div>
<div class="header-body">
<div class="mx-base">	
<?php 
$sboost->addFeatures('logo');//Logo
?>
<div class="main_menu">
<?php 
$sboost->addModules("mainmenu"); //position mainmenu
?>
</div>
</div>
</div>
</header>
</div>
</div>
<div id="headershow" class="clearfix">	
<?php if ($sboost->showSlideItem()): ?>
<?php include 'slider/slider.php'; ?> 
<?php else: ?>
<div id="fixTop">
</div>
<?php endif; ?>
<?php
$sboost->addModules("header"); //position header
?>
</div>
<?php if ($this->countModules('top')) : ?>
<div class="mx-base">
<?php 
$sboost->addModules('top', 'mx_xhtml'); //top 
?>
</div>
<?php endif; ?>
<?php if ($this->countModules( 'top1 or top2 or top3 or top4 or top5 or top6' )) : ?>
<div id="tophead">
<div class="mx-base">
<?php
$sboost->addModules('top1, top2, top3, top4, top5, top6', 'mx_xhtml', 'mx-userpos'); //positions top1-top6 
?>
</div>
</div>
<?php endif; ?>
<div class="mx-base main-bg clearfix">	
<?php 
$sboost->addModules("breadcrumbs"); //breadcrumbs
?>
<div class="clearfix">
<?php $sboost->loadLayout(); //mainbody ?>
</div>	
</div>

<?php if ($this->countModules( 'map' )) : ?>
<div id="mapmod">
<div class="mx-base">
<?php $sboost->addModules('map', 'mx_xhtml'); //map  ?>
</div>	
</div>
<?php endif; ?>
<?php if ($this->countModules( 'news' )) : ?>
<div id="bott_main">
<div class="mx-base clearfix">	
<?php
$sboost->addModules('news', 'ju_xhtml'); //bottom 
?>
</div>
</div>
<?php endif; ?> 
<?php
$sboost->addModules('bottom1, bottom2, bottom3, bottom4, bottom5, bottom6', 'mx_block', 'mx-bottom', '', false, true); //positions bottom1-bottom6 
?>
<!--Start Footer-->
<div id="mx-footer" class="clearfix">
<div class="mx-base">
<?php $sboost->addFeatures('social'); //social ?>
<div id="mx-bft" class="clearfix">
<div class="cp">
<?php $sboost->addFeatures('copyright,designed')  ?>					
</div>
<?php 	
$sboost->addFeatures('gotop');		
$sboost->addModules("footer-nav"); 
?>
</div>
</div>
</div>
<!--End Footer-->


<?php 
$sboost->addFeatures('analytics,jquery,ieonly'); /*--- analytics, jquery features ---*/
?>
<jdoc:include type="modules" name="debug" />
</body>
</html>
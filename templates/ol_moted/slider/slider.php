<?php

defined('_JEXEC') or die;

$slide = $this->params->get('slides');
$tempPath = JURI::base(true).'/templates/ol_moted/slider/';
$document = JFactory::getDocument(); 
$eskin = $this->params->get('eskin');
$pojo = $this->params->get('pojo');
$jqueryload = $this->params->get('jqueryload');
$slider_items    = $this->params->get('slider_items');
$img = $this->params->get('img');
$title = $this->params->get('title');
$readmore = $this->params->get('readmore');
$url = $this->params->get('url');
$target = $this->params->get('target');


$document->addStyleSheet($tempPath.'assets/css/style.css');
$document->addScript($tempPath.'assets/js/modernizr.custom.js');
?>
<div id="vs-container" class="vs-container">
<header class="vs-header">
<ul class="vs-nav">
<?php foreach ($slider_items as $item) : ?>
<?php if (!empty($item->img)) : ?><li></li><?php endif;?>
<?php endforeach; ?>
</ul>
</header>
<div class="vs-wrapper">          
<?php $x=1; foreach ($slider_items as $item) : ?>
<section id="section-<?php echo $x; $x++; ?>">
<div class="vs-content"><img src="<?php echo $item->img; ?>"/>
</div>
</section>
<?php endforeach; ?>
</div>
</div>
<script src="<?php echo $tempPath ; ?>assets/js/classie.js"></script>
<script src="<?php echo $tempPath ; ?>assets/js/hammer.min.js"></script>
<script src="<?php echo $tempPath ; ?>assets/js/main.js"></script>

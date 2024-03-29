<?php
/**
 * @version   $Id: item.php 10885 2013-05-30 06:31:41Z btowles $
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2013 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */

?>
<li data-strips-item>
	<div class="sprocket-strips-item" data-strips-content>
		<?php if ($item->getPrimaryImage()) :?>
		
		
		   <figure class="uk-overlay uk-overlay-hover">
			<a href="<?php echo $item->getPrimaryLink()->getUrl(); ?>"><img class="uk-overlay-spin" src="<?php echo $item->getPrimaryImage()->getSource(); ?>" alt="<?php echo $item->getPrimaryImage()->getAlttext(); ?>" /></a>
			</figure>
		
		<?php endif; ?>
		<div class="sprocket-strips-content">
			<?php if ($item->getTitle()) : ?>
			<h4 class="sprocket-strips-title" data-strips-toggler>
				<?php if ($item->getPrimaryLink()) : ?><a href="<?php echo $item->getPrimaryLink()->getUrl(); ?>"><?php endif; ?>
					<?php echo $item->getTitle();?>
				<?php if ($item->getPrimaryLink()) : ?></a><?php endif; ?>
			</h4>
			<?php endif; ?>
			<?php if ($item->getText()) :?>
				<span class="sprocket-strips-text">
					<?php echo $item->getText(); ?>
				</span>
			<?php endif; ?>
			<?php if ($item->getPrimaryLink()) : ?>
			<a href="<?php echo $item->getPrimaryLink()->getUrl(); ?>" class="readon btn"><span><?php rc_e('READ_MORE'); ?></span></a>
			<?php endif; ?>
		</div>
	</div>
</li>

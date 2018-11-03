<?php
/**
 * @copyright	Copyright (c) 2018 dd_j_mod_slider. All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// no direct access
defined('_JEXEC') or die;
JHtml::_('jquery.framework');
JHtml::_('script', 'mod_dd_j_mod_slider/article_slides.js', array('version' => 'auto', 'relative' => true));
JHtml::_('stylesheet', 'mod_dd_j_mod_slider/article_slides.css', array('version' => 'auto', 'relative' => true));
JHtml::_('stylesheet', 'mod_dd_j_mod_slider/style.css', array('version' => 'auto', 'relative' => true));
$slides = $params->get('dd_article_slides_fields');
$class_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$html = '<div id="dd_article_slides" class="'.$class_sfx.'">';
$i = 0;
if(count( (array)$slides ) > 0){
foreach ($slides as $slide)
{
	$i++;
	$html .= '<div id="dd_article_slides_fields' . $i . '" class="article_slide">';
	$html .=    '<div class="article_slide_inner">';
	$html .=        '<img src="' . $slide->image . '" alt="'. $slide->image_alt .'">';
	$html .=        '<div class="article_slide_info">';
	$html .=            '<p>' . $slide->image_desc .'</p>';
	$html .=            '<small>Bild: '. $slide->image_source . '</small>';
	$html .=        '</div>';
	$html .=        '<button class="article_slide_info_toggle">';
	$html .=            '<span class="icon-dd-arrow-up"></span>';
	$html .=            '<span class="icon-dd-arrow-down"></span>';
	$html .=        '</button>';
	$html .=    '</div>';
	$html .= '</div>';
}

	$html .= '<div class="article_slides_controls">';
	$html .=     '<span class="icon-dd-arrow-left" id="slide-left"></span>';
	$html .=     '<span id="article_slide_active">1</span> / <span>'. count( (array)$slides ) .'</span>';
	$html .=     '<span class="icon-dd-arrow-right" id="slide-right"></span>';
	$html .= '</div>';

$html .= '</div>';
echo $html;
}else{
	echo JText::_('MOD_DD_J_MOD_SLIDER_NO_SLIDES');
}
?>

<?php
/**
 * @version    $Id$
 * @package    JSN_PageBuilder
 * @author     JoomlaShine Team <support@joomlashine.com>
 * @copyright  Copyright (C) 2012 JoomlaShine.com. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: http://www.joomlashine.com
 * Technical Support:  Feedback - http://www.joomlashine.com/contact-us/get-support.html
 */

// No direct access to this file.
defined('_JEXEC') || die('Restricted access');

/**
 * Market Item shortcode element
 *
 * @package  JSN_PageBuilder
 * @since    1.0.0
 */
class JSNPBShortcodeMarketItem extends IG_Pb_Child
{

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Include admin scripts
     */
    public function backend_element_assets()
    {
    }

    /**
     * DEFINE configuration information of shortcode
     *
     * @return mixed
     */
    public function element_config()
    {
        $this->config['shortcode'] = 'pb_market_item';
        $this->config['exception'] = array(
            'item_text'        => JText::_('JSN_PAGEBUILDER_ELEMENT_MARKET'),
            'data-modal-title' => JText::_('JSN_PAGEBUILDER_ELEMENT_MODAL_TITLE_PB_MARKET_ITEM')
        );
    }

    /**
     * DEFINE setting options of shortcode in backend
     */
    public function backend_element_items()
    {
        $this->frontend_element_items();
    }

    /**
     * DEFINE setting options of shortcode in frontend
     */
    public function frontend_element_items()
    {
        $this->items = array(
            'Notab' => array(
                array(
                    'name'    => JText::_('JSN_PAGEBUILDER_DEFAULT_ELEMENT_TEXT'),
                    'id'      => 'market_item_text',
                    'type'    => 'text_field',
                    'class'   => 'jsn-input-xxlarge-fluid',
                    'std'     => JText::_('JSN_PAGEBUILDER_ELEMENT_MARKET_ITEM_STD'),
                    'role'    => 'title',
                    'tooltip' => JText::_('JSN_PAGEBUILDER_DEFAULT_ELEMENT_TEXT_DES')
                ),
                array(
                    'name'    => JText::_('JSN_PAGEBUILDER_ELEMENT_MARKET_ITEM_SYMBOL_CODE'),
                    'id'      => 'market_item_symbol_code',
                    'type'    => 'text_field',
                    'class'   => 'jsn-input-xxlarge-fluid',
                    'std'     => 'EURUSD=X',
                    'tooltip' => JText::_('JSN_PAGEBUILDER_ELEMENT_MARKET_ITEM_SYMBOL_CODE_DES')
                ),
            )
        );
    }

    /**
     * DEFINE shortcode content
     *
     * @param array $attributes
     * @param mixed $content
     *
     * @return string
     */
    public function element_shortcode($attributes = null, $content = null)
    {
        extract(JSNPagebuilderHelpersShortcode::shortcodeAtts($this->config['params'], $attributes));

        // Convert Yahoo symbols to RateAPI symbols.
	    $symbols = current(explode('=', $attributes['market_item_symbol_code']));
	    $base = substr($symbols, 0, 3);
	    $compare = substr($symbols, 3);
	    $symbols = "{$base},{$compare}";
        $queryString = "https://ratesapi.io/api/latest?symbols={$symbols}&base={$base}";

        try {
            $result = JSNUtilsHttp::get($queryString);
            $dataRaw = json_decode($result['body'], true);

            // Get the previous rate.
	        $date = date('Y-m-d', strtotime('-1 day', strtotime($dataRaw['date'])));
	        $result = JSNUtilsHttp::get("https://ratesapi.io/api/{$date}?symbols={$symbols}&base={$base}");
	        $previous = json_decode($result['body'], true);

            if (isset($dataRaw['error'])) {
                return "<!--separate-->";
            } else {
            	$change = (float) $dataRaw['rates'][$compare] - (float) $previous['rates'][$compare];
            	$percent = round(($change / (float) $previous['rates'][$compare]) * 100, 2);

                $dataItem['time_stamp'] = $dataRaw['date'];
                $dataItem['data'] = array(
	                JSNPbMarketHelper::PB_MARKET_DATA_TYPE_NAME => "{$base}/{$compare}",
	                JSNPbMarketHelper::PB_MARKET_DATA_TYPE_SYMBOL => $attributes['market_item_symbol_code'],
	                JSNPbMarketHelper::PB_MARKET_DATA_TYPE_PRICE => (float) $dataRaw['rates'][$compare],
	                JSNPbMarketHelper::PB_MARKET_DATA_TYPE_CHANGE => ($change >= 0 ? '+' : '') . $change,
	                JSNPbMarketHelper::PB_MARKET_DATA_TYPE_PERCENT_CHANGE => ($change >= 0 ? '+' : '') . "{$percent}%"
                );
            }

            return json_encode($dataItem) . '<!--separate-->' ;
        }
        catch (Exception $e) {
            $dataItem['error'] = $e->getMessage();
            return json_encode($dataItem) . "<!--separate-->";
        }
    }

}

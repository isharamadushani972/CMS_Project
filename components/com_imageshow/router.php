<?php
/**
 * @version    $Id$
 * @package    JSN.ImageShow
 * @author     JoomlaShine Team <support@joomlashine.com>
 * @copyright  Copyright (C) 2015 JoomlaShine.com. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: http://www.joomlashine.com
 * Technical Support:  Feedback - http://www.joomlashine.com/contact-us/get-support.html
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

class ImageShowRouter extends JComponentRouterBase
{
    /**
     * Build the route for the com_imageshow component
     *
     * @param   array  &$query  An array of URL arguments
     *
     * @return  array  The URL arguments to use to assemble the subsequent URL.
     *
     * @since   3.3
     */
    public function build(&$query)
    {
        $segments   = array ();

        // get a menu item based on Itemid or currently active
        $app = JFactory::getApplication();
        $db  = JFactory::getDBO();

        if (isset($query['view']))
        {
            $segments [] = $query['view'];
            unset($query['view']);
        }

        if (isset($query['showlist_id']))
        {
            $segments [] = 'slid-' . $query['showlist_id'];
            unset($query['showlist_id']);
        }

        if (isset($query['showcase_id']))
        {
            $segments [] = 'scid-' . $query['showcase_id'];
            unset($query['showcase_id']);
        }

        if (isset($query['show_breadcrumbs']))
        {
            $segments [] = 'sbcrumbs-' . $query['show_breadcrumbs'];
            unset($query['show_breadcrumbs']);
        }

        if (isset($query['itemmnid']))
        {
            $segments [] = 'itemmnid-' . $query['itemmnid'];
            unset($query['itemmnid']);
        }

        return $segments;
    }

    /**
     * Parse the segments of a URL.
     *
     * @param   array  &$segments  The segments of the URL to parse.
     *
     * @return  array  The URL attributes to be used by the application.
     *
     * @since   3.3
     */
    public function parse(&$segments)
    {
        $vars       = array();
        $defined    = array('slid'=>'showlist_id', 'scid'=>'showcase_id', 'sbcrumbs'=>'show_breadcrumbs', 'itemmnid' => 'itemmnid');

        if (isset($segments[0]))
        {
            $vars['view'] = $segments[0];
            unset($segments[0]);
        }

        foreach($segments as $segment)
        {
            $value = explode("-", $segment);
            if (isset($defined[$value[0]]))
            {
                $vars[$defined[$value[0]]] = $value[1];
            }
        }
        return $vars;
    }
}

function ImageShowBuildRoute(&$query)
{
    $router = new ImageShowRouter;

    return $router->build($query);
}

function ImageshowParseRoute($segments)
{
    $router = new ImageShowRouter;

    return $router->parse($segments);
}
?>
<?php
namespace Grav\Theme;

use Grav\Common\Theme;
use Grav\Common\Plugin;

class MdlPortfolio extends Theme
{
        /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            'onShortcodeHandlers' => ['onShortcodeHandlers', 0]
        ];
    }

    /**
     * Initialize shortcodes
     */
    public function onShortcodeHandlers()
    {
        $this->grav['shortcode']->registerAllShortcodes(__DIR__.'/shortcodes');
    }
}

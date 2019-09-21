<?php
namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class mdlpagelayout extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('mdl-headline', function(ShortcodeInterface $sc) {
            return $this->twig->processTemplate('partials/shortcode-mdl-headline.html.twig', [
                "mdl_text" => $sc->getContent(),
                "page" => $this->grav['page']
                ]);
        });

        $this->shortcode->getHandlers()->add('mdl-text', function(ShortcodeInterface $sc) {
            return $this->twig->processTemplate('partials/shortcode-mdl-text.html.twig', [
                "mdl_class" => 'mdl-cell mdl-cell--'.$sc->getParameter('width',6).'-col',
                "mdl_text" => $sc->getContent(),
                "page" => $this->grav['page']
                ]);
        });

        $this->shortcode->getHandlers()->add('mdl-image', function(ShortcodeInterface $sc) {            
            return $this->twig->processTemplate('partials/shortcode-mdl-image.html.twig', [
                "mdl_class" => 'mdl-cell mdl-cell--'.$sc->getParameter('width',6).'-col',
                "mdl_src" => $sc->getContent(),
                "mdl_alt" => $sc->getParameter('alt','Image'),
                "page" => $this->grav['page']
                ]);
        });
    }
}

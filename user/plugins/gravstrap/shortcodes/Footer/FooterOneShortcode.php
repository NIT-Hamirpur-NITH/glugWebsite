<?php
/**
 * This file is part of the Gravstrap plugin and it is distributed
 * under the MIT License. To use this application you must leave
 * intact this copyright notice.
 *
 * Copyright (c) Giansimon Diblas <info@diblas.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * For extra documentation and help please visit http://diblas.net
 *
 * @license    MIT License
 *
 */

namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

/**
 * Class FooterOneShortcode handles a basic footer module
 *
 * @author Giansimon Diblas
 */
class FooterOneShortcode extends GravstrapShortcode
{
    /**
     * {@inheritdoc}
     */
    public function shortcodeName()
    {
        return 'gravstrap-footer-one';
    }
    
    /**
     * {@inheritdoc}
     */
    public function assets()
    {
        return array(
            'css' => array(                
                'plugin://gravstrap/css/gravstrap_footer.css',            
                'plugin://gravstrap/css/gravstrap_footer_inline_navigation.css',
            ),
        );
    }
    
    /**
     * {@inheritdoc}
     */
    protected function template()
    {
        return 'footer/footer_one.html.twig';
    }

    /**
     * {@inheritdoc}
     */
    protected function aliases()
    {
        return array(
            'g-footer-one',
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function renderOutput(ShortcodeInterface $shortcode)
    {
        return $this->grav['twig']->processTemplate($this->template(), [ 
            'sections' => $this->sections($shortcode),
        ]);
    }
}

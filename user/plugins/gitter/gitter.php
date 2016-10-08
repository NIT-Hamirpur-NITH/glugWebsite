<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;

class GitterPlugin extends Plugin
{
    protected $enable = false;

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0],
        ];
    }

    /**
     * Initialize form if the page has one. Also catches form processing if user posts the form.
     */
    public function onPageInitialized()
    {
        if (!$this->isAdmin()) {
            /** @var Page $page */
            $page = $this->grav['page'];

            if (!$page) {
                return;
            }

            if ($this->enable) {
                $this->grav['assets']
                   ->addJs('https://sidecar.gitter.im/dist/sidecar.v1.js', array('loading' => 'defer'))
                   ->addInlineJs('((window.gitter = {}).chat = {}).options = { room: \''.$this->config->get('plugins.gitter.channel').'\' };', array('loading' => 'defer'));
            }
        }
    }

    public function onPluginsInitialized()
    {
        if (!$this->isAdmin()) {
            $uri = $this->grav['uri'];
            $disable_on_routes = (array) $this->config->get('plugins.gitter.disable_on_routes');
            $enable_on_routes = (array) $this->config->get('plugins.gitter.enable_on_routes');
            $path = $uri->path();

            if (!in_array($path, $disable_on_routes)) {
                if (in_array($path, $enable_on_routes)) {
                    $this->enable = true;
                } else {
                    foreach($enable_on_routes as $route) {
                        if ($this->startsWith($path, $route)) {
                            $this->enable = true;
                            break;
                        }
                    }
                }
            }

            $this->enable([
                'onPageInitialized' => ['onPageInitialized', 0],
            ]);
        }
    }

    /**
     * Determine if $haystack starts with $needle. Credit: http://stackoverflow.com/a/10473026/205039
     */
    private function startsWith($haystack, $needle) {
        return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== FALSE;
    }
}

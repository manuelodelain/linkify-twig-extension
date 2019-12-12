<?php

namespace manuelodelain\Twig\Extension;

use Misd\Linkify\Linkify;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class LinkifyExtension extends AbstractExtension
{
    protected $linkify;

    public function __construct($options = array())
    {
        $this->linkify = new Linkify($options);
    }

    public function getName()
    {
        return 'linkify';
    }

    public function getFilters()
    {
        return array(
            new TwigFilter('linkify', array($this, 'linkify')),
        );
    }

    public function linkify($text, $options = array())
    {
        $url = $this->linkify->process($text, $options);
        return $url;
    }
}

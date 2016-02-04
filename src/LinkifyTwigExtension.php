<?php

namespace manuelodelain;

use \Misd\Linkify\Linkify;

class LinkifyTwigExtension extends \Twig_Extension
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
        new \Twig_SimpleFilter('linkify', array($this, 'linkify'))
      );
  }

  public function linkify($text, $options = array())
  {
    $url = $this->linkify->process($text, $options);

    return $url;
  }
}

?>


<?php

use \Misd\Linkify\Linkify;

class LinkifyExtension extends \Twig_Extension
{
  protected $linkify;

  public function __construct($options = array())
  {
      $this->linkify = new Linkify($options);
  }

  public function getName()
  {
      return 'twigLinkifyExtension';
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


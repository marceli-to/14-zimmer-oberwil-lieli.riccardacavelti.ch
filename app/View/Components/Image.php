<?php
namespace App\View\Components;
use Illuminate\View\Component;

class Image extends Component
{
  /**
   * Image
   *
   * @var string
   */
  public $image;

  /**
   * Alt
   *
   * @var string
   */
  public $alt;

  /**
   * Height
   *
   * @var string
   */
  public $height;

  /**
   * Width
   *
   * @var string
   */
  public $width;

  /**
   * Slideshow element
   *
   * @var boolean
   */
  public $isSlide;

  /**
   * Lightbox
   *
   * @var boolean
   */
  public $hasLightBox;

  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($image = NULL, $alt = NULL, $height = NULL, $width = NULL, $hasLazyload = TRUE, $isSlide = FALSE, $hasLightBox = FALSE)
  {
    $this->image = $image;
    $this->alt = $alt;
    $this->height = $height;
    $this->width = $width;
    $this->hasLazyload = $hasLazyload;
    $this->isSlide = $isSlide;
    $this->hasLightBox = $hasLightBox;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\View\View|string
   */
  public function render()
  {
    return view('web.components.content.image');
  }
}

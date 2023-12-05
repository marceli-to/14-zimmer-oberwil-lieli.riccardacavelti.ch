<?php
namespace App\View\Components;
use Illuminate\View\Component;

class Browse extends Component
{
  /**
   * Route: next
   *
   * @var string
   */
  public $routeNext;

  /**
   * Route: prev
   *
   * @var string
   */
  public $routePrev;

  /**
   * Titel: next
   *
   * @var string
   */
  public $titleNext;

  /**
   * Title: prev
   *
   * @var string
   */
  public $titlePrev;

  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($routeNext = NULL, $routePrev = NULL, $titleNext = NULL, $titlePrev = NULL)
  {
    $this->routeNext = $routeNext;
    $this->routePrev = $routePrev;
    $this->titleNext = $titleNext;
    $this->titlePrev = $titlePrev;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\View\View|string
   */
  public function render()
  {
    return view('web.components.content.browse');
  }
}

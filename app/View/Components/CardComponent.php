<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public string $desc,
        public int $chapter,
        public int $viewer,
        public string $thumbnail,
    )
    {
        $this->title = $title;
        $this->desc = $desc;
        $this->chapter = $chapter;
        $this->viewer = $viewer;
        $this->thumbnail = $thumbnail;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-component');
    }
}

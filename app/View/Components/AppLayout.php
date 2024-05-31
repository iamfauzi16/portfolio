<?php

namespace App\View\Components;

use App\Models\Banner;
use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public function __construct($title = 'Home')
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $banners = Banner::all();
        
        return view('components.app-layout', [
            'banners' => $banners
        ]);
    }
}

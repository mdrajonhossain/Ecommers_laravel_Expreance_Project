<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Layout extends Component
{
    public $title; // Declare the title property

    // Constructor to accept the title
    public function __construct($title = 'Default Title')
    {
        $this->title = $title; // Set the title property
    }

    // Render method to return the Blade view
    public function render()
    {
        return view('components.admin.layout');
    }
}

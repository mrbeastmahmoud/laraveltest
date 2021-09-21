<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class categories extends Component
{

    public function render()
    {
        return view('components.categories',[
            'categories'=>Category::all(),
            'current_category'=> Category::firstWhere('slug',\request('category'))
        ]);
    }
}

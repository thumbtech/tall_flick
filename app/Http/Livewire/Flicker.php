<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Flicker extends Component
{
    public $layout = 'layouts.app';
    public $item_count = 5;
    public $items;

    public function gimme_another()
    {
        $this->item_count++;
        $this->make_items();
    }
    
    private function make_items()
    {
        $this->items = [];
        for ($i = 1; $i <= $this->item_count; $i++)  $this->items[] = 'Item ' . $i;
    }

    public function mount($av = '3')
    {
        if ($av == '2') $this->layout = 'layouts.app2';
        $this->make_items();
    }
    
    public function render()
    {
        return view('livewire.flicker')->layout($this->layout);
    }
}

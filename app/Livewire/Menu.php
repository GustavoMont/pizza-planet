<?php

namespace App\Livewire;


use App\Models\flavor;
use Livewire\Component;

class Menu extends Component
{
    public $flavors = [];
    public $search = "";


    public function onSearch()
    {
        if (empty($this->search)) {
            $this->flavors = flavor::all();
        } else {
            $pesquisa = $this->search;
            $this->flavors = flavor::where("name", "like", "%$pesquisa%")->orWhere("ingredients", "like", "%$pesquisa%")->orWhere("value", "like", "%$pesquisa%")->get();
        }
    }

    public function render()
    {
        $this->onSearch();
        return view('livewire.menu');
    }
}

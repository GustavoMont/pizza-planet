<?php

namespace App\Livewire\Forms\Admin\Form;

use Livewire\Attributes\Rule;
use Livewire\Form;

class FlavorForm extends Form
{
    #[Rule("required|string|min:6|max:45", as: 'nome')]
    public $name = "";
    #[Rule("required|string|min:20", as: 'ingredientes')]
    public $ingredients = "";
    #[Rule("required|decimal:0,2", as: "valor")]
    public $value = 45.00;
    #[Rule("required|decimal:0", as: 'tempo de preparação')]
    public $preparation_time = 40;


}

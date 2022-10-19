<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Boney';
    public $loud = false;
    public $greeting = ['Hello'];
    public $hname = '';
    public $childNames = ['child1','child2','child3'];


// using the mount lifecycle hook
    // run befre the component load
    public function mount(Request $request, $name)
    {
        $this->name = $request->input('name',$name);
    }
// run befre each subsequent request
    public function hydrate()
    {
        $this->hname = 'Hydrated@';
    }

// run when a public property is updated
    public function updated()  //updating //public function updatedName() <- run when name is updated
    {
        $this->name = strtoupper($this->name);
    }

    public function render()
    {
        return view('livewire.hello-world');
    }

    public function resetName($name='Billy')
    {
        $this->name = $name;
    }
}

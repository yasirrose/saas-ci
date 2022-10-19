<div>
The best athlete wants his opponent at his best.
<input type="text" wire:model = "name">
<input type="checkbox" wire:model="loud">
<select wire:model="greeting" multiple>
    <option>Hello</option>
    <option>Goodbye</option>
    <option>Adios</option>
</select>
{{-- can use .debounce.'ms' and .laze to customize model property--}}
{{implode(', ',$greeting)}} {{$name}} @if($loud) ! @endif

<button wire:click="resetName('Arthur')">Reset Name</button>
{{--can use '$event.target' as argument--}}
{{-- could use other events i.e mouseenter, keydown--}}

<form action="#" wire:submit.prevent="resetName('Arthur')">
    <button>Form Button</button>
</form>
{{--can set the name property as, wire:submit.prevent="$set('name','Arthur')"--}}
{{$hname}}

<!-- Child component -->
<h2 class="text-3xl font-bold underline">Child Component</h2>

@foreach($childNames as $name)
@livewire('child-component', ['name'=>$name], key($name))
@endforeach
</div>

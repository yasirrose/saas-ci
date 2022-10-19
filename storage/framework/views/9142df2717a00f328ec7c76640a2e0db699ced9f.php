<div>
The best athlete wants his opponent at his best.
<input type="text" wire:model = "name">
<input type="checkbox" wire:model="loud">
<select wire:model="greeting" multiple>
    <option>Hello</option>
    <option>Goodbye</option>
    <option>Adios</option>
</select>

<?php echo e(implode(', ',$greeting)); ?> <?php echo e($name); ?> <?php if($loud): ?> ! <?php endif; ?>

<button wire:click="resetName('Arthur')">Reset Name</button>



<form action="#" wire:submit.prevent="resetName('Arthur')">
    <button>Form Button</button>
</form>

<?php echo e($hname); ?>


<!-- Child component -->
<h2 class="text-3xl font-bold underline">Child Component</h2>

<?php $__currentLoopData = $childNames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('child-component', ['name'=>$name])->html();
} elseif ($_instance->childHasBeenRendered($name)) {
    $componentId = $_instance->getRenderedChildComponentId($name);
    $componentTag = $_instance->getRenderedChildComponentTagName($name);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($name);
} else {
    $response = \Livewire\Livewire::mount('child-component', ['name'=>$name]);
    $html = $response->html();
    $_instance->logRenderedChild($name, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH C:\xampp\htdocs\saas\resources\views/livewire/hello-world.blade.php ENDPATH**/ ?>
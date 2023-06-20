@props(['trigger'])

<div x-data="{ show: false }" @click.away="show = false" class="relative">
    <div @click="show = !show">
        {{ $trigger }}
    </div>
    <div x-show="show" class="py-2 absolute">
        {{ $slot }}
    </div>
</div>

@props(['trigger'])
<div x-data="{ show: false }" @click.away="show=false">
    {{--Trigger--}}
    <div @click="show = ! show">
        {{ $trigger }}
    </div>
    {{--Dropdown links--}}
    <div x-show="show" class="py-2 absolute bg-gray-100 w-full mt-2 rounded-xl z-30 overflow-auto max-h-52" style="display: none" >
        {{ $slot }}
    </div>
</div>
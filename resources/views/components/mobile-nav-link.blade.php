@props(['href', 'label'])

<a href="{{ $href }}" 
   class="text-gray-300 hover:bg-slate-800 hover:text-white block px-3 py-2 rounded-md text-base font-medium">
    {{ $label }}
</a>

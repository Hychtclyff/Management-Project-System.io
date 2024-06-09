{{-- @props(['color', 'index', 'hindex', 'project']) --}}
<a {{ $attributes }} 
    class=" {{ $color }} {{ $disabled }}  px-3 py-2 rounded-2xl flex  {{ $hover }} transition-colors duration-200 shadow-lg">
    {{ $slot }}
</a>

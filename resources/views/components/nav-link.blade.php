<a {{ $attributes }} 
class="{{ $active ? 'bg-white text-orange-500' : 'text-white
hover:bg-white hover:text-orange-500'}} rounded-md px-3 py-2 text-sm font-medium " 
aria-current=" {{ $active ? 'page' : 'false' }}">{{ $slot }}</a>

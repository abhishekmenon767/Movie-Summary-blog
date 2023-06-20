<!-- dropdown-item.blade.php -->
@props(['href'])

<a href="{{ $href }}" class="dropdown-item">{{ $slot }}</a>

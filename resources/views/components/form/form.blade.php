<form class="{{ $class }}" action="{{ $action }}" method="{{ $method }}">
    @csrf
    {{ $slot }}
</form>
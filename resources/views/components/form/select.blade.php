<select name="{{ $name }}" id="{{ $id }}" value="{{ $value }}">
    <option value="" selected disabled>Select Role</option>
    @foreach ($option as $role)
    <option value="{{ $role->id }}" @selected($value == $role->id)>{{ $role->role }}</option>        
    @endforeach
</select>

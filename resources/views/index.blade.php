<x-master title="Home">
    <x-header title="Crud Operation with Query Builder"></x-header>
    <x-content>
        @if( session('status') )
            <div class="alert alert-success">{{ session('status') }} </div>
        @endif
        <x-content.header title="All Records"></x-content.header>
        <x-table :headers="['SL', 'User Name', 'Email', 'Address', 'Role', 'Phone', 'Action']">
            @foreach ( $users as $user )
            <tr>
                <x-td>{{ $loop->iteration }}</x-td>
                <x-td>{{ $user->name }}</x-td>
                <x-td>{{ $user->email }}</x-td>
                <x-td>{{ $user->address }}</x-td>
                <x-td>{{ $user->role_id }}</x-td>
                <x-td>{{ $user->phone }}</x-td>
                <x-td>
                    <x-form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        <a href={{ route('users.edit', $user->id) }}>Edit</a>
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')" class="delete">Delete</button>
                    </x-form>
                </x-td>
            </tr>
            @endforeach
        </x-table>
    </x-content>
</x-master>

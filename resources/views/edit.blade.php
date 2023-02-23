<x-master title="Add User">
    <x-header title="Crud Operation with Query Builder"></x-header>
    <x-content>        
        <x-content.header title="Update Record"></x-content.header>
        <x-form class="post-form" action="{{ route('users.update', $users->id) }}" method="POST">
            @method('PUT')
            <div class="form-group">
                <x-label id="inputName" label="Name"/>
                <x-input type="text" name="username" value="{{ $users->name }}" id="inputName"/>
            </div>
            <div class="form-group">
                <x-label id="inputEmail" label="Email"/>
                <x-input type="email" name="email" value="{{ $users->email }}" id="inputEmail"/>
            </div>
            <div class="form-group">
                <x-label id="inputPass" label="Password"/>
                <x-input type="password" name="password" id="inputPass"/>
            </div>
            <div class="form-group">
                <x-label id="inputAddress" label="Address"/>
                <x-input type="text" name="address" value="{{ $users->address }}" id="inputAddress"/>
            </div>
            <div class="form-group">
                <x-label id="inputClass" label="Role"/>
                <x-select name="role" id="inputRole" :option="$roles" value="{{ $users->role_id }}"/>
            </div>
            <div class="form-group">
                <x-label id="inputPhone" label="Phone"/>
                <x-input type="text" name="phone" value="{{ $users->phone }}" id="inputPhone"/>
            </div>
            <x-btn class="submit" type="submit" value="Submit"/>
        </x-form>
    </x-content>
</x-master>
<div id="header">
    <h1>{{ $title }}</h1>
</div>
<div id="menu">
    <ul>
        <li>
            <a href="{{ route('users.index') }}">Home</a>
        </li>
        <li>
            <a href="{{ route('users.create') }}">Add</a>
        </li>
        <li>
            <a href="update.php">Update</a>
        </li>
        <li>
            <a href="delete.php">Delete</a>
        </li>
    </ul>
</div>
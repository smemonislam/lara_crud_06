<table cellpadding="7px">
    <thead>
        @foreach ($headers as $data)        
            <th>{{ $data }}</th>
        @endforeach
    </thead>
    <tbody>
        {{ $slot }}
    </tbody>
</table>
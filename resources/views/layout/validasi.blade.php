@if ($errors->any())
    <div class="btn btn-danger">
        <ul>
            @foreach ($errors->all() as $item )
            <li>{{ $item }}</li>
                
            @endforeach
        </ul>
    </div>
    
@endif
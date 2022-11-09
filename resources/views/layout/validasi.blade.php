@if ($errors->any())
    <div class="card bg-danger" style="position: absolute; top:0; right: 0;">
        <div class="card-body">
            <ul>
                @foreach ($errors->all() as $item )
                <li>{{ $item }}</li>

                @endforeach
            </ul>
        </div>
    </div>

@endif

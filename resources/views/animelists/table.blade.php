<div class="table-responsive">
    <table class="table" id="animelists-table">
        <thead>
            <tr>
                <th>Animetitle</th>
        <th>Genre</th>
        <th>Episodes</th>
        <th>Released</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($animelists as $animelists)
            <tr>
                <td>{{ $animelists->AnimeTitle }}</td>
            <td>{{ $animelists->Genre }}</td>
            <td>{{ $animelists->Episodes }}</td>
            <td>{{ $animelists->Released }}</td>
            <td>{{ $animelists->Description }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['animelists.destroy', $animelists->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('animelists.show', [$animelists->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('animelists.edit', [$animelists->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="table-responsive">
    <table class="table" id="animecharacters-table">
        <thead>
            <tr>
                <th>Img</th>
        <th>Name</th>
        <th>Fromanime</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($animecharacters as $animecharacters)
            <tr>
                <td>{{ $animecharacters->img }}</td>
            <td>{{ $animecharacters->name }}</td>
            <td>{{ $animecharacters->FromAnime }}</td>
            <td>{{ $animecharacters->Description }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['animecharacters.destroy', $animecharacters->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('animecharacters.show', [$animecharacters->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('animecharacters.edit', [$animecharacters->id]) }}" class='btn btn-default btn-xs'>
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

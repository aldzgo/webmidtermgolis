<!-- Animetitle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('AnimeTitle', 'Animetitle:') !!}
    {!! Form::text('AnimeTitle', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Genre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Genre', 'Genre:') !!}
    {!! Form::text('Genre', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Episodes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Episodes', 'Episodes:') !!}
    {!! Form::text('Episodes', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Released Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Released', 'Released:') !!}
    {!! Form::text('Released', null, ['class' => 'form-control','id'=>'Released']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#Released').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Description', 'Description:') !!}
    {!! Form::text('Description', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200]) !!}
</div>
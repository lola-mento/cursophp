<div class="form-group">
    {!! Form::label('nombre','Nombre') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control '.($errors->has('nombre') ?  'is-invalid' : null), 'placeholder' => 'Ingrese nombre...','id' => 'nombre']) !!}
    @error('nombre')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('edad','Edad') !!}
    {!! Form::text('edad', null, ['class' => 'form-control '.($errors->has('edad') ?  'is-invalid' : null), 'placeholder' => 'Ingrese edad...','id' => 'edad']) !!}
    @error('edad')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('pais','Pais') !!}
    {!! Form::select('pais',[
        '' => '-Seleccione una-',
        'COLOMBIA' => 'COLOMBIA',
        'ECUADOR' => 'ECUADOR',
        'VENEZUELA' => 'VENEZUELA',
        'ESTADOS_UNIDOS' => 'ESTADOS UNIDOS',
        'FRANCIA' => 'FRANCIA'
    ],null,['class' => 'form-control '.($errors->has('pais') ?  'is-invalid' : null), 'id' => 'pais']); !!}

    @error('pais')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('fnac','Fecha de nacimiento') !!}
    {!! Form::date('fnac',null,['class' => 'form-control '.($errors->has('fnac') ?  'is-invalid' : null),'id' => 'fnac']) !!}
    
    @error('fnac')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
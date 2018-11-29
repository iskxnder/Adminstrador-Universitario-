<div class="form-group">
    <div class="input-group">
        <div class="input-group-addon">Nombre</div>
        {!! Form::text('name', null, ['class'=> 'form-control']) !!}
        <div class="input-group-addon"><i class="fa fa-user"></i></div>
   </div>
 </div>

<div class="form-group">
    <div class="input-group">
        <div class="input-group-addon">Apellido</div>
        {!! Form::text('surname', null, ['class'=> 'form-control']) !!}
        <div class="input-group-addon"><i class="fa fa-user"></i></div>
    </div>
</div>

<div class="form-group">
    <div class="input-group">
        <div class="input-group-addon">Cédulla</div>
        {!! Form::text('document', null, ['class'=> 'form-control']) !!}
        <div class="input-group-addon"><i class="fa fa-info"></i></div>
    </div>
</div>

<div class="form-group">
    <div class="input-group">
        <div class="input-group-addon">Email</div>
        {!! Form::text('email', null, ['class'=> 'form-control']) !!}
        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
    </div>
</div>

<div class="form-group">
        <div class="input-group">
            <div class="input-group-addon">Carrera</div>
            {!! Form::select('carrer_id', $carrers, null, ['class' => 'form-control']) !!}
            <div class="input-group-addon"><i class="fa fa-book"></i></div>
        </div>
</div>
<div class="form-group">
        <div class="input-group">
            <div class="input-group-addon">Foto</div>
            {{ Form::file('file', ['class' => 'form-control']) }}
            <div class="input-group-addon"><i class="fa fa-picture-o"></i></div>
        </div>
</div>

<div class="form-actions form-group">
    <button type="submit" class="btn btn-primary btn-sm">Enviar</button>
</div>



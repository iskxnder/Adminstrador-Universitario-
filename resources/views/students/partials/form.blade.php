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
            <div class="input-group-addon">Sexo</div>
            <select name="carrer" id="" class="form-control">
                <option value="0">Please select</option>
                <option value="1">Option #1</option>
                <option value="2">Option #2</option>
                <option value="3">Option #3</option>
            </select>
            <div class="input-group-addon"><i class="fa fa-group"></i></div>
        </div>
</div>
<div class="form-group">
        <div class="input-group">
            <div class="input-group-addon">Nacionalidad</div>
            <select name="carrer" id="" class="form-control">
                <option value="0">Please select</option>
                <option value="1">Option #1</option>
            </select>
            <div class="input-group-addon"><i class="fa fa-flag"></i></div>
        </div>
</div>
<div class="form-group">
        <div class="input-group">
            <div class="input-group-addon">Carrera</div>
            <select name="carrer" id="" class="form-control">
                <option value="0">Please select</option>
                <option value="1">Option #1</option>
                <option value="2">Option #2</option>
                <option value="3">Option #3</option>
            </select>
            <div class="input-group-addon"><i class="fa fa-book"></i></div>
        </div>
</div>
<div class="form-group">
        <div class="input-group">
            <div class="input-group-addon">Foto</div>
            <input type="file" id="email3" name="email3" class="form-control">
            <div class="input-group-addon"><i class="fa fa-picture-o"></i></div>
        </div>
</div>

<div class="form-actions form-group">
    <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
</div>



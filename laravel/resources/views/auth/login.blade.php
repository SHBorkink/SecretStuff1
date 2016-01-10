<div class="col-md-4 col-md-offset-4 well">
    {!! Form::open(array('method' => 'POST', 'class' => 'form-horizontal')) !!}
    <div class="form-group">
        {!! Form::label('emailadress','Emailadress:',array('class' => 'col-sm-4 control-label')) !!}
        <div class="col-sm-4">
            {!! Form::text('emailadress','',array('class' => 'form-control'))!!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('password','Password:',array('class' => 'col-sm-4 control-label'))!!}
        <div class="col-sm-4">
            {!! Form::password('password',array('class' => 'form-control'))!!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-4">
            {!! Form::submit('Login',['class'=>'btn btn-primary form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-4">
             link to reset password
        </div>
    </div>
    {!! Form::close() !!}
</div>
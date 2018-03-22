<div class="section-wrapper flex-r align-v col-12 no-padding-margin contact" style="height: 100vh; width: 100vw;">

  <div class="col-5 align-v justify-c d-none animated-yarno contact-animate" style="position:relative; margin: auto;">
    <h1 class="text-c butler-medium">Stuur ons een mail!</h2>
            <p class="text-c cinzel-bold">Wij willen samen met u tot een mooi eindproduct komen.</p>


                {!! Form::open(['class' => 'form-horizontal', 'action' => 'pagesController@contact']) !!}
                        {{ Form::token() }}
                        <div class="form-group">
                        {{ Form::label('name', 'Naam:') }}
                        {{ Form::text('name', null, ['class' => 'form-control', 'required' => '', 'placeholder' => 'KingsCode']) }}
                        </div>
                        <div class="form-group">
                        {{ Form::label('email', 'Email:') }}
                        {{ Form::email('email', null, ['class' => 'form-control', 'required' => '', 'placeholder' => 'kingscodeweb@gmail.com']) }}
                        </div>
                        <div class="form-group">
                        {{ Form::label('textmessage', 'Bericht:') }}
                        {{ Form::textarea('textmessage', null, ['class' => 'form-control ', 'required' => '', 'placeholder' => 'Hier komt het bericht']) }}
                        </div>
                        {{ Form::submit('Verstuur', ['class' => 'button-king cinzel-bold text-c d-none animated-yarno contact-button', 'style' => 'position:relative; left: 42%;']) }}

                {!! Form::close() !!}
                <hr>

</div>

<h3 style="bottom: 0; right: 1%; position: absolute;">kvk: 70894191</h3>

</div>

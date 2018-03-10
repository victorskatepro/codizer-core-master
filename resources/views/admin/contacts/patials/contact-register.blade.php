<div class="block-content-info-contact">

    <div class="container-show-info-contact-a">
        <div id="show-info-contact-empresa" class="core-show-sub-title">Registro</div>
        <div id="show-info-contact-nombre-completo" class="core-show-title-blue">Nuevo contacto</div>
    </div>

    <div class="block-content-info-contact">
        {!! Form::open(['route' => 'contact.create', 'method' => 'POST', 'id' => 'form-contact-to-create']) !!}

            <ul class="nav nav-tabs" data-tabs="tabs">
                <li class="active"><a href="#info" data-toggle="tab">Información</a></li>
                <li><a href="#dir" data-toggle="tab">Dirección</a></li>
                <li><a href="#tel" data-toggle="tab">Teléfono</a></li>
                <li><a href="#mail" data-toggle="tab">Correo</a></li>
                <li><a href="#social" data-toggle="tab">Redes sociales</a></li>
            </ul>

            <div class="tab-content">

                {{-- Tab informacion --}}
                <div class="form-group tab-pane active" id="info">

                    <div class="container-show-info-contact-img-b">
                        <label for="foto">Foto</label>
                        {!! Form::file('foto', ['accept' => 'image/jpg,image/png', 'id' => 'foto', 'class' => 'form-control form-with-100']) !!}
                    </div>

                    <div class="container-show-info-contact-list-c">
                        <label for="nombre">@lang('validation.attributes.name')</label>
                        <div class="show-info-contact">{!! Form::text('nombre', old('nombre'), ['id' => 'nombre', 'class' => 'form-control']) !!}</div>

                        <label for="ap_paterno">@lang('validation.attributes.paterno')</label>
                        <div class="show-info-contact">{!! Form::text('ap_paterno', old('ap_paterno'), ['id' => 'ap_paterno', 'class' => 'form-control']) !!}</div>

                        <label for="ap_materno">@lang('validation.attributes.materno')</label>
                        <div class="show-info-contact">{!! Form::text('ap_materno', old('ap_materno'), ['id' => 'ap_materno', 'class' => 'form-control']) !!}</div>

                        <label for="sexo">Sexo</label>
                        {!! Form::select('sexo', ['Masculino' => 'Masculino', 'Femenino' => 'Femenino'], null, ['id' => 'sexo', 'class' => 'form-control']) !!}

                        <label for="f_nacimiento">Fecha de nacimiento</label>
                        <div class="show-info-contact">{!! Form::date('f_nacimiento', \Carbon\Carbon::createFromDate(null, 12, 31)->subYear(18)->toDateString(), ['id' => 'f_nacimiento', 'class' => 'form-control', 'min' => \Carbon\Carbon::createFromDate(null, 1, 1)->subYear(80)->toDateString(), 'max' => \Carbon\Carbon::createFromDate(null, 12, 31)->subYear(18)->toDateString()]) !!}</div>

                        <label for="profesion">Profesión</label>
                        <div class="show-info-contact">{!! Form::text('profesion', old('profesion'), ['id' => 'profesion', 'class' => 'form-control']) !!}</div>

                        <label for="estado_civil">Estado civil</label>
                        <div class="show-info-contact">{!! Form::select('estado_civil', ['Soltero' => 'Soltero', 'Casado' => 'Casado'], null, ['id' => 'estado_civil', 'class' => 'form-control']) !!}</div>

                        <label for="desc_contacto">Descripción contacto</label>
                        <div class="show-info-contact">{!! Form::text('desc_contacto', old('desc_contacto'), ['id' => 'desc_contacto', 'class' => 'form-control']) !!}</div>
                    </div>
                </div>

                {{-- Tab Direccion --}}
                <div class="container-list-something form-group tab-pane" id="dir">
                    <label for="desc_dir">Descripción</label>
                    <div class="show-info-contact">{!! Form::text('desc_dir[]', old('desc_dir'), ['id' => 'desc_dir', 'class' => 'form-control']) !!}</div>

                    <label for="calle">Calle</label>
                    <div class="show-info-contact">{!! Form::text('calle[]', old('calle'), ['id' => 'calle', 'class' => 'form-control']) !!}</div>

                    <label for="numero_dir">Número</label>
                    <div class="show-info-contact">{!! Form::text('numero_dir[]', old('numero_dir'), ['id' => 'numero_dir', 'class' => 'form-control']) !!}</div>

                    <label for="piso_edificio">Piso/Edificio</label>
                    <div class="show-info-contact">{!! Form::text('piso_edificio[]', old('piso_edificio'), ['id' => 'piso_edificio', 'class' => 'form-control']) !!}</div>

                    <label for="ciudad">Ciudad</label>
                    <div class="show-info-contact">{!! Form::text('ciudad[]', old('ciudad'), ['id' => 'ciudad', 'class' => 'form-control']) !!}</div>

                    <label for="cp">Código Postal</label>
                    <div class="show-info-contact">{!! Form::text('cp[]', old('cp'), ['id' => 'cp', 'class' => 'form-control']) !!}</div>

                    <label for="estado_dir">Estado</label>
                    <div class="show-info-contact">{!! Form::text('estado_dir[]', old('estado_dir'), ['id' => 'estado_dir', 'class' => 'form-control']) !!}</div>

                    <label for="pais">País</label>
                    <div class="show-info-contact">{!! Form::text('pais[]', old('pais'), ['id' => 'pais', 'class' => 'form-control']) !!}</div>
                    <hr />

                    <div class="codizer-new-addresa">
                        <!-- Inputs text for more address -->
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <button id="btn-add-new-address" type="button" class="btn btn-primary btn-sm btn-sm-radius btn-shadow-blue right">+</button>
                        </div>
                    </div>
                </div>

                {{-- Tab Telefono --}}
                <div class="container-list-something form-group tab-pane" id="tel">
                    <label for="desc_tel">Descripción</label>
                    <div class="show-info-contact">{!! Form::text('desc_tel[]', old('desc_tel'), ['id' => 'desc_tel', 'class' => 'form-control']) !!}</div>

                    <label for="numero_tel">Número</label>
                    <div class="show-info-contact">{!! Form::text('numero_tel[]', old('numero_tel'), ['id' => 'numero_tel', 'class' => 'form-control']) !!}</div>
                    <hr />

                    <div class="codizer-new-phone">
                        <!-- Inputs text for more phones -->
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <button id="btn-add-new-phone" type="button" class="btn btn-primary btn-sm btn-sm-radius btn-shadow-blue right">+</button>
                        </div>
                    </div>
                </div>

                {{-- Tab Correo --}}
                <div class="container-list-something form-group tab-pane" id="mail">
                    <label for="desc_mail">Descripción</label>
                    <div class="show-info-contact">{!! Form::text('desc_mail[]', old('desc_mail'), ['id' => 'desc_mail', 'class' => 'form-control']) !!}</div>

                    <label for="email">Correo</label>
                    <div class="show-info-contact">{!! Form::text('email[]', old('email'), ['id' => 'email', 'class' => 'form-control']) !!}</div>
                    <hr />

                    <div class="codizer-new-mail">
                        <!-- Inputs text for more mails -->
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <button id="btn-add-new-mail" type="button" class="btn btn-primary btn-sm btn-sm-radius btn-shadow-blue right">+</button>
                        </div>
                    </div>
                </div>

                {{-- Tab Social --}}
                <div class="container-list-something form-group tab-pane" id="social">
                    <label for="red_social_nombre">Red social</label>
                    <div class="show-info-contact">{!! Form::select('red_social_nombre[]', ['Facebook' => 'Facebook', 'Twitter' => 'Twitter', 'Linkedin' => 'Linkedin', 'Google+' => 'Google+', 'Instagram' => 'Instagram'], null, ['id' => 'red_social_nombre', 'class' => 'form-control']) !!}</div>

                    <label for="url">URL</label>
                    <div class="show-info-contact">{!! Form::text('url[]', old('url'), ['id' => 'url', 'class' => 'form-control']) !!}</div>
                    <hr />

                    <div class="codizer-new-social-network">
                        <!-- Inputs text for more social networks -->
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <button id="btn-add-new-social" type="button" class="btn btn-primary btn-sm btn-sm-radius btn-shadow-blue right">+</button>
                        </div>
                    </div>

                </div>

            </div>

        {!! Form::close() !!}
    </div>

    <div class="container-list-something" id="show-info-contact-desc">
        <button id="btn-cancel-contact" type="button" class="btn btn-default btn-sm btn-sm-radius">Cancelar</button>
        <button id="btn-save-contact" type="button" class="btn btn-primary btn-sm btn-sm-radius btn-shadow-blue right">Guardar</button>
    </div>
</div>
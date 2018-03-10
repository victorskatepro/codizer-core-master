<div class="block-content-info-contact">
    <div class="container-show-info-contact-a">
        <div id="show-info-contact-empresa" class="core-show-sub-title">Editar</div>
        <div id="show-info-contact-nombre-completo" class="core-show-title-blue">Teléfono Contacto</div>
    </div>

    {!! Form::open(['route' => 'contact.update', 'method' => 'POST', 'id' => 'form-phone-to-update']) !!}
        {!! Form::hidden('option', '3', ['id' => 'option-contact-to-update']) !!}
        {!! Form::hidden('contacto_id', 'null', ['id' => 'contactId-contactPhone-to-update']) !!}
        <div class="container-list-something form-group" id="core-content-form-phone">
            <!-- Se agregan los campos correspondientes del telefono -->
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <button id="btn-update-new-phone" type="button" class="btn btn-primary btn-sm btn-sm-radius btn-shadow-blue right">+</button>
            </div>
        </div>
    {!! Form::close() !!}

    <div class="container-list-something" id="show-info-contact-desc">
        <button id="btn-cancel-phone" type="button" class="btn btn-default btn-sm btn-sm-radius">Cancelar</button>
        <button id="btn-update-phone" type="button" class="btn btn-primary btn-sm btn-sm-radius btn-shadow-blue right">Actualizar</button>
    </div>
</div>
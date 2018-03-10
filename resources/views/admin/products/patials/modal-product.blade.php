<div class="modal fade" id="modalNewProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <!-- AGREGAR ESTO AL HEADER DE UN MODAL -->
                <div class="container-menu-modal">
                    <div class="modal-tag modal-tag-selectionated">
                        <div class="modal-icon"></div>
                        <div class="modal-desc">
                            <div class="modal-title">Modal</div>
                            <div class="modal-tittle-tag">Nuevo producto</div>
                        </div>
                    </div>
                </div>
                <button type="hidden" class="close" data-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body">
                <!-- FORMULARIO CREAR -->
                {!! Form::open(['route' => 'products.store', 'method' => 'POST', 'id' => 'form-products-store']) !!}
                <div class="form-group">

                    {!! Form::hidden('empresa_id', $idEmpresa, ['id' => 'empresa_id_new', 'class' => 'form-group-validate val_num']) !!}
                    {!! Form::hidden('tienda_id', $idTienda, ['id' => 'tienda_id_new', 'class' => 'form-group-validate val_num']) !!}


                    <div class="row col-md-6">

                        <div class="col-xs-12 col-sm-12 col-md-12 core-txt-title-modal">
                            <div class="form-group">
                                {!! Form::label('un-name', 'Imagen principal') !!}
                            </div>
                        </div>

                        <div class="col-xs-6 col-md-12">
                            <img id="core-img-principal" src="{{ asset('/media/icon/upload-img-icon.png') }}"/>

                            <div class="form-group">
                                {!! Form::file('img[]', ['accept' => 'image/jpg,image/png', 'id' => 'core-file-img-principal', 'class' => 'form-control form-with-100 form-group-validate val_img', 'required']) !!}
                            </div>
                        </div>

                        <div class="col-xs-6 col-md-6">
                            <img id="core-img-2" src="{{ asset('/media/icon/upload-img-icon.png') }}"/>

                            <div class="form-group">
                                {!! Form::file('img[]', ['accept' => 'image/jpg,image/png', 'id' => 'core-file-img-2', 'class' => 'form-control form-with-100']) !!}
                            </div>
                        </div>

                        <div class="col-xs-6 col-md-6">
                            <img id="core-img-3" src="{{ asset('/media/icon/upload-img-icon.png') }}"/>

                            <div class="form-group">
                                {!! Form::file('img[]', ['accept' => 'image/jpg,image/png', 'id' => 'core-file-img-3', 'class' => 'form-control form-with-100']) !!}
                            </div>
                        </div>

                        <div class="col-xs-6 col-md-6">
                            <img id="core-img-4" src="{{ asset('/media/icon/upload-img-icon.png') }}"/>

                            <div class="form-group">
                                {!! Form::file('img[]', ['accept' => 'image/jpg,image/png', 'id' => 'core-file-img-4', 'class' => 'form-control form-with-100']) !!}
                            </div>
                        </div>

                    </div>

                    <div class="row col-md-6">

                        <div class="col-xs-12 col-sm-12 col-md-12 core-txt-title-modal">
                            <div class="form-group">
                                {!! Form::label('un-name', 'Información del producto') !!}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                {!! Form::label('nombre', 'Nombre') !!}
                                {!! Form::text('nombre', '', array('class'=> 'form-control form-with-100 form-group-validate val_text_num', 'placeholder' => 'Nombre')) !!}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="form-group">
                                {!! Form::label('codigo_producto', 'Código producto') !!}
                                {!! Form::text('codigo_producto','', array('class'=> 'form-control form-with-100 form-group-validate val_text_num', 'placeholder' => 'Código del producto')) !!}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="form-group">
                                {!! Form::label('cantidad_disponible', 'Cantidad disponible') !!}
                                {!!  Form::number('cantidad_disponible', '0', ['class'=> 'form-control form-with-100 form-group-validate val_num'])  !!}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="form-group">
                                {!! Form::label('precio', 'Precio') !!}
                                {!! Form::text('precio', '', array('class'=> 'form-control form-with-100 form-group-validate val_double', 'placeholder' => 'Precio')) !!}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="form-group">
                                {!! Form::label('oferta_id', 'Oferta del producto') !!}
                                {!! Form::select('oferta_id', $ofertasList,Input::old('oferta_id'),
                                array('class'=> 'form-control form-with-100 form-group-validate val_num'))  !!}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="form-group">
                                {!! Form::label('fabricante_id', 'Fabricante') !!}
                                {!! Form::select('fabricante_id', $fabricantesList,Input::old('fabricante_id'),
                                array('class'=> 'form-control form-with-100 form-group-validate val_num'))  !!}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="form-group">
                                {!! Form::label('estado', 'Estado del producto') !!}
                                {!! Form::select('estado', array('1' => 'Disponible para el público', '0' => 'No disponible para el público'),
                                 'Elige un estado', array('class'=> 'form-control form-with-100 form-group-validate val_num'))  !!}
                            </div>
                        </div>


                    </div>


                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12 core-txt-title-modal">
                            <div class="form-group">
                                {!! Form::label('un-name', 'Categorias del producto') !!}
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="checkbox">

                                    @foreach( $categoriasList as $categoria )
                                        <label class="core-checkbox">
                                            {!! Form::checkbox('categoria[]', $categoria->id, ['class'=> 'form-group-validate val_num'])  !!}
                                            <span>{{ $categoria->nombre }}</span>
                                        </label>
                                    @endforeach

                                </div>

                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-12 col-md-12 core-txt-title-modal">
                            <div class="form-group">
                                {!! Form::label('un-name', 'Descripción completa') !!}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                {!! Form::textarea('desc_producto', '',
                                array('id' => 'desc_producto', 'class'=> 'form-core-textarea form-control form-with-100', 'placeholder' => 'Descripcion del producto')) !!}
                            </div>
                        </div>
                    </div>

                    {!! Form::close() !!}

                </div>
                <div class="modal-footer">
                    <button id="cancel" type="button" class="btn btn-default btn-sm btn-sm-radius" data-dismiss="modal">
                        Cancelar
                    </button>
                    <button id="store-new-product" type="button"
                            class="btn btn-primary btn-sm btn-sm-radius btn-shadow-blue">Guardar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

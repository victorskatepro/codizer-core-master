@extends('layout-core')

@section('extra-css')

@endsection

@section('title', 'Productos')

@section('title-header', 'Productos')


@section('main-header-info-app')
    @include('partials.perfil-header-info')
@endsection


@section('main-header-options-app')

    @include('partials.perfil-link')

    <a href="#" class="core-menu-list"><div>{{ $empresa->nombre }}</div></a>

    <a href="#" class="core-menu-list menu-list-option menu-lis-img">
        <img src="{{ asset('/media/photo-store/'.$tienda->foto)}}">
        <div>{{$tienda->nombre}}</div>
    </a>

    <a href="#" class="core-menu-list"><div>Productos

                <span>{{count($products)}}</span>

        </div></a>

    <a href="#" class="core-menu-list"><div>Categorías <span>{{ count($categoriasList) }}</span></div></a>


@endsection


@section('article-content')

@section('extra-content')
    <div class="options-tools-list">

        <div class="left-content-list-tool">
            <div id="core-search-group" class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button id="core-search-group-btn" class="btn btn-default btn-sm" type="button"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </div>

        <div class="right-content-list-tool">
            <div id="btn-group-to-product" class="btn-group left" role="group" aria-label="...">
                <button type="button" id="btn-new-product" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modalNewProduct">Nuevo producto</button>
            </div>

            <div id="btn-group-to-product" class="btn-group right" role="group" aria-label="...">
                <!--<button type="button" id="btn-view-product" class="btn btn-default btn-sm core-hidden" data-toggle="modal">Ver en tienda</button>-->
                <a href="" id="ver-product-store" class="btn btn-default btn-sm core-hidden" target="_blank ">Ver en tienda</a>
            </div>

            <div id="btn-group-to-product" class="btn-group right" role="group" aria-label="...">
                <button type="button" id="btn-edit-product" class="btn btn-default btn-sm core-hidden" data-toggle="modal" data-target="#modalUpdateProduct">Editar</button>
            </div>



        </div>
    </div>
@endsection

<div class="left-content-list">
    <table class="table table-hover">
        <tbody id="list-products">

        @foreach($products as $product)
            <tr class="data-product-tr" data-product="{{ $product->producto_id }}">
                <td>
                    <img src="{{ asset('/media/photo-product/'. $product->img) }}">
                </td>
                <td>
                    <div class="list-product-title">{{$product->nombre}}</div>
                    <span class="list-product-tags">Oferta: {{$product->tipo_oferta.$product->regla_porciento.'%' }}</span><br/>
                    <div class="list-product-pz">{{$product->cantidad_disponible}} pz</div>
                    <div class="list-product-price">{{'$'.$product->precio}}</div>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>

<div id="continaer-product-shows" class="right-content-list core-hidden">
    <!-- <div id="msg-vacio">Ningún producto seleccionado</div> -->
    <div class="block-content-info-product">

        <div class="container-show-info-product-a">

            <!-- LOS ID EN SU MAYORIA SON PARA QUE IDENTIFIQUES A LOS ELEMENTOS CON JS Y PUEDAS MODIFICAR LA INFORMACIÓN -->

            <div id="show-info-product-marca">{{$tienda->nombre}}</div>


            <div id="show-info-product-title"></div>

            <div id="show-info-product-imgs" class="container-show-info-product-img-b">
                <!-- USA UN FOR PARA IMPRIMIR LAS FOTOS DE CADA PRODUCTO -->

                <img id="principal-image-product" src="{{ asset('/media/photo-product/bolso-rosa-chanel.png') }}">
                <img id="show-info-product-img-1" class="sub-image-product principal-image-product" src="{{ asset('/media/photo-product/bolso-rosa-chanel.png') }}">
                <img id="show-info-product-img-2" class="sub-image-product" src="{{ asset('/media/photo-product/bolso-rosa-chanel.png') }}">
                <img id="show-info-product-img-3" class="sub-image-product" src="{{ asset('/media/photo-product/bolso-rosa-chanel.png') }}">
                <img id="show-info-product-img-4" class="sub-image-product" src="{{ asset('/media/photo-product/bolso-rosa-chanel.png') }}">

            </div>

            <div class="container-show-info-product-list-c">

                <div>
                    <div>Código del producto</div>
                    <div id="show-info-product-codigo" class="show-info-product"></div>
                </div>

                <div>
                    <div>Precio</div>
                    <div id="show-info-product-price" class="show-info-product"></div>
                </div>

                <div>
                    <div>Cantidad disponible</div>
                    <div id="show-info-product-cantidad" class="show-info-product"></div>
                </div>


                <div>
                    <div>Precio final</div>
                    <div id="show-info-product-final-price" class="show-info-product"></div>
                </div>


                <div>
                    <div>Categorías</div>
                    <div id="show-info-product-categorias" class="show-info-product">
                        <!-- USA UN FOR PARA IMPRIMIR LAS CATEGORIAS A LAS QUE PERTENECE UN PRODUCTO -->
                        <span class="list-product-tags"></span>
                </div>


                <div>
                    <div>Fabricante</div>
                    <div id="show-info-product-fabricante" class="show-info-product">

                       <span class="list-product-tags"></span>
                    </div>
                </div>


                </div>
            </div>



        <div id="description-text-title">Descripción del producto</div>
        <div id="show-info-product-desc">
        </div>

    </div>
</div>

    <!-- id-product-to-show -->
    {!! Form::open(['route' => 'products.show', 'method' => 'GET', 'id' => 'form-products-to-show']) !!}

    {!! Form::hidden('id',0, array('id' => 'id-product-to-show')) !!}

    {!! Form::close() !!}


    @endsection

@section('modals')

   <!-- Aqui vas tus modals para los formularios -->
@include('partials.loader')
@include('admin.products.patials.modal-product')
@include('admin.products.patials.modal-product-update')


@endsection

@section('extra-js')

    <!-- Aqui vas tus js para peticiones Ajax -->
    <script src="{{ asset('/js/codizer-validate.js') }}"></script>
    <script src="{{ asset('/js/core-products.js') }}"></script>

    <!-- Description Editor -->
    <script src="{{ asset('/js/tinymce/tinymce.min.js')}}"></script>

@endsection

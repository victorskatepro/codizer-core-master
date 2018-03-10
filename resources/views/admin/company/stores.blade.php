@extends('layout-core')

@section('title', 'Empresa / Tienda')

@section('title-header', 'Empresa / Tienda')


@section('main-header-info-app')
    @include('partials.perfil-header-info')
@endsection


@section('main-header-options-app')

    @include('partials.perfil-link')
    @include('partials.contacts-link')

@endsection


@section('article-content')

@section('extra-content')
    @include('admin.company.partials.tags')
@endsection

<div id="continaer-note-shows" class="right-content-list content-complete-high">


    <!-- <div class="block-content-info"></div> -->

    <div class="container-list-something">

        <div id="show-info-contact-empresa" class="core-show-sub-title">Tiendas de la Empresa</div>
        <div id="show-info-contact-nombre" class="core-show-title-blue">{{ $empresa->nombre }}</div>

        <div class="container-company-store-logo-line">
            <button type="button" id="btn-modal-create-tienda" class="btn btn-primary btn-sm btn-sm-radius right-btn-company" data-toggle="modal" data-target="#modalNewTienda">Nueva tienda</button>
        </div>

    </div>




    <div class="container-list-info-admin">
        <div class="container-admin-100">

            @if( count($tiendas) == 0)
                    <div id="msg-vacio">Aun no hay tiendas.</div>
            @else
                @foreach( $tiendas as $tienda )

                    <div class="tienda-container" data-id="{{ $tienda->id }}">
                        <div class="tienda-color-background"></div>
                        <div class="tienda-img-container">
                            <img src="{{ asset('/media/photo-store/' . $tienda->foto) }}">
                        </div>
                        <div class="tienda-info-container">
                            <div class="tienda-info-container-nombre">
                                <span>Tienda</span>
                                <h2>{{ $tienda->nombre }}</h2>
                            </div>
                            <div class="tienda-info-container-desc">
                                <div class="tienda-option-container">
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-default btn-sm dropdown-toggle tienda-options-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-h fa-lg"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="{{ route('store.front', $tienda->store_route) }}" target="_blank">Ver tienda</a></li>
                                            <li class="divider"></li>
                                            <li><a class="btn-update-company" href="#" data-toggle="modal" data-target="#modalUpdateTienda">Editar</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span>Descripción</span>
                                <h2>{{ $tienda->desc }}</h2>
                            </div>
                        </div>
                    </div>

                @endforeach
            @endif

        </div>
    </div>




</div>
@endsection

@section('modals')

    @include('admin.company.partials.modal-store')
    @include('partials.loader')

@endsection

@section('extra-js')
    <script src="{{ asset('/js/codizer-validate.js') }}"></script>
    <script src="{{ asset('/js/core-tienda.js') }}"></script>
@endsection
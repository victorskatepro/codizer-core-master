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

    <div id="container-menu-companies">
        <a href="#" class="companies-tag-selectionated">
            <div class="companies-icon"></div>
            <div class="companies-desc">
                <div class="companies-title">Empresa</div>
                <div class="companies-tittle-tag">No hay empresa</div>
            </div>
        </a>
        <a href="#">
            <div class="companies-icon"></div>
            <div class="companies-desc">
                <div class="companies-title">Tiendas</div>
                <div class="companies-tittle-tag">No tienes acceso</div>
            </div>
        </a>
        <a href="#">
            <div class="companies-icon"></div>
            <div class="companies-desc">
                <div class="companies-title">Equipo</div>
                <div class="companies-tittle-tag">No tienes acceso</div>
            </div>
        </a>
        <a href="#">
            <div class="companies-icon"></div>
            <div class="companies-desc">
                <div class="companies-title">Productos</div>
                <div class="companies-tittle-tag">No tienes acceso</div>
            </div>
        </a>
    </div>

@endsection

<div id="continaer-note-shows" class="right-content-list content-complete-high">

    <div id="msg-vacio">
        <button type="button" id="btn-new-company" class="btn btn-primary btn-sm btn-sm-radius btn-shadow-blue" data-toggle="modal" data-target="#modalNewCompany">Nueva Empresa</button>
        <div style="margin-top: 20px;">¡Da de alta tu empresa, configura tus tiendas y comienza a vender!</div>
    </div>

</div>

@endsection

@section('modals')

    @include('admin.company.partials.modal-new-company')
    @include('partials.loader')

@endsection

@section('extra-js')
    <script src="{{ asset('/js/codizer-validate.js') }}"></script>
    <script src="{{ asset('/js/core-company.js') }}"></script>
@endsection
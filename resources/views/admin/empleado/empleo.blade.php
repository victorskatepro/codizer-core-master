@extends('layout-core')

@section('title', 'Empleado | Tienda')

@section('title-header', 'Empleado | Tienda')


@section('main-header-info-app')
    @include('partials.perfil-header-info')
@endsection


@section('main-header-options-app')

    @include('partials.perfil-link')
    @include('partials.contacts-link')

@endsection


@section('article-content')

@section('extra-content')
    @include('admin.empleado.partials.tags-empleo')
@endsection

<div id="continaer-note-shows" class="right-content-list content-complete-high">


    <!-- <div class="block-content-info"></div> -->

    <div class="container-list-something">

        <div id="show-info-contact-empresa" class="core-show-sub-title">Empleado</div>
        <div id="show-info-contact-nombre" class="core-show-title-blue">Administrar Productos</div>

    </div>




    <div class="container-list-info-admin">
        <div id="container-employees-list-all" class="container-admin-100">


            @if( count($empleos) == 0)
                <div id="msg-vacio">No tienes empleos.</div>
            @else

                @foreach( $empleos as $empleo )
                    <div class="employee-container-mini" data-id="{{ $empleo->empleado_id  }}">
                        <div class="btn-employee-container">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default btn-sm dropdown-toggle btn-extra btn-extra-morado-bg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h fa-lg"></i>
                                </button>
                                <ul class="dropdown-menu">

                                    @if ($empleo->nivel == 'productos')
                                        <li><a href="{{ route('empleado.products.index', [$userPerfil[0]->perfil_route, $empleo->empresa_id, $empleo->tienda_id] ) }}">Gestionar productos</a></li>
                                    @else
                                        <li><a href="#">No hay opciones</a></li>
                                    @endif

                                </ul>
                            </div>
                        </div>
                        <div class="body-nivel">
                            <span class="txt-color-morado">Nivel</span>
                            <div>{{ $empleo->nivel }}</div>
                        </div>

                        <img src="{{ asset('/media/photo-store/' . $empleo->foto_tienda) }}" class="body-photo-employee">

                        <div class="body-name-employee">
                            <span class="txt-color-morado">Tienda</span>
                            <div><a href="{{ route('store.front', $empleo->store_route) }}" target="_blank">{{ $empleo->nombre_tienda }}</a></div>
                        </div>

                        <div class="body-tienda-employee">
                            <span class="txt-color-morado">Empresa</span>
                            <div><a href="#">{{ $empleo->nombre_empresa }}</a></div>
                        </div>

                        <img src="{{ asset('/media/photo-company/' . $empleo->logo) }}" class="body-photo-tienda-employee">

                    </div>
                @endforeach

            @endif

        </div>
    </div>


</div>
@endsection

@section('modals')

@endsection

@section('extra-js')

@endsection
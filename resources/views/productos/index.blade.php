@extends('layouts.app')
@section('titulo', 'Productos')
@section('contenido')
    <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2 mb-3">
        <h1 class="mb-0">Productos</h1>
        <a href="{{route('productos.create')}}" class="btn btn-primary">Nuevo Producto</a>
    </div>
    <p>Administra los Productos Activos de la Sucursal de QUITO</p>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Identificador</th>
                <th>Producto</th>
                <th>Unidad Compra</th>
                <th>Unidad Venta</th>
                <th>Precio Compra</th>
                <th>Precio Venta</th>
                <th>Saldo Inicial</th>
                <th>Cant. Ingresos</th>
                <th>Cant. Egresos</th>
                <th>Cant. Ajustes</th>
                <th>Saldo Final</th>
                <th>Estado</th>
                <th>Categoria</th>
            </tr>
            </thead>
            <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td>{{$producto->id_producto}}</td>
                    <td>{{$producto->pro_descripcion}}</td>
                    <td>{{$producto->pro_um_compra}}</td>
                    <td>{{$producto->pro_um_venta}}</td>
                    <td>{{$producto->pro_valor_compra}}</td>
                    <td>{{$producto->pro_precio_venta}}</td>
                    <td>{{$producto->pro_saldo_inicial}}</td>
                    <td>{{$producto->pro_qty_ingresos}}</td>
                    <td>{{$producto->pro_qty_egresos}}</td>
                    <td>{{$producto->pro_qty_ajustes}}</td>
                    <td>{{$producto->pro_saldo_final}}</td>
                    <td>{{$producto->estado_prod}}</td>
                    <td>{{$producto->id_categoria}}</td>
                    <td>
                        <a href="{{route('productos.edit', $producto)}}" class="btn btn-sm btn-warning">Editar</a>
                        <form action = "{{route('productos.destroy', $producto->id_producto)}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('¿Inhabilitar Producto?')">Inhabilitar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center mt-3">
            {{ $productos->links() }}
        </div>
    </div>
@endsection

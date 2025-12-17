@extends('layouts.app')
@section('titulo','Nuevo Producto')
@section('contenido')
    <h1>Registrar Producto</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('productos.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Identificador *</label>
            <input type="text" name="id_producto" class="form-control" maxlength="7" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nombre Producto *</label>
            <input type="text" name="pro_descripcion" class="form-control" maxlength="50" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Unidad Compra *</label>
            <select name="pro_um_compra" class="form-select" required>
                <option value="">Seleccione...</option>
                <option value="BLL">Botella</option>
                <option value="CJ">Caja</option>
                <option value="CJA">Caja Grande</option>
                <option value="CM">Centimetro</option>
                <option value="DZA">Docena</option>
                <option value="FT">Pie</option>
                <option value="GL">Galón</option>
                <option value="GR">Gramo</option>
                <option value="IN">Pulgada</option>
                <option value="KG">Kilogramo</option>
                <option value="LB">Libra</option>
                <option value="LT">Litro</option>
                <option value="M">Metro</option>
                <option value="ML">Mililitro</option>
                <option value="MM">Milímetro</option>
                <option value="OZ">Onza</option>
                <option value="PAR">Par</option>
                <option value="PK">Paquete</option>
                <option value="ROL">Rollo</option>
                <option value="UND">Unidad</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Unidad Venta *</label>
            <select name="pro_um_venta" class="form-select" required>
                <option value="">Seleccione...</option>
                <option value="BLL">Botella</option>
                <option value="CJ">Caja</option>
                <option value="CJA">Caja Grande</option>
                <option value="CM">Centimetro</option>
                <option value="DZA">Docena</option>
                <option value="FT">Pie</option>
                <option value="GL">Galón</option>
                <option value="GR">Gramo</option>
                <option value="IN">Pulgada</option>
                <option value="KG">Kilogramo</option>
                <option value="LB">Libra</option>
                <option value="LT">Litro</option>
                <option value="M">Metro</option>
                <option value="ML">Mililitro</option>
                <option value="MM">Milímetro</option>
                <option value="OZ">Onza</option>
                <option value="PAR">Par</option>
                <option value="PK">Paquete</option>
                <option value="ROL">Rollo</option>
                <option value="UND">Unidad</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Valor de Compra *</label>
            <input type="number" name="pro_valor_compra" class="form-control" step="0.01" min="0" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Valor de Venta *</label>
            <input type="number" name="pro_precio_venta" class="form-control" step="0.01" min="0" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Saldo Inicial *</label>
            <input type="number" name="pro_saldo_inicial" class="form-control" step="1" min="0" required>
        </div>

        <input type="hidden" name="pro_qty_ingresos" value="0">
        <input type="hidden" name="pro_qty_egresos" value="0">
        <input type="hidden" name="pro_qty_ajustes" value="0">

        <div class="mb-3">
            <label class="form-label">Categoría *</label>
            <select name="id_categoria" class="form-select" required>
                <option value="ELE">Electrodoméstico</option>
                <option value="RPA">Ropa</option>
                <option value="ALI">Alimentos</option>
            </select>

        </div>


        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection

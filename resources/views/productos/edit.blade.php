@extends('layouts.app')
@section('titulo','Editar Producto')
@section('contenido')
    <h1>Editar Producto</h1>

    <form action="{{ route('productos.update', $producto) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nombre Producto *</label>
            <input type="text"
                   name="pro_descripcion"
                   class="form-control"
                   maxlength="50"
                   value="{{ old('pro_descripcion', $producto->pro_descripcion) }}"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Unidad Compra *</label>
            <select name="pro_um_compra" class="form-select" required>
                <option value="">Seleccione...</option>
                <option value="BLL" {{ $producto->pro_um_compra == 'BLL' ? 'selected' : '' }}>Botella</option>
                <option value="CJ" {{ $producto->pro_um_compra == 'CJ' ? 'selected' : '' }}>Caja</option>
                <option value="CJA" {{ $producto->pro_um_compra == 'CJA' ? 'selected' : '' }}>Caja Grande</option>
                <option value="CM" {{ $producto->pro_um_compra == 'CM' ? 'selected' : '' }}>Centimetro</option>
                <option value="DZA" {{ $producto->pro_um_compra == 'DZA' ? 'selected' : '' }}>Docena</option>
                <option value="FT" {{ $producto->pro_um_compra == 'FT' ? 'selected' : '' }}>Pie</option>
                <option value="GL" {{ $producto->pro_um_compra == 'GL' ? 'selected' : '' }}>Galón</option>
                <option value="GR" {{ $producto->pro_um_compra == 'GR' ? 'selected' : '' }}>Gramo</option>
                <option value="IN" {{ $producto->pro_um_compra == 'IN' ? 'selected' : '' }}>Pulgada</option>
                <option value="KG" {{ $producto->pro_um_compra == 'KG' ? 'selected' : '' }}>Kilogramo</option>
                <option value="LB" {{ $producto->pro_um_compra == 'LB' ? 'selected' : '' }}>Libra</option>
                <option value="LT" {{ $producto->pro_um_compra == 'LT' ? 'selected' : '' }}>Litro</option>
                <option value="M" {{ $producto->pro_um_compra == 'M' ? 'selected' : '' }}>Metro</option>
                <option value="ML" {{ $producto->pro_um_compra == 'ML' ? 'selected' : '' }}>Mililitro</option>
                <option value="MM" {{ $producto->pro_um_compra == 'MM' ? 'selected' : '' }}>Milímetro</option>
                <option value="OZ" {{ $producto->pro_um_compra == 'OZ' ? 'selected' : '' }}>Onza</option>
                <option value="PAR" {{ $producto->pro_um_compra == 'PAR' ? 'selected' : '' }}>Par</option>
                <option value="PK" {{ $producto->pro_um_compra == 'PK' ? 'selected' : '' }}>Paquete</option>
                <option value="ROL" {{ $producto->pro_um_compra == 'ROL' ? 'selected' : '' }}>Rollo</option>
                <option value="UND" {{ $producto->pro_um_compra == 'UND' ? 'selected' : '' }}>Unidad</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Unidad Venta *</label>
            <select name="pro_um_venta" class="form-select" required>
                <option value="">Seleccione...</option>
                <option value="BLL" {{ $producto->pro_um_venta == 'BLL' ? 'selected' : '' }}>Botella</option>
                <option value="CJ" {{ $producto->pro_um_venta == 'CJ' ? 'selected' : '' }}>Caja</option>
                <option value="CJA" {{ $producto->pro_um_venta == 'CJA' ? 'selected' : '' }}>Caja Grande</option>
                <option value="CM" {{ $producto->pro_um_venta == 'CM' ? 'selected' : '' }}>Centimetro</option>
                <option value="DZA" {{ $producto->pro_um_venta == 'DZA' ? 'selected' : '' }}>Docena</option>
                <option value="FT" {{ $producto->pro_um_venta == 'FT' ? 'selected' : '' }}>Pie</option>
                <option value="GL" {{ $producto->pro_um_venta == 'GL' ? 'selected' : '' }}>Galón</option>
                <option value="GR" {{ $producto->pro_um_venta == 'GR' ? 'selected' : '' }}>Gramo</option>
                <option value="IN" {{ $producto->pro_um_venta == 'IN' ? 'selected' : '' }}>Pulgada</option>
                <option value="KG" {{ $producto->pro_um_venta == 'KG' ? 'selected' : '' }}>Kilogramo</option>
                <option value="LB" {{ $producto->pro_um_venta == 'LB' ? 'selected' : '' }}>Libra</option>
                <option value="LT" {{ $producto->pro_um_venta == 'LT' ? 'selected' : '' }}>Litro</option>
                <option value="M" {{ $producto->pro_um_venta == 'M' ? 'selected' : '' }}>Metro</option>
                <option value="ML" {{ $producto->pro_um_venta == 'ML' ? 'selected' : '' }}>Mililitro</option>
                <option value="MM" {{ $producto->pro_um_venta == 'MM' ? 'selected' : '' }}>Milímetro</option>
                <option value="OZ" {{ $producto->pro_um_venta == 'OZ' ? 'selected' : '' }}>Onza</option>
                <option value="PAR" {{ $producto->pro_um_venta == 'PAR' ? 'selected' : '' }}>Par</option>
                <option value="PK" {{ $producto->pro_um_venta == 'PK' ? 'selected' : '' }}>Paquete</option>
                <option value="ROL" {{ $producto->pro_um_venta == 'ROL' ? 'selected' : '' }}>Rollo</option>
                <option value="UND" {{ $producto->pro_um_venta == 'UND' ? 'selected' : '' }}>Unidad</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Categoría *</label>
            <select name="id_categoria" class="form-select" required>
                <option value="ELE" {{ $producto->id_categoria == 'ELE' ? 'selected' : '' }}>Electrodoméstico</option>
                <option value="RPA" {{ $producto->id_categoria == 'RPA' ? 'selected' : '' }}>Ropa</option>
                <option value="ALI" {{ $producto->id_categoria == 'ALI' ? 'selected' : '' }}>Alimentos</option>
            </select>

        </div>

        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection

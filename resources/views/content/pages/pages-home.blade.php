@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')
<h4>Home Page</h4>
<h4>Este contenido es público</h4>

@role('superadministrador')
    <p>Solo lo va a ver el rol Superadministrador</p>
@endrole

@role('administrador')
    <p>Solo lo va a ver el rol Administrador</p>
@endrole

@role('JefeSucursal')
    <p>Solo lo va a ver el rol Jefe de Sucursal</p>
@endrole

@role('Operador')
    <p>Solo lo va a ver el rol de operador</p>
@endrole

@endsection

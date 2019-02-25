@extends('layouts.app')

@section('contenido')
<div class="w-75 p-3 mx-auto">
    <h1>Contactos</h1>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">codigo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>dfg</td>
            <td>12354654</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>64564564536</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection

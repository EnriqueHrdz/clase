@extends('layouts.app')
@section('content')

    <script type="text/javascript">
        const dataList = @json($products);
    </script>

<div id="listProduct"></div>

{{--<table class="table">--}}
{{--    <thead>--}}
{{--      <tr>--}}
{{--        <th><abbr title="Position">Id</abbr></th>--}}
{{--        <th><abbr title="Played">Nombre</abbr></th>--}}
{{--        <th><abbr title="Won">Descripción</abbr></th>--}}
{{--        <th><abbr title="Drawn">Costo</abbr></th>--}}
{{--      </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--         @foreach ($products as $product)--}}
{{--            <tr>--}}
{{--                <td>{{ $product["id"] }}</td>--}}
{{--                <td>{{ $product["name"] }}</td>--}}
{{--                <td>{{ $product["description"] }}</td>--}}
{{--                <td>{{ $product["amount"] }}</td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--    </tbody>--}}
{{--  </table>--}}
@stop

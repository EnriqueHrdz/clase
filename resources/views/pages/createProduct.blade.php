@extends('layouts.app')
@section('content')

    <!-- Dashboard start -->
    <script type="text/javascript">
        const data = @json($data);
    </script>
    <br>
    <div class="ui container"><div id="createProduct"></div></div>
@stop

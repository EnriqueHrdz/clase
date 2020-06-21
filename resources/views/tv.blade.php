<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>MVC TV Example</title>
</head>
<body>
<style>
    img {
        height: 400px;
        left: 21%;
        position: absolute;
        top: 21%;
        width: 600px;
    }
</style>
<p>Estas viendo: </p>
<p>{{ $ejemplo }}</p>

@if ($channel && count($channel) > 0)
    <img src="{{asset( $channel[0]->image )}}" />
    @else
    <img src="{{asset( 'imgs/nosignal.jpg' )}}" />
@endif

</body>
</html>

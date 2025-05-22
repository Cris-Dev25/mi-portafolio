<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    </head>
    @extends('layouts.app')

@section('content')
    <div>
        <article id="introduccion">
            <h1>Cristian Pardo</h1>
            <h3>Desarrollador de Software y UX Designer</h3>
            <p>
                Desarrollador Freelance y Sponsor de la experiencia del usuario
            </p>
            <p>
                Me gusta resolver problemas con soluciones diseñadas en la experiencia del usuario, la eficacia y rapidez de
                la respuesta al problema.
            </p>
        </article>
    </div>
@endsection

</html>

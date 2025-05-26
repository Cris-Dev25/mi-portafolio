@extends('layouts.app')

@section('content')
    <div class="flex justify-around">
        <article id="introduccion" class="mt-20 mr-10">
            <h1 class="text-2xl font-serif my-8">Cristian Pardo</h1>
            <h3 class="text-xl my-8">Desarrollador de Software y UX Designer</h3>
            <p>
                Desarrollador Freelance y Sponsor de la experiencia del usuario
            </p>
            <p>
                Me gusta resolver problemas con soluciones diseñadas en la experiencia del usuario, la eficacia y rapidez de
                la respuesta al problema.
            </p>
        </article>
        <section>
            <div class="border-2 border-black">
                <img src="{{asset('assets/images/LogoCristian.jpg')}}" alt="imagen" class="w-[400px] mt-10">
            </div>
        </section>
    </div>
@endsection
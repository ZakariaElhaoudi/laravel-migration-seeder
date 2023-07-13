@extends('layouts.main-layout')

@section('content')

    <div class="row">
        <div class="col-3">
            <ul>
            @foreach ($trainRoutes as $route)
                
            <li>
                {{ $route -> azienda }}: {{ $route -> stazione_di_partenza}} {{ $route -> stazione_di_arrivo }}: {{ $route -> orario_di_partenza }}
                {{ $route -> orario_di_arrivo }}: {{ $route -> codice_treno }} {{ $route -> numero_carrozze }}: {{ $route -> in_orario }}
                {{ $route -> cancellato }}
            </li>

            @endforeach
            </ul>

        </div>
    </div>
    
@endsection

{{-- azienda
- stazione di partenza
- stazione di arrivo
- orario di partenza
- orario di arrivo
- codice treno
- numero carrozze
- in orario
- cancellato --}}
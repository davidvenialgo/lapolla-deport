@extends('layout.sistema')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-md-12 table-container">
                <table class="table table-bordered text-center">
                    <thead>
                        <h1>Tabla de Posiciones</h1>
                        <tr style="box-shadow: 10px 5px 5px rgb(255, 252, 252);">
                            <th scope="col" class="thin-column">#</th>
                            <th scope="col">Equipo</th>
                            <th scope="col" class="thin-column">Goles</th>
                            <th scope="col" class="thin-column">Puntos</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $index => $row)
                            @if( $row['A'] != '')
                                <tr style="box-shadow: 10px 5px 5px rgb(255, 252, 252);">
                                    <th scope="row">{{ $index }}</th>
                                    <td>{{ $row['A'] }}</td>
                                    <td>{{ $row['B'] }}</td>
                                    <td>{{ $row['C'] }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

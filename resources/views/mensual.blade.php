@extends('layout.sistema')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-md-12 table-container">
                <h1>Tabla de Posiciones Mensual</h1>
                <table class="table table-bordered text-center">
                    <thead>
                        <tr style="box-shadow: 10px 5px 5px rgb(255, 252, 252);">
                            <th scope="col" class="thin-column">#</th>
                            <th scope="col">Equipo</th>
                            <th scope="col" class="thin-column">Goles</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datasm as $index => $row)
                            @if($row['I'] != '')
                                <tr style="box-shadow: 10px 5px 5px rgb(255, 252, 252);">
                                    <th scope="row">{{ $index }}</th>
                                    <td>{{ $row['I'] }}</td>
                                    <td>{{ $row['J'] }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

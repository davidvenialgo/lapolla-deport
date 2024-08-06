@extends('layout.sistema')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="col-md-12 table-container">
            <h1>Resultados</h1>
            <table class="table table-bordered text-center">
                <thead>
                   
                </thead>
                <tbody>
                    @foreach ($datas as $index => $row)
                        @if ($row['E'] != '')
                            <tr>
                                @if ($row['D'] != '')
                                    <td style="font-size: 18px;">{{ $row['D'] }}</td>
                                    <td style="font-size: 18px;">{{ $row['E'] }}</td>
                                    <td style="font-size: 18px;">{{ $row['F'] }}</td>
                                    <td style="font-size: 18px;">{{ $row['G'] }}</td>
                                @else   
                                    @if($row['F'] != ' ')
                                        <td colspan="4" style="height: 30px; background: grey;" class="fechas">{{ $row['E'] }}</td>
                                    @else
                                        <td colspan="4" style="height: 30px;">{{ $row['E'] }}</td>
                                    @endif
                                @endif
                                
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

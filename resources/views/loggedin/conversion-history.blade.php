@extends('layouts.app')

@section('content')
    <div id="balance">
        <div class="details col-12">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h5>Small Asset Conversion History</h5>
                    </div>
                    <div class="col-12">
                        <table class="table table-hover" style="position: relative;margin-top:100px;top: -100px; ">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Free(BNB)</th>
                                    <th>Converted BNB</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <div class="text-center" style="position: relative;top: 100px;">
                                    @foreach ($con_history as  $open )
                                        <tr>
                                            <td><a href="{{ route('basic',str_replace('/','_',$open['date']) ) }}">{{ $open['date']  }}</td>
                                            <td><a href="{{ route('basic',str_replace('/','_',$open['free']) ) }}">{{ $open['free']  }}</td>
                                            <td><a href="{{ route('basic',str_replace('/','_',$open['converted']) ) }}">{{ $open['converted']  }}</td>
                                            <td><a href="{{ route('basic',str_replace('/','_',$open['operation']) ) }}">{{ $open['operation']  }}</td>
                                       
                                        </tr>
                                    @endforeach 
                                    </div>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
     </div>
@endsection
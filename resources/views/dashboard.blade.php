@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   <h3>Your Listing</h3>
                   @if(count($listings))
                        <table class="table table-stripped">
                            <tr>
                                <th>
                                    Company
                                </th>
                                <th></th>
                                <th></th>
                            </tr>  
                            @foreach($listings as $listing)
                            <tr>
                                <td>{{$listing->name}}</td>
                            </tr>
                            @endforeach
                        </table>
                   @endif
                </div>
            </div>
        </div>
    </div>

@endsection

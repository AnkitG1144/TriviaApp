@extends('Layouts.app')
@section('content')
    @foreach($allData as $key => $data)
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                        <div class="mb-3">
                                <h4>Game {{ $key+1 }}: Date - {{date('d-m-Y', strtotime($data->created_at))}}</h4>
                                <p>Name : {{ $data->name }}</p>
                                <p><b> Who is the best cricketer in the world?</b></p>
                                <p>Answer: {{$data->ans_1 }}</p>
                                <p><b> What are the colours in the national flag?</b></p>
                                <p>Answer: {{ $data->ans_2 }}</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="mb-3">
                <a href="{{URL::to('/')}}" class="btn btn-primary mb-3">Back</a>
            </div>
        </div>
    </div>

@endsection
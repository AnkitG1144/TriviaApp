@extends('Layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('submit-question2') }}" method="post">@csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Who is the best cricketer in the world?</label>
                                @foreach($colors as $key => $color)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="color[]" value="{{$color}}" id="{{$color}}">
                                        <label class="form-check-label" for="{{$color}}">
                                            {{$color}}
                                        </label>
                                    </div>
                                @endforeach
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="name" value="{{ $name }}">
                            <input type="hidden" name="option" value="{{ $option }}">
                            <button type="submit" class="btn btn-primary mb-3">FINISH</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        

@endsection
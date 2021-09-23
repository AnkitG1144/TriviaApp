@extends('Layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('submit-question1') }}" method="post">@csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Who is the best cricketer in the world?</label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="options">
                            <option selected disabled>Open this select menu</option>
                            @foreach($options as $option)
                                <option value="{{ $option }}">{{ $option }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="name" value="{{ $name }}">
                        <button type="submit" class="btn btn-primary mb-3">Next</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        

@endsection
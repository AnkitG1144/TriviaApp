@extends('Layouts.app')
@section('content')
    <div class="splash">
        <h1 class="fade-in">Welcome to Trivia App</h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <form action="{{ url('submit-name') }}" method="post">@csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Please Enter Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Ankit Gupta" required>
                        </div>
                        <div class="mb-3">
                            <a href="{{ URL::to('/result') }}" class="btn btn-secondary mb-3">History</a>
                            <button type="submit" class="btn btn-primary mb-3">Next</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        

@endsection
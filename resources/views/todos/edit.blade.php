@extends('layouts.app')

@section('content')

        <div class="container">
          <h1 class="text-center my-5">Edit TODO</h1>
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="card card-default">
                  <div class="card-header">
                    Edit Todo
                  </div>
                  <div class="card-body">

                    <form action="/update/{{ $todo->id }}" method="POST">
                        @csrf
                      <div class="form-group">
                        <input type="text" name="name" value="{{ $todo->name }}" placeholder="Name" class="form-control">
                    </div>
                    <div class="form-group">
                      <textarea name="description" placeholder="Description" value="{{ $todo->description }}" rows="5" class="form-control">{{ $todo->description }}</textarea>
                    </div>
                    @if($errors->any())
                    <div class="alert alert-danger">
                      @foreach($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                      @endforeach
                    </div>
                    @endif
                    
                    <div class="form-group text-center">
                      <button type="submit" class="btn btn-success">Edit todo</button>
                    </div>
                  </div>
            </div>
          <!-- </div> -->
        </div>
        </div>
    </body>
</html>

@endsection

@extends('layouts.app')
@section('title')
  {{ $todo->name }}
@endsection

@section('content')

        <div class="container">
          <h1 class="text-center my-5">{{ $todo->name }}</h1>
            <div class="row justify-content-center">
              <div class="col-md-6">
                <div class="card card-default">
                  <div class="card-header">
                    Description
                  </div>
                  <div class="card-body">

                      {{ $todo->description }}

                  </div>
            </div>
            <div class="form-group text-center">
              <a href="/edit-todo/{{ $todo->id }}" type="submit" class="btn btn-info my-2">Edit</a>
            </div>
          </div>
        </div>
        </div>

@endsection

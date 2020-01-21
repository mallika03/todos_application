@extends('layouts.app')

@section('title')
  Todos
@endsection

@section('content')
        <div class="container">
          <h1 class="text-center my-5">TODOS PAGE</h1>
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="card card-default">
                  <div class="card-header">
                    Todos
                  </div>
                  <div class="card-body">
                    <ul class="list-group">
                    <?php foreach ($tasks as $task): ?>
                    <li class="list-group-item">
                      {{ $task->name }}

                      <a href="/todos/{{ $task->id }}" class="btn btn-primary btn-sm float-right">View</a>
                    </li>
                    <?php endforeach; ?>
                  </ul>
                  </div>
            </div>
          <!-- </div> -->
        </div>
        </div>

@endsection

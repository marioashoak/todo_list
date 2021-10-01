@extends('template');

@section('content')


<div class="container">
    <div class="row">
        <div class="col">
            <div class="card card-header">
                <h3 class="text-center">Create Todos</h3>
                <a href="{{ route('todos.create') }}" class="btn btn-success btn-sm">
                CREATE
                </a>
            </div>

            <div class="card card-body">

                @foreach ($todos as $todo)

                <a href="{{ route('todos.show',$todo->id) }}">
                    <li class="list-group-item text-center">
                        {{ $todo->name }}


                        <p>
                            @if (!$todo->compelted)
                            <a href="{{ route('todos.complete',$todo->id) }}" class="btn btn-info btn-sm">
                                COMPLETE
                            </a>


                            @endif
                        </p>




                        <p>
                            <a href="{{ route('todos.edit',$todo->id) }}" class="btn btn-info btn-sm">
                                EDIT
                            </a>

                        </p>



                    <form action="{{ route('todos.delete',$todo->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm">DELETE</button>

                    </form>

                    </li>
                </a>





















                @endforeach


            </div>



        </div>
    </div>
</div>


@endsection

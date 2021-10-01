@extends('template')

@section('content')



<p class="text-center" style="font-family: Roboto;">Create Todos</p>


<div class="container">
    <div class="row">
        <div class="col">


            @if ($errors->any())

            <div class="alert alert-danger">
                <ul class="list-group">
                    @foreach ($errors->all() as $error)

                    <li class="list-group-item">
                        {{ $error }}
                    </li>


                @endforeach
                </ul>
            </div>



            @endif




            <form action="{{ route('todos.store') }}" method="post">
                @csrf

            <div class="form-group">

                <input type="text" class="form-control" name="name" id="name" placeholder="Name">

            </div>


            <div>

                <textarea class="form-control" name="description" id="" cols="30" rows="10">

                </textarea>

            </div>

            <button type="submit" name="create" class="btn btn-info btn-sm">
                CREATE TODOS
            </button>


            </form>

        </div>
    </div>
</div>

@endsection

@extends('layouts.master')
@section('content')


     <!-- FORM To EDIT TASK-->
    <form class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <input value="Task content to edit" id="task2" type="text" class="validate">
            <label for="task">Edit Task</label>
          </div>
        </div>

        <a class="waves-effect waves-light btn">Edit Task</a>

    </form>


@endsection
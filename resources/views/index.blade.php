@extends('layouts.master')
@section('content')

   <table>
      <thead>
        <tr>
            <th>Task</th>
            <th>Assigned to </th>
            <th>Edit </th>
            <th>Delete </th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td><a href="">Finihsh 10k Run</a></td>
          <td><a href="">Neil DeGrasse</a></td>
          <td ><a title="edit" href="">  <i class="small material-icons">edit</i></a></td>
           <td ><a title="delete" href="">  <i class="small material-icons">delete_forever</i></a></td>
        </tr>
        <tr>
          <td><a href="">Cook Pasta Tomorrow</a></td>
          <td><a href="">Buzz Aldrin</a></td>
          <td ><a title="edit" href="">  <i class="small material-icons">edit</i></a></td>
           <td ><a title="delete" href="">  <i class="small material-icons">delete_forever</i></a></td>
        </tr>
        <tr>
          <td><a href="">Meeting with Stake holders</a></td>
          <td><a href="">Neil Armstrong</a></td>
          <td ><a title="edit" href="">  <i class="small material-icons">edit</i></a></td>
           <td ><a title="delete" href="">  <i class="small material-icons">delete_forever</i></a></td>
        </tr>
      </tbody>
    </table>
    <br>
    <ul class="pagination">
      <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
      <li class="active"><a href="#!">1</a></li>
      <li class="waves-effect"><a href="#!">2</a></li>
      <li class="waves-effect"><a href="#!">3</a></li>
      <li class="waves-effect"><a href="#!">4</a></li>
      <li class="waves-effect"><a href="#!">5</a></li>
      <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
    </ul>

    <!-- FORM -->
    <form class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <input id="task" type="text" class="validate">
            <label for="task">New Task</label>
          </div>
        </div>

        <div class="input-field col s12">
          <select>
            <option value="" disabled selected>Assign to:</option>
            <option value="1">To myself: </option>
            <option value="2">Buzz Aldrin 2</option>
            <option value="3">Neil Armstrong</option>
            <option value="4">Neil DeGrasse</option>
            <option value="5">Stephen Hawkings </option>
          </select>
            <label>Assign Task</label>
        </div>
        <a class="waves-effect waves-light btn">Add New Task</a>

    </form>
    <br><br><br>
    <ul class="collection with-header">
       <li class="collection-header"><h4>My Co-workers</h4></li>
      <li class="collection-item">
        <div>Buzza  <a href="#" class="secondary-content">delete</a></div>
      </li>
      <li class="collection-item">
        <div>Carl Sagan  <a href="#" class="secondary-content">delete</a></div>
      </li>
       <li class="collection-item">
        <div>Neal DeGrasse  <a href="#" class="secondary-content">delete</a></div>
      </li>
       <li class="collection-item">
        <div>Neil Armstrong  <a href="#" class="secondary-content">delete</a></div>
      </li>
    </ul>

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
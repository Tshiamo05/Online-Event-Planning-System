@extends('layout')
    @section("content")
    <div class="container">
    <h1>Checklist</h1>
  <div class="list-group checklist">
  @foreach($checklists as $item)
                    <h3>{{Session::get('user')['name']}} here is your checklist</h3>
                    <h3></h3>
                    <a href="#" class="list-group-item">Attire: {{$item->attire}}</a>
                    <a href="#" class="list-group-item">make_up: {{$item->make_up}}</a>
                    <a href="#" class="list-group-item">venue: {{$item->venue}}</a>
                    <a href="#" class="list-group-item">bakery : {{$item->bakery}}</a>
                    <a href="#" class="list-group-item">decoration: {{$item->decoration}}</a>
                    <a href="#" class="list-group-item">catering : {{$item->catering}}</a>
                    <a href="#" class="list-group-item">jewellery : {{$item->jewellery}}</a>
                    <br><br>
            @endforeach
  </div>
  <a class="btn btn-success" href="editchecklist">Edit Checklist</a><br><br>
</div>
    @endsection

    
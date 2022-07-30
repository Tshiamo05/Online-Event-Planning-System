@extends('layout')
@section("content")
@if(count($reviews) > 1)
      @foreach($reviews as $review)
        <div class= "well"> 
          <h3>
            <a href="/reviews">Name</a>

            @for ($i = 0; $i < 5; $i++)
              @if ($i < $review->rating)
                <span class="star star--gold"></span>
              @else
                <span class="star"></span>
              @endif
            @endfor

          </h3>
            <small>{{ $review->created_at }}</small>
          <br><br>
            <small>{{ $review->body }}</small> 
          <br><br>
        </div>

      @endforeach
    @else
    @endif
    @endsection
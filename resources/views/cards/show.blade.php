@extends('layout')

@section('content')

        <div class="row">
        	<div class="col-md-6 col-md-offset-3">
				 <ul class="list-group">
				 	@foreach($card->notes as $note)
				 	  <li class="list-group-item">{{ $note->body }}
                                            <a href="#" style="float:right;">{{ $note->user->username}}</a>
                      </li>
				 	@endforeach
                 </ul>
                 <hr>
                 <h3>Add a New Note</h3>
                 <form method="POST" action="/cards/{{ $card->id }}/notes">
                 	<div class="form-group">
                 	   <textarea name="body" class="form-control"></textarea>
                 	</div>
                 	<div class="form-group">
                 	   <button type="submit" class="btn btn-primary">Add Note</button>
                 	</div>
<!--                     <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

 -->  {{ csrf_field() }}
                     </form>

            </div>
        </div>
@stop
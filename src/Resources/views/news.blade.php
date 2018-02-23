@extends('netmk::layouts.master')
@section('content')
    @foreach($news->channel->item as $entry)
        <div class="col-sm-6 col-md-6 col-lg-3 mt-4">
            <div class="card {{ $meta->text }} {{ $meta->style }} text-dark" style="max-width: 23rem;">
                <div class="card-header">{{ $entry->title }}</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $meta->name }}</h5>
                    <p class="card-text">{{ $entry->description }}</p>
                    <a href="{{ $entry->link }}" class="card-link">Read more</a>
                </div>
            </div>
        </div>
    @endforeach
@stop

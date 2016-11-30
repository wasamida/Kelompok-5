@extends('layouts.app-frontend')

@section('content')
@foreach ($articles as $item)

<div class="col-md-6 to-animate blog">
            <div class="blog-grid" style="background-image: url(assets/images/full_image_4.jpg);">
              <div class="date">
                <span>04</span>
                <small>Aug</small>
              </div>
            </div>
            <a href="#" class="desc">
              <div class="desc-grid">
                <h3>{{$item->title}}</h3>
                  <p>{{$item->content}}</p>
              </div>
              <div class="reading">
                <i class="icon-arrow-right2"></i>
              </div>
            </a>
          </div>


@endforeach
@endsection

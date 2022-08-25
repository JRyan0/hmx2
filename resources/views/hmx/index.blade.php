@extends('base.index')

@section('container')

  @include('base.swiper', ['slide1' => 'images\a.jpg','slide2' => 'images\a.jpg','slide3' => 'images\a.jpg'])
  @include('base.carrinhoClose')
  @include('base.footer')

@endsection
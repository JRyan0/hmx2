@extends('base.index')
@include('base.navbar')
@section('main')

  @include('base.swiper', ['style' => 'swiperMain','slide1' => 'images\a.jpg','slide2' => 'images\a.jpg','slide3' => 'images\a.jpg'])
  @include('base.carrinhoClose')
  @include('base.footer')

@endsection
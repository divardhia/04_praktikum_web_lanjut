@extends('layouts.app')

@section('title')
    {{$title}}
@endsection

@section('statusProduct')
    {{$status}}
@endsection

@section('content')
     <!-- Page Content -->
     <div class="page-heading products-heading header-text">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="text-content">
                <h4>new arrivals</h4>
                <h2>sixteen products</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      
      <div class="products">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="filters">
                <ul>
                    <li class="active" data-filter="*">All Products</li>
                    <li data-filter=".des">Featured</li>
                    <li data-filter=".dev">Flash Deals</li>
                    <li data-filter=".gra">Last Minute</li>
                </ul>
              </div>
            </div>
            <div class="col-md-12">
              <div class="filters-content">
                  <div class="row grid">
                    @foreach ($products as $product)
                    <div class="col-lg-4 col-md-4 all {{$product->category}}">
                      <div class="product-item">
                        <a href="#"><img src={{$product->image}} alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>{{$product->title}}</h4></a>
                          <h6>${{$product->price}}</h6>
                          <p>{{$product->content}}</p>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                          <span>Reviews {{$product->totalReview}}</span>
                        </div>
                      </div>
                    </div>
                    @endforeach
                      
                  </div>
              </div>
            </div>
            <div class="col-md-12">
              <ul class="pages">
                <li><a href="/product?page=1">1</a></li>
                <li><a href="/product?page=2">2</a></li>
                <li><a href="/product?page=3">3</a></li>
                <li><a href="/product?page=4">4</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
@endsection
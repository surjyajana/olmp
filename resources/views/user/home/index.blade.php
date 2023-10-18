@extends('user.layouts.master.master')
@section('content')



        <div id="hero-area">
        <div class="overlay"></div>
        <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-12 col-lg-9 col-xs-12 text-center">
        <div class="contents">
        <h1 class="head-title">Welcome to The Largest <span class="year">Marketplace</span></h1>
        <p>Buy and sell everything from used cars to mobile phones and computers, or search for property, jobs and more</p>
        <div class="search-bar">
        <div class="search-inner">
        <form class="search-form">
        <div class="form-group">
        <input type="text" name="customword" class="form-control" placeholder="What are you looking for?">
        </div>
        <div class="form-group inputwithicon">
        <div class="select">
        <select>
        <option value="none">Locations</option>
        <option value="none">New York</option>
        <option value="none">California</option>
        <option value="none">Washington</option>
        <option value="none">Birmingham</option>
        <option value="none">Chicago</option>
        <option value="none">Phoenix</option>
        </select>
        </div>
        <i class="lni-target"></i>
        </div>
        <div class="form-group inputwithicon">
        <div class="select">
        <select>
        <option value="none">Select Catagory</option>
        <option value="none">Jobs</option>
        <option value="none">Electronics</option>
        <option value="none">Mobile</option>
        <option value="none">Training</option>
        <option value="none">Pets</option>
        <option value="none">Real Estate</option>
        <option value="none">Services</option>
        <option value="none">Training</option>
        <option value="none">Vehicles</option>
        </select>
        </div>
        <i class="lni-menu"></i>
        </div>
        <button class="btn btn-common" type="button"><i class="lni-search"></i> Search Now</button>
        </form>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>

<section class="featured section-padding">
<div class="container">
<div class="row">
<div class="col-12 text-center">
<div class="heading">
<h1 class="section-title">Latest Products</h1>
<h4 class="sub-title">Discover & connect with top-rated local businesses</h4>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
<div class="featured-box">
<figure>
<div class="homes-tag featured">Cameras</div>
<div class="homes-tag rent"><i class="lni-heart"></i> 202</div>
<span class="price-save">
$200
</span>
<a href="#"><img class="img-fluid" src="{{ URL::asset('assets/user') }}/img/featured/img-1.jpg" alt=""></a>
</figure>
<div class="content-wrapper">
<div class="feature-content">
<h4><a href="ads-details.html">Canon SX Powershot ...</a></h4>
<p class="listing-tagline">Club and shop for you</p>
<div class="meta-tag">
<div class="listing-review">
<span class="review-avg">4.5</span>
2 Ratings
</div>
<div class="user-name">
<a href="#"><i class="lni-user"></i> Jone</a>
</div>
<div class="listing-category">
<a href="#"><i class="lni-display"></i>Electronic </a>
</div>
</div>
</div>
<div class="listing-bottom clearfix">
<a href="#" class="float-left"><i class="lni-map-marker"></i> New York, US</a>
<a href="ads-details.html" class="float-right">View Details</a>
</div>
</div>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
<div class="featured-box">
<figure>
<div class="homes-tag featured">Laptop</div>
<div class="homes-tag rent"><i class="lni-heart"></i> 152</div>
<span class="price-save">
$1499
</span>
<a href="#"><img class="img-fluid" src="{{ URL::asset('assets/user') }}/img/featured/img-2.jpg" alt=""></a>
</figure>
<div class="content-wrapper">
<div class="feature-content">
<h4><a href="ads-details.html">Apple Macbook Pro ...</a></h4>
<p class="listing-tagline">Club and shop for you</p>
<div class="meta-tag">
<div class="listing-review">
<span class="review-avg">4.5</span>
2 Ratings
</div>
<div class="user-name">
<a href="#"><i class="lni-user"></i> Jessica</a>
</div>
<div class="listing-category">
<a href="#"><i class="lni-laptop"></i>Computers</a>
</div>
</div>
</div>
<div class="listing-bottom clearfix">
<a href="#" class="float-left"><i class="lni-map-marker"></i> California, US</a>
<a href="ads-details.html" class="float-right">View Details</a>
</div>
</div>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
<div class="featured-box">
<figure>
<div class="homes-tag featured">Cars</div>
<div class="homes-tag rent"><i class="lni-heart"></i> 155</div>
<span class="price-save">
$2000
</span>
<a href="#"><img class="img-fluid" src="{{ URL::asset('assets/user') }}/img/featured/img-3.jpg" alt=""></a>
</figure>
<div class="content-wrapper">
<div class="feature-content">
<h4><a href="ads-details.html">Mercedes Benz E200 ...</a></h4>
<p class="listing-tagline">Club and shop for you</p>
<div class="meta-tag">
<div class="listing-review">
<span class="review-avg">4.5</span>
3 Ratings
</div>
<div class="user-name">
<a href="#"><i class="lni-user"></i> Maria Barlow</a>
</div>
<div class="listing-category">
<a href="#"><i class="lni-car"></i>Vehicle </a>
</div>
</div>
</div>
<div class="listing-bottom clearfix">
<a href="#" class="float-left"><i class="lni-map-marker"></i> Washington, US</a>
<a href="ads-details.html" class="float-right">View Details</a>
</div>
</div>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
<div class="featured-box">
<figure>
<div class="homes-tag featured">Bags</div>
<div class="homes-tag rent"><i class="lni-heart"></i> 129</div>
<span class="price-save">
$30
</span>
<a href="#"><img class="img-fluid" src="{{ URL::asset('assets/user') }}/img/featured/img-4.jpg" alt=""></a>
</figure>
<div class="content-wrapper">
<div class="feature-content">
<h4><a href="ads-details.html">Brown Leather Bag ...</a></h4>
<p class="listing-tagline">Club and shop for you</p>
<div class="meta-tag">
<div class="listing-review">
<span class="review-avg">4.5</span>
5 Ratings
</div>
<div class="user-name">
<a href="#"><i class="lni-user"></i> Rossi Josh</a>
</div>
<div class="listing-category">
<a href="#"><i class="lni-leaf"></i>Others</a>
</div>
</div>
</div>
<div class="listing-bottom clearfix">
<a href="#" class="float-left"><i class="lni-map-marker"></i> Chicago, US</a>
<a href="ads-details.html" class="float-right">View Details</a>
</div>
</div>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
<div class="featured-box">
<figure>
<div class="homes-tag featured">Apple</div>
<div class="homes-tag rent"><i class="lni-heart"></i> 220</div>
<span class="price-save">
$700
</span>
<a href="#"><img class="img-fluid" src="{{ URL::asset('assets/user') }}/img/featured/img-5.jpg" alt=""></a>
</figure>
<div class="content-wrapper">
<div class="feature-content">
<h4><a href="ads-details.html">Iphonex 6 Plus Factor ...</a></h4>
<p class="listing-tagline">Club and shop for you</p>
<div class="meta-tag">
<div class="listing-review">
<span class="review-avg">4.5</span>
2 Ratings
</div>
<div class="user-name">
<a href="#"><i class="lni-user"></i> David Givens</a>
</div>
<div class="listing-category">
<a href="#"><i class="lni-phone"></i>Phone</a>
</div>
</div>
</div>
<div class="listing-bottom clearfix">
<a href="#" class="float-left"><i class="lni-map-marker"></i> California</a>
<a href="ads-details.html" class="float-right">View Details</a>
</div>
</div>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
<div class="featured-box">
<figure>
<div class="homes-tag featured">Furniture</div>
<div class="homes-tag rent"><i class="lni-heart"></i> 180</div>
<span class="price-save">
$1000
</span>
<a href="#"><img class="img-fluid" src="{{ URL::asset('assets/user') }}/img/featured/img-6.jpg" alt=""></a>
</figure>
<div class="content-wrapper">
<div class="feature-content">
<h4><a href="ads-details.html">Wooden Dining Tabl ...</a></h4>
<p class="listing-tagline">Club and shop for you</p>
<div class="meta-tag">
<div class="listing-review">
<span class="review-avg">4.5</span>
4 Ratings
</div>
<div class="user-name">
<a href="#"><i class="lni-user"></i> John Smith</a>
</div>
<div class="listing-category">
<a href="#"><i class="lni-home"></i>Home</a>
</div>
</div>
</div>
<div class="listing-bottom clearfix">
<a href="#" class="float-left"><i class="lni-map-marker"></i> New York, US</a>
<a href="ads-details.html" class="float-right">View Details</a>
</div>
 </div>
</div>
</div>
</div>
</div>
</section>


<section class="featured-lis section-padding">
<div class="container">
<div class="row">
<div class="col-12 text-center">
<div class="heading">
<h1 class="section-title">Featured Products</h1>
<h4 class="sub-title">Discover & connect with top-rated local businesses</h4>
</div>
</div>
<div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
<div id="new-products" class="owl-carousel owl-theme">
<div class="item">
<div class="product-item">
<div class="carousel-thumb">
<img class="img-fluid" src="{{ URL::asset('assets/user') }}/img/product/img1.jpg" alt="">
<div class="overlay">
<div>
<a class="btn btn-common" href="ads-details.html">View Details</a>
</div>
</div>
<div class="btn-product bg-sale">
<a href="#">Sale</a>
</div>
<span class="price">$999.00</span>
</div>
<div class="product-content-inner">
<div class="product-content">
<h3 class="product-title"><a href="ads-details.html">Macbook Pro 2020</a></h3>
<span>Electronic / Computers</span>
<div class="icon">
<span><i class="lni-bookmark"></i></span>
<span><i class="lni-heart"></i></span>
</div>
</div>
<div class="card-text clearfix">
<div class="float-left">
<span class="icon-wrap">
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star"></i>
</span>
<span class="count-review">
(12 Review)
</span>
</div>
<div class="float-right">
<a class="address" href="#"><i class="lni-map-marker"></i> New York</a>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="product-item">
<div class="carousel-thumb">
<img class="img-fluid" src="{{ URL::asset('assets/user') }}/img/product/img2.jpg" alt="">
<div class="overlay">
<div>
<a class="btn btn-common" href="ads-details.html">View Details</a>
</div>
</div>
<span class="price">$269.00</span>
</div>
<div class="product-content-inner">
<div class="product-content">
<h3 class="product-title"><a href="ads-details.html">Nikon Camera</a></h3>
<span>Electronic / Camera</span>
<div class="icon">
<span><i class="lni-bookmark"></i></span>
<span><i class="lni-heart"></i></span>
</div>
</div>
<div class="card-text clearfix">
<div class="float-left">
<span class="icon-wrap">
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
</span>
<span class="count-review">
(2 Review)
</span>
</div>
<div class="float-right">
<a class="address" href="#"><i class="lni-map-marker"></i> California</a>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="product-item">
<div class="carousel-thumb">
<img class="img-fluid" src="{{ URL::asset('assets/user') }}/img/product/img3.jpg" alt="">
<div class="overlay">
<div>
<a class="btn btn-common" href="ads-details.html">View Details</a>
</div>
</div>
<div class="btn-product bg-slod">
<a href="#">Sold</a>
</div>
<span class="price">$799.00</span>
</div>
<div class="product-content-inner">
<div class="product-content">
<h3 class="product-title"><a href="ads-details.html">iPhone X Refurbished</a></h3>
<span>Electronic / Phones</span>
<div class="icon">
<span><i class="lni-bookmark"></i></span>
<span><i class="lni-heart"></i></span>
</div>
</div>
<div class="card-text clearfix">
<div class="float-left">
<span class="icon-wrap">
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star"></i>
</span>
<span class="count-review">
(8 Review)
</span>
</div>
<div class="float-right">
<a class="address" href="#"><i class="lni-map-marker"></i> New York</a>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="product-item">
<div class="carousel-thumb">
<img class="img-fluid" src="{{ URL::asset('assets/user') }}/img/product/img4.jpg" alt="">
<div class="overlay">
<div>
<a class="btn btn-common" href="ads-details.html">View Details</a>
</div>
</div>
<span class="price">$99.00</span>
</div>
<div class="product-content-inner">
<div class="product-content">
<h3 class="product-title"><a href="ads-details.html">Brown Leather Bag</a></h3>
<span>Sports / Bag</span>
<div class="icon">
<span><i class="lni-bookmark"></i></span>
<span><i class="lni-heart"></i></span>
</div>
</div>
<div class="card-text clearfix">
<div class="float-left">
<span class="icon-wrap">
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
 <i class="lni-star"></i>
</span>
<span class="count-review">
(12 Review)
</span>
</div>
<div class="float-right">
<a class="address" href="#"><i class="lni-map-marker"></i> New York</a>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="product-item">
<div class="carousel-thumb">
<img class="img-fluid" src="{{ URL::asset('assets/user') }}/img/product/img5.jpg" alt="">
<div class="overlay">
<div>
<a class="btn btn-common" href="ads-details.html">View Details</a>
</div>
</div>
<span class="price">$99.00</span>
</div>
<div class="product-content-inner">
<div class="product-content">
<h3 class="product-title"><a href="ads-details.html">iMac Pro 2020</a></h3>
<span>Sports / Display</span>
<div class="icon">
<span><i class="lni-bookmark"></i></span>
<span><i class="lni-heart"></i></span>
</div>
</div>
<div class="card-text clearfix">
<div class="float-left">
<span class="icon-wrap">
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star"></i>
</span>
<span class="count-review">
(12 Review)
</span>
</div>
<div class="float-right">
<a class="address" href="#"><i class="lni-map-marker"></i> New York</a>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="product-item">
<div class="carousel-thumb">
<img class="img-fluid" src="{{ URL::asset('assets/user') }}/img/product/img6.jpg" alt="">
<div class="overlay">
<div>
<a class="btn btn-common" href="ads-details.html">View Details</a>
</div>
</div>
<div class="btn-product bg-sale">
<a href="#">Sale</a>
</div>
<span class="price">$99.00</span>
</div>
<div class="product-content-inner">
<div class="product-content">
<h3 class="product-title"><a href="ads-details.html">Baby Toy</a></h3>
<span>Sports / Baby Toys</span>
<div class="icon">
<span><i class="lni-bookmark"></i></span>
<span><i class="lni-heart"></i></span>
</div>
</div>
<div class="card-text clearfix">
<div class="float-left">
<span class="icon-wrap">
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star"></i>
</span>
<span class="count-review">
(12 Review)
</span>
</div>
<div class="float-right">
<a class="address" href="#"><i class="lni-map-marker"></i> New York</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section id="categories" class="section-padding">
    <div class="container">
    <div class="row">
    <div class="col-12 text-center">
    <div class="heading">
    <h1 class="section-title">Products Categories</h1>
    <h4 class="sub-title">Find the best places</h4>
    </div>
    </div>
    <div class="col-lg-2 col-md-3 col-xs-12">
    <a href="category.html">
    <div class="category-icon-item lis-bg1">
    <div class="icon-box">
    <div class="icon">
    <i class="lni-car"></i>
    </div>
    <h4>Vehicle</h4>
    <p class="categories-listing">11 Listing</p>
    </div>
    </div>
    </a>
    </div>
    <div class="col-lg-2 col-md-3 col-xs-12">
    <a href="category.html">
    <div class="category-icon-item lis-bg2">
    <div class="icon-box">
    <div class="icon">
    <i class="lni-display"></i>
    </div>
    <h4>Electronics</h4>
    <p class="categories-listing">12 Listing</p>
    </div>
    </div>
    </a>
    </div>
    <div class="col-lg-2 col-md-3 col-xs-12">
    <a href="category.html">
    <div class="category-icon-item lis-bg3">
    <div class="icon-box">
    <div class="icon">
    <i class="lni-mobile"></i>
    </div>
    <h4>Mobiles</h4>
    <p class="categories-listing">13 Listing</p>
    </div>
    </div>
    </a>
    </div>
    <div class="col-lg-2 col-md-3 col-xs-12">
    <a href="category.html">
    <div class="category-icon-item lis-bg4">
    <div class="icon-box">
    <div class="icon">
    <i class="lni-leaf"></i>
    </div>
    <h4>Furnitures</h4>
    <p class="categories-listing">14 Listing</p>
    </div>
    </div>
    </a>
    </div>
    <div class="col-lg-2 col-md-3 col-xs-12">
    <a href="category.html">
    <div class="category-icon-item lis-bg5">
    <div class="icon-box">
    <div class="icon">
    <i class="lni-briefcase"></i>
    </div>
    <h4>Jobs</h4>
    <p class="categories-listing">15 Listing</p>
    </div>
    </div>
    </a>
    </div>
    <div class="col-lg-2 col-md-3 col-xs-12">
    <a href="category.html">
    <div class="category-icon-item lis-bg6">
    <div class="icon-box">
    <div class="icon">
    <i class="lni-home"></i>
    </div>
    <h4>Real Estate</h4>
    <p class="categories-listing">16 Listing</p>
    </div>
    </div>
    </a>
    </div>
    <div class="col-lg-2 col-md-3 col-xs-12">
    <a href="category.html">
    <div class="category-icon-item lis-bg7">
    <div class="icon-box">
    <div class="icon">
    <i class="lni-graduation"></i>
    </div>
    <h4>Education</h4>
    <p class="categories-listing">17 Listing</p>
    </div>
    </div>
    </a>
    </div>
    <div class="col-lg-2 col-md-3 col-xs-12">
    <a href="category.html">
    <div class="category-icon-item lis-bg8">
    <div class="icon-box">
    <div class="icon">
    <i class="lni-laptop"></i>
    </div>
    <h4>Laptop</h4>
    <p class="categories-listing">18 Listing</p>
    </div>
    </div>
    </a>
    </div>
    <div class="col-lg-2 col-md-3 col-xs-12">
    <a href="category.html">
    <div class="category-icon-item lis-bg9">
    <div class="icon-box">
    <div class="icon">
    <i class="lni-car"></i>
    </div>
    <h4>Automobiles</h4>
    <p class="categories-listing">18 Listing</p>
    </div>
    </div>
    </a>
    </div>
    <div class="col-lg-2 col-md-3 col-xs-12">
    <a href="category.html">
    <div class="category-icon-item lis-bg10">
    <div class="icon-box">
    <div class="icon">
    <i class="lni-camera"></i>
    </div>
    <h4>Cameras</h4>
    <p class="categories-listing">18 Listing</p>
    </div>
    </div>
    </a>
    </div>
    <div class="col-lg-2 col-md-3 col-xs-12">
    <a href="category.html">
    <div class="category-icon-item lis-bg11">
    <div class="icon-box">
    <div class="icon">
    <i class="lni-heart"></i>
    </div>
    <h4>Matrimony</h4>
    <p class="categories-listing">18 Listing</p>
    </div>
    </div>
    </a>
    </div>
    <div class="col-lg-2 col-md-3 col-xs-12">
    <a href="category.html">
    <div class="category-icon-item lis-bg12">
    <div class="icon-box">
    <div class="icon">
    <i class="lni-leaf"></i>
    </div>
    <h4>Services</h4>
    <p class="categories-listing">18 Listing</p>
    </div>
    </div>
    </a>
    </div>
    </div>
    </div>
    </section>
<!-- <section class="works section-padding">
<div class="container">
<div class="row">
<div class="col-12 text-center">
<div class="heading">
<h1 class="section-title">How It Works?</h1>
<h4 class="sub-title">Discover & connect with top-rated local businesses</h4>
</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<div class="works-item">
<div class="icon-box">
<i class="lni-users"></i>
</div>
<p>Create an Account</p>
</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<div class="works-item">
<div class="icon-box">
<i class="lni-bookmark-alt"></i>
</div>
<p>Post Free Ad</p>
</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<div class="works-item">
<div class="icon-box">
<i class="lni-thumbs-up"></i>
</div>
<p>Deal Done</p>
</div>
</div>
<hr class="works-line">
</div>
</div>
</section>


<section class="services bg-light section-padding">
<div class="container">
<div class="row">
<div class="col-12 text-center">
<div class="heading">
<h1 class="section-title">Key Features</h1>
<h4 class="sub-title">Find the best places</h4>
</div>
</div>

<div class="col-md-6 col-lg-4 col-xs-12">
<div class="services-item wow fadeInRight" data-wow-delay="0.2s">
<div class="icon">
<i class="lni-leaf"></i>
</div>
<div class="services-content">
<h3><a href="#">Elegant Design</a></h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis.</p>
</div>
</div>
</div>

<div class="col-md-6 col-lg-4 col-xs-12">
<div class="services-item wow fadeInRight" data-wow-delay="0.4s">
<div class="icon">
<i class="lni-display"></i>
</div>
<div class="services-content">
<h3><a href="#">Responsive Design</a></h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis.</p>
</div>
</div>
</div>

<div class="col-md-6 col-lg-4 col-xs-12">
<div class="services-item wow fadeInRight" data-wow-delay="0.6s">
<div class="icon">
<i class="lni-color-pallet"></i>
</div>
<div class="services-content">
<h3><a href="#">Clean UI</a></h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis.</p>
</div>
</div>
</div>

<div class="col-md-6 col-lg-4 col-xs-12">
<div class="services-item wow fadeInRight" data-wow-delay="0.8s">
<div class="icon">
<i class="lni-emoji-smile"></i>
</div>
<div class="services-content">
<h3><a href="#">UX Friendly</a></h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis.</p>
</div>
</div>
</div>

<div class="col-md-6 col-lg-4 col-xs-12">
<div class="services-item wow fadeInRight" data-wow-delay="1s">
<div class="icon">
<i class="lni-pencil-alt"></i>
</div>
<div class="services-content">
<h3><a href="#">Easily Customizable</a></h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis.</p>
</div>
</div>
</div>

<div class="col-md-6 col-lg-4 col-xs-12">
<div class="services-item wow fadeInRight" data-wow-delay="1.2s">
<div class="icon">
<i class="lni-headphone-alt"></i>
</div>
<div class="services-content">
<h3><a href="#">Security Support</a></h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis.</p>
</div>
</div>
</div>
</div>
</div>
</section>


<section id="pricing-table" class="section-padding">
<div class="container">
<div class="row">
<div class="col-12 text-center">
<div class="heading">
<h1 class="section-title">Pricing Plan</h1>
<h4 class="sub-title">Discover & connect with top-rated local businesses</h4>
</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12">
<div class="table">
<div class="icon">
<i class="lni-gift"></i>
</div>
<div class="pricing-header">
<p class="price-value">$29</p>
</div>
<div class="title">
<h3>Basic</h3>
</div>
<ul class="description">
<li>Free ad posting</li>
<li>No Featured ads availability</li>
<li>Access to limited features</li>
<li>For 30 days</li>
<li>100% Secure!</li>
</ul>
<button class="btn btn-common">Purchase</button>
</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12">
<div class="table" id="active-tb">
<div class="icon">
<i class="lni-leaf"></i>
</div>
<div class="pricing-header">
<p class="price-value">$49</p>
</div>
<div class="title">
<h3>Standard</h3>
</div>
<ul class="description">
<li>Free ad posting</li>
<li>10 Featured ads availability</li>
<li>Access to unlimited features</li>
<li>For 30 days</li>
<li>100% Secure!</li>
</ul>
<button class="btn btn-common">Purchase</button>
</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12">
<div class="table">
<div class="icon">
<i class="lni-layers"></i>
</div>
<div class="pricing-header">
<p class="price-value">$69</p>
</div>
<div class="title">
<h3>Premium</h3>
</div>
<ul class="description">
<li>Free ad posting</li>
<li>100 Featured ads availability</li>
<li>Access to unlimited features</li>
<li>For 30 days</li>
<li>100% Secure!</li>
</ul>
<button class="btn btn-common">Purchase</button>
</div>
</div>
</div>
</div>
</section>


<section class="testimonial section-padding">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div id="testimonials" class="owl-carousel">
<div class="item">
<div class="img-thumb">
<img src="{{ URL::asset('assets/user') }}/img/testimonial/img1.png" alt="">
</div>
<div class="testimonial-item">
<div class="content">
<p class="description">Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa, Eiusmod tempor incidiunt labore velit dolore magna.</p>
<div class="info-text">
<h2><a href="#">Josh Rossi</a></h2>
<h4><a href="#">CEO of Fiverr</a></h4>
</div>
</div>
</div>
</div>
<div class="item">
<div class="item">
<div class="img-thumb">
<img src="{{ URL::asset('assets/user') }}/img/testimonial/img2.png" alt="">
</div>
<div class="testimonial-item">
<div class="content">
<p class="description">Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa, Eiusmod tempor incidiunt labore velit dolore magna.</p>
<div class="info-text">
<h2><a href="#">Jessica</a></h2>
<h4><a href="#">CEO of Dropbox</a></h4>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="item">
<div class="img-thumb">
<img src="{{ URL::asset('assets/user') }}/img/testimonial/img3.png" alt="">
</div>
<div class="testimonial-item">
<div class="content">
<p class="description">Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa, Eiusmod tempor incidiunt labore velit dolore magna.</p>
<div class="info-text">
<h2><a href="#">Johnny Zeigler</a></h2>
<h4><a href="#">CEO of Fiverr</a></h4>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="item">
<div class="img-thumb">
<img src="{{ URL::asset('assets/user') }}/img/testimonial/img4.png" alt="">
</div>
<div class="testimonial-item">
<div class="content">
<p class="description">Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa, Eiusmod tempor incidiunt labore velit dolore magna.</p>
<div class="info-text">
<h2><a href="#">Josh Rossi</a></h2>
<h4><a href="#">CEO of Fiverr</a></h4>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="item">
<div class="img-thumb">
<img src="{{ URL::asset('assets/user') }}/img/testimonial/img5.png" alt="">
</div>
<div class="testimonial-item">
<div class="content">
<p class="description">Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa, Eiusmod tempor incidiunt labore velit dolore magna.</p>
<div class="info-text">
<h2><a href="#">Priyanka</a></h2>
<h4><a href="#">CEO of Dropbox</a></h4>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section id="blog" class="section-padding">

<div class="container">
<div class="row">
<div class="col-12 text-center">
<div class="heading">
<h1 class="section-title">Blog Post</h1>
<h4 class="sub-title">Discover & connect with top-rated local businesses</h4>
</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12 blog-item">

<div class="blog-item-wrapper">
<div class="blog-item-img">
<a href="single-post.html">
<img src="{{ URL::asset('assets/user') }}/img/blog/img-1.jpg" alt="">
</a>
</div>
<div class="blog-item-text">
<div class="meta-tags">
<span class="user float-left"><a href="#"><i class="lni-user"></i> Posted By Admin</a></span>
<span class="date float-right"><i class="lni-calendar"></i> 24 May, 2020</span>
</div>
<h3>
<a href="single-post.html">Recently Launching Our Iphone X</a>
</h3>
<p>
Reprehenderit nemo quod tempore doloribus ratione distinctio quis quidem vitae sunt reiciendis, molestias omnis soluta.
</p>
<a href="single-post.html" class="btn btn-common">Read More</a>
</div>
</div>

</div>
<div class="col-lg-4 col-md-6 col-xs-12 blog-item">

<div class="blog-item-wrapper">
<div class="blog-item-img">
<a href="single-post.html">
<img src="{{ URL::asset('assets/user') }}/img/blog/img-2.jpg" alt="">
</a>
</div>
<div class="blog-item-text">
<div class="meta-tags">
<span class="user float-left"><a href="#"><i class="lni-user"></i> Posted By Admin</a></span>
<span class="date float-right"><i class="lni-calendar"></i> 24 May, 2020</span>
</div>
<h3>
<a href="single-post.html">How to get more ad views</a>
</h3>
<p>
Reprehenderit nemo quod tempore doloribus ratione distinctio quis quidem vitae sunt reiciendis, molestias omnis soluta.
</p>
<a href="single-post.html" class="btn btn-common">Read More</a>
</div>
</div>

</div>
<div class="col-lg-4 col-md-6 col-xs-12 blog-item">

<div class="blog-item-wrapper">
<div class="blog-item-img">
<a href="single-post.html">
<img src="{{ URL::asset('assets/user') }}/img/blog/img-3.jpg" alt="">
</a>
</div>
<div class="blog-item-text">
<div class="meta-tags">
<span class="user float-left"><a href="#"><i class="lni-user"></i> Posted By Admin</a></span>
<span class="date float-right"><i class="lni-calendar"></i> 24 May, 2020</span>
</div>
<h3>
<a href="single-post.html">Writing a better product description</a>
</h3>
<p>
Reprehenderit nemo quod tempore doloribus ratione distinctio quis quidem vitae sunt reiciendis, molestias omnis soluta.
</p>
<a href="single-post.html" class="btn btn-common">Read More</a>
</div>
</div>

</div>
</div>
</div>
</section>


<section class="subscribes section-padding">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="subscribes-inner">
<div class="icon">
<i class="lni-pointer"></i>
</div>
<div class="sub-text">
<h3>Subscribe to Newsletter</h3>
<p>and receive new ads in inbox</p>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<form>
<div class="subscribe">
<input class="form-control" name="EMAIL" placeholder="Enter your Email" required="" type="email">
<button class="btn btn-common" type="submit">Subscribe</button>
</div>
</form>
</div>
</div>
</div>
</section> -->


@endsection 
<!-- <script src="{{ URL::asset('assets/user') }}/js/jquery.min.js"></script> -->
<script type="text/javascript">
    // function saveContactUs() 
    // {

    //   var API_BASE_URL= '<?php echo url('') ?>';
      
    //     var contact_name  = $("#contact_name").val();
    //     if(!contact_name)
    //     {
    //       alert("Please enter name");
    //       return false;
    //     }

    //     var email  = $("#email").val().trim();
    //     if(!email)
    //     {
    //       alert("Please enter email");
    //       return false;
    //     }
    //     var subject  = $("#subject").val().trim();
    //     if(!subject)
    //     {
    //       alert("Please enter subject");
    //       return false;
    //     }
    //     var massage  = $("#message").val().trim();
    //     if(!massage)
    //     {
    //       alert("Please enter message");
    //       return false;
    //     }
  
    //         $.ajax({
    //             url: API_BASE_URL+'/save-contact',
    //             data: {"_token": "{{ csrf_token() }}", 'contact_name': contact_name,'email':email,'massage':massage,'subject':subject},
    //             type: "POST",
    //             success: function(response)
    //             {
                       
    //                   if(response=='1'){
    //                     $('#request_manage').addClass('alert alert-success');
    //                     $('#request_manage').html('Message send successfully');
    //                   }

                    
    //                    $("#email").val('');
    //                    $("#contact_name").val('');
    //                    $("#message").val('');
    //                    $("#subject").val('');
                       
                   

    //             },
    //             error: function (error) {
                    
    //               }
    //         });
       

        
    // }
    // get_all_team();
    // function get_all_team() 
    // {

    //   var API_BASE_URL= '<?php echo url('') ?>';
   
    //         $.ajax({
    //             url: API_BASE_URL+'/get-all-team',
    //             data: {"_token": "{{ csrf_token() }}"},
    //             type: "GET",
    //             success: function(response)
    //             {
                       
                     
                       
    //                     $('#team_div').html(response);


    //             },
    //             error: function (error) {
                    
    //               }
    //         });
       

        
    // }

    // get_all_testimonials();
    // function get_all_testimonials() 
    // {

    //   var API_BASE_URL= '<?php echo url('') ?>';
   
    //         $.ajax({
    //             url: API_BASE_URL+'/get-all-testimonial',
    //             data: {"_token": "{{ csrf_token() }}"},
    //             type: "GET",
    //             success: function(response)
    //             {
                       
                     
                       
    //                     $('#testimonials_div').html(response);


    //             },
    //             error: function (error) {
                    
    //               }
    //         });
       

        
    // }
    // get_abouts();
    // function get_abouts() 
    // {

    //   var API_BASE_URL= '<?php echo url('') ?>';
   
    //         $.ajax({
    //             url: API_BASE_URL+'/get-all-abouts',
    //             data: {"_token": "{{ csrf_token() }}"},
    //             type: "GET",
    //             success: function(response)
    //             {
                       
                     
                       
    //                     $('#about_div').html(response);


    //             },
    //             error: function (error) {
                    
    //               }
    //         });
       

        
    // }
</script>

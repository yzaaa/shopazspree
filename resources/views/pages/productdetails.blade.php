@extends('pages.index')

@section('embeddedcss')
@endsection

@section('content')
<div id="wrap" class="boxed ">
    <div class="grey-bg"> <!-- Grey BG  -->	
<!-- PAGE TITLE -->
<div class="page-title-cont page-title-small grey-light-bg">
    <div class="relative container align-left">
        <div class="row">

            <div class="col-md-8">
                <h1 class="page-title">{{ $data['products']->productName }}</h1>
                {{-- <h1 class="page-title">Product Name</h1> --}}
            </div>

            <div class="col-md-4">
               
            </div>

        </div>
    </div>
</div>

<!-- CONTENT -->
<div class="page-section p-140-cont">
    <div class="container">
        <div class="row">

            <!-- ITEM PHOTO -->
            <div class="col-md-4 col-sm-12 mb-50">

                <div class="post-prev-img popup-gallery">
                    <a href="/HTML/images/shop/items/1.jpg"><img src="/HTML/images/shop/items/1.jpg" alt="img"></a>
                </div>
                {{-- <div class="sale-label-cont">
                    <span class="sale-label label-danger bg-red">SALE</span>
                </div> --}}

                <div class="row">
                    <div class="popup-gallery">

                        <div class="col-xs-4 post-prev-img">
                            <a href="/HTML/images/shop/items/1-1.jpg"><img src="/HTML/images/shop/items/1-1-box.jpg" alt="img"></a>
                        </div>

                        <div class="col-xs-4 post-prev-img">
                            <a href="/HTML/images/shop/items/1-2.jpg"><img src="/HTML/images/shop/items/1-2-box.jpg" alt="img"></a>
                        </div>

                        <div class="col-xs-4 post-prev-img">
                            <a href="/HTML/images/shop/items/1-3.jpg"><img src="/HTML/images/shop/items/1-3-box.jpg" alt="img"></a>
                        </div>

                    </div>
                </div>

            </div>

            <!-- CONTENT -->
            <div class="col-md-7 col-sm-12 col-md-offset-1 mb-50">

                <h3 class="mt-0 mb-30">{{ $data['products']->productName }}</h3>
                {{-- <h3 class="mt-0 mb-30">Product Name</h3> --}}


                <hr class="mt-0 mb-30">
                <div class="row">

                    <div class="col-xs-6  mt-0 mb-30">
                        {{-- <del>$130.00</del> --}}
                        <strong class="item-price">&#8369; {{ $data['products']->productPrice }}</strong>
                        {{-- <strong class="item-price">productPrice</strong> --}}
                    </div>

                    <div class="col-xs-6 text-right">
                        <span class="font-black"><i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i></span>
                        <small><span class="slash-divider">/</span> 21 <span class="display-none-767">reviews</span>
                        </small>
                    </div>

                </div>

                <div class="font-14 lh-20 mb-30">
                    <div>Brand: <a class="dark, bold">{{ $data['products']->productCompany}}</a></div>
                    <div>Category: <a class="a-dark" href="#">{{ $data['products']->categoryName}}</a>
                        <span class="slash-divider">></span> <a class="a-dark" href="#"> {{ $data['products']->subcategory}}</a></div>
                    {{-- <div>Tags: <a class="a-dark" href="#">WOMEN'S SHOES</a>, <a class="a-dark" href="#">blue shirt</a>,
                        <a class="a-dark" href="#">men</a></div>
                    <div>SKU: 8084</div> --}}
                </div>

                <hr class="mt-0 mb-30">

                <div class="mb-30">
                    {{ $data['products']->productDescription }}
                  {{-- Product Description --}}
                </div>

                <hr class="mt-0 mb-30">

                <div class="row">
                    <div class="col-sm-6 mb-30">
                        <form method="post" action="#" class="form">
                            <select class="select-md input-border w-100">
                                <option>Select size</option>
                                <option>XXL</option>
                                <option>XL</option>
                                <option>L</option>
                                <option>M</option>
                                <option>S</option>
                            </select>
                        </form>
                    </div>

                    <div class="col-sm-6 mb-30">
                        <form method="post" action="#" class="form">
                            <select class="select-md input-border w-100">
                                <option>Select color</option>
                                <option>Black</option>
                                <option>Blue</option>
                                <option>White</option>
                            </select>
                        </form>
                    </div>
                </div>

                <hr class="mt-0 mb-30">

                <!-- ADD TO CART -->
                <div class="row mb-30">
                    {{-- <form method="post" action="#" class="form"> --}}
                        <form>
                        <div class="col-xs-4 col-sm-2 col-md-2 ">
                            <input type="number" class="input-border" min="1" max="100" value="1" name="quantity" id="quantity">
                        </div>
                        <div class="col-xs-8 col-sm-10 col-md-6">
                            <div class="post-prev-more-cont clearfix">
                                <div class="shop-add-btn-cont">
                                    <a class="button medium gray shop-add-btn" href="/mycart/">ADD TO CART</a>
                                </div>
                                <div class="shop-sub-btn-cont">
                                    <a href="#" class="post-prev-count"><span aria-hidden="true"
                                            class="icon_heart_alt"></span></a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


            </div>

        </div>
    </div>

    <hr class="mt-0 mb-80">

</div>
    </div>
</div>
@stop

<script type="text/javascript">

//     var qty = document.getElementById('qty');
  
//   // Listen for input event on numInput.
//   qty.onkeydown = function(e) {
//       if(!((e.keyCode > 95 && e.keyCode < 106)
//         || (e.keyCode > 47 && e.keyCode < 58) 
//         || e.keyCode == 8)) {
//           return false;
//       }
//   }

//   var Inputqty = document.getElementById("qty")

//   Inputqty.addEventListener("keydown", function(e) {
//   // prevent: "e", "=", ",", "-", "."
//   if ([69, 187, 188, 189, 190].includes(e.keyCode)) {
//     e.preventDefault();
//   }
// })

    </script>

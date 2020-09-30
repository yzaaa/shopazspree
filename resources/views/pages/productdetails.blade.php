@extends('pages.index')

@section('embeddedcss')
@endsection

@section('content')
<div id="wrap" class="boxed ">
    <div class="grey-bg">
        <!-- Grey BG  -->
        <!-- PAGE TITLE -->
        <div class="page-title-cont page-title-small grey-light-bg">
            <div class="relative container align-left">
                <div class="row">

                    <div class="col-md-8">
                        <h1 class="page-title">{{ $data['products']->product_name }}</h1>
                        {{-- <h1 class="page-title">Product Name</h1>
                        --}}
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
                    <div class="">
                    <div class="row row-error">
                        <div class="col-md-12">
                            <div class="alert alert-danger nobottommargin">
                                <span aria-hidden="true" class="alert-icon icon_blocked"></span>
                                <span class="error_msg"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row div_success">
                        <div class="col-md-12" style="align-content: center;">
                            <div class="row row-success">
                                <div class="col-md-12">
                                    <div class="alert alert-success">
                                        <span aria-hidden="true" class="alert-icon icon_like"></span>
                                        <span class="success_msg"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM PHOTO -->
                    <div class="col-md-4 col-sm-12 mb-50">

                        <div class="post-prev-img popup-gallery">
                            <a href="/HTML/images/shop/items/1.jpg"><img src="/HTML/images/shop/items/1.jpg"
                                    alt="img"></a>
                        </div>
                        {{-- <div class="sale-label-cont">
                            <span class="sale-label label-danger bg-red">SALE</span>
                        </div> --}}

                        <div class="row">
                            <div class="popup-gallery">

                                <div class="col-xs-4 post-prev-img">
                                    <a href="/HTML/images/shop/items/1-1.jpg"><img
                                            src="/HTML/images/shop/items/1-1-box.jpg" alt="img"></a>
                                </div>

                                <div class="col-xs-4 post-prev-img">
                                    <a href="/HTML/images/shop/items/1-2.jpg"><img
                                            src="/HTML/images/shop/items/1-2-box.jpg" alt="img"></a>
                                </div>

                                <div class="col-xs-4 post-prev-img">
                                    <a href="/HTML/images/shop/items/1-3.jpg"><img
                                            src="/HTML/images/shop/items/1-3-box.jpg" alt="img"></a>
                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- CONTENT -->
                    <div class="col-md-7 col-sm-12 col-md-offset-1 mb-50">
                        <form id="add-form" autocomplete="off">

                            {{-- <textarea class="mt-0 mb-30">{{ $data['products']->product_name }}</textarea> --}}
                            
                            <h3><label class="mt-0 mb-30">{{ $data['products']->product_name }}</label></h3>
                            {{-- <h3 class="mt-0 mb-30">Product Name</h3>
                            --}}


                            <hr class="mt-0 mb-30">
                            <div class="row">

                                <div class="col-xs-6  mt-0 mb-30">
                                    {{-- <del>$130.00</del>
                                    --}}
                                    <strong><label class="item-price">&#8369; {{ $data['products']->cost_amt }}</label></strong>
                                    {{-- <strong class="item-price">productPrice</strong>
                                    --}}
                                </div>

                                <div class="col-xs-6 text-right">
                                    <span class="font-black"><i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i></span>
                                    <small><span class="slash-divider">/</span> 21 <span
                                            class="display-none-767">reviews</span>
                                    </small>
                                </div>

                            </div>

                            <div class="font-14 lh-20 mb-30">
                                <div>Brand: <label style="color:black; bold">{{ $data['products']->product_details }}</label></div>
                                <div>Category: <label style="color:black">{{ $data['products']->cat_name }}</label>
                                    <span class="slash-divider">></span> <label style="color:black">
                                        {{ $data['products']->subcat_name }}</label></div>
                                {{-- <div>Tags: <a class="a-dark" href="#">WOMEN'S
                                        SHOES</a>, <a class="a-dark" href="#">blue shirt</a>,
                                    <a class="a-dark" href="#">men</a></div>
                                <div>SKU: 8084</div> --}}
                            </div>

                            <hr class="mt-0 mb-30">

                            <div class="mb-30">
                                <label>{{ $data['products']->product_desc }}</label>
                                {{-- Product Description --}}
                            </div>

                            <hr class="mt-0 mb-30">

                            <div class="row">
                                <div class="col-sm-6 mb-30">
                                    <form method="post" action="#" class="form">
                                        <select class="select-md input-border w-100" name="variant_1" data-msg-required="Please enter Size" required>
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
                                        <select class="select-md input-border w-100" name="variant_2" data-msg-required="Please enter Color" required>
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
                                {{-- <form method="post" action="#" class="form">
                                    --}}
                                    <form>
                                        <div class="col-xs-4 col-sm-2 col-md-2 ">
                                            <input type="number" data-msg-required="Please enter Quantity"
                                             min="1" max="4" class="input-border"  name="qty" id="qty" required>
{{-- 
                                            <input type="number" data-msg-required="Please enter Quantity"
                                            class="input-border" min="1" max="100" value="1"
                                                name="qty" id="qty" required> --}}
                                        </div>
                                        <div class="col-xs-8 col-sm-10 col-md-6">
                                            <div class="post-prev-more-cont clearfix">
                                                <div class="shop-add-btn-cont">
                                                    <button type="button" id="btnadd" class="button medium gray"
                                                        style="width: 100%;">
                                                        <span class=""></span> <label class="btnadd_label">ADD TO CART</label>
                                                    </button>
                                                    {{-- <a
                                                        class="button medium gray shop-add-btn"
                                                        href="/mycart/{{ $data['products']->inmr_hash }}">ADD TO
                                                        CART</a> --}}
                                                </div>
                                                {{-- <div class="shop-sub-btn-cont">
                                                    <a href="#" class="post-prev-count"><span aria-hidden="true"
                                                            class="icon_heart_alt"></span></a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </form>
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


@section('embeddedjs')
<script type="text/javascript">
    var initializeControls = function() {
        $('.row-error').hide();
        $('.row-success').hide();
        $('.div_success').hide();
    }();

    var validateRequiredFields = function(f) {
        var stat = true;

        $('.row-error').hide();
        $('div.form-group').removeClass('has-error');
        $('div.fg-line').removeClass('has-error');
        $('input[required],textarea[required],select[required]', f).each(function() {

            if ($(this).is('select')) {
                if ($(this).val() == 0 || $(this).val() == null) {
                    $('.error_msg').html($(this).data('msg-required'));
                    $('.row-error').fadeIn(400);
                    $(this).focus();
                    stat = false;
                    return false;
                }
            } else {
                if ($(this).val() == "") {
                    $('.error_msg').html($(this).data('msg-required'));
                    $('.row-error').fadeIn(400);
                    $(this).closest('.fg-line').addClass('has-error');
                    $(this).focus();
                    stat = false;
                    return false;
                }
            }

        });

        return stat;
    };

    var AddCart = (function() {
        var _data = $('#add-form').serializeArray();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        return $.ajax({
            "dataType": "json",
            "type": "POST",
            "url": "{{ url('/cart/create') }}",
            "data": _data
        });
    });

    $('#btnadd').click(function() {
        if (validateRequiredFields($('#add-form'))) {
            $(this).toggleClass('disabled');
            $(this).find('span').toggleClass('fa fa-spinner fa-spin');
            $('.btnadd_label').html('ADDING TO CART');

            AddCart().done(function(response) {

                if (response.stat == "success") {
                    $('.div_success').show();
                    $('.div_sign_up').hide();
                    $('.success_msg').html(response.msg);
                    $('.row-success').fadeIn(400);
                    setTimeout(function() {
                        window.location.href = "/";
                    },1000);
                }
            })
            .always(function() {
                $(this).toggleClass('disabled');
                $(this).find('span').toggleClass('fa fa-spinner fa-spin');
            });
        }

    });

    $('input').keypress(function(evt) {

        if (evt.keyCode == 13) {
            $('#btnadd').click();
        }

    });


    
</script>
@endsection


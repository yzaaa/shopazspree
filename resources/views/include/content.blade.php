<!-- CONTENT -->
<div class="page-section p-140-cont">
    <div class="container">
<div class="row">

<!-- CONTENT -->
<div class="col-sm-8">
<div class="clearfix mb-70">
  <div class="left font-12">
   
  </div>
  
  <div class="right">
      <form method="post" action="#" class="form">
          <select class="select-md">
              <option>Sort by</option>
              <option>Price: low to high</option>
              <option>Price: high to low</option>
          </select>
      </form>
  </div>
</div>

<div class="row">

  <!-- SHOP Item -->
  <?php foreach ($data['content'] as $products): ?>
  <div class="col-md-4 col-lg-4 pb-80" >
      
    <div class="post-prev-img">
      <a href="/productdetails/{{$products->id}}"><img src="{{$products->productImage1}}" alt="img"></a>
      {{-- <a href="/productdetails/{{$products->id}}"><img src="{{ config('global.backend_site') }}{{ $data['content']->productImage1}}" alt="img"></a> --}}
      
    </div>
    {{-- <div class="sale-label-cont">
      <span class="sale-label label-danger bg-red">SALE</span>
    </div>   --}}
    <div class="post-prev-title mb-5">
      <h3><a class="font-norm a-inv" href="/productdetails/{{$products->id}}">{{$products->productCompany}}</a></h3>
    </div>
      
    <div class="shop-price-cont">
      {{-- <del>$130.00</del>&nbsp; --}}
      <strong>&#8369; {{$products->productPrice}}</strong>
    </div>
      
    <div class="post-prev-more-cont clearfix">
      <div class="shop-add-btn-cont">
        <a class="button medium gray-light shop-add-btn" href="/mycart/{{$products->id}}">ADD TO CART</a>
      </div>
      <div class="shop-sub-btn-cont" >
        <a href="#" class="post-prev-count"><span aria-hidden="true" class="icon_heart_alt"></span></a>
        <a href="#" class="post-prev-count dropdown-toggle" data-toggle="dropdown" aria-expanded="false" >
        <span aria-hidden="true" class="social_share"></span>
        </a>
        <ul class="social-menu dropdown-menu dropdown-menu-right" role="menu">
          <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a>
          </li>
          <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
          <li><a href="#"><span aria-hidden="true" class="social_dribbble"></span></a></li>
        </ul>
      </div>
    </div>
  
  </div>
  <?php endforeach; ?>                          
</div>
                
<!-- PAGINATION -->
<div class="mt-0">
  <nav class="blog-pag">
    {{ $data['content']->links() }}
  </nav> 
</div>

</div>

<!-- SIDEBAR -->
<div class="col-sm-4 col-md-3 col-md-offset-1">
                
  <!-- SEARCH -->
  <div class="widget">
    <form class="form-search widget-search-form" action="page-search-results.html" method="get">
      <input type="text" name="q" class="input-search-widget" placeholder="Search">
      <button class="" type="submit" title="Start Search">
        <span aria-hidden="true" class="icon_search"></span>
      </button>
    </form>
  </div>
  
  {{-- <!-- WIDGET -->
  <div class="widget">
    <h5 class="widget-title">Categories</h5>
    <div class="widget-body">
      <ul class="clearlist widget-menu">
        @foreach ($data as $category)
        <li>
          <li><a href="/category/{{$category->id}}">{{$category->categoryName}}</a> </li>
        </li>
        @endforeach
      </ul>
    </div>
  </div> --}}

  <div class="widget">
    <h5 class="widget-title">Categories</h5>
    <div class="widget-body">
      <ul class="clearlist widget-posts">
      <?php foreach ($data['categories'] as $category): ?>
        <li class="parent clearfix">
          <div class="widget-posts-descr">
          <a href="/categories/{{$category->id}}">{{$category->categoryName}}</a>
          <ul class="sub">
            {{-- @foreach($data['sub'] as $subcat )
            <li><a href="/#/{{$subcat->subcat_id}}">{{$subcat->subcategory}}</a></li>
            @endforeach --}}
            <li><a href="/publications">SEE ALL</a> </li>
          </ul>
          </div>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
  
  <!-- WIDGET -->
  <div class="widget">
    
    <h5 class="widget-title">Popular Items</h5>
    
    <div class="widget-body">
      <ul class="clearlist widget-posts">
        <li class="clearfix">
          <a href=""><img src="images/shop/recent/1.jpg" alt="" class="widget-posts-img"></a>
          <div class="widget-posts-descr">
            <a href="#" title="">WOMEN'S SHOES</a>
            <div class="lh-19">
              <del>130.00</del>&nbsp;$98.55
            </div>
            <div class="lh-19">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
            </div>
          </div>
        </li>

        <li class="clearfix">
          <a href=""><img src="images/shop/recent/2.jpg" alt="" class="widget-posts-img"></a>
          <div class="widget-posts-descr">
            <a href="#" title="">SUNGLASSES</a>
            <div class="lh-19">
              $90.15
            </div>
            <div class="lh-19">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
            </div> 
          </div>
        </li>

        <li class="clearfix">
          <a href=""><img src="images/shop/recent/3.jpg" alt="" class="widget-posts-img"></a>
          <div class="widget-posts-descr">
            <a href="#" title="">HEM SHELL TOP</a>
            <div class="lh-19">
              100.75
            </div>
            <div class="lh-19">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
          </div>
        </li>

      </ul>
    </div>
    
  </div>
  
  <!-- WIDGET -->
  <div class="widget">
    
    <h5 class="widget-title">LAST VIEWED ITEMS</h5>
    
    <div class="widget-body">
      <ul class="clearlist widget-posts">
        <li class="clearfix">
          <a href=""><img src="images/shop/recent/4.jpg" alt="" class="widget-posts-img"></a>
          <div class="widget-posts-descr">
            <a href="#" title="">MEN'S SHOES</a>
            <div class="lh-19">
              $80.25
            </div>
            <div class="lh-19">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
            </div>
          </div>
        </li>

        <li class="clearfix">
          <a href=""><img src="images/shop/recent/2.jpg" alt="" class="widget-posts-img"></a>
          <div class="widget-posts-descr">
            <a href="#" title="">SUNGLASSES</a>
            <div class="lh-19">
              $90.15
            </div>
            <div class="lh-19">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
            </div> 
          </div>
        </li>

      </ul>
    </div>
    
  </div>                
  
  <!-- WIDGET -->
  <div class="widget">
                    
    <h5 class="widget-title">Tags</h5>
    
    <div class="widget-body">
      <div class="tags">
        <a href="">Design</a>
        <a href="">Development</a>
        <a href="">Minimal</a>
        <a href="">Branding</a>
        <a href="">Unique</a>
        <a href="">Clean</a>
        <a href="">UI &amp; UX</a>
      </div>
    </div>
    
  </div>

</div>

</div>
</div>
</div>

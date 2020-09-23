<header id="nav" class="header header-1 no-transparent mobile-no-transparent">
          
    <div class="header-wrapper">
      <div class="container-m-30 clearfix">
        <div class="logo-row">
        
          <!-- LOGO --> 
          <div class="logo-container-2">
  <div class="logo-2">
    <a href="/" class="clearfix">
      {{-- <img src="images/logo.png" class="logo-img" alt="Logo"> --}}
      <label>AZSPREE</label>
    </a>
  </div>
</div>
          <!-- BUTTON --> 
          <div class="menu-btn-respons-container">
              <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target="#main-menu .navbar-collapse">
                  <span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
              </button>
          </div>
       </div>
      </div>

      <!-- MAIN MENU CONTAINER -->
      <div class="main-menu-container">
          
            <div class="container-m-30 clearfix">	
            
                  <!-- MAIN MENU -->
                  <div id="main-menu">
                    <div class="navbar navbar-default" role="navigation">

                      <!-- MAIN MENU LIST -->
                      <nav class="collapse collapsing navbar-collapse right-1024">
                        <ul class="nav navbar-nav">
                        
        <!-- MENU ITEM -->
        <li ><a href="/"><div class="main-menu-title">HOME</div></a></li>

        <!-- MENU ITEM -->
        <li>
          <a href="/welcomeseller"><div class="main-menu-title">SELL ON AZSPREE</div></a>
        </li>					
        
        {{-- <!-- MENU ITEM -->
        <li>
          <a href="#"><div class="main-menu-title">MY CART</div></a>
        </li>					
        
        <!-- MENU ITEM -->
        <li>
          <a href="#"><div class="main-menu-title">CHECK OUT</div></a>
        </li>	 --}}

        {{-- <!-- MENU ITEM -->
        <li>
          <a href="/signup"><div class="main-menu-title">SIGN UP</div></a>
          
        </li> --}}
        
        <!-- MEGA MENU ITEM -->
        <li>
          <a href="/trackorder"><div class="main-menu-title">TRACT ORDER</div></a>
          
        </li>					
        
        {{-- <!-- MENU ITEM -->
        <li id="menu-contact-info-big" class="parent megamenu">
          <a href="#"><div class="main-menu-title">CONTACT</div></a>
          
        </li> --}}
      
        <!-- MENU ITEM -->
        <li id="menu-cart" >
          <a href="/mycart"><div class="main-menu-title"><span aria-hidden="true" class="icon_cart"></span>CART (0)</div></a>
        </li>

        <!-- MENU ITEM -->
        <?php if(Session::has('id')){ ?>
          <li class="parent">
            <a href="/profile"><div class="main-menu-title">{{ session('name') }}</div></a>
            <ul class="sub">
              <li><a href="/profile">Profile</a> </li>
              <li><a href="/logout">Logout</a> </li>
            </ul>
          </li>
      <?php }else{?>
          <li ><a href="/login"><div class="main-menu-title">LOGIN</div></a></li>
      <?php }?>
      
        
                        </ul>
            
                      </nav>

                    </div>
                  </div>
                  <!-- END main-menu -->
                  
            </div>
            <!-- END container-m-30 -->
          
      </div>
      <!-- END main-menu-container -->
      
      <!-- SEARCH READ DOCUMENTATION -->
      <ul class="cd-header-buttons">
          <li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
      </ul> <!-- cd-header-buttons -->
      <div id="cd-search" class="cd-search">
          <form class="form-search" id="searchForm" action="page-search-results.html" method="get">
              <input type="text" value="" name="q" id="q" placeholder="Search...">
          </form>
      </div> 
      
    </div>
    <!-- END header-wrapper -->
    
  </header>
<nav class="navbar navbar-expand-lg navbar-light shadow-lg py-3" id="navbar">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="/assets/img/backgrounds/logo.png" alt="" width="130"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 p-xl-2 p-0">
          <li class="nav-item me-2">
            <a class="nav-link text-light rounded p-3 active" aria-current="page"  href="{{ url('/' . $page='test') }}">الرئيسية</a>
          </li>
          <li class="nav-item me-2">
            <a class="nav-link text-light rounded p-3 active" aria-current="page" href="{{ url('/' . $page='propertyinsertview') }}">إضافة عقار</a>
          </li>
          <li class="nav-item me-2">
            <a class="nav-link text-light rounded p-3 active" aria-current="page" href="terms.html">الشروط والأحكام</a>
          </li>
          <li class="nav-item me-2">
            <a class="nav-link text-light rounded p-3 active" aria-current="page" href="about.html">معلومات عنا</a>
          </li>
        </ul>
        <div class="d-flex">
            <!-- <a href="#" class="text-black text-decoration-none nav-link rounded text-dark">تسجيل دخول <i class="fa fa-user"></i></a> -->
            <div class="dropdown">
                <img src="/assets/img/backgrounds/icons8-user-48.png" width="40" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" />                          
                <ul class="dropdown-menu border-top border-0 text-end" aria-labelledby="dropdownMenuButton1" dir="ltr">
                  <li class="dropdown-item" dir="rtl">مرحبا احمد!</li>
                  <li class="dropdown-item"><hr class="mb-1 mt-0"></li>                          
                  <li><a class="dropdown-item" href="#">الإعدادات <i class="fa fa-gear"></i></a></li>
                  <li><a class="dropdown-item" href="#">تسجيل الخروج <img src="/assets/img/backgrounds/arrow-back-long-svgrepo-com.svg"  width="20" height="20" alt=""></a></li>
                </ul>
            </div>
        </div>
      </div>
    </div>
</nav>
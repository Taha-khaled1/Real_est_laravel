@extends('layouts.master_web')


@section('title')
    الصفحه الرئيسيه
@stop

@section('css')
<style>
.property-image {
  width: 370px;
  height: 266px;
}h1 {
  font-size: 16px;
  color: #333;
}
.fixed-size-image {
  width: 370px;
  height: 266px;
  object-fit: cover;
}p {
  font-size: 14px;
  color: #666;
}div.text {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
}
.property-image {
  width: 370px;
  height: 266px;
}
.image-size {
    width: 370px;
    height: 266px;
}</style>
@endsection


@section('content')
    <div class="relative">

        <!-- Hero section start -->

        <section
            class="bg-[#FFF6F0] relative before:absolute before:inset-0 before:content-[''] before:bg-[#060606] before:opacity-[50%]">
            <div class="lg:h-[720px] xl:h-[830px]">
                <img class="w-full h-full min-h-[360px] md:min-h-[540px] object-cover" src="{{ URL::asset('united.jpg') }}"
                    alt="hero image">
                <div
                    class="absolute right-0 left-0 lg:top-[110px] xl:top-[155px] top-[50%] -translate-y-1/2 lg:translate-y-0">
                    <div class="container">
                        <div class="grid grid-cols-12">
                            <div class="col-span-12">
                                <div class="lg:max-w-[500px] xl:max-w-[600px] text-center ml-auto mr-auto lg:mb-[75px]">
                                    <span class="text-base text-white block mb-5">طريقه جديده لاجاد منزلك</span>
                                    <h1
                                        class="font-recoleta text-white text-[36px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl title">
                                        ابحث عن العقار الذي يناسبك</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Hero section end -->

        <!-- Addvanced search tab start -->

        <div
            class="container mt-[80px] md:mt-[120px] lg:mt-[0px] z-[2] pl-[60px] lg:pl-[50px] 2xl::pl-[0px] lg:absolute lg:left-0 lg:right-0 lg:top-[100%] lg:translate-y-[-396px]">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="relative text-center">
                        <ul
                            class="tab-nav search-tab inline-flex px-[15px] sm:px-[30px] py-[22px] border-t border-l border-r border-solid border-[#016450] rounded-tl-[15px] rounded-tr-[15px] bg-[rgb(236,250,247,0.8)]">
                            <li data-tab="buy" class="mr-[5px] sm:mr-[10px] md:mr-[46px] my-1 active"><button
                                    class="font-recoleta leading-none px-[5px] sm:px-[10px] capitalize text-dark transition-all text-base xl:text-[22px] before:absolute before:left-auto before:right-0 before:bottom-[-31px] before:z-10 before:rounded-full before:w-0 before:h-[3px] before:content-[''] before:bg-secondary relative before:transition-all ease-out">للبيع</button>
                            </li>
                            <li data-tab="sell" class="mr-[5px] sm:mr-[10px] md:mr-[46px] my-1"><button
                                    class="font-recoleta leading-none px-[5px] sm:px-[10px] capitalize text-dark transition-all text-base xl:text-[22px] before:absolute before:left-auto before:right-0 before:bottom-[-31px] before:z-10 before:rounded-full before:w-0 before:h-[3px] before:content-[''] before:bg-secondary relative before:transition-all ease-out">للشراء</button>
                            </li>
                            <li data-tab="rent" class="mr-[5px] sm:mr-[10px] md:mr-[46px] my-1"><button
                                    class="font-recoleta leading-none px-[5px] sm:px-[10px] capitalize text-dark transition-all text-base xl:text-[22px] before:absolute before:left-auto before:right-0 before:bottom-[-31px] before:z-10 before:rounded-full before:w-0 before:h-[3px] before:content-[''] before:bg-secondary relative before:transition-all ease-out">للتاجير</button>
                            </li>
                            <li data-tab="co-living" class="md:mr-[0px] my-1"><button
                                    class="font-recoleta leading-none px-[5px] sm:px-[10px] capitalize text-dark transition-all text-base xl:text-[22px] before:absolute before:left-auto before:right-0 before:bottom-[-31px] before:z-10 before:rounded-full before:w-0 before:h-[3px] before:content-[''] before:bg-secondary relative before:transition-all ease-out">اخر</button>
                            </li>
                        </ul>

                    </div>
                    <div class="relative selectricc-border-none">
                        <button
                            class="tab-toggle-btn px-[10px] py-[15px] absolute top-[0px] left-[-45px] border-l border-t border-b border-solid border-[#016450] bg-[rgb(236,250,247,0.8)] text-primary rounded-tl-[10px] rounded-bl-[10px]"
                            aria-label="svg icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 22V11" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M19 7V2" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 22V17" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 13V2" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M5 22V11" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M5 7V2" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3 11H7" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17 11H21" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10 13H14" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div id="buy"
                            class="tab-content bg-[rgb(236,250,247,0.8)] border border-solid border-[#016450] rounded-bl-[15px] rounded-br-[15px] rounded-tr-[15px] px-[15px] sm:px-[30px] py-[40px] active">
                            <form action="#">
                                <div class="advanced-searrch flex flex-wrap -mb-[45px]">

                                    <div
                                        class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/location.svg" width="24" height="24"
                                                alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="location"
                                                class="font-recoleta block capitalize text-dark text-[18px] xl:text-[25px] leading-none mb-1">المكان</label>
                                            <input id="location" type="text" placeholder="Choose location"
                                                class="text-tiny placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full bg-transparent">
                                        </div>
                                    </div>

                                    <div
                                        class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/property.svg" width="24" height="24"
                                                alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="property"
                                                class="font-recoleta block capitalize text-dark text-[18px] xl:text-[25px] leading-none mb-1">نوع العقار</label>
                                            <select name="property" id="property"
                                                class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">القسم</option>
                                                <option value="1">Duplex House 1</option>
                                                <option value="2">Duplex House 2</option>
                                                <option value="3">Duplex House 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div
                                        class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/dollar-circle.svg" width="24" height="24"
                                                alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="price"
                                                class="font-recoleta block capitalize text-dark text-[18px] xl:text-[25px] leading-none mb-1">حدد السعر</label>
                                            <select name="price" id="price"
                                                class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">3500 USD</option>
                                                <option value="1">3600 USD</option>
                                                <option value="2">3700 USD</option>
                                                <option value="3">3800 USD</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div
                                        class="advanced-searrch-list flex items-center lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] relative">

                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/area.svg" width="24" height="24"
                                                alt="svg icon">
                                        </div>

                                        <div class="flex-1">
                                            <label for="property-size"
                                                class="font-recoleta block capitalize text-dark text-[18px] xl:text-[25px] leading-none mb-1">مساحة العقار للمتر</label>
                                            <select name="property-size" id="property-size"
                                                class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">1500 Sqft</option>
                                                <option value="1">1600 Sqft</option>
                                                <option value="2">1700 Sqft</option>
                                                <option value="3">1800 Sqft</option>
                                            </select>
                                        </div>
                                        <button class="search-btn absolute left-0 lg:left-[-60px] xl:left-[-70px]">
                                            <img src="assets/images/icon/search-outline.svg"
                                                class="max-w-[30px] xl:w-auto" width="40" height="40"
                                                alt="svg icon">
                                            <span class="hidden">Search Properties</span>
                                        </button>
                                    </div>

                                </div>



                                <div class="advanced-searrch-hidden flex flex-wrap items-center mt-[45px] -mb-[45px]">

                                    <div
                                        class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/location.svg" width="24" height="24"
                                                alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="bedrooms10"
                                                class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">عدد الغرف</label>
                                            <select name="property" id="bedrooms10"
                                                class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">Bedrooms</option>
                                                <option value="1">kitchen</option>
                                                <option value="2">dinning rooms</option>
                                                <option value="3">Duplex House 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div
                                        class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/property.svg" width="24" height="24"
                                                alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="property9"
                                                class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">عدد الحمامات</label>
                                            <select name="property" id="property9"
                                                class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">Duplex House</option>
                                                <option value="1">Duplex House 1</option>
                                                <option value="2">Duplex House 2</option>
                                                <option value="3">Duplex House 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div
                                        class="advanced-searrch-list flex items-center lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/dollar-circle.svg" width="24" height="24"
                                                alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="garage"
                                                class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">الافضل</label>
                                            <select name="garage" id="garage"
                                                class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">2 Garage</option>
                                                <option value="1">2 Garage</option>
                                                <option value="2">3 Garage</option>
                                                <option value="3">4 Garage</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div
                                        class="advanced-searrch-list flex items-center lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <button class="search-properties-btn">
                                            البحث عن عقارك
                                        </button>
                                    </div>

                                </div>


                            </form>
                        </div>

                        <div id="sell"
                            class="tab-content bg-[rgb(236,250,247,0.8)] border border-solid border-[#016450] rounded-bl-[15px] rounded-br-[15px] rounded-tr-[15px] px-[15px] sm:px-[30px] py-[40px]">
                            <form action="#">
                                <div class="advanced-searrch flex flex-wrap -mb-[45px]">

                                    <div
                                        class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/location.svg" width="24" height="24"
                                                alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="location2"
                                                class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Location</label>
                                            <input id="location2" type="text" placeholder="Choose location"
                                                class="text-tiny placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full bg-transparent">
                                        </div>
                                    </div>

                                    <div
                                        class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/property.svg" width="24" height="24"
                                                alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="property2"
                                                class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Property
                                                Type</label>
                                            <select name="property" id="property2"
                                                class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">Duplex House</option>
                                                <option value="1">Duplex House 1</option>
                                                <option value="2">Duplex House 2</option>
                                                <option value="3">Duplex House 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div
                                        class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/dollar-circle.svg" width="24" height="24"
                                                alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="price2"
                                                class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Price
                                                Range</label>
                                            <select name="price" id="price2"
                                                class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">1500 USD</option>
                                                <option value="1">1600 USD</option>
                                                <option value="2">1700 USD</option>
                                                <option value="3">1800 USD</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div
                                        class="advanced-searrch-list flex items-center lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] relative">

                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/area.svg" width="24" height="24"
                                                alt="svg icon">
                                        </div>

                                        <div class="flex-1">
                                            <label for="property-size2"
                                                class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Property
                                                Size</label>
                                            <select name="property-size" id="property-size2"
                                                class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">2500 Sqft</option>
                                                <option value="1">2600 Sqft</option>
                                                <option value="2">2700 Sqft</option>
                                                <option value="3">2800 Sqft</option>
                                            </select>
                                        </div>
                                        <button class="search-btn absolute left-0 lg:left-[-60px] xl:left-[-70px]">
                                            <img src="assets/images/icon/search-outline.svg"
                                                class="max-w-[30px] xl:w-auto" width="40" height="40"
                                                alt="svg icon">
                                            <span class="hidden">Search Properties</span>
                                        </button>
                                    </div>

                                </div>



                                <div class="advanced-searrch-hidden flex flex-wrap items-center mt-[45px] -mb-[45px]">

                                    <div
                                        class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/location.svg" width="24" height="24"
                                                alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="bedrooms"
                                                class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Bedrooms</label>
                                            <select name="property" id="bedrooms"
                                                class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">Bedrooms</option>
                                                <option value="1">kitchen</option>
                                                <option value="2">dinning rooms</option>
                                                <option value="3">Duplex House 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div
                                        class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/property.svg" width="24" height="24"
                                                alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="property3"
                                                class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Bathrooms</label>
                                            <select name="property" id="property3"
                                                class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">Duplex House</option>
                                                <option value="1">Duplex House 1</option>
                                                <option value="2">Duplex House 2</option>
                                                <option value="3">Duplex House 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div
                                        class="advanced-searrch-list flex items-center lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/dollar-circle.svg" width="24" height="24"
                                                alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="garage2"
                                                class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Garage</label>
                                            <select name="garage" id="garage2"
                                                class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">2 Garage</option>
                                                <option value="1">2 Garage</option>
                                                <option value="2">3 Garage</option>
                                                <option value="3">4 Garage</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div
                                        class="advanced-searrch-list flex items-center lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <button class="search-properties-btn">
                                            Search Properties
                                        </button>
                                    </div>

                                </div>


                            </form>
                        </div>

                        <div id="rent"
                            class="tab-content bg-[rgb(236,250,247,0.8)] border border-solid border-[#016450] rounded-bl-[15px] rounded-br-[15px] rounded-tr-[15px] px-[15px] sm:px-[30px] py-[40px]">
                            <form action="#">
                                <div class="advanced-searrch flex flex-wrap -mb-[45px]">

                                    <div
                                        class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/location.svg" width="24" height="24"
                                                alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="location7"
                                                class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Location</label>
                                            <input id="location7" type="text" placeholder="Choose location"
                                                class="text-tiny placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full bg-transparent">
                                        </div>
                                    </div>

                                    <div
                                        class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/property.svg" width="24" height="24"
                                                alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="property8"
                                                class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Property
                                                Type</label>
                                            <select name="property" id="property8"
                                                class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">Apartments</option>
                                                <option value="1">Apartments 1</option>
                                                <option value="2">Apartments 2</option>
                                                <option value="3">Apartments 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div
                                        class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/dollar-circle.svg" width="24" height="24"
                                                alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="price7"
                                                class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Price
                                                Range</label>
                                            <select name="price" id="price7"
                                                class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">6500 USD</option>
                                                <option value="1">6600 USD</option>
                                                <option value="2">6700 USD</option>
                                                <option value="3">6800 USD</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div
                                        class="advanced-searrch-list flex items-center lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] relative">

                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/area.svg" width="24" height="24"
                                                alt="svg icon">
                                        </div>

                                        <div class="flex-1">
                                            <label for="property-size9"
                                                class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Property
                                                Size</label>
                                            <select name="property-size" id="property-size9"
                                                class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">7500 Sqft</option>
                                                <option value="1">7600 Sqft</option>
                                                <option value="2">7700 Sqft</option>
                                                <option value="3">7800 Sqft</option>
                                            </select>
                                        </div>
                                        <button class="search-btn absolute left-0 lg:left-[-60px] xl:left-[-70px]">
                                            <img src="assets/images/icon/search-outline.svg"
                                                class="max-w-[30px] xl:w-auto" width="40" height="40"
                                                alt="svg icon">
                                            <span class="hidden">Search Properties</span>
                                        </button>
                                    </div>

                                </div>



                                <div class="advanced-searrch-hidden flex flex-wrap items-center mt-[45px] -mb-[45px]">

                                    <div
                                        class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/location.svg" width="24" height="24"
                                                alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="bedrooms6"
                                                class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Bedrooms</label>
                                            <select name="property" id="bedrooms6"
                                                class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">Bedrooms</option>
                                                <option value="1">kitchen</option>
                                                <option value="2">dinning rooms</option>
                                                <option value="3">Duplex House 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div
                                        class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/property.svg" width="24" height="24"
                                                alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="property7"
                                                class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Bathrooms</label>
                                            <select name="property" id="property7"
                                                class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">Duplex House</option>
                                                <option value="1">Duplex House 1</option>
                                                <option value="2">Duplex House 2</option>
                                                <option value="3">Duplex House 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div
                                        class="advanced-searrch-list flex items-center lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/dollar-circle.svg" width="24" height="24"
                                                alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="garage20"
                                                class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Garage</label>
                                            <select name="garage" id="garage20"
                                                class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">2 Garage</option>
                                                <option value="1">2 Garage</option>
                                                <option value="2">3 Garage</option>
                                                <option value="3">4 Garage</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div
                                        class="advanced-searrch-list flex items-center lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <button class="search-properties-btn">
                                            Search Properties
                                        </button>
                                    </div>

                                </div>


                            </form>
                        </div>

                        <div id="co-living"
                            class="tab-content bg-[rgb(236,250,247,0.8)] border border-solid border-[#016450] rounded-bl-[15px] rounded-br-[15px] rounded-tr-[15px] px-[15px] sm:px-[30px] py-[40px]">
                            <form action="#">
                                <div class="advanced-searrch flex flex-wrap -mb-[45px]">

                                    <div
                                        class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/location.svg" width="24" height="24"
                                                alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="location6"
                                                class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Location</label>
                                            <input id="location6" type="text" placeholder="Choose location"
                                                class="text-tiny placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full bg-transparent">
                                        </div>
                                    </div>

                                    <div
                                        class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/property.svg" width="24" height="24"
                                                alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="property6"
                                                class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Property
                                                Type</label>
                                            <select name="property" id="property6"
                                                class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">Duplex House</option>
                                                <option value="1">Duplex House 1</option>
                                                <option value="2">Duplex House 2</option>
                                                <option value="3">Duplex House 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div
                                        class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/dollar-circle.svg" width="24" height="24"
                                                alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="price6"
                                                class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Price
                                                Range</label>
                                            <select name="price" id="price6"
                                                class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">1500 USD</option>
                                                <option value="1">1600 USD</option>
                                                <option value="2">1700 USD</option>
                                                <option value="3">1800 USD</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div
                                        class="advanced-searrch-list flex items-center lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] relative">

                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/area.svg" width="24" height="24"
                                                alt="svg icon">
                                        </div>

                                        <div class="flex-1">
                                            <label for="property-size4"
                                                class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Property
                                                Size</label>
                                            <select name="property-size" id="property-size4"
                                                class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">2500 Sqft</option>
                                                <option value="1">2600 Sqft</option>
                                                <option value="2">2700 Sqft</option>
                                                <option value="3">2800 Sqft</option>
                                            </select>
                                        </div>
                                        <button class="search-btn absolute left-0 lg:left-[-60px] xl:left-[-70px]">
                                            <img src="assets/images/icon/search-outline.svg"
                                                class="max-w-[30px] xl:w-auto" width="40" height="40"
                                                alt="svg icon">
                                            <span class="hidden">Search Properties</span>
                                        </button>
                                    </div>

                                </div>



                                <div class="advanced-searrch-hidden flex flex-wrap items-center mt-[45px] -mb-[45px]">

                                    <div
                                        class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/location.svg" width="24" height="24"
                                                alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="bedrooms4"
                                                class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Bedrooms</label>
                                            <select name="property" id="bedrooms4"
                                                class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">Bedrooms</option>
                                                <option value="1">kitchen</option>
                                                <option value="2">dinning rooms</option>
                                                <option value="3">Duplex House 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div
                                        class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/property.svg" width="24" height="24"
                                                alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="property4"
                                                class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Bathrooms</label>
                                            <select name="property" id="property4"
                                                class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">Duplex House</option>
                                                <option value="1">Duplex House 1</option>
                                                <option value="2">Duplex House 2</option>
                                                <option value="3">Duplex House 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div
                                        class="advanced-searrch-list flex items-center lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/dollar-circle.svg" width="24" height="24"
                                                alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="garage4"
                                                class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Garage</label>
                                            <select name="garage" id="garage4"
                                                class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">2 Garage</option>
                                                <option value="1">2 Garage</option>
                                                <option value="2">3 Garage</option>
                                                <option value="3">4 Garage</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div
                                        class="advanced-searrch-list flex items-center lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <button class="search-properties-btn">
                                            Search Properties
                                        </button>
                                    </div>

                                </div>


                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

    {{-- <!-- Addvanced search tab end -->///////////////// --}}

    <!-- Brand section Start-->

    <section class="brand-section pt-[80px] lg:pt-[120px]">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="mb-[60px]">
                        <span class="text-secondary text-tiny inline-block mb-2">عن شركتنا</span>
                        <h2 class="font-recoleta text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize">
                            موثقه من<span class="text-secondary">.</span></h2>
                    </div>
                    <div class="brand-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <!-- swiper-slide start -->
                                <div class="swiper-slide text-center">
                                    <a href="#" class="block">
                                        <img src="assets/images/brand/brand1.png" class="w-auto h-auto block mx-auto"
                                            loading="lazy" width="125" height="109"
                                            alt="@@title">
                                    </a>
                                </div>
                                <div class="swiper-slide text-center">
                                    <a href="#" class="block">
                                        <img src="assets/images/brand/brand2.png" class="w-auto h-auto block mx-auto"
                                            loading="lazy" width="125" height="109"
                                            alt="@@title">
                                    </a>
                                </div>
                                <div class="swiper-slide text-center">
                                    <a href="#" class="block">
                                        <img src="assets/images/brand/brand3.png" class="w-auto h-auto block mx-auto"
                                            loading="lazy" width="125" height="109"
                                            alt="@@title">
                                    </a>
                                </div>
                                <div class="swiper-slide text-center">
                                    <a href="#" class="block">
                                        <img src="assets/images/brand/brand4.png" class="w-auto h-auto block mx-auto"
                                            loading="lazy" width="125" height="109"
                                            alt="@@title">
                                    </a>
                                </div>
                                <div class="swiper-slide text-center">
                                    <a href="#" class="block">
                                        <img src="assets/images/brand/brand5.png" class="w-auto h-auto block mx-auto"
                                            loading="lazy" width="125" height="109"
                                            alt="@@title">
                                    </a>
                                </div>
                                <div class="swiper-slide text-center">
                                    <a href="#" class="block">
                                        <img src="assets/images/brand/brand3.png" class="w-auto h-auto block mx-auto"
                                            loading="lazy" width="125" height="109"
                                            alt="@@title">
                                    </a>
                                </div>

                                <!-- swiper-slide end-->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Brand section End-->



    <!-- Explore Cities Start-->

    <section class="explore-cities-section pt-[80px] pb-[120px] lg:py-[120px]">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="mb-[30px] lg:mb-[60px] text-center">
                        <span class="text-secondary text-tiny inline-block mb-2">اكتشف المدن</span>
                        <h2 class="font-recoleta text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize">
                            اكتشف اكثر المدن توجدا للعقارات<span class="text-secondary">.</span></h2>
                    </div>
                    <div class="cities-slider">
                        <div class="swiper  -mx-[30px] -my-[60px] px-[30px] py-[60px]">
                            <div class="swiper-wrapper">
                                <!-- swiper-slide start -->

                                @php
                                    $imageLinks = [
                                        'assets/img/backgrounds/city.png',
                                        'assets/img/backgrounds/city1.png',
                                        'assets/img/backgrounds/city2.png',
                                        'assets/img/backgrounds/city3.png',
                                        // add more links here
                                    ];
                                    $counter = 0;
                                @endphp
                                @foreach ($mostCountries as $item)
                                    <div class="swiper-slide text-center">
                                        <div class="relative group">
                                            <a href="moreproperty/{{$item->country}}" class="block">
                                                <img src="{{ URL::asset($imageLinks[$counter]) }}" style="object-fit: cover; height: 290px;"
                                                    class="w-full h-full block mx-auto rounded-[6px_6px_0px_0px]"
                                                    loading="lazy" width="270" height="290" alt="New York">
                                                <div
                                                    class="cities-shadow form-field-color rounded-[0px_0px_6px_6px] px-[15px] py-[20px]">
                                                    <span
                                                        class="font-recoleta font-normal text-[24px] xl:text-lg text-primary group-hover:text-secondary transition-all">{{ $item->country }}</span>
                                                    <p
                                                        class="font-light text-tiny capitalize text-secondary group-hover:text-primary transition-all">
                                                        {{ $item->count }}</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    @php
                                        $counter++;
                                    @endphp
                                @endforeach






                                <!-- swiper-slide end-->
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Explore Cities End-->


    <!-- About Us Sectin Start -->
    <section class="about-section lg:pt-[55px]">
        <div class="container">
            <div class="grid grid-cols-12 gap-[30px]">
                <div class="col-span-12 lg:col-span-7">
                    <div class="scene" data-relative-input="true">
                        <img data-depth="0.1" src="assets/images/about/about2.png"
                            class="2xl:ml-[-160px] w-full h-full 2xl:w-auto 2xl:max-w-[inherit]" loading="lazy"
                            width="813" height="707" alt="about Image">
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-5">
                    <span class="text-secondary text-tiny inline-block mb-2">لماذا أخترتنا</span>
                    <h2
                        class="font-recoleta text-primary text-[24px] sm:text-[30px] leading-[1.277] xl:text-xl capitalize mb-3">
                        نحن نقدم الاختيار الصحيح للممتلكات التي تحتاجها .
                        <span class="text-secondary">.</span></h2>
                    <p
                    >يتوفر هنا عدد ضخم من العقارات للبيع والشراء والإيجار. يمكنك أيضًا العثور هنا على عقار للعيش المشترك ، لذا يجب عليك اختيار الكثير من هنا والاستمتاع بخصم كبير.

                    </p>

                    <div class="-mb-10 mt-[45px]">
                        <div class="flex flex-wrap mb-5 lg:mb-10">
                            <img src="assets/images/icon/doller.png" class="self-start mr-5" loading="lazy"
                                width="50" height="50" alt="about Image">
                            <div class="flex-1">
                                <h3 class="font-recoleta text-primary text-[22px] xl:text-lg capitalize mb-2">صديقة للميزانية</h3>
                                <p class="max-w-[315px]">العقارات صديقة للميزانية ، لذا لديك فرصة للعثور على أفضلها</p>
                            </div>

                        </div>
                        <div class="flex flex-wrap mb-5 lg:mb-10">
                            <img src="assets/images/icon/location.png" class="self-start mr-5" loading="lazy"
                                width="50" height="50" alt="about Image">
                            <div class="flex-1">
                                <h3 class="font-recoleta text-primary text-[22px] xl:text-lg capitalize mb-2">موقع رئيسي
                                </h3>
                                <p class="max-w-[315px]">العقارات صديقة للميزانية ، لذا لديك فرصة للعثور على أفضلها</p>
                            </div>

                        </div>
                        <div class="flex flex-wrap mb-5 lg:mb-10">
                            <img src="assets/images/icon/trusted.png" class="self-start mr-5" loading="lazy"
                                width="50" height="50" alt="about Image">
                            <div class="flex-1">
                                <h3 class="font-recoleta text-primary text-[22px] xl:text-lg capitalize mb-2">
                                    موثوق به من قبل ألف</h3>
                                <p class="max-w-[315px]">العقارات صديقة للميزانية ، لذا لديك فرصة للعثور على أفضلها</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- About Us Sectin End -->



    <!-- Popular Properties start -->
    <section class="popular-properties py-[80px] lg:py-[120px]">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-[50px]">
                        <div>
                            <span class="text-secondary text-tiny inline-block mb-2">افضل اختيار</span>
                            <h2 class="font-recoleta text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize">
                               اكثر العقارات زيارة<span class="text-secondary">.</span></h2>
                        </div>
                        <div>
                            <a href="properties-v1.html"
                                class="flex flex-wrap items-center text-secondary text-tiny">اكتشف الكل
                                <svg class="ml-[10px]" width="26" height="11" viewBox="0 0 26 11"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.0877 0.69303L24.2075 5.00849H0V5.99151H24.2075L20.0877 10.307L20.7493 11L26 5.5L20.7493 0L20.0877 0.69303Z"
                                        fill="currentColor" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-[30px]">
                @foreach ($propertiesviews as $item)
           
               <div class="overflow-hidden rounded-md  form-field-color text-center transition-all duration-300 hover:-translate-y-[10px]">
                <div class="relative property-image">
                    <img src="{{ URL::asset($item->picture) }}" class="w-full h-full object-cover" loading="lazy" alt="Orchid Casel de Paradise.">
                    <span class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-secondary leading-none text-[14px] font-normal capitalize">for Sale</span>
                  </div>
                  <div class="py-[20px] px-[20px]">
                    <h3><a href="{{ route('detelisscreen', $item->id) }}" class="font-recoleta leading-tight text-[22px] xl:text-lg text-white">{{$item->name}}</a></h3>
                    <h4><a href="{{ route('detelisscreen', $item->id) }}" class="font-light text-tiny text-secondary underline">جمهورية الامارات العربية المتحدة</a></h4>
                    <span class="font-light text-sm">{{$item->created_at->format('Y-m-d H:i:s')}}</span>
                    <div class="before:block before:absolute before:top-1/2 before:-translate-y-1/2 before:h-[1px] before:w-full before:z-[-1] before:bg-[#E0E0E0] relative">
                      <span class="font-recoleta text-primary px-[15px]">{{$item->country}}</span>
                    </div>
                    <div class="text" style="display: flex; flex-direction: row;">
                        <h1 style="font-size: 16px; color: #fff;">عدد مشاهدات العقار</h1>
                        <p style="font-size: 14px; color: #fff;" class="font-light">{{$item->views}}</p>
                      </div>
                  </div>
                </div>
                            
              @endforeach
            </div>



    </section>
    <!-- Popular Properties end -->






    <!-- Featured Properties Start -->
    <section class="featured-properties py-[80px] lg:py-[120px]">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12 flex flex-wrap flex-col md:flex-row md:items-center justify-between mb-[50px]">
                    <div class="mb-5 lg:mb-0">
                        <span class="text-secondary text-tiny inline-block mb-2">اعلي تقييم</span>
                        <h2 class="font-recoleta text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize">
                            العقارات الموصي بها<span class="text-secondary">.</span></h2>
                    </div>
             
                </div>
                <div class="col-span-12">
                    <div id="all-properties" class="properties-tab-content active">





                        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-[30px]">
                            @foreach ($propertiesRec as $item)
                       
                           <div class="overflow-hidden rounded-md drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px]">
                            <div class="relative property-image">
                                <img src="{{ URL::asset($item->picture) }}" class="w-full h-full object-cover" loading="lazy" alt="Orchid Casel de Paradise.">
                                <span class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-secondary leading-none text-[14px] font-normal capitalize">for Sale</span>
                              </div>
                              <div class="py-[20px] px-[20px]">
                                <h3><a href="detelisscreen" class="font-recoleta leading-tight text-[22px] xl:text-lg text-primary">{{$item->name}}</a></h3>
                                <h4><a href="detelisscreen" class="font-light text-tiny text-secondary underline">جمهورية الامارات العربية المتحدة</a></h4>
                                <span class="font-light text-sm">{{$item->created_at->format('Y-m-d H:i:s')}}</span>
                                <div class="before:block before:absolute before:top-1/2 before:-translate-y-1/2 before:h-[1px] before:w-full before:z-[-1] before:bg-[#E0E0E0] relative">
                                  <span class="font-recoleta text-base text-primary px-[15px] bg-white">{{$item->country}}</span>
                                </div>
                                <div class="text" style="display: flex; flex-direction: row;">
                                    <h1 style="font-size: 16px; color: #333;">عدد مشاهدات العقار</h1>
                                    <p style="font-size: 14px; color: #666;" class="font-light">{{$item->views}}</p>
                                  </div>
                              </div>
                            </div>
                                        
                          @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Properties End -->



    <!-- Testimonial carousel Start -->

    <section class="testimonial-section pb-[80px] lg:pb-[120px] bg-center bg-no-repeat relative z-10"
        style="">
        <div class="container testimonial-carousel-one">
            <div class="grid items-center grid-cols-12 gap-x-[30px] mb-[-30px]">
                <div class="col-span-12 lg:col-span-7 mb-[30px]">
                    <div class="swiper -m-[30px] p-[30px]">
                        <div class="swiper-wrapper">



                            <div class="swiper-slide">
                                <div class="relative text-right">
                                    <!-- shape and images -->
                                    <div
                                        class="inline-block relative before:absolute before:content-[''] before:inset-x-0 before:bottom-0 before:bg-primary text-primary before:w-full before:h-[calc(100%_-_50px)] before:z-[-1] before:rounded-[16px]">
                                        <img src="{{ URL::asset('assets/img/backgrounds/per.jpg') }}"
                                            class="w-auto h-auto block mx-auto relative z-[2]" loading="lazy"
                                            width="300" height="380" alt="Oliver Stephen">
                                        <img class="absolute right-[20px] bottom-0 z-[1]"
                                            src="assets/images/testimonial/shape.png" width="130" height="132"
                                            loading="lazy" alt="shape">
                                    </div>

                                    <!-- content -->
                                    <div
                                        class="review-shadow-card text-left rounded-[14px] pl-[20px] sm:pl-[30px] pr-[45px] pt-[30px] sm:pt-[45px] pb-[20px] sm:pb-[30px]">
                                        <span class="block absolute right-[20px] top-[30px]">
                                            <svg class="ml-auto mb-[4px]" width="27" height="20"
                                                viewBox="0 0 27 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1.925 19.2505H7.7L11.55 11.5505V0.000488281H0V11.5505H5.775L1.925 19.2505ZM17.325 19.2505H23.1L26.95 11.5505V0.000488281H15.4V11.5505H21.175L17.325 19.2505Z"
                                                    fill="#016450" />
                                            </svg>
                                        </span>
                                        <p class="text-dark">من السهل جدًا على كل شخص شراء أو بيع أو استئجار عقار
                                             نحن نظن أنهم يواصلون خدمتهم العظيمة.</p>
                                        <ul>
                                            <li class="flex flex-wrap items-center justify-between mt-4">
                                                <span
                                                    class="font-recoleta text-[18px] leading-none capitalize text-secondary">يوسف محمد</span>
                                                <span class="flex flex-wrap">
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#FF6500" />
                                                        </svg> 
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#FF6500" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#FF6500" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#FF6500" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#FF6500" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>




                                </div>
                            </div>




                            <div class="swiper-slide">
                                <div class="relative text-right">
                                    <!-- shape and images -->
                                    <div
                                        class="inline-block relative before:absolute before:content-[''] before:inset-x-0 before:bottom-0 before:bg-primary text-primary before:w-full before:h-[calc(100%_-_50px)] before:z-[-1] before:rounded-[16px]">
                                        <img src="{{ URL::asset('assets/img/backgrounds/per1.jpg') }}"
                                            class="w-auto h-auto block mx-auto relative z-[2]" loading="lazy"
                                            width="300" height="380" alt="Sun Francisco">
                                        <img class="absolute right-[20px] bottom-0 z-[1]"
                                            src="assets/images/testimonial/shape.png" width="130" height="132"
                                            loading="lazy" alt="shape">
                                    </div>

                                    <!-- content -->
                                    <div
                                        class="review-shadow-card text-left rounded-[14px] pl-[20px] sm:pl-[30px] pr-[45px] pt-[30px] sm:pt-[45px] pb-[20px] sm:pb-[30px]">
                                        <span class="block absolute right-[20px] top-[30px]">
                                            <svg class="ml-auto mb-[4px]" width="27" height="20"
                                                viewBox="0 0 27 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1.925 19.2505H7.7L11.55 11.5505V0.000488281H0V11.5505H5.775L1.925 19.2505ZM17.325 19.2505H23.1L26.95 11.5505V0.000488281H15.4V11.5505H21.175L17.325 19.2505Z"
                                                    fill="#016450" />
                                            </svg>
                                        </span>
                                        <p class="text-dark">
                                            لقد كنت خائف جدا من الشركات الغير موثقه ولاكن عندما تعاملت مع هذه الشركه العقريه لقد تمكنت من العثور علي منزل احلامي
                                        </p>
                                        <ul>
                                            <li class="flex flex-wrap items-center justify-between mt-4">
                                                <span
                                                    class="font-recoleta text-[18px] leading-none capitalize text-secondary">محمد احمد</span>
                                                <span class="flex flex-wrap">
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#FF6500" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#FF6500" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#FF6500" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#FF6500" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#FF6500" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="relative text-right">
                                    <!-- shape and images -->
                                    <div
                                        class="inline-block relative before:absolute before:content-[''] before:inset-x-0 before:bottom-0 before:bg-primary text-primary before:w-full before:h-[calc(100%_-_50px)] before:z-[-1] before:rounded-[16px]">
                                        <img src="{{ URL::asset('assets/img/backgrounds/per2.jpg') }}"
                                            class="w-auto h-auto block mx-auto relative z-[2]" loading="lazy"
                                            width="300" height="380" alt="Oliver Stephen">
                                        <img class="absolute right-[20px] bottom-0 z-[1]"
                                            src="assets/images/testimonial/shape.png" width="130" height="132"
                                            loading="lazy" alt="shape">
                                    </div>

                                    <!-- content -->
                                    <div
                                        class="review-shadow-card text-left rounded-[14px] pl-[20px] sm:pl-[30px] pr-[45px] pt-[30px] sm:pt-[45px] pb-[20px] sm:pb-[30px]">
                                        <span class="block absolute right-[20px] top-[30px]">
                                            <svg class="ml-auto mb-[4px]" width="27" height="20"
                                                viewBox="0 0 27 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1.925 19.2505H7.7L11.55 11.5505V0.000488281H0V11.5505H5.775L1.925 19.2505ZM17.325 19.2505H23.1L26.95 11.5505V0.000488281H15.4V11.5505H21.175L17.325 19.2505Z"
                                                    fill="#016450" />
                                            </svg>
                                        </span>
                                        <p class="text-dark">فعلا شركه قويه جدا جدا لقد تمكنت من العثور علي منزل بسرعه رهيبه .</p>
                                        <ul>
                                            <li class="flex flex-wrap items-center justify-between mt-4">
                                                <span
                                                    class="font-recoleta text-[18px] leading-none capitalize text-secondary">زياد محمود</span>
                                                <span class="flex flex-wrap">
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#FF6500" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#FF6500" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#FF6500" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#FF6500" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-[4px]">
                                                        <svg width="10" height="11" viewBox="0 0 10 11"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                                                fill="#FF6500" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-5 mb-[30px] order-first lg:order-last">
                    <div class="relative 2xl:ml-[55px] max-w-[385px]">
                        <span class="text-secondary text-tiny capitalize inline-block mb-[10px]">شهادة</span>
                        <h2
                            class="font-recoleta text-primary text-[24px] sm:text-[30px] xl:text-xl mb-[20px] max-w-[375px]">
                            تعليقات من عملائنا السعداء .<span class="text-secondary">.</span></h2>
                        <p>يتوفر هنا عدد ضخم من العقارات للبيع والشراء والإيجار. يمكنك أيضًا العثور هنا على عقار للعيش المشترك ، لذا عليك أن تختار هنا وتستمتع به. </p>

                        <!-- If we need navigation buttons -->
                        <div class="testimonial-pagination hidden sm:block">
                            <div
                                class="swiper-button-prev w-[36px] h-[36px] rounded-full bg-primary  text-white hover:bg-secondary top-auto bottom-[-65px] left-0">
                            </div>
                            <div
                                class="swiper-button-next w-[36px] h-[36px] rounded-full bg-primary  text-white hover:bg-secondary top-auto bottom-[-65px] left-[56px]">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonial carousel End -->


    <!-- Blog Section Start  -->

    <section class="blog-section relative">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-[30px] mb-[-30px] items-center">
                <div class="col-span-12 lg:col-span-4 mb-[30px]">
                    <div class="xl:pr-[20px]">
                        <span class="text-secondary text-tiny capitalize inline-block mb-[15px]">مدونتنا</span>
                        <h2
                            class="font-recoleta text-primary text-[24px] sm:text-[30px] leading-[1.277] xl:text-xl capitalize mb-[15px]">
                            تحقق دائمًا من أحدث منشور في المدونة .<span class="text-secondary">.</span></h2>

                        <p>يتوفر هنا عدد ضخم من العقارات للبيع والشراء والإيجار. يمكنك أيضًا العثور هنا على عقار للعيش المشترك ، لذلك هناك الكثير من الفرص التي يمكنك اختيارها والاستمتاع بخصم كبير. </p>
                        <a href="blog-grid.html"
                            class="flex flex-wrap items-center text-secondary text-tiny mt-[20px]">مشاهدة الكل منشور
                            <svg class="ml-[10px]" width="26" height="11" viewBox="0 0 26 11"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.0877 0.69303L24.2075 5.00849H0V5.99151H24.2075L20.0877 10.307L20.7493 11L26 5.5L20.7493 0L20.0877 0.69303Z"
                                    fill="currentColor"></path>
                            </svg>
                        </a>

                    </div>
                </div>

                <div class="col-span-12 lg:col-span-8 mb-[30px]">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-[30px] mb-[-30px]">

                        @foreach ($blogs as $item)
                            
                        <div class="mb-[30px]">
                            <a href="blog-details.html" class="block overflow-hidden rounded-[6px] mb-[30px]">
                                <img class="w-full h-full" src="{{ URL::asset($item->image) }}" width="370"
                                    height="270" loading="lazy"
                                    alt="Tip’s about Real Estate Recent Conditions from Agent.">
                            </a>
                            <div>
                                <span
                                    class="block leading-none font-normal text-[14px] text-secondary mb-[10px] relative before:absolute before:left-0 before:top-1/2 -translate-y-1/2 before:bg-secondary before:content-[''] before:w-[3px] before:h-[3px] before:rounded-full pl-[10px]">
                                    {{ $item->created_at->locale('ar')->diffForHumans() }}</span>
                                <h3><a href="blog-details.html"
                                        class="font-recoleta text-[22px] xl:text-[28px] leading-[1.285] text-primary block mb-[10px] hover:text-secondary transition-all">Tip’s
                                        {{ $item->title}}</a></h3>
                                        <p class="font-light text-overflow-ellipsis whitespace-nowrap max-w-[200px]">{{ \Illuminate\Support\Str::limit($item->content, 100, '...') }}</p>
                            </div>
                        </div>


                        @endforeach
                    



                   

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End  -->


    <!-- News Letter section start -->

@endsection

@section('js')

@endsection

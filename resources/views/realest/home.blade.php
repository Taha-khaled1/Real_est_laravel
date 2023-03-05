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
                                    class="font-recoleta leading-none px-[5px] sm:px-[10px] capitalize text-primary transition-all text-base xl:text-[22px] before:absolute before:left-auto before:right-0 before:bottom-[-31px] before:z-10 before:rounded-full before:w-0 before:h-[3px] before:content-[''] before:bg-secondary relative before:transition-all ease-out">للبيع</button>
                            </li>
                            <li data-tab="sell" class="mr-[5px] sm:mr-[10px] md:mr-[46px] my-1"><button
                                    class="font-recoleta leading-none px-[5px] sm:px-[10px] capitalize text-primary transition-all text-base xl:text-[22px] before:absolute before:left-auto before:right-0 before:bottom-[-31px] before:z-10 before:rounded-full before:w-0 before:h-[3px] before:content-[''] before:bg-secondary relative before:transition-all ease-out">للشراء</button>
                            </li>
                            <li data-tab="rent" class="mr-[5px] sm:mr-[10px] md:mr-[46px] my-1"><button
                                    class="font-recoleta leading-none px-[5px] sm:px-[10px] capitalize text-primary transition-all text-base xl:text-[22px] before:absolute before:left-auto before:right-0 before:bottom-[-31px] before:z-10 before:rounded-full before:w-0 before:h-[3px] before:content-[''] before:bg-secondary relative before:transition-all ease-out">للتاجير</button>
                            </li>
                            <li data-tab="co-living" class="md:mr-[0px] my-1"><button
                                    class="font-recoleta leading-none px-[5px] sm:px-[10px] capitalize text-primary transition-all text-base xl:text-[22px] before:absolute before:left-auto before:right-0 before:bottom-[-31px] before:z-10 before:rounded-full before:w-0 before:h-[3px] before:content-[''] before:bg-secondary relative before:transition-all ease-out">اخر</button>
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
                                                class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">المكان</label>
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
                                                class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">نوع العقار</label>
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
                                                class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">حدد السعر</label>
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
                                                class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">مساحة العقار للمتر</label>
                                            <select name="property-size" id="property-size"
                                                class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">1500 Sqft</option>
                                                <option value="1">1600 Sqft</option>
                                                <option value="2">1700 Sqft</option>
                                                <option value="3">1800 Sqft</option>
                                            </select>
                                        </div>
                                        <button class="search-btn absolute right-0 lg:right-[-60px] xl:right-[-70px]">
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
                                        <button class="search-btn absolute right-0 lg:right-[-60px] xl:right-[-70px]">
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
                                        <button class="search-btn absolute right-0 lg:right-[-60px] xl:right-[-70px]">
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
                                        <button class="search-btn absolute right-0 lg:right-[-60px] xl:right-[-70px]">
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
                                            <a href="agency-details.html" class="block">
                                                <img src="{{ URL::asset($imageLinks[$counter]) }}" style="object-fit: cover; height: 290px;"
                                                    class="w-full h-full block mx-auto rounded-[6px_6px_0px_0px]"
                                                    loading="lazy" width="270" height="290" alt="New York">
                                                <div
                                                    class="cities-shadow bg-[#FFFDFC] rounded-[0px_0px_6px_6px] px-[15px] py-[20px]">
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
           
               <div class="overflow-hidden rounded-md drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px]">
                <div class="relative property-image">
                    <img src="{{ URL::asset($item->picture) }}" class="w-full h-full object-cover" loading="lazy" alt="Orchid Casel de Paradise.">
                    <span class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-secondary leading-none text-[14px] font-normal capitalize">for Sale</span>
                  </div>
                  <div class="py-[20px] px-[20px]">
                    <h3><a href="properties-details.html" class="font-recoleta leading-tight text-[22px] xl:text-lg text-primary">{{$item->name}}</a></h3>
                    <h4><a href="properties-details.html" class="font-light text-tiny text-secondary underline">جمهورية الامارات العربية المتحدة</a></h4>
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



    </section>
    <!-- Popular Properties end -->



    <!-- Video Section Start -->
    <section class="video-section">
        <div class="container">
            <div class="grid grid-cols-12 gap-[30px] items-center">
                <div class="col-span-12 lg:col-span-6 relative">
                    <div class="mb-5 lg:mb-0 max-w-[450px]">
                        <span class="text-secondary text-tiny inline-block mb-2">Take a video tour</span>
                        <h2
                            class="font-recoleta text-primary text-[24px] sm:text-[30px] leading-[1.277] xl:text-xl mb-[10px]">
                            Watch the video for taking your decision easily <span class="text-secondary">.</span></h2>
                        <p>Huge number of propreties availabe here for buy, sell and
                            Rent. Also you find here co-living property so lots opportunity
                            you have to choose here and enjoy huge discount. </p>
                        <a href="#" class="flex flex-wrap items-center text-secondary text-tiny mt-[20px]">View all
                            <svg class="ml-[10px]" width="26" height="11" viewBox="0 0 26 11"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.0877 0.69303L24.2075 5.00849H0V5.99151H24.2075L20.0877 10.307L20.7493 11L26 5.5L20.7493 0L20.0877 0.69303Z"
                                    fill="currentColor"></path>
                            </svg>
                        </a>
                        <img class="absolute bottom-[-18px] right-[5px]" src="assets/images/video/star.png"
                            loading="lazy" width="65" height="73" alt="image">

                    </div>
                </div>
                <div class="col-span-12 lg:col-span-6 text-center">
                    <div class="relative p-[20px] lg:p-[30px] bg-[#ECFAF7] inline-block rounded-[24px]">
                        <div class="scene drop-shadow-[0px_10px_20px_rgba(0,0,0,0.25)]" data-relative-input="true">
                            <img data-depth="0.1" src="assets/images/video/video.png" class="rounded-[24px]"
                                loading="lazy" width="507" height="349" alt="video image">
                        </div>
                        <a href="https://www.youtube.com/watch?v=mSC6GwizOag"
                            class="play-button bg-white text-white hover:text-primary absolute left-0 right-0 mx-auto top-1/2 -translate-y-1/2 hover:scale-105 hover:bg-primary w-[55px] h-[55px] flex 
    flex-wrap z-[1] items-center justify-center opacity-80 shadow-[0px 4px 4px rgba(0, 0, 0, 0.25)] transition-all rounded-full group
    
    before:block before:absolute  before:bg-white before:opacity-80 before:shadow-[0px 4px 4px rgba(0, 0, 0, 0.25)] hover:before:bg-primary hover:before:opacity-80 before:w-[70px] before:h-[70px] before:rounded-full before:z-[-1]
    "
                            aria-label="play button">
                            <svg width="21" height="22" viewBox="0 0 21 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path class="stroke-secondary group-hover:stroke-white"
                                    d="M1.63861 10.764V6.70324C1.63861 1.66145 5.20893 -0.403178 9.57772 2.11772L13.1024 4.14812L16.6271 6.17853C20.9959 8.69942 20.9959 12.8287 16.6271 15.3496L13.1024 17.38L9.57772 19.4104C5.20893 21.9313 1.63861 19.8666 1.63861 14.8249V10.764Z"
                                    stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Video Section End -->


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
                                <h3><a href="properties-details.html" class="font-recoleta leading-tight text-[22px] xl:text-lg text-primary">{{$item->name}}</a></h3>
                                <h4><a href="properties-details.html" class="font-light text-tiny text-secondary underline">جمهورية الامارات العربية المتحدة</a></h4>
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



    <!-- Team Section Etart-->
{{-- 
    <section class="team-section pb-[80px] lg:pb-[120px] overflow-hidden">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="mb-[30px] lg:mb-[60px] text-center">
                        <span class="text-secondary text-tiny inline-block mb-2">Our Agents</span>
                        <h2 class="font-recoleta text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize">Here
                            is our
                            Experts<span class="text-secondary">.</span></h2>
                    </div>
                </div>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-x-[30px] mb-[-30px]">
                <!-- single team start -->
                <div class="text-center group mb-[30px]">
                    <div class="relative rounded-[6px_6px_0px_0px]">
                        <a href="agent-details.html"
                            class="block relative before:absolute before:content-[''] before:inset-x-0 before:bottom-0 before:bg-[#F5F9F8] before:w-full before:h-[calc(100%_-_60px)] before:z-[-1] before:rounded-[6px_6px_0px_0px]">
                            <img src="assets/images/team/person1.png" class="w-auto h-auto block mx-auto"
                                loading="lazy" width="215" height="310" alt="Albert S. Smith">
                        </a>
                    </div>

                    <div
                        class="bg-[#FFFDFC] z-[1] drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] rounded-[0px_0px_6px_6px] px-[15px] py-[20px] border-b-[6px] border-primary before:transition-all before:duration-300 group-hover:border-secondary relative before:absolute before:left-0 before:bottom-0 before:h-0 before:w-full before:bg-primary before:z-[-1] group-hover:before:h-full">
                        <h3><a href="agent-details.html"
                                class="font-recoleta font-normal text-base text-primary group-hover:text-white">Albert S.
                                Smith</a></h3>
                        <p class="font-normal text-[14px] leading-none capitalize mt-[5px] group-hover:text-white">Real
                            Estate Agent</p>
                        <ul
                            class="inline-flex items-center justify-center absolute w-full top-[-15px] left-0 overflow-hidden">
                            <li
                                class="translate-y-[30px] group-hover:translate-y-[0] transition ease-in-out duration-300 delay-300 first:ml-0 ml-[15px]">
                                <a href="#"
                                    class="w-[26px] h-[26px] transition-all rounded-full bg-[#FFF6F0] flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-[#494949] hover:text-[#3B5998]">
                                    <svg width="7" height="12" viewBox="0 0 7 12" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.36 4.20156V3.12156C4.36 2.65356 4.468 2.40156 5.224 2.40156H6.16V0.601562H4.72C2.92 0.601562 2.2 1.78956 2.2 3.12156V4.20156H0.760002V6.00156H2.2V11.4016H4.36V6.00156H5.944L6.16 4.20156H4.36Z"
                                            fill="currentColor" />
                                    </svg>

                                </a></li>
                            <li
                                class="translate-y-[30px] group-hover:translate-y-[0] transition ease-in-out duration-500 delay-300 ml-[15px]">
                                <a href="#"
                                    class="w-[26px] h-[26px] transition-all rounded-full bg-[#FFF6F0] flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-[#494949] hover:text-[#3B5998]">
                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.6667 1.93957C13.1669 2.15783 12.6376 2.30093 12.096 2.36424C12.6645 2.0304 13.092 1.50098 13.2987 0.874908C12.76 1.18846 12.1725 1.40931 11.5607 1.52824C11.303 1.25838 10.9931 1.04383 10.6498 0.897693C10.3065 0.751554 9.93709 0.676884 9.564 0.678241C8.05333 0.678241 6.82866 1.88491 6.82866 3.37157C6.82866 3.58224 6.85266 3.78824 6.89933 3.98491C5.81571 3.93337 4.75474 3.65651 3.78411 3.172C2.81348 2.68749 1.9545 2.00596 1.26199 1.17091C1.01921 1.58051 0.891605 2.04809 0.892662 2.52424C0.893126 2.96955 1.00455 3.40773 1.21685 3.79917C1.42916 4.19061 1.73566 4.52298 2.10866 4.76624C1.67498 4.75224 1.25068 4.63646 0.869995 4.42824V4.46157C0.869995 5.76691 1.81333 6.85557 3.06333 7.10357C2.8284 7.16591 2.58638 7.1975 2.34333 7.19757C2.16666 7.19757 1.99533 7.18091 1.828 7.14757C2.00672 7.68619 2.34873 8.15578 2.80654 8.49113C3.26435 8.82648 3.81522 9.01095 4.38266 9.01891C3.40937 9.7686 2.21454 10.1736 0.985995 10.1702C0.764662 10.1702 0.547328 10.1569 0.333328 10.1329C1.5875 10.9267 3.04172 11.3471 4.52599 11.3449C9.55733 11.3449 12.308 7.24024 12.308 3.68091L12.2987 3.33224C12.8352 2.95469 13.2988 2.4828 13.6667 1.93957Z"
                                            fill="currentColor" />
                                    </svg>


                                </a></li>
                            <li
                                class="translate-y-[30px] group-hover:translate-y-[0] transition ease-in-out duration-700 delay-300 ml-[15px]">
                                <a href="#"
                                    class="w-[26px] h-[26px] transition-all rounded-full bg-[#FFF6F0] flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-[#494949] hover:text-[#3B5998]">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7 3.79646C5.22656 3.79646 3.79531 5.22771 3.79531 7.00115C3.79531 8.77458 5.22656 10.2058 7 10.2058C8.77344 10.2058 10.2047 8.77458 10.2047 7.00115C10.2047 5.22771 8.77344 3.79646 7 3.79646ZM7 9.08396C5.85312 9.08396 4.91719 8.14802 4.91719 7.00115C4.91719 5.85427 5.85312 4.91834 7 4.91834C8.14687 4.91834 9.08281 5.85427 9.08281 7.00115C9.08281 8.14802 8.14687 9.08396 7 9.08396ZM10.3359 2.91834C9.92187 2.91834 9.5875 3.25271 9.5875 3.66677C9.5875 4.08084 9.92187 4.41521 10.3359 4.41521C10.75 4.41521 11.0844 4.0824 11.0844 3.66677C11.0845 3.56845 11.0652 3.47107 11.0277 3.38021C10.9901 3.28935 10.935 3.2068 10.8654 3.13727C10.7959 3.06775 10.7134 3.01262 10.6225 2.97506C10.5316 2.93749 10.4343 2.91821 10.3359 2.91834ZM13.2469 7.00115C13.2469 6.13865 13.2547 5.28396 13.2063 4.42302C13.1578 3.42302 12.9297 2.53552 12.1984 1.80427C11.4656 1.07146 10.5797 0.844898 9.57969 0.796461C8.71719 0.748023 7.8625 0.755836 7.00156 0.755836C6.13906 0.755836 5.28437 0.748023 4.42344 0.796461C3.42344 0.844898 2.53594 1.07302 1.80469 1.80427C1.07187 2.53709 0.84531 3.42302 0.796873 4.42302C0.748435 5.28552 0.756248 6.14021 0.756248 7.00115C0.756248 7.86209 0.748435 8.71834 0.796873 9.57927C0.84531 10.5793 1.07344 11.4668 1.80469 12.198C2.5375 12.9308 3.42344 13.1574 4.42344 13.2058C5.28594 13.2543 6.14062 13.2465 7.00156 13.2465C7.86406 13.2465 8.71875 13.2543 9.57969 13.2058C10.5797 13.1574 11.4672 12.9293 12.1984 12.198C12.9312 11.4652 13.1578 10.5793 13.2063 9.57927C13.2562 8.71834 13.2469 7.86365 13.2469 7.00115ZM11.8719 10.6855C11.7578 10.9699 11.6203 11.1824 11.4 11.4011C11.1797 11.6215 10.9687 11.759 10.6844 11.873C9.8625 12.1996 7.91094 12.1261 7 12.1261C6.08906 12.1261 4.13594 12.1996 3.31406 11.8746C3.02969 11.7605 2.81719 11.623 2.59844 11.4027C2.37812 11.1824 2.24062 10.9715 2.12656 10.6871C1.80156 9.86365 1.875 7.91209 1.875 7.00115C1.875 6.09021 1.80156 4.13709 2.12656 3.31521C2.24062 3.03084 2.37812 2.81834 2.59844 2.59959C2.81875 2.38084 3.02969 2.24177 3.31406 2.12771C4.13594 1.80271 6.08906 1.87615 7 1.87615C7.91094 1.87615 9.86406 1.80271 10.6859 2.12771C10.9703 2.24177 11.1828 2.37927 11.4016 2.59959C11.6219 2.8199 11.7594 3.03084 11.8734 3.31521C12.1984 4.13709 12.125 6.09021 12.125 7.00115C12.125 7.91209 12.1984 9.86365 11.8719 10.6855Z"
                                            fill="currentColor" />
                                    </svg>
                                </a></li>
                        </ul>
                    </div>


                </div>
                <div class="text-center group mb-[30px]">
                    <div class="relative rounded-[6px_6px_0px_0px]">
                        <a href="agent-details.html"
                            class="block relative before:absolute before:content-[''] before:inset-x-0 before:bottom-0 before:bg-[#F5F9F8] before:w-full before:h-[calc(100%_-_60px)] before:z-[-1] before:rounded-[6px_6px_0px_0px]">
                            <img src="assets/images/team/person2.png" class="w-auto h-auto block mx-auto"
                                loading="lazy" width="215" height="310" alt="Amelia Margaret">
                        </a>
                    </div>

                    <div
                        class="bg-[#FFFDFC] z-[1] drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] rounded-[0px_0px_6px_6px] px-[15px] py-[20px] border-b-[6px] border-primary before:transition-all before:duration-300 group-hover:border-secondary relative before:absolute before:left-0 before:bottom-0 before:h-0 before:w-full before:bg-primary before:z-[-1] group-hover:before:h-full">
                        <h3><a href="agent-details.html"
                                class="font-recoleta font-normal text-base text-primary group-hover:text-white">Amelia
                                Margaret</a></h3>
                        <p class="font-normal text-[14px] leading-none capitalize mt-[5px] group-hover:text-white">Real
                            Estate Broker</p>
                        <ul
                            class="inline-flex items-center justify-center absolute w-full top-[-15px] left-0 overflow-hidden">
                            <li
                                class="translate-y-[30px] group-hover:translate-y-[0] transition ease-in-out duration-300 delay-300 first:ml-0 ml-[15px]">
                                <a href="#"
                                    class="w-[26px] h-[26px] transition-all rounded-full bg-[#FFF6F0] flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-[#494949] hover:text-[#3B5998]">
                                    <svg width="7" height="12" viewBox="0 0 7 12" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.36 4.20156V3.12156C4.36 2.65356 4.468 2.40156 5.224 2.40156H6.16V0.601562H4.72C2.92 0.601562 2.2 1.78956 2.2 3.12156V4.20156H0.760002V6.00156H2.2V11.4016H4.36V6.00156H5.944L6.16 4.20156H4.36Z"
                                            fill="currentColor" />
                                    </svg>

                                </a></li>
                            <li
                                class="translate-y-[30px] group-hover:translate-y-[0] transition ease-in-out duration-500 delay-300 ml-[15px]">
                                <a href="#"
                                    class="w-[26px] h-[26px] transition-all rounded-full bg-[#FFF6F0] flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-[#494949] hover:text-[#3B5998]">
                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.6667 1.93957C13.1669 2.15783 12.6376 2.30093 12.096 2.36424C12.6645 2.0304 13.092 1.50098 13.2987 0.874908C12.76 1.18846 12.1725 1.40931 11.5607 1.52824C11.303 1.25838 10.9931 1.04383 10.6498 0.897693C10.3065 0.751554 9.93709 0.676884 9.564 0.678241C8.05333 0.678241 6.82866 1.88491 6.82866 3.37157C6.82866 3.58224 6.85266 3.78824 6.89933 3.98491C5.81571 3.93337 4.75474 3.65651 3.78411 3.172C2.81348 2.68749 1.9545 2.00596 1.26199 1.17091C1.01921 1.58051 0.891605 2.04809 0.892662 2.52424C0.893126 2.96955 1.00455 3.40773 1.21685 3.79917C1.42916 4.19061 1.73566 4.52298 2.10866 4.76624C1.67498 4.75224 1.25068 4.63646 0.869995 4.42824V4.46157C0.869995 5.76691 1.81333 6.85557 3.06333 7.10357C2.8284 7.16591 2.58638 7.1975 2.34333 7.19757C2.16666 7.19757 1.99533 7.18091 1.828 7.14757C2.00672 7.68619 2.34873 8.15578 2.80654 8.49113C3.26435 8.82648 3.81522 9.01095 4.38266 9.01891C3.40937 9.7686 2.21454 10.1736 0.985995 10.1702C0.764662 10.1702 0.547328 10.1569 0.333328 10.1329C1.5875 10.9267 3.04172 11.3471 4.52599 11.3449C9.55733 11.3449 12.308 7.24024 12.308 3.68091L12.2987 3.33224C12.8352 2.95469 13.2988 2.4828 13.6667 1.93957Z"
                                            fill="currentColor" />
                                    </svg>


                                </a></li>
                            <li
                                class="translate-y-[30px] group-hover:translate-y-[0] transition ease-in-out duration-700 delay-300 ml-[15px]">
                                <a href="#"
                                    class="w-[26px] h-[26px] transition-all rounded-full bg-[#FFF6F0] flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-[#494949] hover:text-[#3B5998]">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7 3.79646C5.22656 3.79646 3.79531 5.22771 3.79531 7.00115C3.79531 8.77458 5.22656 10.2058 7 10.2058C8.77344 10.2058 10.2047 8.77458 10.2047 7.00115C10.2047 5.22771 8.77344 3.79646 7 3.79646ZM7 9.08396C5.85312 9.08396 4.91719 8.14802 4.91719 7.00115C4.91719 5.85427 5.85312 4.91834 7 4.91834C8.14687 4.91834 9.08281 5.85427 9.08281 7.00115C9.08281 8.14802 8.14687 9.08396 7 9.08396ZM10.3359 2.91834C9.92187 2.91834 9.5875 3.25271 9.5875 3.66677C9.5875 4.08084 9.92187 4.41521 10.3359 4.41521C10.75 4.41521 11.0844 4.0824 11.0844 3.66677C11.0845 3.56845 11.0652 3.47107 11.0277 3.38021C10.9901 3.28935 10.935 3.2068 10.8654 3.13727C10.7959 3.06775 10.7134 3.01262 10.6225 2.97506C10.5316 2.93749 10.4343 2.91821 10.3359 2.91834ZM13.2469 7.00115C13.2469 6.13865 13.2547 5.28396 13.2063 4.42302C13.1578 3.42302 12.9297 2.53552 12.1984 1.80427C11.4656 1.07146 10.5797 0.844898 9.57969 0.796461C8.71719 0.748023 7.8625 0.755836 7.00156 0.755836C6.13906 0.755836 5.28437 0.748023 4.42344 0.796461C3.42344 0.844898 2.53594 1.07302 1.80469 1.80427C1.07187 2.53709 0.84531 3.42302 0.796873 4.42302C0.748435 5.28552 0.756248 6.14021 0.756248 7.00115C0.756248 7.86209 0.748435 8.71834 0.796873 9.57927C0.84531 10.5793 1.07344 11.4668 1.80469 12.198C2.5375 12.9308 3.42344 13.1574 4.42344 13.2058C5.28594 13.2543 6.14062 13.2465 7.00156 13.2465C7.86406 13.2465 8.71875 13.2543 9.57969 13.2058C10.5797 13.1574 11.4672 12.9293 12.1984 12.198C12.9312 11.4652 13.1578 10.5793 13.2063 9.57927C13.2562 8.71834 13.2469 7.86365 13.2469 7.00115ZM11.8719 10.6855C11.7578 10.9699 11.6203 11.1824 11.4 11.4011C11.1797 11.6215 10.9687 11.759 10.6844 11.873C9.8625 12.1996 7.91094 12.1261 7 12.1261C6.08906 12.1261 4.13594 12.1996 3.31406 11.8746C3.02969 11.7605 2.81719 11.623 2.59844 11.4027C2.37812 11.1824 2.24062 10.9715 2.12656 10.6871C1.80156 9.86365 1.875 7.91209 1.875 7.00115C1.875 6.09021 1.80156 4.13709 2.12656 3.31521C2.24062 3.03084 2.37812 2.81834 2.59844 2.59959C2.81875 2.38084 3.02969 2.24177 3.31406 2.12771C4.13594 1.80271 6.08906 1.87615 7 1.87615C7.91094 1.87615 9.86406 1.80271 10.6859 2.12771C10.9703 2.24177 11.1828 2.37927 11.4016 2.59959C11.6219 2.8199 11.7594 3.03084 11.8734 3.31521C12.1984 4.13709 12.125 6.09021 12.125 7.00115C12.125 7.91209 12.1984 9.86365 11.8719 10.6855Z"
                                            fill="currentColor" />
                                    </svg>
                                </a></li>
                        </ul>
                    </div>


                </div>
                <div class="text-center group mb-[30px]">
                    <div class="relative rounded-[6px_6px_0px_0px]">
                        <a href="agent-details.html"
                            class="block relative before:absolute before:content-[''] before:inset-x-0 before:bottom-0 before:bg-[#F5F9F8] before:w-full before:h-[calc(100%_-_60px)] before:z-[-1] before:rounded-[6px_6px_0px_0px]">
                            <img src="assets/images/team/person3.png" class="w-auto h-auto block mx-auto"
                                loading="lazy" width="215" height="310" alt="Stephen Kelvin">
                        </a>
                    </div>

                    <div
                        class="bg-[#FFFDFC] z-[1] drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] rounded-[0px_0px_6px_6px] px-[15px] py-[20px] border-b-[6px] border-primary before:transition-all before:duration-300 group-hover:border-secondary relative before:absolute before:left-0 before:bottom-0 before:h-0 before:w-full before:bg-primary before:z-[-1] group-hover:before:h-full">
                        <h3><a href="agent-details.html"
                                class="font-recoleta font-normal text-base text-primary group-hover:text-white">Stephen
                                Kelvin</a></h3>
                        <p class="font-normal text-[14px] leading-none capitalize mt-[5px] group-hover:text-white">Real
                            Estate Agent</p>
                        <ul
                            class="inline-flex items-center justify-center absolute w-full top-[-15px] left-0 overflow-hidden">
                            <li
                                class="translate-y-[30px] group-hover:translate-y-[0] transition ease-in-out duration-300 delay-300 first:ml-0 ml-[15px]">
                                <a href="#"
                                    class="w-[26px] h-[26px] transition-all rounded-full bg-[#FFF6F0] flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-[#494949] hover:text-[#3B5998]">
                                    <svg width="7" height="12" viewBox="0 0 7 12" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.36 4.20156V3.12156C4.36 2.65356 4.468 2.40156 5.224 2.40156H6.16V0.601562H4.72C2.92 0.601562 2.2 1.78956 2.2 3.12156V4.20156H0.760002V6.00156H2.2V11.4016H4.36V6.00156H5.944L6.16 4.20156H4.36Z"
                                            fill="currentColor" />
                                    </svg>

                                </a></li>
                            <li
                                class="translate-y-[30px] group-hover:translate-y-[0] transition ease-in-out duration-500 delay-300 ml-[15px]">
                                <a href="#"
                                    class="w-[26px] h-[26px] transition-all rounded-full bg-[#FFF6F0] flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-[#494949] hover:text-[#3B5998]">
                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.6667 1.93957C13.1669 2.15783 12.6376 2.30093 12.096 2.36424C12.6645 2.0304 13.092 1.50098 13.2987 0.874908C12.76 1.18846 12.1725 1.40931 11.5607 1.52824C11.303 1.25838 10.9931 1.04383 10.6498 0.897693C10.3065 0.751554 9.93709 0.676884 9.564 0.678241C8.05333 0.678241 6.82866 1.88491 6.82866 3.37157C6.82866 3.58224 6.85266 3.78824 6.89933 3.98491C5.81571 3.93337 4.75474 3.65651 3.78411 3.172C2.81348 2.68749 1.9545 2.00596 1.26199 1.17091C1.01921 1.58051 0.891605 2.04809 0.892662 2.52424C0.893126 2.96955 1.00455 3.40773 1.21685 3.79917C1.42916 4.19061 1.73566 4.52298 2.10866 4.76624C1.67498 4.75224 1.25068 4.63646 0.869995 4.42824V4.46157C0.869995 5.76691 1.81333 6.85557 3.06333 7.10357C2.8284 7.16591 2.58638 7.1975 2.34333 7.19757C2.16666 7.19757 1.99533 7.18091 1.828 7.14757C2.00672 7.68619 2.34873 8.15578 2.80654 8.49113C3.26435 8.82648 3.81522 9.01095 4.38266 9.01891C3.40937 9.7686 2.21454 10.1736 0.985995 10.1702C0.764662 10.1702 0.547328 10.1569 0.333328 10.1329C1.5875 10.9267 3.04172 11.3471 4.52599 11.3449C9.55733 11.3449 12.308 7.24024 12.308 3.68091L12.2987 3.33224C12.8352 2.95469 13.2988 2.4828 13.6667 1.93957Z"
                                            fill="currentColor" />
                                    </svg>


                                </a></li>
                            <li
                                class="translate-y-[30px] group-hover:translate-y-[0] transition ease-in-out duration-700 delay-300 ml-[15px]">
                                <a href="#"
                                    class="w-[26px] h-[26px] transition-all rounded-full bg-[#FFF6F0] flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-[#494949] hover:text-[#3B5998]">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7 3.79646C5.22656 3.79646 3.79531 5.22771 3.79531 7.00115C3.79531 8.77458 5.22656 10.2058 7 10.2058C8.77344 10.2058 10.2047 8.77458 10.2047 7.00115C10.2047 5.22771 8.77344 3.79646 7 3.79646ZM7 9.08396C5.85312 9.08396 4.91719 8.14802 4.91719 7.00115C4.91719 5.85427 5.85312 4.91834 7 4.91834C8.14687 4.91834 9.08281 5.85427 9.08281 7.00115C9.08281 8.14802 8.14687 9.08396 7 9.08396ZM10.3359 2.91834C9.92187 2.91834 9.5875 3.25271 9.5875 3.66677C9.5875 4.08084 9.92187 4.41521 10.3359 4.41521C10.75 4.41521 11.0844 4.0824 11.0844 3.66677C11.0845 3.56845 11.0652 3.47107 11.0277 3.38021C10.9901 3.28935 10.935 3.2068 10.8654 3.13727C10.7959 3.06775 10.7134 3.01262 10.6225 2.97506C10.5316 2.93749 10.4343 2.91821 10.3359 2.91834ZM13.2469 7.00115C13.2469 6.13865 13.2547 5.28396 13.2063 4.42302C13.1578 3.42302 12.9297 2.53552 12.1984 1.80427C11.4656 1.07146 10.5797 0.844898 9.57969 0.796461C8.71719 0.748023 7.8625 0.755836 7.00156 0.755836C6.13906 0.755836 5.28437 0.748023 4.42344 0.796461C3.42344 0.844898 2.53594 1.07302 1.80469 1.80427C1.07187 2.53709 0.84531 3.42302 0.796873 4.42302C0.748435 5.28552 0.756248 6.14021 0.756248 7.00115C0.756248 7.86209 0.748435 8.71834 0.796873 9.57927C0.84531 10.5793 1.07344 11.4668 1.80469 12.198C2.5375 12.9308 3.42344 13.1574 4.42344 13.2058C5.28594 13.2543 6.14062 13.2465 7.00156 13.2465C7.86406 13.2465 8.71875 13.2543 9.57969 13.2058C10.5797 13.1574 11.4672 12.9293 12.1984 12.198C12.9312 11.4652 13.1578 10.5793 13.2063 9.57927C13.2562 8.71834 13.2469 7.86365 13.2469 7.00115ZM11.8719 10.6855C11.7578 10.9699 11.6203 11.1824 11.4 11.4011C11.1797 11.6215 10.9687 11.759 10.6844 11.873C9.8625 12.1996 7.91094 12.1261 7 12.1261C6.08906 12.1261 4.13594 12.1996 3.31406 11.8746C3.02969 11.7605 2.81719 11.623 2.59844 11.4027C2.37812 11.1824 2.24062 10.9715 2.12656 10.6871C1.80156 9.86365 1.875 7.91209 1.875 7.00115C1.875 6.09021 1.80156 4.13709 2.12656 3.31521C2.24062 3.03084 2.37812 2.81834 2.59844 2.59959C2.81875 2.38084 3.02969 2.24177 3.31406 2.12771C4.13594 1.80271 6.08906 1.87615 7 1.87615C7.91094 1.87615 9.86406 1.80271 10.6859 2.12771C10.9703 2.24177 11.1828 2.37927 11.4016 2.59959C11.6219 2.8199 11.7594 3.03084 11.8734 3.31521C12.1984 4.13709 12.125 6.09021 12.125 7.00115C12.125 7.91209 12.1984 9.86365 11.8719 10.6855Z"
                                            fill="currentColor" />
                                    </svg>
                                </a></li>
                        </ul>
                    </div>


                </div>
                <div class="text-center group mb-[30px]">
                    <div class="relative rounded-[6px_6px_0px_0px]">
                        <a href="agent-details.html"
                            class="block relative before:absolute before:content-[''] before:inset-x-0 before:bottom-0 before:bg-[#F5F9F8] before:w-full before:h-[calc(100%_-_60px)] before:z-[-1] before:rounded-[6px_6px_0px_0px]">
                            <img src="assets/images/team/person4.png" class="w-auto h-auto block mx-auto"
                                loading="lazy" width="215" height="310" alt=" Michael Richard">
                        </a>
                    </div>

                    <div
                        class="bg-[#FFFDFC] z-[1] drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] rounded-[0px_0px_6px_6px] px-[15px] py-[20px] border-b-[6px] border-primary before:transition-all before:duration-300 group-hover:border-secondary relative before:absolute before:left-0 before:bottom-0 before:h-0 before:w-full before:bg-primary before:z-[-1] group-hover:before:h-full">
                        <h3><a href="agent-details.html"
                                class="font-recoleta font-normal text-base text-primary group-hover:text-white"> Michael
                                Richard</a></h3>
                        <p class="font-normal text-[14px] leading-none capitalize mt-[5px] group-hover:text-white">Real
                            Estate Broker</p>
                        <ul
                            class="inline-flex items-center justify-center absolute w-full top-[-15px] left-0 overflow-hidden">
                            <li
                                class="translate-y-[30px] group-hover:translate-y-[0] transition ease-in-out duration-300 delay-300 first:ml-0 ml-[15px]">
                                <a href="#"
                                    class="w-[26px] h-[26px] transition-all rounded-full bg-[#FFF6F0] flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-[#494949] hover:text-[#3B5998]">
                                    <svg width="7" height="12" viewBox="0 0 7 12" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.36 4.20156V3.12156C4.36 2.65356 4.468 2.40156 5.224 2.40156H6.16V0.601562H4.72C2.92 0.601562 2.2 1.78956 2.2 3.12156V4.20156H0.760002V6.00156H2.2V11.4016H4.36V6.00156H5.944L6.16 4.20156H4.36Z"
                                            fill="currentColor" />
                                    </svg>

                                </a></li>
                            <li
                                class="translate-y-[30px] group-hover:translate-y-[0] transition ease-in-out duration-500 delay-300 ml-[15px]">
                                <a href="#"
                                    class="w-[26px] h-[26px] transition-all rounded-full bg-[#FFF6F0] flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-[#494949] hover:text-[#3B5998]">
                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.6667 1.93957C13.1669 2.15783 12.6376 2.30093 12.096 2.36424C12.6645 2.0304 13.092 1.50098 13.2987 0.874908C12.76 1.18846 12.1725 1.40931 11.5607 1.52824C11.303 1.25838 10.9931 1.04383 10.6498 0.897693C10.3065 0.751554 9.93709 0.676884 9.564 0.678241C8.05333 0.678241 6.82866 1.88491 6.82866 3.37157C6.82866 3.58224 6.85266 3.78824 6.89933 3.98491C5.81571 3.93337 4.75474 3.65651 3.78411 3.172C2.81348 2.68749 1.9545 2.00596 1.26199 1.17091C1.01921 1.58051 0.891605 2.04809 0.892662 2.52424C0.893126 2.96955 1.00455 3.40773 1.21685 3.79917C1.42916 4.19061 1.73566 4.52298 2.10866 4.76624C1.67498 4.75224 1.25068 4.63646 0.869995 4.42824V4.46157C0.869995 5.76691 1.81333 6.85557 3.06333 7.10357C2.8284 7.16591 2.58638 7.1975 2.34333 7.19757C2.16666 7.19757 1.99533 7.18091 1.828 7.14757C2.00672 7.68619 2.34873 8.15578 2.80654 8.49113C3.26435 8.82648 3.81522 9.01095 4.38266 9.01891C3.40937 9.7686 2.21454 10.1736 0.985995 10.1702C0.764662 10.1702 0.547328 10.1569 0.333328 10.1329C1.5875 10.9267 3.04172 11.3471 4.52599 11.3449C9.55733 11.3449 12.308 7.24024 12.308 3.68091L12.2987 3.33224C12.8352 2.95469 13.2988 2.4828 13.6667 1.93957Z"
                                            fill="currentColor" />
                                    </svg>


                                </a></li>
                            <li
                                class="translate-y-[30px] group-hover:translate-y-[0] transition ease-in-out duration-700 delay-300 ml-[15px]">
                                <a href="#"
                                    class="w-[26px] h-[26px] transition-all rounded-full bg-[#FFF6F0] flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-[#494949] hover:text-[#3B5998]">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7 3.79646C5.22656 3.79646 3.79531 5.22771 3.79531 7.00115C3.79531 8.77458 5.22656 10.2058 7 10.2058C8.77344 10.2058 10.2047 8.77458 10.2047 7.00115C10.2047 5.22771 8.77344 3.79646 7 3.79646ZM7 9.08396C5.85312 9.08396 4.91719 8.14802 4.91719 7.00115C4.91719 5.85427 5.85312 4.91834 7 4.91834C8.14687 4.91834 9.08281 5.85427 9.08281 7.00115C9.08281 8.14802 8.14687 9.08396 7 9.08396ZM10.3359 2.91834C9.92187 2.91834 9.5875 3.25271 9.5875 3.66677C9.5875 4.08084 9.92187 4.41521 10.3359 4.41521C10.75 4.41521 11.0844 4.0824 11.0844 3.66677C11.0845 3.56845 11.0652 3.47107 11.0277 3.38021C10.9901 3.28935 10.935 3.2068 10.8654 3.13727C10.7959 3.06775 10.7134 3.01262 10.6225 2.97506C10.5316 2.93749 10.4343 2.91821 10.3359 2.91834ZM13.2469 7.00115C13.2469 6.13865 13.2547 5.28396 13.2063 4.42302C13.1578 3.42302 12.9297 2.53552 12.1984 1.80427C11.4656 1.07146 10.5797 0.844898 9.57969 0.796461C8.71719 0.748023 7.8625 0.755836 7.00156 0.755836C6.13906 0.755836 5.28437 0.748023 4.42344 0.796461C3.42344 0.844898 2.53594 1.07302 1.80469 1.80427C1.07187 2.53709 0.84531 3.42302 0.796873 4.42302C0.748435 5.28552 0.756248 6.14021 0.756248 7.00115C0.756248 7.86209 0.748435 8.71834 0.796873 9.57927C0.84531 10.5793 1.07344 11.4668 1.80469 12.198C2.5375 12.9308 3.42344 13.1574 4.42344 13.2058C5.28594 13.2543 6.14062 13.2465 7.00156 13.2465C7.86406 13.2465 8.71875 13.2543 9.57969 13.2058C10.5797 13.1574 11.4672 12.9293 12.1984 12.198C12.9312 11.4652 13.1578 10.5793 13.2063 9.57927C13.2562 8.71834 13.2469 7.86365 13.2469 7.00115ZM11.8719 10.6855C11.7578 10.9699 11.6203 11.1824 11.4 11.4011C11.1797 11.6215 10.9687 11.759 10.6844 11.873C9.8625 12.1996 7.91094 12.1261 7 12.1261C6.08906 12.1261 4.13594 12.1996 3.31406 11.8746C3.02969 11.7605 2.81719 11.623 2.59844 11.4027C2.37812 11.1824 2.24062 10.9715 2.12656 10.6871C1.80156 9.86365 1.875 7.91209 1.875 7.00115C1.875 6.09021 1.80156 4.13709 2.12656 3.31521C2.24062 3.03084 2.37812 2.81834 2.59844 2.59959C2.81875 2.38084 3.02969 2.24177 3.31406 2.12771C4.13594 1.80271 6.08906 1.87615 7 1.87615C7.91094 1.87615 9.86406 1.80271 10.6859 2.12771C10.9703 2.24177 11.1828 2.37927 11.4016 2.59959C11.6219 2.8199 11.7594 3.03084 11.8734 3.31521C12.1984 4.13709 12.125 6.09021 12.125 7.00115C12.125 7.91209 12.1984 9.86365 11.8719 10.6855Z"
                                            fill="currentColor" />
                                    </svg>
                                </a></li>
                        </ul>
                    </div>


                </div>

                <!-- single team end-->
            </div>
        </div>
    </section> --}}

    <!-- Team Section End-->



    <!-- Testimonial carousel Start -->

    <section class="testimonial-section pb-[80px] lg:pb-[120px] bg-center bg-no-repeat bg-white relative z-10"
        style="background-image: url(assets/images/testimonial/pattern.png);">
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
                                        <p class="text-primary">من السهل جدًا على كل شخص شراء أو بيع أو استئجار عقار
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
                                        <p class="text-primary">
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
                                        <p class="text-primary">فعلا شركه قويه جدا جدا لقد تمكنت من العثور علي منزل بسرعه رهيبه .</p>
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
    <section class="pt-[80px] lg:pt-[120px]">
        <div class="container">
            <div class="grid grid-cols-1">
                <div class="col-span">
                    <div
                        class="flex flex-wrap items-center justify-between py-[30px] xl:py-[40px] px-[30px] xl:px-[55px] shadow-[0px_10px_20px_rgba(196,196,196,0.5)] rounded-[15px] border border-[rgba(1,100,80,0.25)] bg-white mb-[80px] lg:mb-[-75px]">
                        <div class="w-full lg:w-auto">
                            <h3
                                class="font-recoleta text-primary text-[24px] sm:text-[30px] xl:text-[36px] leading-[1.277] mb-[10px]">
                                هل أنت مالك منزل؟</h3>
                            <p class="text-secondary leading-[1.5] tracking-[0.03em]">ضع عنوان بريدك الإلكتروني وأدرج في القائمة.
                                .</p>
                        </div>
                        <div class="w-full lg:w-auto mt-5 lg:mt-0">
                            <form id="mc-form" action="#" class="relative w-full">
                                <input id="mc-email"
                                    class="font-light text-primary leading-[1.75] opacity-100 border border-[#FF6500] w-full lg:w-[395px] xl:w-[495px] h-[60px] rounded-[10px] py-[15px] pl-[15px] pr-[15px] sm:pr-[135px] focus:border-primary focus:outline-none border-opacity-60 placeholder:text-primary"
                                    type="text" placeholder="Enter your email here...">
                                <button id="mc-submit" type="submit"
                                    class="text-white font-medium text-[16px] leading-none tracking-[0.02em] bg-primary py-[15px] px-[20px] mt-5 sm:mt-0 rounded-[10px] hover:bg-secondary transition-all sm:absolute sm:right-[5px] sm:top-1/2 sm:-translate-y-1/2">احصل علي القائمه
                                    </button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success text-green-400"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error text-red-600"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')

@endsection

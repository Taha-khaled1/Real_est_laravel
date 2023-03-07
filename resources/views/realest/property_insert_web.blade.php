@extends('layouts.master_web')
@section('css')

@section('title')
    اضافة عقار
@stop
@endsection

@section('content')


<section class="bg-no-repeat bg-center bg-cover bg-[#FFF6F0] h-[350px] lg:h-[513px] xl:h-[650px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[70%]" style="background-image: url('assets/images/breadcrumb/bg-1.png');">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="max-w-[700px]  mx-auto text-center text-white relative z-[1]">
                    <div class="mb-5"><span class="text-base block">Property ADD</span></div>
                    <h1 class="font-recoleta text-[32px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl">
                        Add Property
                    </h1>

                    <p class="text-base mt-5 max-w-[500px] mx-auto text-center">
                        Huge number of propreties availabe here for buy and sell
                        also you can find here co-living property as you like
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>







        <!-- create agency Etart-->

        <div class="pt-[80px] lg:pt-[120px] add-properties-form-select">
            <div class="container">
                <form action="#">

                    <div class="grid grid-cols-12 gap-x-[30px]">

                        <div class="mb-[45px] col-span-12 md:col-span-8">
                            <label class="text-white" class="mb-[20px] font-recoleta text-[18px] leading-none block text-primary" for="property-title"> Property
                                Title</label>
                            <input id="property-title" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="text" required placeholder="Agency Title">
                        </div>

                        <div class="mb-[45px] col-span-12 md:col-span-4">
                            <label class="mb-[20px] font-recoleta text-[18px] leading-none block text-primary" for="Price">Price</label>
                            <div class="relative">
                            <input id="property-title"  class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="numbe requiredr" placeholder="Agency Title">
                             
                            </div>
                        </div>


                        <div class="mb-[45px] col-span-12">
                            <label class="mb-[20px] font-recoleta text-[18px] leading-none block text-primary" for="textarea">Property
                                Description</label>
                            <textarea class="h-[196px] xl:h-[360px] font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] resize-none" name="textarea" id="textarea" cols="30" rows="10" placeholder="Write you text here"></textarea>
                        </div>

                    </div>
                    

                    <div class="grid grid-cols-12 gap-x-[30px]">

                        <div class="col-span-12">
                            <label class="mb-[20px] font-recoleta text-[18px] leading-none block text-primary" for="Location">Location</label>
                        </div>

                        <div class="mb-[45px] col-span-12 md:col-span-6">
                            <input id="Location" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="text" required placeholder="Address line 1">
                        </div>

                        <div class="mb-[45px] col-span-12 md:col-span-6">
                            <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="text" required placeholder="Address line 2">
                        </div>

                        <div class="mb-[45px] col-span-12 md:col-span-6">
                            <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="text" required placeholder="City">
                        </div>

                        <div class="mb-[45px] col-span-12 md:col-span-6">
                            <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="text" required placeholder="Zip code">
                        </div>

                    </div>



                    <div class="grid grid-cols-12 gap-x-[30px]">

                        <div class="mb-[45px] col-span-12 md:col-span-6">
                            <label class="mb-[20px] font-recoleta text-[18px] leading-none block text-primary" for="PropertyType1">Property
                                Type</label>

                            <div class="relative">
                                <select class="nice-select form-select" id="PropertyType1">
                                    <option value="0">Duplex Villa</option>
                                    <option value="1">Villa</option>
                                    <option value="2">Duplex</option>
                                </select>
                            </div>

                        </div>

                        <div class="mb-[45px] col-span-12 md:col-span-6">
                            <label class="mb-[20px] font-recoleta text-[18px] leading-none block text-primary" for="PropertyStatus1">Property
                                Status</label>

                            <div class="relative">
                                <select class="nice-select form-select" id="PropertyStatus1">
                                    <option value="0">Sale</option>
                                    <option value="1">High price</option>
                                    <option value="2">Low price</option>
                                </select>
                            </div>

                        </div>

                    </div>

                    <div class="grid grid-cols-12 gap-x-[30px]">
                        <div class="col-span-12">
                            <label class="mb-[20px] font-recoleta text-[18px] leading-none block text-primary" for="Propertyinfo1">Property
                                info</label>
                        </div>

                    </div>


                    <div class="grid grid-cols-12 gap-x-[30px]">
                        <div class="mb-[45px] col-span-12 md:col-span-6">
                            <input id="Propertyinfo1" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="text" required placeholder="Area(sqft)">
                        </div>

                        <div class="mb-[45px] col-span-12 md:col-span-6">
                            <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="text" required placeholder="Number of  Bedroom">
                        </div>

                        <div class="mb-[45px] col-span-12 md:col-span-6">
                            <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="text" required placeholder="Number of Bathroom">
                        </div>

                        <div class="mb-[45px] col-span-12 md:col-span-6">
                            <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="text" required placeholder="Number of Garage">
                        </div>

                    </div>


                    <div class="grid grid-cols-12 gap-x-[30px]">
                        <div class="mb-[45px] col-span-12">

                            <label class="mb-[20px] font-recoleta text-[18px] leading-none block text-primary">Add Images</label>
                            <div class="py-[35px] px-[15px] flex flex-wrap items-center justify-center text-center border border-primary border-opacity-60 rounded-[8px]">
                                <div class="relative">
                                    <input class="absolute inset-0 z-[0] opacity-0 w-full" type="file" name="Images" id="Images">
                                    <label for="Images" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[30px] py-[12px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all flex flex-wrap items-center justify-center cursor-pointer"> <svg class="mr-[5px]" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.5853 8.39666C21.4868 8.25357 21.3542 8.1373 21.1995 8.05834C21.0448 7.97938 20.8729 7.94023 20.6992 7.94444H6.82698C6.53428 7.95684 6.25076 8.05025 6.00799 8.21425C5.76523 8.37825 5.57275 8.60641 5.45198 8.87333C5.44998 8.90181 5.44998 8.9304 5.45198 8.95888L3.66753 15.2778V4.27777H7.63365L9.22865 6.47166C9.28554 6.54951 9.36004 6.6128 9.44607 6.65635C9.53211 6.69989 9.62722 6.72246 9.72365 6.72221H19.5564C19.5564 6.39806 19.4277 6.08718 19.1984 5.85797C18.9692 5.62876 18.6584 5.49999 18.3342 5.49999H10.0353L8.62365 3.55666C8.50987 3.40095 8.36085 3.27438 8.18879 3.18728C8.01673 3.10019 7.8265 3.05505 7.63365 3.05555H3.66753C3.34338 3.05555 3.0325 3.18432 2.80329 3.41353C2.57408 3.64274 2.44531 3.95361 2.44531 4.27777V18.1439C2.45485 18.3638 2.55062 18.5711 2.71189 18.721C2.87316 18.8708 3.08695 18.9511 3.30698 18.9444H18.542C18.6783 18.9499 18.8126 18.9095 18.9234 18.8297C19.0341 18.75 19.115 18.6355 19.1531 18.5044L21.7136 9.27666C21.7614 9.12999 21.7747 8.97428 21.7524 8.82164C21.7302 8.66901 21.673 8.52357 21.5853 8.39666ZM18.0592 17.7222H4.21753L6.58865 9.28277C6.64651 9.20822 6.72869 9.15632 6.82087 9.1361H20.467L18.0592 17.7222Z" fill="#FAFAFA" />
                                        </svg> Add Images</label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-[45px] col-span-12">

                            <label class="mb-[20px] font-recoleta text-[18px] leading-none block text-primary">Add Videos</label>
                            <div class="py-[35px] px-[15px] flex flex-wrap items-center justify-center text-center border border-primary border-opacity-60 rounded-[8px]">
                                <div class="relative">
                                    <input class="absolute inset-0 z-[0] opacity-0 w-full" type="file" name="Videos" id="Videos">
                                    <label for="Videos" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[30px] py-[12px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all flex flex-wrap items-center justify-center cursor-pointer">

                                        <svg class="mr-[5px]" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.5853 8.39666C21.4868 8.25357 21.3542 8.1373 21.1995 8.05834C21.0448 7.97938 20.8729 7.94023 20.6992 7.94444H6.82698C6.53428 7.95684 6.25076 8.05025 6.00799 8.21425C5.76523 8.37825 5.57275 8.60641 5.45198 8.87333C5.44998 8.90181 5.44998 8.9304 5.45198 8.95888L3.66753 15.2778V4.27777H7.63365L9.22865 6.47166C9.28554 6.54951 9.36004 6.6128 9.44607 6.65635C9.53211 6.69989 9.62722 6.72246 9.72365 6.72221H19.5564C19.5564 6.39806 19.4277 6.08718 19.1984 5.85797C18.9692 5.62876 18.6584 5.49999 18.3342 5.49999H10.0353L8.62365 3.55666C8.50987 3.40095 8.36085 3.27438 8.18879 3.18728C8.01673 3.10019 7.8265 3.05505 7.63365 3.05555H3.66753C3.34338 3.05555 3.0325 3.18432 2.80329 3.41353C2.57408 3.64274 2.44531 3.95361 2.44531 4.27777V18.1439C2.45485 18.3638 2.55062 18.5711 2.71189 18.721C2.87316 18.8708 3.08695 18.9511 3.30698 18.9444H18.542C18.6783 18.9499 18.8126 18.9095 18.9234 18.8297C19.0341 18.75 19.115 18.6355 19.1531 18.5044L21.7136 9.27666C21.7614 9.12999 21.7747 8.97428 21.7524 8.82164C21.7302 8.66901 21.673 8.52357 21.5853 8.39666ZM18.0592 17.7222H4.21753L6.58865 9.28277C6.64651 9.20822 6.72869 9.15632 6.82087 9.1361H20.467L18.0592 17.7222Z" fill="#FAFAFA" />
                                        </svg> Add Videos

                                    </label>

                                </div>


                            </div>
                        </div>

                    </div>

                    <section>
    <div class="container">
        <div class="grid grid-cols-12 gap-x-[30px] mb-[-45px]">

            <div class="col-span-12 md:col-span-6 mb-[45px]">
                <h3 class="mb-[40px] font-recoleta text-[18px] leading-none  text-primary">Property Aminities
                </h3>
                <form action="/action_page.php" method="get" class="custom-check">
                    <ul class="mb-[-30px] list-none text-[15px] lg:text-[16px] flex flex-wrap">
                        <li class="mb-[30px] capitalize w-1/2">
                            <input type="checkbox" id="checkbox" name="checkbox">
                            <label class="text-white" for="checkbox">Air Conditioning</label>
                        </li>
                        <li class="mb-[30px] capitalize w-1/2">
                            <input type="checkbox" id="checkbox2" name="checkbox2">
                            <label class="text-white" for="checkbox2">Bedding</label>


                        </li>
                        <li class="mb-[30px] capitalize w-1/2">
                            <input type="checkbox" id="checkbox3" name="checkbox3">
                            <label class="text-white" for="checkbox3">Balcony</label>

                        </li>
                        <li class="mb-[30px] capitalize w-1/2">
                            <input type="checkbox" id="checkbox4" name="checkbox4">
                            <label class="text-white" for="checkbox4"> ACable TV</label>


                        </li>
                        <li class="mb-[30px] capitalize w-1/2">
                            <input type="checkbox" id="checkbox5" name="checkbox5">
                            <label class="text-white" for="checkbox5">Oven</label>

                        </li>
                        <li class="mb-[30px] capitalize w-1/2">
                            <input type="checkbox" id="checkbox6" name="checkbox6">
                            <label class="text-white" for="checkbox6">Internet</label>
                        </li>

                        <li class="mb-[30px] capitalize w-1/2">

                            <input type="checkbox" id="checkbox7" name="checkbox7">
                            <label class="text-white" for="checkbox7">Parking</label>

                        </li>
                        <li class="mb-[30px] capitalize w-1/2">
                            <input type="checkbox" id="checkbox8" name="checkbox8">
                            <label class="text-white" for="checkbox8">Lift</label>

                        </li>
                        <li class="mb-[30px] capitalize w-1/2">
                            <input type="checkbox" id="checkbox9" name="checkbox9">
                            <label class="text-white" for="checkbox9">Pool</label>

                        </li>
                        <li class="mb-[30px] capitalize w-1/2">
                            <input type="checkbox" id="checkbox10" name="checkbox10">
                            <label class="text-white" for="checkbox10">Dishwasher</label>

                        </li>
                        <li class="mb-[30px] capitalize w-1/2">

                            <input type="checkbox" id="checkbox11" name="checkbox11">
                            <label class="text-white" for="checkbox11"> Washing Machine</label>


                        </li>
                        <li class="mb-[30px] capitalize w-1/2">
                            <input type="checkbox" id="checkbox12" name="checkbox12">
                            <label class="text-white" for="checkbox12">Toaster</label>

                        </li>


                    </ul>
                </form>

                <div class="mt-[50px] lg:mt-[80px]">
                    <button class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[40px] py-[15px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">
                        Add Property</button>
                </div>
            </div>

            <div class="col-span-12 md:col-span-6 mb-[45px]">
                <h3 class="mb-[40px] font-recoleta text-[18px] leading-none  text-primary">Place on Map
                </h3>

                <div class="h-[350px] rounded-[6px] overflow-hidden">
                    <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4814229.011985735!2d-65.89121968758322!3d-7.7486900084225026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91e8605342744385%3A0x3d3c6dc1394a7fc7!2sAmazon%20Rainforest!5e0!3m2!1sen!2sbd!4v1644813708270!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

                </form>
            </div>
        </div>








@endsection
@section('js')

@endsection
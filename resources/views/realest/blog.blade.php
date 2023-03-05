@extends('layouts.master_web')
@section('css')
@endsection
@section('title')
    المدونه
@stop


@section('content')


 


    <section class="bg-no-repeat bg-center bg-cover bg-[#FFF6F0] h-[350px] lg:h-[513px] xl:h-[650px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[70%]" style="background-image: url('{{ URL::asset('sub_screen.jpg') }}');">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="max-w-[700px]  mx-auto text-center text-white relative z-[1]">
                        <div class="mb-5"><span class="text-base block">المدونه</span></div>
                        <h1 class="font-recoleta text-[32px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl">
                            كل ما عليك معرفته عن تجارة العقارات في الامارات
                        </h1>

                        <p class="text-base mt-5 max-w-[500px] mx-auto text-center">
                            تَعِد الامارات المقيمين فيها ببحر غني بالفرص الذهبية على كافة الأصعدة، ولا سيما العقارية منها، إذ تقدم العديد من التسهيلات التي تساعدهم في ازدهار أعمالهم واقتناص الفرص المناسبة. هذا وتحتل الامارات مكانةً متقدمة بين أفضل دول العالم للاستثمار العقاري، ويُعزى ذلك للظروف المناسبة للاستثمار والقوانين المعمول بها التي من شأنها الحد من العقبات والصعوبات التي قد تواجه أي مستثمر أو وكيل عقاري يفكر في تجارة العقارات في الامارات
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero section end -->

    <!-- Blog Section Start  -->

    <section class="blog-section pt-[80px] lg:pt-[120px]">
        <div class="container">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-[30px] gap-y-[40px]">



@foreach ($blogs as $item)
    
<div class="post-item">
    <a href="blog-details.html" class="block overflow-hidden rounded-[6px] mb-[35px]">
        <img class="w-full h-full" src="{{ URL::asset($item->image) }}" width="370" height="270" loading="lazy" alt="Tip’s about Real Estate Recent Conditions from Agent.">
    </a>
    <div>
        <span class="block leading-none font-normal text-[14px] text-secondary mb-[5px] relative before:absolute before:left-0 before:top-1/2 -translate-y-1/2 before:bg-secondary before:content-[''] before:w-[3px] before:h-[3px] before:rounded-full pl-[10px]"> {{ $item->created_at->locale('ar')->diffForHumans() }}</span>
        <h3><a href="blog-details.html" class="font-recoleta text-[22px] xl:text-[27px] leading-[1.285] text-primary block mb-[10px] hover:text-secondary transition-all">{{ $item->title}}</a></h3>
        <p class="font-light text-[#494949] text-[16px] leading-[1.75]">{{ \Illuminate\Support\Str::limit($item->content, 100, '...') }}</p>
    </div>
</div>



@endforeach








            </div>
            <div class="grid grid-cols-12 mt-[50px] gap-x-[30px]">
                <div class="col-span-12">
                    <ul class="pagination flex flex-wrap items-center justify-center">

                        <li class="mx-2">
                            <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] bg-primary rounded-full text-orange leading-none transition-all hover:bg-secondary text-white text-[12px]" href="#">
                                <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(.clip0_876_580)">
                                        <path d="M5.8853 10.0592C5.7326 10.212 5.48474 10.212 5.33204 10.0592L0.636322 5.36134C0.48362 5.20856 0.48362 4.96059 0.636322 4.80782L5.33204 0.109909C5.48749 -0.0403413 5.73535 -0.0359829 5.8853 0.119544C6.03181 0.271171 6.03181 0.511801 5.8853 0.663428L1.46633 5.08446L5.8853 9.50573C6.03823 9.65873 6.03823 9.90648 5.8853 10.0592Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath class="clip0_876_580">
                                            <rect width="5.47826" height="10.1739" fill="white" transform="matrix(-1 0 0 1 6 0)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </li>

                        <li class="mx-2">
                            <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] leading-none hover:text-secondary" href="#">1</a>
                        </li>

                        <li class="mx-2">
                            <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] leading-none hover:text-secondary" href="#">2</a>
                        </li>

                        <li class="mx-2">
                            <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] leading-none hover:text-secondary" href="#">3</a>
                        </li>

                        <li class="mx-2">
                            <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] leading-none hover:text-secondary" href="#">4</a>
                        </li>

                        <li class="mx-2">
                            <span>---</span>
                        </li>

                        <li class="mx-2">
                            <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] leading-none hover:text-secondary" href="#">25</a>
                        </li>

                        <li class="mx-2">
                            <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] bg-primary rounded-full text-orange leading-none transition-all hover:bg-secondary text-white text-[12px]" href="#">
                                <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(.clip0_876_576)">
                                        <path d="M0.114699 10.0592C0.267401 10.212 0.515257 10.212 0.667959 10.0592L5.36368 5.36134C5.51638 5.20856 5.51638 4.96059 5.36368 4.80782L0.667959 0.109909C0.512505 -0.0403413 0.26465 -0.0359829 0.114699 0.119544C-0.031813 0.271171 -0.031813 0.511801 0.114699 0.663428L4.53367 5.08446L0.114699 9.50573C-0.038233 9.65873 -0.038233 9.90648 0.114699 10.0592Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath class="clip0_876_576">
                                            <rect width="5.47826" height="10.1739" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </li>
                    </ul>


                </div>
            </div>


        </div>
    </section>
    <!-- Blog Section End  -->


   
    <!-- News Letter section End -->


@endsection

@section('js')

@endsection
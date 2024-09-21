@extends('components.main')

@section('content')
    {{-- HOME BANNER SLIDER --}}
    <!-- Slider Container -->
    <div class="relative w-full h-auto lg:h-full md:h-[40rem] overflow-hidden">
        <!-- Slider Wrapper -->
        <div class="relative w-full h-full flex items-center justify-center overflow-hidden">
            <!-- Slides Wrapper -->
            <div id="sliderWrapper" class="slider-wrapper flex transition-transform duration-700 ease-in-out">
                <!-- Slide 1 -->
                <div class="slider-slide w-full h-full flex-shrink-0 relative">
                    <a href="{{ route('gold') }}"><img src="{{ asset('asset/img/banner') }}" alt="Diamond Collection"
                            class="w-full h-full object-cover"></a>
                    {{-- <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent flex items-center justify-center">
                    <div class="text-center text-white p-4 md:p-10">
                        <h1 class="text-xl md:text-3xl lg:text-5xl font-bold drop-shadow-lg">Exclusive Diamond Collection</h1>
                        <p class="mt-2 md:mt-4 text-xs md:text-sm lg:text-lg">Elegant and Timeless Pieces</p>
                        <button class="mt-4 px-4 py-2 bg-[#601042] hover:bg-[#501032] text-white text-xs md:text-sm lg:text-lg rounded-full transition duration-300">Shop Now</button>
                    </div>
                </div> --}}
                </div>

                <!-- Slide 2 -->
                <div class="slider-slide w-full h-full flex-shrink-0 relative">
                    <a href="{{ route('gold') }}"><img src="{{ asset('asset/img/banner2.webp') }}"
                            alt="Bridal Jewellery Collection" class="w-full h-full object-cover"></a>
                    {{-- <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent flex items-center justify-center">
                    <div class="text-center text-white p-4 md:p-10">
                        <h1 class="text-xl md:text-3xl lg:text-5xl font-bold drop-shadow-lg">Bridal Jewellery Collection</h1>
                        <p class="mt-2 md:mt-4 text-xs md:text-sm lg:text-lg">Perfect for Your Special Day</p>
                        <button class="mt-4 px-4 py-2 bg-[#601042] hover:bg-[#501032] text-white text-xs md:text-sm lg:text-lg rounded-full transition duration-300">Discover More</button>
                    </div>
                </div> --}}
                </div>

                <!-- Slide 3 -->
                <div class="slider-slide w-full h-full flex-shrink-0 relative">
                    <a href="{{ route('gold') }}"><img src="{{ asset('asset/img/banner3.webp') }}"
                            alt="Luxury Gold Jewellery" class="w-full h-full object-cover"></a>
                    {{-- <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent flex items-center justify-center">
                    <div class="text-center text-white p-4 md:p-10">
                        <h1 class="text-xl md:text-3xl lg:text-5xl font-bold drop-shadow-lg">Luxury Gold Jewellery</h1>
                        <p class="mt-2 md:mt-4 text-xs md:text-sm lg:text-lg">Handcrafted with Perfection</p>
                        <button class="mt-4 px-4 py-2 bg-[#601042] hover:bg-[#501032] text-white text-xs md:text-sm lg:text-lg rounded-full transition duration-300">Browse Now</button>
                    </div>
                </div> --}}
                </div>
            </div>

            <!-- Pagination -->
            <div class="slider-pagination absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <button class="pagination-dot bg-white rounded-full w-3 h-3" data-index="0"></button>
                <button class="pagination-dot bg-white rounded-full w-3 h-3" data-index="1"></button>
                <button class="pagination-dot bg-white rounded-full w-3 h-3" data-index="2"></button>
            </div>
        </div>
    </div>


    {{-- button slider --}}

    <!-- Tab Buttons -->
    <div class="tab-buttons flex justify-center mt-8">
        <button data-tab="slider1"
            class="tab-btn active-tab text-3xl font-light text-center mb-2 pr-2 hover:text-[#601042] p-2">New Ins</button>
        <div class="w-px h-10 mx-2 bg-gray-800"></div>

        <button data-tab="slider2" class="tab-btn text-3xl font-light text-center mb-2 px-2 hover:text-[#601042] p-2">Best
            Sellers</button>
    </div>

    <p class="text-center text-gray-600 mb-8">Freshen up your look!</p>
    <!-- Slider 1 -->
    <div id="slider1" class="tab-content mx-auto">
        <div class="glide" id="glide1">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <!-- Example Slide -->

                    <!-- Product cards -->
                    <div class="item">
                        <div class="w-full lg:w-full flex-shrink-0 p-2">
                            <div class="bg-white shadow-lg rounded-lg overflow-hidden border border-gray-200">
                                <div class="relative">
                                    <a href="{{ route('productdetail') }}"><img src="{{ asset('asset/img/new1.webp') }}"
                                            alt="Maharashtrian Himali Gold Nath" class="w-full h-60 object-cover"
                                            loading="lazy"></a>
                                </div>
                                <div class="p-4">
                                    <h2 class="text-2xl font-bold text-gray-900 mb-2">₹20,664</h2>
                                    <h3 class="text-lg font-medium text-gray-800">Maharashtrian Himali Gold Nath</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product cards -->
                    <div class="item">
                        <div class="w-full lg:w-full flex-shrink-0 p-2">
                            <div class="bg-white shadow-lg rounded-lg overflow-hidden border border-gray-200">
                                <div class="relative">
                                    <a href="{{ route('productdetail') }}"> <img src="{{ asset('asset/img/new1.webp') }}"
                                            alt="Maharashtrian Himali Gold Nath" class="w-full h-60 object-cover"
                                            loading="lazy"></a>
                                </div>
                                <div class="p-4">
                                    <h2 class="text-2xl font-bold text-gray-900 mb-2">₹20,664</h2>
                                    <h3 class="text-lg font-medium text-gray-800">Maharashtrian Himali Gold Nath</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
            <div class="glide__arrows flex justify-center my-4 gap-2" data-glide-el="controls">
                <button class="glide__arrow glide__arrow--left border-black border" data-glide-dir="<"><i
                        class="ri-arrow-left-s-line text-3xl"></i></button>
                <button class="glide__arrow glide__arrow--right border-black border" data-glide-dir=">"><i
                        class="ri-arrow-right-s-line text-3xl"></i></button>
            </div>
        </div>
    </div>

    <!-- Slider 2 -->
    <div id="slider2" class="tab-content hidden mx-auto">
        <div class="glide" id="glide2">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <!-- Example Slide -->
                    <!-- Example product card -->
                    <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 p-2">
                        <div class="bg-white shadow-md rounded-lg overflow-hidden border border-gray-200">
                            <div class="relative">
                                <a href="{{ route('productdetail') }}"><img src="{{ asset('asset\img\best1.webp') }}"
                                        alt="Best Seller 1" class="w-full h-48 object-cover" loading="lazy"></a>
                            </div>
                            <div class="p-4">
                                <h2 class="text-2xl font-bold text-gray-900 mb-2">₹20,664</h2>
                                <h3 class="text-lg font-semibold text-gray-800 mt-1">Best Seller Gold Nath</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Example product card -->
                    <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 p-2">
                        <div class="bg-white shadow-md rounded-lg overflow-hidden border border-gray-200">
                            <div class="relative">
                                <a href="{{ route('productdetail') }}"><img src="{{ asset('asset\img\best1.webp') }}"
                                        alt="Best Seller 1" class="w-full h-48 object-cover" loading="lazy"></a>
                            </div>
                            <div class="p-4">
                                <h2 class="text-2xl font-bold text-gray-900 mb-2">₹20,664</h2>
                                <h3 class="text-lg font-semibold text-gray-800 mt-1">Best Seller Gold Nath</h3>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
            <div class="glide__arrows flex justify-center my-4 gap-2" data-glide-el="controls">
                <button class="glide__arrow glide__arrow--left border-black border" data-glide-dir="<"><i
                        class="ri-arrow-left-s-line text-3xl"></i></i></button>
                <button class="glide__arrow glide__arrow--right border-black border" data-glide-dir=">"><i
                        class="ri-arrow-right-s-line text-3xl"></i></button>
            </div>
        </div>
    </div>



    {{-- Horizontal Line --}}
    <div class="flex items-center justify-center w-full mx-auto p-4">
        <div class="flex-grow h-px bg-[#9d6e2a]"></div>
        <div class="mx-4">
            <img src="{{ asset('asset\img\logo.png') }}" alt="Site Logo" class="h-12 w-auto">
        </div>
        <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    </div>


    {{-- Category Section --}}
    <div class="w-full mx-auto">
        <h1 class="text-3xl font-light text-center mb-4 lg:mb-6">Shop by Category</h1>
        <p class="text-center text-gray-600 mb-6 lg:mb-10">A one-stop shop for all of your jewellery needs!</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 px-6 lg:px-20 py-8 lg:py-12">
            <!-- Diamond Category -->
            <div
                class="flex flex-col items-center hover:shadow-md hover:bg-[#f1ede6] shadow-[#d6ba94] shadow-inner rounded-lg p-4">
                <a href="{{ route('diamondjewellery') }}"><img src="{{ asset('asset/img/daimond.png') }}"
                        alt="Diamond" class="w-40 h-56 object-contain mb-4"></a>
                <h3 class="text-lg font-semibold mb-1">Diamond</h3>
                <p class="text-sm text-gray-600 mb-3 text-center">For the most awaited moment!</p>
                <a href="{{ route('diamondjewellery') }}"><button
                        class="px-4 py-2 mb-4 bg-transparent border-black border-2 text-black hover:bg-[#601042] hover:text-white transition-colors text-sm">
                        DISCOVER MORE
                    </button></a>
            </div>

            <!-- Gold Category -->
            <div
                class="flex flex-col items-center hover:shadow-md hover:bg-[#f1ede6] shadow-[#d6ba94] shadow-inner rounded-lg p-4">
                <a href="{{ route('diamondjewellery') }}"><img src="{{ asset('asset/img/gold.png') }}" alt="Gold"
                        class="w-40 h-56 object-contain mb-4"></a>
                <h3 class="text-lg font-semibold mb-1">Gold</h3>
                <p class="text-sm text-gray-600 mb-3 text-center">For the beauty and the bliss!</p>
                <a href="{{ route('diamondjewellery') }}"><button
                        class="px-4 py-2 mb-4 bg-transparent border-black border-2 text-black hover:bg-[#601042] hover:text-white transition-colors text-sm">
                        DISCOVER MORE
                    </button></a>
            </div>

            <!-- Bullions Category -->
            <div
                class="flex flex-col items-center hover:shadow-md hover:bg-[#f1ede6] shadow-[#d6ba94] shadow-inner rounded-lg p-4">
                <a href="{{ route('diamondjewellery') }}"><img src="{{ asset('asset/img/bullions.png') }}"
                        alt="Bullions" class="w-40 h-56 object-contain mb-4"></a>
                <h3 class="text-lg font-semibold mb-1">Bullions</h3>
                <p class="text-sm text-gray-600 mb-3 text-center">For auspicious occasions!</p>
                <a href="{{ route('diamondjewellery') }}"><button
                        class="px-4 py-2 mb-4 bg-transparent border-black border-2 text-black hover:bg-[#601042] hover:text-white transition-colors text-sm">
                        DISCOVER MORE
                    </button></a>
            </div>

            <!-- Silver Category -->
            <div
                class="flex flex-col items-center hover:shadow-md hover:bg-[#f1ede6] shadow-[#d6ba94] shadow-inner rounded-lg p-4">
                <a href="{{ route('diamondjewellery') }}"><img src="{{ asset('asset/img/sliver.png') }}" alt="Silver"
                        class="w-40 h-56 object-contain mb-4"></a <h3 class="text-lg font-semibold mb-1">Silver</h3>
                <p class="text-sm text-gray-600 mb-3 text-center">For everyday elegance!</p>
                <a href="{{ route('diamondjewellery') }}"><button
                        class="px-4 py-2 mb-4 bg-transparent border-black border-2 text-black hover:bg-[#601042] hover:text-white transition-colors text-sm">
                        DISCOVER MORE
                    </button></a>
            </div>
        </div>
    </div>

    {{-- Horizontal Line --}}
    <div class="flex items-center justify-center w-full mx-auto p-4">
        <div class="flex-grow h-px bg-[#9d6e2a]"></div>
        <div class="mx-4">
            <img src="{{ asset('asset\img\logo.png') }}" alt="Site Logo" class="h-12 w-auto">
        </div>
        <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    </div>


    {{-- PROMISES --}}
    <div class=" mx-auto bg-[#601042] w-full my-4">
        <h1 class="text-center text-2xl md:text-3xl font-semibold text-white mb-4 pt-8">Gititra Promises</h1>
        <p class="text-center text-lg text-gray-200 mb-8">Incredible rationales to shop with us!</p>

        <!-- Swiper Container -->
        <div class="swiper-container overflow-hidden ">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide items-center justify-center text-center p-6 bg-[#601042] shadow-md rounded-lg">
                    <div class="flex justify-center">
                        <svg width="54" height="38" viewBox="0 0 54 38" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <mask id="path-1-inside-1_6092_46546" fill="white">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M27.0504 8.23756C27.6008 8.28847 28.1091 8.55994 28.4578 8.9926L39.4267 20.0722C41.2079 21.8707 40.1787 23.2917 37.8345 23.1008H27.0504L33.52 29.8241H47.2952C51.513 30.0107 54.8906 26.0361 50.6686 21.964L31.4573 2.65112C29.8567 1.04348 28.4536 0 27.0504 0C25.6473 0 24.2358 1.04348 22.6436 2.65112L3.43647 21.9598C-0.785557 26.0361 2.59207 29.9937 6.8099 29.8198H20.5725L27.042 23.0966H16.2916C13.9474 23.2874 12.9182 21.8622 14.6994 20.0679L25.6683 8.9926C26.0212 8.55994 26.5253 8.29271 27.0756 8.23756" />
                            </mask>
                            <path
                                d="M28.4578 8.9926L27.2899 9.93385L27.3379 9.99349L27.3918 10.0479L28.4578 8.9926ZM39.4267 20.0722L38.3607 21.1275L38.3609 21.1277L39.4267 20.0722ZM37.8345 23.1008L37.9562 21.6058L37.8955 21.6008H37.8345V23.1008ZM27.0504 23.1008V21.6008H23.5253L25.9696 24.1409L27.0504 23.1008ZM33.52 29.8241L32.4392 30.8641L32.8817 31.3241H33.52V29.8241ZM47.2952 29.8241L47.3615 28.3255L47.3284 28.3241H47.2952V29.8241ZM50.6686 21.964L49.6052 23.0219L49.6161 23.0329L49.6273 23.0437L50.6686 21.964ZM31.4573 2.65112L32.5208 1.59326L32.5203 1.59279L31.4573 2.65112ZM22.6436 2.65112L23.707 3.70898L23.7093 3.70665L22.6436 2.65112ZM3.43647 21.9598L4.47836 23.0389L4.48925 23.0284L4.49993 23.0176L3.43647 21.9598ZM6.8099 29.8198V28.3198H6.77899L6.7481 28.3211L6.8099 29.8198ZM20.5725 29.8198V31.3198H21.2107L21.6533 30.8599L20.5725 29.8198ZM27.042 23.0966L28.1229 24.1366L30.5671 21.5966H27.042V23.0966ZM16.2916 23.0966V21.5966H16.2306L16.1699 21.6015L16.2916 23.0966ZM14.6994 20.0679L15.764 21.1247L15.7652 21.1235L14.6994 20.0679ZM25.6683 8.9926L26.7341 10.0481L26.785 9.99673L26.8307 9.94067L25.6683 8.9926ZM26.9123 9.73119C27.0597 9.74483 27.1962 9.81768 27.2899 9.93385L29.6257 8.05136C29.022 7.30221 28.1418 6.8321 27.1886 6.74394L26.9123 9.73119ZM27.3918 10.0479L38.3607 21.1275L40.4926 19.0168L29.5238 7.93728L27.3918 10.0479ZM38.3609 21.1277C38.6985 21.4686 38.8009 21.6922 38.8248 21.7703C38.8348 21.8029 38.8252 21.7901 38.8294 21.7416C38.8339 21.6895 38.8518 21.6278 38.8852 21.5711C38.9525 21.4569 39.0024 21.486 38.8429 21.5398C38.6846 21.5933 38.3944 21.6414 37.9562 21.6058L37.7127 24.5959C39.0555 24.7052 40.6903 24.4174 41.47 23.0939C42.3393 21.6183 41.5218 20.056 40.4924 19.0166L38.3609 21.1277ZM37.8345 21.6008H27.0504V24.6008H37.8345V21.6008ZM25.9696 24.1409L32.4392 30.8641L34.6009 28.784L28.1313 22.0607L25.9696 24.1409ZM33.52 31.3241H47.2952V28.3241H33.52V31.3241ZM47.2289 31.3226C49.7734 31.4352 52.2696 30.3031 53.4498 28.2343C54.053 27.1769 54.2741 25.9229 53.9795 24.6083C53.689 23.3118 52.9206 22.052 51.7099 20.8844L49.6273 23.0437C50.5276 23.912 50.9203 24.6761 51.0521 25.2643C51.1799 25.8345 51.0846 26.326 50.8439 26.7478C50.3363 27.6377 49.0348 28.3996 47.3615 28.3255L47.2289 31.3226ZM51.7321 20.9061L32.5208 1.59326L30.3939 3.70898L49.6052 23.0219L51.7321 20.9061ZM32.5203 1.59279C31.6916 0.760444 30.8494 0.00677751 29.9847 -0.543061C29.1157 -1.09566 28.1343 -1.5 27.0504 -1.5V1.5C27.3697 1.5 27.7914 1.6174 28.3749 1.98845C28.9628 2.36226 29.6224 2.93416 30.3943 3.70945L32.5203 1.59279ZM27.0504 -1.5C25.9673 -1.5 24.9842 -1.09624 24.1138 -0.543587C23.2471 0.00674431 22.4043 0.761057 21.5778 1.5956L23.7093 3.70665C24.475 2.93355 25.134 2.3623 25.722 1.98898C26.3062 1.61798 26.7304 1.5 27.0504 1.5V-1.5ZM21.5801 1.59326L2.37302 20.9019L4.49993 23.0176L23.707 3.70898L21.5801 1.59326ZM2.39459 20.8807C1.18459 22.0489 0.416224 23.3081 0.125629 24.6038C-0.169091 25.9179 0.0521319 27.171 0.655784 28.2277C1.83625 30.2941 4.33138 31.4233 6.8717 31.3185L6.7481 28.3211C5.07059 28.3903 3.76799 27.6276 3.26069 26.7396C3.02046 26.3191 2.9253 25.8293 3.05291 25.2603C3.18465 24.6729 3.57734 23.9088 4.47836 23.0389L2.39459 20.8807ZM6.8099 31.3198H20.5725V28.3198H6.8099V31.3198ZM21.6533 30.8599L28.1229 24.1366L25.9612 22.0565L19.4916 28.7797L21.6533 30.8599ZM27.042 21.5966H16.2916V24.5966H27.042V21.5966ZM16.1699 21.6015C15.7322 21.6372 15.4424 21.5889 15.2843 21.5354C15.125 21.4815 15.1743 21.4522 15.2412 21.5658C15.2744 21.6222 15.2922 21.6836 15.2967 21.7355C15.3009 21.7839 15.2913 21.7968 15.3013 21.7645C15.325 21.6871 15.4269 21.4642 15.764 21.1247L13.6349 19.0111C12.6038 20.0498 11.7872 21.6117 12.6558 23.0875C13.4349 24.4112 15.0688 24.7011 16.4134 24.5916L16.1699 21.6015ZM15.7652 21.1235L26.7341 10.0481L24.6025 7.93708L13.6337 19.0124L15.7652 21.1235ZM26.8307 9.94067C26.9288 9.8204 27.0668 9.74596 27.2252 9.73009L26.9261 6.74504C25.9838 6.83945 25.1136 7.29948 24.5059 8.04454L26.8307 9.94067Z"
                                fill="#F0D37A" mask="url(#path-1-inside-1_6092_46546)" />
                            <mask id="path-3-inside-2_6092_46546" fill="white">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M26.9788 15.4658C25.2018 15.4743 23.7692 16.9335 23.7734 18.7278C23.7818 20.522 25.227 21.9685 27.004 21.9642C28.7811 21.9558 30.2136 20.4966 30.2094 18.7023C30.201 16.9165 28.7727 15.4743 27.004 15.4658" />
                            </mask>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M26.9788 15.4658C25.2018 15.4743 23.7692 16.9335 23.7734 18.7278C23.7818 20.522 25.227 21.9685 27.004 21.9642C28.7811 21.9558 30.2136 20.4966 30.2094 18.7023C30.201 16.9165 28.7727 15.4743 27.004 15.4658"
                                fill="#EDCF77" />
                            <path
                                d="M23.7734 18.7278L22.2734 18.7313L22.2735 18.7348L23.7734 18.7278ZM27.004 21.9642L27.0076 23.4642L27.0112 23.4642L27.004 21.9642ZM30.2094 18.7023L31.7094 18.6988L31.7094 18.6953L30.2094 18.7023ZM26.9717 13.9658C24.3526 13.9783 22.2673 16.1251 22.2735 18.7313L25.2734 18.7242C25.2711 17.7419 26.051 16.9703 26.986 16.9658L26.9717 13.9658ZM22.2735 18.7348C22.2857 21.344 24.3914 23.4705 27.0076 23.4642L27.0005 20.4643C26.0626 20.4665 25.278 19.7001 25.2734 18.7207L22.2735 18.7348ZM27.0112 23.4642C29.6302 23.4517 31.7155 21.305 31.7094 18.6988L28.7094 18.7058C28.7117 19.6882 27.9319 20.4598 26.9969 20.4643L27.0112 23.4642ZM31.7094 18.6953C31.6972 16.1001 29.6161 13.9783 27.0112 13.9658L26.9968 16.9658C27.9292 16.9703 28.7048 17.7329 28.7094 18.7094L31.7094 18.6953Z"
                                fill="#F0D37A" mask="url(#path-3-inside-2_6092_46546)" />
                            <path
                                d="M50.2765 35.3476C49.5152 36.0597 48.7087 36.2824 47.1416 36.3278H27H6.85424C5.28941 36.2824 4.48401 36.0598 3.72309 35.3478C3.38184 35.0285 3.04239 34.6049 2.66848 34.0337C3.01779 34.2815 3.34128 34.482 3.65157 34.6429C4.77494 35.2253 5.69171 35.27 6.84347 35.27H47.1523C48.3056 35.27 49.2304 35.2254 50.3577 34.6435C50.6625 34.4862 50.9795 34.291 51.3202 34.0508C50.9507 34.6133 50.6145 35.0315 50.2765 35.3476Z"
                                fill="#B493DA" stroke="#F0D37A" stroke-width="1.5" />
                        </svg>
                    </div>

                    <div>
                        <h2 class="text-lg font-medium text-white">BIS HALLMARKED</h2>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide items-center justify-center text-center p-6 bg-[#601042] shadow-md rounded-lg">
                    <div class="flex justify-center">
                        <svg width="54" height="38" viewBox="0 0 54 38" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <mask id="path-1-inside-1_6092_46546" fill="white">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M27.0504 8.23756C27.6008 8.28847 28.1091 8.55994 28.4578 8.9926L39.4267 20.0722C41.2079 21.8707 40.1787 23.2917 37.8345 23.1008H27.0504L33.52 29.8241H47.2952C51.513 30.0107 54.8906 26.0361 50.6686 21.964L31.4573 2.65112C29.8567 1.04348 28.4536 0 27.0504 0C25.6473 0 24.2358 1.04348 22.6436 2.65112L3.43647 21.9598C-0.785557 26.0361 2.59207 29.9937 6.8099 29.8198H20.5725L27.042 23.0966H16.2916C13.9474 23.2874 12.9182 21.8622 14.6994 20.0679L25.6683 8.9926C26.0212 8.55994 26.5253 8.29271 27.0756 8.23756" />
                            </mask>
                            <path
                                d="M28.4578 8.9926L27.2899 9.93385L27.3379 9.99349L27.3918 10.0479L28.4578 8.9926ZM39.4267 20.0722L38.3607 21.1275L38.3609 21.1277L39.4267 20.0722ZM37.8345 23.1008L37.9562 21.6058L37.8955 21.6008H37.8345V23.1008ZM27.0504 23.1008V21.6008H23.5253L25.9696 24.1409L27.0504 23.1008ZM33.52 29.8241L32.4392 30.8641L32.8817 31.3241H33.52V29.8241ZM47.2952 29.8241L47.3615 28.3255L47.3284 28.3241H47.2952V29.8241ZM50.6686 21.964L49.6052 23.0219L49.6161 23.0329L49.6273 23.0437L50.6686 21.964ZM31.4573 2.65112L32.5208 1.59326L32.5203 1.59279L31.4573 2.65112ZM22.6436 2.65112L23.707 3.70898L23.7093 3.70665L22.6436 2.65112ZM3.43647 21.9598L4.47836 23.0389L4.48925 23.0284L4.49993 23.0176L3.43647 21.9598ZM6.8099 29.8198V28.3198H6.77899L6.7481 28.3211L6.8099 29.8198ZM20.5725 29.8198V31.3198H21.2107L21.6533 30.8599L20.5725 29.8198ZM27.042 23.0966L28.1229 24.1366L30.5671 21.5966H27.042V23.0966ZM16.2916 23.0966V21.5966H16.2306L16.1699 21.6015L16.2916 23.0966ZM14.6994 20.0679L15.764 21.1247L15.7652 21.1235L14.6994 20.0679ZM25.6683 8.9926L26.7341 10.0481L26.785 9.99673L26.8307 9.94067L25.6683 8.9926ZM26.9123 9.73119C27.0597 9.74483 27.1962 9.81768 27.2899 9.93385L29.6257 8.05136C29.022 7.30221 28.1418 6.8321 27.1886 6.74394L26.9123 9.73119ZM27.3918 10.0479L38.3607 21.1275L40.4926 19.0168L29.5238 7.93728L27.3918 10.0479ZM38.3609 21.1277C38.6985 21.4686 38.8009 21.6922 38.8248 21.7703C38.8348 21.8029 38.8252 21.7901 38.8294 21.7416C38.8339 21.6895 38.8518 21.6278 38.8852 21.5711C38.9525 21.4569 39.0024 21.486 38.8429 21.5398C38.6846 21.5933 38.3944 21.6414 37.9562 21.6058L37.7127 24.5959C39.0555 24.7052 40.6903 24.4174 41.47 23.0939C42.3393 21.6183 41.5218 20.056 40.4924 19.0166L38.3609 21.1277ZM37.8345 21.6008H27.0504V24.6008H37.8345V21.6008ZM25.9696 24.1409L32.4392 30.8641L34.6009 28.784L28.1313 22.0607L25.9696 24.1409ZM33.52 31.3241H47.2952V28.3241H33.52V31.3241ZM47.2289 31.3226C49.7734 31.4352 52.2696 30.3031 53.4498 28.2343C54.053 27.1769 54.2741 25.9229 53.9795 24.6083C53.689 23.3118 52.9206 22.052 51.7099 20.8844L49.6273 23.0437C50.5276 23.912 50.9203 24.6761 51.0521 25.2643C51.1799 25.8345 51.0846 26.326 50.8439 26.7478C50.3363 27.6377 49.0348 28.3996 47.3615 28.3255L47.2289 31.3226ZM51.7321 20.9061L32.5208 1.59326L30.3939 3.70898L49.6052 23.0219L51.7321 20.9061ZM32.5203 1.59279C31.6916 0.760444 30.8494 0.00677751 29.9847 -0.543061C29.1157 -1.09566 28.1343 -1.5 27.0504 -1.5V1.5C27.3697 1.5 27.7914 1.6174 28.3749 1.98845C28.9628 2.36226 29.6224 2.93416 30.3943 3.70945L32.5203 1.59279ZM27.0504 -1.5C25.9673 -1.5 24.9842 -1.09624 24.1138 -0.543587C23.2471 0.00674431 22.4043 0.761057 21.5778 1.5956L23.7093 3.70665C24.475 2.93355 25.134 2.3623 25.722 1.98898C26.3062 1.61798 26.7304 1.5 27.0504 1.5V-1.5ZM21.5801 1.59326L2.37302 20.9019L4.49993 23.0176L23.707 3.70898L21.5801 1.59326ZM2.39459 20.8807C1.18459 22.0489 0.416224 23.3081 0.125629 24.6038C-0.169091 25.9179 0.0521319 27.171 0.655784 28.2277C1.83625 30.2941 4.33138 31.4233 6.8717 31.3185L6.7481 28.3211C5.07059 28.3903 3.76799 27.6276 3.26069 26.7396C3.02046 26.3191 2.9253 25.8293 3.05291 25.2603C3.18465 24.6729 3.57734 23.9088 4.47836 23.0389L2.39459 20.8807ZM6.8099 31.3198H20.5725V28.3198H6.8099V31.3198ZM21.6533 30.8599L28.1229 24.1366L25.9612 22.0565L19.4916 28.7797L21.6533 30.8599ZM27.042 21.5966H16.2916V24.5966H27.042V21.5966ZM16.1699 21.6015C15.7322 21.6372 15.4424 21.5889 15.2843 21.5354C15.125 21.4815 15.1743 21.4522 15.2412 21.5658C15.2744 21.6222 15.2922 21.6836 15.2967 21.7355C15.3009 21.7839 15.2913 21.7968 15.3013 21.7645C15.325 21.6871 15.4269 21.4642 15.764 21.1247L13.6349 19.0111C12.6038 20.0498 11.7872 21.6117 12.6558 23.0875C13.4349 24.4112 15.0688 24.7011 16.4134 24.5916L16.1699 21.6015ZM15.7652 21.1235L26.7341 10.0481L24.6025 7.93708L13.6337 19.0124L15.7652 21.1235ZM26.8307 9.94067C26.9288 9.8204 27.0668 9.74596 27.2252 9.73009L26.9261 6.74504C25.9838 6.83945 25.1136 7.29948 24.5059 8.04454L26.8307 9.94067Z"
                                fill="#F0D37A" mask="url(#path-1-inside-1_6092_46546)" />
                            <mask id="path-3-inside-2_6092_46546" fill="white">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M26.9788 15.4658C25.2018 15.4743 23.7692 16.9335 23.7734 18.7278C23.7818 20.522 25.227 21.9685 27.004 21.9642C28.7811 21.9558 30.2136 20.4966 30.2094 18.7023C30.201 16.9165 28.7727 15.4743 27.004 15.4658" />
                            </mask>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M26.9788 15.4658C25.2018 15.4743 23.7692 16.9335 23.7734 18.7278C23.7818 20.522 25.227 21.9685 27.004 21.9642C28.7811 21.9558 30.2136 20.4966 30.2094 18.7023C30.201 16.9165 28.7727 15.4743 27.004 15.4658"
                                fill="#EDCF77" />
                            <path
                                d="M23.7734 18.7278L22.2734 18.7313L22.2735 18.7348L23.7734 18.7278ZM27.004 21.9642L27.0076 23.4642L27.0112 23.4642L27.004 21.9642ZM30.2094 18.7023L31.7094 18.6988L31.7094 18.6953L30.2094 18.7023ZM26.9717 13.9658C24.3526 13.9783 22.2673 16.1251 22.2735 18.7313L25.2734 18.7242C25.2711 17.7419 26.051 16.9703 26.986 16.9658L26.9717 13.9658ZM22.2735 18.7348C22.2857 21.344 24.3914 23.4705 27.0076 23.4642L27.0005 20.4643C26.0626 20.4665 25.278 19.7001 25.2734 18.7207L22.2735 18.7348ZM27.0112 23.4642C29.6302 23.4517 31.7155 21.305 31.7094 18.6988L28.7094 18.7058C28.7117 19.6882 27.9319 20.4598 26.9969 20.4643L27.0112 23.4642ZM31.7094 18.6953C31.6972 16.1001 29.6161 13.9783 27.0112 13.9658L26.9968 16.9658C27.9292 16.9703 28.7048 17.7329 28.7094 18.7094L31.7094 18.6953Z"
                                fill="#F0D37A" mask="url(#path-3-inside-2_6092_46546)" />
                            <path
                                d="M50.2765 35.3476C49.5152 36.0597 48.7087 36.2824 47.1416 36.3278H27H6.85424C5.28941 36.2824 4.48401 36.0598 3.72309 35.3478C3.38184 35.0285 3.04239 34.6049 2.66848 34.0337C3.01779 34.2815 3.34128 34.482 3.65157 34.6429C4.77494 35.2253 5.69171 35.27 6.84347 35.27H47.1523C48.3056 35.27 49.2304 35.2254 50.3577 34.6435C50.6625 34.4862 50.9795 34.291 51.3202 34.0508C50.9507 34.6133 50.6145 35.0315 50.2765 35.3476Z"
                                fill="#B493DA" stroke="#F0D37A" stroke-width="1.5" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-lg font-medium text-white">LIFETIME BUYBACK</h2>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide items-center justify-center text-center p-6 bg-[#601042] shadow-md rounded-lg">
                    <div class="flex justify-center">
                        <svg width="55" height="38" viewBox="0 0 55 38" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.0843 5.94531L10.8236 8.61652L10.4062 10.8425L10.8236 13.5137L12.9105 18.4109L15.8321 21.0822H17.919L20.0059 20.1918L22.0928 17.0753L23.3449 13.0685L23.7623 10.3973L23.3449 8.61652L17.0843 5.94531Z"
                                fill="#4D2753" />
                            <path
                                d="M52.3108 18.5886L46.9751 12.4618C45.6388 10.9251 43.7106 10.0477 41.679 10.0477H34.0602V2.04722C34.0602 0.917036 33.1479 0 32.0236 0H7.0369C3.156 0 0 3.17245 0 7.07357V30.9314C0 32.0616 0.912282 32.9786 2.04154 32.9786H6.30708C6.69664 35.809 9.11296 38 12.0323 38C14.9565 38 17.3728 35.809 17.7575 32.9786H33.2662H37.5318C37.9214 35.809 40.3377 38 43.257 38C46.1763 38 48.5975 35.809 48.9822 32.9786H49.4999C52.0001 32.9786 54.0367 30.9314 54.0367 28.4182V23.2481C54.0515 21.533 53.4302 19.8774 52.3108 18.5886ZM12.0323 36.4187C9.71457 36.4187 7.8259 34.5202 7.8259 32.1905C7.8259 29.8607 9.71457 27.9622 12.0323 27.9622C14.35 27.9622 16.2386 29.8607 16.2386 32.1905C16.2386 34.5202 14.3549 36.4187 12.0323 36.4187ZM32.4822 31.3924H17.7624C17.3728 28.562 14.9565 26.371 12.0323 26.371C9.10803 26.371 6.69171 28.562 6.30708 31.3924H1.578V7.07357C1.578 4.04983 4.02884 1.58622 7.0369 1.58622H32.4822V31.3924ZM43.2668 36.4187C40.9491 36.4187 39.0605 34.5202 39.0605 32.1905C39.0605 29.8607 40.9491 27.9622 43.2668 27.9622C45.5845 27.9622 47.4732 29.8607 47.4732 32.1905C47.4732 34.5202 45.5845 36.4187 43.2668 36.4187ZM52.4686 28.4232C52.4686 30.0639 51.142 31.3973 49.5098 31.3973H48.992C48.6025 28.5669 46.1861 26.3759 43.2668 26.3759C40.3475 26.3759 37.9263 28.5669 37.5416 31.3973H34.0651V11.634H41.6839C43.257 11.634 44.7561 12.318 45.7916 13.5077L51.1223 19.6345C51.9952 20.6358 52.4735 21.9147 52.4735 23.2481V28.4232H52.4686Z"
                                fill="#F0D37A" />
                            <path
                                d="M43.2672 18.8366H40.3085V15.8624C40.3085 15.4262 39.9534 15.0693 39.5195 15.0693C39.0855 15.0693 38.7305 15.4262 38.7305 15.8624V19.6297C38.7305 20.0659 39.0855 20.4228 39.5195 20.4228H43.2672C43.7012 20.4228 44.0562 20.0659 44.0562 19.6297C44.0562 19.1935 43.7012 18.8366 43.2672 18.8366Z"
                                fill="#F0D37A" />
                            <path
                                d="M17.3428 22.0601C17.3896 22.0711 17.4365 22.0766 17.4833 22.0766C17.5301 22.0766 17.5769 22.0711 17.6238 22.0601C25.4273 20.254 24.6158 8.91343 24.6054 8.7985C24.5846 8.54125 24.4285 8.31685 24.2048 8.22381L17.7278 5.43793C17.5717 5.37225 17.3949 5.37225 17.2336 5.43793L10.7566 8.22381C10.5329 8.32232 10.3768 8.54125 10.356 8.7985C10.3508 8.91343 9.54444 20.254 17.3428 22.0601ZM11.6358 9.32393L17.4833 6.80624L23.3308 9.32393C23.388 11.2396 23.2632 19.225 17.4833 20.6918C11.7086 19.225 11.5838 11.2396 11.6358 9.32393Z"
                                fill="#F0D37A" />
                            <path
                                d="M16.5054 15.7189C16.6437 15.7189 16.782 15.6676 16.8956 15.5537L21.232 11.4179C21.4938 11.1673 21.5333 10.7172 21.316 10.4153C21.0987 10.1134 20.7085 10.0678 20.4467 10.3185L16.5647 14.0156L15.3794 12.4775C15.1522 12.1813 14.762 12.1585 14.5101 12.4205C14.2582 12.6826 14.2335 13.1326 14.4607 13.4231L16.0461 15.4739C16.1647 15.6391 16.3375 15.7189 16.5054 15.7189Z"
                                fill="#F0D37A" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-lg font-medium text-white">INSURED FREE SHIPPING</h2>
                    </div>
                </div>
                <!-- Slide 4 -->
                <div class="swiper-slide items-center justify-center text-center p-6 bg-[#601042] shadow-md rounded-lg">
                    <div class="flex justify-center">
                        <svg width="32" height="45" viewBox="0 0 32 45" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.8279 6.81845L16.4095 6.13477L12.3074 6.81845L10.5982 8.18582L8.20526 10.5787L7.17973 12.9716L6.83789 16.0482L7.52158 19.4666L9.91447 22.2014L12.3074 23.9106L16.4095 24.9361L18.4605 24.2524L21.1953 23.2269L23.2463 21.5177L24.2719 19.1248L25.2974 17.0737V14.339L24.2719 11.6042L22.5627 8.86951L19.8279 6.81845Z"
                                fill="#4D2753" />
                            <path
                                d="M29.9561 18.7095L30.7093 18.0986C31.5315 17.4372 32 16.4497 32 15.3933C32 14.3369 31.5269 13.3494 30.7093 12.688L29.9561 12.0771C29.3039 11.5489 29.0191 10.6808 29.2396 9.87242L29.4922 8.93543C29.7678 7.91576 29.5703 6.84098 28.9456 5.98667C28.3255 5.13236 27.3656 4.61334 26.3092 4.55822L25.34 4.5077C24.4995 4.46636 23.7646 3.92897 23.4661 3.14355L23.1216 2.23872C22.7449 1.2512 21.9503 0.497938 20.949 0.17183C19.9432 -0.154279 18.8592 -0.0118936 17.9773 0.562242L17.1643 1.09045C16.457 1.54975 15.5476 1.54975 14.8448 1.09045L14.0319 0.562242C13.1454 -0.0118936 12.0614 -0.154279 11.0601 0.17183C10.0543 0.497938 9.26425 1.2512 8.88761 2.23872L8.54313 3.14355C8.24458 3.92897 7.5051 4.46177 6.66916 4.5077L5.70001 4.55822C4.64361 4.61334 3.68365 5.13236 3.06359 5.98667C2.44352 6.84098 2.24602 7.91576 2.51701 8.93543L2.76963 9.87242C2.9901 10.6854 2.70533 11.5489 2.05311 12.0771L1.29984 12.688C0.473087 13.354 0 14.3415 0 15.3979C0 16.4543 0.473087 17.4418 1.29066 18.1032L2.04392 18.7141C2.69614 19.2423 2.98091 20.1104 2.76044 20.9188L2.50782 21.8558C2.23224 22.8754 2.42974 23.9502 3.0544 24.8045C3.67447 25.6588 4.63442 26.1779 5.69083 26.233L6.65997 26.2835C6.7748 26.2881 6.88503 26.3065 6.99067 26.3294L1.30444 38.5241L7.46376 37.881L10.9315 43.0161L15.5568 33.095L21.1649 44.5961L24.5408 39.4013L30.7093 39.9387L24.2331 26.6601C24.5546 26.4351 24.9312 26.2973 25.34 26.2789L26.3092 26.2284C27.3656 26.1733 28.3255 25.6542 28.9456 24.7999C29.5657 23.9456 29.7632 22.8708 29.4922 21.8512L29.2396 20.9142C29.0191 20.1058 29.3039 19.2377 29.9561 18.7095ZM10.7111 40.2786L8.12976 36.4526L3.54127 36.9303L8.16191 27.023C8.31807 27.2067 8.44668 27.4134 8.53854 27.643L8.88302 28.5479C9.25965 29.5354 10.0543 30.2887 11.0555 30.6148C12.0477 30.9363 13.15 30.7939 14.0273 30.2244L14.8402 29.6962C15.1342 29.5032 15.4649 29.3976 15.8002 29.3655L10.7111 40.2786ZM28.4495 38.3817L23.8519 37.9821L21.3349 41.854L16.2917 31.515L17.146 29.6824C17.1506 29.687 17.1552 29.687 17.1598 29.6916L17.9727 30.2198C18.5469 30.5918 19.2037 30.7847 19.8651 30.7847C20.2279 30.7847 20.5908 30.7296 20.9445 30.6148C21.9503 30.2887 22.7403 29.5354 23.117 28.5479L23.3512 27.937L28.4495 38.3817ZM29.1064 17.6577C28.0362 18.5212 27.5769 19.9405 27.9351 21.2679L28.1877 22.2048C28.3577 22.8295 28.2337 23.4863 27.857 24.0053C27.4758 24.5289 26.8925 24.8459 26.2449 24.878L25.2757 24.9285C23.9024 24.9974 22.699 25.8747 22.2076 27.1608L21.8631 28.0656C21.6334 28.6673 21.1465 29.1266 20.5357 29.3287C19.9248 29.5262 19.2588 29.4389 18.7214 29.0899L17.9084 28.5617C16.7785 27.8268 15.2444 27.8268 14.1145 28.5617L13.3016 29.0899C12.7596 29.4435 12.0982 29.5308 11.4873 29.3287C10.8718 29.1312 10.3896 28.6673 10.1599 28.0656L9.81542 27.1608C9.32396 25.8747 8.12057 25.002 6.74724 24.9285L5.7781 24.878C5.13507 24.8459 4.54715 24.5243 4.16593 24.0053C3.7847 23.4817 3.66528 22.8249 3.83522 22.2048L4.08784 21.2679C4.4461 19.9405 3.9822 18.5212 2.91661 17.6577L2.16334 17.0468C1.6627 16.6426 1.37333 16.0409 1.37333 15.3933C1.37333 14.7503 1.6627 14.144 2.16334 13.7398L2.91661 13.1289C3.98679 12.2654 4.4461 10.8462 4.08784 9.51875L3.83522 8.58176C3.66528 7.9571 3.78929 7.30029 4.16593 6.78127C4.54715 6.25766 5.13047 5.94074 5.7781 5.90859L6.74724 5.85806C8.12057 5.78917 9.32396 4.91189 9.81542 3.62583L10.1599 2.72099C10.3896 2.1193 10.8764 1.65999 11.4873 1.45789C11.7032 1.389 11.9282 1.35225 12.1487 1.35225C12.5529 1.35225 12.9571 1.46708 13.3062 1.69673L14.1191 2.22494C15.272 2.97361 16.7602 2.97361 17.913 2.22494L18.726 1.69673C19.268 1.34307 19.9294 1.2558 20.5449 1.45789C21.1603 1.6554 21.6426 2.1193 21.8723 2.72099L22.2167 3.62583C22.7082 4.91189 23.9116 5.78458 25.2849 5.85806L26.2541 5.90859C26.8971 5.94074 27.485 6.26226 27.8662 6.78127C28.2475 7.30489 28.3669 7.9617 28.1969 8.58176L27.9443 9.51875C27.5861 10.8462 28.0454 12.2608 29.1155 13.1289L29.8688 13.7398C30.3695 14.144 30.6588 14.7503 30.6588 15.3933C30.6588 16.0363 30.3695 16.6426 29.8688 17.0468L29.1064 17.6577Z"
                                fill="#F0D37A" />
                            <path
                                d="M16.0014 5.44922C10.5172 5.44922 6.05273 9.9091 6.05273 15.3978C6.05273 20.8866 10.5126 25.3419 16.0014 25.3419C21.4901 25.3419 25.95 20.882 25.95 15.3978C25.95 9.91369 21.4855 5.44922 16.0014 5.44922ZM16.0014 23.9226C11.3026 23.9226 7.47659 20.0966 7.47659 15.3978C7.47659 10.6991 11.3026 6.87307 16.0014 6.87307C20.7001 6.87307 24.5261 10.6945 24.5261 15.3978C24.5261 20.0966 20.7001 23.9226 16.0014 23.9226Z"
                                fill="#F0D37A" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-lg font-medium text-white">PURITY GUARANTEE</h2>
                    </div>
                </div>
                <!-- Slide 5 -->
                <div class="swiper-slide items-center justify-center text-center p-6 bg-[#601042] shadow-md rounded-lg">
                    <div class="flex justify-center">
                        <svg width="35" height="45" viewBox="0 0 35 45" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.3495 39.9231C15.0076 39.9231 12.7354 39.4613 10.5962 38.5505C8.53002 37.671 6.67475 36.4121 5.08165 34.8084C3.48855 33.205 2.2376 31.3375 1.3637 29.2581C0.458794 27.1047 0 24.8178 0 22.4608C0 22.0819 0.306253 21.7737 0.682729 21.7737C1.05921 21.7737 1.36546 22.0819 1.36546 22.4608C1.36546 31.3318 8.53587 38.5488 17.3495 38.5488H22.7993V35.9795C22.7993 35.6006 23.1055 35.2924 23.482 35.2924C23.8585 35.2924 24.1647 35.6006 24.1647 35.9795V42.8355L32.9569 35.3784L24.1647 27.9215V31.5212C24.1647 31.9001 23.8585 32.2084 23.482 32.2084H17.348C16.0414 32.2082 14.7735 31.9504 13.5797 31.4421C12.4265 30.9511 11.3907 30.2484 10.5015 29.3533C10.2353 29.0853 10.2353 28.6495 10.5015 28.3815C10.6305 28.2517 10.8019 28.1802 10.9843 28.1802C11.1667 28.1802 11.3382 28.2517 11.4671 28.3815C13.0382 29.9627 15.1271 30.8339 17.3491 30.8339H22.7995V26.4437C22.7995 26.1774 22.9545 25.9328 23.1943 25.8205C23.2852 25.7779 23.3819 25.7565 23.482 25.7565C23.6429 25.7565 23.7992 25.814 23.9221 25.9183L34.4564 34.853C34.6107 34.9839 34.6992 35.1754 34.6992 35.3784C34.6992 35.5814 34.6107 35.773 34.4564 35.9038L23.9219 44.8387C23.7196 45.0103 23.4338 45.0486 23.1941 44.9363C22.9541 44.824 22.7993 44.5793 22.7993 44.3131V39.9229H17.3495V39.9231Z"
                                fill="#F0D37A" />
                            <path
                                d="M0.930127 19.4643C0.510151 19.3673 0.247787 18.946 0.34415 18.5233C0.386479 18.3376 0.432514 18.1501 0.480891 17.9659C0.573352 17.6139 0.889163 17.381 1.23482 17.381C1.30075 17.381 1.36785 17.3895 1.43476 17.4073C1.85142 17.5183 2.09974 17.948 1.98972 18.3672C1.94564 18.5347 1.90389 18.7053 1.86527 18.8743C1.76891 19.2972 1.3503 19.5613 0.930127 19.4643Z"
                                fill="#F0D37A" />
                            <path
                                d="M11.0889 19.0245C10.9305 19.0245 10.7733 18.9693 10.648 18.8631L0.242857 10.0377C0.0885598 9.90696 0 9.71534 0 9.51233C0 9.30932 0.0885598 9.1177 0.242857 8.98675L10.6482 0.161383C10.7711 0.0571308 10.9274 -0.000394821 11.0883 -0.000394821C11.1884 -0.000394821 11.2851 0.0212021 11.376 0.0636101C11.616 0.175913 11.7708 0.420347 11.7708 0.686771V4.96781H17.2206C17.285 4.96781 17.3491 4.97704 17.4112 4.9951L17.4242 4.99883H17.4379C19.749 5.01022 21.9915 5.4718 24.1031 6.37081C26.1692 7.25038 28.0245 8.50927 29.6176 10.1127C31.2107 11.7162 32.4614 13.5837 33.3353 15.6631C34.2402 17.8164 34.699 20.1033 34.699 22.4603C34.699 22.8392 34.3928 23.1475 34.0163 23.1475C33.6398 23.1475 33.3336 22.8392 33.3336 22.4603C33.3336 13.5894 26.1632 6.37238 17.3495 6.37238C17.2857 6.37238 17.2221 6.36335 17.1605 6.34548L17.1472 6.34175H11.7708V8.85305C11.7708 9.23197 11.4646 9.54021 11.0881 9.54021C10.7116 9.54021 10.4054 9.23197 10.4054 8.85305V2.16418L1.74233 9.51233L10.4054 16.8599V13.3697C10.4054 12.9908 10.7116 12.6825 11.0881 12.6825H17.2206C17.285 12.6825 17.3489 12.6917 17.411 12.7098L17.4238 12.7135L17.4373 12.7137C18.7189 12.7251 19.9624 12.9847 21.1336 13.4855C22.2909 13.9805 23.3289 14.6883 24.2189 15.5896C24.4842 15.8584 24.4831 16.2943 24.216 16.5615C23.949 16.8285 23.5159 16.8273 23.2504 16.5585C21.677 14.9651 19.5815 14.0875 17.3497 14.0875C17.2859 14.0875 17.2225 14.0784 17.1609 14.0606L17.1476 14.0569H11.7708V18.3377C11.7708 18.6039 11.6158 18.8486 11.376 18.9609C11.2845 19.0035 11.1864 19.0245 11.0889 19.0245Z"
                                fill="#F0D37A" />
                            <path
                                d="M33.5162 27.2451C33.4604 27.2451 33.4042 27.2382 33.3488 27.2241C33.1719 27.1793 33.0229 27.068 32.9292 26.9106C32.8356 26.7531 32.8085 26.5684 32.8528 26.3903C32.8951 26.2207 32.9349 26.0487 32.9714 25.879C33.0389 25.5649 33.3192 25.337 33.6379 25.337C33.6863 25.337 33.7351 25.3423 33.7828 25.3527C33.9611 25.3913 34.1137 25.4978 34.2124 25.6521C34.3111 25.8064 34.3444 25.9902 34.3058 26.1696C34.2662 26.3544 34.2227 26.5413 34.1771 26.725C34.1328 26.9031 34.0222 27.0531 33.8656 27.1473C33.7585 27.2119 33.6383 27.2451 33.5162 27.2451Z"
                                fill="#F0D37A" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-lg font-medium text-white">LIFETIME EXCHANGE</h2>
                    </div>
                </div>
                <!-- Slide 6 -->
                <div class="swiper-slide items-center justify-center text-center p-6 bg-[#601042] shadow-md rounded-lg">
                    <div class="flex justify-center">
                        <svg width="45" height="45" viewBox="0 0 45 45" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_6092_46592)">
                                <path
                                    d="M23.8373 28.5719C24.1731 29.0286 24.6845 29.2946 25.241 29.2946H36.0795C36.641 29.2946 37.1524 29.0336 37.4832 28.5719C37.8191 28.1102 37.9194 27.503 37.7439 26.9509L35.7637 20.7579C35.5281 20.0201 34.8613 19.5233 34.0993 19.5233H29.5573C29.6025 19.2473 29.5824 18.9612 29.4922 18.6902L27.5119 12.4972C27.2763 11.7594 26.6046 11.2676 25.8476 11.2676H18.9744C18.2124 11.2676 17.5457 11.7644 17.31 12.4972L15.3248 18.6902C15.2396 18.9612 15.2195 19.2473 15.2596 19.5233H11.6351C10.8731 19.5233 10.2063 20.0201 9.97069 20.7529L7.99046 26.9459C7.815 27.4979 7.91025 28.1002 8.25115 28.5669C8.58704 29.0236 9.09839 29.2896 9.65485 29.2896H20.4934C21.0549 29.2896 21.5663 29.0286 21.8971 28.5669C22.233 28.1052 22.3333 27.4979 22.1578 26.9459L20.2628 21.0239H25.4716L23.5766 26.9459C23.4011 27.503 23.5014 28.1052 23.8373 28.5719ZM16.8037 19.4229C16.7786 19.3878 16.7185 19.2874 16.7636 19.1519L18.7438 12.9538C18.7789 12.8434 18.8742 12.7682 18.9744 12.7682H25.8476C25.9528 12.7682 26.0431 12.8434 26.0782 12.9538L28.0584 19.1519C28.1035 19.2874 28.0434 19.3878 28.0183 19.4229C27.9832 19.4681 27.923 19.5233 27.8278 19.5233H27.2262H18.5132H16.9942C16.8939 19.5233 16.8338 19.4681 16.8037 19.4229ZM18.7438 21.2146L20.724 27.4126C20.7692 27.5481 20.709 27.6485 20.6839 27.6836C20.6488 27.7288 20.5887 27.784 20.4934 27.784H9.65485C9.5596 27.784 9.49944 27.7288 9.46435 27.6836C9.43929 27.6485 9.37913 27.5481 9.42425 27.4126L11.4045 21.2146C11.4396 21.1042 11.5348 21.0289 11.6351 21.0289H16.9892H18.5082C18.6135 21.0289 18.7087 21.1042 18.7438 21.2146ZM25.0104 27.4126L26.9906 21.2146C27.0257 21.1042 27.1209 21.0289 27.2212 21.0289H27.8228H34.0943C34.1996 21.0289 34.2898 21.1042 34.3249 21.2146L36.3051 27.4126C36.3503 27.5481 36.2901 27.6485 36.265 27.6836C36.2299 27.7288 36.1698 27.784 36.0745 27.784H25.246C25.1507 27.784 25.0906 27.7288 25.0555 27.6836C25.0254 27.6485 24.9702 27.5481 25.0104 27.4126Z"
                                    fill="#F0D37A" />
                                <path
                                    d="M7.81465 7.74065C15.9169 -0.343348 29.1233 -0.326447 37.2538 7.78572L38.75 9.27859H34.8768V10.9686H41.9175V3.94371H40.2237V8.36597L38.4508 6.59143C29.6597 -2.17985 15.3805 -2.19675 6.61766 6.54636C0.000341384 13.1488 -1.8629 23.227 1.9765 31.6321L3.51791 30.9336C-0.0278893 23.165 1.69419 13.8473 7.81465 7.74065Z"
                                    fill="#F0D37A" />
                                <path
                                    d="M43.0237 13.3799L41.4823 14.0784C45.0338 21.847 43.306 31.1647 37.1856 37.2713C33.2784 41.1697 28.0727 43.316 22.5168 43.3104C22.4999 43.3104 22.4886 43.3104 22.4717 43.3104C16.9045 43.2991 11.6762 41.1359 7.75209 37.2206L6.22198 35.694H10.0953V34.0039H3.04883V41.0289H4.74268V36.6179L6.54946 38.4206C10.7897 42.6513 16.4416 44.9892 22.466 45.0061C22.483 45.0061 22.4999 45.0061 22.5168 45.0061C28.5244 45.0061 34.1592 42.6851 38.3882 38.4713C44.9999 31.8632 46.8631 21.7794 43.0237 13.3799Z"
                                    fill="#F0D37A" />
                            </g>
                            <defs>
                                <clipPath id="clip0_6092_46592">
                                    <rect width="45" height="45" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-lg font-medium text-white">GOLD EXCHANGE</h2>
                    </div>
                </div>
                <!-- Slide 7 -->
                <div class="swiper-slide items-center justify-center text-center p-6 bg-[#601042] shadow-md rounded-lg">
                    <div class="flex justify-center">
                        <svg width="56" height="45" viewBox="0 0 56 45" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M38.7507 6.09759H2.91868L7.55641 1.46514C7.89214 1.12832 7.89214 0.586217 7.55641 0.251236C7.21885 -0.0837452 6.67369 -0.0837452 6.3398 0.251236L0.252142 6.32947C0.0799151 6.4981 9.81215e-07 6.72264 0.00459371 6.94398C0.00459371 6.94719 0 6.9536 0 6.95498C0 7.20381 0.115736 7.41873 0.287504 7.57866L6.3398 13.6143C6.50697 13.7824 6.72696 13.8663 6.94742 13.8663C7.16879 13.8663 7.38924 13.7824 7.55641 13.6143C7.89214 13.2793 7.89214 12.7372 7.55641 12.4004L2.95909 7.81465H38.7507C48.8634 7.81465 53.3895 15.9513 53.3895 24.0124C53.3895 31.8375 49.1109 39.7079 39.6123 40.1634V41.886C48.918 41.4722 55.1132 34.4074 55.1132 24.0124C55.1132 13.2985 48.5387 6.09759 38.7507 6.09759Z"
                                fill="#F0D37A" />
                            <path
                                d="M7.26172 19.2528H12.6996V34.5375H14.5514V13.9619H13.0523C12.4938 17.7537 10.495 17.8125 7.26172 17.9301V19.2528Z"
                                fill="#F0D37A" />
                            <path
                                d="M22.2132 29.423H31.7074V34.5375H33.4122V29.423H36.4986V27.8651H33.4122V13.9619H31.7368L22.2132 27.63V29.423ZM23.8887 27.8651L31.6486 16.6661H31.7074V27.8651H23.8887Z"
                                fill="#F0D37A" />
                            <path
                                d="M11.62 38.5289H12.8854C14.9018 38.5289 15.3339 39.6812 15.3339 41.1523C15.3339 42.6235 14.9018 43.7757 12.8854 43.7757H11.62V38.5289ZM10.334 44.8251H13.3792C15.6425 44.8251 16.6198 43.179 16.6198 41.1523C16.6198 39.1256 15.6425 37.4796 13.3792 37.4796H10.334V44.8251Z"
                                fill="#F0D37A" />
                            <path
                                d="M20.5876 38.745H20.6185L21.7193 41.9033H19.4765L20.5876 38.745ZM17.1103 44.8251H18.4375L19.1268 42.8807H22.0588L22.7481 44.8251H24.1266L21.2975 37.4796H19.9292L17.1103 44.8251Z"
                                fill="#F0D37A" />
                            <path
                                d="M26.1818 44.8251H27.4678V41.9445L30.2147 37.4796H28.7744L26.8608 40.7717L24.9164 37.4796H23.4247L26.1818 41.9445V44.8251Z"
                                fill="#F0D37A" />
                            <path
                                d="M30.7027 42.3766C30.7336 44.1975 32.0915 45 33.7685 45C35.2293 45 36.6902 44.3415 36.6902 42.6955C36.6902 41.9342 36.2272 41.1112 35.2602 40.8231C34.8795 40.7099 33.2541 40.2881 33.1409 40.2573C32.6162 40.1133 32.2664 39.8252 32.2664 39.3108C32.2664 38.5701 33.0174 38.354 33.6141 38.354C34.4989 38.354 35.1367 38.7038 35.1985 39.6503H36.4844C36.4844 38.1174 35.1985 37.3047 33.6656 37.3047C32.3384 37.3047 30.9805 37.994 30.9805 39.4651C30.9805 40.2264 31.3508 40.9877 32.6059 41.3272C33.6141 41.605 34.2828 41.7387 34.7972 41.9342C35.0956 42.0474 35.4042 42.2737 35.4042 42.8395C35.4042 43.3951 34.9824 43.9506 33.8508 43.9506C32.822 43.9506 31.9887 43.5082 31.9887 42.3766H30.7027Z"
                                fill="#F0D37A" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-lg font-medium text-white">14 DAYS RETURNS</h2>
                    </div>
                </div>
                <!-- Slide 8 -->
                <div class="swiper-slide items-center justify-center text-center p-6 bg-[#601042] shadow-md rounded-lg">
                    <div class="flex justify-center">
                        <svg width="55" height="41" viewBox="0 0 55 41" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M45.4888 22.8068L45.096 21.25L36.2502 21.6151L23.096 21.25L21.5246 23.9744L19.5603 26.3095L17.2031 26.6987V29.4231L17.596 31.369L18.7746 31.7582L20.7388 32.5366L21.5246 34.0934L22.7031 36.4286H45.096L45.8817 34.0934L47.4531 32.5366L50.2031 31.369L50.596 27.0879L49.4174 26.6987L46.6674 25.1419L45.4888 22.8068Z"
                                fill="#4D2753" />
                            <path
                                d="M39.4567 16.7277L39.6407 16.5982L32.8756 7.07652C30.4531 3.66525 26.5084 1.62845 22.3299 1.62845H6.24283V0H0V1.49399H4.75052V20.5921H0V22.0861H6.24283V20.617H8.40668L9.36176 21.6479C10.2969 22.6588 11.5654 23.2913 12.9184 23.4456V41H54.6484V16.7277H39.4567ZM10.4561 20.627L9.05832 19.1181H6.24283V3.12243H22.3299C26.0309 3.12243 29.5179 4.92518 31.6618 7.94303L37.9047 16.7277H32.4279L28.2594 10.8165L27.0407 11.678L31.6022 18.142C31.7514 18.3511 31.8111 18.6001 31.7713 18.8541C31.7315 19.1081 31.5972 19.3272 31.3883 19.4766C30.5028 20.119 29.4234 20.378 28.3439 20.2087C27.2645 20.0394 26.3194 19.4567 25.6727 18.5653L19.7831 10.5525L19.2508 10.7567C17.853 11.2896 16.3358 11.2248 14.9878 10.5725C13.6397 9.92008 12.6448 8.77469 12.1922 7.34544L12.0927 7.0317L10.67 7.48488L10.7695 7.79861C11.3465 9.62626 12.615 11.0904 14.3361 11.922C15.8832 12.669 17.6043 12.8134 19.2359 12.3403L22.4642 16.7327H12.9135V21.9317C11.9833 21.7823 11.1078 21.3292 10.4561 20.627ZM53.1611 39.4961H14.4157V18.2217H23.5735L24.4789 19.4517C25.3543 20.6569 26.6477 21.4537 28.1201 21.6877C28.4186 21.7325 28.712 21.7574 29.0055 21.7574C30.1745 21.7574 31.3087 21.3889 32.2687 20.6917C32.796 20.3083 33.1442 19.7406 33.2487 19.0932C33.2934 18.7993 33.2835 18.5055 33.2238 18.2266H53.1611V39.4961Z"
                                fill="#F0D37A" />
                            <path
                                d="M28.668 28.859C28.668 31.6878 30.9663 33.9837 33.7869 33.9837C36.6125 33.9837 38.9058 31.6828 38.9058 28.859C38.9058 26.0352 36.6125 23.7344 33.7869 23.7344C30.9663 23.7344 28.668 26.0303 28.668 28.859ZM33.7869 25.2284C35.7867 25.2284 37.4134 26.857 37.4134 28.859C37.4134 30.8611 35.7867 32.4896 33.7869 32.4896C31.7871 32.4896 30.1604 30.8611 30.1604 28.859C30.1604 26.857 31.7871 25.2284 33.7869 25.2284Z"
                                fill="#F0D37A" />
                            <path
                                d="M46.1665 25.2234C47.1215 26.1796 48.3403 26.7722 49.6634 26.9315V30.781C48.3403 30.9454 47.1215 31.538 46.1665 32.4892C45.2114 33.4453 44.6194 34.6654 44.4602 35.9901H23.1202C22.9561 34.6654 22.3641 33.4453 21.414 32.4892C20.4589 31.533 19.2402 30.9404 17.917 30.781V26.9315C19.2402 26.7672 20.4589 26.1746 21.414 25.2234C22.5432 24.093 23.17 22.584 23.17 20.9755H21.6776C21.6776 22.1807 21.2101 23.3161 20.3594 24.1627C19.5088 25.0143 18.3796 25.4824 17.1758 25.4824H16.4297V32.2302H17.1758C18.3796 32.2302 19.5138 32.6983 20.3594 33.5499C21.2101 34.4015 21.6776 35.5319 21.6776 36.7371V37.4841H45.9128V36.7371C45.9128 35.5319 46.3804 34.3965 47.231 33.5499C48.0816 32.6983 49.2108 32.2302 50.4146 32.2302H51.1607V25.4824H50.4146C49.2108 25.4824 48.0766 25.0143 47.231 24.1627C46.3804 23.3111 45.9128 22.1807 45.9128 20.9755V20.2285H35.5362V21.7225H44.4602C44.6194 23.0472 45.2114 24.2673 46.1665 25.2234Z"
                                fill="#F0D37A" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-lg font-medium text-white">LIFETIME EXCHANGE</h2>
                    </div>
                </div>
                <!-- Slide 9 -->
                <div class="swiper-slide items-center justify-center text-center p-6 bg-[#601042] shadow-md rounded-lg">
                    <div class="flex justify-center">
                        <svg width="46" height="36" viewBox="0 0 46 36" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M44.3907 18.6104H27.2578V33.7963H44.7801V18.9997L44.3907 18.6104Z" fill="#4D2753" />
                            <path
                                d="M1.59073 25.8993V11.8889V11.6504V8.2721H27.9611V6.65566H1.59073V2.45294C1.59073 1.99225 1.96057 1.61643 2.41393 1.61643H38.2332C38.6866 1.61643 39.0564 1.99225 39.0564 2.45294V4.27547H40.6471V2.45294C40.6471 1.09917 39.5654 0 38.2332 0H2.41393C1.0817 0 0 1.09917 0 2.45294V7.45984V8.26806V11.0766V11.8848V25.8993C0 27.4834 1.26861 28.7685 2.82355 28.7685H24.2666V27.152H2.82355C2.14351 27.152 1.59073 26.5903 1.59073 25.8993Z"
                                fill="#F0D37A" />
                            <path
                                d="M44.2733 17.5956H43.8598V13.405C43.8598 9.10936 40.2886 5.48047 36.0612 5.48047C31.7623 5.48047 28.2626 9.03662 28.2626 13.405V17.5956H27.8491C26.8946 17.5956 26.1191 18.3836 26.1191 19.3535V33.3357C26.1191 34.3055 26.8946 35.0935 27.8491 35.0935H44.2694C45.2238 35.0935 45.9993 34.3055 45.9993 33.3357V19.3535C45.9993 18.3836 45.2238 17.5956 44.2733 17.5956ZM29.8534 13.405C29.8534 9.92566 32.6372 7.0969 36.0612 7.0969C39.4256 7.0969 42.269 9.98628 42.269 13.405V17.5956H39.8829V13.405C39.8829 11.336 38.0973 9.52155 36.0612 9.52155C33.9535 9.52155 32.2395 11.2633 32.2395 13.405V17.5956H29.8534V13.405ZM38.2922 17.5956H33.8302V13.405C33.8302 12.1563 34.8324 11.138 36.0612 11.138C37.2304 11.138 38.2922 12.217 38.2922 13.405V17.5956ZM44.4086 33.3316C44.4086 33.4084 44.3449 33.4731 44.2694 33.4731H27.853C27.7775 33.4731 27.7138 33.4084 27.7138 33.3316V19.3495C27.7138 19.2727 27.7775 19.208 27.853 19.208H44.2733C44.3489 19.208 44.4125 19.2727 44.4125 19.3495V33.3316H44.4086Z"
                                fill="#F0D37A" />
                            <path d="M36.8564 23.6367H35.2656V29.6418H36.8564V23.6367Z" fill="#F0D37A" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-lg font-medium text-white">LIFETIME EXCHANGE</h2>
                    </div>
                </div>
            </div>

        </div>
    </div>


    {{-- Horizontal Line --}}
    <div class="flex items-center justify-center w-full mx-auto p-4">
        <div class="flex-grow h-px bg-[#9d6e2a]"></div>
        <div class="mx-4">
            <img src="{{ asset('asset\img\logo.png') }}" alt="Site Logo" class="h-12 w-auto">
        </div>
        <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    </div>

    {{-- video :::::::: Crafted Elegance::::::: --}}
    <div>
        <div>
            <!-- Parallax Section -->
            <div
                class="relative w-full h-[80vh] min-h-[600px] justify-center items-center overflow-hidden cursor-pointer flex">
                <div id="mouse-parallax-container"
                    class="relative ltr:left-[5%] rtl:right-[5%] ltr:right-0 rtl:left-0 top-auto bottom-auto flex items-center w-[95%] h-[90%]"
                    style="transition: transform 0.3s cubic-bezier(0.25, 0.1, 0.25, 1);">

                    <!-- Dark Title Wrapper -->
                    <div class="absolute inset-0 -z-[3] w-full h-full">
                        <div
                            class="static ltr:left-auto rtl:right-auto ltr:right-0 rtl:left-0 inset-y-0 flex justify-end items-center ltr:text-right rtl:text-left w-[80vw] h-[80vh]">
                            <div class="title text-black text-[40px] md:text-[60px] lg:text-[95px] font-light uppercase whitespace-nowrap static ltr:-ml-2 rtl:-mr-2"
                                style="transition: all 0.5s cubic-bezier(0.25, 0.1, 0.25, 1);">
                                Crafted Elegance
                            </div>
                        </div>
                    </div>

                    <!-- Video Section -->
                    <div class="absolute inset-0 -z-[1] w-full md:w-[55vw] justify-start cursor-pointer video-wrapper"
                        style="transition: all 0.5s cubic-bezier(0.25, 0.1, 0.25, 1);">
                        <div class="relative h-full">
                            <video width="100%" height="100%" loop muted autoplay
                                class="w-full h-full object-cover object-right"
                                src="https://d1put4x3vjlh9s.cloudfront.net/public/uploads/widgets/video_1682089105_1691241930.mp4"></video>
                            <div class="inline-flex cursor-pointer absolute bottom-0 ltr:right-0 rtl:left-0 m-4">
                            </div>
                        </div>
                    </div>

                    <!-- White Title Wrapper -->
                    <div
                        class="absolute ltr:left-auto rtl:right-auto ltr:right-0 rtl:left-0 inset-y-0 -z-[1] w-full h-full">
                        <div
                            class="static overflow-hidden w-full md:w-[55vw] justify-end items-center origin-[0%_50%] object-fill">
                            <div class="static flex justify-end items-center w-[80vw] h-[80vh]">
                                <div class="title text-white text-[40px] md:text-[60px] lg:text-[95px] font-light uppercase whitespace-nowrap static"
                                    style="transition: all 0.5s cubic-bezier(0.25, 0.1, 0.25, 1);">
                                    Crafted Elegance
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
{{-- video ::::mobile screen only:::: Crafted Elegance:::::::--}}
{{-- <div class="flex lg:hidden justify-center items-center overflow-hidden hover:cursor-pointer px-6 md:px-28 py-12">
    <div id="mouse-parallax-container" class="relative w-full h-full">
      
        <!-- Background Video -->
        <div class="relative w-[80vw]  h-[50vh] lg:h-[70vh] overflow-hidden">
            <video width="100%" height="100%" loop muted autoplay class="w-full h-full object-cover">
                <source src="https://d1put4x3vjlh9s.cloudfront.net/public/uploads/widgets/video_1682089105_1691241930.mp4" type="video/mp4">
            </video>
  
            <!-- Parallax Title -->
            <div class="absolute inset-0 flex justify-end items-center w-full h-full">
                <div class="text-white text-[8vw] md:text-[10vw] lg:text-[85px] font-light uppercase whitespace-nowrap">
                    Crafted <span class="text-white">Elegance</span>
                </div>
            </div>
        </div>
    </div>
</div> --}}



    <!-- COLLECTIONS -->
    <div class="py-12 mx-auto p-4">
        <div class="container mx-auto">
            <!-- Section Title -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-light text-center mb-2">Shop by Collections</h1>
            </div>

            <!-- Collection Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
                <!-- Collection 1 -->
                <div class="group relative overflow-hidden rounded-lg shadow-lg p-auto">
                    <img src="{{ asset('asset\img\col1.webp') }}" alt="Collection 1"
                        class="object-cover w-full h-full transition duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-0 group-hover:opacity-80 transition duration-300">
                    </div>
                </div>

                <!-- Collection 2 -->
                <div class="group relative overflow-hidden rounded-lg shadow-lg p-auto">
                    <img src="{{ asset('asset\img\col2.webp') }}" alt="Collection 2"
                        class="object-cover w-full h-full transition duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-0 group-hover:opacity-80 transition duration-300">
                    </div>
                </div>

                <!-- Collection 3 -->
                <div class="group relative overflow-hidden rounded-lg shadow-lg p-auto">
                    <img src="{{ asset('asset\img\col3.webp') }}" alt="Collection 3"
                        class="object-cover w-full h-full transition duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-0 group-hover:opacity-80 transition duration-300">
                    </div>
                </div>

                <!-- Collection 4 -->
                <div class="group relative overflow-hidden rounded-lg shadow-lg p-auto">
                    <img src="{{ asset('asset\img\col4.webp') }}" alt="Collection 4"
                        class="object-cover w-full h-full transition duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-0 group-hover:opacity-80 transition duration-300">
                    </div>
                </div>

                <!-- Collection 5 -->
                <div class="group relative overflow-hidden rounded-lg shadow-lg p-auto">
                    <img src="{{ asset('asset\img\col5.webp') }}" alt="Collection 5"
                        class="object-cover w-full h-full transition duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-0 group-hover:opacity-80 transition duration-300">
                    </div>
                </div>

                <!-- Collection 6 -->
                <div class="group relative overflow-hidden rounded-lg shadow-lg p-auto">
                    <img src="{{ asset('asset\img\col6.webp') }}" alt="Collection 6"
                        class="object-cover w-full h-full transition duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-0 group-hover:opacity-80 transition duration-300">
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center p-4 mt-8">
           <a href="{{route('collection')}}"> <button
            class="hover:bg-[#601042] border-2 border-black hover:text-white font-semibold py-2 px-6 bg-white text-[#601042] focus:outline-none focus:ring-4 focus:ring-[#601042]/50 transition-colors duration-300 shadow-md hover:shadow-lg transform hover:scale-105">
            Discover More
        </button></a>
        </div>
    </div>


    <!-- Video Background Section ::::::::::DAIMOND RING-->
    <div class="relative overflow-hidden lg:z-[9999] my-4">
        <!-- Video Section -->
        <video class="object-cover w-full h-[250px] sm:h-[450px] lg:h-[500px]" autoplay loop muted playsinline>
            <source
                src="https://d1put4x3vjlh9s.cloudfront.net/public/uploads/widgets/customizevideo_1682338275_1685535434.mp4"
                type="video/mp4">

            <!-- Fallback for unsupported browsers -->
            <img src="https://via.placeholder.com/1920x1080?text=Video+not+available" alt="Video not available"
                class="object-cover w-full h-full">
        </video>

        <!-- Overlay Section -->
        <div class="absolute top-0 left-0 w-full h-full flex items-center justify-start">
            <div class="text-center lg:text-left  p-4 lg:p-8 rounded-lg">
                <h2 class="font-light text-[28px] md:text-[52px] text-black mb-3">Customize Jewellery</h2>
                <p class="font-light text-lg tracking-wide mb-6">Add a personal touch to your style.</p>
                <a href="{{ route('customjewellery') }}" class="inline-block">
                    <button
                        class="border-black border-2 bg-white hover:bg-[#601042] hover:text-white px-6 py-3 transition-colors">Customize
                        Jewellery</button>
                </a>
            </div>
        </div>
    </div>



    {{-- Horizontal Line --}}
    <div class="flex items-center justify-center w-full mx-auto">
        <div class="flex-grow h-px bg-[#9d6e2a]"></div>
        <div class="mx-4">
            <img src="{{ asset('asset\img\logo.png') }}" alt="Site Logo" class="h-12 w-auto">
        </div>
        <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    </div>


    {{-- img with text --}}
    <div>
        <h1 class="text-3xl font-light text-center mb-2 my-4">Gititra Jewellers</h1>
        <p class="text-center text-gray-600 mb-8">A paradise of precious jewels</p>

    </div>


    {{-- section --}}
    <section class="py-10 bg-[#601042] w-full">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 md:pr-8">
                <h1 class="text-3xl font-light mb-2 text-white">Beginnings - Cornerstone of Each Story!</h1>
                <p class="text-start text-white mb-8">
                    The story of Gititra is indeed an epic scripted by six generations at the forefront of exceptional
                    traditional designs and unparalleled craftsmanship. Discover how Gititra Jewellers Pvt. Ltd, founded in
                    1832, went from a little jewellery shop in Sangli to a renowned design brand in the jewellery industry.
                </p>
                <a href="#"
                    class="inline-block bg-white text-black font-semibold py-3 px-6  hover:bg-[#f6d7ac] transition duration-300 border-2 border-black">READ
                    MORE</a>
            </div>
            <div class="md:w-1/2 mt-6 md:mt-0">
                <iframe class="w-full h-64 md:h-80" src="https://www.youtube.com/embed/dZBm_NxMUho?si=hxFuI8SCHC3TGq4I"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </section>


    {{-- Horizontal Line --}}
    <div class="flex items-center justify-center w-full mx-auto my-8 ">
        <div class="flex-grow h-px bg-[#9d6e2a]"></div>
        <div class="mx-4">
            <img src="{{ asset('asset\img\logo.png') }}" alt="Site Logo" class="h-12 w-auto">
        </div>
        <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    </div>


    {{-- SHOP --}}
    <section class="bg-[#f8edde] py-10 md:py-16">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <!-- Image Section -->
            <div class="sec w-full md:w-1/2 mb-6 md:mb-0">
                <img src="{{ asset('asset/img/store.webp') }}" alt="Jewellery Showcase"
                    class="w-full h-auto rounded-lg shadow-md">
            </div>

            <!-- Text Section -->
            <div class="sec w-full md:w-1/2 md:pl-8 text-center md:text-left">
                <h1 class="text-2xl md:text-3xl font-light mb-4 md:mb-2">
                    Come and Say Hi
                </h1>
                <p class="text-lg md:text-xl mb-6 font-light">
                    Explore iconic traditional jewellery, gold and diamond engagement rings, silver classics, elegant
                    accessories, and precious gifts for any occasion at our PNG Jewellers stores across the globe.
                </p>
                <a href="{{ route('storelocator') }}"
                    class="inline-block border-2 border-black bg-white text-black font-semibold py-3 px-6 hover:bg-[#601042] hover:text-white transition duration-300">
                    Find a Store Location
                </a>
            </div>
        </div>
    </section>


    {{-- Horizontal Line --}}
    <div class="flex items-center justify-center w-full mx-auto my-8 ">
        <div class="flex-grow h-px bg-[#9d6e2a]"></div>
        <div class="mx-4">
            <img src="{{ asset('asset\img\logo.png') }}" alt="Site Logo" class="h-12 w-auto">
        </div>
        <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    </div>


    {{-- MULTIPLE SLIDER WITH TEXT --}}
    <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-0 bg-[#faf1e3] w-full">
        <div class="flex items-center justify-center py-8 px-4 lg:px-8 bg-[#faf1e3] ">
            <div class=" p-6  max-w-3xl mx-auto">
                <h1 class="text-3xl font-light mb-2">
                    Styled by <span class="text-[#601042]">Gititra</span>
                </h1>
                <p class=" text-gray-600 mb-8">
                    The brand builds a family of long-term ambassadors and celebrities passionate about jewellery. Discover
                    all PNG Jewellers brand ambassadors and celebrities who have launched campaigns and collections,
                    wholeheartedly endorsing the brand.
                </p>
            </div>
        </div>


        <div class="container py-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-0">

                <!-- Slider 1 -->
                <div id="celebrity-slider-1" class="w-full overflow-hidden mb-0 relative">
                    <div class="flex transition-transform duration-300 ease-in-out">
                        <div class="max-w-full flex-shrink-0">
                            <img src="{{ asset('asset\img\s1-a.webp') }}" alt="Slider 1 Image 1"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="max-w-full flex-shrink-0">
                            <img src="{{ asset('asset\img\s1b.webp') }}" alt="Slider 1 Image 2"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="max-w-full flex-shrink-0">
                            <img src="{{ asset('asset\img\s1-c.webp') }}" alt="Slider 1 Image 3"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>

                <div>
                    <!-- Slider 2 -->
                    <div id="celebrity-slider-2" class="w-full overflow-hidden mb-0 relative">
                        <div class="flex transition-transform duration-300 ease-in-out">
                            <div class="min-w-full flex-shrink-0">
                                <img src="{{ asset('asset\img\s2A.webp') }}" alt="Slider 2 Image 1"
                                    class="w-full h-72 object-cover">
                            </div>
                            <div class="min-w-full flex-shrink-0">
                                <img src="{{ asset('asset\img\s2-C.webp') }}" alt="Slider 2 Image 2"
                                    class="w-full h-72 object-cover">
                            </div>
                            <div class="min-w-full flex-shrink-0">
                                <img src="{{ asset('asset\img\s2-C.webp') }}" alt="Slider 2 Image 3"
                                    class="w-full h-72 object-cover">
                            </div>
                        </div>
                    </div>

                    <!-- Slider 3 -->
                    <div id="celebrity-slider-3" class="w-full overflow-hidden relative">
                        <div class="flex transition-transform duration-300 ease-in-out">
                            <div class="min-w-full flex-shrink-0">
                                <img src="{{ asset('asset\img\s3A.webp') }}" alt="Slider 3 Image 1"
                                    class="w-full h-72 object-cover">
                            </div>
                            <div class="min-w-full flex-shrink-0">
                                <img src="{{ asset('asset\img\s3B.webp') }}" alt="Slider 3 Image 2"
                                    class="w-full h-72 object-cover">
                            </div>
                            <div class="min-w-full flex-shrink-0">
                                <img src="{{ asset('asset\img\s3A.webp') }}" alt="Slider 3 Image 3"
                                    class="w-full h-72 object-cover">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    {{-- Horizontal Line --}}
    <div class="flex items-center justify-center w-full mx-auto my-8 ">
        <div class="flex-grow h-px bg-[#9d6e2a]"></div>
        <div class="mx-4">
            <img src="{{ asset('asset\img\logo.png') }}" alt="Site Logo" class="h-12 w-auto">
        </div>
        <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    </div>


    {{-- ::::::::::: mail--::::::::: --}}
    <div class=" w-full">
        <div class="bg-gradient-to-r from-[#b87aa2] to-[#dbc8a8]  rounded shadow-xs p-6  text-center">
            <h2 class="text-2xl lg:text-3xl font-bold text-white mb-4">
                Latest from <span class="text-[#601042]">Gititra Jewellers</span>
            </h2>
            <p class="text-lg lg:text-xl text-gray-200 mb-6">
                Be the first to know about exciting new designs, special events, store openings, and much more.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center space-y-4 sm:space-y-0 sm:space-x-0 p-0">
                <input type="email" placeholder="Your Email Address"
                    class="w-full sm:w-1/2 p-3  border-2 border-black  focus:outline-none focus:ring-2 focus:ring-yellow-500" />
                <button
                    class="w-full sm:w-auto px-6 py-3 bg-white text-black font-semibold border-2 border-black shadow-md hover:bg-[#601042] hover:text-white focus:outline-none focus:ring-2 focus:ring-yellow-100">
                    Subscribe
                </button>

            </div>
        </div>
    </div>

    {{-- Horizontal Line --}}
    <div class="flex items-center justify-center w-full mx-auto my-8 ">
        <div class="flex-grow h-px bg-[#9d6e2a]"></div>
        <div class="mx-4">
            <img src="{{ asset('asset\img\logo.png') }}" alt="Site Logo" class="h-12 w-auto">
        </div>
        <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    </div>
    <!-- JavaScript for slider functionality (example using vanilla JS) -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sliders = document.querySelectorAll('[id^="celebrity-slider-"]');

            sliders.forEach(slider => {
                let currentIndex = 0;
                const items = slider.querySelectorAll('.flex > div');
                const totalItems = items.length;

                function moveToNextSlide() {
                    currentIndex = (currentIndex + 1) % totalItems;
                    updateSlider();
                }

                function updateSlider() {
                    const offset = -currentIndex * 100;
                    slider.querySelector('.flex').style.transform = `translateX(${offset}%)`;
                }

                setInterval(moveToNextSlide, 3000); // Change slide every 3 seconds
            });
        });
    </script>
@endsection

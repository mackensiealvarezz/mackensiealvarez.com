<div class="relative pb-10 md:pb-20">
    <div class="container px-6 py-20 mx-auto lg:px-0">
        {{-- Top part --}}
        <div class="justify-between md:flex align-items-center">

            {{-- text --}}
            <div class="relative w-2/3 space-y-3">
                <label
                    class="absolute top-0 left-0 text-4xl font-bold text-blue-300 transform -translate-y-8 md:translate-x-10 md:-translate-y-1 md:text-7xl opacity-20">
                    print('welcome')</label>
                <h2 class="text-sm font-light text-blue-200">i create things</h2>
                <h1 class="mb-1 text-5xl font-bold leading-tight tracking-wide text-white md:text-7xl">
                    FullStack <br />
                    Developer
                </h1>
                <p class="pb-2 text-xs font-light text-blue-100">currently exploring new frontend frameworks like
                    tailwindcss.(this site was made using it) </p>
                <ul
                    class="flex pb-4 space-x-3 text-blue-100 fill-current md:pb-0 align-items-center justify-content-between">
                    <li>
                        <a href="#">
                            <svg class="w-4 h-4" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <title>Instagram icon</title>
                                <path
                                    d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg class="w-4 h-4 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <title>Twitter icon</title>
                                <path
                                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a>
                    </li>

                </ul>
            </div>
            {{-- image --}}
            <div class="flex-grow">
                <x-terminal />
            </div><!-- /. -->
        </div>


        {{-- Bottom card --}}
        <div class="p-10 mt-16 bg-gray-800 shadow-lg rounded-2xl z-1">
            <div class="space-y-3 z-1 md:space-y-0 md:space-x-8 md:flex">
                {{-- profile image --}}
                <img class="mx-auto border-4 border-gray-900 rounded-full justify-self-center w-52 h-52"
                    src="https://avatars1.githubusercontent.com/u/6855367?s=460&u=17b4f1ebaf437e01697ad5e681fc136d9bfa8736&v=4">
                {{-- right side --}}
                <div class="relative">
                    <span
                        class="absolute top-0 left-0 font-bold text-blue-300 transform -translate-y-14 text-8xl md:-translate-y-9 md:text-9xl opacity-20">about</span>
                    <h1 class="mb-4 text-4xl font-bold leading-normal text-white">Hey! I'm Mackensie Alvarez
                    </h1>
                    <p class="text-base font-light leading-loose text-blue-100 text-normal">Experienced Mobile and Web
                        Developer
                        that
                        is
                        extremely
                        passionate about his
                        work. Strong
                        engineering professional with a
                        Bachelor’s Degree focused in Computer Science from New Jersey City University. Coding started as
                        a hobby at a very early
                        age. I realized very early on that I wanted to be a programmer because of the art of coding. The
                        ability to think of an
                        idea and make it exactly how you imagine.</p>
                </div>
            </div>
        </div>


    </div>




</div>

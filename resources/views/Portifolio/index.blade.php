<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            background-color: hsl(218, 41%, 15%);
            background-image: radial-gradient(1250px circle at 100% 100%,
                    hsl(218, 41%, 45%) 19%,
                    hsl(218, 41%, 30%) 35%,
                    hsl(218, 41%, 20%) 75%,
                    hsl(218, 41%, 19%) 80%,
                    transparent 100%),
                radial-gradient(1250px circle at 100% 100%,
                    hsl(218, 38%, 46%) 15%,
                    hsl(218, 41%, 30%) 35%,
                    hsl(218, 41%, 20%) 75%,
                    hsl(216, 42%, 15%) 80%,
                    transparent 100%),
                radial-gradient(650px circle at 0% 0%,
                    hsl(219, 28%, 48%) 15%,
                    hsl(218, 41%, 30%) 35%,
                    hsl(218, 41%, 20%) 75%,
                    hsl(218, 41%, 19%) 80%,
                    transparent 100%);

        }

        #radius-shape-1 {
            height: 220px;
            width: 220px;
            top: -60px;
            left: -130px;
            background: radial-gradient(#fca5f1, #cdb5ff);
            /* background: radial-gradient(#44006b, #ad1fff); */
            overflow: hidden;
        }

        #radius-shape-2 {
            /* border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%; */
            border-radius: 50%;
            top: 110px;
            right: -10px;
            /* width: 300px;  */
            /* height: 300px; */
            background: radial-gradient(#fca5f1, #cdb5ff);
            /* background: radial-gradient(#44006b, #ad1fff); */
            overflow: hidden;
        }

        #radius-shape-3 {
            height: 100px;
            width: 100px;
            top: -60px;
            right: -10px;
            background: radial-gradient(#fca5f1, #cdb5ff);
            /* background: radial-gradient(#44006b, #ad1fff); */
            overflow: hidden;
        }

         

        /* .bg-g {
            background: #332F2D;
        } */
    </style>
    <title>Portfolio</title>
</head>

<body>
    <div class="h-full w-full   ">
        <!-- ========== Start navbar ========== -->

        <x-navbar />
        <!-- ========== End navbar ========== -->

        <div>
            <!-- ========== Start hero section ========== -->

            <div id="hero"
                class="background-radial-gradient flex  px-6 py-12 text-center md:px-12 lg:py-24 lg:text-left   overflow-hidden    h-screen  ">
                <div
                    class="relative w-full  flex justify-around text-neutral-800 sm:max-w-2xl md:max-w-3xl lg:max-w-5xl xl:max-w-7xl">
                    <div class="grid items-center justify-center  gap-12 lg:grid-cols-2 ">
                        <div class="mt-12 lg:mt-0" style="z-index: 10">
                            <div class="relative mb-10">
                                <h1
                                    class="mt-0 text-center   absolute   top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 mh mb-12  text-5xl font-bold tracking-tight md:text-6xl xl:text-7xl text-[hsl(218,81%,95%)]">
                                    Hello !
                                </h1>
                                <img class="w-72" src="{{ asset('storage/assest/bg.png') }}" alt="">
                            </div>
                            <p class="opacity-70 mp text-3xl text-[hsl(218,81%,85%)]">
                                I'm Abdelhaq. frontend and backend. Welcome to my personal blog.
                                I am very excited to work together .
                            </p>

                            {{-- <div id="radius-shape-1" class="absolute rounded-full shadow-lg"></div>
            <div id="radius-shape-2" class="absolute shadow-lg bottom-0"></div> --}}
                        </div>
                    </div>
                    <div id="radius-shape-1" class="absolute rounded-full shadow-lg"></div>
                    <div id="radius-shape-3" class="absolute rounded-full shadow-lg"></div>
                    <div id="radius-shape-2"
                        class="absolute shadow-lg h-40 w-40  lg:w-72 lg:h-72 md:w-40 md:h-40 sm:h-40  sm:w-40"><img
                            class="ml-3" src="{{ asset('storage/assest/profile.png') }}" alt=""></div>
                </div>
            </div>
            <!-- ========== End hero section ========== -->


            <!-- Section: about Block -->
            <section class=" h-fill  relative z-1  w-100 p-4">
                <div id="about" class="flex h-full min-h-screen   ">
                    <div class="flex w-1/4 bg-g   items-center  ">
                        <h1
                            class="lg:text-9xl  md:text-7xl   text-5xl -translate-x-7 h-fill inline-block   origin-center text-center  text-white -rotate-90  h-boold">
                            ABOUT <p>ME</p>
                        </h1>
                    </div>
                    <div class="flex  flex-col  lg:flex-row w-3/4 bg-g  items-center">
                        <div class="w-1/2 ">
                            <div>
                                <img class="border-solid  border-4 rounded border-white-600"
                                    src="{{ asset('storage/assest/profile.png') }}" alt="">
                            </div>
                        </div>
                        <div class="lg:w-1/2 h-72 ml-3 md:w-full md:px-2 sm:w-full sm:px-2 h-min">
                            <h1 class="h-bold lg:text-5xl md:text-3xl text-white">ABDELHAQ LAHCINI</h1>
                            <hr class="w-2/5 xl:w-3/5 lg:w-4/6 md:w-2/5 -mt-0.5 sm:w-2/5 h-1 my-8 bg-gray-200 border-0 rounded dark:bg-gray-700">
                            <p class="leading-loose tracking-wide font-semibold text-white pf">
                                I am <span>Abdelhaq Lahcini</span>,
                                a 19-year-old Full Stack Developer passionate about building robust and user-centric
                                applications.<br /> With my attention to detail and problem-solving skills, I excel in
                                this field.<br /> My commitment to staying updated with the latest technologies ensures
                                the delivery of cutting-edge solutions that meet the needs of clients and users alike.
                                Committed to excellence and continuous learning, I am excited about the opportunity to
                                work with you.
                            </p>

                        </div>
                    </div> 
                </div>
            </section>
            <!-- Section: aboute Block -->

            <!-- ========== Start Skills ========== -->
            <section id="skills" class="h-fill w-100  flex justify-center">
                <div class="skills w-10/12">
                    <h1 class="mb-3 text-5xl font-semibold text-white h-bold text-center">My Skills</h1><br />
                    <div class="w-full flex flex-wrap gap-4  justify-center ">
                        <div class=" basis-1/4 backdrop-blur-sm bg-white/10 w-fill rounded-lg  ">
                            <div class="mt-2 relative mx-2   flex justify-center  "><img class="w-1/2"
                                    src="{{ asset('storage/assest/html_css.jpg') }}" alt=""></div>
                            <div class=" ">
                                <h1 class="text-white text-center font-sans   antialiased font-semibold text-base">
                                    HTML&CSS</h1>
                            </div>
                        </div>
                        <div class=" basis-1/4 backdrop-blur-sm bg-white/10 w-fill rounded-lg  ">
                            <div class="mt-2 relative mx-2   flex justify-center  "><img class="w-1/2"
                                    src="{{ asset('storage/assest/tailwind.png') }}" alt=""></div>
                            <div class=" ">
                                <h1 class="text-white text-center font-sans   antialiased font-semibold text-base">
                                    Tailwind</h1>
                            </div>
                        </div>
                        <div class=" basis-1/4 backdrop-blur-sm bg-white/10 w-fill rounded-lg  ">
                            <div class="mt-2 relative mx-2   flex justify-center  "><img class="w-1/2"
                                    src="{{ asset('storage/assest/bootstrap.png') }}" alt=""></div>
                            <div class=" ">
                                <h1 class="text-white text-center font-sans   antialiased font-semibold text-base">
                                    Bootstrap</h1>
                            </div>
                        </div>
                        <div class=" basis-1/4 backdrop-blur-sm bg-white/10 w-fill rounded-lg  ">
                            <div class="mt-2 relative mx-2   flex justify-center  "><img class="w-1/2"
                                    src="{{ asset('storage/assest/materialUI.png') }}" alt=""></div>
                            <div class=" ">
                                <h1 class="text-white text-center font-sans   antialiased font-semibold text-base">
                                    Material UI</h1>
                            </div>
                        </div>
                        <div class=" basis-1/4 backdrop-blur-sm bg-white/10 w-fill rounded-lg  ">
                            <div class="mt-2 relative mx-2   flex justify-center  "><img class="w-1/2"
                                    src="{{ asset('storage/assest/Js.png') }}" alt=""></div>
                            <div class=" ">
                                <h1 class="text-white text-center font-sans   antialiased font-semibold text-base">
                                    Javascript</h1>
                            </div>
                        </div>
                        <div class=" basis-1/4 backdrop-blur-sm bg-white/10 w-fill rounded-lg  ">
                            <div class="mt-2 relative mx-2   flex justify-center "><img class="w-1/2"
                                    src="{{ asset('storage/assest/react.png') }}" alt=""></div>
                            <div class=" ">
                                <h1 class="text-white text-center font-sans  antialiased font-semibold text-base">React
                                    Js</h1>
                            </div>
                        </div>
                        <div class=" basis-1/4 backdrop-blur-sm bg-white/10 w-fill rounded-lg  ">
                            <div class="mt-2 relative mx-2   flex justify-center  "><img class="w-1/2"
                                    src="{{ asset('storage/assest/python.png') }}" alt=""></div>
                            <div class=" ">
                                <h1 class="text-white text-center font-sans   antialiased font-semibold text-base">
                                    Python</h1>
                            </div>
                        </div>
                        <div class="basis-1/4 backdrop-blur-sm bg-white/10 w-fill rounded-lg  ">
                            <div class="mt-2 relative mx-2   flex justify-center  "><img class="w-1/2"
                                    src="{{ asset('storage/assest/Git.png') }}" alt=""></div>
                            <div class=" ">
                                <h1 class="text-white text-center font-sans   antialiased font-semibold text-base">Git
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-4 justify-around mt-2">
                        <div class=" basis-1/4  backdrop-blur-sm bg-white/10 w-fill rounded-lg">
                            <div class="mt-2   relative     flex justify-center  "><img
                                    class="w-1/2 h-full object-cover" src="{{ asset('storage/assest/laravel.png') }}"
                                    alt=""></div>
                            <div class=" ">
                                <h1 class="text-white text-center font-sans text-base antialiased font-semibold">
                                    LARAVEL</h1>
                            </div>
                        </div>
                        <div class=" basis-1/4 backdrop-blur-sm bg-white/10 w-fill rounded-lg">
                            <div class="mt-2 relative   flex justify-center  "><img class="w-1/2 object-cover"
                                    src="{{ asset('storage/assest/mongodb.png') }}" alt=""></div>
                            <div class="">
                                <h1 class="text-white text-center font-sans text-base antialiased font-semibold">
                                    MongoDB</h1>
                            </div>
                        </div>
                        <div class=" basis-1/4 backdrop-blur-sm bg-white/10 w-fill rounded-lg">
                            <div class="mt-2 relative     flex justify-center  "><img
                                    class=" w-1/2 h-full   object-cover"
                                    src="{{ asset('storage/assest/mysql.png') }}" alt=""></div>
                            <div class=" ">
                                <h1 class="text-white text-center font-sans text-base antialiased font-semibold">MySQL
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ========== End Skills ========== -->

            <!-- ========== Start projects ========== -->
            <section id="projects" class="h-fill w-100 flex items-center p-3">
                <div class="h-full">
                    <h1 class="mb-3 text-5xl font-semibold text-white h-bold text-center">My Projects</h1>
                    <div class="flex flex-wrap gap-4 justify-center">
                        <div class="basis-1/3 max-w-xs overflow-hidden bg-cover bg-no-repeat">
                            <div class="relative transition duration-300 ease-in-out hover:scale-110 ">
                                <img class="rounded h-full w-full object-cover  object-cover object-contain"
                                    src="{{ asset('storage/assest/MusicPlayer.png') }}" alt="">
                                <div
                                    class="absolute flex items-center justify-center bottom-0 left-0 right-0 top-0 h-full w-full z-2 overflow-hidden bg-indigo-700 bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-50">
                                    <h1 class="text-center text-white  ">
                                        hello
                                    </h1>
                                </div>

                            </div>
                        </div>
                        <div class="basis-1/3 max-w-xs overflow-hidden bg-cover bg-no-repeat">
                            <div class="relative transition duration-300 ease-in-out hover:scale-110 ">
                                <img class="rounded h-full w-full object-cover  object-cover object-contain"
                                    src="{{ asset('storage/assest/FirstProject.png') }}" alt="">
                                <div
                                    class="absolute flex items-center justify-center bottom-0 left-0 right-0 top-0 h-full w-full z-2 overflow-hidden bg-indigo-700 bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-50">
                                    <h1 class="text-center text-white  ">
                                        hello
                                    </h1>
                                </div>

                            </div>
                        </div>
                        <div class="basis-1/3 max-w-xs overflow-hidden bg-cover bg-no-repeat">
                            <div class="relative transition duration-300 ease-in-out hover:scale-110 ">
                                <img class="rounded h-full w-full object-cover  object-cover object-contain"
                                    src="{{ asset('storage/assest/projectCar.png') }}" alt="">
                                <div
                                    class="absolute flex items-center justify-center bottom-0 left-0 right-0 top-0 h-full w-full z-2 overflow-hidden bg-indigo-700 bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-50">
                                    <h1 class="text-center text-white  ">
                                        hello
                                    </h1>
                                </div>

                            </div>
                        </div>
                        <div class="basis-1/3 max-w-xs overflow-hidden bg-cover bg-no-repeat">
                            <div class="relative transition duration-300 ease-in-out hover:scale-110 ">
                                <img class="rounded h-full w-full object-cover  object-cover object-contain"
                                    src="{{ asset('storage/assest/Login.png') }}" alt="">
                                <div
                                    class="absolute flex items-center justify-center bottom-0 left-0 right-0 top-0 h-full w-full z-2 overflow-hidden bg-indigo-700 bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-50">
                                    <h1 class="text-center text-white  ">
                                        hello
                                    </h1>
                                </div>

                            </div>
                        </div>
                        <div class="basis-1/3 max-w-xs overflow-hidden bg-cover bg-no-repeat">
                            <div class="relative transition duration-300 ease-in-out hover:scale-110 ">
                                <img class="rounded h-full w-full object-cover  object-cover object-contain"
                                    src="{{ asset('storage/assest/MusicPlayer.png') }}" alt="">
                                <div
                                    class="absolute flex items-center justify-center bottom-0 left-0 right-0 top-0 h-full w-full z-2 overflow-hidden bg-indigo-700 bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-50">
                                    <h1 class="text-center text-white  ">
                                        hello
                                    </h1>
                                </div>

                            </div>
                        </div>
                        <div class="basis-1/3 max-w-xs overflow-hidden bg-cover bg-no-repeat">
                            <div class="relative transition duration-300 ease-in-out hover:scale-110 ">
                                <img class="rounded h-full w-full object-cover  object-cover object-contain"
                                    src="{{ asset('storage/assest/MusicPlayer.png') }}" alt="">
                                <div
                                    class="absolute flex items-center justify-center bottom-0 left-0 right-0 top-0 h-full w-full z-2 overflow-hidden bg-indigo-700 bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-50">
                                    <h1 class="text-center text-white  ">
                                        hello
                                    </h1>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ========== End projects ========== -->

            <!-- ========== Start experience ========== -->
            <section class="h-fill min-h-screen w-100 flex justify-center items-center mt-4">
                <div class="h-full  w-full flex flex-wrap justify-center">
                    <div class="w-4/5  ">
                        <h2 class="h-bold text-5xl font-semibold text-white">Experience</h2>
                    </div>
                    <div class="w-full h-full ">
                        <div class="flex   mt-3">
                            <div class="w-1/4 flex justify-end  mr-2 relative">
                                <div class="w-1/2   text-center pf text-white">
                                    2023
                                </div>
                                <div class="w-4 h-4 bg-pink-400 drop rounded-full mt-2 absolute">

                                </div>
                                <div class="bg-pink-200 h-4/5 w-1 mt-4 mr-1.5">

                                </div>
                            </div>
                            <div class="w-3/4">
                                <h1 class="text-4xl text-white pf">interface to streamline lawyers' tasks</h1>
                                <p class="text-1xl text-slate-300 ptext">I focused on designing an intuitive interface
                                    to streamline my tasks as a lawyer, aiming to make my workflows more efficient. I
                                    simplified document management, client communication, and case tracking for enhanced
                                    productivity. My priority was incorporating user-friendly features for seamless
                                    navigation and accessibility. I aimed to transform legal processes with a
                                    user-centric interface tailored to meet my needs as a legal professional.</p>
                            </div>
                        </div>
                        <div class="flex   mt-3">
                            <div class="w-1/4 flex justify-end  mr-2 relative">
                                <div class="w-1/2   text-center pf text-white">
                                    2024
                                </div>
                                <div class="w-4 h-4 bg-pink-400 drop rounded-full mt-2 absolute">

                                </div>
                                <div class="bg-pink-200 h-4/5 w-1 mt-4 mr-1.5">

                                </div>
                            </div>
                            <div class="w-3/4">
                                <h1 class="text-4xl text-white pf">Managing School Absences</h1>
                                <p class="text-1xl text-slate-300 ptext">I designed a straightforward interface for
                                    efficient absence management, simplifying the recording, tracking, and reporting of
                                    absences effortlessly. I incorporated user-friendly features for intuitive
                                    navigation and accessibility. Enhancing absence management was my priority,
                                    tailoring the user-centric interface to meet organizational needs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ========== End experience ========== -->

            <!-- ========== Start contact me ========== -->
            <section class=" h-fill min-h-screen w-full">
                <h1 class="text-5xl font-semibold text-white h-bold text-center">Contact Me</h1>
                <div class="flex justify-between">
                    <hr class="w-1/3 bg-pink-400  -mt-2  h-1 my-8   border-0 rounded dark:bg-gray-700">
                <hr class="w-1/3 -mt-2  bg-pink-400 h-1 my-8   border-0 rounded dark:bg-gray-700">
                </div>
                <div class="w-full  ">
                    <section class="text-gray-600 body-font relative">
                        <div class="container px-5 py-24 mx-auto"> 
                          <div class="lg:w-1/2 md:w-2/3 mx-auto">
                            <div class="flex flex-wrap -m-2">
                              <div class="p-2 w-1/2">
                                <div class="relative">
                                  <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                                  <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>
                              <div class="p-2 w-1/2">
                                <div class="relative">
                                  <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                                  <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>
                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                                  <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                                </div>
                              </div>
                              <div class="p-2 w-full">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Send</button>
                              </div>
                              <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
                                <a class="text-indigo-500">example@email.com</a>
                                <p class="leading-normal my-5">49 Smith St.
                                  <br>Saint Cloud, MN 56301
                                </p>
                                <span class="inline-flex">
                                  <a class="text-gray-500">
                                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                      <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                    </svg>
                                  </a>
                                  <a class="ml-4 text-gray-500">
                                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                      <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                                    </svg>
                                  </a>
                                  <a class="ml-4 text-gray-500">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                      <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                      <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                                    </svg>
                                  </a>
                                  <a class="ml-4 text-gray-500">
                                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                      <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                    </svg>
                                  </a>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>
                </div>
            </section>
            <!-- ========== End contact me ========== -->
            

        </div>

    </div>

    <x-navjs />
</body>

</html>

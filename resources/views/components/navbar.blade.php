
  
    <nav>
        <div class="py-4 px-6 w-full flex fixed    justify-between items-center bg-white  z-40 top-0 left-0 ">
            <div aria-label="logo" role="img" tabindex="0" class="focus:outline-none w-24">
                <img src="{{ asset("storage/assest/Logo.png") }}" alt="logo" />
            </div>
            <div class="flex items-center mr-10">
                <div class="relative mr-6">
                    {{-- <button class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none bg-gray-100 border-gray-300 border transition duration-150 ease-in-out hover:bg-gray-300 rounded text-gray-600 px-5 py-2 text-xs">Manage</button> --}}
                </div>
                <button id="menu" aria-label="open menu" class="focus:outline-none focus:ring-2 focus:ring-gray-600 rounded-md text-gray-800" onclick="sidebarHandler(true)">
                    <img class="icon icon-tabler icon-tabler-menu-2" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg10.svg" alt="menu" />
                </button>
            </div>
        </div>
    </nav>
        <!--Mobile responsive sidebar--> 
            <div class=" h-screen w-full fixed  transition duration-150 ease-in-out transform -translate-x-full z-40 top-0" id="mobile-nav">
                <div class="bg-gray-800 opacity-50 w-full h-full" onclick="sidebarHandler(false)"></div>
                <div class="w-64 z-40 fixed inset-0 overflow-y-auto z-40 top-0 bg-white shadow h-full flex-col justify-between   pb-4 transition duration-150 ease-in-out">
                    <div class="px-6 h-full ">
                        <div class="flex flex-col justify-between h-full w-full">
                            <div>
                                <div class="mt-6 flex w-full items-center justify-between">
                                    <div class="flex items-center justify-between w-full">
                                        <div class="flex items-center">
                                            <img class="w-24" src="{{ asset("storage/assest/Logo.png") }}" alt="logo" />
                                            <p tabindex="0" class="focus:outline-none text-base md:text-2xl text-gray-800 ml-3"></p>
                                        </div>
                                        <button id="cross" aria-label="close menu" class="focus:outline-none focus:ring-2 rounded-md text-gray-800" onclick="sidebarHandler(false)">
                                            <img class="icon icon-tabler icon-tabler-x" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg11.svg" alt="cross" />
                                        </button>
                                    </div>
                                </div>
                                <ul class="f-m-m">
                                    <li>
                                        <a class="cursor-pointer">
                                            <div class="text-gray-800 pt-10">
                                                <a href="#hero">
                                                    <div class="flex items-center">
                                                        <div class="w-6 h-6 md:w-8 md:h-8 text-indigo-700">
                                                           <img class="icon icon-tabler icon-tabler-grid" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg12.svg" alt="dashboard" />
                                                        </div>
                                                        <p tabindex="0" class="focus:outline-none focus:text-indigo-600 text-indigo-700 xl:text-base text-base ml-3">Home</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="cursor-pointer">
                                            <div class="text-gray-800 pt-8">
                                                <a href="#about">
                                                    <div class="flex items-center justify-between">
                                                        <div class="flex items-center">
                                                            <div class="w-6 h-6 md:w-8 md:h-8 text-gray-800">
                                                               <img class="icon icon-tabler icon-tabler-puzzle" src="{{ asset('storage/assest/userIcon.png') }}" alt="products" />
                                                            </div>
                                                            <p tabindex="0" class="focus:outline-none focus:text-indigo-600 text-gray-800 xl:text-base md:text-2xl text-base ml-3">About Me </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </a>
                                    </li>
                                    
                                    <li class="text-gray-800 pt-8 cursor-pointer">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <div class="w-6 h-6 md:w-8 md:h-8 text-gray-800">
                                                    <img class="icon icon-tabler icon-tabler-code" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg15.svg" alt="deliverables" />
                                                </div>
                                                <p tabindex="0" class="focus:outline-none focus:text-indigo-600 text-gray-800 xl:text-base md:text-2xl text-base ml-3">Projects</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="cursor-pointer">
                                            <div class="text-gray-800 pt-8">
                                                <div class="flex items-center">
                                                    <div class="w-6 h-6 md:w-8 md:h-8 text-gray-800">
                                                        <img class="icon icon-tabler icon-tabler-compass" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg14.svg" alt="performance" />
                                                    </div> 
                                                    <p tabindex="0" class="focus:outline-none focus:text-indigo-600 text-gray-800 xl:text-base md:text-2xl text-base ml-3">Performance</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="w-full pt-4">
                                <div class="flex justify-center mb-4 w-full">
                                    <div class="relative w-full">
                                        <div class="text-gray-500 absolute ml-4 inset-0 m-auto w-4 h-4">
                                            <img class="icon icon-tabler icon-tabler-search" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg16.svg" alt="search" />
                                        </div>
                                        <input class="focus:ring-2 focus:ring-gray-600 bg-gray-100 focus:outline-none rounded w-full text-sm text-gray-500 pl-10 py-2" type="text" placeholder="Search" />
                                    </div>
                                </div>
                                <div class="border-t border-gray-300">
                                    <div class="w-full flex items-center justify-between pt-1">
                                        <div class="flex items-center">
                                            <img alt="profile-pic" src="{{ asset('storage/assest/profile.png') }}" tabindex="0" class="focus:outline-none  w-8 h-8 rounded-md" />
                                            <p tabindex="0" class="focus:outline-none text-gray-800 text-base leading-4 ml-2">Lahcini Abdelhaq</p>
                                        </div>
                                        <ul class="flex">
                                            <li class="cursor-pointer text-gray-800 pt-5 pb-3">
                                                <div tabindex="0" class="focus:outline-none focus:text-indigo-600 w-6 h-6 md:w-8 md:h-8">
                                                   <img class="icon icon-tabler icon-tabler-messages" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg17.svg" alt="chat" />
                                                </div>
                                            </li>
                                            <li class="cursor-pointer text-gray-800 pt-5 pb-3 pl-3">
                                                <div tabindex="0" class="focus:outline-none focus:text-indigo-600 w-6 h-6 md:w-8 md:h-8">
                                                    <img class="icon icon-tabler icon-tabler-bell" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg18.svg" alt="bell" />
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
 

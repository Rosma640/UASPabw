<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<x-app-layout>
    <body>
  <header class="bg-[#FFFAF2]">
    <nav class="container relative flex py-5 items-center justify-between ">
      <a href="">
        <img src={{asset("gambar/logo-dark.svg")}} alt="">
      </a>

      <div class="space-x-4 flex-1 ml-12 hidden md:block">
        <a href="" class="text-[#FF994F] font-bold">Home</a>
        <a href="">Course</a>
        <a href="">Mentors</a>
        <a href="">About Us</a>
        <a href="">Contact</a>
      </div>

      <div class="flex items-center space-x-5 hidden md:flex">
        <button class="outline outline-2 py-3 px-8 text-[#FF994F] rounded-full">Log in</button>
        <button class="bg-[#FF994F] py-3 px-8 text-white rounded-full">Registration</button>
      </div>

      <a href="#" class="Group2 md:hidden">
        <img src="./gambar/Group2.svg" alt="">
      </a>

      <div
        class="popup absolute inset-x-0 top-10 border border-gray-300 bg-white shadow-lg right-12 rounded-lg p-4 hidden md:hidden z-40">
        <div class="flex space-x-5">
          <div class="flex h-full items-center space-x-1 w-full mb-4 border border-gray-400 px-3 rounded-full">
            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="8.36556" cy="8.36458" r="7.03353" stroke="#070D13" stroke-width="2" />
              <rect x="13.8848" y="13" width="6.56463" height="1.25023" rx="0.625113" transform="rotate(45 13.8848 13)"
                fill="#070D13" />
            </svg>
            <input type="text" class="w-full border-none" placeholder="Search ..." />
          </div>
        </div>

        <div class="space-y-4 flex flex-col">
          <a href="" class="text-[#FF994F] font-bold">Home</a>
          <a href="">Course</a>
          <a href="">Mentors</a>
          <a href="">About Us</a>
          <a href="">Contact</a>
        </div>

        <div class="flex flex-col mt-4">
          <button class="outline outline-2 py-3 px-8 text-[#FF994F] rounded-full">Log in</button>
          <button class="bg-[#FF994F] py-3 px-8 text-white rounded-full">Registration</button>
        </div>
      </div>
    </nav>
  </header>

  <section class=" pt-8 pb-28  bg-[#FFFAF2]">
    <div class="container flex flex-col items-center lg:flex-row">
    <div class=" space-y-8 flex-1">
      <h1 class="text-7xl font-bold leading-none relative">
        The best 
        <span class="text-[#FF994F]">Course <br></span>
        With the Best <br>
        <span class="relative home">Mentors</span>
      </h1>
      <p class="text-xl text-gray-500">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget gravida leo, nec iaculis diam.
      </p>
      <button class="bg-[#FF994F] py-3 px-8 text-white rounded-full hover:bg-opacity-50">Register Now</button>
    </div>

    <div class="flex space-x-4 flex-1 hidden lg:flex">
      <img class="w-full" src="./gambar/hero.png" alt="">
    </div>
    </div>
  </section>

  <div class="container py-20">
    <div class="flex justify-between items-center w-full">
      <h3 class="text-5xl font-bold w-[364px]">Find The Course You Want</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum massa sit amet porta efficitur.</p>
    </div>

    <div class="grid lg:grid-cols-3 sm:grid-cols-1 mt-7 gap-7">
      <div class="rounded-md bg-white bg-[url('/gambar/courses-1.png')] bg-center bg-cover overflow-hidden">
        <a href="">
          <div class="flex p-5 min-h-[220px] flex-col items-start bg-gradient-to-b from-transparent to-black">
            <div class="flex w-full">
              <span class="bg-white rounded-3xl py-3 px-5 text-[#FF994F] text-sm mr-auto"><b>$25</b>/Course</span>
              <span class="flex rounded-3xl bg-[#00000066] py-3 px-5 text-sm ml-auto">
                <img src="./gambar/star.svg" alt="">
                <p class="text-white ml-2"> (2.1k) </p>
              </span>
            </div>
            <div class="mt-auto">
              <h5 class="text-white text-lg font-bold">Basic programming (HTML, CSS)</h5>
            </div>
            <div class="flex w-full mt-2">
              <div class="text-sm mr-auto flex">
                <img src="./gambar/user-1.png" class="max-h-[24px] max-w-[24px]" alt=""/>
                <div class="pl-3 text-white">
                  <span class="block text-sm">Raphael</span>
                  <span class="text-xs">Teacher</span>
                </div>
              </div>
              <div class="text-sm ml-auto flex">
                <span class="h-[22px] w-[22px] bg-gray-300 rounded-full flex text-white justify-center items-center">
                  <img src="./gambar/Polygon 1.svg" alt="">
                </span>
                <div class="pl-3 text-white">
                  <span class="block text-sm">20 Video</span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="rounded-md bg-white bg-[url('/gambar/courses-2.png')] bg-center bg-cover overflow-hidden">
        <a href="">
          <div class="flex p-5 min-h-[220px] flex-col items-start bg-gradient-to-b from-transparent to-black">
            <div class="flex w-full">
              <span class="bg-white rounded-3xl py-3 px-5 text-[#FF994F] text-sm mr-auto"><b>$25</b>/Course</span>
              <span class="flex rounded-3xl bg-[#00000066] py-3 px-5 text-sm ml-auto">
                <img src="./gambar/star.svg" alt="">
                <p class="text-white ml-2"> (3.5k) </p>
              </span>
            </div>
            <div class="mt-auto">
              <h5 class="text-white text-lg font-bold">Basic programming (HTML, CSS)</h5>
            </div>
            <div class="flex w-full mt-2">
              <div class="text-sm mr-auto flex">
                <img src="./gambar/user-2.png" class="max-h-[24px] max-w-[24px]" alt=""/>
                <div class="pl-3 text-white">
                  <span class="block text-sm">Microna</span>
                  <span class="text-xs">Teacher</span>
                </div>
              </div>
              <div class="text-sm ml-auto flex">
                <span class="h-[22px] w-[22px] bg-slate-500 rounded-full flex text-white justify-center items-center">
                  <img src="./gambar/Polygon 1.svg" alt="">
                </span>
                <div class="pl-3 text-white">
                  <span class="block text-sm">20 Video</span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="rounded-md bg-white bg-[url('/gambar/courses-3.png')] bg-center bg-cover overflow-hidden">
        <a href="">
          <div class="flex p-5 min-h-[220px] flex-col items-start bg-gradient-to-b from-transparent to-black">
            <div class="flex w-full">
              <span class="bg-white rounded-3xl py-3 px-5 text-[#FF994F] text-sm mr-auto"><b>$25</b>/Course</span>
              <span class="flex rounded-3xl bg-[#00000066] py-3 px-5 text-sm ml-auto">
                <img src="./gambar/star.svg" alt="">
                <p class="text-white ml-2"> (4k) </p>
              </span>
            </div>
            <div class="mt-auto">
              <h5 class="text-white text-lg font-bold">Photography</h5>
            </div>
            <div class="flex w-full mt-2">
              <div class="text-sm mr-auto flex">
                <img src="./gambar/user-3.png" class="max-h-[24px] max-w-[24px]" alt=""/>
                <div class="pl-3 text-white">
                  <span class="block text-sm">Davidun</span>
                  <span class="text-xs">Teacher</span>
                </div>
              </div>
              <div class="text-sm ml-auto flex">
                <span class="h-[22px] w-[22px] bg-slate-500 rounded-full flex text-white justify-center items-center">
                  <img src="./gambar/Polygon 1.svg" alt="">
                </span>
                <div class="pl-3 text-white">
                  <span class="block text-sm">20 Video</span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="w-full justify-center mt-7 flex">
      <button class="bg-[#FF994F] py-3 px-8 text-white rounded-full hover:bg-opacity-50">See course</button>
    </div>
  </div>

  <section class="container py-20 flex flex-col space-y-5 lg:flex-row lg:space-x-10 lg:space-y-0 items-center">
    <img src="./gambar/metors.png" class="w-full flex-1" alt="">
    <div class="flex-1 space-y-6">
      <h2 class="text-5xl font-bold w-[364px]">Mentors who are professional in their fields</h2>
      <p class="text-gray-500">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum massa sit amet porta efficitur.
      </p>
    </div>
  </section>

  <section class="container py-20 flex flex-col space-y-5 lg:flex-row lg:space-x-10 lg:space-y-0 items-center">
    <div class="flex-1 space-y-6">
      <h2 class="text-5xl font-bold">We will provide the best for our users from year to year</h2>
      <p class="text-gray-500">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum massa sit amet porta efficitur.
      </p>
      <ul class="grid grid-cols-2 max-w-[290px] mt-5">
        <li class="flex py-2">
          <img src="./gambar/ceklis.svg" alt="">
          <p class="font-bold ml-2 text-sm">World Class</p>
        </li>
        <li class="flex py-2">
          <img src="./gambar/ceklis.svg" alt="">
          <p class="font-bold ml-2 text-sm">Flexible</p>
        </li>
        <li class="flex py-2">
          <img src="./gambar/ceklis.svg" alt="">
          <p class="font-bold ml-2 text-sm">Affordable</p>
        </li>
        <li class="flex py-2">
          <img src="./gambar/ceklis.svg" alt="">
          <p class="font-bold ml-2 text-sm">Job-relevan</p>
        </li>
      </ul>
      <button class="bg-[#FF994F] py-3 px-8 text-white rounded-full">Registration</button>
    </div>
    <img src="./gambar/grafik.png" class="w-full flex-1" alt="">
  </section>

  <section class="bg-[#FFFAF2] py-20 mb-20">
    <div class="container flex flex-col space-y-5 lg:flex-row lg:space-x-10 lg:space-y-0 items-center">
    <div class="flex-1 space-y-6">
      <h1 class="text-5xl font-bold">Trusted <br> by 20,000+ People</h1>
      <p class="text-gray-500">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Donec fermentum massa sit amet porta efficitur.
      </p>
    </div>
    <div class="grid grid-rows-2 grid-cols-1 items-center justify-center sm:mt-8 lg:mt-0">
      <div class="shadow-sm max-w-[350px] rounded-md bg-white relative z-10 sm:ml-[250px]">
        <img src="./gambar/review1.png" class="w-full" alt="">
      </div>
      <div class="shadow-sm max-w-[350px] rounded-md bg-white relative mt-5 sm:mt-[-40px]">
        <img src="./gambar/review2.png" class="w-full" alt="">
      </div>
    </div>
    
    </div>
  </section>

  <section class="banner container relative mt-20 mb-20 bg-[#FFFAF2] min-h-[400px] flex items-center justify-center">
    <img src="./gambar/develop-quality-background.svg" alt="" class="absolute top-0 left-0">

    <div class="flex-1 space-y-6 ml-[80px]">
      <h2 class="text-5xl font-bold">Develop Your Quality</h2>
      <p class="text-gray-500">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum massa sit amet porta efficitur.
      </p>
      <button class="bg-[#FF994F] py-3 px-8 text-white rounded-full">Get Started</button>
    </div>
    <img src="./gambar/develop-quality.png" class="w-1/3 flex-1" alt="">
  </section>

  <footer class="bg-[#281900] text-white py-10">
    <div class="container">
      <div class="grid lg:grid-cols-12 grid-cols-5">
        <div class="lg:col-span-4 col-span-5 sm:pb-5 lg:pb-0">
          <a href="/">
            <img src="./gambar/logo-white.svg" alt=""/>
            <p class="text-sm mt-7 text-white">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
              fermentum massa sit amet porta efficitur.
            </p>
            <ul class="flex mt-10 gap-5 justify-center md:justify-start">
              <li class="mr-2">
                <img src="./gambar/facebook logo.svg" alt="">
              </li>
              <li class="mr-2">
                <img src="./gambar/Vector.svg" alt="">
              </li>
              <li class="mr-2">
                <img src="./gambar/linkedin logo.svg" alt="">
              </li>
              <li class="mr-2">
                <img src="./gambar/instagram logo.svg" alt="">
              </li>
            </ul>
          </a>
        </div>
        <div class="sm:col-span-1 col-span-2">
          <h6 class="font-bold">Home</h6>
          <ul class="flex flex-col gap-3 space-y-1 mt-3">
            <li>Class</li>
            <li>Course</li>
            <li>About </li>
            <li>Mentors</li>
          </ul>
        </div>
        <div class="sm:col-span-2 col-span-3">
          <h6 class="font-bold">Our company</h6>
          <ul class="flex flex-col gap-5 space-y-1 mt-3">
            <li>Class Comunity</li>
            <li>Course company</li>
            <li>Company name</li>
            <li>mens course</li>
            <li>Courses.com</li>
          </ul>
        </div>
        <div class="sm:col-span-2 col-span-5">
          <h6 class="font-bold">Class</h6>
          <ul class="flex flex-col gap-5 space-y-1 mt-3">
            <li>Potography</li>
            <li>HTML & CSS</li>
            <li>JavaScript</li>
            <li>Java</li>
            <li>PHP</li>
            <li>UI/UX Design</li>
            <li>Web Design</li>
            <li>Design Grafis</li>
          </ul>
        </div>
        <div class="lg:col-span-3 col-span-5 mt-4 lg:mt-0">
          <h6 class="font-bold">About us</h6>
          <p class="my-2">You can contact Us to send email to us</p>
          <form action="?">
            <div class="w-full rounded-3xl bg-white overflow-hidden flex pr-3">
              <input type="email " placeholder="Your email" class="p-3 w-full px-5 outline-none"/>
              <img src="./gambar/panah email.svg" alt="">
            </div>
          </form>
        </div>
      </div>
    </div>
  </footer>
  <script src="./app.js"></script>
</body>
</x-app-layout>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        @vite('resources/css/app.css')
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Ariska</title>
    </head>
    <body class="font-sans">

        {{-- NAVBAR --}}
        <div class="bg-gradient-to-r from-teal-500 to-teal-600 text-black">
            <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                  <div class="flex-1 md:flex md:items-center md:gap-12">
                    <a class="block font-bold text-3xl" href="#">
                        Ariska
                    </a>
                  </div>

                  <div class="md:flex md:items-center md:gap-12">
                    <nav aria-label="Global" class="hidden md:block">
                      <ul class="flex items-center gap-6 text-sm">
                        <li>
                          <a class="text-black transition hover:text-black/75" href="#hero"> About </a>
                        </li>

                        <li>
                          <a class="text-black transition hover:text-black/75" href="#portofolio"> Portofolio </a>
                        </li>

                        <li>
                          <a class="text-black transition hover:text-black/75" href="#contact"> Contact </a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
            </div>
        </div>

        {{-- HERO --}}
        <section id="hero" class="w-full bg-gradient-to-r from-teal-500 to-teal-600 text-black p-20 flex items-center justify-between h-screen">
            <div class="max-w-lg">
                <h1 class="text-4xl font-bold mb-4">Welcome to Our Platform</h1>
                <p class="text-lg mb-6">We offer the best solutions to enhance your business and productivity.</p>
                <a href="#about" class="inline-block bg-white text-indigo-600 px-6 py-3 rounded-full font-semibold hover:bg-indigo-100 transition duration-300">
                    Learn More
                </a>
            </div>
            <div>
                <img src="path/to/your/image.jpg" alt="Hero Image" class="w-96 h-auto rounded-lg shadow-lg">
            </div>
        </section>

        {{-- PORTOFOLIO --}}
        <p class="bg-gradient-to-r from-teal-500 to-teal-600 font-bold text-black text-6xl text-center">Portofolio</p>
        <div id="portofolio" class="bg-gradient-to-r from-teal-500 to-teal-600 grid grid-cols-4 gap-4 p-10">

            <a href="#" class="group relative block bg-black rounded-3xl">
                <img
                  alt=""
                  src="https://images.unsplash.com/photo-1603871165848-0aa92c869fa1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=772&q=80"
                  class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50 rounded-3xl"
                />

                <div class="relative p-4 sm:p-6 lg:p-8">
                  <p class="text-sm font-medium uppercase tracking-widest text-pink-500">Developer</p>

                  <p class="text-xl font-bold text-white sm:text-2xl">Tony Wayne</p>

                  <div class="mt-32 sm:mt-48 lg:mt-64">
                    <div
                      class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100"
                    >
                      <p class="text-sm text-white">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis perferendis hic asperiores
                        quibusdam quidem voluptates doloremque reiciendis nostrum harum. Repudiandae?
                      </p>
                    </div>
                  </div>
                </div>
            </a>
            <a href="#" class="group relative block bg-black rounded-3xl">
                <img
                  alt=""
                  src="https://images.unsplash.com/photo-1603871165848-0aa92c869fa1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=772&q=80"
                  class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50 rounded-3xl"
                />

                <div class="relative p-4 sm:p-6 lg:p-8">
                  <p class="text-sm font-medium uppercase tracking-widest text-pink-500">Developer</p>

                  <p class="text-xl font-bold text-white sm:text-2xl">Tony Wayne</p>

                  <div class="mt-32 sm:mt-48 lg:mt-64">
                    <div
                      class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100"
                    >
                      <p class="text-sm text-white">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis perferendis hic asperiores
                        quibusdam quidem voluptates doloremque reiciendis nostrum harum. Repudiandae?
                      </p>
                    </div>
                  </div>
                </div>
            </a>
            <a href="#" class="group relative block bg-black rounded-3xl">
                <img
                  alt=""
                  src="https://images.unsplash.com/photo-1603871165848-0aa92c869fa1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=772&q=80"
                  class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50 rounded-3xl"
                />

                <div class="relative p-4 sm:p-6 lg:p-8">
                  <p class="text-sm font-medium uppercase tracking-widest text-pink-500">Developer</p>

                  <p class="text-xl font-bold text-white sm:text-2xl">Tony Wayne</p>

                  <div class="mt-32 sm:mt-48 lg:mt-64">
                    <div
                      class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100"
                    >
                      <p class="text-sm text-white">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis perferendis hic asperiores
                        quibusdam quidem voluptates doloremque reiciendis nostrum harum. Repudiandae?
                      </p>
                    </div>
                  </div>
                </div>
            </a>
            <a href="#" class="group relative block bg-black rounded-3xl">
                <img
                  alt=""
                  src="https://images.unsplash.com/photo-1603871165848-0aa92c869fa1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=772&q=80"
                  class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50 rounded-3xl"
                />

                <div class="relative p-4 sm:p-6 lg:p-8">
                  <p class="text-sm font-medium uppercase tracking-widest text-pink-500">Developer</p>

                  <p class="text-xl font-bold text-white sm:text-2xl">Tony Wayne</p>

                  <div class="mt-32 sm:mt-48 lg:mt-64">
                    <div
                      class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100"
                    >
                      <p class="text-sm text-white">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis perferendis hic asperiores
                        quibusdam quidem voluptates doloremque reiciendis nostrum harum. Repudiandae?
                      </p>
                    </div>
                  </div>
                </div>
            </a>
        </div>

        {{-- CONTACT --}}
        <section id="contact" class="relative flex flex-wrap lg:h-screen lg:items-center bg-gradient-to-r from-teal-500 to-teal-600 p-20">
            <div class="w-full px-4 py-12 sm:px-6 sm:py-16 lg:w-1/2 lg:px-8 lg:py-24">
            <div class="mx-auto max-w-lg text-center">
                <h1 class="text-2xl font-bold sm:text-3xl">Get started today!</h1>

                <p class="mt-4 text-black">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Et libero nulla eaque error neque
                ipsa culpa autem, at itaque nostrum!
                </p>
            </div>

            <form action="#" class="mx-auto mb-0 mt-8 max-w-md space-y-4">
                <div>
                <label for="email" class="sr-only">Email</label>

                <div class="relative">
                    <input
                    type="email"
                    class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                    placeholder="Enter email"
                    />

                    <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="size-4 text-gray-400"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
                        />
                    </svg>
                    </span>
                </div>
                </div>

                <div>
                <label for="password" class="sr-only">Password</label>

                <div class="relative">
                    <input
                    type="password"
                    class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                    placeholder="Enter password"
                    />

                    <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="size-4 text-gray-400"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                        />
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                        />
                    </svg>
                    </span>
                </div>
                </div>

                <div class="flex items-center justify-between">
                <p class="text-sm text-gray-500">
                    No account?
                    <a class="underline" href="#">Sign up</a>
                </p>

                <button
                    type="submit"
                    class="inline-block rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white"
                >
                    Sign in
                </button>
                </div>
            </form>
            </div>

            <div class="relative h-64 w-full sm:h-96 lg:h-full lg:w-1/2">
            <img
                alt=""
                src="https://images.unsplash.com/photo-1630450202872-e0829c9d6172?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                class="absolute inset-0 h-full w-full object-cover"
            />
            </div>
        </section>

        {{-- FOOOTER --}}
        <footer class="bg-white">
            <div class="mx-auto max-w-screen-xl space-y-8 px-4 py-16 sm:px-6 lg:space-y-16 lg:px-8">
              <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
                <div>
                  <div class="text-teal-600">
                    <p class="font-bold text-3xl">Ariska</p>
                  </div>

                  <p class="mt-4 max-w-xs text-gray-500">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse non cupiditate quae nam
                    molestias.
                  </p>

                  <ul class="mt-8 flex gap-6">
                    <li>
                      <a
                        href="#"
                        rel="noreferrer"
                        target="_blank"
                        class="text-gray-700 transition hover:opacity-75"
                      >
                        <span class="sr-only">Facebook</span>

                        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                          <path
                            fill-rule="evenodd"
                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                            clip-rule="evenodd"
                          />
                        </svg>
                      </a>
                    </li>

                    <li>
                      <a
                        href="#"
                        rel="noreferrer"
                        target="_blank"
                        class="text-gray-700 transition hover:opacity-75"
                      >
                        <span class="sr-only">Instagram</span>

                        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                          <path
                            fill-rule="evenodd"
                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                            clip-rule="evenodd"
                          />
                        </svg>
                      </a>
                    </li>

                    <li>
                      <a
                        href="#"
                        rel="noreferrer"
                        target="_blank"
                        class="text-gray-700 transition hover:opacity-75"
                      >
                        <span class="sr-only">Twitter</span>

                        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                          <path
                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
                          />
                        </svg>
                      </a>
                    </li>

                    <li>
                      <a
                        href="#"
                        rel="noreferrer"
                        target="_blank"
                        class="text-gray-700 transition hover:opacity-75"
                      >
                        <span class="sr-only">GitHub</span>

                        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                          <path
                            fill-rule="evenodd"
                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                            clip-rule="evenodd"
                          />
                        </svg>
                      </a>
                    </li>

                    <li>
                      <a
                        href="#"
                        rel="noreferrer"
                        target="_blank"
                        class="text-gray-700 transition hover:opacity-75"
                      >
                        <span class="sr-only">Dribbble</span>

                        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                          <path
                            fill-rule="evenodd"
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                            clip-rule="evenodd"
                          />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>

                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:col-span-2 lg:grid-cols-4">
                  <div>
                    <p class="font-medium text-gray-900">Services</p>

                    <ul class="mt-6 space-y-4 text-sm">
                      <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75"> 1on1 Coaching </a>
                      </li>

                      <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75"> Company Review </a>
                      </li>

                      <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75"> Accounts Review </a>
                      </li>

                      <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75"> HR Consulting </a>
                      </li>

                      <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75"> SEO Optimisation </a>
                      </li>
                    </ul>
                  </div>

                  <div>
                    <p class="font-medium text-gray-900">Company</p>

                    <ul class="mt-6 space-y-4 text-sm">
                      <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75"> About </a>
                      </li>

                      <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75"> Meet the Team </a>
                      </li>

                      <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75"> Accounts Review </a>
                      </li>
                    </ul>
                  </div>

                  <div>
                    <p class="font-medium text-gray-900">Helpful Links</p>

                    <ul class="mt-6 space-y-4 text-sm">
                      <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75"> Contact </a>
                      </li>

                      <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75"> FAQs </a>
                      </li>

                      <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75"> Live Chat </a>
                      </li>
                    </ul>
                  </div>

                  <div>
                    <p class="font-medium text-gray-900">Legal</p>

                    <ul class="mt-6 space-y-4 text-sm">
                      <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75"> Accessibility </a>
                      </li>

                      <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75"> Returns Policy </a>
                      </li>

                      <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75"> Refund Policy </a>
                      </li>

                      <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75"> Hiring Statistics </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <p class="text-xs text-gray-500">&copy; 2022. Company Name. All rights reserved.</p>
            </div>
        </footer>

    </body>
</html>
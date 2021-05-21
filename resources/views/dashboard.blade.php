<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


                <!DOCTYPE html>
                <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
                    <head>
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1">

                        <title>Laravel</title>

                        <link rel="stylesheet" href="css/menu.css">

                    </head>
                    <body>
                        <header>


                            <nav>
                                <UL>
                                 <li class="var_nav">
                                    <div class="link_bg"></div>
                                    <div class="link_title">
                                      <div class=icon>
                                      <i class="icon-mobile-phone icon-2x"></i>
                                      </div>
                                      <a href="/client"><span>Cliente</span></a>
                                    </div>
                                 </li>
                                 <li class="var_nav">
                                    <div class="link_bg"></div>
                                    <div class="link_title">
                                      <div class=icon>
                                      <i class="icon-wrench icon-2x"></i>
                                      </div>
                                      <a href="/proposal"><span>Proposta</span></a>
                                    </div>
                                 </li>
                                </UL>
                              </nav>


                        </header>
                    </body>
                </html>

            </div>
        </div>
    </div>
</x-app-layout>

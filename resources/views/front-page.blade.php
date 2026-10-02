@extends('layouts.app')

@section('content')
  <main class="relative w-full min-h-screen bg-[#111215] text-neutral-900 overflow-hidden font-sans">

    {{-- SEKCJA HERO --}}
    <section class="relative min-h-screen w-full flex flex-col justify-between">

      {{-- Zdjęcie w tle --}}
      <div class="absolute inset-0 z-0">
        <img
          src="{{ Vite::asset('resources/images/tło.webp') }}"
          alt="Nowoczesne wnętrze z klimatyzacją"
          class="w-full h-full object-cover object-center"
        >
        <div class="absolute inset-0 bg-gradient-to-r from-white/70 via-white/20 to-transparent pointer-events-none"></div>
      </div>
      {{-- Główna treść Hero --}}
      <div class="relative z-10 max-w-7xl mx-auto w-full px-6 sm:px-12 md:px-16 pt-36 md:pt-44 pb-12 flex-1 flex flex-col justify-center">
        <div class="max-w-xl">

          <p class="inline-flex items-center gap-2 text-xs md:text-sm font-semibold tracking-[0.2em] uppercase text-sky-600 mb-3">
            <span class="w-6 h-px bg-sky-500"></span>
            Nowoczesne systemy HVAC
          </p>

          <h1 class="text-3xl sm:text-4xl lg:text-5xl font-light tracking-tight text-neutral-900 leading-[1.15]">
            <span class="block font-semibold">Pogoda za oknem.</span>
            <span class="block text-neutral-600 font-normal">Idealny chłód w Twoim salonie.</span>
          </h1>

          <p class="mt-4 text-base sm:text-lg text-neutral-700/90 font-light leading-relaxed max-w-md">
            Projektujemy, montujemy i serwisujemy ciche instalacje klimatyzacji, które harmonijnie dopełniają Twoją przestrzeń.
          </p>

          <div class="mt-8 flex flex-wrap items-center gap-4">
            <a
              href="#wycena"
              class="px-6 py-3.5 rounded-full bg-neutral-900 text-white text-sm font-medium tracking-wide shadow-md hover:bg-sky-600 transition-all duration-200 active:scale-95"
            >
              Bezpłatna wycena
            </a>
            <a
              href="#uslugi"
              class="px-6 py-3.5 rounded-full bg-white/80 backdrop-blur-sm text-neutral-800 text-sm font-medium tracking-wide border border-neutral-200/80 hover:bg-white transition-all duration-200"
            >
              Zobacz realizacje
            </a>
          </div>

        </div>
      </div>

      {{-- Pasek atutów --}}
      <div class="relative z-10 w-full border-t border-neutral-900/10 bg-white/40 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-6 sm:px-12 md:px-16 py-4 grid grid-cols-2 md:grid-cols-4 gap-4 text-neutral-800 text-xs sm:text-sm font-medium">
          <div class="flex items-center gap-2">
            <span class="text-sky-600 font-bold">✓</span> Szybki montaż w 1 dzień
          </div>
          <div class="flex items-center gap-2">
            <span class="text-sky-600 font-bold">✓</span> Do 5 lat gwarancji
          </div>
          <div class="flex items-center gap-2">
            <span class="text-sky-600 font-bold">✓</span> Energooszczędność A+++
          </div>
          <div class="flex items-center gap-2">
            <span class="text-sky-600 font-bold">✓</span> Cicha praca od 19 dB
          </div>
        </div>
      </div>

    </section>

  </main>
@endsection

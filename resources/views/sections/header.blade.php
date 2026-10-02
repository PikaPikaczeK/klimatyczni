<header class="absolute top-0 inset-x-0 z-50 px-6 sm:px-12 md:px-16 py-6 md:py-8">
  <div class="max-w-7xl mx-auto flex items-center justify-between">

    {{-- Logo / Nazwa --}}
    <a href="{{ home_url('/') }}" class="group flex items-center gap-3">
      <img
        src="{{ Vite::asset('resources/images/logo-full-size.webp') }}"
        alt="Klimatyczni"
        class="h-8 sm:h-9 md:h-10 w-auto object-contain transition-transform duration-300 group-hover:scale-95"
      >
    </a>

    {{-- Dyskretna nawigacja w jednej linii --}}
    <nav class="hidden md:flex items-center gap-8 lg:gap-10 text-[14px] font-medium tracking-wide text-neutral-800/90">
      <a href="#start" class="transition-colors hover:text-sky-600">Start</a>
      <span class="text-neutral-300 select-none">•</span>
      <a href="#o-nas" class="transition-colors hover:text-sky-600">O nas</a>
      <span class="text-neutral-300 select-none">•</span>
      <a href="#uslugi" class="transition-colors hover:text-sky-600">Usługi</a>
      <span class="text-neutral-300 select-none">•</span>
      <a href="#kontakt" class="transition-colors hover:text-sky-600">Kontakt</a>
    </nav>

    {{-- Telefon / Szybki kontakt --}}
    <div class="flex items-center">
      <a href="tel:+48123456789" class="text-[13px] sm:text-[14px] font-medium text-sky-600 tracking-wider transition-colors">
        +48 123 456 789
      </a>
    </div>

  </div>
</header>

<section class="py-16 bg-white overflow-hidden relative">
  <!-- Wydłużone gradienty: zwiększono w z 32 na 64, oraz użyto bg-gradient-to dla płynniejszego przejścia -->
  <div class="absolute inset-y-0 left-0 w-64 bg-gradient-to-r from-white via-white/80 to-transparent z-10 pointer-events-none"></div>
  <div class="absolute inset-y-0 right-0 w-64 bg-gradient-to-l from-white via-white/80 to-transparent z-10 pointer-events-none"></div>

  <div class="flex animate-scroll">
    @foreach(range(1, 3) as $i)
      @foreach(['daikin.webp', 'fujitsu.webp', 'toshiba.webp', 'panasonic.webp', 'mitsubishi.webp'] as $logo)
        <div class="flex-shrink-0 w-64 px-8 grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-500 flex items-center justify-center">
          <img src="{{ get_theme_file_uri('resources/images/' . $logo) }}" alt="Logo marki HVAC" class="h-16 w-auto object-contain">
        </div>
      @endforeach
    @endforeach
  </div>
</section>

<style>
  @keyframes scroll {
    0% { transform: translateX(0); }
    100% { transform: translateX(-33.333%); }
  }
  .animate-scroll {
    display: flex;
    width: max-content;
    animation: scroll 30s linear infinite;
    will-change: transform;
  }
</style>

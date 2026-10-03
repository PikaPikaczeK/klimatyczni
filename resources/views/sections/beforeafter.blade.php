<section class="py-20 bg-stone-50">
  <div class="max-w-[75%] mx-auto"> <!-- Zwiększono kontener główny do 75% -->
    <!-- Nagłówek -->
    <div class="text-center mb-16">
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-light tracking-tight text-stone-900 mb-4">Twój komfort, nasza precyzja.</h2>
      <p class="text-lg text-stone-600 font-light">Zobacz, jak odmieniamy wnętrza – szybko, czysto i profesjonalnie.</p>
    </div>

    <div class="flex flex-col lg:flex-row gap-8 items-stretch">
      <!-- Slider -->
      <div class="relative w-full lg:w-3/5 aspect-video overflow-hidden rounded-2xl shadow-xl select-none cursor-ew-resize group" id="slider-container">
        <img src="{{ get_theme_file_uri('resources/images/apartament1_przed.webp') }}" alt="Przed" class="absolute inset-0 w-full h-full object-cover">

        <div class="absolute inset-0 z-20" id="slider-after" style="clip-path: inset(0 50% 0 0);">
          <img src="{{ get_theme_file_uri('resources/images/apartament1_po.webp') }}" alt="Po" class="absolute inset-0 w-full h-full object-cover">
        </div>

        <input type="range" min="0" max="100" value="50" class="absolute w-full h-full inset-0 opacity-0 cursor-ew-resize z-40" oninput="updateSlider(this.value)">

        <div class="absolute inset-y-0 w-1 bg-white z-30 left-[50%] pointer-events-none transition-none" id="slider-divider">
          <div class="absolute top-1/2 -left-4 w-9 h-9 bg-white rounded-full shadow-lg border-2 border-cyan-500 flex items-center justify-center transform -translate-y-1/2 text-cyan-500 font-bold">
            ↔
          </div>
        </div>
      </div>

      <!-- Rozszerzony bloczek HVAC (zajmuje teraz więcej miejsca) -->
      <div class="w-full lg:w-2/5 bg-white p-10 rounded-2xl border border-stone-200/70 shadow-sm flex flex-col justify-center">
        <p class="text-2xl font-medium text-stone-900 mb-8 border-b border-stone-100 pb-4">Mitsubishi MSZ-AP</p>

        <div class="flex flex-col gap-8">
          <div class="flex items-center gap-6">
            <img src="{{ get_theme_file_uri('resources/images/apartament1_hvac.webp') }}" alt="Mitsubishi MSZ-AP" class="w-48 h-auto object-contain">
            <p class="text-sm text-stone-600 leading-relaxed italic">
              Zaawansowany system serii AP z wbudowanym modułem Wi-Fi oraz innowacyjnym systemem oczyszczania powietrza. Idealny do sypialni i salonów.
            </p>
          </div>

          <div class="grid grid-cols-2 gap-x-8 gap-y-6 border-t border-stone-100 pt-8">
            <div>
              <div class="text-[10px] text-stone-400 uppercase tracking-widest font-semibold mb-2">Wydajność</div>
              <ul class="space-y-2 text-sm text-stone-700">
                <li>Chłodzenie: <b>7.1 kW</b></li>
                <li>Grzanie: <b>8.0 kW</b></li>
              </ul>
            </div>
            <div>
              <div class="text-[10px] text-stone-400 uppercase tracking-widest font-semibold mb-2">Komfort</div>
              <ul class="space-y-2 text-sm text-stone-700">
                <li>Hałas: <b>34-49 dB</b></li>
                <li>Wymiary: <b>110x32x24 cm</b></li>
              </ul>
            </div>
            <div class="col-span-2">
              <div class="text-[10px] text-stone-400 uppercase tracking-widest font-semibold mb-2">Funkcje dodatkowe</div>
              <ul class="flex flex-wrap gap-2 text-xs text-stone-600">
                <li class="bg-stone-100 px-2 py-1 rounded">Wi-Fi Control</li>
                <li class="bg-stone-100 px-2 py-1 rounded">Tryb cichy</li>
                <li class="bg-stone-100 px-2 py-1 rounded">Oczyszczanie powietrza</li>
                <li class="bg-stone-100 px-2 py-1 rounded">Klasa A++</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  function updateSlider(val) {
    const after = document.getElementById('slider-after');
    const divider = document.getElementById('slider-divider');
    after.style.clipPath = `inset(0 ${100 - val}% 0 0)`;
    divider.style.left = val + '%';
  }
</script>

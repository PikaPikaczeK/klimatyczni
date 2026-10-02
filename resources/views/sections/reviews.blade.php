<section id="opinie" class="relative bg-stone-50/70 py-24 sm:py-32 px-6 sm:px-12 md:px-16 border-t border-stone-200/60 overflow-hidden">
  <div class="max-w-7xl mx-auto">

    {{-- Nagłówek i ocena z Google --}}
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-8">
      <div>
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white border border-stone-200/80 shadow-xs mb-4">
          <svg class="w-3.5 h-3.5" viewBox="0 0 24 24">
            <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
            <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
            <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/>
            <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
          </svg>
          <span class="text-[11px] font-semibold tracking-wider uppercase text-stone-600">Zweryfikowane opinie z Google</span>
        </div>

        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-light tracking-tight text-stone-900 leading-[1.15]">
          Autentyczne opinie <br class="hidden sm:inline">
          <span class="font-normal text-stone-500">naszych klientów.</span>
        </h2>
      </div>

      {{-- Naturalny Widget 4.8 / 5.0 --}}
      <div class="flex items-center gap-6">
        <div class="flex items-center gap-4 bg-white px-5 py-3.5 rounded-2xl border border-stone-200/80 shadow-xs">
          <div class="text-3xl font-light text-stone-900 tracking-tight">4.8</div>
          <div class="flex flex-col">
            <div class="flex items-center gap-0.5 text-amber-400">
              @for ($i = 0; $i < 4; $i++)
                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
              @endfor
              {{-- Gwiazdka częściowa ~80% --}}
              <div class="relative w-4 h-4 text-stone-200">
                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <div class="absolute inset-0 overflow-hidden w-[80%] text-amber-400">
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                </div>
              </div>
            </div>
            <span class="text-xs text-stone-500 font-medium mt-0.5">86 opinii w Google</span>
          </div>
        </div>

        {{-- Nawigacja strzałkami --}}
        <div class="hidden sm:flex items-center gap-2">
          <button id="reviews-prev" type="button" aria-label="Poprzednie" class="w-11 h-11 rounded-full bg-white border border-stone-200/80 flex items-center justify-center text-stone-600 hover:text-stone-900 hover:border-stone-400 transition-colors shadow-xs cursor-pointer">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 19l-7-7 7-7"/></svg>
          </button>
          <button id="reviews-next" type="button" aria-label="Następne" class="w-11 h-11 rounded-full bg-white border border-stone-200/80 flex items-center justify-center text-stone-600 hover:text-stone-900 hover:border-stone-400 transition-colors shadow-xs cursor-pointer">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 5l7 7-7 7"/></svg>
          </button>
        </div>
      </div>
    </div>

    {{-- Slider Karuzela --}}
    <div id="reviews-carousel-wrapper" class="relative overflow-hidden -mx-3 px-3">
      <div id="reviews-track" class="flex transition-transform duration-700 ease-in-out">

        {{-- Opinia 1: Czystość --}}
        <div class="w-full md:w-1/3 shrink-0 px-3">
          <div class="h-full p-8 rounded-2xl bg-white border border-stone-200/70 shadow-xs flex flex-col justify-between">
            <div>
              <div class="flex items-center justify-between mb-5">
                <div class="flex text-amber-400">
                  @for ($i = 0; $i < 5; $i++)
                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                  @endfor
                </div>
                <span class="text-[11px] font-medium text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full">Zweryfikowany</span>
              </div>
              <p class="text-sm text-stone-700 font-light leading-relaxed mb-6">
                „Zero pyłu po montażu! Ekipa miała ze sobą profesjonalne odkurzacze przemysłowe i zabezpieczyła każdy centymetr podłogi. Agregat na balkonie zawieszony tak, że w ogóle go nie widać.”
              </p>
            </div>
            <div class="pt-5 border-t border-stone-100 flex items-center justify-between">
              <div>
                <p class="text-sm font-semibold text-stone-900">Tomasz Kamiński</p>
                <p class="text-xs text-stone-400">Mieszkanie w bloku</p>
              </div>
              <span class="text-[11px] text-stone-400">3 dni temu</span>
            </div>
          </div>
        </div>

        {{-- Opinia 2: Dom & Doradztwo (zastąpiona) --}}
        <div class="w-full md:w-1/3 shrink-0 px-3">
          <div class="h-full p-8 rounded-2xl bg-white border border-stone-200/70 shadow-xs flex flex-col justify-between">
            <div>
              <div class="flex items-center justify-between mb-5">
                <div class="flex text-amber-400">
                  @for ($i = 0; $i < 5; $i++)
                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                  @endfor
                </div>
                <span class="text-[11px] font-medium text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full">Zweryfikowany</span>
              </div>
              <p class="text-sm text-stone-700 font-light leading-relaxed mb-6">
                „Rzetelne podejście inżynierskie. Dokładnie przeliczono zyski ciepła na piętrze ze skosami, zamiast doradzać model 'na oko'. Cicho, wydajnie i bez problemu ze snem w 30-stopniowy upał.”
              </p>
            </div>
            <div class="pt-5 border-t border-stone-100 flex items-center justify-between">
              <div>
                <p class="text-sm font-semibold text-stone-900">Jakub Nowak</p>
                <p class="text-xs text-stone-400">Dom jednorodzinny</p>
              </div>
              <span class="text-[11px] text-stone-400">tydzień temu</span>
            </div>
          </div>
        </div>

        {{-- Opinia 3: Szybkość & Multi-Split --}}
        <div class="w-full md:w-1/3 shrink-0 px-3">
          <div class="h-full p-8 rounded-2xl bg-white border border-stone-200/70 shadow-xs flex flex-col justify-between">
            <div>
              <div class="flex items-center justify-between mb-5">
                <div class="flex text-amber-400">
                  @for ($i = 0; $i < 5; $i++)
                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                  @endfor
                </div>
                <span class="text-[11px] font-medium text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full">Zweryfikowany</span>
              </div>
              <p class="text-sm text-stone-700 font-light leading-relaxed mb-6">
                „Instalacja multisplit dla 3 sypialni zamknięta w jeden dzień. Bardzo czyste przejścia przez ściany, żadnych wiszących kabli czy krzywych korytek. Aplikacja skonfigurowana od ręki.”
              </p>
            </div>
            <div class="pt-5 border-t border-stone-100 flex items-center justify-between">
              <div>
                <p class="text-sm font-semibold text-stone-900">Michał Dąbrowski</p>
                <p class="text-xs text-stone-400">Układ Multi-Split</p>
              </div>
              <span class="text-[11px] text-stone-400">2 tyg. temu</span>
            </div>
          </div>
        </div>

        {{-- Opinia 4: Biuro & Estetyka --}}
        <div class="w-full md:w-1/3 shrink-0 px-3">
          <div class="h-full p-8 rounded-2xl bg-white border border-stone-200/70 shadow-xs flex flex-col justify-between">
            <div>
              <div class="flex items-center justify-between mb-5">
                <div class="flex text-amber-400">
                  @for ($i = 0; $i < 5; $i++)
                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                  @endfor
                </div>
                <span class="text-[11px] font-medium text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full">Zweryfikowany</span>
              </div>
              <p class="text-sm text-stone-700 font-light leading-relaxed mb-6">
                „Zamówiliśmy klimatyzację do biura projektowego. Zależało nam na matowej czerni, która wpasuje się w surowy beton i drewno. Realizacja na najwyższym poziomie, pełna kultura ekipy montażowej.”
              </p>
            </div>
            <div class="pt-5 border-t border-stone-100 flex items-center justify-between">
              <div>
                <p class="text-sm font-semibold text-stone-900">Krzysztof Mazur</p>
                <p class="text-xs text-stone-400">Pracownia architektoniczna</p>
              </div>
              <span class="text-[11px] text-stone-400">3 tyg. temu</span>
            </div>
          </div>
        </div>

        {{-- Opinia 5: Uczciwa wycena --}}
        <div class="w-full md:w-1/3 shrink-0 px-3">
          <div class="h-full p-8 rounded-2xl bg-white border border-stone-200/70 shadow-xs flex flex-col justify-between">
            <div>
              <div class="flex items-center justify-between mb-5">
                <div class="flex text-amber-400">
                  @for ($i = 0; $i < 5; $i++)
                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                  @endfor
                </div>
                <span class="text-[11px] font-medium text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full">Zweryfikowany</span>
              </div>
              <p class="text-sm text-stone-700 font-light leading-relaxed mb-6">
                „Żadnych 'niespodzianek' finansowych w trakcie montażu. Wycena z audytu co do grosza pokryła się z końcowym rachunkiem. Bardzo doceniam przejrzystość i punktualność.”
              </p>
            </div>
            <div class="pt-5 border-t border-stone-100 flex items-center justify-between">
              <div>
                <p class="text-sm font-semibold text-stone-900">Rafał Zieliński</p>
                <p class="text-xs text-stone-400">Montaż Split w salonie</p>
              </div>
              <span class="text-[11px] text-stone-400">miesiąc temu</span>
            </div>
          </div>
        </div>

        {{-- Opinia 6: Serwis i higiena --}}
        <div class="w-full md:w-1/3 shrink-0 px-3">
          <div class="h-full p-8 rounded-2xl bg-white border border-stone-200/70 shadow-xs flex flex-col justify-between">
            <div>
              <div class="flex items-center justify-between mb-5">
                <div class="flex text-amber-400">
                  @for ($i = 0; $i < 5; $i++)
                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                  @endfor
                </div>
                <span class="text-[11px] font-medium text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full">Zweryfikowany</span>
              </div>
              <p class="text-sm text-stone-700 font-light leading-relaxed mb-6">
                „Przegląd przed sezonem zrobiony z użyciem myjki parowej i preparatów bez drażniącego zapachu. Dzieci są alergikami, więc higiena była priorytetem. Pełna profeska.”
              </p>
            </div>
            <div class="pt-5 border-t border-stone-100 flex items-center justify-between">
              <div>
                <p class="text-sm font-semibold text-stone-900">Piotr Zawadzki</p>
                <p class="text-xs text-stone-400">Serwis i odgrzybianie</p>
              </div>
              <span class="text-[11px] text-stone-400">miesiąc temu</span>
            </div>
          </div>
        </div>

        {{-- Opinia 7: Grzanie zimą --}}
        <div class="w-full md:w-1/3 shrink-0 px-3">
          <div class="h-full p-8 rounded-2xl bg-white border border-stone-200/70 shadow-xs flex flex-col justify-between">
            <div>
              <div class="flex items-center justify-between mb-5">
                <div class="flex text-amber-400">
                  @for ($i = 0; $i < 5; $i++)
                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                  @endfor
                </div>
                <span class="text-[11px] font-medium text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full">Zweryfikowany</span>
              </div>
              <p class="text-sm text-stone-700 font-light leading-relaxed mb-6">
                „Korzystamy z klimatyzatora również do dogrzewania domu w okresach przejściowych wiosną i jesienią. Rachunki za prąd niemal nie wzrosły, a w salonie jest ciepło w kilka minut.”
              </p>
            </div>
            <div class="pt-5 border-t border-stone-100 flex items-center justify-between">
              <div>
                <p class="text-sm font-semibold text-stone-900">Bartosz Lewandowski</p>
                <p class="text-xs text-stone-400">Klimatyzacja z funkcją grzania</p>
              </div>
              <span class="text-[11px] text-stone-400">2 mies. temu</span>
            </div>
          </div>
        </div>

        {{-- Opinia 8: Cicha praca w nocy --}}
        <div class="w-full md:w-1/3 shrink-0 px-3">
          <div class="h-full p-8 rounded-2xl bg-white border border-stone-200/70 shadow-xs flex flex-col justify-between">
            <div>
              <div class="flex items-center justify-between mb-5">
                <div class="flex text-amber-400">
                  @for ($i = 0; $i < 5; $i++)
                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                  @endfor
                </div>
                <span class="text-[11px] font-medium text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full">Zweryfikowany</span>
              </div>
              <p class="text-sm text-stone-700 font-light leading-relaxed mb-6">
                „Bardzo obawiałem się hałasu w sypialni. Zaproponowany model w trybie cichym jest dosłownie niesłyszalny. Wreszcie normalny sen podczas letnich upałów.”
              </p>
            </div>
            <div class="pt-5 border-t border-stone-100 flex items-center justify-between">
              <div>
                <p class="text-sm font-semibold text-stone-900">Marcin Grabowski</p>
                <p class="text-xs text-stone-400">Montaż w sypialni</p>
              </div>
              <span class="text-[11px] text-stone-400">3 mies. temu</span>
            </div>
          </div>
        </div>

      </div>
    </div>

    {{-- Kropki pod sliderem --}}
    <div id="reviews-dots" class="flex justify-center items-center gap-2 mt-10"></div>

  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const track = document.getElementById('reviews-track');
    const prevBtn = document.getElementById('reviews-prev');
    const nextBtn = document.getElementById('reviews-next');
    const dotsContainer = document.getElementById('reviews-dots');
    const wrapper = document.getElementById('reviews-carousel-wrapper');

    if (!track) return;

    const cards = Array.from(track.children);
    let currentIndex = 0;
    let autoPlayTimer = null;

    function getVisibleCards() {
      return window.innerWidth >= 768 ? 3 : 1;
    }

    function getMaxIndex() {
      return Math.max(0, cards.length - getVisibleCards());
    }

    function createDots() {
      if (!dotsContainer) return;
      dotsContainer.innerHTML = '';
      const totalPages = getMaxIndex() + 1;
      for (let i = 0; i < totalPages; i++) {
        const dot = document.createElement('button');
        dot.className = `w-2 h-2 rounded-full transition-all duration-300 ${i === currentIndex ? 'w-6 bg-sky-500' : 'bg-stone-300'}`;
        dot.setAttribute('aria-label', `Przejdź do slajdu ${i + 1}`);
        dot.addEventListener('click', () => {
          currentIndex = i;
          updateSlider();
          restartAutoplay();
        });
        dotsContainer.appendChild(dot);
      }
    }

    function updateSlider() {
      const cardWidthPercent = 100 / getVisibleCards();
      track.style.transform = `translateX(-${currentIndex * cardWidthPercent}%)`;

      if (dotsContainer) {
        Array.from(dotsContainer.children).forEach((dot, index) => {
          if (index === currentIndex) {
            dot.className = 'w-6 h-2 rounded-full bg-sky-500 transition-all duration-300';
          } else {
            dot.className = 'w-2 h-2 rounded-full bg-stone-300 transition-all duration-300';
          }
        });
      }
    }

    function nextSlide() {
      if (currentIndex >= getMaxIndex()) {
        currentIndex = 0;
      } else {
        currentIndex++;
      }
      updateSlider();
    }

    function prevSlide() {
      if (currentIndex <= 0) {
        currentIndex = getMaxIndex();
      } else {
        currentIndex--;
      }
      updateSlider();
    }

    function startAutoplay() {
      autoPlayTimer = setInterval(nextSlide, 5000);
    }

    function stopAutoplay() {
      if (autoPlayTimer) clearInterval(autoPlayTimer);
    }

    function restartAutoplay() {
      stopAutoplay();
      startAutoplay();
    }

    if (nextBtn) nextBtn.addEventListener('click', () => { nextSlide(); restartAutoplay(); });
    if (prevBtn) prevBtn.addEventListener('click', () => { prevSlide(); restartAutoplay(); });

    if (wrapper) {
      wrapper.addEventListener('mouseenter', stopAutoplay);
      wrapper.addEventListener('mouseleave', startAutoplay);
    }

    window.addEventListener('resize', () => {
      if (currentIndex > getMaxIndex()) currentIndex = getMaxIndex();
      createDots();
      updateSlider();
    });

    createDots();
    updateSlider();
    startAutoplay();
  });
</script>

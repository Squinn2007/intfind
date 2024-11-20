<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        <!-- @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))) -->
            <!-- @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else -->
            <style>
                /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
            </style>
        <!-- @endif -->
    </head>
    <body >
    <section class="flex overflow-hidden flex-col bg-orange-50">
  <header class="flex relative flex-col w-full text-sky-900 min-h-[443px]">
    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/ab17d0b42a7c3c18219bb55558bda5624febb1bd10d84eb08c5234f31171607c?placeholderIfAbsent=true&apiKey=26d1e1547dcf4f3ab4ca12df2a4cbcfb" alt="" class="object-cover absolute inset-0 size-full" />
    <div class="flex relative flex-col w-full text-9xl whitespace-nowrap min-h-[364px] max-md:text-4xl">
      <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/87d57d9a8877d6013d56d17974f0785d283aeda67096d95066993255a766ab17?placeholderIfAbsent=true&apiKey=26d1e1547dcf4f3ab4ca12df2a4cbcfb" alt="" class="object-cover absolute inset-0 size-full" />
      <h1 class="flex relative z-10 flex-col px-16 pt-48 pb-0 w-full min-h-[250px] max-md:px-5 max-md:pt-24 max-md:pb-2.5">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/3e75a58e134105c199eee4aa7b373885b305876f099da448a0433d32348f29e0?placeholderIfAbsent=true&apiKey=26d1e1547dcf4f3ab4ca12df2a4cbcfb" alt="" class="object-cover absolute inset-0 size-full" />
      </h1>
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/87d57d9a8877d6013d56d17974f0785d283aeda67096d95066993255a766ab17?placeholderIfAbsent=true&apiKey=26d1e1547dcf4f3ab4ca12df2a4cbcfb" alt="" class="object-cover absolute inset-0 size-full" />
      <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
  <img loading="lazy" 
       src="https://cdn.builder.io/api/v1/image/assets/TEMP/fca984e3544af3cbc2f3bea6b6bfa89300a3e67adfbad678c0f72e5f9a81412c?placeholderIfAbsent=true&apiKey=26d1e1547dcf4f3ab4ca12df2a4cbcfb" 
       alt="Decorative circular image" 
       style="object-fit: contain; max-width: 100%; width: 764px; aspect-ratio: 1.07; border-radius: 334px; height: auto;">
</div>

<!-- Voor mobiele weergave -->
<script>
  if (window.innerWidth <= 768) {
    document.querySelector('img').style.width = '300px';
    document.querySelector('img').style.height = '300px';
  }
</script>

    </div>
    <p class="relative z-10 self-start mt-0 mb-0 ml-32 text-3xl max-md:ml-5 max-md:mb-2.5 max-md:text-lg">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus egestas massa nec velit gravida porta. Sed sodales metus nisi, eu.
    </p>
  </header>

  <nav class="flex flex-col px-20 mt-56 w-full max-md:px-5 max-md:mt-10">
    <div class="flex gap-5 justify-between ml-14 max-w-full text-3xl text-center text-white whitespace-nowrap w-[437px] max-md:flex-col max-md:ml-0">
      <button href="example.test/jobs" class="px-11 py-3 bg-orange-500 rounded-3xl max-md:px-5 max-md:mb-3">aanmelden</button>
      <button class="px-11 py-3 bg-orange-500 rounded-3xl max-md:px-5">bekijk cv's</button>
    </div>

    <section class="mt-48 max-md:mt-10">
      <div class="flex gap-5 max-md:flex-col">
        <article class="flex flex-col w-[33%] max-md:w-full">
          <div class="flex flex-col items-center px-16 py-20 w-full text-center text-sky-900 rounded-full bg-sky-900 bg-opacity-30 max-md:px-5 max-md:mt-10">
            <h2 class="text-6xl font-semibold max-md:text-4xl">10</h2>
            <p class="mt-16 text-3xl max-md:mt-10">beschikbare studenten</p>
          </div>
        </article>

        <article class="flex flex-col ml-5 w-[33%] max-md:w-full max-md:ml-0">
          <div class="flex flex-col justify-center items-center px-16 w-full text-center text-sky-900 rounded-full aspect-square bg-orange-500 bg-opacity-40 max-md:px-5 max-md:pb-24 max-md:mt-10">
            <h2 class="self-center text-6xl font-semibold max-md:text-4xl">10</h2>
            <p class="mt-16 text-3xl max-md:mt-10">matches</p>
          </div>
        </article>

        <article class="flex flex-col ml-5 w-[33%] max-md:w-full max-md:ml-0">
          <div class="flex flex-col px-16 pt-20 pb-28 w-full text-center text-sky-900 rounded-full bg-sky-900 bg-opacity-30 max-md:px-5 max-md:pb-24 max-md:mt-10">
            <h2 class="self-center text-6xl font-semibold max-md:text-4xl">5</h2>
            <p class=" mt-16 text-3xl max-md:mt-10">beoordeling</p>
          </div>
        </article>
      </div>
    </section>
  </nav>

  <section class="flex relative flex-col pt-14 mt-11 w-full min-h-[876px] max-md:mt-10">
    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/0f7ed981c34baff741fc4873ca5d3dfccf24cc380b51b73204f434283819c415?placeholderIfAbsent=true&apiKey=26d1e1547dcf4f3ab4ca12df2a4cbcfb" alt="" class="object-cover absolute inset-0 size-full" />
    <div class="relative z-10 px-11 pt-16 pb-48 mb-0 w-full max-md:px-5 max-md:pb-24">
      <div class="flex gap-5 max-md:flex-col">
        <article class="flex flex-col w-[33%] max-md:w-full">
          <div class="flex flex-col grow px-2 pt-6 pb-56 w-full text-center bg-zinc-300 rounded-[29px] max-md:pb-24 max-md:mt-10">
            <h3 class="self-center text-4xl text-sky-900">Punt 1</h3>
            <p class="mt-2.5 text-3xl text-sky-900 max-md:text-lg">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur neque nunc, pellentesque eget lacus faucibus, dapibus dignissim tortor.
            </p>
          </div>
        </article>

        <article class="flex flex-col ml-5 w-[33%] max-md:w-full max-md:ml-0">
          <div class="flex flex-col grow px-6 pt-6 pb-52 w-full text-center bg-zinc-300 rounded-[29px] max-md:pb-24 max-md:pl-5 max-md:mt-10">
            <h3 class="self-center text-4xl text-sky-900">Punt 2</h3>
            <p class="mt-14 text-3xl text-sky-900 max-md:mt-10 max-md:text-lg">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus neque nec dolor vestibulum, quis mollis tortor mattis.
            </p>
          </div>
        </article>

        <article class="flex flex-col ml-5 w-[33%] max-md:w-full max-md:ml-0">
          <div class="flex flex-col px-1 pt-6 pb-80 w-full text-center bg-zinc-300 rounded-[29px] max-md:pb-24 max-md:mt-10">
            <h3 class="self-center text-4xl text-sky-900">Punt 3</h3>
            <p class="mt-2.5 text-3xl text-sky-900 max-md:text-lg">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ornare dolor ullamcorper nulla fermentum porta.
            </p>
          </div>
        </article>
      </div>
    </div>
  </section>
  <section class="flex flex-col items-center self-center px-4 mt-32 w-full max-w-[1066px] mx-auto lg:px-0 md:mt-32 sm:mt-16">
    <h2 class="text-4xl md:text-5xl lg:text-6xl text-sky-900 font-bold text-center">3 easy steps</h2>

    <article class="w-full max-w-[575px] mt-12 md:mt-20">
        <div class="flex flex-col md:flex-row items-center gap-6 md:gap-8">
            <div class="w-full md:w-[28%] flex justify-center">
                <span class="flex items-center justify-center bg-sky-900 text-white rounded-full h-[120px] w-[120px] md:h-[150px] md:w-[150px] text-4xl md:text-5xl font-bold" role="text" aria-label="Step 1">1</span>
            </div>
            <h3 class="w-full md:w-[72%] text-3xl md:text-4xl lg:text-5xl text-sky-900 font-semibold text-center md:text-left">
                Make a account.
            </h3>
        </div>
    </article>

    <article class="w-full max-w-[908px] mt-8 md:mt-12">
        <div class="flex flex-col md:flex-row items-center gap-6 md:gap-8">
            <div class="w-full md:w-[17%] flex justify-center">
                <span class="relative flex items-center justify-center h-[120px] w-[120px] md:h-[150px] md:w-[150px] text-4xl md:text-5xl font-bold" role="text" aria-label="Step 2">
                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/5f9be7dad50bb0df00bf37394c622d85db5eddad55ed461e1fc7fea71639310c?placeholderIfAbsent=true&apiKey=26d1e1547dcf4f3ab4ca12df2a4cbcfb" alt="" class="absolute inset-0 w-full h-full object-cover rounded-full" />
                    <span class="relative z-10 text-sky-900">2</span>
                </span>
            </div>
            <h3 class="w-full md:w-[83%] text-3xl md:text-4xl lg:text-5xl text-orange-500 font-semibold text-center md:text-left">
                Tell us what you're looking for.
            </h3>
        </div>
    </article>

    <article class="w-full max-w-[853px] mt-8 md:mt-12">
        <div class="flex flex-col md:flex-row items-center gap-6 md:gap-8">
            <div class="w-full md:w-[19%] flex justify-center">
                <span class="relative flex items-center justify-center h-[120px] w-[120px] md:h-[150px] md:w-[150px] text-4xl md:text-5xl font-bold" role="text" aria-label="Step 3">
                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/77e07829715d66897c9dfb5835b419a87f81d345b2795cb387be14d158be336f?placeholderIfAbsent=true&apiKey=26d1e1547dcf4f3ab4ca12df2a4cbcfb" alt="" class="absolute inset-0 w-full h-full object-cover rounded-full" />
                    <span class="relative z-10 text-sky-900">3</span>
                </span>
            </div>
            <div class="w-full md:w-[81%] flex flex-col md:flex-row items-center gap-6">
                <h3 class="w-full md:w-[64%] text-3xl md:text-4xl lg:text-5xl text-sky-900 font-semibold text-center md:text-left">
                    And start swiping!
                </h3>
                <div class="w-full md:w-[36%]">
                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/b71177bbd75f8280054e812c5949e184b00cf7146d1d191d1e1ae358a38820f2?placeholderIfAbsent=true&apiKey=26d1e1547dcf4f3ab4ca12df2a4cbcfb" alt="Illustration showing swiping action" class="w-full aspect-[1.13] object-contain" />
                </div>
            </div>
        </div>
    </article>

    <nav class="flex flex-col sm:flex-row gap-4 justify-center items-center mt-16 md:mt-24 w-full max-w-[641px]">
        <button class="w-full sm:w-auto px-8 md:px-12 py-3 bg-orange-500 hover:bg-orange-600 focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 text-white text-xl md:text-3xl rounded-3xl transition-colors" aria-label="Primary action button">
            knop
        </button>
        <button class="w-full sm:w-auto px-8 md:px-12 py-3 bg-orange-500 hover:bg-orange-600 focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 text-white text-xl md:text-3xl rounded-3xl transition-colors" aria-label="Secondary action button">
            knop
        </button>
    </nav>
</section>
  <section class="px-16 pt-7 pb-72 mt-80 text-6xl text-center text-sky-900 bg-orange-500 bg-opacity-40 max-md:px-5 max-md:pb-28 max-md:mt-10 max-md:max-w-full max-md:text-4xl">
    <h2>Over ons</h2>
  </section>
</section>


    	{{ $slot }}
    </body>
</html>

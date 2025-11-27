<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About - Te'chi Pempek Kecil</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <style>
      :root {
        --red-900: #7f1d1d;
        --red-700: #b91c1c;
        --scroll-duration: 40s; /* Durasi gulir diperlambat agar lebih mulus */
      }

      * {
        font-family: "Poppins", sans-serif;
      }

      .custom-cursor {
        width: 20px;
        height: 20px;
        border: 2px solid #7f1d1d;
        border-radius: 50%;
        position: fixed;
        pointer-events: none;
        z-index: 9999;
        transition: all 0.15s ease;
        transition-property: background, transform, border;
      }

      .cursor-dot {
        width: 6px;
        height: 6px;
        background: #7f1d1d;
        border-radius: 50%;
        position: fixed;
        pointer-events: none;
        z-index: 9999;
        transition: all 0.1s ease;
      }

      .custom-cursor.hover {
        transform: scale(2);
        background: rgba(127, 29, 29, 0.1);
        border-color: #991b1b;
      }

      @keyframes float {
        0%,
        100% {
          transform: translateY(0px) rotate(0deg);
        }

        50% {
          transform: translateY(-20px) rotate(5deg);
        }
      }

      @keyframes floatReverse {
        0%,
        100% {
          transform: translateY(0px) rotate(0deg);
        }

        50% {
          transform: translateY(20px) rotate(-5deg);
        }
      }

      .float {
        animation: float 6s ease-in-out infinite;
      }

      .float-reverse {
        animation: floatReverse 8s ease-in-out infinite;
      }

      .reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
      }

      .reveal.active {
        opacity: 1;
        transform: translateY(0);
      }

      .glass {
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
      }

      /* START: PERBAIKAN MARQUEE */

      /* Hitungan: 8 item asli * (320px lebar item + 32px margin kanan) = 2816px. */
      @keyframes autoscroll {
        from {
          transform: translateX(0);
        }
        /* Menggeser -2816px untuk 8 item asli */
        to {
          transform: translateX(-2816px);
        }
      }

      .autoscroll-wrapper {
        overflow: hidden;
        width: 100%;
      }

      .autoscroll-container {
        display: flex;
        flex-wrap: nowrap;
        animation: autoscroll var(--scroll-duration) linear infinite;
        padding-top: 2rem;
        padding-bottom: 2rem;
        /* Lebar kontainer: 2x lebar semua item (16 item) agar muat duplikasi */
        width: calc(352px * 16);
      }

      .autoscroll-item {
        /* Lebar item: 320px */
        width: 320px;
        flex-shrink: 0;
        /* Margin kanan: 2rem (32px). Total lebar 352px. */
        margin-right: 2rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
          0 4px 6px -4px rgba(0, 0, 0, 0.1);
      }

      /* END: PERBAIKAN MARQUEE */

      #mobile-menu {
        transition: transform 0.3s ease-in-out;
        transform: translateX(100%);
      }

      #mobile-menu.open {
        transform: translateX(0);
      }

      @media (min-width: 1024px) {
        * {
          cursor: none;
        }
      }

      @media (max-width: 1023px) {
        .custom-cursor,
        .cursor-dot {
          display: none !important;
        }
      }
    </style>
  </head>

  <body class="bg-gray-50 overflow-x-hidden">
    <div class="custom-cursor"></div>
    <div class="cursor-dot"></div>

    <nav class="glass fixed w-full top-0 z-20 shadow-lg">
      <div class="container mx-auto px-6 lg:px-12 py-5">
        <div class="flex justify-between items-center">
          <div class="flex items-center space-x-4 group">
            <img src="{{ asset('assets/Group 1193 (1).png') }}" alt="" class="w-64 h-auto" />
          </div>

          <div class="hidden lg:flex space-x-10">
            <a
              href="{{ url('index.html') }}"
              class="text-gray-800 hover:text-red-900 font-semibold text-lg transition-all duration-300 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-red-900 hover:after:w-full after:transition-all after:duration-300 transform hover:scale-110"
              >Home</a
            >

            <a
              href="{{ url('index.html') }}#filterSection"
              class="text-gray 800 hover:text-red-900 font-semibold text-lg transition-all duration-300 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-red-900 hover:after:w-full after:transition-all after:duration-300 transform hover:scale-110"
              >Menu</a
            >

            <a
              href="{{ url('promo.html') }}"
              class="text-gray-800 hover:text-red-900 font-semibold text-lg transition-all duration-300 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-red-900 hover:after:w-full after:transition-all after:duration-300 transform hover:scale-110"
              >Promo</a
            >

            <a
              href="{{ url('about.html') }}"
              class="text-red-900 hover:text-red-900 font-semibold text-lg transition-all duration-300 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-red-900 hover:after:w-full after:transition-all after:duration-300 transform hover:scale-110"
              >About</a
            >
          </div>

          <a
            href="{{ url('index.html') }}#filterSection"
            class="hidden lg:block bg-gradient-to-r from-red-900 to-red-700 hover:from-red-800 hover:to-red-600 text-white px-8 py-3 rounded-full font-bold shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300"
          >
            Pesan Sekarang
          </a>

          <button
            id="mobile-menu-button"
            class="lg:hidden text-gray-800 hover:text-red-900 transition-colors duration-300 z-40 flex flex-col gap-1.5 w-8 h-8 items-center justify-center"
          >
            <span class="hamburger-line w-6 h-0.5 bg-gray-800 block"></span>
            <span class="hamburger-line w-6 h-0.5 bg-gray-800 block"></span>
            <span class="hamburger-line w-6 h-0.5 bg-gray-800 block"></span>
          </button>
        </div>
      </div>
    </nav>

    <div
      id="mobile-menu"
      class="fixed top-0 right-0 h-full w-64 bg-white shadow-2xl z-10 p-6 pt-24 lg:hidden flex flex-col space-y-6"
    >
      <p></p>
      <p></p>
      <a
        href="{{ url('index.html') }}"
        class="text-gray-800 hover:text-red-900 font-semibold text-lg border-b border-gray-100 pb-2"
        >Home</a
      >
      <a
        href="{{ url('index.html') }}#filterSection"
        class="text-gray-800 hover:text-red-900 font-semibold text-lg border-b border-gray-100 pb-2"
        >Menu</a
      >
      <a
        href="{{ url('promo.html') }}"
        class="text-gray-800 hover:text-red-900 font-semibold text-lg border-b border-gray-100 pb-2"
        >Promo</a
      >
      <a
        href="{{ url('about.html') }}"
        class="text-gray-800 hover:text-red-900 font-semibold text-lg border-b border-gray-100 pb-2"
        >About</a
      >
      <a
        href="{{ url('index.html') }}#filterSection"
        class="mt-4 bg-gradient-to-r from-red-900 to-red-700 text-white px-6 py-3 rounded-xl font-bold shadow-lg"
      >
        Pesan Sekarang
      </a>
    </div>

    <section
      class="relative py-32 bg-gradient-to-br from-pink-100 via-red-50 to-orange-100 overflow-hidden pt-32 mt-8"
    >
      <div class="container mx-auto px-6 lg:px-12 relative z-8">
        <div class="text-center mb-20 reveal">
          <span
            class="inline-block bg-red-900 text-white px-6 py-3 rounded-full text-sm font-bold mb-6"
            >Tentang Kami</span
          >
          <h2 class="text-5xl lg:text-6xl font-black text-gray-900 mb-6">
            <span
              class="bg-gradient-to-r from-red-900 to-orange-600 bg-clip-text text-transparent"
              >Keluarga Besar</span
            >
            Te'chi
          </h2>
          <p class="text-xl text-gray-600 max-w-2xl mx-auto">
            Usaha keluarga yang dijalankan dengan cinta dan dedikasi
          </p>
        </div>

        <div class="max-w-4xl mx-auto">
          <div
            class="reveal group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500"
          >
            <div
              class="w-full h-auto max-h-[28rem] sm:max-h-[500px] mx-auto mb-8 bg-gray-200 rounded-3xl flex items-center justify-center group-hover:scale-105 transition-transform duration-500 overflow-hidden"
              style="max-width: 800px; margin-bottom: 2rem"
            >
              <img
                src="{{ asset('assets/Mask Group.png') }}"
                alt="Keluarga Besar Te'chi"
                class="w-full h-full object-cover"
              />
            </div>

            <div class="text-center">
              <h3 class="text-3xl font-black text-gray-900 mb-4">
                Usaha Keluarga Sejak 2010
              </h3>
              <p class="text-lg text-gray-700 leading-relaxed mb-6">
                Te'chi adalah usaha keluarga yang dibangun dari kecintaan kami
                terhadap kuliner tradisional Palembang. Setiap anggota keluarga
                memiliki peran penting, mulai dari memilih bahan baku terbaik,
                proses pembuatan yang teliti, hingga memastikan setiap pesanan
                sampai ke tangan pelanggan dengan sempurna.
              </p>
            </div>
          </div>
        </div>
        </div>
    </section>

    <section class="relative py-32">
      <div class="absolute inset-0 ampera-overlay"></div>

      <div class="container mx-auto px-6 lg:px-12 relative z-8">
        <div class="text-center mb-8 reveal">
          <h2
            class="text-5xl lg:text-6xl font-black ampera-section-text-dark mb-6"
          >
            Apa Kata Mereka
            <span
              class="bg-gradient-to-r from-red-900 to-orange-600 bg-clip-text text-transparent"
              >Tentang Te'chi</span
            >
          </h2>
        </div>
      </div>

      <div class="autoscroll-wrapper">
        <div class="autoscroll-container">
          <div class="autoscroll-item bg-white rounded-3xl p-6">
            <div
              class="aspect-square w-full rounded-2xl mb-4 flex items-center justify-center overflow-hidden"
            >
              <img
                src="{{ asset('assets/testi1.jpeg') }}"
                alt=""
                class="w-full h-full object-cover"
              />
            </div>
            <h4 class="text-lg font-bold text-gray-900 text-center mb-3">
              Messi
            </h4>
            <p class="text-gray-700 text-sm leading-relaxed text-center">
              "Pempeknya enak banget! Rasanya autentik dan bumbunya pas.
              Keluarga saya jadi pelanggan setia Te'chi."
            </p>
          </div>

          <div class="autoscroll-item bg-white rounded-3xl p-6">
            <div
              class="aspect-square w-full rounded-2xl mb-4 flex items-center justify-center overflow-hidden"
            >
              <img src="{{ asset('assets/testi2.jpeg') }}" alt="" />
            </div>
            <h4 class="text-lg font-bold text-gray-900 text-center mb-3">
              KH Syauqi MZ
            </h4>
            <p class="text-gray-700 text-sm leading-relaxed text-center">
              "Sudah 3 tahun jadi langganan. Kualitasnya selalu konsisten dan
              pengiriman cepat. Recommended!"
            </p>
          </div>

          <div class="autoscroll-item bg-white rounded-3xl p-6">
            <div
              class="aspect-square w-full rounded-2xl mb-4 flex items-center justify-center overflow-hidden"
            >
              <img src="{{ asset('assets/testi3.jpeg') }}" alt="" />
            </div>
            <h4 class="text-lg font-bold text-gray-900 text-center mb-3">
              Talon
            </h4>
            <p class="text-gray-700 text-sm leading-relaxed text-center">
              "Pempek Te'chi selalu jadi pilihan untuk acara keluarga. Semua
              tamu pasti suka!"
            </p>
          </div>

          <div class="autoscroll-item bg-white rounded-3xl p-6">
            <div
              class="aspect-square w-full rounded-2xl mb-4 flex items-center justify-center overflow-hidden"
            >
              <img src="{{ asset('assets/testi4.jpeg') }}" alt="" />
            </div>
            <h4 class="text-lg font-bold text-gray-900 text-center mb-3">
              Ustadz Derry Sulaiman
            </h4>
            <p class="text-gray-700 text-sm leading-relaxed text-center">
              "Harganya terjangkau tapi rasanya premium. Pelayanannya juga ramah
              banget. Top!"
            </p>
          </div>

          <div class="autoscroll-item bg-white rounded-3xl p-6">
            <div
              class="aspect-square w-full rounded-2xl mb-4 flex items-center justify-center overflow-hidden"
            >
              <img src="{{ asset('assets/testi5.jpeg') }}" alt="" />
            </div>
            <h4 class="text-lg font-bold text-gray-900 text-center mb-3">
              Habib Ahmad Alhabsyi
            </h4>
            <p class="text-gray-700 text-sm leading-relaxed text-center">
              "Sudah 3 tahun jadi langganan. Kualitasnya selalu konsisten dan
              pengiriman cepat. Recommended!"
            </p>
          </div>

          <div class="autoscroll-item bg-white rounded-3xl p-6">
            <div
              class="aspect-square w-full rounded-2xl mb-4 flex items-center justify-center overflow-hidden"
            >
              <img src="{{ asset('assets/testi6.jpeg') }}" alt="" />
            </div>
            <h4 class="text-lg font-bold text-gray-900 text-center mb-3">
              Aan
            </h4>
            <p class="text-gray-700 text-sm leading-relaxed text-center">
              "Pempek Te'chi selalu jadi pilihan untuk acara keluarga. Semua
              tamu pasti suka!"
            </p>
          </div>

          <div class="autoscroll-item bg-white rounded-3xl p-6">
            <div
              class="aspect-square w-full rounded-2xl mb-4 flex items-center justify-center overflow-hidden"
            >
              <img src="{{ asset('assets/testi7.jpeg') }}" alt="" />
            </div>
            <h4 class="text-lg font-bold text-gray-900 text-center mb-3">
              Rudi
            </h4>
            <p class="text-gray-700 text-sm leading-relaxed text-center">
              "Harganya terjangkau tapi rasanya premium. Pelayanannya juga ramah
              banget. Top!"
            </p>
          </div>

          <div class="autoscroll-item bg-white rounded-3xl p-6">
            <div
              class="aspect-square w-full rounded-2xl mb-4 flex items-center justify-center overflow-hidden"
            >
              <img
                src="{{ asset('assets/testi8.jpeg') }}"
                alt=""
                class="w-full h-full object-cover"
              />
            </div>
            <h4 class="text-lg font-bold text-gray-900 text-center mb-3">
              Ronaldo
            </h4>
            <p class="text-gray-700 text-sm leading-relaxed text-center">
              "Cuko-nya nagih! Pedasnya pas, asamnya segar. Pempeknya juga
              kenyal. Sempurna untuk pecinta pempek."
            </p>
          </div>
          
          <div class="autoscroll-item bg-white rounded-3xl p-6">
            <div
              class="aspect-square w-full rounded-2xl mb-4 flex items-center justify-center overflow-hidden"
            >
              <img
                src="{{ asset('assets/testi1.jpeg') }}"
                alt=""
                class="w-full h-full object-cover"
              />
            </div>
            <h4 class="text-lg font-bold text-gray-900 text-center mb-3">
              Messi
            </h4>
            <p class="text-gray-700 text-sm leading-relaxed text-center">
              "Pempeknya enak banget! Rasanya autentik dan bumbunya pas.
              Keluarga saya jadi pelanggan setia Te'chi."
            </p>
          </div>

          <div class="autoscroll-item bg-white rounded-3xl p-6">
            <div
              class="aspect-square w-full rounded-2xl mb-4 flex items-center justify-center overflow-hidden"
            >
              <img src="{{ asset('assets/testi2.jpeg') }}" alt="" />
            </div>
            <h4 class="text-lg font-bold text-gray-900 text-center mb-3">
              KH Syauqi MZ
            </h4>
            <p class="text-gray-700 text-sm leading-relaxed text-center">
              "Sudah 3 tahun jadi langganan. Kualitasnya selalu konsisten dan
              pengiriman cepat. Recommended!"
            </p>
          </div>

          <div class="autoscroll-item bg-white rounded-3xl p-6">
            <div
              class="aspect-square w-full rounded-2xl mb-4 flex items-center justify-center overflow-hidden"
            >
              <img src="{{ asset('assets/testi3.jpeg') }}" alt="" />
            </div>
            <h4 class="text-lg font-bold text-gray-900 text-center mb-3">
              Talon
            </h4>
            <p class="text-gray-700 text-sm leading-relaxed text-center">
              "Pempek Te'chi selalu jadi pilihan untuk acara keluarga. Semua
              tamu pasti suka!"
            </p>
          </div>

          <div class="autoscroll-item bg-white rounded-3xl p-6">
            <div
              class="aspect-square w-full rounded-2xl mb-4 flex items-center justify-center overflow-hidden"
            >
              <img src="{{ asset('assets/testi4.jpeg') }}" alt="" />
            </div>
            <h4 class="text-lg font-bold text-gray-900 text-center mb-3">
              Ustadz Derry Sulaiman
            </h4>
            <p class="text-gray-700 text-sm leading-relaxed text-center">
              "Harganya terjangkau tapi rasanya premium. Pelayanannya juga ramah
              banget. Top!"
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="relative py-32 bg-white overflow-hidden">
      <div class="container mx-auto px-6 lg:px-12">
        <div class="text-center mb-20 reveal">
          <span
            class="inline-block bg-red-100 text-red-900 px-6 py-3 rounded-full text-sm font-bold mb-6"
            >Nilai-Nilai Kami</span
          >

          <h2 class="text-5xl lg:text-6xl font-black text-gray-900 mb-6">
            Komitmen

            <span
              class="bg-gradient-to-r from-red-900 to-orange-600 bg-clip-text text-transparent"
              >Te'chi</span
            >
          </h2>

          <p class="text-xl text-gray-600 max-w-2xl mx-auto">
            Prinsip yang kami pegang dalam setiap produk yang kami hasilkan
          </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
          <div
            class="reveal group bg-gradient-to-br from-red-50 to-orange-50 rounded-3xl p-10 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4"
          >
            <div
              class="w-24 h-24 bg-gradient-to-br from-red-900 to-red-700 rounded-3xl flex items-center justify-center mx-auto mb-8 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500"
            >
              <svg
                class="w-12 h-12 text-white"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                ></path>
              </svg>
            </div>

            <h3 class="text-3xl font-black text-gray-900 mb-4 text-center">
              Kualitas Terjamin
            </h3>

            <p class="text-lg text-gray-700 text-center leading-relaxed">
              Kami hanya menggunakan bahan baku pilihan terbaik dan proses
              produksi yang higienis untuk menjamin kualitas setiap produk.
            </p>
          </div>

          <div
            class="reveal group bg-gradient-to-br from-orange-50 to-yellow-50 rounded-3xl p-10 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4"
            style="transition-delay: 0.1s"
          >
            <div
              class="w-24 h-24 bg-gradient-to-br from-orange-600 to-orange-500 rounded-3xl flex items-center justify-center mx-auto mb-8 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500"
            >
              <svg
                class="w-12 h-12 text-white"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
                ></path>
              </svg>
            </div>

            <h3 class="text-3xl font-black text-gray-900 mb-4 text-center">
              Dibuat dengan Cinta
            </h3>

            <p class="text-lg text-gray-700 text-center leading-relaxed">
              Setiap pempek dibuat dengan sepenuh hati dan perhatian terhadap
              detail, seperti menyajikan untuk keluarga sendiri.
            </p>
          </div>

          <div
            class="reveal group bg-gradient-to-br from-green-50 to-emerald-50 rounded-3xl p-10 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4"
            style="transition-delay: 0.2s"
          >
            <div
              class="w-24 h-24 bg-gradient-to-br from-green-600 to-green-500 rounded-3xl flex items-center justify-center mx-auto mb-8 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500"
            >
              <svg
                class="w-12 h-12 text-white"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M13 10V3L4 14h7v7l9-11h-7z"
                ></path>
              </svg>
            </div>

            <h3 class="text-3xl font-black text-gray-900 mb-4 text-center">
              Layanan Cepat
            </h3>

            <p class="text-lg text-gray-700 text-center leading-relaxed">
              Kami berkomitmen untuk memproses dan mengirim pesanan Anda dengan
              cepat tanpa mengorbankan kualitas produk.
            </p>
          </div>
        </div>
      </div>
    </section>

    <footer class="bg-gray-900 py-16">
      <div class="container mx-auto px-6 lg:px-12">
        <div class="grid md:grid-cols-3 gap-12 mb-12">
          <div>
            <div class="flex items-center space-x-4 mb-6">
              <img
                src="{{ asset('assets/Group 1193 (1).png') }}"
                alt=""
                class="w-80 h-auto"
              />
            </div>

            <p class="text-gray-400 text-lg leading-relaxed">
              Pempek khas Palembang dengan cita rasa autentik dan kualitas
              terbaik untuk keluarga Indonesia.
            </p>
          </div>

          <div>
            <h4 class="text-white font-bold text-xl mb-6">Quick Links</h4>

            <ul class="space-y-4">
              <li>
                <a
                  href="{{ url('index.html') }}"
                  class="text-gray-400 hover:text-white text-lg transition-colors duration-300"
                  >Home</a
                >
              </li>

              <li>
                <a
                  href="{{ url('index.html') }}#filterSection"
                  class="text-gray-400 hover:text-white text-lg transition-colors duration-300"
                  >Menu</a
                >
              </li>

              <li>
                <a
                  href="{{ url('promo.html') }}"
                  class="text-gray-400 hover:text-white text-lg transition-colors duration-300"
                  >Promo</a
                >
              </li>

              <li>
                <a
                  href="{{ url('about.html') }}"
                  class="text-gray-400 hover:text-white text-lg transition-colors duration-300"
                  >Tentang Kami</a
                >
              </li>
            </ul>
          </div>

          <div>
            <h4 class="text-white font-bold text-xl mb-6">Hubungi Kami</h4>

            <div class="space-y-4">
              <div class="flex items-center gap-3">
                <div
                  class="w-10 h-10 bg-red-900/30 rounded-lg flex items-center justify-center"
                >
                  <svg
                    class="w-5 h-5 text-red-500"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                    ></path>
                  </svg>
                </div>

                <span class="text-gray-400 text-lg">+6285377444108</span>
              </div>

              <div class="flex items-center gap-3">
                <div
                  class="w-10 h-10 bg-red-900/30 rounded-lg flex items-center justify-center"
                >
                  <svg
                    class="w-5 h-5 text-red-500"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                    ></path>
                  </svg>
                </div>

                <span class="text-gray-400 text-lg">info@techi.com</span>
              </div>
            </div>
          </div>
        </div>

        <div class="border-t border-gray-800 pt-8">
          <div
            class="flex flex-col md:flex-row justify-between items-center gap-4"
          >
            <p class="text-gray-500 text-center">
              © 2025 Te'chi. All rights reserved.
            </p>

            <div class="flex gap-4">
              <a
                href="#"
                class="w-10 h-10 bg-gray-800 hover:bg-red-900 rounded-full flex items-center justify-center transition-colors duration-300"
              >
                <svg
                  class="w-5 h-5 text-white"
                  fill="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"
                  ></path>
                </svg>
              </a>

              <a
                href="#"
                class="w-10 h-10 bg-gray-800 hover:bg-red-900 rounded-full flex items-center justify-center transition-colors duration-300"
              >
                <svg
                  class="w-5 h-5 text-white"
                  fill="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM12 18.162c-3.403 0-6.162-2.759-6.162-6.162s2.759-6.163 6.162-6.163 6.162 2.759 6.162 6.163c0 3.403-2.759 6.162-6.162 6.162zm0-10.162c-2.209 0-4 1.79-4 4s1.791 4 4 4 4-1.791 4-4c0-2.209-1.791-4-4-4zm6.406-1.645c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"
                  ></path>
                </svg>
              </a>

              <a
                href="#"
                class="w-10 h-10 bg-gray-800 hover:bg-red-900 rounded-full flex items-center justify-center transition-colors duration-300"
              >
                <svg
                  class="w-5 h-5 text-white"
                  fill="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"
                  ></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script>
      // Custom Cursor (Dibiarkan sama)

      const cursor = document.querySelector(".custom-cursor");

      const cursorDot = document.querySelector(".cursor-dot");

      document.addEventListener("mousemove", (e) => {
        cursor.style.left = e.clientX + "px";

        cursor.style.top = e.clientY + "px";

        cursorDot.style.left = e.clientX + "px";

        cursorDot.style.top = e.clientY + "px";
      });

      // Hover effect on interactive elements (Dibiarkan sama)

      const hoverElements = document.querySelectorAll("a, button, img");

      hoverElements.forEach((el) => {
        el.addEventListener("mouseenter", () => {
          cursor.classList.add("hover");
        });

        el.addEventListener("mouseleave", () => {
          cursor.classList.remove("hover");
        });
      });

      // Scroll Reveal Animation (Dibiarkan sama)

      const reveals = document.querySelectorAll(".reveal");

      const revealOnScroll = () => {
        reveals.forEach((element) => {
          const elementTop = element.getBoundingClientRect().top;

          const windowHeight = window.innerHeight;

          if (elementTop < windowHeight - 100) {
            element.classList.add("active");
          }
        });
      };

      window.addEventListener("scroll", revealOnScroll);

      revealOnScroll();

      // Mobile Menu Functionality (Dibiarkan sama)

      const mobileMenuButton = document.getElementById("mobile-menu-button");

      const mobileMenu = document.getElementById("mobile-menu");

      function toggleMobileMenu() {
        const isOpen = mobileMenu.classList.toggle("open");

        mobileMenuButton.classList.toggle("open");

        document.body.style.overflow = isOpen ? "hidden" : "auto";
      }

      if (mobileMenuButton) {
        mobileMenuButton.addEventListener("click", toggleMobileMenu);
      }

      // Close mobile menu when a link is clicked (Dibiarkan sama)

      document.querySelectorAll("#mobile-menu a").forEach((link) => {
        link.addEventListener("click", () => {
          if (mobileMenu.classList.contains("open")) {
            toggleMobileMenu();
          }
        });
      });

      // Smooth scroll for anchor links (Dibiarkan sama)

      document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
          e.preventDefault();

          const target = document.querySelector(this.getAttribute("href"));

          if (target) {
            target.scrollIntoView({
              behavior: "smooth",

              block: "start",
            });

            if (mobileMenu && mobileMenu.classList.contains("open")) {
              toggleMobileMenu();
            }
          }
        });
      });
    </script>
  </body>
</html>
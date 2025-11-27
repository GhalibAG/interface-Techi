<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Promo - Te'chi Pempek Kecil</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <style>
      :root {
        --red-900: #7f1d1d;
        --red-700: #b91c1c;
      }
      * {
        font-family: "Poppins", sans-serif;
      }

      /* SCROLLBAR */
      .modal-content::-webkit-scrollbar {
        width: 8px;
        height: 8px;
      }
      .modal-content::-webkit-scrollbar-thumb {
        background-color: var(--red-700);
        border-radius: 4px;
      }
      .modal-content::-webkit-scrollbar-track {
        background-color: #f3f4f6;
      }

      /* Custom Cursor */
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
        transform: translate(-50%, -50%);
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
        transform: translate(-50%, -50%);
      }

      .custom-cursor.hover {
        transform: translate(-50%, -50%) scale(2);
        background: rgba(127, 29, 29, 0.1);
        border-color: #991b1b;
      }

      /* Reveal Animation */
      .reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
      }

      .reveal.active {
        opacity: 1;
        transform: translateY(0);
      }

      /* Glassmorphism */
      .glass {
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
      }

      /* Promo Card Hover */
      .promo-card {
        transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
      }

      .promo-card:hover {
        transform: translateY(-12px) scale(1.02);
      }

      .promo-card:hover .promo-image {
        transform: scale(1.1) rotate(3deg);
      }

      .promo-image {
        transition: all 0.7s cubic-bezier(0.16, 1, 0.3, 1);
      }

      /* Ribbon */
      .ribbon {
        position: absolute;
        top: 20px;
        left: -10px;
        z-index: 20;
        padding: 8px 20px;
        background: linear-gradient(135deg, #dc2626 0%, #ea580c 100%);
        color: white;
        font-weight: 800;
        box-shadow: 0 4px 15px rgba(220, 38, 38, 0.4);
      }

      .ribbon::before {
        content: "";
        position: absolute;
        bottom: -10px;
        left: 0;
        border-left: 10px solid #991b1b;
        border-bottom: 10px solid transparent;
      }

      /* Custom CSS for Mobile Menu */
      #mobile-menu {
        transition: transform 0.3s ease-in-out;
        transform: translateX(100%);
      }
      #mobile-menu.open {
        transform: translateX(0);
      }

      .modal-overlay {
        transition: opacity 0.3s ease-in-out;
        opacity: 0;
      }
      .modal-overlay.flex {
        display: flex;
      }
      .modal-overlay.active {
        opacity: 1;
      }
      .modal-content {
        transition: transform 0.3s ease-in-out;
        transform: scale(0.9);
      }
      .modal-overlay.active .modal-content {
        transform: scale(1);
      }
      .platform-btn img {
        padding: 8px;
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

    <div
      id="orderModal"
      class="modal-overlay fixed inset-0 bg-black/60 backdrop-blur-sm z-30 hidden items-center justify-center p-4"
    >
      <div
        class="modal-content bg-white rounded-3xl max-w-4xl w-full shadow-2xl overflow-hidden max-h-[90vh] overflow-y-auto"
        onclick="event.stopPropagation()"
      >
        <div
          class="bg-gradient-to-r from-red-900 to-red-700 p-6 relative overflow-hidden"
        >
          <div
            class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16"
          ></div>
          <div class="relative flex justify-between items-center">
            <h2 class="text-2xl lg:text-3xl font-black text-white">
              Pilih Platform Pemesanan
            </h2>
            <button
              onclick="closeModal()"
              class="text-white/80 hover:text-white transition-colors p-2 hover:bg-white/10 rounded-full"
            >
              <svg
                class="w-6 h-6 lg:w-8 lg:h-8"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M6 18L18 6M6 6l12 12"
                ></path>
              </svg>
            </button>
          </div>
        </div>

        <div class="p-6 lg:p-8">
          <div class="grid md:grid-cols-2 gap-6 lg:gap-8">
            <div class="space-y-6">
              <div
                class="bg-gradient-to-br from-orange-50 to-red-50 rounded-2xl overflow-hidden shadow-lg"
              >
                <img
                  id="modalProductImage"
                  src=""
                  alt="Gambar Produk"
                  class="modal-product-image w-full h-48 lg:h-64 object-cover"
                />
              </div>
              <div
                class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-2xl p-6 shadow-lg"
              >
                <div class="flex items-start justify-between mb-4">
                  <div>
                    <span
                      class="text-sm font-semibold text-gray-500 uppercase tracking-wide"
                      >Promo Dipilih</span
                    >
                    <h3
                      id="modalMenuName"
                      class="text-xl lg:text-2xl font-black text-gray-900 mt-1"
                    >
                      Nama Promo
                    </h3
                    >
                  </div>
                </div>
                <p
                  id="modalMenuDesc"
                  class="text-gray-600 mb-6 leading-relaxed text-sm lg:text-base"
                >
                  Deskripsi Promo
                </p>
                <div
                  class="flex items-center justify-between pt-4 border-t-2 border-gray-200"
                >
                  <span class="text-base lg:text-lg font-bold text-gray-700"
                    >Harga Promo</span
                  >
                  <span
                    id="modalPrice"
                    class="text-3xl lg:text-4xl font-black bg-gradient-to-r from-red-900 to-red-600 bg-clip-text text-transparent"
                    >Rp0</span
                  >
                </div>
                <small class="mt-8 text-gray-500"
                  >*Harga bisa berbeda tergantung platform pemesanan.</small
                >
              </div>
            </div>

            <div class="flex flex-col justify-start space-y-4">
              <h3
                class="text-lg lg:text-xl font-black text-gray-900 mb-2 text-center"
              >
                Pesan Melalui
              </h3>

              <button
                onclick="orderVia('whatsapp')"
                class="platform-btn w-full bg-gradient-to-br from-red-600 to-red-800 text-white p-4 lg:p-6 rounded-2xl shadow-xl relative group"
              >
                <div class="relative z-10 flex items-center justify-between">
                  <div class="flex items-center gap-3 lg:gap-4">
                    <div
                      class="w-12 h-12 lg:w-16 lg:h-16 flex items-center justify-center flex-shrink-0"
                    >
                      <img src="{{ asset('assets/waicon.png') }}" alt="" />
                    </div>
                    <div class="text-left">
                      <h4 class="font-black text-lg lg:text-xl mb-1">
                        WhatsApp
                      </h4>
                      <p class="text-xs lg:text-sm text-white/90">
                        Chat langsung dengan admin
                      </p>
                    </div>
                  </div>
                  <svg
                    class="w-5 h-5 lg:w-6 lg:h-6 group-hover:translate-x-2 transition-transform flex-shrink-0"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M9 5l7 7-7 7"
                    ></path>
                  </svg>
                </div>
              </button>

              <button
                onclick="orderVia('gojek')"
                class="platform-btn w-full bg-gradient-to-br from-red-600 to-red-800 text-white p-4 lg:p-6 rounded-2xl shadow-xl relative group"
              >
                <div class="relative z-10 flex items-center justify-between">
                  <div class="flex items-center gap-3 lg:gap-4">
                    <div
                      class="w-12 h-12 lg:w-16 lg:h-16 flex items-center justify-center flex-shrink-0"
                    >
                      <img src="{{ asset('assets/gojekicon.png') }}" alt="" />
                    </div>
                    <div class="text-left">
                      <h4 class="font-black text-lg lg:text-xl mb-1">Gojek</h4>
                      <p class="text-xs lg:text-sm text-white/90">
                        Pesan via GoFood
                      </p>
                    </div>
                  </div>
                  <svg
                    class="w-5 h-5 lg:w-6 lg:h-6 group-hover:translate-x-2 transition-transform flex-shrink-0"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M9 5l7 7-7 7"
                    ></path>
                  </svg>
                </div>
              </button>

              <button
                onclick="orderVia('shopeefood')"
                class="platform-btn w-full bg-gradient-to-br from-red-600 to-red-800 text-white p-4 lg:p-6 rounded-2xl shadow-xl relative group"
              >
                <div class="relative z-10 flex items-center justify-between">
                  <div class="flex items-center gap-3 lg:gap-4">
                    <div
                      class="w-12 h-12 lg:w-16 lg:h-16 flex items-center justify-center flex-shrink-0"
                    >
                      <img src="{{ asset('assets/sfood1 (1).png') }}" alt="" />
                    </div>
                    <div class="text-left">
                      <h4 class="font-black text-lg lg:text-xl mb-1">
                        ShopeeFood
                      </h4>
                      <p class="text-xs lg:text-sm text-white/90">
                        Order melalui aplikasi
                      </p>
                    </div>
                  </div>
                  <svg
                    class="w-5 h-5 lg:w-6 lg:h-6 group-hover:translate-x-2 transition-transform flex-shrink-0"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M9 5l7 7-7 7"
                    ></path>
                  </svg>
                </div>
              </button>

              <div
                class="mt-6 p-4 bg-blue-50 border-2 border-blue-200 rounded-xl"
              >
                <p class="text-xs lg:text-sm text-blue-800 text-center">
                  <span class="font-bold">💡 Info:</span> Pemesanan via WA bisa
                  ambil sendiri dan juga diantar
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="glass fixed w-full top-0 z-20 shadow-lg">
      <div class="container mx-auto px-6 lg:px-12 py-5">
        <div class="flex justify-between items-center">
          <div class="flex items-center space-x-4 group">
            <img
              src="{{ asset('assets/Group 1193 (1).png') }}"
              alt="Logo Te'chi"
              class="w-64 h-auto"
            />
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
              class="text-red-900 hover:text-red-900 font-semibold text-lg transition-all duration-300 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-red-900 after:transition-all transform scale-110"
              >Promo</a
            >
            <a
              href="{{ url('about.html') }}"
              class="text-gray-800 hover:text-red-900 font-semibold text-lg transition-all duration-300 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-red-900 hover:after:w-full after:transition-all after:duration-300 transform hover:scale-110"
              >About</a
            >
          </div>

          <button
            onclick="openModal('Pemesanan Umum', 'Silakan pilih platform pemesanan Anda', 0, '{{ asset('assets/Group 1193 (1).png') }}')"
            class="hidden lg:block bg-gradient-to-r from-red-900 to-red-700 hover:from-red-800 hover:to-red-600 text-white px-8 py-3 rounded-full font-bold shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300"
          >
            Pesan Sekarang
          </button>

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
        class="text-red-900 font-semibold text-lg border-b border-gray-100 pb-2"
        >Promo</a
      >
      <a
        href="{{ url('about.html') }}"
        class="text-gray-800 hover:text-red-900 font-semibold text-lg border-b border-gray-100 pb-2"
        >About</a
      >
      <button
        onclick="openModal('Pemesanan Umum', 'Silakan pilih platform pemesanan Anda', 0, '{{ asset('assets/Group 1193 (1).png') }}')"
        class="mt-4 bg-gradient-to-r from-red-900 to-red-700 text-white px-6 py-3 rounded-xl font-bold shadow-lg"
      >
        Pesan Sekarang
      </button>
    </div>

    <section
      class="py-20 bg-gradient-to-b from-yellow-50 to-white relative overflow-hidden pt-32 mt-8"
    >
      <div
        class="absolute top-20 right-10 w-64 h-64 bg-orange-200 rounded-full filter blur-3xl opacity-30 float"
      ></div>

      <div class="container mx-auto px-6 lg:px-12 relative z-8">
        <div class="text-center mb-16 reveal">
          <h2 class="text-5xl lg:text-6xl font-black text-gray-900 mb-4">
            Promo
            <span
              class="bg-gradient-to-r from-red-900 to-orange-600 bg-clip-text text-transparent"
              >Flash Sale</span
            >
          </h2>
          <p class="text-xl text-gray-600 max-w-2xl mx-auto">
            Buruan pesan sebelum kehabisan! Stok terbatas
          </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
          <div
            class="promo-card reveal glass rounded-3xl overflow-hidden shadow-2xl hover:shadow-red-500/20"
          >
            <div class="relative overflow-hidden h-72">
              <img
                src="{{ asset('assets/paket2.webp') }}"
                alt="Flash Sale 1"
                class="promo-image w-full h-full object-cover"
              />
              <div
                class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"
              ></div>
              <div class="ribbon text-sm md:text-base">HEMAT 50%</div>
            </div>
            <div class="p-8">
              <h3 class="text-3xl font-black text-gray-900 mb-3">
                Paket Hemat 50
              </h3>
              <p class="text-gray-600 mb-6 text-lg">
                1 Vacum Pempek Isi 20 Pcs
              </p>
              <div class="flex items-center justify-between mb-6">
                <div>
                  <p class="text-gray-400 line-through text-xl mb-1">
                    Rp120.000
                  </p>
                  <p
                    class="text-5xl font-black bg-gradient-to-r from-red-900 to-orange-600 bg-clip-text text-transparent"
                  >
                    Rp60.000
                  </p>
                </div>
              </div>
              <button
                onclick="openModal('Paket Hemat 50', '1 Vacum Pempek Isi 20 Pcs (Promo Flash Sale)', 60000, '{{ asset('assets/paket2.webp') }}')"
                class="w-full group bg-gradient-to-r from-red-700 to-orange-600 hover:from-red-800 hover:to-orange-700 text-white px-8 py-4 rounded-2xl font-black text-lg shadow-lg hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center gap-2"
              >
                <span>Ambil Promo Ini</span>
                <svg
                  class="w-5 h-5 group-hover:translate-x-1 transition-transform"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M17 8l4 4m0 0l-4 4m4-4H3"
                  ></path>
                </svg>
              </button>
            </div>
            </div>

          <div
            class="promo-card reveal glass rounded-3xl overflow-hidden shadow-2xl hover:shadow-orange-500/20"
          >
            <div class="relative overflow-hidden h-72">
              <img
                src="{{ asset('assets/paket5.webp') }}"
                alt="Flash Sale 2"
                class="promo-image w-full h-full object-cover"
              />
              <div
                class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"
              ></div>
              <div class="ribbon text-sm md:text-base">HEMAT 30RB</div>
            </div>
            <div class="p-8">
              <h3 class="text-3xl font-black text-gray-900 mb-3">
                Paket Spesial
              </h3>
              <p class="text-gray-600 mb-6 text-lg">
                2 kapal selam, 20 pempek campur, 2 lenjer panjang
              </p>
              <div class="flex items-center justify-between mb-6">
                <div>
                  <p class="text-gray-400 line-through text-xl mb-1">
                    Rp180.000
                  </p>
                  <p
                    class="text-5xl font-black bg-gradient-to-r from-red-900 to-orange-600 bg-clip-text text-transparent"
                  >
                    Rp150.000
                  </p>
                </div>
              </div>
              <button
                onclick="openModal('Paket Spesial', '2 Kapal Selam + 20 Pempek Campur + 2 Pempek Lenjer Panjang (Promo Flash Sale)', 150000, '{{ asset('assets/paket5.webp') }}')"
                class="w-full group bg-gradient-to-r from-red-700 to-orange-600 hover:from-red-800 hover:to-orange-700 text-white px-8 py-4 rounded-2xl font-black text-lg shadow-lg hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center gap-2"
              >
                <span>Ambil Promo Ini</span>
                <svg
                  class="w-5 h-5 group-hover:translate-x-1 transition-transform"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M17 8l4 4m0 0l-4 4m4-4H3"
                  ></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-20 bg-white">
      <div class="container mx-auto px-6 lg:px-12">
        <div class="text-center mb-16 reveal">
          <span
            class="inline-block bg-red-100 text-red-900 px-6 py-3 rounded-full text-sm font-bold mb-6"
            >Promo Reguler</span
          >
          <h2 class="text-5xl lg:text-6xl font-black text-gray-900 mb-4">
            Promo
            <span
              class="bg-gradient-to-r from-red-900 to-orange-600 bg-clip-text text-transparent"
              >Spesial Lainnya</span
            >
          </h2>
          <p class="text-xl text-gray-600 max-w-2xl mx-auto">
            Masih banyak promo menarik lainnya untuk kamu
          </p>
        </div>
        <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
          <div
            class="promo-card reveal glass rounded-3xl overflow-hidden shadow-2xl hover:shadow-red-500/20"
          >
            <div class="relative overflow-hidden h-72">
              <img
                src="{{ asset('assets/pket3.webp') }}"
                alt="Promo Reguler"
                class="promo-image w-full h-full object-cover"
              />
              <div
                class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"
              ></div>
              <div class="ribbon text-sm md:text-base">DISKON</div>
            </div>
            <div class="p-8">
              <h3 class="text-3xl font-black text-gray-900 mb-3">
                Paket Super Hemat
              </h3>
              <p class="text-gray-600 mb-6 text-lg">
                2 Kapal Selam, 20 Pempek Campur (kulit 5, telor 5, lenjer 5,
                adaan 5)
              </p>
              <div class="flex items-center justify-between mb-6">
                <div>
                  <p class="text-gray-400 line-through text-xl mb-1">
                    Rp130.000
                  </p>
                  <p
                    class="text-5xl font-black bg-gradient-to-r from-red-900 to-orange-600 bg-clip-text text-transparent"
                  >
                    Rp90.000
                  </p>
                </div>
              </div>
              <button
                onclick="openModal('Paket Super Hemat', '2 Kapal Selam + 20 Pempek Campur (kulit 5, telor 5, lenjer 5, adaan 5) (Promo Reguler)', 90000, '{{ asset('assets/pket3.webp') }}')"
                class="w-full group bg-gradient-to-r from-red-700 to-orange-600 hover:from-red-800 hover:to-orange-700 text-white px-8 py-4 rounded-2xl font-black text-lg shadow-lg hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center gap-2"
              >
                <span>Ambil Promo Ini</span>
                <svg
                  class="w-5 h-5 group-hover:translate-x-1 transition-transform"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M17 8l4 4m0 0l-4 4m4-4H3"
                  ></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-20 bg-gradient-to-b from-gray-50 to-white">
      <div class="container mx-auto px-6 lg:px-12">
        <div class="max-w-4xl mx-auto">
          <div class="text-center mb-12 reveal">
            <h2 class="text-4xl lg:text-5xl font-black text-gray-900 mb-4">
              Syarat &
              <span
                class="bg-gradient-to-r from-red-900 to-orange-600 bg-clip-text text-transparent"
                >Ketentuan</span
              >
            </h2>
            <p class="text-lg text-gray-600">
              Baca dengan teliti sebelum mengambil promo
            </p>
          </div>

          <div class="reveal glass rounded-3xl p-8 lg:p-12 shadow-xl">
            <div class="space-y-6">
              <div class="flex items-start gap-4">
                <div
                  class="w-10 h-10 bg-red-900 rounded-xl flex items-center justify-center flex-shrink-0"
                >
                  <svg
                    class="w-6 h-6 text-white"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M5 13l4 4L19 7"
                    ></path>
                  </svg>
                </div>
                <div>
                  <h4 class="text-xl font-bold text-gray-900 mb-2">
                    Berlaku untuk Semua Pembelian
                  </h4>
                  <p class="text-gray-600">
                    Promo dapat digunakan untuk pembelian online maupun offline
                    di semua outlet Te'chi
                  </p>
                </div>
              </div>

              <div class="flex items-start gap-4">
                <div
                  class="w-10 h-10 bg-red-900 rounded-xl flex items-center justify-center flex-shrink-0"
                >
                  <svg
                    class="w-6 h-6 text-white"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M5 13l4 4L19 7"
                    ></path>
                  </svg>
                </div>
                <div>
                  <h4 class="text-xl font-bold text-gray-900 mb-2">
                    Tidak Dapat Digabungkan
                  </h4>
                  <p class="text-gray-600">
                    Setiap promo tidak dapat digabungkan dengan promo lainnya
                    dalam satu transaksi
                  </p>
                </div>
              </div>

              <div class="flex items-start gap-4">
                <div
                  class="w-10 h-10 bg-red-900 rounded-xl flex items-center justify-center flex-shrink-0"
                >
                  <svg
                    class="w-6 h-6 text-white"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M5 13l4 4L19 7"
                    ></path>
                  </svg>
                </div>
                <div>
                  <h4 class="text-xl font-bold text-gray-900 mb-2">
                    Minimal Pembelian
                  </h4>
                  <p class="text-gray-600">
                    Beberapa promo memiliki syarat minimal pembelian yang harus
                    dipenuhi sesuai ketentuan
                  </p>
                </div>
              </div>

              <div class="flex items-start gap-4">
                <div
                  class="w-10 h-10 bg-red-900 rounded-xl flex items-center justify-center flex-shrink-0"
                >
                  <svg
                    class="w-6 h-6 text-white"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M5 13l4 4L19 7"
                    ></path>
                  </svg>
                </div>
                <div>
                  <h4 class="text-xl font-bold text-gray-900 mb-2">
                    Periode Promo
                  </h4>
                  <p class="text-gray-600">
                    Perhatikan masa berlaku setiap promo. Promo dapat berubah
                    atau berakhir sewaktu-waktu
                  </p>
                </div>
              </div>

              <div class="flex items-start gap-4">
                <div
                  class="w-10 h-10 bg-red-900 rounded-xl flex items-center justify-center flex-shrink-0"
                >
                  <svg
                    class="w-6 h-6 text-white"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M5 13l4 4L19 7"
                    ></path>
                  </svg>
                </div>
                <div>
                  <h4 class="text-xl font-bold text-gray-900 mb-2">
                    Stok Terbatas
                  </h4>
                  <p class="text-gray-600">
                    Promo flash sale terbatas untuk pembelian cepat dan selama
                    stok masih tersedia
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="reveal bg-gray-900 py-16">
      <div class="container mx-auto px-6 lg:px-12">
        <div class="grid md:grid-cols-3 gap-12 mb-12">
          <div><div class="flex items-center space-x-4 mb-6"><img src="{{ asset('assets/Group 1193 (1).png') }}" alt="" class="w-80 h-auto" /></div><p class="text-gray-400 text-lg leading-relaxed">Pempek khas Palembang dengan cita rasa autentik dan kualitas terbaik untuk keluarga Indonesia.</p></div>
          <div><h4 class="text-white font-bold text-xl mb-6">Quick Links</h4><ul class="space-y-4"><li><a href="{{ url('index.html') }}" class="text-gray-400 hover:text-white text-lg transition-colors duration-300">Home</a></li><li><a href="{{ url('index.html') }}#filterSection" class="text-gray-400 hover:text-white text-lg transition-colors duration-300">Menu</a></li><li><a href="{{ url('promo.html') }}" class="text-gray-400 hover:text-white text-lg transition-colors duration-300">Promo</a></li><li><a href="{{ url('about.html') }}" class="text-gray-400 hover:text-white text-lg transition-colors duration-300">About</a></li></ul></div>
          <div><h4 class="text-white font-bold text-xl mb-6">Hubungi Kami</h4><div class="space-y-4"><div class="flex items-center gap-3"><div class="w-10 h-10 bg-red-900/30 rounded-lg flex items-center justify-center"><svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg></div><span class="text-gray-400 text-lg">+6285377444108</span></div><div class="flex items-center gap-3"><div class="w-10 h-10 bg-red-900/30 rounded-lg flex items-center justify-center"><svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg></div><span class="text-gray-400 text-lg">info@techi.com</span></div></div></div>
        </div>
        <div class="border-t border-gray-800 pt-8"><div class="flex flex-col md:flex-row justify-between items-center gap-4"><p class="text-gray-500 text-center">© 2025 Te'chi. All rights reserved.</p><div class="flex gap-4"><a href="#" class="w-10 h-10 bg-gray-800 hover:bg-red-900 rounded-full flex items-center justify-center transition-colors duration-300"><svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path></svg></a><a href="#" class="w-10 h-10 bg-gray-800 hover:bg-red-900 rounded-full flex items-center justify-center transition-colors duration-300"><svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM12 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg></a><a href="#" class="w-10 h-10 bg-gray-800 hover:bg-red-900 rounded-full flex items-center justify-center transition-colors duration-300"><svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"></path></svg></a></div></div></div>
    </footer>

    <script>
      let currentMenuName = "";
      let currentMenuDesc = "";
      let currentPrice = 0;
      let currentImage = "";

      const cursor = document.querySelector(".custom-cursor");
      const cursorDot = document.querySelector(".cursor-dot");

      document.addEventListener("mousemove", (e) => {
        cursor.style.left = e.clientX + "px";
        cursor.style.top = e.clientY + "px";
        cursorDot.style.left = e.clientX + "px";
        cursorDot.style.top = e.clientY + "px";
      });

      const hoverElements = document.querySelectorAll("a, button, img");
      hoverElements.forEach((el) => {
        el.addEventListener("mouseenter", () => {
          cursor.classList.add("hover");
        });
        el.addEventListener("mouseleave", () => {
          cursor.classList.remove("hover");
        });
      });

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

      function formatRupiah(amount) {
        if (amount === 0) return "Gratis*";
        return "Rp" + amount.toLocaleString("id-ID");
      }

      function openModal(name, desc, price, image) {
        currentMenuName = name;
        currentMenuDesc = desc;
        currentPrice = price;
        currentImage = image;

        const imgElement = document.getElementById("modalProductImage");
        const modal = document.getElementById("orderModal");

        document.getElementById("modalMenuName").textContent = name;
        document.getElementById("modalMenuDesc").textContent = desc;
        document.getElementById("modalPrice").textContent = formatRupiah(price);

        if (image) {
          imgElement.src = image;
          imgElement.alt = name;
          imgElement.style.display = "block";
        } else {
          // Jika tidak ada gambar spesifik, sembunyikan atau gunakan placeholder default di CSS/HTML
          // Berdasarkan struktur Anda, jika image kosong, ini akan diatasi
          imgElement.src = "";
          imgElement.alt = "";
          imgElement.style.display = "none"; 
        }

        modal.classList.remove("hidden");
        modal.classList.add("flex");
        setTimeout(() => {
          modal.classList.add("active");
        }, 10);
        document.body.style.overflow = "hidden";
      }

      function closeModal() {
        const modal = document.getElementById("orderModal");
        modal.classList.remove("active");
        setTimeout(() => {
          modal.classList.add("hidden");
          modal.classList.remove("flex");
          document.body.style.overflow = "auto";
        }, 300);
      }

      function orderVia(platform) {
        let formattedPrice = formatRupiah(currentPrice);
        let message = `Halo! Saya ingin order *${currentMenuName}* (${formattedPrice}). Pesan ini melalui ${platform}.`;
        let encodedMessage = encodeURIComponent(message);
        const WA_NUMBER = "6285377444108"; // Menggunakan nomor WA dari footer

        if (platform === "whatsapp") {
          window.open(
            `https://wa.me/${WA_NUMBER}?text=${encodedMessage}`,
            "_blank"
          );
        } else if (platform === "gojek") {
          alert('🚀 Mengarahkan ke GoFood...\n\nSilakan cari "Te\'chi Pempek Kecil" di aplikasi GoFood untuk melanjutkan pemesanan.');
        } else if (platform === "shopeefood") {
          alert('🚀 Mengarahkan ke ShopeeFood...\n\nSilakan cari "Te\'chi Pempek Kecil" di aplikasi ShopeeFood untuk melanjutkan pemesanan.');
        }
        closeModal();
      }

      document
        .getElementById("orderModal")
        .addEventListener("click", function (e) {
          if (e.target === this) {
            closeModal();
          }
        });

      document.addEventListener("keydown", function (e) {
        if (e.key === "Escape") {
          closeModal();
        }
      });

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

      document.querySelectorAll("#mobile-menu a").forEach((link) => {
        link.addEventListener("click", () => {
          if (mobileMenu.classList.contains("open")) {
            toggleMobileMenu();
          }
        });
      });
    </script>
  </body>
</html>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Te'chi - Pempek Kecil Terbaik</title>
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
      .modal-content::-webkit-scrollbar { width: 8px; height: 8px; }
      .modal-content::-webkit-scrollbar-thumb { background-color: var(--red-700); border-radius: 4px; }
      .modal-content::-webkit-scrollbar-track { background-color: #f3f4f6; }

      /* --- NEW: ANIMASI TEXT SHINE (GRADIENT BERGERAK) --- */
      @keyframes textShine {
        0% { background-position: 0% 50%; }
        100% { background-position: 200% 50%; }
      }
      .animate-text-shine {
        background-size: 200% auto;
        animation: textShine 4s linear infinite;
      }

      .hero-container-3d {
        perspective: 1000px;
      }
      
      .hero-title-wrapper {
        animation: heroRevealUp 1s cubic-bezier(0.2, 1, 0.3, 1) forwards;
        opacity: 0;
        transform: translateY(50px) scale(0.9);
        filter: blur(5px);
        
        transition: transform 0.1s ease-out, filter 0.3s ease; /* Transisi cepat agar responsif */
        transform-style: preserve-3d;
        display: inline-block;
        cursor: default;
      }

      @keyframes heroRevealUp {
        to {
           opacity: 1;
           transform: translateY(0) scale(1) rotateX(0) rotateY(0);
           filter: blur(0);
        }
      }

      .hero-title-wrapper h1 {
         transform: translateZ(30px); /* Teks seolah 'keluar' dari layar */
         text-shadow: 0 10px 30px rgba(0,0,0,0.1); /* Bayangan halus */
      }

      .custom-cursor {
        width: 20px; height: 20px; border: 2px solid #7f1d1d; border-radius: 50%;
        position: fixed; pointer-events: none; z-index: 9999;
        transition: all 0.15s ease; transition-property: background, transform, border;
      }
      .cursor-dot {
        width: 6px; height: 6px; background: #7f1d1d; border-radius: 50%;
        position: fixed; pointer-events: none; z-index: 9999; transition: all 0.1s ease;
      }
      .custom-cursor.hover { transform: scale(2); background: rgba(127, 29, 29, 0.1); border-color: #991b1b; }

      /* --- ANIMATIONS --- */
      @keyframes float { 0%, 100% { transform: translateY(0px) rotate(0deg); } 50% { transform: translateY(-20px) rotate(5deg); } }
      @keyframes floatReverse { 0%, 100% { transform: translateY(0px) rotate(0deg); } 50% { transform: translateY(20px) rotate(-5deg); } }
      .float { animation: float 6s ease-in-out infinite; }
      .float-reverse { animation: floatReverse 8s ease-in-out infinite; }
      @keyframes gradient { 0% { background-position: 0% 50%; } 50% { background-position: 100% 50%; } 100% { background-position: 0% 50%; } }
      .animate-gradient { background-size: 200% 200%; animation: gradient 15s ease infinite; }
      .reveal { opacity: 0; transform: translateY(50px); transition: all 1s cubic-bezier(0.16, 1, 0.3, 1); }
      .reveal.active { opacity: 1; transform: translateY(0); }
      @keyframes slideUp { from { transform: translateY(30px); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
      .menu-card.category-btn-up { animation: slideUp 0.5s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
      .glass { background: rgba(255, 255, 255, 0.7); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.3); }
      @keyframes pulse-slow { 0%, 100% { opacity: 1; transform: scale(1); } 50% { opacity: 0.8; transform: scale(1.05); } }
      .pulse-slow { animation: pulse-slow 3s ease-in-out infinite; }

      /* --- UTILITIES --- */
      #mobile-menu { transition: transform 0.3s ease-in-out; transform: translateX(100%); }
      #mobile-menu.open { transform: translateX(0); }
      .filter-btn.active { background-color: var(--red-900); color: white; transform: scale(1.05); box-shadow: 0 10px 15px -3px rgba(127, 29, 29, 0.3); }
      @media (min-width: 1024px) { * { cursor: none; } }
      @media (max-width: 1023px) { .custom-cursor, .cursor-dot { display: none !important; } }
    </style>
  </head>
  <body class="bg-gray-50 overflow-x-hidden">
    <div class="custom-cursor"></div>
    <div class="cursor-dot"></div>

    <div id="orderModal" class="modal-overlay fixed inset-0 bg-black/60 backdrop-blur-sm z-30 hidden items-center justify-center p-4">
      <div class="modal-content bg-white rounded-3xl max-w-4xl w-full shadow-2xl overflow-hidden max-h-[90vh] overflow-y-auto">
        <div class="bg-gradient-to-r from-red-900 to-red-700 p-6 relative overflow-hidden">
          <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16"></div>
          <div class="relative flex justify-between items-center">
            <h2 class="text-2xl lg:text-3xl font-black text-white">Pilih Platform Pemesanan</h2>
            <button onclick="closeModal()" class="text-white/80 hover:text-white transition-colors p-2 hover:bg-white/10 rounded-full">
              <svg class="w-6 h-6 lg:w-8 lg:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
          </div>
        </div>

        <div class="p-6 lg:p-8">
          <div class="grid md:grid-cols-2 gap-6 lg:gap-8">
            <div class="space-y-6">
              <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-2xl overflow-hidden shadow-lg">
                <img id="modalProductImage" src="" alt="" class="modal-product-image w-full h-48 lg:h-64 object-cover" />
              </div>
              <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-2xl p-6 shadow-lg">
                <div class="flex items-start justify-between mb-4">
                  <div>
                    <span class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Menu Dipilih</span>
                    <h3 id="modalMenuName" class="text-xl lg:text-2xl font-black text-gray-900 mt-1">Aneka Pempek</h3>
                  </div>
                </div>
                <p id="modalMenuDesc" class="text-gray-600 mb-6 leading-relaxed text-sm lg:text-base">Pempek kecil dengan rasa ikan yang kuat</p>
                <div class="flex items-center justify-between pt-4 border-t-2 border-gray-200">
                  <span class="text-base lg:text-lg font-bold text-gray-700">Harga Satuan</span>
                  <span id="modalPrice" class="text-3xl lg:text-4xl font-black bg-gradient-to-r from-red-900 to-red-600 bg-clip-text text-transparent">Rp3.000</span>
                </div>
                <small class="mt-8">*Harga bisa berbeda tergantung platform pemesanan.</small>
              </div>
            </div>

            <div class="flex flex-col justify-start space-y-4">
              <h3 class="text-lg lg:text-xl font-black text-gray-900 mb-2 text-center">Pesan Melalui</h3>
              
              <button onclick="orderVia('whatsapp')" class="platform-btn w-full bg-gradient-to-br from-red-600 to-red-800 text-white p-4 lg:p-6 rounded-2xl shadow-xl relative group">
                <div class="relative z-10 flex items-center justify-between">
                  <div class="flex items-center gap-3 lg:gap-4">
                    <div class="w-12 h-12 lg:w-16 lg:h-16 flex items-center justify-center flex-shrink-0"><img src="{{ asset('assets/waicon.png') }}" alt="" /></div>
                    <div class="text-left"><h4 class="font-black text-lg lg:text-xl mb-1">WhatsApp</h4><p class="text-xs lg:text-sm text-white/90">Chat langsung dengan admin</p></div>
                  </div>
                  <svg class="w-5 h-5 lg:w-6 lg:h-6 group-hover:translate-x-2 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
              </button>

              <button onclick="orderVia('gojek')" class="platform-btn w-full bg-gradient-to-br from-red-600 to-red-800 text-white p-4 lg:p-6 rounded-2xl shadow-xl relative group">
                <div class="relative z-10 flex items-center justify-between">
                  <div class="flex items-center gap-3 lg:gap-4">
                    <div class="w-12 h-12 lg:w-16 lg:h-16 flex items-center justify-center flex-shrink-0"><img src="{{ asset('assets/gojekicon.png') }}" alt="" /></div>
                    <div class="text-left"><h4 class="font-black text-lg lg:text-xl mb-1">Gojek</h4><p class="text-xs lg:text-sm text-white/90">Pesan via GoFood</p></div>
                  </div>
                  <svg class="w-5 h-5 lg:w-6 lg:h-6 group-hover:translate-x-2 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
              </button>

              <button onclick="orderVia('shopeefood')" class="platform-btn w-full bg-gradient-to-br from-red-600 to-red-800 text-white p-4 lg:p-6 rounded-2xl shadow-xl relative group">
                <div class="relative z-10 flex items-center justify-between">
                  <div class="flex items-center gap-3 lg:gap-4">
                    <div class="w-12 h-12 lg:w-16 lg:h-16 flex items-center justify-center flex-shrink-0"><img src="{{ asset('assets/sfood1 (1).png') }}" alt="" /></div>
                    <div class="text-left"><h4 class="font-black text-lg lg:text-xl mb-1">ShopeeFood</h4><p class="text-xs lg:text-sm text-white/90">Order melalui aplikasi</p></div>
                  </div>
                  <svg class="w-5 h-5 lg:w-6 lg:h-6 group-hover:translate-x-2 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
              </button>

              <div class="mt-6 p-4 bg-blue-50 border-2 border-blue-200 rounded-xl">
                <p class="text-xs lg:text-sm text-blue-800 text-center"><span class="font-bold">💡 Info:</span> Pemesanan via WA bisa ambil sendiri dan juga diantar</p>
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
            <img src="{{ asset('assets/Group 1193 (1).png') }}" alt="" class="w-64 h-auto" />
          </div>
          <div class="hidden lg:flex space-x-10">
            <a href="{{ url('index.html') }}" class="text-red-900 hover:text-red-900 font-semibold text-lg transition-all duration-300 hover:scale-110 after:transition-all after:duration-300 transform hover:scale-110"
              >Home</a>
          <a
              href="#filterSection"
              class="text-gray 800 hover:text-red-900 font-semibold text-lg transition-all duration-300 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-red-900 hover:after:w-full after:transition-all after:duration-300 transform hover:scale-110"
              >Menu</a
            >
                    <a
              href="{{ url('promo.html') }}"
              class="text-gray 800 hover:text-red-900 font-semibold text-lg transition-all duration-300 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-red-900 hover:after:w-full after:transition-all after:duration-300 transform hover:scale-110"
              >Promo</a
            >

                      <a
              href="{{ url('about.html') }}"
              class="text-gray 800 hover:text-red-900 font-semibold text-lg transition-all duration-300 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-red-900 hover:after:w-full after:transition-all after:duration-300 transform hover:scale-110"
              >About</a
            >
          </div>
          <a href="#filterSection" class="hidden lg:block bg-gradient-to-r from-red-900 to-red-700 hover:from-red-800 hover:to-red-600 text-white px-8 py-3 rounded-full font-bold shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300">Pesan Sekarang</a>
          <button id="mobile-menu-button" class="lg:hidden text-gray-800 hover:text-red-900 transition-colors duration-300 z-40 flex flex-col gap-1.5 w-8 h-8 items-center justify-center">
            <span class="hamburger-line w-6 h-0.5 bg-gray-800 block"></span>
            <span class="hamburger-line w-6 h-0.5 bg-gray-800 block"></span>
            <span class="hamburger-line w-6 h-0.5 bg-gray-800 block"></span>
          </button>
        </div>
      </div>
    </nav>

    <div id="mobile-menu" class="fixed top-0 right-0 h-full w-64 bg-white shadow-2xl z-10 p-6 pt-24 lg:hidden flex flex-col space-y-6">
      <a href="{{ url('index.html') }}" class="text-gray-800 hover:text-red-900 font-semibold text-lg border-b border-gray-100 pb-2">Home</a>
      <a href="#filterSection" class="text-gray-800 hover:text-red-900 font-semibold text-lg border-b border-gray-100 pb-2">Menu</a>
      <a href="{{ url('promo.html') }}" class="text-gray-800 hover:text-red-900 font-semibold text-lg border-b border-gray-100 pb-2">Promo</a>
      <a href="{{ url('about.html') }}" class="text-gray-800 hover:text-red-900 font-semibold text-lg border-b border-gray-100 pb-2">About</a>
      <a href="#filterSection" class="mt-4 bg-gradient-to-r from-red-900 to-red-700 text-white px-6 py-3 rounded-xl font-bold shadow-lg">Pesan Sekarang</a>
    </div>

    <section id="home" class="hero-container-3d reveal relative min-h-screen flex items-center pt-16 pb-20 bg-gradient-to-br from-pink-100 via-red-50 to-orange-100 animate-gradient overflow-hidden">
      <div class="absolute top-20 left-10 w-72 h-72 bg-red-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 float"></div>
      <div class="absolute top-40 right-20 w-96 h-96 bg-orange-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 float-reverse"></div>
      <div class="absolute bottom-20 left-1/3 w-80 h-80 bg-pink-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 float"></div>

      <div class="container mx-auto px-6 lg:px-12 relative z-8 mt-28">
        <div class="grid lg:grid-cols-2 gap-16 items-start">
          <div class="text-center lg:text-left reveal space-y-8">
            <div class="inline-block">
              <span class="inline-flex items-center bg-gradient-to-r from-red-600 to-orange-600 text-white px-6 py-3 rounded-full text-sm font-bold shadow-lg pulse-slow">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                Best Seller Product
              </span>
            </div>

            <div class="hero-title-wrapper js-tilt">
              <h1 class="text-6xl lg:text-7xl xl:text-8xl font-black leading-tight">
                <span class="bg-gradient-to-r from-red-900 via-red-600 to-orange-500 bg-clip-text text-transparent animate-text-shine">Pempek Kecil</span><br />
                <span class="text-gray-800">Te'chi</span>
              </h1>
            </div>

            <p class="text-xl lg:text-2xl text-gray-700 leading-relaxed max-w-2xl">
              Kelezatan <span class="font-bold text-red-900">khas Palembang</span> yang menggugah selera! Dibuat dari <span class="font-bold text-red-900">ikan pilihan</span> dengan resep turun temurun.
            </p>

            <div class="flex flex-col sm:flex-row items-center lg:items-start gap-6">
              <div class="text-center lg:text-left">
                <p class="text-gray-600 text-lg mb-2">Harga Mulai Dari</p>
                <div class="flex items-baseline gap-2">
                  <span class="text-6xl font-black bg-gradient-to-r from-red-900 to-red-600 bg-clip-text text-transparent">Rp3.000</span>
                  <span class="text-3xl text-gray-500 font-semibold">/Pcs</span>
                </div>
              </div>
            </div>

            <div class="flex flex-col sm:flex-row gap-6 pt-4">
              <button onclick="openModal('Aneka Pempek', 'Pempek kecil dengan rasa ikan yang kuat dan tekstur kenyal', 3000, '{{ asset('assets/food3.png') }}')" class="bg-gradient-to-r from-red-900 to-red-700 hover:from-red-800 hover:to-red-600 text-white px-10 py-5 rounded-2xl font-bold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">Pesan Sekarang</button>
              <a href="#filterSection" class="group bg-white hover:bg-gray-50 text-red-900 px-10 py-5 rounded-2xl font-bold text-lg shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 border-2 border-red-900">
                <span class="flex items-center justify-center gap-3">
                  Lihat Menu
                  <svg class="w-6 h-6 group-hover:rotate-90 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </span>
              </a>
            </div>
          </div>

          <div class="reveal relative">
            <div class="relative z-10">
              <div class="relative transform hover:scale-105 transition-all duration-700 hover:rotate-2">
                <div class="absolute inset-0 bg-gradient-to-br from-red-600 to-orange-600 rounded-3xl transform rotate-6 blur-xl opacity-30"></div>
                <div class="relative glass rounded-3xl shadow-2xl p-8 lg:p-12">
                  <div class="aspect-square bg-gradient-to-br from-amber-200 via-orange-200 to-red-200 rounded-2xl flex items-center justify-center overflow-hidden">
                    <div class="text-center"><img src="{{ asset('assets/food3.png') }}" alt="" /></div>
                  </div>
                </div>
              </div>
              <div class="absolute -top-6 -right-6 bg-gradient-to-br from-green-400 to-emerald-600 text-white px-6 py-4 rounded-2xl shadow-2xl transform rotate-12 hover:rotate-0 transition-all duration-300 z-20">
                <p class="font-black text-2xl">100%</p><p class="font-bold text-sm">Halal</p>
              </div>
              <div class="absolute -bottom-6 -left-6 glass px-6 py-4 rounded-2xl shadow-xl z-20 hover:scale-110 transition-transform duration-300">
                <p class="text-3xl font-black text-red-900">5000+</p><p class="font-semibold text-gray-700">Pelanggan Puas</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="order" class="reveal relative py-32 bg-white overflow-hidden">
      <div class="absolute top-0 left-0 w-full h-full opacity-5">
        <div class="absolute top-20 left-10 w-64 h-64 bg-red-500 rounded-full filter blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-orange-500 rounded-full filter blur-3xl"></div>
        </div>
      <div class="container mx-auto px-6 lg:px-12 relative z-8">
        <div class="text-center mb-20 reveal">
          <span class="inline-block bg-red-100 text-red-900 px-6 py-3 rounded-full text-sm font-bold mb-6">Mudah & Cepat</span>
          <h2 class="text-5xl lg:text-6xl font-black text-gray-900 mb-6">Cara <span class="bg-gradient-to-r from-red-900 to-orange-600 bg-clip-text text-transparent">Pemesanan</span></h2>
          <p class="text-xl text-gray-600 max-w-2xl mx-auto">Hanya 4 langkah mudah untuk menikmati pempek lezat kami</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
           <div class="reveal group relative bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border-2 border-transparent hover:border-red-200 transform hover:-translate-y-4">
             <div class="absolute -top-6 left-8 w-12 h-12 bg-gradient-to-br from-red-900 to-red-700 rounded-xl flex items-center justify-center shadow-xl text-white font-black text-xl">1</div>
             <div class="w-20 h-20 bg-gradient-to-br from-red-100 to-orange-100 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-500"><svg class="w-10 h-10 text-red-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg></div>
             <h3 class="text-2xl font-bold text-gray-900 mb-3 text-center">Pilih Menu</h3>
             <p class="text-gray-600 text-center">Browse menu dan pilih pempek favorit Anda</p>
           </div>
           <div class="reveal group relative bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border-2 border-transparent hover:border-red-200 transform hover:-translate-y-4" style="transition-delay: 0.1s">
             <div class="absolute -top-6 left-8 w-12 h-12 bg-gradient-to-br from-red-900 to-red-700 rounded-xl flex items-center justify-center shadow-xl text-white font-black text-xl">2</div>
             <div class="w-20 h-20 bg-gradient-to-br from-red-100 to-orange-100 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-500"><svg class="w-10 h-10 text-red-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg></div>
             <h3 class="text-2xl font-bold text-gray-900 mb-3 text-center">Klik Pesan</h3>
             <p class="text-gray-600 text-center">Tekan tombol pesan untuk melanjutkan</p>
           </div>
           <div class="reveal group relative bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border-2 border-transparent hover:border-red-200 transform hover:-translate-y-4" style="transition-delay: 0.2s">
             <div class="absolute -top-6 left-8 w-12 h-12 bg-gradient-to-br from-red-900 to-red-700 rounded-xl flex items-center justify-center shadow-xl text-white font-black text-xl">3</div>
             <div class="w-20 h-20 bg-gradient-to-br from-red-100 to-orange-100 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-500"><svg class="w-10 h-10 text-red-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg></div>
             <h3 class="text-2xl font-bold text-gray-900 mb-3 text-center">Chat WhatsApp</h3>
             <p class="text-gray-600 text-center">Terhubung langsung ke WhatsApp kami</p>
           </div>
           <div class="reveal group relative bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border-2 border-transparent hover:border-red-200 transform hover:-translate-y-4" style="transition-delay: 0.3s">
             <div class="absolute -top-6 left-8 w-12 h-12 bg-gradient-to-br from-red-900 to-red-700 rounded-xl flex items-center justify-center shadow-xl text-white font-black text-xl">4</div>
             <div class="w-20 h-20 bg-gradient-to-br from-red-100 to-orange-100 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-500"><svg class="w-10 h-10 text-red-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg></div>
             <h3 class="text-2xl font-bold text-gray-900 mb-3 text-center">Bayar & Terima</h3>
             <p class="text-gray-600 text-center">Lakukan pembayaran dan pesanan diantar</p>
           </div>
        </div>
      </div>
    </section>

    <section id="filterSection" class="reveal filter-section pt-12 pb-0 bg-white">
      <h1 class="text-center text-3xl lg:text-5xl font-black text-red-900 mb-6">Menu Te'Chi</h1>
      <div class="container mx-auto px-6 mb-8 flex justify-center">
        <div class="relative w-full max-w-md">
          <input type="text" id="searchInput" placeholder="Cari menu favoritmu..." class="w-full px-6 py-4 rounded-full border-2 border-gray-200 focus:border-red-900 focus:outline-none focus:ring-4 focus:ring-red-900/10 shadow-lg text-gray-700 transition-all pl-12" />
          <svg class="w-6 h-6 text-gray-400 absolute left-4 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </div>
      </div>
      
      <div class="container mx-auto">
        <div class="grid grid-cols-2 md:flex md:flex-wrap justify-center gap-3 px-6 lg:px-12 mt-4">
          <button class="filter-btn active w-full md:w-auto px-4 py-2 lg:px-8 lg:py-3 rounded-full font-bold text-sm lg:text-lg transition-all duration-300 bg-gray-100 hover:bg-red-900 hover:text-white shadow-lg hover:shadow-xl" data-filter="all">Semua Menu</button>
          <button class="filter-btn w-full md:w-auto px-4 py-2 lg:px-8 lg:py-3 rounded-full font-bold text-sm lg:text-lg transition-all duration-300 bg-gray-100 hover:bg-red-900 hover:text-white shadow-lg hover:shadow-xl" data-filter="makanan">Makanan</button>
          <button class="filter-btn w-full md:w-auto px-4 py-2 lg:px-8 lg:py-3 rounded-full font-bold text-sm lg:text-lg transition-all duration-300 bg-gray-100 hover:bg-red-900 hover:text-white shadow-lg hover:shadow-xl" data-filter="minuman">Minuman</button>
          <button class="filter-btn w-full md:w-auto px-4 py-2 lg:px-8 lg:py-3 rounded-full font-bold text-sm lg:text-lg transition-all duration-300 bg-gray-100 hover:bg-red-900 hover:text-white shadow-lg hover:shadow-xl" data-filter="pempek">Pempek</button>
        </div>
      </div>
    </section>

    <section class="reveal pt-8 pb-20 bg-white">
      <div class="container mx-auto px-6 lg:px-12">
        <div id="menu-grid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div class="menu-card reveal glass rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl" data-category="pempek">
            <div class="relative overflow-hidden bg-gradient-to-br from-amber-100 to-orange-100 h-48">
              <img src="{{ asset('assets/food3.png') }}" alt="" class="menu-image w-full h-full object-cover" />
              <div class="absolute top-4 right-4 bg-green-500 text-white px-4 py-2 rounded-full font-bold text-sm shadow-lg">Popular</div>
            </div>
            <div class="p-6">
              <h3 class="menu-title text-2xl font-black text-gray-900 mb-2">Aneka Pempek</h3>
              <p class="text-gray-600 mb-4">Pempek kecil dengan rasa ikan yang kuat dan tekstur kenyal</p>
              <div class="flex items-center justify-between">
                <div><p class="text-3xl font-black bg-gradient-to-r from-red-900 to-red-600 bg-clip-text text-transparent">Rp3.000</p></div>
                <button onclick="openModal('Aneka Pempek', 'Pempek kecil dengan rasa ikan yang kuat dan tekstur kenyal', 3000, '{{ asset('assets/food3.png') }}')" class="bg-gradient-to-r from-red-900 to-red-700 hover:from-red-800 hover:to-red-600 text-white px-6 py-3 rounded-xl font-bold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">Pesan</button>
              </div>
            </div>
          </div>
          
          <div class="menu-card reveal glass rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl" data-category="makanan">
            <div class="relative overflow-hidden bg-gradient-to-br from-red-100 to-orange-100 h-48"><img src="{{ asset('assets/image (4).png') }}" alt="Rujak Mie" class="menu-image w-full h-full object-cover" /></div>
            <div class="p-6"><h3 class="menu-title text-2xl font-black text-gray-900 mb-2">Rujak Mie</h3><p class="text-gray-600 mb-4">Mi kuning dengan bumbu rujak manis pedas.</p><div class="flex items-center justify-between"><div><p class="text-3xl font-black bg-gradient-to-r from-red-900 to-red-600 bg-clip-text text-transparent">Rp15.000</p></div><button onclick="openModal('Rujak Mie', 'Mi kuning dengan bumbu rujak manis pedas', 15000, '{{ asset('assets/image (4).png') }}')" class="bg-gradient-to-r from-red-900 to-red-700 hover:from-red-800 hover:to-red-600 text-white px-6 py-3 rounded-xl font-bold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">Pesan</button></div></div>
          </div>
          
          <div class="menu-card reveal glass rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl" data-category="makanan">
            <div class="relative overflow-hidden bg-gradient-to-br from-yellow-100 to-orange-100 h-48"><img src="{{ asset('assets/image (1).png') }}" alt="Model Tekwan" class="menu-image w-full h-full object-cover" /></div>
            <div class="p-6"><h3 class="menu-title text-2xl font-black text-gray-900 mb-2">Model Tekwan</h3><p class="text-gray-600 mb-4">Tekwan khas Palembang dengan kuah kaldu udang.</p><div class="flex items-center justify-between"><div><p class="text-3xl font-black bg-gradient-to-r from-red-900 to-red-600 bg-clip-text text-transparent">Rp15.000</p></div><button onclick="openModal('Model Tekwan', 'Tekwan khas Palembang dengan kuah kaldu udang', 15000, '{{ asset('assets/image (1).png') }}')" class="bg-gradient-to-r from-red-900 to-red-700 hover:from-red-800 hover:to-red-600 text-white px-6 py-3 rounded-xl font-bold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">Pesan</button></div></div>
          </div>

          <div class="menu-card reveal glass rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl" data-category="makanan">
            <div class="relative overflow-hidden bg-gradient-to-br from-purple-100 to-pink-100 h-48"><img src="{{ asset('assets/pindangtechii.webp') }}" alt="" class="menu-image w-full h-full object-cover" /><div class="absolute top-4 right-4 bg-purple-600 text-white px-4 py-2 rounded-full font-bold text-sm shadow-lg">Premium</div></div>
            <div class="p-6"><h3 class="menu-title text-2xl font-black text-gray-900 mb-2">Pindang Ikan</h3><p class="text-gray-600 mb-4">Ikan segar dengan kuah asam pedas.</p><div class="flex items-center justify-between"><div><p class="text-3xl font-black bg-gradient-to-r from-red-900 to-red-600 bg-clip-text text-transparent">Rp15.000</p></div><button onclick="openModal('Pindang Ikan', 'Ikan segar dengan kuah asam pedas', 15000, '{{ asset('assets/pindangtechii.webp') }}')" class="bg-gradient-to-r from-red-900 to-red-700 hover:from-red-800 hover:to-red-600 text-white px-6 py-3 rounded-xl font-bold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">Pesan</button></div></div>
          </div>

          <div class="menu-card reveal glass rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl" data-category="makanan">
            <div class="relative overflow-hidden bg-gradient-to-br from-green-100 to-teal-100 h-48"><img src="{{ asset('assets/sototechii.webp') }}" alt="" class="menu-image w-full h-full object-cover" /></div>
            <div class="p-6"><h3 class="menu-title text-2xl font-black text-gray-900 mb-2">Soto Ayam</h3><p class="text-gray-600 mb-4">Soto Ayam dengan kuah gurih berbumbu rempah.</p><div class="flex items-center justify-between"><div><p class="text-3xl font-black bg-gradient-to-r from-red-900 to-red-600 bg-clip-text text-transparent">Rp15.000</p></div><button onclick="openModal('Soto Ayam', 'Soto Ayam dengan kuah gurih berbumbu rempah', 15000, '{{ asset('assets/sototechii.webp') }}')" class="bg-gradient-to-r from-red-900 to-red-700 hover:from-red-800 hover:to-red-600 text-white px-6 py-3 rounded-xl font-bold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">Pesan</button></div></div>
          </div>

          <div class="menu-card reveal glass rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl" data-category="minuman">
            <div class="relative overflow-hidden bg-gradient-to-br from-orange-100 to-red-100 h-48"><img src="{{ asset('assets/justechii.webp') }}" alt="Aneka Jus" class="menu-image w-full h-full object-cover" /></div>
            <div class="p-6"><h3 class="menu-title text-2xl font-black text-gray-900 mb-2">Aneka Jus</h3><p class="text-gray-600 mb-4">Aneka Jus segar dari buah pilihan.</p><div class="flex items-center justify-between"><div><p class="text-3xl font-black bg-gradient-to-r from-red-900 to-red-600 bg-clip-text text-transparent">Rp10.000</p></div><button onclick="openModal('Aneka Jus', 'Aneka Jus segar dari buah pilihan', 10000, '{{ asset('assets/justechii.webp') }}')" class="bg-gradient-to-r from-red-900 to-red-700 hover:from-red-800 hover:to-red-600 text-white px-6 py-3 rounded-xl font-bold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">Pesan</button></div></div>
          </div>

          <div class="menu-card reveal glass rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl" data-category="minuman">
            <div class="relative overflow-hidden bg-gradient-to-br from-red-200 to-orange-200 h-48"><img src="{{ asset('assets/cappucinotechii.webp') }}" alt="Cappucino" class="menu-image w-full h-full object-cover" /></div>
            <div class="p-6"><h3 class="menu-title text-2xl font-black text-gray-900 mb-2">Cappucino</h3><p class="text-gray-600 mb-4">Perpaduan espresso berkualitas dan susu hangat/dingin.</p><div class="flex items-center justify-between"><div><p class="text-3xl font-black bg-gradient-to-r from-red-900 to-red-600 bg-clip-text text-transparent">Rp10.000</p></div><button onclick="openModal('Cappucino', 'Perpaduan espresso berkualitas dan susu hangat/dingin', 10000, '{{ asset('assets/cappucinotechii.webp') }}')" class="bg-gradient-to-r from-red-900 to-red-700 hover:from-red-800 hover:to-red-600 text-white px-6 py-3 rounded-xl font-bold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">Pesan</button></div></div>
          </div>
        

         <div class="menu-card reveal glass rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl" data-category="makanan">
            <div class="relative overflow-hidden bg-gradient-to-br from-red-200 to-orange-200 h-48"><img src="{{ asset('assets/batagortechii.webp') }}" alt="Batagor" class="menu-image w-full h-full object-cover" /></div>
            <div class="p-6"><h3 class="menu-title text-2xl font-black text-gray-900 mb-2">Batagor</h3><p class="text-gray-600 mb-4">Batagor goreng renyah dengan isian tahu dan ikan yang gurih, disajikan dengan bumbu kacang khas Techi.</p><div class="flex items-center justify-between"><div><p class="text-3xl font-black bg-gradient-to-r from-red-900 to-red-600 bg-clip-text text-transparent">Rp10.000</p></div><button onclick="openModal('Batagor', 'Batagor goreng renyah dengan isian tahu dan ikan yang gurih, disajikan dengan bumbu kacang khas Techi', 10000, '{{ asset('assets/batagortechii.webp') }}')" class="bg-gradient-to-r from-red-900 to-red-700 hover:from-red-800 hover:to-red-600 text-white px-6 py-3 rounded-xl font-bold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">Pesan</button></div></div>
          </div>
    </section>

    <section id="menu" class="reveal relative py-32 bg-gradient-to-br from-red-900 via-red-800 to-orange-800 overflow-hidden">
  <div class="absolute inset-0 opacity-10 pointer-events-none">
    <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full filter blur-3xl float"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-yellow-300 rounded-full filter blur-3xl float-reverse"></div>
  </div>

  <div class="container mx-auto px-6 lg:px-12 relative z-10">
    <div class="text-center mb-16 reveal">
      <span class="inline-block bg-white/20 backdrop-blur-md text-white px-6 py-2 rounded-full text-sm font-bold mb-6 border border-white/30 shadow-lg">
        ✨ Special Offer
      </span>
      <h2 class="text-4xl lg:text-6xl font-black text-white mb-4">
        Bundling <span class="text-yellow-400">Hemat</span> Pempek
      </h2>
      <p class="text-lg lg:text-xl text-white/80 max-w-2xl mx-auto">
        Nikmati kelezatan lebih banyak dengan harga yang lebih bersahabat.
      </p>
    </div>

    <div class="max-w-5xl mx-auto">
      <div class="promo-card reveal bg-white rounded-3xl overflow-hidden shadow-2xl hover:shadow-orange-500/30 transition-shadow duration-500 flex flex-col lg:flex-row">
        
        <div class="relative lg:w-1/2 h-72 lg:h-auto overflow-hidden group">
          <img 
            src="{{ asset('assets/paket5.webp') }}" 
            alt="Paket Spesial " 
            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" 
          />
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent lg:bg-gradient-to-r lg:from-transparent lg:to-black/10"></div>
          
          <div class="absolute top-4 left-4">
             <span class="bg-red-600 text-white px-4 py-2 rounded-xl text-xs font-bold shadow-lg animate-pulse">
               🔥 Terbatas!
             </span>
          </div>
          <div class="absolute bottom-4 left-4 lg:hidden">
            
          </div>
        </div>

        <div class="p-8 lg:p-12 lg:w-1/2 flex flex-col justify-center bg-white relative">
            <div class="hidden lg:block absolute -top-10 -right-10 w-32 h-32 bg-yellow-100 rounded-full opacity-50 blur-2xl"></div>

            <div class="relative z-10">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-3xl lg:text-4xl font-black text-gray-900 leading-tight">
                        Paket Bundling
                    </h3>
                  
                </div>
                
                <div class="w-20 h-2 bg-gradient-to-r from-red-600 to-orange-500 rounded-full mb-6"></div>

                <ul class="space-y-3 mb-8">
                    <li class="flex items-center text-gray-700 text-lg">
                        <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="font-semibold">2 Kapal Selam</span>
                    </li>
                    <li class="flex items-center text-gray-700 text-lg">
                        <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="font-semibold">40 Pempek Campur</span>
                    </li>
                    <li class="flex items-center text-gray-700 text-lg">
                        <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="font-semibold">2 Lenjer Panjang</span>
                    </li>
                </ul>

                <div class="flex items-end gap-3 mb-8 border-t border-gray-100 pt-6">
                    <div>
                        <p class="text-gray-400 line-through text-lg font-medium">Rp250.000</p>
                        <p class="text-4xl lg:text-5xl font-black text-red-700">Rp210.000</p>
                    </div>
                 
                </div>

                <button onclick="openModal('Paket Hemat', '2 Kapal Selam + 40 Pempek Campur + 2 Pempek Lenjer Panjang', 210000, '{{ asset('assets/paket5.webp') }}')" 
                    class="w-full group bg-gradient-to-r from-red-700 to-orange-600 hover:from-red-800 hover:to-orange-700 text-white px-8 py-4 rounded-2xl font-black text-lg shadow-lg hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center gap-2">
                    <span>Ambil Promo Ini</span>
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </button>
            </div>
        </div>
      </div>
    </div>
</section>

    <footer class="reveal bg-gray-900 py-16">
      <div class="container mx-auto px-6 lg:px-12">
        <div class="grid md:grid-cols-3 gap-12 mb-12">
          <div><div class="flex items-center space-x-4 mb-6"><img src="{{ asset('assets/Group 1193 (1).png') }}" alt="" class="w-80 h-auto" /></div><p class="text-gray-400 text-lg leading-relaxed">Pempek khas Palembang dengan cita rasa autentik dan kualitas terbaik untuk keluarga Indonesia.</p></div>
          <div><h4 class="text-white font-bold text-xl mb-6">Quick Links</h4><ul class="space-y-4"><li><a href="{{ url('index.html') }}" class="text-gray-400 hover:text-white text-lg transition-colors duration-300">Home</a></li><li><a href="#filterSection" class="text-gray-400 hover:text-white text-lg transition-colors duration-300">Menu</a></li><li><a href="{{ url('promo.html') }}" class="text-gray-400 hover:text-white text-lg transition-colors duration-300">Promo</a></li><li><a href="{{ url('about.html') }}" class="text-gray-400 hover:text-white text-lg transition-colors duration-300">About</a></li></ul></div>
          <div><h4 class="text-white font-bold text-xl mb-6">Hubungi Kami</h4><div class="space-y-4"><div class="flex items-center gap-3"><div class="w-10 h-10 bg-red-900/30 rounded-lg flex items-center justify-center"><svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg></div><span class="text-gray-400 text-lg">+6285377444108</span></div><div class="flex items-center gap-3"><div class="w-10 h-10 bg-red-900/30 rounded-lg flex items-center justify-center"><svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg></div><span class="text-gray-400 text-lg">info@techi.com</span></div></div></div>
        </div>
        <div class="border-t border-gray-800 pt-8"><div class="flex flex-col md:flex-row justify-between items-center gap-4"><p class="text-gray-500 text-center">© 2025 Te'chi. All rights reserved.</p><div class="flex gap-4"><a href="#" class="w-10 h-10 bg-gray-800 hover:bg-red-900 rounded-full flex items-center justify-center transition-colors duration-300"><svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path></svg></a><a href="#" class="w-10 h-10 bg-gray-800 hover:bg-red-900 rounded-full flex items-center justify-center transition-colors duration-300"><svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM12 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg></a><a href="#" class="w-10 h-10 bg-gray-800 hover:bg-red-900 rounded-full flex items-center justify-center transition-colors duration-300"><svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"></path></svg></a></div></div></div>
    </footer>

    <script>

      // Pastikan variabel global didefinisikan di sini jika diperlukan, atau diubah menjadi bagian dari state (untuk aplikasi Laravel yang lebih kompleks)
      let currentMenuName = '';
      let currentMenuDesc = '';
      let currentPrice = 0;
      let currentImage = '';
      
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

      const filterSection = document.getElementById("filterSection");
      let lastScrollTop = 0;
      let filterSectionOffsetTop = 0;

      window.addEventListener("load", () => {
        filterSectionOffsetTop = filterSection.offsetTop;
      });

      window.addEventListener("scroll", () => {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > filterSectionOffsetTop + 100) {
          filterSection.classList.add("hide-filter");
        } else {
          filterSection.classList.remove("hide-filter");
        }
        lastScrollTop = scrollTop;
      });

      const searchInput = document.getElementById("searchInput");
      const filterBtns = document.querySelectorAll(".filter-btn");
      const menuCards = document.querySelectorAll(".menu-card");
      let activeCategory = "all";

      function applyFilters() {
        const searchText = searchInput.value.toLowerCase();
        menuCards.forEach((card) => {
          const categoryString = card.getAttribute("data-category").toLowerCase();
          const cardTitle = card.querySelector(".menu-title").innerText.toLowerCase();
          const matchCategory = activeCategory === "all" || categoryString.includes(activeCategory);
          const matchSearch = cardTitle.includes(searchText);

          card.classList.remove("active", "reveal", "category-btn-up");
          card.style.opacity = "0";
          card.style.transform = "translateY(30px)";

          if (matchCategory && matchSearch) {
            card.classList.remove("hidden");
            setTimeout(() => {
              card.classList.add("category-btn-up");
            }, 10);
          } else {
            card.classList.add("hidden");
          }
        });

        const visibleCards = document.querySelectorAll(".menu-card:not(.hidden)");
        visibleCards.forEach((card, index) => {
          card.style.animationDelay = `${index * 0.05}s`;
        });
      }

      searchInput.addEventListener("keyup", applyFilters);

      filterBtns.forEach((btn) => {
        btn.addEventListener("click", function () {
          filterBtns.forEach((b) => b.classList.remove("active"));
          this.classList.add("active");
          activeCategory = this.getAttribute("data-filter");
          applyFilters();
        });
      });

      function formatRupiah(amount) {
        return "Rp" + amount.toLocaleString("id-ID");
      }

      function openModal(name, desc, price, image) {
        currentMenuName = name;
        currentMenuDesc = desc;
        currentPrice = price;
        // Ganti logika set image agar menggunakan path dari fungsi asset Laravel untuk mencocokkan
        // Namun, karena ini ada di JS, kita gunakan placeholder yang harusnya sudah benar saat tombol diklik.
        // Jika menggunakan `asset()` di onclick HTML, itu akan ter-render langsung.
        // Karena Anda sudah menggunakan `asset()` di HTML (seperti di bawah), kita akan mempertahankan struktur ini.
        // Untuk JavaScript, jika path-nya relative, asumsikan sudah benar jika aset diletakkan di folder `public/assets`.
        currentImage = image; 

        document.getElementById("modalMenuName").textContent = name;
        document.getElementById("modalMenuDesc").textContent = desc;
        document.getElementById("modalPrice").textContent = formatRupiah(price);
        
        // Menggunakan path asset yang sudah di-render oleh Blade di dalam fungsi openModal
        // Perlu diingat bahwa path di dalam JS ini akan menjadi string literal setelah Blade merender.
        document.getElementById("modalProductImage").src = image; 
        document.getElementById("modalProductImage").alt = name;

        const modal = document.getElementById("orderModal");
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
        let message = `Halo! Saya ingin order ${currentMenuName} (${formattedPrice}). Pesan ini melalui ${platform}.`;
        let encodedMessage = encodeURIComponent(message);

        if (platform === "whatsapp") {
          const phoneNumber = "6285377444108"; 
          window.open(`https://wa.me/${phoneNumber}?text=${encodedMessage}`, "_blank");
        } else if (platform === "gojek") {
          alert('🚀 Mengarahkan ke GoFood...\n\nSilakan cari "Te\'chi Pempek Kecil" di aplikasi GoFood untuk melanjutkan pemesanan.');
        } else if (platform === "shopeefood") {
          alert('🚀 Mengarahkan ke ShopeeFood...\n\nSilakan cari "Te\'chi Pempek Kecil" di aplikasi ShopeeFood untuk melanjutkan pemesanan.');
        }
        closeModal();
      }

      document.getElementById("orderModal").addEventListener("click", function (e) {
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

      // --- NEW: 3D TILT EFFECT JS ---
      const heroSection = document.getElementById('home');
      const titleWrapper = document.querySelector('.hero-title-wrapper');

      if (heroSection && titleWrapper) {
        heroSection.addEventListener('mousemove', (e) => {
            const { offsetWidth: width, offsetHeight: height } = heroSection;
            let { offsetX: x, offsetY: y } = e;

            if (e.target !== heroSection) {
                x = x + e.target.offsetLeft;
                y = y + e.target.offsetTop;
            }

            const xWalk = Math.round((x / width * 40) - 20); // Tingkat kemiringan horizontal
            const yWalk = Math.round((y / height * 40) - 20); // Tingkat kemiringan vertikal

            titleWrapper.style.transform = `rotateX(${-yWalk}deg) rotateY(${xWalk}deg) scale(1.02)`;
            titleWrapper.style.filter = `brightness(1.1)`;
        });

        heroSection.addEventListener('mouseleave', () => {
             titleWrapper.style.transform = `rotateX(0deg) rotateY(0deg) scale(1)`;
             titleWrapper.style.filter = `brightness(1)`;
        });
      }
    </script>
  </body>
</html>
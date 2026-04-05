<?php require_once './partials/head.php'; ?>

<body
  class="bg-surface text-on-surface font-body selection:bg-primary selection:text-on-primary overflow-x-hidden">
  <?php
  require_once './partials/navbar.php';
  require_once './partials/drawer.php';
  ?>

  <main
    class="relative min-h-screen flex items-center pt-24 pb-12 overflow-hidden">
    <div class="absolute inset-0 hero-grid -z-10 pointer-events-none"></div>
    <section
      class="container flex flex-col md:flex-row items-center gap-12 lg:gap-20">
      <!-- Content Side -->
      <div
        class="flex-1 space-y-6 md:space-y-10 text-center md:text-left order-2 md:order-1">
        <div class="flex items-center justify-center md:justify-start gap-3">
          <span class="w-8 md:w-12 h-[2px] bg-primary rounded-full"></span>
          <span
            class="font-label text-primary uppercase tracking-[0.2em] text-[10px] md:text-xs font-black">Available for new projects</span>
        </div>
        <h1
          class="font-headline text-4xl sm:text-5xl lg:text-7xl font-extrabold text-on-surface leading-[1.1] tracking-tight">
          Hello, I'm
          <span
            class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-primary-container to-secondary">Gerardo Amel</span>
        </h1>
        <p
          class="text-on-surface-variant text-base sm:text-lg md:text-xl max-w-2xl mx-auto md:mx-0 leading-relaxed font-body">
          Building scalable, user-focused web and mobile applications using
          modern technologies. Specialized in crafting high-performance
          digital experiences.
        </p>
        <div
          class="flex flex-col sm:flex-row items-center justify-center md:justify-start gap-4 pt-4">
          <a
            class="w-full sm:w-auto group flex items-center justify-center gap-3 bg-gradient-to-r from-primary to-primary-container text-surface px-8 py-4 rounded-xl font-bold text-base md:text-lg hover:shadow-[0_0_30px_rgba(163,166,255,0.4)] transition-all duration-300"
            href="#">
            View My Projects
            <span
              class="material-symbols-outlined text-xl transition-transform group-hover:translate-x-1">arrow_forward</span>
          </a>
          <a
            class="w-full sm:w-auto group px-8 py-4 rounded-xl font-bold text-base md:text-lg border border-outline-variant/30 hover:bg-surface-variant transition-all duration-300 text-on-surface flex items-center justify-center gap-3"
            href="#">
            Get in touch
            <span class="material-symbols-outlined text-xl">mail</span>
          </a>
        </div>
      </div>
      <!-- Image Side -->
      <div
        class="flex-1 relative w-full order-1 md:order-2 max-w-xl mx-auto md:max-w-none">
        <div
          class="relative z-10 w-full aspect-square md:aspect-[4/5] lg:aspect-square rounded-[2rem] md:rounded-[3rem] overflow-hidden shadow-2xl group">
          <div
            class="absolute inset-0 bg-primary/10 group-hover:bg-transparent transition-colors duration-700 z-10 pointer-events-none"></div>
          <img
            alt="Developer workspace"
            class="w-full h-full object-cover grayscale group-hover:grayscale-0 scale-105 group-hover:scale-100 transition-all duration-700"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCHA74nqcmXr9yepjYMyua96C32aVraXbyW02TCbuO8_VfjFApGArjRb3eaY19HY72cHRMH-pTBfgeDTr_JJDGyWr-p0IlC10NpE7dWE9GawieaPQWEHY7JJ0g-yNF0clXUCZvtM2IJx7oohWlMyJ4MuR2SRgGtTBjHjGgPWdCz_EZgOpr2bD6YjyQ8RQDkM6F27pBgpw1npfgvQlvdtAgAyof3fxKrZAf58KjRBpQyo8jZTDvCMXyErHjc5CssxiyW5G1_ArDeM6U2" />
        </div>
        <!-- Decorative blobs for responsive punch -->
        <div
          class="absolute -top-10 -right-10 w-40 h-40 bg-primary/20 blur-[80px] rounded-full -z-10"></div>
        <div
          class="absolute -bottom-10 -left-10 w-60 h-60 bg-secondary/10 blur-[100px] rounded-full -z-10"></div>
      </div>
    </section>
  </main>

  <?php require_once './partials/footer.php'; ?>
  <script src="./assets/scripts/menu.js"></script>
</body>
</html>
    <!-- Navigation Overlay & Drawer -->
    <div
      class="fixed inset-0 bg-black/60 opacity-0 pointer-events-none transition-opacity duration-300 z-[60]"
      id="overlay"
    ></div>
    <div
      class="fixed top-0 right-0 h-full w-[80%] max-w-[320px] bg-surface-container border-l border-outline-variant/20 transform translate-x-full z-[70] p-8 flex flex-col shadow-2xl"
      id="drawer"
    >
      <div class="flex justify-between items-center mb-12">
        <span
          class="text-sm font-bold uppercase tracking-widest text-on-surface-variant"
          >Menu</span
        >
        <button
          aria-label="Close Menu"
          class="text-3xl p-2 -mr-2"
          id="close-btn"
        >
          <span class="material-symbols-outlined">close</span>
        </button>
      </div>
      <div class="flex flex-col gap-8 text-xl font-semibold">
        <a class="nav-link" href="index.php">Home</a>
        <a class="nav-link" href="about.php">About</a>
        <a class="nav-link" href="projects.php">Projects</a>
        <a class="nav-link" href="contact.php">Contact</a>
      </div>
      <div class="mt-auto pt-8">
        <a
          href="./../assets/gerardo_amel_castaneda_perez_cv.pdf"
          target="_blank"
          class="w-full bg-primary text-surface font-bold px-4 py-4 rounded-xl shadow-lg shadow-primary/20"
        >
          Download Resume
        </a>
      </div>
    </div>
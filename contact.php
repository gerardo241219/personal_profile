<?php require_once './partials/head.php'; ?>

<body
  class="bg-surface text-on-surface font-body selection:bg-primary selection:text-on-primary overflow-x-hidden">
  <?php
  require_once './partials/navbar.php';
  require_once './partials/drawer.php';
  ?>

  <main class="flex-grow pt-32 pb-20 px-8">
    <div class="max-w-7xl flex justify-center gap-16 items-center">
      <!-- Left Column: Editorial Intro -->
      <div class="space-y-12">
        <div class="space-y-6">
          <span
            class="inline-block px-4 py-1.5 rounded-full bg-surface-variant text-primary font-label text-xs tracking-widest uppercase">Available for work</span>
          <h1
            class="font-headline text-6xl md:text-7xl font-extrabold tracking-tighter leading-[0.9] text-on-background">
            Let's start <br />
            a <span class="text-primary italic">conversation</span>.
          </h1>
          <p class="text-on-surface-variant text-lg leading-relaxed max-w-md">
            Whether you have a project in mind, a business need, or a
            technical challenge, I’m always open to discussing new
            opportunities and collaborations.
          </p>
        </div>
        <!-- Contact Details Grid (Bento Style) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div
            class="p-6 rounded-xl bg-surface-container-low group hover:bg-surface-container-high transition-all duration-300">
            <div class="text-primary mb-4">
              <span class="material-symbols-outlined text-3xl">alternate_email</span>
            </div>
            <h3
              class="font-label text-xs uppercase tracking-widest text-outline mb-1">
              Email Me
            </h3>
            <p class="font-headline font-bold text-xs text-on-surface">
              gcecomputacion@gmail.com
            </p>
          </div>
          <div
            class="p-6 rounded-xl bg-surface-container-low group hover:bg-surface-container-high transition-all duration-300">
            <div class="text-primary mb-4">
              <span class="material-symbols-outlined text-3xl">phone</span>
            </div>
            <h3
              class="font-label text-xs uppercase tracking-widest text-outline mb-1">
              Call Me
            </h3>
            <p class="font-headline font-bold text-xs text-on-surface">
              +52 618 2 19 16 13
            </p>
          </div>
          <div
            class="p-6 rounded-xl bg-surface-container-low group hover:bg-surface-container-high transition-all duration-300">
            <div class="text-primary mb-4">
              <span class="material-symbols-outlined text-3xl">location_on</span>
            </div>
            <h3
              class="font-label text-xs uppercase tracking-widest text-outline mb-1">
              Based In
            </h3>
            <p class="font-headline font-bold text-on-surface text-xs">
              Durango Dgo. México
            </p>
          </div>
        </div>
        <!-- Social Cluster -->
        <div class="pt-4">
          <div class="flex flex-wrap gap-4">
            <a
              class="flex items-center gap-3 px-5 py-3 rounded-xl bg-surface-container-highest text-on-surface hover:text-primary transition-all group"
              href="#">
              <span class="material-symbols-outlined" data-icon="link">link</span>
              <span class="font-medium">LinkedIn</span>
            </a>
            <a
              class="flex items-center gap-3 px-5 py-3 rounded-xl bg-surface-container-highest text-on-surface hover:text-primary transition-all"
              href="#">
              <span class="material-symbols-outlined" data-icon="terminal">terminal</span>
              <span class="font-medium">GitHub</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php require_once './partials/footer.php'; ?>
  <script src="./assets/scripts/menu.js"></script>
</body>

</html>
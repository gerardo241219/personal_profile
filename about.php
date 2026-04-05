<?php require_once './partials/head.php'; ?>

<body
  class="bg-surface text-on-surface font-body selection:bg-primary selection:text-on-primary overflow-x-hidden">
  <?php
  require_once './partials/navbar.php';
  require_once './partials/drawer.php';
  ?>

  <main class="pt-24 sm:pt-32 lg:pt-40 pb-20 overflow-hidden">
    <!-- Hero Section -->
    <section
      class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16 sm:mb-24 lg:mb-32">
      <div
        class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
        <div class="lg:col-span-7 space-y-6 sm:space-y-8 order-2 lg:order-1">
          <div
            class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-surface-container-high border border-outline-variant/50 text-secondary text-xs sm:text-sm font-medium tracking-wide uppercase">
            <span
              class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
            About me
          </div>
          <h1
            class="text-4xl sm:text-6xl lg:text-7xl font-headline font-extrabold tracking-tight leading-tight">
            Developing
            <span
              class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-secondary to-tertiary">Digital solutions</span>
            with purpose.
          </h1>
          <p
            class="text-lg sm:text-xl text-on-surface-variant leading-relaxed max-w-2xl">
            Software Developer with experience building scalable web and
            mobile applications, primarily focused on CRM systems and internal
            enterprise solutions. Proven ability to contribute to the
            development of complex platforms, including sales management
            systems, educational tools, and real-time communication
            applications.
          </p>
          <p
            class="text-lg sm:text-xl text-on-surface-variant leading-relaxed max-w-2xl">
            Skilled in designing and implementing efficient workflows,
            developing new modules, and maintaining existing systems to ensure
            performance and reliability. Experienced in working with modern
            technologies and integrating systems to support business
            operations and decision-making.
          </p>
          <p
            class="text-lg sm:text-xl text-on-surface-variant leading-relaxed max-w-2xl">
            Passionate about continuous learning and delivering practical
            solutions that improve processes and user experience.
          </p>
          <div class="flex flex-wrap gap-4 pt-4">
            <div
              class="flex items-center gap-2 px-4 py-2 bg-surface-container rounded-lg border border-outline-variant/30">
              <span class="material-symbols-outlined text-primary">location_on</span>
              <span class="text-sm font-medium">Remote / Durango, Dgo. México</span>
            </div>
            <div
              class="flex items-center gap-2 px-4 py-2 bg-surface-container rounded-lg border border-outline-variant/30">
              <span class="material-symbols-outlined text-secondary">verified</span>
              <span class="text-sm font-medium">Full Stack Web Developer</span>
            </div>
          </div>
        </div>
        <div
          class="lg:col-span-5 relative order-1 lg:order-2 flex justify-center lg:justify-end">
          <div
            class="relative w-full max-w-[320px] sm:max-w-[400px] lg:max-w-none aspect-square">
            <div
              class="absolute -top-6 -left-6 w-24 h-24 sm:w-32 sm:h-32 bg-primary/20 rounded-full blur-3xl floating"></div>
            <div
              class="absolute -bottom-6 -right-6 w-32 h-32 sm:w-40 sm:h-40 bg-secondary/20 rounded-full blur-3xl floating"
              style="animation-delay: -2s"></div>
            <div
              class="relative z-10 w-full h-full rounded-2xl sm:rounded-3xl overflow-hidden border border-outline-variant/50 group">
              <img
                alt="Profile"
                class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700"
                src="./assets/images/photo_profile.webp" />
              <div
                class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent opacity-60"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Stats Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-24 lg:mb-32">
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        <div
          class="p-8 bg-surface-container-low rounded-2xl border border-outline-variant/30 hover:border-primary/50 transition-colors">
          <span
            class="text-4xl sm:text-5xl font-headline font-bold text-primary mb-4 block">05+</span>
          <h3 class="text-lg font-bold mb-1">Years Experience</h3>
          <p class="text-sm text-on-surface-variant">
            In fullstack development &amp; architecture.
          </p>
        </div>
        <div
          class="p-8 bg-surface-container-low rounded-2xl border border-outline-variant/30 hover:border-secondary/50 transition-colors">
          <span
            class="text-4xl sm:text-5xl font-headline font-bold text-secondary mb-4 block">10+</span>
          <h3 class="text-lg font-bold mb-1">Projects Shipped</h3>
          <p class="text-sm text-on-surface-variant">
            Delivering robust, scalable web platforms.
          </p>
        </div>
        <div
          class="p-8 bg-surface-container-low rounded-2xl border border-outline-variant/30 hover:border-tertiary/50 transition-colors">
          <span
            class="text-4xl sm:text-5xl font-headline font-bold text-tertiary mb-4 block">99.9</span>
          <h3 class="text-lg font-bold mb-1">Uptime Focus</h3>
          <p class="text-sm text-on-surface-variant">
            Prioritizing reliability and performance.
          </p>
        </div>
      </div>
    </section>
    <!-- Detailed Skills & Education Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-24 lg:mb-32">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
        <div class="lg:col-span-8 space-y-12">
          <div>
            <h2 class="text-3xl font-headline font-bold mb-8">
              Habilidades Técnicas
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
              <!-- Frontend -->
              <div class="space-y-4">
                <h3
                  class="text-sm font-bold uppercase tracking-widest text-primary">
                  Frontend
                </h3>
                <ul class="space-y-2 text-on-surface-variant">
                  <li class="flex items-center gap-2 text-sm">
                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                    HTML, CSS, JavaScript
                  </li>
                  <li class="flex items-center gap-2 text-sm">
                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                    TailwindCSS, Bootstrap
                  </li>
                  <li class="flex items-center gap-2 text-sm">
                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                    jQuery, Datatables
                  </li>
                </ul>
              </div>
              <!-- Backend -->
              <div class="space-y-4">
                <h3
                  class="text-sm font-bold uppercase tracking-widest text-secondary">
                  Backend
                </h3>
                <ul class="space-y-2 text-on-surface-variant">
                  <li class="flex items-center gap-2 text-sm">
                    <span
                      class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                    MySQL
                  </li>
                  <li class="flex items-center gap-2 text-sm">
                    <span
                      class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                    PHP (Laravel - Codeiniter)
                  </li>
                  <li class="flex items-center gap-2 text-sm">
                    <span
                      class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                    Node.js, Express
                  </li>
                </ul>
              </div>
              <!-- Services -->
              <div class="space-y-4">
                <h3
                  class="text-sm font-bold uppercase tracking-widest text-tertiary">
                  Servicios &amp; API
                </h3>
                <ul class="space-y-2 text-on-surface-variant">
                  <li class="flex items-center gap-2 text-sm">
                    <span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                    WhatsApp Business API
                  </li>
                  <li class="flex items-center gap-2 text-sm">
                    <span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                    Geolocalización (Maps)
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div>
            <h2 class="text-3xl font-headline font-bold mb-8">Educación</h2>
            <div class="space-y-6">
              <div
                class="p-6 bg-surface-container-low rounded-xl border border-outline-variant/30 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                  <h4 class="text-lg font-bold">Bachelor's Degree</h4>
                  <p class="text-on-surface-variant">
                    Instituto Tecnológico de Durango
                  </p>
                </div>
                <span
                  class="px-4 py-1 bg-surface-container-high rounded-full text-xs font-bold text-primary border border-primary/20">Graduado</span>
              </div>
              <div
                class="p-6 bg-surface-container-low rounded-xl border border-outline-variant/30 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                  <h4 class="text-lg font-bold">High School</h4>
                  <p class="text-on-surface-variant">CBTis #130</p>
                </div>
                <span
                  class="px-4 py-1 bg-surface-container-high rounded-full text-xs font-bold text-secondary border border-secondary/20">Graduado</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Journey Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-24 lg:mb-32">
      <h2
        class="text-3xl sm:text-4xl font-headline font-bold mb-12 sm:mb-16 text-center">
        Experiencia Laboral
      </h2>
      <div class="relative">
        <div
          class="absolute left-4 lg:left-1/2 top-0 bottom-0 w-px bg-gradient-to-b from-primary via-secondary to-transparent -translate-x-1/2"></div>
        <div class="space-y-12 sm:space-y-24">
          <!-- Experience 1 -->
          <div
            class="relative grid grid-cols-1 lg:grid-cols-2 gap-8 items-center pl-12 lg:pl-0">
            <div class="lg:text-right lg:pr-16">
              <div class="text-primary font-bold mb-2">2022 — 2026</div>
              <h3 class="text-xl sm:text-2xl font-bold mb-2">
                Fullstack Web Developer
              </h3>
              <div
                class="text-sm font-bold text-on-surface-variant mb-4 uppercase tracking-wider">
                Grupo Optima
              </div>
              <p
                class="text-on-surface-variant text-sm sm:text-base leading-relaxed">
                Contributed to the development and maintenance of internal CRM
                systems for vehicle sales management, working with brands such
                as Honda and KIA. Supported the implementation of new modules
                and enhancements to existing features, including customer
                lifecycle management, sales tracking, and employee operations.
                Additionally, collaborated on a mobile application integrated
                with internal systems, utilizing real-time communication
                (sockets) to trigger automated SMS notifications, improving
                internal communication and responsiveness in sales processes.
              </p>
            </div>
            <div class="hidden lg:block"></div>
            <div
              class="absolute left-0 lg:left-1/2 w-4 h-4 bg-primary rounded-full -translate-x-1/2 shadow-[0_0_15px_rgba(163,166,255,0.6)]"></div>
          </div>
          <!-- Experience 2 -->
          <div
            class="relative grid grid-cols-1 lg:grid-cols-2 gap-8 items-center pl-12 lg:pl-0">
            <div class="hidden lg:block order-1"></div>
            <div class="lg:pl-16 order-2 lg:order-2">
              <div class="text-secondary font-bold mb-2">2019 — 2022</div>
              <h3 class="text-xl sm:text-2xl font-bold mb-2">
                Fullstack Web Developer
              </h3>
              <div
                class="text-sm font-bold text-on-surface-variant mb-4 uppercase tracking-wider">
                Secretaria de Educacion del Estado de Durango
              </div>
              <p
                class="text-on-surface-variant text-sm sm:text-base leading-relaxed">
                Contributed to the development of large-scale internal systems
                supporting multiple departments within the State Department of
                Education. Participated in building a school management system
                for secondary and teacher training institutions, including
                student records and academic tracking. Supported the
                development of a mobile application for event attendance using
                QR code scanning, along with a web platform for reporting and
                analytics. Also collaborated on modules for employee
                credential generation and printing, as well as geolocation
                mapping of schools and data analysis related to students,
                grades, and infrastructure. Additionally, developed a custom
                web application using an MVC architecture in PHP to support
                internal processes such as teacher allocation, onboarding, and
                job transfers across institutions.
              </p>
            </div>
            <div
              class="absolute left-0 lg:left-1/2 w-4 h-4 bg-secondary rounded-full -translate-x-1/2 shadow-[0_0_15px_rgba(83,221,252,0.6)]"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- CTA Section -->
    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 mb-24">
      <div
        class="relative overflow-hidden bg-gradient-to-br from-surface-container-high to-surface-container-highest p-8 sm:p-12 lg:p-20 rounded-3xl border border-outline-variant/30 text-center">
        <div
          class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_50%_-20%,rgba(163,166,255,0.1),transparent_70%)]"></div>
        <h2
          class="text-3xl sm:text-5xl font-headline font-bold mb-6 sm:mb-8 relative z-10">
          ¿Listo para innovar?
        </h2>
        <p
          class="text-lg sm:text-xl text-on-surface-variant mb-10 sm:mb-12 max-w-2xl mx-auto relative z-10">
          Hablemos sobre tu próximo proyecto y cómo mi experiencia puede
          ayudarte a alcanzar tus objetivos tecnológicos.
        </p>
        <div
          class="flex flex-col sm:flex-row items-center justify-center gap-4 relative z-10">
          <a
            class="w-full sm:w-auto px-8 py-4 bg-primary text-on-primary rounded-xl font-bold text-lg hover:scale-105 transition-transform"
            href="#">Contactar Ahora</a>
          <a
            class="w-full sm:w-auto px-8 py-4 bg-surface-container-lowest border border-outline-variant/50 rounded-xl font-bold text-lg hover:bg-surface-container-highest transition-colors"
            href="#">Ver Proyectos</a>
        </div>
      </div>
    </section>
  </main>

  <?php require_once './partials/footer.php'; ?>
  <script src="./assets/scripts/menu.js"></script>
</body>

</html>
<?php require_once './partials/head.php'; ?>

<body
  class="bg-surface text-on-surface font-body selection:bg-primary selection:text-on-primary overflow-x-hidden">
  <?php
  require_once './partials/navbar.php';
  require_once './partials/drawer.php';
  ?>

  <main class="pt-32 pb-24 px-6 md:px-12 max-w-7xl mx-auto">
    <!-- Hero Header Section -->
    <header class="mb-20 max-w-3xl">
      <h1
        class="font-headline text-5xl md:text-7xl font-extrabold tracking-tighter text-on-surface mb-6">
        Featured Projects
      </h1>
      <p
        class="text-on-surface-variant text-lg md:text-xl leading-relaxed font-body">
        Explore my experience building scalable solutions, from robust backend
        architectures to dynamic frontend interfaces and enterprise automation
        systems.
      </p>
    </header>
    <!-- Projects Grid -->
    <div class="asymmetric-grid pb-20">
      <!-- Project 1: PXO -->
      <div
        class="project-card group flex flex-col bg-surface-container-low rounded-xl overflow-hidden tonal-shift hover:bg-surface-container-high hover:shadow-[0_20px_40px_rgba(222,229,255,0.04)]">
        <div
          class="h-64 flex justify-center items-center overflow-hidden relative m-4 rounded-lg">
          <img
            alt="CRM Dashboard UI"
            class="w-full object-cover transition-transform duration-700 group-hover:scale-110"
            data-alt="Modern high-tech data dashboard with complex analytics charts and dark blue glowing interface elements on a black background"
            src="./assets/images/pxo.png" />
          <div
            class="absolute top-4 left-4 bg-surface-container-highest/80 backdrop-blur-md px-3 py-1 rounded-full border border-outline-variant/10">
            <span
              class="font-label text-[10px] text-secondary tracking-widest uppercase font-bold">Fullstack</span>
          </div>
        </div>
        <div class="px-8 pb-8 pt-2">
          <h3 class="font-headline text-2xl font-bold text-on-surface mb-2">
            PXO
          </h3>
          <p class="text-primary-dim font-medium text-sm mb-4">
            Grupo Optima
          </p>
          <p class="text-on-surface-variant text-sm leading-relaxed mb-6">
            Designed and developed a web-based CRM system for insurance policy
            sales management. Implemented features such as sales tracking,
            customer relationship management, and data analytics for
            performance insights. Built automated email campaigns to support
            marketing efforts and integrated the platform with internal
            enterprise systems, improving workflow efficiency and data
            consistency.
          </p>
          <div class="flex flex-wrap gap-2 mb-8">
            <span
              class="px-3 py-1 bg-surface-variant text-on-surface-variant text-[10px] font-label font-bold tracking-widest uppercase rounded-full">Bootstrap</span>
            <span
              class="px-3 py-1 bg-surface-variant text-on-surface-variant text-[10px] font-label font-bold tracking-widest uppercase rounded-full">Datatable
            </span>
            <span
              class="px-3 py-1 bg-surface-variant text-on-surface-variant text-[10px] font-label font-bold tracking-widest uppercase rounded-full">PHP</span>
            <span
              class="px-3 py-1 bg-surface-variant text-on-surface-variant text-[10px] font-label font-bold tracking-widest uppercase rounded-full">Codeigniter</span>
            <span
              class="px-3 py-1 bg-surface-variant text-on-surface-variant text-[10px] font-label font-bold tracking-widest uppercase rounded-full">JavaScript</span>
            <span
              class="px-3 py-1 bg-surface-variant text-on-surface-variant text-[10px] font-label font-bold tracking-widest uppercase rounded-full">AJAX</span>
            <span
              class="px-3 py-1 bg-surface-variant text-on-surface-variant text-[10px] font-label font-bold tracking-widest uppercase rounded-full">MySQL</span>
            <span
              class="px-3 py-1 bg-surface-variant text-on-surface-variant text-[10px] font-label font-bold tracking-widest uppercase rounded-full">WhatsApp (Wati)</span>
          </div>
        </div>
      </div>
      <!-- Project 2: Plataforma Educativa SEED -->
      <div
        class="project-card group flex flex-col bg-surface-container-low rounded-xl overflow-hidden tonal-shift hover:bg-surface-container-high hover:shadow-[0_20px_40px_rgba(222,229,255,0.04)]">
        <div
          class="h-64 flex justify-center items-center overflow-hidden relative m-4 rounded-lg">
          <img
            alt="Educational Platform UI"
            class="w-full object-cover transition-transform duration-700 group-hover:scale-110"
            data-alt="Clean educational interface on a laptop screen with organized document structures and minimalist pedagogical design in cool tones"
            src="./assets/images/gpo.png" />
          <div
            class="absolute top-4 left-4 bg-surface-container-highest/80 backdrop-blur-md px-3 py-1 rounded-full border border-outline-variant/10">
            <span
              class="font-label text-[10px] text-secondary tracking-widest uppercase font-bold">Fullstack</span>
          </div>
        </div>
        <div class="px-8 pb-8 pt-2">
          <h3 class="font-headline text-2xl font-bold text-on-surface mb-2">
            KCRM - HCRM
          </h3>
          <p class="text-primary-dim font-medium text-sm mb-4">
            Grupo Optima
          </p>
          <p class="text-on-surface-variant text-sm leading-relaxed mb-6">
            Contributed to the development and maintenance of internal
            web-based CRM systems for managing vehicle sales for brands such
            as Honda and KIA. Supported the implementation of new modules and
            the enhancement of existing ones, including customer process
            management, sales tracking, and employee operations. Helped
            improve data organization, streamline workflows, and maintain
            system reliability within the organization.
          </p>
          <div class="flex flex-wrap gap-2 mb-8">
            <span
              class="px-3 py-1 bg-surface-variant text-on-surface-variant text-[10px] font-label font-bold tracking-widest uppercase rounded-full">Bootstrap</span>
            <span
              class="px-3 py-1 bg-surface-variant text-on-surface-variant text-[10px] font-label font-bold tracking-widest uppercase rounded-full">PHP</span>
            <span
              class="px-3 py-1 bg-surface-variant text-on-surface-variant text-[10px] font-label font-bold tracking-widest uppercase rounded-full">Codeigniter</span>
            <span
              class="px-3 py-1 bg-surface-variant text-on-surface-variant text-[10px] font-label font-bold tracking-widest uppercase rounded-full">JavaScript</span>

            <span
              class="px-3 py-1 bg-surface-variant text-on-surface-variant text-[10px] font-label font-bold tracking-widest uppercase rounded-full">AJAX</span>
          </div>
        </div>
      </div>
      <!-- Project 3: App de Geolocalización -->
      <div
        class="project-card group flex flex-col bg-surface-container-low rounded-xl overflow-hidden tonal-shift hover:bg-surface-container-high hover:shadow-[0_20px_40px_rgba(222,229,255,0.04)]">
        <div class="h-64 overflow-hidden relative m-4 rounded-lg">
          <img
            alt="Geolocation Tracking Map"
            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
            data-alt="Digital night map visualization with glowing path lines and location pin markers over a dark stylized urban topography"
            src="./assets/images/android-logo.png" />
          <div
            class="absolute top-4 left-4 bg-surface-container-highest/80 backdrop-blur-md px-3 py-1 rounded-full border border-outline-variant/10">
            <span
              class="font-label text-[10px] text-secondary tracking-widest uppercase font-bold">Mobiles</span>
          </div>
        </div>
        <div class="px-8 pb-8 pt-2">
          <h3 class="font-headline text-2xl font-bold text-on-surface mb-2">
            App
          </h3>
          <p class="text-primary-dim font-medium text-sm mb-4">
            Grupo Optima
          </p>
          <p class="text-on-surface-variant text-sm leading-relaxed mb-6">
            Contributed to the development of a mobile application integrated
            with an internal enterprise system (SYGO). Implemented real-time
            communication using sockets to receive event-driven triggers and
            enable automated SMS notifications to employees. This
            functionality helped keep staff informed about updates in customer
            sales processes, improving communication and operational
            responsiveness.
          </p>
          <div class="flex flex-wrap gap-2 mb-8">
            <span
              class="bg-surface-variant text-on-surface-variant px-3 py-1 rounded-full text-[11px] font-bold font-label tracking-wider uppercase">Android Studio</span>
            <span
              class="bg-surface-variant text-on-surface-variant px-3 py-1 rounded-full text-[11px] font-bold font-label tracking-wider uppercase">WebSockets</span>
          </div>
        </div>
      </div>
      <!-- Project 4: Integración de WhatsApp (1Msg) -->
      <div
        class="project-card group flex flex-col bg-surface-container-low rounded-xl overflow-hidden tonal-shift hover:bg-surface-container-high hover:shadow-[0_20px_40px_rgba(222,229,255,0.04)]">
        <div
          class="h-64 flex justify-center items-center overflow-hidden relative m-4 rounded-lg">
          <img
            alt="Communication Workflow Automation"
            class="w-full object-cover transition-transform duration-700 group-hover:scale-110"
            data-alt="Conceptual visualization of automated message bubbles flowing through a digital circuit board with soft glowing cyan light"
            src="./assets/images/react-native.png" />
          <div
            class="absolute top-4 left-4 bg-surface-container-highest/80 backdrop-blur-md px-3 py-1 rounded-full border border-outline-variant/10">
            <span
              class="font-label text-[10px] text-secondary tracking-widest uppercase font-bold">Mobiles</span>
          </div>
        </div>
        <div class="px-8 pb-8 pt-2">
          <h3 class="font-headline text-2xl font-bold text-on-surface mb-2">
            App
          </h3>
          <p class="text-primary-dim font-medium text-sm mb-4">
            Secretaria de Educacion del Estado de Durango
          </p>
          <p class="text-on-surface-variant text-sm leading-relaxed mb-6">
            Contributed to the development of a mobile application for
            attendance tracking at internal events organized by the State
            Department of Education of Durango. Implemented QR code scanning
            for efficient check-in processes, ensuring accurate and real-time
            attendance registration. Additionally, supported the development
            of a web platform to access reports and analytics, providing
            insights into attendance metrics and event performance.
          </p>
          <div class="flex flex-wrap gap-2 mb-8">
            <span
              class="bg-surface-variant text-on-surface-variant px-3 py-1 rounded-full text-[11px] font-bold font-label tracking-wider uppercase">React Native</span>
            <span
              class="bg-surface-variant text-on-surface-variant px-3 py-1 rounded-full text-[11px] font-bold font-label tracking-wider uppercase">PHP</span>
          </div>
        </div>
      </div>

      <!-- Project 5: Integración de WhatsApp (1Msg) -->
      <div
        class="project-card group flex flex-col bg-surface-container-low rounded-xl overflow-hidden tonal-shift hover:bg-surface-container-high hover:shadow-[0_20px_40px_rgba(222,229,255,0.04)]">
        <div
          class="h-64 flex justify-center items-center overflow-hidden relative m-4 rounded-lg">
          <img
            alt="Communication Workflow Automation"
            class="w-full object-cover transition-transform duration-700 group-hover:scale-110"
            data-alt="Conceptual visualization of automated message bubbles flowing through a digital circuit board with soft glowing cyan light"
            src="./assets/images/seed.svg" />
          <div
            class="absolute top-4 left-4 bg-surface-container-highest/80 backdrop-blur-md px-3 py-1 rounded-full border border-outline-variant/10">
            <span
              class="font-label text-[10px] text-secondary tracking-widest uppercase font-bold">Fullstack</span>
          </div>
        </div>
        <div class="px-8 pb-8 pt-2">
          <h3 class="font-headline text-2xl font-bold text-on-surface mb-2">
            Macrosystem
          </h3>
          <p class="text-primary-dim font-medium text-sm mb-4">
            Secretaria de Educacion del Estado de Durango
          </p>
          <p class="text-on-surface-variant text-sm leading-relaxed mb-6">
            Contributed to the development of a large-scale system designed to
            manage multiple internal departments within the State Department
            of Education. Participated in building a school management module
            for secondary schools and teacher training institutions, including
            features for student records and academic tracking. Supported the
            implementation of an employee credentialing system for both
            administrative and educational staff, including ID generation and
            printing. Additionally, contributed to the geolocation mapping of
            schools across Durango and the development of analytics for
            student performance, grades, and institutional infrastructure.
          </p>
          <div class="flex flex-wrap gap-2 mb-8">
            <span
              class="px-3 py-1 bg-surface-variant text-on-surface-variant text-[10px] font-label font-bold tracking-widest uppercase rounded-full">Bootstrap</span>
            <span
              class="px-3 py-1 bg-surface-variant text-on-surface-variant text-[10px] font-label font-bold tracking-widest uppercase rounded-full">JavaScript</span>
            <span
              class="px-3 py-1 bg-surface-variant text-on-surface-variant text-[10px] font-label font-bold tracking-widest uppercase rounded-full">AJAX</span>
            <span
              class="px-3 py-1 bg-surface-variant text-on-surface-variant text-[10px] font-label font-bold tracking-widest uppercase rounded-full">Datatables</span>
            <span
              class="px-3 py-1 bg-surface-variant text-on-surface-variant text-[10px] font-label font-bold tracking-widest uppercase rounded-full">PHP</span>
            <span
              class="px-3 py-1 bg-surface-variant text-on-surface-variant text-[10px] font-label font-bold tracking-widest uppercase rounded-full">MySQL</span>
          </div>
        </div>
      </div>

      <!-- Project 4: Integración de WhatsApp (1Msg) -->
      <div
        class="project-card group flex flex-col bg-surface-container-low rounded-xl overflow-hidden tonal-shift hover:bg-surface-container-high hover:shadow-[0_20px_40px_rgba(222,229,255,0.04)]">
        <div
          class="h-64 flex justify-center items-center overflow-hidden relative m-4 rounded-lg">
          <img
            alt="Communication Workflow Automation"
            class="w-full object-cover transition-transform duration-700 group-hover:scale-110"
            data-alt="Conceptual visualization of automated message bubbles flowing through a digital circuit board with soft glowing cyan light"
            src="./assets/images/seed.svg" />
          <div
            class="absolute top-4 left-4 bg-surface-container-highest/80 backdrop-blur-md px-3 py-1 rounded-full border border-outline-variant/10">
            <span
              class="font-label text-[10px] text-secondary tracking-widest uppercase font-bold">FullStack</span>
          </div>
        </div>
        <div class="px-8 pb-8 pt-2">
          <h3 class="font-headline text-2xl font-bold text-on-surface mb-2">
            USICAMM
          </h3>
          <p class="text-primary-dim font-medium text-sm mb-4">
            Secretaria de Educacion del Estado de Durango
          </p>
          <p class="text-on-surface-variant text-sm leading-relaxed mb-6">
            Designed and developed a web application using a custom MVC
            architecture in PHP, built from scratch to align with specific
            project requirements and improve workflow efficiency. The system
            supports internal processes for teacher allocation to schools,
            onboarding of new educators into the educational system, and
            management of job transfers between institutions, among other
            administrative operations.
          </p>
          <div class="flex flex-wrap gap-2 mb-8">
            <span
              class="px-3 py-1 bg-surface-variant text-on-surface-variant text-[10px] font-label font-bold tracking-widest uppercase rounded-full">Bootstrap</span>
            <span
              class="px-3 py-1 bg-surface-variant text-on-surface-variant text-[10px] font-label font-bold tracking-widest uppercase rounded-full">Javascript</span>
            <span
              class="px-3 py-1 bg-surface-variant text-on-surface-variant text-[10px] font-label font-bold tracking-widest uppercase rounded-full">PHP</span>
            <span
              class="px-3 py-1 bg-surface-variant text-on-surface-variant text-[10px] font-label font-bold tracking-widest uppercase rounded-full">Arquitech MVC</span>
            <span
              class="px-3 py-1 bg-surface-variant text-on-surface-variant text-[10px] font-label font-bold tracking-widest uppercase rounded-full">Datatables</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Call to Action Section -->
    <section
      class="mt-12 bg-surface-container-low rounded-3xl p-12 text-center relative overflow-hidden">
      <div
        class="absolute -top-24 -right-24 w-64 h-64 bg-primary/10 blur-[100px] rounded-full"></div>
      <div class="relative z-10">
        <h2
          class="font-headline text-3xl md:text-4xl font-bold text-on-surface mb-6">
          Have a project in mind?
        </h2>
        <p class="text-on-surface-variant max-w-xl mx-auto mb-10 text-lg">
          I’m open to collaborating on scalable backend development and modern
          web solutions. Let’s discuss how I can bring value to your team.
        </p>
        <div class="flex flex-col md:flex-row justify-center gap-4">
          <button
            class="bg-gradient-to-r from-primary to-primary-container text-on-primary-container px-8 py-4 rounded-xl font-bold text-lg hover:scale-105 active:scale-95 transition-all shadow-[0_10px_30px_rgba(163,166,255,0.3)]">
            Contact me
          </button>
        </div>
      </div>
    </section>
  </main>

  <?php require_once './partials/footer.php'; ?>
  <script src="./assets/scripts/menu.js"></script>
</body>

</html>
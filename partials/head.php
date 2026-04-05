<!doctype html>

<html class="dark" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Gerardo Amel | Fullstack Web Developer</title>
    <meta
      content="Gerardo Amel's portfolio showcasing fullstack web development projects, skills, and experience."
      name="description"
    />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          container: {
            center: true,
            padding: {
              DEFAULT: "1rem",
              sm: "2rem",
              lg: "4rem",
              xl: "5rem",
              "2xl": "6rem",
            },
          },
          extend: {
            colors: {
              "on-surface-variant": "#a3aac4",
              primary: "#a3a6ff",
              secondary: "#53ddfc",
              surface: "#060e20",
              "on-surface": "#dee5ff",
              "surface-variant": "#192540",
              "surface-container": "#0f1930",
              "surface-container-low": "#091328",
              "outline-variant": "#40485d",
              background: "#060e20",
              "primary-container": "#9396ff",
            },
            fontFamily: {
              headline: ["Manrope"],
              body: ["Inter"],
            },
          },
        },
      };
    </script>
    <link
      href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;700&amp;display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
      rel="stylesheet"
    />
    <style>
      .hero-grid {
        background-image: radial-gradient(
          circle at 2px 2px,
          rgba(163, 166, 255, 0.05) 1px,
          transparent 0
        );
        background-size: 40px 40px;
      }
      /* Smooth transitions for mobile drawer */
      #drawer {
        transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      }
      /* Prevent scrolling when drawer is open */
      body.drawer-open {
        overflow: hidden;
      }
    </style>
  </head>
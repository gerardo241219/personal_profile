const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const drawer = document.querySelector("#drawer");
const overlay = document.querySelector("#overlay");
const body = document.body;

const toggleDrawer = (isOpen) => {
  if (isOpen) {
    drawer.classList.remove("translate-x-full");
    overlay.classList.remove("opacity-0", "pointer-events-none");
    body.classList.add("drawer-open");
  } else {
    drawer.classList.add("translate-x-full");
    overlay.classList.add("opacity-0", "pointer-events-none");
    body.classList.remove("drawer-open");
  }
};

menuBtn.onclick = () => toggleDrawer(true);
closeBtn.onclick = () => toggleDrawer(false);
overlay.onclick = () => toggleDrawer(false);

// Close drawer when a link is clicked
document.querySelectorAll(".nav-link").forEach((link) => {
  link.onclick = () => toggleDrawer(false);
});

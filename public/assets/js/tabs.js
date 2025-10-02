const tabs = document.querySelectorAll("nav.tabs a");
const panels = document.querySelectorAll(".panel");

tabs.forEach(tab => {
  tab.addEventListener("click", e => {
    e.preventDefault();

    // limpiar
    tabs.forEach(t => t.classList.remove("active"));
    panels.forEach(p => p.classList.remove("active"));

    // activar tab clicado
    tab.classList.add("active");

    // buscar panel con id = data-tab
    const targetId = tab.dataset.tab;
    const panel = document.getElementById(targetId);
    if (panel) {
      panel.classList.add("active");
    }
  });
});
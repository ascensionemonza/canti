const MIN_SIZE = 12;
const MAX_SIZE = 28;
const DEFAULT_SIZE = 16;

// Applica la dimensione salvata all'avvio
(function() {
  const saved = localStorage.getItem("fontSize");
  const size = saved ? parseInt(saved) : DEFAULT_SIZE;
  document.documentElement.style.fontSize = size + "px";
})();

function applyFont(size) {
  if (size < MIN_SIZE) size = MIN_SIZE;
  if (size > MAX_SIZE) size = MAX_SIZE;

  localStorage.setItem("fontSize", size + "px");
  document.documentElement.style.fontSize = size + "px";
}

function decreaseFont() {
  const current = parseInt(getComputedStyle(document.documentElement).fontSize);
  applyFont(current - 1);
}

function defaultFont() {
  applyFont(DEFAULT_SIZE);
}

function increaseFont() {
  const current = parseInt(getComputedStyle(document.documentElement).fontSize);
  applyFont(current + 1);
}


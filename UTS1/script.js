document.addEventListener("DOMContentLoaded", () => {
  const checkboxes = document.querySelectorAll(".flower-check");
  checkboxes.forEach(cb => {
    cb.addEventListener("change", () => {
      const checked = document.querySelectorAll(".flower-check:checked");
      if (checked.length > 4) {
        cb.checked = false;
        alert("Maksimal 4 bunga yang bisa dipilih.");
      }
    });
  });
});
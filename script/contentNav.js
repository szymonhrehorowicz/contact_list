const backBtn = document.getElementById("backBtn");
const addBtn = document.getElementById("addBtn");

if (backBtn) {
  backBtn.addEventListener("click", () => {
    window.history.back();
  });
}

if (addBtn) {
  addBtn.addEventListener("click", () => {
    window.location.href = "add_user.php";
  });
}

function initThemeSelector() {
  const ThemeSelect = document.getElementById("ThemeSelect");
  const ThemeStyleSheet = document.getElementById("ThemeStyleSheet");
  const currentTheme = localStorage.getItem("theme") || "Dark";

  function activateTheme(themeName) {
    ThemeStyleSheet.setAttribute("href", `../Themes/${themeName}.css`)
  }
  ThemeSelect.addEventListener("change", () => {
    activateTheme(ThemeSelect.value);
    localStorage.setItem("theme", ThemeSelect.value);
  });
  ThemeSelect.value = currentTheme;
  activateTheme(currentTheme);
}
initThemeSelector();
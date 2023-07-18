// hide

const circlePanel = document.querySelector("#circle-panel");
const farenPanel = document.querySelector("#faren-panel");
const trianglePanel = document.querySelector("#triangle-panel");
const rectanglePanel = document.querySelector("#rectangle-panel");
const panels = document.querySelectorAll(".panel");

function showHide() {
  let formula = document.getElementById("formula");

  panels.forEach((panel) => {
    panel.style.display = "none";
  });

  switch (formula.value) {
    case "circle":
      circlePanel.style.display = "block";
      break;
    case "fahrenheit":
      farenPanel.style.display = "block";
      break;
    case "triangle":
      trianglePanel.style.display = "block";
      break;
    case "rectangle":
      rectanglePanel.style.display = "block";
      break;
  }
}

// clearing inputs
function resetAnswer() {
  document.getElementById("answer").remove();
}

// darkmode switcher
/*
let isLight = true;
const html = document.documentElement;
const switchTheme = document.getElementById("theme_switcher");
const os_default =
  '<img style="width: 30px; min-width: 30px; " src="./img/icons/moon.png" >';
const sun =
  '<img style="width: 30px; min-width: 30px; " src="./img/icons/moon.png" >';
const moon =
  '<img style="width: 30px; min-width: 30px; " src="./img/icons/sun.png" >';
document.addEventListener("DOMContentLoaded", () => {
  html.setAttribute("data-theme", "auto");
  switchTheme.setAttribute("data-tooltip", "dark");
  switchTheme.focus();
  removeTooltip(3000);
});
switchTheme.addEventListener("click", (e) => {
  e.preventDefault();
  isLight = !isLight;
  html.setAttribute("data-theme", isLight ? "light" : "dark");
  switchTheme.innerHTML = isLight ? sun : moon;
  switchTheme.setAttribute("data-tooltip", ` ${isLight ? "dark" : "light"}`);
  removeTooltip();
});
const removeTooltip = (timeInt = 1750) => {
  setTimeout(() => {
    switchTheme.blur();
  }, timeInt);
};

*/

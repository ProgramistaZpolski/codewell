// @license magnet:?xt=urn:btih:d3d9a9a6595521f9666a5e94cc830dab83b65699&dn=expat.txt Expat
// Dark Mode pzplUI Plugin
"use strict";

document.onkeyup = function (e) {
	if (e.shiftKey && e.key === "D") {
		toggleDarkMode();
	};
};

if (localStorage.getItem("pzplUI_mode") === "dark") {
	document.body.classList.add("dark-mode");
};

function toggleDarkMode() {
	document.body.classList.toggle("dark-mode");
	if (document.body.classList.contains("dark-mode")) {
		//#region customcode
		if (!document.querySelector("#onboarding") && !document.querySelector("article")) {
			document.querySelector(`img[src="./img/hero-light.svg"]`).src = "./img/hero.svg";
			document.querySelector(`[itemprop="description"]`).style.color = "#AAA";
			document.querySelector(".highlight_plan").style.color = "inherit";
			document.querySelectorAll(`[itemprop="review"]`).forEach(el => {
				el.style.backgroundColor = "#434450";
			});
		};
		document.querySelector("style#__colors").innerHTML = `@media (max-width: 768px) {
			.navbar-left ul::after {
				content: url("./img/menu-light.svg");
			}
		}
		
		#onboarding {
			background-color: #41424E;
		}`;
		if (document.querySelector("#onboarding")) {
			document.querySelector(`[src="./img/light-logo.svg"]`).src = "./img/remix.svg";
			document.querySelector("#onboarding > p:first-of-type").style.color = "#C6C8CD";
		};
		document.querySelector("nav img").src = "./img/remix.svg";
		//#endregion
		localStorage.setItem("pzplUI_mode", "dark");
	} else {
		//#region customcode
		if (!document.querySelector("#onboarding") && !document.querySelector("article")) {
			document.querySelector(`img[src="./img/hero.svg"]`).src = "./img/hero-light.svg";
			document.querySelector(`[itemprop="description"]`).style.color = "#595959";
			document.querySelector(".highlight_plan").style.color = "white";
			document.querySelectorAll(`[itemprop="review"]`).forEach(el => {
				el.style.backgroundColor = "#F5F6F8";
			});
		};
		const lightStyle = `@media (max-width: 768px) {
			.navbar-left ul::after {
				content: url("./img/menu.svg");
			}
		}
		
		#onboarding {
			background-color: #F5F6F8;
		}`;
		if (document.querySelector("style#__colors")) {
			document.querySelector("style#__colors").innerHTML = lightStyle;
		} else {
			let el = document.createElement("style");
			el.innerHTML = lightStyle;
			document.head.appendChild(el);
		};
		if (document.querySelector("#onboarding")) {
			document.querySelector(`[src="./img/remix.svg"]`).src = "./img/light-logo.svg";
			document.querySelector("#onboarding > p:first-of-type").style.color = "#595959";
		};
		document.querySelector("nav img").src = "./img/light-logo.svg";
		if (document.querySelector("article")) {
			document.querySelectorAll("article").forEach(el => el.style.backgroundColor = "#F5F6F8");
			document.querySelectorAll("article p").forEach(el => el.style.color = "rgb(77, 79, 83)");
		};
		//#endregion
		localStorage.setItem("pzplUI_mode", "light");
	};
};

// @license-end
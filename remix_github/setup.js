"use strict";

function $(selector) {
	return document.querySelector(selector);
};

function $$(selector, callback) {
	return document.querySelectorAll(selector).forEach(el => callback(el));
};

const questions = [
	{
		title: "Set up your Remix Environment",
		description: "This will take less than a minute, we use this information to customize Remix for you;"
	},
	{
		title: "Link your figma account",
		description: "We use your account to display your projects in the plugin’s main dashboard."
	},
	{
		title: "Confirm your email adress",
		description: "Enter your email address below, and click on Send Code to verify it."
	}
];

const state = {
	selectedPlan: null,
	index: -1
};

function putNewData() {
	$(".exchange").innerHTML = $(`#template__${state.index}`).innerHTML;
};

$(`[data-action="back"]`).addEventListener("click", () => {
	if (state.index > -1) {
		state.index--;
		putNewData();
	} else {
		location = "./index.php";
	};
});
$(`[data-action="next"]`).addEventListener("click", () => {
	if (state.index <= 1) {
		state.index++;
		putNewData();
	};
});

putNewData();

function linkAccount(obj) {
	obj.disabled = true;
	obj.querySelector("b").innerText = "Linking...";
	setTimeout(() => {
		obj.disabled = false;
		obj.querySelector("b").innerText = "Account linked!";
	}, Math.floor(Math.random() * (3072 - 512 + 1)) + 512)
};

$$(".btn.btn-lg.btn-white", el => {
	el.addEventListener("click", () => {
		el.setAttribute("data-active", true);
		if (el.dataset.plan === "personal") {
			$(`[data-plan="corporate"]`).removeAttribute("data-active");
		} else {
			$(`[data-plan="personal"]`).removeAttribute("data-active");
		};
		state.selectedPlan = el.dataset.plan;
	});
});
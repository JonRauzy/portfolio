
let element = document.querySelector("body");
if (localStorage.getItem("dark") === "true") {
	element.classList.toggle("dark-mode");
}

function darkMode() {
	let element = document.querySelector("body");
	element.classList.toggle("dark-mode");
	if (element.classList.contains("dark-mode")) {
		localStorage.setItem("dark", "true");
	} else {
		localStorage.removeItem("dark");
	}
}

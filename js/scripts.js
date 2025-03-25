/*!
 * Start Bootstrap - Simple Sidebar v6.0.6 (https://startbootstrap.com/template/simple-sidebar)
 * Copyright 2013-2023 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-simple-sidebar/blob/master/LICENSE)
 */
//
// Scripts
//

////////////////////////// script boostrap///////////////////////////

window.addEventListener("DOMContentLoaded", (event) => {
	// Toggle the side navigation
	const sidebarToggle = document.body.querySelector("#sidebarToggle");
	if (sidebarToggle) {
		// Uncomment Below to persist sidebar toggle between refreshes
		// if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
		//     document.body.classList.toggle('sb-sidenav-toggled');
		// }
		sidebarToggle.addEventListener("click", (event) => {
			event.preventDefault();
			document.body.classList.toggle("sb-sidenav-toggled");
			localStorage.setItem(
				"sb|sidebar-toggle",
				document.body.classList.contains("sb-sidenav-toggled")
			);
		});
	}
});

////////////////////////////////////////////////////////////////////////////

//////////////////////////////////// script requetes asynchrone login ///////////////////////

document.addEventListener("DOMContentLoaded", () => {
	const loginForm = document.getElementById("formulaire-login");
	if (loginForm) {
		loginForm.addEventListener("submit", function (e) {
			e.preventDefault(); // Empêcher la soumission classique
			const formData = new FormData(this);

			for (let pair of formData.entries()) {
				console.log(pair[0] + ": " + pair[1]);
			}

			fetch("../models/loginPostAjax.php", {
				method: "POST",
				body: formData,
			})
				.then((response) => response.json())
				.then((data) => {
					if (data.status === "success") {
						// Rediriger vers la page du compte
						window.location.href = "/views/profilUsers.php";
					} else {
						// Afficher un message d'erreur
						alert(data.message);
					}
				})
				.catch((error) => console.error("Erreur:", error));
		});
	}
});
///////////////////////////////////////////////////////////

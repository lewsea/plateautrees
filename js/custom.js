// Scroll Top

jQuery(function () {
	const btn = jQuery("#scroll-top-button");

	jQuery(window).on("scroll", function () {
		if (jQuery(window).scrollTop() > 500) {
			btn.addClass("show");
		} else {
			btn.removeClass("show");
		}
	});

	btn.on("click", function (e) {
		e.preventDefault();
		jQuery("html, body").animate({ scrollTop: 0 }, "500");
	});
});

// Accordion

const items = document.querySelectorAll(".accordion button");

function toggleAccordion() {
	const itemToggle = this.getAttribute("aria-expanded");

	for (i = 0; i < items.length; i++) {
		items[i].setAttribute("aria-expanded", "false");
	}

	if (itemToggle == "false") {
		this.setAttribute("aria-expanded", "true");
	}
}

items.forEach((item) => item.addEventListener("click", toggleAccordion));

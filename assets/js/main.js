/**
 * Mercora International - Modern Interactive Engine (Tailwind CSS Native)
 */

document.addEventListener("DOMContentLoaded", function () {
    // 1. Synchronized Hero Slideshow (Background + Content Slide + Tab Controllers)
    const bgSlides = document.querySelectorAll(".mc-hero-bg");
    const contentSlides = document.querySelectorAll(".mc-hero-content");
    const heroTabs = document.querySelectorAll(".mc-hero-tab");
    const counterEl = document.getElementById("mcHeroCounter");
    const heroSection = document.getElementById("mcHeroBgSlider")?.closest("section");

    if (bgSlides.length > 0) {
        let currentSlide = 0;
        let slideTimer = null;
        const totalSlides = bgSlides.length;

        const updateHeroSlide = (index) => {
            currentSlide = (index + totalSlides) % totalSlides;

            // 1. Cross-fade background slide images with smooth Ken Burns scale
            bgSlides.forEach((slide, i) => {
                const img = slide.querySelector("img");
                if (i === currentSlide) {
                    slide.classList.remove("opacity-0", "pointer-events-none");
                    slide.classList.add("opacity-100");
                    if (img) img.classList.add("scale-105");
                } else {
                    slide.classList.remove("opacity-100");
                    slide.classList.add("opacity-0", "pointer-events-none");
                    if (img) img.classList.remove("scale-105");
                }
            });

            // 2. Cross-fade dynamic text and feature content cleanly without ghosting
            contentSlides.forEach((content, i) => {
                if (i === currentSlide) {
                    content.classList.remove("opacity-0", "translate-y-2", "pointer-events-none", "invisible");
                    content.classList.add("opacity-100", "translate-y-0", "pointer-events-auto", "visible");
                } else {
                    content.classList.remove("opacity-100", "translate-y-0", "pointer-events-auto", "visible");
                    content.classList.add("opacity-0", "translate-y-2", "pointer-events-none", "invisible");
                }
            });

            // 3. Update counter text
            if (counterEl) {
                counterEl.textContent = `0${currentSlide + 1} / 0${totalSlides}`;
            }

            // 4. Update interactive controller tabs
            heroTabs.forEach((tab, i) => {
                if (i === currentSlide) {
                    tab.className = "mc-hero-tab px-2.5 sm:px-3 py-1 rounded-full text-xs font-bold bg-amber-500 text-slate-950 transition-all duration-300 shadow-xs";
                } else {
                    tab.className = "mc-hero-tab px-2.5 sm:px-3 py-1 rounded-full text-xs font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-100 transition-all duration-300";
                }
            });
        };

        const nextSlide = () => updateHeroSlide(currentSlide + 1);
        const prevSlide = () => updateHeroSlide(currentSlide - 1);

        const startTimer = () => {
            stopTimer();
            slideTimer = setInterval(nextSlide, 7000);
        };

        const stopTimer = () => {
            if (slideTimer) clearInterval(slideTimer);
        };

        // Navigation buttons (side arrows and controller bar buttons)
        const prevBtns = document.querySelectorAll(".mc-hero-prev, #mcHeroPrev");
        const nextBtns = document.querySelectorAll(".mc-hero-next, #mcHeroNext");

        prevBtns.forEach((btn) => {
            btn.addEventListener("click", () => {
                prevSlide();
                startTimer();
            });
        });

        nextBtns.forEach((btn) => {
            btn.addEventListener("click", () => {
                nextSlide();
                startTimer();
            });
        });

        // Clickable interactive tabs
        heroTabs.forEach((tab) => {
            tab.addEventListener("click", () => {
                const targetIdx = parseInt(tab.getAttribute("data-slide"), 10);
                if (!isNaN(targetIdx)) {
                    updateHeroSlide(targetIdx);
                    startTimer();
                }
            });
        });

        // Pause on hover
        if (heroSection) {
            heroSection.addEventListener("mouseenter", stopTimer);
            heroSection.addEventListener("mouseleave", startTimer);
        }

        // Mobile touch swipe gesture support
        let touchStartX = 0;
        let touchEndX = 0;

        heroSection?.addEventListener("touchstart", (e) => {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        heroSection?.addEventListener("touchend", (e) => {
            touchEndX = e.changedTouches[0].screenX;
            const diffX = touchEndX - touchStartX;
            if (Math.abs(diffX) > 45) {
                if (diffX < 0) {
                    nextSlide();
                } else {
                    prevSlide();
                }
                startTimer();
            }
        }, { passive: true });

        startTimer();
    }

    // 2. Partner Modal Handler (Tailwind CSS)
    const modalBackdrop = document.getElementById("mcPartnerModal");
    const modalClose = document.getElementById("mcPartnerModalClose");
    const modalDismiss = document.getElementById("mcPartnerModalDismiss");
    const modalLogo = document.getElementById("mcModalLogo");
    const modalTag = document.getElementById("mcModalTag");
    const modalTitle = document.getElementById("mcModalTitle");
    const modalRole = document.getElementById("mcModalRole");
    const modalText = document.getElementById("mcModalText");
    const modalCTA = document.getElementById("mcModalCTA");
    const modalCTAText = document.getElementById("mcModalCTAText");

    const openPartnerModal = (partnerId) => {
        if (!window.MERCORA_PARTNERS || !window.MERCORA_PARTNERS[partnerId]) return;
        const p = window.MERCORA_PARTNERS[partnerId];

        if (modalLogo) {
            modalLogo.src = p.logo;
            modalLogo.alt = p.name;
        }
        if (modalTag) modalTag.textContent = p.tag || "Strategic Partner";
        if (modalTitle) modalTitle.textContent = p.name;
        if (modalRole) modalRole.textContent = p.role;
        if (modalText) modalText.textContent = p.full_text || p.summary;
        if (modalCTA) {
            modalCTA.href = p.link || "/contact";
            if (modalCTAText) modalCTAText.textContent = p.cta || "Inquire With Mercora";
        }

        if (modalBackdrop) {
            modalBackdrop.classList.remove("hidden");
            modalBackdrop.classList.add("flex");
            modalBackdrop.setAttribute("aria-hidden", "false");
            document.body.style.overflow = "hidden";
        }
    };

    const closePartnerModal = () => {
        if (modalBackdrop) {
            modalBackdrop.classList.add("hidden");
            modalBackdrop.classList.remove("flex");
            modalBackdrop.setAttribute("aria-hidden", "true");
            document.body.style.overflow = "";
        }
    };

    document.querySelectorAll("[data-partner-id]").forEach((trigger) => {
        trigger.addEventListener("click", (e) => {
            e.preventDefault();
            const id = trigger.getAttribute("data-partner-id");
            openPartnerModal(id);
        });
    });

    if (modalClose) modalClose.addEventListener("click", closePartnerModal);
    if (modalDismiss) modalDismiss.addEventListener("click", closePartnerModal);
    if (modalBackdrop) {
        modalBackdrop.addEventListener("click", (e) => {
            if (e.target === modalBackdrop) {
                closePartnerModal();
            }
        });
    }

    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape" && modalBackdrop && !modalBackdrop.classList.contains("hidden")) {
            closePartnerModal();
        }
    });

    // 3. Toast Notification Utility (Tailwind CSS)
    const showToast = (message, type = "success") => {
        let container = document.getElementById("mcToastContainer");
        if (!container) {
            container = document.createElement("div");
            container.id = "mcToastContainer";
            container.className = "fixed bottom-5 right-5 z-[100] flex flex-col gap-2 pointer-events-none max-w-sm w-full px-4";
            document.body.appendChild(container);
        }

        const toast = document.createElement("div");
        const isSuccess = type === "success";
        toast.className = `pointer-events-auto flex items-center gap-3 p-4 rounded-xl shadow-xl border text-sm font-medium transition-all duration-300 transform translate-y-2 opacity-0 ${isSuccess
                ? "bg-slate-900 border-emerald-500/50 text-white"
                : "bg-slate-900 border-rose-500/50 text-white"
            }`;
        const icon = isSuccess ? "ri-checkbox-circle-fill text-emerald-400 text-lg" : "ri-error-warning-fill text-rose-400 text-lg";
        toast.innerHTML = `<i class="${icon}"></i> <span class="flex-1 text-xs sm:text-sm leading-relaxed">${message}</span>`;
        container.appendChild(toast);

        requestAnimationFrame(() => {
            toast.classList.remove("translate-y-2", "opacity-0");
        });

        setTimeout(() => {
            toast.classList.add("translate-y-2", "opacity-0");
            setTimeout(() => toast.remove(), 300);
        }, 5000);
    };

    // 4. Generic AJAX Form Handling
    document.querySelectorAll(".mc-ajax-form").forEach((form) => {
        form.addEventListener("submit", async function (e) {
            e.preventDefault();
            const submitBtn = form.querySelector("button[type='submit']");
            const originalBtnHtml = submitBtn ? submitBtn.innerHTML : "Submit";

            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="ri-loader-4-line ri-spin"></i> Submitting...';
            }

            try {
                const formData = new FormData(form);
                const payload = {};
                formData.forEach((value, key) => (payload[key] = value));

                const response = await fetch("/api/enquiry", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json"
                    },
                    body: JSON.stringify(payload)
                });

                const data = await response.json();
                if (data.success) {
                    showToast(data.message, "success");
                    form.reset();
                    if (submitBtn) {
                        submitBtn.innerHTML = '<i class="ri-check-line"></i> Received';
                        setTimeout(() => {
                            submitBtn.disabled = false;
                            submitBtn.innerHTML = originalBtnHtml;
                        }, 3000);
                    }
                } else {
                    showToast(data.message || "Failed to submit. Please check required fields.", "error");
                    if (submitBtn) {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalBtnHtml;
                    }
                }
            } catch (err) {
                showToast("Network error or server unavailable. Please try again or email info@mercorainternational.com directly.", "error");
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalBtnHtml;
                }
            }
        });
    });

    // 5. Lightbox Initialization (for Gallery & Certificates)
    if (typeof GLightbox !== "undefined") {
        GLightbox({
            selector: ".mc-lightbox",
            touchNavigation: true,
            loop: true
        });
    }

    // 6. Move to Top Button Functionality
    const moveToTopBtn = document.getElementById("mcMoveToTop");
    if (moveToTopBtn) {
        const toggleMoveToTop = () => {
            if (window.scrollY > 280) {
                moveToTopBtn.classList.remove("opacity-0", "pointer-events-none", "translate-y-6");
                moveToTopBtn.classList.add("opacity-100", "pointer-events-auto", "translate-y-0");
            } else {
                moveToTopBtn.classList.remove("opacity-100", "pointer-events-auto", "translate-y-0");
                moveToTopBtn.classList.add("opacity-0", "pointer-events-none", "translate-y-6");
            }
        };

        window.addEventListener("scroll", toggleMoveToTop, { passive: true });
        toggleMoveToTop();

        moveToTopBtn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    }
});

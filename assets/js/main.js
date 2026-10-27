/**
 * Mercora International - Modern Interactive Engine (Tailwind CSS Native)
 */

document.addEventListener("DOMContentLoaded", function () {
    // 1. Hero Visual Slideshow (Homepage)
    const heroSlides = [
        {
            img: "assets/images/mercora/current/Heroimg1.png",
            title: "AgriTech & Smart Crop Doctor",
            desc: "AI, drone surveys & multispectral analytics transforming agriculture across India."
        },
        {
            img: "assets/images/mercora/current/s4.jpg",
            title: "Enterprise Technology & PMO",
            desc: "Delivering digital transformation, software QA & cloud governance."
        },
        {
            img: "assets/images/mercora/current/carousel-1.jpg",
            title: "Global Trade & Native Araku Coffee",
            desc: "Authorised franchise development and sustainable tribal empowerment."
        }
    ];

    const heroImgEl = document.getElementById("mcHeroSlideImg");
    const heroTitleEl = document.getElementById("mcHeroSlideTitle");
    const heroDescEl = document.getElementById("mcHeroSlideDesc");
    const heroDots = document.querySelectorAll(".mc-hero-dot");

    if (heroImgEl && heroSlides.length) {
        let currentSlide = 0;
        let slideInterval = null;

        const showSlide = (index) => {
            currentSlide = (index + heroSlides.length) % heroSlides.length;
            const slide = heroSlides[currentSlide];

            heroImgEl.style.opacity = "0.4";
            setTimeout(() => {
                heroImgEl.src = slide.img;
                heroImgEl.alt = slide.title;
                if (heroTitleEl) heroTitleEl.textContent = slide.title;
                if (heroDescEl) heroDescEl.textContent = slide.desc;
                heroImgEl.style.opacity = "1";
            }, 180);

            heroDots.forEach((dot, i) => {
                if (i === currentSlide) {
                    dot.className = "mc-hero-dot w-6 h-1.5 rounded-full bg-slate-900 transition";
                } else {
                    dot.className = "mc-hero-dot w-2 h-1.5 rounded-full bg-slate-300 hover:bg-slate-500 transition";
                }
            });
        };

        heroDots.forEach((dot, i) => {
            dot.addEventListener("click", () => {
                showSlide(i);
                resetInterval();
            });
        });

        const startInterval = () => {
            slideInterval = setInterval(() => {
                showSlide(currentSlide + 1);
            }, 5500);
        };

        const resetInterval = () => {
            if (slideInterval) clearInterval(slideInterval);
            startInterval();
        };

        startInterval();
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
        toast.className = `pointer-events-auto flex items-center gap-3 p-4 rounded-xl shadow-xl border text-sm font-medium transition-all duration-300 transform translate-y-2 opacity-0 ${
            isSuccess 
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
});

/**
 * Mercora International - Modern Interactive Engine (Tailwind CSS Native)
 */

document.addEventListener("DOMContentLoaded", function () {
    // 1. Synchronized Hero Slideshow (Background + Bottom-Right Flagship Card)
    const flagshipInitiatives = [
        {
            badge: "Flagship AgriTech",
            badgeClass: "bg-amber-500/20 text-amber-300 border-amber-500/30",
            title: "Smart Crop Doctor",
            desc: "India's next-generation precision agriculture platform using AI, drone technology, multispectral imaging and predictive analytics.",
            link: "/it-services#agritech",
            linkText: "Learn More",
            thumb: "/assets/images/mercora/current/Heroimg1.png"
        },
        {
            badge: "GI-Tagged Specialty",
            badgeClass: "bg-emerald-500/20 text-emerald-300 border-emerald-500/30",
            title: "Native Araku Coffee",
            desc: "Empowering tribal farmers and promoting GI-tagged Araku coffee across India and the global market.",
            link: "/coffee-products",
            linkText: "Explore Coffee",
            thumb: "/assets/images/coffee/nac-hero.jpeg"
        },
        {
            badge: "Launching Soon",
            badgeClass: "bg-sky-500/20 text-sky-300 border-sky-500/30",
            title: "WHITE WORLD",
            desc: "A curated e-commerce platform exclusively dedicated to white — premium apparel, accessories and lifestyle products.",
            link: "/industries#textile",
            linkText: "Coming Soon",
            thumb: "/assets/images/industries/textile.jpg"
        }
    ];

    const bgSlides = document.querySelectorAll(".mc-hero-bg");
    const badgeEl = document.getElementById("mcSlideBadge");
    const titleEl = document.getElementById("mcSlideTitle");
    const descEl = document.getElementById("mcSlideDesc");
    const linkEl = document.getElementById("mcSlideLink");
    const linkTextEl = document.getElementById("mcSlideLinkText");
    const thumbEl = document.getElementById("mcSlideThumb");
    const counterEl = document.getElementById("mcHeroCounter");
    const prevBtn = document.getElementById("mcHeroPrev");
    const nextBtn = document.getElementById("mcHeroNext");
    const heroDots = document.querySelectorAll(".mc-hero-dot");

    if (bgSlides.length > 0) {
        let currentSlide = 0;
        let slideTimer = null;
        const totalSlides = bgSlides.length;

        const updateHeroSlide = (index) => {
            currentSlide = (index + totalSlides) % totalSlides;
            const data = flagshipInitiatives[currentSlide] || flagshipInitiatives[0];

            // 1. Synchronize Background Slide (cross-fade + Ken Burns)
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

            // 2. Synchronize Flagship Card Content with soft fade transition
            const elementsToFade = [titleEl, descEl, thumbEl, badgeEl].filter(Boolean);
            elementsToFade.forEach((el) => (el.style.opacity = "0.2"));

            setTimeout(() => {
                if (badgeEl) {
                    badgeEl.textContent = data.badge;
                    badgeEl.className = `inline-flex items-center text-[10.5px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-full border ${data.badgeClass || 'bg-amber-500/20 text-amber-300 border-amber-500/30'}`;
                }
                if (titleEl) titleEl.textContent = data.title;
                if (descEl) descEl.textContent = data.desc;
                if (linkEl) linkEl.href = data.link;
                if (linkTextEl) linkTextEl.textContent = data.linkText;
                if (thumbEl) {
                    thumbEl.src = data.thumb;
                    thumbEl.alt = data.title;
                }
                if (counterEl) {
                    counterEl.textContent = `0${currentSlide + 1} / 0${totalSlides}`;
                }
                elementsToFade.forEach((el) => (el.style.opacity = "1"));
            }, 180);

            // 3. Update Indicator Dots
            heroDots.forEach((dot, i) => {
                if (i === currentSlide) {
                    dot.className = "mc-hero-dot w-6 h-1.5 rounded-full bg-amber-500 transition-all duration-300";
                } else {
                    dot.className = "mc-hero-dot w-2 h-1.5 rounded-full bg-slate-300 hover:bg-slate-400 transition-all duration-300";
                }
            });
        };

        const nextSlide = () => updateHeroSlide(currentSlide + 1);
        const prevSlide = () => updateHeroSlide(currentSlide - 1);

        const startTimer = () => {
            stopTimer();
            slideTimer = setInterval(nextSlide, 6000);
        };

        const stopTimer = () => {
            if (slideTimer) clearInterval(slideTimer);
        };

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

        heroDots.forEach((dot) => {
            dot.addEventListener("click", () => {
                const targetIdx = parseInt(dot.getAttribute("data-slide"), 10);
                if (!isNaN(targetIdx)) {
                    updateHeroSlide(targetIdx);
                    startTimer();
                }
            });
        });

        const cardWidget = badgeEl?.closest(".group");
        if (cardWidget) {
            cardWidget.addEventListener("mouseenter", stopTimer);
            cardWidget.addEventListener("mouseleave", startTimer);
        }

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
});

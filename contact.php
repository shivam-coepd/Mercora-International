<?php
$pageTitle = 'Contact Us | Hyderabad Head Office & Global Inquiries';
$pageDesc = 'Get in touch with Mercora International headquartered in Kondapur, Hyderabad. Reach our executive team for consulting, IT services, coffee distribution, or partnerships.';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section class="bg-slate-900 border-b border-slate-800 text-white py-16 sm:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl space-y-5">
            <div>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-md text-xs font-semibold bg-slate-800 text-amber-400 border border-slate-700">
                    <i class="ri-mail-send-line text-amber-400"></i> Direct Communications
                </span>
            </div>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-white leading-tight">
                Get in Touch With Mercora International
            </h1>
            <p class="text-base sm:text-lg text-slate-300 leading-relaxed">
                Connect directly with our managing partners and vertical leads for consulting engagements, technology mandates, franchise opportunities, or institutional alliances.
            </p>
        </div>
    </div>
</section>

<!-- Contact Info Cards & Form Split -->
<section class="py-16 sm:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            <!-- Left: Contact Form -->
            <div class="lg:col-span-7 bg-white border border-slate-200 rounded-2xl p-6 sm:p-8 shadow-sm">
                <div class="mb-6">
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-600">Direct Inquiry</span>
                    <h3 class="text-2xl font-bold text-slate-900 mt-1">Send Us a Message</h3>
                    <p class="text-sm text-slate-600 mt-1">
                        Fill out the form below. We route inquiries directly to the concerned vertical lead for a prompt, authoritative response.
                    </p>
                </div>

                <form class="mc-ajax-form space-y-4">
                    <input type="hidden" name="csrf_token" value="<?= e($_SESSION['csrf_token']) ?>" />
                    <input type="hidden" name="type" value="general_contact" />

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Full Name *</label>
                            <input type="text" name="name" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5" placeholder="e.g. Vikram Reddy" required />
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Company / Organization</label>
                            <input type="text" name="company" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5" placeholder="e.g. Apex Global Pvt Ltd" />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Official Email Address *</label>
                            <input type="email" name="email" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5" placeholder="vikram@apex.com" required />
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Phone / WhatsApp *</label>
                            <input type="tel" name="phone" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5" placeholder="+91 98765 43210" required />
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Vertical / Area of Interest *</label>
                        <select name="vertical_interest" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5 bg-white" required>
                            <option value="">Select Topic</option>
                            <option value="AgriTech & Smart Crop Doctor">AgriTech & Smart Crop Doctor</option>
                            <option value="IT Services & Digital Transformation">IT Services & Digital Transformation</option>
                            <option value="Native Araku Coffee & Franchise">Native Araku Coffee Franchise & Supply</option>
                            <option value="Global Trade & Import-Export">Global Trade & Import-Export (IEC ACEFM7191A)</option>
                            <option value="WHITE WORLD Apparel Brand">WHITE WORLD Apparel Brand</option>
                            <option value="Strategic Alliances & MOUs">Strategic Alliances & MOUs</option>
                            <option value="General Corporate Inquiry">General Corporate Inquiry</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Your Message / Specific Requirements *</label>
                        <textarea name="message" rows="5" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5" placeholder="Describe your query, project timeline, or questions for our team..." required></textarea>
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-white bg-slate-900 rounded-lg hover:bg-slate-800 transition shadow-sm">
                            Send Inquiry Now <i class="ri-send-plane-fill ml-2"></i>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Right: Contact Details & Registration Credentials -->
            <div class="lg:col-span-5 space-y-6">
                <!-- Location & Contact Info -->
                <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 sm:p-8">
                    <h4 class="text-base font-bold text-slate-900 mb-3 flex items-center gap-2">
                        <i class="ri-building-2-line text-amber-600"></i> Head Office Location
                    </h4>
                    <p class="text-xs sm:text-sm text-slate-700 leading-relaxed mb-6">
                        <strong class="font-bold text-slate-900">Mercora International</strong><br />
                        Flat No.212, 2nd Floor, Prime Legend,<br />
                        Botanical Garden Road, Kondapur,<br />
                        Hyderabad – 500084, Telangana, India
                    </p>

                    <div class="space-y-3 pt-6 border-t border-slate-200">
                        <a href="tel:+917680077222" class="flex items-center gap-3 text-slate-800 hover:text-amber-600 font-medium text-sm transition">
                            <div class="w-9 h-9 rounded-lg bg-amber-100 text-amber-700 flex items-center justify-center text-lg flex-shrink-0">
                                <i class="ri-phone-line"></i>
                            </div>
                            <span>+91 76800 77222</span>
                        </a>

                        <a href="mailto:info@mercorainternational.com" class="flex items-center gap-3 text-slate-800 hover:text-amber-600 font-medium text-sm transition">
                            <div class="w-9 h-9 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center text-lg flex-shrink-0">
                                <i class="ri-mail-line"></i>
                            </div>
                            <span class="break-all">info@mercorainternational.com</span>
                        </a>
                    </div>
                </div>

                <!-- Registration Credentials Box -->
                <div class="bg-slate-900 text-white rounded-2xl p-6 sm:p-8 border border-slate-800">
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-400">Statutory Disclosures</span>
                    <h4 class="text-lg font-bold text-white mt-1 mb-4">Corporate Registrations</h4>
                    <ul class="space-y-2.5 text-xs sm:text-sm">
                        <li class="flex justify-between border-b border-slate-800 pb-2">
                            <span class="text-slate-400">Firm Reg:</span>
                            <span class="font-semibold text-slate-100"><?= e(FIRM_REG_NO) ?></span>
                        </li>
                        <li class="flex justify-between border-b border-slate-800 pb-2">
                            <span class="text-slate-400">Incorporation:</span>
                            <span class="font-semibold text-slate-100"><?= e(FIRM_INC_DATE) ?></span>
                        </li>
                        <li class="flex justify-between border-b border-slate-800 pb-2">
                            <span class="text-slate-400">DPIIT Recognition:</span>
                            <span class="font-semibold text-slate-100">DIPP258473</span>
                        </li>
                        <li class="flex justify-between border-b border-slate-800 pb-2">
                            <span class="text-slate-400">MSME Udyam:</span>
                            <span class="font-semibold text-slate-100">UDYAM-TS-02-0265208</span>
                        </li>
                        <li class="flex justify-between border-b border-slate-800 pb-2">
                            <span class="text-slate-400">DGFT IEC:</span>
                            <span class="font-semibold text-slate-100">ACEFM7191A</span>
                        </li>
                        <li class="flex justify-between">
                            <span class="text-slate-400">GSTIN:</span>
                            <span class="font-semibold text-slate-100">36ACEFM7191A1ZB</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

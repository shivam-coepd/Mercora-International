<?php
$pageTitle = 'Native Araku Coffee | Premium GI-Tagged Specialty Coffee';
$pageDesc = 'Authorised Franchise Development Partner for Native Araku Coffee (NAC). 100% shade-grown Arabica & Robusta grown by 1,00,000 tribal farming families in Araku Valley.';
require_once __DIR__ . '/includes/header.php';

$PREMIUM_PRODUCTS = [
    [
        'name' => 'South Indian Filter Coffee Powder',
        'roast' => 'Classic Medium Roast',
        'notes' => 'Rich chocolate & caramel notes',
        'brew' => 'Traditional brass filter brewing',
        'desc' => 'Classic medium roast with rich chocolate and caramel undertones; formulated specifically for an authentic South Indian filter coffee experience.'
    ],
    [
        'name' => 'Moka Pot / Black Coffee Powder',
        'roast' => 'Bold Dark Roast',
        'notes' => 'Full-bodied, intense roasted cocoa',
        'brew' => 'Moka pot, stovetop, French press',
        'desc' => 'A bold, full-bodied dark roast engineered for moka pot and stovetop brewing, delivering an aromatic, rich crema and deep finish.'
    ],
    [
        'name' => 'Instant Coffee Powder',
        'roast' => 'Aromatic Micro-Ground',
        'notes' => 'Smooth, balanced, zero bitterness',
        'brew' => 'Instant dissolution in hot water/milk',
        'desc' => 'Premium convenience coffee made with 100% pure shade-grown beans; smooth and aromatic, dissolving instantly without chemical additives.'
    ],
    [
        'name' => 'Green Coffee Beans (Raw)',
        'roast' => 'Unroasted Single-Origin',
        'notes' => 'Natural chlorogenic acids, raw herbal',
        'brew' => 'Home roasting & health infusions',
        'desc' => 'Raw, unroasted single-origin beans hand-picked by tribal farmers, ideal for artisanal roasters, specialty cafés, and antioxidant health brews.'
    ],
    [
        'name' => 'Roasted Coffee Beans (Whole)',
        'roast' => 'Artisanal Medium-Dark Roast',
        'notes' => 'Complex florals, dark chocolate, fruit',
        'brew' => 'Espresso, pour-over, Aeropress, drip',
        'desc' => 'Premium whole-bean roast tailored for espresso machines, pour-overs, and batch brews, locking in peak freshness and natural oils.'
    ]
];

$SIGNATURE_PRODUCTS = [
    [
        'name' => 'Honey Gel Coffee',
        'type' => 'Natural Energy Infusion',
        'desc' => 'Organically cultivated wild forest honey blended with pure Araku coffee extract — a clean, natural energy infusion free from artificial preservatives.'
    ],
    [
        'name' => 'Chocolate Gel Coffee',
        'type' => 'Gourmet Dessert Blend',
        'desc' => 'Rich artisanal dark chocolate blended with single-origin Araku coffee; a unique, decadent flavour fusion straight from the valley.'
    ],
    [
        'name' => 'NAC Coffee Chocolates (Signature Box)',
        'type' => 'Premium Gift Box',
        'desc' => 'Handcrafted coffee chocolates infused with fresh Araku roasts, presented in an elegant gift-ready signature box ideal for corporate and festive gifting.'
    ]
];

$SUSTAINABLE_PRODUCTS = [
    [
        'name' => 'Coffee/Rice Husk Small Cups (Set with Stand)',
        'material' => 'Agricultural Waste Husk Composite',
        'desc' => 'Colourful, durable eco-cups crafted entirely from reclaimed agricultural coffee and rice waste husk; includes a sleek custom display stand.'
    ],
    [
        'name' => 'Coffee Husk Retro Cup (Large)',
        'material' => '100% Reclaimed Coffee Husk',
        'desc' => 'Branded retro-style tumbler featuring a secure travel lid; heat-resistant, dishwasher-safe, and 100% derived from upcycled husk material.'
    ],
    [
        'name' => 'Coffee Husk Everyday Mug',
        'material' => 'Sustainable Husk Composite',
        'desc' => 'Classic ergonomic mug embossed with Native Araku Coffee branding; an eco-conscious alternative for sustainable daily coffee rituals.'
    ]
];
?>

<!-- Hero Section -->
<section class="bg-amber-950 border-b border-amber-900 text-white py-16 sm:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-7 space-y-5">
                <div>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-md text-xs font-semibold bg-amber-900/80 text-amber-300 border border-amber-700/60">
                        <i class="ri-medal-fill text-amber-400"></i> GI-Tagged Single-Origin Specialty Coffee
                    </span>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-white leading-tight">
                    Native Araku Coffee — A Coffee That Changes Lives.
                </h1>
                <p class="text-base sm:text-lg text-amber-100/90 leading-relaxed">
                    Mercora International is the authorised <strong>Franchise Development Partner</strong> for Native Araku Coffee (NAC), a premium GI-tagged specialty coffee brand from Araku Valley, Andhra Pradesh. We promote café franchises, wholesale supply, corporate gifting, and 100 Women-Driven Coffee Shops with SERP, AP Government.
                </p>
                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a href="#enquiry-form" class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-slate-950 bg-amber-400 hover:bg-amber-300 rounded-lg transition shadow-sm">
                        Distributor & Franchise Enquiry <i class="ri-arrow-down-line ml-2"></i>
                    </a>
                    <a href="#catalogue" class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-white bg-amber-900/60 hover:bg-amber-900 border border-amber-700 rounded-lg transition">
                        Explore Product Catalogue
                    </a>
                </div>
            </div>
            <div class="lg:col-span-5">
                <div class="rounded-2xl overflow-hidden border border-amber-700/50 shadow-2xl bg-amber-900/40 p-2">
                    <img src="<?= url('assets/images/coffee/nac-hero.jpeg') ?>" alt="Native Araku Coffee Premium Pack" class="w-full h-80 sm:h-96 object-cover rounded-xl" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sourcing Heritage & Tribal Welfare Strip -->
<section class="py-16 sm:py-24 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-6 rounded-2xl overflow-hidden border border-slate-200 shadow-md">
                <img src="<?= url('assets/images/coffee/araku-valley.jpeg') ?>" alt="Araku Valley tribal coffee plantation" class="w-full h-80 sm:h-96 object-cover" />
            </div>
            <div class="lg:col-span-6 space-y-5">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-700">Araku Valley — Where Every Cup Begins</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900 leading-tight">
                    Cultivated with Dignity by 1,00,000 Tribal Families
                </h2>
                <p class="text-base text-slate-600 leading-relaxed">
                    Nestled at altitudes of <strong>800 to 5,000 feet MSL</strong> in the Eastern Ghats of Andhra Pradesh, Native Araku Coffee is 100% shade-grown and organically nurtured by 1,00,000 tribal farming families across 1.5 lakh acres.
                </p>
                <div class="grid grid-cols-2 gap-4 pt-2">
                    <div class="bg-slate-50 border border-slate-200 rounded-xl p-5">
                        <div class="text-2xl sm:text-3xl font-extrabold text-amber-800">14,000 MT</div>
                        <div class="text-xs sm:text-sm text-slate-500 mt-1">Annual Organic Production</div>
                    </div>
                    <div class="bg-slate-50 border border-slate-200 rounded-xl p-5">
                        <div class="text-2xl sm:text-3xl font-extrabold text-amber-800">100 Cafés</div>
                        <div class="text-xs sm:text-sm text-slate-500 mt-1">MOU with SERP, AP Government</div>
                    </div>
                </div>
                <div class="flex items-center gap-2.5 text-sm font-semibold text-slate-800 pt-2">
                    <i class="ri-heart-3-fill text-rose-600 text-lg"></i>
                    <span>A percentage of every sale directly funds tribal health and education welfare programmes.</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 1. Our Selective Collection -->
<section id="catalogue" class="py-16 sm:py-24 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-6 space-y-5">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-700">Peak Quality</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900 leading-tight">
                    Our Selective Collection
                </h2>
                <p class="text-base sm:text-lg text-slate-600 leading-relaxed">
                    The search for perfection — every single bean hand-selected for optimal density, aroma, and vibrant cupping scores.
                </p>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Cultivated under the shade of silver oak and jackfruit trees, our selective harvest ensures slow cherry maturation, imparting complex citrus, spicy, and dark caramel nuances that have earned Araku its prestigious Geographical Indication (GI) status.
                </p>
                <div class="pt-2">
                    <a href="#enquiry-form" class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-white bg-slate-900 rounded-lg hover:bg-slate-800 transition shadow-sm">
                        Inquire About Selective Blends <i class="ri-arrow-right-line ml-2"></i>
                    </a>
                </div>
            </div>
            <div class="lg:col-span-6">
                <div class="rounded-2xl overflow-hidden border border-slate-200 shadow-md">
                    <img src="<?= url('assets/images/coffee/selective-collection.jpeg') ?>" alt="Our Selective Collection Native Araku Coffee" class="w-full h-80 sm:h-96 object-cover" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. Our Premium Collection (Table & Products) -->
<section class="py-16 sm:py-24 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-12 sm:mb-16">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-700">Signature Formats</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900 mt-2">
                Our Premium Collection
            </h2>
            <p class="text-base sm:text-lg text-slate-600 mt-3">
                Available across three signature powders and two whole-bean formats — each roasted to perfection.
            </p>
        </div>

        <div class="mb-10 rounded-2xl overflow-hidden border border-slate-200 shadow-sm">
            <img src="<?= url('assets/images/coffee/premium-collection-banner.jpeg') ?>" alt="Premium Collection Banner" class="w-full max-h-80 sm:max-h-96 object-cover" />
        </div>

        <div class="overflow-x-auto rounded-xl border border-slate-200 shadow-sm">
            <table class="min-w-full divide-y divide-slate-200 text-left text-sm">
                <thead class="bg-slate-50 text-slate-900 font-semibold text-xs uppercase tracking-wider">
                    <tr>
                        <th scope="col" class="px-6 py-4">Product Format</th>
                        <th scope="col" class="px-6 py-4">Roast Profile</th>
                        <th scope="col" class="px-6 py-4">Tasting Notes & Brewing</th>
                        <th scope="col" class="px-6 py-4">Catalogue Description</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200 bg-white">
                    <?php foreach ($PREMIUM_PRODUCTS as $p): ?>
                    <tr class="hover:bg-slate-50 transition">
                        <td class="px-6 py-4 font-semibold text-slate-900 whitespace-nowrap">
                            <?= e($p['name']) ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-amber-100 text-amber-800">
                                <?= e($p['roast']) ?>
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="font-medium text-slate-800"><?= e($p['notes']) ?></div>
                            <div class="text-xs text-slate-500 mt-1 flex items-center gap-1">
                                <i class="ri-cup-line text-amber-600"></i> <?= e($p['brew']) ?>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-xs sm:text-sm text-slate-600 leading-relaxed max-w-md">
                            <?= e($p['desc']) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- 3. Signature Collection -->
<section class="py-16 sm:py-24 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-6 rounded-2xl overflow-hidden border border-slate-200 shadow-md">
                <img src="<?= url('assets/images/coffee/signature-collection.jpeg') ?>" alt="Signature Collection Delicacies" class="w-full h-80 sm:h-96 object-cover" />
            </div>
            <div class="lg:col-span-6 space-y-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-700">Beyond Coffee</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900 mt-2">
                        The Signature Collection
                    </h2>
                    <p class="text-base text-slate-600 mt-2">
                        A curated range of indulgent coffee-infused delicacies fusing organic honey, fine chocolate, and rich Araku roast extract.
                    </p>
                </div>

                <div class="space-y-4">
                    <?php foreach ($SIGNATURE_PRODUCTS as $sig): ?>
                    <div class="bg-white border border-slate-200 rounded-xl p-5">
                        <div class="flex items-center justify-between mb-1.5">
                            <h4 class="text-base font-bold text-slate-900"><?= e($sig['name']) ?></h4>
                            <span class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-semibold bg-amber-100 text-amber-800">
                                <?= e($sig['type']) ?>
                            </span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed"><?= e($sig['desc']) ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Sustainable Collection (Made of Waste Husk) -->
<section class="py-16 sm:py-24 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-6 space-y-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-700">Eco-Innovation</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900 mt-2">
                        Sustainable Collection — Made of Waste Husk
                    </h2>
                    <p class="text-base text-slate-600 mt-2">
                        Transforming agricultural coffee and rice waste husk into eco-friendly, durable, and beautifully crafted drinkware.
                    </p>
                </div>

                <div class="space-y-4">
                    <?php foreach ($SUSTAINABLE_PRODUCTS as $sus): ?>
                    <div class="bg-slate-50 border border-slate-200 rounded-xl p-5">
                        <h4 class="text-base font-bold text-slate-900 mb-1"><?= e($sus['name']) ?></h4>
                        <span class="inline-flex items-center gap-1 text-xs font-semibold text-emerald-700 mb-2">
                            <i class="ri-recycle-line"></i> <?= e($sus['material']) ?>
                        </span>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed"><?= e($sus['desc']) ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="pt-2">
                    <a href="#enquiry-form" class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-white bg-slate-900 rounded-lg hover:bg-slate-800 transition shadow-sm">
                        Order Sustainable Merchandise <i class="ri-arrow-right-line ml-2"></i>
                    </a>
                </div>
            </div>
            <div class="lg:col-span-6">
                <div class="rounded-2xl overflow-hidden border border-slate-200 shadow-md">
                    <img src="<?= url('assets/images/coffee/sustainable-collection.jpeg') ?>" alt="Sustainable Coffee Husk Cups and Tumblers" class="w-full h-80 sm:h-96 object-cover" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Distributor / Customer Enquiry Form -->
<section id="enquiry-form" class="py-16 sm:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            <div class="lg:col-span-7 bg-white border border-slate-200 rounded-2xl p-6 sm:p-8 shadow-sm">
                <div class="mb-6">
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-700">Commercial Enquiries</span>
                    <h3 class="text-2xl font-bold text-slate-900 mt-1">Distributor, Retail & Franchise Enquiry</h3>
                    <p class="text-sm text-slate-600 mt-1">
                        Whether you are an aspiring café franchisee, retail distributor, HoReCa business, or corporate gifting buyer, our coffee team will assist you with sample kits, bulk pricing, and franchise economics.
                    </p>
                </div>

                <form class="mc-ajax-form space-y-4">
                    <input type="hidden" name="csrf_token" value="<?= e($_SESSION['csrf_token']) ?>" />
                    <input type="hidden" name="type" value="coffee_distributor_enquiry" />

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Full Name *</label>
                            <input type="text" name="name" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5" placeholder="e.g. Priya Sharma" required />
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Business / Enterprise Name</label>
                            <input type="text" name="company" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5" placeholder="e.g. Apex Café Ventures" />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">City & State *</label>
                            <input type="text" name="city_state" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5" placeholder="e.g. Hyderabad, Telangana" required />
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Contact Number / WhatsApp *</label>
                            <input type="tel" name="phone" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5" placeholder="+91 98765 43210" required />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Email Address *</label>
                            <input type="email" name="email" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5" placeholder="priya@domain.com" required />
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Enquiry Type *</label>
                            <select name="enquiry_type" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5 bg-white" required>
                                <option value="">Select Enquiry Type</option>
                                <option value="Franchise">Café Franchise Partner (Hyderabad / Pan-India)</option>
                                <option value="Retail Distributor">Retail Distributor / Super Stockist</option>
                                <option value="Wholesale">Wholesale Roasted / Raw Beans</option>
                                <option value="HoReCa">Hotel, Restaurant & Café (HoReCa) Supply</option>
                                <option value="Corporate Gift">Corporate Gifting (Boxes & Chocolates)</option>
                                <option value="Personal">Personal Subscription / Coffee Enthusiast</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Estimated Monthly Volume</label>
                        <select name="monthly_volume" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5 bg-white">
                            <option value="<10 kg">Below 10 kg / Sample Kit</option>
                            <option value="10-50 kg">10 kg – 50 kg</option>
                            <option value="50-200 kg">50 kg – 200 kg</option>
                            <option value="200 kg+">Above 200 kg (Bulk Commercial)</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Message / Specific Requirements</label>
                        <textarea name="message" rows="4" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5" placeholder="Provide information on your current business setup, retail network, café location, or preferred roast formats..."></textarea>
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-white bg-slate-900 rounded-lg hover:bg-slate-800 transition shadow-sm">
                            Submit Coffee Enquiry <i class="ri-cup-line ml-2"></i>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Right: Franchise Economics & Government Alliances -->
            <div class="lg:col-span-5 space-y-6">
                <div class="bg-white border border-slate-200 rounded-2xl p-6 sm:p-8 shadow-sm">
                    <h4 class="text-base font-bold text-slate-900 mb-2 flex items-center gap-2">
                        <i class="ri-store-2-line text-amber-700"></i> Franchise Economics
                    </h4>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-4">
                        Mercora provides full operational onboarding for franchise partners: site selection, interior design guidelines, barista brewing training, POS integration, and uninterrupted single-origin bean logistics.
                    </p>
                    <ul class="space-y-2 text-xs sm:text-sm text-slate-700">
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-emerald-600"></i> Compact kiosk & flagship café models</li>
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-emerald-600"></i> Low break-even & high gross margins</li>
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-emerald-600"></i> Authentic South Indian filter & espresso</li>
                    </ul>
                </div>

                <div class="bg-slate-900 text-white rounded-2xl p-6 sm:p-8 border border-slate-800">
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-400">Government Alliances</span>
                    <h4 class="text-lg font-bold text-white mt-1 mb-2">SERP AP Women-Driven Shops</h4>
                    <p class="text-xs sm:text-sm text-slate-300 leading-relaxed mb-6">
                        Under our state MOU with the Society for Elimination of Rural Poverty (SERP), Andhra Pradesh, we are establishing 100 Women-Driven Coffee Shops to create sustainable livelihoods for rural women entrepreneurs.
                    </p>
                    <a href="<?= url('/partnerships') ?>#native-araku-coffee" class="inline-flex items-center justify-center px-4 py-2.5 text-xs font-semibold text-slate-950 bg-amber-400 hover:bg-amber-300 rounded-lg transition">
                        Read Partnership Agreement <i class="ri-arrow-right-line ml-1.5"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

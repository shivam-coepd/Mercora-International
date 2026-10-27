<?php
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/config.php';
}
?>
<!-- Partner Detail Modal (Tailwind CSS) -->
<div id="mcPartnerModal" class="fixed inset-0 z-50 bg-slate-950/70 backdrop-blur-sm hidden items-center justify-center p-4 transition-opacity duration-200" aria-hidden="true" role="dialog" aria-modal="true">
    <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto p-6 sm:p-8 shadow-2xl relative border border-slate-200">
        <!-- Close Button -->
        <button type="button" class="absolute top-5 right-5 w-9 h-9 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-500 hover:text-slate-800 flex items-center justify-center transition" id="mcPartnerModalClose" aria-label="Close dialog">
            <i class="ri-close-line text-xl"></i>
        </button>

        <!-- Header -->
        <div class="flex items-start sm:items-center gap-4 pb-6 border-b border-slate-100">
            <div class="w-20 h-14 rounded-lg bg-slate-50 border border-slate-200 flex items-center justify-center p-2 flex-shrink-0">
                <img id="mcModalLogo" src="" alt="Partner Logo" class="max-h-10 max-w-full object-contain" />
            </div>
            <div>
                <span id="mcModalTag" class="inline-block text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded bg-amber-50 text-amber-800 border border-amber-200 mb-1">
                    Confirmed Strategic Partner
                </span>
                <h3 id="mcModalTitle" class="text-xl font-bold text-slate-900">Partner Name</h3>
                <p id="mcModalRole" class="text-xs sm:text-sm text-slate-500 font-medium mt-0.5">Partner Role</p>
            </div>
        </div>

        <!-- Narrative Content -->
        <div class="py-6">
            <p id="mcModalText" class="text-sm sm:text-base text-slate-700 leading-relaxed"></p>
        </div>

        <!-- Footer Actions -->
        <div class="pt-4 border-t border-slate-100 flex items-center justify-between gap-4">
            <a id="mcModalCTA" href="#" class="inline-flex items-center justify-center px-5 py-2.5 text-sm font-semibold text-white bg-slate-900 hover:bg-slate-800 rounded-lg transition shadow-sm">
                <span id="mcModalCTAText">Explore Solutions</span>
                <i class="ri-arrow-right-line ml-2"></i>
            </a>
            <button type="button" class="px-4 py-2.5 text-sm font-semibold text-slate-600 hover:text-slate-900 transition" id="mcPartnerModalDismiss">
                Close
            </button>
        </div>
    </div>
</div>

<script>
window.MERCORA_PARTNERS = <?= json_encode($PARTNERS, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP) ?>;
</script>

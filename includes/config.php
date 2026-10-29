<?php
/**
 * Mercora International - Central Configuration & Master Data
 * Sourced directly from Mercora_Website_Content_Master10726.docx
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Generate CSRF token if not set
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Base site configuration
define('SITE_NAME', 'Mercora International');
define('SITE_TAGLINE', 'Consulting · Technology · Business Transformation');
define('SITE_HEADLINE', 'Empowering Enterprises. Transforming Communities. Connecting the World.');
define('SITE_EMAIL', 'info@mercorainternational.com');
define('SITE_PHONE', '+91 76800 77222');
define('SITE_ADDRESS', 'Flat No.212, 2nd Floor, Prime Legend, Botanical Garden Road, Kondapur, Hyderabad – 500084, Telangana, India');
define('SITE_VERSION', 'V1 — July 2026');

// Registration & Credential Details
define('FIRM_REG_NO', '2978/2025 (Ranga Reddy, Telangana)');
define('FIRM_INC_DATE', '29-Jul-2025');
define('UDYAM_REG_NO', 'UDYAM-TS-02-0265208');
define('DPIIT_NO', 'DIPP258473 (Agriculture/AgriTech, Valid to 01-Jul-2035)');
define('IEC_CODE', 'ACEFM7191A (DGFT Hyderabad)');
define('GSTIN_NO', '36ACEFM7191A1ZB');

// URL Helper (clean extension-less URLs)
function url($path = '')
{
    $path = '/' . ltrim($path, '/');
    if ($path === '//' || $path === '/')
        return '/';
    return rtrim($path, '/');
}

// Route active checker
function isActive($route)
{
    $current = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
    $current = rtrim($current, '/');
    if ($current === '')
        $current = '/';
    $route = rtrim($route, '/');
    if ($route === '')
        $route = '/';
    return ($current === $route) ? 'is-active' : '';
}

// Sanitize output
function e($str)
{
    return htmlspecialchars($str ?? '', ENT_QUOTES, 'UTF-8');
}

// The 11 Business Verticals from Master Document
$BUSINESS_VERTICALS = [
    [
        'id' => 'agritech',
        'title' => 'AgriTech & Precision Agri',
        'icon' => 'ri-plant-line',
        'image' => 'assets/images/industries/agriculture.jpg',
        'short' => 'AI, drones, and multispectral imaging for smart farming and yield optimization.',
        'tag' => 'Flagship Vertical'
    ],
    [
        'id' => 'digital-trans',
        'title' => 'Digital Transformation',
        'icon' => 'ri-cpu-line',
        'image' => 'assets/images/industries/technology.jpg',
        'short' => 'End-to-end enterprise IT modernization, SaaS platforms, and intelligent automation.',
        'tag' => 'Core Capability'
    ],
    [
        'id' => 'global-trade',
        'title' => 'Global Trade',
        'icon' => 'ri-global-line',
        'image' => 'assets/images/industries/trade.jpg',
        'short' => 'Import-export facilitation, Incoterms advisory, and global buyer-seller matchmaking (IEC ACEFM7191A).',
        'tag' => 'DGFT Registered'
    ],
    [
        'id' => 'healthcare',
        'title' => 'Healthcare & Wellness',
        'icon' => 'ri-heart-pulse-line',
        'image' => 'assets/images/industries/healthcare.jpg',
        'short' => 'Corporate wellbeing, preventive mental health, and digital health QA via MindSmith partnership.',
        'tag' => 'Wellbeing Tech'
    ],
    [
        'id' => 'education',
        'title' => 'Education & Skilling',
        'icon' => 'ri-book-read-line',
        'image' => 'assets/images/industries/education.jpg',
        'short' => 'Competency training, international student mobility, and STEM pathways with VFS Education.',
        'tag' => 'Human Capital'
    ],
    [
        'id' => 'financial-advisory',
        'title' => 'Financial Advisory',
        'icon' => 'ri-funds-line',
        'image' => 'assets/images/industries/finance.jpg',
        'short' => 'Audit, GRC advisory, ESG compliance, financial due diligence, and capital structuring.',
        'tag' => 'Strategic Advisory'
    ],
    [
        'id' => 'textile-apparel',
        'title' => 'Textile & Apparel',
        'icon' => 'ri-t-shirt-2-line',
        'image' => 'assets/images/industries/textile.jpg',
        'short' => 'Sustainable fabric innovation and WHITE WORLD premium lifestyle e-commerce platform.',
        'tag' => 'WHITE WORLD'
    ],
    [
        'id' => 'nextgen-innovation',
        'title' => 'NextGen Innovation',
        'icon' => 'ri-lightbulb-flash-line',
        'image' => 'assets/images/industries/manufacturing.jpg',
        'short' => 'Venture acceleration, deep-tech defense (iDEX), and government grant facilitation (SISFS).',
        'tag' => 'Deep Tech & iDEX'
    ],
    [
        'id' => 'women-empowerment',
        'title' => 'Women Empowerment',
        'icon' => 'ri-women-line',
        'image' => 'assets/images/industries/women.jpg',
        'short' => 'Incubation, financial inclusion, and 100 Women-Driven Coffee Shops with SERP, AP Government.',
        'tag' => 'SERP AP Initiative'
    ],
    [
        'id' => 'arts-culture',
        'title' => 'Arts & Culture',
        'icon' => 'ri-palette-line',
        'image' => 'assets/images/industries/retail.jpg',
        'short' => 'Heritage conservation, tribal artisan upliftment, and indigenous craft promotion.',
        'tag' => 'Cultural Heritage'
    ],
    [
        'id' => 'csr-sustainability',
        'title' => 'CSR & Sustainability',
        'icon' => 'ri-recycle-line',
        'image' => 'assets/images/industries/sustainability.jpg',
        'short' => 'ESG reporting, household waste-to-energy biofuels, and rural solar pumping systems.',
        'tag' => 'Circular Economy'
    ],
];

// The 8 Confirmed Signed-MOU Partners with Full Content from Section 1.6
$PARTNERS = [
    'native-araku-coffee' => [
        'name' => 'Native Araku Coffee',
        'role' => 'GI-Tagged Specialty Coffee & Franchise Development',
        'logo' => 'assets/images/mercora/partners/native-araku-coffee.png',
        'tag' => 'Authorised Franchise Development Partner',
        'summary' => 'Native Araku Coffee is renowned for its single-origin, shade-grown Arabica and Robusta beans cultivated across 1.5 lakh acres by 1,00,000 tribal farming families in Araku Valley, Andhra Pradesh.',
        'full_text' => 'Mercora International is the authorised Franchise Development Partner for Native Araku Coffee (NAC), a premium GI-tagged specialty coffee brand from Araku Valley, Andhra Pradesh. Native Araku Coffee is renowned for its single-origin coffee, organic coffee cultivation, shade-grown Arabica and Robusta beans, tribal farmer-sourced coffee, and authentic South Indian filter coffee blends. Through this partnership, Mercora promotes coffee distribution, franchise opportunities, wholesale coffee supply, retail coffee partnerships, corporate gifting solutions, café development, and coffee business expansion across India. In addition, an MOU with SERP (Society for Elimination of Rural Poverty), Andhra Pradesh Government drives the establishment of 100 Women-Driven Coffee Shops, directly empowering rural and tribal women entrepreneurs.',
        'cta' => 'Explore Coffee Products & Franchise',
        'link' => '/coffee-products'
    ],
    'drone-anatomy' => [
        'name' => 'Drone Anatomy',
        'role' => 'Strategic Drone Technology Partner',
        'logo' => 'assets/images/mercora/partners/drone-anatomy.png',
        'tag' => 'DGCA Type-Certified Tech Partner',
        'summary' => 'Dastrionics Technologies Private Limited delivers DGCA-approved drone spraying, precision agriculture, mining surveys, volumetric analysis, and digital mapping.',
        'full_text' => 'Mercora International is proud to be associated with Drone Anatomy (Dastrionics Technologies Private Limited), a leading Indian drone technology company and manufacturer of DGCA-approved, type-certified drone solutions. Through this strategic partnership, Mercora International and Drone Anatomy deliver advanced drone spraying services, precision agriculture solutions, drone surveying and mapping, mining surveys, aerial scanning, GIS mapping, orthomosaic generation, volumetric analysis, mine planning support, stockpile measurement, drone-based inspections, and digital monitoring services across agriculture, mining, infrastructure, construction, environmental monitoring, and industrial sectors. The collaboration also supports the establishment of Drone Service Centres, technical training, maintenance support, and drone-enabled project execution for government, enterprise, mining companies, infrastructure developers, and private-sector clients. While Mercora International provides consulting, business development, project management, mining advisory, and client engagement services, Drone Anatomy contributes cutting-edge drone technology, aerial survey expertise, geospatial analytics, and operational capabilities.',
        'cta' => 'Explore Drone Solutions',
        'link' => '/it-services'
    ],
    'kavachapp' => [
        'name' => 'KavachApp',
        'role' => 'Strategic SaaS Technology Partner',
        'logo' => 'assets/images/mercora/partners/kavachapp.png',
        'tag' => 'Mercosys Ecosystem Partner',
        'summary' => 'Arisetty Technologies Private Limited provides white-labelled SaaS platforms, business automation software, and enterprise digital solutions.',
        'full_text' => 'Mercora International is proud to be associated with KavachApp (Arisetty Technologies Private Limited), a leading SaaS technology provider delivering secure, scalable, and business-ready digital solutions. Through this strategic partnership, Mercora International and KavachApp collaborate to provide white-labelled SaaS platforms, digital transformation solutions, business automation software, workflow management systems, enterprise applications, subscription-based software services, client onboarding solutions, and cloud-based business platforms under the Mercosys ecosystem. The partnership enables organizations, startups, SMEs, educational institutions, and enterprises to accelerate digital adoption through innovative technology solutions, seamless implementation, user training, technical support, and ongoing platform enhancement.',
        'cta' => 'Inquire About SaaS & Mercosys',
        'link' => '/it-services'
    ],
    'apt-it-solutions' => [
        'name' => 'APT IT Solutions',
        'role' => 'Digital Transformation & Technology Partner',
        'logo' => 'assets/images/mercora/partners/apt-it-solutions.png',
        'tag' => 'ISO 9001:2015 Tech Partner',
        'summary' => 'ISO 9001:2015 certified company specializing in custom software development, web & mobile applications, LMS, and enterprise IT consulting.',
        'full_text' => 'Mercora International is associated with APT IT Solutions, a leading information technology and digital solutions company specializing in custom software development, web and mobile application development, e-commerce solutions, UI/UX design, digital marketing, SEO services, enterprise software development, learning management systems (LMS), and IT consulting services. Through this strategic partnership, Mercora International and APT IT Solutions collaborate to deliver innovative digital transformation solutions, business automation platforms, enterprise applications, cloud-enabled systems, e-governance solutions, website development, mobile applications, and technology consulting services for startups, SMEs, enterprises, educational institutions, and government organizations.',
        'cta' => 'Discuss IT Mandates',
        'link' => '/it-services'
    ],
    'tridantor' => [
        'name' => 'Tridantor',
        'role' => 'Defence, Disaster Response & Critical Infrastructure Partner',
        'logo' => 'assets/images/mercora/partners/tridantor.png',
        'tag' => 'iDEX & Deep-Tech Partner',
        'summary' => 'Tridantor Ideaus Private Limited specializes in defence modernization, AI-powered surveillance, edge computing, and critical asset protection.',
        'full_text' => 'Mercora International is associated with Tridantor Ideaus Private Limited, a deep-technology company specializing in defence technology, disaster response solutions, critical infrastructure monitoring, AI-powered surveillance, advanced sensing systems, edge computing, intelligent decision support systems, and secure communication technologies. Through this strategic partnership, Mercora International and Tridantor collaborate to deliver innovative solutions for defence modernization, homeland security, disaster management, smart infrastructure monitoring, public safety systems, government technology programs, and critical asset protection. The collaboration includes government advisory, strategic consulting, grant and funding support (including iDEX), institutional partnerships, business development, technology commercialization, and investment facilitation.',
        'cta' => 'Explore Deep-Tech Solutions',
        'link' => '/business-solutions'
    ],
    'mindsmith' => [
        'name' => 'MindSmith',
        'role' => 'Mental Health, Wellbeing & AI Innovation Partner',
        'logo' => 'assets/images/mercora/partners/mindsmith.png',
        'tag' => 'Health-Tech Innovation',
        'summary' => 'MindSmith delivers Brain Health Profile (BHP), Life Lanes™, SKYE AI, corporate EAP wellness programs, and preventive mental healthcare.',
        'full_text' => 'Mercora International is associated with MindSmith Private Limited, an innovative health-tech and wellbeing company specializing in mental health assessments, employee wellbeing programs, behavioral analytics, AI-powered wellness solutions, digital counselling platforms, educational wellbeing programs, and preventive mental healthcare services. Through this strategic partnership, Mercora International and MindSmith collaborate to promote and deliver transformative solutions including Brain Health Profile (BHP), Life Lanes™, SKYE AI, mental wellness assessments, employee assistance programs (EAP), organizational wellbeing initiatives, student wellness programs, and AI-driven behavioural insights for government organizations, public sector enterprises, corporates, and community ecosystems.',
        'cta' => 'Explore Wellbeing Programs',
        'link' => '/business-solutions'
    ],
    'rishipal-gupta-sons' => [
        'name' => 'RishiPal Gupta & Sons',
        'role' => 'Spices, Agri-Trade & Global Market Expansion Partner',
        'logo' => 'assets/images/mercora/partners/rishipal-gupta-sons.png',
        'tag' => '7+ Decades Industry Heritage',
        'summary' => 'Seven decades of spice manufacturing, export processing, sustainable food supply chains, and global trade operations.',
        'full_text' => 'Mercora International is associated with RishiPal Gupta & Sons (RPGS), a leading spice manufacturing, spice processing, and spice trading company with over seven decades of industry expertise. Through this strategic partnership, Mercora International and RPGS collaborate to drive spice exports, agri-food trade, international market expansion, import-export facilitation, business development, investment advisory, supply chain growth, and global buyer-seller networking across domestic and international markets. The collaboration focuses on market research, export promotion, regulatory compliance, trade consultancy, portfolio development, international partnerships, and women entrepreneurship initiatives within the agri-food sector.',
        'cta' => 'Explore Agri-Trade Advisory',
        'link' => '/business-solutions'
    ],
    'vfs-education-services' => [
        'name' => 'VFS Education Services',
        'role' => 'International Education & Study Abroad Partner',
        'logo' => 'assets/images/mercora/partners/vfs-education-services.png',
        'tag' => 'Global Education Advisory',
        'summary' => 'Global student mobility, international university admissions, STEM pathways, visa advisory, and academic counselling.',
        'full_text' => 'Mercora International is associated with VFS Education Services, a global education consulting and student mobility organization specializing in study abroad programs, international admissions, university applications, student counselling, visa assistance, career guidance, document verification, and overseas education services. Through this strategic partnership, Mercora International and VFS Education Services collaborate to support students in accessing international higher education opportunities, STEM programs, university admissions, student visa processing, academic counselling, career planning, and scholarship guidance across leading universities and institutions worldwide.',
        'cta' => 'Explore Education Pathways',
        'link' => '/business-solutions'
    ],
];

// Leadership Team from Section 2.4
$LEADERSHIP_TEAM = [
    [
        'name' => 'Mrs. D. Jaya Geetha Kiran',
        'role' => 'Founder & Managing Partner',
        'qualification' => 'M.Sc Computer Science',
        'photo' => 'assets/images/team/jaya-geetha-kiran.jpeg',
        'bio' => 'An entrepreneur with over 15 years of cross-industry leadership spanning HR, Operations, Pharmaceutical Manufacturing, Compliance, and Strategic Management. She steers Mercora\'s strategic vision, business ecosystem development, and its commitment to innovation, inclusive growth, and women entrepreneurship across global markets. She promotes farmers to agri-entrepreneurs, drives grassroot-to-global initiatives, and champions renewable energy and waste-to-energy innovations — converting household waste into biofuels and sustainable energy resources.'
    ],
    [
        'name' => 'Ms. A. Manasa Raj',
        'role' => 'Co-Founder & Partner',
        'qualification' => 'Strategic Innovation & Community Ecosystems',
        'photo' => 'assets/images/team/manasa-raj.jpeg',
        'bio' => 'A strategic leader focused on innovation ecosystems, entrepreneurship development, arts, culture, heritage promotion, and scalable business platforms for rural communities and AgriTech initiatives. She drives Mercora\'s community impact programmes and fosters inclusive, partnership-led growth models across industry and social sectors.'
    ],
    [
        'name' => 'Mr. Subbarao Kalluri',
        'role' => 'Technology Consultant',
        'qualification' => 'PMP®, PRINCE2®, CEH, ISO Certified (20+ Years Exp)',
        'photo' => 'assets/images/team/subbarao-kalluri.jpeg',
        'bio' => 'A Digital Transformation and IT leader with 20+ years of experience in enterprise applications, programme management, quality engineering, and global technology delivery. A PMP®, PRINCE2®, CEH, and ISO-certified professional, he anchors Mercora\'s technology consulting practice and leads digital modernisation mandates for enterprise clients.'
    ],
    [
        'name' => 'Dr. Tayjaswni Jatiieen Bhilare',
        'role' => 'Head, Strategic Market Expansion & Business Development',
        'qualification' => 'M.A., B.Ed., Doctorate in Education Management (SORBON University)',
        'photo' => 'assets/images/team/tayjaswni-bhilare.png',
        'bio' => 'A distinguished educationist, social entrepreneur, and community leader holding an M.A., B.Ed., and Doctorate in Education Management (SORBON University). With decades of leadership in education and rural development, she is a multi-award recipient — including the Bhaskar Award (2017), Sakaal Women Idol Award (2022), Jhansi Ki Rani Award (2023), and Satara Pride Award (2025). She brings exceptional expertise in strategic market expansion, stakeholder engagement, and large-scale social impact livelihood programmes.'
    ],
    [
        'name' => 'Mrs. Swarna Prabha',
        'role' => 'Head, Administration, Strategic Partnerships & FPO Relations',
        'qualification' => 'MBA (10+ Years Experience)',
        'photo' => 'assets/images/team/swarna-prabha.png',
        'bio' => 'An MBA professional with 10+ years of experience in administration, coordination, stakeholder engagement, FPO partnerships, and client relationship management. Experienced in building strategic alliances, managing operations, facilitating business collaborations, and driving sustainable growth through strong industry and community networks.'
    ],
    [
        'name' => 'K. V. R. S. S. Sasanka',
        'role' => 'Digital Media Operations Consultant',
        'qualification' => 'B.E. Information Technology',
        'photo' => 'assets/images/team/sasanka.png',
        'bio' => 'A Digital Media specialist (BE, Information Technology) who joined Mercora in October 2025. He manages digital media operations, online presence, and content delivery across platforms, supporting all verticals with digital outreach and media strategy.'
    ],
    [
        'name' => 'D. Veda Anjali',
        'role' => 'Youth Ambassador, White Brand Initiative',
        'qualification' => 'Grade 10 Student & Social Impact Champion',
        'photo' => 'assets/images/team/veda-anjali.jpeg',
        'bio' => 'A motivated Grade 10 student and Youth Ambassador for the White Brand Initiative at Mercora International. Passionate about sustainable fashion, social impact, and community development, she actively supports initiatives that promote inclusive growth and responsible apparel practices. She is particularly interested in empowering women tailors, tribal artisans, persons with disabilities, and underprivileged youth through skill development and livelihood opportunities.'
    ],
];

// Company Journey Milestones from Section 2.3
$COMPANY_JOURNEY = [
    [
        'date' => '29 Jul 2025',
        'title' => 'Mercora International Incorporated',
        'desc' => 'Partnership Deed signed. Firm Reg. No. 2978/2025, registered in Ranga Reddy District, Telangana.',
        'badge' => 'Incorporation'
    ],
    [
        'date' => '24 Aug 2025',
        'title' => 'Udyam Registration Issued',
        'desc' => 'Udyam Registration UDYAM-TS-02-0265208 issued by Ministry of MSME — officially classified as a Micro Enterprise.',
        'badge' => 'MSME Certified'
    ],
    [
        'date' => 'Sep–Oct 2025',
        'title' => 'Initial Strategic MOUs Signed',
        'desc' => 'First tranche of MOUs formalized with MindSmith (EdTech & Wellbeing), APT IT Solutions (Digital Transformation), and RishiPal Gupta & Sons (Agri-Trade & FMCG).',
        'badge' => 'Alliances'
    ],
    [
        'date' => 'Nov 2025',
        'title' => 'Native Araku Coffee Franchise Partnership',
        'desc' => 'Appointed Authorised Franchise Development Partner for Native Araku Coffee, connecting GI-tagged specialty coffee and 100 Women-Driven Coffee Shops with SERP AP.',
        'badge' => 'NAC Partnership'
    ],
    [
        'date' => '2025–2026',
        'title' => 'Smart Crop Doctor Platform & ALEAP Loan',
        'desc' => 'Smart Crop Doctor (AI + drone + multispectral imaging platform) engineered; ALEAP loan approved; enterprise digital transformation mandates activated.',
        'badge' => 'Innovation'
    ],
    [
        'date' => '29 Apr 2026',
        'title' => 'DPIIT Startup India Recognition',
        'desc' => 'Government of India DPIIT recognition issued — Certificate No. DIPP258473 (Agriculture/AgriTech); legally valid through 01-Jul-2035.',
        'badge' => 'Startup India'
    ],
    [
        'date' => 'Apr–May 2026',
        'title' => 'Defence, Mines & Cloud Alliances',
        'desc' => 'Signed key partnership agreements: Drone Anatomy–Mines (27 Apr), Tridantor Defence/iDEX (04 May), and KavachApp SaaS Ecosystem (06 May).',
        'badge' => 'Deep Tech'
    ],
    [
        'date' => '08 Jun 2026',
        'title' => 'IEC Code Issued by DGFT',
        'desc' => 'Importer Exporter Code ACEFM7191A issued by Directorate General of Foreign Trade (DGFT), Hyderabad — Global Trade vertical activated.',
        'badge' => 'Global Trade'
    ],
    [
        'date' => 'Jul 2026',
        'title' => '11 Verticals, 7 Signed MOUs & GSTIN Confirmed',
        'desc' => 'Complete ecosystem active across 11 verticals with 7 signed MOUs, 18 engagements, and confirmed GSTIN 36ACEFM7191A1ZB.',
        'badge' => 'Ecosystem Active'
    ],
];

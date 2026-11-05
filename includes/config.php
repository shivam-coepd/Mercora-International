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
define('FIRM_REG_NO', '2978/2025 (Hyderabad)');
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
        'image' => 'assets/images/industries/culture.jpg',
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

// The 11 Confirmed Signed-MOU Partners (in chronological date order per Client Observations)
$PARTNERS = [
    'mindsmith' => [
        'name' => 'MindSmith',
        'role' => 'Mental Health, Wellbeing & AI Innovation Partner',
        'mou_date' => '27 Sep 2025',
        'logo' => 'assets/images/mercora/partners/mindsmith.png',
        'tag' => 'Health-Tech Innovation',
        'summary' => 'MindSmith delivers Brain Health Profile (BHP), Life Lanes™, SKYE AI, corporate EAP wellness programs, and preventive mental healthcare.',
        'full_text' => 'Mercora International is associated with MindSmith Private Limited, an innovative health-tech and wellbeing company specializing in mental health assessments, employee wellbeing programs, behavioral analytics, AI-powered wellness solutions, digital counselling platforms, educational wellbeing programs, and preventive mental healthcare services. Through this strategic partnership, Mercora International and MindSmith collaborate to promote and deliver transformative solutions including Brain Health Profile (BHP), Life Lanes™, SKYE AI, mental wellness assessments, employee assistance programs (EAP), organizational wellbeing initiatives, student wellness programs, and AI-driven behavioural insights for government organizations, public sector enterprises, corporates, and community ecosystems.',
        'cta' => 'Explore Wellbeing Programs',
        'link' => '/business-solutions'
    ],
    'apt-it-solutions' => [
        'name' => 'APT IT Solutions',
        'role' => 'Digital Transformation & Technology Partner',
        'mou_date' => '13 Oct 2025',
        'logo' => 'assets/images/mercora/partners/apt-it-solutions.png',
        'tag' => 'ISO 9001:2015 Tech Partner',
        'summary' => 'ISO 9001:2015 certified company specializing in custom software development, web & mobile applications, LMS, and enterprise IT consulting.',
        'full_text' => 'Mercora International is associated with APT IT Solutions, a leading information technology and digital solutions company specializing in custom software development, web and mobile application development, e-commerce solutions, UI/UX design, digital marketing, SEO services, enterprise software development, learning management systems (LMS), and IT consulting services. Through this strategic partnership, Mercora International and APT IT Solutions collaborate to deliver innovative digital transformation solutions, business automation platforms, enterprise applications, cloud-enabled systems, e-governance solutions, website development, mobile applications, and technology consulting services for startups, SMEs, enterprises, educational institutions, and government organizations.',
        'cta' => 'Discuss IT Mandates',
        'link' => '/it-services'
    ],
    'rishipal-gupta-sons' => [
        'name' => 'M/s RishiPal Gupta & Sons',
        'role' => 'Spices, Agri-Trade & Global Market Expansion Partner',
        'mou_date' => '02 Dec 2025',
        'logo' => 'assets/images/mercora/partners/rishipal-gupta-sons.png',
        'tag' => '7+ Decades Industry Heritage',
        'summary' => 'Seven decades of spice manufacturing, export processing, sustainable food supply chains, and global trade operations.',
        'full_text' => 'Mercora International is associated with RishiPal Gupta & Sons (RPGS), a leading spice manufacturing, spice processing, and spice trading company with over seven decades of industry expertise. Through this strategic partnership, Mercora International and RPGS collaborate to drive spice exports, agri-food trade, international market expansion, import-export facilitation, business development, investment advisory, supply chain growth, and global buyer-seller networking across domestic and international markets. The collaboration focuses on market research, export promotion, regulatory compliance, trade consultancy, portfolio development, international partnerships, and women entrepreneurship initiatives within the agri-food sector.',
        'cta' => 'Explore Agri-Trade Advisory',
        'link' => '/business-solutions'
    ],
    'native-araku-coffee' => [
        'name' => 'Native Araku Coffee Pvt Ltd',
        'role' => 'GI-Tagged Specialty Coffee & Franchise Development',
        'mou_date' => '31 Jan 2026',
        'logo' => 'assets/images/mercora/partners/native-araku-coffee.png',
        'tag' => 'Authorised Franchise Development Partner',
        'summary' => 'Native Araku Coffee is renowned for its single-origin, shade-grown Arabica and Robusta beans cultivated across 1.5 lakh acres by 1,00,000 tribal farming families in Araku Valley, Andhra Pradesh.',
        'full_text' => 'Mercora International is the authorised Franchise Development Partner for Native Araku Coffee (NAC), a premium GI-tagged specialty coffee brand from Araku Valley, Andhra Pradesh. Native Araku Coffee is renowned for its single-origin coffee, organic coffee cultivation, shade-grown Arabica and Robusta beans, tribal farmer-sourced coffee, and authentic South Indian filter coffee blends. Through this partnership, Mercora promotes coffee distribution, franchise opportunities, wholesale coffee supply, retail coffee partnerships, corporate gifting solutions, café development, and coffee business expansion across India. In addition, an MOU with SERP (Society for Elimination of Rural Poverty), Andhra Pradesh Government drives the establishment of 100 Women-Driven Coffee Shops, directly empowering rural and tribal women entrepreneurs.',
        'cta' => 'Explore Coffee Products & Franchise',
        'link' => '/coffee-products'
    ],
    'drone-anatomy' => [
        'name' => 'Drone Anatomy (Dastronics)',
        'role' => 'Strategic Drone Technology Partner',
        'mou_date' => '27 Apr 2026 (date to be confirmed)',
        'logo' => 'assets/images/mercora/partners/drone-anatomy.png',
        'tag' => 'DGCA Type-Certified Tech Partner',
        'summary' => 'Dastrionics Technologies Private Limited delivers DGCA-approved drone spraying, precision agriculture, mining surveys, volumetric analysis, and digital mapping.',
        'full_text' => 'Mercora International is proud to be associated with Drone Anatomy (Dastrionics Technologies Private Limited), a leading Indian drone technology company and manufacturer of DGCA-approved, type-certified drone solutions. Through this strategic partnership, Mercora International and Drone Anatomy deliver advanced drone spraying services, precision agriculture solutions, drone surveying and mapping, mining surveys, aerial scanning, GIS mapping, orthomosaic generation, volumetric analysis, mine planning support, stockpile measurement, drone-based inspections, and digital monitoring services across agriculture, mining, infrastructure, construction, environmental monitoring, and industrial sectors. The collaboration also supports the establishment of Drone Service Centres, technical training, maintenance support, and drone-enabled project execution for government, enterprise, mining companies, infrastructure developers, and private-sector clients. While Mercora International provides consulting, business development, project management, mining advisory, and client engagement services, Drone Anatomy contributes cutting-edge drone technology, aerial survey expertise, geospatial analytics, and operational capabilities.',
        'cta' => 'Explore Drone Solutions',
        'link' => '/it-services'
    ],
    'tridantor' => [
        'name' => 'Tridantor',
        'role' => 'Defence, Disaster Response & Critical Infrastructure Partner',
        'mou_date' => '04 May 2026',
        'logo' => 'assets/images/mercora/partners/tridantor.png',
        'tag' => 'iDEX & Deep-Tech Partner',
        'summary' => 'Tridantor Ideaus Private Limited specializes in defence modernization, AI-powered surveillance, edge computing, and critical asset protection.',
        'full_text' => 'Mercora International is associated with Tridantor Ideaus Private Limited, a deep-technology company specializing in defence technology, disaster response solutions, critical infrastructure monitoring, AI-powered surveillance, advanced sensing systems, edge computing, intelligent decision support systems, and secure communication technologies. Through this strategic partnership, Mercora International and Tridantor collaborate to deliver innovative solutions for defence modernization, homeland security, disaster management, smart infrastructure monitoring, public safety systems, government technology programs, and critical asset protection. The collaboration includes government advisory, strategic consulting, grant and funding support (including iDEX), institutional partnerships, business development, technology commercialization, and investment facilitation.',
        'cta' => 'Explore Deep-Tech Solutions',
        'link' => '/business-solutions'
    ],
    'kavachapp' => [
        'name' => 'KavachApp',
        'role' => 'Strategic SaaS Technology Partner',
        'mou_date' => '06 May 2026',
        'logo' => 'assets/images/mercora/partners/kavachapp.png',
        'tag' => 'Mercosys Ecosystem Partner',
        'summary' => 'Arisetty Technologies Private Limited provides white-labelled SaaS platforms, business automation software, and enterprise digital solutions.',
        'full_text' => 'Mercora International is proud to be associated with KavachApp (Arisetty Technologies Private Limited), a leading SaaS technology provider delivering secure, scalable, and business-ready digital solutions. Through this strategic partnership, Mercora International and KavachApp collaborate to provide white-labelled SaaS platforms, digital transformation solutions, business automation software, workflow management systems, enterprise applications, subscription-based software services, client onboarding solutions, and cloud-based business platforms under the Mercosys ecosystem. The partnership enables organizations, startups, SMEs, educational institutions, and enterprises to accelerate digital adoption through innovative technology solutions, seamless implementation, user training, technical support, and ongoing platform enhancement.',
        'cta' => 'Inquire About SaaS & Mercosys',
        'link' => '/it-services'
    ],
    'agarwood-impex' => [
        'name' => 'Agarwood Impex Pvt Ltd (tripartite with Syaam Real Estate Consultant)',
        'role' => 'Strategic Agarwood & Premium Oud Trade Partner',
        'mou_date' => '22 Oct 2026',
        'logo' => 'assets/images/mercora/partners/agarwood-impex.jpg',
        'tag' => 'Strategic Agarwood & Oud Partner',
        'summary' => 'Specialising in the sourcing, processing, trading and export of premium naturally formed agarwood and oud-based products.',
        'full_text' => 'Mercora International is associated with Agarwood Impex Private Limited, a Hyderabad-based company specialising in the sourcing, processing, trading and export of premium, naturally formed agarwood and oud-based products. Through this strategic collaboration, also involving Syaam Real Estate Consultant, Mercora International and Agarwood Impex collaborate to strengthen domestic and international market opportunities, facilitate investment and funding arrangements, support trade finance, and explore value-added manufacturing and business expansion. The collaboration brings together business networks, financial facilitation and strategic consulting capabilities to support Agarwood Impex’s growth across the agarwood and premium oud product ecosystem.',
        'cta' => 'Explore Agarwood & Oud Trade',
        'link' => '/business-solutions'
    ],
    'delhi-test-house' => [
        'name' => 'Delhi Test House (a unit of Delhi Test House Global LLP)',
        'role' => 'Strategic Testing, Inspection & Certification Partner',
        'mou_date' => '22 Oct 2026',
        'logo' => 'assets/images/mercora/partners/delhi-test-house.jpg',
        'tag' => 'Strategic Testing & Certification Partner',
        'summary' => 'Established testing, inspection, calibration and certification organisation with expertise in laboratory testing, quality assurance and regulatory compliance.',
        'full_text' => 'Mercora International is associated with Delhi Test House (a unit of Delhi Test House Global LLP), an established testing, inspection, calibration and certification organisation with expertise in laboratory testing, quality assurance and regulatory compliance. Through this strategic collaboration, Mercora International and Delhi Test House work together on business development, market access, client introductions, industry partnerships and expansion opportunities across domestic and international markets. The collaboration focuses on connecting manufacturers, exporters, enterprises and institutions with reliable testing and certification services, including product testing, BIS compliance, quality assurance, technical consultancy and certification support.',
        'cta' => 'Inquire About Testing & Certification',
        'link' => '/contact'
    ],
    'cliqin-health' => [
        'name' => 'CLiQiN Health',
        'role' => 'Strategic Healthcare Access & Market Expansion Partner',
        'mou_date' => 'Nov 2026',
        'logo' => 'assets/images/mercora/partners/cliqin-health.jpg',
        'tag' => 'Strategic Healthcare Access Partner',
        'summary' => 'Healthcare-focused organisation working towards expanding access to integrated healthcare solutions across hospitals, diagnostic centres, and institutional buyers.',
        'full_text' => 'Mercora International is associated with CLiQiN Health, a healthcare-focused organisation working towards expanding access to integrated healthcare solutions. Through this strategic collaboration, Mercora International and CLiQiN Health work together on business development, market access, strategic partnerships, customer acquisition and expansion across India and international markets. The collaboration focuses on facilitating connections with hospitals, diagnostic centres, corporates, government bodies, insurance providers, institutional buyers and other healthcare stakeholders. By combining Mercora’s business network and strategic consulting capabilities with CLiQiN Health’s healthcare solutions, it aims to create new growth opportunities and strengthen the healthcare ecosystem through meaningful partnerships and technology-enabled initiatives.',
        'cta' => 'Explore Healthcare Solutions',
        'link' => '/business-solutions'
    ],
    'x-dimension-robotics' => [
        'name' => 'X Dimension Robotics Private Limited',
        'role' => 'Strategic Drone, Robotics & AI Technology Partner',
        'mou_date' => 'Nov 2026',
        'logo' => 'assets/images/mercora/partners/x-dimension-robotics.jpg',
        'tag' => 'Strategic Drone & Robotics Partner',
        'summary' => 'Specialising in drone systems, robotics, Artificial Intelligence, automation, DaaS, and IoT solutions for precision agriculture, mining, and defence.',
        'full_text' => 'Mercora International is associated with X Dimension Robotics Private Limited, a technology company specialising in drone systems, robotics, Artificial Intelligence, automation and IoT solutions. Through this strategic collaboration, Mercora International and X Dimension Robotics work together to facilitate technology deployment and business opportunities across precision agriculture, drone-as-a-service (DaaS), mining surveys, infrastructure monitoring, defence, industrial automation and smart city applications. The collaboration also focuses on drone pilot training and certification, skill development, research and innovation, government and PSU projects, grant and subsidy opportunities, investment facilitation and enterprise solutions, combining Mercora’s market-access capabilities with X Dimension Robotics’ technical expertise to accelerate technology adoption and business growth across India.',
        'cta' => 'Explore Drone & Robotics Solutions',
        'link' => '/it-services'
    ],
];

// Leadership Team from Section 2.4 & Observations Doc
$LEADERSHIP_TEAM = [
    [
        'name' => 'Mrs. D. Jaya Geetha Kiran',
        'role' => 'Founder & Managing Partner | Independent Director (IICA)',
        'qualification' => 'Strategic Visionary | Entrepreneurial Leader | Champion of Inclusive & Sustainable Growth',
        'photo' => 'assets/images/team/jaya-geetha-kiran.jpeg',
        'bio' => "An accomplished entrepreneur and strategic business leader with over 15 years of cross-industry experience, holding an M.Sc. in Computer Science. Her professional expertise spans Human Resources, Operations, Pharmaceutical Manufacturing, Regulatory Compliance and Strategic Management. As the Founder & Managing Partner of Mercora International, she provides visionary leadership, drives strategic partnerships and business ecosystem development, and leads Mercora's initiatives focused on innovation, sustainable growth and women-led entrepreneurship across domestic and international markets. Associated with the Indian Institute of Corporate Affairs (IICA) through its Independent Directors initiative, she brings a strong focus on corporate governance, ethical leadership, strategic oversight and responsible business practices. A driving force behind Mercora's initiatives for inclusive and sustainable development, she champions the transformation of farmers into agri-entrepreneurs, connects grassroots enterprises with global markets, and drives initiatives in renewable energy and waste-to-energy innovation, including converting household waste into biofuels and sustainable energy resources."
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
        'role' => 'Technology & Digital Transformation Consultant',
        'qualification' => '20+ Years of Experience | CMMI Expert | PMP® | PRINCE2® Practitioner | Certified Ethical Hacker (CEH) | ISO Certified',
        'photo' => 'assets/images/team/subbarao-kalluri.jpeg',
        'bio' => 'A technology and digital transformation leader with over 20 years of experience in enterprise applications, programme management, quality engineering and global technology delivery. He leads Mercora International’s technology consulting practice, driving enterprise digital transformation, technology modernisation and strategic IT initiatives.'
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
        'photo' => 'assets/images/team/sasanka.jpg',
        'bio' => 'A Digital Media specialist (BE, Information Technology) who joined Mercora in October 2025. He manages digital media operations, online presence, and content delivery across platforms, supporting all verticals with digital outreach and media strategy.'
    ],
    [
        'name' => 'D. VedAnjali',
        'role' => 'Youth Ambassador, White Brand Initiative',
        'qualification' => 'Grade 10 Student & Social Impact Champion',
        'photo' => 'assets/images/team/veda-anjali.jpg',
        'bio' => 'A motivated Grade 10 student and Youth Ambassador for the White Brand Initiative at Mercora International. Passionate about sustainable fashion, social impact, and community development, she actively supports initiatives that promote inclusive growth and responsible apparel practices. She is particularly interested in empowering women tailors, tribal artisans, persons with disabilities, and underprivileged youth through skill development and livelihood opportunities.'
    ],
];

// Company Journey Milestones from Section 11 of Observations Document
$COMPANY_JOURNEY = [
    [
        'date' => '29 Jul 2025',
        'badge' => 'INCORPORATION',
        'title' => 'Mercora International Established',
        'desc' => 'Partnership Deed signed and Mercora International established as a registered partnership firm in Hyderabad, Ranga Reddy District, Telangana.'
    ],
    [
        'date' => '24 Aug 2025',
        'badge' => 'MSME CERTIFIED',
        'title' => 'Udyam Registration Issued',
        'desc' => 'Mercora International registered with the Ministry of Micro, Small and Medium Enterprises, Government of India, and recognised as a Micro Enterprise.'
    ],
    [
        'date' => '27 Sep 2025',
        'badge' => 'STRATEGIC ALLIANCE',
        'title' => 'MindSmith Partnership',
        'desc' => 'Strategic MOU signed with MindSmith to explore collaboration opportunities in education technology, learning and wellbeing initiatives.'
    ],
    [
        'date' => '13 Oct 2025',
        'badge' => 'DIGITAL TRANSFORMATION',
        'title' => 'APT IT Solutions Partnership',
        'desc' => 'Strategic MOU signed with APT IT Solutions to explore opportunities in IT services, technology solutions and digital transformation.'
    ],
    [
        'date' => '02 Dec 2025',
        'badge' => 'AGRI-TRADE & FMCG',
        'title' => 'M/s RishiPal Gupta & Sons Partnership',
        'desc' => 'Strategic MOU signed to explore collaboration in agricultural trade, FMCG and related business development opportunities.'
    ],
    [
        'date' => '31 Jan 2026',
        'badge' => 'FRANCHISE DEVELOPMENT',
        'title' => 'Native Araku Coffee Partnership',
        'desc' => 'Partnership formalised with Native Araku Coffee Pvt. Ltd., appointing Mercora International as an Authorised Franchise Development Partner to support franchise expansion and women-led entrepreneurial opportunities.'
    ],
    [
        'date' => '2025–2026',
        'badge' => 'INNOVATION & INCUBATION',
        'title' => 'Smart Crop Doctor – AI-Powered Agriculture',
        'desc' => 'Development of Smart Crop Doctor, an AI-powered precision agriculture platform integrating drone technology and multispectral imaging for crop health monitoring and diagnostics. Mercora received a Certificate of Acceleration from AIC ALEAP WEHUB, supported by AIM, NITI Aayog, recognising it as a promising startup with seed-fund support of ₹10,00,000 under the Startup India Seed Fund Scheme (SISFS).'
    ],
    [
        'date' => '27 Apr 2026',
        'badge' => 'DRONE TECHNOLOGY',
        'title' => 'Drone Anatomy (Dastronics) Partnership',
        'desc' => 'Strategic partnership signed to explore opportunities in drone technology, agricultural applications and related business development initiatives.'
    ],
    [
        'date' => '29 Apr 2026',
        'badge' => 'STARTUP INDIA RECOGNITION',
        'title' => 'DPIIT Startup Recognition',
        'desc' => 'Mercora International recognised as a startup by the Department for Promotion of Industry and Internal Trade (DPIIT), Government of India, under the Agriculture Industry and Agri-Tech sector.'
    ],
    [
        'date' => '04 May 2026',
        'badge' => 'DEFENCE & TECHNOLOGY',
        'title' => 'Tridantor Partnership',
        'desc' => 'Strategic partnership signed to explore collaboration opportunities in defence-related technology initiatives, including iDEX-linked opportunities.'
    ],
    [
        'date' => '06 May 2026',
        'badge' => 'DIGITAL & SAAS ECOSYSTEM',
        'title' => 'KavachApp Partnership',
        'desc' => 'Strategic MOU signed to explore collaboration in digital platforms, SaaS solutions and technology-enabled business opportunities.'
    ],
    [
        'date' => '08 Jun 2026',
        'badge' => 'GLOBAL TRADE',
        'title' => 'Importer Exporter Code Issued',
        'desc' => 'Importer Exporter Code issued by the Directorate General of Foreign Trade (DGFT), Hyderabad, enabling Mercora International to pursue eligible import and export business opportunities.'
    ],
    [
        'date' => 'Jul 2026',
        'badge' => 'ECOSYSTEM EXPANSION',
        'title' => '7 Strategic MOUs & 18 Business Engagements',
        'desc' => "Mercora's business ecosystem expanded across 11 focus verticals, with 7 strategic MOUs signed and 18 business engagements recorded at this milestone. GST registration confirmed."
    ],
    [
        'date' => '22 Oct 2026',
        'badge' => 'TRADE & BUSINESS DEVELOPMENT',
        'title' => 'Agarwood Impex Pvt. Ltd. Partnership',
        'desc' => 'Tripartite MOU signed with Agarwood Impex Pvt. Ltd. and Syaam Real Estate Consultant to explore opportunities in trade facilitation, market development and business expansion.'
    ],
    [
        'date' => '22 Oct 2026',
        'badge' => 'TESTING & CERTIFICATION',
        'title' => 'Delhi Test House Partnership',
        'desc' => 'Strategic MOU signed with Delhi Test House, a unit of Delhi Test House Global LLP, to explore collaboration in testing, inspection, certification, quality assurance and business development.'
    ],
    [
        'date' => 'Nov 2026',
        'badge' => 'HEALTHCARE & INSURANCE',
        'title' => 'CLiQiN Health Partnership',
        'desc' => 'Strategic collaboration to explore business development, market access and partnership opportunities across healthcare and insurance-related services.'
    ],
    [
        'date' => 'Nov 2026',
        'badge' => 'ROBOTICS & DEEP TECHNOLOGY',
        'title' => 'X Dimension Robotics Private Limited Partnership',
        'desc' => 'Strategic collaboration to explore opportunities in drones, robotics, AI, automation, smart agriculture, skill development and technology-led solutions.'
    ],
    [
        'date' => 'Dec 2026',
        'badge' => 'STRATEGIC NETWORK EXPANSION',
        'title' => '11 Strategic MOUs Across Multiple Sectors',
        'desc' => "Mercora International's strategic partnership network comprises 11 MOU partnerships across IT, digital transformation, agriculture, trade, franchise development, drone technology, defence, healthcare, testing and certification, robotics and automation."
    ],
    [
        'date' => 'Dec 2026 – Jan 2027',
        'badge' => 'LIFESTYLE & RETAIL | LAUNCHING SOON',
        'title' => 'The White World',
        'desc' => 'An upcoming white-themed lifestyle and retail marketplace bringing together fashion, jewellery, home and living, handlooms, wellness, accessories and lifestyle products. The initiative aims to create opportunities for women entrepreneurs, tribal artisans, rural self-help groups and emerging businesses.'
    ],
    [
        'date' => 'Dec 2026 – Jan 2027',
        'badge' => 'VETERINARY HEALTHCARE | LAUNCHING SOON',
        'title' => 'VetiGo MobiCare',
        'desc' => 'An upcoming mobile veterinary healthcare initiative designed to bring veterinary consultations, diagnostics and animal healthcare services closer to pets, livestock and farming communities through proposed mobile veterinary clinics.'
    ],
];

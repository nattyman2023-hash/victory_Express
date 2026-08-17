<?php
declare(strict_types=1);

// ----------------------------------------------------------------------------
// Content sourced from the VEX General Trading LLC documentation:
//  - VEX GENERAL TRADING LLC_Business_Activities.docx
//  - VEX_General_Trading_Testimonials.docx
// Image URLs follow the supplied Victory Express Stitch design reference.
// ----------------------------------------------------------------------------

// Real contact details from the Business Activities document.
$contact = [
    'company' => 'Victory Express General Trading LLC',
    'phone_display' => '+971 52 945 9185',
    'phone_tel' => '+971529459185',
    'email' => 'victoryexpressgt@gmail.com',
    'website' => 'www.victoryexpressgt.com',
    'website_url' => 'https://www.victoryexpressgt.com',
    'address_lines' => ['Deira', 'Dubai', 'United Arab Emirates'],
    'hours' => [
        ['Monday – Friday', '09:00 – 18:00'],
        ['Saturday', '09:00 – 14:00'],
        ['Sunday', 'Closed'],
    ],
];

// Real mission statement from the Business Activities document.
$mission = "To earn our customers' trust as their most valued supplier for their industrial and project needs and requirements.";

$vision = 'To be the undisputed global architect of modern trade, setting the standard for institutional trust and operational dominance in the logistics sector.';

// Local production assets keep the public site reliable even when third-party
// image hosts are unavailable. Each image is optimized for GitHub and shared
// hosting deployments, with a separate visual for each business context.
$heroImage = asset('images/victory-hero-port.jpg');
$dubaiImage = asset('images/victory-dubai-skyline.jpg');
$portImage = $heroImage;
$mapImage = asset('images/victory-global-network.jpg');
$sustainabilityImage = asset('images/victory-sustainability.jpg');

$industries = [
    [
        'title' => 'Mining Equipment Trading',
        'slug' => 'mining-equipment',
        'short' => 'Procurement and logistics for crushers, screening, conveyors and mining consumables across rugged extraction environments.',
        'items' => ['Crushers', 'Screening equipment', 'Conveyor systems', 'Mining consumables'],
        'icon' => 'precision_manufacturing',
        'image' => asset('images/victory-mining-equipment.jpg'),
    ],
    [
        'title' => 'Industrial Equipment Trading',
        'slug' => 'industrial-equipment',
        'short' => 'Industrial machinery, manufacturing equipment, compressors, pumps and generators that keep operations running.',
        'items' => ['Industrial machinery', 'Manufacturing equipment', 'Compressors', 'Pumps', 'Generators'],
        'icon' => 'factory',
        'image' => asset('images/victory-industrial-equipment.jpg'),
    ],
    [
        'title' => 'Oil & Gas Equipment Trading',
        'slug' => 'oil-gas-equipment',
        'short' => 'Reliable sourcing and movement of energy-sector materials, valves, pipes and oilfield supplies.',
        'items' => ['Valves', 'Pipes', 'Fittings', 'Flanges', 'Drilling equipment', 'Process equipment'],
        'icon' => 'oil_barrel',
        'image' => asset('images/victory-oil-gas.jpg'),
    ],
    [
        'title' => 'Electrical Equipment Trading',
        'slug' => 'electrical-equipment',
        'short' => 'High-velocity global distribution for switchgear, transformers, cables and power infrastructure.',
        'items' => ['Switchgear', 'Transformers', 'Cables', 'Motors', 'MCC panels', 'Circuit breakers'],
        'icon' => 'electric_bolt',
        'image' => asset('images/victory-electrical-equipment.jpg'),
    ],
    [
        'title' => 'Hotel Amenities',
        'slug' => 'hotel-amenities',
        'short' => 'Premium bath toiletries — shampoo, body wash and lotion — for hospitality partners.',
        'items' => ['Shampoo', 'Body wash', 'Lotion', 'Premium bath toiletries'],
        'icon' => 'local_hotel',
        'image' => asset('images/victory-hotel-amenities.jpg'),
    ],
    [
        'title' => 'Construction Materials Trading',
        'slug' => 'construction-materials',
        'short' => 'Durable structural materials — steel, aluminum, cement additives and formwork systems.',
        'items' => ['Steel products', 'Aluminum products', 'Cement additives', 'Structural materials', 'Formwork systems'],
        'icon' => 'apartment',
        'image' => asset('images/victory-construction-materials.jpg'),
    ],
];

$otherIndustries = [
    ['title' => 'Water & Wastewater Equipment', 'items' => 'Water pumps, filtration systems, RO plants, sewage treatment equipment', 'icon' => 'water_drop'],
    ['title' => 'Renewable Energy Equipment', 'items' => 'Solar panels, inverters, batteries, EV charging stations, energy storage systems', 'icon' => 'solar_power'],
    ['title' => 'Chemicals Trading', 'items' => 'Industrial chemicals, specialty chemicals, water treatment chemicals', 'icon' => 'science'],
    ['title' => 'Laboratory Equipment Trading', 'items' => 'Laboratory instruments, testing equipment, scientific supplies, consumables', 'icon' => 'biotech'],
    ['title' => 'Safety & PPE Trading', 'items' => 'Industrial safety equipment, firefighting systems, PPE, gas detectors', 'icon' => 'health_and_safety'],
    ['title' => 'Marine & Port Equipment Trading', 'items' => 'Marine pumps, navigation equipment, port handling equipment, cranes', 'icon' => 'directions_boat'],
    ['title' => 'Building Materials Trading', 'items' => 'HVAC equipment, elevators, escalators, plumbing materials, sanitary ware', 'icon' => 'domain'],
    ['title' => 'Mechanical Equipment Trading', 'items' => 'Bearings, gearboxes, hydraulic systems, conveyors, industrial tools', 'icon' => 'settings'],
    ['title' => 'Telecommunications Equipment Trading', 'items' => 'Fiber optic equipment, networking equipment, communication systems', 'icon' => 'router'],
    ['title' => 'Agricultural Equipment Trading', 'items' => 'Irrigation systems, tractors, agricultural machinery, greenhouse systems', 'icon' => 'agriculture'],
    ['title' => 'Medical Equipment Trading', 'items' => 'Hospital equipment, diagnostic devices, laboratory medical supplies', 'icon' => 'medical_services'],
    ['title' => 'Logistics Equipment Trading', 'items' => 'Warehouse equipment, forklifts, racking systems, cargo handling equipment', 'icon' => 'local_shipping'],
    ['title' => 'Automotive & Heavy Equipment Parts', 'items' => 'Spare parts, lubricants, filters, engine components', 'icon' => 'directions_car'],
    ['title' => 'Power Generation Equipment Trading', 'items' => 'Diesel generators, gas generators, turbines, power distribution equipment', 'icon' => 'bolt'],
    ['title' => 'Industrial Automation Trading', 'items' => 'PLCs, SCADA systems, sensors, robotics, automation components', 'icon' => 'smart_toy'],
];

// Customer testimonials from the VEX General Trading testimonials document.
$testimonials = [
    [
        'quote' => 'In the oil and gas sector, supply chain reliability and strict adherence to safety standards are non-negotiable. VEX GENERAL TRADING LLC has consistently proven to be an invaluable partner for Gulf Oil Refinery Corporation. Their team has delivered top-tier oilfield supplies and logistical support with unmatched efficiency.',
        'author' => 'Mr. Anil',
        'company' => 'Gulf Oil Refinery Corporation Ltd. · Ajman, UAE',
        'sector' => 'Gas & Oil Sector',
    ],
    [
        'quote' => 'Sourcing specialized equipment for both the agricultural and mining sectors across East Africa requires a versatile and highly capable trading partner. VEX GENERAL TRADING LLC has exceeded our expectations on every front. From robust mining machinery to essential agricultural supplies, their team ensures seamless procurement and delivery.',
        'author' => 'Mr. Zerai K., CEO',
        'company' => 'Yoshimura Trade PLC · Addis Ababa, Ethiopia',
        'sector' => 'Mining & Agriculture Supplies',
    ],
    [
        'quote' => 'Managing large-scale solar infrastructure projects in Africa demands precise timing and durable construction materials. VEX GENERAL TRADING LLC has been an essential partner in streamlining our supply chain. Their ability to source and deliver high-quality construction materials to remote project sites has kept our timelines on track.',
        'author' => 'Mr. Theo, Project Manager',
        'company' => 'Solarcentury · UK-based',
        'sector' => 'Renewable Energy & Infrastructure',
    ],
    [
        'quote' => 'When it comes to healthcare, the quality of medical equipment directly impacts patient lives. VEX GENERAL TRADING LLC has shown incredible dedication in supplying Aynalem Primary Hospital with advanced, reliable medical technology. Their professionalism, transparent communication, and commitment to healthcare standards have made them a trusted partner.',
        'author' => 'Mr. Alemayehu D., CEO',
        'company' => 'Aynalem Primary Hospital',
        'sector' => 'Medical Equipment & Healthcare',
    ],
    [
        'quote' => 'VEX GENERAL TRADING LLC is a powerhouse when it comes to heavy machinery and mechanical procurement. As CEO of Perruga General Trading, I require partners who understand the rugged demands of the mining industry. VEX has consistently supplied us with high-performance mechanical equipment that withstands the toughest environments.',
        'author' => 'Mr. Efrem, CEO',
        'company' => 'Perruga General Trading Co. Ltd.',
        'sector' => 'Mining, Mechanical & Machinery',
    ],
    [
        'quote' => 'Reliability, integrity, and premium quality are the pillars of our relationship with VEX GENERAL TRADING LLC. For our machinery and mechanical equipment needs, the team at Perruga General Trading depends heavily on VEX\'s robust supply network. They don\'t just deliver products; they deliver solutions that keep our client operations running smoothly.',
        'author' => 'Mr. Efrem, CEO',
        'company' => 'Perruga General Trading Co. Ltd.',
        'sector' => 'Mechanical Equipment Supply',
    ],
];

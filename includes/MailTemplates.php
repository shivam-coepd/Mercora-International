<?php
/**
 * Mercora International - Distinct Email Templates for Website Forms
 * Modern, responsive HTML email designs compatible with Gmail, Outlook, Apple Mail.
 */

class MailTemplates
{
  /**
   * Build HTML and Plain Text email for a form submission
   *
   * @param string $type
   * @param array $data
   * @return array ['subject' => string, 'html' => string, 'text' => string]
   */
  public static function render($type, array $data)
  {
    $timestamp = date('d-M-Y H:i:s T');
    $ip = $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';
    $clientName = trim($data['name'] ?? $data['full_name'] ?? 'Inquirer');
    $clientEmail = trim($data['email'] ?? 'Not provided');
    $clientPhone = trim($data['phone'] ?? $data['contact'] ?? '');

    switch ($type) {
      case 'it_project_enquiry':
        return self::renderItServicesTemplate($data, $timestamp, $ip);

      case 'business_proposal_request':
        return self::renderBusinessSolutionsTemplate($data, $timestamp, $ip);

      case 'partnership_collaboration_proposal':
        return self::renderPartnershipsTemplate($data, $timestamp, $ip);

      case 'coffee_distributor_enquiry':
        return self::renderCoffeeTemplate($data, $timestamp, $ip);

      case 'customer_support_ticket':
        return self::renderSupportTicketTemplate($data, $timestamp, $ip);

      case 'general_contact':
      default:
        return self::renderGeneralContactTemplate($data, $timestamp, $ip);
    }
  }

  /**
   * 1. General Corporate Enquiry (contact.php)
   */
  private static function renderGeneralContactTemplate(array $data, $timestamp, $ip)
  {
    $name = htmlspecialchars($data['name'] ?? '', ENT_QUOTES, 'UTF-8');
    $company = htmlspecialchars($data['company'] ?? 'Not provided', ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($data['email'] ?? '', ENT_QUOTES, 'UTF-8');
    $phone = htmlspecialchars($data['phone'] ?? '', ENT_QUOTES, 'UTF-8');
    $interest = htmlspecialchars($data['vertical_interest'] ?? 'General Corporate Inquiry', ENT_QUOTES, 'UTF-8');
    $message = nl2br(htmlspecialchars($data['message'] ?? '', ENT_QUOTES, 'UTF-8'));

    $subject = "📬 [Contact Enquiry] {$name} - {$interest}";

    $badge = "GENERAL CORPORATE ENQUIRY";
    $badgeBg = "#fef3c7";
    $badgeColor = "#b45309";
    $headerGradient = "linear-gradient(135deg, #0f172a 0%, #1e293b 100%)";
    $accentColor = "#d97706";

    $rows = [
      'Full Name' => $name,
      'Company / Organization' => $company,
      'Official Email' => "<a href='mailto:{$email}' style='color: #2563eb; text-decoration: underline;'>{$email}</a>",
      'Phone / WhatsApp' => $phone ? "<a href='tel:{$phone}' style='color: #059669; text-decoration: underline;'>{$phone}</a>" : 'Not provided',
      'Vertical / Area of Interest' => "<strong style='color: #b45309;'>{$interest}</strong>",
    ];

    $html = self::buildHtmlWrapper([
      'title' => 'New Corporate Contact Enquiry',
      'badge' => $badge,
      'badgeBg' => $badgeBg,
      'badgeColor' => $badgeColor,
      'headerGradient' => $headerGradient,
      'accentColor' => $accentColor,
      'rows' => $rows,
      'messageTitle' => 'Client Message & Specific Requirements',
      'messageContent' => $message,
      'clientName' => $name,
      'clientEmail' => $email,
      'clientPhone' => $phone,
      'timestamp' => $timestamp,
      'ip' => $ip,
      'sourcePage' => 'contact.php'
    ]);

    $text = "NEW CORPORATE CONTACT ENQUIRY\n"
      . "----------------------------------------\n"
      . "Name: {$name}\n"
      . "Company: {$company}\n"
      . "Email: {$email}\n"
      . "Phone: {$phone}\n"
      . "Vertical of Interest: {$interest}\n\n"
      . "Message:\n{$data['message']}\n\n"
      . "Submitted: {$timestamp} (IP: {$ip})";

    return ['subject' => $subject, 'html' => $html, 'text' => $text];
  }

  /**
   * 2. IT & Digital Services Project Enquiry (it-services.php)
   */
  private static function renderItServicesTemplate(array $data, $timestamp, $ip)
  {
    $name = htmlspecialchars($data['name'] ?? '', ENT_QUOTES, 'UTF-8');
    $company = htmlspecialchars($data['company'] ?? 'Not provided', ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($data['email'] ?? '', ENT_QUOTES, 'UTF-8');
    $phone = htmlspecialchars($data['phone'] ?? 'Not provided', ENT_QUOTES, 'UTF-8');
    $service = htmlspecialchars($data['service_required'] ?? 'Not specified', ENT_QUOTES, 'UTF-8');
    $budget = htmlspecialchars($data['budget'] ?? 'Not specified', ENT_QUOTES, 'UTF-8');
    $startDate = htmlspecialchars($data['start_date'] ?? 'Immediate', ENT_QUOTES, 'UTF-8');
    $description = nl2br(htmlspecialchars($data['description'] ?? '', ENT_QUOTES, 'UTF-8'));

    $subject = "💻 [IT Project Scope] {$service} - {$company} ({$name})";

    $badge = "ENTERPRISE IT & DIGITAL SERVICES BRIEF";
    $badgeBg = "#e0f2fe";
    $badgeColor = "#0284c7";
    $headerGradient = "linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%)";
    $accentColor = "#2563eb";

    $rows = [
      'Client Contact' => $name,
      'Enterprise / Company' => "<strong>{$company}</strong>",
      'Email Address' => "<a href='mailto:{$email}' style='color: #2563eb; text-decoration: underline;'>{$email}</a>",
      'Phone / WhatsApp' => "<a href='tel:{$phone}' style='color: #059669; text-decoration: underline;'>{$phone}</a>",
      'Service Required' => "<span style='display: inline-block; padding: 4px 8px; background: #e0f2fe; color: #0369a1; border-radius: 4px; font-weight: bold;'>{$service}</span>",
      'Estimated Budget' => "<span style='display: inline-block; padding: 4px 8px; background: #ecfdf5; color: #047857; border-radius: 4px; font-weight: bold;'>{$budget}</span>",
      'Target Start Date' => $startDate,
    ];

    $html = self::buildHtmlWrapper([
      'title' => 'New Enterprise IT Services Enquiry',
      'badge' => $badge,
      'badgeBg' => $badgeBg,
      'badgeColor' => $badgeColor,
      'headerGradient' => $headerGradient,
      'accentColor' => $accentColor,
      'rows' => $rows,
      'messageTitle' => 'Scope of Work & Project Deliverables',
      'messageContent' => $description,
      'clientName' => $name,
      'clientEmail' => $email,
      'clientPhone' => $phone,
      'timestamp' => $timestamp,
      'ip' => $ip,
      'sourcePage' => 'it-services.php'
    ]);

    $text = "ENTERPRISE IT SERVICES BRIEF\n"
      . "----------------------------------------\n"
      . "Name: {$name}\n"
      . "Company: {$company}\n"
      . "Email: {$email}\n"
      . "Phone: {$phone}\n"
      . "Service Required: {$service}\n"
      . "Budget Range: {$budget}\n"
      . "Start Date: {$startDate}\n\n"
      . "Project Description:\n{$data['description']}\n\n"
      . "Submitted: {$timestamp} (IP: {$ip})";

    return ['subject' => $subject, 'html' => $html, 'text' => $text];
  }

  /**
   * 3. Business Solutions Proposal Request (business-solutions.php)
   */
  private static function renderBusinessSolutionsTemplate(array $data, $timestamp, $ip)
  {
    $name = htmlspecialchars($data['name'] ?? '', ENT_QUOTES, 'UTF-8');
    $designation = htmlspecialchars($data['designation'] ?? 'Executive', ENT_QUOTES, 'UTF-8');
    $company = htmlspecialchars($data['company'] ?? '', ENT_QUOTES, 'UTF-8');
    $industry = htmlspecialchars($data['industry'] ?? 'Not specified', ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($data['email'] ?? '', ENT_QUOTES, 'UTF-8');
    $phone = htmlspecialchars($data['phone'] ?? '', ENT_QUOTES, 'UTF-8');
    $solutionType = htmlspecialchars($data['solution_type'] ?? 'Advisory', ENT_QUOTES, 'UTF-8');
    $timeline = htmlspecialchars($data['start_date'] ?? 'As discussed', ENT_QUOTES, 'UTF-8');
    $brief = nl2br(htmlspecialchars($data['description'] ?? $data['message'] ?? '', ENT_QUOTES, 'UTF-8'));

    $subject = "📊 [Strategic Proposal] {$solutionType} - {$company} ({$designation})";

    $badge = "BUSINESS SOLUTIONS PROPOSAL REQUEST";
    $badgeBg = "#fef9c3";
    $badgeColor = "#a16207";
    $headerGradient = "linear-gradient(135deg, #1e293b 0%, #334155 100%)";
    $accentColor = "#ca8a04";

    $rows = [
      'Proponent Name' => "<strong>{$name}</strong> ({$designation})",
      'Company / Institution' => "<strong>{$company}</strong>",
      'Industry Sector' => $industry,
      'Official Email' => "<a href='mailto:{$email}' style='color: #2563eb; text-decoration: underline;'>{$email}</a>",
      'Phone / WhatsApp' => "<a href='tel:{$phone}' style='color: #059669; text-decoration: underline;'>{$phone}</a>",
      'Solution Type' => "<span style='display: inline-block; padding: 4px 8px; background: #fef3c7; color: #92400e; border-radius: 4px; font-weight: bold;'>{$solutionType}</span>",
      'Expected Timeline' => $timeline,
    ];

    $html = self::buildHtmlWrapper([
      'title' => 'New Strategic Business Proposal Request',
      'badge' => $badge,
      'badgeBg' => $badgeBg,
      'badgeColor' => $badgeColor,
      'headerGradient' => $headerGradient,
      'accentColor' => $accentColor,
      'rows' => $rows,
      'messageTitle' => 'Specific Strategic Brief & Objectives',
      'messageContent' => $brief,
      'clientName' => $name,
      'clientEmail' => $email,
      'clientPhone' => $phone,
      'timestamp' => $timestamp,
      'ip' => $ip,
      'sourcePage' => 'business-solutions.php'
    ]);

    $text = "BUSINESS SOLUTIONS PROPOSAL REQUEST\n"
      . "----------------------------------------\n"
      . "Name: {$name} ({$designation})\n"
      . "Company: {$company}\n"
      . "Industry: {$industry}\n"
      . "Email: {$email}\n"
      . "Phone: {$phone}\n"
      . "Solution Type: {$solutionType}\n"
      . "Timeline: {$timeline}\n\n"
      . "Brief:\n" . ($data['description'] ?? $data['message'] ?? '') . "\n\n"
      . "Submitted: {$timestamp} (IP: {$ip})";

    return ['subject' => $subject, 'html' => $html, 'text' => $text];
  }

  /**
   * 4. Strategic Alliances & Institutional MOUs (partnerships.php)
   */
  private static function renderPartnershipsTemplate(array $data, $timestamp, $ip)
  {
    $name = htmlspecialchars($data['name'] ?? '', ENT_QUOTES, 'UTF-8');
    $designation = htmlspecialchars($data['designation'] ?? 'Representative', ENT_QUOTES, 'UTF-8');
    $company = htmlspecialchars($data['company'] ?? '', ENT_QUOTES, 'UTF-8');
    $vertical = htmlspecialchars($data['vertical'] ?? 'All Verticals', ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($data['email'] ?? '', ENT_QUOTES, 'UTF-8');
    $phone = htmlspecialchars($data['phone'] ?? '', ENT_QUOTES, 'UTF-8');
    $capabilities = nl2br(htmlspecialchars($data['description'] ?? $data['message'] ?? '', ENT_QUOTES, 'UTF-8'));

    $subject = "🤝 [Strategic Alliance MOU] {$company} - {$vertical} ({$name})";

    $badge = "CONFIRMED ALLIANCE / MOU PROPOSAL";
    $badgeBg = "#d1fae5";
    $badgeColor = "#047857";
    $headerGradient = "linear-gradient(135deg, #064e3b 0%, #0f172a 100%)";
    $accentColor = "#059669";

    $rows = [
      'Proponent Name' => "<strong>{$name}</strong> ({$designation})",
      'Organization / Entity' => "<strong>{$company}</strong>",
      'Collaboration Vertical' => "<span style='display: inline-block; padding: 4px 8px; background: #ecfdf5; color: #065f46; border-radius: 4px; font-weight: bold;'>{$vertical}</span>",
      'Official Email' => "<a href='mailto:{$email}' style='color: #2563eb; text-decoration: underline;'>{$email}</a>",
      'Direct Phone / Mobile' => "<a href='tel:{$phone}' style='color: #059669; text-decoration: underline;'>{$phone}</a>",
    ];

    $html = self::buildHtmlWrapper([
      'title' => 'New Strategic Partnership Proposal',
      'badge' => $badge,
      'badgeBg' => $badgeBg,
      'badgeColor' => $badgeColor,
      'headerGradient' => $headerGradient,
      'accentColor' => $accentColor,
      'rows' => $rows,
      'messageTitle' => 'Proposed Scope of Association & Capabilities',
      'messageContent' => $capabilities,
      'clientName' => $name,
      'clientEmail' => $email,
      'clientPhone' => $phone,
      'timestamp' => $timestamp,
      'ip' => $ip,
      'sourcePage' => 'partnerships.php'
    ]);

    $text = "STRATEGIC PARTNERSHIP / MOU PROPOSAL\n"
      . "----------------------------------------\n"
      . "Name: {$name} ({$designation})\n"
      . "Organization: {$company}\n"
      . "Vertical: {$vertical}\n"
      . "Email: {$email}\n"
      . "Phone: {$phone}\n\n"
      . "Proposed Scope:\n" . ($data['description'] ?? $data['message'] ?? '') . "\n\n"
      . "Submitted: {$timestamp} (IP: {$ip})";

    return ['subject' => $subject, 'html' => $html, 'text' => $text];
  }

  /**
   * 5. Native Araku Coffee Franchise & Supply (coffee-products.php)
   */
  private static function renderCoffeeTemplate(array $data, $timestamp, $ip)
  {
    $name = htmlspecialchars($data['name'] ?? '', ENT_QUOTES, 'UTF-8');
    $company = htmlspecialchars($data['company'] ?? 'Individual / Startup', ENT_QUOTES, 'UTF-8');
    $cityState = htmlspecialchars($data['city_state'] ?? 'Not specified', ENT_QUOTES, 'UTF-8');
    $phone = htmlspecialchars($data['phone'] ?? '', ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($data['email'] ?? '', ENT_QUOTES, 'UTF-8');
    $enquiryType = htmlspecialchars($data['enquiry_type'] ?? 'Franchise', ENT_QUOTES, 'UTF-8');
    $volume = htmlspecialchars($data['monthly_volume'] ?? 'Sample Kit', ENT_QUOTES, 'UTF-8');
    $message = nl2br(htmlspecialchars($data['message'] ?? 'No additional comments provided.', ENT_QUOTES, 'UTF-8'));

    $subject = "☕ [Araku Coffee Lead] {$enquiryType} - {$cityState} ({$name})";

    $badge = "NATIVE ARAKU COFFEE FRANCHISE & SUPPLY LEAD";
    $badgeBg = "#fef3c7";
    $badgeColor = "#92400e";
    $headerGradient = "linear-gradient(135deg, #451a03 0%, #1c1917 100%)";
    $accentColor = "#b45309";

    $rows = [
      'Lead Full Name' => "<strong>{$name}</strong>",
      'Business Name' => $company,
      'Target City & State' => "<span style='display: inline-block; padding: 4px 8px; background: #fed7aa; color: #9a3412; border-radius: 4px; font-weight: bold;'>📍 {$cityState}</span>",
      'Contact Phone' => "<a href='tel:{$phone}' style='color: #059669; text-decoration: underline;'>{$phone}</a>",
      'Email Address' => "<a href='mailto:{$email}' style='color: #2563eb; text-decoration: underline;'>{$email}</a>",
      'Enquiry Type' => "<span style='display: inline-block; padding: 4px 8px; background: #ffedd5; color: #c2410c; border-radius: 4px; font-weight: bold;'>{$enquiryType}</span>",
      'Estimated Monthly Volume' => "<strong style='color: #78350f;'>{$volume}</strong>",
    ];

    $html = self::buildHtmlWrapper([
      'title' => 'New Native Araku Coffee Franchise & Supply Enquiry',
      'badge' => $badge,
      'badgeBg' => $badgeBg,
      'badgeColor' => $badgeColor,
      'headerGradient' => $headerGradient,
      'accentColor' => $accentColor,
      'rows' => $rows,
      'messageTitle' => 'Business Setup & Requirements',
      'messageContent' => $message,
      'clientName' => $name,
      'clientEmail' => $email,
      'clientPhone' => $phone,
      'timestamp' => $timestamp,
      'ip' => $ip,
      'sourcePage' => 'coffee-products.php'
    ]);

    $text = "NATIVE ARAKU COFFEE LEAD\n"
      . "----------------------------------------\n"
      . "Name: {$name}\n"
      . "Business: {$company}\n"
      . "Location: {$cityState}\n"
      . "Phone: {$phone}\n"
      . "Email: {$email}\n"
      . "Enquiry Type: {$enquiryType}\n"
      . "Monthly Volume: {$volume}\n\n"
      . "Message:\n{$data['message']}\n\n"
      . "Submitted: {$timestamp} (IP: {$ip})";

    return ['subject' => $subject, 'html' => $html, 'text' => $text];
  }

  /**
   * 6. Priority Customer Support Ticket (customer-support.php)
   */
  private static function renderSupportTicketTemplate(array $data, $timestamp, $ip)
  {
    $ticketId = 'MCR-' . strtoupper(substr(uniqid(), -6));
    $name = htmlspecialchars($data['name'] ?? '', ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($data['email'] ?? '', ENT_QUOTES, 'UTF-8');
    $phone = htmlspecialchars($data['phone'] ?? '', ENT_QUOTES, 'UTF-8');
    $category = htmlspecialchars($data['support_category'] ?? 'General Support', ENT_QUOTES, 'UTF-8');
    $description = nl2br(htmlspecialchars($data['description'] ?? $data['message'] ?? '', ENT_QUOTES, 'UTF-8'));

    $subject = "🎫 [Support Ticket #{$ticketId}] {$category} - {$name}";

    $badge = "PRIORITY ASSISTANCE TICKET #{$ticketId}";
    $badgeBg = "#ffe4e6";
    $badgeColor = "#be123c";
    $headerGradient = "linear-gradient(135deg, #881337 0%, #0f172a 100%)";
    $accentColor = "#e11d48";

    $rows = [
      'Ticket ID' => "<strong style='color: #e11d48; font-size: 15px;'>#{$ticketId}</strong>",
      'Client / Requester' => "<strong>{$name}</strong>",
      'Registered Email' => "<a href='mailto:{$email}' style='color: #2563eb; text-decoration: underline;'>{$email}</a>",
      'Contact Phone' => "<a href='tel:{$phone}' style='color: #059669; text-decoration: underline;'>{$phone}</a>",
      'Request Category' => "<span style='display: inline-block; padding: 4px 8px; background: #fff1f2; color: #be123c; border-radius: 4px; font-weight: bold;'>{$category}</span>",
      'SLA Expected' => 'First Response within 4 Hours',
    ];

    $html = self::buildHtmlWrapper([
      'title' => "Support Ticket #{$ticketId}",
      'badge' => $badge,
      'badgeBg' => $badgeBg,
      'badgeColor' => $badgeColor,
      'headerGradient' => $headerGradient,
      'accentColor' => $accentColor,
      'rows' => $rows,
      'messageTitle' => 'Detailed Issue / Assistance Description',
      'messageContent' => $description,
      'clientName' => $name,
      'clientEmail' => $email,
      'clientPhone' => $phone,
      'timestamp' => $timestamp,
      'ip' => $ip,
      'sourcePage' => 'customer-support.php'
    ]);

    $text = "CUSTOMER SUPPORT TICKET #{$ticketId}\n"
      . "----------------------------------------\n"
      . "Ticket ID: #{$ticketId}\n"
      . "Name: {$name}\n"
      . "Email: {$email}\n"
      . "Phone: {$phone}\n"
      . "Category: {$category}\n\n"
      . "Description:\n" . ($data['description'] ?? $data['message'] ?? '') . "\n\n"
      . "Submitted: {$timestamp} (IP: {$ip})";

    return ['subject' => $subject, 'html' => $html, 'text' => $text];
  }

  /**
   * Shared Master HTML Wrapper (Responsive, Clean, Table-based for high email client compatibility)
   */
  private static function buildHtmlWrapper(array $config)
  {
    $rowsHtml = '';
    foreach ($config['rows'] as $label => $val) {
      $rowsHtml .= "
                <tr>
                    <td style='padding: 10px 14px; font-size: 13px; font-weight: 600; color: #64748b; background-color: #f8fafc; border-bottom: 1px solid #e2e8f0; width: 35%; vertical-align: top;'>
                        {$label}
                    </td>
                    <td style='padding: 10px 14px; font-size: 14px; color: #0f172a; background-color: #ffffff; border-bottom: 1px solid #e2e8f0; width: 65%;'>
                        {$val}
                    </td>
                </tr>";
    }

    $cleanPhone = preg_replace('/[^0-9]/', '', $config['clientPhone'] ?? '');
    $whatsappLink = $cleanPhone ? "https://wa.me/{$cleanPhone}" : '';

    return "<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title>{$config['title']}</title>
</head>
<body style='margin: 0; padding: 0; background-color: #f1f5f9; font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif; color: #1e293b; line-height: 1.5;'>
  <div style='max-width: 620px; margin: 30px auto; background-color: #ffffff; border-radius: 14px; overflow: hidden; box-shadow: 0 10px 25px rgba(15, 23, 42, 0.08); border: 1px solid #e2e8f0;'>
    
    <!-- Header -->
    <div style='background: {$config['headerGradient']}; padding: 32px 28px; text-align: left;'>
      <div style='display: inline-block; padding: 4px 10px; background-color: {$config['badgeBg']}; color: {$config['badgeColor']}; font-size: 11px; font-weight: 800; letter-spacing: 0.8px; border-radius: 6px; text-transform: uppercase; margin-bottom: 12px;'>
        {$config['badge']}
      </div>
      <h1 style='margin: 0; color: #ffffff; font-size: 24px; font-weight: 800; letter-spacing: -0.5px; line-height: 1.25;'>
        {$config['title']}
      </h1>
      <p style='margin: 8px 0 0 0; color: #cbd5e1; font-size: 13px;'>
        Submitted via Mercora International Web Portal ({$config['sourcePage']})
      </p>
    </div>

    <!-- Main Content Area -->
    <div style='padding: 28px 24px;'>
      
      <!-- Quick Action Buttons -->
      <div style='margin-bottom: 24px; text-align: center;'>
        <a href='mailto:{$config['clientEmail']}?subject=Regarding your enquiry with Mercora International' 
           style='display: inline-block; padding: 10px 18px; margin: 4px; background-color: #0f172a; color: #ffffff; text-decoration: none; border-radius: 8px; font-size: 13px; font-weight: 700; box-shadow: 0 2px 4px rgba(0,0,0,0.1);'>
          ✉ Reply via Email
        </a>
        " . ($config['clientPhone'] ? "
        <a href='tel:{$config['clientPhone']}' 
           style='display: inline-block; padding: 10px 18px; margin: 4px; background-color: #059669; color: #ffffff; text-decoration: none; border-radius: 8px; font-size: 13px; font-weight: 700; box-shadow: 0 2px 4px rgba(0,0,0,0.1);'>
          📞 Call Client
        </a>
        " : "") . "
        " . ($whatsappLink ? "
        <a href='{$whatsappLink}' target='_blank'
           style='display: inline-block; padding: 10px 18px; margin: 4px; background-color: #25d366; color: #ffffff; text-decoration: none; border-radius: 8px; font-size: 13px; font-weight: 700; box-shadow: 0 2px 4px rgba(0,0,0,0.1);'>
          💬 WhatsApp
        </a>
        " : "") . "
      </div>

      <!-- Field Details Table -->
      <table style='width: 100%; border-collapse: separate; border-spacing: 0; border: 1px solid #e2e8f0; border-radius: 10px; overflow: hidden; margin-bottom: 24px;'>
        <tbody>
          {$rowsHtml}
        </tbody>
      </table>

      <!-- Message / Scope Box -->
      <div style='background-color: #f8fafc; border-left: 4px solid {$config['accentColor']}; border-radius: 8px; padding: 16px 18px; margin-bottom: 24px;'>
        <h4 style='margin: 0 0 8px 0; color: #0f172a; font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;'>
          {$config['messageTitle']}
        </h4>
        <div style='font-size: 14px; color: #334155; line-height: 1.6; word-break: break-word;'>
          {$config['messageContent']}
        </div>
      </div>

      <!-- Submitter Technical Metadata -->
      <table style='width: 100%; border-collapse: collapse; font-size: 11px; color: #94a3b8; border-top: 1px dashed #cbd5e1; padding-top: 12px; margin-top: 16px;'>
        <tr>
          <td style='padding-top: 12px;'><strong>Timestamp:</strong> {$config['timestamp']}</td>
        </tr>
      </table>

    </div>

    <!-- Footer -->
    <div style='background-color: #0f172a; color: #94a3b8; padding: 22px 24px; font-size: 11px; line-height: 1.6; text-align: center; border-top: 1px solid #1e293b;'>
      <div style='font-weight: 700; color: #f1f5f9; font-size: 12px; margin-bottom: 4px;'>
        Mercora International
      </div>
      <div>
        DPIIT Recognized (DIPP258473) · Firm Reg. 2978/2025 · MSME UDYAM-TS-02-0265208 · DGFT IEC ACEFM7191A
      </div>
      <div style='margin-top: 6px; color: #64748b;'>
        Botanical Garden Road, Kondapur, Hyderabad – 500084, Telangana, India
      </div>
    </div>

  </div>
</body>
</html>";
  }
}

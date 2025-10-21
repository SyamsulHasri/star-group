@extends('layouts.app')
@push('styles')
    <style>
        header h1{ margin:0 0 6px 0; font-size:1.6rem; }
        header p{ margin:0 0 18px 0; color:var(--muted); }
        section{ margin:18px 0; }
        h2{ color:var(--accent); margin:0 0 8px 0; font-size:1.05rem; }
        p, li{ color:#222; }
        ul{ margin:8px 0 0 1.2rem; }
        .small{ color:var(--muted); font-size:0.92rem; }
        footer{ margin-top:28px; text-align:center; color:var(--muted); font-size:0.9rem; }
        .note { background:#f1f7ff; border-left:4px solid var(--accent); padding:10px 14px; border-radius:6px; margin:12px 0; }
        a{ color:var(--accent); text-decoration:none; }
  </style>
@endpush
@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-1">
                <h3 class="card-header p-3 text-white bg-dark">Privacy Policy:</h3>
                <div class="card-body">
                    <header>
                        <h1 id="policy-title">Privacy Policy</h1>
                        <p class="small">Last updated: <strong>October 20, 2025</strong></p>
                        <p class="small">This Privacy Policy explains how <strong>Star Media Group</strong> ("we", "us", or "our") collects, uses, discloses, and protects personal information when you visit or use our website and services.</p>
                        </header>

                        <section>
                        <h2>1. Information we collect</h2>
                        <p>We collect personal information that you voluntarily provide to us and data automatically collected when you use our services.</p>
                        <ul>
                            <li><strong>Account & contact data:</strong> name, email address, phone number, postal address.</li>
                            <li><strong>Transaction data:</strong> billing details, payment confirmations, purchase history.</li>
                            <li><strong>Technical data:</strong> IP address, device identifiers, browser type, operating system, and usage logs.</li>
                            <li><strong>Marketing & preference data:</strong> communication preferences and opt-in status.</li>
                        </ul>
                        </section>

                        <section>
                        <h2>2. How we use your information</h2>
                        <p>We use your personal data for purposes including:</p>
                        <ul>
                            <li>Providing, operating and improving our services;</li>
                            <li>Processing transactions, billing, and order fulfillment;</li>
                            <li>Communicating about your account, purchases, or support requests;</li>
                            <li>Sending marketing communications (where you’ve consented);</li>
                            <li>Preventing fraud, abuse, and enforcing our Terms of Service;</li>
                            <li>Complying with legal obligations and responding to lawful requests.</li>
                        </ul>
                        <p class="small"><em>Legal bases (for users in the EEA/UK):</em> performance of a contract, legitimate interests, legal obligation, and consent where required.</p>
                        </section>

                        <section>
                        <h2>3. Cookies & similar technologies</h2>
                        <p>We use cookies, web beacons, and similar technologies to collect information about how you use our site and to enhance functionality.</p>
                        <ul>
                            <li><strong>Essential cookies:</strong> required for site operation and security.</li>
                            <li><strong>Performance cookies:</strong> collect anonymous analytics to help us improve functionality.</li>
                            <li><strong>Advertising/targeting cookies:</strong> used to show you relevant ads (with your consent where required).</li>
                        </ul>
                        <p>You can manage or disable cookies through your browser settings. Disabling some cookies may affect site functionality.</p>
                        </section>

                        <section>
                        <h2>4. Sharing & disclosure</h2>
                        <p>We may share your personal data:</p>
                        <ul>
                            <li>With service providers who perform services on our behalf (hosting, payments, analytics, email);</li>
                            <li>When required by law, to respond to legal requests or prevent harm;</li>
                            <li>In connection with a business transaction (sale, merger, financing) — we will notify you where required by law;</li>
                            <li>With your consent or at your direction.</li>
                        </ul>
                        </section>

                        <section>
                        <h2>5. Third-party links & services</h2>
                        <p>Our site may contain links to third-party sites and services (payment gateways, social networks, widgets). This Privacy Policy does not apply to third parties — review their privacy notices before using those services.</p>
                        </section>

                        <section>
                        <h2>6. Data security</h2>
                        <p>We implement reasonable administrative, technical, and physical safeguards designed to protect personal information. No method of transmission or storage is 100% secure — we cannot guarantee absolute security.</p>
                        </section>

                        <section>
                        <h2>7. Data retention</h2>
                        <p>We retain personal information only for as long as necessary to fulfill the purposes described in this policy, comply with legal obligations, resolve disputes, and enforce our agreements.</p>
                        </section>

                        <section>
                        <h2>8. Your rights</h2>
                        <p>Depending on your jurisdiction, you may have rights such as:</p>
                        <ul>
                            <li>Access to the personal data we hold about you;</li>
                            <li>Correction of inaccurate or incomplete data;</li>
                            <li>Deletion (right to be forgotten) in certain circumstances;</li>
                            <li>Restriction or objection to processing;</li>
                            <li>Data portability (receive your data in a structured format);</li>
                            <li>Withdraw consent where processing is based on consent.</li>
                        </ul>
                        <p>To exercise your rights or submit a request, contact us using the details below. We may need to verify your identity before acting on requests.</p>
                        </section>

                        <section>
                        <h2>9. Children’s privacy</h2>
                        <p>Our services are not intended for children under 13 (or higher age if required by local law). We do not knowingly collect personal information from children. If we learn we’ve collected data from a child without parental consent, we will take steps to delete it.</p>
                        </section>

                        <section>
                        <h2>10. International transfers</h2>
                        <p>We may transfer your personal data to countries with different privacy laws. Where required, we implement appropriate safeguards (standard contractual clauses, adequate protections) to protect your data.</p>
                        </section>

                        <section>
                        <h2>11. Changes to this policy</h2>
                        <p>We may update this Privacy Policy from time to time. We will post the updated policy with a new "Last updated" date. Significant changes will be communicated through our website or via direct notice where appropriate.</p>
                        </section>

                        <section>
                        <h2>12. Contact us</h2>
                        <p>If you have questions, requests, or concerns about this policy or our data practices, contact:</p>
                        <div class="note">
                            <p><strong>Star Media Group</strong><br/>
                            Email: <a href="mailto:privacy@yourcompany.com">privacy@yourcompany.com</a><br/>
                            Address: 123 Example Street, City, Country</p>
                        </div>
                        <p class="small">If you are located in the EU/EEA/UK and are not satisfied with our response, you may lodge a complaint with your local supervisory authority.</p>
                        </section>

                        <footer>
                        <p class="small">This page was generated as a template and does not constitute legal advice. Consider consulting a privacy / data protection professional to ensure full compliance with laws that apply to your business (e.g., GDPR, CCPA, PDPA, etc.).</p>
                        </footer>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

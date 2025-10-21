@extends('layouts.app')
@push('styles')
    <style>
        :root{
        --max-width: 980px;
        --accent: #0a66c2;
        --muted: #666;
        --radius: 10px;
        --bg: #f7f9fb;
        }


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
        @media (max-width:640px){
        body{ padding:12px; }
        .container{ padding:20px; }
        }
  </style>
@endpush
@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-1">
                <h3 class="card-header p-3 text-white bg-dark">Terms and Conditions:</h3>
                <div class="card-body">
                    <header>
                        <h1 id="terms-title">Terms and Conditions</h1>
                        <p class="small">Last updated: <strong>October 20, 2025</strong></p>
                        <p class="small">Welcome to <strong>Star Media Group</strong> (“we”, “us”, or “our”). These Terms and Conditions govern your use of our website and services. By accessing or using our site, you agree to be bound by these terms.</p>
                        </header>

                        <section>
                        <h2>1. Acceptance of terms</h2>
                        <p>By using our website or purchasing our products/services, you agree to comply with and be legally bound by these Terms and Conditions, our Privacy Policy, and any other policies or guidelines posted on our site. If you do not agree, please discontinue use immediately.</p>
                        </section>

                        <section>
                        <h2>2. Eligibility</h2>
                        <p>To use our services, you must be at least 18 years old or the legal age of majority in your jurisdiction. By using this site, you represent that you meet this requirement.</p>
                        </section>

                        <section>
                        <h2>3. Account registration</h2>
                        <p>Some services require you to create an account. You agree to:</p>
                        <ul>
                            <li>Provide accurate, current, and complete information;</li>
                            <li>Maintain the confidentiality of your login credentials;</li>
                            <li>Accept responsibility for all activities under your account.</li>
                        </ul>
                        <p>We reserve the right to suspend or terminate your account if we suspect any unauthorized or fraudulent activity.</p>
                        </section>

                        <section>
                        <h2>4. Use of website and services</h2>
                        <p>You agree not to use our website or services for unlawful, harmful, or abusive activities, including but not limited to:</p>
                        <ul>
                            <li>Violating any laws or regulations;</li>
                            <li>Uploading malicious code or interfering with site operations;</li>
                            <li>Impersonating others or providing false information;</li>
                            <li>Engaging in unauthorized data collection or scraping.</li>
                        </ul>
                        </section>

                        <section>
                        <h2>5. Products, pricing & payment</h2>
                        <p>All prices are listed in MYR and are subject to change without notice. We reserve the right to modify or discontinue products or services at any time.</p>
                        <p>Payments must be made through our approved payment methods. By placing an order, you represent that you are authorized to use the chosen payment method.</p>
                        </section>

                        <section>
                        <h2>6. Intellectual property</h2>
                        <p>All content on this website, including text, graphics, logos, images, and software, is the property of Star Media Group or its licensors and is protected by intellectual property laws.</p>
                        <p>You may not reproduce, modify, distribute, or exploit any part of our site or content without our prior written consent.</p>
                        </section>

                        <section>
                        <h2>7. Third-party links</h2>
                        <p>Our website may include links to third-party websites for your convenience. We are not responsible for the content, policies, or practices of third-party sites and do not endorse them.</p>
                        </section>

                        <section>
                        <h2>8. Limitation of liability</h2>
                        <p>To the fullest extent permitted by law, Star Media Group shall not be liable for any indirect, incidental, consequential, or punitive damages arising from your use of or inability to use our site or services.</p>
                        <p>We do not warrant that the site will be error-free, uninterrupted, or free of viruses or harmful components.</p>
                        </section>

                        <section>
                        <h2>9. Indemnification</h2>
                        <p>You agree to indemnify and hold harmless Star Media Group, its affiliates, officers, employees, and agents from any claims, liabilities, damages, and expenses arising out of your use of the website or violation of these Terms.</p>
                        </section>

                        <section>
                        <h2>10. Termination</h2>
                        <p>We reserve the right to suspend or terminate your access to the site at any time, with or without cause or notice, if we believe you have violated these Terms or engaged in harmful activities.</p>
                        </section>

                        <section>
                        <h2>11. Governing law</h2>
                        <p>These Terms are governed by and construed in accordance with the laws of Malaysia, without regard to its conflict of law principles.</p>
                        </section>

                        <section>
                        <h2>12. Changes to terms</h2>
                        <p>We may update these Terms and Conditions at any time. The updated version will be effective once posted on our website, with a revised “Last updated” date. Continued use of our services after changes constitutes acceptance of the revised Terms.</p>
                        </section>

                        <section>
                        <h2>13. Contact us</h2>
                        <p>If you have questions about these Terms and Conditions, contact us:</p>
                        <div class="note">
                            <p><strong>Star Media Group</strong><br/>
                            Email: <a href="mailto:support@yourcompany.com">support@yourcompany.com</a><br/>
                            Address: 123 Example Street, City, Country</p>
                        </div>
                        </section>

                        <footer>
                        <p class="small">This page is a general-purpose Terms & Conditions template. You should customize it to fit your business model and consult a legal professional for full compliance with applicable laws.</p>
                        </footer>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

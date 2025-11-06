@if (Route::is('home') || Route::is('about'))
    @if(!Cookie::has('user_consent') && !Cookie::has('user_decline'))

    @php
        $content = null;
        $term = App\Constants::termCondition();
        $privacy = App\Constants::privacyPolicy();
        $break = App\Constants::NEW_LINE;

        $consent = App\Models\Consent::where('status', 'active')->first();
        if($consent){
                $search = array("{new_line}", "{terms}" ,"{privacy}");
                $replace = array($break , $term , $privacy);

                $content = str_replace($search , $replace , $consent->consent_text);
            }
    @endphp

    <!-- Privacy Consent Modal -->
    <div id="cookieConsentOverlay" 
        class="position-fixed top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center"
        style="background-color: rgba(0, 0, 0, 0.85); z-index: 1055;">

    <div class="modal fade show" id="cookieConsentModal" tabindex="-1"
        aria-labelledby="cookieConsentModalLabel" aria-hidden="true"
        data-bs-backdrop="static" data-bs-keyboard="false" style="display: block;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow-lg border-0">
        <div class="modal-header bg-dark text-white">
            <h5 class="modal-title" id="cookieConsentModalLabel">Privacy Consent</h5>
        </div>
        <div class="modal-body bg-light">
             {!!$content!!}
            {{-- <p>Cookies are necessary for this website to function properly, for performance measurement, and to provide you with the best experience.</p>
            <p>
            By continuing to access or use this site, you acknowledge and consent to our use of cookies in accordance with our
            <a href="{{ url('/terms') }}" target="_blank" class="text-primary text-decoration-underline">Terms & Conditions</a> and
            <a href="{{ url('/privacy-policy') }}" target="_blank" class="text-primary text-decoration-underline">Privacy Statement</a>.
            </p> --}}
        </div>
        <div class="modal-footer bg-light justify-content-between">
            <button type="button" class="btn btn-secondary" id="declineConsent">Decline</button>
            <button type="button" class="btn btn-success" id="acceptConsent">Accept</button>
        </div>
        </div>
    </div>
    </div>
    </div>

    <!-- Disable scroll -->
    <style>
    html, body {
        overflow: hidden !important;
        height: 100%;
    }
    </style>


    <!-- Handle consent logic -->
    <script type="module">
        document.addEventListener('DOMContentLoaded', () => {
            const overlay = document.getElementById('cookieConsentOverlay');
            const acceptBtn = document.getElementById('acceptConsent');
            const declineBtn = document.getElementById('declineConsent');

            // Helper functions
            const enableScroll = () => {
                document.body.style.overflow = '';
                document.documentElement.style.overflow = '';
            };

            const removeOverlay = () => {
                if (overlay) overlay.remove();
            };

            const postData = async (url) => {
                try {
                    await fetch(url, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json',
                        },
                    });
                    enableScroll();
                    removeOverlay();
                    location.reload();
                } catch (error) {
                    console.error('Error submitting consent:', error);
                }
            };

            // Event listeners
            if (acceptBtn) {
                acceptBtn.addEventListener('click', () =>
                    postData('{{ route('consent.accept', $consent->id) }}')
                );
            }

            if (declineBtn) {
                declineBtn.addEventListener('click', () =>
                    postData('{{ route('consent.decline') }}')
                );
            }
        });
    </script>

    @endif
@endif
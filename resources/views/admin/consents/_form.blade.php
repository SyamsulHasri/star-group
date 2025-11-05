<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            {{-- LEGEND INFO --}}
            <div class="card border-0 shadow-sm mb-3">
                <div class="card-header bg-info text-white fw-semibold">
                    <i class="bi bi-info-circle me-2"></i> Legend
                </div>
                <div class="card-body py-3 bg-light">
                    <div class="d-flex flex-column gap-2 small">
                        <div>
                            <span class="text-danger fw-semibold">{new_line}</span>
                            <span class="text-muted">: Creates a new paragraph or line break in the content.</span>
                        </div>
                        <div>
                            <span class="text-danger fw-semibold">{terms}</span>
                            <span class="text-muted">
                                : Refers to the 
                                <a href="{{ route('terms') }}" class="text-decoration-none fw-semibold text-primary">
                                    Terms &amp; Conditions
                                </a>
                                page.
                            </span>
                        </div>
                        <div>
                            <span class="text-danger fw-semibold">{privacy}</span>
                            <span class="text-muted">
                                : Refers to the 
                                <a href="{{ route('privacy') }}" class="text-decoration-none fw-semibold text-primary">
                                    Privacy Policy
                                </a>
                                page.
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="" method="POST" action="{{ $action }}" enctype="multipart/form-data">
                @csrf
                @if ($button == 'update')
                    @method('PUT')
                @endif

                <div class="card shadow-sm">
                    <div class="card-header">
                        Consent form Content
                    </div>
                    <div class="card-body">

                        <div class="row g-3 mb-3">
                            <div class="col-md-12">
                                <label for="input01" class="form-label">Consent Text <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">Consent Text</span>
                                    <textarea class="form-control" name="consent_text" aria-label="Consent text content" rows="5">{{$consent->consent_text ?? null}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="input02" class="form-label">Status <span class="text-danger"></span></label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" name="status" value="active" type="checkbox" role="switch" id="switchCheckDefault">
                                    <label class="form-check-label" for="switchCheckDefault">Active</label>
                                </div>
                            </div>
                        </div>
                            
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('consents.index') }}" class="btn btn-secondary mx-2">Back</a>
                            @if ($button == 'update')
                                <button type="submit" class="btn btn-primary"> Update </button>
                            @else 
                                <button type="submit" class="btn btn-primary">Create</button>
                            @endif
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

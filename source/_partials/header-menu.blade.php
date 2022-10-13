
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="/">Avansel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ $page->selected('documentation') }}" href="/documentation">Documentation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $page->selected('examples') }}" href="/examples">Examples</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $page->selected('partners') }}" href="/partners">Partners</a>
                </li>
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="https://github.com/avansel/viewer" title="Avansel/Viewer on GitHub"><i class="bi bi-github"></i></a>
                </li>
            </ul>
            
        </div>
    </div>
</nav>

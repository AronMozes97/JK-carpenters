<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <b>
            <a class="navbar-brand" href="{{ route('index') }}">
                {{ env('APP_NAME') }}
            </a>
        </b>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        Rólunk
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Műhely
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">
                                Előállítás
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                Összeszerelés
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Dropdown link
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">
                                Referenciák
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                Galéria
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-disabled="true">
                        Elérhetőségek
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

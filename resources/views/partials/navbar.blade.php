<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container">

        <a class="navbar-brand fw-bold"
           href="{{ route('events.index') }}">
            EventFlow
        </a>

        <div class="ms-auto">

            <a
                href="{{ route('events.index') }}"
                class="btn btn-outline-light me-2">

                Évènements

            </a>

            <a
                href="{{ route('events.create') }}"
                class="btn btn-primary me-2">

                Créer

            </a>

            @auth

                <span class="text-white me-3">
                    Bonjour {{ Auth::user()->name }}
                </span>

                <form
                    action="{{ route('logout') }}"
                    method="POST"
                    class="d-inline">

                    @csrf

                    <button class="btn btn-danger">

                        Déconnexion

                    </button>

                </form>

            @else

                <a
                    href="{{ route('login') }}"
                    class="btn btn-success">

                    Connexion

                </a>

            @endauth

        </div>

    </div>

</nav>
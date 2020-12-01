@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @guest
                <section class="left-container">
                    <header>
                        <h1>Seja bem vindo</h1>
                    </header>
                    <h2>Aqui você se conecta de verdade</h2>
                    <p>
                        Conheça o novo website com serviços de chat que está crescendo cada vez
                        mais. Faça já o seu cadastro!
                    </p>

                    @if (Route::has('register'))
                    <button>
                        <a href="{{ route('register') }}">CADASTRE-SE</a>
                    </button>
                    @endif

                    <p>
                        Caso já seja cadastrado, basta fazer login
                    </p>
                    @if (Route::has('login'))
                    <button>
                        <a href="{{ route('login') }}">LOGIN</a>
                    </button>
                    @endif
                    @else
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <button>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </button>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                    @endguest
                </section>
                <aside class="right-container">
                    <img src="img/cel.png" />
                </aside>
            </div>
        </div>
    </div>
</div>
@endsection
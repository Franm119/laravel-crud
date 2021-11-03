<nav class="navbar navbar-light navbar-expand-sm bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home')}}">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}"
            ><span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-pills">
                <li class="nav-item" >
                    <a class="nav-link {{ activelinks('personal.index') }}" 
                        href="{{ route('personal.index')}}">
                        @lang('Personal')
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<nav class="navbar navbar-inverse navbar-expand-lg navbar-light text-dark bg-white shadow-sm mb-5 bg-body rounded">
    <div class="mx-5"></div>
    <div class="navbar-header">
        <span class="open-slide">
            <a href="#" onclick="openSlideMenu()" style="text-decoration: none">
                <svg width="30" height="30">
                    <path d="M0,5 30,5" stroke="#FD876D" stroke-width="5" />
                    <path d="M0,14 30,14" stroke="#FD876D" stroke-width="5" />
                    <path d="M0,23 30,23" stroke="#FD876D" stroke-width="5" />
                </svg>
            </a>
        </span>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="nav-item fs-5">
                <h5 class="textColor mx-3">Mzumbe Course
                    Evaluation system</h5>
            </li>
        </ul>
    </div>
    @if (Auth::guest())
    <ul class="navbar-nav">
        <li class="nav-item mt-2">
            <i class="bi bi-box-arrow-left text-danger"></i>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ '/login'}}">Login</a>
        </li>
        @else
        <li class="nav-item" style="list-style:none">
            {{ Auth::user()->username }}
        </li>
        @endif
        @if (Auth::check())
        <li class="nav-item dropdown text-white" style="list-style:none;margin-right:10%">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">
            </a>
            <ul class="dropdown-menu" style="text-transform:lowercase">
                <a class="dropdown-item" href="{{ url('#') }}">Profile<i class="bi bi-person-square ml-5"></i></a>
                <a class="dropdown-item mt-1" href="#">Setting<i class="bi bi-sliders ml-5"></i></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item mt-1" href="{{ '/logout' }}">Logout<i class="bi bi-box-arrow-left ml-5"></i></a>
                @endif
            </ul>
        </li>
    </ul>
    </div>
</nav>
<div id="side-menu" class="side-nav text-white" style="background-color: #002E3B">
    <img style="width:20px; height:20px" class="shadow rounded-circle mx-2" src="{{ url('assets/images/mucems.jpg') }}">
    <span class="fs-6">{{('MU-CEMS')}}</span>
    <hr class="my-4">
    <ul class="nav navbar-nav" style="text-transform: capitalizes">
        <a href="#" class="btn-close btn-close-white fs-5" onclick="closeSlideMenu()">
            <li class="nav-item pt-2">
                <a class='nav-link text-white text-muted' href="{{ url('#') }}"
                    onclick="toggleEvaluationDropdown(event)">
                    <i class="bi bi-person-workspace text-muted fs-6 m-3"></i>Dashboard</a>
            </li>
            <li class="nav-item">
                <a class='nav-link text-white  text-muted' href="{{ url('/evaluators/create') }}"> <i
                        class="bi bi-pencil-square text-muted fs-6 m-3"></i>Questionnaire</a>
            </li>
            <li class="nav-item">
                <a class='nav-link text-white  text-muted' href="{{ url('/responses') }}"><i
                        class="bi bi-check2-circle text-muted fs-6 m-3"></i>Responses Records</a>
            </li>
        </a>
</div>
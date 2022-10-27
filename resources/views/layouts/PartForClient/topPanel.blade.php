<div class="panel-top-fixed d-flex align-items-center justify-content-between py-2 px-5">
    <a href="/"><p class="darkblue-color font-weight-bold text-nowrap mb-0">Vue Test</p></a>
    <div class="panel-top-items-box">
        <img src="{{asset('/assets/images/notification-icon.svg')}}" alt="svg">
        <div type="button" class="dropdown show user-cabinet dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown">
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Hechkim</a>
                <a class="dropdown-item" href="#">Sozlamalar</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item log-out" :href="{{route('logout')}}">Chiqish</a>
            </div>
        </div>
    </div>
</div>

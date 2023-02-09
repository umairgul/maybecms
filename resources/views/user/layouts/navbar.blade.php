<nav class="navbar bg-base-300">
    <div class="flex-1">
        <a href="{{ route('dashboard') }}" class="btn btn-ghost no-animation normal-case text-xl">Maybe CMS</a>
    </div>
    <div class="flex-none">
        <ul class="menu menu-horizontal px-1">
            <li tabindex="0">
                <a>
                    {{ auth()->user()->name }}
                    <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                        viewBox="0 0 24 24">
                        <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
                    </svg>
                </a>
                <ul class="p-2 bg-base-200 w-full">
                    <li><a>Profile</a></li>
                    <li onclick="document.getElementById('logout-form').submit();">
                        <form action="{{ route('logout') }}" method="POST" id="logout-form">
                            @csrf
                            <a href="#">Logout</a>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

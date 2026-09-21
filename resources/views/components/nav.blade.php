<div class="navbar bg-base-100 shadow-sm">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/>
                </svg>
            </div>
            <ul
                tabindex="-1"
                class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                @auth
                    <li>
                        <form action="/logout" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit">
                                Logout
                            </button>

                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
    <div class="navbar-center">
        <a href="/homepage" class="btn btn-ghost gap-2 font-display text-xl font-semibold tracking-wide text-primary">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M8.25 3v6.75M4.5 3v6.75a3 3 0 003 3v0a3 3 0 003-3V3M8.25 12.75V21m7.5-18v18m0-10.5h3a1.5 1.5 0 001.5-1.5V6a3 3 0 00-4.5-2.6" />
            </svg>
            Mesa 7
        </a>
    </div>
    <div class="navbar-end">
        
    </div>
</div>

<header class="header">
    <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
            <div class="search-inner d-flex align-items-center justify-content-center">
                <div class="close-btn">Close <i class="fa fa-close"></i></div>
                <form id="searchForm" action="#">
                    <div class="form-group">
                        <input type="search" name="search" placeholder="What are you searching for...">
                        <button type="submit" class="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <div class="navbar-header">
                <!-- Navbar Header--><a href="index.html" class="navbar-brand">
                    <div class="brand-text brand-big visible text-uppercase"><strong
                            class="text-primary">Admin</strong><strong>Panel</strong></div>
                    <div class="brand-text brand-sm"><strong class="text-primary">A</strong><strong>P</strong></div>
                </a>
                <!-- Sidebar Toggle Btn-->
                <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
            </div>

            <!-- Log out -->
            <div class="list-inline-item logout">

                <form method="POST" action="{{ route('logout') }}" style=" margin: 0; padding: 0;">
                    @csrf
                    <button type="submit"
                        style=" padding: 8px 5px; font-weight: bold; color: red; outline: none; background-color: transparent; border: none; cursor: pointer; font-size: 1rem; font-family: inherit; transition: background-color 0.15s ease; margin: 0;"
                        onmouseover="this.style.backgroundColor='#000000';"
                        onmouseout="this.style.backgroundColor='transparent';">
                        {{ __('Logout') }} <i class="icon-logout"></i>

                    </button>
                </form>
            </div>
        </div>
        </div>
    </nav>
</header>

<div class="left side-menu">

    <div class="topbar-left">
        <div class="">
            <a  class="logo">
                <h6>Admin Dashboard</h6>
            </a>
        </div>
    </div>

    <div class="sidebar-inner slimscrollleft">
        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>
                
                <li>
                    <a href="{{ route('categories') }}" class="waves-effect"><i
                            class="fa fa-desktop"></i><span>Category</span></a>
                </li>
                <li>
                    <a href="{{ route('items') }}" class="waves-effect"><i
                            class="fa fa-desktop"></i><span>News</span></a>
                </li>
                <li>
                    <a href="/admin/settings" class="waves-effect"><i
                            class="fa fa-desktop"></i><span>Setting</span></a>
                </li>
               
            </ul>
        </div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-responsive-nav-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-responsive-nav-link>
        </form>
        <div class="clearfix"></div>
    </div> 
</div>
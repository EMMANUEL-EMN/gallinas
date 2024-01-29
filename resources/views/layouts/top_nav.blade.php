<div class="flex flex-row justify-between py-2 w-full text-slate-200 bg-slate-950 shadow">
    <div class="p-2 uppercase italic bg-slate-">
       Gallinas Felices
    </div>
    <div class="p-">
        <form action="">
            <input type="text" placeholder="Search" name="" id="" 
            class="w-80 py-2 px-2 rounded focus:outline-none leading-tight shadow text-gray-950">
        </form>
    </div>
    <div class="p-2">
        <i class="fa fa-bell"></i><sup>2</sup>
    </div>
    <div class="p-2">
        <i class="fa fa-envelope"></i><sup>5</sup>
    </div>
    <div class="p-2">
        <div id="profileBtn" class="cursor-pointer relative">
            <i class="fa fa-user-circle text-3"></i> {{ Auth::user()->name }}
        </div>
        <div id="profileMenu" class="bg-slate-900 text-slate-50 absolute w-30 rounded-md shadow-md p-2">
            <div class="p-2">
                <i class="fa fa-user"></i>View Profile
            </div>
            <div class="p-2">
                <i class="fa fa-gear"></i>Profile Settings
            </div>
            <div class="p-2">
                <a href="{{ route('logout') }}"   onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>


<div class="p-3 text-slate-200">
    <ul class="list-style-none">
        <li class="m-3 p-2  @if (Route::current()->getName() == 'home')
            bg-slate-800
            @endif ">
            <a href=""><i class="fa fa-tachometer  "></i> Dashboard</a>
        </li>
        <li class="m-3 p-2">
            <a href=""><i class="fa fa-file"></i> Reports</a>
        </li>
        <li class="m-3 p-2">
            <a href=""><i class="fa fa-table"></i> Poultry Records</a>
        </li>
        <li class="m-3 p-2">
            <div class="p-1 relative cursor-pointer   @if (Route::current()->getName() == 'pages.home')
                bg-slate-800 rounded
                @endif  " id="web_content_btn">
                <i class="fa fa-list"></i> Web Content
            </div>
            <div id="web_content_list" class="p-2 absolute bg-slate-800 w-40 place-content-end">
                <p><a href="">Blogs</a></p>
                <p><a href="{{ route('content.home') }}">Content</a></p>
                <p><a href="{{ route('pages.home') }}">Pages</a></p>
                <p><a href="">Media</a></p>
                <p><a href="">FAQS</a></p>
            </div>
        </li>
        <li class="m-3 p-2">
            <a href=""><i class="fa fa-shopping-cart"></i> Shop</a>
        </li>
        <li class="m-3 p-2">
            <a href=""><i class="fa fa-gear"></i> Settings</a>
        </li>
        <li class="m-3 p-2">
            <a href=""><i class="fa fa-users"></i> Employee Module</a>
        </li>
        <li class="m-3 p-2">
            <a href=""><i class="fa fa-dollar"></i> Finance Management</a>
        </li>
        <li class="m-3 p-2">
            <a href=""><i class="fa fa-tachometer"></i> Learning Hub</a>
        </li>
        <li class="m-3 p-2">
            <a href=""><i class="fa fa-users"></i> Users</a>
        </li>
    </ul>
</div>
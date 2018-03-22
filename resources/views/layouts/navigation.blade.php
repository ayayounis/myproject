<nav class="navbar navbar-default navbar nav navbar-nav inner-nav">
   <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Restaurants <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('add/restaurant') }}">Add Restaurant</a></li>
            </ul>
            </li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Drivers<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('drivers') }}">Overview</a></li>
                <li><a href="{{ url('add/driver') }}">Add Driver</a></li>
            </ul>
            </li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Orders <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('orders') }}">Overview</a></li>
                <li><a href="{{ url('add/order') }}">Add Order</a></li>
            </ul>
            </li>
        </ul>      
    </div><!--/.nav-collapse -->
</nav>
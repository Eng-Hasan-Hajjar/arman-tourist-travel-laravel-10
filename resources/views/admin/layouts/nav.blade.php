
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/adminpannel/sitesitting" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Settings</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Other Settings</p>
                </a>
              </li>

            </ul>
          </li>


          {{-- website --}}


<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-users"></i>
    <p>
    pages of website
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
  <li class="nav-item">
      <a href="{{url('/home')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>home website</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{url('/ShowAllBuilding')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>all estates</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{url('/search')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>search</p>
      </a>
    </li>

  </ul>
</li>



{{-- users --}}


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
               Control all members
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/adminpannel/users/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add user</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/adminpannel/users')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All users</p>
                </a>
              </li>

            </ul>
          </li>




{{-- Arman --}}


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                main Armenia regions
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/adminpanel/arman/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Armenia region</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/adminpanel/arman')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Armenia regions</p>
                </a>
              </li>

            </ul>
          </li>


{{-- Arman Castles --}}


<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-users"></i>
      <p>
         Armenia castles
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{url('/adminpanel/castles/create')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Add Armenia castles</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{url('/adminpanel/castles')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>All Armenia castles</p>
        </a>
      </li>

    </ul>
  </li>

{{-- Arman caves --}}


<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-users"></i>
      <p>
         Armenia caves
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{url('/adminpanel/caves/create')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Add Armenia caves</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{url('/adminpanel/caves')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>All Armenia caves</p>
        </a>
      </li>

    </ul>
  </li>







            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle text-danger"></i>
              <p>
             <!--  {Auth::user()->name}}-->
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">

                 <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

 <form id="logout-form"  action="{{ route('logout') }}" method="POST" >
                                        @csrf
                                    </form>



                </a>
              </li>


            </ul>
          </li>

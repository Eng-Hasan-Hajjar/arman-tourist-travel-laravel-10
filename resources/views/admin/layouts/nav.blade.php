
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

{{-- Arman churches --}}


<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-users"></i>
      <p>
         Armenia churches
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{url('/adminpanel/churches/create')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Add Armenia churches</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{url('/adminpanel/churches')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>All Armenia churches</p>
        </a>
      </li>

    </ul>
  </li>

{{-- Arman forests --}}


<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-users"></i>
      <p>
         Armenia forests
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{url('/adminpanel/forests/create')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Add Armenia forests</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{url('/adminpanel/forests')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>All Armenia forests</p>
        </a>
      </li>

    </ul>
  </li>


{{-- Arman gardens --}}


<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-users"></i>
      <p>
         Armenia gardens
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{url('/adminpanel/gardens/create')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Add Armenia gardens</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{url('/adminpanel/gardens')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>All Armenia gardens</p>
        </a>
      </li>

    </ul>
  </li>


{{-- Arman lakes --}}


<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-users"></i>
      <p>
         Armenia lakes
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{url('/adminpanel/lakes/create')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Add Armenia lakes</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{url('/adminpanel/lakes')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>All Armenia lakes</p>
        </a>
      </li>

    </ul>
  </li>

{{-- Arman malls --}}


<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-users"></i>
      <p>
         Armenia malls
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{url('/adminpanel/malls/create')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Add Armenia malls</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{url('/adminpanel/malls')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>All Armenia malls</p>
        </a>
      </li>

    </ul>
  </li>

{{-- Arman mountains --}}


<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-users"></i>
      <p>
         Armenia mountains
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{url('/adminpanel/mountains/create')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Add Armenia mountains</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{url('/adminpanel/mountains')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>All Armenia mountains</p>
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

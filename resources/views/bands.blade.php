<div class="slidecontainer mt-100px">
    <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
    <div class="card">
        <span class="ml-3 font-weight-bold">FILTER:</span>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              SORT BY: <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item">Low To High</a></li>
              <li><a class="dropdown-item">High To Low</a></li>
              <li><a class="dropdown-item">Most Popular</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              GENDER <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item">MEN</a></li>
              <li><a class="dropdown-item">WOMEN</a></li>
            </ul>
          </li>
          <table class="table table-striped table-bordered">
        <thead class="thead-dark">
        <tr class="sticky-top">
            <th>prod_sku</th>
            <th>prod_live_url</th>
            <th>prod_name</th>
            <th>prod_long_desc</th>
        </tr>
        @foreach ($bands as $band)
        <tr>
            <td>
                {{ $band->prod_sku}}
            </td>
            <td>
                {{$band->prod_Live_URl}}     
                    
            </td>
            <td>
                <span>{{ $band->prod_name }}</span>
            </td>
            <td>
                <span>{{ $band->prod_long_desc }}</span>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
</div>
  
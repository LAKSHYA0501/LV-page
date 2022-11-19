@extends('master')
<div class="slidecontainer">
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
          
          {{-- @foreach($data as $d=>$c)
          @dd($data)
          <h2>{{$d}}</h2>
          <h2>{{$c}}</h2>
          @endforeach --}}
    </div>
</div>
  
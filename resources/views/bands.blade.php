@extends('master')
<div class="main">
           <section class="dropcontainer">
                <span class=" font-weight-bold"><H1>FILTER</H1></span>
                <div class="slidecontainer">
                    <label for="range" class="card">PRICE RANGE</label>
                    <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                </div><br><br>

                <div class="dropdown">
                    <select name="one" class="dropdown-select">
                    <option value="">GENDER</option>
                    <option value="mens" ><a href="{{ route('bands.men') }}">MAN</a></option>
                    <option value="womans"><a href="{{ route('bands.women') }}">WOMEN </a></option>

                    </select>
                </div>
                    
                <div class="dropdown dropdown-dark">
                    <select name="two" class="dropdown-select">
                    <option value="">SORT BY:</option>
                    <option value="1">Low To High</option>
                    <option value="2">High To Low</option>
                    <option value="3">Most Popular</option>
                    </select>
                </div>

                <div class="dropdown dropdown-dark">
                    <select name="two" class="dropdown-select">
                    <option value="">DIAMOND</option>
                    <option value="1">EMERALD</option>
                    <option value="2">OVAL</option>
                    <option value="3">PEAR</option>
                    <option value="4">ROUND</option>
                    </select>
                </div>

                <div class="dropdown ">
                    <select name="two" class="dropdown-select">
                    <option value="">METAL</option>
                    <option value="1">PLATINUM</option>
                    <option value="2">ROSE GOLD</option>
                    <option value="3">TITANIUM</option>
                    <option value="4">WHITE GOLD</option>
                    <option value="5">YELLOW GOLD</option>
                    <option value="6">ZIRCONIUM</option>
                    </select>
                </div>
            </section>

    
    <div>
        @foreach ($bands as $band)
        <div class="cards">
            <div class="image">
                {{-- <img src="{{ asset($band->attr_whitegold_platinum_round_default_img) }}" /> --}}
                <img src="{{$band->attr_whitegold_platinum_round_default_img}}".jpeg alt={{$band->attr_whitegold_platinum_round_default_img}}/>
            </div>
            <div class="title">
                <span>{{ $band->prod_name}}
            </div>
        </div>
    @endforeach
    </div>
</div>

  
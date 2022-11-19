@extends('master')
<div class="slidecontainer">
    <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
    <div class="card">
        <span class=" font-weight-bold"><H1>FILTER:</H1></span>

            <section class="dropcontainer">
                <div class="dropdown">
                    <select name="one" class="dropdown-select">
                    <option value="">GENDER</option>
                    <option value="mans" ><a href="{{ route('bands.man') }}">MAN</a></option>
                    <option value="womans" href="{{ route('bands.woman') }}">WOMEN </option>
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
            </section>
    </div>
    <div>
</div>
<div>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr class="sticky-top">
                <th>prod_sku</th>
                <th>prod_type</th>
                <th>prod_long_desc</th>
                <th>prodmeta_section</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($bands as $band)
        <tr>
            <td>
                {{ $band->prod_sku}}
            </td>
            <td>
                {{$band->prod_type}}     
                    
            </td>
            <td>
                <span>{{ $band->prod_long_desc }}</span>
            </td>
            <td>
                <span>{{ $band->prodmeta_section }}</span>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
  
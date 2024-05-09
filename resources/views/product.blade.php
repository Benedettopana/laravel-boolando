
@extends('layout.main');

<div class="container-xl ">
  <div class="row row-cols-4 justify-content-center align-content-center  my-5">
    @foreach($products as $item)
        <div class="col prodotto">
    <!-- img nascosta -->

    <img class="nascosta" src="{{$item["backImage"]}}" alt="{{ $item['id']}}">

    <!-- cuore -->
    <div class="cuore">
      <span>&hearts;</span>
    </div>
    <div class="sconto">prova</div>
    <!-- img in primo piano -->
    <img src="{{$item['frontImage']}}" alt="{{ $item['id']}}">
    <span class="marca">{{ $item['brand']}}</span>
    <h4 class="nome">{{ $item['name']}}</h4>
    <span class="marca prezzo">{{ $item['price']}}</span>
    <span class="marca prezzo originale">184,99</span>
    </div>
  @endforeach

  </div>
</div>



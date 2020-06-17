@extends('main')
 
@section('title', 'Home')

@section('content')

@if(session()->has('result'))
    <p>{{session()->get('result')}}</p>
@endif


<table class="banner-home">
        <tr>
            <th>Cafe</th>
            <th>Cafe</th>

        </tr>
        <tr>

        </tr>
</table>


<div class="main-coll-news">
        <table class="bannernxtlvl">
            <tr>
                <th>
                    <h1>Our delivery is open!</h1>   
                </th>
            </tr>
        </table>
</div>

<table class="banner-home">
        <tr>
            <th>Cafe</th>
            <th>Cafe</th>

        </tr>
        <tr>

        </tr>
</table>

<main id="main" class="rcb">
            <div class="rcb-cmp-list">
                <div class="rcb-cmp-item">
                    <div class="rcb-cmp-item-cnt">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/14/71/ab/ad/terase.jpg" id="proz" alt="Something went wrong" />
                        <table class="sostav">
                            <tr>
                                <th>Novembra iela 8</th>
                                <th></th>
                            </tr>
                            <tr>
                                <th>+371234567</a</th>
                                <th></th>
                            </tr>
                        </table>

                        <div class="product-name">Cafe "Premium"</div>
                        <br />

                    </div>
                </div>
                <div class="rcb-cmp-item">
                    <div class="rcb-cmp-item-cnt">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/13/80/5e/6f/getlstd-property-photo.jpg" id="proz" alt="Something went wrong" />
                        <table class="sostav">
                            <tr>
                                <th>Rigas iela 17-b</th>
                                <th></th>
                            </tr>
                            <tr>
                                <th>+371256789</th>
                                <th></th>
                            </tr>
                        </table>

                        <div class="product-name">Cafe "Classic"</div>
                        <br />

                    </div>
                </div>
                <div class="rcb-cmp-item">
                    <div class="rcb-cmp-item-cnt">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/0d/dd/98/1a/cafe-csiga.jpg" id="proz" alt="Something went wrong" />
                        <table class="sostav">
                            <tr>
                                <th>Majas iela 54</th>
                                <th></th>
                            </tr>
                            <tr>
                                <th>+371223344</th>
                                <th></th>
                            </tr>          
                        </table>

                        <div class="product-name">Cafe "Orbital"</div>
                        <br />

                    </div>
                </div>
            </div>
      </main>

@endsection
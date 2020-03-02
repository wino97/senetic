@extends('layouts.app')
@section('content')
@include('modals/contact_form')
<div class="container-fluid">
    <div id="start" class="row justify-content-center">
        <div class="container">
            <div class="col-md-12 text-center mt-5">
                <h1 class="white bold">Wybierz odpowiedni pakiet dla Ciebie</h1>
                <h5 class="mt-3 white bold">Subskrypcja pakietu szkoleniowego</h5>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-4 text-center">
                    <label class="switch rounded-pill">
                        <input type="checkbox" checked>
                        <span class="switch-left">Miesięcznie</span>
                        <span class="switch-right">Rocznie</span>
                      </label>
                </div>
            </div>
            <div class="row justify-content-center mt-5 pt-5">
                <div class="pricing-table col-md-3 text-center m-3 p-3">
                    <h4 class="title">Basic</h4>
                    <span class="price month">$0</span><br><span class="saving">&nbsp;</span>
                    <table class="description table text-center">
                        <tr><th>Zawiera:</th></tr>
                        <tr><td>1 Projekt</td></tr>
                        <tr><td>1 Uczestnik</td></tr>
                        <tr><td class="disabled">Dodatkowe materiały</td></tr>
                        <tr><td class="disabled">Sesje Q&A</td></tr>
                    </table>
                    <button type="button" class="btn btn-primary col-md-10 schedule" data-toggle="modal" data-target="#contactFormModal" data-plan="Basic 0/mc">Zapisz się</button>
                    <button type="button" class="btn btn-primary col-md-10 schedule hidden" data-toggle="modal" data-target="#contactFormModal" data-plan="Basic 0/rok">Zapisz się</button>
                </div>
                <div class="pricing-table col-md-3 text-center m-3 p-3 recommended">
                    <h4 class="title">Standard</h4>
                    <span class="price month">$39</span><br><span class="saving">Oszczędasz 25% płacąc za rok</span>
                    <table class="description table text-center">
                        <tr><th>Wszystko z Basic, plus:</th></tr>
                        <tr><td>100 Projekt</td></tr>
                        <tr><td>5 Uczestnik</td></tr>
                        <tr><td>Dodatkowe materiały</td></tr>
                        <tr><td class="disabled">Sesje Q&A</td></tr>
                    </table>
                    <button type="button" class="btn btn-primary col-md-10 schedule" data-toggle="modal" data-target="#contactFormModal" data-plan="Standard $39/mc">Zapisz się</button>
                    <button type="button" class="btn btn-primary col-md-10 schedule hidden" data-toggle="modal" data-target="#contactFormModal" data-plan="Standard $351/rok">Zapisz się</button>
                </div>
                <div class="pricing-table col-md-3 text-center m-3 p-3">
                    <h4 class="title">Ultimate</h4>
                    <span class="price month">$99</span><br><span class="saving">Oszczędasz 35% płacąc za rok</span>
                    <table class="description table text-center">
                        <tr><th>Wszystko z Basic, plus:</th></tr>
                        <tr><td>500 Projekt</td></tr>
                        <tr><td>100 Uczestnik</td></tr>
                        <tr><td>Dodatkowe materiały</td></tr>
                        <tr><td>Sesje Q&A</td></tr>
                    </table>
                    <button type="button" class="btn btn-primary col-md-10 schedule" data-toggle="modal" data-target="#contactFormModal" data-plan="Ultimate $99/mc">Zapisz się</button>
                    <button type="button" class="btn btn-primary col-md-10 schedule hidden" data-toggle="modal" data-target="#contactFormModal" data-plan="Ultimate $772/rok">Zapisz się</button>
                </div>
            </div>
        </div>
    </div>
    <div id="offer" class="row mt-5">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12 ml-4">
                    <h4 class="f24 bold">Co oferujemy</h4>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Wykłady ze specjalistami</li>
                        <li class="list-group-item">Ćwiczenia z eksperatmi</li>
                        <li class="list-group-item">Darmowa kawa</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Darmowa kawa</li>
                        <li class="list-group-item">Wykłady ze specjalistami</li>
                        <li class="list-group-item">Ćwiczenia z eksperatmi</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Ćwiczenia z eksperatmi</li>
                        <li class="list-group-item">Darmowa kawa</li>
                        <li class="list-group-item">Wykłady ze specjalistami</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="reviews" class="row mt-5 pt-5">
        <div class="container">
            <div class="col-md-12 text-center">
                <h5 class="bold">OPINIE</h5>
                <h4 class="bold">Prawdziwe opinie prawdziwich uczestników</h4>
            </div>
            <div class="row bg-carousel-container mt-5">
                <div class="col-md-12 col-lg-6 bg-carousel-item">
                    <div class="row reviews">
                        <div class="col-md-4 review-avatar">
                            <img src="{{ asset('storage/Avatar1.png') }}" alt="logo">
                        </div>
                        <div class="col-md-8 review-text p-4">
                            <p>Szkolenie było niesamowicie niesamowite. Niesamowita atmosfera, niesamowici ludzie, po prostu ekstra!</p>
                            <h4 class="f32">Anna Kowalska</h4>
                            <h5 class="f18 grey">Grafik</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 bg-carousel-item">
                    <div class="row reviews">
                        <div class="col-md-4 review-avatar">
                            <img src="{{ asset('storage/Avatar2.png') }}" alt="logo">
                        </div>
                        <div class="col-md-8 review-text p-4">
                            <p>Szkolenia oceniam na plus. Plusem były same wartości dodane. Sumarycznie wyszło super!</p>
                            <h4>Jan Nowak</h4>
                            <h5>Developer</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="join" class="row mt-5">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-md-10">
                    <h2 class="f30 bold">Dołącz do naszego szkolenia</h2>
                    <h3 class="f24 bold">Zapisz się już dziś! Masz 14 dni na rezygnację bez przyczyny!</h3>
                </div>
                <div class="col-md-2 d-flex pr-0">
                    <a class="btn btn-primary mt-auto ml-auto" href="#start">Chcę dołączyć!</a>
                </div>
            </div>
        </div>
    </div>
    <div id="faq" class="row mt-5">
        <div class="container">
            <div class="col-md-12 text-center">
                <h2 class="f30 bold">Często zadawane pytania</h2>
            </div>
            <div class="row d-flex justify-content-center">
                <ul class="col-md-8 list-group list-group-flush">
                    <li class="list-group-item accordion-switch">
                        <div class="col-md-10">
                            <h5 class="f18 bold">Jak długo trwa szkolenie?</h5>
                            <p class="accordion-content">Szkolenie trwa tak długo jak jest to potrzebne. Może trwać miesiąc, może dwa, a może i dwa lata.</p>
                        </div>
                    </li>
                    <li class="list-group-item accordion-switch">
                        <div class="col-md-10">
                            <h5 class="f18 bold">Czy można płatność rozłozłożyć na raty?</h5>
                            <p class="accordion-content">Istnieje możliwość płatności w ratach. Preferujemy jedną ratę, ale dajemy możliwość płatności również w 12 ratach przy płatności miesięcznej.</p>
                        </div>
                    </li>
                    <li class="list-group-item accordion-switch">
                        <div class="col-md-10">
                            <h5 class="f18 bold">Czy po szkoleniu otrzymuję certyfikat?</h5>
                            <p class="accordion-content">Tak, po zakończeniu szkolenia i poprawnym rozwiązaniu 38 testów potwierdzających kwalifikacje wystawiamy certyfikat.</p>
                        </div>
                    </li>
                    <li class="list-group-item accordion-switch">
                        <div class="col-md-10">
                            <h5 class="f18 bold">Czy można przerwać szkolenie?</h5>
                            <p class="accordion-content">Nie, szkolenia nie można przerwać w trakcie jego trwania i dołączyć później. Do szkolenia można będzie dołączyć ponownie od zajęć na których się przerwało w kolejnym miesiącu.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
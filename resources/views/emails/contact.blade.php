<p>Dzień dobry {{ $data['name']}} {{$data['lastname']}},</p>
<p>To jest automatyczny email informujący o wysłaniu zapytania z formularza na stronie.</p>
<p>Poniżej możesz zobaczyć wprowadzone przez siebie dane:</p>
<p>Imię i nazwisko: {{ $data['name']}} {{$data['lastname']}}</p>
<p>Email: {{ $data['email']}}</p>
<p>Wybrany pakiet: {{ $data['plan']}}</p>
<div class="modal fade" id="contactFormModal" tabindex="-1" role="dialog" aria-labelledby="contactFormModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Formularz kontaktowy</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="contactForm" method="POST" action="{{ route('save') }}">
            @csrf
            <div class="form-group form-inline">
                <label class="col-form-label text-center col-md-12">Imię i nazwisko</label>
                <input type="text" class="form-control col-md-6" name="name" placeholder="Podaj imię" required>
                <input type="text" class="form-control col-md-6" name="lastname" placeholder="Podaj Nazwisko" required>
                <label class="col-form-label text-center col-md-12">Email</label>
                <input type="text" class="form-control col-md-12" name="email" placeholder="Podaj adres email" required>
            </div>
            <div class="form-group form-inline">
                <label class="col-form-label text-center col-md-12">Wybrany pakiet</label>
                <input type="text" class="form-control col-md-12" name="plan" readonly>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
          <input type="submit" form="contactForm" class="btn btn-primary" value="Wyślij">
        </div>
      </div>
    </div>
  </div>
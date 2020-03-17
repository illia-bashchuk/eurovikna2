<div class="container-fluid">
    <div class="row footer-screen-background py-4  justify-content-center">
        <div class="noise">
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-5  my-auto text-center">

                <img class="shadow lazyload footerQr" data-src="{{ url('public/img/footerQr.png') }}" alt="Qr код">

        </div>
        <div class="col-12 col-md-5 col-lg-4 col-xl-4  form_wrapper p-3 my-5">
            <div class="sub-sub-header text-center">
                Залиште заявку на замір!
            </div>
            <div class="list-of-properties text-center">
                Виклик замірщика - безкоштовно!
            </div>
            <form action="./php/handler.php" enctype="multipart/form-data" method="post"
                class="was-validated form-reset">
                <div class="form-group col list-of-properties">
                    <label for="formGroupExampleInput">Введіть ім'я</label>
                    <input name="name" type="text" required="required" class="form-control"
                        id="formGroupExampleInput" maxlength="18" minlength="3">
                    <div class="valid-feedback">
                        Ім'я введено!
                    </div>
                    <div class="invalid-feedback">
                        Ім'я не введено.
                    </div>
                </div>
                <div class="form-group col list-of-properties">
                    <label for="formGroupExampleInput2">
                        Введіть номер телефону<br>
                        Наш менеджер Вам передзвонить
                    </label>
                    <input name="phone" type="tel" required="required" class="form-control"
                        id="formGroupExampleInput2" pattern="[\+]\d{2}\d{3}\d{7}" data-mask="+380000000000"
                        maxlength="18" title="Не правильний формат вводу">
                    <div class="valid-feedback">
                        Номер введено правильно!
                    </div>
                    <div class="invalid-feedback">
                        Формат вводу: +380672766687
                    </div>
                </div>
                <div class="form-group col">
                    <div class="field_input footer-btn ">
                        <input type="submit" data-action="thanks" data-url="" data-amount="0"
                            value="@lang('messages.btn-forma')">
                    </div>
                </div>
                <div class="list-of-properties col">
                    Ми не передаємо Вашу персональну інформацію третім особам.
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row text-center">
        <div class="col-12 col-md-4 logo_img">
            <img class="img-fluid lazyload" data-src="{{ url('public/img/200x0/e1269f3c19f739f6a292c69fa48a5a69.png') }}"
                alt="Євровікна">
        </div>
        <div class="col-12 col-md-4 address-and-ua">

            <div class="policy">
                <!-- Button trigger modal -->
                <button type="button" class="btn my-locality-btn my-text-shadow btn-lg " data-toggle="modal" data-target="#policyModal">
                    @lang('messages.roztashuvania')
                </button>

            </div>
        </div>
        <div class="col-12 col-md-4 phone-and-address">
            <div class="phone-1">
                <a href="tel:(067) 276-66-87">+38067-276-66-87<br></a>
                <a href="tel:(067) 276-46-59">+38067-276-46-59<br></a>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade " id="policyModal" tabindex="-1" role="dialog" aria-labelledby="policyModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="policyModalLabel">@lang('messages.roztashuvania')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="lazyload embed-responsive-item"
                            data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2259.527617938853!2d28.111410893105g848!3d49.03191428357094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4732a2bd6133296b%3A0xb349e5b9f4082ba2!2z0ITQstGA0L7QstGW0LrQvdCw!5e0!3m2!1suk!2sua!4v1503087053806">
                        </iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

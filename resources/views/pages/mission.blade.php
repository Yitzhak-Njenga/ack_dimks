@extends('layout.main')
@section('content')
    <div class="container-fluid mt-5 pt-3" xmlns="http://www.w3.org/1999/html">
        <div class="container">
            <div class="row">

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button btn btn-primary col-lg-12"type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h6 class="text-uppercase font-weight-bold mb-3 "><img class="img-fluid"  src="./img/target_3138297.png" style="width: 40px; height: 40px" > Mission</h6>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse shadow collapse show" data-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>To develop a Diocese that is committed to the work of God and empowers the community to grow holistically using the available resources.</strong>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed col-lg-12 btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h6 class="text-uppercase font-weight-bold mb-3"><img class="img-fluid"  src="./img/icons8-vision-64.png" style="width: 40px; height: 40px" >
                                    Vision</h6>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse shadow collapse" data-parent="#accordionExample">
                            <div class="accordion-body btn btn-light">
                                <strong>A strong, dynamic, resourceful, self-sustaining diocese that is grounded and boldly proclaiming Jesus Christ through the word of God</strong>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed shadow col-lg-12 btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h6 class="text-uppercase font-weight-bold mb-3"><img class="img-fluid"  src="./img/icons8-morale-50.png"style="width: 40px; height: 40px" >
                                    Core Values</h6>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-parent="#accordionExample">
                            <div class="accordion-body text-center">
                                Integrity and transparency<br>
                                Hard work and professionalism<br>
                                Love and compassion<br>
                                Teamwork and Unity<br>
                                Holiness and sound doctrine<br>
                                Humility and respect<br>
                                Discipline and commitment<br>
                                Accountability and diligence<br>
                                Stewardship<br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

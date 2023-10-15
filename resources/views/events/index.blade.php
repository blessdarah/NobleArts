<x-guest-layout>
    <x-page-header title="Upcoming events" />

    <div class="history-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="history-content-style2 pr-15">
                        <div class="history-title">
                            <span>Events</span>
                            <h2>Follow the fun and join us</h2>
                        </div>
                        <div class="row scrollmenu">
                            @foreach ($events as $event)
                                <div class="history-box">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3 col-sm-4">
                                            <div class="card-left-content">
                                                <h4>Since</h4>
                                                <span>1950 - 1957</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-sm-8">
                                            <div class="card-right-content">
                                                <h3>Drema Movie</h3>
                                                <p>But I must explain to you how all this mistaken ienouncing pleasure
                                                    and
                                                    praising pain was born you a complete</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="history-img-content-style2">
                        <img src="assets/images/history/history-img-2.jpg" alt="Image">
                        <div class="small-img">
                            <img src="assets/images/history/history-img-3.png" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>


<div style="background-color: black; height: 80px">
</div>
<div class="container">
    <div style="margin: 100px 0 100px 0;">
        <h2 class="display-2">Checkout</h2>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm12">
            <img src='<?= BASE_URL ?>/frontend/wp-content/uploads/2020/02/574784-PLQEH5-409-scaled-1.jpg' />
        </div>
        
        <div class="col-lg-8 col-md-8 col-sm12">
            <div class="row" style="margin: 24px">
                <div class="col-lg-6 col-md-6 col-sm12">
                    <label><?= $checkout->events[0]->category->name ?></label>
                    <h5><?= $checkout->events[0]->name ?></h5>
                </div>
                <div class="col-lg-6 col-md-6 col-sm12">
                    <label>VENUE</label>
                    <p><?= $checkout->events[0]->city->name ?>, <?= $checkout->events[0]->country->name ?></p>
                </div>
            </div>
            <div class="row" style="margin: 24px">
                <div class="col-lg-6 col-md-6 col-sm12">
                    <div><label>DATE</label></div>
                    <?= date("jS F Y", strtotime($checkout->events[0]->_joinData->date_from)) ?>
                </div>
                <div class="col-lg-6 col-md-6 col-sm12">
                    <div><label>HOUR</label></div>
                    <?= $checkout->events[0]->_joinData->time->format('H:i:s A') ?>
                </div>
            </div>
            <hr>
            <div class="row" style="margin: 24px">
                <div class="col-lg-4 col-md-4 col-sm12">
                    <div><label>TICKET</label></div>
                    <?= $checkout->name ?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm12">
                    <div><label>TOTAL TICKETS/SEATS</label></div>
                    <?= $selectedSeatsNumber ?> Ticket(s)
                </div>
                <div class="col-lg-4 col-md-4 col-sm12">
                    <div><label>PRICE</label></div>
                    <?= $totalPrice ?>
                </div>
            </div>
            <hr>
            <div class="row" style="margin: 24px">
                <div class="col-lg-6 col-md-6 col-sm12">
                    <h5>Total</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-sm12">
                    <h5><?= $totalPrice ?></h5>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm12">

        </div>
        <div class="col-lg-6 col-md-6 col-sm12">
            
        </div>
    </div>
    <p class="lead">
        <a class="btn btn-primary btn-sm" href="#" role="button">CONFIRM AND PAY</a>
    </p>
</div>
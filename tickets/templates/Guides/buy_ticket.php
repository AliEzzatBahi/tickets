<div id="eventshow" class="slideshow">
    <div id="siderwidth" class="slides" style="background-image:url(<?= BASE_URL ?>/frontend/wp-content/uploads/2020/01/circus-828680_1920.jpg);">
        <div class="banner-fixed">
            <div class="container">
                <div class="banner-content">
                    <div class="content">
                        <div class="banner-tagline text-center">
                            <h1><?= $ticketType->events[0]->name ?></h1>
                            <ul class="gt-information">
                                <li><i class="fa fa-clock-o"></i><span><?= date("jS F Y", strtotime($ticketType->events[0]->_joinData->date_from)) ?></span> </li>
                                <li><i class="fa fa-map-marker"></i><span><?= $ticketType->events[0]->city->name ?>, <?= $ticketType->events[0]->country->name ?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container countdown-tab" id="event-display">
            <div class="countdown">
                <div class="counter-sec text-center">
                    <div class="countdown-btn full-width"><a class="btn btn-lg btn-danger js-target-scroll" href="#event-data">Book now</a></div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
        var endDate = "February 12, 2020";
        //alert(endDate);
        $('.countdown1.styled1').countdown({
            date: endDate,
            render: function(data) {
                if (this.leadingZeros(data.years, 2) == 0) {
                    $(this.el).html("<div class='countdown-amount'>" + this.leadingZeros(data.days, 2) +
                        " <span class='countdown-period'>Days</span></div><div class='countdown-amount'>" +
                        this.leadingZeros(data.hours, 2) +
                        " <span class='countdown-period'>Hours</span></div><div class='countdown-amount'>" +
                        this.leadingZeros(data.min, 2) +
                        " <span class='countdown-period'>Minutes</span></div><div class='countdown-amount'>" +
                        this.leadingZeros(data.sec, 2) +
                        " <span class='countdown-period'>Seconds</span></div>");
                } else {
                    $(this.el).html("<div class='countdown-amount'>" + this.leadingZeros(data.years, 2) +
                        " <span class='countdown-period'>Years</span></div><div class='countdown-amount'>" +
                        this.leadingZeros(data.days, 2) +
                        " <span class='countdown-period'>Days</span></div><div class='countdown-amount'>" +
                        this.leadingZeros(data.hours, 2) +
                        " <span class='countdown-period'>Hours</span></div><div class='countdown-amount'>" +
                        this.leadingZeros(data.min, 2) +
                        " <span class='countdown-period'>Minutes</span></div><div class='countdown-amount'>" +
                        this.leadingZeros(data.sec, 2) +
                        " <span class='countdown-period'>Seconds</span></div>");
                }
            }
        });
        </script>
    </div>
</div>


<div class="container" id="event-data">
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <form action="http://php.webmasterdriver.net/beevent/wp-comments-post.php" method="post"
                id="commentform" class="comment-form" novalidate>
                <h5><?= $ticketType->name ?></h5>
                <p><?= $ticketType->description ?></p>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                        <label for="seats-number">Choose a seats number:</label>
                        <select name="seats-number" id="seats-number">
                            <?php
                                for($i=$ticketType->events[0]->_joinData->min_seats_number; $i<=$ticketType->events[0]->_joinData->max_seats_number; $i++){
                            ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                        <input id="get-total-price" type="hidden" value="<?= $ticketType->events[0]->_joinData->price ?>">

                        <label for="seats-number">Total Price:</label>
                        <input id="total-price" class="form-control" name="total-price" type="text" value="<?= $ticketType->events[0]->_joinData->price ?> EGP" disabled/>
                    </div>
                </div>
                <a class="btn btn-sm btn-danger js-target-scroll" href="<?= BASE_URL ?>/guides/checkout">Buy Now</a>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        // Change total price when change seats number
        $("#seats-number").change(function(){
            $("#total-price").val($("#get-total-price").val() * $("#seats-number").val() + " EGP")
        })
    })
</script>
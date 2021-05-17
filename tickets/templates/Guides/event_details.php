<div id="eventshow" class="slideshow">
    <div id="siderwidth" class="slides" style="background-image:url(<?= BASE_URL ?>/frontend/wp-content/uploads/2020/01/circus-828680_1920.jpg);">
        <div class="banner-fixed">
            <div class="container">
                <div class="banner-content">
                    <div class="content">
                        <div class="banner-tagline text-center">
                            <h1><?= $event->name ?></h1>
                            <ul class="gt-information">
                                <li><i class="fa fa-clock-o"></i><span><?= date("jS F Y", strtotime($event->ticket_types[0]->_joinData->date_from)) ?></span> </li>
                                <li><i class="fa fa-map-marker"></i><span><?= $event->city->name ?>, <?= $event->country->name ?></span></li>
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
            <div class="event_detail">
                <div class="content-box-module">
                    <div class="content-box-module-detail">
                        <ul class="gt-event-tabs gt-nav" role="tablist">
                            <li class="active">
                                <a data-toggle="tab" class="" href="#gt-event-tab-0" role="tab" aria-controls="gt-event-tab-1" aria-selected="true">About</a>
                            </li>
                            <li class="ticket">
                                <a data-toggle="tab" href="#gt-event-tab-3" role="tab" aria-controls="gt-event-tab-3" aria-selected="true">Tickets</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#gt-event-tab-4" role="tab" aria-controls="gt-event-tab-4" aria-selected="true">Venue</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#gt-event-tab-5" role="tab" aria-controls="gt-event-tab-7" aria-selected="true">Photos</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#gt-event-tab-6" role="tab" aria-controls="gt-event-tab-7" aria-selected="true">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active in fade" id="gt-event-tab-0" role="tabpanel"
                            aria-labelledby="nav-gt-event-tab-1-tab">
                            <div class="content_eve">
                                <div class="content-box_body content_data">
                                    <div data-elementor-type="wp-post" data-elementor-id="2332" class="elementor elementor-2332" data-elementor-settings="[]">
                                        <div class="elementor-inner">
                                            <div class="elementor-section-wrap">
                                                <section
                                                    class="elementor-section elementor-top-section elementor-element elementor-element-74bdb0b circus-blog elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="74bdb0b" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-59fb9f0"
                                                                data-id="59fb9f0" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <section
                                                                            class="elementor-section elementor-inner-section elementor-element elementor-element-410b776 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                            data-id="410b776"
                                                                            data-element_type="section">
                                                                            <div
                                                                                class="elementor-container elementor-column-gap-default">
                                                                                <div class="elementor-row">
                                                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-683f48d"
                                                                                        data-id="683f48d"
                                                                                        data-element_type="column">
                                                                                        <div
                                                                                            class="elementor-column-wrap elementor-element-populated">
                                                                                            <div
                                                                                                class="elementor-widget-wrap">
                                                                                                <div class="elementor-element elementor-element-e0f9e9f elementor-widget elementor-widget-heading"
                                                                                                    data-id="e0f9e9f"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="heading.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <h2 class="elementor-heading-title elementor-size-default"> About <?= $event->name ?> </h2>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-d77d36a elementor-widget elementor-widget-text-editor"
                                                                                                    data-id="d77d36a"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="text-editor.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                                                            <p><?= $event->description ?></p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-92bc776 border-box right-slider"
                                                                                        data-id="92bc776"
                                                                                        data-element_type="column">
                                                                                        <div
                                                                                            class="elementor-column-wrap elementor-element-populated">
                                                                                            <div
                                                                                                class="elementor-widget-wrap">
                                                                                                <div class="elementor-element elementor-element-8a459e0 elementor-arrows-position-inside elementor-pagination-position-outside elementor-widget elementor-widget-image-carousel"
                                                                                                    data-id="8a459e0"
                                                                                                    data-element_type="widget"
                                                                                                    data-settings="{&quot;slides_to_show&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;both&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;effect&quot;:&quot;slide&quot;,&quot;speed&quot;:500}"
                                                                                                    data-widget_type="image-carousel.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div class="elementor-image-carousel-wrapper swiper-container"
                                                                                                            dir="ltr">
                                                                                                            <div class="elementor-image-carousel swiper-wrapper">
																												<?php
																													foreach($event->images as $image){
																												?>
																													<div class="swiper-slide">
																														<a data-elementor-open-lightbox="yes"
																															data-elementor-lightbox-slideshow="8a459e0"
																															data-elementor-lightbox-title="amuse-2162_1920"
																															href="<?= $image ?>">
																															<figure
																																class="swiper-slide-inner">
																																<img class="swiper-slide-image"
																																	src="<?= $image ?>"
																																	alt="amuse-2162_1920" />
																															</figure>
																														</a>
																													</div>
																												<?php
																													}
																												?>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="swiper-pagination">
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="elementor-swiper-button elementor-swiper-button-prev">
                                                                                                                <i class="eicon-chevron-left"
                                                                                                                    aria-hidden="true"></i>
                                                                                                                <span
                                                                                                                    class="elementor-screen-only">Previous</span>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="elementor-swiper-button elementor-swiper-button-next">
                                                                                                                <i class="eicon-chevron-right"
                                                                                                                    aria-hidden="true"></i>
                                                                                                                <span
                                                                                                                    class="elementor-screen-only">Next</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                        <div class="elementor-element elementor-element-74c77aa elementor-widget elementor-widget-text-editor"
                                                                            data-id="74c77aa" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p><?= $event->info ?></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="event_content">
                                    <div class="social-title">Share This Event</div>
                                    <ul class="social_share">

                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fcircus-carnival%2F"
                                                target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/intent/tweet?text=Circus%20Carnival%202020&amp;url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fcircus-carnival%2F&amp;via=beevent"
                                                target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fcircus-carnival%2F"
                                                target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="https://plus.google.com/share?url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fcircus-carnival%2F"
                                                target="_blank"><i class="fa fa-google-plus"></i></a></li>

                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="gt-event-tab-1" role="tabpanel"
                            aria-labelledby="nav-gt-event-tab-1-tab">
                        </div>
                        <div class="tab-pane fade" id="gt-event-tab-2" role="tabpanel"
                            aria-labelledby="nav-gt-event-tab-2-tab">
                            <div class="schedule_event">
                                <div class="schedule_style2">
                                    <div class="schedule_info2">
                                        <ul class="event eventsemi-tabs" data-tabs="tabs">
                                            <li class="active "><a href="#day20" data-toggle="tab">Day 1</a></li>
                                            <li class=" "><a href="#day21" data-toggle="tab">Day 2</a></li>
                                            <li class=" "><a href="#day22" data-toggle="tab">Day 3</a></li>
                                            <li class=" "><a href="#day23" data-toggle="tab">Day 4</a></li>

                                        </ul>
                                        <div id="my-tab-content" class="tab-content">
                                            <!--Day 1 schedule-->
                                            <div class="tab-pane active" id="day20">
                                            </div>
                                            <!--/Day 1 schedule-->
                                            <!--Day 2 schedule-->
                                            <div class="tab-pane" id="day21">
                                            </div>
                                            <!--/Day 2 schedule-->
                                            <!--Day 3 schedule-->
                                            <div class="tab-pane" id="day22">
                                            </div>
                                            <!--/Day 3 schedule-->
                                            <!--Day 4 schedule-->
                                            <div class="tab-pane" id="day23">
                                            </div>
                                            <!--/Day 4 schedule-->
                                            <!--Day 5 schedule-->
                                            <div class="tab-pane" id="day24">
                                            </div>
                                            <!--/Day 5 schedule-->
                                            <!--Day 6 schedule-->
                                            <div class="tab-pane" id="day25">
                                            </div>
                                            <!--/Day 6 schedule-->
                                            <!--Day 7 schedule-->
                                            <div class="tab-pane" id="day26">
                                            </div>
                                            <!--/Day 7 schedule-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="gt-event-tab-3" role="tabpanel"
                            aria-labelledby="nav-gt-event-tab-3-tab">
                            <div class="event_tickets">
								<?php
									foreach($event->ticket_types as $ticket){
								?>
									<p></p>
									<div class="pay_services3">

										<div class="regi-price-table border-box">
											<div class="table-price-box secondary-bg">
												<h5><?= $ticket->name ?></h5>
												<div class="regi-price-box">
													EGP <?= $ticket->_joinData->price ?>
												</div>
											</div>
											<div class="table-price-detail">
												<ul class="desc">
													<li><i class="fa fa-check"></i><span> Joker Show </span></li>
													<li><i class="fa fa-check"></i><span> Joker Show </span></li>
													<li><i class="fa fa-check"></i><span> Joker Show </span></li>
													<li><i class="fa fa-check"></i><span> Tea </span></li>
												</ul>
											</div>

											<div class="table_btn">
												<p class="available"> <?= date("jS F Y", strtotime($event->ticket_types[0]->_joinData->date_from)) ?> </p>
												<div class="wp_cart_button_wrapper">
                                                    <a class="btn btn-sm btn-danger js-target-scroll" href="/guides/buy-ticket/<?= $ticket->id ?>">Buy Now</a>
												</div>
												<p class="remaining"><?= $event->ticket_types[0]->_joinData->time->format('H:i:s A') ?></p>
											</div>
										</div>
									</div>
								<?php
									}
								?>
                            </div>
                        </div>


                        <a class="md-trigger parimary-link singlebigmaptrigger" data-lat="<?= $event->lat ?>"
                            data-lan="<?= $event->lng ?>" data-modal="modal-4"></a>
                        <div class="tab-pane fade" id="gt-event-tab-4" role="tabpanel"
                            aria-labelledby="nav-gt-event-tab-4-tab">

                            <div class="map-directions">

                                <a href="https://www.google.com/maps?daddr=<?= $event->lat ?>,<?= $event->lng ?>"
                                    target="_blank"><i class="fa fa-map-o"></i>Get Directions</a>

                            </div>

                            <p class="venue"><strong>Venue : </strong><i class="fa fa-map-marker"></i><a
                                    href="https://www.google.com/maps?daddr=<?= $event->lat ?>,<?= $event->lng ?>"
                                    target="_blank"><?= $event->city->name ?>, <?= $event->country->name ?></a></p>

                            <div id="singlepostmap" class="singlemap"></div>

                        </div>


                        <div class="tab-pane fade" id="gt-event-tab-5" role="tabpanel"
                            aria-labelledby="nav-gt-event-tab-5-tab">
                            <div class="event_contact">
                                <div class="gallery_style3 row">
									<?php
										foreach($event->images as $image){
									?>
										<div class="col-md-4">
											<a href="<?= $image ?>"
												rel="prettyPhoto[gallery1]" class="cursorimage"><img
													src="<?= $image ?>"
													class="img-responsive prettyPhoto-m-img"></a>
										</div>
									<?php
										}
									?>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="gt-event-tab-6" role="tabpanel"
                            aria-labelledby="nav-gt-event-tab-6-tab">
                            <div class="event_contact">
                                <div role="form" class="wpcf7" id="wpcf7-f2398-p2332-o1" lang="en-US" dir="ltr">
                                    <div class="screen-reader-response">
                                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                                        <ul></ul>
                                    </div>
                                    <form
                                        action="http://php.webmasterdriver.net/beevent/event/circus-carnival/#wpcf7-f2398-p2332-o1"
                                        method="post" class="wpcf7-form init" novalidate="novalidate"
                                        data-status="init">
                                        <div style="display: none;">
                                            <input type="hidden" name="_wpcf7" value="2398" />
                                            <input type="hidden" name="_wpcf7_version" value="5.4" />
                                            <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f2398-p2332-o1" />
                                            <input type="hidden" name="_wpcf7_container_post" value="2332" />
                                            <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label> Your Name (required)<br />
                                                    <span class="wpcf7-form-control-wrap your-name"><input type="text"
                                                            name="your-name" value="" size="40"
                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                            aria-required="true" aria-invalid="false" /></span> </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label> Your Email (required)<br />
                                                    <span class="wpcf7-form-control-wrap your-email"><input type="email"
                                                            name="your-email" value="" size="40"
                                                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control"
                                                            aria-required="true" aria-invalid="false" /></span> </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label> Subject<br />
                                                    <span class="wpcf7-form-control-wrap your-subject"><input
                                                            type="text" name="your-subject" value="" size="40"
                                                            class="wpcf7-form-control wpcf7-text form-control"
                                                            aria-invalid="false" /></span> </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label> Your Message<br />
                                                    <span class="wpcf7-form-control-wrap your-message"><textarea
                                                            name="your-message" cols="40" rows="2"
                                                            class="wpcf7-form-control wpcf7-textarea form-control"
                                                            aria-invalid="false"></textarea></span> </label>
                                            </div>
                                        </div>
                                        <p><span class="wpcf7-form-control-wrap accept-this-1"><span
                                                    class="wpcf7-form-control wpcf7-acceptance"><span
                                                        class="wpcf7-list-item"><label><input type="checkbox"
                                                                name="accept-this-1" value="1"
                                                                aria-invalid="false" /><span
                                                                class="wpcf7-list-item-label">Check here to consent to
                                                                this website storing my information so they can
                                                                respond.</span></label></span></span></span></p>
                                        <p><input type="submit" value="Contact Us"
                                                class="wpcf7-form-control wpcf7-submit btn" /></p>
                                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="event_detail" id="comment">
                <div class="content-box-module">
                    <h4 class="content-box_title"><i class="fa fa-comments"></i><span>Leave a reply </h2></span></h4>
                    <div class="content-box_body">

                        <div id="comments" class="comments-area">

                            <div id="respond" class="comment-respond">
                                <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow"
                                            id="cancel-comment-reply-link" href="index.html#respond"
                                            style="display:none;">Cancel reply</a></small></h3>
                                <form action="http://php.webmasterdriver.net/beevent/wp-comments-post.php" method="post"
                                    id="commentform" class="comment-form" novalidate>
                                    <p class="comment-notes"><span id="email-notes">Your email address will not be
                                            published.</span> Required fields are marked <span class="required">*</span>
                                    </p>
                                    <div class="comment-form-author form-group"><input id="author" class="form-control"
                                            placeholder="Full Name" name="author" type="text" value="" size="30" />
                                    </div>
                                    <div class="comment-form-email form-group"><input id="email" class="form-control"
                                            placeholder="Email Address" name="email" type="text" value="" size="30" />
                                    </div>
                                    <p class="comment-form-comment"><label for="comment">Comment</label> <textarea
                                            id="comment" name="comment" cols="45" rows="8" maxlength="65525"
                                            required="required"></textarea></p>
                                    <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit"
                                            value="Post Comment" /> <input type='hidden' name='comment_post_ID'
                                            value='2332' id='comment_post_ID' />
                                        <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                    </p>
                                </form>
                            </div><!-- #respond -->

                        </div><!-- .comments-area -->

                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-4 col-md-12">

            <div class="event_detail">
                <div class="listing-sidebar">

                    <div class="sidebar_wrap listing_action_btn">
                        <ul>
                            <li> <a href="javascript:void(0)"
                                    onclick="location.http://php.webmasterdriver.net/beevent/wp-admin/admin-ajax.php?action=process_simple_interest&post_id=2332&nonce=bd6b1b441d&is_comment=0&disabled=true"
                                    class="batn interested sl-buttons sl-buttons-2332" data-nonce="bd6b1b441d"
                                    data-post-id="2332" data-iscomment="0" title="interest"><em class="sl-icons"><i
                                            class="fa fa-star-o"></i></em><span
                                        style="display:none;">interested</span></a><span id="sl-loaders"></span> </li>
                            <li><a data-toggle="modal" data-target="#share_event"><i class="fa fa-share-alt"></i>Share
                                    This </a></li>
                            <div class="modal fade" id="share_event">

                                <div class="modal-dialog" role="document">

                                    <div class="modal-content">

                                        <div class="modal-header">

                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                            <h3 class="modal-title" id="myModalLabel">Share Event</h3>

                                        </div>

                                        <div class="modal-body">

                                            <div class="share_listing">
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fcircus-carnival%2F"
                                                    target="_blank"><i class="fa fa-facebook"></i> </a>
                                                <a href="https://twitter.com/intent/tweet?text=Circus%20Carnival%202020&amp;url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fcircus-carnival%2F&amp;via=beevent"
                                                    target="_blank"><i class="fa fa-twitter"></i> </a>
                                                <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fcircus-carnival%2F"
                                                    target="_blank"><i class="fa fa-linkedin"></i> </a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                            <li><a data-toggle="modal" data-target="#email_friend"><i class="fa fa-envelope-o"></i>Email
                                    to Friends</a></li>
                            <li><a href="#comment" class="js-target-scroll"> <i class="fa fa-comment"></i>Write a
                                    Comment</a></li>

                            <div class="modal fade" id="email_friend">

                                <div class="modal-dialog" role="document">

                                    <div class="modal-content">

                                        <div class="modal-header">

                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                            <h3 class="modal-title" id="myModalLabel">Email to a Friend</h3>

                                        </div>

                                        <div class="modal-body">

                                            <div role="form" class="wpcf7" id="wpcf7-f2040-p2332-o2" lang="en-US"
                                                dir="ltr">
                                                <div class="screen-reader-response">
                                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                    <ul></ul>
                                                </div>
                                                <form
                                                    action="http://php.webmasterdriver.net/beevent/event/circus-carnival/#wpcf7-f2040-p2332-o2"
                                                    method="post" class="wpcf7-form init" novalidate="novalidate"
                                                    data-status="init">
                                                    <div style="display: none;">
                                                        <input type="hidden" name="_wpcf7" value="2040" />
                                                        <input type="hidden" name="_wpcf7_version" value="5.4" />
                                                        <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                        <input type="hidden" name="_wpcf7_unit_tag"
                                                            value="wpcf7-f2040-p2332-o2" />
                                                        <input type="hidden" name="_wpcf7_container_post"
                                                            value="2332" />
                                                        <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                                    </div>
                                                    <div class="form-group">
                                                        <span class="wpcf7-form-control-wrap your-name"><input
                                                                type="text" name="your-name" value="" size="40"
                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                                aria-required="true" aria-invalid="false"
                                                                placeholder="Your Name" /></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <span class="wpcf7-form-control-wrap your-email"><input
                                                                type="email" name="your-email" value="" size="40"
                                                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control"
                                                                aria-required="true" aria-invalid="false"
                                                                placeholder="Your Email Address" /></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <span class="wpcf7-form-control-wrap friend-email"><input
                                                                type="email" name="friend-email" value="" size="40"
                                                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control"
                                                                aria-required="true" aria-invalid="false"
                                                                placeholder="Friend Email Address" /></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <span class="wpcf7-form-control-wrap Message"><textarea
                                                                name="Message" cols="40" rows="10"
                                                                class="wpcf7-form-control wpcf7-textarea form-control"
                                                                aria-invalid="false"
                                                                placeholder="Message"></textarea></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <span class="wpcf7-form-control-wrap accept-this-1"><span
                                                                class="wpcf7-form-control wpcf7-acceptance"><span
                                                                    class="wpcf7-list-item"><label><input
                                                                            type="checkbox" name="accept-this-1"
                                                                            value="1" aria-invalid="false" /><span
                                                                            class="wpcf7-list-item-label">Check here to
                                                                            consent to this website storing my
                                                                            information so they can
                                                                            respond.</span></label></span></span></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" value="Submit"
                                                            class="wpcf7-form-control wpcf7-submit btn btn-block" />
                                                    </div>
                                                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>


                        </ul>
                    </div>
                </div>

                <div class="listing-sidebar">
                    <div class="sidebar-heading">
                        <h5><i class="fa fa-th-list"></i><span>Event Schedule </span></h5>
                    </div>
                    <div class="sidebar_wrap listing_action_btn">
                        <ul class="event_schedule">
                            <li>
                                <div class="gt-title">Start Date </div>
                                <div class="gt-icon"><i class="fa fa-calendar-check-o"></i></div>
                                <div class="gt-content">
                                    <div class="gt-inner">Feb 12, 2020</div>
                                </div>
                            </li>

                            <li>
                                <div class="gt-title">End Date </div>
                                <div class="gt-icon"><i class="fa fa-calendar-times-o"></i></div>
                                <div class="gt-content">
                                    <div class="gt-inner">Feb 21, 2022 </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="listing-sidebar">
                    <div class="sidebar-heading">
                        <h5><i class="fa fa-th-list"></i><span>Other Info </span></h5>
                    </div>
                    <div class="content-box-module">


                        <div class="gt-content-detail-box">

                            <ul>



                                <li class="event_status">
                                    <div class="gt-icon"></div>
                                    <div class="gt-content">
                                        <div class="gt-title">Status </div>
                                        <div class="gt-inner"><a
                                                href="<?= BASE_URL ?>/frontend/Ongoing-event/index-2.html">Ongoing</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="gt-icon"><i class="fa fa-map-signs"></i></div>
                                    <div class="gt-content">
                                        <div class="gt-title">Venue </div>
                                        <div class="gt-inner"><a
                                                href="https://www.google.com/maps?daddr=-0.08600560000002133,51.5046742"
                                                target="_blank">London Bridge Station, London, UK</a> </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="gt-icon"><i class="fa fa-phone"></i></div>
                                    <div class="gt-content">
                                        <div class="gt-title">Phone </div>
                                        <div class="gt-inner"><a href="tel:+61-12345678">+61-12345678 </a></div>
                                    </div>
                                </li>

                                <li>
                                    <div class="gt-icon"><i class="fa fa-envelope-o"></i></div>
                                    <div class="gt-content">
                                        <div class="gt-title">Email </div>
                                        <div class="gt-inner"><a
                                                href="mailto:circus@circus.carnival">circus@circus.carnival</a> </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="gt-icon"><i class="fa fa-ticket"></i></div>
                                    <div class="gt-content">
                                        <div class="gt-title">Remaining Tickets </div>
                                        <div class="gt-inner">300

                                        </div>
                                    </div>
                                </li>

                            </ul>

                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
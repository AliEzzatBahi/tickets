
<section class="elementor-section elementor-top-section elementor-element elementor-element-95d570d elementor-section-full_width elementor-section-stretched elementor-reverse-tablet elementor-reverse-mobile elementor-section-height-default elementor-section-height-default" data-id="95d570d" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
	<div class="elementor-container elementor-column-gap-no">
		<div class="elementor-row">
			<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-626c266" data-id="626c266" data-element_type="column">
				<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-1bd2a26 elementor-widget elementor-widget-shortcode" data-id="1bd2a26" data-element_type="widget" data-widget_type="shortcode.default">
							<div class="elementor-widget-container">
								<div id="slideshow1" class="slideshow">
								<?php
									$slideCount = 1;
									foreach($hotestEvents as $hotEvent){
										$slideCount++;
								?>
										<div id="siderwidth<?= $slideCount ?>" class="slides" style="background-image:url(<?= BASE_URL ?>/frontend/wp-content/uploads/2020/02/PLQO9T0-scaled-1.jpg);">
											<div class="banner-fixed">
												<div class="container">
													<div class="banner-content">
														<div class="content">
															<div class="banner-tagline text-center">
																<h1><?= $hotEvent->name ?></h1>
																<ul class="gt-information">
																	<input type="hidden" value="<?= $hotEvent->ticket_types[0]['_joinData']['date_from'] ?>" id="eventEndDate">
																	<li><i class="fa fa-clock-o"></i><span><?= date("jS F Y", strtotime($hotEvent->ticket_types[0]['_joinData']['date_from'])) ?></span> </li>
																	<li><i class="fa fa-map-marker"></i><span><?= $hotEvent->city['name'] ?>, <?= $hotEvent->country['name'] ?></span></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="container countdown-tab">
												<div class="countdown">
													<div class="counter-sec">
														<div class="countdown-counter half-width text-center">
															<div class="timer">
																<div class="countdown2 styled2">
	
																</div>
															</div>
														</div>
														<div class="countdown-btn half-width"><a class="btn btn-lg btn-danger js-target-scroll" href="event/international-literacy-day/index.html#event-display">Book now</a>
														</div>
													</div>
												</div>
											</div>
	
											<script type="text/javascript">
												var endDate = $('#eventEndDate').val();
												//alert(endDate);
												$('.countdown2.styled2').countdown({
													date: endDate,
													render: function(data) {
														if (this.leadingZeros(data.years, 2) == 0) {
															$(this.el).html("<div class='countdown-amount'>" + this.leadingZeros(data.days, 2) + " <span class='countdown-period'>Days</span></div><div class='countdown-amount'>" + this.leadingZeros(data.hours, 2) + " <span class='countdown-period'>Hours</span></div><div class='countdown-amount'>" + this.leadingZeros(data.min, 2) + " <span class='countdown-period'>Minutes</span></div><div class='countdown-amount'>" + this.leadingZeros(data.sec, 2) + " <span class='countdown-period'>Seconds</span></div>");
														} else {
															$(this.el).html("<div class='countdown-amount'>" + this.leadingZeros(data.years, 2) + " <span class='countdown-period'>Years</span></div><div class='countdown-amount'>" + this.leadingZeros(data.days, 2) + " <span class='countdown-period'>Days</span></div><div class='countdown-amount'>" + this.leadingZeros(data.hours, 2) + " <span class='countdown-period'>Hours</span></div><div class='countdown-amount'>" + this.leadingZeros(data.min, 2) + " <span class='countdown-period'>Minutes</span></div><div class='countdown-amount'>" + this.leadingZeros(data.sec, 2) + " <span class='countdown-period'>Seconds</span></div>");
														}
													}
												});
											</script>
										</div>
								<?php
									}
								?>
								</div>
								<div class="elementor-shortcode"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-eb6267b elementor-section-full_width elementor-section-stretched newsection-padding choose-beevent elementor-section-height-default elementor-section-height-default" data-id="eb6267b" data-element_type="section" id="About" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
	<div class="elementor-container elementor-column-gap-no">
		<div class="elementor-row">
			<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-04fd200" data-id="04fd200" data-element_type="column">
				<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-5798fb7 choose-event elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5798fb7" data-element_type="section">
							<div class="elementor-container elementor-column-gap-no">
								<div class="elementor-row">
									<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5c953ee" data-id="5c953ee" data-element_type="column">
										<div class="elementor-column-wrap elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-af8e239 elementor-widget elementor-widget-text-editor" data-id="af8e239" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														<div class="elementor-text-editor elementor-clearfix">
															<h2>Why Choose TicketsGuide</h2>
															<p>Because our digital story started with our dreams integrated manually.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-9b1023b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9b1023b" data-element_type="section">
							<div class="elementor-container elementor-column-gap-no">
								<div class="elementor-row">
									<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-b3c058f service-box" data-id="b3c058f" data-element_type="column">
										<div class="elementor-column-wrap elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-0365d1d elementor-view-default elementor-widget elementor-widget-icon" data-id="0365d1d" data-element_type="widget" data-widget_type="icon.default">
													<div class="elementor-widget-container">
														<div class="elementor-icon-wrapper">
															<div class="elementor-icon">
																<i aria-hidden="true" class="far fa-calendar-alt"></i>
															</div>
														</div>
													</div>
												</div>
												<div class="elementor-element elementor-element-4bdd5ce elementor-widget elementor-widget-text-editor" data-id="4bdd5ce" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														<div class="elementor-text-editor elementor-clearfix">
															<h2>MULTIPLE EVENTS</h2>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas et ultrices massa, sed porta dui.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-a665337 service-box" data-id="a665337" data-element_type="column">
										<div class="elementor-column-wrap elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-1b92796 elementor-view-default elementor-widget elementor-widget-icon" data-id="1b92796" data-element_type="widget" data-widget_type="icon.default">
													<div class="elementor-widget-container">
														<div class="elementor-icon-wrapper">
															<div class="elementor-icon">
																<i aria-hidden="true" class="fas fa-adjust"></i>
															</div>
														</div>
													</div>
												</div>
												<div class="elementor-element elementor-element-51c22dd elementor-widget elementor-widget-text-editor" data-id="51c22dd" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														<div class="elementor-text-editor elementor-clearfix">
															<h2>EVENT MANAGEMENT</h2>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas et ultrices massa, sed porta dui.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-880daa9 service-box" data-id="880daa9" data-element_type="column">
										<div class="elementor-column-wrap elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-bd438a6 elementor-view-default elementor-widget elementor-widget-icon" data-id="bd438a6" data-element_type="widget" data-widget_type="icon.default">
													<div class="elementor-widget-container">
														<div class="elementor-icon-wrapper">
															<div class="elementor-icon">
																<i aria-hidden="true" class="far fa-credit-card"></i>
															</div>
														</div>
													</div>
												</div>
												<div class="elementor-element elementor-element-72e77c8 elementor-widget elementor-widget-text-editor" data-id="72e77c8" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														<div class="elementor-text-editor elementor-clearfix">
															<h2>CREDIT CARD PAYMENT</h2>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas et ultrices massa, sed porta dui.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-89a77e9 service-box" data-id="89a77e9" data-element_type="column">
										<div class="elementor-column-wrap elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-882ff5e elementor-view-default elementor-widget elementor-widget-icon" data-id="882ff5e" data-element_type="widget" data-widget_type="icon.default">
													<div class="elementor-widget-container">
														<div class="elementor-icon-wrapper">
															<div class="elementor-icon">
																<i aria-hidden="true" class="fas fa-street-view"></i>
															</div>
														</div>
													</div>
												</div>
												<div class="elementor-element elementor-element-6e894cd elementor-widget elementor-widget-text-editor" data-id="6e894cd" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														<div class="elementor-text-editor elementor-clearfix">
															<h2>GOOGLE STREET VIEW</h2>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas et ultrices massa, sed porta dui.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<div class="elementor-element elementor-element-614d542 elementor-widget elementor-widget-text-editor" data-id="614d542" data-element_type="widget" data-widget_type="text-editor.default">
							<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
									<p><span style="font-family: Roboto, sans-serif; font-size: 18px;">“Page builder allow you to&nbsp;</span><span style="font-weight: 700; font-family: Roboto, sans-serif; font-size: 18px;">build</span><span style="font-family: Roboto, sans-serif; font-size: 18px;">&nbsp;custom sites without touching a line of code.&nbsp;</span><span style="font-weight: 700; margin-bottom: 0px; font-family: Roboto, sans-serif; font-size: 18px;">Drag and drop!</span><span style="font-family: Roboto, sans-serif; font-size: 18px;">”</span><br></p>
								</div>
							</div>
						</div>
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-bdab40c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="bdab40c" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-row">
									<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-647f366 service-box" data-id="647f366" data-element_type="column">
										<div class="elementor-column-wrap elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-e0956ba elementor-view-default elementor-widget elementor-widget-icon" data-id="e0956ba" data-element_type="widget" data-widget_type="icon.default">
													<div class="elementor-widget-container">
														<div class="elementor-icon-wrapper">
															<div class="elementor-icon">
																<i aria-hidden="true" class="fas fa-language"></i>
															</div>
														</div>
													</div>
												</div>
												<div class="elementor-element elementor-element-7096cbe elementor-widget elementor-widget-text-editor" data-id="7096cbe" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														<div class="elementor-text-editor elementor-clearfix">
															<h2>MULTIPLE EVENTS</h2>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas et ultrices massa, sed porta dui.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-8f853d9 service-box" data-id="8f853d9" data-element_type="column">
										<div class="elementor-column-wrap elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-927e845 elementor-view-default elementor-widget elementor-widget-icon" data-id="927e845" data-element_type="widget" data-widget_type="icon.default">
													<div class="elementor-widget-container">
														<div class="elementor-icon-wrapper">
															<div class="elementor-icon">
																<i aria-hidden="true" class="fas fa-cubes"></i>
															</div>
														</div>
													</div>
												</div>
												<div class="elementor-element elementor-element-8e106f2 elementor-widget elementor-widget-text-editor" data-id="8e106f2" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														<div class="elementor-text-editor elementor-clearfix">
															<h2>PAGE BUILDER</h2>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas et ultrices massa, sed porta dui.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-3da7d5f service-box" data-id="3da7d5f" data-element_type="column">
										<div class="elementor-column-wrap elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-cfb0046 elementor-view-default elementor-widget elementor-widget-icon" data-id="cfb0046" data-element_type="widget" data-widget_type="icon.default">
													<div class="elementor-widget-container">
														<div class="elementor-icon-wrapper">
															<div class="elementor-icon">
																<i aria-hidden="true" class="fas fa-th-large"></i>
															</div>
														</div>
													</div>
												</div>
												<div class="elementor-element elementor-element-e297bc2 elementor-widget elementor-widget-text-editor" data-id="e297bc2" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														<div class="elementor-text-editor elementor-clearfix">
															<h2>RESPONSIVE DESIGN</h2>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas et ultrices massa, sed porta dui.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-57bf654 service-box" data-id="57bf654" data-element_type="column">
										<div class="elementor-column-wrap elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-79fc536 elementor-view-default elementor-widget elementor-widget-icon" data-id="79fc536" data-element_type="widget" data-widget_type="icon.default">
													<div class="elementor-widget-container">
														<div class="elementor-icon-wrapper">
															<div class="elementor-icon">
																<i aria-hidden="true" class="fas fa-cogs"></i>
															</div>
														</div>
													</div>
												</div>
												<div class="elementor-element elementor-element-d6bfb5f elementor-widget elementor-widget-text-editor" data-id="d6bfb5f" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														<div class="elementor-text-editor elementor-clearfix">
															<h2>THEME CUSTOMIZER</h2>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas et ultrices massa, sed porta dui.</p>
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
	</div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-1cca062 elementor-section-full_width elementor-section-stretched newsection-padding gray-bg  most-tab-popular elementor-section-height-default elementor-section-height-default" data-id="1cca062" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
	<div class="elementor-container elementor-column-gap-default">
		<div class="elementor-row">
			<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9d9ef49" data-id="9d9ef49" data-element_type="column">
				<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-7d90a05 choose-event elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7d90a05" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-row">
									<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3fde250" data-id="3fde250" data-element_type="column">
										<div class="elementor-column-wrap elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-005e43f elementor-widget elementor-widget-text-editor" data-id="005e43f" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														<div class="elementor-text-editor elementor-clearfix">
															<h2>Most Popular Events</h2>
															<p>Now you can easily filter the popular events to category format.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-4b6f99a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4b6f99a" data-element_type="section">
							<div class="elementor-container elementor-column-gap-no">
								<div class="elementor-row">
									<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-c890321" data-id="c890321" data-element_type="column">
										<div class="elementor-column-wrap elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-df5a90f elementor-widget elementor-widget-shortcode" data-id="df5a90f" data-element_type="widget" data-widget_type="shortcode.default">
													<div class="elementor-widget-container">
														<div class="row">
															<div class="recent-tab">
																<ul class="event event-tabs ">
																	<li><a href="#upcoming" data-toggle="tab">Upcoming</a></li>
																	<li class="active"><a href="#ongoing" data-toggle="tab">Ongoing</a></li>
																	<li><a href="#expired" data-toggle="tab">Expired</a></li>
																</ul>
															</div>
															<div class="tab-content">
																<div class="tab-pane" id="upcoming">
																	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
																		<div class="event_inner">
																			<div class="listing-thumb">
																				<a href='event/international-literacy-day/index.html'>
																					<img src='<?= BASE_URL ?>/frontend/wp-content/uploads/2020/02/PLQO9T0-scaled-1.jpg' />
																				</a>
																				<div class="event-status">Upcoming </div>
																				<div class="event-price">$199</div>
																				<ul class="event_icon">
																					<li><a href="#" data-post-type="grids" data-post-id="2336" data-success-text="Saved" class="status-btn add-to-fav add-to-fav Save" title="Add To Bookmark"><i class="fa fa-bookmark-o"></i></a></li>
																					<li><a href="javascript:void(0)" onclick="location.http://php.webmasterdriver.net/beevent/wp-admin/admin-ajax.php?action=process_simple_interest&post_id=2336&nonce=bd6b1b441d&is_comment=0&disabled=true" class="batn interested sl-buttons sl-buttons-2336" data-nonce="bd6b1b441d" data-post-id="2336" data-iscomment="0" title="interest"><em class="sl-icons"><i class="fa fa-star-o"></i></em><span style="display:none;">interested</span></a><span id="sl-loaders"></span></li>
																					<li><a class="batn dropdown-toggle" data-toggle="dropdown" title="Share This Event" aria-expanded="false"><i class="fa fa-share"></i> </a>
																						<ul class="dropdown-menu dp_social_share">
																							<li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Finternational-literacy-day%2F" target="_blank"><i class="fa fa-facebook"></i>Facebook </a></li>
																							<li><a href="https://twitter.com/intent/tweet?text=International%20Literacy%20Day&amp;url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Finternational-literacy-day%2F&amp;via=beevent" target="_blank"><i class="fa fa-twitter"></i>Twitter </a></li>
																							<li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Finternational-literacy-day%2F" target="_blank"><i class="fa fa-linkedin"></i>Linkedin </a></li>
																							<li><a href="https://plus.google.com/share?url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Finternational-literacy-day%2F" target="_blank"><i class="fa fa-google-plus"></i>Google+ </a></li>
																						</ul>
																					</li>
																				</ul>
																			</div>
																			<div class="js-grid-item-body event_body__BfZIC">
																				<div class="event_calendar__2x4Hv">
																					<span class="event_month__S8D_o color-primary">Sun</span>
																					<span class="event_date__2Z7TH">01</span>
																				</div>
																				<div class="event_content__2fB-4">
																					<h2 class="event_title__3C2PA"><a href="event/international-literacy-day/index.html">International Literacy Day</a></h2>
																					<ul class="event_meta__CFFPg list-none">
																						<li class="event_metaList__1bEBH text-ellipsis"><span><i class="fa fa-calendar"> </i>August 1, 2021 - February 20, 2023</span></li>
																						<li class="event_metaList__1bEBH text-ellipsis"><span><i class="fa fa-clock-o"> </i>12:00 PM - 5:00 PM</span></li>
																						<li class="event_metaList__1bEBH text-ellipsis"><span><a href="#" target="_blank"><span><i class="fa fa-map-marker"></i>New York University, New York, NY, USA</span></a></span></li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
																		<div class="event_inner">
																			<div class="listing-thumb">
																				<a href='event/digital-economy-conference/index.html'>
																					<img src='<?= BASE_URL ?>/frontend/wp-content/uploads/2016/12/schedule_bg.jpg' />
																				</a>
																				<div class="event-status">Upcoming </div>
																				<div class="event-price">$50</div>
																				<ul class="event_icon">
																					<li><a href="#" data-post-type="grids" data-post-id="2257" data-success-text="Saved" class="status-btn add-to-fav add-to-fav Save" title="Add To Bookmark"><i class="fa fa-bookmark-o"></i></a></li>
																					<li><a href="javascript:void(0)" onclick="location.http://php.webmasterdriver.net/beevent/wp-admin/admin-ajax.php?action=process_simple_interest&post_id=2257&nonce=bd6b1b441d&is_comment=0&disabled=true" class="batn interested sl-buttons sl-buttons-2257" data-nonce="bd6b1b441d" data-post-id="2257" data-iscomment="0" title="interest"><em class="sl-icons"><i class="fa fa-star-o"></i></em><span style="display:none;">interested</span></a><span id="sl-loaders"></span></li>
																					<li><a class="batn dropdown-toggle" data-toggle="dropdown" title="Share This Event" aria-expanded="false"><i class="fa fa-share"></i> </a>
																						<ul class="dropdown-menu dp_social_share">
																							<li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fdigital-economy-conference%2F" target="_blank"><i class="fa fa-facebook"></i>Facebook </a></li>
																							<li><a href="https://twitter.com/intent/tweet?text=Digital%20Economy%20Conference&amp;url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fdigital-economy-conference%2F&amp;via=beevent" target="_blank"><i class="fa fa-twitter"></i>Twitter </a></li>
																							<li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fdigital-economy-conference%2F" target="_blank"><i class="fa fa-linkedin"></i>Linkedin </a></li>
																							<li><a href="https://plus.google.com/share?url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fdigital-economy-conference%2F" target="_blank"><i class="fa fa-google-plus"></i>Google+ </a></li>
																						</ul>
																					</li>
																				</ul>
																			</div>
																			<div class="js-grid-item-body event_body__BfZIC">
																				<div class="event_calendar__2x4Hv">
																					<span class="event_month__S8D_o color-primary">Wed</span>
																					<span class="event_date__2Z7TH">01</span>
																				</div>
																				<div class="event_content__2fB-4">
																					<h2 class="event_title__3C2PA"><a href="event/digital-economy-conference/index.html">Digital Economy Conference</a></h2>
																					<ul class="event_meta__CFFPg list-none">
																						<li class="event_metaList__1bEBH text-ellipsis"><span><i class="fa fa-calendar"> </i>September 1, 2021 - February 7, 2022</span></li>
																						<li class="event_metaList__1bEBH text-ellipsis"><span><i class="fa fa-clock-o"> </i>12:00 PM - 10:00 PM</span></li>
																						<li class="event_metaList__1bEBH text-ellipsis"><span><a href="#" target="_blank"><span><i class="fa fa-map-marker"></i>London Eye, The Queen's Walk, London, UK</span></a></span></li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
																		<div class="event_inner">
																			<div class="listing-thumb">
																				<a href='event/demo/index.html'>
																					<img src='<?= BASE_URL ?>/frontend/wp-content/uploads/2019/12/live-concert-455762_1920.jpg' />
																				</a>
																				<div class="event-status">Upcoming </div>
																				<div class="event-price">$200</div>
																				<ul class="event_icon">
																					<li><a href="#" data-post-type="grids" data-post-id="1784" data-success-text="Saved" class="status-btn add-to-fav add-to-fav Save" title="Add To Bookmark"><i class="fa fa-bookmark-o"></i></a></li>
																					<li><a href="javascript:void(0)" onclick="location.http://php.webmasterdriver.net/beevent/wp-admin/admin-ajax.php?action=process_simple_interest&post_id=1784&nonce=bd6b1b441d&is_comment=0&disabled=true" class="batn interested sl-buttons sl-buttons-1784" data-nonce="bd6b1b441d" data-post-id="1784" data-iscomment="0" title="interest"><em class="sl-icons"><i class="fa fa-star-o"></i></em><span style="display:none;">interested</span></a><span id="sl-loaders"></span></li>
																					<li><a class="batn dropdown-toggle" data-toggle="dropdown" title="Share This Event" aria-expanded="false"><i class="fa fa-share"></i> </a>
																						<ul class="dropdown-menu dp_social_share">
																							<li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fdemo%2F" target="_blank"><i class="fa fa-facebook"></i>Facebook </a></li>
																							<li><a href="https://twitter.com/intent/tweet?text=Live%20Music%20Event%20Concert&amp;url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fdemo%2F&amp;via=beevent" target="_blank"><i class="fa fa-twitter"></i>Twitter </a></li>
																							<li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fdemo%2F" target="_blank"><i class="fa fa-linkedin"></i>Linkedin </a></li>
																							<li><a href="https://plus.google.com/share?url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fdemo%2F" target="_blank"><i class="fa fa-google-plus"></i>Google+ </a></li>
																						</ul>
																					</li>
																				</ul>
																			</div>
																			<div class="js-grid-item-body event_body__BfZIC">
																				<div class="event_calendar__2x4Hv">
																					<span class="event_month__S8D_o color-primary">Mon</span>
																					<span class="event_date__2Z7TH">01</span>
																				</div>
																				<div class="event_content__2fB-4">
																					<h2 class="event_title__3C2PA"><a href="event/demo/index.html">Live Music Event Concert</a></h2>
																					<ul class="event_meta__CFFPg list-none">
																						<li class="event_metaList__1bEBH text-ellipsis"><span><i class="fa fa-calendar"> </i>November 1, 2021 - January 10, 2022</span></li>
																						<li class="event_metaList__1bEBH text-ellipsis"><span><i class="fa fa-clock-o"> </i>1:00 AM - 3:00 AM</span></li>
																						<li class="event_metaList__1bEBH text-ellipsis"><span><a href="#" target="_blank"><span><i class="fa fa-map-marker"></i>London Bridge, London, UK</span></a></span></li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>

																<!-- Ongoing -->
																<div class="tab-pane active" id="ongoing">
																	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
																		<div class="event_inner">
																			<div class="listing-thumb">
																				<a href='event/circus-carnival/index.html'>
																					<img src='<?= BASE_URL ?>/frontend/wp-content/uploads/2020/01/circus-828680_1920.jpg' />
																				</a>
																				<div class="event-status">ongoing </div>
																				<div class="event-price">$99</div>
																				<ul class="event_icon">
																					<li><a href="#" data-post-type="grids" data-post-id="2332" data-success-text="Saved" class="status-btn add-to-fav add-to-fav Save" title="Add To Bookmark"><i class="fa fa-bookmark-o"></i></a></li>
																					<li><a href="javascript:void(0)" onclick="location.http://php.webmasterdriver.net/beevent/wp-admin/admin-ajax.php?action=process_simple_interest&post_id=2332&nonce=bd6b1b441d&is_comment=0&disabled=true" class="batn interested sl-buttons sl-buttons-2332" data-nonce="bd6b1b441d" data-post-id="2332" data-iscomment="0" title="interest"><em class="sl-icons"><i class="fa fa-star-o"></i></em><span style="display:none;">interested</span></a><span id="sl-loaders"></span></li>
																					<li><a class="batn dropdown-toggle" title="Share This Event" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-share"></i> </a>
																						<ul class="dropdown-menu dp_social_share">
																							<li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fcircus-carnival%2F" target="_blank"><i class="fa fa-facebook"></i>Facebook </a></li>
																							<li><a href="https://twitter.com/intent/tweet?text=Circus%20Carnival%202020&amp;url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fcircus-carnival%2F&amp;via=beevent" target="_blank"><i class="fa fa-twitter"></i>Twitter </a></li>
																							<li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fcircus-carnival%2F" target="_blank"><i class="fa fa-linkedin"></i>Linkedin </a></li>
																							<li><a href="https://plus.google.com/share?url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fcircus-carnival%2F" target="_blank"><i class="fa fa-google-plus"></i>Google+ </a></li>
																						</ul>
																					</li>
																				</ul>
																			</div>
																			<div class="js-grid-item-body event_body__BfZIC">
																				<div class="event_calendar__2x4Hv">
																					<span class="event_month__S8D_o color-primary">Wed</span>
																					<span class="event_date__2Z7TH">12</span>
																				</div>
																				<div class="event_content__2fB-4">
																					<h2 class="event_title__3C2PA"><a href="event/circus-carnival/index.html">Circus Carnival 2020</a></h2>
																					<ul class="event_meta__CFFPg list-none">
																						<li class="event_metaList__1bEBH text-ellipsis"><span><i class="fa fa-calendar"> </i>February 12, 2020 - February 21, 2022</span></li>
																						<li class="event_metaList__1bEBH text-ellipsis"><span><i class="fa fa-clock-o"> </i>10:00 AM - 10:00 PM</span></li>
																						<li class="event_metaList__1bEBH text-ellipsis"><span><a href="#" target="_blank"><span><i class="fa fa-map-marker"></i>London Bridge Station, London, UK</span></a></span></li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
																		<div class="event_inner">
																			<div class="listing-thumb">
																				<a href='event/fashion-carnival-2021/index.html'>
																					<img src='<?= BASE_URL ?>/frontend/wp-content/uploads/2020/02/574784-PLQEH5-409-scaled-1.jpg' />
																				</a>
																				<div class="event-status">ongoing </div>
																				<div class="event-price">$200</div>
																				<ul class="event_icon">
																					<li><a href="#" data-post-type="grids" data-post-id="2289" data-success-text="Saved" class="status-btn add-to-fav add-to-fav Save" title="Add To Bookmark"><i class="fa fa-bookmark-o"></i></a></li>
																					<li><a href="javascript:void(0)" onclick="location.http://php.webmasterdriver.net/beevent/wp-admin/admin-ajax.php?action=process_simple_interest&post_id=2289&nonce=bd6b1b441d&is_comment=0&disabled=true" class="batn interested sl-buttons sl-buttons-2289" data-nonce="bd6b1b441d" data-post-id="2289" data-iscomment="0" title="interest"><em class="sl-icons"><i class="fa fa-star-o"></i></em><span style="display:none;">interested</span></a><span id="sl-loaders"></span></li>
																					<li><a class="batn dropdown-toggle" title="Share This Event" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-share"></i> </a>
																						<ul class="dropdown-menu dp_social_share">
																							<li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Ffashion-carnival-2021%2F" target="_blank"><i class="fa fa-facebook"></i>Facebook </a></li>
																							<li><a href="https://twitter.com/intent/tweet?text=Fashion%20Carnival%202021&amp;url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Ffashion-carnival-2021%2F&amp;via=beevent" target="_blank"><i class="fa fa-twitter"></i>Twitter </a></li>
																							<li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Ffashion-carnival-2021%2F" target="_blank"><i class="fa fa-linkedin"></i>Linkedin </a></li>
																							<li><a href="https://plus.google.com/share?url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Ffashion-carnival-2021%2F" target="_blank"><i class="fa fa-google-plus"></i>Google+ </a></li>
																						</ul>
																					</li>
																				</ul>
																			</div>
																			<div class="js-grid-item-body event_body__BfZIC">
																				<div class="event_calendar__2x4Hv">
																					<span class="event_month__S8D_o color-primary">Fri</span>
																					<span class="event_date__2Z7TH">01</span>
																				</div>
																				<div class="event_content__2fB-4">
																					<h2 class="event_title__3C2PA"><a href="event/fashion-carnival-2021/index.html">Fashion Carnival 2021</a></h2>
																					<ul class="event_meta__CFFPg list-none">
																						<li class="event_metaList__1bEBH text-ellipsis"><span><i class="fa fa-calendar"> </i>January 1, 2021 - March 9, 2022</span></li>
																						<li class="event_metaList__1bEBH text-ellipsis"><span><i class="fa fa-clock-o"> </i>10:00 AM - 8:00 PM</span></li>
																						<li class="event_metaList__1bEBH text-ellipsis"><span><a href="#" target="_blank"><span><i class="fa fa-map-marker"></i>Indonesian Embassy, Road No 2432, Manama, Bahrain</span></a></span></li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
																		<div class="event_inner">
																			<div class="listing-thumb">
																				<a href='event/spain-education-seminar-2021/index.html'>
																					<img src='<?= BASE_URL ?>/frontend/wp-content/uploads/2020/02/lecture-3986809_1920.jpg' />
																				</a>
																				<div class="event-status">ongoing </div>
																				<div class="event-price">$100</div>
																				<ul class="event_icon">
																					<li><a href="#" data-post-type="grids" data-post-id="2296" data-success-text="Saved" class="status-btn add-to-fav add-to-fav Save" title="Add To Bookmark"><i class="fa fa-bookmark-o"></i></a></li>
																					<li><a href="javascript:void(0)" onclick="location.http://php.webmasterdriver.net/beevent/wp-admin/admin-ajax.php?action=process_simple_interest&post_id=2296&nonce=bd6b1b441d&is_comment=0&disabled=true" class="batn interested sl-buttons sl-buttons-2296" data-nonce="bd6b1b441d" data-post-id="2296" data-iscomment="0" title="interest"><em class="sl-icons"><i class="fa fa-star-o"></i></em><span style="display:none;">interested</span></a><span id="sl-loaders"></span></li>
																					<li><a class="batn dropdown-toggle" title="Share This Event" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-share"></i> </a>
																						<ul class="dropdown-menu dp_social_share">
																							<li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fspain-education-seminar-2021%2F" target="_blank"><i class="fa fa-facebook"></i>Facebook </a></li>
																							<li><a href="https://twitter.com/intent/tweet?text=Spain%20Education%20Seminar&amp;url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fspain-education-seminar-2021%2F&amp;via=beevent" target="_blank"><i class="fa fa-twitter"></i>Twitter </a></li>
																							<li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fspain-education-seminar-2021%2F" target="_blank"><i class="fa fa-linkedin"></i>Linkedin </a></li>
																							<li><a href="https://plus.google.com/share?url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fspain-education-seminar-2021%2F" target="_blank"><i class="fa fa-google-plus"></i>Google+ </a></li>
																						</ul>
																					</li>
																				</ul>
																			</div>
																			<div class="js-grid-item-body event_body__BfZIC">
																				<div class="event_calendar__2x4Hv">
																					<span class="event_month__S8D_o color-primary">Mon</span>
																					<span class="event_date__2Z7TH">01</span>
																				</div>
																				<div class="event_content__2fB-4">
																					<h2 class="event_title__3C2PA"><a href="event/spain-education-seminar-2021/index.html">Spain Education Seminar</a></h2>
																					<ul class="event_meta__CFFPg list-none">
																						<li class="event_metaList__1bEBH text-ellipsis"><span><i class="fa fa-calendar"> </i>March 1, 2021 - May 20, 2022</span></li>
																						<li class="event_metaList__1bEBH text-ellipsis"><span><i class="fa fa-clock-o"> </i>1:00 PM - 8:00 PM</span></li>
																						<li class="event_metaList__1bEBH text-ellipsis"><span><a href="#" target="_blank"><span><i class="fa fa-map-marker"></i>Spain Park High School, Jaguar Drive, Birmingham, AL, USA</span></a></span></li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>

																<!-- Expired -->
																<div class="tab-pane" id="expired">
																	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
																		<div class="event_inner">
																			<div class="listing-thumb">
																				<a href='event/designing-concert/index.html'>
																					<img src='<?= BASE_URL ?>/frontend/wp-content/uploads/2020/02/art-1478831_1920.jpg' />
																				</a>
																				<div class="event-status">Expired </div>
																				<div class="event-price">$150</div>
																				<ul class="event_icon">
																					<li><a href="#" data-post-type="grids" data-post-id="2302" data-success-text="Saved" class="status-btn add-to-fav add-to-fav Save" title="Add To Bookmark"><i class="fa fa-bookmark-o"></i></a></li>
																					<li><a href="javascript:void(0)" onclick="location.http://php.webmasterdriver.net/beevent/wp-admin/admin-ajax.php?action=process_simple_interest&post_id=2302&nonce=bd6b1b441d&is_comment=0&disabled=true" class="batn interested sl-buttons sl-buttons-2302" data-nonce="bd6b1b441d" data-post-id="2302" data-iscomment="0" title="interest"><em class="sl-icons"><i class="fa fa-star-o"></i></em><span style="display:none;">interested</span></a><span id="sl-loaders"></span></li>
																					<li><a class="batn dropdown-toggle" title="Share This Event" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-share"></i> </a>
																						<ul class="dropdown-menu dp_social_share">
																							<li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fdesigning-concert%2F" target="_blank"><i class="fa fa-facebook"></i>Facebook </a></li>
																							<li><a href="https://twitter.com/intent/tweet?text=Designing%20Concert&amp;url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fdesigning-concert%2F&amp;via=beevent" target="_blank"><i class="fa fa-twitter"></i>Twitter </a></li>
																							<li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fdesigning-concert%2F" target="_blank"><i class="fa fa-linkedin"></i>Linkedin </a></li>
																							<li><a href="https://plus.google.com/share?url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fdesigning-concert%2F" target="_blank"><i class="fa fa-google-plus"></i>Google+ </a></li>
																						</ul>
																					</li>
																				</ul>
																			</div>
																			<div class="js-grid-item-body event_body__BfZIC">
																				<div class="event_calendar__2x4Hv">
																					<span class="event_month__S8D_o color-primary">Wed</span>
																					<span class="event_date__2Z7TH">12</span>
																				</div>
																				<div class="event_content__2fB-4">
																					<h2 class="event_title__3C2PA"><a href="event/designing-concert/index.html">Designing Concert</a></h2>
																					<ul class="event_meta__CFFPg list-none">
																						<li class="event_metaList__1bEBH text-ellipsis"><span><i class="fa fa-calendar"> </i>February 12, 2020 - January 31, 2021</span></li>
																						<li class="event_metaList__1bEBH text-ellipsis"><span><i class="fa fa-clock-o"> </i>1:00 PM - 5:00 PM</span></li>
																						<li class="event_metaList__1bEBH text-ellipsis"><span><a href="#" target="_blank"><span><i class="fa fa-map-marker"></i>London Eye, The Queen's Walk, London, UK</span></a></span></li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
																		<div class="event_inner">
																			<div class="listing-thumb">
																				<a href='event/fun-mania-christmas-event/index.html'>
																					<img src='<?= BASE_URL ?>/frontend/wp-content/uploads/2019/12/decorating-christmas-tree-2999722_1920.jpg' />
																				</a>
																				<div class="event-status">Expired </div>
																				<div class="event-price">$100</div>
																				<ul class="event_icon">
																					<li><a href="#" data-post-type="grids" data-post-id="1805" data-success-text="Saved" class="status-btn add-to-fav add-to-fav Save" title="Add To Bookmark"><i class="fa fa-bookmark-o"></i></a></li>
																					<li><a href="javascript:void(0)" onclick="location.http://php.webmasterdriver.net/beevent/wp-admin/admin-ajax.php?action=process_simple_interest&post_id=1805&nonce=bd6b1b441d&is_comment=0&disabled=true" class="batn interested sl-buttons sl-buttons-1805" data-nonce="bd6b1b441d" data-post-id="1805" data-iscomment="0" title="interest"><em class="sl-icons"><i class="fa fa-star-o"></i></em><span style="display:none;">interested</span></a><span id="sl-loaders"></span></li>
																					<li><a class="batn dropdown-toggle" title="Share This Event" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-share"></i> </a>
																						<ul class="dropdown-menu dp_social_share">
																							<li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Ffun-mania-christmas-event%2F" target="_blank"><i class="fa fa-facebook"></i>Facebook </a></li>
																							<li><a href="https://twitter.com/intent/tweet?text=Fun%20Mania%20Christmas%20Event&amp;url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Ffun-mania-christmas-event%2F&amp;via=beevent" target="_blank"><i class="fa fa-twitter"></i>Twitter </a></li>
																							<li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Ffun-mania-christmas-event%2F" target="_blank"><i class="fa fa-linkedin"></i>Linkedin </a></li>
																							<li><a href="https://plus.google.com/share?url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Ffun-mania-christmas-event%2F" target="_blank"><i class="fa fa-google-plus"></i>Google+ </a></li>
																						</ul>
																					</li>
																				</ul>
																			</div>
																			<div class="js-grid-item-body event_body__BfZIC">
																				<div class="event_calendar__2x4Hv">
																					<span class="event_month__S8D_o color-primary">Wed</span>
																					<span class="event_date__2Z7TH">25</span>
																				</div>
																				<div class="event_content__2fB-4">
																					<h2 class="event_title__3C2PA"><a href="event/fun-mania-christmas-event/index.html">Fun Mania Christmas Event</a></h2>
																					<ul class="event_meta__CFFPg list-none">
																						<li class="event_metaList__1bEBH text-ellipsis"><span><i class="fa fa-calendar"> </i>December 25, 2019 - December 28, 2019</span></li>
																						<li class="event_metaList__1bEBH text-ellipsis"><span><i class="fa fa-clock-o"> </i>2:00 PM - 10:00 PM</span></li>
																						<li class="event_metaList__1bEBH text-ellipsis"><span><a href="#" target="_blank"><span><i class="fa fa-map-marker"></i>Switzer Falls Trail, Angeles Crest Highway, Tujunga, CA, USA</span></a></span></li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
																		<div class="event_inner">
																			<div class="listing-thumb">
																				<a href='event/new-year-party/index.html'>
																					<img src='<?= BASE_URL ?>/frontend/wp-content/uploads/2019/12/champagne-3515140_1920.jpg' />
																				</a>
																				<div class="event-status">Expired </div>
																				<div class="event-price">$200</div>
																				<ul class="event_icon">
																					<li><a href="#" data-post-type="grids" data-post-id="1803" data-success-text="Saved" class="status-btn add-to-fav add-to-fav Save" title="Add To Bookmark"><i class="fa fa-bookmark-o"></i></a></li>
																					<li><a href="javascript:void(0)" onclick="location.http://php.webmasterdriver.net/beevent/wp-admin/admin-ajax.php?action=process_simple_interest&post_id=1803&nonce=bd6b1b441d&is_comment=0&disabled=true" class="batn interested sl-buttons sl-buttons-1803" data-nonce="bd6b1b441d" data-post-id="1803" data-iscomment="0" title="interest"><em class="sl-icons"><i class="fa fa-star-o"></i></em><span style="display:none;">interested</span></a><span id="sl-loaders"></span></li>
																					<li><a class="batn dropdown-toggle" title="Share This Event" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-share"></i> </a>
																						<ul class="dropdown-menu dp_social_share">
																							<li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fnew-year-party%2F" target="_blank"><i class="fa fa-facebook"></i>Facebook </a></li>
																							<li><a href="https://twitter.com/intent/tweet?text=New%20year%20party&amp;url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fnew-year-party%2F&amp;via=beevent" target="_blank"><i class="fa fa-twitter"></i>Twitter </a></li>
																							<li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fnew-year-party%2F" target="_blank"><i class="fa fa-linkedin"></i>Linkedin </a></li>
																							<li><a href="https://plus.google.com/share?url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fnew-year-party%2F" target="_blank"><i class="fa fa-google-plus"></i>Google+ </a></li>
																						</ul>
																					</li>
																				</ul>
																			</div>
																			<div class="js-grid-item-body event_body__BfZIC">
																				<div class="event_calendar__2x4Hv">
																					<span class="event_month__S8D_o color-primary">Tue</span>
																					<span class="event_date__2Z7TH">31</span>
																				</div>
																				<div class="event_content__2fB-4">
																					<h2 class="event_title__3C2PA"><a href="event/new-year-party/index.html">New year party</a></h2>
																					<ul class="event_meta__CFFPg list-none">
																						<li class="event_metaList__1bEBH text-ellipsis"><span><i class="fa fa-calendar"> </i>December 31, 2019 - January 1, 2020</span></li>
																						<li class="event_metaList__1bEBH text-ellipsis"><span><i class="fa fa-clock-o"> </i>7:00 PM - 11:00 PM</span></li>
																						<li class="event_metaList__1bEBH text-ellipsis"><span><a href="#" target="_blank"><span><i class="fa fa-map-marker"></i>Englandsvej, Copenhagen Municipality, Denmark</span></a></span></li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-shortcode"></div>
													</div>
												</div>
												<div class="elementor-element elementor-element-335f381 elementor-widget elementor-widget-text-editor" data-id="335f381" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														<div class="elementor-text-editor elementor-clearfix"><a class="btn" href="event.html">Browse More Event</a></div>
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
	</div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-54f1d29 elementor-section-full_width elementor-section-stretched newsection-padding sponsor-bg  elementor-section-height-default elementor-section-height-default" data-id="54f1d29" data-element_type="section" id="sponsor" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
	<div class="elementor-container elementor-column-gap-no">
		<div class="elementor-row">
			<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f8e0711" data-id="f8e0711" data-element_type="column">
				<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-559f56a section-header text-center elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="559f56a" data-element_type="section">
							<div class="elementor-container elementor-column-gap-no">
								<div class="elementor-row">
									<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-a1e7fcf" data-id="a1e7fcf" data-element_type="column">
										<div class="elementor-column-wrap elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-0ed7f1f elementor-widget elementor-widget-text-editor" data-id="0ed7f1f" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														<div class="elementor-text-editor elementor-clearfix">
															<h2 class="section-title" style="color: white; position: relative; z-index: 5;">Golden Sponsors</h2>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-f895413 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f895413" data-element_type="section">
							<div class="elementor-container elementor-column-gap-no">
								<div class="elementor-row">
									<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-00a58d7" data-id="00a58d7" data-element_type="column">
										<div class="elementor-column-wrap elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-9ce54bd elementor-widget elementor-widget-shortcode" data-id="9ce54bd" data-element_type="widget" data-widget_type="shortcode.default">
													<div class="elementor-widget-container">
														<div class="sponsors_4">
															<div class="sponsors-list">
																<ul>
																	<div class="col-md-3 sponsors-list-item">
																		<div class="image-grid-inner">
																			<a href="#" target="_blank"><img width="300" height="201" src="<?= BASE_URL ?>/frontend/wp-content/uploads/2020/01/logo-white1-300x201.png" class="img-responsive center-block wp-post-image" alt="" loading="lazy" srcset="http://php.webmasterdriver.net/beevent/wp-content/uploads/2020/01/logo-white1-300x201.png 300w, http://php.webmasterdriver.net/beevent/wp-content/uploads/2020/01/logo-white1.png 350w" sizes="(max-width: 300px) 100vw, 300px" /></a>
																		</div>
																	</div>
																	<div class="col-md-3 sponsors-list-item">
																		<div class="image-grid-inner">
																			<a href="#" target="_blank"><img width="300" height="201" src="<?= BASE_URL ?>/frontend/wp-content/uploads/2020/01/logo-white3-300x201.png" class="img-responsive center-block wp-post-image" alt="" loading="lazy" srcset="http://php.webmasterdriver.net/beevent/wp-content/uploads/2020/01/logo-white3-300x201.png 300w, http://php.webmasterdriver.net/beevent/wp-content/uploads/2020/01/logo-white3.png 350w" sizes="(max-width: 300px) 100vw, 300px" /></a>
																		</div>
																	</div>
																	<div class="col-md-3 sponsors-list-item">
																		<div class="image-grid-inner">
																			<a href="#" target="_blank"><img width="300" height="201" src="<?= BASE_URL ?>/frontend/wp-content/uploads/2020/01/logo-white2-2-300x201.png" class="img-responsive center-block wp-post-image" alt="" loading="lazy" srcset="http://php.webmasterdriver.net/beevent/wp-content/uploads/2020/01/logo-white2-2-300x201.png 300w, http://php.webmasterdriver.net/beevent/wp-content/uploads/2020/01/logo-white2-2.png 350w" sizes="(max-width: 300px) 100vw, 300px" /></a>
																		</div>
																	</div>
																	<div class="col-md-3 sponsors-list-item">
																		<div class="image-grid-inner">
																			<a href="#" target="_blank"><img width="300" height="201" src="<?= BASE_URL ?>/frontend/wp-content/uploads/2020/01/logo-white4-300x201.png" class="img-responsive center-block wp-post-image" alt="" loading="lazy" srcset="http://php.webmasterdriver.net/beevent/wp-content/uploads/2020/01/logo-white4-300x201.png 300w, http://php.webmasterdriver.net/beevent/wp-content/uploads/2020/01/logo-white4.png 350w" sizes="(max-width: 300px) 100vw, 300px" /></a>
																		</div>
																	</div>
																	<div class="col-md-3 sponsors-list-item">
																		<div class="image-grid-inner">
																			<a href="#" target="_blank"><img width="300" height="201" src="<?= BASE_URL ?>/frontend/wp-content/uploads/2020/01/logo-white4-300x201.png" class="img-responsive center-block wp-post-image" alt="" loading="lazy" srcset="http://php.webmasterdriver.net/beevent/wp-content/uploads/2020/01/logo-white4-300x201.png 300w, http://php.webmasterdriver.net/beevent/wp-content/uploads/2020/01/logo-white4.png 350w" sizes="(max-width: 300px) 100vw, 300px" /></a>
																		</div>
																	</div>
																	<div class="col-md-3 sponsors-list-item">
																		<div class="image-grid-inner">
																			<a href="#" target="_blank"><img width="300" height="201" src="<?= BASE_URL ?>/frontend/wp-content/uploads/2020/01/logo-white3-300x201.png" class="img-responsive center-block wp-post-image" alt="" loading="lazy" srcset="http://php.webmasterdriver.net/beevent/wp-content/uploads/2020/01/logo-white3-300x201.png 300w, http://php.webmasterdriver.net/beevent/wp-content/uploads/2020/01/logo-white3.png 350w" sizes="(max-width: 300px) 100vw, 300px" /></a>
																		</div>
																	</div>
																	<div class="col-md-3 sponsors-list-item">
																		<div class="image-grid-inner">
																			<a href="#" target="_blank"><img width="300" height="201" src="<?= BASE_URL ?>/frontend/wp-content/uploads/2020/01/logo-white2-2-300x201.png" class="img-responsive center-block wp-post-image" alt="" loading="lazy" srcset="http://php.webmasterdriver.net/beevent/wp-content/uploads/2020/01/logo-white2-2-300x201.png 300w, http://php.webmasterdriver.net/beevent/wp-content/uploads/2020/01/logo-white2-2.png 350w" sizes="(max-width: 300px) 100vw, 300px" /></a>
																		</div>
																	</div>
																	<div class="col-md-3 sponsors-list-item">
																		<div class="image-grid-inner">
																			<a href="#" target="_blank"><img width="300" height="201" src="<?= BASE_URL ?>/frontend/wp-content/uploads/2020/01/logo-white1-300x201.png" class="img-responsive center-block wp-post-image" alt="" loading="lazy" srcset="http://php.webmasterdriver.net/beevent/wp-content/uploads/2020/01/logo-white1-300x201.png 300w, http://php.webmasterdriver.net/beevent/wp-content/uploads/2020/01/logo-white1.png 350w" sizes="(max-width: 300px) 100vw, 300px" /></a>
																		</div>
																	</div>
																</ul>
															</div>
														</div>
														<div class="elementor-shortcode"></div>
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
	</div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-dc85c80 elementor-section-full_width elementor-section-stretched newsection-padding most-tab-popular elementor-section-height-default elementor-section-height-default" data-id="dc85c80" data-element_type="section" id="featured-event" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
	<div class="elementor-container elementor-column-gap-no">
		<div class="elementor-row">
			<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c4926a0" data-id="c4926a0" data-element_type="column">
				<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-e00660c section-header text-center elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e00660c" data-element_type="section">
							<div class="elementor-container elementor-column-gap-no">
								<div class="elementor-row">
									<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-87cdd3e" data-id="87cdd3e" data-element_type="column">
										<div class="elementor-column-wrap elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-ba37f9d elementor-widget elementor-widget-text-editor" data-id="ba37f9d" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														<div class="elementor-text-editor elementor-clearfix">
															<h2>Featured Events</h2>
															<p>Events those who are stand alone with featured and some specific specifications.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-2a6019d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2a6019d" data-element_type="section">
							<div class="elementor-container elementor-column-gap-no">
								<div class="elementor-row">
									<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-c714936" data-id="c714936" data-element_type="column">
										<div class="elementor-column-wrap elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-25fa8bf elementor-widget elementor-widget-shortcode" data-id="25fa8bf" data-element_type="widget" data-widget_type="shortcode.default">
													<div class="elementor-widget-container">
														<div class="container">
															<div class="row">
																<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
																	<div class="event_inner">
																		<div class="listing-thumb">
																			<a href='event/fashion-carnival-2021/index.html'>
																				<img src='<?= BASE_URL ?>/frontend/wp-content/uploads/2020/02/574784-PLQEH5-409-scaled-1.jpg' />
																			</a>
																			<div class="event-status">$200</div>
																			<div class="event-featured"><i class="fa fa-star"></i></div>
																			<ul class="event_icon">
																				<li><a href="#" data-post-type="grids" data-post-id="2289" data-success-text="Saved" class="status-btn add-to-fav add-to-fav Save" title="Add To Bookmark"><i class="fa fa-bookmark-o"></i></a></li>
																				<li><a href="javascript:void(0)" onclick="location.http://php.webmasterdriver.net/beevent/wp-admin/admin-ajax.php?action=process_simple_interest&post_id=2289&nonce=bd6b1b441d&is_comment=0&disabled=true" class="batn interested sl-buttons sl-buttons-2289" data-nonce="bd6b1b441d" data-post-id="2289" data-iscomment="0" title="interest"><em class="sl-icons"><i class="fa fa-star-o"></i></em><span style="display:none;">interested</span></a><span id="sl-loaders"></span></li>
																				<li><a class="batn dropdown-toggle" data-toggle="dropdown" aria-expanded="false" title="Share This Event"><i class="fa fa-share"></i> </a>
																					<ul class="dropdown-menu dp_social_share">
																						<li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Ffashion-carnival-2021%2F" target="_blank"><i class="fa fa-facebook"></i>Facebook </a></li>
																						<li><a href="https://twitter.com/intent/tweet?text=Fashion%20Carnival%202021&amp;url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Ffashion-carnival-2021%2F&amp;via=beevent" target="_blank"><i class="fa fa-twitter"></i>Twitter </a></li>
																						<li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Ffashion-carnival-2021%2F" target="_blank"><i class="fa fa-linkedin"></i>Linkedin </a></li>
																						<li><a href="https://plus.google.com/share?url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Ffashion-carnival-2021%2F" target="_blank"><i class="fa fa-google-plus"></i>Google + </a></li>
																					</ul>
																				</li>
																			</ul>
																		</div>
																		<div class="js-grid-item-body event_body__BfZIC">
																			<div class="event_calendar__2x4Hv">
																				<span class="event_month__S8D_o color-primary">Fri</span>
																				<span class="event_date__2Z7TH">01</span>
																			</div>
																			<div class="event_content__2fB-4">
																				<h2 class="event_title__3C2PA"><a href="event/fashion-carnival-2021/index.html">Fashion Carnival 2021</a></h2>
																				<ul class="event_meta__CFFPg list-none">
																					<li class="event_metaList__1bEBH text-ellipsis"><span><i class="fa fa-calendar"> </i>January 1, 2021 - March 9, 2022</span></li>
																					<li class="event_metaList__1bEBH text-ellipsis"><span><i class="fa fa-clock-o"> </i>10:00 AM - 8:00 PM</span></li>
																					<li class="event_metaList__1bEBH text-ellipsis"><span><a href="#" target="_blank"><span><i class="fa fa-map-marker"></i>Indonesian Embassy, Road No 2432, Manama, Bahrain</span></a></span></li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
																	<div class="event_inner">
																		<div class="listing-thumb">
																			<a href='event/spain-education-seminar-2021/index.html'>
																				<img src='<?= BASE_URL ?>/frontend/wp-content/uploads/2020/02/lecture-3986809_1920.jpg' />
																			</a>
																			<div class="event-status">$100</div>
																			<div class="event-featured"><i class="fa fa-star"></i></div>
																			<ul class="event_icon">
																				<li><a href="#" data-post-type="grids" data-post-id="2296" data-success-text="Saved" class="status-btn add-to-fav add-to-fav Save" title="Add To Bookmark"><i class="fa fa-bookmark-o"></i></a></li>
																				<li><a href="javascript:void(0)" onclick="location.http://php.webmasterdriver.net/beevent/wp-admin/admin-ajax.php?action=process_simple_interest&post_id=2296&nonce=bd6b1b441d&is_comment=0&disabled=true" class="batn interested sl-buttons sl-buttons-2296" data-nonce="bd6b1b441d" data-post-id="2296" data-iscomment="0" title="interest"><em class="sl-icons"><i class="fa fa-star-o"></i></em><span style="display:none;">interested</span></a><span id="sl-loaders"></span></li>
																				<li><a class="batn dropdown-toggle" data-toggle="dropdown" aria-expanded="false" title="Share This Event"><i class="fa fa-share"></i> </a>
																					<ul class="dropdown-menu dp_social_share">
																						<li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fspain-education-seminar-2021%2F" target="_blank"><i class="fa fa-facebook"></i>Facebook </a></li>
																						<li><a href="https://twitter.com/intent/tweet?text=Spain%20Education%20Seminar&amp;url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fspain-education-seminar-2021%2F&amp;via=beevent" target="_blank"><i class="fa fa-twitter"></i>Twitter </a></li>
																						<li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fspain-education-seminar-2021%2F" target="_blank"><i class="fa fa-linkedin"></i>Linkedin </a></li>
																						<li><a href="https://plus.google.com/share?url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fspain-education-seminar-2021%2F" target="_blank"><i class="fa fa-google-plus"></i>Google + </a></li>
																					</ul>
																				</li>
																			</ul>
																		</div>
																		<div class="js-grid-item-body event_body__BfZIC">
																			<div class="event_calendar__2x4Hv">
																				<span class="event_month__S8D_o color-primary">Mon</span>
																				<span class="event_date__2Z7TH">01</span>
																			</div>
																			<div class="event_content__2fB-4">
																				<h2 class="event_title__3C2PA"><a href="event/spain-education-seminar-2021/index.html">Spain Education Seminar</a></h2>
																				<ul class="event_meta__CFFPg list-none">
																					<li class="event_metaList__1bEBH text-ellipsis"><span><i class="fa fa-calendar"> </i>March 1, 2021 - May 20, 2022</span></li>
																					<li class="event_metaList__1bEBH text-ellipsis"><span><i class="fa fa-clock-o"> </i>1:00 PM - 8:00 PM</span></li>
																					<li class="event_metaList__1bEBH text-ellipsis"><span><a href="#" target="_blank"><span><i class="fa fa-map-marker"></i>Spain Park High School, Jaguar Drive, Birmingham, AL, USA</span></a></span></li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
																	<div class="event_inner">
																		<div class="listing-thumb">
																			<a href='event/digital-economy-conference/index.html'>
																				<img src='<?= BASE_URL ?>/frontend/wp-content/uploads/2016/12/schedule_bg.jpg' />
																			</a>
																			<div class="event-status">$50</div>
																			<div class="event-featured"><i class="fa fa-star"></i></div>
																			<ul class="event_icon">
																				<li><a href="#" data-post-type="grids" data-post-id="2257" data-success-text="Saved" class="status-btn add-to-fav add-to-fav Save" title="Add To Bookmark"><i class="fa fa-bookmark-o"></i></a></li>
																				<li><a href="javascript:void(0)" onclick="location.http://php.webmasterdriver.net/beevent/wp-admin/admin-ajax.php?action=process_simple_interest&post_id=2257&nonce=bd6b1b441d&is_comment=0&disabled=true" class="batn interested sl-buttons sl-buttons-2257" data-nonce="bd6b1b441d" data-post-id="2257" data-iscomment="0" title="interest"><em class="sl-icons"><i class="fa fa-star-o"></i></em><span style="display:none;">interested</span></a><span id="sl-loaders"></span></li>
																				<li><a class="batn dropdown-toggle" data-toggle="dropdown" aria-expanded="false" title="Share This Event"><i class="fa fa-share"></i> </a>
																					<ul class="dropdown-menu dp_social_share">
																						<li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fdigital-economy-conference%2F" target="_blank"><i class="fa fa-facebook"></i>Facebook </a></li>
																						<li><a href="https://twitter.com/intent/tweet?text=Digital%20Economy%20Conference&amp;url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fdigital-economy-conference%2F&amp;via=beevent" target="_blank"><i class="fa fa-twitter"></i>Twitter </a></li>
																						<li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fdigital-economy-conference%2F" target="_blank"><i class="fa fa-linkedin"></i>Linkedin </a></li>
																						<li><a href="https://plus.google.com/share?url=http%3A%2F%2Fphp.webmasterdriver.net%2Fbeevent%2Fevent%2Fdigital-economy-conference%2F" target="_blank"><i class="fa fa-google-plus"></i>Google + </a></li>
																					</ul>
																				</li>
																			</ul>
																		</div>
																		<div class="js-grid-item-body event_body__BfZIC">
																			<div class="event_calendar__2x4Hv">
																				<span class="event_month__S8D_o color-primary">Wed</span>
																				<span class="event_date__2Z7TH">01</span>
																			</div>
																			<div class="event_content__2fB-4">
																				<h2 class="event_title__3C2PA"><a href="event/digital-economy-conference/index.html">Digital Economy Conference</a></h2>
																				<ul class="event_meta__CFFPg list-none">
																					<li class="event_metaList__1bEBH text-ellipsis"><span><i class="fa fa-calendar"> </i>September 1, 2021 - February 7, 2022</span></li>
																					<li class="event_metaList__1bEBH text-ellipsis"><span><i class="fa fa-clock-o"> </i>12:00 PM - 10:00 PM</span></li>
																					<li class="event_metaList__1bEBH text-ellipsis"><span><a href="#" target="_blank"><span><i class="fa fa-map-marker"></i>London Eye, The Queen's Walk, London, UK</span></a></span></li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-shortcode"></div>
													</div>
												</div>
												<div class="elementor-element elementor-element-429f457 elementor-widget elementor-widget-text-editor" data-id="429f457" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														<div class="elementor-text-editor elementor-clearfix"><a class="btn" href="featured-event.html">Browse More Event</a></div>
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
	</div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-585b409 elementor-section-full_width elementor-section-stretched newsection-padding gray-bg elementor-section-height-default elementor-section-height-default" data-id="585b409" data-element_type="section" id="testimonial" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
	<div class="elementor-container elementor-column-gap-no">
		<div class="elementor-row">
			<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5969d0a" data-id="5969d0a" data-element_type="column">
				<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-ea1f6c2 section-header text-center elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ea1f6c2" data-element_type="section">
							<div class="elementor-container elementor-column-gap-no">
								<div class="elementor-row">
									<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-9c7d5e5" data-id="9c7d5e5" data-element_type="column">
										<div class="elementor-column-wrap elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-d747d87 elementor-widget elementor-widget-text-editor" data-id="d747d87" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														<div class="elementor-text-editor elementor-clearfix">
															<h2>What Our Client Says</h2>
															<p>Hearing from our users will make you choose your mind!</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-8dd83eb elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8dd83eb" data-element_type="section">
							<div class="elementor-container elementor-column-gap-no">
								<div class="elementor-row">
									<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5a0c244" data-id="5a0c244" data-element_type="column">
										<div class="elementor-column-wrap elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-1469f18 elementor-widget elementor-widget-shortcode" data-id="1469f18" data-element_type="widget" data-widget_type="shortcode.default">
													<div class="elementor-widget-container">
														<div id="testimonial_slider" class="owl-carousel">
															<?php
																foreach($blogs as $blog){
															?>
																<div class="item">
																	<div class="testimonial_head">
																		<div class="testimonial_img"><img width="300" height="300" src="<?= BASE_URL ?>/frontend/wp-content/uploads/2017/02/team11-300x300.jpg" class="img-responsive center-block wp-post-image" alt="" loading="lazy" srcset="http://php.webmasterdriver.net/beevent/wp-content/uploads/2017/02/team11-300x300.jpg 300w, http://php.webmasterdriver.net/beevent/wp-content/uploads/2017/02/team11-150x150.jpg 150w" sizes="(max-width: 300px) 100vw, 300px" /></div>
																		<h5><?= $blog->user->full_name ?></h5><small><?= $blog->title ?></small>
																	</div>
																	<p><?= $blog->post ?></p>
																</div>
															<?php
																}
															?>
														</div>
														<div class="elementor-shortcode"></div>
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
	</div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-d148450 elementor-section-full_width elementor-section-stretched newsection-padding event-advice elementor-section-height-default elementor-section-height-default" data-id="d148450" data-element_type="section" id="Article" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
	<div class="elementor-container elementor-column-gap-no">
		<div class="elementor-row">
			<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7194a52" data-id="7194a52" data-element_type="column">
				<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-a29b874 section-header text-center elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a29b874" data-element_type="section">
							<div class="elementor-container elementor-column-gap-no">
								<div class="elementor-row">
									<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-f98040e" data-id="f98040e" data-element_type="column">
										<div class="elementor-column-wrap elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-0c87e3b elementor-widget elementor-widget-text-editor" data-id="0c87e3b" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														<div class="elementor-text-editor elementor-clearfix">
															<h2>Event Advice &amp; Tips</h2>
															<p>What’s new and upcoming, good news for our users and much more!</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-400ecb5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="400ecb5" data-element_type="section">
							<div class="elementor-container elementor-column-gap-no">
								<div class="elementor-row">
									<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-ac72b55" data-id="ac72b55" data-element_type="column">
										<div class="elementor-column-wrap elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-0d5f4ac elementor-widget elementor-widget-shortcode" data-id="0d5f4ac" data-element_type="widget" data-widget_type="shortcode.default">
													<div class="elementor-widget-container">
														<div class="row">
															<div class="col-md-9 col-lg-4">
																<div class="post-wp">
																	<div class="post-img-wp">
																		<a href="the-standard-chunk-of-lorem-ipsum-used/index.html">
																			<div class="post_img"><img width="800" height="510" src="<?= BASE_URL ?>/frontend/wp-content/uploads/2016/12/blog_800x510-1.jpg" class="img-responsive center-block wp-post-image" alt="" loading="lazy" srcset="http://php.webmasterdriver.net/beevent/wp-content/uploads/2016/12/blog_800x510-1.jpg 800w, http://php.webmasterdriver.net/beevent/wp-content/uploads/2016/12/blog_800x510-1-300x191.jpg 300w, http://php.webmasterdriver.net/beevent/wp-content/uploads/2016/12/blog_800x510-1-768x490.jpg 768w" sizes="(max-width: 800px) 100vw, 800px" /></div>
																		</a>
																	</div>
																	<div class="post_meta">
																		<span>January 30, 2020 </span> |
																		<span>No Comments</span>
																	</div>
																	<h4><a href="the-standard-chunk-of-lorem-ipsum-used/index.html">The standard chunk of Lorem Ipsum used</a></h4>
																</div>
															</div>
															<div class="col-md-9 col-lg-4">
																<div class="post-wp">
																	<div class="post-img-wp">
																		<a href="pork-loin-leberkas-ribeye-capicola-2/index.html">
																			<div class="post_img"><img width="800" height="510" src="<?= BASE_URL ?>/frontend/wp-content/uploads/2016/12/blog_800x510_2.jpg" class="img-responsive center-block wp-post-image" alt="" loading="lazy" srcset="http://php.webmasterdriver.net/beevent/wp-content/uploads/2016/12/blog_800x510_2.jpg 800w, http://php.webmasterdriver.net/beevent/wp-content/uploads/2016/12/blog_800x510_2-300x191.jpg 300w, http://php.webmasterdriver.net/beevent/wp-content/uploads/2016/12/blog_800x510_2-768x490.jpg 768w" sizes="(max-width: 800px) 100vw, 800px" /></div>
																		</a>
																	</div>
																	<div class="post_meta">
																		<span>January 21, 2020 </span> |
																		<span>No Comments</span>
																	</div>
																	<h4><a href="pork-loin-leberkas-ribeye-capicola-2/index.html">Pork loin leberkas ribeye capicola</a></h4>
																</div>
															</div>
															<div class="col-md-9 col-lg-4">
																<div class="post-wp">
																	<div class="post-img-wp">
																		<a href="it-is-a-long-established-fact/index.html">
																			<div class="post_img"><img width="1920" height="1275" src="<?= BASE_URL ?>/frontend/wp-content/uploads/2020/01/audience-828584_1920.jpg" class="img-responsive center-block wp-post-image" alt="" loading="lazy" srcset="http://php.webmasterdriver.net/beevent/wp-content/uploads/2020/01/audience-828584_1920.jpg 1920w, http://php.webmasterdriver.net/beevent/wp-content/uploads/2020/01/audience-828584_1920-300x199.jpg 300w, http://php.webmasterdriver.net/beevent/wp-content/uploads/2020/01/audience-828584_1920-1024x680.jpg 1024w, http://php.webmasterdriver.net/beevent/wp-content/uploads/2020/01/audience-828584_1920-768x510.jpg 768w, http://php.webmasterdriver.net/beevent/wp-content/uploads/2020/01/audience-828584_1920-1536x1020.jpg 1536w" sizes="(max-width: 1920px) 100vw, 1920px" /></div>
																		</a>
																	</div>
																	<div class="post_meta">
																		<span>January 11, 2020 </span> |
																		<span>No Comments</span>
																	</div>
																	<h4><a href="it-is-a-long-established-fact/index.html">It is a long established fact</a></h4>
																</div>
															</div>
														</div>
														<div class="elementor-shortcode"></div>
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
	</div>
</section>
<section class="inner-pages text-center"
    style="background:url(<?= BASE_URL ?>/frontend/wp-content/uploads/2017/02/blog_800x510_5.jpg)">
    <div class="container">
        <div class="white_text div_zindex">
            <h1 class="page_title">Upcoming Event</h1>
        </div>
    </div>
    <div class="dark-overlay"></div>
</section>

<section class="our_articles single_article">
    <div class="container">
        <div class="row">
			<?php
				foreach($upComingEvents as $event){
			?>
				<!-- Incoming -->
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 event_listing">
					<div class="event_inner">
						<div class="listing-thumb">
							<a href='<?= BASE_URL ?>/guides/event-details/<?= $event->id ?>'>
								<img src='<?= $event->images[0] ?>' />
							</a>
							<div class="event-status">ongoing </div>
							<div class="event-price">EGP <?= $event->ticket_types[0]->_joinData->price ?></div>
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
								<span class="event_month__S8D_o color-primary"><?= date('D', strtotime($event->ticket_types[0]->_joinData->date_from)) ?></span>
								<span class="event_date__2Z7TH"><?= date('d', strtotime($event->ticket_types[0]->_joinData->date_from)) ?></span>
							</div>
							<div class="event_content__2fB-4">
								<h2 class="event_title__3C2PA"><a href="event/circus-carnival/index.html"><?= $event->name ?></a></h2>
								<ul class="event_meta__CFFPg list-none">
									<li class="event_metaList__1bEBH text-ellipsis"><span><i class="fa fa-calendar"> </i><?= date("jS F Y", strtotime($event->ticket_types[0]->_joinData->date_from)) ?> - <?= date("jS F Y", strtotime($event->ticket_types[0]->_joinData->date_to)) ?></span></li>
									<li class="event_metaList__1bEBH text-ellipsis"><span><i class="fa fa-clock-o"> </i><?= $event->ticket_types[0]->_joinData->time->format('H:i:s A') ?></span></li>
									<li class="event_metaList__1bEBH text-ellipsis"><span><a href="#" target="_blank"><span><i class="fa fa-map-marker"></i><?= $event->city->name ?>, <?= $event->country->name ?></span></a></span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			<?php
				}
			?>
        </div>
    </div>
</section>
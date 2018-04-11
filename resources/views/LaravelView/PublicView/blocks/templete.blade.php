@include('LaravelView.PublicView.blocks.header')
		@yield('sub-header')
		<main id="main" class="haslayout">
			<div id="twocolumns" class="container">
				<div class="row">
					<!-- <div id="content" class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
						<article class="tg-post">
							<figure>
								<img src="images/05-img.jpg" alt="image description">
								<div class="tg-img-hover">
									<div class="holder">
										<a href="#"><i class="fa fa-link"></i></a>
										<a href="#"><i class="fa fa-search-plus"></i></a>
									</div>
								</div>
							</figure>
							<div class="tg-post-content">
								<div class="post-meta category-name">
									<span><a href="#">LifeStyle</a></span>
								</div>
								<h3><a href="#">Beauty Of Nature</a></h3>
								<div class="post-meta">
									<span class="date">Sep, 17 2015</span>
								</div>
								<div class="description">
									<p>Sed quis sollicitudin eros, non lobortis purus. Ut enim lacus, efficitur non blandit ac, sollicitudin vel nibh. Aenean rhoncus pharetra ex. Sed facilisis interdum nunc, et tempus dolor gravida nec. Vivamus ultrices nisi dui, nec condimentum est ornare eu. Donec sed molestie arcu. Morbi eu suscipit felis, iaculis faucibus libero. Suspendisse eu augue ac nisi maximus posuere vitae finibus risus.</p>
									<p>Aenean vestibulum diam sit amet leo tristique vehicula. Ut ullamcorper nulla eu magna tincidunt consectetur. Nulla elementum gravida suscipit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed euismod suscipit auctor. Suspendisse sapien sapien, porttitor vel posuere laoreet, vulputate non elit. Nunc feugiat, erat ut vehicula vehicula, tellus quam pulvinar augue, vel cursus massa erat</p>
								</div>
								<a href="#" class="tg-btn-countinuereading">countinue reading</a>
								<div class="tg-post-foot">
									<ul class="post-social-icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
										<li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
									</ul>
									<div class="post-meta pull-right">
										<span class="tg-post-author">Post By : <a href="#">Jhone Albert</a></span>
									</div>
								</div>
							</div>
						</article>
						<article class="tg-post gallery-post">
							<div class="tg-gallery">
								<figure class="small">
									<img src="images/06-img.jpg" alt="image description">
									<div class="tg-img-hover">
										<div class="holder">
											<a href="#"><i class="fa fa-link"></i></a>
											<a href="#"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</figure>
								<figure class="large">
									<img src="images/07-img.jpg" alt="image description">
									<div class="tg-img-hover">
										<div class="holder">
											<a href="#"><i class="fa fa-link"></i></a>
											<a href="#"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</figure>
								<figure class="large">
									<img src="images/08-img.jpg" alt="image description">
									<div class="tg-img-hover">
										<div class="holder">
											<a href="#"><i class="fa fa-link"></i></a>
											<a href="#"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</figure>
								<figure class="small">
									<img src="images/09-img.jpg" alt="image description">
									<div class="tg-img-hover">
										<div class="holder">
											<a href="#"><i class="fa fa-link"></i></a>
											<a href="#"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</figure>
							</div>
							<div class="tg-post-content">
								<div class="post-meta category-name">
									<span><a href="#">Gallery</a></span>
								</div>
								<h3><a href="#">collection of images</a></h3>
								<div class="post-meta">
									<span class="date">Sep, 17 2015</span>
								</div>
								<div class="description">
									<p>Sed quis sollicitudin eros, non lobortis purus. Ut enim lacus, efficitur non blandit ac, sollicitudin vel nibh. Aenean rhoncus pharetra ex. Sed facilisis interdum nunc, et tempus dolor gravida nec. Vivamus ultrices nisi dui, nec condimentum est ornare eu. Donec sed molestie arcu. Morbi eu suscipit felis, iaculis faucibus libero. Suspendisse eu augue ac nisi maximus posuere vitae finibus risus.</p>
									<p>Aenean vestibulum diam sit amet leo tristique vehicula. Ut ullamcorper nulla eu magna tincidunt consectetur. Nulla elementum gravida suscipit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed euismod suscipit auctor. Suspendisse sapien sapien, porttitor vel posuere laoreet, vulputate non elit. Nunc feugiat, erat ut vehicula vehicula, tellus quam pulvinar augue, vel cursus massa erat</p>
								</div>
								<a href="#" class="tg-btn-countinuereading">countinue reading</a>
								<div class="tg-post-foot">
									<ul class="post-social-icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
										<li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
									</ul>
									<div class="post-meta pull-right">
										<span class="tg-post-author">Post By : <a href="#">Jhone Albert</a></span>
									</div>
								</div>
							</div>
						</article>
						<article class="tg-post tg-post-slider">
							<div id="tg-post-slider" class="post-slider">
								<div class="item"><figure><img src="images/10-img.jpg" alt="image description"></figure></div>
								<div class="item"><figure><img src="images/11-img.jpg" alt="image description"></figure></div>
								<div class="item"><figure><img src="images/12-img.jpg" alt="image description"></figure></div>
							</div>
							<div class="tg-post-content">
								<div class="post-meta category-name">
									<span><a href="#">LifeStyle</a></span>
								</div>
								<h3><a href="#">Trip to singapore</a></h3>
								<div class="post-meta">
									<span class="date">Sep, 17 2015</span>
								</div>
								<div class="description">
									<p>Sed quis sollicitudin eros, non lobortis purus. Ut enim lacus, efficitur non blandit ac, sollicitudin vel nibh. Aenean rhoncus pharetra ex. Sed facilisis interdum nunc, et tempus dolor gravida nec. Vivamus ultrices nisi dui, nec condimentum est ornare eu. Donec sed molestie arcu. Morbi eu suscipit felis, iaculis faucibus libero. Suspendisse eu augue ac nisi maximus posuere vitae finibus risus.</p>
									<p>Aenean vestibulum diam sit amet leo tristique vehicula. Ut ullamcorper nulla eu magna tincidunt consectetur. Nulla elementum gravida suscipit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed euismod suscipit auctor. Suspendisse sapien sapien, porttitor vel posuere laoreet, vulputate non elit. Nunc feugiat, erat ut vehicula vehicula, tellus quam pulvinar augue, vel cursus massa erat</p>
								</div>
								<a href="#" class="tg-btn-countinuereading">countinue reading</a>
								<div class="tg-post-foot">
									<ul class="post-social-icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
										<li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
									</ul>
									<div class="post-meta pull-right">
										<span class="tg-post-author">Post By : <a href="#">Jhone Albert</a></span>
									</div>
								</div>
							</div>
						</article>
						<article class="tg-post tg-video-post">
							<div class="video">
								<iframe src="https://player.vimeo.com/video/140085689?title=0&amp;byline=0"></iframe>
							</div>
							<div class="tg-post-content">
								<div class="post-meta category-name">
									<span><a href="#">video</a></span>
								</div>
								<h3><a href="#">Adventure in panama</a></h3>
								<div class="post-meta">
									<span class="date">Sep, 17 2015</span>
								</div>
								<div class="description">
									<p>Sed quis sollicitudin eros, non lobortis purus. Ut enim lacus, efficitur non blandit ac, sollicitudin vel nibh. Aenean rhoncus pharetra ex. Sed facilisis interdum nunc, et tempus dolor gravida nec. Vivamus ultrices nisi dui, nec condimentum est ornare eu. Donec sed molestie arcu. Morbi eu suscipit felis, iaculis faucibus libero. Suspendisse eu augue ac nisi maximus posuere vitae finibus risus.</p>
									<p>Aenean vestibulum diam sit amet leo tristique vehicula. Ut ullamcorper nulla eu magna tincidunt consectetur. Nulla elementum gravida suscipit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed euismod suscipit auctor. Suspendisse sapien sapien, porttitor vel posuere laoreet, vulputate non elit. Nunc feugiat, erat ut vehicula vehicula, tellus quam pulvinar augue, vel cursus massa erat</p>
								</div>
								<a href="#" class="tg-btn-countinuereading">countinue reading</a>
								<div class="tg-post-foot">
									<ul class="post-social-icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
										<li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
									</ul>
									<div class="post-meta pull-right">
										<span class="tg-post-author">Post By : <a href="#">Jhone Albert</a></span>
									</div>
								</div>
							</div>
						</article>
						<article class="tg-post tg-audio-post">
							<div class="audio">
								<iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/197106761&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
							</div>
							<div class="tg-post-content">
								<div class="post-meta category-name">
									<span><a href="#">audio</a></span>
								</div>
								<h3><a href="#">floting point melody</a></h3>
								<div class="post-meta">
									<span class="date">Sep, 17 2015</span>
								</div>
								<div class="description">
									<p>Sed quis sollicitudin eros, non lobortis purus. Ut enim lacus, efficitur non blandit ac, sollicitudin vel nibh. Aenean rhoncus pharetra ex. Sed facilisis interdum nunc, et tempus dolor gravida nec. Vivamus ultrices nisi dui, nec condimentum est ornare eu. Donec sed molestie arcu. Morbi eu suscipit felis, iaculis faucibus libero. Suspendisse eu augue ac nisi maximus posuere vitae finibus risus.</p>
								</div>
								<a href="#" class="tg-btn-countinuereading">countinue reading</a>
								<div class="tg-post-foot">
									<ul class="post-social-icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
										<li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
									</ul>
									<div class="post-meta pull-right">
										<span class="tg-post-author">Post By : <a href="#">Jhone Albert</a></span>
									</div>
								</div>
							</div>
						</article>
						<article class="tg-post tg-blockpuote-post">
							<figure>
								<img src="images/13-img.jpg" alt="image description">
								<div class="blockquote">
									<blockquote>
										<q>IBut, yo I must explain to you how all this mistak is a s extreor pursues or have a lot odesires to obtain pains be of itself,</q>
									</blockquote>
									<div class="writter-name">
										<span>Harry Jack</span>
									</div>
								</div>
							</figure>
							<div class="tg-post-content">
								<div class="post-meta category-name">
									<span><a href="#">block quote</a></span>
								</div>
								<h3><a href="#">Quote post share friends</a></h3>
								<div class="post-meta">
									<span class="date">Sep, 17 2015</span>
								</div>
								<div class="description">
									<p>Sed quis sollicitudin eros, non lobortis purus. Ut enim lacus, efficitur non blandit ac, sollicitudin vel nibh. Aenean rhoncus pharetra ex. Sed facilisis interdum nunc, et tempus dolor gravida nec. Vivamus ultrices nisi dui, nec condimentum est ornare eu. Donec sed molestie arcu. Morbi eu suscipit felis, iaculis faucibus libero. Suspendisse eu augue ac nisi maximus posuere vitae finibus risus.</p>
									<p>Aenean vestibulum diam sit amet leo tristique vehicula. Ut ullamcorper nulla eu magna tincidunt consectetur. Nulla elementum gravida suscipit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed euismod suscipit auctor. Suspendisse sapien sapien, porttitor vel posuere laoreet, vulputate non elit. Nunc feugiat, erat ut vehicula vehicula, tellus quam pulvinar augue, vel cursus massa erat</p>
								</div>
								<a href="#" class="tg-btn-countinuereading">countinue reading</a>
								<div class="tg-post-foot">
									<ul class="post-social-icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
										<li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
									</ul>
									<div class="post-meta pull-right">
										<span class="tg-post-author">Post By : <a href="#">Jhone Albert</a></span>
									</div>
								</div>
							</div>
						</article>
						<article class="tg-post tg-blockpuote">
							<figure>
								<img src="images/14-img.jpg" alt="image description">
								<div class="tg-img-hover">
									<div class="holder">
										<a href="#"><i class="fa fa-link"></i></a>
										<a href="#"><i class="fa fa-search-plus"></i></a>
									</div>
								</div>
							</figure>
							<div class="tg-post-content">
								<div class="post-meta category-name">
									<span><a href="#">block quote</a></span>
								</div>
								<h3><a href="#">Happiness of the day</a></h3>
								<div class="post-meta">
									<span class="date">Sep, 17 2015</span>
								</div>
								<div class="description">
									<p>Sed quis sollicitudin eros, non lobortis purus. Ut enim lacus, efficitur non blandit ac, sollicitudin vel nibh. Aenean rhoncus pharetra ex. Sed facilisis interdum nunc, et tempus dolor gravida nec. Vivamus ultrices nisi dui, nec condimentum est ornare eu. Donec sed molestie arcu. Morbi eu suscipit felis, iaculis faucibus libero. Suspendisse eu augue ac nisi maximus posuere vitae finibus risus.</p>
									<div class="blockquote">
										<blockquote>
											<q>Aenean Hav’ e vestibulum diam Suspendisse sapien sapien, porttitor vel posugaere laoreet, vulputate non elit. Nunc feugiat, erat ut vehicula vehicula, tellus quam pulvinar augue, vel cursus massa erat</q>
										</blockquote>
									</div>
									<p>Aenean vestibulum diam sit amet leo tristique vehicula. Ut ullamcorper nulla eu magna tincidunt consectetur. Nulla elementum gravida suscipit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed euismod suscipit auctor. Suspendisse sapien sapien, porttitor vel posuere laoreet, vulputate non elit. Nunc feugiat, erat ut vehicula vehicula, tellus quam pulvinar augue, vel cursus massa erat</p>
								</div>
								<a href="#" class="tg-btn-countinuereading">countinue reading</a>
								<div class="tg-post-foot">
									<ul class="post-social-icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
										<li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
									</ul>
									<div class="post-meta pull-right">
										<span class="tg-post-author">Post By : <a href="#">Jhone Albert</a></span>
									</div>
								</div>
							</div>
						</article>
						<article class="tg-post tg-audio-post">
							<div class="tg-post-content">
								<div class="post-meta category-name">
									<span><a href="#">Simple Post</a></span>
								</div>
								<h3><a href="#">simple blog post</a></h3>
								<div class="post-meta">
									<span class="date">Sep, 17 2015</span>
								</div>
								<div class="description">
									<p>Sed quis sollicitudin eros, non lobortis purus. Ut enim lacus, efficitur non blandit ac, sollicitudin vel nibh. Aenean rhoncus pharetra ex. Sed facilisis interdum nunc, et tempus dolor gravida nec. Vivamus ultrices nisi dui, nec condimentum est ornare eu. Donec sed molestie arcu. Morbi eu suscipit felis, iaculis faucibus libero. Suspendisse eu augue ac nisi maximus posuere vitae finibus risus.</p>
									<p>Aenean vestibulum diam sit amet leo tristique vehicula. Ut ullamcorper nulla eu magna tincidunt consectetur. Nulla elementum gravida suscipit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed euismod suscipit auctor. Suspendisse sapien sapien, porttitor vel posuere laoreet, vulputate non elit. Nunc feugiat, erat ut vehicula vehicula, tellus quam pulvinar augue, vel cursus massa erat</p>
								</div>
								<a href="#" class="tg-btn-countinuereading">countinue reading</a>
								<div class="tg-post-foot">
									<ul class="post-social-icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
										<li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
									</ul>
									<div class="post-meta pull-right">
										<span class="tg-post-author">Post By : <a href="#">Jhone Albert</a></span>
									</div>
								</div>
							</div>
						</article>
						<div class="next-previous">
							<span class="older-post"><a href="#">older post</a></span>
						</div>
					</div> -->
					@yield('main')
					@include('LaravelView.PublicView.blocks.right-bar')
				</div>
			</div>
		</main>
@include('LaravelView.PublicView.blocks.footer')

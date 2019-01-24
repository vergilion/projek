<style type="text/css">
	.white {
		color: #ffffff;
	}
</style>
<!-- start: sidebar -->
<aside id="sidebar-left" class="sidebar-left">

	<div class="sidebar-header">
		<div class="sidebar-title" style="color:#ffffff">
			Navigation
		</div>
		<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
			<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
		</div>
	</div>

	<div class="nano">
		<div class="nano-content">
			<nav id="menu" class="nav-main" role="navigation">
				<ul class="nav nav-main">
					<li class="nav-active">
						<a href="{{ URL::route('dashboard') }}">
							<i class="fa fa-home" aria-hidden="true"></i>
							<span>Dashboard</span>
						</a>
					</li>
					<li class="nav-parent">
						<a>
							<i class="fa fa-user" aria-hidden="true"></i>
							<span>Masters</span>
						</a>
						<ul class="nav nav-children">
							<li>
								<a href="#">
									 User
								</a>
							</li>
							<li>
								<a href="#">
									 Produk
								</a>
							</li>
							<li>
								<a href="#">
									 Kategori
								</a>
							</li>
							<li>
								<a href="#">
									Menu
								</a>
							</li>
							<li>
								<a href="#">
									 Invoice
								</a>
							</li>							
						</ul>
					</li>
					<li class="nav-parent">
						<a>
							<i class="fa fa-tasks" aria-hidden="true"></i>
							<span>UI Elements</span>
						</a>
						<ul class="nav nav-children">
							<li>
								<a href="ui-elements-typography.html">
									 Typography
								</a>
							</li>
							<li>
								<a href="ui-elements-icons.html">
									 Icons
								</a>
							</li>
							<li>
								<a href="ui-elements-tabs.html">
									 Tabs
								</a>
							</li>
							<li>
								<a href="ui-elements-panels.html">
									 Panels
								</a>
							</li>
							<li>
								<a href="ui-elements-widgets.html">
									 Widgets
								</a>
							</li>
							<li>
								<a href="ui-elements-portlets.html">
									 Portlets
								</a>
							</li>
							<li>
								<a href="ui-elements-buttons.html">
									 Buttons
								</a>
							</li>
							<li>
								<a href="ui-elements-alerts.html">
									 Alerts
								</a>
							</li>
							<li>
								<a href="ui-elements-notifications.html">
									 Notifications
								</a>
							</li>
							<li>
								<a href="ui-elements-modals.html">
									 Modals
								</a>
							</li>
							<li>
								<a href="ui-elements-lightbox.html">
									 Lightbox
								</a>
							</li>
							<li>
								<a href="ui-elements-progressbars.html">
									 Progress Bars
								</a>
							</li>
							<li>
								<a href="ui-elements-sliders.html">
									 Sliders
								</a>
							</li>
							<li>
								<a href="ui-elements-carousels.html">
									 Carousels
								</a>
							</li>
							<li>
								<a href="ui-elements-accordions.html">
									 Accordions
								</a>
							</li>
							<li>
								<a href="ui-elements-nestable.html">
									 Nestable
								</a>
							</li>
							<li>
								<a href="ui-elements-tree-view.html">
									 Tree View
								</a>
							</li>
							<li>
								<a href="ui-elements-grid-system.html">
									 Grid System
								</a>
							</li>
							<li>
								<a href="ui-elements-charts.html">
									 Charts
								</a>
							</li>
							<li>
								<a href="ui-elements-animations.html">
									 Animations
								</a>
							</li>
							<li>
								<a href="ui-elements-extra.html">
									 Extra
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-parent">
						<a>
							<i class="fa fa-align-left" aria-hidden="true"></i>
							<span>Menu Levels</span>
						</a>
						<ul class="nav nav-children">
							<li>
								<a>First Level</a>
							</li>
							<li class="nav-parent">
								<a>Second Level</a>
								<ul class="nav nav-children">
									<li class="nav-parent">
										<a>Third Level</a>
										<ul class="nav nav-children">
											<li>
												<a>Third Level Link #1</a>
											</li>
											<li>
												<a>Third Level Link #2</a>
											</li>
										</ul>
									</li>
									<li>
										<a>Second Level Link #1</a>
									</li>
									<li>
										<a>Second Level Link #2</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
							<i class="fa fa-power-off" aria-hidden="true"></i>
							<span>Logout <em class="not-included"></em></span>
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
					</li>
				</ul>
			</nav>

			<hr class="separator" />

			<div class="sidebar-widget widget-tasks">
				<div class="widget-header">
					<h6 style="color:#ffffff">Projects</h6>
					<div class="widget-toggle" style="color:#ffffff">+</div>
				</div>
				<div class="widget-content">
					<ul class="list-unstyled m-none">
						<li><a href="#">Sample Link</a></li>
					</ul>
				</div>
			</div>

			<hr class="separator" />

			
		</div>
	</div>
</aside>
<!-- end: sidebar -->

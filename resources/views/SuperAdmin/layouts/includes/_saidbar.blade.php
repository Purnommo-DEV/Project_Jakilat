<div class="sidebar sidebar-style-2">			
	<div class="sidebar-wrapper scrollbar scrollbar-inner">
		<div class="sidebar-content">
			<div class="user">
				<div class="avatar-sm float-left mr-2">
					<img src="{{asset('admin/assets/img/profile.jpg')}}" alt="..." class="avatar-img rounded-circle">
				</div>
				<div class="info">
					<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
						<span>
							{{ Auth::user()->name }}
							<span class="user-level">Administrator</span>
							<span class="caret"></span>
						</span>
					</a>
					<div class="clearfix"></div>

					<div class="collapse in" id="collapseExample">
						<ul class="nav">
							<li>
								<a href="#profile">
									<span class="link-collapse">My Profile</span>
								</a>
							</li>
							<li>
								<a href="#edit">
									<span class="link-collapse">Edit Profile</span>
								</a>
							</li>
							<li>
								<a href="#settings">
									<span class="link-collapse">Settings</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<ul class="nav nav-primary">
				<li class="nav-item {{request()->is('berandaSuperAdmin') ? 'active' : ''}}">
					<a href="/berandaSuperAdmin">
						<i class="fas flaticon-shapes"></i>
						<p>Beranda</p>
					</a>
				</li>
				<li class="nav-item {{request()->is('manajemenUser') ? 'active' : ''}}">
					<a href="/manajemenUser">
						<i class="fas flaticon-agenda-1"></i>
						<p>Manajemen User</p>
					</a>
				</li>
				<li class="nav-item {{request()->is('keahlian') ? 'active' : ''}}">
					<a href="/keahlian">
						<i class="fas flaticon-agenda-1"></i>
						<p>Keahlian</p>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
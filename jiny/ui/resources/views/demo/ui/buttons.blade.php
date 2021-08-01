<x-jinyui-theme theme="adminkit" class="bootstrap">

	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Buttons</h1>

		<div class="row">
			<div class="col-12 col-lg-6">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Basic Buttons</h5>
						<h6 class="card-subtitle text-muted">기본적인 부트스트랩 버튼을 생성할 수있습니다.</h6>
					</div>
					<div class="card-body text-center">

						<div class="mb-3">
							<x-button primary>Primary</x-button>
							<x-button secondary>Secondary</x-button>
							<x-button success>Success</x-button>
							<x-button danger>Danger</x-button>
							<x-button warning>Warning</x-button>
							<x-button info>Info</x-button>									
						</div>

						<div>
							<x-button primary disabled>Primary</x-button>
							<x-button secondary disabled>Secondary</x-button>
							<x-button success disabled>Success</x-button>
							<x-button danger disabled>Danger</x-button>
							<x-button warning disabled>Warning</x-button>
							<x-button info disabled>Info</x-button>
						</div>

					</div>
				</div>
			</div>
			<div class="col-12 col-lg-6">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Rounded Buttons</h5>
						<h6 class="card-subtitle text-muted">Rounded Bootstrap buttons.</h6>
					</div>
					<div class="card-body text-center">
						<div class="mb-3">
							<x-button primary round>Primary</x-button>
							<x-button secondary round>Secondary</x-button>
							<x-button success round>Success</x-button>
							<x-button danger round>Danger</x-button>
							<x-button warning round>Warning</x-button>
							<x-button info round>Info</x-button>						
						</div>

						<div>
							<x-button primary round disabled>Primary</x-button>
							<x-button secondary round disabled>Secondary</x-button>
							<x-button success round disabled>Success</x-button>
							<x-button danger round disabled>Danger</x-button>
							<x-button warning round disabled>Warning</x-button>
							<x-button info round disabled>Info</x-button>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-lg-6">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Outline Buttons</h5>
						<h6 class="card-subtitle text-muted">Buttons without background color.</h6>
					</div>
					<div class="card-body text-center">
						<div class="mb-3">
							<x-button primary outline>Primary</x-button>
							<x-button secondary outline>Secondary</x-button>
							<x-button success outline>Success</x-button>
							<x-button danger outline>Danger</x-button>
							<x-button warning outline>Warning</x-button>
							<x-button info outline>Info</x-button>						
						</div>
						
						<div>
							<x-button primary outline disabled>Primary</x-button>
							<x-button secondary outline disabled>Secondary</x-button>
							<x-button success outline disabled>Success</x-button>
							<x-button danger outline disabled>Danger</x-button>
							<x-button warning outline disabled>Warning</x-button>
							<x-button info outline disabled>Info</x-button>
						</div>

		
					</div>
				</div>
			</div>

			<div class="col-12 col-lg-6">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Square Buttons</h5>
						<h6 class="card-subtitle text-muted">Buttons without border radius.</h6>
					</div>
					<div class="card-body text-center">
						<div class="mb-3">
							<x-button primary square>Primary</x-button>
							<x-button secondary square>Secondary</x-button>
							<x-button success square>Success</x-button>
							<x-button danger square>Danger</x-button>
							<x-button warning square>Warning</x-button>
							<x-button info square>Info</x-button>						
						</div>
						
						<div>
							<x-button primary square disabled>Primary</x-button>
							<x-button secondary square disabled>Secondary</x-button>
							<x-button success square disabled>Success</x-button>
							<x-button danger square disabled>Danger</x-button>
							<x-button warning square disabled>Warning</x-button>
							<x-button info square disabled>Info</x-button>
						</div>

					</div>
				</div>
			</div>

			<div class="col-12 col-lg-6">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Icon Buttons</h5>
						<h6 class="card-subtitle text-muted">Default Bootstrap buttons with icons.</h6>
					</div>
					<div class="card-body text-center">
						<div class="mb-3">
							<x-button primary><i class="far fa-smile"></i> Primary</x-button>
							<x-button secondary><i class="fas fa-globe-americas"></i> Secondary</x-button>
							<x-button success><i class="fas fa-check"></i> Success</x-button>
							<x-button danger><i class="fas fa-times"></i> Danger</x-button>
							<x-button warning><i class="fas fa-exclamation"></i> Warning</x-button>
							<x-button info><i class="fas fa-info"></i> Info</x-button>
						</div>

						<div>
							<x-button primary><i class="far fa-smile"></i></x-button>
							<x-button secondary><i class="fas fa-globe-americas"></i></x-button>
							<x-button success><i class="fas fa-check"></i></x-button>
							<x-button danger><i class="fas fa-times"></i></x-button>
							<x-button warning><i class="fas fa-exclamation"></i></x-button>
							<x-button info><i class="fas fa-info"></i></x-button>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-lg-6">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Social Buttons</h5>
						<h6 class="card-subtitle text-muted">Social buttons with icons.</h6>
					</div>
					<div class="card-body text-center">
						<div class="mb-3">
							<x-button class="mb-1 btn-facebook"><i class="align-middle fab fa-facebook"></i> Facebook</x-button>
							<x-button class="mb-1 btn-twitter"><i class="align-middle fab fa-twitter"></i> Twitter</x-button>
							<x-button class="mb-1 btn-google"><i class="align-middle fab fa-google"></i> Google</x-button>
							<x-button class="mb-1 btn-youtube"><i class="align-middle fab fa-youtube"></i> Youtube</x-button>
							<x-button class="mb-1 btn-vimeo"><i class="align-middle fab fa-vimeo"></i> Vimeo</x-button>
							<x-button class="mb-1 btn-dribbble"><i class="align-middle fab fa-dribbble"></i> Dribbble</x-button>
							<x-button class="mb-1 btn-github"><i class="align-middle fab fa-github"></i> Github</x-button>
							<x-button class="mb-1 btn-instagram"><i class="align-middle fab fa-instagram"></i> Instagram</x-button>
							<x-button class="mb-1 btn-pinterest"><i class="align-middle fab fa-pinterest"></i> Pinterest</x-button>
							<x-button class="mb-1 btn-flickr"><i class="align-middle fab fa-flickr"></i> Flickr</x-button>
							<x-button class="mb-1 btn-bitbucket"><i class="align-middle fab fa-bitbucket"></i> Bitbucket</x-button>
						</div>
						<div>
							<x-button class="mb-1 btn-facebook"><i class="align-middle fab my-1 fa-facebook"></i></x-button>
							<x-button class="mb-1 btn-twitter"><i class="align-middle fab my-1 fa-twitter"></i></x-button>
							<x-button class="mb-1 btn-google"><i class="align-middle fab my-1 fa-google"></i></x-button>
							<x-button class="mb-1 btn-youtube"><i class="align-middle fab my-1 fa-youtube"></i></x-button>
							<x-button class="mb-1 btn-vimeo"><i class="align-middle fab my-1 fa-vimeo"></i></x-button>
							<x-button class="mb-1 btn-dribbble"><i class="align-middle fab my-1 fa-dribbble"></i></x-button>
							<x-button class="mb-1 btn-github"><i class="align-middle fab my-1 fa-github"></i></x-button>
							<x-button class="mb-1 btn-instagram"><i class="align-middle fab my-1 fa-instagram"></i></x-button>
							<x-button class="mb-1 btn-pinterest"><i class="align-middle fab my-1 fa-pinterest"></i></x-button>
							<x-button class="mb-1 btn-flickr"><i class="align-middle fab my-1 fa-flickr"></i></x-button>
							<x-button class="mb-1 btn-bitbucket"><i class="align-middle fab my-1 fa-bitbucket"></i></x-button>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-lg-6">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Button Sizes</h5>
						<h6 class="card-subtitle text-muted">Fancy larger or smaller buttons.</h6>
					</div>
					<div class="card-body text-center">
						<div class="mb-3">
							<x-button primary small>Small</x-button>
							<x-button primary>Medium</x-button>
							<x-button primary large>Large</x-button>
						</div>
						<div>
							<x-button primary small><i class="fas fa-globe-americas"></i> Small</x-button>
							<x-button primary><i class="fas fa-globe-americas"></i> Medium</x-button>
							<x-button primary large><i class="fas fa-globe-americas"></i> Large</x-button>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-12 col-lg-6">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Button Dropdown</h5>
						<h6 class="card-subtitle text-muted">Dropdowns styles with buttons.</h6>
					</div>
					<div class="card-body text-center">
						<div class="mb-3">

							<x-button-group>
								<x-button-dropdown primary>Primary</x-button-dropdown>	
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Separated link</a>
								</div>
							</x-button-group>
							
							<x-button-group>
								<x-button secondary dropdown>Secondary</x-button>										
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Separated link</a>
								</div>
							</x-button-group>
							
							<x-button-group>
								<x-button success dropdown>Success</x-button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Separated link</a>
								</div>
							</x-button-group>
							
							<x-button-group>
								<x-button danger dropdown>Danger</x-button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Separated link</a>
								</div>
							</x-button-group>

							<x-button-group>
								<x-button warning dropdown>Warning</x-button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Separated link</a>
								</div>
							</x-button-group>

							<x-button-group>
								<x-button info dropdown>Info</x-button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Separated link</a>
								</div>
							</x-button-group>

						</div>

						<div>
							<x-button-group>
								<x-button-dropdown primary small>Primary</x-button-dropdown>	
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Separated link</a>
								</div>
							</x-button-group>
							
							<x-button-group>
								<x-button secondary small dropdown>Secondary</x-button>										
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Separated link</a>
								</div>
							</x-button-group>
							
							<x-button-group>
								<x-button success small dropdown>Success</x-button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Separated link</a>
								</div>
							</x-button-group>
							
							<x-button-group>
								<x-button danger small dropdown>Danger</x-button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Separated link</a>
								</div>
							</x-button-group>

							<x-button-group>
								<x-button warning small dropdown>Warning</x-button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Separated link</a>
								</div>
							</x-button-group>

							<x-button-group>
								<x-button info small dropdown>Info</x-button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Separated link</a>
								</div>
							</x-button-group>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

</x-jinyui-theme>   
<div class="wrapper">
    <div class="content-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-4">
					<div class="py-4 border-bottom">
						<div class="float-left"><a href="<?php echo base_url(); ?>event" class="badge bg-white back-arrow"><i class="las la-angle-left"></i></a></div>
						<div class="form-title text-center">
							<h3>Add One-on-One Event Type</h3>
						</div>
					</div>
				</div>
				<form action="<?php echo base_url(); ?>event/addevent?action=save" method="POST" enctype="multipart/form-data">
					<div class="col-lg-12">
						<div class="card card-block card-stretch create-workform">                    
							<div class="card-body p-5">
								<div class="row">
									<div class="col-lg-6 mb-4">
										<label class="title">Event name *</label>
										<input name="eventname" type="text" class="form-control" placeholder="Name..">
									</div>
									<div class="col-lg-6 mb-4">
										<label class="title">Location</label>
										<div class="search-dropdown-select device-search">   
											<div class="input-prepend input-append">
												<div class="btn-group w-100">
													<label class="mb-0 w-100 form-control dropdown-toggle" data-toggle="dropdown">
													<input name="eventlocation" class="dropdown-toggle search-query text search-input" type="text"  placeholder="Add a Location"><span class="search-replace"></span>
													<span class="caret"><!--icon--></span>
													</label>
													<ul class="dropdown-menu w-100 border-none">
														<li>
															<a href="#">
																<div class="item">
																	<div class="d-flex align-items-center">
																		<div class="i-icon text-danger">
																			<i class="fas fa-map-marker-alt"></i>
																		</div>
																		<div class="ml-2">
																			<h6>In-person meeting</h6>
																			<p class="mb-0">Set an address or place</p>
																		</div>
																	</div>
																</div>
															</a>
														</li>
														<li>
															<a href="#">
																<div class="item">
																	<div class="d-flex align-items-center">
																		<div class="i-icon text-primary">
																			<i class="fas fa-phone-alt"></i>
																		</div>
																		<div class="ml-2">
																			<h6>Phone call</h6>
																			<p class="mb-0">Inbound or outbound calls</p>
																		</div>
																	</div>
																</div>
															</a>
														</li>
														<li>
															<a href="#">
																<div class="item">
																	<div class="d-flex align-items-center">
																		<div class="i-icon text-success">
																			<i class="fas fa-video"></i>
																		</div>
																		<div class="ml-2">
																			<h6>Google Meet</h6>
																			<p class="mb-0">Web conference</p>
																		</div>
																	</div>
																</div>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>                            
									<div class="col-lg-12 mb-4">
										<label class="title mb-3">Dscription/Instructions</label>
										<div name="eventdescription" id="editor" style="height: 150px !important;">
										</div>  
									</div>
									<div class="col-lg-12 mb-4">
										<label class="title">Event link *</label>
										<input name="eventlink" type="text" class="form-control" value="calendly.com/rickoshea1234/">
									</div>
									<div class="col-lg-12 mt-4">
										<div class="d-flex flex-wrap align-items-ceter justify-content-center">
											<div class="btn btn-primary mr-4"><a href="<?php echo base_url(); ?>event" class="cancel-btn">Cancel</a></div>
											<!-- <div class="btn btn-outline-primary"><a href="<?php //echo base_url(); ?>event/addevent" class="save-btn">Save</a></div> -->
											<button class="btn btn-outline-primary">Save</button>
										</div>
									</div> 
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

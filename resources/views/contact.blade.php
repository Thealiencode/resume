@extends('layouts.app')

@section('content')
  <div id="main-content" class="single-page-content">
        <div id="primary" class="content-area">
            <div class="page-title">
				<h1>Contact</h1>                                
				<div class="page-subtitle">
                    <h4>Get in Touch</h4>
                </div>
            </div>
            
            <div id="content" class="page-content site-content single-post" role="main">
                
				<article id="post-187" class="post-187 page type-page status-publish hentry">
				<div class="entry-content">
					<div class="fw-page-builder-content"><section class="fw-main-row ">
				<div class="fw-container">
					<div class="row">
	
					</div>

				<div class="row">
	

					<div class=" col-xs-12 col-sm-4 ">
    					<div id="col_inner_7311a7394317832c0b256771fd211c13" class="fw-col-inner" data-paddings="0px 0px 0px 0px">
						
						<div id="info-list-611bae1264e2e" class="info-list-w-icon">
						
						<div class="info-block-w-icon">
		    			<div class="ci-icon">
		    		    	<i class="linecons linecons-phone"></i>
		    		    </div>
		    			<div class="ci-text">
		    		    <h4>081 2875 7189</h4>
		    		</div>
				</div>
				<div class="info-block-w-icon">
		    	<div class="ci-icon">
		        	<i class="linecons linecons-location"></i>
		        </div>
		    	<div class="ci-text">
		        	<h4>Uyo, Akwa ibom Nigeria</h4>
		        </div>
			</div>
			<div class="info-block-w-icon">
		    	<div class="ci-icon">
		        	<i class="linecons linecons-mail"></i>
		        </div>
		    <div class="ci-text">
		        <h4>goldmos1@gmail</h4>
		    </div>
		</div>
	</div>

	<div class="fw-divider-space" style="padding-top: 20px;"></div>
	</div>
</div>


<div class=" col-xs-12 col-sm-8 ">
    <div id="col_inner_b9986d93abfbd322e79534dd003c0cb6" class="fw-col-inner" data-paddings="0px 0px 0px 0px">
    	
<div class="block-title">
    <h2>How Can I Help You?</h2>
</div>

<form action="{{ url('contact') }}" action="#" method="post" novalidate="true">
	@csrf
	<div class="messages"></div>

	<div class="controls two-columns">
		<div class="fields clearfix">
			<div class="left-column">
				<div class="form-group form-group-with-icon has-error has-danger">
					<input id="form_name" type="text" name="name" class="form-control" placeholder="Full Name" required="required" >
					<div class="form-control-border"></div>
				</div>

				<div class="form-group form-group-with-icon">
					<input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required.">
					<div class="form-control-border"></div>
					<div class="help-block with-errors"></div>
				</div>

				<div class="form-group form-group-with-icon">
					<input id="form_name" type="text" name="subject" class="form-control" placeholder="Subject" required="required" data-error="Subject is required.">
					<div class="form-control-border"></div>
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="right-column">
				<div class="form-group form-group-with-icon">
					<textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="7" required="required" data-error="Please, leave me a message."></textarea>
					<div class="form-control-border"></div>
					<div class="help-block with-errors"></div>
				</div>
			</div>
		</div>

		
				
		<button type="submit" class="button btn-send disabled" >Send message</button>
	</div>
</form>

	</div>
</div>
</div>

	</div>
</section>
</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
            </div><!-- #content -->
        </div><!-- #primary -->
    </div>









	</div>
</section>
</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
            </div><!-- #content -->
        </div><!-- #primary -->
    </div><!-- #main-content -->
</div>
  
@endsection
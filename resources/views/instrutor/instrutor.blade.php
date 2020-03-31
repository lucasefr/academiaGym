@extends('layout.master')

<div class="tab-content">
		<!-- Personal Info Tab -->
		<div id="home" class="tab-pane <?php echo $tab == 'home'? 'active' : 'fade' ?>">
			<!-- form start -->
			<form method="post" id="main-form" action="{{ URL::Route('AdminProviderUpdate') }}"  data-toggle="validator" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?= $provider->id ?>">
				
					<!--span-->
					<div>
						<div>
							<div class="form-group">
								<label for="nome">nome*</label>
								<input type="text" class="form-control" id="nome" name="nome" value="nome" placeholder="nome" >
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div>
							<div class="form-group">
								<label for="identidade">Identidade*</label>
								<input type="text" class="form-control" id="identidade" name="identidade" value="identidade" placeholder="identidade" >
								<div class="help-block with-errors"></div>
							</div>
						</div>
						
						<div>
							<div class="form-group">
								<label for="cpf">CPF*</label>
								<input type="text" class="form-control" id="cpf" name="cpf" value="cpf" placeholder="cpf" >
								<div class="help-block with-errors"></div>
							</div>
						</div>

					
				<div class="box-footer text-right">
					<button id="update" type="submit" class="btn btn-success btn-flat">{{trans('keywords.save')}}</button>
				</div>
			</form>
		</div>
</div>
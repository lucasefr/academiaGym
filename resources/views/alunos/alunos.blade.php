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
						<div>
							<div class="form-group">
								<label for="logradouro">Logradouro*</label>
								<input type="text" class="form-control" id="logradouro" name="logradouro" value="logradouro" placeholder="logradouro" >
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div>
							<div class="form-group">
								<label for="numero">Numero*</label>
								<input type="text" class="form-control" id="numero" name="numero" value="numero" placeholder="numero" >
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div>
							<div class="form-group">
								<label for="bairro">Bairro*</label>
								<input type="text" class="form-control" id="bairro" name="bairro" value="bairro" placeholder="bairro" >
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div>
							<div class="form-group">
								<label for="cidade">Cidade*</label>
								<input type="text" class="form-control" id="cidade" name="cidade" value="cidade" placeholder="cidade" >
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div>
							<div class="form-group">
								<label for="estado">estado*</label>
								<input type="text" class="form-control" id="estado" name="estado" value="estado" placeholder="estado" >
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div>
							<div class="form-group">
								<label for="cep">CEP*</label>
								<input type="text" class="form-control" id="cep" name="cep" value="cep" placeholder="cep" >
								<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>

					
				<div class="box-footer text-right">
					<button id="update" type="submit" class="btn btn-success btn-flat">{{trans('keywords.save')}}</button>
				</div>
			</form>
		</div>
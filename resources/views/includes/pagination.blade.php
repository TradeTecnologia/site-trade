<div class="footer">
	@if(Auth::user()->role_id == 1 or Auth::user()->role_id == 2)
	<div class="actions">
		<ul>
			<li>
				<a href="javascript:void(0);" data-url="/{{ Request::segment(1) }}/{{ Request::segment(2) }}/acoes/ativar">
				    <span class="success"></span> Ativar
				</a>
				<a href="javascript:void(0);" data-url="/{{ Request::segment(1) }}/{{ Request::segment(2) }}/acoes/desativar">
				    <span class="default"></span> Desativar
				</a>
				<a href="javascript:void(0);" data-url="/{{ Request::segment(1) }}/{{ Request::segment(2) }}/acoes/excluir">
				    <span class="danger"></span> Excluir
				</a>
			</li>
		</ul>
		<button class="btn btn-outline btn-small">Ações</button>
	</div>
	@endif
	<div class="pagination"></div>
</div>
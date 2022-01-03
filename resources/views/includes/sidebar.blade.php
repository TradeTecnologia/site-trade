<div id="sidebar">
	<div class="logo flex-row flex-center">
		<img src="/img/logo.png">
	</div>
	<ul>
		<li class="<?php if (Request::segment(2) == "dashboard" or Request::segment(2) == ""){ echo "active"; } ?>">
			<a href="/sistema">
				<i class="material-icons">dashboard</i> Inicial
			</a>
		</li>
		
		<li>
			<a href="/" class="active" target="_blank">
				<i class="material-icons">transform</i> Site
			</a>
		</li>

		<li>
			<a href="http://tradeoff.stormfin.com.br/" target="_blank">
				<i class="material-icons">personal_video</i>Sistema TradeOff Storm
			</a>
		</li>
		
		<li class="<?php if (Request::segment(2) == "downloads"){ echo "active"; } ?>">
			<a href="/sistema/downloads" class="active">
				<i class="material-icons">file_download</i> Downloads
			</a>
		</li>
	</ul>
	<div class="user flex-row flex-center">
		<a href="/sistema/logout" class="flex-row flex-center">
			<div class="image"></div>
			<div class="text flex-column">
				<span>{{ Auth::user()->nome }}</span>
				<i class="material-icons">exit_to_app</i>
			</div>
		</a>
	</div>
</div>